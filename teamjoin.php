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
		$sql  = " SELECT * FROM user";
		$sql .= " WHERE username='".$username."' ";
		$rs = mysql_query($sql,$cid);
		$row = mysql_fetch_assoc($rs);
		$teamjoined = $row["team"];
switch (isset($teamjoined)) {
     case TRUE:
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

	if ($_SERVER['REQUEST_METHOD'] == "POST")
    {
		$teamname = addslashes($_POST["teamname"]);
if ($teamname == 'Select One') {
echo "<BODY onLoad=\"javascript: alert('You did not choose a team!')\">
<SCRIPT LANGUAGE=\"JavaScript\">
 function redirect()
 { 
  window.location = \"teamjoin.php\"
 }
 setTimeout(\"redirect();\", 0)
</SCRIPT>";
die;
}
		$password= addslashes($_POST["password"]);
if (empty($password)) {
echo "<BODY onLoad=\"javascript: alert('You did not fill out your team password!')\">
<SCRIPT LANGUAGE=\"JavaScript\">
 function redirect()
 { 
  window.location = \"teamjoin.php\"
 }
 setTimeout(\"redirect();\", 0)
</SCRIPT>";
die;
}

$stuff = mysql_query("SELECT * FROM team WHERE name='".$teamname."' AND password='".$password."'") or die("MySQL Login Error: ".mysql_error()); 
if (mysql_num_rows($stuff) > 0) {
		$sql  = " SELECT * FROM team";
		$sql .= " WHERE password='".$password."' ";
		$rs = mysql_query($sql,$cid);
		$row = mysql_fetch_assoc($rs);
		$roster1 = $row["roster1"];
		$roster2 = $row["roster2"];
		$roster3 = $row["roster3"];
		$roster4 = $row["roster4"];
		$roster5 = $row["roster5"];
		$roster6 = $row["roster6"];
		$roster7 = $row["roster7"];
		$roster8 = $row["roster8"];
		$roster9 = $row["roster9"];
		$roster10 = $row["roster10"];
		$roster11 = $row["roster11"];
		$roster12 = $row["roster12"];
		$roster13 = $row["roster13"];
		$roster14 = $row["roster14"];
		$roster15 = $row["roster15"];
		$roster16 = $row["roster16"];
		$roster17 = $row["roster17"];
		$roster18 = $row["roster18"];
		$roster19 = $row["roster19"];
		$roster20 = $row["roster20"];
		$nullroster = roster1;
if (isset($roster1)) {
	$nullroster = roster2;
}
if (isset($roster1, $roster2)) {
	$nullroster = roster3;
}
if (isset($roster1, $roster2, $roster3)) {
	$nullroster = roster4;
}
if (isset($roster1, $roster2, $roster3, $roster4)) {
	$nullroster = roster5;
}
if (isset($roster1, $roster2, $roster3, $roster4, $roster5)) {
	$nullroster = roster6;
}
if (isset($roster1, $roster2, $roster3, $roster4, $roster5, $roster6)) {
	$nullroster = roster7;
}
if (isset($roster1, $roster2, $roster3, $roster4, $roster5, $roster6, $roster7)) {
	$nullroster = roster8;
}
if (isset($roster1, $roster2, $roster3, $roster4, $roster5, $roster6, $roster7, $roster8)) {
	$nullroster = roster9;
}
if (isset($roster1, $roster2, $roster3, $roster4, $roster5, $roster6, $roster7, $roster8, $roster9)) {
	$nullroster = roster10;
}
if (isset($roster1, $roster2, $roster3, $roster4, $roster5, $roster6, $roster7, $roster8, $roster9, $roster10)) {
	$nullroster = roster11;
}
if (isset($roster1, $roster2, $roster3, $roster4, $roster5, $roster6, $roster7, $roster8, $roster9, $roster10, $roster11)) {
	$nullroster = roster12;
}
if (isset($roster1, $roster2, $roster3, $roster4, $roster5, $roster6, $roster7, $roster8, $roster9, $roster10, $roster11, $roster12)) {
	$nullroster = roster13;
}
if (isset($roster1, $roster2, $roster3, $roster4, $roster5, $roster6, $roster7, $roster8, $roster9, $roster10, $roster11, $roster12, $roster13)) {
	$nullroster = roster14;
}
if (isset($roster1, $roster2, $roster3, $roster4, $roster5, $roster6, $roster7, $roster8, $roster9, $roster10, $roster11, $roster12, $roster13, $roster14)) {
	$nullroster = roster15;
}
if (isset($roster1, $roster2, $roster3, $roster4, $roster5, $roster6, $roster7, $roster8, $roster9, $roster10, $roster11, $roster12, $roster13, $roster14, $roster15)) {
	$nullroster = roster16;
}
if (isset($roster1, $roster2, $roster3, $roster4, $roster5, $roster6, $roster7, $roster8, $roster9, $roster10, $roster11, $roster12, $roster13, $roster14, $roster15, $roster16)) {
	$nullroster = roster17;
}
if (isset($roster1, $roster2, $roster3, $roster4, $roster5, $roster6, $roster7, $roster8, $roster9, $roster10, $roster11, $roster12, $roster13, $roster14, $roster15, $roster16, $roster17)) {
	$nullroster = roster18;
}
if (isset($roster1, $roster2, $roster3, $roster4, $roster5, $roster6, $roster7, $roster8, $roster9, $roster10, $roster11, $roster12, $roster13, $roster14, $roster15, $roster16, $roster17, $roster18)) {
	$nullroster = roster19;
}
if (isset($roster1, $roster2, $roster3, $roster4, $roster5, $roster6, $roster7, $roster8, $roster9, $roster10, $roster11, $roster12, $roster13, $roster14, $roster15, $roster16, $roster17, $roster18, $roster19)) {
	$nullroster = roster20;
}
if (isset($roster1, $roster2, $roster3, $roster4, $roster5, $roster6, $roster7, $roster8, $roster9, $roster10, $roster11, $roster12, $roster13, $roster14, $roster15, $roster16, $roster17, $roster18, $roster19, $roster20)) {
echo "<BODY onLoad=\"javascript: alert('Team is full, you cannot join.')\">
<SCRIPT LANGUAGE=\"JavaScript\">
 function redirect()
 { 
  window.location = \"index.php\"
 }
 setTimeout(\"redirect();\", 0)
</SCRIPT>
";
die;
}
		$sql  = " UPDATE team SET";
		$sql .= " $nullroster = '$username' ";
		$sql .= " WHERE name ='".$teamname."'";
		$result = mysql_query($sql,$cid);
        $sql .= " LIMIT 1 ";
		if (mysql_error()) { print "Database ERROR: " . mysql_error(); }
		$sql  = " UPDATE user SET";
		$sql .= " team = '$teamname' ";
		$sql .= " WHERE username ='".$username."'";
		$result = mysql_query($sql, $cid);
        $sql .= " LIMIT 1 ";
		if (mysql_error()) { print "Database ERROR: " . mysql_error(); }
echo "<BODY onLoad=\"javascript: alert('Team Joined!')\">
<SCRIPT LANGUAGE=\"JavaScript\">
 function redirect()
 { 
  window.location = \"index.php\"
 }
 setTimeout(\"redirect();\", 0)
</SCRIPT>
";
die;
} else {
echo "<BODY onLoad=\"javascript: alert('Team password does not match!')\">
<SCRIPT LANGUAGE=\"JavaScript\">
 function redirect()
 { 
  window.location = \"teamjoin.php\"
 }
 setTimeout(\"redirect();\", 0)
</SCRIPT>
";
} 
}
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
        <p style="margin-left: 10"><b><font face="Verdana" size="2" color="#FFFFFF">JOIN TEAM</font></b></td>
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
<form name="dfl" action="teamjoin.php" method="POST">
  <table border="0" cellpadding="0" cellspacing="1" width="95%">
    <tr>
      <td width="150" height="30" bgcolor="#141721" align="left">
        <p style="margin-left: 10"><b><font face="Verdana" size="2">Team Name</font></b></td>
      <td width="350" height="30" bgcolor="#141721" align="left">
        <p style="margin-left: 10"><select size="1" name="teamname" style="color: #C0C0C0; background-color: #000000; font-family: Verdana; font-size: 8pt; font-weight: bold; border-style: solid; border-color: #141721">
<option>Select One</option>
<?
	$sql = " SELECT * FROM team ";
	$rs = mysql_query($sql, $cid);
    if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
    while ($row = mysql_fetch_array($rs)) 
    {
        $team = $row["name"];
        print "
<option value=\"$team\">$team</option>
";
}
?>
        </select></td>
    </tr>
    <tr>
      <td width="150" height="30" bgcolor="#141721" align="left">
        <p style="margin-left: 10"><b><font face="Verdana" size="2">Join
        Password</font></b></td>
      <td width="350" height="30" bgcolor="#141721" align="left">
        <p style="margin-left: 10"><input type="password" name="password" size="45" style="font-family: Verdana; font-size: 8pt; font-weight: bold; background-color: #000000; color: #C0C0C0; border-style: solid; border-color: #141721"></td>
    </tr>
    <tr>
      <td width="500" height="28" bgcolor="#141721" colspan="2">
        <p style="margin-left: 10" align="center"><font face="Verdana" size="2"><input style="color: #C0C0C0; background-color: #000000; font-family: Verdana; font-size: 8pt; font-weight: bold; border-style: solid; border-color: #141721" type="submit" value="Join"><input style="color: #C0C0C0; background-color: #000000; font-family: Verdana; font-size: 8pt; font-weight: bold; border-style: solid; border-color: #141721" type="reset" value="Reset"></font></td>
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
</html>