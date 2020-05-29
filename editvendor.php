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
<p><strong>Edit Vendor</p>
<a href="admin.php">Go back to Administrator Area</a>
<br>
<p>
<?php
require'connect.php';
$vendorid=$_GET["vendorid"];//get function will pull data from database 
mysqli_select_db($link,"property");//may not require as connect.php linked
$sql="SELECT* FROM vendor WHERE vendorid=$vendorid";
$result=mysqli_query($link, $sql);
$row=mysqli_fetch_array($result);
    $vendorid=$row["vendorid"];
    $surname=$row["surname"]; //adding id var from the dabase
    $firstname=$row["firstname"];
    $address1=$row["address1"];
    $town=$row["town"];
    $county=$row["county"];
    $mobile=$row["mobile"];
    $email=$row["email"];
             
mysqli_close($link);//mysql link close and php
?>
<!--making a form in html-->
<form method="post" action="processvendor.php">
    <input type="hidden" name="vendorid" value="<?php echo $vendorid;?>">
    <table>
        <tr>
            <td>Surname:</td>
            <td>
                <textarea name="surname" rows="2" cols="25"><?php echo $surname; ?></textarea>
            </td>
        </tr>
        <tr>
            <td>Firstname:</td>
            <td>
                <textarea name="firstname" rows="1" cols="25"><?php echo $firstname; ?></textarea>
            </td>
        </tr>
        <tr>
            <td>Address1:</td>
            <td>
                <textarea name="address1" rows="1" cols="25"><?php echo $address1; ?></textarea>
            </td>
        </tr>
        
        <tr>
            <td>town:</td>
            <td>
                <textarea name="town" rows="1" cols="25"><?php echo $town; ?></textarea>
            </td>
        </tr>
        <tr>
            <td>county:</td>
            <td>
                <textarea name="county" rows="1" cols="25"><?php echo $county; ?></textarea>
            </td>
        </tr>
              
        <tr>
            <td>mobile:</td>
            <td><input type="number" name="mobile" value="<?php echo $mobile;?>"></td>
        </tr>
        <tr>
            <td>email:</td>
            <td><input type ="email" name="email" value="<?php echo $email;?>"></td>
        </tr>
    
        <tr> 
            <td><input type="submit" name="submit" value="Update Vendor"></td>
        </tr>
    </table>
</form>
</div><!--closing of content-->
<?php include("includes/footer.html");?>
</div>
</body>
</html>
