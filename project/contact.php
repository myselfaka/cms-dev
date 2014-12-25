<html>
    <head>
      <title>Malala Yousafzai</title>
      <link href="css/style.css" rel="stylesheet" type="text/css">
      <script>
      function myclock(){
		  time = new Date();
		  hours = time.getHours();
		  mins = time.getMinutes()
		  sec = time.getSeconds();
		  
		  if(sec<10){
			  sec="0"+sec;
			  }
		  if(mins<10){
			  mins="0"+mins;
			  }	  
			  document.getElementById('clock').innerHTML=hours+":"+mins+":"+sec; 
		  timer = setTimeout(function(){myclock()},500);
		   
		  }
      </script>
    </head>
 <body onLoad="myclock()">
  <!--This is Top bar-->
 <div id="top">
 <div style="float:left;">
 <p>Today is:&nbsp;&nbsp;<?php echo date("1 jS, F Y");?></p></div>
 <p id="clock" class="clock"></p>
 </div>
 <div><?php include("includes/header.php"); ?></div>
<div><?php include("includes/menubar.php"); ?></div>

<div class="post_body">
<form action="contact.php" method="post">
 <table width="600" align="center" border="0">
 <tr align="center">
 <td colspan="5"><h2>Contact Us</h2></td>
 </tr>
 <tr>
 <td align="right"><strong>Your Email:</strong></td>
 <td><input type="text" name="email"></td>
 </tr>
 <tr>
 <td align="right"><strong>Subject:</strong></td>
 <td><input type="text" name="subject"></td>
 </tr>
 <tr>
 <td align="right"><strong>Your Message:</strong></td>
 <td><textarea cols="20" rows="10" type="text" name="message"></textarea></td>
 </tr>
 <tr>
 <td align="center" colspan="5"><input type="submit" name="send_email" value="Send Email"></td>
 </tr>
 </table></form>
</div>
<?php 
if(isset($_POST['send_email'])){

     $sender_email= $_POST['email'];
	 $subject= $_POST['subject'];
	 $mes= $_POST['message'];
	 $to = "cricketeri@yahoo.com";
	 
	 $message= "Email Form :<br>".$mes;
	 if($sender_email=='' || $subject=='' || $mes=='')
	 {
	   echo"<script>alert('please fill the blank field')</script>";
	   exit();
	  }
	  mail($to,$subject,$message,$sender_email);
	  
	 $to_sender = $_POST['email'];
	 $sub = "OnlineUstaad.com";
	 $mesg ="Thank you for sending an email,we'll get to you soon</br>";
	 $from = "cricketeri@yahoo.com";
	 mail($to_sender,$sub,$mesg,$from);
	 echo"<center><h2>Email sent,get to you soon!</h2></center>";
	 }
?><div><?php include("includes/side_bar1.php"); ?></div>
 <!--This is footer area-->
<div style="padding:50px; " class="footer">
<div class="copyright">&copy; Copyright -<font face="Arial, Helvetica, sans-serif" color="#006600" style="border-bottom:1px solid #060; text-decoration:underline; curser:pointer;">Malala Yousufzai.com</font></div>
<div><?php 
 include("includes/menubar_footer.php"); 
 ?></div></div>
 </body>
 </html>    