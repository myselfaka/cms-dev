<?php
session_start();
if(!isset($_SESSION['user_name']))
{ 
header("location:login.php");
}
else{
?>
<html>
  <head>
  <title>Insert New Post</title>
  </head>
<body>

<form  method="post"  action="insert_post.php"  enctype="multipart/form-data">
<table align="center" width="800" border="10">
<tr align="center" bgcolor="#FF0000">
 <td colspan="2"><h1>Insert New Post Here</h1></td>
 </tr>
 <tr >
 <td align="right">Post Title :</td>
 <td><input type="text" name="title" width="400"></td>
 </tr>
 <tr>
 <td align="right">Post Author :</td>
 <td><input type="text" name="author"></td>
 </tr>
 <tr >
 <td align="right">Post Image :</td>
 <td><input type="file" name="image"></td>
 </tr>
 <tr>
 <td align="right">Post Content:</td>
 <td><textarea type="text" name="content" cols="40" rows="20"></textarea></td>
 </tr>
 <tr  align="center">
 <td colspan="2"><input type="submit" name="submit" value="Publish Now"></td>
 </tr>
 </table>
 </form>
</body>
</html>  
<?php
include("includes/connect.php");

if(isset($_POST['submit']))
{
  $title = $_POST['title'];
  $date = date('y/m/d');
  $author = $_POST['author'];
  $content= $_POST['content'];
  $image_name =$_FILES['image']['name'];
  $image_type =$_FILES['image']['type'];
  $image_size =$_FILES['image']['size'];
  $image_tmp =$_FILES['image']['tmp_name'];	
  
  if($title =='' || $author =='' || $content =='')
      {
  
           echo"<script>alert('Any field is empty')</script>";
		   exit();
       }
	   
	   
  if($image_type=="image/jpeg" || $image_type=="image/gif" || $image_type=="image/png")
  {
	  
	  if($image_size<=5000000)
	  {
		  move_uploaded_file($image_tmp,"../images/$image_name");
	   }
	  else
	  {
		  echo"<script>alert('image is larger, only 50kb is allowed')</script>";
		}
   }
	 else{
		echo"<script>alert('image type is invalid')";
		  }  	
			   
$query="INSERT INTO  `malala`.`posts` (
`post_id` ,
`post_title` ,
`post_date` ,
`post_author` ,
`post_image` ,
`post_content`
)
VALUES (
NULL ,  '$title',  ' $date',  ' $author',  '$image_name',  ' $content'
)";
   
   if(mysql_query($query))
   {
	echo"<script>window.open('index.php?published=A post has been published','_self')</script>";
	}

}
?>
<?php } ?>
