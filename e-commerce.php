<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="stylesheet/styles.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet"> 
	<title>Optic 4000</title>
</head>
<body>
	<div class="grid">
		<div class="logo"></div>
		<div class="opticdiv">
			<p class="optic">Optic 4000</p>
		</div>
		<div class="recherche">
			<input type="text" name="recherche" placeholder="Je recherche une marque..">
			<img src="img/search-icon.png">
		</div>
		<div class="menu1">
			<div>
				<img src="img/lunette.png" style="height: 25px; width: 25px;display:block;margin: 0 auto;background-color: white;border-radius: 50%;padding: 1px;">
				<a href="#">Visagisme</a>
			</div>
			<div>
				<img src="img/user.png" style="height: 25px;width: 25px;display: block;margin: 0 auto;background-color: white;border-radius: 50%;padding: 1px;">
				<a href="compte.php">Mon compte</a>
			</div>
			<div>
				<img src="img/shopping.png" style="height: 25px;width: 25px;display: block;margin: 0 auto;background-color: white;border-radius: 50%;padding: 1px;">
				<a href="panier.php">Panier (0)</a>
			</div>
		</div>
	</div>
	<nav class=" menu2 bg-primary" >
		<div class="btn-group btn-group-lg " role="group" aria-label="...">
			<button type="button" class="btn btn-primary">Lunettes de vue</button>
			<button type="button" class="btn btn-primary">Lunettes de soleil</button>
			<button type="button" class="btn btn-primary">Lentilles de contact</button>
		</div>

		<a href="e-commerce.php"><button type="button" class="bouton btn btn-primary btn-lg">Home<img src="img/home.png"style="height: 22px;width: 25px;padding-left: 2px;padding-bottom: 3px;"></button></a>
	</nav>
	<content>
		<div id="carousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="secslide d-block w-100" src="img/optic2.jpg" alt="Second slide">
				</div>
				<div class="carousel-item">
					<img class="secslide d-block w-100" src="img/optic3.jpg"  alt="Third slide">
				</div>
			</div>
		</div>
	</content>
	<p id="welcome"> <?php 
	if (!isset($_SESSION) || !isset($_SESSION['pseudo'])) {
	echo "Vous n'êtes pas connnecté";
	}else{$pseudo = $_SESSION['pseudo'];
	 echo "Bienvenue,".$pseudo."!";
	}
	?> 
	</p>
	<a id="welcome" href="deconnexion.php">Déconnexion<a>
		
	<h1>Nos belles lunettes</h1>
	<div class="container">

		<div class="card" style="width:300px;">
			<p class="infos">+ d'infos</p>
			<a href="produit-1.html"><img class="card-img-top" src="https://www.optic2000.com/media/catalog/product/cache/1/small_image/315x180/9df78eab33525d08d6e5fb8d27136e95/M/1/M10301300001__GABINLEONIE_GL1805-O-BORDEAUX-46-22-140__2500x1400-face.jpg" alt="image-card"></a>
			<div class="card-body">
				<p class="card-text haut">Gabin & Léonie - GL1805<br>Rouge</p>
				<p class="card-text">Monture + verres à partir de</p>
				<p class="prix">1000€</p>
			</div>
		</div>

		<div class="card" style="width:300px;">
			<p class="infos">+ d'infos</p>
			<img class="card-img-top" src="https://www.optic2000.com/media/catalog/product/cache/1/small_image/315x180/9df78eab33525d08d6e5fb8d27136e95/M/1/M10301300001__GABINLEONIE_GL1805-O-BORDEAUX-46-22-140__2500x1400-face.jpg" alt="image-card">
			<div class="card-body">
				<p class="card-text haut">Gabin & Léonie - GL1805<br>Rouge</p>
				<p class="card-text">Monture + verres à partir de</p>
				<p class="prix">1000€</p>
			</div>
		</div>

		<div class="card" style="width:300px;">
			<p class="infos">+ d'infos</p>
			<img class="card-img-top" src="https://www.optic2000.com/media/catalog/product/cache/1/small_image/315x180/9df78eab33525d08d6e5fb8d27136e95/M/1/M10301300001__GABINLEONIE_GL1805-O-BORDEAUX-46-22-140__2500x1400-face.jpg" alt="image-card">
			<div class="card-body">
				<p class="card-text haut">Gabin & Léonie - GL1805<br>Rouge</p>
				<p class="card-text">Monture + verres à partir de</p>
				<p class="prix">1000€</p>
			</div>
		</div>

		<div class="card" style="width:300px;">
			<p class="infos">+ d'infos</p>
			<img class="card-img-top" src="https://www.optic2000.com/media/catalog/product/cache/1/small_image/315x180/9df78eab33525d08d6e5fb8d27136e95/M/1/M10301300001__GABINLEONIE_GL1805-O-BORDEAUX-46-22-140__2500x1400-face.jpg" alt="image-card">
			<div class="card-body">
				<p class="card-text haut">Gabin & Léonie - GL1805<br>Rouge</p>
				<p class="card-text">Monture + verres à partir de</p>
				<p class="prix">1000€</p>
			</div>
		</div>

		<div class="card" style="width:300px;">
			<p class="infos">+ d'infos</p>
			<img class="card-img-top" src="https://www.optic2000.com/media/catalog/product/cache/1/small_image/315x180/9df78eab33525d08d6e5fb8d27136e95/M/1/M10301300001__GABINLEONIE_GL1805-O-BORDEAUX-46-22-140__2500x1400-face.jpg" alt="image-card">
			<div class="card-body">
				<p class="card-text haut">Gabin & Léonie - GL1805<br>Rouge</p>
				<p class="card-text">Monture + verres à partir de</p>
				<p class="prix">1000€</p>
			</div>
		</div>

		<div class="card" style="width:300px;">
			<p class="infos">+ d'infos</p>
			<img class="card-img-top" src="https://www.optic2000.com/media/catalog/product/cache/1/small_image/315x180/9df78eab33525d08d6e5fb8d27136e95/M/1/M10301300001__GABINLEONIE_GL1805-O-BORDEAUX-46-22-140__2500x1400-face.jpg" alt="image-card">
			<div class="card-body">
				<p class="card-text haut">Gabin & Léonie - GL1805<br>Rouge</p>
				<p class="card-text">Monture + verres à partir de</p>
				<p class="prix">1000€</p>
			</div>
		</div>

		<div class="card" style="width:300px;">
			<p class="infos">+ d'infos</p>
			<img class="card-img-top" src="https://www.optic2000.com/media/catalog/product/cache/1/small_image/315x180/9df78eab33525d08d6e5fb8d27136e95/M/1/M10301300001__GABINLEONIE_GL1805-O-BORDEAUX-46-22-140__2500x1400-face.jpg" alt="image-card">
			<div class="card-body">
				<p class="card-text haut">Gabin & Léonie - GL1805<br>Rouge</p>
				<p class="card-text">Monture + verres à partir de</p>
				<p class="prix">1000€</p>
			</div>
		</div>
	</div>
