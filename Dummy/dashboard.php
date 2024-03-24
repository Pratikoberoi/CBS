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
	echo "<script>window.history.back()</script>";
}
else
{
	$pageURL = $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	$pgg = (explode("/",$pageURL));
	$pg = $pgg[2];
	$agenttable = $pg.'_agent';
	$loginname = "";
	$loginname = mysqli_query($con,"select password from $agenttable where user_id = '$login'");
	
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
<div id="bg1">
	<div id="header">
		<h1><?php 
		$pageURL = $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		$pgg = (explode("/",$pageURL));
		$pg = $pgg[2];
		echo ucwords("$pg");
	?></h1>
		<h2>Powered By <a href="">Zefer Corp.</a></h2>
	</div>
	<!-- end #header -->
</div>
<!-- end #bg1 -->
<div id="header2">
	<div id="menu">
	<table>
	<tr>
	<td><a href="dashboard.php">Dashbord</a></td>
	<td><a href="ticket.php">New Ticket</a></td>
	<td><a href="profile.php">Profile</a></td>
	<td><a href="assetconsole.php">Asset Console</a></td>
	<td><a href="admin.php">Admin</a></td>
	<td><a href="index.php">Log out</a></td>
	</tr>
	</table>
	</div>
		<!-- end #menu -->
</div>
	<!-- end #header2 -->

<!-- end #bg2 -->
<div id="bg3">
	<div id="bg4">
		<div id="bg5">
			<div id="page">
				<div id="content">
					<div class="post">

						<div class="entry"> 
							<p><div align="right"><a href="dashboard.php">Refresh</a></div>
							<table border="1" width="100%">
								<tr>
									<th>Incedent No.</th>
									<th>Summery</th>
									<th>Date</th>
									<th>Assignee</th>
									
								</tr>
							<?php
							$con = mysqli_connect("10.8.82.253","10.8.82.253","savemegod","cbs");
							if (mysqli_connect_errno())
							{
								echo "Failed to connect to MySQL: " . mysqli_connect_error();
							}
							$pageURL = $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
							$pgg = (explode("/",$pageURL));
							$pg = $pgg[2];
							$tickettable = $pg.'_ticket';
							$result = mysqli_query($con,"SELECT incident_id, summary_t, assigned_date, Person_assigned FROM $tickettable");
							while($row = mysqli_fetch_array($result))
							{
								echo "<tr>";
								echo "<td>";
								echo $row['incident_id'];
								echo "</td>";
								echo "<td>";
								echo $row['summary_t'];
								echo "</td>";
								echo "<td>";
								echo $row['assigned_date'];
								echo "</td>";
								echo "<td>";
								echo $row['Person_assigned'];
								echo "</td>";
								echo "</tr>";
							}
							mysqli_close($con);
							?> 
							</table><br />
							Ticket ID :-<form action="ticket.php" method="post">
							<div id="ticket">
								<select name="incedentid">
								<?php
								$pageURL = $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
								$pgg = (explode("/",$pageURL));
								$pg = $pgg[2];
								$tickettable = $pg.'_ticket';
								$con = mysqli_connect("10.8.82.253","10.8.82.253","savemegod","cbs");
								$result = mysqli_query($con,"SELECT incident_id FROM $tickettable");
								while($row = mysqli_fetch_array($result))
								{
									echo "<option value='";
									echo $row['incident_id'];
									echo "'>";
									echo $row['incident_id'];
									echo "</option>";
								}	
								?>
								</select>
								<input type="submit" class="submit" value="Edit">
							</div></form>
							
							<form action="ticket.php" method="post">
							<div id="ticket">
								<input type="text" name="incedentid"  class="text" />
								<input type="submit" class="submit" value="Search">
							</div></form>
							</p>
						</div>
						<div class="meta">
							<p class="credit"> <a href="#"></a> </p>
							<p class="links"><a href="#" class="comments"></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="#" class="more"></a></p>
						</div>
					</div>
					
				</div>
				<!-- end #content -->
				
				<div style="clear: both; height: 40px;">&nbsp;</div>
			</div>
			<!-- end #page -->
		</div>
	</div>
</div>
<!-- end #bg3 -->
<div id="footer">
	<p>(c) 2013 CBS.com</p>
</div>
<!-- end #footer -->
</body>
</html>