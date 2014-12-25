<?php
include("includes/connect.php");
$delete_id = $_GET['deleted'];
$query="delete from posts where post_id ='$delete_id'";

if(mysql_query($query)){
	
	echo"<script>window.open('index.php?del= A Post has been deleted..!','_self')</script>";
	}

?>