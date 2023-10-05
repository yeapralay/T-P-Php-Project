<?php include("config.php") ?>
<?php include("student_session.php") ?>
<?php include("timeline_src.php");?>
<?php include("profile_src.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Home</title>
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
			$('ul', this).fadeIn(); 	// fadeIn will show the sub cat menu
		}, 
		// When mouse leaves the .menu element
		function () {
			//slideUp out the menu submenu
			$('ul', this).fadeOut();	 // fadeOut will hide the sub cat menu		
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
          <li class="active"><a href="student_acc.php"><span>Home</span></a></li>
          <li><a href="student_acc_upload.php"><span>Upload Cv</span></a></li>
          <li><a href="campusing.php"><span>Campusing</span></a></li>
          <li><a href="#">Settings</a>
          		<ul>
                	<li><a href="student_profile.php">Profile</a></li>
                    <li><a href="student_pwd.php">Password</a></li>
                </ul>
          </li>
          <li><a href="slogout.php"><span>Logout</span></a></li>
        </ul>
      </div>
      <div class="logo">
        <h2><a href="#">Welcome <br /> <span><?php echo $_SESSION['suser_info']['fname']; ?><?php echo $_SESSION['suser_info']['mname']; ?> </span><br /><span><?php echo $_SESSION['suser_info']['lname']; ?></span></a></h2>
      </div>
      <div class="clr"></div>
      <div class="timeline" onmouseover="document.getElementById('link1').style.display='block';" onmouseout="document.getElementById('link1').style.display='none';">
      <img src="<?php echo $set_timeline; ?>" />
      <div id="link1"><a href="change_timeline.php">Change Timeline</a></div>
      </div>
      <div class="profile" onmouseover="document.getElementById('link2').style.display='block';" onmouseout="document.getElementById('link2').style.display='none';">
      <img src="<?php echo $set_prof; ?>" />
      <div id="link2"><a href="change_profile.php">Change Profile</a></div>
      </div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2><span>Excellent Solution</span> For Your Business</h2>
          <div class="clr"></div>
           <div class="post_content">
          </div>
        <div class="article">
         <h2><span>We'll Make Sure Template</span> Works For You</h2>
          <div class="post_content">
          </div>
          <div class="clr"></div>
        </div>
       </div>
      </div>
      </div>
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
