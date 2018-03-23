<!DOCTYPE html>
<html lang="en">
<head>
    <title>Book-Me-Up Homepage</title>
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
          font-size: 120%;
          /*the first % is for the margin on the top/bottom, second is left/right*/
          margin: 1% 0%;
          cursor: pointer;
      }
      .button3 {
         background-color: #4c4b93;
          border: none;
          color: white;
          padding: 10px 20px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 120%;
          /*the first % is for the margin on the top/bottom, second is left/right*/
          margin: 0% 7%;
          cursor: pointer;
          height: 7%;
          width: 20%;
      }
      .button4 {
         background-color: #4c4b93;
          border: none;
          color: white;
          padding: 10px 20px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 120%;
          /*the first % is for the margin on the top/bottom, second is left/right*/
          margin: 0% 7%;
          cursor: pointer;
          height: 7%;
          width: 75%;
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

<body>
<div class="jumbotron text-center">
    <h1>Book-Me-Up </h1>
    <p>Where we specialize in knowledge!</p>
    <form class="form-inline" action = fetch_rec.php method = "GET">

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

    <!--<a href="url">Advanced Search</a>-->
    <p>Click on the button for advanced search.</p>
    <button type="button" class="button3" data-toggle="collapse" data-target="#demo">Advanced Search</button>
    <div id="demo" class="collapse">
        <div class="container">
            <h2>Enter data in the fields below:</h2>
            <form action = fetch_rec.php method = "GET">
                <div class="form-group">
                    <label form="title">Title:</label>
                    <input type="search" class="form-control" size="50" placeholder="Title (Required)" name="title" required>
                </div>
                <!--for author advances -->
                <div class="form-group">
                    <label form="author">Author:</label>
                    <input type="search" class="form-control" id="pwd" placeholder="Author" name="author">
                </div>
                <!--this is for the edition-->
                <div class="form-group">
                    <label form="editionSelect">Edition</label>
                    <select class="form-control" id="editionSelect" name = "edition" >
                        <option value = "1" >1</option>
                        <option value = "2" >2</option>
                        <option value = "3">3</option>
                        <option value = "4">4</option>
                        <option value = "5">5</option>
                        <option value = "6">6</option>
                        <option value = "7">7</option>
                        <option value = "8">8</option>
                        <option value = "9">9</option>
                        <option value = "10">10</option>
                        <option value = "11">11</option>
                        <option value = "12">12</option>
                        <option value = "13">13</option>
                        <option value = "14">14</option>
                        <option value = "15">15</option>
                    </select>
                    <!--<input type="range" name = "editions" > -->
                    <!--<input type = "option" name="edition">-->
                </div>

                <div class="form-group">
                    <label form="condition">Book Condition:</label>
                    <label class="radio-inline gap"><input type="radio" name="condition" value ="Brand New">Brand New</label>
                    <label class="radio-inline gap"><input type="radio" name="condition" value = "Gently Used">Gently Used</label>
                    <label class="radio-inline gap"><input type="radio" name="condition" value = "Very Used">Very Used</label>
                    <!--<input type = "radio" name = "condition" > -->
                    <!--<input type="radio" name = "conditions"> -->
                </div>


                <button type="submit" class="button3">Search!</button>
            </form>
        </div>
    </div>

</div>


<div class="container-fluid bg-grey">
    <div class="row">
        <div class="col-sm-8">
            <h2>Why buy through us?</h2>
            <h4>We help you find the best deals for the books you want on your campus, so you never have to go far.</h4>
            <p>With over 20 titles available today with sellers eager to get rid of their old books!</p>
            <button class="btn btn-default btn-lg">Browse Now!</button>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-book logo"></span>
        </div>
    </div>
</div>


<div class="container-fluid ">
    <div class="row">
      <div class="col-sm-4">
          <span class="glyphicon glyphicon-tags logo"></span>
      </div>
        <div class="col-sm-8">
           <h2>Why sell with us?</h2>
            <h4>We let you choose the price and help you find buyers on campus.</h4>
            <p>The process for getting rid of your old textbooks has never been easier! </p>
    <a href="log_in1.php"> <button class="btn btn-default btn-lg">Create an Account Here!</button></a>

        </div>

    </div>
</div>

<div class="col-sm-8">
    <h2>About Us</h2>
    <h4>"The Big-4" </h4>
    <p>With a passion for the codes and our quest for knowledge, we made a site that we noticed was missing for students.</p>

</div>
<div class="col-sm-4">
    <span class="glyphicon glyphicon-info-sign logo"></span>
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
                <li><a href="log_in1.php"><span class="glyphicon glyphicon-log-out"></span>Log In</a></li>
            </ul>
        </div>
    </div>
</nav>



</body>
