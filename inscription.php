<!DOCTYPE html>
<html lang="en">
  <head>
    <title>MENUISERIE Talla Community</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-compatible"
content="IE-edge">
<meta name="viewport" content="width-device-width,
initial-scale-1.0">
<link rel="stylesheet" type="text/css" href="top2.css">
  </head>
  <body>
   <header>
			<nav>
				<h1>MENUISERIE Talla Community</h1>
				<div class="right">
	
                  <p> <a href="bienvenu.php">Accueil</a> | <a href="top5produit.php">Produits</a> | <a href="top3service.php">Services</a> |  <a href="top7Photo.php">Photos</a> | </p>
				</div>
			</nav>

			<section class="presentation first">
				<div class="product-presentation">
					<h1>CREATION D'UN COMPTE TALLA COMMUNITY</h1>
			</section>
	</header>
	

		<section class="presentation second">
			<div class="product-presentation">
			
		    <form action="traitement.php" method="post">
			<fieldset>
			<legend>Entrez votre sexe</legend>
			<label for="sexe" class="inline">Masculin</label>
			<input type="radio" name="sexe" value="M" id="sexe" class="genr" checked="checked"/>
			<label for="sexe" class="inline">Feminin</label>
			<input type="radio" name="sexe" value="F" id="sexe" class="genr" />
			
			
		
			 <legend>Vos coordonnées :</legend>
			 <p> <label  for= "email" >Votre email :</label>
			   <input type= "email" name="email"  value="" id="email" placeholder="Entrez votre adresse mail" /></p>
			 <p>  <label  for= "nom" >Votre nom :</label>
               <input type= "text" name="nom"  value="" id="nom" placeholder="Entrez votre nom" /></p>
			   <p><label  for="telephone"> Telephone:</label>
			    <input type="text" name="telephone" value="+237" id="telephone" placeholder="Entrez votre numero de telephone" /></p>
			<p><label   for="mdp"> Mot de passe:</label>
			    <input type="password" name="mdp"  value="" id="mdp" placeholder="Entrez votre mot de passe"/></p>
				 <p>
				 <button type="submit"><a href="connexion.php">S'inscrire</a></button>
				 <button type="reset">Annuler</button>
			 </p>
			</fieldset>

			

      </form>
  
		</section>

			<footer>
			<div class="column">
				<h3> Pour nous contacter : </h3>
      <ul>
        <li>Adresse e-mail : <a href=mailto:Danielotomo34@gmail.com>Nous joindre par e-mail</a></li>
        <li>Adresse postale : (237) YAOUNDE/Nkolanfamba.</li>
        <li>Téléphone : +237 657191612/679091819. </li>
		<p>&copy;copyright 2023 Menuiserie Talla Community. Tous droits réservés.</p>
      </ul>
			</div>
			<div class="column">
			<h3>Aide</h3>
			   <p><a href="connexion.php">Avez-vous un compte?</a></p>
				<p><a href="inscription.php">Inscrivez-vous dès maintenant<a></p>
				</div>
			<div class="column">
				<h3>Réseaux</h3>
				<p><a href="https://www.facebook.com/profile.php?id=100064326753112"><img src="facebook.png"/>Facebook</a></p>
				<p><a href="https://www.twitter.com"><img src="twitter.png">Twitter</a></p>
				<p><a href="https://www.instagram.com"><img src="instagram.png">Instagram</a></p>
			</div>
		</footer>
		</body>
	</html>
	