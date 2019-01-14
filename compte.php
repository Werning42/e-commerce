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
				<a href="#">Panier (0)</a>
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
	<div class="page">
		<?php if (isset($_GET['errorpseudo1'])){
		echo "<p style= 'color:red;'> Champ pseudo vide. </p>";
     }
     		if (isset($_GET['errorpassword1'])){
		echo "<p style= 'color:red;'> Veuillez entrer deux mots de passe identique. </p>";
	}
		if (isset($_GET['errorpassword2'])){
		echo "<p style= 'color:red;'> Veuillez entrer un mot de passe plus long.</p>";
     }
     if (isset($_GET['errorpseudo2'])){
		echo "<p style= 'color:red;'> Veuillez entrer un pseudo plus court. </p>";
     }
     if (isset($_GET['errorpassword3'])){
		echo "<p style= 'color:red;'> Champ mot de passe vide.</p>";
     }
     if (isset($_GET['errorpseudo3'])){
		echo "<p style= 'color:red;'> Champ pseudo vide.</p>";
     }
     if (isset($_GET['errorpassword4'])){
		echo "<p style= 'color:red;'> Champ mot de passe vide.</p>";
     }
     if (isset($_GET['errorcompte'])){
		echo "<p style= 'color:red;'> Le pseudo ou le mot de passe est incorrect, le compte n'a pas été trouvé.</p>";
     }?>
	<div class="inscription">
		<form method="post" action="inscription.php">
		<p style="font-size:25px;font-family:'Pacifico',cursive;text-align: center;">Inscription </p>

		<label for="pseudo">Pseudo :</label>
		<input type="text" name="user_pseudo" id="pseudo"/><br/>

		<label for="password">Mot de passe : </label>
		<input type="password" name="user_password" id="password"/></br/>

		<label for="password">Confirmation mot de passe :  </label>
		<input type="password" name="verif_password" id="password"/></br/>

		<p><input type="submit" value="Inscription" id="inscription"></p>
	</form>
	</div>
	<div class="connexion">
		<form method="post" action="connexion.php">
		<p style="font-size: 25px;font-family:'Pacifico',cursive;text-align: center;">Connexion</p>

		<label for="pseudo">Pseudo :</label>
		<input type="text" name="pseudo" id="pseudo"/><br/>

		<label for="password">Mot de passe :</label>
		<input type="password" name="password" id="password" />

		<p><input type="submit" value="Connexion" id="connexion" name="connexion"></p>

	</div>
</form>
</div>

</body>
</html>