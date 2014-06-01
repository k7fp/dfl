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
		$sql  = " SELECT * FROM schedule ";
		$sql .= " WHERE week = '$whatweek' ";
		$rs = mysql_query($sql,$cid);
		if (is_null($whatweek)) { print "<br><center><font face=\"Verdana\" size=\"2\" color=\"#C0C0C0\">Your IP ".$_SERVER['REMOTE_ADDR']." Has Been Logged.<br>Click <a href=\"javascript:history.back(1)\"> Here</a> To Go Back.</font></center>";
		die;
}
		$row = mysql_fetch_array($rs);
		$week = $row["week"];
		$date = $row["date"];
		$type = $row["type"];
		$ateam1 = $row["ateam1"];
		$ateam2 = $row["ateam2"];
		$ateam1score = $row["ateam1score"];
		$ateam2score = $row["ateam2score"];
		$awinner = $row["awinner"];
		$aplayed = $row["aplayed"];
		$bteam1 = $row["bteam1"];
		$bteam2 = $row["bteam2"];
		$bteam1score = $row["bteam1score"];
		$bteam2score = $row["bteam2score"];
		$bwinner = $row["bwinner"];
		$bplayed = $row["bplayed"];
		$cteam1 = $row["cteam1"];
		$cteam2 = $row["cteam2"];
		$cteam1score = $row["cteam1score"];
		$cteam2score = $row["cteam2score"];
		$cwinner = $row["cwinner"];
		$cplayed = $row["cplayed"];
		$dteam1 = $row["dteam1"];
		$dteam2 = $row["dteam2"];
		$dteam1score = $row["dteam1score"];
		$dteam2score = $row["dteam2score"];
		$dwinner = $row["dwinner"];
		$dplayed = $row["dplayed"];
		$eteam1 = $row["eteam1"];
		$eteam2 = $row["eteam2"];
		$eteam1score = $row["eteam1score"];
		$eteam2score = $row["eteam2score"];
		$ewinner = $row["ewinner"];
		$eplayed = $row["eplayed"];
		$fteam1 = $row["fteam1"];
		$fteam2 = $row["fteam2"];
		$fteam1score = $row["fteam1score"];
		$fteam2score = $row["fteam2score"];
		$fwinner = $row["fwinner"];
		$fplayed = $row["fplayed"];
		$gteam1 = $row["gteam1"];
		$gteam2 = $row["gteam2"];
		$gteam1score = $row["gteam1score"];
		$gteam2score = $row["gteam2score"];
		$gwinner = $row["gwinner"];
		$gplayed = $row["gplayed"];
		$hteam1 = $row["hteam1"];
		$hteam2 = $row["hteam2"];
		$hteam1score = $row["hteam1score"];
		$hteam2score = $row["hteam2score"];
		$hwinner = $row["hwinner"];
		$hplayed = $row["hplayed"];

		if (is_null($week)) { print "<br><center><font face=\"Verdana\" size=\"2\" color=\"#C0C0C0\">Week Does Not Exist!<br>Your IP ".$_SERVER['REMOTE_ADDR']." Has Been Logged.<br>Click <a href=\"javascript:history.back(1)\"> Here</a> To Go Back.</font></center>";
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
        <p style="margin-left: 10"><b><font face="Verdana" size="2" color="#FFFFFF">THIS WEEK</font></b></td>
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
        <td vAlign="top" align="middle" bgColor="#363f5a" colSpan="5">
          <p  align="center"><b><font face="Verdana" size="2">WEEK
          INFORMATION</font></b></td>
      </tr>
      <tr>
        <td vAlign="top" align="left" width="40%" bgColor="#141721" colspan="2">
          <p ><b><font face="Verdana" size="2">Week
          Number</font></b></p>
        </td>
        <td vAlign="top" align="left" width="60%" bgColor="#141721" colSpan="3">
          <p ><font face="Verdana" size="2"><? print "$week"; ?></font></td>
      </tr>
      <tr>
        <td vAlign="top" align="left" width="40%" bgColor="#141721" colspan="2">
          <p ><b><font face="Verdana" size="2">Date</font></b></td>
        <td vAlign="top" align="left" width="60%" bgColor="#141721" colSpan="3">
          <p ><font face="Verdana" size="2"><? print "$date"; ?></font></td>
      </tr>
      <tr>
        <td vAlign="top" align="left" width="40%" bgColor="#141721" colspan="2">
          <p ><b><font face="Verdana" size="2">This
          Week's Game Type</font></b></td>
        <td vAlign="top" align="left" width="60%" bgColor="#141721" colSpan="3">
          <p ><font face="Verdana" size="2"><? print "$type"; ?></font></p>
        </td>
      </tr>
      <tr>
        <td vAlign="top" align="middle" bgColor="#363f5a" colSpan="5">
          <p  align="center"><b><font face="Verdana" size="2">MATCHES
          THIS WEEK</font></b></p>
        </td>
      </tr>
      <tr>
        <td vAlign="top" align="left" width="20%" bgColor="#141721">
          <p ><b><font face="Verdana" size="2">Team 1</font></b></p>
        </td>
        <td vAlign="top" align="left" width="20%" bgColor="#141721">
          <p ><b><font face="Verdana" size="2">Team 2 </font></b></td>
        <td vAlign="top" align="left" width="20%" bgColor="#141721">
          <p ><b><font face="Verdana" size="2">Score</font></b></p>
        </td>
        <td vAlign="top" align="left" width="20%" bgColor="#141721">
          <p ><b><font face="Verdana" size="2">Winner</font></b></p>
        </td>
        <td vAlign="top" align="left" width="20%" bgColor="#141721">
          <p ><b><font face="Verdana" size="2">Match
          Info</font></b></p>
        </td>
      </tr>
<?
switch ($ateam1 == "") {
     case TRUE:
           break;
	 case FALSE;
echo"
      <tr>
        <td vAlign=\"top\" align=\"left\" width=\"20%\" bgColor=\"#141721\">
          <p><font face=\"Verdana\" size=\"2\">$ateam1</font></p>
        </td>
        <td vAlign=\"top\" align=\"left\" width=\"20%\" bgColor=\"#141721\">
          <p><font face=\"Verdana\" size=\"2\">$ateam2</font></td>
        <td vAlign=\"top\" align=\"left\" width=\"20%\" bgColor=\"#141721\">
          <p><font face=\"Verdana\" size=\"2\">";
	switch (is_null($aplayed)) {
     case TRUE:
echo" <font color=\"#40496A\">Pending</font>";
		break;
	 case FALSE:
echo" $ateam1score - $ateam2score";
}
echo "
</font></td>
        <td vAlign=\"top\" align=\"left\" width=\"20%\" bgColor=\"#141721\">
          <p><font face=\"Verdana\" size=\"2\">";
	switch (is_null($aplayed)) {
     case TRUE:
echo" <font color=\"#40496A\">Pending</font>";
		break;
	 case FALSE:
echo" $awinner";
}
echo "</font></p>
        </td>
        <td vAlign=\"top\" align=\"left\" width=\"20%\" bgColor=\"#141721\">
          <p><font face=\"Verdana\" size=\"2\">";
	switch (is_null($aplayed)) {
     case TRUE:
echo" <font color=\"#40496A\">Pending</font>";
		break;
	 case FALSE:
echo"<a href=\"matchdetail.php?week=$week&amp;winner=$awinner\">Details";
}
echo "
</font></a></p>
        </td>
      </tr>
";
		   break;
}
switch ($bteam1 == "") {
     case TRUE:
           break;
	 case FALSE;
echo"
      <tr>
        <td vAlign=\"top\" align=\"left\" width=\"20%\" bgColor=\"#141721\">
          <p><font face=\"Verdana\" size=\"2\">$bteam1</font></p>
        </td>
        <td vAlign=\"top\" align=\"left\" width=\"20%\" bgColor=\"#141721\">
          <p><font face=\"Verdana\" size=\"2\">$bteam2</font></td>
        <td vAlign=\"top\" align=\"left\" width=\"20%\" bgColor=\"#141721\">
          <p><font face=\"Verdana\" size=\"2\">";
	switch (is_null($bplayed)) {
     case TRUE:
echo" <font color=\"#40496A\">Pending</font>";
		break;
	 case FALSE:
echo" $bteam1score - $bteam2score";
}
echo "
</font></td>
        <td vAlign=\"top\" align=\"left\" width=\"20%\" bgColor=\"#141721\">
          <p><font face=\"Verdana\" size=\"2\">";
	switch (is_null($bplayed)) {
     case TRUE:
echo" <font color=\"#40496A\">Pending</font>";
		break;
	 case FALSE:
echo" $bwinner";
}
echo "</font></p>
        </td>
        <td vAlign=\"top\" align=\"left\" width=\"20%\" bgColor=\"#141721\">
          <p><font face=\"Verdana\" size=\"2\">";
	switch (is_null($bplayed)) {
     case TRUE:
echo" <font color=\"#40496A\">Pending</font>";
		break;
	 case FALSE:
echo"<a href=\"matchdetail.php?week=$week&amp;winner=$bwinner\">Details";
}
echo "
</font></a></p>
        </td>
      </tr>
";
		   break;
}
switch ($cteam1 == "") {
     case TRUE:
           break;
	 case FALSE;
echo"
      <tr>
        <td vAlign=\"top\" align=\"left\" width=\"20%\" bgColor=\"#141721\">
          <p><font face=\"Verdana\" size=\"2\">$cteam1</font></p>
        </td>
        <td vAlign=\"top\" align=\"left\" width=\"20%\" bgColor=\"#141721\">
          <p><font face=\"Verdana\" size=\"2\">$cteam2</font></td>
        <td vAlign=\"top\" align=\"left\" width=\"20%\" bgColor=\"#141721\">
          <p><font face=\"Verdana\" size=\"2\">";
	switch (is_null($cplayed)) {
     case TRUE:
echo" <font color=\"#40496A\">Pending</font>";
		break;
	 case FALSE:
echo" $cteam1score - $cteam2score";
}
echo "
</font></td>
        <td vAlign=\"top\" align=\"left\" width=\"20%\" bgColor=\"#141721\">
          <p><font face=\"Verdana\" size=\"2\">";
	switch (is_null($cplayed)) {
     case TRUE:
echo" <font color=\"#40496A\">Pending</font>";
		break;
	 case FALSE:
echo" $cwinner";
}
echo "</font></p>
        </td>
        <td vAlign=\"top\" align=\"left\" width=\"20%\" bgColor=\"#141721\">
          <p><font face=\"Verdana\" size=\"2\">";
	switch (is_null($cplayed)) {
     case TRUE:
echo" <font color=\"#40496A\">Pending</font>";
		break;
	 case FALSE:
echo"<a href=\"matchdetail.php?week=$week&amp;winner=$cwinner\">Details";
}
echo "
</font></a></p>
        </td>
      </tr>
";
		   break;
}
switch ($dteam1 == "") {
     case TRUE:
           break;
	 case FALSE;
echo"
      <tr>
        <td vAlign=\"top\" align=\"left\" width=\"20%\" bgColor=\"#141721\">
          <p><font face=\"Verdana\" size=\"2\">$dteam1</font></p>
        </td>
        <td vAlign=\"top\" align=\"left\" width=\"20%\" bgColor=\"#141721\">
          <p><font face=\"Verdana\" size=\"2\">$dteam2</font></td>
        <td vAlign=\"top\" align=\"left\" width=\"20%\" bgColor=\"#141721\">
          <p><font face=\"Verdana\" size=\"2\">";
	switch (is_null($dplayed)) {
     case TRUE:
echo" <font color=\"#40496A\">Pending</font>";
		break;
	 case FALSE:
echo" $dteam1score - $dteam2score";
}
echo "
</font></td>
        <td vAlign=\"top\" align=\"left\" width=\"20%\" bgColor=\"#141721\">
          <p><font face=\"Verdana\" size=\"2\">";
	switch (is_null($dplayed)) {
     case TRUE:
echo" <font color=\"#40496A\">Pending</font>";
		break;
	 case FALSE:
echo" $dwinner";
}
echo "</font></p>
        </td>
        <td vAlign=\"top\" align=\"left\" width=\"20%\" bgColor=\"#141721\">
          <p><font face=\"Verdana\" size=\"2\">";
	switch (is_null($dplayed)) {
     case TRUE:
echo" <font color=\"#40496A\">Pending</font>";
		break;
	 case FALSE:
echo"<a href=\"matchdetail.php?week=$week&amp;winner=$dwinner\">Details";
}
echo "
</font></a></p>
        </td>
      </tr>
";
		   break;
}
switch ($eteam1 == "") {
     case TRUE:
           break;
	 case FALSE;
echo"
      <tr>
        <td vAlign=\"top\" align=\"left\" width=\"20%\" bgColor=\"#141721\">
          <p><font face=\"Verdana\" size=\"2\">$eteam1</font></p>
        </td>
        <td vAlign=\"top\" align=\"left\" width=\"20%\" bgColor=\"#141721\">
          <p><font face=\"Verdana\" size=\"2\">$eteam2</font></td>
        <td vAlign=\"top\" align=\"left\" width=\"20%\" bgColor=\"#141721\">
          <p><font face=\"Verdana\" size=\"2\">";
	switch (is_null($eplayed)) {
     case TRUE:
echo" <font color=\"#40496A\">Pending</font>";
		break;
	 case FALSE:
echo" $eteam1score - $eteam2score";
}
echo "
</font></td>
        <td vAlign=\"top\" align=\"left\" width=\"20%\" bgColor=\"#141721\">
          <p><font face=\"Verdana\" size=\"2\">";
	switch (is_null($eplayed)) {
     case TRUE:
echo" <font color=\"#40496A\">Pending</font>";
		break;
	 case FALSE:
echo" $ewinner";
}
echo "</font></p>
        </td>
        <td vAlign=\"top\" align=\"left\" width=\"20%\" bgColor=\"#141721\">
          <p><font face=\"Verdana\" size=\"2\">";
	switch (is_null($eplayed)) {
     case TRUE:
echo" <font color=\"#40496A\">Pending</font>";
		break;
	 case FALSE:
echo"<a href=\"matchdetail.php?week=$week&amp;winner=$ewinner\">Details";
}
echo "
</font></a></p>
        </td>
      </tr>
";
		   break;
}
switch ($fteam1 == "") {
     case TRUE:
           break;
	 case FALSE;
echo"
      <tr>
        <td vAlign=\"top\" align=\"left\" width=\"20%\" bgColor=\"#141721\">
          <p><font face=\"Verdana\" size=\"2\">$fteam1</font></p>
        </td>
        <td vAlign=\"top\" align=\"left\" width=\"20%\" bgColor=\"#141721\">
          <p><font face=\"Verdana\" size=\"2\">$fteam2</font></td>
        <td vAlign=\"top\" align=\"left\" width=\"20%\" bgColor=\"#141721\">
          <p><font face=\"Verdana\" size=\"2\">";
	switch (is_null($fplayed)) {
     case TRUE:
echo" <font color=\"#40496A\">Pending</font>";
		break;
	 case FALSE:
echo" $fteam1score - $fteam2score";
}
echo "
</font></td>
        <td vAlign=\"top\" align=\"left\" width=\"20%\" bgColor=\"#141721\">
          <p><font face=\"Verdana\" size=\"2\">";
	switch (is_null($fplayed)) {
     case TRUE:
echo" <font color=\"#40496A\">Pending</font>";
		break;
	 case FALSE:
echo" $fwinner";
}
echo "</font></p>
        </td>
        <td vAlign=\"top\" align=\"left\" width=\"20%\" bgColor=\"#141721\">
          <p><font face=\"Verdana\" size=\"2\">";
	switch (is_null($fplayed)) {
     case TRUE:
echo" <font color=\"#40496A\">Pending</font>";
		break;
	 case FALSE:
echo"<a href=\"matchdetail.php?week=$week&amp;winner=$fwinner\">Details";
}
echo "
</font></a></p>
        </td>
      </tr>
";
		   break;
}
switch ($gteam1 == "") {
     case TRUE:
           break;
	 case FALSE;
echo"
      <tr>
        <td vAlign=\"top\" align=\"left\" width=\"20%\" bgColor=\"#141721\">
          <p><font face=\"Verdana\" size=\"2\">$gteam1</font></p>
        </td>
        <td vAlign=\"top\" align=\"left\" width=\"20%\" bgColor=\"#141721\">
          <p><font face=\"Verdana\" size=\"2\">$gteam2</font></td>
        <td vAlign=\"top\" align=\"left\" width=\"20%\" bgColor=\"#141721\">
          <p><font face=\"Verdana\" size=\"2\">";
	switch (is_null($gplayed)) {
     case TRUE:
echo" <font color=\"#40496A\">Pending</font>";
		break;
	 case FALSE:
echo" $gteam1score - $gteam2score";
}
echo "
</font></td>
        <td vAlign=\"top\" align=\"left\" width=\"20%\" bgColor=\"#141721\">
          <p><font face=\"Verdana\" size=\"2\">";
	switch (is_null($gplayed)) {
     case TRUE:
echo" <font color=\"#40496A\">Pending</font>";
		break;
	 case FALSE:
echo" $gwinner";
}
echo "</font></p>
        </td>
        <td vAlign=\"top\" align=\"left\" width=\"20%\" bgColor=\"#141721\">
          <p><font face=\"Verdana\" size=\"2\">";
	switch (is_null($gplayed)) {
     case TRUE:
echo" <font color=\"#40496A\">Pending</font>";
		break;
	 case FALSE:
echo"<a href=\"matchdetail.php?week=$week&amp;winner=$gwinner\">Details";
}
echo "
</font></a></p>
        </td>
      </tr>
";
		   break;
}
switch ($hteam1 == "") {
     case TRUE:
           break;
	 case FALSE;
echo"
      <tr>
        <td vAlign=\"top\" align=\"left\" width=\"20%\" bgColor=\"#141721\">
          <p><font face=\"Verdana\" size=\"2\">$hteam1</font></p>
        </td>
        <td vAlign=\"top\" align=\"left\" width=\"20%\" bgColor=\"#141721\">
          <p><font face=\"Verdana\" size=\"2\">$hteam2</font></td>
        <td vAlign=\"top\" align=\"left\" width=\"20%\" bgColor=\"#141721\">
          <p><font face=\"Verdana\" size=\"2\">";
	switch (is_null($hplayed)) {
     case TRUE:
echo" <font color=\"#40496A\">Pending</font>";
		break;
	 case FALSE:
echo" $hteam1score - $hteam2score";
}
echo "
</font></td>
        <td vAlign=\"top\" align=\"left\" width=\"20%\" bgColor=\"#141721\">
          <p ><font face=\"Verdana\" size=\"2\">";
	switch (is_null($aplayed)) {
     case TRUE:
echo" <font color=\"#40496A\">Pending</font>";
		break;
	 case FALSE:
echo" $hwinner";
}
echo "</font></p>
        </td>
        <td vAlign=\"top\" align=\"left\" width=\"20%\" bgColor=\"#141721\">
          <p><font face=\"Verdana\" size=\"2\">";
	switch (is_null($hplayed)) {
     case TRUE:
echo" <font color=\"#40496A\">Pending</font>";
		break;
	 case FALSE:
echo"<a href=\"matchdetail.php?week=$week&amp;winner=$hwinner\">Details";
}
echo "
</font></a></p>
        </td>
      </tr>
";
		   break;
}
?>
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