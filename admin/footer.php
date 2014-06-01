<?
$round = 5;
$m_time = explode(" ",microtime());
$m_time = $m_time[0] + $m_time[1];
$endtime = $m_time;
$totaltime = ($endtime - $starttime); 
echo "<font face=\"Verdana\" size=\"1\" color=\"#6C6C6C\"><center>Page Gnerated in ". round($totaltime,$round) ." Seconds.<br><b>Delta
Force Games are trademarks of Novalogic®.<br>Delta
Force League is not associated with Novalogic® in any way, shape or form.<br>Copyrighted©
2003-2004 Delta Force League. All Rights Reserved. Site design by Kevin.<br>This
website is best viewed at latest Internet Explorer version with 1280X1024 resolution.</center></b></center>";
?>