<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Theme Company</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Users/mccurdy/RubymineProjects/company_template_mod/css/my_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<style>
    .jumbotron {
        background-color: #72ddf4;
        color: #fff;
        padding: 100px 25px;
    }

    .container-fluid {
        padding: 60px 50px;
    }

    .bg-grey {
        background-color: #f6f6f6;
    }

    .logo {
        font-size: 200px;
    }
    @media screen and (max-width: 768px) {
        .col-sm-4 {
            text-align: center;
            margin: 25px 0;
        }
    }

    .navbar {
        margin-bottom: 0;
        background-color: #72ddf4;
        z-index: 9999;
        border: 0;
        font-size: 12px !important;
        line-height: 1.42857143 !important;
        letter-spacing: 4px;
        border-radius: 0;
    }

    .navbar li a, .navbar .navbar-brand {
        color: #fff !important;
    }

    .navbar-nav li a:hover, .navbar-nav li.active a {
        color: #72ddf4 !important;
        background-color: #fff !important;
    }

    .navbar-default .navbar-toggle {
        border-color: transparent;
        color: #fff !important;
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



<body>
<div class="jumbotron text-center">
    <h1>Book == me </h1>
    <p>We specialize in knowledge</p>
    <form class="form-inline">

        <div class="input-group">

            <input type="general" class="form-control" size="50" placeholder="Title, Author, Course Code, etc " required>
            <div class="input-group-btn">
                <button type="button" class="btn btn-danger">Search</button>
            </div>
        </div>
    </form>

    <!--<a href="url">Advanced Search</a>-->
    <p>Click on the button for advanced search.</p>
    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Simple collapsible</button>
    <div id="demo" class="collapse">
        <div class="container">
            <h2>Vertical (basic) form</h2>
            <form action="/action_page.php">
                <div class="form-group">
                    <label form="title">Title:</label>
                    <input type="search" class="form-control" size="50" placeholder="Title (Required)" required>
                </div>
                <!--for author advances -->
                <div class="form-group">
                    <label form="author">Author:</label>
                    <input type="search" class="form-control" id="pwd" placeholder="Author" name="author">
                </div>
                <!--this is for the edition-->
                <div class="form-group">
                    <label for="editionSelect">Edition</label>
                    <select class="form-control" id="editionSelect">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                    </select>
                </div>

                <div class="form-group">
                    <label form="author">Book Condition:</label>
                    <label class="radio-inline gap"><input type="radio" name="optradio">Brand New</label>
                    <label class="radio-inline gap"><input type="radio" name="optradio">Gently Used</label>
                    <label class="radio-inline gap"><input type="radio" name="optradio">Very Used</label>
                </div>


                <button type="submit" class="btn btn-danger">Advanced Search</button>
            </form>
        </div>
    </div>

</div>


<div class="container-fluid bg-grey">
    <div class="row">
        <div class="col-sm-8">
            <h2>Why buy through us?</h2>
            <h4>We help you find the best deals for the books you want on your campus</h4>
            <p>With over 20 titles available today</p>
            <button class="btn btn-default btn-lg">Browse available books now</button>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-book logo"></span>
        </div>
    </div>
</div>


<div class="container-fluid ">
    <div class="row">
        <div class="col-sm-8">
            <h2>Why sell with us?</h2>
            <h4>We let you choose the price and help you find buyers on campus</h4>
            <p></p>
            <button class="btn btn-default btn-lg">Sell your books now</button>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-tags logo"></span>
        </div>
    </div>
</div>

<div class="container-fluid bg-grey">
    <h2>About Us</h2>
    <h4>MSCI 444 Group </h4>
    <p>Let's us know what you think </p>
    <button class="btn btn-default btn-lg">Get in Touch</button>
</div>

<?php $_GET['error']=NULL; ?>
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
</nav>
<br><br><br>


</body>
