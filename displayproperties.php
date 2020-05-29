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
require'connect.php';//connecting with coonection template we create seperately for database

$categoryid=$_GET["categoryid"];
//sql quiry needs all the product details where categoryid is same as url passes above
$sql="SELECT* from property,category 
WHERE property.categoryid=$categoryid AND category.categoryid=$categoryid";
//output will be:
$output=mysqli_query($link, $sql);
/*funtion fetch array() will fetche a result.
we want to access the categoryname field so we can use it as 
page heading*/
$getcategory=mysqli_fetch_array($output);
echo"<h3>";
echo $getcategory["categoryname"];
echo"</h3>";
//code is same as displayallproducts
$result = mysqli_query($link,$sql);
if(mysqli_num_rows($result)>0)
{  
     //adding conditions for details product
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
    echo "<tr>
              <td><img src='$image' width=100 height=100> </td>
              <td>$propertyid</td>
              <td>&euro;$price</td>
              <td>$shortdesc</td>
              <td><a href='moredetails.php?propertyid=$propertyid'>Details</a></td>
              </tr>"; 
}//closing while
echo "</table>";
}//closing if
else
{
    echo"<h3> There are currently no items in this category</h3>";
}
mysqli_close($link);
?><!--php closed-->  
</div>
</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>
