<?php 
error_reporting(0);
if($_POST['submit']=='Send')
{
	
//keep it inside
$email=$_POST['email'];
$code = $_GET['activation_code'];
$con=mysql_connect("Localhost","root","","malala");
// Check connection
if (!$con)
  {
  echo "Failed to connect to MySQL: " . mysql_error();
  }
$query = mysql_query($con,"select * from admin_login where user_name='$email'")
or die(mysql_error($con)); 

 if (mysql_num_rows ($query)==1) 
 {
$code=rand(100,999);
$message="You activation link is:resetpass.php?email=$email&code=$code";
mail($email, "ZatWing", $message);
echo 'Email sent';
$query2 = mysqli_query($con,"update admin_login set activation_code='$code' where user_name='$email' ")
or die(mysqli_error($con)); 
}
else
{
echo 'No user exist with this email id';

}}

?>
<form action="forgot.php" method="post">
Enter you Name: <input type="text" name="email">
<input type="submit" name="submit" value="Send">
</form>