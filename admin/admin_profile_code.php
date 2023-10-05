<?php include("config.php") ?>
<?php include("admin_session.php") ?>
<?php
//$aid=$_POST['aid'];
$user=$_POST['user'];
$uname=$_POST['uname'];
 
 $up="UPDATE `admin` SET `user`='$user',`uname`='$uname' WHERE `aid`='".$_SESSION['admin_info'] ['aid']."'";
	
	$res=mysql_query($up)or die(mysql_error());
	if($res==1)
	{
		header('location:admin_profile.php?msg=Changes Completed');
		exit;	
	}
	else
	{
		header('location:admin_profile.php?err=Changes not Completed');
		exit;
	}
?>

