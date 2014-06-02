<?php
require 'connect.php';
$Cookie=$_POST['Key'];
$userA=mysql_query("SELECT * FROM User WHERE Cookie='".$Cookie."';");
echo $userA["UID"];
?>