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
<link href="stylett.css" rel="stylesheet" type="text/css" />

<?PHP
session_start();
$con = mysqli_connect("10.8.82.253","10.8.82.253","savemegod","cbs");
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if ((isset($_SESSION['un']) == "") || (isset($_SESSION['pw']) ==""))
{
	$_SESSION['un'] = $_REQUEST['uid'];
	$_SESSION['pw']   = $_REQUEST['pass'];
}
$login = $_SESSION['un'];
$password = $_SESSION['pw'];

if (($login == "") || ($password == ""))
{
	echo "<script>alert(\"Fields cannot be left blank\");</script>";
	echo "<script>window.history.back()</script>";
}
else
{
	$pageURL = $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	$pgg = (explode("/",$pageURL));
	$pg = $pgg[2];
	$customertable = $pg.'_customer';
	$loginname = "";
	$loginname = mysqli_query($con,"select password from $customertable where login_id = '$login'");
	
	while($row = mysqli_fetch_array($loginname))
	{
		$result = $row['password'];
	}

	if($result != $password)
	{
		echo "<script>alert(\"invalid password\");</script>";
		echo "<script>window.history.back()</script>";
	}
}

?>

</head>
<body>
<!-- PHP Script -->
<?php
// Create connection
$con=mysqli_connect("10.8.82.253","10.8.82.253","savemegod","cbs");
// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
<!-- End PHP Script -->
<div id="content">
<table border="0"width="100%">
<tr>
	<td><?php ?></td>
	<td align="right"><h1><div id="cname"><?php 
		$pageURL = $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		$pgg = (explode("/",$pageURL));
		$pg = $pgg[2];
		echo ucwords("$pg");
	?></h1></div></td>
</tr>
</table>
<div id="menu">
<table width="100%">
<tr>
<td>&nbsp;&nbsp;
Home&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="CreateTT.php">New</a>&nbsp;&nbsp;|</td>
<td align="right"><a href="login.php">Logout</a>&nbsp;&nbsp;</td>
</tr>
</table>
</div><br />
<div id="maincontent">
<!-- main content -->
<h2>Incedent History:</h2>
<?PHP
$con=mysqli_connect("10.8.82.253","10.8.82.253","savemegod","cbs");
// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $login = $_SESSION['un'];
  $pageURL = $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	$pgg = (explode("/",$pageURL));
	$pg = $pgg[2];
	$tickettable = $pg.'_ticket';
	$customertable = $pg.'_customer';
	$query1 =  mysqli_query($con,"Select * from $customertable where login_id = '$login'");
	while($row = mysqli_fetch_array($query1))
	{
		$customer_id = $row['customer_id'];
	}
	$query =  mysqli_query($con,"Select * from $tickettable where Customer_id = '$customer_id'");
	echo "<table border='1'>";
	echo "<tr>";
	echo "<th> Incedent ID</td>";
	echo "<th> Summary</td>";
	echo "<th> Details</td>";
	echo "<th> Status</td>";
	echo "<th> Priority</td>";
	echo "<th> Person Assigned</td>";
	echo "<th> Created Date</td>";
	echo "</tr>";
	while($row = mysqli_fetch_array($query))
	{
		echo "<tr>";
		echo "<td>";
		$incident_id = $row['incident_id'];
		echo "$incident_id";
		echo "</td><td>";
		$summary_t = $row['summary_t'];
		echo "$summary_t";
		echo "</td><td>";
		$subject_t = $row['subject_t'];
		echo "$subject_t";
		echo "</td><td>";
		$status_t = $row['status_t'];
		echo "$status_t";
		echo "</td><td>";
		$priority = $row['priority'];
		echo "$priority";
		echo "</td><td>";
		$Person_assigned = $row['Person_assigned'];
		echo "$Person_assigned";
		echo "</td><td>";
		$assigned_date = $row['assigned_date'];
		echo "$assigned_date";
		echo "</td>";
		echo "</tr>";
	}
?>
</div>
</div>
</body>
</html>					