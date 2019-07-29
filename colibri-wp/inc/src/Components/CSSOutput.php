<?php


namespace ColibriWP\Theme\Components;

use ColibriWP\Theme\ActiveCallback;
use ColibriWP\Theme\Core\ComponentBase;
use ColibriWP\Theme\Core\ComponentInterface;
use ColibriWP\Theme\Core\ConfigurableInterface;
use ColibriWP\Theme\Core\Hooks;
use ColibriWP\Theme\Core\Utils;
use ColibriWP\Theme\Customizer\ControlFactory;
use ColibriWP\Theme\Customizer\Formatter;
use ColibriWP\Theme\Defaults;
use ColibriWP\Theme\Theme;

class CSSOutput implements ComponentInterface {

	const NO_MEDIA               = "__colibri__no__media__";
	const GRADIENT_VALUE_PATTERN = 'linear-gradient(#angle#deg,#steps.0.color# #steps.0.position#% ,#steps.1.color# #steps.1.position#%)';
	const SELECTORS_PREFIX       = "#colibri ";

	public function render() {

		Hooks::colibri_add_filter( 'customizer_additional_js_data', function ( $data ) {
			$data['css_selectors_prefix'] = CSSOutput::SELECTORS_PREFIX;

			return $data;
		} );

		?>
        <style data-colibri-theme-style="true">
            <?php echo $this->getCSSOutput(); ?>
        </style>
		<?php
	}

	public static function normalizeOutput( $output ) {

		return array_replace(
			array(
				'selector'      => '',
				'media'         => CSSOutput::NO_MEDIA,
				'property'      => '',
				'value_pattern' => '%s',
			),
			$output
		);


	}

	private function prepareOutputDataForMod( $output, $mod, $default = '', $control_type = '' ) {
		$output = static::normalizeOutput( $output );

		$mod_value = \get_theme_mod( $mod, $default );
		$mod_value = Formatter::sanitizeControlValue( $control_type, $mod_value );
		if ( isset( $output['value'] ) && is_array( $output['value'] ) ) {
			$output['value'] = $output['value'][ $mod_value ];
		} else {
			$output['value'] = ComponentBase::mabyDeserializeModValue( $mod_value );
		}

		return $output;
	}

	/**
	 * @param $settings
	 *
	 * @return bool
	 * @throws \Exception
	 */
	private function activeRulesAreMet( $settings, $component ) {
		if ( ! array_key_exists( 'active_rules', $settings ) ) {
			return true;
		}

		$activeCallback = ( new ActiveCallback() )->setComponent( $component )->setRules( $settings['active_rules'] );

		return $activeCallback->applyRules();
	}

	/**
	 * @return array
	 * @throws \Exception
	 */
	private function getCSSData() {
		$data = array();

		$components = Theme::getInstance()->getRepository()->getAllDefinitions();

		foreach ( $components as $key => $component ) {
			$interfaces = class_implements( $component );

			if ( array_key_exists( ConfigurableInterface::class, $interfaces ) ) {
				/** @var ConfigurableInterface $component */
				$opts = (array) $component::options();

				if ( array_key_exists( 'settings', $opts ) && is_array( $opts['settings'] ) ) {
					foreach ( $opts['settings'] as $mod => $setting ) {

						if ( array_key_exists( 'css_output', $setting ) && is_array( $setting['css_output'] ) ) {


							if ( $this->activeRulesAreMet( $setting, $component ) ) {
								$default      = isset( $setting['default'] ) ? $setting['default'] : "";
								$control_type = Utils::pathGet( $setting, 'control.type' );


								foreach ( $setting['css_output'] as $css_output ) {
									$rule = $this->prepareOutputDataForMod(
										$css_output,
										$mod,
										$default,
										$control_type
									);

									if ( ! ( empty( $rule['selector'] ) || empty( $rule['property'] ) ) ) {
										$data[] = $rule;
									}
								}

							}
						}
					}
				}
			}
		}

		return $data;
	}

