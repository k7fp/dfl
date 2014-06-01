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
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
$username = $_POST['username']; 
$password = $_POST['password'];
$stuff = mysql_query("SELECT * FROM user WHERE username='".$username."' AND password='".$password."'") or die("MySQL Login Error: ".mysql_error()); 
if (mysql_num_rows($stuff) > 0) { 
session_start();
$_SESSION['username'] = $username;
header("Location: index.php");

} else { 
header("Location: index.php"); 
} 
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
        <p style="margin-left: 10"><b><font face="Verdana" size="2" color="#FFFFFF">DFL HOMEPAGE</font></b></td>
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
    <table border="0" cellpadding="0" cellspacing="1" width="90%">
      <tr>
        <td width="50%" valign="top">
          <div align="right">
            <table border="0" cellpadding="0" cellspacing="1" width="100%">


              <tr>
                <td width="50%" bgcolor="#222739" height="18">
                  <p align="center" style="margin-left: 10"><font face="Verdana" size="2"><b>HEADLINES</b></font></td>
              </tr>
<?
		$sql  = " SELECT * FROM schedule ORDER BY week DESC";
        $sql .= " LIMIT 1 ";
		$rs = mysql_query($sql,$cid);
		$row = mysql_fetch_assoc($rs);
		$week = $row["week"];
		$date = $row["date"];
		$type = $row["type"];
		$ateam1 = $row["ateam1"];
		$bteam1 = $row["bteam1"];
		$cteam1 = $row["cteam1"];
		$dteam1 = $row["dteam1"];
		$eteam1 = $row["eteam1"];
		$fteam1 = $row["fteam1"];
		$gteam1 = $row["gteam1"];
		$hteam1 = $row["hteam1"];

	if (isset($ateam1)) {
		$total = '1 Game';
}
	if (isset($ateam1, $bteam1)) {
		$total = '2 Games';
}
	if (isset($ateam1, $bteam1, $cteam1)) {
		$total = '3 Games';
}
	if (isset($ateam1, $bteam1, $cteam1, $dteam1)) {
		$total = '4 Games';
}
	if (isset($ateam1, $bteam1, $cteam1, $dteam1, $eteam1)) {
		$total = '5 Games';
}
	if (isset($ateam1, $bteam1, $cteam1, $dteam1, $eteam1, $fteam1)) {
		$total = '6 Games';
}
	if (isset($ateam1, $bteam1, $cteam1, $dteam1, $eteam1, $fteam1, $gteam1)) {
		$total = '7 Games';
}
	if (isset($ateam1, $bteam1, $cteam1, $dteam1, $eteam1, $fteam1, $gteam1, $hteam1)) {
		$total = '8 Games';
}
		$sql  = " SELECT * FROM team";
		$sql .= " WHERE rank = 1";
		$rs = mysql_query($sql,$cid);
		$row = mysql_fetch_assoc($rs);
		$topteam = $row["name"];

		$sql  = " SELECT * FROM team";
		$sql .= " WHERE rank = 1 ";
		$rs = mysql_query($sql,$cid);
		$row = mysql_fetch_assoc($rs);
		$topteam = $row["name"];

		$sql  = " SELECT * FROM news ORDER BY id DESC";
        $sql .= " LIMIT 5";
		$rs = mysql_query($sql, $cid);
 	   if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
 	   while ($row = mysql_fetch_array($rs)) 
 	   {
		$headline = $row["title"];
	echo"
              <tr>
                <td width=\"50%\" bgcolor=\"#191919\">
                  <p style=\"margin-left: 10\"><font face=\"Verdana\" size=\"1\">$headline</font></td>
              </tr>
";
}
switch (is_null($topteam)) {
     case TRUE:
	$topteam = 'Pending';
           break;
     case FALSE:
           break;
}
switch (is_null($week)) {
     case TRUE:
	$topteam = 'N/A';
	$week = 'N/A';
	$date = 'N/A';
	$type = 'N/A';
	$total = 'N/A';
           break;
     case FALSE:
           break;
}
?>
            </table>
          </div>
        </td>
        <td width="50%" valign="top">
          <div align="left">
          <table border="0" cellpadding="0" cellspacing="1" width="100%">
            <tr>
              <td width="50%" bgcolor="#222739" align="right" colspan="2" height="18">
                <p align="center" style="margin-right: 10"><b><font face="Verdana" size="2">LEAGUE
                STATS</font></b></td>
            </tr>
            <tr>
              <td width="25%" bgcolor="#191919" align="right">
                <p style="margin-right: 10"><font face="Verdana" size="1">#1 Team</font></td>
              <td width="25%" bgcolor="#191919" align="left">
                <p style="margin-left: 10"><b><font face="Verdana" size="1"><? print $topteam; ?></font></b></td>
            </tr>
            <tr>
              <td width="25%" bgcolor="#191919" align="right">
                <p style="margin-left: 10; margin-right: 10"><font face="Verdana" size="1">Week</font></td>
              <td width="25%" bgcolor="#191919" align="left">
                <p style="margin-left: 10"><b><font face="Verdana" size="1"><? print $week; ?></font></b></td>
            </tr>
            <tr>
              <td width="25%" bgcolor="#191919" align="right">
                <p style="margin-left: 10; margin-right: 10"><font face="Verdana" size="1">Date</font></td>
              <td width="25%" bgcolor="#191919" align="left">
                <p style="margin-left: 10"><b><font face="Verdana" size="1"><? print $date; ?></font></b></td>
            </tr>
            <tr>
              <td width="25%" bgcolor="#191919" align="right">
                <p style="margin-left: 10; margin-right: 10"><font face="Verdana" size="1">Game Type</font></td>
              <td width="25%" bgcolor="#191919" align="left">
                <p style="margin-left: 10"><b><font face="Verdana" size="1"><? print $type; ?></font></b></td>
            </tr>
            <tr>
              <td width="25%" bgcolor="#191919" align="right">
                <p style="margin-left: 10; margin-right: 10"><font face="Verdana" size="1">Matches</font></td>
              <td width="25%" bgcolor="#191919" align="left">
                <p style="margin-left: 10"><b><font face="Verdana" size="1"><? print $total; ?></font></b></td>
            </tr>
          </table>
          </div>
        </td>
      </tr>
    </table>
  </center>
        <p align="center"><font face="Verdana" size="1">&nbsp;</font>
