<?php get_header(); ?>

<!-- BEGIN #wrap -->
<div id ="wrap">

<?php include (TEMPLATEPATH . "/col-left.php"); ?>

<!-- BEGIN #col-main -->
<div id="col-main">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="post" id="post-<?php the_ID(); ?>">
<h2 class="post-title"><?php the_title(); ?></h2>
<div class="post-body">
<div class="article-skip"><a href="#article">&#x2193; skip to article</a></div>

<!-- START #ads -->
<script type="text/javascript"><!--
google_ad_client = "<?php ragnu('ad_client'); ?>";
google_ad_width = 336;
google_ad_height = 280;
google_ad_format = "336x280_as";
google_ad_type = "text_image";
//2007-03-29: brajeshwar-theme
google_ad_channel = "<?php ragnu('ad_channel'); ?>";
//-->
</script>
<script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<!-- END #ads -->

<div class="article-skip"><a id="article"></a></div>
<?php the_content(''); ?>
<p><?php the_tags(); ?></p>

<p class="post-meta-ind">
<span class="meta-name">Technorati :</span> <span class="meta-detail"><a class="tr-linkcount" href="http://technorati.com/search/<?php the_permalink(); ?>">View blog reactions</a></span><br />
<span class="meta-name">Posted at :</span> <span class="meta-detail"><?php the_time('F jS, Y - g:i a') ?></span><br />
<span class="meta-name">Filed under :</span> <span class="meta-detail"><?php the_category(', ') ?></span><br />
<span class="meta-name">Navigate :</span> <span class="meta-detail"><?php previous_post('%','Previous post', 'no'); ?> / <?php next_post('%','Next post', 'no'); ?></span>
<?php edit_post_link('Edit', ' / ', ''); ?>
</p>
</div>
</div>

<?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<?php comments_template(); ?>

</div>
<!-- END #col-main -->

<?php include (TEMPLATEPATH . "/col-right.php"); ?>

<?php get_footer(); ?>