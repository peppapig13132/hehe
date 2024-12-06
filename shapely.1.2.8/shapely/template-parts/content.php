<?php
/**
 * Template part for displaying posts.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shapely
 */

$dropcaps      = get_theme_mod( 'first_letter_caps', true );
$enable_tags   = get_theme_mod( 'tags_post_meta', true );
$post_author   = get_theme_mod( 'post_author_area', true );
$left_side     = get_theme_mod( 'post_author_left_side', false );
$post_title    = get_theme_mod( 'title_above_post', true );
$post_category = get_theme_mod( 'post_category', true );

/*$field_group_key_1 = 'group_5e68dd3cccf93';
$field_group_key_2 = 'group_5e8ecda1807bc';
$fields1 = acf_get_fields($field_group_key_1);
$fields2 = acf_get_fields($field_group_key_2);*/

$group_ID = 3014;
$fields = array();
//$fields = acf_get_fields('acf/field_group/get_fields', $fields, $group_ID);
//$fields = acf_get_fields('group_5e8ecda1807bc');
$fields = get_fields();

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-content post-grid-wide' ); ?>>
	<header class="entry-header nolist">
		<?php
		$category = get_the_category(); ?>
		
		<?php if ( $category[0]->term_id == 32 ) : ?>
			<div class="entry-date has-text-align-center"><i class="fa fa-indent fa-calendar" aria-hidden="true"></i> <?php echo get_the_date(); ?></div>
		<?php endif; ?>

		<?php if( $fields ): ?>
			<div class="fields-list">
				<?php foreach( $fields as $name => $value ): ?>
					<?php if ($value != '') {
						$field = get_field_object($name);
						//$group = get_field_object($key); ?>
						<?php if (($field['key'] == 'field_5e8d8f85c7636') || ($field['key'] == 'field_5e8d900f4cead') || ($field['key'] == 'field_5e8db3e890601') || ($field['key'] == 'field_5e8ece8c4fad0')) { ?>
							<div class="field-row field-<?php echo $name; ?> field-type-<?php echo $field['type']; ?> field-key-<?php echo $field['key']; ?>">
								
								<?php if ( $field['type'] != 'textarea' ) : ?>
									<b class="field-label"><?php echo $field['label']; ?></b>: 
								<?php endif; ?>
								
								<?php if ( $field['type'] == 'select' ) : ?>
									<span class="field-value field-multi-value value-count-<?php echo count($value); ?>">
										<?php $i= 1; ?>
										<?php $separator = '<span class="field-multi-value-separator">, </span>'; ?>
										<?php foreach( $value as $value_one ): ?>
											<?php if ( $i == count($value) ) { $separator = ''; } ?>
											<span class="field-multi-value-row"><?php echo $value_one; ?></span><?php echo $separator; ?> 
											<?php $i++; ?>
										 <?php endforeach; ?>
									</span>
								<?php else: ?>	
									<span class="field-value"><?php echo $value; ?></span>
								<?php endif; ?>
								
							</div>
						<?php } ?>	
					<?php } ?>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
		
		
		<?php if ( has_post_thumbnail() ) {
			$layout = shapely_get_layout_class();
			$size   = 'shapely-full-hd';

			if ( 'full-width' == $layout ) {
				$size = 'shapely-full-hd';
			}
			$image = get_the_post_thumbnail( get_the_ID(), $size );

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

		<?php echo wp_kses( $image, $allowed_tags ); ?>
		
		<?php if( $fields ): ?>
			<div class="fields-list">
				<?php foreach( $fields as $name => $value ): ?>
					<?php if ($value != '') {
						$field = get_field_object($name);
						//$group = get_field_object($key); ?>
						<?php if (($field['type'] != 'url') && ($field['key'] != 'field_5e8d8f85c7636') && ($field['key'] != 'field_5e8d900f4cead') && ($field['key'] != 'field_5e8db3e890601') && ($field['key'] != 'field_5e8ece8c4fad0')) { ?>
							<div class="field-row field-<?php echo $name; ?> field-type-<?php echo $field['type']; ?> field-key-<?php echo $field['key']; ?>">
								
								<?php if ( $field['type'] != 'textarea' ) : ?>
									<b class="field-label"><?php echo $field['label']; ?></b>: 
								<?php endif; ?>
								
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
								
							</div>
						<?php } ?>	
					<?php } ?>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>


		<?php /*if ( isset( $category[0] ) && $post_category ) : ?>
			<span class="shapely-category">
				<a href="<?php echo esc_url( get_category_link( $category[0]->term_id ) ); ?>">
					<?php echo esc_html( $category[0]->name ); ?>
				</a>
			</span>
		<?php endif;*/ ?>
		<?php
		}// End if().
	?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php /*if ( $post_title ) : ?>
			<h2 class="post-title entry-title">
				<a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php echo wp_trim_words( get_the_title(), 9 ); ?></a>
			</h2>
		<?php endif*/ ?>

		<?php if ( isset( $category[0] ) && $show_category && ($category[0]->term_id == 32) ) : ?>	
				<div class="entry-meta">
					<?php
					shapely_posted_on_no_cat();
					?>
					<!-- post-meta -->
				</div>
			<?php endif; ?>

		<?php if ( $post_author && $left_side ) : ?>
			<div class="row">
				<div class="col-md-3 col-xs-12 author-bio-left-side">
					<?php
					//shapely_author_bio();
					?>
				</div>
				<div class="col-md-9 col-xs-12 shapely-content <?php echo $dropcaps ? 'dropcaps-content' : ''; ?>">
					<?php
					the_content();

					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'shapely' ),
							'after'  => '</div>',
						)
					);
					?>
				</div>
			</div>
		<?php else : ?>
			<div class="shapely-content <?php echo $dropcaps ? 'dropcaps-content' : ''; ?>">
				<?php
				the_content();

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'shapely' ),
						'after'  => '</div>',
					)
				);
				?>
			</div>
		<?php endif; ?>
		
		<?php if( $fields ): ?>
			<div class="container">
				<div class="fields-list fields-list-bottom">
					<?php foreach( $fields as $name => $value ): ?>
						<?php $field = get_field_object($name); ?>
							<?php if (($field['type'] == 'url') && ($value != '')) { ?>
								<?php echo do_shortcode("[do_widget id=custom_html-5]"); ?>
								<?php echo do_shortcode("[do_widget id=custom_html-7]"); ?>
								<div class="field-row-url has-text-align-center field-<?php echo $name; ?> field-type-<?php echo $field['type']; ?>">
		
									<a target="_blank" href="<?php echo $value; ?>" class="btn btn-filled field-value"><?php echo $field['instructions']; ?></a>
									
								</div>
							<?php } ?>	

					<?php endforeach; ?>
				</div>
			</div>
		<?php endif; ?>
		
		<?php if (( $category[0]->term_id == 32 ) || ( $category[0]->term_id == 312 )) : ?>
			<div class="container">
				<div class="share-block">
					<i class="fa fa-indent fa-share-alt" aria-hidden="true"></i> <?php esc_html_e( '[:en]Share on social networks[:ru]Поделиться в соц. сетях[:es]Compartir en social redes[:]', 'shapely' ); ?>: <?php echo do_shortcode("[addtoany]"); ?>
				</div>
			</div>
		<?php endif; ?>
		
	</div><!-- .entry-content -->
	
	<div class="container page-content-bottom">
		<?php if ( isset( $category[0] ) && $post_category ) : ?>

			
				<?php if ( $category[0]->term_id == 32 ) : ?>
				
					<?php /*
					<!-- Begin Mailchimp Signup Form -->
					<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
					<style type="text/css">
					  #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }

					</style>
					<div id="mc_embed_signup" style="display: none;">
						<form action="https://he-he.us4.list-manage.com/subscribe/post?u=2dcba50b9159af69775259a0d&amp;id=69572b56b8" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							<div id="mc_embed_signup_scroll">
							  <h2>Subscribe</h2>
							<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
							<div class="mc-field-group">
							  <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
							</label>
							  <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
							</div>
							<div class="mc-field-group">
							  <label for="mce-FNAME">First Name </label>
							  <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
							</div>
							<div class="mc-field-group">
							  <label for="mce-LNAME">Last Name </label>
							  <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
							</div>
							<div class="mc-field-group size1of2">
							  <label for="mce-BIRTHDAY-month">Birthday </label>
							  <div class="datefield">
								<span class="subfield monthfield"><input class="birthday " type="text" pattern="[0-9]*" value="" placeholder="MM" size="2" maxlength="2" name="BIRTHDAY[month]" id="mce-BIRTHDAY-month"></span> / 
								<span class="subfield dayfield"><input class="birthday " type="text" pattern="[0-9]*" value="" placeholder="DD" size="2" maxlength="2" name="BIRTHDAY[day]" id="mce-BIRTHDAY-day"></span> 
								<span class="small-meta nowrap">( mm / dd )</span>
							  </div>
							</div>  <div id="mce-responses" class="clear">
								<div class="response" id="mce-error-response" style="display:none"></div>
								<div class="response" id="mce-success-response" style="display:none"></div>
							  </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
								<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_2dcba50b9159af69775259a0d_69572b56b8" tabindex="-1" value=""></div>
								<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
							</div>
						</form>
					</div>
					 
					<!--End mc_embed_signup-->
					*/ ?>
					
					<h2 class="widget-title has-text-align-center"><?php esc_html_e( '[:en]Last news[:ru]Последние новости[:es]Últimas noticias[:]', 'shapely' ); ?></h2>
					<?php echo do_shortcode("[pt_view id='3ea2e2ew9y']"); ?>
					<?php //echo do_shortcode("[do_widget id=custom_html-3]"); ?>
				<?php endif; ?>
					
				<div class="has-text-align-center more-cat">
					<a class="btn btn-filled" id="more-cat-<?php echo $category[0]->term_id; ?>" href="<?php echo esc_url( get_category_link( $category[0]->term_id ) ); ?>">
						<?php echo esc_html_e( '[:en]All[:ru]Все[:es]Todas[:]', 'shapely' ). " ".esc_html( $category[0]->name ); ?>
					</a>				
				</div>
		

		<?php endif; ?>

		<?php
		if ( is_single() ) :
			/*$prev = get_previous_post_link();
			$prev = str_replace( '&laquo;', '<div class="wrapper"><span class="fa fa-angle-left"></span>', $prev );
			$prev = str_replace( '</a>', '</a></div>', $prev );
			$next = get_next_post_link();
			$next = str_replace( '&raquo;', '<span class="fa fa-angle-right"></span></div>', $next );
			$next = str_replace( '<a', '<div class="wrapper"><a', $next );
			?>
			<div class="shapely-next-prev row">
				<div class="col-md-6 text-left">
					<?php echo wp_kses_post( $prev ); ?>
				</div>
				<div class="col-md-6 text-right">
					<?php echo wp_kses_post( $next ); ?>
				</div>
			</div>

			<?php*/
			/*if ( $post_author && ! $left_side ) :
				shapely_author_bio();
			endif;*/

			if ( $enable_tags ) :
				$tags_list = get_the_tag_list( '', ' ' );
				echo ! empty( $tags_list ) ? '<div class="shapely-tags"><span class="fa fa-tags"></span>' . $tags_list . '</div>' : '';
			endif;
			?>

			<?php //do_action( 'shapely_single_after_article' ); ?>
		<?php endif; ?>
	</div>
</article>
