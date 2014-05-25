<?php
require 'connect.php';
$resultA=mysql_query("SELECT * FROM Book;");
	while($bookDump=mysql_fetch_array($resultA)){
		echo json_encode($bookDump);
	}
?>