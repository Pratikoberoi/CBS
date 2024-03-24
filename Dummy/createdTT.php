<?PHP

session_start();
$con = mysqli_connect("10.8.82.253","10.8.82.253","savemegod","cbs");
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if ((isset($_SESSION['un']) == "") || (isset($_SESSION['pw']) ==""))
{
	$_SESSION['un'] = $_REQUEST['uid'];
	$_SESSION['pw']   = $_REQUEST['pass'];
}
$login = $_SESSION['un'];
$password = $_SESSION['pw'];

if (($login == "") || ($password == ""))
{
	echo "<script>alert(\"Session does not Exist or Expired...\");</script>";
	echo "<script>window.history.back()</script>";
}
else
{
	$pageURL = $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	$pgg = (explode("/",$pageURL));
	$pg = $pgg[2];
	$customertable = $pg.'_customer';
	$tickettable = $pg.'_ticket';
	$customerid = "";
	$customerid = mysqli_query($con,"select Customer_id from $customertable where login_id = '$login'");
	
	while($row = mysqli_fetch_array($customerid))
	{
		$result = $row['Customer_id'];
	}

if(isset($_REQUEST['tsubject'])){ $tsubject = $_REQUEST['tsubject'];}
if(isset($_REQUEST['tbody'])){ $tbody = $_REQUEST['tbody'];}
$timezone = date('Y-m-d H:i:s');
$query =  mysqli_query($con,"insert into $tickettable (summary_t, status_t, priority, Customer_id, subject_t, body_t, modified_date) value ('New', 'New', 'Normal', '$result', '$tsubject', '$tbody', NOW()) ");

if (!$query) {
printf("Error: %s\n", mysqli_error($con));
exit();}
if ($query === True)
{				
echo "<script>alert(\"Incident Created...\");</script>";
echo "<script>window.history.back()</script>";
}
else
{
echo "<script>alert(\"Unable to create Incedet Incident. Try again or contact Administrator...\");</script>";
echo "<script>window.history.back()</script>";
}

}
?>