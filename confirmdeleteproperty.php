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

<?php require 'connect.php'; 
$propertyid=$_GET['propertyid']; 
$sql="SELECT * from property where propertyid=$propertyid";
$result=mysqli_query($link, $sql); 
echo "<h3>Confirm Delete Property</h3>";
echo "<p>"; echo "<table>"; 
echo "<tr> 
        <td><strong>Image</td>
        <td><strong>PropertyId</td>
        <td><strong>Price</td>
        <td><strong>Short Description</td>
    </tr>"; 
    $row=mysqli_fetch_array($result); 
    $image=$row["image"]; 
    $propertyid=$row["propertyid"];
    $shortdesc=$row["shortdescription"]; 
    $price=$row["price"]; 
echo "<tr> 
        <td><img src='$image' width=100 height=100> </td> 
        <td>$propertyid</td> <td>&euro; $price</td>
        <td>$shortdesc</td> 
     </tr>"; 
     echo "</table>"; 
     echo "Are you sure you want to delete this property? <p>
      <a href='deleteproperty.php?PropertyId=$propertyid'>Delete</a> 
      <a href='manageproperties.php'>Cancel</a>"; 
mysqli_close($link);
?>
</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>
