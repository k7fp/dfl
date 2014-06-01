<?
require( '../config.php' );
session_start();
switch (isset($_SESSION[usernameadmin])) {
     case TRUE:
$_SESSION['username'] = $_SESSION[usernameadmin];
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
        $title = addslashes($_POST["title"]);
		$time = date ("M d Y, H:i:s");
        $author = $username;
        $news = addslashes($_POST["news"]);
		$sql  = " INSERT INTO news ";
		$sql .= " (title, time, author, news) VALUES ";
		$sql .= " ('$title','$time','$author','$news') ";
		$result = mysql_query($sql, $cid);
		if (mysql_error()) { print "Database ERROR: " . mysql_error(); }
echo"<BODY onLoad=\"javascript: alert('News Submitted!')\">
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
        <p style="margin-left: 10"><b><font face="Verdana" size="2" color="#FFFFFF">SUBMIT NEWS</font></b></td>
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
<font face="Verdana" size="2"><b>DO NOT use double quotes (") or slashes will be added automatically</b></font>
<form name="dfl" action="newsadd.php" method="POST">
<center>
<table width="90%">
    <tr>
      <td width="20%" bgcolor="#0E1016" align="left">
        <p style="margin-left: 10"><b><font face="Verdana" size="2">Title</font></b></td>
      <td width="80%" bgcolor="#0E1016" align="left">
        <p style="margin-left: 10"><input type="text" name="title" size="70" style="font-family: Verdana; font-size: 8pt; font-weight: bold; background-color: #000000; color: #C0C0C0; border-style: solid; border-color: #141721"></td>
    </tr>
    <tr>
      <td width="20%" bgcolor="#141721" align="left">
        <p style="margin-left: 10"><b><font face="Verdana" size="2">News</font></b></td>
	<td width="80%" bgcolor="#141721" align="left">
		<p style="margin-left: 10"><textarea name="news" rows="5" cols="70" style="FONT-WEIGHT: bold; FONT-SIZE: 8pt; BORDER-LEFT-COLOR: #141721; BORDER-BOTTOM-COLOR: #141721; COLOR: #c0c0c0; BORDER-TOP-STYLE: solid; BORDER-TOP-COLOR: #141721; FONT-FAMILY: Verdana; BORDER-RIGHT-STYLE: solid; BORDER-LEFT-STYLE: solid; BACKGROUND-COLOR: #000000; BORDER-RIGHT-COLOR: #141721; BORDER-BOTTOM-STYLE: solid"></textarea>
	</td>
	</tr>
    <tr>
      <td height="28" bgcolor="#141721" colspan="2">
        <p style="margin-left: 10" align="center"><font face="Verdana" size="2"><input style="color: #C0C0C0; background-color: #000000; font-family: Verdana; font-size: 8pt; font-weight: bold; border-style: solid; border-color: #141721" type="submit" value="Submit News"><input style="color: #C0C0C0; background-color: #000000; font-family: Verdana; font-size: 8pt; font-weight: bold; border-style: solid; border-color: #141721" type="reset" value="Reset"></font></td>
    </tr>
</table>
</center>
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