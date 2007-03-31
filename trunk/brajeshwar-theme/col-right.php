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
	<li><a class="tr-linkcount" href="http://technorati.com/search/<?php echo $_SERVER['HTTP_HOST'];?>" rel="linkcount">Technorati Links</a></li>
	<?php wp_register(); ?>
	<li><?php wp_loginout(); ?></li>
	<li><a href="http://wordpress.org/" title="Powered by WordPress">WordPress <?php bloginfo('version'); ?></a></li>
	<li><a href="http://theme.brajeshwar.com/" title="Brajeshwar Wordpress Theme">Brajeshwar</a></li>
	<!-- TO-DO: put a module to check for the latest theme version visible only to a logged in admin of the site -->
	<?php wp_meta(); ?>
</ul>
</div>

</div>
<!-- END #col-right -->