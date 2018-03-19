<?php
// Function to obtain mysqli connection.
function get_mysqli_conn()
{
  
$dbhost = 'localhost';
$dbuser = 'ahopkins';
$dbpassword = 'Winter@*%2018'; 
$dbname = 'ahopkins';
$mysqli = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
if ($mysqli->connect_errno) {
    echo 'Failed to connect to MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error . '\n';
}


return $mysqli;
}
?>
