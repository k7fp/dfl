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
		$whatweek = $_GET["week"];
		$name = $_GET["winner"];
		$sql  = " SELECT * FROM schedule ";
		$sql .= " WHERE week = '$whatweek' ";
		$rs = mysql_query($sql,$cid);
		$row = mysql_fetch_array($rs);
		$week = $row["week"];
		$date = $row["date"];
		$type = $row["type"];
		$ateam1 = $row["ateam1"];
		$ateam2 = $row["ateam2"];
		$adate = $row["adate"];
		$ateam1score = $row["ateam1score"];
		$ateam2score = $row["ateam2score"];
		$awinner = $row["awinner"];
		$aplayed = $row["aplayed"];
		$acomment = $row["acomment"];
		$areporter = $row["areporter"];
		$bteam1 = $row["bteam1"];
		$bteam2 = $row["bteam2"];
		$bdate = $row["bdate"];
		$bteam1score = $row["bteam1score"];
		$bteam2score = $row["bteam2score"];
		$bwinner = $row["bwinner"];
		$bplayed = $row["bplayed"];
		$bcomment = $row["bcomment"];
		$breporter = $row["breporter"];
		$cteam1 = $row["cteam1"];
		$cteam2 = $row["cteam2"];
		$cdate = $row["cdate"];
		$cteam1score = $row["cteam1score"];
		$cteam2score = $row["cteam2score"];
		$cwinner = $row["cwinner"];
		$cplayed = $row["cplayed"];
		$ccomment = $row["ccomment"];
		$creporter = $row["creporter"];
		$dteam1 = $row["dteam1"];
		$dteam2 = $row["dteam2"];
		$ddate = $row["ddate"];
		$dteam1score = $row["dteam1score"];
		$dteam2score = $row["dteam2score"];
		$dwinner = $row["dwinner"];
		$dplayed = $row["dplayed"];
		$dcomment = $row["dcomment"];
		$dreporter = $row["dreporter"];
		$eteam1 = $row["eteam1"];
		$eteam2 = $row["eteam2"];
		$edate = $row["edate"];
		$eteam1score = $row["eteam1score"];
		$eteam2score = $row["eteam2score"];
		$ewinner = $row["ewinner"];
		$eplayed = $row["eplayed"];
		$ecomment = $row["ecomment"];
		$ereporter = $row["ereporter"];
		$fteam1 = $row["fteam1"];
		$fteam2 = $row["fteam2"];
		$fdate = $row["fdate"];
		$fteam1score = $row["fteam1score"];
		$fteam2score = $row["fteam2score"];
		$fwinner = $row["fwinner"];
		$fplayed = $row["fplayed"];
		$fcomment = $row["fcomment"];
		$freporter = $row["freporter"];
		$gteam1 = $row["gteam1"];
		$gteam2 = $row["gteam2"];
		$gdate = $row["gdate"];
		$gteam1score = $row["gteam1score"];
		$gteam2score = $row["gteam2score"];
		$gwinner = $row["gwinner"];
		$gplayed = $row["gplayed"];
		$gcomment = $row["gcomment"];
		$greporter = $row["greporter"];
		$hteam1 = $row["hteam1"];
		$hteam2 = $row["hteam2"];
		$hdate = $row["hdate"];
		$hteam1score = $row["hteam1score"];
		$hteam2score = $row["hteam2score"];
		$hwinner = $row["hwinner"];
		$hplayed = $row["hplayed"];
		$hcomment = $row["hcomment"];
		$hreporter = $row["hreporter"];

		if (is_null($whatweek)) { print "<br><center><font face=\"Verdana\" size=\"2\" color=\"#C0C0C0\">Your IP ".$_SERVER['REMOTE_ADDR']." Has Been Logged.<br>Click <a href=\"javascript:history.back(1)\"> Here</a> To Go Back.</font></center>";
		die;
}
		if (is_null($name)) { print "<br><center><font face=\"Verdana\" size=\"2\" color=\"#C0C0C0\">Your IP ".$_SERVER['REMOTE_ADDR']." Has Been Logged.<br>Click <a href=\"javascript:history.back(1)\"> Here</a> To Go Back.</font></center>";
		die;
}
		if (is_null($week)) { print "<br><center><font face=\"Verdana\" size=\"2\" color=\"#C0C0C0\">Week Does Not Exist!<br>Your IP ".$_SERVER['REMOTE_ADDR']." Has Been Logged.<br>Click <a href=\"javascript:history.back(1)\"> Here</a> To Go Back.</font></center>";
		die;
}

	if ($name == $ateam1) {
		$opponent = $ateam2;
		$zcomment = $acomment;
		$reporter = $areporter;
		$matchdate = $adate;
		$whowin = $awinner;
		$team1score = $ateam1score;
		$team2score = $ateam2score;
}
	if ($name == $ateam2) {
		$opponent = $ateam1;
		$zcomment = $acomment;
		$reporter = $areporter;
		$matchdate = $adate;
		$whowin = $awinner;
		$team1score = $ateam2score;
		$team2score = $ateam1score;
}
	if ($name == $bteam1) {
		$opponent = $bteam2;
		$zcomment = $bcomment;
		$reporter = $breporter;
		$matchdate = $bdate;
		$whowin = $bwinner;
		$team1score = $bteam1score;
		$team2score = $bteam2score;
}
	if ($name == $bteam2) {
		$opponent = $bteam1;
		$zcomment = $bcomment;
		$reporter = $breporter;
		$matchdate = $bdate;
		$whowin = $bwinner;
		$team1score = $bteam2score;
		$team2score = $bteam1score;
}
	if ($name == $cteam1) {
		$opponent = $cteam2;
		$zcomment = $ccomment;
		$reporter = $creporter;
		$matchdate = $cdate;
		$whowin = $cwinner;
		$team1score = $cteam1score;
		$team2score = $cteam2score;
}
	if ($name == $cteam2) {
		$opponent = $cteam1;
		$zcomment = $ccomment;
		$reporter = $creporter;
		$matchdate = $cdate;
		$whowin = $cwinner;
		$team1score = $cteam2score;
		$team2score = $cteam1score;
}
	if ($name == $dteam1) {
		$opponent = $dteam2;
		$zcomment = $dcomment;
		$reporter = $dreporter;
		$matchdate = $ddate;
		$whowin = $dwinner;
		$team1score = $dteam1score;
		$team2score = $dteam2score;
}
	if ($name == $dteam2) {
		$opponent = $dteam1;
		$zcomment = $dcomment;
		$reporter = $dreporter;
		$matchdate = $ddate;
		$whowin = $dwinner;
		$team1score = $dteam2score;
		$team2score = $dteam1score;
}
	if ($name == $eteam1) {
		$opponent = $eteam2;
		$zcomment = $ecomment;
		$reporter = $ereporter;
		$matchdate = $edate;
		$whowin = $ewinner;
		$team1score = $eteam1score;
		$team2score = $eteam2score;
}
	if ($name == $eteam2) {
		$opponent = $eteam1;
		$zcomment = $ecomment;
		$reporter = $ereporter;
		$matchdate = $edate;
		$whowin = $ewinner;
		$team1score = $eteam2score;
		$team2score = $eteam1score;
}
	if ($name == $fteam1) {
		$opponent = $fteam2;
		$zcomment = $fcomment;
		$reporter = $freporter;
		$matchdate = $fdate;
		$whowin = $fwinner;
		$team1score = $fteam1score;
		$team2score = $fteam2score;
}
	if ($name == $fteam2) {
		$opponent = $fteam1;
		$zcomment = $fcomment;
		$reporter = $freporter;
		$matchdate = $fdate;
		$whowin = $fwinner;
		$team1score = $fteam2score;
		$team2score = $fteam1score;
}
	if ($name == $gteam1) {
		$opponent = $gteam2;
		$zcomment = $gcomment;
		$reporter = $greporter;
		$matchdate = $gdate;
		$whowin = $gwinner;
		$team1score = $gteam1score;
		$team2score = $gteam2score;
}
	if ($name == $gteam2) {
		$opponent = $gteam1;
		$zcomment = $gcomment;
		$reporter = $greporter;
		$matchdate = $gdate;
		$whowin = $gwinner;
		$team1score = $gteam2score;
		$team2score = $gteam1score;
}
	if ($name == $hteam1) {
		$opponent = $hteam2;
		$zcomment = $hcomment;
		$reporter = $hreporter;
		$matchdate = $hdate;
		$whowin = $hwinner;
		$team1score = $hteam1score;
		$team2score = $hteam2score;
}
	if ($name == $hteam2) {
		$opponent = $hteam1;
		$zcomment = $hcomment;
		$reporter = $hreporter;
		$matchdate = $hdate;
		$whowin = $hwinner;
		$team1score = $hteam2score;
		$team2score = $hteam1score;
}

	if ($whowin == $opponent)
{ print "<br><center><font face=\"Verdana\" size=\"2\" color=\"#C0C0C0\">Not Wise.<br>Your IP ".$_SERVER['REMOTE_ADDR']." Has Been Logged.<br>Click <a href=\"javascript:history.back(1)\"> Here</a> To Go Back.</font></center>";
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
        <p style="margin-left: 10"><b><font face="Verdana" size="2" color="#FFFFFF">MATCH DETAIL</font></b></td>
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
        <td vAlign="top" align="middle" bgColor="#363f5a" colSpan="2">
          <p style="margin-left: 10px" align="center"><b><font face="Verdana" size="2">Match Detail for <? print "$name"; ?></font></b></td>
      </tr>
      <tr>
        <td vAlign="top" align="left" width="30%" bgColor="#141721">
          <p style="MARGIN-LEFT: 10px"><b><font face="Verdana" size="2">Week
          Number</font></b></p>
        </td>
        <td vAlign="top" align="left" width="70%" bgColor="#141721">
          <p style="margin-left: 10px"><font face="Verdana" size="2"><? print "$week"; ?></font></td>
      </tr>
      <tr>
        <td vAlign="top" align="left" width="30%" bgColor="#141721">
          <p style="margin-left: 10px"><b><font face="Verdana" size="2">Game
          Type</font></b></td>
        <td vAlign="top" align="left" width="70%" bgColor="#141721">
          <p style="margin-left: 10px"><font face="Verdana" size="2"><? print "$type"; ?></font></td>
      </tr>
      <tr>
        <td vAlign="top" align="left" width="30%" bgColor="#141721">
          <p style="margin-left: 10px"><b><font face="Verdana" size="2">Match
          Reporter</font></b></td>
        <td vAlign="top" align="left" width="70%" bgColor="#141721">
          <p style="margin-left: 10px"><font face="Verdana" size="2"><? print "$reporter"; ?></font></td>
      </tr>
      <tr>
        <td vAlign="top" align="left" width="30%" bgColor="#141721">
          <p style="margin-left: 10px"><b><font face="Verdana" size="2">Reported
          On</font></b></td>
        <td vAlign="top" align="left" width="70%" bgColor="#141721">
          <p style="margin-left: 10px"><font face="Verdana" size="2"><? print "$matchdate"; ?></font></td>
      </tr>
      <tr>
        <td vAlign="top" align="left" width="30%" bgColor="#141721">
          <p style="margin-left: 10px"><b><font face="Verdana" size="2">Winner</font></b></td>
        <td vAlign="top" align="left" width="70%" bgColor="#141721">
          <p style="margin-left: 10px"><font face="Verdana" size="2"><? print "$whowin"; ?></font></td>
      </tr>
      <tr>
        <td vAlign="top" align="left" width="30%" bgColor="#141721">
          <p style="margin-left: 10px"><b><font face="Verdana" size="2">Defeated</font></b></td>
        <td vAlign="top" align="left" width="70%" bgColor="#141721">
          <p style="margin-left: 10px"><font face="Verdana" size="2"><? print "$opponent"; ?></font></td>
      </tr>
      <tr>
        <td vAlign="top" align="left" width="30%" bgColor="#141721">
          <p style="margin-left: 10px"><b><font face="Verdana" size="2">Map
          Count</font></b></td>
        <td vAlign="top" align="left" width="70%" bgColor="#141721">
          <p style="MARGIN-LEFT: 10px"><font face="Verdana" size="2"><? print "$team1score - $team2score"; ?></font></p>
        </td>
      </tr>
      <tr>
        <td vAlign="top" align="left" width="30%" bgColor="#141721">
          <p style="margin-left: 10px"><b><font face="Verdana" size="2">Comment</font></b></td>
        <td vAlign="top" align="left" width="70%" bgColor="#141721">
          <p style="margin-left: 10px"><font face="Verdana" size="2"><? print "$zcomment"; ?></font>
        </td>
      </tr>
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