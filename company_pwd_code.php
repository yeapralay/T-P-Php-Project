<?php include("config.php") ?>
<?php include("company_session.php") ?>
<?php 
$cid=$_POST['cid'];
$oldpwd=$_POST['oldpwd'];
$npwd=$_POST['npwd'];
		
		
		$sql = "SELECT `cid` FROM `company` WHERE `pwd`='$oldpwd' AND `cid`='$cid'";
		$res=mysql_query($sql);
		if(mysql_num_rows($res))
		{
			$upd="UPDATE `company` SET `pwd`='$npwd' WHERE `cid`='$cid'";
			$upres=mysql_query($upd);
			if($upres==1)
			{
				header('location:company_pwd.php?msg=Password updated successfully');
				exit;
			}
			else
			{
				header('location:company_pwd.php?err=Password is not updated');
				exit;

			}
		}
		else
		{
			header('location:company_pwd.php?err=Password does not match');
			exit;
		}
?>