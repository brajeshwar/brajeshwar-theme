<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<title><?php wp_title(' '); ?><?php if(wp_title(' ', false)) { echo ' - '; } ?><?php bloginfo('name'); ?></title>

<!-- meta -->
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />

<!-- stylesheet(s) -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen, projection" />

<!-- links -->
<link rel="start" href="<?php bloginfo('url'); ?>" title="Home" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!-- tabber -->
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/lib/tabber/tabber-minimized.js"></script>
<script type="text/javascript"><!--//--><![CDATA[//><!--
sfHover = function() {
	var sfEls = document.getElementById("nav").getElementsByTagName("LI");
	for (var i=0; i<sfEls.length; i++) {
		sfEls[i].onmouseover=function() {
			this.className+=" sfhover";
		}
		sfEls[i].onmouseout=function() {
			this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
		}
	}
}
if (window.attachEvent) window.attachEvent("onload", sfHover);
//--><!]]></script>

<!-- favicon -->
<link href="<?php bloginfo('url'); ?>/favicon.ico"  type="image/x-icon" rel="icon" />
<link href="<?php bloginfo('url'); ?>/favicon.ico" type="image/x-icon" rel="shortcut icon" />

<?php wp_head(); ?>
</head>
<body id="<?php echo (is_page()) ? get_query_var('name') : ((is_home()) ? "home" : ((is_single()) ? "archives": ((is_category()) ? "archives" : ((is_archive()) ? "archives" : "")))); ?>">

<!-- START: wrapper (wrapper ends its DIV in footer.php) -->
<div id="wrapper">

<div id="header">
	<div id="notice">
		<span class="title">I've something to say</span>Welcome to the new fresh design - <a href="">Brajeshwar Resurrect</a>.
	</div><!-- /notice -->

	<div id="nav">
		<ul>
			<li<?php if (is_home()) { echo " class=\"current_page_item\""; } ?>><a href="<?php bloginfo('url'); ?>">Home</a></li>
			<?php wp_list_pages('depth=1&sort_order=asc&exclude=44&title_li='); ?>
		</ul>
	</div><!-- /nav -->

	<div id="nav-right">
		<div class="alignleft"><a href="" title="Email & Other Subscriptions">Email & Other Subscriptions</a></div>
		<div class="alignright rss-feed"><a href="<?php bloginfo('rss2_url'); ?>" title="Subscribe to the RSS Feed">RSS Feed</a></div>
	</div><!-- /nav-right -->
	<div class="clear"><!-- --></div>

	<div id="title">
		<h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>" accesskey="1"><?php bloginfo('name'); ?></a></h1>
	</div><!-- /title -->

	<div id="header-meta">
		<span class="hd-meta-attribute">Search</span><span class="hd-meta-value">
			<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
				<label class="hide" for="s" >Search</label>
				<span class="search-input-l"><!-- this is by far the best way I can come up with :-( --></span>
				<span class="search-input"><input type="text" name="s" id="s" value="Type &amp; hit Enter _" onfocus="if (this.value == 'Type &amp; hit Enter _') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Type &amp; hit Enter _';}" />
				<span class="search-input-r"></span>
				<label class="hide" for="searchsubmit">Go</label>
				<input class="hide" type="submit" id="searchsubmit" value="Search" />
			</form>
		</span>
		<span class="hd-meta-attribute">Archives</span><span class="hd-meta-value">
			<select id="archive-menu" name="archive-menu" onchange="document.location.href=this.options[this.selectedIndex].value;">
				<option value="">Select Month</option>
				<?php wp_get_archives('type=monthly&format=option'); ?>
			</select>
		</span>
		<span class="hd-meta-attribute">Categories</span><span class="hd-meta-value">
			<?php wp_dropdown_categories('orderby=name&hierarchical=1'); ?>
			<script type="text/javascript">
				<!--
				var dropdown = document.getElementById("cat");
				function onCatChange() { if ( dropdown.options[dropdown.selectedIndex].value > 0 ) { location.href = "<?php bloginfo('url'); ?>/?cat="+dropdown.options[dropdown.selectedIndex].value; } } dropdown.onchange = onCatChange;
				-->
			</script>		
		</span>
	</div><!-- /header-meta -->
	<div class="clear"><!-- --></div>
</div><!-- /header -->