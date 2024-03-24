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
					<a href="#" class="toc page_01">General Info</a>
					<a href="#" class="toc page_02">Relation</a>
					<a href="#" class="toc page_03">Resolution</a>
					<a href="dashboard.php" class="save" >Save</a>
				</div>
			</div> <!-- end #sub menu -->
			<!-- end #page -->

	</div>
</div>



<div id="templatemo_content">
    
        <div id="canadaprovinces" class="glidecontentwrapper">
        
            <div class="glidecontent">

			<div id="ticket">
				<form action="" method="post">
				
				
	Incident ID: <input type="text" class="text" id="txtid" value="<?php session_start();
	$ticketid ="";
	if(isset($_REQUEST['incedentid'])){ $ticketid = $_REQUEST['incedentid']; }
	if(isset($_REQUEST['incedentid'])){ $_SESSION['incedentid'] = $_REQUEST['incedentid']; }
	if(isset($_REQUEST['incedentid'])){ echo $_SESSION['incedentid'];} ?>" />
	<?php
	if(isset($_REQUEST['incedentid'])){ $ticketid = $_REQUEST['incedentid']; }
	if ($ticketid !="")
	{
		echo "<script>document.getElementById( 'txtid' ).disabled = 'true';</script>";
	}
	?>
	<br /><br />
	<table width="780px"> 
		<tr>
			<td>Summary: </td> 
			<td><select>
			<?php ?>
			</select></td>
			<td>Status:</td> 
			<td> <select>
			<option <?php
			if(isset($_REQUEST['incedentid'])){ $ticketid = $_REQUEST['incedentid']; }
			if ($ticketid !="")
			{
				$con = mysqli_connect("10.8.82.253","10.8.82.253","savemegod","cbs");
				$result = "";
				$result = mysqli_query($con,"SELECT * FROM zefer_ticket WHERE incident_id = '$ticketid'");
				if (!$result) {
				printf("Error: %s\n", mysqli_error($con));
				exit();}
				while($row = mysqli_fetch_array($result))
				{
					$value = $row['status_t'];
				}
				echo "value='";
				echo $value;
				echo "'>";
				echo $value;
				
			}?> </option>
				<option value="New">New</option>
				<option value="Assigned">Assigned</option>
				<option value="Pending">Pending</option>
				<option value="In Progress">In Progress</option>
				<option value="Resolved">Resolved</option>
				<option value="Cancelled">Cancelled</option>
			</select></td>
		</tr>
		<tr>
			<td>Status Reason:</td><td> <input type="text" class="text" /></td>
			<td>Priority:</td> 
			<td> <select>
				<option value="Low">Low</option>
				<option value="Normal">Normal</option>
				<option value="Medium">Medium</option>
				<option value="High">High</option>
				<option value="VIP">VIP</option>
			</select></td>
		</tr>
	</table><br />
	
	<table width="780px"> 
		<tr>
			<td>Customer ID: </td> <td><input type="text" class="text" /></td>
			<td>First Name:</td> <td> <input type="text" class="text" /></td>
			<td>Last Name: </td> <td><input type="text" class="text" /></td>
			
		</tr>
		<tr>
			<td>Organization: </td> <td><input type="text" class="text" /></td>
			<td>Department:</td> <td> <input type="text" class="text" /></td>
			<td>Site: </td> <td><input type="text" class="text" /></td>
			
		</tr>
		<tr>
			<td rowspan="2" >Notes: </td> <td rowspan="2" colspan="3"><textarea rows="4" cols="40"></textarea> </td>
			<td>Phone No.: </td> <td><input type="text" class="text" /></td>
			
		</tr>
		<tr>
			<td>Email ID: </td> <td><input type="text" class="text" /></td>	
		</tr>
		<tr>
			<td>Support Company: </td> <td><input type="text" class="text" /></td>
			<td>Person Assigned:</td> <td><input type="text" class="text" /></td>
			<td>PA Email ID: </td> <td><input type="text" class="text" /></td>	
		</tr>
		<tr>
			<td>Support Group: </td> <td><input type="text" class="text" /></td>
			<td>PA Phone No.: </td> <td><input type="text" class="text" /></td>
			<td></td><td><input type="button" class="button" value="Auto Assign"  /></td>
		</tr>
		<tr>
			<td><input type="button" value="Modify" class="button" /> </td>
			<td><input type="button" value="Clear" class="button" /></td>
			<td><input type="button" value="Search" class="button" /></td>
		</tr>
	</table>
	&nbsp;&nbsp;&nbsp;
