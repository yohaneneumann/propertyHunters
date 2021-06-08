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
    <li><a href="admin.php">Admin</a></li>
    <li><a href="managevendors.php">Manage vendors</a></li>
    <li>Edit vendor</li>
  </ul>

  <h3>Edit vendor</h3>
  <?php
  require 'connect.php';
  $vendorid=$_GET["vendorid"];
  mysqli_select_db($link, "vendor");
  $sql="SELECT * FROM vendor WHERE vendorid=$vendorid";
  $result=mysqli_query($link, $sql);
  $row=mysqli_fetch_array($result);

  $vendorid=$row["vendorid"];
  $surname=$row["surname"];
  $firstname=$row["firstname"];
  $address1=$row["address1"];
  $town=$row["town"];
  $county=$row["county"];
  $mobile=$row["mobile"];
  $email=$row["email"];
  mysqli_close($link);
  ?>

    <div id="editvendor">
      <form method="post" action="vendorupdated.php">
        <input type="hidden" name="vendorid" value="<?php echo $vendorid; ?>"/>
        <label>Surname: </label>
        <input type="text" name="surname" value="<?php echo $surname; ?>"><br>
        <label>First name: </label>
        <input type="text" name="firstname" value="<?php echo $firstname; ?>"><br>
        <label>Vendor address:</label>
        <input type="text" name="address1" value="<?php echo $address1; ?>"><br>
        <label>Town: </label>
        <input type="text" name="town" value="<?php echo $town; ?>"><br>
        <label>County:</label>
        <input type="text" name="county" value="<?php echo $county; ?>"><br>
        <label>Mobile:</label>
        <input type="number" name="mobile" value="<?php echo $mobile; ?>"><br>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $email; ?>"><br>
    
        <input type="submit" id="mysubmit" name="submit" value="Update vendor" required="required">
      </form>
    </div>

<div class="button"> 
<?php
echo "<br><br><a href='managevendors.php'>Manage vendors</a>&nbsp&nbsp";
echo "<a href='admin.php'>Admin area</a>&nbsp&nbsp";
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