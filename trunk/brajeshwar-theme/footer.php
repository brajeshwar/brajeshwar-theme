<div class="clear"><!--  --></div>

<div id="ad-icon">
	<ul><?php wp_list_bookmarks('categorize=0&category=9&show_images=1&show_description=0&orderby=rating&title_li'); ?></ul>
</div><!-- /ad-icon -->

<div id="footer">
	<div id="footer-col-A">
		<h2>Sidenotes</h2>
		<?php sideblog('asides'); ?>
		<p>Sidenotes <a href="" class="footer-more">Archive</a>
		<br />Learn how to do <a href="" class="footer-more">this Sidenotes</a>
		</p>
	</div><!-- /footer-col-A -->
	
	<div id="footer-col-B">
		<h2>Friends &amp; Family</h2>
		<ul><?php wp_list_bookmarks('categorize=0&category=2&show_images=0&show_description=0&orderby=name&order=ASC&title_li'); ?></ul>
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
		Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
		</p>
		<p>sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna consequat.
		Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna consequat.
		</p>
		<p><a href="" class="footer-more">Read more</a></p>
		<h2><?php _e('My Photos'); ?></h2>
		<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=5&display=latest&size=s&layout=x&source=user&user=51035608580%40N01"></script>
		<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=4&display=random&size=s&layout=x&source=user&user=51035608580%40N01"></script>
		<p><a href="http://www.flickr.com/photos/51035608580%40N01/" class="footer-more-flickr">My photos on Flickr</a>
		<br /><a href="http://www.flickr.com/photos/tags/brajeshwar/" class="footer-more-flickr">"Brajeshwar" tagged photos on Flickr</a></p>
		<h2><?php _e('Etcetera'); ?></h2>
		<p>This site has over 3,007 comments on <?php echo $numposts; ?> articles posted since 15th May, 2002. This site is in operation since 11th June, 2001.</p>
		<p><?php wp_register('', ' | '); ?><?php wp_loginout(); ?><?php wp_meta(); ?></p>
		<div id="download-wp-theme"><h4><a href="http://theme.brajeshwar.com/" title="Download Brajeshwar Wordpress Theme">Download Brajeshwar Wordpress Theme</a></h4></div>
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