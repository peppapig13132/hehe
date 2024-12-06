<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shapely
 */

?>

<?php if ( ! is_page_template( 'page-templates/template-home.php' ) && ! is_404() && ! is_page_template( 'page-templates/template-widget.php' ) ) : ?>
  <?php dynamic_sidebar( 'content-bottom' ); ?>
<?php endif; ?>


</div><!-- #main -->
<?php dynamic_sidebar( 'content-bottom-full' ); ?>
</section><!-- section -->

<div class="footer-callout">
	<?php shapely_footer_callout(); ?>
</div>

<footer id="colophon" class="site-footer footer bg-dark" role="contentinfo">
	<div class="container footer-inner">
		<div class="row">
			<?php get_sidebar( 'footer' ); ?>
		</div>

		<div class="row">
			<div class="site-info col-sm-3">
				<img class="logo-footer" src="/img/logo-mono.png" />
				<div class="copyright-text">
				  <?php //echo wp_kses_post( get_theme_mod( 'shapely_footer_copyright' ) ); ?>
				  © <?php echo get_bloginfo('name'); ?><br />
				  <?php esc_html_e( '[:en] All rights reserved.[:ru] Все права защищены.[:es] Todos los derechos reservados.[:]', 'shapely' ); ?>
				  <?php echo get_bloginfo('description'); ?>
				</div>
				<div class="registration_info">
				<div>
				  <?php esc_html_e( '[:en] Registered as a nonprofit organization in Guatemala, Nicaragua and the USA[:es]
					Registrada como organización sin ánimo de lucro en Guatemala, Nicaragua y EE.UU.[:]', 'shapely' ); ?>
				</div>

				<div>
<?php esc_html_e( '[:en] Health & Help is a recognized 501(c)(3) not-for-profit organization by the IRS. EIN: 81-3432192
[:es]Health & Help es una organización 501(c)(3) sin ánimo de lucro reconocida por el IRS. EIN: 81-3432192
					[:]', 'shapely' ); ?>
				</div>

				</div>
			</div><!-- .site-info -->



			<div class = "guidestar col-sm-1">
			  <div class="guiedstar-img" style="width: 100px; margin-top: 30px;">
	                              <a href="https://www.guidestar.org/profile/shared/44b21858-b537-435b-a500-25ac0bdc4218" target="_blank"><img src="/img/guidestar.webp" /></a>
	                  </div>
			</div>

                        <script type="text/javascript">
                         gnp_request = {"slug" : "health-help", "color-set" : 1 , "campaign" : 62};
                        </script>
                        <style> div.gnp_trb {  } </style>
                        <script src="https://greatnonprofits.org/js/api/badge_toprated.js" type="text/javascript"> </script>

                        <div class="col-sm-2 gnp_trb" id="gnp_trb"  style="background-color: transparent; margin-top: 26px;">
                          <a href="https://greatnonprofits.org/org/health-help">
<!--                            <img width="136" height="102" src="//cdn.greatnonprofits.org//img/2023-top-rated-awards-badge-embed.png?id=996939712" alt="Health &amp; Help Nonprofit Overview and Reviews on GreatNonprofits!" title="2023 Top-rated nonprofits and charities" style="background-color: transparent;">-->
                              <img width="136" height="102" src="//cdn.greatnonprofits.org//img/2024-top-rated-awards-badge-embed.png?id=996939712"  alt="Health & Help Nonprofit Overview and Reviews on GreatNonprofits" title="2024 Top-rated nonprofits and charities" style="background-color: transparent;">
                          </a>
                        </div>




			<div class="col-sm-6 col-md-offset-1 text-right bottom-navigation-rhs" style="margin-left: 0px;">
			  <div class="main-navigation footer-navigation footer-navigation-1">
				<?php wp_nav_menu( array(
                                    'menu' => '320'
                                ) ); ?>

			  </div>
			  <div class="flex-row text-center" style="text-align: left;">
			    <div class="module">
			      <div class="footer-navigation-2">
				<?php /* wp_nav_menu( array(
				    'menu' => '319'
				) ); */ ?>
			      </div>
			    </div>
			    <div class="module right site-social-container footer-social">
			      <?php shapely_social_icons(); ?>
			    </div>
			  </div>
			</div>
		</div>
	</div>

	<a class="btn btn-sm fade-half back-to-top inner-link" href="#top"><i class="fa fa-angle-up"></i></a>
</footer><!-- #colophon -->
</div>
</div><!-- #page -->

<script>
jQuery(document).ready(function($) {
	$('.item-language-en a').attr('href', 'https://he-he.org');
	$('.item-language-es a').attr('href', 'https://he-he.org/es');
	$('.monthly_donation').text('Monthly donations');
	});
</script>
<?php wp_footer(); ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TW4947T');</script>
<!-- End Google Tag Manager -->
</body>
</html>

