<!DOCTYPE html>

<html>
<head>
<title>CBS | Agent | New</title>
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
        }
		
    </script>
	

</head>
<body id="page1">
<?php 
session_start();
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


if(isset($_REQUEST['loginid']))
{
	$agid = $_REQUEST['loginid'];
	if($agid != "")
	{
		$companyname = $_SESSION['un'];
		$con = mysqli_connect("10.8.82.253","10.8.82.253","savemegod","cbs");
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		$result = "";
		$agent = $companyname.'_agent';
		$aid = $_REQUEST['loginid'];
		$aname = $_REQUEST['name'];
		$ano = $_REQUEST['mobileno'];
		$arole = $_REQUEST['role'];
		$aright = $_REQUEST['right'];
		$azone = $_REQUEST['zone'];
		$astate = $_REQUEST['state'];
		$asite = $_REQUEST['site'];
		$aemail = $_REQUEST['email'];
		$acountry = $_REQUEST['country'];
		$agroup = $_REQUEST['group'];
		$result = mysqli_query($con,"INSERT INTO $agent VALUES ('$aid', '$aname', '','','$aemail', '$acountry', '$agroup', '$arole', '$aright', '$azone', '$ano',   '$astate', '$asite');");
			
		$agentcol = $companyname.'_agentcol';;
		$result = mysqli_query($con,"SELECT * FROM $agentcol");
		$a = "0";
		if($result == true)
		{
echo "done";
			while($row = mysqli_fetch_array($result))
			{
				$array = "";
				$array = $row['coll'];
				$coool = $_REQUEST[$array];
				$update = mysqli_query($con,"UPDATE temp1 SET $array = '$coool' WHERE agent_id = '$aid' ");
			}
		}
	}

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
		<div id="header1">
		<div id="searchurl1">
		
		<div id="signup1">
            <!--Agent  --><br /><h2>&nbsp;Agents :&nbsp;|<a href="agent.php">Search</a>&nbsp;|&nbsp;New&nbsp;|&nbsp;<a href="agentupdate.php">Update</a>&nbsp;|</h2><br /><br />
			
			
			
			<form action="" method="post">
			login ID &nbsp; : <input type="text" name="loginid" class="text" value="" />
			<br /> <br />
			Name &nbsp; : <input type="text" name="name" class="text" id="q2" value="" /> &nbsp;&nbsp;
			Mobile No. &nbsp; : <input type="text" name="mobileno" class="text" id="q3" value="" />&nbsp;&nbsp;
			Company Name &nbsp; : <input type="text" name="companyname" class="text" value="<?PHP 
			$login = $_SESSION["un"]; 
			echo "$login";
			?>" readonly  /><br /><br />
			Role &nbsp; : <select name="role" class="select1">
				<option value="" selected></option>
			</select>&nbsp;&nbsp;
			Right &nbsp; : <select name="right" class="select1">
				<option value="" selected></option>
			</select>	
			Group: <input type="text" name="group" class="text" id="q4" value="" />	<br/><br/>
			Zone &nbsp; : <input type="text" name="zone" class="text" id="q5" value="" />&nbsp;&nbsp;
			State &nbsp; : <input type="text" name="state" class="text" id="q6" value="" />&nbsp;&nbsp;
			Site &nbsp; : <input type="text" name="site" class="text" id="q7" value="" /><br/><br/>
			Country &nbsp; :     <select name="country" class="select">
    <option value=" " selected>(Select a Country)</option>
    <option value="Afghanistan">Afghanistan</option>
<option value="Åland Islands">Åland Islands</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antarctica">Antarctica</option>
<option value="Antigua and Barbuda">Antigua and Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Bouvet Island">Bouvet Island</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
<option value="Brunei Darussalam">Brunei Darussalam</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote D'ivoire">Cote D'ivoire</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Territories">French Southern Territories</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guernsey">Guernsey</option>
<option value="Guinea">Guinea</option>
<option value="Guinea-bissau">Guinea-bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Isle of Man">Isle of Man</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jersey">Jersey</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
<option value="Korea, Republic of">Korea, Republic of</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macao">Macao</option>
<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
<option value="Moldova, Republic of">Moldova, Republic of</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montenegro">Montenegro</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="Netherlands Antilles">Netherlands Antilles</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Northern Mariana Islands">Northern Mariana Islands</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Pitcairn">Pitcairn</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russian Federation">Russian Federation</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint Helena">Saint Helena</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
<option value="Saint Lucia">Saint Lucia</option>
<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome and Principe">Sao Tome and Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia">Serbia</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syrian Arab Republic">Syrian Arab Republic</option>
<option value="Taiwan, Province of China">Taiwan, Province of China</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
<option value="Thailand">Thailand</option>
<option value="Timor-leste">Timor-leste</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States">United States</option>
<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Venezuela">Venezuela</option>
<option value="Viet Nam">Viet Nam</option>
<option value="Virgin Islands, British">Virgin Islands, British</option>
<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
<option value="Wallis and Futuna">Wallis and Futuna</option>
<option value="Western Sahara">Western Sahara</option>
<option value="Yemen">Yemen</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
    </select>&nbsp;&nbsp;Email ID &nbsp; : <input type="text" name="email" class="text1" id="q8" value="" /><br/><br /> 
	
	
	
	
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
$rowcount = "1";
if($result == true)
{
	while($row = mysqli_fetch_array($result))
	{
		$array = $row['coll'];
		echo $array;
		echo " &nbsp;:&nbsp; ";
		echo "<input type='text' name='$array' class='text' id='q8' value=''>";
		if ($rowcount == 3)
		{
			echo "<br /><br />";
			$rowcount = "0";
		}
		$rowcount = $rowcount + 1;
		echo " &nbsp;&nbsp; ";
	}
	echo "<br /><br />";
}

?>
	
	
	
	<input type="submit" name="add" value="ADD" class="button" /> &nbsp; &nbsp; &nbsp; 
	<input type="button" value="Clear" class="button" onclick="ClearTextboxes();" /> <br /><br />
          </div>
		  </form>
		
		</div>
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