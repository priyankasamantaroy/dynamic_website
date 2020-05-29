<?php
require 'connect.php';
$propertyid=$_GET["PropertyId"];
$sql="DELETE FROM property WHERE PropertyId=$propertyid";
//If the record is not foundoutput an error message.Else return to the managecomments.php page
$retval=mysqli_query($link,$sql);
if(!$retval){
    die('Could not delete data:'.mysql_error());
}
else{    
    header("Location:http://localhost/property/manageproperties.php");
    exit;
}
mysqli_close($link);
?>
