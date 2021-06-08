<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Property Hunters</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
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
    <li>Add property</li>
  </ul>

  <h3>Add a property</h3>
  <p>
  <div id="addproperty">

    <form method="post" action="propertyadded.php">
      <label>Property address: </label>
      <input type="text" name="address1" required="required"><br>
      <label>Town: </label>
      <input type="text" name="town" required="required"><br>
      <label>County:</label>
      <input type="text" name="county" required="required"><br>
      <label>Price: </label>
      <input type="number" name="price" required="required"><br>
      <label>Bedrooms:</label>
      <input type="number" name="bedrooms" required="required"><br>
      <label>Short description: </label>
      <textarea name="shortdescription" rows="8" cols="35" required="required"></textarea><br>
      <label>Long description: </label>
      <textarea name="longdescription" rows="8" cols="35" required="required"></textarea><br>
      <label>Image path:</label>
      <input type="text" name="image" required="required"><br>
      <label>Category ID:</label>
      <input type="number" name="categoryid" required="required"><br>
      <label>Vendor ID:</label>
      <input type="number" name="vendorid" required="required"><br>
    
      <input type="submit" id="mysubmit" name="submit" value="Add property" required="required">
    </form>
  </div>


  <div class="button">
    <?php
    echo "<a href='manageproperties.php'>Manage properties</a>";
    echo "<a href='admin.php'>Admin area</a>";
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