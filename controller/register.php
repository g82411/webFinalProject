
<?php
require 'connect.php';
$username = mysql_real_escape_string($_POST['username']);
$passwd = mysql_real_escape_string($_POST['password']);
$nickname = mysql_real_escape_string($_POST['nickname']);
$language = mysql_real_escape_string($_POST['language']);
$profession = mysql_real_escape_string($_POST['profession']);
$result=mysql_query("SELECT Cookie,uid FROM user WHERE id =".$username." password =".$password.";" );
if(!$username||!$passwd||!$nickname||!$language||!$profession){
	echo 'NullValue';
}
if(!mysql_fetch_array(mysql_query("SELECT ID,nickname FROM user where ID=".$username." or nickname=".$nickname.";"))){
	echo 'userExsist';
}
else{	
	mysql_query("INSERT INTO user(ID,password,nickname,Language,profession)
	VALUES(".$username.",".$passwd.",".$nickname.",".$language.",".$profession.");");
	echo 'input_sucess';
}
mysql_close();
?>