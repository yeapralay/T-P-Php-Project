<?php include("config.php") ?>
<?php include("student_session.php") ?>
<?php 
$sid=$_POST['sid'];
$oldpwd=$_POST['oldpwd'];
$npwd=$_POST['npwd'];
		
		
		$sql = "SELECT `sid` FROM `student` WHERE `pwd`='$oldpwd' AND `sid`='$sid'";
		$res=mysql_query($sql);
		if(mysql_num_rows($res))
		{
			$upd="UPDATE `student` SET `pwd`='$npwd' WHERE `sid`='$sid'";
			$upres=mysql_query($upd);
			if($upres==1)
			{
				header('location:student_pwd.php?msg=Password updated successfully');
				exit;
			}
			else
			{
				header('location:student_pwd.php?err=Password is not updated');
				exit;

			}
		}
		else
		{
			header('location:student_pwd.php?err=Password does not match');
			exit;
		}
?>