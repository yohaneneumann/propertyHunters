<?php
require 'connect.php';
$id= $_GET["id"];
$sql= "UPDATE comment SET status='planned' WHERE id=$id";
$retval = mysqli_query( $link, $sql);
if(! $retval )
{
    echo "An error occured, try again!";
}
else
{
    header("Location: http://localhost/property/managecomments.php");
exit;
}
mysqli_close($link);
?>