<?php
include("includes/connect.php");
$delete_id = $_GET['deleted1'];
$query="delete from photo_gallery where img_id ='$delete_id'";

if(mysql_query($query)){
	
	echo"<script>window.open('index.php?dell= An Image has been deleted..!','_self')</script>";
	}

?>