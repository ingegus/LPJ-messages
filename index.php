<?php
	include_once('scripts/ErreurInfo.php');
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>LPJ messages</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<header id="top">
  <h1 id="Titre">Saint Valentin LPJ</h1>
</header>

<nav id ="mainNav">
  <ul>
    <li><a href="index.html">Accueil</a></li>
    <li><a href="https://www.facebook.com/lpjstdo">Facebook</a></li>
    <li><a href="https://twitter.com/LPJ_StDo">Twitter</a></li>
    <li><a href="about.html">About </a></li>
  </ul>
</nav>

<main id="wrapper">
	<?php
			$info = new ErreurInfo('');
			$info->afficherException();
			$info->afficherValidation();
	?>

	<form id="messageForm" name="messageForm" method="post" action="scripts/ajouterMessage.php" >
	  <textarea name="message" wrap="hard" id="message" placeholder="Ecrivez votre plus beau message ! (max 10 000 caractères)" maxlength="10000" ></textarea>
	  <input type="submit" value="Envoyez votre message !">
  </form>
</main>
<footer>Copyrights 2015 @Augustin Godinot - L'établissement Saint-Dominque n'est en aucun cas responsable de ce site - Tous droits réservés</footer>
</body>
</html>
