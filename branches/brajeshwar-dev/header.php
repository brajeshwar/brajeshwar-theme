<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>

<title><?php wp_title(' '); ?><?php if(wp_title(' ', false)) { echo ' - '; } ?><?php bloginfo('name'); ?></title>

<!-- metas -->
<meta name="keywords" content="brajeshwar, design, wordpress, theme" /><!-- feel free to change this to reflect your site -->
<meta name="Description" content="<?php bloginfo('description'); ?>" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />

<!-- start IE specific metas -->
<meta content="off" name="autosize" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="MSSmartTagsPreventParsing" content="true" />

<!-- links -->
<link rel="start" href="<?php bloginfo('url'); ?>" title="Home" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<!-- javascript -->

<!-- favicon -->
<link href="<?php bloginfo('template_directory'); ?>/i/favicon.ico"  type="image/x-icon" rel="icon" />
<link href="<?php bloginfo('template_directory'); ?>/i/favicon.ico" type="image/x-icon" rel="shortcut icon" />

<!-- if you have your own favicon at your site root, then replace the above with this two lines below 
<link href="<?php bloginfo('url'); ?>/favicon.ico"  type="image/x-icon" rel="icon" />
<link href="<?php bloginfo('url'); ?>/favicon.ico" type="image/x-icon" rel="shortcut icon" />
-->

<?php wp_head(); ?>
</head>

<body id="<?php echo (is_page()) ? get_query_var('name') : ((is_home()) ? "home" : ((is_single()) ? "archives": ((is_category()) ? "archives" : ((is_archive()) ? "archives" : "")))); ?>">

<!-- BEGIN #container -->
<div id="container">

<!-- BEGIN #header -->
<div id="header">

<h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>

<ul id="nav">
<li class="<?php if (((is_home()) && !(is_paged())) or (is_archive()) or (is_single()) or (is_paged()) or (is_search())) { ?>current_page_item<?php } else { ?>page_item<?php } ?>"><a href="<?php echo get_settings('home'); ?>">Home</a></li>
<?php wp_list_pages('sort_column=menu_order&depth=1&title_li='); ?>
</ul>

<div class="clear"></div>
</div>
<!-- END #header -->