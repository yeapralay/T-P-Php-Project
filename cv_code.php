<?php include("config.php"); ?>
<?php include("student_session.php") ?>
<?php
	$name=$_FILES['cv']['name'];
	$apath="file/".rand(1111111,9999999)._.microtime(TRUE)._.$name;
	$spath="admin/".$apath;
	
	$up=move_uploaded_file($_FILES['cv']['tmp_name'],$spath);
	if($up==1)
	{
	$sql="UPDATE `student` SET `spath`='$spath',`apath`='$apath' WHERE `sid`='".$_SESSION['suser_info']['sid']."'";
			$res=mysql_query($sql)or die(mysql_error());
			
			if($res==1)
			{				
				header('location:student_acc_upload.php?msg=Your CV Has Been Uploaded Successfully');
				exit;
			}
		else
		{
			header('location:student_acc_upload.php?err=File not uploaded');
		}
	}
	else
	{
		header('location:student_acc_upload.php?err=File Not Uploaded');
		exit;
	}
?>
