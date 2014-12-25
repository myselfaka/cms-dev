<?php
include("index.php");
include("includes/connect.php");


$edit_id = @$_GET['edit'];
$query1 = "select * from posts where post_id ='$edit_id'"; 
$run = mysql_query($query1);

while($row=mysql_fetch_array($run))
  {
	  
	 
	  $edit_id1 = $row['post_id'];
	  $title=$row['post_title'];
	  $date=$row['post_date'];
	  $image=$row['post_image'];
	  $author=$row['post_author'];
      $content = $row['post_content'];
?>


<html><body>
<form method="post" action="edit.php?edit_form=<?php echo $edit_id1;?>" enctype="multipart/form-data">
<table align="center" width="800" border="10">
<tr align="center" bgcolor="#FF0000">
 <td colspan="2"><h1>Editing  Post</h1></td>
 </tr>
 <tr >
 <td align="right">Post Title :</td>
 <td><input type="text" name="title" value="<?php echo $title;?>" width="400"></td>
 </tr>
 <tr>
 <td align="right">Post Author :</td>
 <td><input type="text" name="author" value="<?php echo $author;?>" ></td>
 </tr>
 <tr >
 <td align="right">Post Image :</td>
 <td><input type="file" name="image" >
 <img src="../images/<?php echo $image;?>" width="300" height="200px;">
 </td>
 </tr>
 <tr>
 <td align="right">Post Content:</td>
 <td><textarea type="text" name="content" value=""  cols="60" rows="20"><?php echo $content;?></textarea></td>
 </tr>
 <tr  align="center">
 <td colspan="2"><input type="submit" name="update" value="Update Now"></td>
 </tr>
 <?php }?>
 </table>
 </form>
</body>
</html>
<?php
if(isset($_POST['update']))
{
	$update_id = $_GET['edit_form'];
	$post_title= $_POST['title'];
	$post_date= date('y/m/d');
	$post_author = $_POST['author'];
	$post_content = $_POST['content'];
	$post_image = $_FILES['image']['name'];
	$post_type = $_FILES['image']['type'];
	$post_size = $_FILES['image']['size'];
	$post_tmp = $_FILES['image']['tmp_name'];
	
	
	move_uploaded_file($post_tmp,"../images/$post_image");
	
	$update_query = "update posts set post_title='$post_title',post_date='$post_date',post_author='$post_author',post_image='$post_image',post_content='$post_content' where post_id='$update_id'";
	
	
	if(mysql_query($update_query))
	{
		
		
		echo"<script>window.open('index.php?updated= A Post has been updated..!','_self')</script>";
		
		}
	
}


?>  