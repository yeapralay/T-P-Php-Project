<?php include("config.php")?>
<?php
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$add=$_POST['add'];
$ph=$_POST['ph'];
$dob=$_POST['dob'];
$gen=$_POST['gnd'];
$sem=$_POST['sem'];
$agg=$_POST['agg'];
$skill=$_POST['skill'];
$did=$_POST['did'];
$src="SELECT * FROM `student` WHERE `email`='$email'";
$eres=mysql_query($src);
if(mysql_num_rows($eres))
{
	header('location:student_reg.php?err=Registration unsucessful');
	exit;
}
else
{
$sql="INSERT INTO `student`(`did`,`fname`,`mname`,`lname`,`email`,`pwd`,`add`,`ph`,`dob`,`gen`,`sem`,`agg`,`skill`)VALUES('$did','$fname','$mname','$lname','$email','$pwd','$add','$ph','$dob','$gen','$sem','$agg','$skill')";
$res=mysql_query($sql) or die(mysql_error());
if($res==1)
{
	header('location:student_reg.php?msg=Registered sucessfully');
	exit;
}
else
{
	header('location:student_reg.php?err=Registration unsucessful');
	exit;
}
}
?>