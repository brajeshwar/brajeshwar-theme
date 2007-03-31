<!-- BEGIN #col-left -->
<div id="col-left">
	
<div class="left-sec rssicon">
<p><a href="<?php bloginfo('rss2_url'); ?>" title="Subscribe to RSS Feed"><img src="<?php bloginfo('template_directory'); ?>/i/icon-rss.gif" width="72" height="109" alt="Subscribe to RSS Feed" border="0" /></a></p>
</div>

<div class="left-sec categories">
<h3 class="sec-title">Categories</h3>
<ul>
<?php wp_list_cats('sort_column=name&hide_empty=0'); ?> 
</ul>
</div>

<div class="left-sec archives">
<h3 class="sec-title">Archives</h3>
<!-- monthly archives list -->
<ul><?php get_archives('monthly','','','<li>','</li>',''); ?></ul>

<!-- drop down for monthly archives instead of the list, pick your choice (this is particularly useful for old blogs with lots of monthly archives)
<form id="archiveform" action="">
<select name="archive_chrono" onchange="window.location =
(document.forms.archiveform.archive_chrono[document.forms.archiveform.archive_chrono.selectedIndex].value);">
<option value=''>Select Month</option>
<?php get_archives('monthly','','option'); ?>
</select>
</form>
-->

</div>
</div>
<!-- END #col-left -->