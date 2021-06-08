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
    <li>Testimonials</li>
  </ul>

  <h2>What do our customers think?</h2>

  <?php
  require 'connect.php';
  mysqli_select_db($link, "property");
  $sql="SELECT * from comment WHERE status='planned'";
  $result=mysqli_query($link, $sql);
  if(mysqli_num_rows($result)>0)
  {
  echo "<table>";
  echo "<tr>
        <th>Title</th>
        <th>Content</th>
        <th>Author</th>
        <th>Email</th>
        <th>Created</th>
        </tr>";
  while($row=mysqli_fetch_array($result)) {
  $title=$row["title"];
  $content=$row["content"];
  $author_name=$row["author_name"];
  $author_email=$row["author_email"];
  $created=$row["created_at"];
  echo "<tr>
        <td>$title</td>
       <td>$content</td>
        <td>$author_name</td>
        <td>$author_email</td>
        <td>$created</td>
        </tr>";
    }
    echo "</table>";
    }
    else {echo "There are no approved comments at this time";}
    mysqli_close($link);
    ?>

    <div id="addtestimonial">

      <h2>Add a testimonial</h2>
      <p>Please share your experience with us. We appreciate your feedback and
      take all your comments into consideration! </p>
      <form method="post" action="commentsubmitted.php" class="commentform">
        <label>Title: </label>
        <input type="text" name="title" required="required"><br>
        <label>Content: </label>
        <textarea name="content" rows="8" cols="30" required="required"></textarea><br>
        <label>Name:</label>
        <input type="text" name="author_name" required="required"><br>
        <label>Email: </label>
        <input type="email" name="author_email" required="required"><br>
        <input type="submit" id="mysubmit" name="submit" value="Submit" required="required">
      </form>
    </div>

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