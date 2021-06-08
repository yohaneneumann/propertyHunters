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
    <li>Contact Us</li>
  </ul>

  <h2>Contact Us</h2>

  <div id="contactus">
    <div id="contactmethods">
        <p><strong>Telephone</strong><br>+353 000000000</p>
        <p><strong>Email</strong><br>info@propertyhunters.ie</p>
        <p><strong>Address</strong><br>Lower main street, Letterkenny, Co. Donegal, Republic of Ireland</p>
    </div>

    <div class="col-arrange">
      <form method="post" action="viewingrequested.php" class="arrangeform">
        <h2>Arrange a viewing</h2>
        <label>First name: </label>
        <input type="text" name="title" required="required"><br>
        <label>Surname:  </label>
        <input type="text" name="title" required="required"><br>
        <label>Property address:  </label>
        <input type="text" name="title" required="required"><br>
        <label>Email: </label>
        <input type="email" name="author_email" required="required"><br>
        <input type="submit" id="mysubmit" name="submit" value="Arrange viewing" required="required">
     </form>
    </div>

    <div id="hours">
      <p><strong>Opening hours</strong></p>
      <table>
      <tr><th>Monday</th><td>9am - 6pm</td></tr>
      <tr><th>Tuesday</th><td>9am - 6pm</td></tr>
      <tr><th>Wednesday</th><td>9am - 6pm</td></tr>
      <tr><th>Thursday</th><td>9am - 6pm</td></tr>
      <tr><th>Friday</th><td>9am - 6pm</td></tr>
      <tr><th>Saturday</th><td>9am - 4pm</td></tr>
      <tr><th>Sunday</th><td>Closed</td></tr>
      </table>    
    </div>

  </div> 

  <div class="map" style="width: 90%" height="350"><iframe width="90%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=250&amp;hl=en&amp;q=Lower%20main%20street%20letterkenny%20county%20donegal%20ireland+(My%20Business%20Name)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div><!--created using https://www.maps.ie/create-google-map/-->

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