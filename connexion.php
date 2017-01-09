<?php

	include_once('connexion_sql.php');	
	include_once('MVC/Model/Utilisateur.class.php');
	include_once('MVC/Model/Intervenant.class.php');
	include_once('MVC/Model/PersHandi.class.php');

	if(isset($_POST['username']) && isset($_POST['password']))
	{
		$login=$_POST['username'];
		$password=$_POST['password'];
		//verifier dans la base avec le webservice
		//retour du resultat du webservice

		$reponse = $bdd->query('SELECT * FROM Utilisateur where email = "'.$login.'" AND  mdp = "'.$password.'"');
		
	$user = new Utilisateur;
	$interU = new Intervenant;
	$handiU = new PersHandi;

	$isInter = false;
echo $isInter;
while ($donnees = $reponse->fetch()){
	
	$user->set_idUtilisateur($donnees['idUtilisateur']);
	$user->set_nom($donnees['nom']);
	$user->set_prenom($donnees['prenom']);
	$user->set_email($donnees['email']);
	$user->set_mdp($donnees['mdp']);
	$user->set_adresse($donnees['adresse']);
	$user->set_codePostal($donnees['codepostal']);
	$user->set_ville($donnees['ville']);
	$user->set_numero($donnees['numero']);

}

$reponse1 = $bdd->query('SELECT idUtilisateur FROM intervenant where idUtilisateur = "'.$user->get_idUtilisateur().'"');
$reponse2 = $bdd->query('SELECT idUtilisateur FROM handicape where idUtilisateur = "'.$user->get_idUtilisateur().'"');


while ($donnees1 = $reponse1->fetch()){
$isInter = true;

}


while ($donnees2 = $reponse2->fetch()){
$isInter = false;

}
session_start();
$_SESSION['user'] = new Utilisateur;


		if($login == $user->get_email() && $password == $user->get_mdp())
		{
			//redirige vers la page accueil
			if($isInter == true)
			{

		    $_SESSION['user'] = serialize($user);
		    //session_register(user);
				//echo "je suis un intervenant";
				echo "<meta http-equiv=\"Refresh\" content=0.1;URL=\"Accueil.php\" />";
				  //header("Location: Accueil.php?user=$user");
				  //echo $user->connecter();
				  //echo '<td>'.'<br />';
				  //echo $user->adresseC();
			}
			else
			{

			$_SESSION['user'] = serialize($user);
				//echo "je suis une personne en difficulter";
				echo "<meta http-equiv=\"Refresh\" content=0.1;URL=\"Accueil.php\" />";
				  //header("Location: Accueil.php?user=$user");
				  //echo $user->connecter();
				  //echo '<td>'.'<br />';
				  //echo $user->adresseC();

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