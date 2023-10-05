<?php include("config.php") ?>
<?php include("student_session.php") ?>
<?php
//$sid=$_POST['sid'];
$did=$_POST['did'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$add=$_POST['add'];
$ph=$_POST['ph'];
$dob=$_POST['dob'];
$gen=$_POST['gen'];
$sem=$_POST['sem'];
$agg=$_POST['agg'];
$skill=$_POST['skill'];
 
 $up="UPDATE `student` SET `did`='$did',`fname`='$fname',`mname`='$mname',`lname`='$lname', `add`='$add',`ph`='$ph',`dob`='$dob',`gen`='$gen',`sem`='$sem',
 `agg`='$agg',`skill`='$skill' WHERE `sid`='".$_SESSION['suser_info']['sid']."'";
	
	$res=mysql_query($up)or die(mysql_error());
	if($res==1)
	{
		header('location:student_profile.php?msg=Changes Completed');
		exit;	
	}
	else
	{
		header('location:student_profile.php?err=Changes not Completed');
		exit;
	}
?>