	private function groupDataByMedia( $data ) {
		$medias = array();

		foreach ( $data as $item ) {
			if ( ! array_key_exists( $item['media'], $medias ) ) {
				$medias[ $item['media'] ] = array();
			}

			$medias[ $item['media'] ][] = $item;
		}

		return $medias;
	}

	private function getValueInTree( $tree, $path ) {
		$path   = explode( ".", $path );
		$result = $tree;

		while ( count( $path ) && is_array( $tree ) ) {
			$next_key = array_shift( $path );
			if ( array_key_exists( $next_key, $result ) ) {
				$result = $result[ $next_key ];
			} else {
				$result = "";
				break;
			}
		}

		if ( is_array( $result ) ) {
			$result = "";
		}

		return $result;
	}

	private function getValue( $item ) {

		if ( is_array( $item['value'] ) ) {
			$that       = $this;
			$item_value = $item['value'];
			$value      = preg_replace_callback(
				"/#([\w\.]+)#/",
				function ( $matches ) use ( $item_value, $that ) {
					return $that->getValueInTree( $item_value, $matches[1] );
				},
				$item['value_pattern']
			);

			return $value;
		} else {

			if ( is_bool( $item['value'] ) ) {
				if ( $item['value'] ) {
					if ( isset( $item['true_value'] ) ) {
						return $item['true_value'];
					} else {
						return null;
					}

				} else {
					if ( isset( $item['false_value'] ) ) {
						return $item['false_value'];
					} else {
						return null;
					}
				}

			}
		}
		if ( $item['value'] ) {
			return sprintf( $item['value_pattern'], $item['value'] );
		}
	}

	private function generateCSSOutputForMedia( $media, $data ) {
		$selectors = array();

		foreach ( $data as $item ) {

			$selector = $item['selector'];

			if ( is_array( $selector ) ) {
				$selector = implode( ",", $selector );
			}

			if ( ! array_key_exists( $selector, $selectors ) ) {
				$selectors[ $selector ] = array();
			}
			$value = $this->getValue( $item );


			if ( $value !== null ) {
				$selectors[ $selector ][ $item['property'] ] = $value;
			}


		}

		$content = "";

		foreach ( $selectors as $selector => $rules ) {
			$rules_parts = array();

			foreach ( $rules as $prop => $value ) {
				$rules_parts[] = "{$prop}:{$value}";
			}

			$rules = implode( ";", $rules_parts );

			$content .= CSSOutput::SELECTORS_PREFIX . "{$selector}{{$rules}}";
		}

		if ( ! empty( $media ) ) {
			$content = "{$media}{{$content}}";
		}

		return $content;
	}

	private function generateCSSOutput() {
		$content = "";
		$data    = $this->getCSSData();
		$medias  = $this->groupDataByMedia( $data );

		if ( array_key_exists( CSSOutput::NO_MEDIA, $medias ) ) {
			$content .= $this->generateCSSOutputForMedia( '', $medias[ CSSOutput::NO_MEDIA ] );
		}

		if ( array_key_exists( CSSOutput::mobileMedia(), $medias ) ) {
			$content .= $this->generateCSSOutputForMedia(
				CSSOutput::mobileMedia(),
				$medias[ CSSOutput::mobileMedia() ]
			);
		}

		if ( array_key_exists( CSSOutput::tabletMedia(), $medias ) ) {
			$content .= $this->generateCSSOutputForMedia(
				CSSOutput::tabletMedia(),
				$medias[ CSSOutput::tabletMedia() ]
			);
		}

		return $content;

	}


	public function getCSSOutput() {
		return $this->generateCSSOutput();
	}


	public static function tabletMedia() {
		return Defaults::get( 'tablet_media' );
	}

	public static function mobileMedia() {
		return Defaults::get( 'mobile_media' );
	}


}
