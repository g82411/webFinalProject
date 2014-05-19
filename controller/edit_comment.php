<?php
require 'connect.php';
$title = mysql_real_escape_string($_POST['title']);
$content = mysql_real_escape_string($_POST['content']);
$BID = mysql_real_escape_string($_POST['BID']);
$user = mysql_real_escape_string($_POST['UID']);
$date = date("Y-m-d H:i");
mysql_query("INSERT INTO user(title,BID,user,content,date)
VALUE(".$title.",".$BID.",".$user.",".$content.",".$date.")")
mysql_close();
?>