<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Seller Upload</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <style>
        .submit-book-group {
            width: 50%;
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
        .hidden {
            display: none;
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
            <a class="navbar-brand" href="#myPage"><span class="glyphicon glyphicon-book"></span>Book-Me-Up</a>
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

<div class="submit-book-group" >
    <h2 class="myh2class">Submit a rating for a seller:</h2>

    <div class="instructions">
        Please only complete the rating process if you purchased a textbook from this seller. <br>
    </div>


    <form action="inrating.php" method="post">

    <div class="basic">
        What did you think of your experience with the seller? <br>
        <input type="text" class="form-control" name="seller_review" placeholder="Opinion of interaction with seller"><br>
    </div>

<div class="basic">
    What would you like to rate them? <br>
    <select class="gap" name="seller_rating">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        </select>
        </div>

    <input type="submit" class="btn btn-primary btn-md" name= "seller_rating_button" value="  Done Review  ">
<?php
session_start();
$_SESSION['buyer_email'] = $_POST['buyer_email'];
$_SESSION['seller_ID'] = $_POST['seller_ID'];
?>
    </form>
</div>

</body>
</html>
