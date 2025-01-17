<?php
/**
 * Template Name: Home Page
 *
 * Displays the Home page with Parallax effects.
 *
 */
?>

<?php get_header(); ?>

<div style="background-image: url(/wp-content/themes/shapely.1.2.8/shapely/assets/images/preview.jpg.webp);width: 100%;height: 700px;background-size: cover;background-position: center center;background-repeat: no-repeat;">
	<div class="mob-bg-video"></div>
	<div class="video" style="position:absolute;"></div>
		<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center video_home">
			<div class="play" id="play" style="margin-bottom: 30px;">
			    <svg class="play-icon" width="150" height="150" viewBox="0 0 251 251" fill="none" xmlns="http://www.w3.org/2000/svg" style="backdrop-filter: blur(10px);border-radius: 500px;">
                <g filter="url(#filter0_b_2746_213)">
                <circle cx="125.5" cy="125.5" r="125.5" fill="white" fill-opacity="0.5"/>
                </g>
                <g filter="url(#filter1_b_2746_213)">
                <circle cx="125.5" cy="125.5" r="98.5" fill="white" fill-opacity="0.5"/>
                </g>
                <path d="M156.5 121.17C159.833 123.094 159.833 127.906 156.5 129.83L110.75 156.244C107.417 158.168 103.25 155.763 103.25 151.914L103.25 99.0862C103.25 95.2372 107.417 92.8316     110.75             94.7561L156.5 121.17Z" fill="#CA0202"/>
                <defs>
                <filter id="filter0_b_2746_213" x="-50" y="-50" width="351" height="351" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feGaussianBlur in="BackgroundImage" stdDeviation="25"/>
                <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_2746_213"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_2746_213" result="shape"/>
                </filter>
                <filter id="filter1_b_2746_213" x="-23" y="-23" width="297" height="297" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feGaussianBlur in="BackgroundImage" stdDeviation="25"/>
                <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_2746_213"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_2746_213" result="shape"/>
                </filter>
                </defs>
                </svg>
		    </div>
			<h2 class="mb32">
				<p style="margin: 0;"><?php esc_html_e( '[:en]We treat people living in places where it is difficult or[:ru]Мы лечим людей в местах, где трудно или[:es]Ofrecemos ayuda médica en lugares donde es difícil o[:]', 'shapely' ); ?></p>
				<p><?php esc_html_e( '[:en]impossible to get medical care.[:ru]невозможно получить базовую медицинскую помощь[:es]imposible recibir asistencia médica básica.[:]', 'shapely' ); ?></p>
			</h2>
			<a class="btn btn-lg btn-white-filled btn-rounded" href="<?php esc_html_e( '[:en]/en/to-volunteers[:es]/es/to-volunteers[:]', 'shapely' ); ?>" style="color: #CA0202;border: 0;background: #fff;"><?php esc_html_e( '[:en]Become a volunteer[:ru]Стать волонтером[:es]Hacerse voluntario[:]', 'shapely' ); ?></a>
			<a class="btn btn-lg btn-filled btn-rounded" href="#block-8"><?php esc_html_e( '[:en]Support our project[:ru]Помочь проекту[:es]Ayudar al proyecto[:]', 'shapely' ); ?></a>	
		</div>
</div>

<section class="bg-map">
	<div class="container">
		<?php echo do_shortcode("[pt_view id=addab07f7g]"); ?>
		<a class="bg-map-marker bg-map-marker-1 visible-md visible-lg" href="/projects/proekt-v-gvatemale/" target="_blank">
			<img src="/img/marker.png" />
		</a>
		<a class="bg-map-marker bg-map-marker-2 visible-md visible-lg" href="/projects/proekt-v-nikaragua/" target="_blank">
			<img src="/img/marker.png" />
		</a>	
		<img class="wrap-map-image visible-sm visible-xs" src="/img/map-min-bg.png" />
	</div>
</div>

<div class="container projects-block">
	<?php echo do_shortcode("[pt_view id=d8639473un]"); ?>
</div>

<section class="bg-secondary volspon-block">
	<div class="container">
		<?php echo do_shortcode("[pt_view id=23b462531o]"); ?>
	</div>
</section>
<div class="mailer" style="background: transparent;min-height: 490px;" data-parallax="scroll" data-image-src="/wp-content/uploads/2021/10/mailer_bg_1.jpg">
	<div class="row" style="height: 490px;align-items: center;display: flex;">
		<div class="container">
			<div style="float: right;" class="col-md-5 col-md-offset-0 col-sm-10 col-xs-12 col-sm-offset-0">
				<h2 style="color:#fff;font-size: 36pt;width: 328px;line-height: 100%;font-weight: 600;"><?php esc_html_e( '[:en]Be the first to know all the news[:ru]Узнавайте все новости первыми[:es]Sé el primero en conocer todas las novedades[:]', 'shapely' ); ?></h2>
				<div class="mb32">
					<p style="color:#fff;font-size: 20pt;font-weight: 700;line-height: 110%;"><?php esc_html_e( '[:en]Subscribe to the newsletter[:ru]Подписывайтесь на рассылку[:es]Suscríbete al boletín[:]', 'shapely' ); ?></p>
                </div>
                <?php
                $url = $_SERVER['REQUEST_URI'];
                $url = explode('?', $url);
                $url = $url[0];
                if($url == '/'){
                    echo do_shortcode("[mc4wp_form id=9973]"); 
                }
                if ($url == '/es/') {
                	echo do_shortcode("[mc4wp_form id=13828]");
                }
                ?>
            </div>
		</div>
	</div>
