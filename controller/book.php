<?php
require 'connect.php';
$bid=$_GET['bid'];
$resultA=mysql_query("SELECT * FROM Book where BID='".$bid."';");
	while($bookDump=mysql_fetch_array($resultA)){
		echo json_encode($bookDump);
	}
?>