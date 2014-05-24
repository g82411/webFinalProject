<?php
require 'connect.php';
$title=mysql_real_escape_string($_POST['title']);
$title= htmlentities($title, ENT_NOQUOTES,"UTF-8");
$bid=mysql_real_escape_string($_GET['bid']);
$bid= htmlentities($bid, ENT_NOQUOTES,"UTF-8");
$uid=$_COOKIE['uid'];
$content= mysql_real_escape_string($_POST['content']);
$content= htmlentities($content, ENT_NOQUOTES,"UTF-8");
mysql_query("INSERT INTO commit (title,BID,UID,conetnt) VALUE (".$title.",".$bid.",".$uid.",".$content.");");
$BookInformationArray=mysql_query("SELECT hot FROM book WHERE BID = ".$bid.";");
$bookHot=$BookInformationArray['hot']+1;
mysql_query("UPDATE book SET hot = ".$bookHot." WHERE BID = ".$bid.";");
mysql_close();
?>