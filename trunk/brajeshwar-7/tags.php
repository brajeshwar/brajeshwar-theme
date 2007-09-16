<?php get_header(); ?>

<!-- BEGIN #wrap -->
<div id ="wrap">

<?php include (TEMPLATEPATH . "/col-left.php"); ?>

<!-- BEGIN #col-main -->
<div id="col-main">

<h3 class="sec-title"><?php the_title(); ?></h3>

<div class="post">
<div class="post-body">
	<p><?php wp_tag_cloud('smallest=9&largest=30'); ?></p>
	<?php edit_post_link('&uarr; edit this page'); ?>
</div>
</div>

</div>
<!-- END #col-main -->

<?php include (TEMPLATEPATH . "/col-right.php"); ?>

<?php get_footer(); ?>