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
					<h1>PASSEZ VOTRE COMMANDE ICI</h1>
			</section>
	</header>
	

		<section class="presentation second">
			<div class="product-presentation">
		    <form action="traitement2.php" method="post">
			<fieldset>
			   <label for="email">Votre adresse e-mail :</label>
                <input type="email" id="email" name="email" required><br>
				  <label for="sujet">Sujet :</label>
				  <input type="text" id="sujet" name="sujet" value="Passer une commande " cols= "50" required><br>
				  <label for="message">Salut A vous,Je souhaite passer une commande pour la fabrication du produit:</label><br>
				  <textarea id="message" name="message"   value="" placeholder="Faites une description de votre commande" cols="30" rows= "4" required></textarea><br>
				<button type="submit">Envoyer</button>
				 <button type="reset">Annuler</button>
			   <p><a href="inscription.php">Creer un compte Talla Community</a></p>
			 </p>
			</fieldset>

          </form>

		</section>

			<footer>
			<div class="column">
				<h3> Pour nous contacter : </h3>
				
      <ul>
        <li>Adresse e-mail : <a href=mailto:MenuiserieIAI@gmail.com>Nous joindre par e-mail</a></li>
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