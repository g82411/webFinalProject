<?php
session_start();
require 'connect.php';
if($_SESSION["Cookie"]===$_Cookie["Cookie"]){

}
else{
header("Location:login.php")
}
mysql_close();
?>