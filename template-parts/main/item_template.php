<div class="h-column h-column-container d-flex h-col-lg-12 h-col-md-12 h-col-12  masonry-item style-63-outer style-local-16-m6-outer">
  <div data-colibri-id="16-m6" class="d-flex h-flex-basis h-column__inner h-px-lg-0 h-px-md-0 h-px-0 v-inner-lg-0 v-inner-md-0 v-inner-0 style-63 style-local-16-m6 position-relative">
	<div class="w-100 h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
	  <div data-colibri-id="16-m7" class="colibri-post-thumbnail <?php colibriwp_post_thumbnail_classes(); ?> <?php colibriwp_post_thumb_placeholder_classes(); ?> style-64 style-local-16-m7 h-overflow-hidden position-relative">
		<div class="h-global-transition-all colibri-post-thumbnail-shortcode style-dynamic-16-m7-height">
			<?php
			colibriwp_post_thumbnail(
				array(
					'link' => false,
				)
			);
			?>
		</div>
		<div class="colibri-post-thumbnail-content align-items-lg-center align-items-md-center align-items-center flex-basis-100">
		  <div class="w-100 h-y-container"></div>
		</div>
	  </div>
	  <div data-colibri-id="16-m8" class="h-row-container gutters-row-lg-2 gutters-row-md-2 gutters-row-0 gutters-row-v-lg-2 gutters-row-v-md-2 gutters-row-v-2 style-65 style-local-16-m8 position-relative">
		<div class="h-row justify-content-lg-center justify-content-md-center justify-content-center align-items-lg-stretch align-items-md-stretch align-items-stretch gutters-col-lg-2 gutters-col-md-2 gutters-col-0 gutters-col-v-lg-2 gutters-col-v-md-2 gutters-col-v-2">
		  <div class="h-column h-column-container d-flex h-col-lg h-col-md h-col-auto style-66-outer style-local-16-m9-outer">
			<div data-colibri-id="16-m9" class="d-flex h-flex-basis h-column__inner h-px-lg-3 h-px-md-3 h-px-3 v-inner-lg-3 v-inner-md-3 v-inner-3 style-66 style-local-16-m9 position-relative">
			  <div class="w-100 h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
				<?php if ( apply_filters( 'colibriwp_show_post_meta', true ) ) : ?>
				<div data-colibri-id="16-m10" class="h-blog-meta h-global-transition-all style-67 style-local-16-m10 position-relative">
				  <div name="1" class="metadata-item">
					<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
					  <span class="h-svg-icon">
						<!--Icon by Font Awesome (https://fontawesome.com)-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="user" viewBox="0 0 1354.8114 1896.0833">
						  <path d="M1280 1399q0 109-62.5 187t-150.5 78H213q-88 0-150.5-78T0 1399q0-85 8.5-160.5t31.5-152 58.5-131 94-89T327 832q131 128 313 128t313-128q76 0 134.5 34.5t94 89 58.5 131 31.5 152 8.5 160.5zm-256-887q0 159-112.5 271.5T640 896 368.5 783.5 256 512t112.5-271.5T640 128t271.5 112.5T1024 512z"></path>
						</svg>
					  </span>
					  <?php echo get_the_author_meta( 'display_name', get_the_author_meta( 'ID' ) ); ?>
					</a>
					<span class="meta-separator">|</span>
				  </div>
				  <div name="2" class="metadata-item">
					<a href="<?php colibriwp_post_meta_date_url(); ?>">
					  <span class="h-svg-icon">
						<!--Icon by Font Awesome (https://fontawesome.com)-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="calendar" viewBox="0 0 1672.2646 1896.0833">
						  <path d="M128 1664h288v-288H128v288zm352 0h320v-288H480v288zm-352-352h288V992H128v320zm352 0h320V992H480v320zM128 928h288V640H128v288zm736 736h320v-288H864v288zM480 928h320V640H480v288zm768 736h288v-288h-288v288zm-384-352h320V992H864v320zM512 448V160q0-13-9.5-22.5T480 128h-64q-13 0-22.5 9.5T384 160v288q0 13 9.5 22.5T416 480h64q13 0 22.5-9.5T512 448zm736 864h288V992h-288v320zM864 928h320V640H864v288zm384 0h288V640h-288v288zm32-480V160q0-13-9.5-22.5T1248 128h-64q-13 0-22.5 9.5T1152 160v288q0 13 9.5 22.5t22.5 9.5h64q13 0 22.5-9.5t9.5-22.5zm384-64v1280q0 52-38 90t-90 38H128q-52 0-90-38t-38-90V384q0-52 38-90t90-38h128v-96q0-66 47-113T416 0h64q66 0 113 47t47 113v96h384v-96q0-66 47-113t113-47h64q66 0 113 47t47 113v96h128q52 0 90 38t38 90z"></path>
						</svg>
					  </span>
					  <?php colibriwp_the_date( 'F j, Y' ); ?>
					</a>
					<span class="meta-separator">|</span>
				  </div>
				  <div name="3" class="metadata-item">
					<a href="<?php colibriwp_post_meta_time_url(); ?>">
					  <span class="h-svg-icon">
						<!--Icon by Font Awesome (https://fontawesome.com)-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="clock-o" viewBox="0 0 1536 1896.0833">
						  <path d="M896 544v448q0 14-9 23t-23 9H544q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h224V544q0-14 9-23t23-9h64q14 0 23 9t9 23zm416 352q0-148-73-273t-198-198-273-73-273 73-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273zm224 0q0 209-103 385.5T1153.5 1561 768 1664t-385.5-103T103 1281.5 0 896t103-385.5T382.5 231 768 128t385.5 103T1433 510.5 1536 896z"></path>
						</svg>
					  </span>
					  <?php echo get_the_time(); ?>
					</a>
					<span class="meta-separator">|</span>
				  </div>
				  <div name="4" class="metadata-item">
					<a href="<?php comments_link(); ?>">
					  <span class="h-svg-icon">
						<!--Icon by Font Awesome (https://fontawesome.com)-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="comment" viewBox="0 0 1792 1896.0833">
						  <path d="M1792 896q0 174-120 321.5t-326 233-450 85.5q-70 0-145-8-198 175-460 242-49 14-114 22-17 2-30.5-9t-17.5-29v-1q-3-4-.5-12t2-10 4.5-9.5l6-9 7-8.5 8-9q7-8 31-34.5t34.5-38 31-39.5 32.5-51 27-59 26-76q-157-89-247.5-220T0 896q0-130 71-248.5T262 443t286-136.5T896 256q244 0 450 85.5t326 233T1792 896z"></path>
						</svg>
					  </span>
					  <?php echo get_comments_number(); ?>
					</a>
					<span class="metadata-suffix">
					  <?php esc_html_e( 'comments', 'colibri-wp' ); ?>
					</span>
				  </div>
				</div>
				<?php endif; ?>
				<div data-colibri-id="16-m11" class="style-68 style-local-16-m11 position-relative">
				  <div class="h-global-transition-all colibri-post-content">
					<?php the_content(); ?>
				  </div>
				</div>
				<div data-colibri-id="16-m12" class="h-row-container gutters-row-lg-0 gutters-row-md-0 gutters-row-0 gutters-row-v-lg-0 gutters-row-v-md-0 gutters-row-v-0 style-69 style-local-16-m12 position-relative">
				  <div class="h-row justify-content-lg-center justify-content-md-center justify-content-center align-items-lg-stretch align-items-md-stretch align-items-stretch gutters-col-lg-0 gutters-col-md-0 gutters-col-0 gutters-col-v-lg-0 gutters-col-v-md-0 gutters-col-v-0">
					<div class="h-column h-column-container d-flex h-col-lg h-col-md h-col-auto style-70-outer style-local-16-m13-outer">
					  <div data-colibri-id="16-m13" class="d-flex h-flex-basis h-column__inner h-px-lg-0 h-px-md-0 h-px-0 v-inner-lg-0 v-inner-md-0 v-inner-0 style-70 style-local-16-m13 position-relative">
						<div class="w-100 h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
						  <div data-colibri-id="16-m14" class="h-global-transition-all h-heading style-71 style-local-16-m14 position-relative h-element">
							<h6>Category</h6>
						  </div>
						  <div data-colibri-id="16-m15" class="h-blog-categories empty-preview style-72 style-local-16-m15 position-relative h-element">
							<div class="h-global-transition-all">
								<?php
								colibriwp_post_categories(
									array(
										'prefix' => '',
									)
								);
								?>
							</div>
						  </div>
						</div>
					  </div>
					</div>
				  </div>
				</div>
				<div data-colibri-id="16-m16" class="h-global-transition-all h-heading style-71 style-local-16-m16 position-relative h-element">
				  <h6>Tags</h6>
				</div>
				<div data-colibri-id="16-m17" class="h-blog-tags empty-preview style-73 style-local-16-m17 position-relative">
				  <div class="h-global-transition-all">
					<?php
					colibriwp_post_tags(
						array(
							'prefix' => '',
						)
					);
					?>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	  <div data-colibri-id="16-m18" class="h-row-container gutters-row-lg-0 gutters-row-md-0 gutters-row-0 gutters-row-v-lg-0 gutters-row-v-md-0 gutters-row-v-0 style-74 style-local-16-m18 position-relative">
		<div class="h-row justify-content-lg-center justify-content-md-center justify-content-center align-items-lg-stretch align-items-md-stretch align-items-stretch gutters-col-lg-0 gutters-col-md-0 gutters-col-0 gutters-col-v-lg-0 gutters-col-v-md-0 gutters-col-v-0">
		  <div class="h-column h-column-container d-flex h-col-lg-auto h-col-md-auto h-col-auto style-75-outer style-local-16-m19-outer">
			<div data-colibri-id="16-m19" class="d-flex h-flex-basis h-column__inner h-px-lg-1 h-px-md-1 h-px-1 v-inner-lg-1 v-inner-md-1 v-inner-1 style-75 style-local-16-m19 position-relative">
			  <div class="w-100 h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
				<div data-colibri-id="16-m20" class="post-nav-button hide-title style-76 style-local-16-m20 position-relative">
				  <div class="h-global-transition-all">
					<?php
					colibriwp_post_nav_button(
						array(
							'type'         => 'prev',
							'prev_post'    => __( 'Previous post', 'colibri-wp' ),
							'next_post'    => __( 'Next post:', 'colibri-wp' ),
							'show_title'   => false,
							'title_length' => 30,
						)
					);
					?>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="h-column h-column-container d-flex h-col-lg-auto h-col-md-auto h-col-auto style-75-outer style-local-16-m21-outer">
			<div data-colibri-id="16-m21" class="d-flex h-flex-basis h-column__inner h-px-lg-1 h-px-md-1 h-px-1 v-inner-lg-1 v-inner-md-1 v-inner-1 style-75 style-local-16-m21 position-relative">
			  <div class="w-100 h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
				<div data-colibri-id="16-m22" class="post-nav-button hide-title style-77 style-local-16-m22 position-relative">
				  <div class="h-global-transition-all">
					<?php
					colibriwp_post_nav_button(
						array(
							'type'         => 'next',
							'prev_post'    => __( 'Previous post:', 'colibri-wp' ),
							'next_post'    => __( 'Next post', 'colibri-wp' ),
							'show_title'   => false,
							'title_length' => 30,
						)
					);
					?>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </div>
</div>
