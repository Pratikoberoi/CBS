<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
<title>CBS | Agent</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style_main.css" rel="stylesheet" type="text/css" />
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Myriad_Pro_300.font.js" type="text/javascript"></script>
<script type="text/javascript" language="javascript">
function ClearTextboxes()
{
	document.getElementById("q2").value = ""; 
	document.getElementById("q3").value = ""; 
	document.getElementById("q4").value = ""; 
	document.getElementById("q5").value = ""; 
	document.getElementById("q6").value = ""; 
	document.getElementById("q7").value = ""; 
	document.getElementById("q8").value = ""; 
	document.getElementById("q9").value = ""; 
	document.getElementById("q10").value = "";
	document.getElementById("q11").value = ""; 			
}
		
</script>
	
	
<?php



function searchh()
{

if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if(isset($_REQUEST['loginid']))
{
	$agid = $_REQUEST['loginid'];
	if($agid != "")
	{
		$companyname = $_SESSION['un'];
		$con = mysqli_connect("10.8.82.253","10.8.82.253","savemegod","cbs");

		$result = "";
		$agent = $companyname.'_agent';
		$result = mysqli_query($con,"SELECT agent_id,agent_name, phone_no, role_c, right_c, zone_c, state, site, email_id, country, group_c FROM $agent WHERE agent_id = $agid; ");
		if($result == true)
		{
			while($row = mysqli_fetch_array($result))
			{
				$_SESSION['lid'] = $row['agent_id'];
				$_SESSION['lname'] = $row['agent_name'];
				$_SESSION['mno'] = $row['phone_no'];
				$_SESSION['role'] = $row['role_c'];
				$_SESSION['right'] = $row['right_c'];
				$_SESSION['zone'] = $row['zone_c'];
				$_SESSION['state'] = $row['state'];
				$_SESSION['site'] = $row['site'];
				$_SESSION['email'] = $row['email_id'];
				$_SESSION['country'] = $row['country'];
				$_SESSION['group'] = $row['group_c'];
			}
		}
		else
		{
		}
		
	}
}

}



?>	

</head>
<body id="page1">
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





?>

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
            <li class="m2"><a href="#" class="active">Agents</a></li>
            <li class="m3"><a href="modification.php">Modification</a></li>
            <li class="m4"><a href="rr.php">R & R</a></li>
            <li class="m5"><a href="setting.php">Setting</a></li>
          </ul>
        </div>
        <!-- Main Content -->
		<div id="searchurl1">
		
		<div id="signup1">
            <!--Agent  --><br /><h2>&nbsp;Agents :&nbsp;|&nbsp;<a href="agent.php">Search</a>&nbsp;|&nbsp;<a href="agentnew.php">New </a>&nbsp;|&nbsp;Update&nbsp;|</h2><br /><br />
			
			

			<form action="" method="post">
			login ID &nbsp; : <input type="text" name="loginid" class="text" value="<?php 
			if(isset($_SESSION['lid'])) 
			{
			echo $_SESSION['lid'];
			} 
			?>" />
			<input type="submit" name="search" value="Search" class="button" onclick="<?php searchh(); ?>"/><br/><br/>
			</form>
			<form action="update.php" method="post">
			Name &nbsp; : <input type="text" name="name" class="text" id="q2" value="<?php if(isset($_SESSION['lname']))
			{ echo $_SESSION['lname'];} ?>"  /> &nbsp;&nbsp;
			Mobile No. &nbsp; : <input type="text" name="mobileno" class="text" id="q3" value="<?php if(isset($_SESSION['mno']))
			{ 
			echo $_SESSION['mno'];
			} 
			?>"  />&nbsp;&nbsp;
			Company Name &nbsp; : <input type="text" name="companyname" class="text" value="<?PHP 
			$login = $_SESSION["un"]; 
			echo "$login";
			?>"  Readonly /><br /><br />
			
			Role &nbsp; : <input type="text" name="role" class="text" id="q4" value="<?php if(isset($_SESSION['role']))
			{ 
			echo $_SESSION['role'];
			} 
			?>"  />&nbsp;&nbsp;
			Right &nbsp; : <input type="text" name="right" class="text" id="q5" value="<?php if(isset($_SESSION['right']))
			{ 
			echo $_SESSION['right'];
			} 
			?>"  />	
			Group: <input type="text" name="group" class="text" id="q6" value="<?php 
			if(isset($_SESSION['group']))
			{ 
				echo $_SESSION['group'];
			} 
			?>"  />	<br/><br/>
			
			Zone &nbsp; : <input type="text" name="zone" class="text" id="q7" value="<?php 
			if(isset($_SESSION['zone']))
			{ 
				echo $_SESSION['zone'];
			} 
			?>"  />&nbsp;&nbsp;
			State &nbsp; : <input type="text" name="state" class="text" id="q8" value="<?php 
			if(isset($_SESSION['state']))
			{
				echo $_SESSION['state'];
			} 
			?>"  />&nbsp;&nbsp;
			Site &nbsp; : <input type="text" name="site" class="text" id="q9" value="<?php 
			if(isset($_SESSION['site']))
			{ 
				echo $_SESSION['site'];
			} 
			?>"  /><br/><br/>
			Country &nbsp; :     <input type="text" name="country" class="text" id="q10" value="<?php 
			if(isset($_SESSION['country']))
			{ 
				echo $_SESSION['country'];
			} 
			?>"  />
			&nbsp;&nbsp;Email ID &nbsp; : <input type="text" name="emailid" class="text1" id="q11" value="<?php 
	if(isset($_SESSION['email']))
	{ 
		echo $_SESSION['email'];
	} 
	?>"  /><br/><br /> 
	
	
	
	<?php
$con = mysqli_connect("10.8.82.253","10.8.82.253","savemegod","cbs");
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$companyname = $_SESSION['un'];
$agentcol = $companyname.'_agentcol';
$result = mysqli_query($con,"SELECT * FROM $agentcol");
$a = "0";
if($result == true)
{
	while($row = mysqli_fetch_array($result))
	{
		$array = $row['coll'];
		echo $array;
		echo "  ";
		if(isset($_REQUEST['loginid']))
		{
		$seacrhout = mysqli_query($con,"SELECT $array FROM $agent WHERE agent_id = $agid; ");
		if($seacrhout == true)
		{
			while($row = mysqli_fetch_array($seacrhout))
			{
				$outt = $row[$agent];
			}
		}
		}
		echo "<input type='text' name='$array' value='$outt'>";
		echo "<br />";
	}
}

?>
	
	
	<input type="submit" name="add" value="Update" class="button" /> &nbsp; &nbsp; &nbsp; 
	<input type="button" value="Clear" class="button" onclick="ClearTextboxes();" /> 
          </div>
		  </form>
		
		</div>
		
      </div>
      </div>
	  </div>
</div>
<div id="footer">
        <div class="indent">
          <div class="fleft"><img src="images/joinus.png" width="100px" alt="" /> <a href="https://www.facebook.com/login.php"><img src="images/fb.png" width="50px" alt="" /></a> <a href="https://twitter.com/login"><img src="images/tw.gif" width="50px" alt="" /></a> <a href="https://www.linkedin.com/secure/login?trk=hb_signin"><img src="images/in.png" width="50px" alt="" /></a></div>
          
        </div>
      </div>
</body>
</html> 