<!DOCTYPE html>
<html lang="en">
<body>

<?php
    session_start();
    error_reporting(E_ALL ^ E_NOTICE);
    include ('./my_connect.php');
    $mysqli = get_mysqli_conn();

    $delete =$_POST['deleteListing'];



$result = mysqli_query($mysqli, "SELECT MAX(seller_ID) FROM seller");
$row = mysqli_fetch_array($result);

$title= $_SESSION['title'];
$id= $_SESSION['seller_ID'];
$author= $_SESSION['author'];
$price= $_SESSION['price'] ;
$edition=$_SESSION['edition'] ;
$bookCondition= $_SESSION['bookCondition'] ;
$highlighting=$_SESSION['highlighting'] ;
$courseCode= $_SESSION['courseCode'] ;


//$sql = "DELETE FROM listing WHERE seller_ID=$id AND WHERE author=$author AND WHERE price=$price AND WHERE edition=$edition AND WHERE bookCondition=$bookCondition AND WHERE highlighting=$highlighting AND WHERE courseCode=$courseCode";
$sql = "DELETE FROM listing WHERE seller_ID=$id AND author='$author' and title='$title' and price=$price and edition=$edition";

if ($mysqli->query($sql) === TRUE) {
// echo "Record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $mysqli->error;
}


//header('Location: seller_dashboard.php');



$mysqli->close();
?>

</body>
</html>
