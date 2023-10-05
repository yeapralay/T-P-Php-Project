<?php include("config.php"); ?>
<?php
if(isset($_GET['err']))
{
	echo $_GET['err'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
	<form name="frm" action="timeline_code.php" method="post" enctype="multipart/form-data">
	<b>upload image:-</b>
	<input type="file" name="img" />
	<input type="submit" name="ok" value="Upload" />
	</form>
</body>
</html>
