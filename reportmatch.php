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
		$sql  = " SELECT * FROM schedule ORDER BY week DESC";
        $sql .= " LIMIT 1 ";
		$rs = mysql_query($sql,$cid);
		$row = mysql_fetch_assoc($rs);
		$ateam1 = $row["ateam1"];
		$ateam2 = $row["ateam2"];
		$bteam1 = $row["bteam1"];
		$bteam2 = $row["bteam2"];
		$cteam1 = $row["cteam1"];
		$cteam2 = $row["cteam2"];
		$dteam1 = $row["dteam1"];
		$dteam2 = $row["dteam2"];
		$eteam1 = $row["eteam1"];
		$eteam2 = $row["eteam2"];
		$fteam1 = $row["fteam1"];
		$fteam2 = $row["fteam2"];
		$gteam1 = $row["gteam1"];
		$gteam2 = $row["gteam2"];
		$hteam1 = $row["hteam1"];
		$hteam2 = $row["hteam2"];
		$aplayed = $row["aplayed"];
		$bplayed = $row["bplayed"];
		$cplayed = $row["cplayed"];
		$dplayed = $row["dplayed"];
		$eplayed = $row["eplayed"];
		$fplayed = $row["fplayed"];
		$gplayed = $row["gplayed"];
		$hplayed = $row["hplayed"];
		$sql  = " SELECT * FROM team";
		$sql .= " WHERE leader='".$username."' ";
		$rs = mysql_query($sql,$cid);
		$row = mysql_fetch_assoc($rs);
		$name = $row["name"];
	if ($aplayed == yes AND $ateam1 == $name) {
		$played = yes;
}
	if ($aplayed == yes AND $ateam2 == $name) {
		$played = yes;
}
	if ($bplayed == yes AND $bteam1 == $name) {
		$played = yes;
}
	if ($bplayed == yes AND $bteam2 == $name) {
		$played = yes;
}
	if ($cplayed == yes AND $cteam1 == $name) {
		$played = yes;
}
	if ($cplayed == yes AND $cteam2 == $name) {
		$played = yes;
}
	if ($dplayed == yes AND $dteam1 == $name) {
		$played = yes;
}
	if ($dplayed == yes AND $dteam2 == $name) {
		$played = yes;
}
	if ($eplayed == yes AND $eteam1 == $name) {
		$played = yes;
}
	if ($eplayed == yes AND $eteam2 == $name) {
		$played = yes;
}
	if ($fplayed == yes AND $fteam1 == $name) {
		$played = yes;
}
	if ($fplayed == yes AND $fteam2 == $name) {
		$played = yes;
}
	if ($gplayed == yes AND $gteam1 == $name) {
		$played = yes;
}
	if ($gplayed == yes AND $gteam2 == $name) {
		$played = yes;
}
	if ($hplayed == yes AND $hteam1 == $name) {
		$played = yes;
}
	if ($hplayed == yes AND $hteam2 == $name) {
		$played = yes;
}
switch ($played == yes) {
     case TRUE:
header("Location: index.php"); 
           break;
	 case FALSE;
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
		$sql  = " SELECT * FROM schedule ORDER BY week DESC";
        $sql .= " LIMIT 1 ";
		$rs = mysql_query($sql,$cid);
		$row = mysql_fetch_assoc($rs);
		$week = $row["week"];
		$sql  = " SELECT * FROM team";
		$sql .= " WHERE leader='".$username."' ";
		$rs = mysql_query($sql,$cid);
		$row = mysql_fetch_assoc($rs);
		$name = $row["name"];
		$wins = $row["wins"];
		$mapswon = $row["mapswon"];
		$mapslost = $row["mapslost"];
	if ($name == $ateam1) {
		$opponent = $ateam2;
		$zcomment = acomment;
		$reporter = areporter;
		$matchdate = adate;
		$whowin = awinner;
		$played = aplayed;
		$team1score = ateam1score;
		$team2score = ateam2score;
}
	if ($name == $ateam2) {
		$opponent = $ateam1;
		$zcomment = acomment;
		$reporter = areporter;
		$matchdate = adate;
		$whowin = awinner;
		$played = aplayed;
		$team1score = ateam2score;
		$team2score = ateam1score;
}
	if ($name == $bteam1) {
		$opponent = $bteam2;
		$zcomment = bcomment;
		$reporter = breporter;
		$matchdate = bdate;
		$whowin = bwinner;
		$played = bplayed;
		$team1score = bteam1score;
		$team2score = bteam2score;
}
	if ($name == $bteam2) {
		$opponent = $bteam1;
		$zcomment = bcomment;
		$reporter = breporter;
		$matchdate = bdate;
		$whowin = bwinner;
		$played = bplayed;
		$team1score = bteam2score;
		$team2score = bteam1score;
}
	if ($name == $cteam1) {
		$opponent = $cteam2;
		$zcomment = ccomment;
		$reporter = creporter;
		$matchdate = cdate;
		$whowin = cwinner;
		$played = cplayed;
		$team1score = cteam1score;
		$team2score = cteam2score;
}
	if ($name == $cteam2) {
		$opponent = $cteam1;
		$zcomment = ccomment;
		$reporter = creporter;
		$matchdate = cdate;
		$whowin = cwinner;
		$played = cplayed;
		$team1score = cteam2score;
		$team2score = cteam1score;
}
	if ($name == $dteam1) {
		$opponent = $dteam2;
		$zcomment = dcomment;
		$reporter = dreporter;
		$matchdate = ddate;
		$whowin = dwinner;
		$played = dplayed;
		$team1score = dteam1score;
		$team2score = dteam2score;
}
	if ($name == $dteam2) {
		$opponent = $dteam1;
		$zcomment = dcomment;
		$reporter = dreporter;
		$matchdate = ddate;
		$whowin = dwinner;
		$played = dplayed;
		$team1score = dteam2score;
		$team2score = dteam1score;
}
	if ($name == $eteam1) {
		$opponent = $eteam2;
		$zcomment = ecomment;
		$reporter = ereporter;
		$matchdate = edate;
		$whowin = ewinner;
		$played = eplayed;
		$team1score = eteam1score;
		$team2score = eteam2score;
}
	if ($name == $eteam2) {
		$opponent = $eteam1;
		$zcomment = ecomment;
		$reporter = ereporter;
		$matchdate = edate;
		$whowin = ewinner;
		$played = eplayed;
		$team1score = eteam2score;
		$team2score = eteam1score;
}
	if ($name == $fteam1) {
		$opponent = $fteam2;
		$zcomment = fcomment;
		$reporter = freporter;
		$matchdate = fdate;
		$whowin = fwinner;
		$played = fplayed;
		$team1score = fteam1score;
		$team2score = fteam2score;
}
	if ($name == $fteam2) {
		$opponent = $fteam1;
		$zcomment = fcomment;
		$reporter = freporter;
		$matchdate = fdate;
		$whowin = fwinner;
		$played = fplayed;
		$team1score = fteam2score;
		$team2score = fteam1score;
}
	if ($name == $gteam1) {
		$opponent = $gteam2;
		$zcomment = gcomment;
		$reporter = greporter;
		$matchdate = gdate;
		$whowin = gwinner;
		$played = gplayed;
		$team1score = gteam1score;
		$team2score = gteam2score;
}
	if ($name == $gteam2) {
		$opponent = $gteam1;
		$zcomment = gcomment;
		$reporter = greporter;
		$matchdate = gdate;
		$whowin = gwinner;
		$played = gplayed;
		$team1score = gteam2score;
		$team2score = gteam1score;
}
	if ($name == $hteam1) {
		$opponent = $hteam2;
		$zcomment = hcomment;
		$reporter = hreporter;
		$matchdate = hdate;
		$whowin = hwinner;
		$played = hplayed;
		$team1score = hteam1score;
		$team2score = hteam2score;
}
	if ($name == $hteam2) {
		$opponent = $hteam1;
		$zcomment = hcomment;
		$reporter = hreporter;
		$matchdate = hdate;
		$whowin = hwinner;
		$played = hplayed;
		$team1score = hteam2score;
		$team2score = hteam1score;
}
		$sql  = " SELECT * FROM team";
		$sql .= " WHERE name='".$opponent."' ";
		$rs = mysql_query($sql,$cid);
		$row = mysql_fetch_assoc($rs);
		$opploses = $row["loses"];
		$oppmapswon = $row["mapswon"];
		$oppmapslost = $row["mapslost"];
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$date = date ("H:i:s of D F d Y");
		$teamscore = addslashes($_POST["teamscore"]);
        $opponentscore = addslashes($_POST["opponentscore"]);
		$team1gamewins = ++$wins;
		$team2gameloses = ++$opploses;
		$totalteam1mapswon = $mapswon + $teamscore;
		$totalteam1mapslost = $mapslost + $opponentscore;
		$totalteam2mapswon = $oppmapswon + $opponentscore;
		$totalteam2mapslost = $oppmapslost + $teamscore;
		$comment = addslashes($_POST["comment"]);
		$sql  = " UPDATE team SET";
		$sql .= "   wins = '$team1gamewins', ";
		$sql .= "   mapswon = '$totalteam1mapswon', ";
		$sql .= "   mapslost = '$totalteam1mapslost' ";
		$sql .= " WHERE leader ='".$username."' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
		$sql  = " UPDATE team SET";
		$sql .= "   loses = '$team2gameloses', ";
		$sql .= "   mapswon = '$totalteam2mapswon', ";
		$sql .= "   mapslost = '$totalteam2mapslost' ";
		$sql .= " WHERE name ='".$opponent."' ";
        $sql .= " LIMIT 1 ";
		$result = mysql_query($sql,$cid);
        if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
		$sql  = " UPDATE schedule SET";
		$sql .= "  $team1score = '$teamscore', ";
		$sql .= "  $team2score = '$opponentscore', ";
		$sql .= "  $zcomment = '$comment', ";
		$sql .= "  $matchdate = '$date', ";
		$sql .= "  $reporter = '$username', ";
		$sql .= "  $whowin = '$name', ";
		$sql .= "  $played = 'yes' ";
		$sql .= " WHERE week ='".$week."' ";
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
        <p style="margin-left: 10"><b><font face="Verdana" size="2" color="#FFFFFF">REPORT MATCH</font></b></td>
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
<form name="dfl" action="reportmatch.php" method="POST">
  <table border="0" cellpadding="0" cellspacing="1" width="95%">
    <tr>
      <td width="150" bgcolor="#141721" align="left" valign="top" height="30">
        <p style="margin-left: 10"><b><font size="2" face="Verdana">Victory Team</font></b></td>
      <td width="350" bgcolor="#141721" align="left" valign="top" height="30">
        <p style="margin-left: 10"><font face="Verdana" size="2"><? print "$name"; ?></font></td>
    </tr>
    <tr>
      <td width="150" bgcolor="#141721" align="left" valign="top" height="30">
        <p style="margin-left: 10"><b><font size="2" face="Verdana">Defeated
        Team</font></b></td>
      <td width="350" bgcolor="#141721" align="left" valign="top" height="30">
        <p style="margin-left: 10"><font face="Verdana" size="2"><? print "$opponent"; ?></font></td>
    </tr>
    <tr>
      <td width="150" bgcolor="#141721" align="left" valign="top" height="30">
        <p style="margin-left: 10"><b><font size="2" face="Verdana">Score</font></b></td>
      <td width="350" bgcolor="#141721" align="left" valign="top" height="30">
        <div align="center">
          <center>
          <table border="0" cellpadding="0" cellspacing="1" width="100%">
            <tr>
              <td width="50%">
                <p style="margin-left: 10"><font face="Verdana" size="2"><? print "$name"; ?> <input name="teamscore" size="5" style="font-family: Verdana; font-size: 8pt; font-weight: bold; background-color: #000000; color: #C0C0C0; border-style: solid; border-color: #141721" $password"; ?></font></td>
              <td width="50%"><font face="Verdana" size="2"><? print "$opponent"; ?> <input name="opponentscore" size="5" style="font-family: Verdana; font-size: 8pt; font-weight: bold; background-color: #000000; color: #C0C0C0; border-style: solid; border-color: #141721" $password"; ?></font></td>
            </tr>
          </table>
          </center>
        </div>
      </td>
    </tr>
    <tr>
      <td width="150" bgcolor="#141721" align="left" valign="top">
        <p style="margin-left: 10"><b><font size="2" face="Verdana">Comment</font></b></td>
      <td width="350" bgcolor="#141721" align="left" valign="top">
        <p style="margin-left: 10"><textarea rows="5" name="comment" cols="40" style="font-family: Verdana; font-size: 8pt; font-weight: bold; background-color: #000000; color: #C0C0C0; border-style: solid; border-color: #141721"></textarea></td>
    </tr>
    <tr>
      <td width="500" height="28" bgcolor="#141721" colspan="2">
        <p style="margin-left: 10" align="center"><font size="2" face="Verdana"><input style="color: #C0C0C0; background-color: #000000; font-family: Verdana; font-size: 8pt; font-weight: bold; border-style: solid; border-color: #141721" type="submit" value="Report Match"><input style="color: #C0C0C0; background-color: #000000; font-family: Verdana; font-size: 8pt; font-weight: bold; border-style: solid; border-color: #141721" type="reset" value="Reset"></font></td>
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