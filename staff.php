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
        <p style="margin-left: 10"><b><font face="Verdana" size="2" color="#FFFFFF">STAFF AND ADMINS</font></b></td>
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
        <td vAlign="top" align="middle" bgColor="#1E2433" colSpan="5" width="619">
          <p style="margin-left: 10px" align="center"><font face="Verdana" size="2">ADMINISTRATORS</font></td>
      </tr>
      <tr>
        <td vAlign="top" align="left" width="18.75%" bgColor="#141721">
          <p style="margin-left: 10"><b><font face="Verdana" size="2">Name</font></b>
        </td>
        <td vAlign="top" align="left" width="25%" bgColor="#141721">
          <p style="margin-left: 10"><font face="Verdana" size="2"><b>Position</b></font>
        </td>
        <td vAlign="top" align="left" width="18.75%" bgColor="#141721">
          <p style="margin-left: 10"><b><font face="Verdana" size="2">Email</font></b>
        </td>
        <td vAlign="top" align="left" width="18.75%" bgColor="#141721">
          <p style="margin-left: 10"><font face="Verdana" size="2"><b>ICQ</b></font></td>
        <td vAlign="top" align="left" width="18.75%" bgColor="#141721">
          <p style="margin-left: 10"><b><font face="Verdana" size="2">AIM</font></b></td>
      </tr>
<?
		$sql  = " SELECT * FROM admin ORDER BY username";
		$rs = mysql_query($sql,$cid);
  	  while ($row = mysql_fetch_array($rs)) 
    {
		$adminname = $row["username"];
		$adminposition = $row["position"];
		$adminemail = $row["email"];
		$adminicq = $row["icq"];
		$adminaim = $row["aim"];
echo"
      <tr>
        <td vAlign=\"top\" align=\"left\" width=\"18.75%\" bgColor=\"#141721\">
          <p style=\"margin-left: 10\"><font face=\"Verdana\" size=\"2\">$adminname</font>
        </td>
        <td vAlign=\"top\" align=\"left\" width=\"25%\" bgColor=\"#141721\">
          <p style=\"margin-left: 10\"><font face=\"Verdana\" size=\"2\">$adminposition</font>
        </td>
        <td vAlign=\"top\" align=\"left\" width=\"18.75%\" bgColor=\"#141721\">
          <p style=\"margin-left: 10\"><font face=\"Verdana\" size=\"2\"><a href=\"mailto:$adminemail\">Here</a></font>
        </td>
        <td vAlign=\"top\" align=\"left\" width=\"18.75%\" bgColor=\"#141721\">
          <p style=\"margin-left: 10\"><font face=\"Verdana\" size=\"2\">$adminicq</font></td>
        <td vAlign=\"top\" align=\"left\" width=\"18.75%\" bgColor=\"#141721\">
          <p style=\"margin-left: 10\"><font face=\"Verdana\" size=\"2\">$adminaim</font></td>
      </tr>
";
}?>
      <tr>
        <td vAlign="top" align="middle" bgColor="#1E2433" colSpan="5" width="619">
          <p style="margin-left: 10px" align="center"><font face="Verdana" size="2">STAFF</font></td>
      </tr>
      <tr>
        <td vAlign="top" align="left" width="18.75%" bgColor="#141721">
          <p style="margin-left: 10"><b><font face="Verdana" size="2">Name</font></b>
        </td>
        <td vAlign="top" align="left" width="25%" bgColor="#141721">
          <p style="margin-left: 10"><font face="Verdana" size="2"><b>Position</b></font>
        </td>
        <td vAlign="top" align="left" width="18.75%" bgColor="#141721">
          <p style="margin-left: 10"><b><font face="Verdana" size="2">Email</font></b>
        </td>
        <td vAlign="top" align="left" width="18.75%" bgColor="#141721">
          <p style="margin-left: 10"><font face="Verdana" size="2"><b>ICQ</b></font></td>
        <td vAlign="top" align="left" width="18.75%" bgColor="#141721">
          <p style="margin-left: 10"><b><font face="Verdana" size="2">AIM</font></b></td>
      </tr>
<?
		$sql  = " SELECT * FROM staff ORDER BY name";
		$rs = mysql_query($sql,$cid);
  	  while ($row = mysql_fetch_array($rs)) 
    {
		$staffname = $row["name"];
		$staffposition = $row["position"];
		$staffemail = $row["email"];
		$stafficq = $row["icq"];
		$staffaim = $row["aim"];
echo"
      <tr>
        <td vAlign=\"top\" align=\"left\" width=\"18.75%\" bgColor=\"#141721\">
          <p style=\"margin-left: 10\"><font face=\"Verdana\" size=\"2\">$staffname</font>
        </td>
        <td vAlign=\"top\" align=\"left\" width=\"25%\" bgColor=\"#141721\">
          <p style=\"margin-left: 10\"><font face=\"Verdana\" size=\"2\">$staffposition</font>
        </td>
        <td vAlign=\"top\" align=\"left\" width=\"18.75%\" bgColor=\"#141721\">
          <p style=\"margin-left: 10\"><font face=\"Verdana\" size=\"2\"><a href=\"mailto:$staffemail\">Here</a></font>
        </td>
        <td vAlign=\"top\" align=\"left\" width=\"18.75%\" bgColor=\"#141721\">
          <p style=\"margin-left: 10\"><font face=\"Verdana\" size=\"2\">$stafficq</font></td>
        <td vAlign=\"top\" align=\"left\" width=\"18.75%\" bgColor=\"#141721\">
          <p style=\"margin-left: 10\"><font face=\"Verdana\" size=\"2\">$staffaim</font></td>
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