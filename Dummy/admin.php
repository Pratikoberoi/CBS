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
	<td><a href="index.php">Logout</a></td>
	</tr>
	</table>
	</div>
		<!-- end #menu -->
</div>
	<!-- end #header2 -->

<!-- end #bg2 -->
<div id="bg3">

		<div id="bg5">
			<div id="page">
				<div id="content">
					<div class="post">
					<div id="format">
					<h1>Admin Console:</h1><br />
					<form action="" method="post">
					<table>
					<tr>
					<td><div id="headder">Group setting&nbsp;&nbsp;&nbsp;</div></td>
					<td><div id="headder">Rights&nbsp;&nbsp;&nbsp;</div></td>
					<td><div id="headder">Request Console&nbsp;&nbsp;&nbsp;</div></td>
					</tr>
					<tr>
					<td><a href="">Add Member</a></td>
					<td><a href="">Allow Rights</a></td>
					<td><a href="">New Request</a></td>
					</tr>
					<tr>
					<td><a href="">Remove Member</a></td>
					<td><a href="">Revoke Rights</a></td>
					<td><a href="">Previous History</a></td>
					</tr>
					</tr>
					<tr>
					<td><a href="">Update Member</a></td>
					<td></td>
					<td><a href="">Approvals</a></td>
					</tr>
					<tr>
					<td><a href="">Change Group Name</a></td>
					<td></td>
					<td></td>
					</tr>
					</table>
					
					</form>
					</div>
					</div>
				</div>
				<!-- end #content -->
				<div style="clear: both; height: 40px;">&nbsp;</div>
			</div>
			<!-- end #page -->
		</div>

</div>
<!-- end #bg3 -->
<div id="footer">
	<p>(c) 2013 CBS.com</p>
</div>
<!-- end #footer -->
</body>
</html>