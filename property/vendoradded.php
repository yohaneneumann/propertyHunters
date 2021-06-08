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
    <li><a href="managevendors.php">Manage vendors</a></li>
    <li><a href="addvendor.php">Add vendor</a></li>
    <li>Vendor added</li>
  </ul>

  <?php
  require 'connect.php';
  $surname=$_POST["surname"];
  $firstname=$_POST["firstname"];
  $address1=$_POST["address1"];
  $town=$_POST["town"];
  $county=$_POST["county"];
  $mobile=$_POST["mobile"];
  $email=$_POST["email"];
  $sql_insert="INSERT INTO vendor(surname, firstname,address1, town, county, mobile, email) VALUES ('$surname', '$firstname','$address1', '$town', '$county', '$mobile', '$email')";
  if(mysqli_query($link, $sql_insert)) {
  echo "<h3>Vendor successfully added!</h3>";
  ?>

<div class="button">
  <?php
  echo "<a href='managevendors.php'>Manage vendors</a>&nbsp";
  echo "<a href='admin.php'>Admin area</a>&nbsp";
  echo "<a href='index.php'>Home</a>&nbsp";}
  else {
  echo "An error occured, try again!";
  }
  mysqli_close($link);
  ?>
</div>

</div>
<?php include("includes/contact.html");?>
<?php include("includes/footerlinks.html");?>
<?php include("includes/footer.html");?>
</div>
</body>
</html>