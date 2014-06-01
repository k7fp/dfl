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
		$leader = $row["leader"];
switch ($leader == yes) {
     case TRUE:
           break;
	 case FALSE;
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
		$sql  = " SELECT * FROM team ";
		$sql .= " WHERE leader='".$username."' ";
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
	if ($_GET["task"] == "delroster1")
	{
		$sql  = " UPDATE team SET";
		$sql .= "  roster1 = NULL ";
		$sql .= " WHERE leader='$username' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
		$sql  = " UPDATE user SET";
		$sql .= "   team = NULL ";
		$sql .= " WHERE username='$roster1' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
	}

	if ($_GET["task"] == "delroster2")
	{
		$sql  = " UPDATE team SET";
		$sql .= "  roster2 = NULL ";
		$sql .= " WHERE leader='$username' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
		$sql  = " UPDATE user SET";
		$sql .= "   team = NULL ";
		$sql .= " WHERE username='$roster2' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
	}
	if ($_GET["task"] == "delroster3")
	{
		$sql  = " UPDATE team SET";
		$sql .= "  roster3 = NULL ";
		$sql .= " WHERE leader='$username' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
		$sql  = " UPDATE user SET";
		$sql .= "   team = NULL ";
		$sql .= " WHERE username='$roster3' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
	}
	if ($_GET["task"] == "delroster4")
	{
		$sql  = " UPDATE team SET";
		$sql .= "  roster4 = NULL ";
		$sql .= " WHERE leader='$username' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
		$sql  = " UPDATE user SET";
		$sql .= "   team = NULL ";
		$sql .= " WHERE username='$roster4' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
	}
	if ($_GET["task"] == "delroster5")
	{
		$sql  = " UPDATE team SET";
		$sql .= "  roster5 = NULL ";
		$sql .= " WHERE leader='$username' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
		$sql  = " UPDATE user SET";
		$sql .= "   team = NULL ";
		$sql .= " WHERE username='$roster5' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
	}
	if ($_GET["task"] == "delroster6")
	{
		$sql  = " UPDATE team SET";
		$sql .= "  roster6 = NULL ";
		$sql .= " WHERE leader='$username' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
		$sql  = " UPDATE user SET";
		$sql .= "   team = NULL ";
		$sql .= " WHERE username='$roster6' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
	}
	if ($_GET["task"] == "delroster7")
	{
		$sql  = " UPDATE team SET";
		$sql .= "  roster7 = NULL ";
		$sql .= " WHERE leader='$username' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
		$sql  = " UPDATE user SET";
		$sql .= "   team = NULL ";
		$sql .= " WHERE username='$roster7' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
	}
	if ($_GET["task"] == "delroster8")
	{
		$sql  = " UPDATE team SET";
		$sql .= "  roster8 = NULL ";
		$sql .= " WHERE leader='$username' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
		$sql  = " UPDATE user SET";
		$sql .= "   team = NULL ";
		$sql .= " WHERE username='$roster8' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
	}
	if ($_GET["task"] == "delroster9")
	{
		$sql  = " UPDATE team SET";
		$sql .= "  roster9 = NULL ";
		$sql .= " WHERE leader='$username' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
		$sql  = " UPDATE user SET";
		$sql .= "   team = NULL ";
		$sql .= " WHERE username='$roster9' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
	}
	if ($_GET["task"] == "delroster10")
	{
		$sql  = " UPDATE team SET";
		$sql .= "  roster10 = NULL ";
		$sql .= " WHERE leader='$username' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
		$sql  = " UPDATE user SET";
		$sql .= "   team = NULL ";
		$sql .= " WHERE username='$roster10' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
	}
	if ($_GET["task"] == "delroster11")
	{
		$sql  = " UPDATE team SET";
		$sql .= "  roster11 = NULL ";
		$sql .= " WHERE leader='$username' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
		$sql  = " UPDATE user SET";
		$sql .= "   team = NULL ";
		$sql .= " WHERE username='$roster11' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
	}
	if ($_GET["task"] == "delroster12")
	{
		$sql  = " UPDATE team SET";
		$sql .= "  roster12 = NULL ";
		$sql .= " WHERE leader='$username' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
		$sql  = " UPDATE user SET";
		$sql .= "   team = NULL ";
		$sql .= " WHERE username='$roster12' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
	}
	if ($_GET["task"] == "delroster13")
	{
		$sql  = " UPDATE team SET";
		$sql .= "  roster13 = NULL ";
		$sql .= " WHERE leader='$username' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
		$sql  = " UPDATE user SET";
		$sql .= "   team = NULL ";
		$sql .= " WHERE username='$roster13' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
	}
	if ($_GET["task"] == "delroster14")
	{
		$sql  = " UPDATE team SET";
		$sql .= "  roster14 = NULL ";
		$sql .= " WHERE leader='$username' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
		$sql  = " UPDATE user SET";
		$sql .= "   team = NULL ";
		$sql .= " WHERE username='$roster14' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
	}
	if ($_GET["task"] == "delroster15")
	{
		$sql  = " UPDATE team SET";
		$sql .= "  roster15 = NULL ";
		$sql .= " WHERE leader='$username' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
		$sql  = " UPDATE user SET";
		$sql .= "   team = NULL ";
		$sql .= " WHERE username='$roster15' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
	}
	if ($_GET["task"] == "delroster16")
	{
		$sql  = " UPDATE team SET";
		$sql .= "  roster16 = NULL ";
		$sql .= " WHERE leader='$username' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
		$sql  = " UPDATE user SET";
		$sql .= "   team = NULL ";
		$sql .= " WHERE username='$roster16' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
	}
	if ($_GET["task"] == "delroster17")
	{
		$sql  = " UPDATE team SET";
		$sql .= "  roster17 = NULL ";
		$sql .= " WHERE leader='$username' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
		$sql  = " UPDATE user SET";
		$sql .= "   team = NULL ";
		$sql .= " WHERE username='$roster17' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
	}
	if ($_GET["task"] == "delroster18")
	{
		$sql  = " UPDATE team SET";
		$sql .= "  roster18 = NULL ";
		$sql .= " WHERE leader='$username' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
		$sql  = " UPDATE user SET";
		$sql .= "   team = NULL ";
		$sql .= " WHERE username='$roster18' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
	}
	if ($_GET["task"] == "delroster19")
	{
		$sql  = " UPDATE team SET";
		$sql .= "  roster19 = NULL ";
		$sql .= " WHERE leader='$username' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
		$sql  = " UPDATE user SET";
		$sql .= "   team = NULL ";
		$sql .= " WHERE username='$roster19' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
	}
	if ($_GET["task"] == "delroster20")
	{
		$sql  = " UPDATE team SET";
		$sql .= "  roster20 = NULL ";
		$sql .= " WHERE leader='$username' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
		$sql  = " UPDATE user SET";
		$sql .= "   team = NULL ";
		$sql .= " WHERE username='$roster20' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
	}

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$tag = addslashes($_POST["tag"]);
        $website = addslashes($_POST["website"]);
		$password = addslashes($_POST["password"]);
		$sql  = " UPDATE team SET";
		$sql .= "   tag = '$tag', ";
		$sql .= "   website = '$website', ";
		$sql .= "   password = '$password' ";
		$sql .= " WHERE leader ='".$username."' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
echo"<BODY onLoad=\"javascript: alert('Team Updated!')\">
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
		$sql  = " SELECT * FROM team ";
		$sql .= " WHERE leader='".$username."' ";
		$rs = mysql_query($sql,$cid);
		$row = mysql_fetch_assoc($rs);
		$name = $row["name"];
		$website = $row["website"];
		$tag = $row["tag"];
		$password = $row["password"];
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
        <p style="margin-left: 10"><b><font face="Verdana" size="2" color="#FFFFFF">MODIFY TEAM</font></b></td>
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
      <td width="60%" bgcolor="#202020" colspan="2"  valign="top">
        <p align="center"><font face="Verdana" size="1">&nbsp;</font>
<form name="dfl" action="teamedit.php" method="POST">
  <table border="0" cellpadding="0" cellspacing="1" width="95%">
    <tr>
      <td width="150" height="30" bgcolor="#0E1016" align="left">
        <p style="margin-left: 10"><b><font size="2" face="Verdana">Team Name</font></b></td>
      <td width="350" height="30" bgcolor="#0E1016" align="left">
        <p style="margin-left: 10"><font face="Verdana" size="2"><? print $name ?></font></td>
    </tr>
    <tr>
      <td width="150" height="30" bgcolor="#141721" align="left">
        <p style="margin-left: 10"><b><font size="2" face="Verdana">Tag</font></b></td>
      <td width="350" height="30" bgcolor="#141721" align="left">
        <p style="margin-left: 10"><font face="Verdana"><input type="text" name="tag" size="45" style="font-family: Verdana; font-size: 8pt; font-weight: bold; background-color: #000000; color: #C0C0C0; border-style: solid; border-color: #141721" value="<? print "$tag"; ?>"></font></td>
    </tr>
    <tr>
      <td width="150" height="30" bgcolor="#141721" align="left">
        <p style="margin-left: 10"><b><font size="2" face="Verdana">Website</font></b></td>
      <td width="350" height="30" bgcolor="#141721" align="left">
        <p style="margin-left: 10"><font face="Verdana"><input type="text" name="website" size="45" style="font-family: Verdana; font-size: 8pt; font-weight: bold; background-color: #000000; color: #C0C0C0; border-style: solid; border-color: #141721" value="<? print "$website"; ?>"></font></td>
    </tr>
    <tr>
      <td width="150" height="30" bgcolor="#141721" align="left"">
        <p style="margin-left: 10"><b><font size="2" face="Verdana">Join
        Password</font></b></td>
      <td width="350" height="30" bgcolor="#141721" align="left">
        <p style="margin-left: 10"><font face="Verdana"><input type="password" name="password" size="45" style="font-family: Verdana; font-size: 8pt; font-weight: bold; background-color: #000000; color: #C0C0C0; border-style: solid; border-color: #141721" value="<? print "$password"; ?>"></font></td>
    </tr>
    <tr>
      <td width="150" height="30" bgcolor="#141721" align="left">
        <p style="margin-left: 10"><b><font size="2" face="Verdana">Rosters</font></b></td>
      <td width="350" height="30" bgcolor="#141721" align="left">
        <div align="center">
          <center>
          <table border="0" cellpadding="0" cellspacing="0" width="80%">
            <tr>
<?
	if (isset($roster1)) {
echo"
<tr>
<td width=\"50%\"><font face=\"Verdana\" size=\"2\">$roster1</font></td>
<td width=\"50%\"><a href=\"teamedit.php?task=delroster1\"><font face=\"Verdana\" size=\"2\">Delete Roster</font></a></td>
</tr>
";
}
	if (isset($roster2)) {
echo"
<tr>
<td width=\"50%\"><font face=\"Verdana\" size=\"2\">$roster2</font></td>
<td width=\"50%\"><a href=\"teamedit.php?task=delroster2\"><font face=\"Verdana\" size=\"2\">Delete Roster</font></a></td>
</tr>
";
}
	if (isset($roster3)) {
echo"
<tr>
<td width=\"50%\"><font face=\"Verdana\" size=\"2\">$roster3</font></td>
<td width=\"50%\"><a href=\"teamedit.php?task=delroster3\"><font face=\"Verdana\" size=\"2\">Delete Roster</font></a></td>
</tr>
";
}
	if (isset($roster4)) {
echo"
<tr>
<td width=\"50%\"><font face=\"Verdana\" size=\"2\">$roster4</font></td>
<td width=\"50%\"><a href=\"teamedit.php?task=delroster4\"><font face=\"Verdana\" size=\"2\">Delete Roster</font></a></td>
</tr>
";
}
	if (isset($roster5)) {
echo"
<tr>
<td width=\"50%\"><font face=\"Verdana\" size=\"2\">$roster5</font></td>
<td width=\"50%\"><a href=\"teamedit.php?task=delroster5\"><font face=\"Verdana\" size=\"2\">Delete Roster</font></a></td>
</tr>
";
}
	if (isset($roster6)) {
echo"
<tr>
<td width=\"50%\"><font face=\"Verdana\" size=\"2\">$roster6</font></td>
<td width=\"50%\"><a href=\"teamedit.php?task=delroster6\"><font face=\"Verdana\" size=\"2\">Delete Roster</font></a></td>
</tr>
";
}
	if (isset($roster7)) {
echo"
<tr>
<td width=\"50%\"><font face=\"Verdana\" size=\"2\">$roster7</font></td>
<td width=\"50%\"><a href=\"teamedit.php?task=delroster7\"><font face=\"Verdana\" size=\"2\">Delete Roster</font></a></td>
</tr>
";
}
	if (isset($roster8)) {
echo"
<tr>
<td width=\"50%\"><font face=\"Verdana\" size=\"2\">$roster8</font></td>
<td width=\"50%\"><a href=\"teamedit.php?task=delroster8\"><font face=\"Verdana\" size=\"2\">Delete Roster</font></a></td>
</tr>
";
}
	if (isset($roster9)) {
echo"
<tr>
<td width=\"50%\"><font face=\"Verdana\" size=\"2\">$roster9</font></td>
<td width=\"50%\"><a href=\"teamedit.php?task=delroster9\"><font face=\"Verdana\" size=\"2\">Delete Roster</font></a></td>
</tr>
";
}
	if (isset($roster10)) {
echo"
<tr>
<td width=\"50%\"><font face=\"Verdana\" size=\"2\">$roster10</font></td>
<td width=\"50%\"><a href=\"teamedit.php?task=delroster10\"><font face=\"Verdana\" size=\"2\">Delete Roster</font></a></td>
</tr>
";
}
	if (isset($roster11)) {
echo"
<tr>
<td width=\"50%\"><font face=\"Verdana\" size=\"2\">$roster11</font></td>
<td width=\"50%\"><a href=\"teamedit.php?task=delroster11\"><font face=\"Verdana\" size=\"2\">Delete Roster</font></a></td>
</tr>
";
}
	if (isset($roster12)) {
echo"
<tr>
<td width=\"50%\"><font face=\"Verdana\" size=\"2\">$roster12</font></td>
<td width=\"50%\"><a href=\"teamedit.php?task=delroster12\"><font face=\"Verdana\" size=\"2\">Delete Roster</font></a></td>
</tr>
";
}
	if (isset($roster13)) {
echo"
<tr>
<td width=\"50%\"><font face=\"Verdana\" size=\"2\">$roster13</font></td>
<td width=\"50%\"><a href=\"teamedit.php?task=delroster13\"><font face=\"Verdana\" size=\"2\">Delete Roster</font></a></td>
</tr>
";
}
	if (isset($roster14)) {
echo"
<tr>
<td width=\"50%\"><font face=\"Verdana\" size=\"2\">$roster14</font></td>
<td width=\"50%\"><a href=\"teamedit.php?task=delroster14\"><font face=\"Verdana\" size=\"2\">Delete Roster</font></a></td>
</tr>
";
}
	if (isset($roster15)) {
echo"
<tr>
<td width=\"50%\"><font face=\"Verdana\" size=\"2\">$roster15</font></td>
<td width=\"50%\"><a href=\"teamedit.php?task=delroster15\"><font face=\"Verdana\" size=\"2\">Delete Roster</font></a></td>
</tr>
";
}
	if (isset($roster16)) {
echo"
<tr>
<td width=\"50%\"><font face=\"Verdana\" size=\"2\">$roster16</font></td>
<td width=\"50%\"><a href=\"teamedit.php?task=delroster16\"><font face=\"Verdana\" size=\"2\">Delete Roster</font></a></td>
</tr>
";
}
	if (isset($roster17)) {
echo"
<tr>
<td width=\"50%\"><font face=\"Verdana\" size=\"2\">$roster17</font></td>
<td width=\"50%\"><a href=\"teamedit.php?task=delroster17\"><font face=\"Verdana\" size=\"2\">Delete Roster</font></a></td>
</tr>
";
}
	if (isset($roster18)) {
echo"
<tr>
<td width=\"50%\"><font face=\"Verdana\" size=\"2\">$roster18</font></td>
<td width=\"50%\"><a href=\"teamedit.php?task=delroster18\"><font face=\"Verdana\" size=\"2\">Delete Roster</font></a></td>
</tr>
";
}
	if (isset($roster19)) {
echo"
<tr>
<td width=\"50%\"><font face=\"Verdana\" size=\"2\">$roster19</font></td>
<td width=\"50%\"><a href=\"teamedit.php?task=delroster19\"><font face=\"Verdana\" size=\"2\">Delete Roster</font></a></td>
</tr>
";
}
	if (isset($roster20)) {
echo"
<tr>
<td width=\"50%\"><font face=\"Verdana\" size=\"2\">$roster20</font></td>
<td width=\"50%\"><a href=\"teamedit.php?task=delroster20\"><font face=\"Verdana\" size=\"2\">Delete Roster</font></a></td>
</tr>
";
}
?>
            </tr>
          </table>
          </center>
        </div>
      </td>
    </tr>
    <tr>
      <td width="500" height="28" bgcolor="#141721" colspan="2">
        <p style="margin-left: 10" align="center"><font size="2" face="Verdana"><input style="color: #C0C0C0; background-color: #000000; font-family: Verdana; font-size: 8pt; font-weight: bold; border-style: solid; border-color: #141721" type="submit" value="Update Team"><input style="color: #C0C0C0; background-color: #000000; font-family: Verdana; font-size: 8pt; font-weight: bold; border-style: solid; border-color: #141721" type="reset" value="Reset"></font></td>
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