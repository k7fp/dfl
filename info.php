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
        <p style="margin-left: 10"><b><font face="Verdana" size="2" color="#FFFFFF">LEAGUE INFO</font></b></td>
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
      <center>
      <table cellSpacing="1" cellPadding="0" width="90%" border="0">
          <tr>
            <td vAlign="top" width="50%"><font face="Verdana" size="2">&nbsp;-
              Only 16 teams can participate in one season.<br>
              &nbsp;- All games are minimum 7 vs. 7, 8 vs. 8 if&nbsp; both team
              leaders agree.<br>
              &nbsp;- Game type (TKOTH, TDM, or CTF) changes each week.<br>
              &nbsp;- Playoffs will begin when season is over.<br>
              &nbsp;- Rankings are determined by total victories, if teams are
              tied for total victories, then rankings will be determined from
              total map wins.<br>
              &nbsp;- DFL rules are in effect for all matches.<br>
              &nbsp;- Team 1's are red colored team.<br>
              &nbsp;- </font><font face="Verdana" size="2">Server settings for
              each type:<br>
              <br>
              TKOTH<br>
              &nbsp;- Start time 35:00<br>
              &nbsp;- Frag time 30:00<br>
              &nbsp;- 10 Minute zone time<br>
              &nbsp;- No kill limit<br>
              &nbsp;- No tracers<br>
              &nbsp;- Best 2 of 3<br>
              <br>
              TDM<br>
              &nbsp;- No time limit<br>
              &nbsp;- Frag when both teams agree<br>
              &nbsp;- Kill limit 100<br>
              &nbsp;- No tracers<br>
              &nbsp;- Best 3 of 5<br>
              <br>
              CTF<br>
              &nbsp;- Start time 35:00<br>
              &nbsp;- Frag time 30:00<br>
              &nbsp;- No tracers<br>
              &nbsp;- Best 3 of 5 </font></td>
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