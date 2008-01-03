<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="content-primary">
	<div id="primary-single">
		<div class="post" id="post-<?php the_ID(); ?>">
			<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<div class="post-excerpt">
				<?php the_excerpt_reloaded(50, '<a><em><strong>', 'excerpt', FALSE, 'Valid only for TRUE in prev value', FALSE, 1, TRUE); ?>
			</div><!-- /post-excerpt -->
			<span class="excerpt-footer"><a href="#post-starts">Article continues</a></span>
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
</div><!-- /content-primary -->
<div class="clear"><!-- /yeah, we're done with the primary content --></div>
<div id="content-secondary">
	<div id="single">
		<div id="single-entry">
			<div class="entry">
				<a id="post-starts"></a>
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
					<a href="http://reddit.com/submit?url=<?php the_permalink() ?>&title=<?php the_title(); ?>" title="Add to Reddit"><img src="<?php bloginfo('template_directory'); ?>/i/iconsocial/Reddit_32x32.png" alt="Reddit" /></a>
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
			<p><a href="<?php the_author_url(); ?> "><?php the_author(); ?></a>, <?php the_author_description(); ?></p>
			<p><?php the_tags('<h5>Tags</h5>', ', ', ''); ?></p>
						
			<h5>Related Articles</h5>
			<ul><?php related_posts(); ?></ul>
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