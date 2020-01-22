<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$to = "bashiqali111@gmail.com";

mail ($to, $subject, $message, "From: " . $name);

header('Location: contact_thankyou.html');

?>
