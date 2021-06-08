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
    <li><a href="editvendor.php">Edit vendor</a></li>
    <li>Vendor updated</li>
  </ul>

  <?php
  require 'connect.php';
  $vendorid=$_POST["vendorid"];
  $surname=$_POST["surname"];
  $firstname=$_POST["firstname"];
  $address1=$_POST["address1"];
  $town=$_POST["town"];
  $county=$_POST["county"];
  $mobile=$_POST["mobile"];
  $email=$_POST["email"];
  $sql= "UPDATE vendor SET vendorid='$vendorid', surname='$surname', firstname='$firstname', address1='$address1', town='$town', county='$county', mobile='$mobile', email='$email' WHERE vendorid=$vendorid";
  if(mysqli_query($link, $sql)) 
    {
    ?>
    <div class="button">
    <?php
    echo "<h3>Vendor updated successfully!</h3><br><br>";
    echo "<a href='managevendors.php'>Manage Vendors</a>&nbsp";
    echo "<a href='admin.php'>Admin area</a>&nbsp";
    echo "<a href='index.php'>Home</a>";
    }
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