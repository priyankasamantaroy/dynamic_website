<!--creating a php only for database connection.thatcan reuse several times -->
<?php
$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server, $dbuser, $password);
mysqli_select_db($link, "property");
?>
<!--just ass require statement while coonect with orther page-->
<!--the statement is:
require 'connect.php';
-->
