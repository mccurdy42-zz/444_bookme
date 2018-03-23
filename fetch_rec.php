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
$author = $_GET['author'];
$edition = $_GET['edition'];
$title = $_GET['title'];

//general query to return all results

$query =  "select * from listing L";





if (!empty($querytopic)){
    $query =  "select * from listing L where L.title LIKE '%$querytopic%' OR L.author LIKE '%$querytopic%'";
    if ($result = $mysqli->query($query)) {
        echo "query topic '%$querytopic'";
        echo "query '%$query%'";

    }

} elseif (!empty($author) || !empty($edition) || !empty($title)){
    $query = "select * from listing L where L.title LIKE '%$title%' AND L.author LIKE '%$author%' AND L.edition LIKE '%$edition%'";

    if ($result = $mysqli->query($query)) {
        echo "edition: '$edition'";
        echo "</br>";
        echo "author '%$author%'";
        echo "</br>";
        echo "title '%$title%'";
        echo "</br>";
        echo "query '%$query%'";
        echo "</br>";


    }

} else{

    echo "no results were found while searching for '$querytopic' '$author''$edition''$title'";
}




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


