<?php
/* Start the Loop */
global $wp_query;
?>
	<?php /*<div class="row">*/ ?>
		  
		<?php if (category_description() != '') { ?>
			<div class="has-text-align-center has-large-font-size category-description">
				<?php echo category_description();?>
			</div>
		<?php } ?>
		
		<?php if ($wp_query->post_count > 2) {
			$template_type = 'grid-small-3';
			$intcount = 3;
		} else {
			$template_type = 'grid-small';
			$intcount = 2;
		}
		
		while ( have_posts() ) :
			the_post();
			$i = $wp_query->current_post + 1;
			/*
			 * Include the Post-Format-specific template for the content.
			 * If you want to override this in a child theme, then include a file
			 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
			 */

			get_template_part( 'template-parts/content', $template_type );

			/*if ( fmod( $i, (int) $intcount ) == 0 && $i != (int) $wp_query->post_count ) {
				echo '</div><div class="row">';
			} elseif ( $i == (int) $wp_query->post_count ) {
				continue;
			}*/
		endwhile;
		?>
	</div> 
<?php
