
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
<!--adding forms for testimonials or comments-->
<div id = "Addservices">
<h3>Apply for Services</h3>
<p> Please fill the form with your requirement and apply for the services that you are looking
for. <br>For any sell, purchase, booking of properties please fill the form with reqired details and our executive will get back to you.</p>
<p>Please enter valid property id if you have any query for a property.</p>
    <!--this is a form for the user regurding service-->
    <form method = "post"
          action = "processservices.php"
          id = "serviceform">
     <input type="hidden" name="service_no" value="<?php echo $service_no; ?>"/> 
    <!--label>Srvicec_no:  </label>
    <input type = "number" name = "service_no" required = "required"><br>-->
    <label> PropertyId:  </label>
    <input type = "number" name = "propertyid" required = "required"><br>  <!--form validation-->
    <label> Query: </label>
    <textarea name = "query" rows = "8" cols = "30"></textarea><br>
    <label> Name: </label>
    <input type = "text" name = "cust_name" required = "required"><br> <!--form validation-->
    <label>Phone: </label>
    <input type = "number" name = "phone" required = "required"><br>
    <label> Email:</label>
    <input type = "email" name = "email" required = "required"><br> <!--valiudate form by required-->
    <input type = "submit" id = "mysubmit" name = "submit" value = "Apply for Services">
    </form><!--closing form-->
    <br>
</div><!-- end of addservices-->
</div><!--end of content div-->
<?php include("includes/footer.html");?>
</div><!--end of container-->
</body>
</html>