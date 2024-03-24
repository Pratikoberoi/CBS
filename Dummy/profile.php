<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php 
		$pageURL = $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		$pgg = (explode("/",$pageURL));
		$pg = $pgg[2];
		echo ucwords("$pg");
	?></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<?php
session_start();
include('connection.php');
//$con = mysqli_connect("10.8.82.253","10.8.82.253","savemegod","cbs");
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if ((isset($_SESSION['un']) == "") || (isset($_SESSION['pw']) ==""))
{
	echo "<script>alert(\"Session Expired Kindly Re-Login\");</script>";
	echo "<script>window.history.back()</script>";
}

 ?>
 <script>
function openpagepass(){
var theWin ="'toolbar=0,location=0,directories=0,status=1,menubar=0,scrollbars=0,resizable=0'"
littleWin = window.open("changepassword.php",'opened',theWin);
window.moveTo(0,0);
k = (screen.availWidth/screen.availHeight)<1 ? 1 : 0.35;
l = (screen.availWidth/screen.availHeight)<1 ? 1 : 0.5;
if (document.all) {
littleWin.resizeTo(screen.availWidth*k,screen.availHeight);
} else {
littleWin.outerWidth = screen.availWidth*k;
littleWin.outerHeight = screen.availHeight*l;
}
littleWin.focus();
}
</script>

<script>
function openpageupload(){
var theWin ="'toolbar=0,location=0,directories=0,status=1,menubar=0,scrollbars=0,resizable=0'"
littleWin = window.open("upload.php",'opened',theWin);
window.moveTo(0,0);
k = (screen.availWidth/screen.availHeight)<1 ? 1 : 0.5;
l = (screen.availWidth/screen.availHeight)<1 ? 1 : 0.35;
if (document.all) {
littleWin.resizeTo(screen.availWidth*k,screen.availHeight);
} else {
littleWin.outerWidth = screen.availWidth*k;
littleWin.outerHeight = screen.availHeight*l;
}
littleWin.focus();
}
</script>

  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css" />
<script>
$(function() {
$( "#datepicker" ).datepicker();
});
</script>

</head>
<body>
<div id="bg1">
	<div id="header">
		<h1><?php 
		$pageURL = $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		$pgg = (explode("/",$pageURL));
		$pg = $pgg[2];
		echo ucwords("$pg");
	?></h1>
		<h2>Powered By <a href="">Zefer Corp.</a></h2>
	</div>
	<!-- end #header -->
</div>
<!-- end #bg1 -->
<div id="header2">
	<div id="menu">
	<table>
	<tr>
	<td><a href="dashboard.php">Dashbord</a></td>
	<td><a href="ticket.php">New Ticket</a></td>
	<td><a href="profile.php">Profile</a></td>
	<td><a href="assetconsole.php">Asset Console</a></td>
	<td><a href="admin.php">Admin</a></td>
	<td><a href="index.php">Logout</a></td>
	</tr>
	</table>
	</div>
		<!-- end #menu -->
</div>
	<!-- end #header2 -->

