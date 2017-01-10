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
		$description = $_POST['description'];
				
		include_once('../Model/connexion_sql.php');
		
		try	{

			
			
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
			
			$query2 = "INSERT INTO handicape(description, idUtilisateur) 
									VALUES ('$description', '$id')";
			$bdd->query($query2);
			
		} catch(Exception $e)	{
			die('Erreur : '.$e->getMessage());
		}
	} else {
			
		/*$stmt = $bdd->query('SELECT * FROM Utilisateur');

			while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				print($row['nom'].' '.$row['prenom'].' '.$row['idUtilisateur'].'<br/>'); 
			}*/
	}
	
	?>