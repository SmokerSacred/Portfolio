<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailhead = "From" .$name. "<" .$email. ">\r\n";

$recepient = "mustafamurtaza404@gmail.com";

mail($recepient, $subject, $message, $mailhead)
or die("Error!");

echo'
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://kit.fontawesome.com/093cf2a000.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="contact.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thankyou</title>
</head>

<body>
    <h1 class="thank">Thank You for contacting me. I will get back to you as soon as possibe! </h1>
    <p class="back">go back to the <a class="lin" href="main.html">homepage</a>.</p>
</body>

';
?> 