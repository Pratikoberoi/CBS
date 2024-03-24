
<html>
<body>
<?php
$uname1 = "";
$uemail1 = "";
$uwebsite1 = "";
$umsg1 = "";

$uname1 = $_REQUEST['uname'];
$uemail1 = $_REQUEST['uemail'];
$uwebsite1 = $_REQUEST['uwebsite'];
$umsg1 = $_REQUEST['umsg'];
echo $uname1;
echo $uemail1;
echo $uwebsite1;
echo $umsg1;

$con = mysqli_connect("10.8.82.253","10.8.82.253","savemegod","cbs");


		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		else
		{
			echo "connected";
		}
		
		
$updatefeedback = mysqli_query($con,"INSERT INTO feedback (`u_name`, `u_email`, `u_website`, `u_msg`) VALUES ('$uname1', '$uemail1', '$uwebsite1', '$umsg1')");


?>
</body>
</html>