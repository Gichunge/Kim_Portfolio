<!DOCTYPE htmll>
<HTML lang="en">
	<HEAD>
		<TITLE>KelvinGichunge_Services</TITLE>
		<?php
			$name = $email = $message ='';
			if($_SERVER['REQUEST_METHOD']=='POST'){
				$name = test_input($_POST["user"]);				
				$email = test_input($_POST["email"]);
				$message = test_input($_POST["message"]);
				$conn = mysqli_connect('127.0.0.1','root','','heroku');
				if(!$conn){
					die('connection failed'. mysqli_connect_error());
				 }
				//sql to be queried
				$sql = "INSERT INTO messages (Name,Email,Message)
				VALUES ('$name','$email','$message')";				
				function send($name,$email,$message){
					$headers ="From:yourclient@webservices.com"."\n";
					$headers.="MIME-Version: 1.0\n";
					$headers.="Content-type: text/html; charset=iso 8859-1";
					$myMessage='Hello programmer Kim...Am Your Robot Server you Created...A Web Client Sent You A Chat Message'."/n"
					.'Here is the Client Message :: '."/n"
					.'Web Client Name : '.$name."/n"
					.'Web Client Message : '.$message."/n";
					mail('kimgichunge6@gmail.com','Chat Message from Web Client',$myMessage,$headers,'From :'.$email);
					$headers ="From:kelvingichunge@herokuapp.com"."\n";
					$headers.="MIME-Version: 1.0\n";
					$headers.="Content-type: text/html; charset=iso 8859-1";
					$clientMessage='Hello '.$name.' I hope you are fine '."/n"
					.'you sent a message to kelvinGichunge on his Website,Please wait as He prepares to reply'."/n"
					.'Please do not reply to this Email...kelvinGichunge will reply via kimgichunge6@gmail.com'."/n"
					.'Regards  @kelvinGichunge_Automated Server';
					$servermail='kelvingichunge@herokuapp.com';
					mail($email,'Reply Message From kelvinGichunge Computer',$clientMessage,$headers,"From :".$servermail);
				}				
				//checking the result of the query from the database
				if (mysqli_query($conn,$sql) && send($name,$email,$message)) {
				    print("<script>alert('Thank You $name For your Message,I will Link up with you via your Email, so that we can share more...Check Your Email Inbox or Your Email Junk Folder!');</script>");
				} else {				    
				    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				    echo "<script>alert('I was unable to process and send your Message to kelvinGichunge...Please check for input Errors Else Contact Him Directly with his Email :kimgichunge6@gmail.com');</script>";
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
		<script src='../Javascript/message_validate.js'></script>
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
	           <li><a href="Resume.php" id='Links'>My Resume</a></li>
	           <li><a href="About.php" id='links'>Who am I?</a></li>
	           <li><a href="Message.php#top_home" id='home_link'>Send Message to Me</a></li>
	           <li ><a href="Projects.php" id='Links'>Completed Projects</a></li>              
	        </ul>
   		</div>
   		<div>
   			<img src="../Images/Message.jpg" id='img'>
   			<center>
   			<div class='social_media'>                            
              <p><img src="../Images/facebook.png"> Kim Gichunge</p>
              <p><img src="../Images/facebook.png"><a href="https://www.facebook.com/youngcomputerwizards" target='_blank'>Facebook Page</a></p>
              <p><img src="../Images/email.png"> kimgichunge6@gmail.com</p>
              <p><img src="../Images/twitter.png"> @KimGichunge</p>
              <p><img src="../Images/GitHub_Black.png"><a href='https://github.com/Gichunge'>GitHub_Profile</a></p>
            </div>
        	</center>
   		</div>
   		<div class='container' id='msg' style='background-color: #ffffff'>
   			<h2 style='color:#668cff'><b>Message Center</b></h2>
   			<center><h5 style='color:#ff0000'><b>Note : </b>Your Name, Email & Message are Secured and will be Delivered to me within Seconds</h5></center>
   			<form name='messageForm' action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" onsubmit='return msg_validate()' role='form' method='post'>
   				<div class='form-group'>
   					<label  for="name" style='color:#600080'><b>Your Name:</b></label>    
		   			<input type="text" class="form-control" id="name_id" name='user' placeholder='Input Name Here'><br>
		   			<span id='name_error' style='color:#ff0000;font-weight:bold'></span>
   				</div>
   				<div class='form-group'>
   					<label  for="name" style='color:#600080' ><b>Your Email:</b></label>    
		   			<input type="email" class="form-control" id="email_id" name='email' maxlength='30' placeholder='Input Email Here'><br>
		   			<span id='email_error' style='color:#ff0000;font-weight:bold'></span>
   				</div>
   				<div class="form-group">
		   			<label  for="message" style='color:#600080'>Any Request/Message:</label>
		    		<textarea class="form-control" rows="3" id="msg_id" name='message' maxlength='200' placeholder='Type Your Message Here'></textarea>
		    		<span id='msg_error' style='color:#ff0000;font-weight:bold'></span><br>	    
		 		 </div>
		 		 <div class="form-group"> 		    
		      		<button type="submit" class="btn btn-success btn-lg" style='color:#ffffff'><b>Send Message</b></button>	   
		 		 </div>
   			</form>   			
   		</div>
   		 <div id = 'footer'>
        <h5>Copyright &copy;<?php echo date('Y');?> kelvinGichunge Softwares</h5>
        <h5>Email : kimgichunge6@gmail.com </h5>
        <h5>Phone : +254 724097929</h5>
        
        <h5>"With Software Creation,All the World's Problems are Solved ! "</h5>
   </div>
   	</BODY>
</HTML>