<?
require( 'config.php' );
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
        <p style="margin-left: 10"><b><font face="Verdana" size="2" color="#FFFFFF">DFL RULES</font></b></td>
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
        <table cellSpacing="1" cellPadding="0" width="90%" border="0">
            <tr>
              <td vAlign="top" width="50%"><font face="Verdana" size="2">&nbsp;-
                Any
                kind of cheating / hacking, including external programs (for
                example, trainers), modification of game files will not be tolerated.<br>
                &nbsp;- If caught cheating, the player will be banned from this
                league, no exceptions.<br>
                &nbsp;- Only rosters listed on the team can play in a DFL match.
                Mercenaries are not allowed. If mercenaries are used, the team
                can be disqualified from the league.<br>
                &nbsp;- Treat other players respect as they would be treated the
                same.<br>
                &nbsp;- Team tags must be displayed on players' names during
                matches.<br>
                &nbsp;- Only winning team is required to report the match
                results.<br>
                &nbsp;- If the reported scores turns out to be faulty, the team
                who reported fake scores will be automatically disqualified or
                banned from the league.<br>
                &nbsp;- If any players are found to be on more than one teams,
                then the player will be banned from this league, as with
                cheating, no exceptions.<br>
                &nbsp;- Team leaders must contact each other and arrange a match
                day, time, and server for that specific week. If one team cannot
                make it to the match, then it counts for forfeit for the team
                who showed up to the server.<br>
                &nbsp;- Forfeit wins counts as 2-0 Map count for winning team.</font></td>
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