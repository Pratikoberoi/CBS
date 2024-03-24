<?php
session_start();
$con = mysqli_connect("10.8.82.253","10.8.82.253","savemegod","cbs");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
$result = "";
$pageURL = $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
$pgg = (explode("/",$pageURL));
$pg = $pgg[2];
$tablename	= $pg.'_agent';
$login = $_SESSION['un'];
				
				
$firstname = $_REQUEST['txtfirstname'];
$middlename = $_REQUEST['txtmiddlename'];
$lastname = $_REQUEST['txtlastname'];
$dob = "";
if(isset($_REQUEST['datepicker'])){ $dob = $_REQUEST['datepicker'];}
$sex = $_REQUEST['sex'];
$status = $_REQUEST['status'];
$site = $_REQUEST['site'];
$location = $_REQUEST['location'];
$zone = $_REQUEST['zone'];
$state = $_REQUEST['state'];
$country = $_REQUEST['country'];
$address = $_REQUEST['address'];
$emailid = $_REQUEST['emailid'];
$mobileno = $_REQUEST['mobileno'];
$group = $_REQUEST['group'];
$department = $_REQUEST['department'];
$role = $_REQUEST['role'];
$right = $_REQUEST['right'];
$managerid = $_REQUEST['managerid'];
$hodid = $_REQUEST['hodid'];
$description = $_REQUEST['description'];

$result = "";
$result = mysqli_query($con,"UPDATE $tablename SET first_name = '$firstname', middle_name='$middlename', last_name = '$lastname', dob ='$dob',  sex = '$sex', status = '$status', site = '$site', location  = '$location', zone = '$zone', state = '$state', country = '$country', address = '$address', email_id = '$emailid', phone_no = '$mobileno', group_a = '$group', deparment = '$department', role = '$role', right_a = '$right', manager_id = '$managerid', hod_id = '$hodid', description = '$description' WHERE user_id = '$login'");


if ($result === True)
{
	echo "<script>alert(\"Updated\");</script>";
	echo "<script>window.history.back()</script>";
}
else
{
	echo "<script>alert(\"Unable to Update \");</script> ";
	echo "<script>window.history.back()</script>";
}


?>