<?php get_header(); ?>

<!-- BEGIN #wrap -->
<div id ="wrap">

<?php include (TEMPLATEPATH . "/col-left.php"); ?>

<!-- BEGIN #col-main -->
<div id="col-main">

<?php if (have_posts()) : ?>

<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php /* If this is a category archive */ if (is_category()) { ?>
<h3 class="sec-title">Archive for the '<?php echo single_cat_title(); ?>' category</h3>

<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
<h3 class="sec-title">Archive for <?php the_time('F jS, Y'); ?></h3>

<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
<h3 class="sec-title">Archive for <?php the_time('F, Y'); ?></h3>

<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
<h3 class="sec-title">Archive for <?php the_time('Y'); ?></h3>

<?php /* If this is a search */ } elseif (is_search()) { ?>
<h3 class="sec-title">Search Results</h3>

<?php /* If this is an author archive */ } elseif (is_author()) { ?>
<h3 class="sec-title">Author Archive</h3>

<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
<h3 class="sec-title">Blog Archives</h3>

<?php } ?>

<?php while (have_posts()) : the_post(); ?>
<!-- BEGIN post -->
<div class="post">
<h2 class="post-title"><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>
<p class="post-meta"><?php the_time('F jS, Y') ?> / <?php the_category(', ') ?> / <?php comments_popup_link('No comments', '1 comment', '% comments','Comments are off for this post'); ?></p>
<div class="post-body">
<?php the_content('&#x21E5; Continue reading'); ?>
</div>
</div>
<?php endwhile; ?>
<!-- END post -->

<div class="content-navigate clearfix">
<span class="alignleft"><?php next_posts_link('&#x2190; Previous Entries') ?></span>
<span class="alignright"><?php previous_posts_link('Next Entries &#x2192;') ?></span>
</div>

<?php else : ?>

<h3>Not Found</h3>
<?php include (TEMPLATEPATH . '/searchform.php'); ?>

<?php endif; ?>

</div>
<!-- END #col-main -->

<?php include (TEMPLATEPATH . "/col-right.php"); ?>

<?php get_footer(); ?>