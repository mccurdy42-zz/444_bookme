<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Seller Upload</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

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
        .button2{
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

<?php
session_start();
$id =$_SESSION['seller_id'];

if (isset($_GET['success'])): ?>
<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> You have uploaded another book to your listings.
</div>
<?php endif; ?>

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
                 <li><a href="log_in1.php"><span class="glyphicon glyphicon-log-out"></span>Log Out</a></li>
             </ul>
         </div>
     </div>
 </nav><br><br>

<div class="submit-book-group" >
    <h2 class="myh2class"> Upload a Textbook</h2>

    <div class="instructions">
        Please fill in all of the fields below to sell your textbook: <br>
    </div>


    <form action="Insert_Listing.php" method="post">
    <div class="basic">
        What is the textbook title? <br>
        <input type="text" class="form-control" name="title" placeholder="Title" required><br>
    </div>

    <div class="basic">
        Who is the author? <br>
        <input type="text" class="form-control"name="author" placeholder="Author" required><br>
    </div>

    <div class="basic">
        What is the edition number? <br>
        <select class="gap" name="edition"required>
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
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
        </select>

    </div>

    <div class="basic" class="form-control"required>
        What condition is the textbook in?  <br>
        <select class="gap" name="bookCondition" required>
            <option value="Very Used">Very Used</option>
            <option value="Used">Used</option>
            <option value="Fair">Fair</option>
            <option value="Good">Good</option>
            <option value="Very Good">Very Good</option>
        </select>
    </div>

    <div class="basic gap">
        Upload a picture of the front of the textbook: <br>
        <input type="text" class="form-control"name="photo_url" placeholder="Photo Url" required><br>
    </div>

    <div class="basic" class="form-control" >
        Is there any highlighting or writing on the pages? <br>
        <label class="radio-inline gap"><input type="radio" name="highlighting" value="Yes" required >Yes</label>
        <label class="radio-inline gap"><input type="radio" name="highlighting"value="No" required >No</label>
    </div>

    <div class="basic">
        What course was this textbook purchased for? (MATH 118, MSCI 444)<br>
        <input type="text" class="form-control"name="course" placeholder="Course Code" required><br>
    </div>

    <div class="basic">
        What price would you like to sell this book for? <br>
        <input type="number" value="85" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="currency" id="c1"name="price" placeholder="Price" required><br>
<!--        <div class="form-row">-->
<!--            <label for="c1">Currency</label>-->
<!--            <input type="number" value="85" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="currency" id="c1" />-->
<!--        </div>-->
<!--        chanign input type from text to number. orginial line is <input type="text" class="form-control"name="price" placeholder="Price" required><br>-->
    </div>

 <input type="submit" class="button2" name= "post" value="  Post  ">
    <input type="submit" class="button2" name="post2" value="Post and Upload Another"><br>
    
    </form>
    <a href="seller_dashboard.php"><button class = "button2">Return to Seller Dashboard</button></a>

</div>

</body>
</html>
