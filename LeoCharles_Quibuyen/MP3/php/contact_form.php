<?php

  /** This code is sending message from contact form  to email */

  $to = "jeysonabrogar.info@gmail.com";
  $subject = "Customer Inquiry";

  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $inquiry = $_POST["inquiry"];

  $headers = "name:" . $name . "\n" .

  $txt = "You have received an e-mail from " . $name . "\r\nEmail: " . $email . "\r\n  Message: " . $message;

  if($email!=NULL){
       mail($to, $subject, $txt, $headers);

  }
  header('Location:../index.php');