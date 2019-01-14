<?php
include('config.php');
$mdp = "'".$_POST['user_password']."'";
$pseudo = "'".$_POST['user_pseudo']."'";
if(isset($_POST['user_pseudo'],$_POST['user_password'])){
$sql = "INSERT INTO Utilisateur (pseudo, password) VALUES (".$pseudo.", ".$mdp.");";
//$result = mysqli_query($mysqli,"SELECT pseudo FROM Utilisateur WHERE pseudo=`".$_POST['user_pseudo']."`;");//

	if(empty($_POST['user_pseudo'])){
		header("Location: compte.php?errorpseudo1");
	}elseif($_POST['user_password']!=($_POST['verif_password'])){
		header("Location: compte.php?errorpassword1");
	}elseif ($_POST['user_password']>=6){
		header("Location: compte.php?errorpassword2");
     }elseif(strlen($_POST['user_pseudo'])>25){
     	header("Location: compte.php?errorpseudo2");
	} elseif(empty($_POST['user_password'])){
		header("Location: compte.php?errorpassword3");
	}else{
		if(!mysqli_query($mysqli,$sql)){
			echo "Une erreur s'est produite: ".mysqli_error($mysqli);
		}else{
			echo ($sql);
			mysqli_close($mysqli);
			header("Location: e-commerce.php" );
		}
	}
}

?>
