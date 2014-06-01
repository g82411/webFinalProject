<?php
session_start();
require 'connect.php';
$username = mysql_real_escape_string($_POST['username']);
$passwd = mysql_real_escape_string($_POST['password']);
$test=mysql_query("SELECT * FROM User WHERE username='".$username."';" );
$result==mysql_fetch_array($test);
if($result["password"]==$password)
{
	$cookie=md5(md5($usename.$password.date("Y/m/d_H:m:s")));
	$jsonRseponse = array("Cookie" => $cookie,
		"confirm" => True);
	echo json_encode($jsonRseponse);
	$_SESSION["Cookie"] = $cookie;
}
else{
	$jsonRseponse = array("confirm" => False);
	echo json_encode($jsonRseponse);
}
mysql_close();
?>