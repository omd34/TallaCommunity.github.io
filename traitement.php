<?php
$servername="db4free.net";
$username="tallacommunity";
$password="Youdomyoudome1@";
$dbname="tallacommunity";

	$newBD=new mysqli($servername,$username,$password,$dbname);
	if($newBD->connect_error){
		die("Connection failed:" . $newBD->connect_error);
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
		  headers(location: "connexion.html");
	  }else{
		  echo "Echec d'insertion";
	  }
  }else
  {
	  echo "<br>Une variable n'est pas declaree et ou est NULL";
  }
?>
