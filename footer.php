<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package foxyconcept
 */

?>

	</div><!-- #content -->
	<div class="footer-spacer"></div>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info wrapper">
			

			<div class="footer-col">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 200 157.3" style="enable-background:new 0 0 200 158;" xml:space="preserve">
					<g>
						<polyline style="fill:none;stroke:#171717;stroke-width:4;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points="   77.3,100 81.5,69.4 92.3,52.5 88.7,30.7 91.3,11.5 54.5,21.9 19.1,10.6 21,31 18.7,53.8 28.7,68.5 6.3,99.5 4.8,138.7 17.5,148.6    95.1,147 127.9,121.1 88.8,95.3 5.2,128.8  "/>
						
						<polyline style="fill:none;stroke:#171717;stroke-width:4;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points="   88.7,30.7 61.7,21 54.8,23.9 91.3,53.5  "/>
						
						<polyline style="fill:none;stroke:#171717;stroke-width:4;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points="   21.2,30.7 48.2,21 55,23.9 18.6,53.5  "/>
						
						<polyline style="fill:none;stroke:#171717;stroke-width:4;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points="   81.8,68.1 66.9,72.8 55.5,88 44.1,73 29.6,68.8 36.1,115.4  "/>
						<polygon points="47.3,78.1 63.6,78.3 55.5,88  "/>
						
							<line style="fill:none;stroke:#171717;stroke-width:4;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" x1="55.8" y1="86.3" x2="55.3" y2="108.3"/>
						<path style="fill:none;stroke:#171717;stroke-width:4;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" d="   M88.8,95.3c0,0,4,10,3.9,10.2c0,0.2-3.3,7.9-3.5,8.2c0,0,6.9,10.4,6.8,10.3c-1.1,3-4.3,11.1-4.1,11.2c0,0,2.7,6.9,2.7,7   c-0.1,0.1-1,3-1.8,4.5"/>
						<path style="fill:none;stroke:#171717;stroke-width:4;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" d="   M88.8,113.7c0,0-42.2,12.4-81.5,24.1"/>
						<path style="fill:none;stroke:#171717;stroke-width:4;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" d="   M92,135.2c0,0-37.3,7.3-74.1,12.8"/>
						<polygon points="117.2,114.8 117.2,129.2 127.9,121.1  "/>
						
							<line style="fill:none;stroke:#171717;stroke-width:4;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" x1="6.3" y1="99.5" x2="34.1" y2="114"/>
					</g>
				</svg>
			</div>

		<!-- 	<div class="footer-col">
				<h4>Latest projects</h4>
				
				<?php  
				$args = array(
				'post_type' => 'project',
				'project_categories'=> 'featured',
				'posts_per_page' => '4');

				$my_query = new WP_Query( $args );

				if( $my_query->have_posts() ) {  ?>
					<ul>
					<?php
					    while ($my_query->have_posts()) : $my_query->the_post(); ?>
				    	<li>
				    		<a href="<?php the_permalink() ?>" rel="bookmark" class="portfolio_item">
								
							<?php the_title(); ?>
				    			
				    		</a>
				        </li>
					    <?php endwhile; ?>
				    </ul>
				    <?php 
				}
				wp_reset_query();?>

			</div> -->

			<div class="footer-col">
				<h4>Quick links</h4>
				<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
			</div>

			<div class="footer-col">
				<h4>Latest from our blog</h4>
				<ul>
					<?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
					<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

					<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>

					<?php 
					endwhile;
					wp_reset_postdata();
					?>
				</ul>
			</div>

			<!-- <div class="footer-col">
				<ul class="social">
					<li>
						<a href="javascript:;">
							<svg xmlns="http://www.w3.org/2000/svg" clip-rule="evenodd" fill-rule="evenodd" viewBox="0 0 560 400">
								<path d="m410.096 200.048c0-71.818-58.23-130.048-130.048-130.048s-130.048 58.23-130.048 130.048c0 64.905 47.55 118.709 109.73 128.476v-90.875h-33.029v-37.601h33.029v-28.658c0-32.59 19.422-50.604 49.122-50.604 14.228 0 29.115 2.542 29.115 2.542v32.005h-16.405c-16.148 0-21.196 10.022-21.196 20.318v24.396h36.064l-5.761 37.601h-30.304v90.875c62.18-9.749 109.73-63.553 109.73-128.476z" fill="#1977f3"/><path d="m330.67 237.648 5.761-37.601h-36.064v-24.396c0-10.278 5.029-20.318 21.196-20.318h16.405v-32.005s-14.886-2.542-29.115-2.542c-29.7 0-49.122 17.996-49.122 50.604v28.658h-33.029v37.601h33.029v90.875c6.62 1.041 13.405 1.572 20.318 1.572s13.698-.549 20.318-1.572v-90.875h30.304z" fill="#fefefe"/>
							</svg>
						</a>
					</li>
					<li>
						<a href="javascript:;">
							
						</a>
					</li>
					<li>
						<a href="javascript:;">
							
						</a>
					</li>
					<li>
						<a href="javascript:;">
							
						</a>
					</li>
				</ul>
			</div> -->
				
		</div>
		<div class="footer-bottom">
			<div class="wrapper">
				<p>Foxyconcept <?php echo date("Y"); ?>&copy; ALL RIGHTS RESERVED</p>
				<p class="take-me-right-pls">Creative thinking since 1985</p>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
