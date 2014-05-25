<?php
	require 'connect.php';
	$search_string = mysql_real_escape_string($_POST['search_string']);
		$search_result = mysql_query((SELECT * FROM 'USER' WHERE 'TABLES' LIKE '%$search_string%'));
		while($row = mysqli_fetch_array($search_result)){
			echo $row['BID'] . " " . $row['bookTitle']; 
		}
	mysql_close();
?>