<div class="clear"><!--  --></div>

<div id="ad-icon">
	<ul><?php wp_list_bookmarks('categorize=0&category=9&show_images=1&show_description=0&orderby=rand&limit=50&title_li'); ?></ul>
</div><!-- /ad-icon -->

<div id="footer">
	<div id="footer-col-A">
		<h2>Sidenotes</h2>
		<?php if (function_exists('sideblog')) { sideblog('asides'); } ?>
		<p>Sidenotes <a href="" class="footer-more">Archive</a>
		<br />Learn how to do <a href="" class="footer-more">this Sidenotes</a>
		</p>
	</div><!-- /footer-col-A -->
	
	<div id="footer-col-B">
		<h2>Friends &amp; Family</h2>
		<ul><?php wp_list_bookmarks('categorize=0&category=2&show_images=0&show_description=0&orderby=rand&limit=30&order=ASC&title_li'); ?></ul>
		<p>View all <a href="" class="footer-more">links</a></p>
	</div><!-- /footer-col-B -->

	<div id="footer-col-C">
		<h2>Random Indulgence</h2>
	</div><!-- /footer-col-C -->

	<div id="footer-col-D">
		<h2><?php _e('Brajeshwar'); ?></h2>
		<p>
		<span class="about-photo"><img src="<?php bloginfo('template_directory'); ?>/i/ui/brajeshwar.jpg" alt="Brajeshwar" /></span>
		My name is Brajeshwar and I run this site.
		Being a firm believer of keeping things simple, I envison pushing the technical envelop
		time and again for the betterment of viable commercial and practical applications.
		Making applications easy for the users is my primary objective while I plan and execute ideas in a team.
		</p>
		<p><a href="/about/" class="footer-more">Read more</a></p>
		<h2><?php _e('My Photos'); ?></h2>
		<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&display=random&size=s&layout=x&source=user&user=51035608580%40N01"></script>
		<p><a href="http://www.flickr.com/photos/brajeshwar/" class="footer-more-flickr">My photos on Flickr</a>
		<br /><a href="http://www.flickr.com/photos/tags/brajeshwar/" class="footer-more-flickr">"Brajeshwar" tagged photos on Flickr</a></p>
		<h2><?php _e('Etcetera'); ?></h2>
		<?php
		/* WP Statistics - posts, comments, tags, categories etc (stolen from the WP core files) */
		$numposts = (int) $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->posts WHERE post_type = 'post' AND post_status = 'publish'");
		$numcomms = (int) $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->comments WHERE comment_approved = '1'");
		$numcats  = wp_count_terms('category');
		$numtags = wp_count_terms('post_tag');
		
		$post_str = sprintf(__ngettext('%1$s Articles', '%1$s Articles', $numposts), number_format_i18n($numposts), '');
		$comm_str = sprintf(__ngettext('%1$s comment', '%1$s comments', $numcomms), number_format_i18n($numcomms), '');
		$cat_str  = sprintf(__ngettext('%1$s category', '%1$s categories', $numcats), number_format_i18n($numcats), '');
		$tag_str  = sprintf(__ngettext('%1$s tag', '%1$s tags', $numtags), number_format_i18n($numtags));
		?>
		<p>
		<?php printf(__('Brajeshwar.com has <strong>%1$s</strong> articles and <strong>%2$s</strong>, contained within <strong>%3$s</strong> and <strong>%4$s</strong>.'), $post_str, $comm_str, $cat_str, $tag_str); ?>
		This site is in operation since <strong>11th June, 2001</strong> and the first article appeared on <strong>15th May, 2002</strong>.</p>
		<p><?php wp_register('', ' | '); ?><?php wp_loginout(); ?><?php wp_meta(); ?></p>
		<div id="download-wp-theme"><h4><a href="http://theme.brajeshwar.com/downloads/" title="Download Brajeshwar Wordpress Theme">Download Brajeshwar Wordpress Theme</a></h4></div>
	</div><!-- /footer-col-D -->
	<div class="clear"><!--  --></div>
</div><!-- /footer -->

<div id="copyright">
	<p>
		Copyright 2001-<?php echo date('Y');?> &copy; <?php bloginfo('name'); ?> |
		Subscribe to feeds -
		<a href="<?php bloginfo_rss('rss2_url'); ?>" title="Articles (RSS)">Articles</a>
		or <a href="<?php bloginfo_rss('comments_rss2_url'); ?>" title="Comments (RSS)">Comments</a>
	</p>
</div><!-- /copyright -->

</div><!-- END: wrapper (DIV started in header.php) -->
<?php wp_footer(); ?>
</body>
</html>