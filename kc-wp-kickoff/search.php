<?php get_header(); ?>
			<section id="main-section" class="search-section">
				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article>
					<h3 class="page-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
					<div class="article-content">
						<?php the_excerpt(); ?>
					</div>
				</article>
				<?php endwhile; else: ?>
				<article>
					<h3 class="page-title"><?php _e('Nothing found',$translate_domain); ?></h3>
					<div class="article-content">
						<p><?php _e('Please refine your search',$translate_domain); ?></p>
					</div>
				</article>
				<?php endif; ?>
				
			</section>
			<?php get_sidebar(); ?>
<?php get_footer(); ?>
