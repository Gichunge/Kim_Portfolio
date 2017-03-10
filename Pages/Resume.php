<!DOCTYPE html>
<HTML lang="en">
	<HEAD>
		<TITLE>KelvinGichunge_Services</TITLE>
		<meta name="author" content="Gichunge Kelvin">
		<meta charset="utf-8">
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>
 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"> 
		<script src="../jquery/jquery.min.js"></script> 
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="../Stylesheets/Styles.css">
		<style>
		    .activated_link{ color: #000000; background: #ff3333; }
		</style>
		 <script>
		    $(document).ready(function(){
		      $('#home_link').addClass('activated_link');     
		    })
		 </script>
	</HEAD>
	<BODY>
		<div id = 'top_header' class='container-fluid'>		  
        	<h4><b>&lt; &frasl;<img src="../Images/book_icon.ico" height='20'>kelvinGichunge_ &gt;</b><a name='top_home'></a></h4>
      		<h6><b>WITH SOFTWARE CREATION, ALL THE WORLD'S PROBLEMS ARE SOLVED !</b></h6>
   		</div>
   		<!--Top Menu--> 
   		<div  class='menu' data-spy="affix" data-offset-top="50">
	        <ul>
	           <li><a href="../Index.php" id='Links'>Home</a></li>
	           <div class='dropdown'>
	           <li><a>What Services Do I Offer? &#9662;</a>              
	                 <ul class='dropdown-menu'>	                 	
	                    <li><a href="../Index.php#web_design">Web Design</a></li>
	                    <li><a href="../Index.php#web_development">Web Development</a></li>
	                    <li><a href="../Index.php#software_dev">Desktop App Development</a></li>
	                    <li><a href="../Index.php#social_media_marketing">Social Media Marketing</a></li>
	                  </ul>               
	           </li>
	           </div>
	           <li><a href="Hire_services.php" id='links'>Hire Me</a></li>
	           <li><a href="Resume.php#top_home" id='home_link'>My Resume</a></li>
	           <li><a href="About.php" id='links'>Who am I?</a></li>
	           <li><a href="Message.php" id='links'>Send Message to Me</a></li>
	           <li ><a href="Projects.php" id='links'>Completed Projects</a></li>              
	        </ul>
   		</div>
   		<div class='container-fluid' id='top_resume'>
   			<h3><b>Current Updated Resume [<?php echo date("Y/m/d");?>]</b></h3>
   			<!--Firefox download dialog box (type="application/octet-stream"), Chrome download (download target='_blank')-->
   			<h5>Available for: <a href="../Resume/Kelvin_Gichunge_Resume.pdf" type="application/octet-stream" download target='_blank'><b>[<u>Download</u>]</b></a> or <a href="../Resume/Kelvin_Gichunge_Resume.pdf" target='_blank'><b>[<u>View Full Screen</u>]</b></a></h5>
   			<object data="../Resume/Kelvin_Gichunge_Resume.pdf" type="application/pdf" align="center" width="1340" height='430'></object>
   		   		
   		</div>
	</BODY>
</HTML>