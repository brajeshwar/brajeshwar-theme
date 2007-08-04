<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style-wp-gbcf.css" type="text/css" media="screen" />

<!-- BEGIN #wrap -->
<div id ="wrap">

<?php include (TEMPLATEPATH . "/col-left.php"); ?>

<!-- BEGIN #col-main -->
<div id="col-main">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h3 class="sec-title"><?php the_title(); ?></h3>

<!-- BEGIN post -->
<div class="post">
<div class="post-body">

<?php
	// WILL BE PAGE CONTENT
	$post_data=get_post($post->ID); echo $post_data->post_content;

	// FORM SHOWS NEXT
	if (function_exists('wp_gb_contact_form')) {
		gbcf_show();
	} else {
		echo '
		<p>This contact template is best used with
		<a href="http://green-beast.com/blog/?page_id=136">Secure and Accessible PHP Contact Form</a> for WordPress.
		</p>
		';
	}
?>

</div>
</div>
<?php endwhile; else : ?>
<?php endif; ?>

</div>
<!-- END #col-main -->

<?php include (TEMPLATEPATH . "/col-right.php"); ?>
<?php get_footer(); ?>