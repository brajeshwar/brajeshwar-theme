<!-- BEGIN #col-right -->
<div id="col-right">

<div class="right-sec search">
<h3 class="sec-title">Search</h3>
<?php include (TEMPLATEPATH . '/searchform.php'); ?>
</div>

<div class="right-sec links">
<h3 class="sec-title">Links</h3>
<ul>
<?php get_links('-1', '<li>', '</li>', '', 0, 'name', 0, 0, -1, 0); ?>
</ul>
</div>

<div class="right-sec feed">
<h3 class="sec-title">Subscribe</h3>
<ul>
<li><a href="<?php bloginfo_rss('rss2_url'); ?>" title="Feed for posts">Posts (RSS)</a></li>
<li><a href="<?php bloginfo_rss('comments_rss2_url'); ?>" title="Feed for comments">Comments (RSS)</a></li>
</ul>
</div>

<div class="right-sec meta">
<h3 class="sec-title">Meta</h3>
<ul>
	<?php wp_register(); ?>
	<li><?php wp_loginout(); ?></li>
	<li><a href="http://wordpress.org/" title="Powered by WordPress">WordPress <?php bloginfo('version'); ?></a></li>
	<?php wp_meta(); ?>
</ul>
</div>

<div class="right-sec etc">
<h3 class="sec-title">Etcetera</h3>
<p><script src="http://widgets.technorati.com/t.js" type="text/javascript"></script><a href="http://technorati.com/blogs/<?php bloginfo('url'); ?>?sub=tr_authority_t_ns" class="tr_authority_t_js" style="color:#4261DF">Technorati blog authority</a></p>
</div>

</div>
<!-- END #col-right -->