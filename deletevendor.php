<?php
require 'connect.php';
$vendorid=$_GET["vendorid"];
$sql="DELETE FROM vendor WHERE vendorid=$vendorid";
//If the record is not foundoutput an error message.Else return to the managecomments.php page
$retval=mysqli_query($link,$sql);
if(!$retval){
    die('Could not delete data:'.mysql_error());
}
else{    
    header("Location:http://localhost/property/managevendors.php");
    exit;
}
mysqli_close($link);
?>
