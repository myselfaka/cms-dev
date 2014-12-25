<div id="sidebar">
<h2 >Subscribe via email</h2>
 
 <p >Enter your email address :</p><p><input type="text" style="width:140px;" name="email"  /></p><input type="hidden" value="OnlineComputerTeacherKrachi" name="url"  /><input type="hidden" name="loc" value="en_Us" /><input type="submit" value="subscribe" /><p> <a href="http://feedburner.google.com" target="_blank">FeedBurner</a></p></form>
 <!--Social buttons-->
 <div class="social" align="center">
     <h2 align='center' >Follow Us</h2>
     <a href="http://www.facebook.com/onlineustaadwali" target="_blank"><img  src="images/f.jpg" /></a>
     <a href="http://www.twitter.com/onlineustaadwali" target="_blank"><img src="images/t.jpg" /></a>
     <a href="http://www.ping.com/onlineustaadwali" target="_blank"><img src="images/p.jpg" /></a>
    <a href="http://www.google.com/onlineustaadwali" target="_blank"> <img  src="images/g.jpg" /></a></div>
     <h2>Recent Posts</h2>
     <?php
	 include("includes/connect.php");
	 $query = "select*from posts order by rand() LIMIT 0,8";
	 $run = mysql_query($query);
	 while($row=mysql_fetch_array($run))
	 {
		 $post_id=$row['post_id'];
	    $title = substr($row['post_title'],0,20);
			
?>
    
    
         <h3 style="padding-left:10px;" ><a style='text-decoration:none; ' href="pages.php?id=<?php echo $post_id;?>"><font style="text-align:left;" color="#000006">&raquo;</font><font style="text-align:left;" color="#000051"><?php echo $title;?>..</font></a></h3>
         
	<?php }
	  
	 ?>
     
</div>      

</div>