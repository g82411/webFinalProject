
<?php
require 'connect.php';
$username = mysql_real_escape_string($_POST['username']);
$username = htmlentities($username, ENT_NOQUOTES,"UTF-8");
$passwd = mysql_real_escape_string($_POST['password']);
$passwd = htmlentities($passwd, ENT_NOQUOTES,"UTF-8");
$nickname = mysql_real_escape_string($_POST['nickname']);
$nickname = htmlentities($nickname , ENT_NOQUOTES,"UTF-8");
$language = mysql_real_escape_string($_POST['language']);
$language = htmlentities($language , ENT_NOQUOTES,"UTF-8");
$profession = mysql_real_escape_string($_POST['profession']);
$profession = htmlentities($profession , ENT_NOQUOTES,"UTF-8");
$result=mysql_query("SELECT Cookie,uid FROM User WHERE id =".$username." password =".$password.";" );
if(!$username||!$passwd||!$nickname||!$language||!$profession){
	echo 'NullValue';
}
if(!mysql_fetch_array(mysql_query("SELECT ID,nickname FROM User where ID=".$username." or nickname=".$nickname.";"))){
	echo 'userExsist';
}
else{	
	mysql_query("INSERT INTO User(ID,password,nickname,Language,profession)
	VALUES(".$username.",".$passwd.",".$nickname.",".$language.",".$profession.");");
	echo 'input_sucess';
}
mysql_close();
?>