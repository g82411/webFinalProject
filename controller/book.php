<?php
require 'connect.php';
while($bookDump=mysql_fetch_array(mysql_query("SELECT * FROM Book ORDER BY date LIMIT 0,20;"))){
	echo $bookDump['bookTitle'];
	echo $bookDump['author'];
	echo $bookDump['ISBN'];
	echo $bookDump['date'];
	echo $bookDump['hot'];
	echo $bookDump['resource'];
	echo $bookDump['type'];
	echo $bookDump['Language'];
}
?>