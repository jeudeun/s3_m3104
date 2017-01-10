	<?php
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		//header ('Location: Accueil.php');
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$email = $_POST['email'];
		$mdp = $_POST['mdp'];
		$telephone = $_POST['tel'];
		$adresse = $_POST['adresse'];
		$codepostal = $_POST['codepo'];
		$ville = $_POST['ville'];
		//echo $nom.'-'.$prenom;
		$aide_menage = isset($POST['choix1']); 
		$aide_repas = isset($POST['choix2']);
		$dame_compagnie = isset($POST['choix3']); 
		$aide_personne = isset($POST['choix4']); 
		
		include_once('../Model/connexion_sql.php');
			
			try{
			// Requête
			$query1 = "INSERT INTO utilisateur(email, mdp, nom, prenom, adresse, codepostal, ville, numero) 
									VALUES ('$email', '$mdp', '$nom', '$prenom', '$adresse', '$codepostal', '$ville', '$telephone')";
			$bdd->query($query1);
			
			
			// on récupére l'id de l'utilisateur crée

			$reponse = $bdd->query('SELECT idUtilisateur FROM Utilisateur where email = "'.$email.'" AND  mdp = "'.$mdp.'"');

			$id = null;
			while ($donnees = $reponse->fetch()){
					$id = $donnees['idUtilisateur'];
			}


			//récupération de l'idUtilisateur créé et insertion des données de l'intervenant
			
			$query2 = "INSERT INTO intervenant(aidemenage, aiderepas, damecompagnie, aidepersonne, idUtilisateur) 
									VALUES ('$aide_menage', '$aide_repas', '$dame_compagnie', '$aide_personne', '$id')";
			$bdd->query($query2);
			
		
		}catch(Exception $e)	{
			die('Erreur : '.$e->getMessage());
		}
		
		} else {	
		/*$stmt = $bdd->query('SELECT * FROM Utilisateur');
		
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				print($row['nom'].' '.$row['prenom'].' '.$row['idUtilisateur'].'<br/>'); 
		}*/
	}
	
	?>