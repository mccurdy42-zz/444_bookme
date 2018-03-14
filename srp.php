<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Results Page</title>

<body>
<div class="realCentre">

<head>
            <style>
                body {
                    position: relative;
                }

                footer {

                    bottom: 0;
                    left: 0;
                }

                affix {
                    top:0;
                    width: 100%;
                    z-index: 9999 !important;
                }
                navbar {
                    margin-bottom: 0px;
                }
            </style>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">BookLoversRUS</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Sell</a></li>
            <li><a href="#">Page 1</a></li>
            <li><a href="#">Page 2</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Messages</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> My Account</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
        </ul>
    </div>
</nav>

</div>

</body>

<p align = "center"> New Search:</p>
        <form class="form-inline" align = "center">
            <div class="input-group">

                <input type="general" class="form-control" size="50" placeholder="Title, Author, Course Code, etc " required>
                <div class="input-group-btn">
                    <button type="button" class="btn btn-danger">Search</button>
                </div>
            </div>
        </form>

        <p>
        <ul>
            <span class="right"></span>

        </ul>​
        </p>

<meta charset="UTF-8">
<title> Search Results Page </title>

<ui:include src="query.xhtml" />

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
    }

    /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
    @media (max-width: 600px) {

    }
</style>
</head>
<body>

<div class="row">

    <div class="card text-left">
        <style>

            .card {
                /* Add shadows to create the "card" effect */
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                transition: 0.3s;
                padding-bottom: 10px;
            }

            /* On mouse-over, add a deeper shadow */
            .card:hover {
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            }

            /* Add some padding inside the card container */
                </ul>
                container {
                padding: 2px 16px;
                }

                </style>

</head>

<footer class = "footer">
    <p><img class="img-responsive" src="background-footer.jpg"></p>
    </footer>

    <?php

// Enable error logging:
error_reporting(E_ALL ^ E_NOTICE);
// mysqli connection via user-defined function


// Function to obtain mysqli connection.
function get_mysqli_conn()
{
$dbhost = 'localhost';
$dbuser = 's2mccurd';
$dbpassword = 'Winter@*%2018';
$dbname = 's2mccurd';
$mysqli = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
if ($mysqli->connect_errno)
{
echo 'Failed to connect to MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error;
}

return $mysqli;
}

include('./my_connect.php');
$mysqli = get_mysqli_conn();

// SQL statement
$sql = "SELECT L.title,L.author,L.edition,L.photo_url, L.price"
. "FROM Listing L"
. "WHERE L.title= 'Calculus 1'";

// Prepared statement, stage 1: prepare
$stmt = $mysqli->prepare($sql);

    $ltitle = $_GET['title'];
    $author = $_GET['author'];
    $edition = $_GET['edition'];
    $photo_url = $_GET['photo_url'];
    $price = $_GET['price'];

    // Bind result variables, what is s doing????
    /* $stmt->bind_param('s',$ltitle);
    $stmt->execute(); --->

    //Bind result variables
    $stmt->bind_result($ltitle);  need to use this once using question marks and making it variable but can take out for now*/

    /*fetch values */
   /* if ($stmt->fetch())  //all the results
    {
    echo'<label for="title"><h2>' . $ltitle . '</label></h2>';

    }
    else
    {
    echo '<label for="title">Record not found</label>';
    } --> */

    /* close statement and connection */
    $stmt->close();
    $mysqli->close();

    // sql query starts here
    $mysqli = get_mysqli_conn();
    $sql1 = "SELECT L.author, L.edition,L.photo_url, L.price,L.title"
    . "FROM Listing L"
    . "WHERE L.title = '$ltitle', L.author = '$author', L.photo_url = '$photo_url', L.price = '$price', L.edition = '$edition'";

    $result = $mysqli->query($sql1);
    echo "<br>";

    if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {

 <div class="col-sm-3">
                    <div class="card text-center">
                        <div class="card-block">
                            <img class="img-responsive-center" src='$photo_url' alt="Comp Sim Book" style= "width:60%;height:60%; margin-top: 20px">
                            <h2 class="card-title">'$price'</h2>
                            <h4 class="card-text">'$ltitle'</h4>
                            <ul class="list-group list-group-flush">
                            <li class="list-group-item">Author: & '$author'</li>
                            <li class="list-group-item">Edition: & '$edition'</li>
                            </ul>
                                <a href="#" class="btn btn-primary">More Details</a>
                            </div>

                    </div>
    </div>

    }

    } else {
    echo "<br>";
    echo "no search results found";
    }

    ?>

    </div>
</body>

</head>
</html>
