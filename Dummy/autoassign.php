<?php

session_start();
$con = mysqli_connect("10.8.82.253","10.8.82.253","savemegod","cbs");
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$incedentid = $_SESSION['incedentid'];

if(isset($_SESSION['incedentid'])){ $incedentid = $_SESSION['incedentid']; }
if(isset($_SESSION['customerid'])){ $pcustomerid = $_SESSION['customerid']; }
if(isset($_SESSION['comname'])){ $comname = $_SESSION['comname']; }
if(isset($_REQUEST['ncustomerid'])){ $ncustomerid = $_REQUEST['ncustomerid']; }
if(isset($_REQUEST['fname'])){ $fname = $_REQUEST['fname']; }
if(isset($_REQUEST['lname'])){ $lname = $_REQUEST['lname']; }
$tickettable = $comname.'_ticket';
$customertable = $comname.'_customer';
if($ncustomerid != "")
{
$result = mysqli_query($con,"SELECT * FROM $customertable");
while($row = mysqli_fetch_array($result))
{
	$idd = $row['customer_id'];
	if($idd === $ncustomerid)
	{
		$result = mysqli_query($con,"update $tickettable SET Customer_id = '$ncustomerid' WHERE incident_id = '$incedentid'");
		if ($result)
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'> 
			window.alert('Succesfully Updated')
			self.close();
			</SCRIPT>");
		}
		else
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'> 
			window.alert('Unable to Update')
			self.close();
			</SCRIPT>");
		}
	}
	else
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'> 
		window.alert('Invaild Customer ID')
		self.close();
		</SCRIPT>");
	}
}
}
elseif($fname != "" && $lname != "")
{
$result = mysqli_query($con,"SELECT * FROM $customertable");
while($row = mysqli_fetch_array($result))
{
	$first_name = $row['first_name'];
	$last_name = $row['last_name'];
	$customer_id = $row['customer_id'];
	if($first_name === $fname && $last_name === lname)
	{
		$result = mysqli_query($con,"update $tickettable SET Customer_id = '$customer_id' WHERE incident_id = '$incedentid'");
		if ($result)
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'> 
			window.alert('Succesfully Updated')
			self.close();
			</SCRIPT>");
		}
		else
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'> 
			window.alert('Unable to Update')
			self.close();
			</SCRIPT>");
		}
	}
	else
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'> 
		window.alert('Invaild Name')
		self.close();
		</SCRIPT>");
	}
}
}
else
{
	echo ("<SCRIPT LANGUAGE='JavaScript'> 
	window.alert('Empty Value cannot be updated')
	self.close();
	</SCRIPT>");
}
?>