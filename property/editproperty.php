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
    <li>Edit property</li>
  </ul>

  <h3>Edit property</h3>
  <?php
  require 'connect.php';
  $propertyid=$_GET["propertyid"];
  mysqli_select_db($link, "property");
  $sql="SELECT * FROM property WHERE propertyid=$propertyid";
  $result=mysqli_query($link, $sql);
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

  mysqli_close($link);
  ?>
  <div id="editproperty">
    <form method="post" action="propertyupdated.php">
      <input type="hidden" name="propertyid" value="<?php echo $propertyid; ?>"/>
      <label>Property address: </label>
      <input type="text" name="address1" value="<?php echo $address1; ?>"><br>
      <label>Town: </label>
      <input type="text" name="town" value="<?php echo $town; ?>"><br>
      <label>County:</label>
      <input type="text" name="county" value="<?php echo $county; ?>"><br>
      <label>Price: </label>
      <input type="number" name="price" value="<?php echo $price; ?>"><br>
      <label>Bedrooms:</label>
      <input type="number" name="bedrooms" value="<?php echo $bedrooms; ?>"><br>
      <label>Short description: </label>
      <textarea name="shortdescription" rows="8" cols="35"><?php echo $shortdescription;
      ?></textarea><br>
      <label>Long description: </label>
      <textarea name="longdescription" rows="8" cols="35"><?php echo $longdescription;
      ?></textarea><br>
      <label>Image path:</label>
      <input type="text" name="image" value="<?php echo $image; ?>"><br>
      <label>Category ID:</label>
      <input type="number" name="categoryid" value="<?php echo $categoryid; ?>"><br>
      <label>Vendor ID:</label>
      <input type="number" name="vendorid" value="<?php echo $vendorid; ?>"><br>
    
      <input type="submit" id="mysubmit" name="submit" value="Update property" required="required">
    </form>
  </div>


<div class="button">
  <?php
  echo "<br><br><a href='manageproperties.php'>Manage properties</a>&nbsp&nbsp";
  echo "<a href='admin.php'>Admin area</a>&nbsp&nbsp";
  echo "<a href='index.php'>Home</a>";
  ?>
</div>

</div>
<?php include("includes/contact.html");?>
<?php include("includes/footerlinks.html");?>
<?php include("includes/footer.html");?>
</div>
</body>
</html>