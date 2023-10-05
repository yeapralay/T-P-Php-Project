<?php include("config.php") ?>
<?php include("admin_session.php") ?>
<?php
$cname=$_POST['cname'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$sql="INSERT INTO `company`(`cname`,`email`,`pwd`)VALUES('$cname','$email','$pwd')";
$res=mysql_query($sql) or die(mysql_error());
if($res==1)
{
	header('location:company_reg.php?msg=Registered sucessfully');
	exit;
}
else
{
	header('location:company_reg.php?err=Registeration unsucessful');
	exit;
}
?>