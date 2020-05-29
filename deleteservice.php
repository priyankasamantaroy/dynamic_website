<?php
require 'connect.php';
$service_no=$_GET["service_no"];
$sql="DELETE FROM service WHERE service_no=$service_no";
//If the record is not foundoutput an error message.Else return to the managecomments.php page
$retval=mysqli_query($link,$sql);
if(!$retval){
    die('Could not delete data:'.mysql_error());
}
else{
    header("Location:http://localhost/property/manageservices.php");
    exit;
}
mysqli_close($link);
?>
