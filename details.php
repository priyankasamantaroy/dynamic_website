
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
<!--adding code to content div-->
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
$image=$row["image"];    
$bedrooms=$row["bedrooms"];
$price=$row["price"];
$shortdesc=$row["shortdescription"];
$longdesc=$row["longdescription"];

    //display result
    echo "<h2>$address1</h2>
    <br>
   <img src='$image' width=200 height=100 border=3px>
    <h3>";
echo "Bedrooms";
echo "</h3>$bedrooms;
   <br> <h3>";
echo "shortDescription";
echo "</h3> $shortdesc
    <br> <h3>";
echo "Long Description";
echo "</h3>$longdesc
    <br> <h3>";
echo "Price";
echo"</h3>&euro; $price";

  mysqli_close($link);//closing sql link
  ?><!--closing php-->
  <!--creating button -->
  <p>
  <button onclick="goBack()">
   Go Back to Property Listing
   </button>
   <script>
   function goBack(){
     window.history.back();
   }
   </script>
   </p>
  
</div><!--closing content>
<?php include("includes/footer.html");?>
</div>
</body>
</html>
