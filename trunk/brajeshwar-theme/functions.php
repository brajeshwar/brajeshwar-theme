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


/*
fetch and display facebook status
<?php facebookStatus('facebook-RSS-URL', ' ', NumberOfUpdates ); ?>
\* ----------------------------------- ~o~ ----------------------------------- */
function facebookStatus() {

	require_once (ABSPATH . WPINC . '/rss-functions.php');

	$argnum = func_num_args();
	$arglist = func_get_args();
	if ($argnum >= 1) $url = $arglist[0];
	if ($argnum >= 2) $title = $arglist[1];
		else $title = '';
	if ($argnum >= 3) $numofitem = $arglist[2];
		else $numofitem = 0;	// 0 = infinite

	$disp = "\n<!-- Facebook Status -->\n";

	// --- Wrong Number of Arguments ---
	if ($argnum < 1 or $argnum > 3) {
		$disp .= "\t<span class='codeRed'>Error! Wrong number of arguments.\n";

	// --- Get RSS ---
	} elseif ($rss = fetch_rss($url)) { 

		// --- Feed Title and Copyright ---
		if ($title == '') $title = $rss->channel[title];
		$link = htmlentities($rss->channel[link]);
		$copy = $rss->channel[copyright];

		if ($numofitem > 0) $rss->items = array_slice($rss->items, 0, $numofitem);
		foreach($rss->items as $item) {
			$title = $item[title];

			// Get the date + time of the last update from the RSS feed.
			$pubdate = $item[pubdate];
			// Convert this string to a time.
			$pubdate = strtotime($pubdate);
			
			// Calculate how long it's been since the status was updated.
			$today = time();
			$difference = $today - $pubdate;

			$link = htmlentities($item[link]);
			if ($title != '') {
				$disp .= "\t\t<span>$title";

				// Display how long it's been since the last update.
				$disp .= "  (Updated ";
				
				// Show days if it's been more than a day.
				if(floor($difference / 84600) > 0) {
					$disp .= floor($difference / 84600);
					if(floor($difference / 84600) == 1) { $disp .= ' day, '; } else { $disp .= ' days, '; }
					$difference -= 84600 * floor($difference / 84600);
				}

				// Show hours if it's been more than an hour.
				if(floor($difference / 3600) > 0) {				
					$disp .= floor($difference / 3600);
					if(floor($difference / 3600) == 1) { $disp .= ' hour, '; } else { $disp .= ' hours, '; }
					$difference -= 3600 * floor($difference / 3600);
				}
				
				// Show minutes if it's been more than a minute.
				$disp .= floor($difference / 60);
				$difference -= 60 * floor($difference / 60);
				if(floor($difference / 60) == 1) { $disp .= ' minute, '; } else { $disp .= ' minutes ago through Facebook)'; }
				$disp .= "</span>\n";
			}
		}

	// --- Not Found ---
	} else {
		$disp .= "\t<span class='codeRed'>Error! Check your Facebook RSS Feed or something is amiss.</span>\n";
	}
	return $disp ;
}


?>