</div>
<div class="container">
	<?php dynamic_sidebar( 'content-bottom' ); ?>
	<div class="has-text-align-center">
		<a class="btn btn-filled" href="<?php echo esc_url( get_category_link( 32 ) ); ?>"><?php esc_html_e( '[:en]All news[:ru]Все новости[:es]Todas las noticias[:]', 'shapely' ); ?></a>
	</div>
</div>
<div class="reports" data-parallax="scroll" data-image-src="/wp-content/themes/shapely.1.2.8/shapely/assets/images/reports_bg.jpg">
    <div class="container">
	<h2 class="rep_title">Annual Reports on the work of Health &amp; Help</h2>
	<p class="rep_desc">Share our yearly analysis of the project’s work</p>
	<div class="reports_tile" style="display: flex;justify-content: space-between;">
<div data-bg="/wp-content/themes/shapely.1.2.8/shapely/uploads/2024/04/report_2023.png" class="puz rocket-lazyload entered lazyloaded" style="background-image: url(&quot;https://he-he.org/wp-content/uploads/2024/04/report_2023.png&quot;);" data-ll-status="loaded">
		<p style="font-size: 24px;color: #fff;">2023</p>
		<div>
		    
                    <a style="background-color: #838383;color: #fff;padding: 10px 25px;border-radius: 15px;font-size: 18px;margin-right: 15px;" href="https://he-he.org/wp-content/uploads/2024/04/annual-report-2023-eng.pdf" download="">Download</a>
		    <a style="background-color: #e2001a;color: #fff;padding: 10px 25px;border-radius: 15px;font-size: 18px;" href="https://he-he.org/wp-content/uploads/2024/04/annual-report-2023-eng.pdf" target="_blank" rel="noreferrer noopener">View</a>
                </div>
	    </div>

	    <div data-bg="/wp-content/themes/shapely.1.2.8/shapely/assets/images/report_2022.png" class="puz rocket-lazyload entered lazyloaded" style="background-image: url(&quot;https://he-he.org/wp-content/themes/shapely.1.2.8/shapely/assets/images/report_2022.png&quot;);" data-ll-status="loaded">
		<p style="font-size: 24px;color: #fff;">2022</p>
		<div>
		    
                    <a style="background-color: #838383;color: #fff;padding: 10px 25px;border-radius: 15px;font-size: 18px;margin-right: 15px;" href="https://he-he.org/wp-content/uploads/2023/05/annual-report-2022-eng-1-1.pdf" download="">Download</a>
		    <a style="background-color: #e2001a;color: #fff;padding: 10px 25px;border-radius: 15px;font-size: 18px;" href="https://he-he.org/wp-content/uploads/2023/05/annual-report-2022-eng-1-1.pdf" target="_blank" rel="noreferrer noopener">View</a>
                </div>
	    </div>
	    <div data-bg="/wp-content/themes/shapely.1.2.8/shapely/assets/images/report_2021.png" class="puz rocket-lazyload entered lazyloaded" style="background-image: url(&quot;https://he-he.org/wp-content/themes/shapely.1.2.8/shapely/assets/images/report_2021.png&quot;);" data-ll-status="loaded">
		<p style="font-size: 24px;color: #fff;">2021</p>
		<div>
		    
                    <a style="background-color: #838383;color: #fff;padding: 10px 25px;border-radius: 15px;font-size: 18px;margin-right: 15px;" href="https://he-he.org/wp-content/uploads/2022/05/annual-report-2021-eng-1-1.pdf" download="">Download</a>
		    <a style="background-color: #e2001a;color: #fff;padding: 10px 25px;border-radius: 15px;font-size: 18px;" href="https://he-he.org/wp-content/uploads/2022/05/annual-report-2021-eng-1-1.pdf" target="_blank" rel="noreferrer noopener">View</a>
                </div>
	    </div>
	    <div data-bg="/wp-content/themes/shapely.1.2.8/shapely/assets/images/report_2020.png" class="puz rocket-lazyload entered lazyloaded" style="background-image: url(&quot;https://he-he.org/wp-content/themes/shapely.1.2.8/shapely/assets/images/report_2020.png&quot;);" data-ll-status="loaded">
		<p style="font-size: 24px;color: #fff;">2020</p>
		<div>
		    
                    <a style="background-color: #838383;color: #fff;padding: 10px 25px;border-radius: 15px;font-size: 18px;margin-right: 15px;" href="https://he-he.org/wp-content/uploads/2021/06/health-help-2020-annual-report.pdf" download="">Download</a>
		    <a style="background-color: #e2001a;color: #fff;padding: 10px 25px;border-radius: 15px;font-size: 18px;" href="https://he-he.org/wp-content/uploads/2021/06/health-help-2020-annual-report.pdf" target="_blank" rel="noreferrer noopener">View</a>
                </div>
	    </div>
	    	</div>
    </div>
</div>

<?php get_footer(); ?>
