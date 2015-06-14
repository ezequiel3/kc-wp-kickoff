<?php if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) : ?>  	
	<?php die('You can not access this page directly!'); ?>  
<?php endif; ?>
<hr />
<aside id="comments" class="comments-area">
	
	<?php if(!empty($post->post_password)) : ?>
		<?php if($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>
			<p><i><?php _e('This post is password protected.',$translate_domain); ?></i></p>
		<?php endif; ?>
	<?php endif; ?>
	
	<div class="box-comment-list">
		<h4 class="title-comments"><?php _e('Comments',$translate_domain); ?>:</h4>
		<?php if($comments) : ?>
			<ul>
				<?php foreach($comments as $comment) : ?>
				<li id="comment-<?php comment_ID(); ?>">
					<div class="content-comment">
						<p class="comment-author"><?php echo get_avatar( $comment, 40 ); ?> <b><?php comment_author_link(); ?>:</b></p>
						<p class="comment-time"><i><small><?php comment_date(); ?> - <?php comment_time(); ?></small></i></p>
						<?php if ($comment->comment_approved == '0') : ?>
							<p><i><?php _e('Your comment is awaiting approval',$translate_domain); ?></i></p>
						<?php endif; ?>
						<div class="comment-message"><pre><?php comment_text(); ?></pre></div>
					</div>
					<?php if(get_option('comment_registration') && !$user_ID) : ?>
					<ul class="controls-comment">
						<li><?php edit_comment_link(__('Edit comment',$translate_domain),' '); ?></li>
					</ul>
					<?php else : ?>
						
					<?php endif; ?>
				</li>
				<?php endforeach; ?>
			</ul>
		<?php else : ?>
			<p><i><?php _e('No comments yet',$translate_domain); ?></i></p>
		<?php endif; ?>
		
	</div>
	
	
	<!-- // COMMENT FORM // -->
	<div class="box-comment-form">
		<h4 class="title-comments"><?php _e('Leave your comment',$translate_domain); ?>:</h4>
		<?php if(comments_open()) : ?>
			<?php if(get_option('comment_registration') && !$user_ID) : ?>
				<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p><?php else : ?>
				<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
					<?php if($user_ID) : ?>
						
						<!-- IF user is logged -->
						<p><i><small><?php _e('Logged in as',$translate_domain); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url( get_permalink() ); ?>#commentform" title="Log out of this account"><?php _e('Log Out',$translate_domain); ?></a></small></i></p>
						
					<?php else : ?>
					
						<!-- IF user is NOT logged, show extra inputs -->
						<p><i><?php _e('Name',$translate_domain); ?> <?php if($req) echo '<span class="required">*</span>'; ?> <input class="input input-comment input-comment-name" type="text" name="author" value="<?php echo $comment_author; ?>" /></i></p>
						<p><i><?php _e('Email',$translate_domain); ?> <?php if($req) echo '<span class="required">*</span>'; ?> <input class="input input-comment input-comment-email" type="email" name="email" value="<?php echo $comment_author_email; ?>" /></i></p>
						
					<?php endif; ?>
					
					<!-- Rest of the form -->
					<p><textarea class="input input-comment input-comment-message" name="comment"></textarea></p>
					<p><input class="button button-comment button-submit" name="submit" type="submit" value="<?php _e('Submit',$translate_domain); ?>" />
					<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>
					<?php do_action('comment_form', $post->ID); ?>
				</form>
			<?php endif; ?>
		<?php else : ?>
			<p><i><?php _e('Comments closed',$translate_domain); ?>.</i></p>
		<?php endif; ?>
	</div>
	
	
</aside>
