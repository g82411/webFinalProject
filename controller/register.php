
<?php
require 'connect.php';
$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);
$nickname = mysql_real_escape_string($_POST['nickname']);
$language = mysql_real_escape_string($_POST['language']);
$profession = mysql_real_escape_string($_POST['profession']);
$email = mysql_real_escape_string($_POST['email']);
 	$checkUsername=mysql_query("SELECT username FROM user");
 	$checkPassword=mysql_query("SELECT password FROM user");
 	$checkNickname=mysql_query("SELECT nickname FROM user");
 	$checkEmail=mysql_query("SELECT email FROM user");

$standard = "/^[\w]*@[\w-]+(\.[\w-]+)+$/" ;
$date = date("Y-m-d H:i");
if(preg_match($standard, $email, $check)) {
	echo "Sucess!";
	if($username != null && $password != null  && $nickname!= null && $language!= null && $profession!= null && $email!= null )
	{
			echo '輸入';
			/*if($username == mysql_fetch_array($checkUsername)||$password == mysql_fetch_array($checkPassword))
			||$nickname == mysql_fetch_array($checkNickname)||$email == mysql_fetch_array($checkEmail)){
			
			echo '  重複';
			
			}
			else{
			
			echo '  沒重複';
			
			}*/
			//新增資料進資料庫語法
			/*$sql="insert into User(username,password,nickname,Language,profession,email)
			values('$username','$password','$nickname','$language','$profession','$email')";
			if(mysql_query($sql))
			{
					echo '新增成功!';
					
				$sql="insert into User(Cookie)
			values(md5($username.$password.$date))";	
			}
			else
			{
					echo '新增失敗!';
					
			}*/
	}
	else
	{
			echo '輸入值為空!';
			
	}
   

}
else{
	echo"錯誤的Email格式";	
}

mysql_close();
?>
