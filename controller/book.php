<?php
require 'connect.php';
$resultA=mysql_query("SELECT * FROM Book;");
	while($bookDump=mysql_fetch_array($resultA)){
		echo "<tr><td><p>書名</p></td><td><p>".$bookDump['bookTitle']."</p></td></tr>";
    	echo "<tr><td><p>作者</p></td><td><p>".$bookDump['author']."</p></td></tr>";
    	echo "<tr><td><p>ISBN</p></td><td><p>".$bookDump['ISBN']."</p></td></tr>";
    	echo "<tr><td><p>日期</p></td><td><p>".$bookDump['date']."</p></td></tr>";
    	echo "<tr><td><p>commit數</p></td><td><p>".$bookDump['hot']."</p></td></tr>";
    	echo "<tr><td><p>提供者</p></td><td><p>".$bookDump['author']."</p></td></tr>";
    	echo "<tr><td><p>resource</p></td><td>""<a href=\"".$bookDump['resource']."\">".$bookDump['resource']."</a></td></tr>";
    	echo "<tr><td><p>type</p></td><td><p>".$bookDump['type']."</p></td></tr>";
    	echo "<tr><td><p>Language</p></td><td><p>".$bookDump['Language']."</p></td></tr>";
	}
?>