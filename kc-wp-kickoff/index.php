<?php get_header(); ?>
			<section id="main-section">
				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="article-container">
					<article>
						<h3 class="page-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
						<p class="content-author">by <strong><?php the_author(); ?>, </strong><?php the_time('F j, Y'); ?></p>
						<div class="article-content">
							<?php the_content(); ?>
						</div>
						
					</article>
					<?php comments_template(); // Get wp-comments.php template ?>
				</div>
				<?php endwhile; endif; ?>
				
				<!-- PREV + NEXT POSTS -->
				<?php if ( $wp_query->max_num_pages > 1 ) : ?>
					<nav class="nav-pages">
						<span><?php next_posts_link(); ?></span>
						<span><?php previous_posts_link(); ?></span>
					</nav>
				<?php endif; ?>
				<!--///////////////////-->
				
			</section>
			<?php get_sidebar(); ?>
			
<?php get_footer(); ?>
