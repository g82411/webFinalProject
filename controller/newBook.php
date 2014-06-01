<?php
require 'connect.php';
$bookTitle=htmlentities(mysql_escape_string($_POST['bookTitle']));
$author=htmlentities(mysql_escape_string($_POST['author']));
$ISBN=htmlentities(mysql_escape_string($_POST['ISBN']));
$language=htmlentities(mysql_escape_string($_POST['language']));
$profession=htmlentities(mysql_escape_string($_POST['profession']));
$resource=htmlentities(mysql_escape_string($_POST['resource']));
$imageUrl=htmlentities(mysql_escape_string($_POST['imageUrl']));

mysql_query("INSERT INTO Book VALUES ('NULL','49','".$bookTitle."','".$author."','".$imageUrl."','".$ISBN."','".date("Y-m-d")."','0','".$resource."','".$profession."','".$language."');");
echo $bookTitle;
mysql_close();
?>