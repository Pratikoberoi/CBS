<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
<title>CBS</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style_main.css" rel="stylesheet" type="text/css" />
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Myriad_Pro_300.font.js" type="text/javascript"></script>
</head>
<body>
<?php 
$con = mysqli_connect("10.8.82.253","10.8.82.253","savemegod","cbs");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

if(isset($_SESSION["un"])){ $login = $_SESSION["un"]; }
if(isset($_SESSION["pw"])){ $password  = $_SESSION["pw"]; }
//$login = $_SESSION["un"];
//$password = $_SESSION["pw"];


if (($login == "") || ($password == ""))
	{
	echo "<script>alert(\"Session Expired, Kindly login\");</script>";
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
<body id="page1">
<div class="tail-top">
  <div class="tail-bottom">
    <div class="body-bg1">
      <!-- HEADER -->
      <div id="header">
        <div class="row-1">
          <div class="fleft"><h1><a href="#">Complete Business Solution 1.0</a></h1></div>
          <div class="fright">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome &nbsp; | &nbsp; 
		  <?PHP $login = $_SESSION["un"];
		  echo "$login";
		  ?>
		  <!--- User Name --> &nbsp;| &nbsp; <a href="logout.php">Logout</a> </div></div>
        <div class="row-2">
          <ul>
            <li class="m1"><a href="home.php">Home</a></li>
            <li class="m2"><a href="agent.php">Agents</a></li>
            <li class="m3"><a href="modification.php">Modification</a></li>
            <li class="m4"><a href="rr.php">R & R</a></li>
            <li class="m5"><a href="#" class="active">Setting</a></li>
          </ul>
        </div>
        <!-- Main Content -->
		
		
      </div>
      </div>
	  </div>
</div>
<div id="footer">
        <div class="indent">
          <div class="fleft">Follow us on: <a href="https://www.facebook.com/login.php"><img src="images/fb.png" width="50px" alt="" /></a> <a href="https://twitter.com/login"><img src="images/tw.gif" width="50px" alt="" /></a> <a href="https://www.linkedin.com/secure/login?trk=hb_signin"><img src="images/in.png" width="50px" alt="" /></a></div>
          
        </div>
      </div>
</body>
</html> 