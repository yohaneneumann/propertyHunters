<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Property Hunters</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>

<div id="container">
<?php include("includes/header.html");?>
<?php include("includes/nav.html");?>

<div id="content">

  <ul class="breadcrumb">
    <li><a href="index.php">Home</a></li>
    <li><a href="adminlogin.php">Admin login</a></li>
    <li><a href="admin.php">Admin</a></li>
    <li><a href="manageproperties.php">Manage properties</a></li>
    <li>Property updated</li>
  </ul>

  <?php
  require 'connect.php';
  $propertyid=$_POST["propertyid"];
  $address1=$_POST["address1"];
  $town=$_POST["town"];
  $county=$_POST["county"];
  $price=$_POST["price"];
  $bedrooms=$_POST["bedrooms"];
  $shortdescription=$_POST["shortdescription"];
  $longdescription=$_POST["longdescription"];
  $image=$_POST["image"];
  $categoryid=$_POST["categoryid"];
  $vendorid=$_POST["vendorid"];
  $sql= "UPDATE property SET propertyid='$propertyid', address1='$address1', town='$town', county='$county', price='$price', bedrooms='$bedrooms', shortdescription='$shortdescription', longdescription='$longdescription', image='$image', categoryid='$categoryid', vendorid='$vendorid' WHERE propertyid=$propertyid";
  if(mysqli_query($link, $sql))
      {
      echo "<h3>Property updated successfully!</h3>";
      ?>
      <div class="button">
      <?php
      echo "<a href='manageproperties.php'>Manage properties</a>&nbsp";
      echo "<a href='admin.php'>Admin area</a>&nbsp";
      echo "<a href='index.php'>Home</a>";
      ?>
      </div>
      <?php
      }
      else {echo "An error occured, try again!";}
      mysqli_close($link);
      ?>
</div>
<?php include("includes/contact.html");?>
<?php include("includes/footerlinks.html");?>
<?php include("includes/footer.html");?>
</div>
</body>
</html>