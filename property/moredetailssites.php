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
    <li><a href="displaysites.php?categoryid=3">Sites</a></li>
    <li>More details</li>
  </ul>

  <h2>Property details</h2>

    <div id="moredetails">
    <?php
    require 'connect.php';
    $propertyid= $_GET["propertyid"];
    $sql= "SELECT * FROM property WHERE propertyid=$propertyid";
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
    $result=mysqli_query($link, $sql);
    $rows=mysqli_num_rows($result);
    if($rows>0) 
    {
    $cols = 4; 
    $counter = 1; 
    while($row=mysqli_fetch_array($result)) 
    {
    if(($counter % $cols) == 1) {  ?>
    <br><br>
    <div class="newrow-details">
    <?php
    }
    $propertyid=$row["propertyid"];
    $image=$row["image"];
    $address1=$row["address1"];
    $shortdescription=$row["shortdescription"];
    $bedrooms=$row["bedrooms"];
    $price=$row["price"];?>

    <div class="col-details1">
      <div class="card-details1">
      <?php
      echo "<img src='$image'>" 
      ?>
      <hr>
        <div class="card-body">
        <?php
        echo "<h3>&euro; $price</h3>"; 
        echo "<h4>$address1</h4>"; 
        echo "<h4>$town, $county</h4>";
        echo "<h4>$shortdescription</h4>";
        echo "<h4>$bedrooms bedrooms</h4>"; 
        ?>
        </div>
      </div>
    </div>

    <div class="col-arrange">
      <form method="post" action="arrangeviewing.php" id="arrangeform">
        <h3>Arrange a viewing</h3>
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

 <div class="prop-desc">
   <?php
   echo "<p>$longdescription</p>";
   echo "</p>"
   ?>
 </div>
 
<?php
if(($counter % $cols) == 0) { 
echo "</div>"; 
}
$counter++; 
} 
} 
echo"</div><br><br>"; 
mysqli_free_result($result);
mysqli_close($link);
?>

<div class="returnbutton">
  <p>
  <button onclick="goBack()">Return</button>
  <script>
  function goBack() {
   window.history.back();
  }
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