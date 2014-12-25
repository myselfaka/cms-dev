
<html>
  <head>
  <title>Insert New Image</title>
  </head>
<body>

<form  method="post"  action="file.php"  enctype="multipart/form-data">
<table align="center" height="200" width="600" border="10">
<tr align="center" bgcolor="#FF0000">
 <td colspan="2"><h1>Insert New Image Here</h1></td>
 </tr>
 
 <tr >
 <td align="right">Post Image :</td>
 <td><input type="file" name="image"></td>
 </tr>
 
 <tr  align="center">
 <td colspan="2"><input type="submit" name="submit" value="Upload Image"></td>
 </tr>
 </table>
 </form>
</body>
</html>  
<?php
include("includes/connect.php");

if(isset($_POST['submit']))
{
  
  $image_name =$_FILES['image']['name'];
  $image_type =$_FILES['image']['type'];
  $image_size =$_FILES['image']['size'];
  $image_tmp =$_FILES['image']['tmp_name'];	
  
 if($image_name==''){
 echo"<center><h1>Please Select an image from your PC..!</h1></center>";
 exit();
 }
	   
	   
  if($image_type=="image/jpeg" || $image_type=="image/gif" || $image_type=="image/png")
  {
	  if(file_exists("../images/image/".$_FILES['image']['name'])){
		  echo"<h1>This file name $image_name already exist in this folder..! </h1>";
		  exit();
		  }
	  if($image_size<=5000000)
	  
	  {
		  
		  move_uploaded_file($image_tmp,"../images/image/$image_name");
	   }
	  else
	  {
		  echo"<script>alert('image is larger, only 50kb is allowed')</script>";
		}
   }
	 else{
		echo"<script>alert('image type is invalid')";
		  }  	
			   
$query="INSERT INTO  `malala`.`photo_gallery` (
`img_id` ,
`img_name`
)
VALUES (
NULL , '$image_name'
)";
   
   if(mysql_query($query))
   {
	echo"<center><h1 style='color:orange;'>An image has been uploaded..!</h1></center>";
	}

}
?>


