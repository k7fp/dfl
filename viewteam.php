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
		$sql  = " SELECT * FROM team ";
		$sql .= " WHERE name = '$name' ";
		$rs = mysql_query($sql,$cid);
		if (is_null($name)) { print "<br><center><font face=\"Verdana\" size=\"2\" color=\"#C0C0C0\">Your IP ".$_SERVER['REMOTE_ADDR']." Has Been Logged.<br>Click <a href=\"javascript:history.back(1)\"> Here</a> To Go Back.</font></center>";
		die;
}
		$row = mysql_fetch_array($rs);
		$team = $row["name"];
		$tag = $row["tag"];
		$theleader = $row["leader"];
		$rank = $row["rank"];
		$wins = $row["wins"];
		$loses = $row["loses"];
		$mapswon = $row["mapswon"];
		$mapslost = $row["mapslost"];
		$website = $row["website"];
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

		if (is_null($team)) { print "<br><center><font face=\"Verdana\" size=\"2\" color=\"#C0C0C0\">Team Does Not Exist!<br>Your IP ".$_SERVER['REMOTE_ADDR']." Has Been Logged.<br>Click <a href=\"javascript:history.back(1)\"> Here</a> To Go Back.</font></center>";
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
        <p style="margin-left: 10"><b><font face="Verdana" size="2" color="#FFFFFF">TEAM INFORMATION</font></b></td>
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
      <td bgcolor="#363F5A" align="center" valign="top" colspan="5">
        <p style="margin-left: 10" align="center"><b><font face="Verdana" size="2">GENERAL INFORMATION</font></b></td>
    </tr>
    <tr>
      <td width="30%" bgcolor="#141721" align="left" valign="top">
        <p style="margin-left: 10"><b><font size="2" face="Verdana">Team Name</font></b></td>
      <td width="70%" bgcolor="#141721" align="left" valign="top" colspan="4">
        <p style="margin-left: 10"><font face="Verdana" size="2"><? print "$team"; ?></font></td>
    </tr>
    <tr>
      <td width="30%" bgcolor="#141721" align="left" valign="top">
        <p style="margin-left: 10"><b><font size="2" face="Verdana">Tags</font></b></td>
      <td width="70%" bgcolor="#141721" align="left" valign="top" colspan="4">
        <p style="margin-left: 10"><font face="Verdana" size="2"><? print "$tag"; ?></font></td>
    </tr>
    <tr>
      <td width="30%" bgcolor="#141721" align="left" valign="top">
        <p style="margin-left: 10"><b><font size="2" face="Verdana">Team Leader</font></b></td>
      <td width="70%" bgcolor="#141721" align="left" valign="top" colspan="4">
        <p style="margin-left: 10"><font face="Verdana" size="2"><? print "<a href=\"viewmember.php?name=$theleader\">$theleader</a>"; ?></font></td>
    </tr>
    <tr>
      <td width="30%" bgcolor="#141721" align="left" valign="top">
        <p style="margin-left: 10"><b><font size="2" face="Verdana">Team Website</font></b></td>
      <td width="70%" bgcolor="#141721" align="left" valign="top" colspan="4">
        <p style="margin-left: 10"><font face="Verdana" size="2"><? print "<a href=\"$website\" target=\"_blank\">$website</a>"; ?></font></td>
    </tr>
    <tr>
      <td width="30%" bgcolor="#141721" align="left" valign="top">
        <p style="margin-left: 10"><b><font size="2" face="Verdana">Current Rank</font></b></td>
      <td width="70%" bgcolor="#141721" align="left" valign="top" colspan="4">
        <p style="margin-left: 10"><font face="Verdana" size="2"><? print "$rank"; ?></font></td>
    </tr>
    <tr>
      <td width="30%" bgcolor="#141721" align="left" valign="top">
        <p style="margin-left: 10"><b><font size="2" face="Verdana">Victories</font></b></td>
      <td width="70%" bgcolor="#141721" align="left" valign="top" colspan="4">
        <p style="margin-left: 10"><font face="Verdana" size="2"><? print "$wins"; ?></font></td>
    </tr>
    <tr>
      <td width="30%" bgcolor="#141721" align="left" valign="top">
        <p style="margin-left: 10"><b><font size="2" face="Verdana">Defeats</font></b></td>
      <td width="70%" bgcolor="#141721" align="left" valign="top" colspan="4">
        <p style="margin-left: 10"><font face="Verdana" size="2"><? print "$loses"; ?></font></td>
    </tr>
    <tr>
      <td width="30%" bgcolor="#141721" align="left" valign="top">
        <p style="margin-left: 10"><b><font size="2" face="Verdana">Maps
        Won</font></b></td>
      <td width="70%" bgcolor="#141721" align="left" valign="top" colspan="4">
        <p style="margin-left: 10"><font face="Verdana" size="2"><? print "$mapswon"; ?></font></td>
    </tr>
    <tr>
      <td width="30%" bgcolor="#141721" align="left" valign="top">
        <p style="margin-left: 10"><b><font size="2" face="Verdana">Maps
        Lost</font></b></td>
      <td width="70%" bgcolor="#141721" align="left" valign="top" colspan="4">
        <p style="margin-left: 10"><font face="Verdana" size="2"><? print "$mapslost"; ?></font></td>
    </tr>
    <tr>
      <td width="30%" bgcolor="#141721" align="left" valign="top">
        <p style="margin-left: 10"><b><font size="2" face="Verdana">Rosters</font></b></td>
      <td width="70%" bgcolor="#141721" align="left" valign="top" colspan="4">
        <p style="margin-left: 10">
<?
	if (isset($roster1)) { print" <font face=\"Verdana\" size=\"2\"><a href=\"viewmember.php?name=$roster1\">$roster1</a></font><br> "; }
	if (isset($roster2)) { print" <font face=\"Verdana\" size=\"2\"><a href=\"viewmember.php?name=$roster2\">$roster2</a></font><br> "; }
	if (isset($roster3)) { print" <font face=\"Verdana\" size=\"2\"><a href=\"viewmember.php?name=$roster3\">$roster3</a></font><br> "; }
	if (isset($roster4)) { print" <font face=\"Verdana\" size=\"2\"><a href=\"viewmember.php?name=$roster4\">$roster4</a></font><br> "; }
	if (isset($roster5)) { print" <font face=\"Verdana\" size=\"2\"><a href=\"viewmember.php?name=$roster5\">$roster5</a></font><br> "; }
	if (isset($roster6)) { print" <font face=\"Verdana\" size=\"2\"><a href=\"viewmember.php?name=$roster6\">$roster6</a></font><br> "; }
	if (isset($roster7)) { print" <font face=\"Verdana\" size=\"2\"><a href=\"viewmember.php?name=$roster7\">$roster7</a></font><br> "; }
	if (isset($roster8)) { print" <font face=\"Verdana\" size=\"2\"><a href=\"viewmember.php?name=$roster8\">$roster8</a></font><br> "; }
	if (isset($roster9)) { print" <font face=\"Verdana\" size=\"2\"><a href=\"viewmember.php?name=$roster9\">$roster9</a></font><br> "; }
	if (isset($roster10)) { print" <font face=\"Verdana\" size=\"2\"><a href=\"viewmember.php?name=$roster10\">$roster10</a></font><br> "; }
	if (isset($roster11)) { print" <font face=\"Verdana\" size=\"2\"><a href=\"viewmember.php?name=$roster11\">$roster11</a></font><br> "; }
	if (isset($roster12)) { print" <font face=\"Verdana\" size=\"2\"><a href=\"viewmember.php?name=$roster12\">$roster12</a></font><br> "; }
	if (isset($roster13)) { print" <font face=\"Verdana\" size=\"2\"><a href=\"viewmember.php?name=$roster13\">$roster13</a></font><br> "; }
	if (isset($roster14)) { print" <font face=\"Verdana\" size=\"2\"><a href=\"viewmember.php?name=$roster14\">$roster14</a></font><br> "; }
	if (isset($roster15)) { print" <font face=\"Verdana\" size=\"2\"><a href=\"viewmember.php?name=$roster15\">$roster15</a></font><br> "; }
	if (isset($roster16)) { print" <font face=\"Verdana\" size=\"2\"><a href=\"viewmember.php?name=$roster16\">$roster16</a></font><br> "; }
	if (isset($roster17)) { print" <font face=\"Verdana\" size=\"2\"><a href=\"viewmember.php?name=$roster17\">$roster17</a></font><br> "; }
	if (isset($roster18)) { print" <font face=\"Verdana\" size=\"2\"><a href=\"viewmember.php?name=$roster18\">$roster18</a></font><br> "; }
	if (isset($roster19)) { print" <font face=\"Verdana\" size=\"2\"><a href=\"viewmember.php?name=$roster19\">$roster19</a></font><br> "; }
	if (isset($roster20)) { print" <font face=\"Verdana\" size=\"2\"><a href=\"viewmember.php?name=$roster20\">$roster20</a></font><br> "; }
?>
</td>
    </tr>
</table>
<table width="95%">
    <tr>
      <td bgcolor="#363F5A" align="center" valign="top" colspan="5">
        <p style="margin-left: 10" align="center"><b><font face="Verdana" size="2">CURRENT SEASON RECORD</font></b></td>
    </tr>
    <tr>
      <td width="17%" bgcolor="#141721" align="left" valign="top">
        <p style="margin-left: 10"><b><font size="2" face="Verdana">Week #</font></b></td>
      <td width="30%" bgcolor="#141721" align="left" valign="top">
        <p style="margin-left: 10"><b><font face="Verdana" size="2">Opponent</font></b></td>
      <td width="17%" bgcolor="#141721" align="left" valign="top">
        <p style="margin-left: 10"><b><font face="Verdana" size="2">Score</font></b></td>
      <td width="17%" bgcolor="#141721" align="left" valign="top">
        <p style="margin-left: 10"><b><font face="Verdana" size="2">Winner</font></b></td>
      <td width="17%" bgcolor="#141721" align="left" valign="top">
        <p style="margin-left: 10"><b><font face="Verdana" size="2">Info</font></b></td>
    </tr>
<?
		$sql  = " SELECT * FROM schedule ORDER BY week";
		$rs = mysql_query($sql,$cid);
  	  while ($row = mysql_fetch_array($rs)) 
    {
		$week = $row["week"];
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
		$awinner = $row["awinner"];
		$bwinner = $row["bwinner"];
		$cwinner = $row["cwinner"];
		$dwinner = $row["dwinner"];
		$ewinner = $row["ewinner"];
		$fwinner = $row["fwinner"];
		$gwinner = $row["gwinner"];
		$hwinner = $row["hwinner"];
		$ateam1score = $row["ateam1score"];
		$ateam2score = $row["ateam2score"];
		$bteam1score = $row["bteam1score"];
		$bteam2score = $row["bteam2score"];
		$cteam1score = $row["cteam1score"];
		$cteam2score = $row["cteam2score"];
		$dteam1score = $row["dteam1score"];
		$dteam2score = $row["dteam2score"];
		$eteam1score = $row["eteam1score"];
		$eteam2score = $row["eteam2score"];
		$fteam1score = $row["fteam1score"];
		$fteam2score = $row["fteam2score"];
		$gteam1score = $row["gteam1score"];
		$gteam2score = $row["gteam2score"];
		$hteam1score = $row["hteam1score"];
		$hteam2score = $row["hteam2score"];

	if ($team == $ateam1) {
		$opponent = $ateam2;
		$whowin = $awinner;
		$changed = 'yes';
		$team1score = $ateam1score;
		$team2score = $ateam2score;
}
	if ($team == $ateam2) {
		$opponent = $ateam1;
		$whowin = $awinner;
		$changed = 'yes';
		$team1score = $ateam2score;
		$team2score = $ateam1score;
}
	if ($team == $bteam1) {
		$opponent = $bteam2;
		$whowin = $bwinner;
		$changed = 'yes';
		$team1score = $bteam1score;
		$team2score = $bteam2score;
}
	if ($team == $bteam2) {
		$opponent = $bteam1;
		$whowin = $bwinner;
		$changed = 'yes';
		$team1score = $bteam2score;
		$team2score = $bteam1score;
}
	if ($team == $cteam1) {
		$opponent = $cteam2;
		$whowin = $cwinner;
		$changed = 'yes';
		$team1score = $cteam1score;
		$team2score = $cteam2score;
}
	if ($team == $cteam2) {
		$opponent = $cteam1;
		$whowin = $cwinner;
		$changed = 'yes';
		$team1score = $cteam2score;
		$team2score = $cteam1score;
}
	if ($team == $dteam1) {
		$opponent = $dteam2;
		$whowin = $dwinner;
		$changed = 'yes';
		$team1score = $dteam1score;
		$team2score = $dteam2score;
}
	if ($team == $dteam2) {
		$opponent = $dteam1;
		$whowin = $dwinner;
		$changed = 'yes';
		$team1score = $dteam2score;
		$team2score = $dteam1score;
}
	if ($team == $eteam1) {
		$opponent = $eteam2;
		$whowin = $ewinner;
		$changed = 'yes';
		$team1score = $eteam1score;
		$team2score = $eteam2score;
}
	if ($team == $eteam2) {
		$opponent = $eteam1;
		$whowin = $ewinner;
		$changed = 'yes';
		$team1score = $eteam2score;
		$team2score = $eteam1score;
}
	if ($team == $fteam1) {
		$opponent = $fteam2;
		$whowin = $fwinner;
		$changed = 'yes';
		$team1score = $fteam1score;
		$team2score = $fteam2score;
}
	if ($team == $fteam2) {
		$opponent = $fteam1;
		$whowin = $fwinner;
		$changed = 'yes';
		$team1score = $fteam2score;
		$team2score = $fteam1score;
}
	if ($team == $gteam1) {
		$opponent = $gteam2;
		$whowin = $gwinner;
		$changed = 'yes';
		$team1score = $gteam1score;
		$team2score = $gteam2score;
}
	if ($team == $gteam2) {
		$opponent = $gteam1;
		$whowin = $winner;
		$changed = 'yes';
		$team1score = $gteam2score;
		$team2score = $gteam1score;
}
	if ($team == $hteam1) {
		$opponent = $hteam2;
		$whowin = $hwinner;
		$changed = 'yes';
		$team1score = $hteam1score;
		$team2score = $hteam2score;
}
	if ($team == $hteam2) {
		$opponent = $hteam1;
		$whowin = $hwinner;
		$changed = 'yes';
		$team1score = $hteam2score;
		$team2score = $hteam1score;
}

switch (is_null($changed)) {
     case TRUE:
		$opponent = 'No Match';
		$whowin = 'N/A';
		$team1score = '-';
		$team2score = '-';
     case FALSE:
           break;
}

echo"
    <tr>
      <td width=\"18%\" bgcolor=\"#141721\" align=\"left\" valign=\"top\">
        <p style=\"margin-left: 10\"><font size=\"2\" face=\"Verdana\">$week</font></td>
      <td width=\"30%\" bgcolor=\"#141721\" align=\"left\" valign=\"top\">
        <p style=\"margin-left: 10\"><font face=\"Verdana\" size=\"2\">$opponent</font></td>
      <td width=\"18%\" bgcolor=\"#141721\" align=\"left\" valign=\"top\">
        <p style=\"margin-left: 10\"><font face=\"Verdana\" size=\"2\">$team1score - $team2score</font></td>
      <td width=\"18%\" bgcolor=\"#141721\" align=\"left\" valign=\"top\">
        <p style=\"margin-left: 10\"><font face=\"Verdana\" size=\"2\">$whowin</font></td>
      <td width=\"18%\" bgcolor=\"#141721\" align=\"left\" valign=\"top\">
        <p style=\"margin-left: 10\"><font face=\"Verdana\" size=\"2\"><a href=\"matchdetail.php?week=$week&winner=$whowin\">Details</a></font></td>
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