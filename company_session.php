<?php
if(empty($_SESSION['cuser_info']))
{
	header('location:company_login.php?err=Invalid email or password');
	exit;
}
?>
