<?php
require 'connect.php';
$title=mysql_real_escape_string($_POST['title']);
$bid=mysql_real_escape_string($_GET['bid']);
$uid=$_COOKIE['uid'];
$content=mysql_real_escape_string($_POST['content']);
mysql_query("INSERT INTO commit (title,BID,UID,conetnt) VALUE (".$title.",".$bid.",".$uid.",".$content.");");
$BookInformationArray=mysql_query("SELECT hot FROM book WHERE BID = ".$bid.";");
$bookHot=$BookInformationArray['hot']+1;
mysql_query("UPDATE book SET hot = ".$bookHot." WHERE BID = ".$bid.";");
mysql_close();
?>