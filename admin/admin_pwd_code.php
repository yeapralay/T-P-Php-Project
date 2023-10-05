<?php include("config.php") ?>
<?php include("admin_session.php") ?>
<?php 
$aid=$_POST['aid'];
$oldpwd=$_POST['oldpwd'];
$npwd=$_POST['npwd'];
		
		
		$sql = "SELECT `aid` FROM `admin` WHERE `pwd`='$oldpwd' AND `aid`='$aid'";
		$res=mysql_query($sql);
		if(mysql_num_rows($res))
		{
			$upd="UPDATE `admin` SET `pwd`='$npwd' WHERE `aid`='$aid'";
			$upres=mysql_query($upd);
			if($upres==1)
			{
				header('location:admin_pwd.php?msg=Password updated successfully');
				exit;
			}
			else
			{
				header('location:admin_pwd.php?err=Password is not updated');
				exit;

			}
		}
		else
		{
			header('location:admin_pwd.php?err=Password does not match');
			exit;
		}
?>
