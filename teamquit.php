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
		$isleader = $row["leader"];
		$onteam = $row["team"];
	if ($isleader == yes) {
		header("Location: index.php"); 
}
	if (is_null($onteam)) {
		header("Location: index.php"); 
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
	$sql = " SELECT * FROM user ";
	$sql .= " WHERE username='".$username."' ";
	$rs = mysql_query($sql,$cid);
	$row = mysql_fetch_assoc($rs);
	$team = $row["team"];

	if ($_GET["task"] == "quit")
	{
		$sql  = " SELECT * FROM team ";
		$sql .= " WHERE name='".$team."' ";
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

if ($roster1 == $username) {
		$sql  = " UPDATE team SET";
		$sql .= " roster1 = NULL ";
		$sql .= " WHERE name='$team' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
}
if ($roster2 == $username) {
		$sql  = " UPDATE team SET";
		$sql .= " roster2 = NULL ";
		$sql .= " WHERE name='$team' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
}
if ($roster3 == $username) {
		$sql  = " UPDATE team SET";
		$sql .= " roster3 = NULL ";
		$sql .= " WHERE name='$team' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
}
if ($roster4 == $username) {
		$sql  = " UPDATE team SET";
		$sql .= " roster4 = NULL ";
		$sql .= " WHERE name='$team' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
}
if ($roster5 == $username) {
		$sql  = " UPDATE team SET";
		$sql .= " roster5 = NULL ";
		$sql .= " WHERE name='$team' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
}
if ($roster6 == $username) {
		$sql  = " UPDATE team SET";
		$sql .= " roster6 = NULL ";
		$sql .= " WHERE name='$team' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
}
if ($roster7 == $username) {
		$sql  = " UPDATE team SET";
		$sql .= " roster7 = NULL ";
		$sql .= " WHERE name='$team' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
}
if ($roster8 == $username) {
		$sql  = " UPDATE team SET";
		$sql .= " roster8 = NULL ";
		$sql .= " WHERE name='$team' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
}
if ($roster9 == $username) {
		$sql  = " UPDATE team SET";
		$sql .= " roster9 = NULL ";
		$sql .= " WHERE name='$team' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
}
if ($roster10 == $username) {
		$sql  = " UPDATE team SET";
		$sql .= " roster10 = NULL ";
		$sql .= " WHERE name='$team' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
}
if ($roster11 == $username) {
		$sql  = " UPDATE team SET";
		$sql .= " roster11 = NULL ";
		$sql .= " WHERE name='$team' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
}
if ($roster12 == $username) {
		$sql  = " UPDATE team SET";
		$sql .= " roster12 = NULL ";
		$sql .= " WHERE name='$team' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
}
if ($roster13 == $username) {
		$sql  = " UPDATE team SET";
		$sql .= " roster13 = NULL ";
		$sql .= " WHERE name='$team' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
}
if ($roster14 == $username) {
		$sql  = " UPDATE team SET";
		$sql .= " roster14 = NULL ";
		$sql .= " WHERE name='$team' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
}
if ($roster15 == $username) {
		$sql  = " UPDATE team SET";
		$sql .= " roster15 = NULL ";
		$sql .= " WHERE name='$team' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
}
if ($roster16 == $username) {
		$sql  = " UPDATE team SET";
		$sql .= " roster16 = NULL ";
		$sql .= " WHERE name='$team' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
}
if ($roster17 == $username) {
		$sql  = " UPDATE team SET";
		$sql .= " roster17 = NULL ";
		$sql .= " WHERE name='$team' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
}
if ($roster18 == $username) {
		$sql  = " UPDATE team SET";
		$sql .= " roster18 = NULL ";
		$sql .= " WHERE name='$team' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
}
if ($roster19 == $username) {
		$sql  = " UPDATE team SET";
		$sql .= " roster19 = NULL ";
		$sql .= " WHERE name='$team' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
}
if ($roster20 == $username) {
		$sql  = " UPDATE team SET";
		$sql .= " roster20 = NULL ";
		$sql .= " WHERE name='$team' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
}

		$sql  = " UPDATE user SET";
		$sql .= " team = NULL ";
		$sql .= " WHERE username='$username' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
echo"<BODY onLoad=\"javascript: alert('Team Quitted!')\">
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
        <p style="margin-left: 10"><b><font face="Verdana" size="2" color="#FFFFFF">QUIT TEAM</font></b></td>
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
  <table border="0" cellpadding="0" cellspacing="1" width="90%">
    <tr>
      <td width="150" height="30" bgcolor="#141721" align="left">
        <p style="margin-left: 10"><b><font size="2" face="Verdana">Team Name</font></b></td>
      <td width="350" height="30" bgcolor="#141721" align="left">
        <p style="margin-left: 10"><font face="Verdana" size="2"><? print "$team"; ?> - <a href="teamquit.php?task=quit">Quit</a></font></td>
    </tr>
  </table>
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