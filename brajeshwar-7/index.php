<?php get_header(); ?>

<!-- BEGIN #latest -->
<div id="latest"><div id="latest-inner">
		
<div id="post-latest">
<?php
$posts = get_posts('numberposts=1');
foreach($posts as $post) : setup_postdata($post);
?>
<h2 class="post-title"><a href="<?php the_permalink() ?>" title="Permanent link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
<p class="post-meta"><?php the_time('F jS, Y') ?> / <?php the_category(', ') ?> / <?php comments_popup_link('No comments', '1 comment', '% comments','Comments are off for this post'); ?><?php edit_post_link('Edit&hellip;', ' / ', ''); ?></p>
<div class="post-body">
<?php the_excerpt(); ?>
<p class="more"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">&mdash; Read the article in full</a></p>
</div>
</div>
<?php endforeach; ?>

<div id="sec-about">
<h3 class="sec-title">About</h3>
<p><?php bloginfo('description'); ?></p>
<p class="more"><a href="<?php bloginfo('url'); ?>/about/" title="Read More">Read More &nbsp; ...</a></p>
</div>

<div class="clear"></div>
</div></div>
<!-- END #latest -->

<!-- START #ads -->
<div id="ads-home">
<script type="text/javascript"><!--
google_ad_client = "pub-4468481779445136";
/* braj-theme-728x90 */
google_ad_slot = "9945173142";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
<!-- END #ads -->

<!-- BEGIN #wrap -->
<div id ="wrap">

<?php include (TEMPLATEPATH . "/col-left.php"); ?>

<!-- BEGIN #col-main -->
<div id="col-main">

<h3 class="sec-title">Recent articles</h3>
<?php
$pg_no = $paged== 0 ? 1 : $paged;
$post_perpage = get_settings('posts_per_page');
$offset = ($pg_no - 1) * $post_perpage + 1;
$posts = get_posts('numberposts=' .$post_perpage. '&offset=' . $offset);
foreach($posts as $post) : setup_postdata($post);
?>
<div class="post" id="post-<?php the_ID(); ?>">
<h2 class="post-title"><a href="<?php the_permalink() ?>" title="Permanent link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
<p class="post-meta"><?php the_time('F jS, Y') ?> / <?php the_category(', ') ?> / <?php comments_popup_link('No comments', '1 comment', '% comments','Comments are off for this post'); ?><?php edit_post_link('e &hellip;', ' / ', ''); ?></p>
<div class="post-body">
<?php the_content('&mdash; Continue reading'); ?>
</div>
</div>
<?php endforeach; ?>

<div class="content-navigate">
<span class="alignleft"><?php next_posts_link('&#x2190; Previous Entries') ?></span>
<span class="alignright"><?php previous_posts_link('Next Entries &#x2192;') ?></span>
</div>

</div>
<!-- END #col-main -->

<?php include (TEMPLATEPATH . "/col-right.php"); ?>

<?php get_footer(); ?>