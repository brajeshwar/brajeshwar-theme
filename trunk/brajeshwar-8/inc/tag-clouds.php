<?php if ( function_exists('wp_tag_cloud') ) : ?><div id="tags-container"><h2>Site's Popular Tags</h2><?php wp_tag_cloud('smallest=8&largest=18&unit=pt&number=36&orderby=name&format=flat'); ?></div><!-- /tags-container --><span class="tags-footer"><a href="<?php bloginfo('url'); ?>/tags/" title="View all tags">View all tags</a></span><?php endif; ?>