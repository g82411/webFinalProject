<?php
require 'connect.php';
$resultA=mysql_query("SELECT * FROM Book;");
while($bookDump=mysql_fetch_array($resultA)){
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