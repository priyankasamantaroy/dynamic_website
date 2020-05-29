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
<div id="content">  <!--adding codes for all product table-->
<div id = "displayproperties">
<?php
$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server,$dbuser,$password);
//connecting to database
mysqli_select_db($link, "property");
//to get all the products we need to run sql quiry
$sql = "SELECT * from property";
$result = mysqli_query($link,$sql);
if(mysqli_num_rows($result)>0)
{//adding conditions for details product
//will forecast the result in a table formate
echo "<table>";
echo "<tr>
          <td><strong>Image</td>
          <td><strong>PropertyId</td>
          <td><strong>Price</td>
          <td><strong>Short Description</td>
          <td><strong>Details</td>
        </tr>";
while($row=mysqli_fetch_array($result))
{
    $propertyid=$row["propertyid"];
    $image=$row["image"];
    $shortdesc=$row["shortdescription"];
    $price=$row["price"];
  // $details=$row["details"];//adding new row of details
    echo "<tr>
              <td><img src='$image' width=100 height=100> </td>
              <td>$propertyid</td>
              <td>&euro;$price</td>
              <td>$shortdesc</td>
              <td><a href='moredetails.php?propertyid=$propertyid'>Details</a></td>
              </tr>"; 
}//closing if for product detail row
}//closing if
echo "</table>";

mysqli_close($link);
?><!--php closed-->  
</div>
</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>
