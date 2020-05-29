
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
<?php //connecting with database
$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server,$dbuser,$password);
mysqli_select_db($link, "property");

//edit the SQL to get cooments only from planned not all of them
$sql ="SELECT * from comment WHERE status='approved'";
$result=mysqli_query($link,$sql);

echo "<table>";
echo "<tr>
          <td><strong>Title</td>
           <td><strong>Content</td>
            <td><strong>Author</td>
            <td><strong>Created</td>
            </tr>";
while($row=mysqli_fetch_array($result)) {
$title=$row["title"];
$content=$row["content"];
$author=$row["author_name"];
$created=$row["created_at"];
echo "<tr>
<td>$title</td>
<td>$content</td>
<td>$author</td>
<td>$created</td>
</tr>";
}
echo "</table>";
mysqli_close($link);
?>
<!--adding forms for testimonials or comments-->
<div id = "Addtestimonial">
<h3>Add a Testimonial</h3>
<p> Please leave your feedback on your experiemce for our site.
    We appreciate your feedback and take all your comments into consideration</p>
    <!--this is a form for the user regurding feedback-->
    <form method = "post"
          action = "process.php"
          id = "commentform">
    <label> Title: </label>
    <input type = "text" name = "title" required = "required"><br>  <!--form validation-->
    <label> Content: </label>
    <textarea name = "content" rows = "8" cols = "30"></textarea><br>
    <label> Name: </label>
    <input type = "text" name = "author_name" required = "required"><br> <!--form validation-->
    <label> Email:</label>
    <input type = "email" name = "author_email" required = "required"><br><!--valiudate form by required-->
    <input type = "submit"
           id = "mysubmit"
           name = "submit"
           value = "Add Comment">
    </form><!--closing form-->
    <br>
</div>
</div><!--closing of content-->
<?php include("includes/footer.html");?>
</div><!--end of content div-->
</div><!--end of container-->
</div>
</body>
</html>