<?php get_header(); ?>
			<section id="main-section">
				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article>
					<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
					<p>by <strong><?php the_author(); ?>, </strong><?php the_time('F j, Y'); ?></p>
					<div>
						<?php the_content(); ?>
					</div>
					
					<!--/// COMMENTS ////-->
					<?php comments_template(); // Get wp-comments.php template ?>
					<!--//////////////-->
					
				</article>
				<?php endwhile; endif; ?>
				
				<!-- PREV + NEXT POSTS -->
				<?php if ( $wp_query->max_num_pages > 1 ) : ?>
				<nav>
					<span><?php next_posts_link(); ?></span>
					<span><?php previous_posts_link(); ?></span>
				</nav>
				<?php endif; ?>
				<!--///////////////////-->
				
			</section>	
<?php get_footer(); ?>
