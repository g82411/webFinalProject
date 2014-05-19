<?php
require 'connect.php';
$title = mysql_real_escape_string($_POST['title']);
$content = mysql_real_escape_string($_POST['content']);
$BID = mysql_real_escape_string($_POST['BID']);
$user = mysql_real_escape_string($_POST['UID']);
$date = date("Y-m-d H:i");
mysql_query("INSERT INTO user(title,BID,user,content,date)
VALUE(".$title.",".$BID.",".$user.",".$content.",".$date.");");
$BookInformationArray=mysql_query("SELECT hot FROM book WHERE BID = ".$bid.";");
$bookHot=$BookInformationArray['hot']+1;
mysql_query("UPDATE book SET hot = ".$bookHot." WHERE BID = ".$bid.";");
mysql_close();
?>