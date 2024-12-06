<?php
/*
Template Name: Quiz щедрый вторник
*/
?>
<?php
get_header(); ?>
<link rel="stylesheet" href="/wp-content/themes/shapely.1.2.8/shapely/assets/css/quiz.css">
<?php $layout_class = shapely_get_layout_class(); ?>
	<div class="row">
		<?php
		if ( 'sidebar-left' == $layout_class ) :
			get_sidebar();
		endif;
		?>
		
		<?php //if ( 'sidebar-right' == $layout_class ) :
			//$primary_classes = 'col-md-8 mb-xs-24'. esc_attr( $layout_class );
		//else : 
			$primary_classes = 'col-md-12 mb-xs-24';
		//endif; ?>
		
		<div id="primary" class="<?php echo esc_attr( $primary_classes ); ?>">
																<?php
																while ( have_posts() ) :
																	the_post();

																	get_template_part( 'template-parts/content', 'page' );

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
    <!-- start Quiz button -->
    <div class="start_btn"><button>Начать игру</button></div>
    <div class="quiz_overlay">
    <!-- Quiz Box -->
    <div class="quiz_box">
        <div class="close_quiz">
            <i class="fas fa-times"></i>
        </div>
        <section class="section_quiz">
            <div class="que_text">
                <!-- Here I've inserted question from JavaScript -->
            </div>
            <div class="option_list">
                <!-- Here I've inserted options from JavaScript -->
            </div>
        </section>

        <!-- footer of Quiz Box -->
        <div class="foot_quiz">
            <button class="next_btn">Следующий вопрос</button>
        </div>
    </div>

    <!-- Result Box -->
    <div class="result_box">
        <div class="icon">
            <img src="/img/ico.png" class="custom-logo logo" itemprop="logo">
        </div>
        <div class="complete_text">Иногда выбор невозможен. Помоги тому, кому можешь сейчас</div>
		<div style="margin-bottom: 0;margin-top: 20px;" class="share-block">
					<i class="fa fa-indent fa-share-alt" aria-hidden="true"></i> <?php esc_html_e( '[:en]Share on social networks[:ru]Поделиться в соц. сетях[:es]Compartir en social redes[:]', 'shapely' ); ?>: <?php echo do_shortcode("[addtoany]"); ?>
		</div>
        <div class="buttons">
            <a class="donation" style="color: #fff" href="/#give_forms_quiz">Помочь сейчас</a>
            <button class="quit">Повторить опрос</button>
        </div>
    </div>
    </div>
    <script src="/wp-content/themes/shapely.1.2.8/shapely/assets/js/script_quiz.js"></script>
<?php
get_footer();
?>
