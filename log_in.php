<?php
session_start();

$username =  $_POST['username'];
$passwordSubmitted =  $_POST['password'];

$servername = "localhost";
$username = "s2mccurd";
$password = "Winter@*%2018";
$dbname = "s2mccurd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//echo "here";
     $sql = 'SELECT seller_password FROM login WHERE seller_email = ?';
     $un = $_POST['username'];
  //   echo $un;

     $stmt = $conn->prepare($sql);

     $stmt->bind_param('s', $un);
     $stmt->execute();
     $stmt->store_result();
     $stmt->bind_result($seller_password);
     while ($stmt->fetch()){
      //  echo 'Password: '.$seller_password.'<br><br>';
        $password = $seller_password;
      //  echo $password;

     }

 $stmt->free_result();
 $stmt->close();

 $sqlq = 'SELECT seller_ID FROM login WHERE seller_email = ?';
 $un1 = $_POST['username'];
//   echo $un;

 $stmt2 = $conn->prepare($sqlq);

 $stmt2->bind_param('s', $un1);
 $stmt2->execute();
 $stmt2->store_result();
 $stmt2->bind_result($seller_ID);
 while ($stmt2->fetch()){
  //  echo 'Password: '.$seller_password.'<br><br>';
    $_SESSION['seller_ID'] = $seller_ID;
  //  echo $password;

 }


 $stmt2->free_result();
 $stmt2->close();
 $conn->close();

//testing password entered to the one grabbed for the username entered
$test = strcmp($password, $passwordSubmitted);


if ($test == 0){
  //need to grab the seller_ID and open the correct seller dashboard accordingly
header('Location: DB2.php');
}else{
 header('Location: log_in2.html');
}


?>
