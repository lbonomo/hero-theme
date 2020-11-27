<?php colibriwp_theme()->get( 'footer' )->render(); ?>
</div><!-- #page -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="wrap">
		<?php

		if ( has_nav_menu( 'social' ) ) :
			?>
			<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'social',
							'menu_class'     => 'social-links-menu',
							'depth'          => 1,
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>' . herotheme_get_svg( array( 'icon' => 'chain' ) ),
						)
					);
				?>
			</nav><!-- .social-navigation -->
			<?php
		endif;

		?>
	</div><!-- .wrap -->
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
