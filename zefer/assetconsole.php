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

<script>
function openpage(){
var theWin ="'toolbar=0,location=0,directories=0,status=1,menubar=0,scrollbars=0,resizable=0'"
littleWin = window.open("relation.php",'opened',theWin);
window.moveTo(0,0);
k = (screen.availWidth/screen.availHeight)<1 ? 1 : 0.5;
if (document.all) {
littleWin.resizeTo(screen.availWidth*k,screen.availHeight);
} else {
littleWin.outerWidth = screen.availWidth*k;
littleWin.outerHeight = screen.availHeight;
}
littleWin.focus();
}
</script>

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
	<div id="bg4">
		<div id="bg5">
			<div id="page">
				<div id="content">
					<div class="post">
					
					
					
					
					<div id="format">
					<h1>Asset:</h1><br />
					<form action="" method="post">
					<table>
					<tr>
					<td>Asset ID :</td> 
					<td> <input type="text" class="text" /></td>
					<td><input type="button" value="Search" class="button" /></td>
					<td><input type="button" value="Relation" class="button" onclick='openpage()'/>
					</td>
					</tr>
					</table><br />
					<hr />
					<table>
					<tr>
					<td>CID : </td>
					<td><input type="text" class="text" /></td>
					<td>C Name : </td>
					<td><input type="text" class="text" /></td>
					<td>Status : </td>
					<td><select>
						<option value="Ordered">Ordered</option>
						<option value="Received">Received</option>
						<option value="Being Assembled">Being Assembled</option>
						<option value="Deployed">Deployed</option>
						<option value="In Repair">In Repair</option>
						<option value="Down">Down</option>
						<option value="End of Life">End of Life</option>
						<option value="Transferred">Transferred</option>
						<option value="Delete">Delete</option>
						<option value="On Loan">On Loan</option>
						<option value="Disposed">Disposed</option>
						<option value="Reserved">Reserved</option>
					</select></td>
					</tr>
					<tr>
					<td>Level 1 : </td>
					<td><select>
						<option value="SYSTEM">SYSTEM</option>
						<option value="NETWORK ELEMENT">NETWORK ELEMENT</option>
						<option value="SYSTEM COMPONENT">SYSTEM COMPONENT</option>
						<option value="VC">VC</option>
						<option value="EQUIPMENT">EQUIPMENT</option>
						<option value="Other">Other</option>
					</select></td>
					<td>Level 2 : </td>
					<td><select>
						<option value="DESKTOP PC">DESKTOP PC</option>
						<option value="LAPTOP">LAPTOP</option>
						<option value="SERVER">SERVER</option>
						<option value="PRINTER">PRINTER</option>
						<option value="MODEM">MODEM</option>
						<option value="NETWORK ELEMENT">NETWORK ELEMENT</option>
						<option value="ROUTER">ROUTER</option>
						<option value="SWITCH">SWITCH</option>
						<option value="CARD">CARD</option>
						<option value="MEMORY">MEMORY</option>
						<option value="MONITOR">MONITOR</option>
						<option value="UPS">UPS</option>
						<option value="MEDIA">MEDIA</option>
						<option value="VIDEO CONFERENCING">VIDEO CONFERENCING</option>
						<option value="PROJECTOR">PROJECTOR</option>
						<option value="SCANNER">SCANNER</option>
						<option value="Other">Other</option>
					</select></td>
					<td>Cost: </td>
					<td><input type="text" class="text" /></td>
					</tr>
					<tr>

					<td>Used By: </td>
					<td><input type="text" class="text" /></td>
					<td>Supported By: </td>
					<td><input type="text" class="text" /></td>
					<td>Managed By: </td>
					<td><input type="text" class="text" /></td>
					</tr>
					<tr>
					<td>Owned By: </td>
					<td><input type="text" class="text" /></td>
					<td>Supplier Name:  </td>
					<td><input type="text" class="text" /></td>
					<td>Host Name:  </td>
					<td><input type="text" class="text" /></td>
					</tr>
					<tr>
					<td>Company Name: </td>
					<td><input type="text" class="text" /></td>
					<td>Orginization: </td>
					<td><input type="text" class="text" /></td>
					<td>Region : </td>
					<td><input type="text" class="text" /></td>
					</tr>
					<tr>
					<td>Cluster : </td>
					<td><input type="text" class="text" /></td>
					<td>Site : </td>
					<td><input type="text" class="text" /></td>
					<td>Serial No: </td>
					<td><input type="text" class="text" /></td>
					</tr>
					<tr>
					
					<td>Description: </td>
					<td rowspan="2" colspan="3"><textarea rows="4"></textarea></td>
					</tr>
					
					</table>
					<br />
					<input type="button" value="New" class="button1" />
					<input type="button" value="Save" class="button1" />
					<input type="button" value="Modify" class="button1" />
					<input type="button" value="Delete" class="button1" />
					
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
</div>
<!-- end #bg3 -->
<div id="footer">
	<p>(c) 2013 CBS.com</p>
</div>
<!-- end #footer -->
</body>
</html>