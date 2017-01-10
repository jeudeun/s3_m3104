		<?php
		include_once("../Model/Intervenant.class.php");
		include_once("../Model/PersHandi.class.php");
		include_once("../Model/Utilisateur.class.php");

		$User = new Utilisateur;
		$interU = new Intervenant;
		$handiU = new PersHandi;

		session_start();

		if (isset($_SESSION['user'])) {
			$User = unserialize($_SESSION['user']);
			$User->connecter();
		}
		else{
			session_destroy(user);
		}	
		?>