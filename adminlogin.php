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
<?php
if(empty($_SESSION))
session_start();
if(isset($_SESSION['errors']))
{
    echo"<div class='form-errors'>";
    foreach($_SESSION['errors']as $error)
    {
        echo"<p>";
        echo $error;
        echo"</P>";
    }
    echo"</div>";
}
unset($_SESSION['errors']);
?>
<h3>Login</h3>
    <form action="login_action.php" method="POST">
    <div class="logintable">
        <label>Username</label>
        <input type="text" name="adminname" required="required" />
    </div>
    <div class="logintable">
        <label>Password</label>
        <input type="password" name="password" required="required" />
    </div>
    <div class="logintable">
    <label></label>
    <input type="submit" value="Login" />
    </div>
    </form>
    
</div><!--end of content div-->   
<?php include("includes/footer.html");?>
</div><!--end of container-->
</body>
</html>