<!-- end #bg2 -->
<div id="bg3">
	<div id="bg4">
		<div id="bg5">
			<div id="page">
				<div id="content">
					<div class="post">
					
					
					<div id="format">
					<h1>Profile:</h1><br />
					<form action="updateprofile.php" method="post">
					<table>
					<tr><?php
					echo "<td rowspan='4'><img src='" ;
				include('connection.php');
				//$con = mysqli_connect("10.8.82.253","10.8.82.253","savemegod","cbs");
				$result = "";
				$pageURL = $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
				$pgg = (explode("/",$pageURL));
				$pg = $pgg[2];
				$tablename	= $pg.'_agent';
				$login = $_SESSION['un'];
				$result = mysqli_query($con,"SELECT * FROM $tablename WHERE user_id = '$login'");
				while($row = mysqli_fetch_array($result))
				{
					$value = $row['image'];
				}
				echo "images/";
				echo $value;
				echo "' width='120' height='160'>";
				echo "</td>";
				echo "<td>Agent ID</td>";
				echo "<td><input type='text' class='text' disabled='disabled' value='";
				$agentid = "";
				$result = mysqli_query($con,"SELECT * FROM $tablename WHERE user_id = '$login'");
				while($row = mysqli_fetch_array($result))
				{
					$agentid = $row['agent_id'];
				}
				echo $agentid;
				
				echo "' /></td>";
				echo "<td>Login ID</td>";
				echo "<td><input type='text' class='text' disabled='disabled' value='";
				echo $login;
				echo "' /></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>First Name</td>";
				echo "<td><input type='text' name='txtfirstname' class='text' value='";
				$firstname = "";
				$result = mysqli_query($con,"SELECT * FROM $tablename WHERE user_id = '$login'");
				while($row = mysqli_fetch_array($result))
				{
					$firstname = $row['first_name'];
				}
				echo $firstname;
				
				echo "' /></td>"; 
				echo "<td>Middle Name</td>";
				echo "<td><input type='text' name='txtmiddlename' class='text' value='";
				$middlename = "";
				$result = mysqli_query($con,"SELECT * FROM $tablename WHERE user_id = '$login'");
				while($row = mysqli_fetch_array($result))
				{
					$middlename = $row['middle_name'];
				}
				echo $middlename;

				echo "' /></td>";
				echo "<td>Last name</td>";
				echo "<td><input type='text' name='txtlastname' class='text' value='";
				$lastname = "";
				$result = mysqli_query($con,"SELECT * FROM $tablename WHERE user_id = '$login'");
				while($row = mysqli_fetch_array($result))
				{
					$lastname = $row['last_name'];
				}
				echo $lastname;
				
				echo "' /></td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>Date of Birth:</td>";
				echo "<td><input type='text' class='text' name='datepicker' id='datepicker' value='";
				
				$dob = "";
				$result = mysqli_query($con,"SELECT * FROM $tablename WHERE user_id = '$login'");
				while($row = mysqli_fetch_array($result))
				{
					$dob = $row['dob'];
				}
				echo $dob;
				
				echo "' />";
				echo "</td>";
				echo "<td>Sex:</td>";
				echo "<td><input type='text' name='sex' class='text' value='";
				$sex = "";
				$result = mysqli_query($con,"SELECT * FROM $tablename WHERE user_id = '$login'");
				while($row = mysqli_fetch_array($result))
				{
					$sex = $row['sex'];
				}
				echo $sex;
				
				
				echo "' /></td>";
				echo "<td>Status</td>";
				echo "<td><input type='text' name='status' class='text' value='";
				$Status = "";
				$result = mysqli_query($con,"SELECT * FROM $tablename WHERE user_id = '$login'");
				while($row = mysqli_fetch_array($result))
				{
					$Status = $row['status'];
				}
				echo $Status;

				echo "' /></td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>Site</td>";
				echo "<td><input type='text' name='site' class='text' value='";
				$site = "";
				$result = mysqli_query($con,"SELECT * FROM $tablename WHERE user_id = '$login'");
				while($row = mysqli_fetch_array($result))
				{
					$site = $row['site'];
				}
				echo $site;
				
				echo "' /></td>";
				echo "<td>Location</td>";
				echo "<td><input type='text' name='location' class='text' value='";
				$Location = "";
				$result = mysqli_query($con,"SELECT * FROM $tablename WHERE user_id = '$login'");
				while($row = mysqli_fetch_array($result))
				{
					$Location = $row['location'];
				}
				echo $Location;

				echo "' /></td>";
				echo "<td>Zone</td>";
				echo "<td><input type='text' name='zone' class='text' value='";
				$Zone = "";
				$result = mysqli_query($con,"SELECT * FROM $tablename WHERE user_id = '$login'");
				while($row = mysqli_fetch_array($result))
				{
					$Zone = $row['zone'];
				}
				echo $Zone;

				echo "' /></td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td></td>";
				echo "<td>State</td>";
				echo "<td><input type='text' name='state' class='text' value='";
				$State = "";
				$result = mysqli_query($con,"SELECT * FROM $tablename WHERE user_id = '$login'");
				while($row = mysqli_fetch_array($result))
				{
					$State = $row['state'];
				}
				echo $State;

				echo "' /></td>";
				echo "<td>Country</td>";
				echo "<td><input type='text' name='country' class='text' value='";
				$Country = "";
				$result = mysqli_query($con,"SELECT * FROM $tablename WHERE user_id = '$login'");
				while($row = mysqli_fetch_array($result))
				{
					$Country = $row['country'];
				}
				echo $Country;

				echo "' /></td>";
				echo "<td>Address</td>";
				echo "<td><input type='text' name='address' class='text' value='";
				$Address = "";
				$result = mysqli_query($con,"SELECT * FROM $tablename WHERE user_id = '$login'");
				while($row = mysqli_fetch_array($result))
				{
					$Address = $row['address'];
				}
				echo $Address;


				echo "' /></td>";
				echo "</tr>"; 
				echo "<tr>";
				echo "<td><input type='button' value='Upload Image' class='button2' onclick='openpageupload()'/></td>";
				echo "<td>Email ID</td>";
				echo "<td><input type='text' name='emailid' class='text' value='";
				$Email = "";
				$result = mysqli_query($con,"SELECT * FROM $tablename WHERE user_id = '$login'");
				while($row = mysqli_fetch_array($result))
				{
					$Email = $row['email_id'];
				}
				echo $Email;
				
				
				echo "' /></td>";
				echo "<td>Phone No.</td>";
				echo "<td><input type='text' name='mobileno' class='text' value='";
				$Phone = "";
				$result = mysqli_query($con,"SELECT * FROM $tablename WHERE user_id = '$login'");
				while($row = mysqli_fetch_array($result))
				{
					$Phone = $row['phone_no'];
				}
				echo $Phone;
				
				
				echo "' /></td>";
				echo "<td>Group</td>";
				echo "<td><input type='text' name='group' class='text' value='";
				$Group = "";
				$result = mysqli_query($con,"SELECT * FROM $tablename WHERE user_id = '$login'");
				while($row = mysqli_fetch_array($result))
				{
					$Group = $row['group_a'];
				}
				echo $Group;
				
				
				echo "' /></td>";
				echo "</tr>"; 
				echo "<tr>";
				echo "<td><input type='button' value='Change Password' class='button2' onclick='openpagepass()' /></td>";
				echo "<td>Department</td>";
				echo "<td><input type='text' name='department' class='text' value='";
				$Department = "";
				$result = mysqli_query($con,"SELECT * FROM $tablename WHERE user_id = '$login'");
				while($row = mysqli_fetch_array($result))
				{
					$Department = $row['deparment'];
				}
				echo $Department;
				
				
				echo "' /></td>";
				echo "<td>Role</td>";
				echo "<td><input type='text' name='role' class='text' value='";
				$Role = "";
				$result = mysqli_query($con,"SELECT * FROM $tablename WHERE user_id = '$login'");
				while($row = mysqli_fetch_array($result))
				{
					$Role = $row['role'];
				}
				echo $Role;
				
				
				echo "' /></td>";
				echo "<td>Right</td>";
				echo "<td><input type='text' name='right' class='text' value='";
				$Right = "";
				$result = mysqli_query($con,"SELECT * FROM $tablename WHERE user_id = '$login'");
				while($row = mysqli_fetch_array($result))
				{
					$Right = $row['right_a'];
				}
				echo $Right;
				
				
				echo "' /></td>";
				echo "</tr>"; 
				echo "<tr>";
				echo "<td><input type='submit' value='Update' class='button2' /></td>";
				echo "<td>Manager ID</td>";
				echo "<td><input type='text' name='managerid' class='text' value='";
				$Manager = "";
				$result = mysqli_query($con,"SELECT * FROM $tablename WHERE user_id = '$login'");
				while($row = mysqli_fetch_array($result))
				{
					$Manager = $row['manager_id'];
				}
				echo $Manager;
				
				
				echo "' /></td>";
				echo "<td>HOD ID</td>";
				echo "<td><input type='text' name='hodid' class='text' value='";
				$HOD = "";
				$result = mysqli_query($con,"SELECT * FROM $tablename WHERE user_id = '$login'");
				while($row = mysqli_fetch_array($result))
				{
					$HOD = $row['hod_id'];
				}
				echo $HOD;
				
				
				echo "' /></td>";
				echo "<td>Description</td>";
				echo "<td><input type='text' name='description' class='text' value='";
				$Description = "";
				$result = mysqli_query($con,"SELECT * FROM $tablename WHERE user_id = '$login'");
				while($row = mysqli_fetch_array($result))
				{
					$Description = $row['description'];
				}
				echo $Description;
				
				
				echo "' /></td>";
				echo "</tr>"; ?>
					
					</table>

					</form>
					</div>
					
					
					</div>
				</div>
				<!-- end #content -->
				
				<div style="clear: both; height: 40px;">&nbsp;</div>
			</div>
			<!-- end #page -->
		</div>
	</div>
</div>
<!-- end #bg3 -->
<div id="footer">
	<p>(c) 2013 CBS.com</p>
</div>
<!-- end #footer -->
</body>
</html>