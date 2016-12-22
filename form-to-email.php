<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];

  $to = "dmr5bq@virginia.edu";
 
  $headers = "From: $email_from \r\n";
 
  $headers .= "Reply-To: $visitor_email \r\n";
 
  mail($to,$email_subject,$email_body,$headers);
?>
