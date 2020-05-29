<?php
//do we need to put the code in content or in blank page????????
//start the Session
session_start();
require 'connect.php';
//if the form is submitted
if(isset($_POST['adminname'])and isset($_POST['password']))
{
    //Assigning posted values to variables
    $username=$_POST['adminname'];
    $password=$_POST['password'];
    //checking the valuies are existing in the database or not
    $query="SELECT*FROM administrator WHere adminname='$username' and password='$password'";
    $result=mysqli_query($link, $query) or die(myswqli_error($connection));
    $count=mysqli_num_rows($result);
    /*if the posted values are equal to database values
    the session will be created for teh user*/
    if($count==1)
    {
        $_SESSION['username']=$username;
        header("Location:admin.php");
        exit;
    }
//if the login credentials doesnot match,show an error and return        
//return to the login page
else    
{
    $_SESSION['error']=array('Your username and password is incorrect');
    header("Location:adminlogin.php");
}
}//closing if
?>
