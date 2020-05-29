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
  <p> <strong>Welcome to the Dream Maker.  A choice of Lifestyle Living and open Spaces <strong></p>
 <p>A few of the recent added properties</p>
<div class="grid-container">  
<?php
$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server,$dbuser,$password);
//connecting to database
mysqli_select_db($link, "property");
//to get all the products we need to run sql quiry
$sql = "SELECT * from property";
$result = mysqli_query($link,$sql);
if(mysqli_num_rows($result)>0)
{
//will forecast the result in a table formate
$s=0;
  while($row=mysqli_fetch_array($result))
  {
    if($s<3)//will display 3 properties as loop will iterate 3 times
    {
      $propertyid=$row["propertyid"];
      $image=$row["image"];
      $address1=$row["address1"];
      $town=$row["town"];
      $county=$row["county"];
      $price=$row["price"];

      echo "<div class='grid-item'>
              <table>
              <tr>
                <td align=center>
                    <a href='moredetails.php?propertyid=$propertyid'><img src='$image' align=center height=150 width=250></a>
                    </td>
              </tr>
              <tr><td>$address1, $town, $county</td></tr>
              <tr><td>&euro;$price</td></tr>
              </table>
          </div>"; 
    }
      $s++; 
  }//closing while   
}//closing if
mysqli_close($link);
?><!--php closed-->  
</div>
</div><!--end of content div-->
<?php include("includes/footer.html");?>
</div><!--end of container-->
</body>
</html>
