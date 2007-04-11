<!-- BEGIN #col-left -->
<div id="col-left">
	
<div class="left-sec rssicon">
<p><a href="<?php bloginfo('rss2_url'); ?>" title="Subscribe to RSS Feed"><img src="<?php bloginfo('template_directory'); ?>/i/icon-rss.gif" width="72" height="109" alt="Subscribe to RSS Feed" border="0" /></a></p>
</div>

<div class="left-sec categories">
<h3 class="sec-title">Categories</h3>
<ul><?php wp_list_categories('orderby=name&show_count=1&hide_empty=1&title_li'); ?></ul>
</div>

<div class="left-sec archives">
<h3 class="sec-title">Archives</h3>

<!-- monthly archives list 
<ul><?php wp_get_archives('type=monthly&show_post_count=1'); ?></ul>
-->

<!-- drop down for monthly archives instead of the list, pick your choice (this is particularly useful for old blogs with lots of monthly archives) -->
<form id="archiveform" action="">
<select name="archive_chrono" onchange="window.location =
(document.forms.archiveform.archive_chrono[document.forms.archiveform.archive_chrono.selectedIndex].value);">
<option value=''>Select Month</option>
<?php get_archives('monthly','','option'); ?>
</select>
</form>

<!-- START: sidebar-left Widget -->
<ul id="sidebar-left">
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(sidebar-left) ) : else : ?>
<?php endif; ?>
</ul>
<!-- END: sidebar-left Widget -->

</div>
</div>
<!-- END #col-left -->