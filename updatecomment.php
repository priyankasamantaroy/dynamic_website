<?php
require 'connect.php';
$id=$_GET["id"];
$sql="UPDATE comment SET status='approved'WHERE id=$id";
//If the record is not foundoutput an error message.Else return to the managecomments.php page
$retval=mysqli_query($link,$sql);
if(!$retval){
    die('Could not update data:'.mysql_error());
}
else{
    header("Location:http://localhost/property/managecomments.php");
    exit;
}
mysqli_close($link);
?>
