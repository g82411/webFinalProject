<?php
session_start();
require 'connect.php';
$username = mysql_real_escape_string($_POST['username']);
$passwd = mysql_real_escape_string($_POST['password']);
$result=mysql_query("SELECT * FROM user WHERE username=".$username." and password =".$password.";" );
if(mysql_fetch_array($result)){
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