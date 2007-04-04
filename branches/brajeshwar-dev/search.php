<?php get_header(); ?>

<!-- BEGIN #wrap -->
<div id ="wrap">

<?php include (TEMPLATEPATH . "/col-left.php"); ?>

<!-- BEGIN #col-main -->
<div id="col-main">

<?php if (have_posts()) : ?>

<h3 class="sec-title">Search Results</h3>

<div class="post">
<p>Search results for the term '<?php echo wp_specialchars($s); ?>'.</p>
<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
<div>
<input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
<input type="submit" id="searchsubmit" value="Search" />
</div>
</form>
</div>

<div class="post">

<ul id="search-results-list">
<?php while (have_posts()) : the_post(); ?>
<li>	
<h2 id="post-<?php the_ID(); ?>" class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
<p class="post-meta"><?php ?> <?php the_time('l, F jS, Y') ?> | <?php the_category(', ') ?> | <?php comments_popup_link('No comments', '1 comment', '% comments','Comments are off for this post'); ?></p>
<div class="post-body">
<?php the_excerpt(); ?>
</div>
</li>
<?php endwhile; ?>
</ul>
</div>

<div class="content-navigate">
<span class="alignleft"><?php next_posts_link('&#x2190; Previous Entries') ?></span>
<span class="alignright"><?php previous_posts_link('Next Entries &#x2192;') ?></span>
</div>
	
<?php else : ?>

<div class="post">
<h2 id="post-title">Search Results</h2>
<p>No results were found for the term '<?php echo wp_specialchars($s); ?>'.</p>
</div></div>
<div class="post"><div class="post-inner-plain clearfix">
<p>Try a different search?</h3>
<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
<div>
<input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
<input type="submit" id="searchsubmit" value="Search" />
</div>
</form>
</div>

<?php endif; ?>
		
</div>
<!-- END #col-main -->

<?php include (TEMPLATEPATH . "/col-right.php"); ?>

<?php get_footer(); ?>