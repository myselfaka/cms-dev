<?php
if(isset($_GET['code'])) {

    $acode = $_GET['code'];}
    echo $acode;

if(isset($_POST['pass'])){
    $pass = $_POST['pass'];


$con=mysqli_connect("xxx","xxx","xxx","xxx");
// Check connection
if (!$con)
  {
  echo "Failed to connect to MySQL: " . mysql_error();
  }
$query = mysqli_query($con,"select * from admin_login where activation_code='$acode'")
or die(mysqli_error($con)); 

 if (mysqli_num_rows ($query)==1) 
{



$query3 = mysqli_query($con,"update login set Password='$pass' where activation_code='$acode'")
or die(mysqli_error($con)); 

echo 'Password Changed';
}
else
{
echo 'Wrong CODE';

}}

?>

    <form action="resetpass.php" method="POST">
    <p>New Password:</p><input type="password" name="pass" />
    <input type="submit"  name="submit" value="Signup!" />
    </form>