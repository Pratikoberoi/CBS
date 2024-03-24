<?php
session_start();
$con = mysqli_connect("10.8.82.253","10.8.82.253","savemegod","cbs");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	

if ((isset($_SESSION['un']) == "") || (isset($_SESSION['pw']) ==""))
{
$_SESSION['un'] = $_REQUEST['uname'];
$_SESSION['pw']   = $_REQUEST['passs'];
}
$login = $_SESSION['un'];
$password = $_SESSION['pw'];

if (($login == "") || ($password == ""))
	{
		echo "<script>alert(\"Fields cannot be left blank\");</script>";
		header( 'Location: http://localhost/cbs/' ) ;
	}
	else
	{
		$loginname = "";
		$loginname = mysqli_query($con,"SELECT password FROM company WHERE company_name = '$login'");
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