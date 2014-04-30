<?php
require 'connect.php';
$username = mysql_real_escape_string($_POST['username']);
$passwd = mysql_real_escape_string($_POST['passwd']);
$result=mysql_query("SELECT Cookie,uid FROM user WHERE id =".$username." password =".$passwd.";" );
if(mysql_fetch_array($result)){
	setcookie("permittion",$result['Cookie']);
	setcookie("uid",$result['uid']);
	echo "True";
}
else{
	echo "False";
}
mysql_close();
?>