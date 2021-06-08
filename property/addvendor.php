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
    <li><a href="managevendors.php">Manage vendors</a></li>
    
    <li>Add vendor</li>
  </ul>

  <h3>Add a vendor</h3>
  <p>
  <div id="addvendor">
    <form method="post" action="vendoradded.php">
      <label>Surname: </label>
      <input type="text" name="surname" required="required"><br>
      <label>First name: </label>
      <input type="text" name="firstname" required="required"><br>
      <label>Address:</label>
      <input type="text" name="address1" required="required"><br>
      <label>Town: </label>
      <input type="text" name="town" required="required"><br>
      <label>County:</label>
      <input type="text" name="county" required="required"><br>
      <label>Mobile:</label>
      <input type="number" name="mobile" required="required"><br>
      <label>Email:</label>
      <input type="email" name="email" required="required"><br>
    
      <input type="submit" id="mysubmit" name="submit" value="Add vendor" required="required">
    </form>
  </div>

  <div class="button">
  <?php
  echo "<a href='managevendors.php'>Manage vendors</a>";
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