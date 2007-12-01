<?php get_header(); ?>

<div id="content-primary">
	<div id="primary">
		<?php $my_query = new WP_Query('category_name=featured&showposts=1'); while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
		<h2 class="post-title" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php title_excerpt('', '', true, '100') ?></a></h2> 
			<div class="entry">
				<?php the_content(''); ?>
				<span class="more-post"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">Read the article</a></span>
				<span class="more-comment"><?php comments_popup_link('no comments', 'one comment', '% comments' );?></span>
			</div>
			<?php endwhile; ?>			
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
	<?php if (have_posts()) : while (have_posts()) : the_post();
	if( $post->ID == $do_not_duplicate ) continue; update_post_caches($posts); ?>
	<div class="post" id="post-<?php the_ID(); ?>">
		<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php title_excerpt('', '', true, '30') ?></a></h2>
		<div class="post-article"><?php the_excerpt_reloaded(40, '<p></p><a></a><strong></strong><em></em>', 'excerpt', FALSE, 'more_link_text (depend on the prev value)', FALSE, 1, TRUE); ?></div>
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
	<div class="clear"><!--  --></div>
</div><!-- /content-secondary -->

<?php get_footer(); ?>