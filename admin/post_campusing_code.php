<?php include("config.php")?>
<?php include("admin_session.php") ?>
<?php
$cname=$_POST['cname'];
$criteria=$_POST['criteria'];
$date=$_POST['date'];
$nov=$_POST['nov'];
$course=$_POST['course'];
$skill=$_POST['skill'];
$location=$_POST['location'];
$salary=$_POST['salary'];
$doc=$_POST['doc'];
$sql="INSERT INTO `job_details`(`cname`,`criteria`,`date`,`nov`,`course`,`skill`,`location`,`salary`,`doc`)
VALUES('$cname','$criteria','$date','$nov','$course','$skill','$location','$salary','$doc')";
$res=mysql_query($sql) or die(mysql_error());
if($res==1)
{
	header('location:post_campusing.php?msg= Job Registered sucessfully');
	exit;
}
else
{
	header('location:post_campusing.php?err=Job Registeration unsucessful');
	exit;
}
?>