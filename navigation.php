<?
switch (isset($_SESSION['username'])) {
     case TRUE:
           break;
     case FALSE:
echo"
            <tr>
              <td width=\"100%\" height=\"25\" valign=\"middle\">
                <p style=\"margin-left: 10\"><font face=\"Verdana\" size=\"2\"><b>+ <a href=\"register.php\">Register</a></b></font></td>
            </tr>
";
           break;
}
?>
            <tr>
              <td width="100%" height="25" valign="middle">
                <p style="margin-left: 10"><font face="Verdana" size="2"><b>+ <a href="about.php">About
                This Site</a></b></font></td>
            </tr>
            <tr>
              <td width="100%" height="25" valign="middle">
                <p style="margin-left: 10"><font face="Verdana" size="2"><b>+ <a href="rules.php">Rules</a></b></font></td>
            </tr>
            <tr>
              <td width="100%" height="25" valign="middle">
                <p style="margin-left: 10"><font face="Verdana" size="2"><b>+ <a href="info.php">League
                Info</a></b></font></td>
            </tr>
            <tr>
              <td width="100%" height="25" valign="middle">
                <p style="margin-left: 10"><font face="Verdana" size="2"><b>+ <a href="hof.php">Hall
                of Fame</a></b></font></td>
            </tr>
            <tr>
              <td width="100%" height="25" valign="middle">
                <p style="margin-left: 10"><font face="Verdana" size="2"><b>+ <a href="links.php">Links</a></b></font></td>
            </tr>
<?
switch (isset($_SESSION[username])) {
     case TRUE:
echo"
            <tr>
              <td width=\"100%\" height=\"25\" valign=\"middle\">
                <p style=\"margin-left: 10\"><font face=\"Verdana\" size=\"2\"><b>+ <a href=\"editprofile.php\">Edit
                Profile</a></b></font></td>
            </tr>

";
		$sql  = " SELECT * FROM user";
		$sql .= " WHERE username='".$username."' ";
		$rs = mysql_query($sql,$cid);
		$row = mysql_fetch_assoc($rs);
		$teamon = $row["team"];
		$leader = $row["leader"];
switch (isset($teamon)) {
     case TRUE:
           break;
	 case FALSE:
echo"
            <tr>
              <td width=\"100%\" height=\"25\" valign=\"middle\">
                <p style=\"margin-left: 10\"><font face=\"Verdana\" size=\"2\"><b>+ <a href=\"teamcreate.php\">Register
                Team</a></b></font></td>
            </tr>
            <tr>
              <td width=\"100%\" height=\"25\" valign=\"middle\">
                <p style=\"margin-left: 10\"><font face=\"Verdana\" size=\"2\"><b>+ <a href=\"teamjoin.php\">Join
                Team</a></b></font></td>
            </tr>
";
		   break;
}
switch ($leader == yes) {
     case TRUE:
echo"
            <tr>
              <td width=\"100%\" height=\"25\" valign=\"middle\">
                <p style=\"margin-left: 10\"><font face=\"Verdana\" size=\"2\"><b>+ <a href=\"teamedit.php\">Modify
                Team</a></b></font></td>
            </tr>
";
	 case FALSE:
           break;
}
switch (is_null($leader) && isset($teamon)) {
     case TRUE:
echo"
            <tr>
              <td width=\"100%\" height=\"25\" valign=\"middle\">
                <p style=\"margin-left: 10\"><font face=\"Verdana\" size=\"2\"><b>+ <a href=\"teamquit.php\">Leave
                Team</a></b></font></td>
            </tr>
";
           break;
	 case FALSE:
		   break;
}
		$sql  = " SELECT * FROM schedule ORDER BY week DESC";
        $sql .= " LIMIT 1 ";
		$rs = mysql_query($sql,$cid);
		$row = mysql_fetch_assoc($rs);
		$week = $row["week"];
		$date = $row["date"];
		$type = $row["type"];
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

		$sql  = " SELECT * FROM user";
		$sql .= " WHERE username='".$username."' ";
		$rs = mysql_query($sql,$cid);
		$row = mysql_fetch_assoc($rs);
		$onteam = $row["team"];

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
	if (is_null($onteam)) {
		$played = yes;
}
switch ($played == yes) {
     case TRUE:
           break;
	 case FALSE;
echo "
            <tr>
              <td width=\"100%\" height=\"25\" valign=\"middle\">
                <p style=\"margin-left: 10\"><font face=\"Verdana\" size=\"2\"><b>+ <a href=\"reportmatch.php\">Report
                Match</a></b></font></td>
            </tr>
";
		   break;
}
           break;
     case FALSE:
           break;
}
?>
            <tr>
              <td width="100%" height="25" valign="middle">
                <p style="margin-left: 10"><font face="Verdana" size="2"><b>+ <a href="admin" target="_blank">Admin CP</a></b></font></td>
            </tr>