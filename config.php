<?
$usr = "";
$pwd = "";
$db = "";
$host = "localhost";
$cid = mysql_connect($host,$usr,$pwd); mysql_select_db($db); 
$result = mysql_query($sql, $cid);
if (!$cid) { echo("ERROR: " . mysql_error() . "\n");    }
$remote = $_SERVER["REMOTE_ADDR"];
$file = "online1.php";
$timeoutseconds = 20;
$timestamp = time();
$timeout = ($timestamp-$timeoutseconds);
$fp = fopen("$file", "a+");
$write = $remote."||".$timestamp."\n";
fwrite($fp, $write);
fclose($fp);
$online_array = array();
$file_array = file($file);
foreach($file_array as $newdata){
	list($ip, $time) = explode("||", $newdata);
	if($time >= $timeout){
		array_push($online_array, $ip);
	}
}
$online_array = array_unique($online_array);
$online = count($online_array);
$m_time = explode(" ",microtime());
$m_time = $m_time[0] + $m_time[1];
$starttime = $m_time;
?>