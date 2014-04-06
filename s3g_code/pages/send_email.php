<?php
 $senderName = $_POST["senderName"];
 $senderEmail = $_POST["senderEmail"];
 $senderMessage = $_POST["senderMessage"];
 $header = "From: ". $senderName . " <" . $senderEmail . ">\r\n";
 $to = "contact@s3gtech.in";
 $subject = "Contact Us: Message from " . $senderName . "(" . $senderEmail . ")";
 $body = "Name: " . $senderName . " | Email: " . $senderEmail . "\n\n\n";
 $body = $body . "===================================================================================\n\n\n";
 $body = $body . $senderMessage;
 if (mail($to, $subject, $body, $header)) {
   header("Location: contact_us.php?submitMessage=Your message was successfully sent.");
  } else {
   header("Location: contact_us.php?submitMessage=There was an error during sending your message.");
  }
 ?>