<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Seller Upload</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <style>
        .submit-book-group {
        'width: 50%;
        margin:auto;
            margin-top: 50px;
        }
        .button{
            margin-right:20px;
        }
        .instructions{
            margin-bottom:20px;
        }
        .gap{
            margin-bottom:20px;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
        }

        /* Create three unequal columns that floats next to each other */
        .column {
            float: left;
            padding: 10px;
            height: 400px; /* Should be removed. Only for demonstration */
        }

        .right {
            width: 30%;
            padding-right:5%;
        }
        .left{
            width: 30%;
            padding-left: 5%;
        }

        .middle {
            width: 40%;
            padding-left: 5%;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        .calc{
            width: 90%;
            height: 90%;
        }
        .basic{
            margin:auto;
            width:80%;
        }

        .space {
            margin-bottom:2%;
            font-size: medium;
        }

    </style>


</head>

<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>Seller Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
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
        button {
           background-color: #4c4b93;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 150%;
            /*the first % is for the margin on the top/bottom, second is left/right*/
            margin: 0% 7%;
            cursor: pointer;
            height: 7%;
            width: 20%;
        }
        button2{
            background-color: #4c4b93;
            border: none;
            color: white;
            padding: 0.5% 1%;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 100%;
            /*the first % is for the margin on the top/bottom, second is left/right*/
            margin: 1% 0%;
            cursor: pointer;
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

    </style>
</head>
<body>

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


<body>


<?php session_start();

$listingid = $_GET['listing_id'];
//$_SESSION['listingID'] = $_GET['listing_id'];

//mccurds adding in
$servername = "localhost";
$username = "s2mccurd";
$password = "Winter@*%2018";
$dbname = "s2mccurd";

$mysqli = new mysqli($servername, $username, $password, $dbname);


if ($mysqli->connect_errno) {

    echo "Connect failed " . $mysqli->connect_error;
    exit();
}

$query =  "SELECT listing_ID, title, author, price, edition,photo_url, bookCondition, highlighting, courseCode FROM listing  WHERE listing_ID =1";
if (!empty($listingid)){
    $query =  "SELECT listing_ID, title, author, price, edition,photo_url, bookCondition, highlighting, courseCode FROM listing WHERE listing_ID ='$listingid'";
}

$stmt3 = $mysqli->prepare($query);

$stmt3->execute();

$stmt3->store_result();

$stmt3->bind_result($listing_ID1,$title1, $author1, $price1, $edition1 ,$photo_url1 , $bookCondition1, $highlighting1, $courseCode1);

while ($stmt3->fetch()){

?>

<!--      <form action="displayproductdetail.php" method="post">-->
        <div class="submit-book-group">
            <h2 class="myh2class"style="padding-left: 5%;"><?php echo $title1;?></h2>
        </div>


<div class="row">
    <div class="column left">
        <center><img src =<?php echo $photo_url1;?> alt = "Calculus Book" class="calc"></center>
    </div>

     <div class="column middle">

       <h2> <?php echo "$" . " " . $price1;?> </h2>

        <div class="space">
         <?php echo $author1;?> <br>
        </div>

        <div class="space">
          Edition: <?php echo $edition1;?><br>
        </div>

        <div class="space">
            Condition: <?php echo $bookCondition1;?> <br>
        </div>

        <div class="space">
            Highlighting: <?php echo $highlighting1;?><br>
        </div>

        <div class="space">
            Course Code: <?php echo $highlighting1;?><br>
        </div>
        </div>

<!--</form>-->
    <?php }

    ?>

    <div class="column right">
        <div class="basic">
            <h2>Contact Seller</h2>

            <form action="insertmessage.php" method="post">

                <input type="text" class="form-control"name="firstname" placeholder="Your First Name"><br>
                <input type="text" class="form-control"name="lastname" placeholder="Your Last Name"><br>
                <input type="text" class="form-control"name="email" placeholder="Your Email" required><br>
                <input type="text" class="form-control"name="message_content" placeholder="Your Message" style="height:150px;" required><br>
                <input type="hidden" class = "form-control" name="listing_id" value="<?php echo $listingid?>">
                <input type="submit" class="button btn btn-primary btn-md" value="Send Email" style="width:200px;"  >
<!--  taken out the my function to test for page reloading
          onclick="myFunction()"
          -->
                <p id="demo"></p>

                 <script>
                    function myFunction() {
                        document.getElementById("demo").innerHTML = "Message Sent!";
                    }
                </script>

            </form>


            </head>

            </div>
    </div>
</div>

</body>
</html>
