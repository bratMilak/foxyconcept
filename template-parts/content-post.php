<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package foxyconcept
 */

?>
<div class="page-header">
	<div class="wrapper">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		
		<?php
		endif; ?>
	</div>	
</div>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="wrapper">

		<div class="txt-wrap entry-data">
			

			
			<div class="project-details">
				<?php the_content(); ?>
			</div>
			<div class="entry-meta ">
				<div class="desc-block">
					<h4>Posted on:</h4>
					<div class="posted ">
						<?php $post_date = get_the_date( 'l F j, Y' ); echo $post_date; ?>
					</div>
				</div>
				<div class="is-category desc-block">
					<h4>Category:</h4>
					<div>
						<?php echo get_the_category_list( '/', '', $post->ID ); ?>
					</div>
				</div>
				<div class="is-category desc-block">
					<h4>Share</h4>
					<div>
						<?php echo do_shortcode( '[ess_post]' ); ?>	 
					</div>
				</div>
				

			</div><!-- .entry-meta -->
		</div>
		

		
		
		
		
	</div>

		
</article><!-- #post-## -->
