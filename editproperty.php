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
<p><strong>Edit Property</p>
<a href="admin.php">Go back to Administrator Area</a>
<br>
<br>
<?php
require'connect.php';
$propertyid=$_GET["propertyid"];//get function will pull data from database 
mysqli_select_db($link,"property");//may not require as connect.php linked
$sql="SELECT* FROM property WHERE propertyid=$propertyid";
$result=mysqli_query($link, $sql);
   $row=mysqli_fetch_array($result);
        $propertyid=$row["propertyid"];
        $address1=$row["address1"];
        $town=$row["town"];
        $county=$row["county"];
        $price=$row["price"];
        $bedrooms=$row["bedrooms"];
        $shortdesc=$row["shortdescription"];
        $longdesc=$row["longdescription"];
        $image=$row["image"];
        $categoryid=$row["categoryid"];
        $vendorid=$row["vendorid"];
       
mysqli_close($link);//mysql link close and php
?>
<!--making a form in html-->
<form method="post" action="processedit.php">
<input type="hidden" name="propertyid" value="<?php echo $propertyid; ?>"/> 
<table>
        <tr> 
        <td><?php echo "<img src='$image' width=100 height=100>" ?></td> 
        </tr>
             <tr>
            <td>Address1:</td>
            <td>
                <textarea name="address1" rows="2" cols="25"><?php echo $address1; ?></textarea>
            </td>
        </tr>
        <tr>
            <td>Town:</td>
            <td>
                <textarea name="town" rows="1" cols="20"><?php echo $town; ?></textarea>
            </td>
        </tr>
        <tr>
            <td>County:</td>
            <td>
                <textarea name="county" rows="1" cols="20"><?php echo $county; ?></textarea>
            </td>
        </tr>
        <tr>
            <td>Price:</td>
            <td><input type="text" name="price" value="<?php echo $price;?>"></td>
        </tr>
        <tr>
            <td>Bedrooms:</td>
            <td><input type="text" name="bedrooms" value="<?php echo $bedrooms;?>"></td>
        </tr>
        <tr>
            <td>Short Description:</td>
            <td>
                <textarea name="shortdescription" rows="3" cols="35"><?php echo $shortdesc; ?></textarea>
            </td>
        </tr>
        <tr>
            <td>Long Description:</td>
            <td>
                <textarea name="longdescription" rows="15" cols="50"><?php echo $longdesc; ?></textarea>
            </td>
        </tr>
        <tr> 
            <td>Image Path: </td> 
            <td><input type="text" name="image" value="<?php echo $image;?>"></td>
        </tr> 
        <tr>
            <td>Vendor ID:</td>
            <td><input type="number" name="vendorid" value="<?php echo $vendorid;?>"></td>
        </tr>
        <tr>
            <td>Category ID:</td>
            <td><input type="number" name="categoryid" value="<?php echo $categoryid;?>"></td>
        </tr>
        <tr> 
            <td><input type="submit" name="submit" value="Update Property"/></td>
        </tr>
    </table>
</form>
</div><!--closing of content-->
<?php include("includes/footer.html");?>
</div>
</body>
</html>
