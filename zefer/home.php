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
</head>
<body>
<?php include('config.php'); 

if ((isset($_SESSION['un']) == "") || (isset($_SESSION['pw']) ==""))
{
	echo "session deleted";
$_SESSION['un'] = $_REQUEST['uname'];
$_SESSION['pw']   = $_REQUEST['passs'];
}
$login = $_SESSION['un'];
$password = $_SESSION['pw'];

if (($login == "") || ($password == ""))
	{
		echo "<script>alert(\"Fields cannot be left blank\");</script>";
		// header( 'Location: login.php' ) ;
	}
	else
	{
		$loginname = "";
		$loginname = mysqli_query($con,"select pass from customermaster  where loginid = '$login'");
		while($row = mysqli_fetch_array($loginname))
		{
			$result = $row['pass'];
		}

		if($result != $password)
		{
			echo "<script>alert(\"invalid password\");</script>";
			echo "<script>window.history.back()</script>";
		}
	}
?>
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
<td align="right"><a href="login.php">Log out</a>&nbsp;&nbsp;</td>
</tr>
</table>
</div><br />

<!-- main content -->


</div>
</body>
</html>					