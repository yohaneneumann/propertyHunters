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
    <li>Services</li>
  </ul>

  <h2>Our services</h2>
  <p class="services">We offer a variety of properties on sale in Co. Donegal. Our team of Property Hunters experts will assist you throughout the selling or buying process from start to finish regardless of the property value, facilitating all the administrative and legal work associated with the purchase or sale of land/property to ensure a comfortable and professional experience for clients.</p>

<div class="button">
  <?php
  echo "<a href='buy.php'>Buy a property</a>&nbsp;&nbsp;";
  echo "<a href='sell.php'>Sell a property</a>&nbsp;&nbsp;";
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