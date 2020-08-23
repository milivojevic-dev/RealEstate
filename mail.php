<?php
$name = $email = $message = "";

if(isset($_POST['name']))
    $name = $_POST['name'];

if(isset($_POST['email']))
    $email = $_POST['email'];

if(isset($_POST['message']))
    $message = $_POST['message'];

if(!empty($name) AND !empty($email) AND !empty($message)) {
    $header = "From: $name <$email>\n";
    $header .= "X-Mailer: PHP\n";
    $header .= "Return-Path: <$email>\n";
    $header .= "Content-Type: text/html; charset=UTF-8\n";
    $to = "milivojevic.ivana.1997@gmail.com";
    $subject = "Contact from my website";

    if (mail($to, $subject, $message, $header))
        echo "Mail was sent!";
    else
        echo "Error occurred during sending mail";
}
else {
    echo "Something is wrong!";
}

?>