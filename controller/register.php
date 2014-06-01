
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
	if($username != null && $password != null  && $nickname!= null && $language!= null && $profession!= null && $email!= null )
	{
			//新增資料進資料庫語法
			$sql="insert into User(username,password,nickname,Language,profession,email)
			values('$username','$password','$nickname','$language','$profession','$email')";
			if(mysql_query($sql))
			{
					echo '新增成功!';
					echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';//這行怎麼改?
				$sql="insert into User(Cookie)
			values(md5($username.$password.$date))";	
			}
			else
			{
					echo '新增失敗!';
					echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';//這行是啥??
			}
	}
	else
	{
			echo '輸入值為空!';
			echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';//幫一下吧
	}
   

}
else{
	echo"錯誤的Email格式";	
}


/*
$checkUsername=mysql_query("SELECT username FROM user");
if($username=mysql_fetch_array($checkUsername)){
	echo $username'have been used';
}

$checkNickname=mysql_query("SELECT nickname FROM user");
if($nickname=mysql_fetch_array($checkNickname)){
	echo $nickname'have been used';
}

$checkEmail=mysql_query("SELECT email FROM user");
if($email=mysql_fetch_array($checkEmail)){
	echo $email'have been used';
}
*/
<<<<<<< HEAD
mysql_query("INSERT INTO User(username,password,nickname,Language,profession,email)
	VALUES('".$username."','".$password."','".$nickname."','".$language."','".$profession."','".$email."');");
=======


>>>>>>> 304d168ea4076ebf1da3749c44468d68f15ae49f

/*$username = mysql_real_escape_string($_POST['username']);
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
}*/
mysql_close();
?>
