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
		 setTimeout(function(){myclock()},500);
		   
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
<div class="post_body">
<?php 
if(isset($_GET['submit'])){
	
	  $search_id = $_GET['search'];
	  $query = "select * from posts where post_title like '%$search_id%'";
	  $run = mysql_query($query);
	  
	  while($row = mysql_fetch_array($run))
	  {
		  $post_id =$row['post_id'];		  
		  $post_title = $row['post_title'];
		  $post_image= $row['post_image'];
		  $post_content= substr($row['post_content'],0,100);
		  }
	
?>
<h2><a href="pages.php?id=<?php echo $post_id;?>" ><?php echo $post_title; ?></a></h2>
<center><img src="images/<?php echo $post_image;?>" width="600"  /></center>
<p align="justify"><?php echo $post_content; ?></p>
<p align="right" class='link_red'><a href="pages.php?id=<?php echo $post_id;?>" >Read more</a></p>
<?php } ?></div>

 <!--This is footer area-->
<div style="padding:50px; " class="footer">
<div class="copyright">&copy; Copyright -<font face="Arial, Helvetica, sans-serif" color="#006600" style="border-bottom:1px solid #060; text-decoration:underline; curser:pointer;">Malala Yousufzai.com</font></div>
<div><?php 
 include("includes/menubar_footer.php"); 
 ?></div></div>
 </body>
 </html>    