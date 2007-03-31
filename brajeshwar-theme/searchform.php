<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
<div>
<label for="s">Search the site</label>
<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
<input type="submit" id="searchsubmit" value="Search" />
</div>
</form>