<?php
require 'connect.php';
$vendorid= $_GET["vendorid"];
$sql= "DELETE FROM vendor WHERE vendorid=$vendorid";
$retval = mysqli_query( $link, $sql);
if(! $retval )
{
    echo "An error occured, try again!";
}
else
{
    header("Location: http://localhost/property/managevendors.php");
exit;
}
mysqli_close($link);
?>