</body>
<footer>
	<div class="footer">
		<div class="int-footer">
			<div class="icon1 icon-hover">
				<img src="img/fb-icon.png" class="fb-icon"style="border-radius: 50%;width: 50px;height: 50px;">
				<img src="img/inst-icon.png" class="inst-icon" style="border-radius: 50%;width: 50px;height: 50px;">
			</div>
			<div class="recherche2">
				<input style="height:35px;font-size:13px;" type="text" name="recherche" placeholder="Entrez votre email pour recevoir notre Newsletter">
				<p>OK</p>
			</div>
			<div class="icon2 icon-hover">
				<img src="img/twit-icon.png" class="twit-icon"style="border-radius: 50%;width: 50px;height: 50px;">
				<img src="img/in-icon.png" class="in-icon" style="border-radius: 50%;width: 50px;height: 50px;">
			</div>
			<div class="foot-text1 foot-hover">
				<h3 class="titre1">Lunettes</h3>
				<p>Lunettes de vue Homme</p>
				<p>Lunettes de vue Femme</p>
				<p>Lunettes de vue Enfant</p>
				<p>Lunette de vue Rayban</p>
			</div>
			<div class="foot-text2 foot-hover">
				<h3 class="titre2">Solaires</h3>
				<p>Lunettes de soleil Homme</p>
				<p>Lunettes de soleil Femme</p>
				<p>Lunettes de soleil Enfant</p>
				<p>Lunettes de soleil Ray-Ban</p>
			</div>
			<div class="foot-text3 foot-hover">
				<h3 class="titre3">Lentilles</h3>
				<p>Lentilles journalières</p>
				<p>Lentilles bi-mensuelles</p>
				<p>Lentilles mensuelles</p>
				<p>Lentilles de couleurs</p>
				<p>Produit d'entretien</p>
			</div>
		</div>
	</div>
</footer>
</html>