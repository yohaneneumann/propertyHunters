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
    <li>Delete property</li>
  </ul>

  <div id="deleteproperty">
  <?php
  require 'connect.php';
  $propertyid=$_GET['propertyid'];
  $sql="SELECT * from property where propertyid=$propertyid";
  $result=mysqli_query($link, $sql);
  echo "<h3> Are you sure you want to delete this property?</h3><br><br>";
  echo "<a href='deleteproperty.php?propertyid=$propertyid'>Delete</a>&nbsp";
  echo "<a href='manageproperties.php'>Cancel</a>";
  echo "<p>";
  
  $row=mysqli_fetch_array($result);
  $propertyid=$row["propertyid"];
  $address1=$row["address1"];
  $town=$row["town"];
  $county=$row["county"];
  $price=$row["price"];
  $bedrooms=$row["bedrooms"];
  $shortdescription=$row["shortdescription"];
  $longdescription=$row["longdescription"];
  $image=$row["image"];
  $categoryid=$row["categoryid"];
  $vendorid=$row["vendorid"];
  ?>

    <div class="col-details">
      <div class="card-details">
        <?php
        echo "<img src='$image'>" 
        ?>
        <hr>
          <div class="card-body">
          <?php
          echo "<h2>&euro; $price</h2>"; 
          echo "<h4>$address1</h4>"; 
          echo "<h4>$town, $county</h4>";
          echo "<h4>$shortdescription</h4>";
          echo "<h4>$bedrooms bedrooms</h4>"; 
          ?>
          </div>
      </div>
    </div>
 
<?php
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