<?php include("config.php") ?>
<?php include("admin_session.php") ?>
<?php
$jid=$_POST['jid'];
$cname=$_POST['cname'];
$criteria=$_POST['criteria'];
$date=$_POST['date'];
$nov=$_POST['nov'];
$skill=$_POST['skill'];
$course=$_POST['course'];
$location=$_POST['location'];
$salary=$_POST['salary'];
$doc=$_POST['doc'];
 
 $up="UPDATE `job_details` SET `cname`='$cname',`criteria`='$criteria',`date`='$date',`nov`='$nov',`skill`='$skill',`course`='$course',`location`='$location',`salary`='$salary',`doc`='$doc' WHERE `jid`='$jid' ";
	
	$res=mysql_query($up)or die(mysql_error());
	if($res==1)
	{
		header('location:post_campusing.php?msg=Changes Completed');
		exit;	
	}
	else
	{
		header('location:post_campusing.php?err=Changes not Completed');
		exit;
	}
?>