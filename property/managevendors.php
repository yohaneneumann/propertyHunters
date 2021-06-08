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
    <li>Manage vendors</li>
  </ul>

  <h3>Vendors</h3>

    <div class="managevendors">
    <?php
    require 'connect.php';
    mysqli_select_db($link, "property");
    $sql="SELECT * from vendor";
    $result=mysqli_query($link, $sql);
    if(mysqli_num_rows($result)>0)
    {
    echo "<table>";
    echo "<tr>
          <th>Vendor ID</th>
          <th>Name</th>
          <th>Address</th>
          <th>Mobile</th>
          <th>Email</th>
          <th>Edit</th>
          <th>Delete</th>
          </tr>";
  while($row=mysqli_fetch_array($result)) {
      $vendorid=$row["vendorid"];
      $surname=$row["surname"];
      $firstname=$row["firstname"];
      $address1=$row["address1"];
      $town=$row["town"];
      $county=$row["county"];
      $mobile=$row["mobile"];
      $email=$row["email"];
      echo "<tr>
            <td>$vendorid</td>
            <td>$firstname $surname</td>
            <td>$address1, $town, $county</td>
            <td>$mobile</td>
            <td>$email</td>
            <td><a href='editvendor.php?vendorid=$vendorid'>Edit</a></td>
            <td><a href='deletevendor.php?vendorid=$vendorid ' onclick=\"return confirm('Are you sure you want to delete this vendor?');\">Delete</a></td>
            </tr>";
  }
  echo "</table>";
  }
  else
  {
  echo "There are no vendors listed at this time";
  }
  mysqli_close($link);
  ?>
  </div>

  <div class="managevendors2">
    <?php
    require 'connect.php';
    mysqli_select_db($link, "property");
    $sql="SELECT * from vendor";
    $result=mysqli_query($link, $sql);
    if(mysqli_num_rows($result)>0)
    {
    echo "<table>";
    echo "<tr>
          <th>Vendor ID</th>
          <th>Name</th>
          </tr>";
  while($row=mysqli_fetch_array($result)) {
    $vendorid=$row["vendorid"];
    $surname=$row["surname"];
    $firstname=$row["firstname"];
    echo "<tr>
          <td>$vendorid</td>
          <td>$firstname $surname</td>
          </tr>
          <tr>
          <td colspan='2'><a href='editvendor.php?vendorid=$vendorid'>Edit</a>&nbsp;&nbsp;&nbsp;<a href='deletevendor.php?vendorid=$vendorid ' onclick=\"return confirm('Are you sure you want to delete this vendor?');\">Delete</a></td>
          </tr>";
  }
  echo "</table>";
  }
  else
  {
  echo "There are no vendors listed at this time";
  }
  mysqli_close($link);
  ?>
</div>

<div class="button"><?php
echo "<a href='addvendor.php'>Add vendor</a>";
echo "<a href='admin.php'>Admin area</a>";
echo "<a href='index.php'>Home</a>";
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