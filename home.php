<!DOCTYPE html>

<html>
<head>
<title>CBS</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style_main.css" rel="stylesheet" type="text/css" />
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Myriad_Pro_300.font.js" type="text/javascript"></script>

</head>
<body id="page1">
<?php 
session_start();
// $con = mysqli_connect("10.8.82.253","10.8.82.253","savemegod","cbs");
	// if (mysqli_connect_errno())
	// {
		// echo "Failed to connect to MySQL: " . mysqli_connect_error();
	// }
	
include('config.php');
	
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

<div class="tail-top">
  <div class="tail-bottom">
    <div class="body-bg1">
      <!-- HEADER -->
      <div id="header">
	  <div class="extra1"><img src="images/chess.png" alt="" /></div>
        <div class="row-1">
          <div class="fleft"><h1><a href="#">Complete Business Solution</a></h1></div>
          <div class="fright">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome &nbsp; | &nbsp; 
		  <?PHP $login = $_SESSION["un"]; 
		  echo "$login";
		  ?>
		  <!--- User Name --> &nbsp;| &nbsp; <a href="logout.php">Logout</a> </div></div>
        <div class="row-2">
          <ul>
            <li class="m1"><a href="#" class="active">Home</a></li>
            <li class="m2"><a href="agent.php">Agents</a></li>
            <li class="m3"><a href="modification.php">Modification</a></li>
            <li class="m4"><a href="rr.php">R & R</a></li>
            <li class="m5"><a href="setting.php">Setting</a></li>
          </ul>
        </div>
        <!-- Main Content -->
		<div id="searchurl">
		<p><h2>   URL :-</h2> </p>
		<form action="subdomain.php" method="post"> 
		<input type="text" class="text" name="createurl"> 
		<input type="text" class="text1" value="cbs.com"readonly> 
		<input type="submit" value="Create" class="button" />
		</form>
		<p>(*The url is a sub domain for your users and agents)</p>
		<form action="importagent.php" method="post"> 
		<p>Upload customer bulk data : 
		<input type="file" name="csv" class="file" id="file">
		<input type="submit" value="Upload" class="button" />
		
		<a href="exportcustomer.php">(*Download present Customer Data)</a>
		</p></form>
		<p>Upload Agent bulk data : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="file" name="file" class="file" id="file">
		<input type="submit" value="Upload" class="button" />
		<a href="exportagent.php">(*Download present Agent Data)</a>
		</p>
		<p>(*The coloumn name should be similar to the present Data sheet for upload and it should be in .CVS format)</p>
		<p>(*If Modification in coloumns is required, Kindly change it first in the modification tab.)</p>
		</div>
		</div>
		
      </div>
      </div>
	  </div>
</div>
<div id="footer">
    <div class="indent">
        <div class="fleft">
		<img src="images/joinus.png" width="100px" alt="" /> 
		<a href="https://www.facebook.com/login.php"> <img src="images/fb.png" width="50px" alt="" /></a> 
		<a href="https://twitter.com/login"><img src="images/tw.gif" width="50px" alt="" /></a>
		<a href="https://www.linkedin.com/secure/login?trk=hb_signin"><img src="images/in.png" width="50px" alt="" /></a>
		  </div>
          
        </div>
      </div>
</body>
</html> 