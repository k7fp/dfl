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
        <p style="margin-left: 10"><b><font face="Verdana" size="2" color="#FFFFFF">SEASON STANDINGS</font></b></td>
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
  <table width="95%">
      <tr>
        <td align="left" width="10%" bgColor="#141721">
          <p style="margin-left: 10"><font face="Verdana" size="2"><b>Rank</b></font></td>
        <td align="left" width="30%" bgColor="#141721">
          <p style="margin-left: 10"><font face="Verdana" size="2"><b>Name</b></font></td>
        <td align="left" width="10%" bgColor="#141721">
          <p style="margin-left: 10"><font face="Verdana" size="2"><b>Wins</b></font></td>
        <td align="left" width="10%" bgColor="#141721">
          <p style="margin-left: 10"><font face="Verdana" size="2"><b>Loses</b></font></td>
        <td align="left" width="10%" bgColor="#141721">
          <p style="margin-left: 10"><font face="Verdana" size="2"><b>PCT</b></font></td>
        <td align="left" width="15%" bgColor="#141721">
          <p style="margin-left: 10"><font face="Verdana" size="2"><b>For</b></font></td>
        <td align="left" width="15%" bgColor="#141721">
          <p style="margin-left: 10"><font face="Verdana" size="2"><b>Against</b></font></td>
      </tr>
<?
		$sql  = " SELECT * FROM team ORDER BY rank";
		$rs = mysql_query($sql,$cid);
  	  while ($row = mysql_fetch_array($rs)) 
    {

		$rank = $row["rank"];
		$name = $row["name"];
		$wins = $row["wins"];
		$loses = $row["loses"];
		$mapswon = $row["mapswon"];
		$mapslost = $row["mapslost"];
	if ($wins + $loses > 0) {
		$percentile = number_format($wins / ($wins + $loses),3);
} else {
		$percentile = number_format(0,3);
}
echo"
      <tr>
        <td align=\"left\" width=\"10%\" bgColor=\"#141721\">
          <p style=\"margin-left: 10\"><font face=\"Verdana\" size=\"2\">$rank</font></td>
        <td align=\"left\" width=\"30%\" bgColor=\"#141721\">
          <p style=\"margin-left: 10\"><font face=\"Verdana\" size=\"2\">$name</font></td>
        <td align=\"left\" width=\"10%\" bgColor=\"#141721\">
          <p style=\"margin-left: 10\"><font face=\"Verdana\" size=\"2\">$wins</font></td>
        <td align=\"left\" width=\"10%\" bgColor=\"#141721\">
          <p style=\"margin-left: 10\"><font face=\"Verdana\" size=\"2\">$loses</font></td>
        <td align=\"left\" width=\"10%\" bgColor=\"#141721\">
          <p style=\"margin-left: 10\"><font face=\"Verdana\" size=\"2\">$percentile</font></td>
        <td align=\"left\" width=\"15%\" bgColor=\"#141721\">
          <p style=\"margin-left: 10\"><font face=\"Verdana\" size=\"2\">$mapswon</font></td>
        <td align=\"left\" width=\"15%\" bgColor=\"#141721\">
          <p style=\"margin-left: 10\"><font face=\"Verdana\" size=\"2\">$mapslost</font></td>
      </tr>
";
}?>
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