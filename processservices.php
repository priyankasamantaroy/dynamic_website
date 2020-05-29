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

<?php //adding php code to activate the add comment button for the user form
$server="localhost"; 
$dbuser="root";
$password="";
$link=mysqli_connect($server,$dbuser,$password);
mysqli_select_db($link, "property"); //connecting to mysqli property database
//connecting form to post
$service_no=$_POST["service_no"];
$propertyid=$_POST["propertyid"];
$cust_name=$_POST["cust_name"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$query=$_POST["query"];
$status="pending";
$sql_insert="INSERT INTO service(service_no,propertyid,cust_name,phone,email,query,status)
                VALUES('$service_no','$propertyid','$cust_name','$phone','$email','$query','$status')";
if(mysqli_query($link, $sql_insert))
{
    echo "<h3>Your service request has generated!</h3>
        <p> Our administrators moderate all service requests
          and will get back to you soon. Thank You !!</p>";    
    echo "<a href='getservices.php'> Return to Service page </a>";
}
else 
{
    echo " An error occured,try again!";
}
mysqli_close($link); //closing mysqli link
?><!--closing php-->
</div><!--closing of content-->
<?php include("includes/footer.html");?>
</div><!--closing of container-->
</body>
</html>
