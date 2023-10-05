<?php include("config.php") ?>
<?php
session_destroy();
header('location:company_login.php');
exit;
?>
