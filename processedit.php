<?php
require'connect.php';

$propertyid=$_POST["propertyid"];//mention in web list need to POST
$address1=$_POST["address1"];//not mention in web so need to GET
$town=$_POST["town"];
$county=$_POST["county"];
$price=$_POST["price"];
$bedrooms=$_POST["bedrooms"];
$shortdesc=$_POST["shortdescription"];
$longdesc=$_POST["longdescription"];
$image=$_POST["image"];
$vendorid=$_POST["vendorid"];
$categoryid=$_POST["categoryid"];


$sql= "UPDATE property SET 
propertyid='$propertyid',
address1='$address1', 
town='$town',
county='$county',
price='$price', 
bedrooms='$bedrooms',
shortdescription='$shortdesc',
longdescription='$longdesc',
image='$image',
vendorid='$vendorid',
categoryid='$categoryid'
 WHERE propertyid='$propertyid'";

$retval=mysqli_query($link, $sql);
if(! $retval)
{
    die('Could not update data:'.mysql_error());
}
else
{
    header("Location:http://localhost/property/manageproperties.php");
    exit;
}

echo"Property Updated!";
mysqli_close($link);
?>


