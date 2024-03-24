<?php
$con = mysqli_connect("10.8.82.253","10.8.82.253","savemegod","cbs");
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$result = mysqli_query($con,"INSERT INTO zefer_agent VALUES ('$aid', );");


?>