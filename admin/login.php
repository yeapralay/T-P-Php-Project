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
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul class="menu">
          <li><a href="index.php"><span>Home</span></a></li>
          <li class="active"><a href="login.php">Login</a>
          </li>
          <li><a href="about.php"><span>About Us</span></a></li>
          <li><a href="gallery.php"><span>Gallery</span></a></li>
          <li><a href="contact.php"><span>Contact Us</span></a></li>
        </ul>
      </div>
      <div class="logo">
        <h1><a href="index.php">abc<span>college</span></a></h1>
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="images/slide1.jpg" width="960" height="360" alt="" /></a> <a href="#"><img src="images/slide2.jpg" width="960" height="360" alt="" /></a> <a href="#"><img src="images/slide3.jpg" width="960" height="360" alt="" /></a> </div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
	  <div class="content"><h2><span>ADMIN LOGIN</span></h2>
<form name="frm" action="alog_code.php" method="post" enctype="multipart/form-data">
<table cellpadding="5" cellspacing="10">
<tr>
<td><input type="user" name="user" required placeholder="User" /></td>
</tr>
<tr>
	<td><input type="password" name="pwd" required placeholder="Password" /></td>
</tr>
<tr><td><font color="#FF0000" size="+1" face="Arial, Helvetica, sans-serif"><b><?php if(isset($_GET['err']))
							echo $_GET['err']; ?></b></font></td></tr>
<tr>
<td align="center"><input type="submit" name="log" value="Login" id="btn" /></td></tr>

</table>
</form>
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
        <p><ul>
			<li>
			Identification of student’s potential and mapping their competencies.</li>
		   <li>Cataloguing the database of students.</li>
		  <li>Providing interlink for the enthusiastic talent ready to explore new horizons
		    alongside the growing requirement of the corporate world.</li> 
		   <li>Working as a platform for moulding the students according to the requirements
		    of the corporate world and Research & Development Departments.</li>
			</ul>
		   </p>
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
