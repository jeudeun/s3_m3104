<?php

	include_once('connexion_sql.php');	
	include_once('MVC/Model/Utilisateur.php');

	if(isset($_POST['username']) && isset($_POST['password']))
	{
		$login=$_POST['username'];
		$password=$_POST['password'];
		//verifier dans la base avec le webservice
		//retour du resultat du webservice

		$reponse = $bdd->query('SELECT * FROM Utilisateur where email = "'.$login.'" AND  mdp = "'.$password.'"');
		
	$user = new Utilisateur;

while ($donnees = $reponse->fetch()){
	

	$user->set_nom($donnees['nom']);
	$user->set_prenom($donnees['prenom']);
	$user->set_email($donnees['email']);
	$user->set_mdp($donnees['mdp']);
	$user->set_adresse($donnees['adresse']);
	$user->set_codePostal($donnees['codepostal']);
	$user->set_ville($donnees['ville']);
	$user->set_numero($donnees['numero']);
}



		if($login == $user->get_email() && $password == $user->get_mdp())
		{
			//redirige vers la page accueil
			$isAdmin=false;
			if($isAdmin)
			{

			}
			else
			{
				//echo "<meta http-equiv=\"Refresh\" content=3;URL=\"../view/connection.php\" />";
				  //header("Location: index.php?nom=$nom");
				  echo $user->connecter();
				  echo '<td>'.'<br />';
				  echo $user->adresseC();

			}
		}
		else
		{
			//affiche erreur et on le redirige vers la page de connexion
			echo "<h1 style=\"size:50px; color: red\">Email ou mot de passe incorrect.</h1><br> Vous allez etre rediriger dans quelques secondes vers la page de connection";
			echo "<meta http-equiv=\"Refresh\" content=1;URL=\"index.php\" />";
		}

	}
	else
	{
		echo "<h1 style=\"size:50px; color: red\">L'un des deux champs est vide</h1><br> Vous allez etre rediriger dans quelques secondes vers la page de connection";
		echo "<meta http-equiv=\"Refresh\" content=1;URL=\"index.php\" />";
	}
?>