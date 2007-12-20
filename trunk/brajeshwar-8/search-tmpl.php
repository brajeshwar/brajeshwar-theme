<?php
/*
Template Name: Search
*/
?>

<?php get_header(); ?>

<div id="content-primary">
	<div class="google-search">
		<!-- Google CSE Search Box Begins -->
			<form id="searchbox_000948109368751561307:t5qc9nsxff0" action="http://www.brajeshwar.com/search/">
				<input type="hidden" name="cx" value="000948109368751561307:t5qc9nsxff0" />
				<input type="hidden" name="cof" value="FORID:10" />
				<input name="q" type="text" size="40" />
				<input type="submit" name="sa" value="Search" />
				<img src="http://google.com/coop/images/google_custom_search_smnar.gif" alt="Google Custom Search" />
			</form>
		<!-- Google CSE Search Box Ends -->
		
		<!-- Google Search Result Snippet Begins -->
			<div id="results_000948109368751561307:t5qc9nsxff0"></div>
			<script type="text/javascript">
				var googleSearchIframeName = "results_000948109368751561307:t5qc9nsxff0";
				var googleSearchFormName = "searchbox_000948109368751561307:t5qc9nsxff0";
				var googleSearchFrameWidth = 600;
				var googleSearchFrameborder = 0;
				var googleSearchDomain = "google.com";
				var googleSearchPath = "/cse";
			</script>
			<script type="text/javascript" src="http://www.google.com/afsonline/show_afs_search.js"></script>
		<!-- Google Search Result Snippet Ends --> 
		<p><strong>NOT HAPPY</strong> with <strong>Google powered Search?</strong><br />
		You can always try the inbuilt Site-Search.</p>
		<?php include(TEMPLATEPATH."/searchform.php");?>
		<?php edit_post_link('Edit this entry','<p class="more-edit">','</p>'); ?>
	</div>			
</div><!-- /content-primary -->

<?php get_footer(); ?>