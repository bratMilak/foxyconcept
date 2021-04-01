<?php
/**
 * Template name: Contact
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package foxyconcept
 */

get_header(); ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsj0V_dW48HPk4g9Erdqzbf72yL0WaF2k"></script>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post(); ?>

				<div class="page-header">
					<div class="wrapper">
						<h1><?php the_title(); ?></h1>
					</div>	
				</div>


			<?php endwhile; // End of the loop.
			?>
			<div class="wrapper">
				<div class="contact-inner">
					<div class="left-col">
						<?php the_content(); ?>
						<div class="svg-wrap">
							<svg xmlns="http://www.w3.org/2000/svg" id="a8a3399f-cb2e-48e2-be7e-5b5debcb9bb3" data-name="Layer 1" viewBox="0 0 361 406.3">
								<title>foxyconcept</title><polyline points="210.01 260.04 221.89 173.43 252.46 125.59 242.27 63.89 249.63 9.55 145.47 38.98 45.27 7 50.65 64.74 44.14 129.28 72.45 170.88 9.05 258.63 4.8 369.58 40.75 397.6 260.39 393.07 353.23 319.76 242.56 246.74 5.93 341.56" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/><polyline points="242.27 63.89 165.85 36.44 146.32 44.65 249.63 128.43" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/><polyline points="51.22 63.89 127.64 36.44 146.89 44.65 43.86 128.43" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/><polyline points="222.74 169.75 180.57 183.05 148.3 226.08 116.04 183.62 75 171.73 93.39 303.63" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/><polygon points="125.09 198.05 171.23 198.62 148.3 226.08 125.09 198.05"/><line x1="149.15" y1="221.26" x2="147.74" y2="283.53" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/><path d="M242.56,246.74s11.32,28.3,11,28.87c0,.56-9.35,22.36-9.91,23.21,0,0,19.53,29.43,19.25,29.15-3.12,8.49-12.18,31.42-11.61,31.7,0,0,7.64,19.53,7.64,19.82-.28.28-2.83,8.49-5.09,12.73" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/><path d="M242.56,298.82S123.11,333.92,11.88,367" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/><path d="M251.61,359.67S146,380.33,41.88,395.9" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/><polygon points="322.94 301.93 322.94 342.69 353.23 319.76 322.94 301.93"/><line x1="9.05" y1="258.63" x2="87.73" y2="299.67" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
							</svg>
						</div>
					</div>

					<div class="right-col">
						<?php echo do_shortcode( '[contact-form-7 id="80" title="Contact form 1"]' ); ?>
					</div>
				</div>
					
			</div>
			<div class="map">
					<?php if( have_rows('locations') ): ?>
						<div class="acf-map">
							<?php while ( have_rows('locations') ) : the_row(); 

								$location = get_sub_field('location');

								?>
								<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
									<h4><?php the_sub_field('title'); ?></h4>
									<p class="address"><?php echo $location['address']; ?></p>
									<p><?php the_sub_field('description'); ?></p>
								</div>
						<?php endwhile; ?>
						</div>
					<?php endif; ?>
				</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
