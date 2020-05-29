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
 <!--creating button -->
  <p>      
      <button onclick="goBack()">
      <strong>Go Back to Main Menu</strong>
      </button>
      <script>
      function goBack()
      {
      window.history.back();
      }
      </script>
 </p>
<!--adding code to content div-->
<div class="grid-container"> 
<?php
$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server, $dbuser, $password);
mysqli_select_db($link,"property");//connnecting to database
//asking for details of single property
$propertyid=$_GET["propertyid"];
$sql="SELECT * FROM property WHERE propertyid=$propertyid";
$result=mysqli_query($link,$sql);
$row=mysqli_fetch_array($result);
    $address1=$row["address1"];
    $town=$row["town"];
    $county=$row["county"];
    $image=$row["image"];    
    $bedrooms=$row["bedrooms"];
    $price=$row["price"];
    $shortdesc=$row["shortdescription"];
    $longdesc=$row["longdescription"];
    $propertyid=$row["propertyid"];

    echo "<div class='grid-item'>
                  <table>
                  <tr><td><strong>Property ID</strong>     : $propertyid</td></tr>
                  <tr><td align=center><a href='moredetails.php?propertyid=$propertyid'><img src='$image' align=center height=150 width=250></a></td></tr>
                  <tr><td><strong>Address</strong>   : $address1, $town, $county</td></tr>
                  <tr><td><strong>Price</strong>     : &euro;$price</td></tr>
                  <tr><td><strong>Bedrooms</strong>     : $bedrooms</td></tr>
                  <tr><td><strong>Short-Description</strong>    : $shortdesc</td><tr>
                  <tr><td><strong>Long-Description</strong>      : $longdesc</td><tr>
                  </table>
            </div>";   
   
  mysqli_close($link);//closing sql link
  ?><!--php closed-->  
  </div>
  </div><!--end of content div-->
  <?php include("includes/footer.html");?>
  </div><!--end of container-->
  </body>
  </html>