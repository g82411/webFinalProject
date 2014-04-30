<?php
mysql_connect("localhost","webFinalSite","vXwyp9U8C2hTnRW9");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 mysql_select_db("webFinal", $con);
?>