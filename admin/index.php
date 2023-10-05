<?php include("config.php") ?>
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
          <li class="active"><a href="index.php"><span>Home</span></a></li>
          <li><a href="login.php">Login</a>
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
        <div class="article">
          <h2><span>Excellent Choice</span> For Your Career</h2>
          <div class="clr"></div>
          <div class="img"><img src="images/img3.jpg" width="178" height="185" alt="" class="fl" /></div>
          <div class="post_content">
            <p>The warmest of welcomes to everyone who visits our website.Even though you may live far away, it is now possible, through the magic of modern electronic communication, to pay us a visit and learn all about our college. ABC’s College represents something rather rare and special, an academic residential community. About 3000 of us live here in the beautiful buildings and grounds of the College. We live together because we are studying at university or providing support for those who are studying.We form a community by sharing common aims and common values, by doing many different activities together, by giving each other support and encouragement, by making friendships that will last a life-time. Within our community individuals are given the freedom to pursue those activities which are important for them.The University is recognized by University Grant Commission (UGC).ABC College provides to its students unparalleled placements in India and feels proud to have secured for them placements in 300+ Global and Indian Super Brands. Being instrumental in securing for its students the best of the lucrative jobs in various professional fields bears testimony of ABC’s claim to excellence.</p>
          </div>
          <div class="clr"></div>
        </div>
        <div class="article">
          <h2><span>How This</span> Works For You</h2>
          <div class="clr"></div>
          <div class="img"><img src="images/img2.jpg" width="178" height="185" alt="" class="fl" /></div>
          <div class="post_content">
            <p>To actively reach out to the corporate world for facilitating the best placements for ABC graduates, a full-fledged Department of Placements is maintained. This department has evolved a well designed concept of achieving this objective by closely working with the three stakeholders -- the students, the companies, and the university.
There is a strong liaison with the industry for continuous monitoring of changing trends and conditions in the global job market. Students are provided a valuable platform for directly interacting with the industry through this website of training and placement making things much simpler. Our university has tie ups with various industrial bodies for various training and other knowledge related programmes. All this ensures the best placements for our graduates.
To achieve its goal, the Training & Placement Cell works towards recognizing the core 
competencies of students. It works through a close knot organization and has a structure which 
conveys information to the students at the fastest possible rate.The Placement Cell acts as an interface between the Industry and the students and primarily enables the students to select their career options. It also facilitates the selection process of all the companies, as per their requirement.All registered students with Placement Cell are entitled to placement assistance,counselling for employment and even self employment.  
</p>
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
