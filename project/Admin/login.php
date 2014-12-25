<?php
session_start();
?>
<html>
<head>
<title>Admin Login</title>
<link href="css/admin_style.css" rel="stylesheet" />
</head>
<body>
 <form action="login.php" method="post">
 <table width="400" style="margin-top:100px;" align="center" border="20">
   <tr align="center">
     <td colspan="5"  bgcolor="blue"><h1>Admin login</h1></td>
    </tr>
    <tr >
      <td align="right">User Name :</td>
     <td><input type="text" name="user_name"></td>
     </tr>
     <tr >
      <td align="right">User Password :</td>
     <td><input type="password" name="user_pass"></td>
     </tr>
     <tr align="center">
     
     <td colspan="5"><input class="button submit"  type="submit" value="Login" name="login">     </td>
     </tr></table>
     </form>
</body>
</html>
<?php
include("includes/connect.php");
if(isset($_POST['login'])){
	$user_name= mysql_real_escape_string($_POST['user_name']);
	$user_pass=  mysql_real_escape_string($_POST['user_pass']);
	$encrypt = md5($user_pass);
	$login_query = "select * from admin_login where user_name = '$user_name' AND user_password='$user_pass'";
	$run=mysql_query($login_query);
	
	if(mysql_num_rows($run)>0)
	{
		$_SESSION['user_name']=$user_name;
		echo "<script>window.open('index.php','_self')</script>";
	
	}
	  else
	       {
		
		echo "<script> alert('User Name and Password did not match  Please enter valid username and password..!')</script>";
	      }
}
?>