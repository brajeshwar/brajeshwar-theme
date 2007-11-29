<?php get_header(); ?>

<div id="content-primary">
	<div id="primary"><!-- remember, it takes sometime for the tabber to kick in and fill in this space -->
		<div class="tabber">
			<div class="tabbertab">
				<h3>Highlights</h3><!-- /needed but not displayed -->
				<?php $my_query = new WP_Query('category_name=featured&showposts=1'); while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
				<div class="post-title" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php title_excerpt('', '', true, '100') ?></a></div>
				<div class="entry">
					<?php the_content(''); ?>
					<span class="more-post"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">Read the article</a></span>
					<span class="more-comment"><a href=""><?php comments_number('no comments', 'one comment', '% comments' );?></a></span>
				</div>
				<div class="clear"></div>            
			<?php endwhile; ?>			
			</div>
			<div class="tabbertab">
				<h3>Popular</h3><!-- /needed but not displayed -->
				<p>Alex King's <a href="http://alexking.org/blog/2007/10/02/popularity-contest-13b2">Popularity Contest</a> plugin would work really well here.</p>
				<?php /* <ol><?php akpc_most_popular(); ?></ol> */ ?>
				<div class="clear"></div>			
			</div>
			<div class="tabbertab">
				<h3>Discussed</h3><!-- /needed but not displayed -->
				<p>Nick Momrik's <a href="http://mtdewvirus.com/code/wordpress-plugins/">Most Commented</a> plugin would work really well here.</p>
				<?php /* <!-- <ol><?php mdv_most_commented(); ?></ol> */ ?>
				<div class="clear"></div>
			</div>
			<div class="tabbertab">
				<h3>Comments</h3><!-- /needed but not displayed -->
				<p>List the latest comments here</p>
				<div class="clear"></div>
			</div>
		</div>
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
	<?php if (have_posts()) : while (have_posts()) : the_post();
	if( $post->ID == $do_not_duplicate ) continue; update_post_caches($posts); ?>
	<div class="post" id="post-<?php the_ID(); ?>">
		<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php title_excerpt('', '', true, '30') ?></a></h2>
		<div class="post-article"><?php the_excerpt_reloaded(60, '<p></p><a></a><strong></strong><em></em>', 'excerpt', FALSE, 'more_link_text (depend on the prev value)', FALSE, 1, TRUE); ?></div>
		<p class="post-meta">Posted on <?php the_time('jS M, Y') ?> at <?php the_time('g:i a') ?> <?php edit_post_link('e_', ' | ', ''); ?>
		<br />By <strong><?php the_author(); ?></strong> in <?php the_category(', ') ?></p>
		<a class="more-post" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">Read the article</a>
		<a class="more-comment" href=""><?php comments_number('no comments', 'one comment', '% comments' );?></a>
	</div>
	<?php endwhile; endif; ?>
	<div class="clear"><!--  --></div>
	<div id="post-nav">
		<?php next_posts_link('<span class="prev">Older Articles</span>', '0') ?>
		<?php previous_posts_link('<span class="next">Newer Articles</span>', '0') ?>
	</div><!-- /post-nav -->
</div><!-- /content-secondary -->

<?php get_footer(); ?>