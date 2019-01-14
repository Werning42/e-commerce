<?php
require '_header.php'
?><!DOCTYPE html>
<html>
<head>
	<title>Optic 4000</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="stylesheet/style.css" type="text/css" media="screen" charset="utf-8">
</head>

<body>

<div id="header">
	<div class="wrap">
		<div class="menu">
				<a href="e-commerce.php" class="logo">Optique</a>
				<h1>Une nouvelle vision de la vie</h1>
				<ul class="panier">
					<li class="caddie"><a href="panier.php">Caddie</a></li>
					<li class="items">
						ARTICLES
						<span id="count"><?= $panier->count(); ?></span>
					</li>
					<li class="total">
						TOTAL
						<span><span id="total"><?= number_format($panier->total(),2,',',' '); ?></span> €</span>
					</li>
				</ul>
		</div>
	</div>
</div>

<div id="subheader">
	<div class="wrap">
		<h2>Bienvenue visiteur, vous pouvez <a href="compte.php">Connexion</a> or <a href="compte.php">créer un compte</a> .</h2>
	</div>
</div>


<div id="wrap">

	<div id="menu">
		<ul class="wrap">
			<li> <a href="index.php">LUNETTES DE VUE</a> </li>
			<li> <a href="#">LUNETTES DE SOLEIL</a> </li>
			<li> <a href="#">LENTILLES DE CONTACT</a> </li>
			<li> <a href="#">Je trouve mon magasin</a> </li>
			<li> <a href="#">NOS CONSEILS</a> </li>
		</ul>
	</div>

	<div id="main" class="clearfix">
