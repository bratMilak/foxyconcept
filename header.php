<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package foxyconcept
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/fav/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/fav/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/fav/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/fav/site.webmanifest">
	<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/fav/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/fav/favicon.ico">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/fav/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-53244580-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-53244580-2');
</script>
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Preloader -->
<div id="preloader">
    <div class="pre-container">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div>
<!-- end Preloader -->

<div id="page" class="site">

	<header id="masthead" class="header" role="banner">
		<div class="wrapper">
			
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<a href="<?php echo get_home_url(); ?>" id="logo">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 788 157.3" style="enable-background:new 0 0 788 157.3;" xml:space="preserve">
						<g>
							<path d="M159.5,101.7V72c0-1.5,1.2-2.8,2.8-2.8h0.1c0,0,0,0,0.1,0h16.3c1.5,0,2.8,1.3,2.8,2.8c0,1.6-1.3,2.8-2.8,2.8h-13.6V84h11.7   c1.5,0,2.8,1.3,2.8,2.8c0,1.6-1.3,2.8-2.8,2.8h-11.7v12.1c0,1.5-1.3,2.8-2.8,2.8S159.5,103.2,159.5,101.7z"/>
							<path d="M241.9,73.6c3.1,3.3,5.1,7.8,5.1,12.7c0,5-2,9.5-5.1,12.7c-3,3.3-7.4,5.4-12,5.4c-4.8,0-9.3-2.1-12.3-5.4   c-3.1-3.3-5-7.8-5-12.7c0-5,1.9-9.4,5-12.7c3.1-3.3,7.5-5.4,12.3-5.4C234.5,68.2,239,70.3,241.9,73.6z M241.3,86.3   c0-3.4-1.4-6.6-3.4-8.8c-2.1-2.3-4.9-3.6-8-3.6c-3.2,0-6,1.3-8.2,3.6c-2.1,2.2-3.4,5.4-3.4,8.8c0,3.4,1.3,6.6,3.4,8.8   c2.1,2.3,4.9,3.6,8.2,3.6c3,0,5.8-1.4,8-3.6C239.9,92.9,241.3,89.8,241.3,86.3z"/>
							<path d="M304.8,74l-9.6,13l9.6,13.1c0.9,1.2,0.7,3-0.6,3.8c-0.5,0.4-1.1,0.6-1.6,0.6c-0.9,0-1.7-0.5-2.3-1.2l-8.5-11.6l-8.5,11.6   c-0.6,0.7-1.4,1.2-2.2,1.2c-0.6,0-1.2-0.2-1.6-0.6c-1.3-0.9-1.5-2.6-0.7-3.8l9.6-13.1l-9.6-13c-0.9-1.3-0.6-3,0.7-3.8   c1.2-1,3-0.7,3.8,0.6l8.5,11.6l8.5-11.6c1-1.3,2.6-1.6,3.9-0.6C305.5,71,305.7,72.7,304.8,74z"/>
							<path d="M364.7,74l-10.3,14.2v13.6c0,1.6-1.2,2.8-2.8,2.8c-1.5,0-2.8-1.2-2.8-2.8V88.1L338.6,74c-1-1.2-0.7-2.9,0.6-3.8   c1.3-0.9,3-0.7,3.8,0.6l8.6,11.8l8.6-11.8c1-1.3,2.7-1.5,3.9-0.6C365.3,71,365.5,72.7,364.7,74z"/>
							<path d="M391.2,86.3c0.1-10,8.4-18.1,18.5-18.1c4.4,0,8.5,1.5,11.6,3.9c1.2,1,1.4,2.8,0.5,4c-1,1.3-2.9,1.5-4,0.6   c-2.2-1.8-5-2.8-8.1-2.8c-3.5,0-6.7,1.4-9.1,3.6c-2.3,2.3-3.7,5.3-3.7,8.8c0,3.4,1.4,6.5,3.7,8.8c2.4,2.2,5.6,3.6,9.1,3.6   c3.1,0,5.8-1,8.1-2.8c1.2-0.9,3-0.7,4,0.6c0.9,1.3,0.7,3.1-0.5,4c-3.2,2.5-7.2,3.9-11.6,3.9C399.6,104.5,391.2,96.4,391.2,86.3z"/>
							<path d="M483.5,73.6c3.1,3.3,5.1,7.8,5.1,12.7c0,5-2,9.5-5.1,12.7c-3,3.3-7.4,5.4-12,5.4c-4.8,0-9.3-2.1-12.3-5.4   c-3.1-3.3-5-7.8-5-12.7c0-5,1.9-9.4,5-12.7c3.1-3.3,7.5-5.4,12.3-5.4C476.1,68.2,480.6,70.3,483.5,73.6z M482.9,86.3   c0-3.4-1.4-6.6-3.4-8.8c-2.1-2.3-4.9-3.6-8-3.6c-3.2,0-6,1.3-8.2,3.6c-2.1,2.2-3.4,5.4-3.4,8.8c0,3.4,1.3,6.6,3.4,8.8   c2.1,2.3,4.9,3.6,8.2,3.6c3,0,5.8-1.4,8-3.6C481.5,92.9,482.9,89.8,482.9,86.3z"/>
							<path d="M527.9,101.7c0,1.5-1.3,2.8-2.7,2.8c-1.6,0-2.8-1.3-2.8-2.8V72.4c0,0,0,0,0-0.1c-0.1-0.9,0.4-1.8,1.1-2.3   c1.3-0.9,3-0.6,3.8,0.6l16.3,22.5V72.4c0-1.5,1.2-2.7,2.7-2.7c1.5,0,2.8,1.3,2.8,2.7v29.3c0,1.5-1.3,2.8-2.8,2.8   c-0.8,0-1.6-0.4-2.1-1c-0.1-0.1-0.2-0.2-0.3-0.3l-16.1-22.4V101.7z"/>
							<path d="M584.9,86.3c0.1-10,8.4-18.1,18.5-18.1c4.4,0,8.5,1.5,11.6,3.9c1.2,1,1.4,2.8,0.5,4c-1,1.3-2.9,1.5-4,0.6   c-2.2-1.8-5-2.8-8.1-2.8c-3.5,0-6.7,1.4-9.1,3.6c-2.3,2.3-3.7,5.3-3.7,8.8c0,3.4,1.4,6.5,3.7,8.8c2.4,2.2,5.6,3.6,9.1,3.6   c3.1,0,5.8-1,8.1-2.8c1.2-0.9,3-0.7,4,0.6c0.9,1.3,0.7,3.1-0.5,4c-3.2,2.5-7.2,3.9-11.6,3.9C593.3,104.5,584.9,96.4,584.9,86.3z"/>
							<path d="M650.4,101.7V72c0-1.6,1.2-2.8,2.8-2.8h0.1c0,0,0,0,0.1,0h16.3c1.5,0,2.8,1.2,2.8,2.8c0,1.6-1.3,2.8-2.8,2.8H656V84h11.7   c1.5,0,2.8,1.3,2.8,2.8c0,1.6-1.3,2.8-2.8,2.8H656v9.3h13.6c1.5,0,2.8,1.3,2.8,2.8c0,1.5-1.3,2.8-2.8,2.8h-16.3   c-0.1,0-0.1-0.1-0.1-0.1l-0.1,0.1C651.6,104.5,650.4,103.2,650.4,101.7z"/>
							<path d="M717.3,90.8h-6.2v10.9c0,1.5-1.3,2.8-2.8,2.8c-1.5,0-2.8-1.3-2.8-2.8V72c0-1.6,1.3-2.8,2.8-2.8h0.1h9   c6,0,10.8,4.8,10.8,10.8C728.1,85.9,723.2,90.8,717.3,90.8z M711.1,85.2h6.2c2.9,0,5.2-2.3,5.2-5.1c-0.1-2.9-2.3-5.2-5.2-5.2h-6.2   V85.2z"/>
							<path d="M781.6,74.8h-8v26.9c0,1.6-1.2,2.8-2.8,2.8c-1.5,0-2.8-1.2-2.8-2.8V74.8h-8c-1.6,0-2.8-1.3-2.8-2.8c0-1.6,1.2-2.8,2.8-2.8   h21.5c1.5,0,2.8,1.2,2.8,2.8C784.3,73.5,783.1,74.8,781.6,74.8z"/>
						</g>
						<g>
							<polyline style="fill:none;stroke:#000000;stroke-width:4;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points="   77.3,100 81.5,69.4 92.3,52.5 88.7,30.7 91.3,11.5 54.5,21.9 19.1,10.6 21,31 18.7,53.8 28.7,68.5 6.3,99.5 4.8,138.7 17.5,148.6    95.1,147 127.9,121.1 88.8,95.3 5.2,128.8  "/>
							
							<polyline style="fill:none;stroke:#000000;stroke-width:4;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points="   88.7,30.7 61.7,21 54.8,23.9 91.3,53.5  "/>
							
							<polyline style="fill:none;stroke:#000000;stroke-width:4;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points="   21.2,30.7 48.2,21 55,23.9 18.6,53.5  "/>
							
							<polyline style="fill:none;stroke:#000000;stroke-width:4;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points="   81.8,68.1 66.9,72.8 55.5,88 44.1,73 29.6,68.8 36.1,115.4  "/>
							<polygon points="47.3,78.1 63.6,78.3 55.5,88  "/>
							
								<line style="fill:none;stroke:#000000;stroke-width:4;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" x1="55.8" y1="86.3" x2="55.3" y2="108.3"/>
							<path style="fill:none;stroke:#000000;stroke-width:4;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" d="   M88.8,95.3c0,0,4,10,3.9,10.2c0,0.2-3.3,7.9-3.5,8.2c0,0,6.9,10.4,6.8,10.3c-1.1,3-4.3,11.1-4.1,11.2c0,0,2.7,6.9,2.7,7   c-0.1,0.1-1,3-1.8,4.5"/>
							<path style="fill:none;stroke:#000000;stroke-width:4;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" d="   M88.8,113.7c0,0-42.2,12.4-81.5,24.1"/>
							<path style="fill:none;stroke:#000000;stroke-width:4;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" d="   M92,135.2c0,0-37.3,7.3-74.1,12.8"/>
							<polygon points="117.2,114.8 117.2,129.2 127.9,121.1  "/>
							
								<line style="fill:none;stroke:#000000;stroke-width:4;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" x1="6.3" y1="99.5" x2="34.1" y2="114"/>
						</g>
					</svg>
				</a>
				<a href="javascript:;" id="menu-btn">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</a>
				<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
		</div>
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
