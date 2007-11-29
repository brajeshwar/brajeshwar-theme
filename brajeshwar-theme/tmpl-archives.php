<?php
/*
Template Name: Archives Template
*/
?>

<?php get_header(); ?>

<div id="content-primary">
	<div id="primary">
		<div class="tabber">
			<div class="tabbertab">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<h3><?php the_title(); ?></h3><!-- /needed but not displayed -->
				<div class="entry archives">
					<?php year_month_archives (); ?>
					<span class="more-archives"><a href="#content-secondary">View the complete Archive</a></span>
				</div>
				<div class="clear"></div>            
				<?php endwhile; ?>
				<?php else : ?>
				<div class="post">
					<h2 class="post-title">Not Found</h2>
					<p>Sorry, but you are looking for something that isn't here.</p>
				</div>		
				<?php endif; ?>
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
		<span class="tags-footer"><a href="#" title="View all tags">View all tags</a></span>
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