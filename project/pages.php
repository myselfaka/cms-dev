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
 <p>Today is:&nbsp;&nbsp;<?php echo date("1 jS, F Y");?></p></div>
 <p id="clock" class="clock"></p></div>
 <div><?php include("includes/header.php"); ?></div>
<div><?php include("includes/menubar.php"); ?></div>
<div><?php include("includes/sidebar1.php"); ?></div>

<div  class="post_body">

<?php 
include("includes/connect.php");
$page_id = $_GET['id'];
 $query = "select * from posts where post_id='$page_id'";
 $run = mysql_query($query);
 while($row=mysql_fetch_array($run)){
	 
	 $title = $row['post_title'];
	 $date = $row['post_date'];
	 $author = $row['post_author'];
	 $image = $row['post_image'];
	 $content = $row['post_content'];
 }
?>
<h1><?php echo $title; ?></h1>
<p><b>Published on:</b>&nbsp;&nbsp;<?php echo $date;?></p>
<p align="right"><b>Posted By:</b> &nbsp;&nbsp;<?php echo $author;?></p>
<img src="images/<?php echo $image;?>" width="600" />
<p align="justify"><?php echo $content; ?></p>


</div>

 <!--This is footer area-->
<div style="padding:50px; " class="footer">
<div class="copyright">&copy; Copyright -<font face="Arial, Helvetica, sans-serif" color="#006600" style="border-bottom:1px solid #060; text-decoration:underline; curser:pointer;">Malala Yousufzai.com</font></div>
<div><?php 
 include("includes/menubar_footer.php"); 
 ?></div></div>
 </body>
 </html>    