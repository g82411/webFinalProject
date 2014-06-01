<?php
$bookTitle=htmlentities(mysql_escape_string($_POST['bookTitle']));
$author=htmlentities(mysql_escape_string($_POST['author']));
$ISBN=htmlentities(mysql_escape_string($_POST['ISBN']));
$language=htmlentities(mysql_escape_string($_POST['language']));
$profession=htmlentities(mysql_escape_string($_POST['profession']));
$email=htmlentities(mysql_escape_string($_POST['email']));
mysql_query("INSERT INTO Book (bookTitle,author,imageURL,ISBN,date,hot,resource,profession,Language) VALUES 
	('".$bookTitle."','".$author."','".$imageUrl."','".$ISBN."','".date("Y-m-d")."','0','".$resource."','".$profession."','".$language."');");

?>