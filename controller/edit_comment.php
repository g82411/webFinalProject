<?php
require 'connect.php';
$title = mysql_real_escape_string($_POST['title']);
$title = htmlentities($title, ENT_NOQUOTES,"UTF-8");
$content = mysql_real_escape_string($_POST['content']);
$content = htmlentities($content, ENT_NOQUOTES,"UTF-8");
$BID = mysql_real_escape_string($_POST['BID']);
$BID = htmlentities($BID, ENT_NOQUOTES,"UTF-8");
$user = mysql_real_escape_string($_POST['UID']);
$user = htmlentities($user, ENT_NOQUOTES,"UTF-8");
$date = date("Y-m-d H:i");
mysql_query("INSERT INTO user(title,BID,user,content,date)
VALUE(".$title.",".$BID.",".$user.",".$content.",".$date.");");
$BookInformationArray=mysql_query("SELECT hot FROM book WHERE BID = ".$bid.";");
$bookHot=$BookInformationArray['hot']+1;
mysql_query("UPDATE book SET hot = ".$bookHot." WHERE BID = ".$bid.";");
mysql_close();
?>