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
    <li>Manage comments</li>
  </ul>

  <h3>Testimonials</h3>

    <div class="managecomments">
    <?php
    require 'connect.php';
    mysqli_select_db($link, "property");
    $sql="SELECT * from comment";
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
          <th>Status</th>
          <th>Update</th>
          <th>Delete</th>
          </tr>";
    while($row=mysqli_fetch_array($result)) {
      $id=$row["id"];
      $title=$row["title"];
      $content=$row["content"];
      $author=$row["author_name"];
      $email=$row["author_email"];
      $created=$row["created_at"];
      $status=$row["status"];
      echo "<tr>
            <td>$title</td>
            <td>$content</td>
            <td>$author</td>
            <td>$email</td>
            <td>$created</td>
            <td>$status</td>
            <td><a href='commentupdated.php?id=$id' onclick=\"return confirm('Are you sure you want to approve this comment?');\">Approve</a></td>
            <td><a href='deletecomment.php?id=$id ' onclick=\"return confirm('Are you sure you want to delete this comment?');\">Delete</a></td>
            </tr>";
     }
    echo "</table>";
    }
    else
    {
    echo "There are no approved comments at this time";
    }
    mysqli_close($link);
    ?>
    </div>

    <div class="managecomments2">
    <?php
    require 'connect.php';
    mysqli_select_db($link, "property");
    $sql="SELECT * from comment";
    $result=mysqli_query($link, $sql);
    if(mysqli_num_rows($result)>0)
    {
    echo "<table>";
    echo "<tr>
          <th>Title</th>
          <th>Status</th>
          </tr>";
    while($row=mysqli_fetch_array($result)) {
      $id=$row["id"];
      $title=$row["title"];
      $status=$row["status"];
      echo "<tr>
            <td>$title</td>
            <td>$status</td>
            </tr>
            <tr>
            <td colspan='2'><a href='commentupdated.php?id=$id' onclick=\"return confirm('Are you sure you want to approve this comment?');\">Approve</a>&nbsp;&nbsp;&nbsp;<a href='deletecomment.php?id=$id ' onclick=\"return confirm('Are you sure you want to delete this comment?');\">Delete</a></td>
            </tr>";
      }
      echo "</table>";
      }
      else
      {
      echo "There are no approved comments at this time";
      }
      mysqli_close($link);
      ?>
      </div>

<div class="button"><?php
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
