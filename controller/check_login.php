<?php
<<<<<<< HEAD
require 'connect.php';
$Cookie=$_POST['Key'];
$userA=mysql_query("SELECT * FROM User WHERE Cookie='".$Cookie."';");
echo $userA["UID"];
=======
	require 'connect.php';
	$Cookie = $_POST['Key'];
	$userA = mysql_query("SELECT * FROM User WHERE Cookie='".$Cookie."';");
	echo $userA["UID"];
>>>>>>> 3d8b2ecfe1d7d7a484d4d9d9690f02672092cc7c
?>