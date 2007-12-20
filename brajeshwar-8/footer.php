<div class="clear"><!-- /clear all --></div>
</div><!-- END: wrapper (DIV started in header.php) -->
<div id="footer-wrapper">
	<div id="footer">
		<div id="footer-col-A">
			<h2><?php _e('Sidenotes'); ?></h2>
			<?php if (function_exists('sideblog')) { sideblog('asides'); } ?>
			<p>View the <a href="/category/asides/" class="footer-more">Sidenotes Archive</a>
			<br />Learn how to do <a href="http://codex.wordpress.org/Adding_Asides" class="footer-more">this Sidenotes</a>
			</p>
		</div><!-- /footer-col-A -->
		
		<div id="footer-col-B">
			<h2><?php _e('Recommended'); ?></h2>
			<ul><?php wp_list_bookmarks('categorize=0&category=349&show_images=0&show_description=0&orderby=name&title_li'); ?></ul>
			<h2><?php _e('Friends &amp; Family'); ?></h2>
			<ul><?php wp_list_bookmarks('categorize=0&category=12,292&show_images=0&show_description=0&orderby=rand&limit=20&title_li'); ?></ul>
			<h2><?php _e('Links &amp; Resources'); ?></h2>
			<ul><?php wp_list_bookmarks('categorize=0&category=13&show_images=0&show_description=0&orderby=rand&title_li'); ?></ul>
			<p>More <a href="" class="footer-more">links</a> (coming soon)</p>
		</div><!-- /footer-col-B -->
	
		<div id="footer-col-C">
			<h2><?php _e('Random Indulgence'); ?></h2>
			<p>
				<a href="http://www.brajeshwar.com/documents/penguin/" title="Play the Penguin Game"><img src="<?php bloginfo('template_directory'); ?>/i/ui/penguin.png" alt="Play the Penguin Game" style="margin: 0; padding: 0; border: 0 none;" /></a>
			</p>
			<div id="yshout"></div>
		</div><!-- /footer-col-C -->
	
		<div id="footer-col-D">
			<h2><?php _e('Brajeshwar'); ?></h2>
			<p>
			<span class="about-photo"><img src="<?php bloginfo('template_directory'); ?>/i/ui/brajeshwar.jpg" alt="Brajeshwar" /></span>
			My name is Brajeshwar and this is my site.
			</p>
			<p>
			I firmly believe in keeping things simple and I envison pushing the technical envelop
			time and again for the betterment of viable commercial and practical applications.
			</p>
			<p>
			Making applications easy for the users is my primary objective while I plan and execute ideas in a team.
			</p>
			<p>Want to know more <a href="/about/" class="footer-more">about me?</a></p>
			<h2><?php _e('My Photos'); ?></h2>
			<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&display=random&size=s&layout=x&source=user&user=51035608580%40N01"></script>
			<p><a href="http://www.flickr.com/photos/brajeshwar/" class="footer-more-flickr">My photos on Flickr</a>
			<br /><a href="http://www.flickr.com/photos/tags/brajeshwar/" class="footer-more-flickr">"Brajeshwar" tagged photos on Flickr</a></p>
			<div id="download-wp-theme"><h4><a href="http://theme.brajeshwar.com/downloads/" title="Download Brajeshwar Wordpress Theme">Download Brajeshwar Wordpress Theme</a></h4></div>
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
			<?php printf(__('Brajeshwar.com has %1$s and %2$s, contained within %3$s and %4$s.'), $post_str, $comm_str, $cat_str, $tag_str); ?>
			This site is in operation since 11th June, 2001 and the first article appeared on 15th May, 2002.</p>
			<p><?php wp_register('', ' | '); ?><?php wp_loginout(); ?><?php wp_meta(); ?></p>
		</div><!-- /footer-col-D -->
		<div class="clear"><!--  --></div>
	</div><!-- /footer -->
</div>

<div id="copyright">
	<p>
		All articles and comments &copy; their original owners.
		The design, idea and everything else is &copy; <?php bloginfo('name'); ?>, 2001-<?php echo date('Y');?>.
		Quotes, excerpts or reproduction of any of the article is possible solely under the 
		<a href="http://creativecommons.org/licenses/by-nc-nd/3.0/" title="Attribution-Noncommercial-No Derivative">Attribution-Noncommercial-No Derivative</a> License.
		<?php bloginfo('name'); ?> is powered by <a href="http://wordpress.org/" title="Wordpress">Wordpress</a>.
	</p>
	<p>		
		Subscribe to feeds -
		<a href="<?php bloginfo_rss('rss2_url'); ?>" title="Articles (RSS)">All Articles</a>
		or <a href="<?php bloginfo_rss('comments_rss2_url'); ?>" title="Comments (RSS)">All Comments</a>
	</p>
</div><!-- /copyright -->
<div class="clear"><!-- /clear all --></div>
<?php wp_footer(); ?>
</body>
</html>