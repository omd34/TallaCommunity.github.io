<?php
// Lien de l'API GitHub
$url = "https://api.github.com/user/repos";

// Données d'identification
$username = "omd34";
$password = "Youdomyoudome1@";

// Données pour la création d'un nouveau dépôt
$data = array(
    "name" => "talla",
    "description" => "Description du dépôt",
    "auto_init" => true,
    "private" => false
);

// Conversion des données en format JSON
$data_json = json_encode($data);

// Configuration des en-têtes HTTP
$headers = array(
    "Content-Type: application/json",
    "Authorization: Basic " . base64_encode($username . ":" . $password)
);

// Envoi de la requête POST
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$response = curl_exec($ch);
curl_close($ch);

// Affichage de la réponse du serveur GitHub
var_dump($response);
//?>//

//$servername="localhost";
//$port=3306;
//$username="root";
//$password="";
//$dbname='talla';

//try{
//	$newBD=new PDO("mysql:servername=$servername;port=$port;dbname=$dbname",$username,$password);
//	echo "connexion etablie";
//}catch(PDOException $e){
//	die('Erreur:' .$e->getMessage());
//}
  if (isset($_POST["email"]) && isset($_POST["mdp"]) && isset($_POST["telephone"]) && isset($_POST["nom"]))
     {
	  $insertion=$newBD->prepare('INSERT INTO inscription VALUES(NULL,
	  :email,:mdp,:telephone,:nom)');
	  $insertion->bindValue(':nom',$_POST['nom']);
	  $insertion->bindValue(':telephone',$_POST['telephone']);
	  $insertion->bindValue(':mdp',$_POST['mdp']);
	  $insertion->bindValue(':email',$_POST['email']);
	  $verification=$insertion->execute();
	  if($verification){
		  echo "<br>Insertion reussie";
		  header("Location: connexion.php"); 
	  }else{
		  echo "Echec d'insertion";
	  }
  }else
  {
	  echo "<br>Une variable n'est pas declaree et ou est NULL";
  }
?>
