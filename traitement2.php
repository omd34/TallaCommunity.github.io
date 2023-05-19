<?php
$servername = "db4free.net";
$username = "tallacommunity";
$password = "Youdomyoudome1@";
$dbname = "tallacommunity";
$conn = new mysqli($servername, $username, $password, $dbname);

$email = $_POST['email'];
$destinataire = 'Danielotomo34@gmail.com';
$sujet = $_POST['sujet'];
$message = $_POST['message'];
$headers = "From: $email\r\nReply-To: $email\r\nContent-type:text/html;charset=utf-8\r\n";

if (mail($destinataire, $sujet, $message, $headers)) {
  echo "Votre message a été envoyé avec succès.";
} else {
  echo "Une erreur est survenue lors de l'envoi de votre message. Veuillez réessayer plus tard.";
}

?>
