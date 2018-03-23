<?php
session_start();
    error_reporting(E_ALL ^ E_NOTICE);
    include ('./my_connect.php');
    $mysqli = get_mysqli_conn();

//$result = mysqli_query($mysqli, "SELECT MAX(listing_ID) FROM listing"); //????? how do i change this based on the result needed to be grabbed
//$row = mysqli_fetch_array($result);

$sql5 = "SELECT title, author, edition, photo_url, price, bookCondition, highlighting, courseCode FROM listing WHERE listing_ID= ?";
$id1 = 1;

$stmt1 = $mysqli->prepare($sql5);
$stmt1->bind_param('i',$id1);
$stmt1->execute();
$stmt1->store_result();
$stmt1->bind_result($title, $author, $edition, $photo_url, $price, $bookCondition, $highlighting, $courseCode);

while ($stmt1->fetch()){

$_SESSION['title'] = $title;
$_SESSION['author'] = $author;
$_SESSION['edition'] = $edition;
$_SESSION['photo_url'] = $photo_url;
$_SESSION['price'] = $price;
$_SESSION['bookCondition'] = $bookCondition;
$_SESSION['highlighting'] = $highlighting;
$_SESSION['courseCode'] = $courseCode;
}

header('Location: ppa.php');
$mysqli->close();
?>
