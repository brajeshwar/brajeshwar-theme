<?php get_header(); ?>

<div id="content-primary">
	<div id="primary" class="pages">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>		
			<div class="post">
				<h2 class="post-title"><?php the_title(); ?></h2>
				<?php the_content(''); ?>
				<p><?php edit_post_link('&uarr; edit this page'); ?></p>
			</div>			
		<?php endwhile; ?>
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