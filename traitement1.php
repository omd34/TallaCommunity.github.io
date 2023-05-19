<?php


$email = $_POST['email'];
$password = $_POST['mdp'];

// Connexion à la base de données
$servername = "db4free.net";
$username = "tallacommunity";
$password = "Youdomyoudome1@";
$dbname = "tallacommunity";
$conn = new mysqli($servername, $username, $password, $dbname);
 if (isset($_POST["email"]) && isset($_POST["mdp"]))

 {
	 	     $email = $_POST['email'];
    $password1 = $_POST['mdp'];

// Vérification de l'existence de l'utilisateur dans la base de données
$sql = "SELECT email, mdp FROM inscription WHERE email = '".$email."'";

$result = $conn->query($sql);

if ($result->num_rows == 1) {
  // L'utilisateur existe, vérification du mot de passe
  $row = $result->fetch_assoc();

  if ($password1==$row["mdp"]) {
    // Mot de passe correct, l'utilisateur est connecté

    header("Location: commande.html");
  } else {
    // Mot de passe incorrect
	 header("Location: connexion.html");
	  $error = "Mot de passe incorrect";
	  exit();
	 
  }
} else {
  // Aucun utilisateur trouvé avec cet e-mail
  $error = "Utilisateur non trouvé avec cet e-mail";
      header("Location: connexion.html");
  
}
 }else{
	       header("Location: connexion.html");
 }
?>

