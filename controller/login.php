<?php
session_start();
require 'connect.php';
$username = mysql_real_escape_string($_POST['username']);
$passwd = mysql_real_escape_string($_POST['password']);
if($result=mysql_fetch_array(mysql_query("SELECT * FROM User WHERE username='".$username."' and password ='".$passwd."';" )))
{
	$jsonRseponse = array("Cookie" => $result['Cookie'],
		"confirm" => True);
	echo json_encode($jsonRseponse);
	$_SESSION["Cookie"] = $result['Cookie'];
}
else{
	$jsonRseponse = array("confirm" => False);
	echo json_encode($jsonRseponse);
}
mysql_close();
?>