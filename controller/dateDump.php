<?php
require 'connect.php';
$date=mysql_query("SELECT BID,bookTitle,imageURL,date FROM Book ORDER BY date DESC LIMIT 20");
	while($dateDump=mysql_fetch_array($date)){
	echo json_encode($dateDump);
	}

mysql_close();
?>