<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title><?php 
		$pageURL = $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		$pgg = (explode("/",$pageURL));
		$pg = $pgg[2];
		echo ucwords("$pg");
	?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style_main.css" rel="stylesheet" type="text/css" />
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Myriad_Pro_300.font.js" type="text/javascript"></script>
<?php Session_start(); session_destroy(); ?>
</head>
<body id="page1">
<div class="tail-top">
  <div class="tail-bottom">
    <div class="body-bg1">
      <!-- HEADER -->
      <div id="header">
        <div class="extra"><img src="images/header-img.jpg" alt="" /></div>
        <div class="row-1">
          <div class="fleft"><h1><?php 
		$pageURL = $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		$pgg = (explode("/",$pageURL));
		$pg = $pgg[2];
		echo ucwords("$pg");
	?></h1></div>
          <div class="fright"><!-- Login -->
		  <form action="dashboard.php" method="post" id="form"><div id="login1">&nbsp; 
		  Login ID : <input type="text" name="uname" id="uname" class="text" /> 
		  Password : <input type="text" name="passs" id="passs" class="text" /> 
		  <input type="submit" value="GO" class="button" /> </div>
        </div></form></div>
        <div class="row-2">
          <ul>
            <li class="m1"><a href="index.html" class="active">Home</a></li>
            <li class="m3"><a href="#">Services</a></li>
            <li class="m4"><a href="#">Support</a></li>
            <li class="m5"><a href="#">contacts</a></li>
          </ul>
        </div>
        <div class="row-3">
          <h2>About US:</h2>
		  <p>
		  <?php ?>
		  </p>
        </div>
      </div>
      </div>
	  </div>
</div>

</body>

</html>
