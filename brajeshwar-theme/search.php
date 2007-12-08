<?php get_header(); ?>

<div id="content-primary">
	<div id="primary" class="archive">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>		
			<div class="post" id="post-<?php the_ID(); ?>">
				<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<p class="post-meta"><?php the_time('jS M, Y') ?> - <?php the_time('g:i a') ?> <?php edit_post_link('e_', ' | ', ''); ?>
				<br />Filed in <?php the_category(', ') ?>
				<br /><?php comments_popup_link('no comments', 'one comment', '% comments' );?>
				</p>
				<?php the_excerpt_reloaded(200, '<p></p><a></a><strong></strong><em></em>', 'content', FALSE, 'more_link_text (depend on the prev value)', FALSE, 1, TRUE); ?>
				<p><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">Read the article</a></p>
			</div>			
		<?php endwhile; ?>
		<div id="post-nav">
			<?php next_posts_link('<span class="prev">Older Articles</span>', '0') ?>
			<?php previous_posts_link('<span class="next">Newer Articles</span>', '0') ?>
		</div><!-- /post-nav -->
		<?php else : ?>		
		<div class="post">
			<h2 class="post-title">Not Found</h2>
			<p>Sorry, but you are looking for something that isn't here.</p>
		</div>		
		<?php endif; ?>
	</div><!-- /primary -->
		
	<div id="tertiary">
		<?php include(TEMPLATEPATH."/inc/ads-prm.php");?>
	</div><!-- /tertiary -->
	<div class="clear"><!-- /yeah, we're done with the primary content --></div>
</div><!-- /content-primary -->

<?php get_footer(); ?>