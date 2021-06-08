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
    <li>Admin login</li>
  </ul>

<?php
if (empty($_SESSION))
session_start();
if (isset($_SESSION['errors'])) 
{
echo "<div class='form-errors'>";
foreach($_SESSION['errors'] as $error)
{ 
echo "<p>";
echo $error;
echo "</p>";}
echo "</div>";}
unset($_SESSION['errors']);
?>

<h2> Login </h2>
  <form action="loginaction.php" method="POST">
    <div class="logininput">
      <p>Username: <input type="text" name="adminname" required="required"></p>
      <p>Password: <input type="password" name="password" required="required"></p>
    </div>
      <p><input type="submit" id="mysubmit" value="Login"></p>
  </form>

<div class="button">
<?php
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