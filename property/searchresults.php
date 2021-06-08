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
    <li>Search property results</li>
</ul>

<h2>Search results</h2>

<div id="displayproperties">
	<?php
	
	require 'connect.php';
	
	if (isset($_POST['submit']))
	{
	$town=$_POST['location'];
	$categoryid=$_POST['category'];
	$pricerange=$_POST['price'];
	}
	if ($pricerange=='1') {
		$low=0;
		$high=2000000;
		}
	elseif ($pricerange=='2') {
		$low=0;
		$high=99999;
		}
	elseif ($pricerange=='3'){
		  $low=100000;
		$high=199999;
		}
	elseif ($pricerange=='4'){
		  $low=200000;
		$high=299999;
		}
	elseif ($pricerange=='5'){
		  $low=300000;
		$high=2000000;
		}
	
	$sql="SELECT * from property WHERE property.town='$town' AND property.categoryid='$categoryid' AND property.price>='$low' AND property.price<= '$high'";
	$result=mysqli_query($link, $sql);
	  $rows=mysqli_num_rows($result);
	  if($rows>0)
	  {
	  $cols = 4;
	  $counter = 1;
	  while($row=mysqli_fetch_array($result))
	  {
		if(($counter % $cols) == 1) {
		?>
		<br><br>
		<div class="newrow">
		<?php
	  }
	  $propertyid=$row["propertyid"];
	  $image=$row["image"];
	  $address1=$row["address1"];
	  $shortdescription=$row["shortdescription"];
	  $bedrooms=$row["bedrooms"];
	  $price=$row["price"];?>
	
	
		  <div class="col">
			<div class="card">
			<?php
			echo "<img src='$image'>"
			?>
			
			  <div class="card-body">
			  <?php
			  echo "<h2>$address1</h2>";
			  echo "<h4>&euro; $price</h4>";
			  ?>
			  	<hr>
				<p class="card-text">
				<?php
				echo "<p>$shortdescription</p>";
				echo "<h4>$bedrooms bedrooms</h4>";
				echo "</p>"
				?>
				<div class="detailslink">
				<?php echo "<a href='moredetails.php?propertyid=$propertyid'>More Details</a>";?>
				<br><br>
				</div>
			  </div>
			</div>
		  </div>
	

<?php
if(($counter % $cols) == 0) 
{ 
  echo "</div>"; 
}
$counter++; 
} 
} 
else
{
echo "<h3> There are currently no items in this category</h3>";
}
echo"</div>"; 
mysqli_free_result($result); 
mysqli_close($link);
?>

<div class="button">
  <?php
  echo "<a href='index.php'>Return</a>";
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