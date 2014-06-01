<?php 
require( 'config.php' );
$username = $_POST['username']; 
$password = $_POST['password'];
if (!$_POST['password'] && !$_POST['username']) { 
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
<form action="login.php" method="POST">
  <p>Username: <input type="text" name="username" size="45"></p>
  <p>Password: <input type="password" name="password" size="45"></p>
  <p><input type="submit" value="Submit"><input type="reset" value="Reset"></p>
</form>
<?
} else {
$stuff = mysql_query("SELECT * FROM user WHERE username='".$username."' AND password='".$password."'") or die("MySQL Login Error: ".mysql_error()); 
if (mysql_num_rows($stuff) > 0) { 
session_start();
$_SESSION['username'] = $username;
header("Location: member.php");

} else { 
header("Location: login.php"); 
} 
}
?> 

</body>
</html>