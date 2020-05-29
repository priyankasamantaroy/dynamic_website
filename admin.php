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
<h3>Administrator Area</h3>
<?php
session_start();
//creating 4 links for the pages to use for admin
if(isset($_SESSION['username']))
{
    $username=$_SESSION['username'];
    echo "Hi " . $username . "! ";
    echo "Choose one of the menu option to manage commnents,products or services &nbsp";
    echo "<a href='logout.php'>Logout</a>";
    echo"<p><a href='managecomments.php'>Manage Comments</a>
        <p><a href='manageproperties.php'>Manage Properties</a>
        <p><a href='managevendors.php'>Manage Vendors </a>
        <p><a href='manageservices.php'>Manage Services</a>";
        
}
?>
</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>
