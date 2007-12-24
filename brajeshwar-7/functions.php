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
	<li><a href="http://rag.nu/" title="Rag.nu">Dave's Site</a></li>
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
		

/*
File Name: Wordpress Theme Toolkit
Version: 1.0
Author: Ozh
Author URI: http://planetOzh.com/
*/

/************************************************************************************
 * THEME USERS : don't touch anything !! Or don't ask the theme author for support :)
 ************************************************************************************/

include(dirname(__FILE__).'/themetoolkit.php');

/************************************************************************************
 * THEME AUTHOR : edit the following function call :
 ************************************************************************************/

themetoolkit(
	'ragdotnu', /* Make yourself at home :
			* Name of the variable that will contain all the options of
			* your theme admin menu (in the form of an array)
			* Name it according to PHP naming rules (http://php.net/variables) */

	array(     /* Variables used by your theme features (i.e. things the end user will
			* want to customize through the admin menu)
 			* Syntax :
			* 'option_variable' => 'Option Title ## optionnal explanations',
			* 'option_variable' => 'Option Title {radio|value1|Text1|value2|Text2} ## optionnal explanations',
			* 'option_variable' => 'Option Title {textarea|rows|cols} ## optionnal explanations',
			* 'option_variable' => 'Option Title {checkbox|option_varname1|value1|Text1|option_varname2|value2|Text2} ## optionnal explanations',
			* Examples :
			* 'your_age' => 'Your Age',
			* 'cc_number' => 'Credit Card Number ## I can swear I will not misuse it :P',
			* 'gender' => 'Gender {radio|girl|You are a female|boy|You are a male} ## What is your gender ?'
			* Dont forget the comma at the end of each line ! */
	'errormail' => 'Receive error emails {radio|true|Yes|false|No}',
	'keywords' => 'Site keywords {textarea|6|50}',
	'ad_channel' => 'Google Ad Channel ## For instance, 7414363817',
	'ad_client' => 'Google Ad Client ## For instance, pub-6919544971026686',				
	'debug' => 'debug', 	/* this is a fake entry that will activate the "Programmer's Corner"
			 * showing you vars and values while you build your theme. Remove it
			 * when your theme is ready for shipping */
	),
	__FILE__	 /* Parent. DO NOT MODIFY THIS LINE !
			  * This is used to check which file (and thus theme) is calling
			  * the function (useful when another theme with a Theme Toolkit
			  * was installed before */
);

/************************************************************************************
 * THEME AUTHOR : Congratulations ! The hard work is all done now :)
 *
 * From now on, you can create functions for your theme that will use the array
 * of variables $mytheme->option. For example there will be now a variable
 * $mytheme->option['your_age'] with value as set by theme end-user in the admin menu.
 ************************************************************************************/

/***************************************
 * Additionnal Features and Functions
 *
 * Create your own functions using the array
 * of user defined variables $mytheme->option.
 *
 **************************************/

function ragnu($input) {
	global $ragdotnu;
	print $ragdotnu->option[$input];
}

/* default values upon theme install */
if (!$ragdotnu->is_installed()) {
	$set_defaults['errormail'] = 'true';
	$set_defaults['ad_channel'] = '7414363817';
	$set_defaults['ad_client'] = 'pub-6919544971026686';	
	$set_defaults['keywords'] = 'David Stoline rag nu';
	$result = $ragdotnu->store_options($set_defaults);
}

?>
