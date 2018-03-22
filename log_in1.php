<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>Log-In</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .login {
           padding: 2% 10%;
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
            font-size: 100%;
            /*the first % is for the margin on the top/bottom, second is left/right*/
            margin: 0% 7%;
            cursor: pointer;
            height: 2%;
            width: 10%;
        }
        .button2 {
            background-color: #4c4b93;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 100%;
            /*the first % is for the margin on the top/bottom, second is left/right*/
            margin: 0% 7%;
            cursor: pointer;
            height: 2%;
            width: 13.5%;
        }
        body {background-color: #f2f8f2;}

        input[type = text]{
            width: 20%;
            border-radius: 2%;
            padding: 0.5% 0.5%
        }
        input[type = password]{
            width: 20%;
            border-radius: 2%;
            padding: 0.5% 0.5%
        }
        .container2{
            background-color: #b3d0cb;
            padding: 1% 15% 7% 15%;

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
              <a class="navbar-brand" href="home.html"><span class="glyphicon glyphicon-book"></span>Book-Me-Up</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right">
                 <!---- icon login -->

              </ul>
          </div>
      </div>
  </nav>
  <br><br><br>

  <!--alert to notify a successful login-->
  <?php if (isset($_GET['error'])): ?>
    <div class="alert alert-danger alert-dismissible">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Error.</strong> Incorrect username or password. Please try again or create an account.
    </div>
  <?php endif; ?>

  <?php $_GET['error']=NULL; ?>

<!--main welcome salutation and header-->
<div class = "login">
    <center> <h1>Log-In</h1>
        <form action = "log_in.php" method = "post">
        Enter Username or E-mail:<br><br>
        <input type = "text" class = "form-control"  name = "username" placeholder="Username"><br><br>
        Enter Password: <br><br>
        <input type = "password" class = "form-control" name = "password" placeholder="Password"><br><br><br>
    <center> <input type = "submit"	class = "button2"></center>
        </form>
</div>
<br>
<center><h4>If you do not have an account please click the button below:</h4>
    <button type="button" class="button" data-toggle="collapse" data-target="#demo">Create Account</button></center>
<div id="demo" class="collapse">
    <div class="container2">
        <center> <h2>Set-up New Account</h2>
            <p>Please enter in the following information:</p></center>
        <form action="Insert_New_Seller.php" method="post">
            <div class="form-group">
                <center>   <label form="Firstname">First Name:</label><br>
                    <input type="text" name= "firstName" class="form-control" size="50" placeholder="First Name (Required)" required><br>
                    <label form="lastName">Last Name:</label><br>
                    <input type="text" name= "lastName" class="form-control" size="50" placeholder="Last Name(Required)" required><br>
                    <label form="email">E-Mail Address:</label><br>
                    <input type="text" name= "email" class="form-control" size="50" placeholder="E-Mail (Required)" required><br>
                    <label form="Password">Password:</label><br>
                    <input type="text" name= "password" class="form-control" size="50" placeholder="Password (Required)" required><br>
                    <button class="button2">Submit <span class = "glyphicon glyphicon-ok-circle"></span></button></center>
            </div>

</body>
</html>
