
<?php
require 'connect.php';

while($commitResult=mysql_fetch_array(mysql_query("SELECT CID,BID,UID,title,content,date FROM commit;"))){
$username=mysql_fetch_array(mysql_query("SELECT username FROM User where UID=".$commitResult['UID'].";"));
echo  "<div class=\"accordion-group\">";
echo  "<div class=\"accordion-heading\">"; 
echo      "<a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse".$commitResult['UID']."\">";
echo      $commitResult['title']."   ".$username."    ".$commitResult['date'];
echo      "</a>";
echo    "</div>";
echo    "<div id=\"collapse".$commitResult['UID']."\" class=\"accordion-body collapse in\">";
echo      "<div class=\"accordion-inner\">";
echo        $commitResult['content'];
echo      "</div>";
echo    "</div>";
echo  "</div>";
}
 
mysql_close();
?>