<?php
if(empty($_SESSION['admin_info']))
{
	header('location:login.php?err=Invalid email or password');
	exit;
}
?>