<form method="post" action="tester.php">
<table border="10" align="center" width="600" cellpadding="5" cellspacing="2"  bgcolor="#FEE378">
<tr><td>ID :</td>
<td><input type="text" name="id"><font size="+1" color="#FF0000" face="Arial, Helvetica, sans-serif" style="margin-left:20px;"><?php echo @$_GET['id'];?></font></td></tr>
<tr><td>Name :</td>
<td><input type="text" name="name"><font size="+1" color="#FF0000" face="Arial, Helvetica, sans-serif" style="margin-left:20px;"><?php echo @$_GET['name'];?></font></td></tr>
<tr><td>Father Name:</td>
<td><input type="text" name="father"><font size="+1" color="#FF0000" style="margin-left:20px;" face="Arial, Helvetica, sans-serif"><?php echo @$_GET['father'];?></font></td></tr>
<tr><td>Mother Name:</td>
<td><input type="text" name="mother"><font size="+1" color="#FF0000" style="margin-left:20px;"face="Arial, Helvetica, sans-serif"><?php echo @$_GET['mother'];?></font></td></tr>
<tr><td>Brother Name:</td>
<td><input type="text" name="brother"><font size="+1" color="#FF0000" style="margin-left:20px;" face="Arial, Helvetica, sans-serif"><?php echo @$_GET['brother'];?></font></td></tr>
<tr align="center"><td colspan="5"><input type="submit" name="submit" value="SUBMIT"></td></tr>
</table>
<center><font size="+2" color="#FF0000"  face="Arial, Helvetica, sans-serif"><?php echo @$_GET['show'];?></font></center>
</form>
<?php 
include("includes/connect.php");

$db=mysql_select_db("abbhi");
mysql_query("CREATE TABLE abhi(
a_id int(10) ,
A_name varchar(255) NOT NULL,
A_father varchar(255) NOT NULL,
A_mother varchar(255) NOT NULL,
A_bhai  varchar(255) NOT NULL
)");
if(isset($_POST['submit'])){
$id=$_POST['id'];
$name=$_POST['name'];
$father=$_POST['father'];
$mother=$_POST['mother'];
$brother=$_POST['brother'];

if($id==''){
echo"<script>window.open('tester.php?id=You must given the id of this record','_self')</script>";
exit();
}
if($name==''){
echo"<script>window.open('tester.php?name=You must fill name','_self')</script>";
exit();
}if($father==''){
echo"<script>window.open('tester.php?father=You must write father name','_self')</script>";
exit();
}if($mother==''){
echo"<script>window.open('tester.php?mother=You must write mother name','_self')</script>";
exit();
}
if($brother==''){
echo"<script>window.open('tester.php?brother=You must write brother name','_self')</script>";
exit();
}
$query="INSERT INTO `abbhi`.`abhi` (
`a_id` ,
`A_name` ,
`A_father` ,
`A_mother` ,
`A_bhai`
)
VALUES (
'$id', '$name', '$father', '$mother', '$brother'
)";
$run=mysql_query($query);
if($run){
echo "<script>window.open('tester.php?show=Record inserted successfully inserted','_self')</script>";}
else{
echo "<center><h1><font color='red'>some internal problem occur</font></h1></center>";}
}
?>
<table border="10" align="center" bgcolor="#CBFB97">
<tr><td>Name</td><td>Father</td><td>Mother</td><td>Brother</td></tr>
<?php
$query="select*from abhi order by rand() LIMIT 0,5";
$run=mysql_query($query);
while($row=mysql_fetch_array($run)){
?>
<tr>

<td><?php echo $row['A_name'] ?></td>
<td><?php echo $row['A_father'] ?></td>
<td><?php echo $row['A_mother'] ?></td>
<td><?php echo $row['A_bhai'] ?></td>
</tr>
<?php } ?></table>
