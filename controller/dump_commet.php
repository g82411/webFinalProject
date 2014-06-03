
<?php
require 'connect.php';
$bid=$_GET['bid'];
$commentA=mysql_query("SELECT * FROM commit WHERE BID='".$bid."';");
while ($result=mysql_fetch_array($commentA)) {
	echo "<div class=\"panel panel-default\">";
    echo "<div class=\"panel-heading\">";
	echo "<h4 class=\"panel-title\">";
    echo "<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse".$result["CID"]."\">";
    echo $result["title"]."</a></h4></div>";
    echo "<div id=collapse".$result["CID"]."class=\"panel-collapse collapse\">";
    echo "<div class=\"panel-body\">".$result["content"]."</div></div></div>";
}
mysql_close();
?>