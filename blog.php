<?php
/**
 * Template name: Blog
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

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="page-header mobile-center center-me">
				<div class="wrapper">
					<h1>Blog</h1>
				</div>	
			</div>
			<div class="wrapper">
					<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

					function TrimStringIfToLong($s) {
					    $maxLength = 60;

					    if (strlen($s) > $maxLength) {
					        echo substr($s, 0, $maxLength - 5) . ' ...';
					    } else {
					        echo $s;
					    }
					}

					$args = array( 'post_type' => 'post', 'posts_per_page' => 3, 'paged' => $paged );
					$wp_query = new WP_Query($args);
					while ( have_posts() ) : the_post(); ?>
						
							<ul class="post-list">
								<li>
									<h2>
								    	<a href="<?php the_permalink() ?>" title="Link to <?php the_title_attribute() ?>">
						       		        <?php TrimStringIfToLong(get_the_title()); ?>
								    	</a>
								    </h2>
								    <span class="date">
								    	 <?php the_time( 'Y-m-d' ) ?> 
								    </span>
								    <a href="<?php the_permalink() ?>" class="thumb-wrap">
								    	<?php the_post_thumbnail( 'medium_large' );  ?>
								    </a>
								    <?php the_excerpt(); ?>
									<a href="<?php the_permalink() ?>" class="read-more" title="Link to <?php the_title_attribute() ?>">
						       		    Read more
								    </a>
								</li>
							</ul>	
						
							
					    
					<?php endwhile; ?>
			</div>
		<!-- then the pagination links -->
		<a href="javascript:;"></a>
		<?php next_posts_link( '&larr; Older posts', $wp_query ->max_num_pages); ?>
		<?php previous_posts_link( 'Newer posts &rarr;' ); ?>

				</main><!-- #main -->
			</div><!-- #primary -->

<?php
get_footer();
