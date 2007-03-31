<div id="comments">
<a id="respond"></a>

<h3>Comments (<?php comments_number('No comments', 'One comment', '% comments' );?>)</h3>

<?php // Do not delete these lines
if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
die ('Please do not load this page directly. Thanks!');

if (!empty($post->post_password)) { // if there's a password
if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {// and it doesn't match the cookie
?>
<p>This post is password protected. Enter the password to view comments.<p>

<?php
return;
}
}
?>
<?php if ($comments) : ?>
<?php foreach ($comments as $comment) : ?>
<div class="comment id="comment-<?php comment_ID() ?>">
<div class="comment-body clearfix">
<?php comment_text() ?>
</div>
<p class="comment-meta"><?php comment_author_link() ?> / <?php if ($comment->comment_approved == '0') : ?> / <em>Your comment is awaiting moderation.</em> / <?php endif; ?><?php comment_date('F jS, Y') ?>, <?php comment_time() ?> / <a href="#comment-<?php comment_ID() ?>" title="Comment permalink">#</a></p>
</div>
<?php endforeach; ?>

<?php else : // this is displayed if there are no comments so far ?>
<?php if ('open' == $post->comment_status) : ?> 
<p>There are no comments for this post so far.</p>
<?php else : // comments are closed ?>
<p>Comments are closed for this post.</p>
<?php endif; ?>
<?php endif; ?>

<h3>Post a comment</h3>

<?php if ('open' == $post->comment_status) : ?>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>

<?php else : ?>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
<?php if ( $user_ID ) : ?>
<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. (<a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout</a>)</p>

<?php else : ?>
<p>
<label for="comment-author">Name <em><?php if ($req) echo "(required)"; ?></em></label>
<input type="text" name="author" id="comment-author" value="<?php echo $comment_author; ?>" tabindex="1" />
</p>
<p>
<label for="comment-email">Mail <em>(will not be published) <?php if ($req) echo "(required)"; ?></em></label>
<input type="text" name="email" id="comment-email" value="<?php echo $comment_author_email; ?>" tabindex="2" />
</p>
<p>
<label for="url">Website</label>
<input type="text" name="url" id="comment-url" value="<?php echo $comment_author_url; ?>" tabindex="3" />
</p>
<?php endif; ?>
<p>
<label for="comment-text">Comment</label>
<textarea name="comment" id="comment-text" rows="12" tabindex="4"></textarea>
</p>
<?php do_action('comment_form', $post->ID); ?>
<p>
<input name="submit" type="submit" id="comment-submit" tabindex="5" value="Submit Comment" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>
</form>

<?php endif; // If registration required and not logged in ?>
<?php endif; // if you delete this the sky will fall on your head ?>

<?php if ('open' == $post->comment_status) : ?> 
<!-- If comments are open, but there are no comments. -->

<?php else : // comments are closed ?>
<!-- If comments are closed. -->
<p>Comments are closed for this post.</p>
<?php endif; ?>

</div>