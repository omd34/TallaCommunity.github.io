<?php
$servername="db4free.net";
$port=3306;
$username="tallacommunity@localhost";
$password="Youdomyoudome1@";
$dbname='tallacommunity';

try{
	$newBD=new PDO("mysql:servername=$servername;port=$port;dbname=$dbname",$username,$password);
	echo "connexion etablie";
}catch(PDOException $e){
	die('Erreur:' .$e->getMessage());
}
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
	  }else{
		  echo "Echec d'insertion";
	  }
  }else
  {
	  echo "<br>Une variable n'est pas declaree et ou est NULL";
  }
?>
