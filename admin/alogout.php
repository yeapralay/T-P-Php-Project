<?php include("config.php") ?>
<?php
session_destroy();
header('location:login.php');
exit;
?>
