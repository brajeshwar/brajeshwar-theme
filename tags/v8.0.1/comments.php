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
						<?php edit_comment_link('Edit this comment','<p class="more-edit">','</p>'); ?>
					</div><!-- /comments-content -->
					<div class="clear"><!-- /clear --></div>
				</div><!-- /comments-envelop -->
		
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
		
		<div id="commentsform-envelop">
		<?php if ('open' == $post->comment_status) : ?>
		<h3 id="respond">Your Comment</h3>
			<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
			<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>
			<?php else : ?>	
			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
			<?php if ( $user_ID ) : ?>
			<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a></p>
			<?php else : ?>
			<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="30" tabindex="1" />
			<label for="author"><small>Name <?php if ($req) echo "<span class='codeRed'>*</span>"; ?></small></label></p>
			<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="30" tabindex="2" />
			<label for="email"><small>Mail (will not be published) <?php if ($req) echo "<span class='codeRed'>*</span>"; ?></small></label></p>
			<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="30" tabindex="3" />
			<label for="url"><small>Website, Blog (optional)</small></label></p>
			<?php endif; ?>
			<!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->
			<p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>
			<p><input name="submit" type="image" class="button" src="<?php bloginfo('template_directory'); ?>/i/buttons/submit.png" id="submit" tabindex="5" value="Submit" />
			<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
			</p>
			<?php do_action('comment_form', $post->ID); ?>
			</form>
			<div style="clear: left;"><!-- /clear --></div>
		</div><!-- /commentsform-envelop -->
	
		<?php endif; // If registration required and not logged in ?>
		<?php endif; ?>
	</div><!-- /comments-main -->
	
	<div id="comments-meta">
		<p>So far,<br />
		there <?php comments_number('are no comments', 'is only 1 comment', 'are % comments' );?> on this article.
			<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
			// Both Comments and Pings are open ?>
			You can <a href="#respond">post yours</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.
			<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
			// Only Pings are Open ?>
			Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.				
			<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
			// Comments are open, Pings are not ?>
			You can <a href="#respond">post yours</a>. Pinging is currently not allowed.				
			<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
			// Neither Comments, nor Pings are open ?>
			Both comments and pings are currently closed.
			<?php } ?>
		</p>			
		<p>You can also just <a href="/contact/">email me</a> with your views, responses instead of commenting here!</p>
		<p>Subscribe,<br />
		<?php comments_rss_link(__('Comments RSS Feed', 'brajeshwar')); ?>
		to this article.
		</p>
	<div class="clear"><!-- /clear; brajeshwar.com --></div>
	</div><!-- /comments-meta -->
</div><!-- /comments-wrapper -->