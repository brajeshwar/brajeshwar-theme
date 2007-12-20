<?php

/*
take control of the title lenght and produce an excerpt instead
this is used specially for the home page where the length of the title can dis-align the design of the article list.
\* ----------------------------------- ~o~ ----------------------------------- */
function title_excerpt ($before = '', $after = '', $echo = true, $length = false) {
	$title = get_the_title();
	if ( $length && is_numeric($length) ) {
		$title = substr( $title, 0, $length );
	}
	if ( strlen($title)> 0 ) {
		$title = apply_filters('title_excerpt', $before . $title . $after, $before, $after);
		if ( $echo )
			echo $title;
		else
			return $title;
	}
} // END: title_excerpt


/*
display a yearly archive complete with monthly clickable links
\* ----------------------------------- ~o~ ----------------------------------- */
function year_month_archives () {

	global $wpdb, $PHP_SELF;
	setlocale(LC_ALL,WPLANG); // set localization language
	$now = gmdate("Y-m-d H:i:s",(time()+((get_settings('gmt_offset'))*3600)));  // get the current GMT date
	$bogusDate = "/01/2001"; // used for the strtotime() function below	
	
	$yearsWithPosts = $wpdb->get_results("
		SELECT distinct year(post_date) AS `year`, count(ID) as posts
		FROM $wpdb->posts 
		WHERE post_type = 'post' 
		AND post_status = 'publish' 
		GROUP BY year(post_date) 
		ORDER BY post_date DESC");
	
	foreach ($yearsWithPosts as $currentYear) {		
		for ($currentMonth = 1; $currentMonth <= 12; $currentMonth++) {			
		$monthsWithPosts[$currentYear->year][$currentMonth] = $wpdb->get_results("
			SELECT ID, post_title FROM $wpdb->posts 
			WHERE post_type = 'post'
			AND post_status = 'publish' 
			AND year(post_date) = '$currentYear->year' 
			AND month(post_date) = '$currentMonth'			
			ORDER BY id desc");
		}
	}

	// short month name for better visual design
	for($currentMonth = 1; $currentMonth <= 12; $currentMonth++) $shortMonths[$currentMonth] = ucfirst(strftime("%b", strtotime("$currentMonth"."$bogusDate")));		
	if ($yearsWithPosts) {
		foreach ($yearsWithPosts as $currentYear) {				
		echo ('<span class="year"><a href="'.substr(get_year_link($currentYear->year, $currentYear->year), 0, -1).'">'.$currentYear->year.'</a></span> ');
			for ($currentMonth = 1; $currentMonth <= 12; $currentMonth++) {
				if ($monthsWithPosts[$currentYear->year][$currentMonth]) echo ('<span class="month"><a href="'.substr(get_month_link($currentYear->year, $currentMonth), 0, -1).'">'.$shortMonths[$currentMonth].'</a></span>');
				else echo '<span class="month empty">'.$shortMonths[$currentMonth].'</span>';
			} echo '<br/>';
		} echo '<br /><br />';		
	}
} // END: year_month_archives

?>