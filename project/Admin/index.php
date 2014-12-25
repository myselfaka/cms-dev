<?php
session_start();
if(!isset($_SESSION['user_name']))
{
	header("location:login.php");
}
else{
?>
<html >
<head>
<title>Admin Panel</title>
<link href="css/admin_style.css" rel="stylesheet" />
</head>

<body>
<header>
<h1><a style="text-decoration:none; color:#707070;" href="index.php">Welcome to Admin Panel of Malala.com</a></h1>
</header>
<aside>
<h1>Welcome :&nbsp;&nbsp;<font color="#400040" face="Verdana, Geneva, sans-serif" size="+1"><?php echo $_SESSION['user_name']; ?></font></h1>
<h2>Manage content</h2>
<h2><a href="logout.php">Admin Logout</a></h2>
<h2><a href="index.php?view=view">View Posts</a></h2>
<h2><a href="index.php?insert=insert">Insert New Posts</a></h2>
<h2><a href="index.php?Image=upload">View All Images</a></h2>
<h2><a href="index.php?image=upload">Upload New Images</a></h2>
</aside>
<center><h1>This is your Admin Panel</h1>
<p>You can manage all of your websites content here </p></center>
<center><h1 style="color:#F00; font-family:Verdana, Geneva, sans-serif;"><?php  echo @$_GET['del'];?></h1>
<h1 style="color:#F00; font-family:Verdana, Geneva, sans-serif;"><?php  echo @$_GET['dell'];?></h1>
<h1 style="color:#F00; font-family:Verdana, Geneva, sans-serif;"><?php echo @$_GET['updated']; ?></h1>
</center>
<center><h1 style="color:#F00; font-family:Verdana, Geneva, sans-serif;"><?php echo @$_GET['published']; ?></h1></center>
<center><h1 style="color:#F00; font-family:Verdana, Geneva, sans-serif;"><?php echo @$_GET['upload']; ?></h1></center>
<?php 
if(isset($_GET['image'])){
include("file.php");
}
?>
<?php if(isset($_GET['Image'])) { ?>
<table width="700" align="center" border="3">
<tr><td align="center" colspan="9" height="100px;" bgcolor="orange"><h2>View All Images</h2></td></tr>
<tr align="center">
<th width="50">IMAGE</th>
<th width="60">DELETE</th>
</tr>

<?php
 
include("includes/connect.php");
 
  if(isset($_GET['Image']))
  {
	  
  $query = "select * from photo_gallery order by 1 DESC";
  $run = mysql_query($query);
 
  while($row=mysql_fetch_array($run))
  {
	  
	  $id=$row['img_id'];
	 
	  $image=$row['img_name'];
	 
?>
<tr align="center"><td><img src="../images/image/<?php echo $image; ?>" width="100px;" height="50"/></td>
<td><a style="text-decoration:none;"  href="delete1.php?deleted1=<?php echo $id;?>">Delete</a></td></tr>

 <?php }}}?>
 </table>
<?php
if(isset($_GET['insert'])){
	include("insert_post.php");
}
?>
<?php if(isset($_GET['view'])) { ?>
<table width="1000" align="center" border="3">
<tr><td align="center" colspan="9" height="100px;" bgcolor="orange"><h2>View All Posts</h2></td></tr>
<tr>
<th>Post No.</th>
<th>Post Title</th>
<th>Post Date</th>
<th>Post Author</th>
<th>Post Image</th>
<th>Post Content</th>
<th width="50">Edit</th>
<th width="60">Delete</th>
</tr>
<?php
 
include("includes/connect.php");
 
  if(isset($_GET['view']))
  {
	  
  $query = "select * from posts order by 1 DESC";
  $run = mysql_query($query);
  $i=1;
  while($row=mysql_fetch_array($run))
  {
	  
	  $id=$row['post_id'];
	  $title=$row['post_title'];
	  $date=$row['post_date'];
	  $image=$row['post_image'];
	  $author=$row['post_author'];
	  $content=substr($row['post_content'],0,50);
?>

<tr align="center">
<td width="60"><?php echo $i;$i++; ?></td>
<td width="150"><?php echo $title; ?></td>
<td><?php echo $date; ?></td>
<td><?php echo $author; ?></td>
<td> <img src="../images/<?php echo $image; ?>" width="100px;" height="50"/></td>
<td width="200"><?php echo $content; ?></td>
<td><a style="text-decoration:none;" href="edit.php?edit= <?php echo $id;?>">Edit</a></td>
<td><a style="text-decoration:none;"  href="delete.php?deleted=<?php echo $id;?>">Delete</a></td>
	</tr>   
	  
 <?php }}}?>
 </table>

</body>
</html>
<?php }?>