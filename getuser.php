<?php
include("config.php");
?>

<?php


		if(isset($_GET['q']))
		{
			$email=$_GET['q'];
			
			$sql="SELECT * FROM `student` WHERE `email`='$email'";
			$res=mysql_query($sql);
			if(mysql_num_rows($res))
			{
				echo "Email Already exist";
			}
			else
			{
				echo "Email does not exists";
			}
		}

?>