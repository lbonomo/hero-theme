<div data-colibri-id="7-h5" class="d-flex align-items-center text-lg-center text-md-center text-center justify-content-lg-center justify-content-md-center justify-content-center style-5 style-local-7-h5 position-relative h-element">
	<?php $component = \ColibriWP\Theme\View::getData( 'component' ); ?>

	<a href="<?php echo $component->getHomeUrl(); ?>" class="d-flex align-items-center">

	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.svg" class="h-logo__image h-logo__image_h logo-image style-5-image style-local-7-h5-image"/>

	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.svg" class="h-logo__alt-image h-logo__alt-image_h logo-alt-image style-5-image style-local-7-h5-image"/>
	</a>


	<?php
		if ( $component->getLayoutType() == 'text' ) { $component->printTextLogo(); }
	?>
</div>
