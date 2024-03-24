<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php
session_start();
		$pageURL = $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		$pgg = (explode("/",$pageURL));
		$pg = $pgg[2];
		echo ucwords("$pg");
		$_SESSION['comname'] = $pg;
	?></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="featuredcontentglider.css" rel="stylesheet" type="text/css" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery-1.2.2.pack.js">
</script>
<script type="text/javascript" src="featuredcontentglider.js">
<!--***********************************************
Featured Content Glider script- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
Visit http://www.dynamicDrive.com for hundreds of DHTML scripts
This notice must stay intact for legal use
********************************************** -->


</script>

 <script>
function reload(){
window.location.href = "http://localhost/cbs/dummy/ticket.php";
}

function openpagechangecust(){
var theWin ="'toolbar=0,location=0,directories=0,status=1,menubar=0,scrollbars=0,resizable=0'"
littleWin = window.open("assign.php",'opened',theWin);
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

function openpagechangeagent(){
var theWin ="'toolbar=0,location=0,directories=0,status=1,menubar=0,scrollbars=0,resizable=0'"
littleWin = window.open("assign.php",'opened',theWin);
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

function openpagechangerelation(){
var theWin ="'toolbar=0,location=0,directories=0,status=1,menubar=0,scrollbars=0,resizable=0'"
littleWin = window.open("relation.php",'opened',theWin);
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
// function showHint(str)
// {
// var xmlhttp;
// if (str=="")
  // { 
  // alert(\"Customer ID can not be blank...\");
  // return;
  // }
// if (window.XMLHttpRequest)
  // {// code for IE7+, Firefox, Chrome, Opera, Safari
  // xmlhttp=new XMLHttpRequest();
  // }
// else
  // {// code for IE6, IE5
  // xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  // }
// xmlhttp.onreadystatechange=function()
  // {
  // if (xmlhttp.readyState==4 && xmlhttp.status==200)
    // {
    // document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    // }
  // }
// xmlhttp.open("GET","autoassign.php?q="+str,true);
// xmlhttp.send();
// location.reload(); 
// }
 </script>
</head>
<body>
<form action='' method='post'>
<div id="bg1">
	<div id="header">
		<h1><?php
		$pageURL = $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		$pgg = (explode("/",$pageURL));
		$pg = $pgg[2];
		echo ucwords("$pg");
	?></a></h1>
		<h2>Powered By <a href="">Zefer corp.</a></h2>
	</div>
	<!-- end #header -->
</div>
<!-- end #bg1 -->

<div id="templatemo_container">	<div id="templatemo_top_panel">


	<div id="page">		<!-- Sub menu -->

				<script type="text/javascript">

			featuredcontentglider.init({
				gliderid: "canadaprovinces", //ID of main glider container
				contentclass: "glidecontent", //Shared CSS class name of each glider content
				togglerid: "p-select", //ID of toggler container
				remotecontent: "", //Get gliding contents from external file on server? "filename" or "" to disable
				selected: 0, //Default selected content index (0=1st)
				persiststate: false, //Remember last content shown within browser session (true/false)?
				speed: 500, //Glide animation duration (in milliseconds)
				direction: "rightleft", //set direction of glide: "updown", "downup", "leftright", or "downup"
				autorotate: false, //Auto rotate contents (true/false)?
				autorotateconfig: [3000, 2] //if auto rotate enabled, set [milliseconds_btw_rotations, cycles_before_stopping]
			})

				</script>

				<div id="p-select" class="glidecontenttoggler">
					<a href="dashboard.php" class="dhome" >Home</a>
					<a href="#" class="toc page_02">General Info</a>
					<a href="#" class="toc page_01">Detailsd Info</a>
					<a href="#" class="toc page_03">Resolution</a>
					<a href="#" class="save" ><input type="submit" value="Save" class="button" /></a>
				</div>
			</div> <!-- end #sub menu -->
			<!-- end #page -->

	</div>
</div>

<?php

	$ticketid ="";
	if(isset($_REQUEST['incedentid'])){ $ticketid = $_REQUEST['incedentid']; }
	if ($ticketid === "")
	{
		$ticketid = $_SESSION['incedentid'];
		if ($ticketid === "")
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'> 
			window.alert('Invalid Ticket ID')
			window.location.href = 'http://localhost/cbs/dummy/dashboard.php';
			</SCRIPT>");
		}
	}
	else
	{
		if(isset($_REQUEST['incedentid'])){ $_SESSION['incedentid'] = $_REQUEST['incedentid']; }
	}
echo "<div id='templatemo_content'>";

        echo "<div id='canadaprovinces' class='glidecontentwrapper'>";

            echo "<div class='glidecontent'>";

			echo "<div id='ticket'>";
				echo "";


	echo "Incident ID: <input type='text' class='text' id='txtid' value='$ticketid' />";
	echo "&nbsp&nbsp&nbsp&nbsp&nbsp<input type='button' value='Update Customer' class='button' onclick='openpagechangecust()'/>";
	echo "&nbsp&nbsp&nbsp&nbsp&nbsp<input type='button' value='Assign Agent' class='button' onclick='openpagechangeagent()'/>";
	echo "&nbsp&nbsp&nbsp&nbsp&nbsp<input type='button' value='Related TT' class='button' onclick='openpagechangerelation()'/>";
	echo "&nbsp&nbsp&nbsp&nbsp&nbsp<input type='button' value='Reload' class='button' onclick='reload()'/>";
	if(isset($_REQUEST['incedentid'])){ $ticketid = $_REQUEST['incedentid']; }
	if ($ticketid !="")
	{
		echo "<script>document.getElementById( 'txtid' ).disabled = 'true';</script>";
	}

	echo "<br /><br />";

		echo "<table width='780px'>";

		echo "<tr>";
		echo "<td>Summary: </td> ";
		echo "<td><select>";

		echo "</select></td>";
		echo "<td>Status:</td> ";
		echo "<td> <select>";

			if(isset($_REQUEST['incedentid'])){ $ticketid = $_REQUEST['incedentid']; }
			if ($ticketid !="")
			{
				$pageURL = $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
				$pgg = (explode("/",$pageURL));
				$pg = $pgg[2];
				$tickettable = $pg.'_ticket';
				$customertable = $pg.'_customer';
				$agenttable = $pg.'_agent';
				include('connection.php');
				//$con = mysqli_connect("10.8.82.253","10.8.82.253","savemegod","cbs");
				$result = "";
				$result = mysqli_query($con,"SELECT * FROM $tickettable WHERE incident_id = '$ticketid'");
				if (!$result) {
				printf("Error: %s\n", mysqli_error($con));
				exit();}
				$Personassigned = "";
				while($row = mysqli_fetch_array($result))
				{
					$idd = $row['incident_id'];
					$tvalue = $row['status_t'];
					$priority = $row['priority'];
					$statusreason = $row['status_reason'];
					$customerid = $row['Customer_id'];
					$subject_t = $row['subject_t'];
					$body_t = $row['body_t'];
					$notes = $row['notes'];
					$Personassigned = $row['Person_assigned'];
					$relation_type = $row['relation_type'];
					$relation_incident = $row['relation_incident'];
					$relation_summaary = $row['relation_summaary'];
					$assigned_date = $row['assigned_date'];
					$modified_date = $row['modified_date'];
					$resolution_type = $row['resolution_type'];
					$resolution_summary = $row['resolution_summary'];
					$cost_of_support = $row['cost_of_support'];
					$support_type = $row['support_type'];
					$problem_type = $row['problem_type'];
					$level_1 = $row['level_1'];
					$level_2 = $row['level_2'];
					$cost_problem = $row['cost_problem'];
					$asset_used = $row['asset_used'];
					$asset_id = $row['asset_id'];
					$asset_description = $row['asset_description'];
					$asset_cost = $row['asset_cost'];
					$Distance_bl = $row['Distance_bl'];
					$distance_description = $row['distance_description'];
					$time_min = $row['time_min'];
					$travel_cost = $row['travel_cost'];
				}
				if ($idd == "") {
					 echo "<script>alert(\"Invalid ID...\");</script>";
					 echo "<script>window.history.back()</script>";
				}
				$_SESSION['customerid'] = $customerid;
				$result1 = "";
				$result1 = mysqli_query($con,"SELECT * FROM $customertable WHERE Customer_id = '$customerid'");
				if (!$result1) {
				printf("Error: %s\n", mysqli_error($con));
				exit();}
				while($row = mysqli_fetch_array($result1))
				{
					$firstname = $row['first_name'];
					$lastname = $row['last_name'];
					$organization = $row['organization'];
					$department = $row['department'];
					$site = $row['site'];
					$mobileno = $row['mobile_no'];
					$emailid = $row['email_id'];
					$supportcompany = $row['support_company'];
					$supportgroup = $row['support_group'];
				}
				echo "<option value='";
				echo "' selected>";
				echo $tvalue;
			echo "</option>";
				echo "<option value='New'>New</option>";
				echo "<option value='Assigned'>Assigned</option>";
				echo "<option value='Pending'>Pending</option>";
				echo "<option value='In Progress'>In Progress</option>";
				echo "<option value='Resolved'>Resolved</option>";
				echo "<option value='Cancelled'>Cancelled</option>";
			echo "</select></td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Status Reason:</td><td> <input type='text' class='text' value='$statusreason' /></td>";
			echo "<td>Priority:</td> ";
			echo "<td> <select>";
			echo "<option value='";
			echo $priority;
			echo "' selected>";
			echo $priority;
			echo "</option>";
				echo "<option value='Low'>Low</option>";
				echo "<option value='Normal'>Normal</option>";
				echo "<option value='Medium'>Medium</option>";
				echo "<option value='High'>High</option>";
				echo "<option value='VIP'>VIP</option>";
			echo "</select></td>";
		echo "</tr>";
	echo "</table><br />";

	echo "<table width='780px'>";
		echo "<tr>";
			echo "<td>Customer ID: </td> <td><input type='text' id='txt2' class='text' value='$customerid' /></td>";
			echo "<td>First Name:</td> <td> <input type='text' class='text' value='$firstname' readonly /></td>";
			echo "<td>Last Name: </td> <td><input type='text' class='text' value='$lastname' readonly /></td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Organization:</td><td><input type='text' class='text' value='$organization' readonly /></td>";
			echo "<td>Department:</td> <td> <input type='text' class='text' value='$department'  readonly/></td>";
			echo "<td>Site: </td> <td><input type='text' class='text' value='$site' readonly /></td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td rowspan='2' >Notes: </td> <td rowspan='2' colspan='3'>";
			echo "<textarea rows='4' cols='40'>";
			if ($notes == "")
			{
			echo $subject_t;
			echo "\n";
			echo "-----------------";
			echo "\n";
			echo "$body_t";
			echo "\n";
			echo "-----------------";
			echo "\n";
			echo "$notes";
			}
			else{
			echo "$notes";}
			echo "</textarea> </td>";
			echo "<td>Phone No.: </td> <td><input type='text' class='text' value='$mobileno' readonly /></td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Email ID: </td> <td><input type='text' class='text' value='$emailid' readonly /></td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Support Company: </td> <td><input type='text' class='text' value='$supportcompany' readonly /></td>";
			echo "<td>Person Assigned:</td>";
			// echo "<select>";

			// $result2 = "";
			// $result2 = mysqli_query($con,"SELECT * FROM $agenttable WHERE support_company = '$supportcompany' and support_group = '$supportgroup'");
			// if (!$result2) {
			// printf("Error: %s\n", mysqli_error($con));
			// exit();}
			// while($row = mysqli_fetch_array($result2))
			// {
				// $user_id = $row['user_id'];
				// echo "<option value='$user_id'>$user_id</option>";
			// }
			$result3 = "";
			$result3 = mysqli_query($con,"SELECT * FROM $agenttable WHERE agent_id = '$Personassigned'");
			if (!$result3) {
			printf("Error: %s\n", mysqli_error($con));
			exit();}
			$phone_no = "";
			$email_id = "";
			$user_id1 = "";
			while($row = mysqli_fetch_array($result3))
			{
				$user_id1 = $row['user_id'];
				if(isset($row['phone_no'])){ $phone_no = $row['phone_no'];}
				if(isset($row['email_id'])){ $email_id = $row['email_id'];}
				//$phone_no = $row['phone_no'];
				//$email_id = $row['email_id'];
			}
			//echo "<option value='$user_id1' selected>$user_id1</option>";
			// echo "</select>";
			// echo "</td>";
			echo "<td> <input type='text' class='text' value='$user_id1' readonly /></td>";
			echo "<td>PA Email ID: </td> <td><input type='text' class='text' value='$email_id' readonly /></td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Support Group: </td> <td><input type='text' class='text' value='$supportgroup' readonly /></td>";
			echo "<td>PA Phone No.: </td> <td><input type='text' class='text' value='$phone_no' readonly /></td>";
			echo "<td></td><td>";
			//echo "<input type='button' value='Auto Assign' class='button' onclick='showHint(txt2.value)'/> </td>";
			echo " </td>";
		echo "</tr>";
	echo "</table>";
	echo "&nbsp;&nbsp;&nbsp;";


	echo "</div>";
	echo "</div>";


// End of Page 1
// page 2




	echo "<div class='glidecontent'>";
	echo "<div id='ticket'>";

	echo "Incident ID: <input type='text' class='text' disabled='disabled' value='$ticketid' />";
	echo "&nbsp;&nbsp;&nbsp;";
	echo "Relation Type: <select>";
		echo "<option value='$relation_type'>$relation_type</option>";
						echo "<option value='Duplicate of'>Duplicate of</option>";
						echo "<option value='Caused due to'>Caused due to</option>";
						echo "<option value='Parent'>Parent</option>";
						echo "<option value='Child'>Child</option>";
						echo "<option value='Related to'>Related to</option>";
					echo "</select> &nbsp;&nbsp;&nbsp;";
	echo "Related Incident ID: <input type='text' class='text' value='$relation_incident' />";
	echo "&nbsp;&nbsp;&nbsp;";
	echo "<input type='submit' value='Relate' class='button' />";

	echo "<div>";
		echo "<table>";
		echo "<tr>";
			echo "<td rowspan='2' >Summary</td> <td colspan='3'><textarea rows='4' cols='40'>$relation_summaary</textarea></td>";
			echo "<td>Reported Date: </td> <td><input type='text' class='text' value='$assigned_date' readonly /></td>";
			echo "<td>Assigned Date: </td> <td><input type='text' class='text' value='$modified_date' readonly /></td>";
		echo "</tr>";
		echo "</table>";
	echo "</div>";
	echo "</div>";
	echo "</div>";


// end page 2
// page 3


	echo "<div class='glidecontent'>";
	echo "<div id='ticket'>";
	echo "<table>";
		echo "<tr>";
	echo "<td>Incident ID:</td> ";
	echo "<td><input type='text' class='text' disabled='disabled' value='$ticketid' /></td>";
	echo "<td>Resolution Type:</td>";
	echo "<td><select>";
		echo "<option value='$resolution_type'>$resolution_type</option>";
			echo "<option value='Resolved Sucessfully'>Resolved Sucessfully</option>";
			echo "<option value='Resolved Unsucessfully'>Resolved Unsucessfully</option>";
			echo "<option value='Esclated to another team'>Esclated to another team</option>";
	echo "</select></td>";
	echo "<td>Summary</td> <td rowspan='2' colspan='3'><textarea rows='4' cols='250'>$resolution_summary</textarea></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>Cost of Support:</td> ";
	echo "<td><input type='text' class='text' value='$cost_of_support' /></td>";
	echo "<td>Support Type:</td>";
	echo "<td><select>";
		echo "<option value='$support_type'>$support_type</option>";
			echo "<option value='On-site support'>On-site support</option>";
			echo "<option value='Base Location Support'>Base Location Support</option>";
			echo "<option value='Esclated to another team'>Esclated to another team</option>";
	echo "</select></td>";
	echo "</tr>";
	echo "<tr>";

	echo "<td>Problem Type :</td> ";
	echo "<td><select>";
		echo "<option value='$problem_type'>$problem_type</option>";
			echo "<option value='Software'>Software</option>";
			echo "<option value='Hardware'>Hardware</option>";
			echo "<option value='Other'>Other</option>";
	echo "</select></td>";
	echo "<td>Level 1 :</td>";
	echo "<td><select>";
		echo "<option value='$level_1'>$level_1</option>";
		echo "<option value='Other'>Other</option>";
	echo "</select></td>";
	echo "<td>Level 2 :</td>";
	echo "<td><input type='text' class='text' value='$level_2' /></td>";
	echo "<td>Cost :</td>";
	echo "<td><input type='text' class='text' value='$cost_problem' /></td></tr>";

	echo "<tr>";
	echo "<td>Asset Used:</td> ";
	echo "<td><select>";
		echo "<option value='$asset_used'>$asset_used</option>";
			echo "<option value='yes'>Yes</option>";
			echo "<option value='no'>No</option>";
	echo "</select></td>";
	echo "<td>Asset ID:</td>";
	echo "<td><input type='text' class='text' value='$asset_id' /></td>";
	echo "<td>Description:</td>";
	echo "<td><input type='text' class='text' value='$asset_description' /></td>";
	echo "<td>Cost:</td>";
	echo "<td><input type='text' class='text' value='$asset_cost' /></td></tr>";

	echo "<tr>";
	echo "<td>Distance from BL:</td> ";
	echo "<td><input type='text' class='text' value='$Distance_bl' /></td>";
	echo "<td>Description:</td>";
	echo "<td><input type='text' class='text' value='$distance_description' /></td>";
	echo "<td>Time Spent in Minutes:</td>";
	echo "<td><input type='text' class='text' value='$time_min' /></td>";
	echo "<td>Cost Incurred:</td>";
	echo "<td><input type='text' class='text' value='$travel_cost' /></td></tr>";

	echo "</table>";

	}
?>
	</div>
	</div>
	
	
	</div>
	</div>


	<br />
</form>
</body>
</html>