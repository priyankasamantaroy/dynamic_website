
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
<h3>New and Old Service requests that you are working on:</h3>
<p><a href="admin.php">Go back to Administrator Area</a></p>
<?php //connecting with database
$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server,$dbuser,$password);
mysqli_select_db($link, "property");

//edit the SQL to get cooments only from planned not all of them
$sql ="SELECT * from service where status='pending'"; //deleting where clause to show all planned and penidng
$result=mysqli_query($link,$sql);

echo "<table>";
echo "<tr>
          <td><strong>service_no</td>
           <td><strong>propertyid</td>
            <td><strong>cust_name</td>
            <td><strong>phone</td>
            <td><strong>email</td> 
            <td><strong>query</td>    
            <td><strong>status</td>     <!--adding more columns for approval-->
            </tr>";
while($row=mysqli_fetch_array($result)) {
$service_no=$row["service_no"]; //adding id var from the dabase
$propertyid=$row["propertyid"];
$cust_name=$row["cust_name"];
$phone=$row["phone"];
$email=$row["email"];
$query=$row["query"];
$status=$row["status"];

echo "<tr>
<td>$service_no</td>
<td>$propertyid</td>
<td>$cust_name</td>
<td>$phone</td>
<td>$email</td>
<td>$query</td>
<td><a href='updateservice.php?service_no=$service_no' onclick=\"return confirm('Are you sure you want to update this service request?');\">close</td>  <!--delete row connecting page-->
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