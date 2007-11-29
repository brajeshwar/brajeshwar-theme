<div id="comments-wrapper">
	<div id="comments-main">
	<?php // Do not delete these lines
		if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
			die ('Please do not load this page directly. Thanks!');
	
		if (!empty($post->post_password)) { // if there's a password
			if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
				?>
	
				<p class="nocomments">This post is password protected. Enter the password to view comments.<p>
	
				<?php
				return;
			}
		}
		/* This variable is for alternating comment background */
		$oddcomment = 'alt';
	?>
	
	<!-- You can start editing here. -->
	
	<!-- START: comments-body -->
	<div id="comments-body">
	<?php if ($comments) : ?>
		<h3 id="comments">Comments <span class="comments-add"><a href="">post yours</a></span></h3>
			<?php foreach ($comments as $comment) : ?>
			<div class="comments-envelop <?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
				<p class="comments-details">
					<a href="#comment-<?php comment_ID() ?>" title="Permalink to this comment"><?php comment_date('D, jS M, Y') ?></a><br /><?php comment_time() ?> (UTC)
					<?php if (function_exists('gravatar')) { gravatar_image_link(); } ?>
				</p>
				<div class="comments-content">
					<span class="comment-author"><?php comment_author_link() ?></span>
					<?php if ($comment->comment_approved == '0') : ?><em>(your comment is awaiting moderation)</em><?php endif; ?>
					<?php comment_text() ?>
					<?php edit_comment_link('Edit this comment','<p>','</p>'); ?>
				</div>
				<div class="clear"></div>				
			</div>
	
		<?php /* Changes every other comment to a different class */
			if ('alt' == $oddcomment) $oddcomment = '';
			else $oddcomment = 'alt';
		?>
	
		<?php endforeach; /* end for each comment */ ?>
	
	 <?php else : // this is displayed if there are no comments so far ?>
		<?php if ('open' == $post->comment_status) : ?>
			<!-- If comments are open, but there are no comments. -->
		 <?php else : // comments are closed ?>
			<!-- If comments are closed. -->
			<p class="nocomments">Comments are closed!</p>
		<?php endif; ?>
	<?php endif; ?>
	</div><!-- /comments-body -->
	
	<div style="clear:both;"></div>

	<div id="commentsform-envelop">
	<?php if ('open' == $post->comment_status) : ?>
	<h3 id="respond">Your Comment</h3>
		<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
		<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>
		<?php else : ?>
		
		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
		<?php if ( $user_ID ) : ?>
		<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout</a></p>
		<?php else : ?>
		<fieldset>
			<label for="author">Your Name</label>
			<input type="text" id="author" name="author" value="<?php echo $comment_author; ?>" tabindex="1" /><small class="help-text">Real names preferred <?php if ($req) echo '<span class="codeRed">*</span>'; ?></small>
		</fieldset>
		<fieldset>
			<label for="email">Your E-mail</label>
			<input type="text" id="email" name="url" value="<?php echo $comment_author_email; ?>" tabindex="2" /><small class="help-text">Neither published nor sold <?php if ($req) echo '<span class="codeRed">*</span>'; ?></small>
		</fieldset>
		<fieldset>
			<label for="url">Your URL</label>
			<input type="text" id="url" name="url" value="<?php echo $comment_author_url; ?>" tabindex="3" /><small class="help-text">Your website, blog (optional)</small>
		</fieldset>
		<?php endif; ?>
		<fieldset>
			<label for="id_comment">Your Message</label>
			<textarea name="comment" id="comment" rows="5" cols="100%" tabindex="4"></textarea>
			<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
		</fieldset>
			<fieldset class="submit">
			<input type="image" src="<?php bloginfo('template_directory'); ?>/i/buttons/submit.png" class="button" id="submit" name="submit" value="Submit" tabindex="5" />
		</fieldset>
		<?php do_action('comment_form', $post->ID); ?>
	</form>
	</div>
	<!-- END: comments-form -->
	
	<?php endif; // If registration required and not logged in ?>
	<?php endif; ?>
	</div><!-- /comments-main -->
	
	<div id="comments-meta">
		<p>So far,
		<br />there are <strong><?php comments_number('No Comments','One Comment','% Comments'); ?></strong> to this article.</p>
		<h5>Most commented article</h5>
		<ul>
			<li>Article one and some title (1003)</li>
			<li>Article one and some title (1003)</li>
			<li>Article one and some title (1003)</li>
			<li>Article one and some title (1003)</li>
			<li>Article one and some title (1003)</li>
		</ul>
		<h5>Top commentors</h5>
		<ul>
		<li>Rajnikant (13)</li>
		<li>Rajnikant (13)</li>
		<li>Rajnikant (13)</li>
		<li>Rajnikant (13)</li>
		<li>Rajnikant (13)</li>
		</ul>
		<p>You can also just <a href="">email me</a> with your views, responses instead of commenting here!</p>
	</div><!-- /comments-meta -->
	<div class="clear"></div>
</div><!-- /comments-wrapper -->