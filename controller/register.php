
<?php
	require 'connect.php';
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
	$nickname = mysql_real_escape_string($_POST['nickname']);
	$language = mysql_real_escape_string($_POST['language']);
	$profession = mysql_real_escape_string($_POST['profession']);
	$email = mysql_real_escape_string($_POST['email']);

	$standard = "/^[\w]*@[\w-]+(\.[\w-]+)+$/" ;
	$date = date("Y-m-d H:i");
	if(preg_match($standard, $email, $check)) {
		echo "Success!";
		if($username != null && $password != null  && $nickname!= null && $language!= null && $profession!= null && $email!= null){
			mysql_query("INSERT INTO User(username,password,nickname,Language,profession,email)VALUE('".$username."','".$password."','".$nickname."','".$language."','".$profession."','".$email."');");
			echo '輸入';
		}
		else{
			echo '輸入值為空!';		
		}
	}
	else{
		echo"錯誤的Email格式";	
	}
	mysql_close();
?>
