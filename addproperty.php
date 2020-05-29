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
<h3>Add a Property</h3> 
<a href="admin.php">Go back to Administrator Area</a>
<br>
<p>
 <div id="addproperty">
 <!--making a form-->
<form method="post" action="processadd.php"> 
<table>
          
        <tr>
            <td>Address1:</td>
            <td>
                <textarea name="address1" rows="2" cols="25" required="required"></textarea>
            </td>
        </tr>
        <tr>
            <td>Town:</td>
            <td>
                <textarea name="town" rows="1" cols="20" required="required"></textarea>
            </td>
        </tr>
        <tr>
            <td>County:</td>
            <td>
                <textarea name="county" rows="1" cols="20" required="required"></textarea>
            </td>
        </tr>
        <tr>
            <td>Bedrooms:</td>
            <td><input type="text" name="bedrooms" required="required">
            </td>
        </tr>
        <tr>
            <td>Price:</td>
            <td><input type="text" name="price" required="required">
            </td>
        </tr>
        <tr>
            <td>Short Description:</td>
            <td>
                <textarea name="shortdescription" rows="3" cols="35" required="required"></textarea>
            </td>
        </tr>
        <tr>
            <td>Long Description:</td>
            <td>
                <textarea name="longdescription" rows="15" cols="50" required="required"></textarea>
            </td>
        </tr>
        <tr>
            <td>Vendor ID:</td>
            <td><input type="number" name="vendorid" required="required">
            </td>
        </tr>
        <tr>
            <td>Category ID:</td>
            <td><input type="number" name="categoryid" required="required">
            </td>
        </tr>
        <tr> 
            <td>Image Path: </td> 
            <td><input type="text" name="image" required="required" /></td>
        </tr> 
        <tr> 
            <td><input type="submit" name="submit" value="Add Property" required="required">
        </td>
        </tr>
    </table>
    
 </form>
 </div><!--addproperty end div-->

 </div><!--content end div-->
<?php include("includes/footer.html");?>
</div>
</body>
</html>
