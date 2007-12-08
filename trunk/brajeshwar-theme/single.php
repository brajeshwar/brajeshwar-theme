<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="content-primary">
	<div id="primary-single">
		<div class="post" id="post-<?php the_ID(); ?>">
			<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<div class="post-excerpt">
				<?php the_excerpt_reloaded(55, '<a><em><strong>', 'excerpt', FALSE, 'Valid only for TRUE in prev value', FALSE, 1, TRUE); ?>
			</div><!-- /post-excerpt -->
			<span class="excerpt-footer"><a href="#content-secondary">Article continues</a></span>
			<div class="clear"><!-- /clear; brajeshwar.com --></div>
			<div id="post-ad-top">
				<script type="text/javascript"><!--
				google_ad_client = "pub-4468481779445136";
				//336x280-braj-post-top
				google_ad_slot = "3070229909";
				google_ad_width = 336;
				google_ad_height = 280;
				//--></script>
				<script type="text/javascript"
				src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
				</script>
			</div><!-- /post-ad-top -->
		</div><!-- /post -->
	</div><!-- /primary-single -->
	
	<div id="secondary">
		<?php include(TEMPLATEPATH."/inc/tag-clouds.php");?>
	</div><!-- /secondary -->
	
	<div id="tertiary">
		<?php include(TEMPLATEPATH."/inc/ads-prm.php");?>
	</div><!-- /tertiary -->
	<div class="clear"><!-- /yeah, we're done with the primary content --></div>
</div><!-- /content-primary -->

<div id="content-secondary">
	<div id="single">
		<div id="single-entry">
			<div class="entry">
				<?php the_content(''); ?>
				<?php edit_post_link('Edit this entry','<p class="more-edit">','</p>'); ?>
			</div><!-- /entry -->
			<div id="social-activity">
				<div id="social-digg">
					<script type="text/javascript">
					digg_url = '<?php the_permalink() ?>';
					digg_title = '<?php the_title(); ?>';
					digg_bodytext = '<?php the_excerpt(); ?>';
					digg_media = 'news';
					digg_topic = ''; <!-- find a way to get this through the post - WP custom fields? -->
					</script>
					<script src="http://digg.com/tools/diggthis.js" type="text/javascript"></script>
				</div><!-- /social-digg -->
				<p><span class="social-bookmark"><strong>Like the article?</strong> <a href="">Email a friend</a> or share, bookmark, digg it</span>
				<br />Don't like it? It's OK, <a href="">email me</a> with your suggestions.</p>
				<p class="social-icons">
					<a href="http://www.mixx.com/" onclick="window.location='http://www.mixx.com/submit?page_url='+window.location; return false;" title="Add to Mixx!"><img src="<?php bloginfo('template_directory'); ?>/i/iconsocial/mixx.png" alt="Add to Mixx!" /></a>	
					<a href="http://del.icio.us/post?url=<?php the_permalink() ?>&title=<?php the_title(); ?>" title="Add to Del.icio.us"><img src="<?php bloginfo('template_directory'); ?>/i/iconsocial/delicious_32x32.png" alt="Add to Del.icio.us" /></a>
					<a href="http://www.newsvine.com/_tools/seed&save?u=<?php the_permalink() ?>&h=<?php the_title(); ?>" title="Add to Newsvine"><img src="<?php bloginfo('template_directory'); ?>/i/iconsocial/Newsvine_32x32.png" alt="Add to Newsvine" /></a>
					<a href="http://blinklist.com/index.php?Action=Blink/addblink.php&Url=<?php the_permalink() ?>&Title=<?php the_title(); ?>" title="Add to Blinlist"><img src="<?php bloginfo('template_directory'); ?>/i/iconsocial/Blinklist_32x32.png" alt="Add to Blinklist" /></a>
					<a href="http://reddit.com/submit?url=<?php the_permalink() ?>&title=<?php the_title(); ?>" tite="Add to Reddit"><img src="<?php bloginfo('template_directory'); ?>/i/iconsocial/Reddit_32x32.png" alt="Reddit" /></a>
					<a href="http://technorati.com/faves?add=<?php the_permalink() ?>" title="Add to Technorati Favorites"><img src="<?php bloginfo('template_directory'); ?>/i/iconsocial/technorati_32x32.png" alt="Technorati" /></a>
					<a href="http://www.stumbleupon.com/submit?url=<?php the_permalink() ?>&title=<?php the_title(); ?>" title="Add to Stumbleupon"><img src="<?php bloginfo('template_directory'); ?>/i/iconsocial/Stumbleupon_32x32.png" alt="Add to Stumbleupon" /></a>
				</p>
			</div><!-- /social-activity -->
		</div><!-- /single-entry -->
		<div id="single-entry-meta">
			<h5 class="top">Article</h5>
			<p>Posted on <?php the_time('jS M, Y') ?> at <?php the_time('g:i a') ?>
			<br />Filed in <?php the_category(', ') ?></p>			
			<h5>Author</h5>
			<p><a href="<?php the_author_url(); ?> "><?php the_author_nickname(); ?></a>, <?php the_author_description(); ?></p>
			<h5>Comments</h5>
			<p>There are currently <?php comments_number('no comments', 'one comment', '% comments' );?> on this article.
				<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
				// Both Comments and Pings are open ?>
				You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.				
				<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
				// Only Pings are Open ?>
				Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.				
				<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
				// Comments are open, Pings are not ?>
				You can skip to the end and <a href="#respond">leave a response</a>. Pinging is currently not allowed.				
				<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
				// Neither Comments, nor Pings are open ?>
				Both comments and pings are currently closed.
				<?php } ?>
			</p>			
			<p><?php the_tags('<h5>Tags</h5>', ', ', ''); ?></p>
			
			<h5>Endorsements</h5>
			<a href="http://www.teknopoint.info/" title="Teknopoint Multimedia - The ultimate in Adobe Technologies Training in India"><img src="http://media.brajeshwar.com/i/ads/teknopoint-260x100.png" alt="Teknopoint Multimedia - The ultimate in Adobe Technologies Training in India" style="border: 0 none; height: 100px; width: 260px;" /></a>
			
			<h5>Links found in this Article</h5>
			<p>Will someone please suggest me how to do this one?</p>
			<h5>Related Articles</h5>
			<ul><?php related_posts(); ?></ul>
			<h5>Popular Articles</h5>
			<p>Will someone please suggest me how to do this one?</p>
			<h5>Do More</h5>
			<ul>
				<li>Stumble on a <a href="<?php bloginfo('url'); ?>/?random">Random Article</a></li>
				<?php previous_post_link('<li>Prev Article: %link</li>', '%title', FALSE, ''); ?>
				<?php next_post_link('<li>Next Article: %link</li>', '%title', FALSE, ''); ?>
			</ul>
		</div><!-- /single-entry-meta -->
	<div class="clear"><!-- /clear, single post entry wrapper ends --></div>
	</div><!-- /single -->
	
</div><!-- /content-secondary -->
<?php endwhile; else: ?>
	oops! nothing found, so let's rebuild the whole thing? Nah! Find a better way to do this.
<?php endif; ?>

<?php comments_template(); ?>

<?php get_footer(); ?>