<?php
	require 'connect.php';
	$content = $_POST["content"];
	$commitTitle = $_POST["commitTitle"];
	$bid=$_POST["bid"];
<<<<<<< HEAD
	echo $commitTitle;
	mysql_query("INSERT INTO commit VALUES(NULL,'".$bid."','51','".$commitTitle."','".$content."','".date( "Y-m-d H:i:s")."');");
=======
	mysql_query("INSERT INTO commit VALUES(NULL,'".$bid."','1','".$commitTitle."','".$content."','".date( "Y-m-d H:i:s")."');");
>>>>>>> 3d8b2ecfe1d7d7a484d4d9d9690f02672092cc7c
	mysql_close();
?>	