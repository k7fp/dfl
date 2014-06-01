<?
require( '../config.php' );
session_start();
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
$username = $_POST['username']; 
$password = $_POST['password'];
$stuff = mysql_query("SELECT * FROM admin WHERE username='".$username."' AND password='".$password."'") or die("MySQL Login Error: ".mysql_error()); 
if (mysql_num_rows($stuff) > 0) { 
session_start();
$_SESSION['username'] = $username;
header("Location: index.php");
} else { 
header("Location: ../index.php"); 
} 
}
switch (isset($_SESSION[username])) {
     case TRUE:
$_SESSION['username'] = $_SESSION[username];
$username = $_SESSION['username'];
           break;
     case FALSE:
echo"
<form action=\"index.php\" method=\"POST\">
            <tr>
              <td width=\"100%\">
                <p align=\"center\"><font face=\"Verdana\" size=\"2\">&nbsp;<br>Username</font></td>
            </tr>
            <tr>
              <td width=\"100%\">
                <p align=\"center\"><input style=\"FONT-WEIGHT: bold; FONT-SIZE: 8pt; BORDER-LEFT-COLOR: #141721; BORDER-BOTTOM-COLOR: #141721; COLOR: #c0c0c0; BORDER-TOP-STYLE: solid; BORDER-TOP-COLOR: #141721; FONT-FAMILY: Verdana; BORDER-RIGHT-STYLE: solid; BORDER-LEFT-STYLE: solid; BACKGROUND-COLOR: #000000; BORDER-RIGHT-COLOR: #141721; BORDER-BOTTOM-STYLE: solid\" size=\"15\" name=\"username\"></td>
            </tr>
            <tr>
              <td width=\"100%\">
                <p align=\"center\"><font face=\"Verdana\" size=\"2\">Password</font></td>
            </tr>
            <tr>
              <td width=\"100%\">
                <p align=\"center\"><input type =\"password\" style=\"FONT-WEIGHT: bold; FONT-SIZE: 8pt; BORDER-LEFT-COLOR: #141721; BORDER-BOTTOM-COLOR: #141721; COLOR: #c0c0c0; BORDER-TOP-STYLE: solid; BORDER-TOP-COLOR: #141721; FONT-FAMILY: Verdana; BORDER-RIGHT-STYLE: solid; BORDER-LEFT-STYLE: solid; BACKGROUND-COLOR: #000000; BORDER-RIGHT-COLOR: #141721; BORDER-BOTTOM-STYLE: solid\" size=\"15\" name=\"password\"></td>
            </tr>
            <tr>
              <td width=\"100%\">
                <p align=\"center\"><font face=\"Verdana\" size=\"2\"><input style=\"FONT-WEIGHT: bold; FONT-SIZE: 8pt; BORDER-LEFT-COLOR: #141721; BORDER-BOTTOM-COLOR: #141721; COLOR: #c0c0c0; BORDER-TOP-STYLE: solid; BORDER-TOP-COLOR: #141721; FONT-FAMILY: Verdana; BORDER-RIGHT-STYLE: solid; BORDER-LEFT-STYLE: solid; BACKGROUND-COLOR: #000000; BORDER-RIGHT-COLOR: #141721; BORDER-BOTTOM-STYLE: solid\" type=\"submit\" value=\"Submit\"><input style=\"FONT-WEIGHT: bold; FONT-SIZE: 8pt; BORDER-LEFT-COLOR: #141721; BORDER-BOTTOM-COLOR: #141721; COLOR: #c0c0c0; BORDER-TOP-STYLE: solid; BORDER-TOP-COLOR: #141721; FONT-FAMILY: Verdana; BORDER-RIGHT-STYLE: solid; BORDER-LEFT-STYLE: solid; BACKGROUND-COLOR: #000000; BORDER-RIGHT-COLOR: #141721; BORDER-BOTTOM-STYLE: solid\" type=\"reset\" value=\"Reset\"><br>&nbsp;</font></td>
            </tr>
</form>
";
die;
}
if ($_GET["task"] == "logout")
{
session_unset();
session_destroy();
header("Location: ../index.php"); 
exit();
	}
