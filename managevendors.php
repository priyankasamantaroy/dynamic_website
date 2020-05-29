
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
<p><strong>Manage Vendors </p>
<a href="addvendor.php">Add a New Vendor</a>
<p><a href="admin.php">Go back to Administrator Area</a></p>
<?php //connecting with database
$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server,$dbuser,$password);
mysqli_select_db($link, "property");

//edit the SQL to get cooments only from planned not all of them
$sql ="SELECT * from vendor"; //deleting where clause to show all planned and penidng
$result=mysqli_query($link,$sql);

echo "<table>";
echo "<tr>
           <td><strong>vendorid</td>
           <td><strong>surname</td>
           <td><strong>firstname</td>
            <td><strong>address1</td>
            <td><strong>town</td>
            <td><strong>mobile</td>    
            <td><strong>Edit</td>
            <td><strong>Delete</td>    <!--adding more columns for approval-->
            </tr>";
while($row=mysqli_fetch_array($result)) 
{
$vendorid=$row["vendorid"];
$surname=$row["surname"]; //adding id var from the dabase
$firstname=$row["firstname"];
$address1=$row["address1"];
$town=$row["town"];
$mobile=$row["mobile"];


echo "<tr>
<td>$vendorid</td>
<td>$surname</td>
<td>$firstname</td>
<td>$address1</td>
<td>$town</td>
<td>$mobile</td>
<td><a href='editvendor.php?vendorid=$vendorid' onclick=\"return confirm('Are you sure you want to edit this vendor?');\">Edit</a></td> <!--conneting page to html approve row-->
<td><a href='deletevendor.php?vendorid=$vendorid' onclick=\"return confirm('Are you sure you want to delete this vendor?');\">Delete</a></td>  <!--delete row connecting page-->
</tr>"; //using some code of java script to get confirm about user side
}
echo "</table>";
mysqli_close($link);
?>

</div><!--end of content div-->
<?php include("includes/footer.html");?>
</div><!--end of container-->
</body>
</html>