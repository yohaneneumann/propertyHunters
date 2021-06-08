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

  <div id="contenthome">

  <h1>Welcome</h1>
  <h2>Property Hunters: at your service</h2>
  <h3>Exceeding expectations</h3>
  <br><br>   
  <div id="search-container">
    <form class="search" action="searchresults.php" method="post">
    
    <h2>Search properties</h2>
    <select name="location" required="required">
    <option value="">Select Town</option>
    <?php
    require "connect.php";
    $sql="select DISTINCT town from property";
    $result=mysqli_query($link, $sql);
    if (mysqli_num_rows($result) >0)
    {
      while ($row=mysqli_fetch_array($result))
      {
        $town=$row['town'];
        echo "<option value='$town'>$town</option>";
      }
    }
    mysqli_close($link);
    ?>
    </select>
    <select name="category" required="required">
    <option value="">Select Category</option>
    <?php
    require "connect.php";
    $sql="select * from category";
    $result=mysqli_query($link, $sql);
    if (mysqli_num_rows($result) >0)
    {
      while ($row=mysqli_fetch_array($result))
      {
        $categoryname=$row['categoryname'];
	      $categoryid=$row['categoryid'];
        echo "<option value='$categoryid'>$categoryname</option>";
      }
    }
    mysqli_close($link);
    ?>
    </select>
    <select name="price" required="required">
    <option value="">Select price range</option>
    <option value="1">All</option>
    <option value="2">Less than &euro; 100,000</option>
    <option value="3">&euro; 100,000 - &euro; 200,000</option>
    <option value="4">&euro; 200,000 - &euro; 300,000</option>
    <option value="5">Greater than &euro; 300,000 </option>
    </select>
    <div><button type="submit" name="submit" id="mysubmit">Search &#x1F50E;&#xFE0E;</button></div>
    </div>
    

</form>
</div>




</div>
<?php include("includes/contact.html");?>
<?php include("includes/footerlinks.html");?>
<?php include("includes/footer.html");?>
</div>
</body>
</html>