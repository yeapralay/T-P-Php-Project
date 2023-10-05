<?php include("config.php"); ?>

<?php

	$sid=$_SESSION['suser_info']['sid'];
	$img_type=$_FILES['img']['type'];
	
	if($img_type=="image/jpeg"||$img_type=="image/gif"||$img_type=="image/pjpeg")
	{
		$timeline_url="images/user/".microtime(true).".jpeg";
		
		$src="SELECT `sid` FROM `timeline` WHERE `sid`='$sid'";
		$res=mysql_query($src);
		if(mysql_num_rows($res))
		{
			$up="UPDATE `timeline` SET `timeline_url`='$timeline_url' WHERE `sid`='$sid'";
			$r1=mysql_query($up);
			if($r1==1)
			{
				move_uploaded_file($_FILES['img']['tmp_name'],$timeline_url);
				header('location:student_acc.php');
				exit;
			}
		}
		else
		{
			$in="INSERT INTO `timeline`(`sid`,`timeline_url`) VALUES('$sid','$timeline_url')";
			$r2=mysql_query($in);
			
			if($r2==1)
			{
				move_uploaded_file($_FILES['img']['tmp_name'],$timeline_url);
				header('location:student_acc.php');
				exit;
			}
		}
	}
	else
	{
		header('location:change_timeline.php?err=Image format not support');
		exit;
	}


?>