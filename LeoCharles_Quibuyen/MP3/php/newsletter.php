
<?php

/** This code is for saving email address to database */

include_once("connection.php");

$email = $_POST['email'];


$sql = "INSERT INTO news_letter (email_address) VALUES ('$email');";
 

mysqli_query($conn, $sql);

header ("Location: ../newsletter-confirmation.html");
