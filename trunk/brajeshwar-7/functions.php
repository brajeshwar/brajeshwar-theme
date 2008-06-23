<?php
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Left Sidebar',
		'before_widget' => '<div class="left-sec %1$s">', // Removes <li>
		'after_widget' => '</div>', // Removes </li>
		'before_title' => '<h3 class="sec-title">', // Replaces <h2>
		'after_title' => '</h3>', // Replaces </h2>
		)
	);

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Right Sidebar',
		'before_widget' => '<div class="right-sec %1$s">', // Removes <li>
		'after_widget' => '</div>', // Removes </li>
		'before_title' => '<h3 class="sec-title">', // Replaces <h2>
		'after_title' => '</h3>', // Replaces </h2>
		)
	);

function widget_mytheme_search() {
?>
<div class="right-sec widget_mytheme_search">
<h3 class="sec-title">Search</h3>
	<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	</div>
<?php
}

if ( function_exists('register_sidebar_widget') )
	register_sidebar_widget(__('Search'), 'widget_mytheme_search');
	
function widget_mytheme_meta() {
?>
<div class="right-sec widget_mytheme_meta">
<h3 class="sec-title">Meta</h3>
	<ul>
	<li><a class="tr-linkcount" href="http://technorati.com/search/<?php echo $_SERVER['HTTP_HOST'];?>" rel="linkcount">Technorati Links</a></li>
	<?php wp_register(); ?>
	<li><?php wp_loginout(); ?></li>
	<?php wp_meta(); ?>
</ul>
</div>
<?php
}

if ( function_exists('register_sidebar_widget') )
	register_sidebar_widget(__('Meta'), 'widget_mytheme_meta');
	
	function widget_mytheme_feed() {
?>
	<div class="right-sec widget_mytheme_feed">
<h3 class="sec-title">Subscribe</h3>
<ul>
<li><a href="<?php bloginfo_rss('rss2_url'); ?>" title="Feed for posts">Posts (RSS)</a></li>
<li><a href="<?php bloginfo_rss('comments_rss2_url'); ?>" title="Feed for comments">Comments (RSS)</a></li>
</ul>
</div>
<?php
}

if ( function_exists('register_sidebar_widget') )
	register_sidebar_widget(__('Feed'), 'widget_mytheme_feed');
	
	function widget_mytheme_rssicon() {
?>
<div class="left-sec rssicon">
<p><a href="<?php bloginfo('rss2_url'); ?>" title="Subscribe to RSS Feed"><img src="<?php bloginfo('template_directory'); ?>/i/icon-rss.gif" width="72" height="109" alt="Subscribe to RSS Feed" /></a></p>
</div>
<?php
}

if ( function_exists('register_sidebar_widget') )
	register_sidebar_widget(__('RSS Icon'), 'widget_mytheme_rssicon');
?>
