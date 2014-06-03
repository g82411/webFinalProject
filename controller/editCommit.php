<?php
	require 'connect.php';
	$content = $_POST["content"];
	$commitTitle = $_POST["commitTitle"];
	$bid=$_POST["bid"];
	echo $commitTitle;
	mysql_query("INSERT INTO commit VALUES(NULL,'".$bid."','51','".$commitTitle."','".$content."','".date( "Y-m-d H:i:s")."');");
	mysql_close();
?>	