<?php include('config.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Home</title>
<style type="text/css">
label.error 
{
font-size:12px;
background-color:#cc0000;
font-family:Arial, Helvetica, sans-serif;
color:#FFFFFF;
padding:3px;
margin-left:5px;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
position:relative;
float:right;
text-align:left;
}
label.error:hover{
	cursor:pointer;
}
#textHint{
	font-size:12px;
background-color:#cc0000;
font-family:Arial, Helvetica, sans-serif;
color:#FFFFFF;
padding:3px;
margin-left:5px;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
position:relative;
float:right;
text-align:left;
}
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
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
<!--<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-georgia.js"></script>-->
<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script>
function showUser(str)
{
if (str=="")
  {
  document.getElementById("textHint").innerHTML="Please enter your email";  //when text box have no value
  return;
  } 
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();  //google crome,IE8,Opera
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");  //IE5,Mozila
  }
  
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    	document.getElementById("textHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getuser.php?q="+str,true);
xmlhttp.send();
}
</script>

<script type="text/javascript" >
$(document).ready(function() {
	$.validator.addMethod("fname",function(value,element)
{
return this.optional(element) || /^[a-zA-Z]{3,20}$/i.test(value); 
},"Name are characters only");

$.validator.addMethod("lname",function(value,element)
{
return this.optional(element) || /^[a-zA-Z]{3,20}$/i.test(value); 
},"Last Name are characters only");

$.validator.addMethod("email", function(value, element) 
{ 
return this.optional(element) || /^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/i.test(value); 
}, "Please enter a valid email address.");

$.validator.addMethod("pwd",function(value,element)
{
return this.optional(element) || /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/i.test(value); 
},"Passwords are 6-20 characters");

$.validator.addMethod("ph",function(value,element)
{
return this.optional(element) || /^\d{10}$/i.test(value); 
},"10 digit mobile number");

$.validator.addMethod("dob",function(value,element)
{
return this.optional(element) || /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/i.test(value); 
},"Specify Date of Birth");

$("#reg").validate({	
rules: {
fname: "required fname",
lname: "required lname",
email: "required email",
pwd: "required pwd",
ph: "required ph",
dob:"required dob",
add:{ required : true,
},

gnd:{ required : true,
      minlength: 1
	},
sem: {
    required: true,
 },
 did : {
	 required: true,
 },
agg : {
	 required: true,
 },

skill : {
	 required: true,
 },

},
messages:{
	email : { 
		required: "Please enter your email",
		},
	pwd: {required: "Please enter your password"},
	fname : {required: "Your First Name",},
	lname : {required: "your Last Name"},
	ph: {required: "Your Contact Number"},
	dob: {required: "Your date of birth"},
	add : {required : "Please Enter your Address"},
	gnd : { required: "Please specify your Gender",
	},
	sem : { required : "Select Your Semester",
		},
	did: { required : "Please select your department"},
	agg : { required : "Please enter your aggregate",},
	skill : { required : "Please select your skill",
	},
	},
});
});
</script>

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
<script type="text/javascript">
$(document).ready(function(e) {
$("#datepicker").datepicker({dateFormat:'dd-mm-yy'});
$("#datepicker").datepicker({dateFormat:'dd-mm-yy'}).bind("change"),function(){
	var minValue = $(this).val();
	minValue = $.datepicker.parseDate("dd-mm-yy",minValue);
	minValue.setDate(minValue.getdate()+1);
	$("#to").datepicker("option","minDate",minValue);
  }
    
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
          <li><a href="index.php">Login</a>
          		<ul>
                	<li><a href="student_login.php">Student</a></li>
                    <li><a href="company_acc.php">Company</a></li>
                </ul>
          </li>
          <li><a href="about.html"><span>About Us</span></a></li>
          <li><a href="blog.html"><span>Gallery</span></a></li>
          <li><a href="contact.html"><span>Contact Us</span></a></li>
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
          <h2>Student Registration</h2>
          <form id="reg" action="sreg_code.php" method="post" name="reg" >
<table cellpadding="3" cellspacing="5">
<tr>
<td>First Name</td>
<td>
<input type="text" name="fname" id="fname"/></td></tr>
<tr>
<td>Middle Name</td>
<td><input type="text" name="mname" id="mname"  /></td></tr>
<tr>
<td>Last Name</td>
<td><input type="text" name="lname" id="lname"/></td></tr>
<tr>
<td>Email</td>
<td><input type="text" name="email" id="email" onkeyup="showUser(this.value)"/><label id="textHint"></label></td></tr>
<tr>
<td>Password</td>
<td><input type="password" name="pwd" id="pwd"/></td></tr>
<tr>
<td>Address</td>
<td><textarea name="add" cols="16" id="add" rows="3"></textarea></td></tr>
<tr>
<td>Phone</td>
<td><input type="text" name="ph" id="ph" /></td></tr>
<tr>
<td>Date of Birth</td>
<td><input type="text" name="dob" id="datepicker" /></td></tr>
<tr>		
<td>Gender</td>
<td><input type="radio" name="gnd" value="male" id="mgnd" />Male <input type="radio" name="gnd" value="female" id="fgnd" />Female</td></tr>
<tr>
	<td>Semester</td>
	<td><select name="sem" id="sem">
	    <option value="">None</option>
		<?php 
		  for($i=1;$i<=8;$i++)
		  {
		    ?><option value="<?php echo $i ?>"><?php echo $i ?></option><?php
			}
			?>
		</select></td>
</tr>
<tr>
	<?php
	$sql="SELECT * FROM `dept` ORDER BY `dname`";
	$res=mysql_query($sql) or die(mysql_error());
	?>
	<td>Department</td>
	<td><select name="did" id="did">
	<option value="">Department</option>
	<?php
	while($dept=mysql_fetch_assoc($res))
	{
		?><option value="<?php echo $dept['did'] ?>"><?php echo $dept['dname'] ?></option><?php
	}
	?>
	</select></td>
</tr>
<tr>
    <td>Aggregrate</td>
	<td><input type="text" name="agg" id="agg"/></td>
</tr>
<tr>
    <td>Skills</td>
	<td><select name="skill" id="skill">
	    <option value="">None</option>
		<option value="php">PHP</option>
		<option value="java">JAVA</option>
		<option value="asp.net">.NET</option>
		</select>
	</td>
 </tr>

<tr>
	<td colspan="2" align="center"><input type="submit" name="ok" value="Register" /></td>
</tr>
<tr>
	<td colspan="2" align="center">
	<?php
	if(isset($_GET['msg']))
	{
		echo $_GET['msg'];
	}
	else
	{
		if(isset($_GET['err']))
		{
			echo $_GET['err'];
		}
	}
?>

	</td>
	</tr>
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
