<?php get_header(); ?>

<div id="content-primary">
	<div id="primary">
		<h2 class="post-title"><span class="codeRed">404 - Not Found</span></h2> 
			<div class="entry">
				<!-- generate a random image for the 404 Page -->
				<img src="http://static.brajeshwar.com/wp-brajeshwar-8/404/" alt="404 - Not Found" width="460px" height="260px" border="0" />
				<p>Oops! it looks like I've lost the page you're looking for. Please try the <strong>Search</strong> or you can <a href="/contact/">contact</a> me.
				You may also looking at the latest articles listed below.</p>
			</div>
	</div><!-- /primary -->
	
	<div id="secondary">
		<?php include(TEMPLATEPATH."/inc/tag-clouds.php");?>
	</div><!-- /secondary -->
	
	<div id="tertiary">
		<?php include(TEMPLATEPATH."/inc/ads-prm.php");?>
	</div><!-- /tertiary -->
	<div class="clear"></div>
</div><!-- /content-primary -->

<div id="content-secondary">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
		<p>More articles available in the <a href="/archives/">Archives</a></p>
	</div><!-- /post-nav -->
</div><!-- /content-secondary -->

<?php get_footer(); ?>