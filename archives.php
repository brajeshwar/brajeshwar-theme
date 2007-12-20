<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<!-- BEGIN #wrap -->
<div id ="wrap">

<?php include (TEMPLATEPATH . "/col-left.php"); ?>

<!-- BEGIN #col-main -->
<div id="col-main">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h3 class="sec-title"><?php the_title(); ?></h3>

<!-- BEGIN post -->
<div class="post">

<h2 class="post-title">Archives - Yearly</h2>

<div class="post-body">
<ul>
<?php
$years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' ORDER BY post_date DESC");
foreach($years as $year) : 
?>
<li><a href="<?php echo get_year_link($year); ?> "><?php echo $year; ?></a></li>
<?php endforeach; ?>
</ul>
</div>

<h2 class="post-title">Archives - Monthly</h2>
<div class="post-body">
<ul><?php wp_get_archives('type=monthly&show_post_count=1'); ?></ul>
</div>

<h2 class="post-title">Categories</h2>
<div class="post-body">
<ul><?php wp_list_categories('orderby=name&show_count=1&hide_empty=1&title_li'); ?></ul>
</div>

<h2 class="post-title">The Last 100 Article (if available)</h2>
<div class="post-body">
<ol><?php wp_get_archives('type=postbypost&limit=100&format=html'); ?></ol>
</div>

</div>
<?php endwhile; else : ?>

<h3>Not Found</h3>
<?php include (TEMPLATEPATH . '/searchform.php'); ?>

<?php endif; ?>

</div>
<!-- END #col-main -->

<?php include (TEMPLATEPATH . "/col-right.php"); ?>
<?php get_footer(); ?>