</form>
	</div>
	</div>
	<div class="glidecontent">
	<div id="ticket">
	Incident ID: <input type="text" class="text" disabled="disabled" />&nbsp;&nbsp;&nbsp;
	Relation Type: <select>
						<option value="Duplicate of">Duplicate of</option>
						<option value="Caused due to">Caused due to</option>
						<option value="Parent">Parent</option>
						<option value="Child">Child</option>
						<option value="Related to">Related to</option>
					</select> &nbsp;&nbsp;&nbsp;
	Related Incident ID: <input type="text" class="text" />&nbsp;&nbsp;&nbsp;
	<input type="submit" value="Relate" class="button" />
	<div>
		<table>
		<tr>
			<td rowspan="2" >Summary</td> <td colspan="3"><textarea rows="4" cols="40"></textarea></td>
			<td>Reported Date: </td> <td><input type="text" class="text" /></td>
			<td>Assigned Date: </td> <td><input type="text" class="text" /></td>
		</tr>
		</table>
	</div>
	</div>
	</div>
	<!-- end page 2 -->
	<!-- page 3 -->
	<div class="glidecontent">
	<div id="ticket">
	<table>
		<tr>
	<td>Incident ID:</td> 
	<td><input type="text" class="text" disabled="disabled" /></td>
	<td>Resolution Type:</td>
	<td><select>
			<option value="Resolved Sucessfully">Resolved Sucessfully</option>
			<option value="Resolved Unsucessfully">Resolved Unsucessfully</option>
			<option value="Esclated to another team">Esclated to another team</option>
	</select></td>
	<td>Summary</td> <td rowspan="2" colspan="3"><textarea rows="4" cols="250"></textarea></td>
	</tr>
	<tr>
	<td>Cost of Support:</td> 
	<td><input type="text" class="text" /></td>
	<td>Support Type:</td>
	<td><select>
			<option value="On-site support">On-site support</option>
			<option value="Base Location Support<">Base Location Support</option>
			<option value="Esclated to another team">Esclated to another team</option>
	</select></td>
	</tr>
	<tr>
	<td>Problem Type :</td> 
	<td><select>
			<option value="Software">Software</option>
			<option value="Hardware">Hardware</option>
			<option value="Other">Other</option>
	</select></td>
	<td>Level 1 :</td>
	<td><select>
		<option value="Other">Other</option>
	</select></td>
	<td>Level 2 :</td>
	<td><input type="text" class="text" /></td>
	<td>Cost :</td>
	<td><input type="text" class="text" /></td></tr>
	
	<tr>
	<td>Asset Used:</td> 
	<td><select>
			<option value="yes">Yes</option>
			<option value="no">No</option>
	</select></td>
	<td>Asset ID:</td>
	<td><input type="text" class="text" /></td>
	<td>Description:</td>
	<td><input type="text" class="text" /></td>
	<td>Cost:</td>
	<td><input type="text" class="text" /></td></tr>
	
	<tr>
	<td>Distance from BL:</td> 
	<td><input type="text" class="text" /></td>
	<td>Description:</td>
	<td><input type="text" class="text" /></td>
	<td>Time Spent in Minutes:</td>
	<td><input type="text" class="text" /></td>
	<td>Cost Incurred:</td>
	<td><input type="text" class="text" /></td></tr>
	
	
	
	</table>
	</div>
	</div>
	<!-- end page 3 -->
	
	</div>
	</div>
	
	
	<br />


</body>
</html>					