?>
<html>
<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<link href="../style.css" rel="stylesheet" type="text/css">
<script src="../javascript.js" language="Javascript"></script>
<title>Delta Force League - Administrator</title>
</head>
<body bgcolor="#202020" leftmargin="0" topmargin="0" text="#EEC6A2" link="#C67B41" vlink="#C67B41" alink="#C67B41">
<?
	if ($_SERVER['REQUEST_METHOD'] == "POST")
    {
		$date = addslashes($_POST["date"]);
		$type = addslashes($_POST["type"]);
		$ateam1 = addslashes($_POST["1team1"]);
		$ateam2 = addslashes($_POST["1team2"]);
		$bteam1 = addslashes($_POST["2team1"]);
		$bteam2 = addslashes($_POST["2team2"]);
		$cteam1 = addslashes($_POST["3team1"]);
		$cteam2 = addslashes($_POST["3team2"]);
		$dteam1 = addslashes($_POST["4team1"]);
		$dteam2 = addslashes($_POST["4team2"]);
		$eteam1 = addslashes($_POST["5team1"]);
		$eteam2 = addslashes($_POST["5team2"]);
		$fteam1 = addslashes($_POST["6team1"]);
		$fteam2 = addslashes($_POST["6team2"]);
		$gteam1 = addslashes($_POST["7team1"]);
		$gteam2 = addslashes($_POST["7team2"]);
		$hteam1 = addslashes($_POST["8team1"]);
		$hteam2 = addslashes($_POST["8team2"]);
	$sql  = " INSERT INTO schedule ";
	$sql .= " (date, type, ateam1, ateam2, bteam1, bteam2, cteam1, cteam2, dteam1, dteam2, eteam1, eteam2, fteam1, fteam2, gteam1, gteam2, hteam1, hteam2) VALUES ";
	$sql .= " ('$date','$type','$ateam1','$ateam2','$bteam1','$bteam2','$cteam1','$cteam2','$dteam1','$dteam2','$eteam1','$eteam2','$fteam1','$fteam2','$gteam1','$gteam2','$hteam1','$hteam2') ";
	$result = mysql_query($sql, $cid);
	if (mysql_error()) { print "Database ERROR: " . mysql_error(); }
echo"
<BODY onLoad=\"javascript: alert('Week Created!')\">
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
      <td width="100%" bgcolor="#202020" colspan="3">
        <p align="center"><font face="Verdana" size="2"><img border="0" src="images/banner.jpg" width="800" height="95"></font></td>
    </tr>
    <tr>
      <td width="20%" bgcolor="#363F5A">
        <p style="margin-left: 10" align="center"><font face="Verdana" size="2"><b>NAVIGATION</b></font></td>
      <td width="20%" bgcolor="#363F5A">
        <p style="margin-left: 10"><b><font face="Verdana" size="2" color="#FFFFFF">WELCOME <? print $username; ?></font></b></td>
      <td width="60%" bgcolor="#363F5A">
        <p style="margin-left: 10" align="center"><b><font face="Verdana" size="2"><? print date ("l F d Y, H:i:s"); ?></font></b></td>
    </tr>
    <tr>
	<center>
      <td width="20%" bgcolor="#141721" valign="top">
          <table border="0" cellpadding="0" cellspacing="1" width="100%"><? include "navigation.php"; ?></table>
		</center>
      </td>
      <td width="80%" bgcolor="#202020" colspan="2" valign="top">
        <p align="center"><font face="Verdana" size="1">&nbsp;</font>
  <center>
  <table border="0" cellpadding="0" cellspacing="0" width="90%">
    <tr>
      <td width="60%"><b><font face="Verdana" size="2">Team Name</font></b></td>
      <td width="13.333%"><b><font face="Verdana" size="2">Wins</font></b></td>
      <td width="13.333%"><b><font face="Verdana" size="2">Loses</font></b></td>
      <td width="13.333%"><b><font face="Verdana" size="2">Rank</font></b></td>
    </tr>
<?
		$sql  = " SELECT * FROM team ORDER BY rank";
		$rs = mysql_query($sql,$cid);
  	  if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
  	  while ($row = mysql_fetch_array($rs)) 
    {
        $name = $row["name"];
        $wins = $row["wins"];
        $loses = $row["loses"];
        $rank = $row["rank"];
        print "
    <tr>
      <td width=\"60%\"><font face=\"Verdana\" size=\"2\">$name</font></td>
      <td width=\"13.333%\"><font face=\"Verdana\" size=\"2\">$wins</font></td>
      <td width=\"13.333%\"><font face=\"Verdana\" size=\"2\">$loses</font></td>
      <td width=\"13.333%\"><font face=\"Verdana\" size=\"2\">$rank</font></td>
    </tr>
\n";
    }
?>
  </table>
  </center>
<form name="dfl" action="createweek.php" method="POST">
  <table border="0" cellpadding="0" cellspacing="1" width="95%">
  <tr>
    <td width="150" bgcolor="#141721" align="left" valign="middle" height="30">
      <p style="margin-left: 10"><b><font size="2" face="Verdana">Date</font></b></td>
    <td width="350" height="30" bgcolor="#141721" align="left" valign="middle" height="30">
      <p style="margin-left: 10"><font face="Verdana"><input style="FONT-WEIGHT: bold; FONT-SIZE: 8pt; BORDER-LEFT-COLOR: #141721; BORDER-BOTTOM-COLOR: #141721; COLOR: #c0c0c0; BORDER-TOP-STYLE: solid; BORDER-TOP-COLOR: #141721; FONT-FAMILY: Verdana; BORDER-RIGHT-STYLE: solid; BORDER-LEFT-STYLE: solid; BACKGROUND-COLOR: #000000; BORDER-RIGHT-COLOR: #141721; BORDER-BOTTOM-STYLE: solid" type="text" size="45" value name="date"></font></td>
  </tr>
  <tr>
    <td width="150" bgcolor="#141721" align="left" valign="middle" height="30">
      <p style="margin-left: 10"><b><font size="2" face="Verdana">Game Type</font></b></td>
    <td width="350" height="30" bgcolor="#141721" align="left" valign="middle" height="30">
      <p style="margin-left: 10"><font face="Verdana"><input style="FONT-WEIGHT: bold; FONT-SIZE: 8pt; BORDER-LEFT-COLOR: #141721; BORDER-BOTTOM-COLOR: #141721; COLOR: #c0c0c0; BORDER-TOP-STYLE: solid; BORDER-TOP-COLOR: #141721; FONT-FAMILY: Verdana; BORDER-RIGHT-STYLE: solid; BORDER-LEFT-STYLE: solid; BACKGROUND-COLOR: #000000; BORDER-RIGHT-COLOR: #141721; BORDER-BOTTOM-STYLE: solid" type="text" size="45" value name="type"></font></td>
  </tr>
    <tr>
      <td width="150" bgcolor="#141721" align="left" valign="middle" height="30">
        <p style="margin-left: 10"><b><font size="2" face="Verdana">Match 1</font></b></td>
      <td width="350" height="30" bgcolor="#141721" align="left" valign="middle" height="30">
        <p style="margin-left: 10"><select size="1" name="1team1" style="color: #C0C0C0; background-color: #000000; font-family: Verdana; font-size: 8pt; font-weight: bold; border-style: solid; border-color: #141721"><option></option>

<?
	$sql = " SELECT * FROM team ";
	$rs = mysql_query($sql, $cid);
    if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
    while ($row = mysql_fetch_array($rs)) 
    {
        $team = $row["name"];
        print "
<option value=\"$team\">$team</option>
";
}
?>
        </select><font face=verdana" size=2"> vs <font><select size="1" name="1team2" style="color: #C0C0C0; background-color: #000000; font-family: Verdana; font-size: 8pt; font-weight: bold; border-style: solid; border-color: #141721"><option></option>
<?
	$sql = " SELECT * FROM team ";
	$rs = mysql_query($sql, $cid);
    if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
    while ($row = mysql_fetch_array($rs)) 
    {
        $team = $row["name"];
        print "
<option value=\"$team\">$team</option>
";
}
?>
        </select>
</td>
    </tr>
    <tr>
      <td width="150" bgcolor="#141721" align="left" valign="middle" height="30">
        <p style="margin-left: 10"><b><font size="2" face="Verdana">Match 2</font></b></td>
      <td width="350" height="30" bgcolor="#141721" align="left" valign="middle" height="30">
        <p style="margin-left: 10"><select size="1" name="2team1" style="color: #C0C0C0; background-color: #000000; font-family: Verdana; font-size: 8pt; font-weight: bold; border-style: solid; border-color: #141721"><option></option>
<?
	$sql = " SELECT * FROM team ";
	$rs = mysql_query($sql, $cid);
    if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
    while ($row = mysql_fetch_array($rs)) 
    {
        $team = $row["name"];
        print "
<option value=\"$team\">$team</option>
";
}
?>
        </select><font face=verdana" size=2"> vs <font><select size="1" name="2team2" style="color: #C0C0C0; background-color: #000000; font-family: Verdana; font-size: 8pt; font-weight: bold; border-style: solid; border-color: #141721"><option></option>
<?
	$sql = " SELECT * FROM team ";
	$rs = mysql_query($sql, $cid);
    if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
    while ($row = mysql_fetch_array($rs)) 
    {
        $team = $row["name"];
        print "
<option value=\"$team\">$team</option>
";
}
?>
        </select>
</td>
    </tr>
    <tr>
      <td width="150" bgcolor="#141721" align="left" valign="middle" height="30">
        <p style="margin-left: 10"><b><font size="2" face="Verdana">Match 3</font></b></td>
      <td width="350" height="30" bgcolor="#141721" align="left" valign="middle" height="30">
        <p style="margin-left: 10"><select size="1" name="3team1" style="color: #C0C0C0; background-color: #000000; font-family: Verdana; font-size: 8pt; font-weight: bold; border-style: solid; border-color: #141721"><option></option>
<?
	$sql = " SELECT * FROM team ";
	$rs = mysql_query($sql, $cid);
    if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
    while ($row = mysql_fetch_array($rs)) 
    {
        $team = $row["name"];
        print "
<option value=\"$team\">$team</option>
";
}
?>
        </select><font face=verdana" size=2"> vs <font><select size="1" name="3team2" style="color: #C0C0C0; background-color: #000000; font-family: Verdana; font-size: 8pt; font-weight: bold; border-style: solid; border-color: #141721"><option></option>
<?
	$sql = " SELECT * FROM team ";
	$rs = mysql_query($sql, $cid);
    if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
    while ($row = mysql_fetch_array($rs)) 
    {
        $team = $row["name"];
        print "
<option value=\"$team\">$team</option>
";
}
?>
        </select>
</td>
    </tr>
    <tr>
      <td width="150" bgcolor="#141721" align="left" valign="middle" height="30">
        <p style="margin-left: 10"><b><font size="2" face="Verdana">Match 4</font></b></td>
      <td width="350" height="30" bgcolor="#141721" align="left" valign="middle" height="30">
        <p style="margin-left: 10"><select size="1" name="4team1" style="color: #C0C0C0; background-color: #000000; font-family: Verdana; font-size: 8pt; font-weight: bold; border-style: solid; border-color: #141721"><option></option>

<?
	$sql = " SELECT * FROM team ";
	$rs = mysql_query($sql, $cid);
    if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
    while ($row = mysql_fetch_array($rs)) 
    {
        $team = $row["name"];
        print "
<option value=\"$team\">$team</option>
";
}
?>
        </select><font face=verdana" size=2"> vs <font><select size="1" name="4team2" style="color: #C0C0C0; background-color: #000000; font-family: Verdana; font-size: 8pt; font-weight: bold; border-style: solid; border-color: #141721"><option></option>

<?
	$sql = " SELECT * FROM team ";
	$rs = mysql_query($sql, $cid);
    if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
    while ($row = mysql_fetch_array($rs)) 
    {
        $team = $row["name"];
        print "
<option value=\"$team\">$team</option>
";
}
?>
        </select>
</td>
    </tr>
    <tr>
      <td width="150" bgcolor="#141721" align="left" valign="middle" height="30">
        <p style="margin-left: 10"><b><font size="2" face="Verdana">Match 5</font></b></td>
      <td width="350" height="30" bgcolor="#141721" align="left" valign="middle" height="30">
        <p style="margin-left: 10"><select size="1" name="5team1" style="color: #C0C0C0; background-color: #000000; font-family: Verdana; font-size: 8pt; font-weight: bold; border-style: solid; border-color: #141721"><option></option>

<?
	$sql = " SELECT * FROM team ";
	$rs = mysql_query($sql, $cid);
    if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
    while ($row = mysql_fetch_array($rs)) 
    {
        $team = $row["name"];
        print "
<option value=\"$team\">$team</option>
";
}
?>
        </select><font face=verdana" size=2"> vs <font><select size="1" name="5team2" style="color: #C0C0C0; background-color: #000000; font-family: Verdana; font-size: 8pt; font-weight: bold; border-style: solid; border-color: #141721"><option></option>

<?
	$sql = " SELECT * FROM team ";
	$rs = mysql_query($sql, $cid);
    if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
    while ($row = mysql_fetch_array($rs)) 
    {
        $team = $row["name"];
        print "
<option value=\"$team\">$team</option>
";
}
?>
        </select>
</td>
    </tr>
    <tr>
      <td width="150" bgcolor="#141721" align="left" valign="middle" height="30">
        <p style="margin-left: 10"><b><font size="2" face="Verdana">Match 6</font></b></td>
      <td width="350" height="30" bgcolor="#141721" align="left" valign="middle" height="30">
        <p style="margin-left: 10"><select size="1" name="6team1" style="color: #C0C0C0; background-color: #000000; font-family: Verdana; font-size: 8pt; font-weight: bold; border-style: solid; border-color: #141721"><option></option>

<?
	$sql = " SELECT * FROM team ";
	$rs = mysql_query($sql, $cid);
    if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
    while ($row = mysql_fetch_array($rs)) 
    {
        $team = $row["name"];
        print "
<option value=\"$team\">$team</option>
";
}
?>
        </select><font face=verdana" size=2"> vs <font><select size="1" name="6team2" style="color: #C0C0C0; background-color: #000000; font-family: Verdana; font-size: 8pt; font-weight: bold; border-style: solid; border-color: #141721"><option></option>

<?
	$sql = " SELECT * FROM team ";
	$rs = mysql_query($sql, $cid);
    if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
    while ($row = mysql_fetch_array($rs)) 
    {
        $team = $row["name"];
        print "
<option value=\"$team\">$team</option>
";
}
?>
        </select>
</td>
    </tr>
    <tr>
      <td width="150" bgcolor="#141721" align="left" valign="middle" height="30">
        <p style="margin-left: 10"><b><font size="2" face="Verdana">Match 7</font></b></td>
      <td width="350" height="30" bgcolor="#141721" align="left" valign="middle" height="30">
        <p style="margin-left: 10"><select size="1" name="7team1" style="color: #C0C0C0; background-color: #000000; font-family: Verdana; font-size: 8pt; font-weight: bold; border-style: solid; border-color: #141721"><option></option>

<?
	$sql = " SELECT * FROM team ";
	$rs = mysql_query($sql, $cid);
    if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
    while ($row = mysql_fetch_array($rs)) 
    {
        $team = $row["name"];
        print "
<option value=\"$team\">$team</option>
";
}
?>
        </select><font face=verdana" size=2"> vs <font><select size="1" name="7team2" style="color: #C0C0C0; background-color: #000000; font-family: Verdana; font-size: 8pt; font-weight: bold; border-style: solid; border-color: #141721"><option></option>

<?
	$sql = " SELECT * FROM team ";
	$rs = mysql_query($sql, $cid);
    if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
    while ($row = mysql_fetch_array($rs)) 
    {
        $team = $row["name"];
        print "
<option value=\"$team\">$team</option>
";
}
?>
        </select>
</td>
    </tr>
    <tr>
      <td width="150" bgcolor="#141721" align="left" valign="middle" height="30">
        <p style="margin-left: 10"><b><font size="2" face="Verdana">Match 8</font></b></td>
      <td width="350" height="30" bgcolor="#141721" align="left" valign="middle" height="30">
        <p style="margin-left: 10"><select size="1" name="8team1" style="color: #C0C0C0; background-color: #000000; font-family: Verdana; font-size: 8pt; font-weight: bold; border-style: solid; border-color: #141721"><option></option>

<?
	$sql = " SELECT * FROM team ";
	$rs = mysql_query($sql, $cid);
    if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
    while ($row = mysql_fetch_array($rs)) 
    {
        $team = $row["name"];
        print "
<option value=\"$team\">$team</option>
";
}
?>
        </select><font face=verdana" size=2"> vs <font><select size="1" name="8team2" style="color: #C0C0C0; background-color: #000000; font-family: Verdana; font-size: 8pt; font-weight: bold; border-style: solid; border-color: #141721"><option></option>

<?
	$sql = " SELECT * FROM team ";
	$rs = mysql_query($sql, $cid);
    if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
    while ($row = mysql_fetch_array($rs)) 
    {
        $team = $row["name"];
        print "
<option value=\"$team\">$team</option>
";
}
?>
        </select>
</td>
    </tr>
    <tr>
      <td width="500" height="28" bgcolor="#141721" colspan="2">
        <p style="margin-left: 10" align="center"><font size="2" face="Verdana"><input style="color: #C0C0C0; background-color: #000000; font-family: Verdana; font-size: 8pt; font-weight: bold; border-style: solid; border-color: #141721" type="submit" value="Create Week"><input style="color: #C0C0C0; background-color: #000000; font-family: Verdana; font-size: 8pt; font-weight: bold; border-style: solid; border-color: #141721" type="reset" value="Reset"></font></td>
    </tr>
  </table>
</form>
        <p align="center"><font face="Verdana" size="1">&nbsp;</font>
</td>
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