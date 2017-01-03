<?php
	if(isset($_POST['username']) && isset($_POST['password']))
	{
		$login=$_POST['username'];
		$password=$_POST['password'];
		//verifier dans la base avec le webservice
		//retour du resultat du webservice
		$log="#";
		$pass="#";
		if($login==$log && $password == $pass)
		{
			//redirige vers la page accueil
			$nom="monNom";
			$isAdmin=false;
			if($isAdmin)
			{

			}
			else
			{
				//echo "<meta http-equiv=\"Refresh\" content=3;URL=\"../view/connection.php\" />";
				  header("Location: ../view/indexUser.php?nom=$nom");      	
			}
		}
		else
		{
			//affiche erreur et on le redirige vers la page de connexion
			echo "<h1 style=\"size:50px; color: red\">Login ou mot de passe incorrect.</h1><br> Vous allez être rediriger dans 3 secondes vers la page de connection";
			echo "<meta http-equiv=\"Refresh\" content=3;URL=\"index.php\" />";
		}

	}
	else
	{
		echo "<h1 style=\"size:50px; color: red\">L'un des deux champs est vide</h1><br> Vous allez être rediriger dans 3 secondes vers la page de connection";
		echo "<meta http-equiv=\"Refresh\" content=3;URL=\"index.php\" />";
	}
?>