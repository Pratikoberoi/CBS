<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body><div id="format">
<h1>Change customer ID:</h1><br />
<form action="autoassign.php" method="post">
<table>
<tr>
<td>Ticket ID: </td><td>
<?php session_start();
if(isset($_SESSION['incedentid'])){ $ticketid = $_SESSION['incedentid']; }
if(isset($_SESSION['comname'])){ $comname = $_SESSION['comname']; }
echo "<input name='ticketid' type='text' class='text' value = '$ticketid' readonly />";
 ?>
</td>
</tr>
<tr>
</tr>
<tr>
<td>Previous Customer ID: </td><td>
<?php 
if(isset($_SESSION['customerid'])){ $customerid = $_SESSION['customerid']; }
echo "<input name='pcustomerid' type='text' class='text' value = '$customerid' readonly />"; ?>
</td>
</tr>
<tr>
</tr>
<tr>
<td>Customer ID:</td><td> <input name="ncustomerid" type="text" class="text" /></td>
</tr>
<tr>
</tr>
<tr>
<td>First Name:</td><td> <input name="fname" type="text" class="text" /></td>
</tr>
<tr>
</tr>
<tr>
<td>Last Name:</td><td> <input name="lname" type="text" class="text" /></td>
</tr>
<tr>
</tr>
<tr>
<td></td><td><input type="submit" value="Assign" class="button" /></td>
</tr>
</table>
</form>
</body>
</html>