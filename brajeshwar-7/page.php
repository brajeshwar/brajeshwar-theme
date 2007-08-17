<?php get_header(); ?>

<!-- BEGIN #wrap -->
<div id ="wrap">

<?php include (TEMPLATEPATH . "/col-left.php"); ?>

<!-- BEGIN #col-main -->
<div id="col-main">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h3 class="sec-title"><?php the_title(); ?></h3>

<div class="post" id="post-<?php the_ID(); ?>">
<div class="post-body">
<?php the_content(); ?>
<?php edit_post_link('&uarr; edit this page'); ?>
</div>
</div>

<?php endwhile; endif; ?>

</div>
<!-- END #col-main -->

<?php include (TEMPLATEPATH . "/col-right.php"); ?>

<?php get_footer(); ?>