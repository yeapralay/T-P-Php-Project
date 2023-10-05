<?php include("config.php") ?>
<?php
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$sql="SELECT * FROM `student` WHERE `email`='$email' AND `pwd`='$pwd'";
$res=mysql_query($sql);
if(mysql_num_rows($res))
{
	$row=mysql_fetch_array($res);
	$_SESSION['suser_info']=$row;
	header('location:student_acc.php?status=sucessfully login...');
	exit;
}
else
{
	header('location:student_login.php?err=Invalid Email or Password');
	exit;
}

?>

