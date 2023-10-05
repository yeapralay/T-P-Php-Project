<?php include("config.php") ?>
<?php
$user=$_POST['user'];
$pwd=$_POST['pwd'];
$sql="SELECT * FROM `admin` WHERE `user`='$user' AND `pwd`='$pwd'";
$res=mysql_query($sql);
if(mysql_num_rows($res))
{
	$row=mysql_fetch_array($res);
	$_SESSION['admin_info']=$row;
	header('location:admin_acc.php?status=sucessfully login...');
	exit;
}
else
{
	header('location:login.php?err=Invalid Email or Password');
	exit;
}

?>



