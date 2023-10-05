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
<script type="text/javascript" >
$(document).ready(function() {
	$.validator.addMethod("cname",function(value,element)
{
return this.optional(element) || /^[a-zA-Z]{3,20}$/i.test(value); 
},"Name are characters only");

$.validator.addMethod("criteria",function(value,element)
{
return this.optional(element) || /^\d{10}$/i.test(value); 
},"Specify valid criteria");

$.validator.addMethod("date",function(value,element)
{
return this.optional(element) || /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/i.test(value); 
},"Specify Date");

$.validator.addMethod("nov",function(value,element)
{
return this.optional(element) || /^\d{10}$/i.test(value); 
},"Specify no. of vacancies");

$.validator.addMethod("skill",function(value,element)
{
return this.optional(element) || /^[a-zA-Z]{3,20}$/i.test(value); 
},"Characters only");

$.validator.addMethod("course",function(value,element)
{
return this.optional(element) || /^[a-zA-Z]{3,20}$/i.test(value); 
},"Characters only");

$.validator.addMethod("location",function(value,element)
{
return this.optional(element) || /^[a-zA-Z]{3,20}$/i.test(value); 
},"Characters only");

$("#reg").validate({	
rules: {
fname: "required cname",
criteria: "required criteria",
date: "required date",
nov: "required nov",
skill: "required skill",
course:"required course",
location:"required location",
doc:{ required : true,
},
salary: {
    required: true,
 },
},
messages:{
	cname : {required: "Your Company Name",},
	criteria : {required: "Enter Criteria"},
	date: {required: "Enter Date"},
	nov: {required: "Enter Number of Vacancies"},
	skill : {required : "Enter Skill Required"},
	Course : { required: "Enter Preferred Course",
	},
	location: { required : "Select Your Location",
		},
	salary: { required : "Enter Salary"},
	doc : { required : "Please enter documents required",},
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
          <li><a href="admin_acc.php"><span>Home</span></a></li>
          <li><a href="student_info.php"><span>Student Info</span></a></li>
          <li><a href="#"><span>placement</span></a>
		       <ul>
			        <li><a href="company_reg.php">company registration</a></li>
                	<li class="active"><a href="#">Post Campusing</a></li>
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
          <h2>Job Details</h2>
 <form action="post_campusing_code.php" method="post" name="reg" >
<table cellpadding="3" cellspacing="5">
<tr>
<td>Company Name</td>
<td>
<input type="text" name="cname" id="cname"/></td></tr>
<tr>
<td>Criteria</td>
<td><input type="text" name="criteria" id="criteria"/></td></tr>
<tr>
<td>Date</td>
<td><input type="text" name="date" required id="datepicker" /></td></tr>
<tr>
<td>No. of Vacancies</td>
<td><input type="text" name="nov" id="nov"/></td></tr>
<tr>
<td>Course</td>
<td><input type="text" name="course" id="course" /></td></tr>
<tr>
<td>Skill</td>
<td><input type="text" name="skill" id="skill" /></td></tr>
<tr>
<td>Location</td>
<td><input type="text" name="location" id="location"/></td></tr>
<tr>
<td>Salary</td>
<td><input type="text" name="salary" id="salary" /></td></tr>
<tr>
<td>Document Required</td>
<td><textarea name="doc" cols="16" id="add" rows="3" id="doc"></textarea></td></tr>
<tr>
	<td colspan="2" align="center"><input type="submit" name="ok" value="Submit" /></td>
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
 <?php
	   	$sql="SELECT * FROM job_details ";
		$src=mysql_query($sql) or die(mysql_error());
		if(mysql_num_rows($src))
		{
			?><table cellspacing="0" class="tab1">
			<th>SLNo.</th><th>Company Name</th><th>Criteria</th><th>Date</th><th>No. Of Vacancies</th><th>Skills</th><th>Course</th><th>Location</th><th>Salary</th><th>Documents Required</th><th>Update</th><th>Delete</th>
			<?php
			$c=1;
			while($row=mysql_fetch_array($src))
			{
				?><tr><td><?php echo $c;?></td>
				<td><?php echo $row['cname']?></td>
				<td><?php echo $row['criteria']?></td>
				<td><?php echo $row['date']?></td>
				<td><?php echo $row['nov']?></td>
				<td><?php echo $row['skill']?></td>
				<td><?php echo $row['course']?></td>
                <td><?php echo $row['location']?></td>
                <td><?php echo $row['salary']?></td>
                <td><?php echo $row['doc']?></td>
				<td><a href="job_profile_up.php?eid=<?php echo $row['jid']; ?>"><img src="images/edit.png" /></a></td>
				<td><a href="post_campusing.php?jid=<?php echo $row['jid']; ?>">
				<img src="images/delete.png" onclick="return confirm('Sure To Delete <?php echo $row['cname']; ?>');"></a></td>
				</tr><?php
				$c++;
			}
		
			?></table><?php
		}
		else
		{
			echo "No Records Found";
		}
	   ?>
      
 <?php
if(isset($_GET['jid']))
{
	$jid=$_GET['jid'];
	$del="DELETE FROM `job_details` WHERE `jid`='$jid'";
	$rec=mysql_query($del);
	if($rec==1)
	{
		header('location:post_campusing.php?msg=Delete sucessfully');
		
	}
	else
	{
		echo "Record not found";
	}
	
}
?>

</form>

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
