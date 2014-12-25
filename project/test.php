<div >

<?php

 include("includes/connect.php");
 
 $query = "SELECT * FROM photo_gallery";
 $run = mysql_query($query);
 while($row=mysql_fetch_array($run))
 {
	 $image = $row['img_name']; 
?>

<img src="images/<?php echo $image;?>" style='margin-left:10px;' width="290" height="250" />

<?php } ?></div>