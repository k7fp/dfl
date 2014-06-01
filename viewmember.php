<?
require( 'config.php' );
session_start();
switch (isset($_SESSION[username])) {
     case TRUE:
$_SESSION['username'] = $_SESSION[username];
$username = $_SESSION['username'];
           break;
     case FALSE:
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
		$name = $_GET["name"];
		$sql  = " SELECT * FROM user ";
		$sql .= " WHERE username = '$name' ";
		$rs = mysql_query($sql,$cid);
		if (is_null($name)) { print "<br><center><font face=\"Verdana\" size=\"2\" color=\"#C0C0C0\">Your IP ".$_SERVER['REMOTE_ADDR']." Has Been Logged.<br>Click <a href=\"javascript:history.back(1)\"> Here</a> To Go Back.</font></center>";
		die;
}
		$row = mysql_fetch_array($rs);
		$username = $row["username"];
		$dfname = $row["dfname"];
		$realname = $row["realname"];
		$team = $row["team"];
		$leader = $row["leader"];
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
	if (is_null($username)) {
 print "<font face=\"Verdana\" size=\"2\" color=\"#C0C0C0\"><br><center>Member Does Not Exist.<br>Your IP ".$_SERVER['REMOTE_ADDR']." Has Been Logged.<br>Click <a href=\"javascript:history.back(1)\"> Here</a> To Go Back.</font></center>";
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
        <p style="margin-left: 10"><b><font face="Verdana" size="2" color="#FFFFFF">MEMBER INFO</font></b></td>
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
<center>
<table width="90%">
  <tbody>
    <tr>
      <td vAlign="top" align="left" width="30%" bgColor="#141721">
        <p style="MARGIN-LEFT: 10px"><b><font face="Verdana" size="2">Username</font></b></p>
      </td>
      <td vAlign="top" align="left" width="70%" bgColor="#141721">
        <p style="margin-left: 10px"><font face="Verdana" size="2"><? print "$username"; ?></font></td>
    </tr>
    <tr>
      <td vAlign="top" align="left" width="30%" bgColor="#141721">
        <p style="margin-left: 10px"><b><font face="Verdana" size="2">Gaming Name</font></b></td>
      <td vAlign="top" align="left" width="70%" bgColor="#141721">
        <p style="margin-left: 10px"><font face="Verdana" size="2"><? print "$dfname"; ?></font></td>
    </tr>
    <tr>
      <td vAlign="top" align="left" width="30%" bgColor="#141721">
        <p style="margin-left: 10px"><b><font face="Verdana" size="2">Team Name</font></b></td>
      <td vAlign="top" align="left" width="70%" bgColor="#141721">
        <p style="margin-left: 10px"><font face="Verdana" size="2">
<?
switch (isset($team)) {
     case TRUE:
		print $team;
           break;
     case FALSE:
		print "Not on A Team";
           break;
}
	if (isset($leader)) {
		print " (Leader)";
}
?></font></td>
    </tr>
    <tr>
      <td vAlign="top" align="left" width="30%" bgColor="#141721">
        <p style="margin-left: 10px"><b><font face="Verdana" size="2">Real Name</font></b></td>
      <td vAlign="top" align="left" width="70%" bgColor="#141721">
        <p style="margin-left: 10px"><font face="Verdana" size="2"><? print "$realname"; ?></font></td>
    </tr>
    <tr>
      <td vAlign="top" align="left" width="30%" bgColor="#141721">
        <p style="margin-left: 10px"><b><font face="Verdana" size="2">ICQ Number</font></b></td>
      <td vAlign="top" align="left" width="70%" bgColor="#141721">
        <p style="margin-left: 10px"><font face="Verdana" size="2"><? print "$icq"; ?></font></td>
    </tr>
    <tr>
      <td vAlign="top" align="left" width="30%" bgColor="#141721">
        <p style="margin-left: 10px"><b><font face="Verdana" size="2">AIM SN</font></b></td>
      <td vAlign="top" align="left" width="70%" bgColor="#141721">
        <p style="margin-left: 10px"><font face="Verdana" size="2"><? print "$aim"; ?></font></td>
    </tr>
    <tr>
      <td vAlign="top" align="left" width="30%" bgColor="#141721">
        <p style="margin-left: 10px"><b><font face="Verdana" size="2">MSN Email</font></b></td>
      <td vAlign="top" align="left" width="70%" bgColor="#141721">
        <p style="margin-left: 10px"><font face="Verdana" size="2"><? print "$msn"; ?></font></td>
    </tr>
    <tr>
      <td vAlign="top" align="left" width="30%" bgColor="#141721">
        <p style="margin-left: 10px"><b><font face="Verdana" size="2">Birthday</font></b></td>
      <td vAlign="top" align="left" width="70%" bgColor="#141721">
        <p style="margin-left: 10px"><font face="Verdana" size="2"><? print "$byear $bmonth $bday"; ?></font></td>
    </tr>
    <tr>
      <td vAlign="top" align="left" width="30%" bgColor="#141721">
        <p style="MARGIN-LEFT: 10px"><b><font face="Verdana" size="2">City</font></b></p>
      </td>
      <td vAlign="top" align="left" width="70%" bgColor="#141721">
        <p style="margin-left: 10px"><font face="Verdana" size="2"><? print "$city"; ?></font></td>
    </tr>
    <tr>
      <td vAlign="top" align="left" width="30%" bgColor="#141721">
        <p style="margin-left: 10px"><b><font face="Verdana" size="2">State</font></b></td>
      <td vAlign="top" align="left" width="70%" bgColor="#141721">
        <p style="margin-left: 10px"><font face="Verdana" size="2"><? print "$state"; ?></font></td>
    </tr>
    <tr>
      <td vAlign="top" align="left" width="30%" bgColor="#141721">
        <p style="margin-left: 10px"><b><font face="Verdana" size="2">Country</font></b></td>
      <td vAlign="top" align="left" width="70%" bgColor="#141721">
        <p style="margin-left: 10px"><font face="Verdana" size="2"><? print "$country"; ?></font></td>
    </tr>
  </tbody>
</table>
</center>
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