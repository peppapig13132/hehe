<?php
/**
 * Template part for displaying posts.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shapely
 */

?>

	
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-content post-grid-small col-md-4 col-sm-6 pt-cv-content-item' ); ?> >
		<div class="pt-cv-ifield">
			<!--header class="entry-header nolist"-->
				<?php
				$category      = get_the_category();
				$show_category = true;
				if ( is_category() ) {
					$show_category = get_theme_mod( 'show_category_on_category_page', 1 );
				}
				//$image = '<img class="wp-post-image" alt="" src="' . get_template_directory_uri() . '/assets/images/placeholder.jpg" />';
				$image = '';
				if ( has_post_thumbnail() ) {
					$image = get_the_post_thumbnail( get_the_ID(), 'medium' );
				}
				$allowed_tags = array(
					'img'      => array(
						'data-srcset' => true,
						'data-src'    => true,
						'srcset'      => true,
						'sizes'       => true,
						'src'         => true,
						'class'       => true,
						'alt'         => true,
						'width'       => true,
						'height'      => true,
					),
					'noscript' => array(),
				);
				?>
				<a href="<?php echo esc_url( get_the_permalink() ); ?>">
					<?php echo wp_kses( $image, $allowed_tags ); ?>
				</a>

				<?php /*if ( isset( $category[0] ) && $show_category ) : ?>
					<span class="shapely-category">
						<a href="<?php echo esc_url( get_category_link( $category[0]->term_id ) ); ?>">
							<?php echo esc_html( $category[0]->name ); ?>
						</a>
					</span>
				<?php endif;*/ ?>
			<!--/header--><!-- .entry-header -->
			<!--div class="entry-content"-->
				<h2 class="post-title pt-cv-title">
					<a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php echo wp_trim_words( get_the_title(), 9 ); ?></a>
				</h2>

			
				<div class="pt-cv-content">
					<?php
					//the_content(
						/*sprintf(
							 translators: %s: Name of current post. */
									/*wp_kses(
										__( 'Read more %s <span class="meta-nav">&rarr;</span>', 'shapely' ), array(
											'span' => array(
												'class' => array(),
											),
										)
									),
							the_title( '<span class="screen-reader-text">"', '"</span>', false )
						)*/
					//);
					//the_excerpt();
					
					
					if($category[0]->term_id != 310) {
						the_excerpt();
					} else {
						the_excerpt();
						$fields = get_fields($post->ID);
						if( $fields ): ?>
							<div class="fields-list-blog">
								<?php foreach( $fields as $name => $value ): ?>
									<?php if ($value != '') {
										$field = get_field_object($name); ?>
										<?php if ($field['type'] != 'url') { ?>
											<div class="field-row field-<?php echo $name; ?> field-type-<?php echo $field['type']; ?>">
												
												<?php if ( $field['type'] != 'textarea' ) : ?>
													<b class="field-label"><?php echo $field['label']; ?></b>: 
													
													<?php if ( $field['type'] == 'select' ) : ?>
														<span class="field-value field-multi-value value-count-<?php echo count($value); ?>">
															<?php $i= 1; ?>
															<?php $separator = '<span class="field-multi-value-separator">, </span>'; ?>
															<?php foreach( $value as $value_one ): ?>
																<?php if ( $i == count($value) ) { $separator = ''; } ?>
																<?php if ( $value_one == 'Гватемала' ) {$value_one = esc_html_e( '[:en]Guatemala[:ru]Гватемала[:es]Guatemala[:]', 'shapely');} ?>
																<?php if ( $value_one == 'Никарагуа' ) {$value_one = esc_html_e( '[:en]Nicaragua[:ru]Никарагуа[:es]Nicaragua[:]', 'shapely');} ?>
																<span class="field-multi-value-row"><?php echo $value_one; ?></span><?php echo $separator; ?> 
																<?php $i++; ?>
															 <?php endforeach; ?>
														</span>
													<?php else: ?>	
														<span class="field-value"><?php echo $value; ?></span>
													<?php endif; ?>
													
												<?php endif; ?>
												
											</div>
										<?php }; ?>
									<?php } ?>
								<?php endforeach; ?>
							</div>
						<?php endif; 
					}
					

					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'shapely' ),
							'after'  => '</div>',
						)
					);
					?>
				</div>
				
				<?php if ( isset( $category[0] ) && $show_category && ($category[0]->term_id == 32) ) : ?>	
					<div class="entry-meta pt-cv-meta-fields">
						<?php
						shapely_posted_on_no_cat();
						?>
						<!-- post-meta -->
					</div>
				<?php endif; ?>
				
			<!--/div--><!-- .entry-content -->
		</div><!-- .pt-cv-ifield -->
	</article><!-- #post-## -->
<?php

