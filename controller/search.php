<?php
	require 'connect.php';
	$search_string = mysql_real_escape_string($_POST['search_string']);
	//mysql_query($search_string);
	//$result = mysql_query($con, "SELECT * FROM USER");
	//while($row = mysqli_fetch_array($result)) {
		$search_result = mysql_query((SELECT * FROM 'USER' WHERE 'TABLES' LIKE '%$search_string%'));
		while($row = mysqli_fetch_array($search_result)){
			echo $row['BID'] . " " . $row['bookTitle']; 
		}
	//}
	mysql_close();
?>