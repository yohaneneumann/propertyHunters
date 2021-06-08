<?php
require 'connect.php';
$propertyid= $_GET["propertyid"];
$sql= "DELETE FROM property WHERE propertyid=$propertyid";
$retval = mysqli_query( $link, $sql);
if(! $retval )
{
    echo "An error occured, try again!";
}
else
{
    header("Location: http://localhost/property/manageproperties.php");
exit;
}
mysqli_close($link);
?>