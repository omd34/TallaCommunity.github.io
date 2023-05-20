<?php
$database_host="db4free.net";
$database_name="tallacommunity";
$database_user="tallacommunity";
$database_password="Youdomyoudome1@";

	$conn =mysqli_connect($database_host,$database_name,$database_user,$database_password);
	if(!$conn){
		die("Connexion echouer:" . mysqli_connect_error());
	}else
	{
		echo "Connexion reussie";

  if (isset($_POST["email"]) && isset($_POST["mdp"]) && isset($_POST["telephone"]) && isset($_POST["nom"]))
     {
	  $insertion=$conn->prepare('INSERT INTO inscription VALUES(NULL, :email,:mdp,:telephone,:nom)');
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
