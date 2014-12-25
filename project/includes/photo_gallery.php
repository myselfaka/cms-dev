<div class='post_body'>

<?php

 include("includes/connect.php");
 
 $query = "select * from photo_gallery order by rand() LIMIT 0,12";
 $run = mysql_query($query);
 while($row=mysql_fetch_array($run))
 {
	 $image = $row['img_name']; 
?>

<a href="index.php"><img src="images/image/<?php echo $image;?>" style='margin-left:10px; margin-bottom:10px;' width="290" height="250" /></a>

<?php } ?></div>