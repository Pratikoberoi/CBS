<?php
session_start();
$dst = $_REQUEST['createurl'];
$login = $_SESSION['un'];
if ($dst == "")
{
	echo "<script>alert(\"Fields cannot be left blank\");</script>";
	//header('Location: '.$newURL);
	echo "<script>window.history.back()</script>";
}
else
{
	$con = mysqli_connect("10.8.82.253","10.8.82.253","savemegod","cbs");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$pasturl = mysqli_query($con,"Select com_url From company Where company_name = '$login' ");
	while($row = mysqli_fetch_array($pasturl))
	{
		$result = $row['com_url'];
	}
	if(file_exists($result) && is_dir($result))
	{
		rename("$result","$dst");
	}
	else
	{
	$updateurl = mysqli_query($con,"UPDATE company SET com_url= '$dst' WHERE company_name = '$login' ");
	if ( $updateurl === false )
	{
		echo "<script>alert(\"URL already exist\");</script> ";
		//header('Location: '.$newURL);
		echo "<script>window.history.back()</script>";
	}
	else
	{
		$src = "dummy";

		function recurse_copy($src,$dst)
		{
		$dir = opendir($src);
		@mkdir($dst);
		while(false !== ( $file = readdir($dir)) )
		{
			if (( $file != '.' ) && ( $file != '..' ))
			{
				if ( is_dir($src . '/' . $file) )
				{
					recurse_copy($src . '/' . $file,$dst . '/' . $file);
				}
				else
				{
					copy($src . '/' . $file,$dst . '/' . $file);
				}
			}
		}
		closedir($dir);
		}
		recurse_copy($src,$dst);
		//header('Location: '.$newURL);
		echo "<script>window.history.back()</script>";
	}
	}
}
?>