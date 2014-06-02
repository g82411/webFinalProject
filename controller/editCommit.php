<?php
	require 'connect.php';
	$content = $_POST["content"];
	$commitTitle = $_POST["commitTitle"];
	$bid=$_POST["bid"];
	mysql_query("INSERT INTO commit VALUES(NULL,'".$bid."','1','".$commitTitle."','".date( "Y-m-d H:i:s")."');");
	mysql_close();
?>	