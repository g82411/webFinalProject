<?php
	require 'connect.php';
	$content = $_POST["content"];
	$commitTitle = $_POST["commitTitle"];
	$bid=$_POST["bid"];
<<<<<<< HEAD
	mysql_query("INSERT INTO commit VALUES(NULL,'".$bid."','1','".$commitTitle."','".$content."','".date( "Y-m-d H:i:s")."');");
=======
	mysql_query("INSERT INTO commit VALUES(NULL,'".$bid."','1','".$commitTitle."','".date( "Y-m-d H:i:s")."');");
>>>>>>> a82c75cd62d51445a1887ef8712111ab60878274
	mysql_close();
?>	