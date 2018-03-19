<?php

$username =  $_POST['username'];
$passwordSubmitted =  $_POST['password'];
//echo $username;

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
     echo $un;

     $stmt = $conn->prepare($sql);

     $stmt->bind_param('s', $un);
     $stmt->execute();
     $stmt->store_result();
     $stmt->bind_result($seller_password);
     while ($stmt->fetch()){
      //  echo 'Password: '.$seller_password.'<br><br>';
        $password = $seller_password;
        echo $password;
        if (empty('$password')){
          echo "dne";
        }
     }

     $stmt->free_result();
     $stmt->close();
     $conn->close();
echo $password;
echo $passwordSubmitted;
$test = strcmp($password, $passwordSubmitted);
if ($test == 0){
header('Location: DB2.php');
}else{
  header('Location: log_in2.html');

}


?>
