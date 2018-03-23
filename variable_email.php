<?php
$sql = "SELECT title FROM listing WHERE listing_ID= ?";
$id = 2;

$stmt = $mysqli->prepare($sql);
$stmt->bind_param('i',$id);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($title);

while ($stmt->fetch()){
 $textbook = $title;
}

$sql2 = "SELECT seller_ID FROM listing WHERE listing_ID = ?";
$id = 2;

$stmt2 = $mysqli->prepare($sql2);
$stmt2->bind_param('i',$id);
$stmt2->execute();
$stmt2->store_result();
$stmt2->bind_result($seller_ID);
while ($stmt2->fetch()){
$sellerID= $sellerID;
}
//$sellerID is the ID grabbed based off of the listing id
$sql3 = "SELECT seller_email FROM seller WHERE seller_ID= ?";

$stmt3 = $mysqli->prepare($sql3);
$stmt3->bind_param('i',$sellerID);
$stmt3->execute();
$stmt3->store_result();
$stmt3->bind_result($seller_email);
while ($stmt3->fetch()){
$selleremail= $seller_email;
}

       $msg_content = $_POST['message_content'];
       $email = $_POST['email'];
       $msgbuyer_email = "There is interest in your textbook, ";
       $msgbuyer_pt2 = " from the buyer: ";
      $msgfinal = $msgbuyer_email . " " . $textbook . " " . $msgbuyer_pt2 . " " . $email . " " . $msg_content;

       $headers = "From: Book-Me-Up@donotreply.com";
       mail($selleremail,"Congratulations! There is interest in your textbook on Book-Me-Up.", $msgfinal , $headers);


$message_body = "Thank you for contacting the seller about their listing. Once you have completed your transaction with the seller please review them here, by entering this code: ";
$code = $sellerID;
$link = ", at this link: ";

$final = $message_body . " " . $code . " " . $link;
$headers = "From: Book-Me-Up@donotreply.com";

mail($email,"Thank you for your interest in a listing!", $final , $headers);



 ?>
