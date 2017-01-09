		<?php
		include_once("MVC/Model/Intervenant.class.php");
		include_once("MVC/Model/PersHandi.class.php");
		include_once("MVC/Model/Utilisateur.class.php");

		$User = new Utilisateur;
		$interU = new Intervenant;
		$handiU = new PersHandi;

		session_start();

		if (isset($_SESSION['user'])) {
			$User = unserialize($_SESSION['user']);
			$User->connecter();
		}	
		?>