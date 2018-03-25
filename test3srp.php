
<!DOCTYPE html>
<html lang="en">
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
</html>

<meta charset="UTF-8">
<title> Search Results Page </title>

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

        <?php
        //start of mccurds changes
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
        $bookcondition = $_GET['condition'];

        //general query to return all results

       // $query =  "SELECT title, author, price, edition, bookCondition, highlighting, courseCode FROM listing L";

        //this is a
//        $stmt3 = $mysqli->prepare($query);

//        $stmt3->execute();
//        $stmt3->store_result();
//        $stmt3->bind_result($title1, $author1, $price1, $edition1, $bookCondition1, $highlighting1, $courseCode1);

//        //this was for testing purposes only
//        while ($stmt3->fetch()){
//            echo $title;
//            echo $author1;
//            echo $price1;
//            echo $edition1;
//        }




        if (!empty($querytopic)){
            $query =  "SELECT listing_ID, title, author, price, edition, photo_url, bookCondition, highlighting, courseCode from listing L where L.title LIKE '%$querytopic%' OR L.author LIKE '%$querytopic%'";
//            echo $query;
//            $stmt3 = $mysqli->prepare($query);
//            $stmt3->execute();
//            $stmt3->store_result();
//            $stmt3->bind_result($title1, $author1, $price1, $edition1, $bookCondition1, $highlighting1, $courseCode1);
//
//            while($stmt3->fetch()) {
//                echo $title1;
//                echo $author1;
//                echo $price1;
//                echo $edition1;
//
//
//            }

        } elseif (!empty($author) || !empty($edition) || !empty($title)){
            $query = "SELECT listing_ID, title, author, price, edition, photo_url, bookCondition, highlighting, courseCode from listing L where L.title LIKE '%$title%' AND L.author LIKE '%$author%' AND L.edition LIKE '%$edition%'";

//            $stmt3 = $mysqli->prepare($query);
//
//            $stmt3->execute();
//            $stmt3->store_result();
//            $stmt3->bind_result($title1, $author1, $price1, $edition1, $bookCondition1, $highlighting1, $courseCode1);

        } else{
            $query = "SELECT listing_ID, title, author, price, edition, photo_url, bookCondition, highlighting, courseCode FROM listing";
            $no_pass_value =  "no search input were found results were found while searching for '$querytopic' '$author''$edition''$title'";
            echo $no_pass_value;
        }
        $result = $mysqli->query($query);

        if($result->num_rows <=0 ){
            $query =  "SELECT listing_ID, title, author, price, edition,photo_url, bookCondition, highlighting, courseCode FROM listing L";
            ?> <h3>no available matches for your search</h3> <?php
        }


        $stmt3 = $mysqli->prepare($query);
        $stmt3->execute();
        $stmt3->store_result();
        $stmt3->bind_result($listing_ID1,$title1, $author1, $price1, $edition1,$photo_url1 , $bookCondition1, $highlighting1, $courseCode1);

        while($stmt3->fetch()) {

            ?>
            <form action = displayproductpage.php method = "GET">
            <div class="col-sm-3">
                <div class="card text-center">
                    <div class="card-block">
                        <img class="img-responsive-center" src="<?php echo $photo_url1?>" alt="Calc Book" style= "width:60%;height:60%; margin-top: 20px">
                    <h2 class="card-title"><?php echo$price1;?></h2>
                    <h4 class="card-text"><?php echo $title1; ?></h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Author: <?php echo $author1; ?></li>
                        <li class="list-group-item">Edition:<?php echo $edition1; ?></li>
                    </ul>
<!--                    <a type = "submit" class="btn btn-primary" name = "listing_id"> Details</a>-->
                        <button name="listing_id" type="submit" value="<?php echo $listing_ID1?>">Details </button>
                </div>
            </div>
        </div>
            </form>
        <?php
//            echo $title1;
//            echo $author1;
//            echo $price1;
//            echo $edition1;


        }




            //this is a
  //          $stmt3 = $mysqli->prepare($query);

  //          $stmt3->execute();
  //          $stmt3->store_result();
  //          $stmt3->bind_result($title1, $author1, $price1, $edition1, $bookCondition1, $highlighting1, $courseCode1);







//        if ($result = $mysqli->query($query)) {
//            echo "query topic2 '%$querytopic'";
//            echo "query2 '%$query%'";
//
//
//        }

        /* close connection */
        // keeping mysqli open
        //$mysqli->close();

        //end of mccurds

//
//        if ($result->num_rows > 0) {
//            // output data of each row
//            echo $result -> num_rows;
//            echo "in the number of rows wowo";
//
//
//
//            while($row = $result->fetch_assoc()) {
//                // while there are rows of this data, create a new product card each time *
//                echo "in second fetch assoc ";
//
//
//
////                 <div class='col-sm-3'>;
////                           '<div class="card text-center">';
////                               '<div class="card-block">';
////                                  '<img class="img-responsive-center" src='.$photo_url." alt=".$title." style= 'width:60&;height:60%;' margin-top: 20px>";
////                                  '<h2 class="card-title">'.$price."</h2>";
////                                    '<h4 class="card-text">'.$title."</h4>";
////                                    '<ul class="list-group list-group-flush">';
////                                    '<li class="list-group-item">Author:'.$author.'</li>' ;
////                                    '<li class="list-group-item">Edition:'.$edition."</li>" ;
////                                    '</ul>';
////                                    '<a href="#" class="btn btn-primary">More Details</a> ';
////                    '</div>';
////                '</div>';
////                        '</div>';
////
//                }
//
//        } else {
//            echo "<br>";
//            echo "no search results found";
//        }

        // moved closing mysqli down hereh

        $mysqli->close();
        ?>


        <footer class = "footer">
            <p><img class="img-responsive" src="background-footer.jpg"></p>
        </footer>

        </head>
        </html>
