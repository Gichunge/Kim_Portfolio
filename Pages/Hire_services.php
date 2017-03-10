<!DOCTYPE htmll>
<HTML lang="en">
	<HEAD>
		<TITLE>KelvinGichunge_Services</TITLE>
		<?php 
			$name = $email = $mobile = $service = $message = "";
			if ($_SERVER["REQUEST_METHOD"] == "POST") {				
				$name = test_input($_POST["user"]);
				$email = test_input($_POST["mail"]);
				$mobile = test_input($_POST["mobile"]);
				$service = test_input($_POST["service"]);
				$message = test_input($_POST["message"]);
				$conn = mysqli_connect('127.0.0.1','root','','heroku');
				if(!$conn){
					die('connection failed'. mysqli_connect_error());
				 }
				//sql to be queried
				$sql = "INSERT INTO clients  (Name,Email,Mobile,Service,Message)
				VALUES ('$name','$email','$mobile','$service','$message')";
				function send($name,$email,$mobile,$service,$message){
					$headers ="From:yourclient@webservices.com"."\n";
					$headers.="MIME-Version: 1.0\n";
					$headers.="Content-type: text/html; charset=iso 8859-1";
					$myMessage='Hello programmer Kim,A Web Client Sent You A Request to Hire You! thats Great!'."/n"
					.'Here is the Client Message :: '."/n"
					.'Web Client Name : '.$name."/n"
					.'Web Client Mobile Number : '.$mobile."/n"
					.'Web Client Email : '.$email."/n"
					.'Web Client Requested Service : '.$service."/n"
					.'Web Client Message : '.$message."/n";
					mail('kimgichunge6@gmail.com','Web Client Hire Request',$myMessage,$headers,'From :'.$email);
					$headers ="From:kelvingichunge@herokuapp.com"."\n";
					$headers.="MIME-Version: 1.0\n";
					$headers.="Content-type: text/html; charset=iso 8859-1";
					$clientMessage='Hello '.$name.' I hope you are fine '."/n"
					.'you sent a Message to kelvinGichunge to request a '.$service.' Service'."/n"
					.'Please wait as he replies to you soon!'."/n"
					.'Please do not reply to this Email...kelvinGichunge will reply via kimgichunge6@gmail.com';
					$servermail='kelvingichunge@herokuapp.com';
					mail($email,'Reply Message From kelvinGichunge Computer',$clientMessage,$headers,"From :".$servermail);
				}
				//checking the result of the query from the database
				if (mysqli_query($conn,$sql) && send($name,$email,$mobile,$service,$message)) {
				    print("<script>alert('Thank you $name For Sending Your Details,I will Connect to your Email soon...Check Your Email Inbox or Your Email Junk Folder!');</script>");
				} else {				    
				    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				    echo "<script>alert('I was unable to process your details...Please check for input Errors, Else Contact kelvinGichunge Directly with his Email :kimgichunge6@gmail.com');</script>";
				}
				mysqli_close($conn);
				}
			function test_input($data) {
			  $data = trim($data);
			  $data = stripslashes($data);
			  $data = htmlspecialchars($data);
			  return $data;
			}		
		?>
		<meta name="author" content="Gichunge Kelvin">
		<meta charset="utf-8">
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"> 
		<script src="../jquery/jquery.min.js"></script> 
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		<script src='../Javascript/hire_validate.js'></script>
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
	                    <li><a href="../Index.phpl#social_media_marketing">Social Media Marketing</a></li>
	                  </ul>               
	           </li>
	           </div>
	           <li><a href="Hire_services.php#top_home" id='home_link'>Hire Me</a></li>
	           <li><a href="Resume.php" id='Links'>My Resume</a></li>
	           <li><a href="About.php" id='Links'>Who am I?</a></li>
	           <li><a href="Message.php" id='Links'>Send Message to Me</a></li>
	           <li ><a href="Projects.php" id='Links'>Completed Projects</a></li>              
	        </ul>
   		</div>
   		<div class='container' id='second_hire'><br><br><br><br>
   			<h3 style='color:#600080'><b>Please Fill in With Your Details</b></h3>
   			<center><h5><b>This Creates a Channel to Which I will Connect with You For More Information & Agreements</b></h5></center>
   			<center><h5 style='color:#ff0000'><b>Note : </b>Your Input Details are Secured and will be Delivered to me within Minutes</h5></center>
   			<hr>
   		<!--hire register form-->
		<form  name='hireForm' role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" onsubmit='return hire_validate()' method='post'>
		  <div class="form-group">
		    <label  for="name" style='color:#600080'><b>Individual/Institution/Company Name (Required):</b></label>		    
		    <input type="text" class="form-control" id="name_id" name='user' maxlength='20' placeholder='Input Your Name Here'>
		    <span id='name_error' style='color:#ff0000;font-weight:bold'></span>		    
		  </div>
		  <div class="form-group">
		    <label  for="email" style='color:#600080'><b>Your Email (Required):</b></label>		    
		      <input type="email" class="form-control" id="email_id" name='mail' maxlength='40' placeholder='Input Your Email Here'>
		      <span id='email_error' style='color:#ff0000;font-weight:bold'></span>		    
		  </div>
		   <div class="form-group">
		    <label  for="mobile" style='color:#600080'><b>Your Phone Number (Required):</b></label>	<br>	    
		      <input type="text" class="form-control" id='mobile_id' name='mobile' maxlength='15' placeholder='Input Your Phone Number Here'>
		      <span id='phone_error' style='color:#ff0000;font-weight:bold'></span>		    
		 	</div>		    
		    <p style='color:#600080'><b>Please Select The Service That You would like me to Offer to You (Required):</b></p>	    
			<div class="radio">
				<label ><input type="radio" name="service" value='Web Designer'><b>Website Design</b></label>
			</div>
			<div class="radio">
			  <label><input type="radio" name="service" value='Web Developer'><b>Website Development</b></label>
			</div>
			<div class="radio">
			  <label><input type="radio" name="service" value='Full Stack Developer'><b>Full-Stack Development (Web Design & Development)</b></label>
			</div>
			<div class="radio">
			  <label><input type="radio" name="service" value='Desktop Console Programmer'><b>Desktop Console App Programming</b></label>
			</div>
			<div class="radio">
			  <label><input type="radio" name="service" value='Social Media Marketer'><b>Social Media Marketing</b></label>
			</div>
			<span id='service_error' style='color:#ff0000;font-weight:bold'></span>		  
		  <div class="form-group">
		    <label  for="message" style='color:#600080'>Any Request/Message (Optional):</label>
		    <textarea class="form-control" rows="3" id="textarea" maxlength='100' name='message' placeholder='Type Your Request/Message Here'></textarea>		    
		  </div>		
		  <div class="form-group"> 		    
		      <button type="submit" class="btn btn-success btn-lg" style='color:#ffffff'><b>Send Details</b></button>	    
		  </div>		  
		</form>		
   		</div>
   	</BODY>
</HTML>