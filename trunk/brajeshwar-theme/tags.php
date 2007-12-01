<?php
/*
Template Name: Tags Template
*/
?>

<?php get_header(); ?>

<div id="content-primary">
	<div id="primary" class="pages">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>		
			<div class="post">
				<h2 class="post-title"><?php the_title(); ?></h2>
				<ul><?php wp_tag_cloud('smallest=12&largest=30&unit=pt&number=0&format=list&orderby=name&order=ASC'); ?></ul>
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
	<div class="clear"></div>
</div><!-- /content-primary -->

<?php get_footer(); ?>