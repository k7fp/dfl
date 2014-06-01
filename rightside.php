<?
switch (isset($_SESSION[username])) {
     case TRUE:
$_SESSION['username'] = $_SESSION[username];
$username = $_SESSION['username'];
echo"
            <tr>
              <td width=\"100%\">
                <p align=\"center\" style=\"margin-top: 5; margin-bottom: 5\"><font face=\"Verdana\" size=\"2\">Hello $username<br><a href=\"$_SERVER[PHP_SELF]?task=logout\">Logout</a></font></td>
            </tr>
";
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
           break;
}
?>
            <tr>
              <td width="100%" bgcolor="#252B3F">
                <p align="center"><b><font face="Verdana" size="2">BROWSERS ONLINE</font></b></td>
            </tr>
            <tr>
              <td width="100%" bgcolor="#141721">
                <p align="center" style="margin-top: 5; margin-bottom: 5"><font face="Verdana" size="2">
<?
if($online == "1"){
	echo "1 Browser Online";
}else{
	echo "$online Browsers Online";
}
?>
</font></td>
            </tr>
            <tr>
              <td width="100%" bgcolor="#252B3F">
                <p align="center"><b><font face="Verdana" size="2">RANDOM LINKS</font></b></td>
            </tr>
            <tr>
              <td width="100%" bgcolor="#141721">
                <p align="center" style="margin-top: 5; margin-bottom: 5"><font face="Verdana" size="2">
<?
	$sql  = " SELECT * FROM links ORDER BY RAND() limit 3";
	$rs = mysql_query($sql, $cid);
    if (mysql_error()) { print "Database Error: $sql " . mysql_error(); }
    while ($row = mysql_fetch_array($rs)) 
    {
        $siteurl = $row["siteurl"];
        $sitename = $row["sitename"];
        print "<a href=\"$siteurl\" target=\"_blank\">$sitename</a><br>
\n";
    }
?>
</font></td>
            </tr>
            <tr>
              <td width="100%" bgcolor="#252B3F">
                <p align="center"><b><font face="Verdana" size="2">ADD OUR
                BUTTON</font></b></td>
            </tr>
            <tr>
              <td width="100%" bgcolor="#141721">
                <center><img border="0" src="images/button.jpg" width="88" height="30"></img><br>
					<font face="Verdana" size="1">Source Code</font>
					<textarea rows="2" cols="17" style="font-family: Verdana; font-size: 8pt; font-weight: bold; background-color: #000000; color: #C0C0C0; border-style: solid; border-color: #141721"><img border="0" src="http://www.amirel.no-ip.com/dfl/images/button.jpg" width="88" height="30"></img></textarea></center>
            </tr>