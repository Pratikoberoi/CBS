
<?php 
session_start();
$login = $_SESSION['un'];

$connect = mysqli_connect("10.8.82.253","10.8.82.253","savemegod","cbs");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
$customer = $login.'_customer';


	define('CSV_PATH','D:/');
	$csv_file = CSV_PATH . "customer.csv";
	$csvfile = fopen($csv_file, 'r');
	$theData = fgets($csvfile);
    $i = 0;
	while (!feof($csvfile)) {
	$csv_data[] = fgets($csvfile, 1024);
	$csv_array = explode(",", $csv_data[$i]);
	$insert_csv = array();
	$insert_csv['ID'] = $csv_array[0];
	$insert_csv['name'] = $csv_array[1];
	$insert_csv['email'] = $csv_array[2];
	$query = "INSERT INTO csvdata(ID,name,email)
	VALUES('','".$insert_csv['name']."','".$insert_csv['email']."')";
	$n=mysql_query($query, $connect );
	$i++;
	}
	fclose($csvfile);
	 
	echo "File data successfully imported to database!!";

	
	
// $customer = $login.'_customer';
// $query = mysqli_query($con,"LOAD DATA INFILE '$filelocation' INTO TABLE '$customer' FIELDS TERMINATED BY ';' ENCLOSED BY '"' LINES TERMINATED BY '\n\r'");
// if ($query === True)
// {
	// echo "<script>alert(\"Registration Succesfull, Kindly Login\");</script>";
// }
// else
// {
	// echo "<script>alert(\"Registration UnSuccesfull, Kindly Login\");</script>";
// }


?>