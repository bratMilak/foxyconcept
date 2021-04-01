<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package foxyconcept
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="wrapper">
		<div class="txt-wrap">
			<header class="entry-header">
				<?php
				if ( is_single() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;

				if ( 'post' === get_post_type() ) : ?>
				
				<?php
				endif; ?>
			</header><!-- .entry-header -->

			
			<div class="project-details">
				<?php the_content(); ?>
				<h4>Share this</h4>
				<div>
					<?php echo do_shortcode( '[ess_post]' ); ?>	 
				</div>
			</div>
		</div>
		

		
		<div class="img-content">


			<?php if( have_rows('page_builder') ): 
			    while( have_rows('page_builder') ): the_row(); ?>
			        <?php if( get_row_layout() == 'project_slider' ): ?>`
			            
			            <?php if( have_rows('slider') ): ?>
			            	<div class="image-container">
							  

								<?php while( have_rows('slider') ): the_row(); 

									// vars
									$project_image = get_sub_field('slider_image');
									?>

									 <div class="swiper-slide">
										<img src="<?php echo $project_image['url']; ?>" alt="<?php echo $project_image['alt'] ?>" />
									</div>

								<?php endwhile; ?>

							</div>
							
					        <span class="slider-nav slider-prev">
								<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 viewBox="0 0 59.414 59.414" style="enable-background:new 0 0 59.414 59.414;" xml:space="preserve">
								<polygon points="45.268,1.414 43.854,0 14.146,29.707 43.854,59.414 45.268,58 16.975,29.707 "/>

								</svg>
					        </span>
					        <span class="slider-nav slider-next">
					        	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 59.414 59.414" style="enable-background:new 0 0 59.414 59.414;" xml:space="preserve">
								<polygon points="15.561,0 14.146,1.414 42.439,29.707 14.146,58 15.561,59.414 45.268,29.707 "/>

								</svg>
					        </span>
						   
							  	
							

						<?php endif; ?>


			        <?php elseif( get_row_layout() == 'project_gallery' ): 
			           $images = get_sub_field('image_gallery');
						if( $images ): ?>
						    <ul class="logo-wrap">
						        <?php foreach( $images as $image ): ?>
						            <li>
						                <a href="<?php echo esc_url($image['url']); ?>">
						                     <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="" />
						                </a>
						                
						            </li>
						        <?php endforeach; ?>
						    </ul>
						<?php endif; ?>




			        <?php endif; ?>
			    <?php endwhile; ?>
			<?php endif; ?>

			
				
		</div><!-- .entry-content -->
		
		<footer class="entry-footer">
			
				
				<?php 
				foxyconcept_entry_footer();

				//Previus post
				$prev_post = get_previous_post();
				$prev_title = get_the_title( $prev_post->ID); /*title*/
				$prev_thumbnail = get_the_post_thumbnail( $prev_post->ID, 'thumbnail'); /*image*/
				//Next post
				$next_post = get_next_post();
				$next_title = get_the_title( $next_post); /*title*/
				$next_thumbnail = get_the_post_thumbnail( $next_post, 'thumbnail'); /*image*/
				//you can change large to small, medium etc just like the thumbnail classes.
				?>
				<div class="post-nav">
					<?php  if($prev_post){
							$args = array(
								  
								   'next_text'  => '<div class="post-nav-image">'.$next_thumbnail.'<span>'.$next_title.'</span></div>',
								    'prev_text'  => '<div class="post-nav-image">'.$prev_thumbnail.'<span>'.$prev_title.'</span></div>'
							);
							// the_post_navigation( $args );
						} else {
							$args = array(   
								'next_text'  => '<div class="post-nav-image">'.$next_thumbnail.'<span>'.$next_title.'</span></div>'
							);
							// the_post_navigation( $args );
						}
					   
					?>
				</div>
					

				
			
		</footer><!-- .entry-footer -->
	</div>

		
</article><!-- #post-## -->
