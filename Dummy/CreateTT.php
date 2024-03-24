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

<?php
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
<a href="home.php">Home</a>&nbsp;&nbsp;|&nbsp;&nbsp;
New&nbsp;&nbsp;|</td>
<td align="right"><a href="login.php">Logout</a>&nbsp;&nbsp;</td>
</tr>
</table>
</div><br />
<form action="createdTT.php" method="post">
<table border="0">

<tr><td>Company ID :</td>
	<td><input type="text" name="cid" class="text" id="q2" value="<?php
	$pageURL = $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	$pgg = (explode("/",$pageURL));
	$pg = $pgg[2];
	$customertable = $pg.'_customer';
	$loginname = "";
	$loginname = mysqli_query($con,"select company_id from $customertable where login_id = '$login'");
	
	while($row = mysqli_fetch_array($loginname))
	{
		$result = $row['company_id'];
	}
	echo $result;
	
	?>" readonly /></td></tr>
<tr><td>Subject :</td>
	<td><input type="text" name="tsubject" class="text" id="q3" value="" /></td></tr>
<tr><td>Note :</td>
	<td><textarea name="tbody" rows="4" cols="50" ></textarea></td></tr>
<tr><td><input type="submit" name="add" value="Create" class="button" /></td></tr>
</table>
</form>
</div>

</body>
</html>					