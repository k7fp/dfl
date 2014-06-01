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
        <p style="margin-left: 10"><b><font face="Verdana" size="2" color="#FFFFFF">REGISTER TEAM</font></b></td>
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
<table border="0" cellpadding="0" cellspacing="0" width="90%">
  <tr>
    <td width="100%"><font face="Verdana" size="2">- You must register your team to be part of the tournament.<br>
      - Your team members must register on this site and then using your team
      password to join team.<br>
      - You, the leader, will have access to modify your own team, including
      removing any roster.<br>
      - Only 16 teams can play in one season. If you register after 16 teams have registered, you cannot be participate in the current season.</font></td>
  </tr>
</table>
<?
	if ($_SERVER['REQUEST_METHOD'] == "POST")
    {
		$name = addslashes($_POST["name"]);
if (empty($name)) {
echo "<BODY onLoad=\"javascript: alert('You did not fill out your team name!')\">
<SCRIPT LANGUAGE=\"JavaScript\">
 function redirect()
 { 
  window.location = \"teamcreate.php\"
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
  window.location = \"teamcreate.php\"
 }
 setTimeout(\"redirect();\", 0)
</SCRIPT>";
die;
}
		$leader = $username;
		$website = addslashes($_POST["website"]);
		$tag = addslashes($_POST["tag"]);
	$sql  = " INSERT INTO team ";
	$sql .= " (name, password, leader, website, tag) VALUES ";
	$sql .= " ('$name','$password','$leader','$website','$tag') ";
	$result = mysql_query($sql, $cid);
	if (mysql_error()) { print "Database ERROR: " . mysql_error(); }
		$sql  = " UPDATE user SET";
		$sql .= " team = '$name', ";
		$sql .= " leader = 'yes' ";
		$sql .= " WHERE username ='".$username."'";
		$result = mysql_query($sql, $cid);
        $sql .= " LIMIT 1 ";
		if (mysql_error()) { print "Database ERROR: " . mysql_error(); }
echo"
<BODY onLoad=\"javascript: alert('Team Created!')\">
<SCRIPT LANGUAGE=\"JavaScript\">
 function redirect()
 { 
  window.location = \"index.php\"
 }
 setTimeout(\"redirect();\", 0)
</SCRIPT>
";
}
?>
<form name="dfl" action="teamcreate.php" method="POST">
  <table border="0" cellpadding="0" cellspacing="1" width="95%">
    <tr>
      <td width="150" height="30" bgcolor="#0E1016" align="left">
        <p style="margin-left: 10"><b><font face="Verdana" size="2">Team Name</font></b></td>
      <td width="350" height="30" bgcolor="#0E1016" align="left">
        <p style="margin-left: 10"><input type="text" name="name" size="45" style="font-family: Verdana; font-size: 8pt; font-weight: bold; background-color: #000000; color: #C0C0C0; border-style: solid; border-color: #141721"></td>
    </tr>
    <tr>
      <td width="150" height="30" bgcolor="#141721" align="left">
        <p style="margin-left: 10"><b><font face="Verdana" size="2">Tag</font></b></td>
      <td width="350" height="30" bgcolor="#141721" align="left">
        <p style="margin-left: 10"><input type="text" name="tag" size="45" style="font-family: Verdana; font-size: 8pt; font-weight: bold; background-color: #000000; color: #C0C0C0; border-style: solid; border-color: #141721"></td>
    </tr>
    <tr>
      <td width="150" height="30" bgcolor="#141721" align="left">
        <p style="margin-left: 10"><b><font face="Verdana" size="2">Website</font></b></td>
      <td width="350" height="30" bgcolor="#141721" align="left">
        <p style="margin-left: 10"><input type="text" name="website" size="45" style="font-family: Verdana; font-size: 8pt; font-weight: bold; background-color: #000000; color: #C0C0C0; border-style: solid; border-color: #141721" value="http://"></td>
    </tr>
    <tr>
      <td width="150" height="30" bgcolor="#141721" align="left">
        <p style="margin-left: 10"><b><font face="Verdana" size="2">Team
        Password</font></b></td>
      <td width="350" height="30" bgcolor="#141721" align="left">
        <p style="margin-left: 10"><input type="password" name="password" size="45" style="font-family: Verdana; font-size: 8pt; font-weight: bold; background-color: #000000; color: #C0C0C0; border-style: solid; border-color: #141721"></td>
    </tr>
    <tr>
      <td width="500" height="28" bgcolor="#141721" colspan="2">
        <p style="margin-left: 10" align="center"><font face="Verdana" size="2"><input style="color: #C0C0C0; background-color: #000000; font-family: Verdana; font-size: 8pt; font-weight: bold; border-style: solid; border-color: #141721" type="submit" value="Create Team"><input style="color: #C0C0C0; background-color: #000000; font-family: Verdana; font-size: 8pt; font-weight: bold; border-style: solid; border-color: #141721" type="reset" value="Reset"></font></td>
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