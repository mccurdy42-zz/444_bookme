<?php

$servername = "localhost";
$username = "s2mccurd";
$password = "Winter@*%2018";
$dbname = "s2mccurd";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);
// Check connection


/* check connection */
if ($mysqli->connect_errno) {

    echo "Connect failed " . $mysqli->connect_error;
    exit();
}


$querytopic = $_GET['querytopic'];

$query =  "select * from listing L where L.title LIKE '%$querytopic%' OR L.author LIKE '%$querytopic%'";


if ($result = $mysqli->query($query)) {
    echo "query topic '%$querytopic'";
    echo "query '%$query%'";

/* fetch associative array */
while ($row = $result->fetch_assoc()) {

echo $row["title"]." ".$row["author"]." ".$row["edition"]." ".$row["bookCondition"]."<br />";

}

/* free result set */
$result->free();

}

/* close connection */
$mysqli->close();

?>


