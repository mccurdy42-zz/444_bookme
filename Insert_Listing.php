<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<?php
    error_reporting(E_ALL ^ E_NOTICE);
    include ('./my_connect.php');
    $mysqli = get_mysqli_conn();

    $seller_ID =1;
    $price =$_POST['price'];
    $photo_url =$_POST['photo_url'];
    $title =$_POST['title'];
    $author =$_POST['author'];
    $edition =$_POST['edition'];
    $condition =$_POST['bookCondition'];
    $highlighting =$_POST['highlighting'];
    $courseCode =$_POST['course'];

if (empty($_POST['title'])) {
    echo "no title";
 header('Location: new_listing');
  }

if (empty($_POST['price'])) {
    echo "no title";
 header('Location: new_listing');
  }

if (empty($_POST['photo_url'])) {
    echo "no title";
 header('Location: new_listing');
  }

if (empty($_POST['author'])) {
    echo "no title";
 header('Location: new_listing');
  }

if (empty($_POST['edition'])) {
    echo "no title";
 header('Location: new_listing');
  }

if (empty($_POST['bookCondition'])) {
    echo "no title";
 header('Location: new_listing');
  }

 if (empty($_POST['highlighting'])) {
     echo "no title";
  header('Location: new_listing');
   }

if (empty($_POST['course'])) {
    echo "no title";
 header('Location: new_listing');
  }

$result = mysqli_query($mysqli, "SELECT MAX(listing_ID) FROM listing");
$row = mysqli_fetch_array($result);
$listing_ID= $row[0]+1;

   $sql = "INSERT INTO listing(listing_ID, seller_ID, price, photo_url, title, author, edition, bookCondition, highlighting, courseCode)
 VALUES ('$listing_ID','$seller_ID','$price','$photo_url','$title','$author','$edition','$condition','$highlighting','$courseCode')";

    if ($mysqli->query($sql) === TRUE) {
 // echo "Record created successfully";
  } else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
  }

if (isset( $_POST['post'] )) {
header('Location: seller_dashboard.php');
  }

if (isset( $_POST['post2'] )) {
  header('Location: Second_Listing');
  }

$mysqli->close();
?>


</body>
</html>
