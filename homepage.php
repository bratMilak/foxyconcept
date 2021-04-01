<?php
/**
 * Template name: Homepage
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package foxyconcept
 */

get_header(); ?>
	<section class="site-intro">
	    <div class="table-cell">
	    	<div class="svg-wrapp">
	    		
	    	</div>
	        <h1 class="box-headline letters rotate-2">
	            <span class="box-words-wrapper">
	                <b class="is-visible">design.</b>
	                <b>coding.</b>
	                <b>graphic.</b>
	                <b>animation.</b>
	            </span>
	        </h1>
	       <?php if (have_posts()) {
			    while (have_posts()) {
			        the_post();
			        
			        the_content();
				} 
			}
			?>
	    </div>

	</section>
	<div id="primary" class="content-area">
		<!-- <main id="main" class="site-main" role="main">

			<section>
			<?php  
			$args = array(
			'post_type' => 'project',
			'project_categories'=> 'featured');

			$my_query = new WP_Query( $args );

			if( $my_query->have_posts() ) {  ?>
				<ul class="portfolio-items">
				<?php $recent_posts = get_posts('numberposts=1');
				if($recent_posts) { ?>

				        <?php foreach( $recent_posts as $recent ) { ?>
				        <li class="latest-post">
				        	<img src="<?php echo get_template_directory_uri(); ?>/img/latest-post-bg.png" alt="" />
				        	<div class="inner">
				        		<h4>Latest from our blog</h4>
				        		<p><a href="<?php echo get_permalink($recent->ID); ?>"><?php echo $recent->post_title; ?></a></p>
				        	</div>
				        </li>
				        <?php } ?>
				   
				<?php } ?>
				<?php

				    while ($my_query->have_posts()) : $my_query->the_post(); ?>
				    	<li>
				    		<a href="<?php the_permalink() ?>" rel="bookmark" class="portfolio_item" title="Permanent Link to <?php the_title_attribute(); ?>">
								<div class="portfolio_item_hover">
									<div class="item_info">
										<h4><?php the_title(); ?></h4><br />
										<em>
											<?php
												$categories =  get_the_terms( $post->ID, 'project_categories' ); 
												$separator = ' ';
												$output = '';
												if($categories){
												    foreach($categories as $category) {
												if($category->name !== 'Featured'){
												        $output .= '<span class="post-category-info">&nbsp;'.$category->name.'</span>'.$separator;}
												    }
												echo trim($output, $separator);
												}
											?>
										</em>
									</div>
									
								</div>

				    			<div class="img-wrapper">
						    		<?php the_post_thumbnail( 'large' );  ?>
						    	</div>
				    			
				    		</a>
				    	
				        	
				        </li>
				    <?php endwhile; ?>
			    </ul>
			    <?php 
			}

			wp_reset_query();?>
		</section>

		</main> -->

		
	</div><!-- #primary -->

<?php
get_footer();
