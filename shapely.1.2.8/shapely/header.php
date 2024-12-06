<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shapely
 */
?>
<?php

$shapely_transparent_header         = get_theme_mod( 'shapely_transparent_header', 0 );
$shapely_transparent_header_opacity = get_theme_mod( 'shapely_sticky_header_transparency', 100 );

if ( 1 == $shapely_transparent_header && $shapely_transparent_header_opacity ) {
	if ( $shapely_transparent_header_opacity < 100 ) {
		$style = 'style="background: rgba(255, 255, 255, 0.' . esc_attr( $shapely_transparent_header_opacity ) . ');"';
	} else {
		$style = 'style="background: rgba(255, 255, 255, ' . esc_attr( $shapely_transparent_header_opacity ) . ');"';
	}
} else {
	$style = '';
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="shortcut icon" href="/img/ico.png" type="image/png" />
	<?php
		if (is_front_page()) {
			echo '<link rel="preload" as="image" href="/wp-content/themes/shapely.1.2.8/shapely/assets/images/preview.jpg.webp">';
		}
		$url = $_SERVER['REQUEST_URI'];
		if(stristr($url, 'donations') === FALSE) {
		} else {
			echo '<link rel="stylesheet" href="/wp-content/themes/shapely.1.2.8/shapely/assets/css/custom_form.css">';
		}
		wp_head();
		?>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TW4947T');</script>
<!-- End Google Tag Manager -->
	
	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window,document,'script',
	'//connect.facebook.net/en_US/fbevents.js');
	 fbq('init', '1594337564058155'); 
	fbq('track', 'PageView');
	</script>
	<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","//chimpstatic.com/mcjs-connected/js/users/2dcba50b9159af69775259a0d/28e75401ea6498f5c168592bc.js");
    </script>
</head>
<body <?php body_class(); ?>>
<?php if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
} ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TW4947T"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'shapely' ); ?></a>
	<header id="masthead" class="site-header<?php echo get_theme_mod( 'mobile_menu_on_desktop', false ) ? ' mobile-menu' : ''; ?>" role="banner">
		<div class="nav-container nav-container-fix">
			<div class="container nav-bar">
				<div class="flex-row">
					<div class="module left site-logo-container visible-lg visible-md">
						<?php shapely_get_header_logo(); ?>
					</div>
					<div class="module left site-logo-container visible-sm visible-xs">
						<a href="/" class="custom-logo-link" rel="home" itemprop="url">
							<img src="/img/logo-final.png.webp" class="custom-logo logo" itemprop="logo">
						</a>
					</div>
					<button class="module widget-handle mobile-toggle right visible-sm visible-xs">
						<i class="fa fa-bars"></i>
					</button>
					<div class="module left site-title-container text-center">
						<span class="visible-xs"><?php echo get_bloginfo('name'); ?> - </span>
						<?php echo get_bloginfo('description'); ?>
					</div>
					<div class="module left site-main-help-container text-center">
						<?php wp_nav_menu( array(
								'menu' => '293'
							) ); ?>
					</div>

					<div class="module right site-social-container text-center visible-lg visible-md visible-sm">
						<?php shapely_social_icons(); ?>
					</div>

				</div>
			</div>
		</div>
		<div class="nav-container nav-container-menu">
			<nav <?php echo $style; ?> id="site-navigation" class="main-navigation" role="navigation">
				<div class="container nav-bar">
					<?php shapely_header_menu(); ?>
					<div class="after-menu">
						<div class="module left site-social-container text-center visible-xs">
							<?php shapely_social_icons(); ?>
						</div>
						<?php dynamic_sidebar( 'sidebar-after-menu' ); ?>
					</div>
					<?php /*<div class="flex-row">
						
						<button class="module widget-handle mobile-toggle right visible-sm visible-xs">
							<i class="fa fa-bars"></i>
						</button>
						<div class="module-group right">
							<div class="module left">
								
							</div>
							<!--end of menu module-->
							<div class="module widget-handle search-widget-handle hidden-xs hidden-sm">
								<button class="search">
									<i class="fa fa-search"></i>
									<span class="title"><?php esc_html_e( 'Site Search', 'shapely' ); ?></span>
								</button>
								<div class="function">
									<?php
									get_search_form();
									?>
								</div>
							</div>
						</div>
						<!--end of module group-->
					</div>*/ ?>
				</div>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->
	<div id="content" class="main-container">
		<?php if ( ! is_page_template( 'page-templates/template-home.php' ) && ! is_404() && ! is_page_template( 'page-templates/template-widget.php' ) ) : ?>
			<div class="header-callout">
				<?php shapely_top_callout(); ?>
			</div>
		<?php endif; ?>

		<section class="content-area <?php echo ( get_theme_mod( 'top_callout', true ) ) ? '' : ' pt0 '; ?>">
			<div id="main" class="<?php echo ( ! is_page_template( 'page-templates/template-home.php' ) && ! is_page_template( 'page-templates/template-widget.php' ) ) ? 'container' : ''; ?>" role="main">

			<?php if ( ! is_page_template( 'page-templates/template-home.php' ) && ! is_404() && ! is_page_template( 'page-templates/template-widget.php' ) ) : ?>
				<?php dynamic_sidebar( 'content-top' ); ?>
			<?php endif; ?>

