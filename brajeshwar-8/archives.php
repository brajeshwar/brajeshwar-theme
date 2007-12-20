<?php
/*
Template Name: Archives Template
*/
?>

<?php get_header(); ?>

<div id="content-primary">
	<div id="primary">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h2 class="post-title"><?php the_title(); ?></h2>
		<div class="entry archives">
			<?php year_month_archives (); ?>
			<span class="more-archives"><a href="#content-secondary">View the complete Archive</a></span>
		</div>
		<?php endwhile; ?><?php else : ?>
		<div class="post">
			<h2 class="post-title">Not Found</h2>
			<p>Sorry, but you are looking for something that isn't here.</p>
		</div>		
		<?php endif; ?>
	</div><!-- /primary -->
	
	<div id="secondary">
		<?php include(TEMPLATEPATH."/inc/tag-clouds.php");?>
	</div><!-- /secondary -->
		
	<div id="tertiary">
		<?php include(TEMPLATEPATH."/inc/ads-prm.php");?>
	</div><!-- /tertiary -->
	<div class="clear"><!-- /yeah, we're done with the primary content --></div>
</div><!-- /content-primary -->

<div id="content-secondary">
	<div id="sec-col-A">
		<h2>Articles Archives</h2>
		<?php if (function_exists('srg_clean_archives')) { srg_clean_archives(); } ?>
	</div><!-- /sec-col-A -->
	<div id="sec-col-B">
		<h2>Categories</h2>
		<ul><?php wp_list_categories('orderby=name&show_count=1&hide_empty=1&title_li'); ?></ul>
	</div><!-- /sec-col-B -->
	<div id="sec-col-C">
		<h2>Yearly Archives</h2>
		<ul>
		<?php
		$years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' ORDER BY post_date DESC");
		foreach($years as $year) : 
		?>
		<li><a href="<?php echo get_year_link($year); ?> "><?php echo $year; ?></a></li>
		<?php endforeach; ?>
		</ul>
		<h2>Monthly Archives</h2>
		<ul><?php wp_get_archives('type=monthly&show_post_count=1'); ?></ul>
	</div><!-- /sec-col-C -->
	<div class="clear rule"><!-- END of secondary content --></div>
</div><!-- /content-secondary -->

<?php get_footer(); ?>