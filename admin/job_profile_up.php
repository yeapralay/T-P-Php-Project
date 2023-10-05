<?php include("config.php") ?>
<?php include("admin_session.php") ?>
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
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
<!--<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-georgia.js"></script>-->
<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
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
          <li><a href="admin_acc.php"><span>Home</span></a></li>
          <li><a href="student_info.php"><span>Student Info</span></a></li>
          <li><a href="#"><span>Placement</span></a>
		  <ul>
                    <li><a href="#">company registration</a></li>
                	<li><a href="#">Post Campusing</a></li>
                    <li><a href="#">Details</a></li>
          </ul>
		  </li>
          <li><a href="admin_acc.php">Settings</a>
          		<ul>
                	<li class="active"><a href="admin_profile.php">Profile</a></li>
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
      <img src="images/userpic.gif" />
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
          <h2><span>Your Profile</span></h2>
		  <?php
    		if(isset($_GET['eid']))
			{
				$jid=$_GET['eid'];
			$sql="select * from `job_details` where `jid`='$jid'";
			$res=mysql_query($sql);
			$row=mysql_fetch_array($res);
			}
			?>
			<form action="job_profile_up_code.php" method="post" name="profile" enctype="multipart/form-data">
<table cellpadding="3" cellspacing="5">
<tr>
<td>Company Name</td>
<td>
<input type="text" name="cname" value="<?php echo $row['cname'] ?>"   required/></td></tr>
<tr>
<td>Criteria</td>
<td><input type="text" name="criteria" value="<?php echo $row['criteria'] ?>" required /></td></tr>
<tr>
<td>Date</td>
<td><input type="text" name="date" value="<?php echo $row['date'] ?>" required id="datepicker" /></td></tr>
<tr>
<td>No. of Vacancies</td>
<td><input type="text" name="nov" value="<?php echo $row['nov'] ?>" required/></td></tr>
<tr>
<td>Skill</td>
<td><input type="text" name="skill" value="<?php echo $row['skill'] ?>" required /></td></tr>
<tr>
<tr>
<td>Course</td>
<td><input type="text" name="course" value="<?php echo $row['course'] ?>" required /></td></tr>
<td>Location</td>
<td><input type="text" name="location"  value="<?php echo $row['location'] ?>" required /></td></tr>
<tr>
<td>Salary</td>
<td><input type="text" name="salary"  value="<?php echo $row['salary'] ?>" required /></td></tr>
<tr>
<td>Document Required</td>
<td><textarea name="doc" cols="16" id="add" rows="3" ><?php echo $row['doc'] ?></textarea></td></tr>
<tr>
	<td colspan="2" align="center"><input type="hidden" name="jid" value="<?php echo $row['jid'] ?>" /><input type="submit" name="ok" value="Save Changes" /></td>
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

