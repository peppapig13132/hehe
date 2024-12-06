<?php
/**
 * The template for displaying all single posts.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Shapely
 */

get_header(); ?>
<?php $layout_class = shapely_get_layout_class(); ?>
	<div class="row">
		<?php
		if ( 'sidebar-left' == $layout_class ) :
			get_sidebar();
		endif;
		?>
		<?php //if ( is_active_sidebar( 'sidebar-right' ) ) : 
			//$primary_classes = 'col-md-8 mb-xs-24 '. esc_attr( $layout_class );
		//else : 
			$primary_classes = 'col-md-12 mb-xs-24';
		//endif; ?>
		
		<div id="primary" class="<?php echo $primary_classes; ?>">
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</div><!-- #primary -->
		<?php
		if ( 'sidebar-right' == $layout_class ) :
			//get_sidebar();
		endif;
		?>
	</div>
<?php
get_footer();
