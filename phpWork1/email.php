<?php
$emailTo = "omobukola@gmail.com";
$subject = "I hope you are fine";
$body = "Where are you";
$headers = "from: obisesan.abiodun@yahoo.com";

if (mail($emailTo, $subject, $body, $headers)){

  echo"The email was sent successfully";
}else {

  echo "The could not be sent";
}
?>
