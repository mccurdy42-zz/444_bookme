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

<body>

<?php


    error_reporting(E_ALL ^ E_NOTICE);
    include ('./my_connect.php');
    $mysqli = get_mysqli_conn();

    $buyer_firstname =$_POST['firstname'];
    $buyer_lastname =$_POST['lastname'];
    $buyer_email =$_POST['email'];

    $message_content =$_POST['message_content'];
    $seller_ID =1;

$headers = "From: Book-Me-Up@donotreply.com";
mail("meghanstronach@icloud.com","Congratulations! There is interest in your textbook on Book-Me-Up.",$message_content,$headers);
echo "Email Sent!!!!!!!";


if (empty($_POST['firstname'])) {
    echo "no name";
 header('Location: product-page-actual.html');
  }

  if (empty($_POST['lastname'])) {
      echo "no name";
   header('Location: product-page-actual.html');
    }

if (empty($_POST['email'])) {
    echo "no email";
 header('Location: product-page-actual.html');
  }

if (empty($_POST['message_content'])) {
    echo "no message";
 header('Location: product-page-actual.html');
  }

$result = mysqli_query($mysqli, "SELECT MAX(message_ID) FROM message");
$row = mysqli_fetch_array($result);
$message_ID= $row[0]+1;

   $sql1 = "INSERT INTO message(message_ID, seller_ID, buyer_email, message_content)
 VALUES ('$message_ID','$seller_ID','$buyer_email','$message_content')";

 $sql = "INSERT INTO Buyer(buyer_email, buyer_firstname, buyer_lastname)
  VALUES ('$buyer_email','$buyer_firstname','$buyer_lastname')";

    if ($mysqli->query($sql) === TRUE) {
 // echo "Record created successfully";
  } else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
  }

   if ($mysqli->query($sql1) === TRUE) {
   // echo "Record created successfully";
    } else {
    echo "Error: " . $sql1 . "<br>" . $mysqli->error;
    }

if (isset( $_POST['message_content'] )) {
header('Location: product-page-actual.html');
echo "Message sent! im";
  }

$mysqli->close();
?>

</body>
</html>
