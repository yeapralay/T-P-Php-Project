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
          <li><a href="admin_acc.php"><span>Home</span></a></li>
          <li class="active"><a href="#"><span>Student Info</span></a></li>
          <li><a href="#"><span>placement</span></a>
		       <ul>
                     <li><a href="company_reg.php">company registration</a></li>
                	<li><a href="post_campusing.php">Post Campusing</a></li>
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
        <h2><a href="#">Welcome <br /> <span><?php echo $_SESSION['admin_info']['uname']; ?></a></h2>
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
        <div class="post_content">
          <h2><span>Student Information</span></h2>
          <form name="stu_info" action="" method="post" enctype="multipart/form-data">
		  <table cellpadding="5" cellspacing="5">
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
		            ?><option value="<?php echo $dept['did'] ?>"><?php echo 
					    $dept['dname'] ?></option><?php
	                }
	                ?>
	             </select></td>
                 </tr>
		     </form>
        </div>
	   <?php
	   	$sql="SELECT * FROM student,dept WHERE student.did=dept.did ORDER BY      dept.dname ";
		$src=mysql_query($sql) or die(mysql_error());
		if(mysql_num_rows($src))
		{
			?><table cellspacing="0" class="tab1">
			<th>SLNo.</th><th>First Name</th><th>Middle Name</th><th>Last Name</th><th>Department</th><th>Semester</th><th>Email</th><th>Password</th><th>Address</th><th>Contact No</th><th>Gender</th><th>DOB</th><th>Aggregate</th><th>Skill</th><th>Download</th><th>Delete</th>
			<?php
			$c=1;
			while($row=mysql_fetch_array($src))
			{
				?><tr><td><?php echo $c;?></td>
				<td><?php echo $row['fname']?></td>
				<td><?php echo $row['mname']?></td>
				<td><?php echo $row['lname']?></td>
				<td><?php echo $row['dname']?></td>
				<td><?php echo $row['sem']?></td>
				<td><?php echo $row['email']?></td>
				<td><?php echo $row['pwd']?></td>
				<td><?php echo $row['add']?></td>
				<td><?php echo $row['ph']?></td>
				<td><?php echo $row['gen']?></td>
				<td><?php echo $row['dob']?></td>
				<td><?php echo $row['agg']?></td>
				<td><?php echo $row['skill']?></td>
                <td style="color:#CCC; font-weight:bold" ><?php if(empty($row['apath']))
					{
						echo "CV Unavailable";
					}
					else
					{
						?><a href="<?php echo $row['apath'] ?>" target="_blank"> <img src="images/Download.png" width="32" height="32" /></a>
                    <?php
					}
					?>
                    
				</td>
				
				<td><a href="student_info.php?sid=<?php echo $row['sid']; ?>">
				<img src="images/delete.png" 
				onclick="return confirm('Sure To Delete <?php echo $row['fname']; ?>');"></a>
				</td>
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
if(isset($_GET['sid']))
{
	$sid=$_GET['sid'];
	$del="DELETE FROM `student` WHERE `sid`='$sid'";
	$rec=mysql_query($del);
	if($rec==1)
	{
		header('location:student_info.php?msg=Delete sucessfully');
		
	}
	else
	{
		echo "Record not found";
	}
	
}
?>
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
