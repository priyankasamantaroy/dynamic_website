<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Dream Maker</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="css/styles.css">
 </head>
<body>
<div id="container">    
<?php include("includes/header.html");?>
<?php include("includes/nav.html");?>
<div id="content">
<?php require 'connect.php'; //NEED TO CHANGE ALL FOR PROPERTY-----------------------------
// $propertyid=$_POST["propertyid"];
 $address1=$_POST["address1"];
 $town=$_POST["town"];
 $county=$_POST["county"];
 $price=$_POST["price"];
 $bedrooms=$_POST["bedrooms"];
 $shortdesc=$_POST["shortdescription"];
 $longdesc=$_POST["longdescription"];
 $image=$_POST["image"];
 $categoryid=$_POST["categoryid"];
 $vendorid=$_POST["vendorid"];


$sql_insert="INSERT INTO 
property(address1,town,county,price,bedrooms,shortdescription,longdescription,image,categoryid,vendorid) 
VALUES ('$address1', '$town', '$county','$price', '$bedrooms','$shortdesc', '$longdesc','$image','$categoryid','$vendorid')";
if(mysqli_query($link, $sql_insert))
{ echo "<h3>Property Added!</h3>"; 
  echo "<a href='manageproperties.php'> Return to Manage Properties page </a>";} 
else 
{ echo "An error occured, try again!"; } 
mysqli_close($link); 
?>
</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>
