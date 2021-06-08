<?php
session_start();
require 'connect.php';
if (isset($_POST['adminname']) and isset($_POST['password'])){
$username = $_POST['adminname'];
$password = $_POST['password'];
$query = "SELECT * FROM administrator WHERE adminname='$username' and
password='$password'";
$result = mysqli_query($link, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
if ($count == 1){
$_SESSION['username'] = $username;
 header("Location:admin.php");
 exit;
}
else
{
    $_SESSION['errors'] = array('Your username or password was incorrect');
header("Location:adminlogin.php");
}
}
?>