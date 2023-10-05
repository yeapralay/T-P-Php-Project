<?php include("config.php") ?>
<?php include("admin_session.php") ?>
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
	$.validator.addMethod("cname",function(value,element)
{
return this.optional(element) || /^[a-zA-Z]{3,20}$/i.test(value); 
},"Name are 3-20 characters only");

$.validator.addMethod("email", function(value, element) 
{ 
return this.optional(element) || /^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/i.test(value); 
}, "Please enter a valid email address.");

$.validator.addMethod("pwd",function(value,element)
{
return this.optional(element) || /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/i.test(value); 
},"Passwords are 6-20 characters");

$("#creg").validate({	
rules: {
cname: "required cname",
email: "required email",
pwd: "required pwd",
},
messages:{
	email : { 
		required: "Please enter your email",
		},
	pwd: {required: "Please enter your password"},
	cname : {required: "Your Company Name",},
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
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul class="menu">
          <li><a href="admin_acc.php"><span>Home</span></a></li>
          <li><a href="student_info.php"><span>Student Info</span></a></li>
          <li><a href="#"><span>placement</span></a>
		       <ul>
			        <li class="active"><a href="company_reg.php">Company registration</a></li>
                	<li ><a href="post_campusing.php">Post Campusing</a></li>
                    <li><a href="#">Details</a></li>
                </ul>
			</li>
          <li><a href="#">Settings</a>
          		<ul>
                	<li><a href="admin_profile.php">Profile</a></li>
                    <li><a href="admin_pwd.php">Password</a></li>
                </ul>
          </li>
          <li><a href="alogout.php"><span>Logout</span></a></li>
        </ul>
      </div>
      <div class="logo">
        <h2><a href="#">Welcome <br /> <span><?php echo $_SESSION['admin_info']['uname']; ?>
		</span></a></h2>
      </div>
      <div class="clr"></div>
      <div class="timeline">
      <img src="images/sub-page-placement-pic - Copy.jpg" />
      </div>
      <div class="profile">
      <a href="#"><img src="images/userpic.gif" /></a>
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
          <h2><span>Company Registration</span></h2>
<form id="creg" action="creg_code.php" method="post" name="creg" >
<table cellpadding="3" cellspacing="5">
<tr>
<td>Name</td>
<td>
<input type="text" name="cname" id="cname"/></td></tr>
<td>Email</td>
<td><input type="text" name="email" id="email"/></td></tr>
<tr>
<td>Password</td>
<td><input type="password" name="pwd" id="pwd"/></td></tr>
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
<div class="clr"></div>
        </div>
       </div>
      </div>
      </div>
	  </div>
      <div class="clr"></div>
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
