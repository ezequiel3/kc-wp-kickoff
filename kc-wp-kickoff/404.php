<?php get_header(); ?>
			<section id="main-section">
				<article>
					<h3><?php _e('Page not Found',$translate_domain); ?></h3>
					<div>
						<p><a href="<?php echo home_url('/'); ?>"><?php _e('Return to Homepage',$translate_domain); ?></a></p>
					</div>
				</article>
			</section>
<?php get_footer(); ?>
