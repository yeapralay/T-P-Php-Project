<?php include("config.php") ?>
<?php
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$sql="SELECT * FROM `company` WHERE `email`='$email' AND `pwd`='$pwd'";
$res=mysql_query($sql);
if(mysql_num_rows($res))
{
	$row=mysql_fetch_array($res);
	$_SESSION['cuser_info']=$row;
	header('location:company_acc.php?status=sucessfully login...');
	exit;
}
else
{
	header('location:company_login.php?err=Invalid Email or Password');
	exit;
}

?>