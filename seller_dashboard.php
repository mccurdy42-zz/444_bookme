<?php
session_start();
$servername = "localhost";
$username = "s2mccurd";
$password = "Winter@*%2018";
$dbname = "s2mccurd";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_SESSION['seller_ID'];


$query = 'SELECT seller_firstName FROM seller WHERE seller_ID = ?';

$stmt3 = $conn->prepare($query);

$stmt3->bind_param('i', $id);
$stmt3->execute();
$stmt3->store_result();
//$stmt2->bind_result($seller_ID);
$stmt3->bind_result($seller_firstName);

 ?>

<!DOCTYPE html>
<html lang="en">
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
                  <li><a href="log_in1.php"><span class="glyphicon glyphicon-log-out"></span>Log Out</a></li>
              </ul>
          </div>
      </div>
  </nav>
  <br><br><br>

<!--alert to notify a successful login-->
<?php $_GET['error']=NULL; ?>

<?php if (isset($_GET['success'])): ?>
<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong>
</div>
<?php endif; ?>


<!--main welcome salutation and header-->
<div class="jumbotron">
<?php
while ($stmt3->fetch()){
 ?>
   <center> <h1>Welcome <?php echo $seller_firstName ?>!</h1>
   <?php } ?>
   <p> This is your dashboard and main control center for maintaining listings.<br>
    Want to sell another book, or delete a current listing? Click one of the buttons below!</p></center><br><br>
   <form action="New_Listing.php" method="post">
    <center> <button class="button">Sell Book</button>
    </form>
</div>

<!--beginning of the rest of the page - current listings and seller info-->

<div class = "listing">
    <span class="glyphicon glyphicon-tags"></span>      Current Listings
</div>


<?php

$sql = "SELECT title, author, price, edition, bookCondition, highlighting, courseCode FROM listing WHERE seller_ID = ?";
$stmt = $conn->prepare($sql);

$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->store_result();
//$stmt2->bind_result($seller_ID);
$stmt->bind_result($title, $author, $price, $edition, $bookCondition, $highlighting, $courseCode);

//$result = $conn->query($sql);

//$conn->close();
?>
<br><center><table style= "width: 75%">
    <tr>
        <th>Book Title </th>
        <th>Author</th>
        <th>Price</th>
        <th>Edition</th>
        <th>Condition</th>
        <th>Highlighting</th>
        <th>Course Codes</th>
        <!--<th>Edit Listing</th>-->
        <th>Delete Listing</th>
    </tr>

    <?php //if($result->num_rows > 0){
  //  while($row = $result->fetch_assoc()) {
  while ($stmt->fetch()){

   ?>
    <tr>
         <td><?php echo $title; ?></td>
         <td><?php echo $author; ?></td>
         <td><?php echo $price; ?></td>
         <td><?php echo $edition; ?></td>
         <td><?php echo $bookCondition; ?></td>
         <td><?php echo $highlighting; ?></td>
         <td><?php echo $courseCode; ?></td>

        <?php $_SESSION['title'] = $title;
            $_SESSION['author'] = $author;
            $_SESSION['price'] = $price;
            $_SESSION['edition'] = $edition;
            $_SESSION['bookCondition'] = $bookCondition;
            $_SESSION['highlighting'] = $highlighting;
            $_SESSION['courseCode'] = $courseCode;?>
<!--
         <td> <button2><span class="glyphicon glyphicon-edit"></span> Edit</button2></td>-->
  <form action="deleteListing.php" method="post">
<!--<td> <button2><input type = "submit" span class="glyphicon glyphicon-remove" name="deleteListing" value= "Delete"></span> </button2></td>-->
  <td> <button2><input type = "submit" style= "background-color:#4c4b93" class="glyphicon glyphicon-remove" name="deleteListing" value= "Delete"> </button2></td>
         </form>




         </tr>
    <?php } ?>


</table><br><br></center>

<!-- Container (Seller Info Section) -->
<div class="listing">
    <span class="glyphicon glyphicon-user"></span>      Seller Information<br><br>
</div>
<div class = "sellerinfo">

<?php
$sql2 = "SELECT seller_firstName, seller_lastName, seller_email FROM seller WHERE seller_ID = ?";
//$result2 = $conn->query($sql2);
$stmt2 = $conn->prepare($sql2);

$stmt2->bind_param('i', $id);
$stmt2->execute();
$stmt2->store_result();
//$stmt2->bind_result($seller_ID);
$stmt2->bind_result($seller_firstName, $seller_lastName, $seller_email);
//if($result2->num_rows > 0){
  //  while($row = $result2->fetch_assoc()) {
while($stmt2->fetch()){

  ?>

First Name: <?php echo $seller_firstName; ?><br><br><br>
Last Name:  <?php echo $seller_lastName; ?><br><br><br>
Email:      <?php echo $seller_email; ?><br><br><br>
  <!--  <button2><span class="glyphicon glyphicon-edit"></span> Edit</button2>-->

<?php } ?>
</div>

</html>
