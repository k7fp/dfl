<?
require( 'config.php' );
session_start();
switch (isset($_SESSION[username])) {
     case TRUE:
$_SESSION['username'] = $_SESSION[username];
$username = $_SESSION['username'];
           break;
     case FALSE:
header("Location: index.php"); 
           break;
}
if ($_GET["task"] == "logout")
{
session_unset();
session_destroy();
header("Location: index.php"); 
exit();
	}
?>
<html>
<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<link href="style.css" rel="stylesheet" type="text/css">
<script src="javascript.js" language="Javascript"></script>
<title>Delta Force League</title>
</head>
<body bgcolor="#202020" leftmargin="0" topmargin="0" text="#EEC6A2" link="#C67B41" vlink="#C67B41" alink="#C67B41">
<?
	if ($_SERVER['REQUEST_METHOD'] == "POST") {

        $password = addslashes($_POST["password"]);
if (empty($password)) {
echo "<BODY onLoad=\"javascript: alert('You must have a password!')\">
<SCRIPT LANGUAGE=\"JavaScript\">
 function redirect()
 { 
  window.location = \"editprofile.php\"
 }
 setTimeout(\"redirect();\", 0)
</SCRIPT>";
die;
}
		$dfname = addslashes($_POST["dfname"]);
if (empty($dfname)) {
echo "<BODY onLoad=\"javascript: alert('You must have a Delta Force name!')\">
<SCRIPT LANGUAGE=\"JavaScript\">
 function redirect()
 { 
  window.location = \"editprofile.php\"
 }
 setTimeout(\"redirect();\", 0)
</SCRIPT>";
die;
}
		$email = addslashes($_POST["email"]);
if (empty($email)) {
echo "<BODY onLoad=\"javascript: alert('You must have a Email!')\">
<SCRIPT LANGUAGE=\"JavaScript\">
 function redirect()
 { 
  window.location = \"editprofile.php\"
 }
 setTimeout(\"redirect();\", 0)
</SCRIPT>";
die;
}
        $icq = addslashes($_POST["icq"]);
		$aim = addslashes($_POST["aim"]);
		$msn = addslashes($_POST["msn"]);
		$city = addslashes($_POST["city"]);
		$state = addslashes($_POST["state"]);
		$country = addslashes($_POST["country"]);
		$sql  = " UPDATE user SET";
		$sql .= "   password = '$password', ";
		$sql .= "   dfname = '$dfname', ";
		$sql .= "   email = '$email', ";
		$sql .= "   icq = '$icq', ";
		$sql .= "   aim = '$aim', ";
		$sql .= "   msn = '$msn', ";
		$sql .= "   city = '$city', ";
		$sql .= "   state = '$state', ";
		$sql .= "   country = '$country' ";
		$sql .= " WHERE username='".$username."' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
echo"<BODY onLoad=\"javascript: alert('Profile Updated!')\">
<SCRIPT LANGUAGE=\"JavaScript\">
 function redirect()
 { 
  window.location = \"index.php\"
 }
 setTimeout(\"redirect();\", 0)
</SCRIPT>
";
	} else {
		$sql  = " SELECT * FROM user ";
		$sql .= " WHERE username='".$username."' ";
		$rs = mysql_query($sql,$cid);
		$row = mysql_fetch_assoc($rs);
		$password = $row["password"];
		$dfname = $row["dfname"];
		$realname = $row["realname"];
		$email = $row["email"];
		$icq = $row["icq"];
		$aim = $row["aim"];
		$msn = $row["msn"];
		$byear = $row["byear"];
		$bmonth = $row["bmonth"];
		$bday = $row["bday"];
		$city = $row["city"];
		$state = $row["state"];
		$country = $row["country"];
?>
<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="1" width="800" bgcolor="#171717">
    <tr>
      <td width="100%" bgcolor="#202020" colspan="4">
        <p align="center"><font face="Verdana" size="2"><img border="0" src="images/banner.jpg" width="800" height="95"></font></td>
    </tr>
    <tr>
      <td width="100%" bgcolor="#1B1B1B" colspan="4"><? include "toplinks.php"; ?></td>
    </tr>
    <tr>
      <td width="20%" bgcolor="#363F5A">
        <p style="margin-left: 10" align="center"><font face="Verdana" size="2"><b>NAVIGATION</b></font></td>
      <td width="20%" bgcolor="#363F5A">
        <p style="margin-left: 10"><b><font face="Verdana" size="2" color="#FFFFFF">EDIT PROFILE</font></b></td>
      <td width="40%" bgcolor="#363F5A">
        <p style="margin-left: 10" align="center"><b><font face="Verdana" size="2"><? print date ("l F d Y, H:i:s"); ?></font></b></td>
      <td width="20%" bgcolor="#363F5A">
        <p style="margin-left: 10" align="center"><font face="Verdana" size="2"><b>LOGIN</b></font></td>
    </tr>
    <tr>
	<center>
      <td width="20%" bgcolor="#141721" valign="top">
          <table border="0" cellpadding="0" cellspacing="1" width="100%"><? include "navigation.php"; ?></table>
		</center>
      </td>
      <td width="60%" bgcolor="#202020" colspan="2" valign="top">
        <p align="center"><font face="Verdana" size="1">&nbsp;</font>
<form name="dfl" action="editprofile.php" method="POST">
  <table border="0" cellpadding="0" cellspacing="1" width="95%">
    <tr>
      <td width="150" height="30" bgcolor="#0E1016" align="left">
        <p style="margin-left: 10"><b><font face="Verdana" size="2">Username</font></b></td>
      <td width="350" height="30" bgcolor="#0E1016" align="left">
        <p style="margin-left: 10"><font face="Verdana" size="1"><? print"$username" ?></font></td>
    </tr>
    <tr>
      <td width="150" height="30" bgcolor="#141721" align="left">
        <p style="margin-left: 10"><b><font face="Verdana" size="2">Password</font></b></td>
      <td width="350" height="30" bgcolor="#141721" align="left">
        <p style="margin-left: 10"><input type="password" name="password" size="45" style="font-family: Verdana; font-size: 8pt; font-weight: bold; background-color: #000000; color: #C0C0C0; border-style: solid; border-color: #141721" value="<? print "$password"; ?>"></td>
    </tr>
    <tr>
      <td width="150" height="30" bgcolor="#141721" align="left">
        <p style="margin-left: 10"><b><font face="Verdana" size="2">Gaming
        Name</font></b></td>
      <td width="350" height="30" bgcolor="#141721" align="left">
        <p style="margin-left: 10"><input type="text" name="dfname" size="45" style="font-family: Verdana; font-size: 8pt; font-weight: bold; background-color: #000000; color: #C0C0C0; border-style: solid; border-color: #141721" value="<? print "$dfname"; ?>"></td>
    </tr>
    <tr>
      <td width="150" height="30" bgcolor="#141721" align="left">
        <p style="margin-left: 10"><b><font face="Verdana" size="2">Real Name</font></b></td>
      <td width="350" height="30" bgcolor="#141721" align="left">
        <p style="margin-left: 10"><font face="Verdana" size="1"><? print"$realname" ?></font></td>
    </tr>
    <tr>
      <td width="150" height="30" bgcolor="#141721" align="left">
        <p style="margin-left: 10"><b><font face="Verdana" size="2">Email
        Address</font></b></td>
      <td width="350" height="30" bgcolor="#141721" align="left">
        <p style="margin-left: 10"><input type="text" name="email" size="45" style="font-family: Verdana; font-size: 8pt; font-weight: bold; background-color: #000000; color: #C0C0C0; border-style: solid; border-color: #141721" value="<? print "$email"; ?>"></td>
    </tr>
    <tr>
      <td width="150" height="30" bgcolor="#141721" align="left">
        <p style="margin-left: 10"><b><font face="Verdana" size="2">ICQ Number</font></b></td>
      <td width="350" height="30" bgcolor="#141721" align="left">
        <p style="margin-left: 10"><input type="text" name="icq" size="15" style="font-family: Verdana; font-size: 8pt; font-weight: bold; background-color: #000000; color: #C0C0C0; border-style: solid; border-color: #141721" value="<? print "$icq"; ?>"></td>
    </tr>
    <tr>
      <td width="150" height="30" bgcolor="#141721" align="left">
        <p style="margin-left: 10"><b><font face="Verdana" size="2">AIM Screen
        Name</font></b></td>
      <td width="350" height="30" bgcolor="#141721" align="left">
        <p style="margin-left: 10"><input type="text" name="aim" size="45" style="font-family: Verdana; font-size: 8pt; font-weight: bold; background-color: #000000; color: #C0C0C0; border-style: solid; border-color: #141721" value="<? print "$aim"; ?>"></td>
    </tr>
    <tr>
      <td width="150" height="30" bgcolor="#141721" align="left">
        <p style="margin-left: 10"><b><font face="Verdana" size="2">MSN Email</font></b></td>
      <td width="350" height="30" bgcolor="#141721" align="left">
        <p style="margin-left: 10"><input type="text" name="msn" size="45" style="font-family: Verdana; font-size: 8pt; font-weight: bold; background-color: #000000; color: #C0C0C0; border-style: solid; border-color: #141721" value="<? print "$msn"; ?>"></td>
    </tr>
    <tr>
      <td width="150" height="30" bgcolor="#141721" align="left">
        <p style="margin-left: 10"><b><font face="Verdana" size="2">Birthday</font></b></td>
      <td width="350" height="30" bgcolor="#141721" align="left">
        <p style="margin-left: 10"><font face="Verdana" size="1"><? print"$byear" ?> <? print"$bmonth" ?> <? print"$bday" ?></font></td>
    </tr>
    <tr>
      <td width="150" height="30" bgcolor="#141721" align="left">
        <p style="margin-left: 10"><b><font face="Verdana" size="2">City</font></b></td>
      <td width="350" height="30" bgcolor="#141721" align="left">
        <p style="margin-left: 10"><input type="text" name="city" size="45" style="font-family: Verdana; font-size: 8pt; font-weight: bold; background-color: #000000; color: #C0C0C0; border-style: solid; border-color: #141721" value="<? print "$city"; ?>"></td>
    </tr>
    <tr>
      <td width="150" height="30" bgcolor="#141721" align="left">
        <p style="margin-left: 10"><b><font face="Verdana" size="2">State /
        Province</font></b></td>
      <td width="350" height="30" bgcolor="#141721" align="left">
        <p style="margin-left: 10"><select size="1" name="state" style="font-family: Verdana; font-size: 8pt; font-weight: bold; background-color: #000000; color: #C0C0C0; border-style: solid; border-color: #141721">
          <option value="<? print "$state"; ?>" selected><? print "$state"; ?></option> 
          <option value="Alabama">Alabama</option>
          <option value="Alaska">Alaska</option>
          <option value="Arkansas">Arkansas</option>
          <option value="Arizona">Arizona</option>
          <option value="California">California</option>
          <option value="Colorado">Colorado</option>
          <option value="Connecticut">Connecticut</option>
          <option value="Delaware">Delaware</option>
          <option value="Florida">Florida</option>
          <option value="Georgia">Georgia</option>
          <option value="Hawaii">Hawaii</option>
          <option value="Idaho">Idaho</option>
          <option value="Illinois">Illinois</option>
          <option value="Indiana">Indiana</option>
          <option value="Iowa">Iowa</option>
          <option value="Kansas">Kansas</option>
          <option value="Kentucky">Kentucky</option>
          <option value="Louisiana">Louisiana</option>
          <option value="Maine">Maine</option>
          <option value="Maryland">Maryland</option>
          <option value="Massachussetts">Massachussetts</option>
          <option value="Michigan">Michigan</option>
          <option value="Minnesota">Minnesota</option>
          <option value="Mississippi">Mississippi</option>
          <option value="Missouri">Missouri</option>
          <option value="Montana">Montana</option>
          <option value="Nebraska">Nebraska</option>
          <option value="Nevada">Nevada</option>
          <option value="New Hampshire">New Hampshire</option>
          <option value="New Jersey">New Jersey</option>
          <option value="New Mexico">New Mexico</option>
          <option value="New York">New York</option>
          <option value="North Carolina">North Carolina</option>
          <option value="North Dakota">North Dakota</option>
          <option value="Ohio">Ohio</option>
          <option value="Oklahoma">Oklahoma</option>
          <option value="Oregon">Oregon</option>
          <option value="Pennsylvania">Pennsylvania</option>
          <option value="Rhode Island">Rhode Island</option>
          <option value="South Carolina">South Carolina</option>
          <option value="South Dakota">South Dakota</option>
          <option value="Tennessee">Tennessee</option>
          <option value="Texas">Texas</option>
          <option value="Utah">Utah</option>
          <option value="Vermont">Vermont</option>
          <option value="Virginia">Virginia</option>
          <option value="Washington">Washington</option>
          <option value="Washington D.C.">Washington D.C.</option>
          <option value="West Virginia">West Virginia</option>
          <option value="Wisconsin">Wisconsin</option>
          <option value="Wyoming">Wyoming</option>
          <option value="Alberta">Alberta</option>
          <option value="British Columbia">British Columbia</option>
          <option value="Manitoba">Manitoba</option>
          <option value="Northwest Territory">Northwest Territory</option>
          <option value="New Brunswick">New Brunswick</option>
          <option value="Newfoundland and  Labrador">Newfoundland and Labrador</option>
          <option value="Nova Scotia">Nova Scotia</option>
          <option value="Ontario">Ontario</option>
          <option value="Price Edward Island">Price Edward Island</option>
          <option value="Quebec">Quebec</option>
          <option value="Saskatchewan">Saskatchewan</option>
          <option value="Yukon">Yukon</option>
          <option value="Nunavut">Nunavut</option>
        </select></td>
    </tr>
    <tr>
      <td width="150" height="30" bgcolor="#141721" align="left">   
        <p style="margin-left: 10"><b><font face="Verdana" size="2">Country</font></b></td>
      <td width="350" height="30" bgcolor="#141721" align="left">
        <p style="margin-left: 10"><select size="1" name="country" style="font-family: Verdana; font-size: 8pt; font-weight: bold; background-color: #000000; color: #C0C0C0; border-style: solid; border-color: #141721">
          <option value="<? print "$country"; ?>" selected><? print "$country"; ?></option> 
          <option value="Albania">Albania</option>
          <option value="Algeria">Algeria</option>
          <option value="Andorra">Andorra</option>
          <option value="Angola">Angola</option>
          <option value="Anguilla">Anguilla</option>
          <option value="Argentina">Argentina</option>
          <option value="Armenia">Armenia</option>
          <option value="Aruba">Aruba</option>
          <option value="Australia">Australia</option>
          <option value="Austria">Austria</option>
          <option value="Bahamas">Bahamas</option>
          <option value="Bahrain">Bahrain</option>
          <option value="Bangladesh">Bangladesh</option>
          <option value="Barbados">Barbados</option>
          <option value="Belarus">Belarus</option>
          <option value="Belgium">Belgium</option>
          <option value="Bermuda">Bermuda</option>
          <option value="Bolivia">Bolivia</option>
          <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
          <option value="Botswana">Botswana</option>
          <option value="Brazil">Brazil</option>
          <option value="Brunei Darussalam">Brunei Darussalam</option>
          <option value="Bulgaria">Bulgaria</option>
          <option value="Burundi">Burundi</option>
          <option value="Cameroon">Cameroon</option>
          <option value="Canada">Canada</option>
          <option value="Cayman Islands">Cayman Islands</option>
          <option value="Chad">Chad</option>
          <option value="Chile">Chile</option>
          <option value="China">China</option>
          <option value="Colombia">Colombia</option>
          <option value="Congo">Congo</option>
          <option value="Costa Rica">Costa Rica</option>
          <option value="Cote D'Ivoire">Cote D'Ivoire</option>
          <option value="Croatia">Croatia</option>
          <option value="Cyprus">Cyprus</option>
          <option value="Czech Republic">Czech Republic</option>
          <option value="Denmark">Denmark</option>
          <option value="Dominica">Dominica</option>
          <option value="Dominican Republic">Dominican Republic</option>
          <option value="Ecuador">Ecuador</option>
          <option value="Egypt">Egypt</option>
          <option value="El Salvador">El Salvador</option>
          <option value="Eritrea">Eritrea</option>
          <option value="Estonia">Estonia</option>
          <option value="Ethiopia">Ethiopia</option>
          <option value="Faroe Islands">Faroe Islands</option>
          <option value="Fiji">Fiji</option>
          <option value="Finland">Finland</option>
          <option value="France">France</option>
          <option value="Georgia">Georgia</option>
          <option value="Germany">Germany</option>
          <option value="Ghana">Ghana</option>
          <option value="Greece">Greece</option>
          <option value="Greenland">Greenland</option>
          <option value="Grenada">Grenada</option>
          <option value="Guatemala">Guatemala</option>
          <option value="Guinea">Guinea</option>
          <option value="Guinea-Bissau">Guinea-Bissau</option>
          <option value="Guyana">Guyana</option>
          <option value="Haiti">Haiti</option>
          <option value="Honduras">Honduras</option>
          <option value="Hong Kong (China)">Hong Kong (China)</option>
          <option value="Hungary">Hungary</option>
          <option value="Iceland">Iceland</option>
          <option value="India">India</option>
          <option value="Indonesia">Indonesia</option>
          <option value="Ireland">Ireland</option>
          <option value="Israel">Israel</option>
          <option value="Italy">Italy</option>
          <option value="Jamaica">Jamaica</option>
          <option value="Japan">Japan</option>
          <option value="Jordan">Jordan</option>
          <option value="Kazakhstan">Kazakhstan</option>
          <option value="Kenya">Kenya</option>
          <option value="Korea">Korea</option>
          <option value="Kuwait">Kuwait</option>
          <option value="Kyrgyzstan">Kyrgyzstan</option>
          <option value="Laos">Laos</option>
          <option value="Latvia">Latvia</option>
          <option value="Lebanon">Lebanon</option>
          <option value="Liberia">Liberia</option>
          <option value="Liechtenstein">Liechtenstein</option>
          <option value="Lithuania">Lithuania</option>
          <option value="Luxembourg">Luxembourg</option>
          <option value="Macau">Macau</option>
          <option value="Macedonia">Macedonia</option>
          <option value="Madagascar">Madagascar</option>
          <option value="Malawi">Malawi</option>
          <option value="Malaysia">Malaysia</option>
          <option value="Maldives">Maldives</option>
          <option value="Mali">Mali</option>
          <option value="Malta">Malta</option>
          <option value="Martinique">Martinique</option>
          <option value="Mauritania">Mauritania</option>
          <option value="Mauritius">Mauritius</option>
          <option value="Mexico">Mexico</option>
          <option value="Moldova">Moldova</option>
          <option value="Monaco">Monaco</option>
          <option value="Mongolia">Mongolia</option>
          <option value="Montserrat">Montserrat</option>
          <option value="Morocco">Morocco</option>
          <option value="Mozambique">Mozambique</option>
          <option value="Namibia">Namibia</option>
          <option value="Nepal">Nepal</option>
          <option value="Netherlands">Netherlands</option>
          <option value="Netherlands Antilles">Netherlands Antilles</option>
          <option value="New Zealand">New Zealand</option>
          <option value="Nicaragua">Nicaragua</option>
          <option value="Niger">Niger</option>
          <option value="Nigeria">Nigeria</option>
          <option value="Norway">Norway</option>
          <option value="Oman">Oman</option>
          <option value="Pakistan">Pakistan</option>
          <option value="Panama">Panama</option>
          <option value="Papua New Guinea">Papua New Guinea</option>
          <option value="Paraguay">Paraguay</option>
          <option value="Peru">Peru</option>
          <option value="Philippines">Philippines</option>
          <option value="Poland">Poland</option>
          <option value="Portugal">Portugal</option>
          <option value="Puerto Rico">Puerto Rico</option>
          <option value="Qatar">Qatar</option>
          <option value="Romania">Romania</option>
          <option value="Russian Federation">Russian Federation</option>
          <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
          <option value="Saint Lucia">Saint Lucia</option>
          <option value="Saint Vincent">Saint Vincent</option>
          <option value="Saudi Arabia">Saudi Arabia</option>
          <option value="Senegal">Senegal</option>
          <option value="Sierra Leone">Sierra Leone</option>
          <option value="Singapore">Singapore</option>
          <option value="Slovakia">Slovakia</option>
          <option value="Slovenia">Slovenia</option>
          <option value="South Africa">South Africa</option>
          <option value="South Korea">South Korea</option>
          <option value="Spain">Spain</option>
          <option value="Sri Lanka">Sri Lanka</option>
          <option value="Sudan">Sudan</option>
          <option value="Suriname">Suriname</option>
          <option value="Swaziland">Swaziland</option>
          <option value="Sweden">Sweden</option>
          <option value="Switzerland">Switzerland</option>
          <option value="Taiwan">Taiwan</option>
          <option value="Tajikistan">Tajikistan</option>
          <option value="Tanzania">Tanzania</option>
          <option value="Thailand">Thailand</option>
          <option value="Trinidad and Tobago">Trinidad and Tobago</option>
          <option value="Tunisia">Tunisia</option>
          <option value="Turkey">Turkey</option>
          <option value="Turkmenistan">Turkmenistan</option>
          <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
          <option value="Uganda">Uganda</option>
          <option value="Ukraine">Ukraine</option>
          <option value="United Arab Emirates">United Arab Emirates</option>
          <option value="United Kingdom">United Kingdom</option>
          <option value="United States of America">United States of
          America</option>
          <option value="Uruguay">Uruguay</option>
          <option value="Uzbekistan">Uzbekistan</option>
          <option value="Vanuatu">Vanuatu</option>
          <option value="Venezuela">Venezuela</option>
          <option value="Vietnam">Vietnam</option>
          <option value="Virgin Islands (British)">Virgin Islands (British)</option>
          <option value="Virgin Islands (United States)">Virgin Islands (United
          States)</option>
          <option value="Yugoslavia">Yugoslavia</option>
          <option value="Zambia">Zambia</option>
          <option value="Zimbabwe">Zimbabwe</option>
        </select></td>
    </tr>
    <tr>
      <td width="500" height="28" bgcolor="#141721" colspan="2">
        <p style="margin-left: 10" align="center"><font face="Verdana" size="2"><input style="color: #C0C0C0; background-color: #000000; font-family: Verdana; font-size: 8pt; font-weight: bold; border-style: solid; border-color: #141721" type="submit" value="Update Profile"><input style="color: #C0C0C0; background-color: #000000; font-family: Verdana; font-size: 8pt; font-weight: bold; border-style: solid; border-color: #141721" type="reset" value="Reset"></font></td>
    </tr>
  </table>
</form>
        <p align="center"><font face="Verdana" size="1">&nbsp;</font>
</td>
      <td width="20%" bgcolor="#141721" valign="top">
        <div align="center">
          <table border="0" cellpadding="0" cellspacing="1" width="100%"><? include "rightside.php"; ?></table>
        </div>
        <p style="margin-left: 10">&nbsp;</td>
    </tr>
    <tr>
      <td width="100%" bgcolor="#1B1B1B" colspan="4"><? include "footer.php"; ?></td>
    </tr>
  </table>
  </center>
</div>
</body>
<? } ?>
</html>