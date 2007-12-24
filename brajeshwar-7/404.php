<?php get_header(); ?>

<!-- BEGIN #wrap -->
<div id ="wrap">

<?php include (TEMPLATEPATH . "/col-left.php"); ?>

<!-- BEGIN #col-main -->
<div id="col-main">

<h3 class="sec-title">Error 404 - Not Found</h3>

<div class="post">
<div class="post-body">
<p>You 
<?php
#some variables for the script to use
#if you have some reason to change these, do.  but wordpress can handle it
$adminemail = get_bloginfo('admin_email'); #the administrator email address, according to wordpress
$website = get_bloginfo('url'); #gets your blog's url from wordpress
$websitename = get_bloginfo('name'); #sets the blog's name, according to wordpress

  if (!isset($_SERVER['HTTP_REFERER'])) {
    #politely blames the user for all the problems they caused
        echo "tried going to "; #starts assembling an output paragraph
	$casemessage = "All is not lost!";
  } elseif (isset($_SERVER['HTTP_REFERER'])) {
  #this will help the user find what they want, and email me of a bad link
	echo "clicked a link to<br /><br />"; #now the message says You clicked a link to...
  #setup a message to be sent to me
	$failuremess = "A user tried to go to $website"
  .$_SERVER['REQUEST_URI']." and received a 404 (page not found) error. ";
	$failuremess .= "It wasn't their fault, so try fixing it.  
  They came from ".$_SERVER['HTTP_REFERER'];
	// uncomment the next link if you the admin to be emailed of 404 errors (it will be too many mails for a high traffic site, I hated that with my site at http://www.brajeshwar.com/)
	if(ragnu('errormail')) {
		mail($adminemail, "Bad Link To ".$_SERVER['REQUEST_URI'], $failuremess, "From: $websitename <wordpress@$website>");
	}
	$casemessage = "An administrator has been emailed about this problem.";#set a friendly message
  }
  echo " ".$website.$_SERVER['REQUEST_URI']; ?> 
	<br /><br />and it doesn't exist. 
	<?php echo $casemessage; ?>
</p>
</div>
</div>


</div>
<!-- END #col-main -->

<?php include (TEMPLATEPATH . "/col-right.php"); ?>
<?php get_footer(); ?>