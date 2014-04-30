<?php
require 'connect.php';
$username = mysql_real_escape_string($_POST['username']);
$passwd = mysql_real_escape_string($_POST['passwd']);
$result=mysql_query("SELECT cookie FROM user WHERE user =".$username." passwd =".$passwd.";" );
if(mysql_fetch_array($result)){
	setcookie("permittion",$result['cookie']);
	echo "True";
}
else{
	echo "False";
}
mysql_close();
?>