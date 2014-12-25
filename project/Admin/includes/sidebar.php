<div id="sidebar">
<h2 >Subscribe via email</h2>
 <form style="  border:1px solid #CCC; padding:3px; border-style:none; text-align:center; " action="http://feedburner.google.com/fb/a/mailverify"
 method="post" target="popupwindow" 
 onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?url=OnlineComputerTeacherIndia','popupwindow','scrollbars=yes',width=550,height=520');return true" >
 <p >Enter your email address :</p><p><input type="text" style="width:140px;" name="email"  /></p>
 <input type="hidden" value="OnlineComputerTeacherIndia" name="url"  /><input type="hidden" name="loc" value="en_Us" /><input type="submit" value="subscribe" />
 <p> <a href="http://feedburner.google.com" target="_blank">FeedBurner</a></p></form>
 <!--Social buttons-->
 <div class="social" align="center">
     <h2 align='center' >Follow Us</h2>
     <a href="http://www.facebook.com/onlineustaadwali" target="_blank"><img  src="images/f.jpg" /></a>
     <img src="images/t.jpg" />
     <img src="images/p.jpg" />
     <img  src="images/g.jpg" /></div>
     <h2>Recent Posts</h2>
     <?php
	 include("includes/connect.php");
	 $query = "select*from posts order by 1 DESC LIMIT 0,5";
	 $run = mysql_query($query);
	 while($row=mysql_fetch_array($run))
	 {
		 $post_id=$row['post_id'];
	    $title = $row['post_title'];
		 $image = $row['post_image'];	
?>
    <center><a href="pages.php?id=<?php echo $post_id;?>"><img src="images/<?php echo $image;?>" width="250" height="180"/> </a>
         <p><a href="pages.php?id=<?php echo $post_id;?>"><?php echo $title;?></a></p></center>
         
	<?php }
	  
	 ?>
     
      

</div>