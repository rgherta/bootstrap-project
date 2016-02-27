<?php

if (isset($_POST["email"]) && !empty($_POST["email"])) {

$to      = 'office@complexsavannah.ro';
$subject = 'Mesaj ComplexSavannah';
$message = 'Nume: ' . $_POST["nume"] . PHP_EOL . 'Email: ' . $_POST["email"] . PHP_EOL . PHP_EOL . 'Mesaj: ' . PHP_EOL . PHP_EOL . $_POST["message"] . PHP_EOL . PHP_EOL . 'Sfarsit Mesaj';

$headers = "From: Complex Savannah <office@complexsavannah.ro>\r\n";
$headers .= "Reply-To:" . $_POST["email"] . "\r\n";
$headers .= "Return-Path: office@complexsavannah.ro\r\n";


mail($to, $subject, $message, $headers);

}
?>
