
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
<p><strong>Manage Comments</p>
<a href="admin.php">Go back to Administrator Area</a>
<br>
<br>
<?php //connecting with database
$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server,$dbuser,$password);
mysqli_select_db($link, "property");

//edit the SQL to get cooments only from planned not all of them
$sql ="SELECT * from comment"; //deleting where clause to show all planned and penidng
$result=mysqli_query($link,$sql);

echo "<table>";
echo "<tr>
          <td><strong>Title</td>
           <td><strong>Content</td>
            <td><strong>Author</td>
            <td><strong>Created</td>
            <td><strong>Status</td> <!--adding more columns for approval-->
            <td><strong>Update</td>
            <td><strong>Delete</td>
            </tr>";
while($row=mysqli_fetch_array($result)) {
$id=$row["id"]; //adding id var from the dabase
$title=$row["title"];
$content=$row["content"];
$author=$row["author_name"];
$created=$row["created_at"];
$status=$row["status"];

echo "<tr>
<td>$title</td>
<td>$content</td>
<td>$author</td>
<td>$created</td>
<td>$status</td>
<td><a href='updatecomment.php?id=$id' onclick=\"return confirm('Are you sure you want to approve this comment?');\">Approve</a></td> <!--conneting page to html approve row-->
<td><a href='deletecomment.php?id=$id' onclick=\"return confirm('Are you sure you want to delete this comment?');\">Delete</a></td>  <!--delete row connecting page-->
</tr>"; //using some code of java script to get confirm about user side
}
echo "</table>";
mysqli_close($link);
?>
</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>