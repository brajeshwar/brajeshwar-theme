<?php
/*
Template Name: Contact Template
*/
?>

<?php get_header(); ?>

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/styles-gbcf-brajeshwar.css" type="text/css" media="screen, projection" />
<!--[if IE]><script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/lib/gbcf/gbcf_focus.js"></script><![endif]-->

<div id="content-primary">
	<div id="primary" class="pages">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>		
			<div class="post">
				<h2 class="post-title"><?php the_title(); ?></h2>
				<?php include(TEMPLATEPATH."/lib/gbcf/gbcf_form.php");?>
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