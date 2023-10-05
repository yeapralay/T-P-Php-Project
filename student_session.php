<?php
if(empty($_SESSION['suser_info']))
{
	header('location:student_login.php?err=Invalid email or password');
	exit;
}
?>
