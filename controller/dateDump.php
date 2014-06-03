<?php
require 'connect.php';
$date=mysql_query("SELECT * FROM Book ORDER BY date DESC LIMIT 20");
	while($dateDump=mysql_fetch_array($date)){
	echo "<a href=\"./book.html#bid=".$dateDump["BID"]."\">".$dateDump["bookTitle"]."</a>";
	echo "<br>";
	}

mysql_close();
?>