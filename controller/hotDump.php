<?php
require 'connect.php';
$hot=mysql_query("SELECT * FROM Book ORDER BY hot DESC LIMIT 20");
	while($hotDump=mysql_fetch_array($hot)){
	echo json_encode($hotDump);
	}

mysql_close();
?>