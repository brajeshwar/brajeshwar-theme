<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="content-primary">
	<div id="primary-single">
		<div class="post" id="post-<?php the_ID(); ?>">
			<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<div class="post-excerpt"><?php the_excerpt_reloaded(55, '<a><em><strong>', 'excerpt', FALSE, 'Valid only for TRUE in prev value', FALSE, 1, TRUE); ?></div>
			<span class="excerpt-footer"><a href="#content-secondary">Article continues</a></span>
			<div class="clear"><!-- --></div>
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
			</div>
		</div><!-- /post -->
	</div><!-- /primary -->
	
	<div id="secondary">
		<?php if ( function_exists('wp_tag_cloud') ) : ?>
			<div id="tags-container">
				<h2>Popular Tags</h2>
				<?php wp_tag_cloud('smallest=8&largest=16&unit=pt&number=30&orderby=name&format=list'); ?>
			</div><!-- /tags-container -->
		<?php endif; ?>
		<span class="tags-footer"><a href="<?php bloginfo('url'); ?>/tags/" title="View all tags">View all tags</a></span>
	</div><!-- /secondary -->
	
	<div id="tertiary">
		<a href="<?php bloginfo('url'); ?>/ads/" title="Advertise Here" class="ad-300x250"><img src="<?php bloginfo('template_directory'); ?>/i/ads/ad-300x250.jpg" alt="Advertise Here" /></a>
		<a href="<?php bloginfo('url'); ?>/ads/" title="Advertise Here" class="ad-125x125"><img src="<?php bloginfo('template_directory'); ?>/i/ads/ad-125x125-alpha.jpg" alt="Advertise Here" /></a>
		<a href="<?php bloginfo('url'); ?>/ads/" title="Advertise Here" class="ad-125x125"><img src="<?php bloginfo('template_directory'); ?>/i/ads/ad-125x125-beta.jpg" alt="Advertise Here" /></a>
		<a href="<?php bloginfo('url'); ?>/ads/" title="Advertise Here" class="ad-125x125-here"><img src="<?php bloginfo('template_directory'); ?>/i/ads/advertise-here.gif" alt="Advertise Here" /></a>
		<span class="more-ads">Premium Sponsors | <a href="#ad-icon">view more</a></span>
	</div><!-- /tertiary -->
	<div class="clear"><!-- /yeah, we're done with the primary content --></div>
</div><!-- /content-primary -->

<div id="content-secondary">
	<div id="single">
		<div id="single-entry">
			<div class="entry"><?php the_content(''); ?></div>
			<div id="social-activity">
				<div id="social-digg">
					<script type="text/javascript">
					digg_url = '<?php the_permalink() ?>';
					digg_title = '<?php the_title(); ?>';
					digg_bodytext = '<?php the_excerpt(); ?>';
					digg_topic = 'TOPIC'; <!-- find a way to get this through the post - WP custom fields? -->
					</script>
					<script src="http://digg.com/tools/diggthis.js" type="text/javascript"></script>
				</div>
				<p><span class="social-bookmark"><strong>Like the article?</strong> <a href="">Email a friend</a> or share, bookmark, digg it</span>
				<br />Don't like it? It's OK, <a href="">email me</a> with your suggestions.</p>
				<p class="social-icons">
					<a href="http://del.icio.us/post?url=<?php the_permalink() ?>&title=<?php the_title(); ?>" title="Add to Del.icio.us"><img src="<?php bloginfo('template_directory'); ?>/i/iconsocial/delicious_32x32.png" alt="Add to Del.icio.us" /></a>
					<a href="http://www.newsvine.com/_tools/seed&save?u=<?php the_permalink() ?>&h=<?php the_title(); ?>" title="Add to Newsvine"><img src="<?php bloginfo('template_directory'); ?>/i/iconsocial/Newsvine_32x32.png" alt="Add to Newsvine" /></a>
					<a href="http://blinklist.com/index.php?Action=Blink/addblink.php&Url=<?php the_permalink() ?>&Title=<?php the_title(); ?>" title="Add to Blinlist"><img src="<?php bloginfo('template_directory'); ?>/i/iconsocial/Blinklist_32x32.png" alt="Add to Blinklist" /></a>
					<a href="http://reddit.com/submit?url=<?php the_permalink() ?>&title=<?php the_title(); ?>" tite="Add to Reddit"><img src="<?php bloginfo('template_directory'); ?>/i/iconsocial/Reddit_32x32.png" alt="Reddit" /></a>
					<a href="http://technorati.com/faves?add=<?php the_permalink() ?>" title="Add to Technorati Favorites"><img src="<?php bloginfo('template_directory'); ?>/i/iconsocial/technorati_32x32.png" alt="Technorati" /></a>
					<a href="http://www.stumbleupon.com/submit?url=<?php the_permalink() ?>&title=<?php the_title(); ?>" title="Add to Stumbleupon"><img src="<?php bloginfo('template_directory'); ?>/i/iconsocial/Stumbleupon_32x32.png" alt="Add to Stumbleupon" /></a>
				</p>
			</div>
		</div><!-- /single-entry -->
		<div id="single-entry-meta">			
			<h5 class="top">Author</h5>
			<p><a href="<?php the_author_url(); ?> "><?php the_author_nickname(); ?></a>, <?php the_author_description(); ?></p>
			<p>Posted on <?php the_time('jS M, Y') ?> at <?php the_time('g:i a') ?>
			<br />Filed in <?php the_category(', ') ?></p>			
			<h5>Comments</h5>
			<p>There are currently <?php comments_number('no comments', 'one comment', '% comments' );?> on this article.
			If you like to <a href="">add your response</a>, please feel free to do so.</p>			
			<p>You can also subscribe to the <a href="">RSS feed</a> of the comments on this article.</p>
			<p><span class="codeBlue"><em>Note:</em></span> Option to subscribe to comments with your emails is available at the bottom of the comment/response fields.</p>
			<p><?php the_tags('<h5>Article tagged with</h5>', ', ', ''); ?></p>
			<h5>Links found in this Article</h5>
			<ul>
				<li><a href="">No idea yet</a></li>
			</ul>
			<h5>Related to this Article</h5>
			<ul><li>An entry</li></ul>
			<h5>Popular Articles</h5>
			<ul><li>An entry</li></ul>
			<h5>Do More</h5>
			<ul>
				<li>Stumble on a <a href="<?php bloginfo('url'); ?>/?random">Random Article</a></li>
				<li><?php previous_post_link('Prev Article: %link', '%title', FALSE, ''); ?></li>
				<li><?php next_post_link('Next Article: %link', '%title', FALSE, ''); ?></li>
			</ul>
		</div><!-- /single-entry-meta -->
	<div class="clear"><!-- post ends --></div>
	</div><!-- /single -->
	
	<?php comments_template(); ?>
	
</div><!-- /content-secondary -->
<?php endwhile; else: ?>
oops! nothing found, so let's rebuild the whole thing? Nah! Find a better way to do this.
<?php endif; ?>

<?php get_footer(); ?>