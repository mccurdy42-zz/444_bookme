
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        .jumbotron {
            background-color: #f2f8f2;
            color: #070707;
            padding: 2% 10%;

        }
        .container-fluid {
            padding: 60px 50px;
        }

        .thumbnail img {
            width: 100%;
            height: 100%;
            margin-bottom: 10px;
        }

        .item h4 {
            font-size: 150%;
            line-height: 25%;
            font-weight: 300;
            font-style: italic;
            margin: 0 0 4% 0;
            line-break: auto;
        }

        .item span {
            font-style: normal;
        }

        .panel-footer h3 {
            font-size: 32px;
        }
        .panel-footer h4 {
            color: #aaa;
            font-size: 14px;
        }

        .navbar {
            margin-bottom: 0;
            background-color: #e6f1eb;
            background-color: #f2f8f2;
            z-index: 9999;
            border: 0;
            font-size: 12px !important;
            line-height: 1.42857143 !important;
            letter-spacing: 4px;
            border-radius: 0;
        }
        .navbar li a, .navbar .navbar-brand {
            color: #070707 !important;
        }

        /*nav bar - hover over the button it goes black with white text*/
        .navbar-nav li a:hover, .navbar-nav li.active a {
            color: #f2f8f2 !important;
            background-color: #4c4b93 !important;
        }
        .navbar-default .navbar-toggle {
            border-color: transparent;
            color: #070707 !important;
        }
        .card text-left{

        }

        .form-inline{

        }

        .listing {
            color: black;
            padding-left: 8%;
            font-size: xx-large;
            /*background colour tbd - have the ability to make this change
            background-color: #4c4b93;*/
        }

        .sellerinfo{
            font-size: medium;
            padding-left:8%;
            padding-bottom:5%;

        }
        @media screen and (max-width: 768px) {

        }


        table, th,td{
            padding-left: 20%;
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td{
            padding: 5px;
        }
        th{
            text-align: left;
        }
        .logo {
            font-size: 200px;
        }

        .col-sm-4 {
            text-align: center;
            margin: 25px 0;

        }
        .col-sm-8 {
            text-align: center;
            margin: 25px 0;

        }

        /* Dropdown Button */
        .dropbtn {
            background-color: #3498DB;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        /* Dropdown button on hover & focus */
        .dropbtn:hover, .dropbtn:focus {
            background-color: #2980B9;
        }

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {background-color: #f1f1f1}

        /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
        .show {display:block;}
    </style>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

<!--Nav bar-->


<nav class="navbar navbar-default navbar-fixed-top">

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            </button>
            <!--logo and little book using glyphicon-->
            <a class="navbar-brand" href="home.php"><span class="glyphicon glyphicon-book"></span>Book-Me-Up</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <!---- icon login -->
                <li><a href="log_in.php"><span class="glyphicon glyphicon-log-in"></span> Seller Log in</a></li>
            </ul>
        </div>
    </div>

</nav>


<br><br><br>

</div>

</body>


<meta charset="UTF-8">
<title> Search Results Page </title>



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

              container {
                  padding: 2px 16px;
              }

        </style>

        <p align = "center"> New Search:</p>

        <form class="form-inline" action = test3srp.php method = "GET" align = "center">

            <div class="input-group">
                <!-- this next part is copied from dbtableform.html
                <form action="fetch_rec.php" method="GET">
                <input type="text" name="querytopic" />
                <input type="submit" value="Search" />
    <           /form>
                -->

                <input type="text" name = "querytopic" class="form-control" size="50" placeholder="Title, Author, Course Code, etc " required/><br><br>

                <center>      <button type="submit" class = "button4">Search</button></center><br>

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

        if ($edition == "%25"){
            $edition = "%";
        }

        if ($bookcondition == "%25"){
            $bookcondition = "%";
        }




        if (!empty($querytopic)){
            $query =  "SELECT listing_ID, title, author, price, edition, photo_url, bookCondition, highlighting, courseCode from listing L where L.title LIKE '%$querytopic%' OR L.author LIKE '%$querytopic%'";


        } elseif (!empty($author) || !empty($edition) || !empty($title)){
            $query = "SELECT listing_ID, title, author, price, edition, photo_url, bookCondition, highlighting, courseCode from listing L where L.title LIKE '%$title%' AND L.author LIKE '%$author%' AND L.edition LIKE '%$edition%' AND L.bookCondition LIKE '%$bookcondition%'";


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
            <form action = ppa.php method = "GET">
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



        }



        $mysqli->close();
        ?>


        <footer class = "footer">
            <p><img class="img-responsive" src="background-footer.jpg"></p>
        </footer>

        </head>
        </html>
