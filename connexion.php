<?php 
session_start();
include 'config.php';
if(isset($_POST['connexion'])){
	if(empty($_POST['pseudo'])){
		header("Location: compte.php?errorpseudo3");
	}if(empty($_POST['password'])){
		header("Location: compte.php?errorpassword4");
		echo "Le champ mot de passe est vide";
	}else{
		$Pseudo = htmlentities($_POST['pseudo'],ENT_QUOTES, "ISO-8859-1");
		$MotDePasse = htmlentities($_POST['password'], ENT_QUOTES, "ISO-8859-1");
		if(!$mysqli){
			echo "Erreur de connexion à la base de données.";
		}else{
			$Requete = mysqli_query($mysqli,"SELECT * FROM Utilisateur WHERE pseudo = '".$Pseudo."' AND password = '".($MotDePasse)."'");
			if(mysqli_num_rows($Requete)==0){
				header("Location: compte.php?errorcompte");
				echo "Le pseudo ou le mot de passe est incorrect, le compte n'a pas été trouvé.";
			}else{
				$_SESSION['pseudo']=$Pseudo;
				$_SESSION['id']=$Id;
				header("Location: e-commerce.php");
			}
		}
	}
}

 ?>