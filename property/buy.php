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
    <li><a href="services.php">Services</a></li>
    <li>Buy a property</li>
  </ul>

  <h2>Looking for your ideal property?</h2>
  <p class="services">Property Hunters has been selling some of the county’s finest properties since 1994. We cover Co. Donegal area and we are based in your Letterkenny office. We count with a variety of country homes, cottages, holiday homes, semi-detached or sites. Have a look in our website or get in touch with us.</p>

  <div class="button">
    <?php
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