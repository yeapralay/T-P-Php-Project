<?php include("config.php") ?>
<?php include("student_session.php") ?>
<?php
	$name=$_POST['name'];
	$path=$_POST['path'];
	
	$sql="UPDATE `doc` SET `name`='$name', `path`='$path' WHERE `doc_id`='$doc_id'";;
			$res=mysql_query($sql);
			
			if($res==1)
			{				
				header('location:student_acc_upload.php?msg=Your CV Has Been Updated                       Successfully');
				exit;
			}
		else
		{
			header('location:student_acc_upload.php?err=File not updated');
		}

?>
