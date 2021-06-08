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
    <li><a href="getcomments.php">Testimonials</a></li>
    <li>Comment submitted</li>
  </ul>

<?php
require 'connect.php';
$title=$_POST["title"];
$content=$_POST["content"];
$author_name=$_POST["author_name"];
$email=$_POST["author_email"];
$sql_insert="INSERT INTO comment(title, content, author_name, author_email) VALUES ('$title', '$content', '$author_name', '$email')";

if(mysqli_query($link, $sql_insert)){
echo "<h3>Comment submitted successfully!</h3>Thank you for your feedback. Our administrators moderate all
comments and it will be attended to shortly.<p>";
echo "<a href='getcomments.php'>Return</a>&nbsp;&nbsp;";
echo "<a href='index.php'>Home</a>";}
else { echo "An error occurred, try again!";}
mysqli_close($link);
?>

</div>
<?php include("includes/contact.html");?>
<?php include("includes/footerlinks.html");?>
<?php include("includes/footer.html");?>
</div>
</body>
</html>