<?
		$sql  = " SELECT * FROM team";
		$sql .= " WHERE rank = 1 ";
		$rs = mysql_query($sql,$cid);
		$row = mysql_fetch_assoc($rs);
		$topteam = $row["name"];

		$sql  = " SELECT * FROM news ORDER BY id DESC";
		$rs = mysql_query($sql, $cid);
 	   if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
 	   while ($row = mysql_fetch_array($rs)) 
 	   {
        $title = $row["title"];
        $time = $row["time"];
        $author = $row["author"];
        $news = $row["news"];
        print "
      <center>
      <table cellSpacing=\"0\" cellPadding=\"0\" width=\"90%\" border=\"0\">
          <tr>
            <td vAlign=\"top\"><b><font face=\"Verdana\" size=\"2\" color=\"#C0C0C0\">$title - </font></b>
              <font color=\"#696969\"><font face=\"Verdana\" size=\"1\">Posted
              by $author on </font><font face=\"Verdana\" size=\"1\">$time</font></font>
              <p style=\"margin-left: 50\"><font face=\"Verdana\" size=\"2\" color=\"#FFFFFF\">$news</font></p>
              <p align=\"center\" style=\"margin-bottom: 20\"><font face=\"Verdana\" size=\"2\" color=\"#3F3F3F\">---------------------</font></td>
          </tr>
      </table>
	</center>
";
}
?>
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