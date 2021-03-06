<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="Musical Riot">
  <meta name="description" content="retrouvez les dernieres informations de MUSICAL RIOT">
	<link href="contact.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
  integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
	 crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
  <title>MUSICAL RIOT contact</title>
</head>

<body>
	<header id="header">
		<input type="checkbox" id="toggle" class="toggle">
  <label for="toggle" class="burger">
    <span><i class="fas fa-bars"></i></span>
    </label>
  <nav>
    <ul>
      <li><a href="index.php">PRESENTATION</a></li>
      <li><a href="evenements.php">EVENEMENTS</a></li>
      <li><a href="contact.php">CONTACT</a></li>
      <li><a href="https://www.discogs.com/fr/seller/Musical_Riot/profile" target="_blank">DUBSHOP</a></li>
    </ul>
  </nav>
  </header>
  <span itemscope itemtype="http://schema.org/Article"><img itemprop="image" src="images/musical-riot.jpg" alt="musical-riot" class="img"/></span>
<main>
  
  <h1>CONTACT</h1>
  <div class="adresse">
  <p>Vous pouvez aussi nous écrire à l'adresse suivante:</p>
  <ul>
      <li>Maison de quartier Ferme de Croze</li>

      <li> Avenue de la Ferme Croze</li>
        
      <li> 13127 Vitrolles</li>
        
      <li><a href="tel:0442791295"> +33 (0)4 42 79 12 95</a></li>
  </ul>
</div>
  <form action="inscription.php" method="post">
      <fieldset>
         <label for="lastName">Nom</label>
          <input type="text" name="lastName" id="lastName" required placeholder="Votre nom">
        <label for="firstName">Prénom</label>
          <input type="text" name="firstName" id="firstName" required placeholder="Votre prénom">
          <label for="email">Adresse e-mail</label>
          <input type="email" name="email" id="email" required placeholder="Votre adresse e-mail">
        <label for="address">message</label>
          <textarea name="message" id="message" cols="30" rows="10" placeholder="votre message"></textarea>
        </fieldset>
    </div>
        <div class="position">
            <button type="submit" class="btn">ENVOYER</button>
      </form>
</main>
<footer id="footer">
  <div class="info">
    <a href="https://fr-fr.facebook.com/musicalriot/"><i class="fab fa-facebook-square fb"></i></a>
    <a href="https://twitter.com/musicalriot13"><i class="fab fa-twitter-square twitter"></i></a>
    <a href="https://www.instagram.com/riotmusic/?hl=fr"><i class="fab fa-instagram insta"></i></a>
    <a href="https://fr.linkedin.com/in/musical-riot-1a67a497"><i class="fab fa-linkedin linkedin"></i></a>
       </div>
  <p> Copyright © 2019 Musical Riot - Tous droits réservés</p>
</footer>

  </body>
</html>