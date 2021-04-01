<?php
/**
 * Template Name: Portfolio 
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

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="page-header mobile-center">
			<div class="wrapper">
				<h1>WE ARE A DIGITAL STUDIO OFFERING CREATIVE SERVICES TO CLIENTS WORLDWIDE.</h1>
			</div>	
		</div>
		<div class="portfolio-wrapper wrapper">
			<ul id="filters">
			    <?php
			        $terms = get_terms('project_categories');
			        $count = count($terms);
			            echo '<li><a href="javascript:void(0)" title="" data-filter=".all" class="active">All</a></li>';
			        if ( $count > 0 ){
			 
			            foreach ( $terms as $term ) {
			 
			                $termname = strtolower($term->name);
			                $termname = str_replace(' ', '-', $termname);
			                echo '<li><a href="javascript:void(0)" title="" data-filter=".'.$termname.'">'.$term->name.'</a></li>';
			            }
			        }
			    ?>
			</ul>

			<div id="portfolio">
	 			<div class="grid-sizer"></div>
				  <?php
				  /* 
				  Query the post 
				  */
				  $args = array( 'post_type' => 'project', 'posts_per_page' => -1 );
				  $loop = new WP_Query( $args );
				  while ( $loop->have_posts() ) : $loop->the_post(); 
				 
				     /* 
				     Pull category for each unique post using the ID 
				     */
				     $terms = get_the_terms( $post->ID, 'project_categories' );	
				     if ( $terms && ! is_wp_error( $terms ) ) : 
				 
				         $links = array();
				 
				         foreach ( $terms as $term ) {
				             $links[] = $term->name;
				         }
				 
				         $tax_links = join( " ", str_replace(' ', '-', $links));          
				         $tax = strtolower($tax_links);
				     else :	
					 $tax = '';					
				     endif; 
				 
				    /* Insert category name into portfolio-item class */ 
				    echo '<div class="all portfolio-item '. $tax .'">'; ?>
				    <a href="<?php the_permalink() ?>" rel="bookmark" class="portfolio_item" title="Permanent Link to <?php the_title_attribute(); ?>">
						<div class="portfolio_item_hover">
							<div class="item_info">
								<h4><?php the_title(); ?></h4><br>
								<em>
									<?php
										$categories =  get_the_terms( $post->ID, 'project_categories' ); 
										$separator = ' ';
										$output = '';
										if($categories){
										    foreach($categories as $category) {
										if($category->name !== 'Featured'){
										        $output .= '<span class="post-category-info">'.$category->name.'</span>'.$separator;}
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
		    		<?php
				     // echo '<div>'. the_excerpt() .'</div>';
				     echo '</div>'; 
				  endwhile; ?>
				 
			</div>

		</div>

		
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
