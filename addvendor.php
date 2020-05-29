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
<h3>Add a Vendor</h3> 
<p><a href="admin.php">Go back to Administrator Area</a>
<br>
 <div id="addvendor">
 <!--making a form-->
<form method="post" action="processaddvendor.php"> 
<table>
        <tr>
            <td>Surname:</td>
            <td>
                <textarea name="surname" rows="2" cols="25"  required="required"></textarea>
            </td>
        </tr>
        <tr>
            <td>Firstname:</td>
            <td>
                <textarea name="firstname" rows="1" cols="25"  required="required"></textarea>
            </td>
        </tr>
        <tr>
            <td>Address1:</td>
            <td>
                <textarea name="address1" rows="1" cols="25"  required="required"></textarea>
            </td>
        </tr>
        
        <tr>
            <td>town:</td>
            <td>
                <textarea name="town" rows="1" cols="25"  required="required"></textarea>
            </td>
        </tr>
        <tr>
            <td>county:</td>
            <td>
                <textarea name="county" rows="1" cols="25"  required="required"></textarea>
            </td>
        </tr>
              
        <tr>
            <td>mobile:</td>
            <td><input type="number" name="mobile" value="<?php echo $mobile;?>"></td>
        </tr>
        <tr>
            <td>email:</td>
            <td><input type ="email" name="email"  required="required"></td>
        </tr>
    
       
        
        <tr> 
            <td><input type="submit" name="submit" value="Add Vendor" required="required">
        </td>
        </tr>
    </table>
    
 </form>
 </div><!--addvendor end div-->

 </div><!--content end div-->
<?php include("includes/footer.html");?>
</div>
</body>
</html>
