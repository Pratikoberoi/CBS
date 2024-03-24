<?php
session_start();
$con = mysqli_connect("10.8.82.253","10.8.82.253","savemegod","cbs");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

$companyname = $_SESSION['un'];
$agent = $companyname.'_agent';

		// $agent = $companyname.'_agent';
		// $aid = $_REQUEST['loginid'];
		// $aname = $_REQUEST['name'];
		// $ano = $_REQUEST['mobileno'];
		// $arole = $_REQUEST['role'];
		// $aright = $_REQUEST['right'];
		// $azone = $_REQUEST['zone'];
		// $astate = $_REQUEST['state'];
		// $asite = $_REQUEST['site'];
		// $aemail = $_REQUEST['email'];
		// $acountry = $_REQUEST['country'];
		// $agroup = $_REQUEST['group'];

if(isset($_SESSION['lid'])){ $loginid = $_SESSION['lid'];}
if(isset($_REQUEST['name'])){ $name = $_REQUEST['name'];}
if(isset($_REQUEST['mobileno'])){ $mobileno = $_REQUEST['mobileno'];}
if(isset($_REQUEST['role'])){ $role = $_REQUEST['role'];}
if(isset($_REQUEST['right'])){ $right = $_REQUEST['right'];}
if(isset($_REQUEST['zone'])){ $zone = $_REQUEST['zone'];}
if(isset($_REQUEST['state'])){ $state = $_REQUEST['state'];}
if(isset($_REQUEST['site'])){ $site = $_REQUEST['site'];}
if(isset($_REQUEST['emailid'])){ $email = $_REQUEST['emailid'];}
if(isset($_REQUEST['country'])){ $country = $_REQUEST['country'];}
if(isset($_REQUEST['group'])){ $group = $_REQUEST['group'];}

// $_SESSION['lid'] = $_REQUEST['loginid'];
// $_SESSION['lname'] = $_REQUEST['name'];
// $_SESSION['mno'] = $_REQUEST['mobileno'];
// $_SESSION['role'] = $_REQUEST['role'];
// $_SESSION['right'] = $_REQUEST['right'];
// $_SESSION['zone'] = $_REQUEST['zone'];
// $_SESSION['state'] = $_REQUEST['state'];
// $_SESSION['site'] = $_REQUEST['site'];
// $_SESSION['email'] = $_REQUEST['email'];
// $_SESSION['country'] = $_REQUEST['country'];
// $_SESSION['group'] = $_REQUEST['group'];


// $aid = $_SESSION['lid'];
// $aname = $_SESSION['lname'];
// $ano = $_SESSION['mno'];
// $arole = $_SESSION['role'];
// $aright = $_SESSION['right'];
// $azone = $_SESSION['zone'];
// $astate = $_SESSION['state'];
// $asite = $_SESSION['site'];
// $aemail = $_SESSION['email'];
// $acountry = $_SESSION['country'];
// $agroup = $_SESSION['group'];

$updatenorm = mysqli_query($con,"UPDATE $agent SET agent_name = '$name', phone_no = '$mobileno', role_c = '$role', right_c = '$right', zone_c = '$zone', state = '$state', site = '$site', email_id = '$email', country = '$country', group_c = '$group' WHERE agent_id = '$loginid' ");
if($updatenorm == true)
{
	$result = "";
	$agentcol = $companyname.'_agentcol';
	$result = mysqli_query($con,"SELECT * FROM $agentcol");
	$a = "0";
	if($result == true)
	{
		while($row = mysqli_fetch_array($result))
		{
			$array = "";
			$array = $row['coll'];
			echo $array;
			$coool = $_REQUEST[$array];
			echo $coool;
			$update = mysqli_query($con,"UPDATE temp1 SET $array = '$coool' WHERE agent_id = '$loginid' ");
		}

	}
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated')
    window.location.href='http://localhost/cbs/agentupdate.php';
    </SCRIPT>");

}
?>