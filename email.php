<?php

$to = "travterrell@gmail.com";
$from = $_POST["email_address"];
$subject = "MusicRISE Inquiry";
$name = $_POST["name"];
$message = "From: {$name}\n\n".$_POST["message"];
$headers = "From: {$from}";

if (mail($to,$subject,$message,$headers)) {
  echo "To: ".$to."<br>";
  echo $headers."<br>";
  echo "Subject: ".$subject."<br>";
  echo "Message: ".$message;
} else {
  echo "Message delivery failed...";
}
header("Location: index.html");

?>
