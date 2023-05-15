<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "talla";
$conn = new mysqli($servername, $username, $password, $dbname);
ini_set("SMTP","localhost");
ini_set("smtp_port","25");

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
