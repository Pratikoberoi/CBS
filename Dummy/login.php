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
session_destroy()
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
<div id="lbg">
<form action="home.php" method="post">
<table border="0" width="100%">
<tr><td align="right">Login ID:&nbsp;&nbsp;
	<input type="text" name="uid" class="text" id="q1" value=""/>&nbsp;&nbsp;
	Password :&nbsp;&nbsp;
	<input type="text" name="pass" class="text" id="q2" value="" />&nbsp;&nbsp;
	<input type="submit" name="add" value="Login" class="button" />&nbsp;&nbsp;<br />
	<a href="">Forgot User Name</a>&nbsp;<a href="">Forgot Password</a></td></tr>
	<tr><td align="center"><h2>About Us :</h2></td></tr>
	<tr><td align="right"><?php 
	$pageURL = $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
				$pgg = (explode("/",$pageURL));
				$pg = $pgg[2];
				$con = mysqli_connect("10.8.82.253","10.8.82.253","savemegod","cbs");
				$result = "";
				$result = mysqli_query($con,"SELECT * FROM company WHERE company_name = '$pg'");
				if (!$result) {
				printf("Error: %s\n", mysqli_error($con));
				exit();}
				$Personassigned = "";
				while($row = mysqli_fetch_array($result))
				{
					$about_us = $row['about_us'];
				}
				
		echo "<pre>";
		echo $about_us;
		echo "</pre>"; ?></td></tr></table>
</form>

</div>

</div>

</body>
</html>					