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
 <div id="top"><div style="float:left;">
 <p>Today is:&nbsp;&nbsp;<?php echo date("jS,F Y");?></p></div>
 <p id="clock" class="clock"></p></div>
 <div><?php include("includes/header.php"); ?></div>
<div><?php include("includes/menubar.php"); ?></div>
<div><?php include("includes/post_body1.php"); ?></div>
<div><?php include("includes/sidebar.php"); ?></div>
 <!--This is footer area-->
<div style="padding:50px; " class="footer">
<div class="copyright">&copy; Copyright -<font face="Arial, Helvetica, sans-serif" color="#006600" style="border-bottom:1px solid #060; text-decoration:underline; curser:pointer;">Malala Yousufzai.com</font></div>
<div><?php 
 include("includes/menubar_footer.php"); 
 ?></div></div>
 </body>
 </html>    