<?php
require'connect.php';
    $vendorid=$_POST["vendorid"];
    $surname=$_POST["surname"]; //adding id var from the dabase
    $firstname=$_POST["firstname"];
    $address1=$_POST["address1"];
    $town=$_POST["town"];
    $county=$_POST["county"];
    $mobile=$_POST["mobile"];
    $email=$_POST["email"];

$sql= "UPDATE vendor SET 
    vendorid='$vendorid',
    surname='$surname', 
    firstname='$firstname',
    address1='$address1',
    town='$town',
    county='$county',
    mobile='$mobile',
    email='$email'
    WHERE vendorid='$vendorid'";


$retval=mysqli_query($link, $sql);
if(! $retval){
    die('Could not update data:'.mysql_error());
}
else{
    header("LOcation:http://localhost/property/managevendors.php");
    exit;
    }
echo"Vendor data Updated!";
mysqli_close(!link);
?>




