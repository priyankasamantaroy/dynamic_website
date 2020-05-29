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
mysqli_select_db($link, "property"); //connecting to mysqli giftcompany database
//connecting form to post
$title=$_POST["title"];
$content=$_POST["content"];
$author_name=$_POST["author_name"];
$email=$_POST["author_email"];
$sql_insert="INSERT INTO comment(title, content, author_name, author_email)
                VALUES('$title','$content','$author_name','$email')";
if(mysqli_query($link, $sql_insert))
{
    echo "<h3>Testimonial Added!</h3>
         Thank you for your Feedback. Our administrators moderate all comments
          and it will be addended shortly !!<p>";    
    echo "<a href='getcomments.php'> Return to Testimonials page </a>";
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
