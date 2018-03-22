<?php
session_start();
$id =$_SESSION['seller_ID'];
 ?>

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

<?php


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
            <a class="navbar-brand" href="home.html"><span class="glyphicon glyphicon-book"></span>Book-Me-Up</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
               <!---- icon login -->
                <li><a href="log_in.php"><span class="glyphicon glyphicon-log-out"></span>Log Out</a></li>
            </ul>
        </div>
    </div>
</nav>
<br><br><br>
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
        <input type="text" class="form-control"name="price" placeholder="Price" required><br>
    </div>


    <input type="submit" class="button btn btn-primary btn-md" name="post2" value="Post and Upload Another">
    <input type="submit" class="btn btn-primary btn-md" name= "post" value="  Post  ">



    </form>
</div>



</body>
</html>
