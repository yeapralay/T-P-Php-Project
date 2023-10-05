<?php include("config.php") ?>
<?php include("student_session.php") ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Update Cv</title>
<style type="text/css">
.menu{
	margin:0; 
	padding:0; 		
	list-style:none;
}
.menu li{
	width:125px;
	float:left;
	position:relative;
	}
.menu li a{
	color:#CCC;
	display:block;  	/* Making sure a element covers whole li area */
	padding:8px 7px 8px 7px; 
	text-decoration:none; /* No underline */
	text-align:center; 
	text-transform:uppercase;
	font-family:Arial, Helvetica, sans-serif;
	font-size:16px;
	font-weight:bold;
}
.menu li a:hover{
	color:#00F;
}
.menu ul {
	position:absolute; 
	left:0; 
	display:none; /* Hide it by default */
	margin:0 0 0 -1px; 
	list-style:none;
	z-index:1;
	}
.menu ul li {		/*Child Menu*/
	width:125px; 
	float:left; 
	border-top:none;
	}
	
.menu ul a {
	display:block;    	/* Making sure a element covers whole li area */
	padding:8px 7px 0px 7px;
	text-decoration:none;	
}
.menu ul a:hover {
	text-decoration:none;
	color:#00F;
	background:#CCC;
}

</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<!--<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-georgia.js"></script>-->
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {	
	// hover property will help us set the events for mouse enter and mouse leave
	$('.menu li').hover(
		// When mouse enters the .menu element
		function () {
			//slideDown in the menu submenu
			$('ul', this).slideDown(); 	// fadeIn will show the sub cat menu
		}, 
		// When mouse leaves the .menu element
		function () {
			//slideUp out the menu submenu
			$('ul', this).slideUp();	 // fadeOut will hide the sub cat menu		
		}
	);
});
</script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul class="menu">
          <li><a href="student_acc.php"><span>Home Page</span></a></li>
          <li class="active"><a href="student_acc_upload.php"><span>Upload Cv</span></a></li>
          <li><a href="#"><span>Campusing</span></a></li>
          <li><a href="#">Settings</a>
          		<ul>
                	<li><a href="#">Profile</a></li>
                    <li><a href="#">Password</a></li>
                </ul>
          </li>
          <li><a href="slogout.php"><span>Logout</span></a></li>
        </ul>
      </div>
      <div class="logo">
        <h2><a href="#">Welcome <br /> <span><?php echo $_SESSION['suser_info']['fname']; ?><?php echo $_SESSION['suser_info']['mname']; ?> </span><br /><span><?php echo $_SESSION['suser_info']['lname']; ?></span></a></h2>
      </div>
      <div class="clr"></div>
      <div class="timeline">
      <img src="images/sub-page-placement-pic - Copy.jpg" />
      </div>
      <div class="profile">
      <img src="images/userpic.gif" />
      </div>
        <div class="clr"></div>
          <div class="img"></div>
          <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2><span>Update Your CV</span></h2>
		   <?php
    		$sid=$_SESSION['suser_info']['sid'];
			$sql="select * FROM `doc`";
		    $src=mysql_query($sql) or die(mysql_error());
		    if(mysql_num_rows($src))
		     {
			?><table cellspacing="0" class="tab1">
			<th>SLNo.</th><th>SID</th><th>File Name</th><th>Path</th><th>Update</th>
			<?php
			$c=1;
			while($row=mysql_fetch_array($src))
			{
				?><tr><td><?php echo $c;?></td>
				<td><?php echo $row['sid']?></td>
				<td><?php echo $row['name']?></td>
				<td><?php echo $row['path']?></td>
				<td><a href="cv_search_update.php"?id=<?php echo $row['doc_id']; ?>"><img src="images/edit.png" /></a></td>
				<?php
				$c++;
			}
		
			?></table><?php
		}
		else
		{
			echo "No Records Found";
		}
	   ?>
       
       <form name="frm" action="cv_update_code.php" method="post" enctype="multipart/form-data">
		  <table cellpadding="5" cellspacing="5">
		  <tr><td>
			<input type="file" name="cv" value="<?php echo $row['cv'] ?>"  /></td><td><input type="submit" name="ok" value="Save Changes" /></td></tr>
		</table>
		</form> 
		<?php
			if(isset($_GET['msg']))
			{
				echo $_GET['msg'];
			}
			else
			if(isset($_GET['err']))
			{
				echo $_GET['err'];
			}
		?>

        </div>
          <div class="clr"></div>
      </div>
        </div>
    <div class="clr"></div>
  </div>
</div>
  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>Image</span> Gallery</h2>
        <a href="#"><img src="images/campus-interview-placement-services-250x250.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/placement-services1.png" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/place2.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/placement1.gif" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/placement.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/about3.jpg" width="75" height="75" alt="" class="gal" /></a> </div>
      <div class="col c2">
        <h2><span>Services</span> Overview</h2>
        <p>Curabitur sed urna id nunc pulvinar semper. Nunc sit amet tortor sit amet lacus sagittis posuere cursus vitae nunc.Etiam venenatis, turpis at eleifend porta, nisl nulla bibendum justo.</p>
        <ul class="fbg_ul">
          <li><a href="#">Lorem ipsum dolor labore et dolore.</a></li>
          <li><a href="#">Excepteur officia deserunt.</a></li>
          <li><a href="#">Integer tellus ipsum tempor sed.</a></li>
        </ul>
      </div>
      <div class="col c3">
        <h2><span>Contact</span> Us</h2>
        <p>abc college</p>
        <p class="contact_info"> <span>Address:</span> jadavpur,Kolkata<br />
          <span>Telephone:</span> +033-1234-5678<br />
          <span>FAX:</span> +458-4578<br />
          <span>Others:</span> +301 - 0125 - 01258<br />
          <span>E-mail:</span> <a href="#">info@abccollege.co.in</a> </p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Copyright Training &amp; Placement 2014</p>
      <p class="rf">Design by Amrita Tarat</a></p>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
</body>
</html>

