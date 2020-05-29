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
<!--adding a link for add new product-->
<strong>Manage Property</strong>
<p><a href="addproperty.php">Add a New Property</a></p>
<p><a href="admin.php">Go back to Administrator Area</a></p>
<?php
$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server,$dbuser,$password);
//connecting to database
mysqli_select_db($link, "property");
//to get all the products we need to run sql quiry
$sql = "SELECT property.*,vendor.vendorid from property,vendor WHERE property.vendorid=vendor.vendorid";
$result = mysqli_query($link,$sql);
if(mysqli_num_rows($result)>0)
{
    echo "<table>";
    echo "<tr>
            <td><strong>Image</td>
            <td><strong>PropertyId</td>
            <td><strong>VendorId</td>
            <td><strong>Price</td>
            <td><strong>Short Description</td>
            <td><strong>Edit</td>
            <td><strong>Delete</td>
            </tr>";
    while($row=mysqli_fetch_array($result))
    {
        $propertyid=$row["propertyid"];
        $vendorid=$row["vendorid"];
        $image=$row["image"];
        $shortdesc=$row["shortdescription"];
        $price=$row["price"];
        echo "<tr>
              <td><img src='$image' width=100 height=100> </td>
              <td>$propertyid</td>
              <td>$vendorid</td>
              <td>&euro;$price</td>
              <td>$shortdesc</td>
              <td><a href='editproperty.php?propertyid=$propertyid' onclick=\"return confirm('Are you sure you want to edit this property?');\">Edit</a></td> <!--conneting page to html approve row-->
              <td><a href='confirmdeleteproperty.php?propertyid=$propertyid' onclick=\"return confirm('Are you sure you want to delete this property?');\">Delete</a></td>  <!--delete row connecting page-->
               </tr>"; 
}//closing if for product detail row
}//closing while
echo "</table>";
mysqli_close($link);
?><!--php closed-->  
</div>
</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>
