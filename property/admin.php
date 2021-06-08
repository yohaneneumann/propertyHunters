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
    <li>Admin</li>
  </ul>

  <h2> Administrator Area</h2>
  <div class="admin">
  
  <div class="admin1">
    <?php
    session_start();
    if (isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    echo "Hi " . $username . "!" . "
    ";}
    echo "Choose one of the menu options below. &nbsp;
    &nbsp;";
    ?>
  </div>

  <div class="adminbuttons">
    <?php
    echo "<p><a href='managecomments.php'>Manage comments</a>
    <a href='manageproperties.php'>Manage properties</a>
    <a href='managevendors.php'> Manage vendors </a><p>";
    ?>
  </div>

  <div class="admin2">
    <?php
    echo "&nbsp<br><br><br><a href='logout.php'>Logout</a>
    &nbsp<a href='index.php'>Home</a>";
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