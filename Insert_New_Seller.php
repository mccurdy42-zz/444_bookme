<!DOCTYPE html>
<html lang="en">
<body>

<?php
    error_reporting(E_ALL ^ E_NOTICE);
    include ('./my_connect.php');
    $mysqli = get_mysqli_conn();

    $firstName =$_POST['firstName'];
    $lastName =$_POST['lastName'];
    $email =$_POST['email'];
    $password =$_POST['password'];

 if (empty($_POST['firstName'])) {
     echo "no title";
  header('Location: login.html');
   }

 if (empty($_POST['lastName'])) {
     echo "no title";
  header('Location: login.html');
   }

 if (empty($_POST['email'])) {
     echo "no title";
  header('Location: login.html');
   }

  if (empty($_POST['password'])) {
      echo "no title";
   header('Location: login.html');
    }

$result = mysqli_query($mysqli, "SELECT MAX(seller_ID) FROM seller");
$row = mysqli_fetch_array($result);
$seller_ID= $row[0]+1;

$sql = "INSERT INTO seller(seller_ID, seller_email, seller_firstName, seller_lastName, average_rating)
 VALUES ('$seller_ID','$email','$firstName','$lastName', NULL )";

 if ($mysqli->query($sql) === TRUE) {
 } else {
 echo "Error: " . $sql . "<br>" . $mysqli->error;
 }

 $sql2 = "INSERT INTO login(seller_ID, seller_email, seller_password)
 VALUES ('$seller_ID','$email','$password')";

    if ($mysqli->query($sql2) === TRUE) {
    } else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}

header('Location: seller_dashboard.php');

$mysqli->close();
?>

</body>
</html>