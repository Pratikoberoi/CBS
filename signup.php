<!DOCTYPE html>
<html>
<body>
<?php 
$companyname = "";
$password1 = "";
$password2 = "";
$emailid = "";
$ownername = "";
$country = "";
$companyname = $_REQUEST['companyname'];
$password1 = $_REQUEST['password1'];
$password2 = $_REQUEST['password2'];
$emailid = $_REQUEST['emailid'];
$ownername = $_REQUEST['ownername'];
$country = $_REQUEST['country'];

if (($companyname == "") || ($password1 == "") || ($password2 == "") || ($emailid == "") || ($ownername == "") || ($country == ""))
  {
  echo "<script>alert(\"Fields cannot be left blank\");</script>";
  
  }
 else
  {
	if( $password1 != $password2)
	{
		echo "<script>alert(\"Password Should Match.\");</script>";

	}
	else
	{
		$con = mysqli_connect("10.8.82.253","10.8.82.253","savemegod","cbs");
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		$insertcompany = mysqli_query($con,"INSERT INTO company (company_name, password, email_id, owner_name, country) VALUES ('$companyname', '$password1', '$emailid', '$ownername', '$country')");
		if ( $insertcompany === false )
		{
			echo "<script>alert(\"User Name already exist\");</script> ";
		}
		
		else
		{
		$customer = $companyname.'_customer';
		$createtablecustomer = mysqli_query($con,"CREATE TABLE $customer(customer_id INT NOT NULL AUTO_INCREMENT, company_id INT, status_c CHAR(30), first_name CHAR(30), last_name CHAR(30), middle_name CHAR(30), organization CHAR(30), email_id CHAR(50), support_company CHAR(30), support_group CHAR(30), department CHAR(50), region CHAR(50), site CHAR(50), manager_id INT, login_id CHAR(30), password CHAR(30), state CHAR(50), country CHAR(50), mobile_no BIGINT, corporate_id CHAR(50), hod_id INT, PRIMARY KEY (customer_id), UNIQUE (login_id))");
		
		
		
		$agent = $companyname.'_agent';
		$createtableagent = mysqli_query($con,"CREATE TABLE $agent(agent_id INT NOT NULL AUTO_INCREMENT, user_id CHAR(50) , first_name CHAR(50), middle_name CHAR(50), last_name CHAR(50), dob CHAR(50), sex CHAR(10), status CHAR(50), location CHAR(50), address CHAR(50), group_a CHAR(50), deparment CHAR(50), manager_id INT, hod_id INT, description CHAR(50), image CHAR(50) DEFAULT 'header-img1.jpg', company_id INT NOT NULL, password CHAR(50) NOT NULL, email_id CHAR(50) NOT NULL, country CHAR(10), support_company CHAR(30), support_group CHAR(50), role CHAR(50) DEFAULT 'Eng', right_a CHAR(50) DEFAULT 'none', zone CHAR(50), phone_no BIGINT, state CHAR(50), site CHAR(50), PRIMARY KEY (agent_id), UNIQUE (user_id))");
		
		$ticket = $companyname.'_ticket';
		$createtableticket = mysqli_query($con,"CREATE TABLE $ticket(incident_id INT NOT NULL AUTO_INCREMENT,subject_t CHAR(50), body_t CHAR(50), summary_t CHAR(50),status_t CHAR(10), status_reason CHAR(30), priority CHAR(10), Customer_id CHAR(10), Person_assigned CHAR(30), notes VARCHAR(1000), relation_type CHAR(10), relation_incident INT, relation_summaary CHAR(70), assigned_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,modified_date DATETIME,resolution_date DATETIME, resolution_type CHAR(30), resolution_summary CHAR(70), cost_of_support INT, support_type CHAR(30), problem_type CHAR(30), level_1 CHAR(30),  level_2 CHAR(30), cost_problem INT, asset_used CHAR(5), asset_id INT,  asset_description CHAR(30), asset_cost INT, Distance_bl CHAR(30),  distance_description CHAR(30), time_min INT, travel_cost INT, PRIMARY KEY (incident_id))");
		
		$asset = $companyname.'_asset';
		$createtableasset = mysqli_query($con,"CREATE TABLE $asset(asset_id INT NOT NULL AUTO_INCREMENT, c_id CHAR(30), c_name CHAR(30), status CHAR(30), level_1 CHAR(30), level_2 CHAR(30), cost INT, used_by CHAR(30), supported_by CHAR(30), managed_by CHAR(30), owned_by CHAR(30), company_name CHAR(30), organization CHAR(30), region CHAR(30), cluster CHAR(30), site CHAR(30), serial_no CHAR(30), supplier_name CHAR(30), host_name CHAR(30), description CHAR(100), PRIMARY KEY (asset_id), UNIQUE (c_id))");
		
		$relate = $companyname.'_relate';
		$createtablerelate = mysqli_query($con,"CREATE TABLE $relate(incedent_id INT, asset_id INT, customer_id INT)");
		
		$role = $companyname.'_role';
		$createtablerole = mysqli_query($con,"CREATE TABLE $role(role_id INT NOT NULL AUTO_INCREMENT, role_name CHAR(30), role_value CHAR(30), PRIMARY KEY (role_id))");
		
		$right = $companyname.'_right';
		$createtableright = mysqli_query($con,"CREATE TABLE $right(right_id INT NOT NULL AUTO_INCREMENT, right_name CHAR(30), right_value CHAR(30), PRIMARY KEY (right_id))");
		
		if (!$createtableticket) {
				printf("Error: %s\n", mysqli_error($con));
				exit();}
		
		
		if (($createtablecustomer === True) && ($createtableagent === True) && ($createtableticket === True) && ($createtableasset === True) && ($createtablerole === True) && ($createtableright === True) && ($createtablerelate === True))
		{
			echo "<script>alert(\"Registration Succesfull, Kindly Login\");</script>";
			echo "<script>window.history.back()</script>";
		}
		else
		{
		
			echo "<script>alert(\"Unable to Register \");</script> ";
			mysqli_query($con,"DELETE FROM company WHERE company_name = '$companyname'");
			mysqli_query($con,"DROP TABLE $customer");
			mysqli_query($con,"DROP TABLE $agent");
			mysqli_query($con,"DROP TABLE $ticket");
			mysqli_query($con,"DROP TABLE $asset");
			mysqli_query($con,"DROP TABLE $right");
			mysqli_query($con,"DROP TABLE $role");
			mysqli_query($con,"DROP TABLE $relate");
			echo "<script>window.history.back()</script>";
		}
		////write the copy and create new folder command after the completion of the initial project
		// mkdir($companyname)
		// $comm = $companyname.'/main.php';
		// copy('main.php', $comm);
		
		mysqli_close($con);
		
		}
	}
  }
echo "<script>window.history.back()</script>";

?>
</body>
</html> 