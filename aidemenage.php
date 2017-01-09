<html>
	<head>
		<meta charset="utf-8">
		<link rel ="stylesheet" href="body.css" style="text/css">
		<link rel ="stylesheet" href="title2.css" style="text/css">
		<title>AideMenage</title>
	</head>
	<body>
	<div id="head">
		<header>
			<h1><a href="Service.html">Service</a></h1>
		</header>
		
		<nav>
			<ul class="NavigationBar1">
				<li class="NavigationBar"><a href="aidemenage.html">AideMenage</a></li>
				<li class="NavigationBar"><a href="aiderepas.html">AideRepas</a></li>
				<li class="NavigationBar"><a href="damecompagnie.html">DameCompagnie</a></li>
				<li class="NavigationBar"><a href="aidepersonne.html">AidePersonne</a></li>
			</ul>
		</nav>
	</div>
		<div id="intro"><h2>AideMenage</h2></div>	
	<?php
		afficher();
		
	function afficher()
	{
		ini_set("display_errors", "Off");
		//error_reporting(E_ALL | E_STRICT);
	// Connexion ¨¤ la base de donn¨¦es
		$con = mysql_connect("localhost","root","ying");
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  } 
		mysql_select_db("m3104", $con);
		$result = mysql_query("SELECT * FROM utilisateur where idUtilisateur in(SELECT idUtilisateur FROM intervenant where aidemenage=1)");
		
		echo "<table border='1'>
		<tr>
		<th>Nom</th>
		<th>Prenom</th>
		<th>Email</th>
		<th>Numero telephone</th>
		</tr>";
		
		//$contenent = array();
	
		while($row = mysql_fetch_array($result))
		  {
		  echo "<tr>";
		  echo "<td>".$row['nom']."</td>";
		  echo "<td>".$row['prenom']."</td>";
		  echo "<td>".$row['email']."</td>";
		  echo "<td>".$row['numero']."</td>";
		  echo "<tr>";
		  
		  $contenent[] = $row;
		 // echo $row['nom']. " " . $row['prenom']. " " . $row['email']. " " . $row['adresse'];
		 // echo "<br />";
		  }
		  echo "</table>";
		  
		// print_r($contenent);
		mysql_close($con);
	}
	?>

</body>
</html>
