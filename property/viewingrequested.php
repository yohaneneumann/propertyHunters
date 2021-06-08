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
    <li><a href="displayallproperties.php">All properties</a></li>
    <li><a href="moredetails.php">More details</a></li>
    <li>Viewing requested</li>
  </ul>

  <div class="viewing">
    <?php
    echo "<h3>Your request was sent!</h3><br>";
    echo "<p>Thank you for your interest. One of our Property Hunters will contact you soon.</p><br><br>";
    ?>
  </div>

  <div id="moredetails">
    <div class="returnbutton">
      <p><button onclick="goBack()">Return</button>
      <script>
      function goBack() {
      window.history.back();}
      </script>
      </p>
      <?php
      echo "<p><a href='index.php'>Home</a>";
      ?>
      </div>
  </div>

</div>
<?php include("includes/contact.html");?>
<?php include("includes/footerlinks.html");?>
<?php include("includes/footer.html");?>
</div>
</body>
</html>