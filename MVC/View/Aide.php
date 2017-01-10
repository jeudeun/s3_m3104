<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Help &mdash; Handicap Website</title>

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	
		<?php
		include_once('../Model/connexion_sql.php');
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
			$accueil = "Accueil.php";
			$d = "visible";
		}
		else{
			$accueil = "index.php";
			$d = "hidden";
		}	

		?>

	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<div class="page-inner">
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href=<?php echo $accueil ?>> <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a id='acc' href=<?php echo $accueil ?>>Accueil</a></li>
						<li><a href="Actualite.php">Actualite</a></li>
						<li><a href="Profil.php">Profil</a></li>
						<li class="has-dropdown">
							<a href="Service.php">Service</a>
							<ul class="dropdown">
								<li><a href="aidemenage.php">AideMenage</a></li>
								<li><a href="aidepersonne.php">AidePersonne</a></li>
								<li><a href="aiderepas.php">AideRepas</a></li>
								<li><a href="damecompagnie.php">Companie</a></li>
							</ul>
						</li>
						<li><a href="Forum.php">Forum</a></li>
						<li><a href="Aide.php">Aide</a></li>
						<li class="<?php echo $d?>"><a href="index.php"><span>Déconnexion</span></a></li>	
					</ul>
				</div>
			</div>
			
		</div>

	</nav>

	<header id="gtco-header" class="gtco-cover" role="banner" style="background-image: url(images/img_6.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">

		<div class="moncoteneur">
		  <h1>Aide</h1>
	<div class="separateur"></div>
	<h2>Question</h2>
		<ul>
		<li><a href="#jump">Comment définit-on le handicap ?</a></li>
		<li><a href="#jump1">Comment obtenir la reconnaissance du handicap ?</a></li>
		<li><a href="#jump2">Comment mon enfant peut-il être accompagné dans sa scolarité ?</a></li>
		<li><a href="#jump3">Mon enfant aura-t-il le même auxiliaire de vie scolaire (AVS) pendant toute sa scolarité ? </a></li>
		<li>......</li>
		</ul>
		  
	<div class="separateur"></div>
	<h2>Réponse</h2>
		<ul>
		  <li>Comment définit-on le handicap ?</li>
		  <p id="jump">La loi du 11 février 2005 pour l’égalité des droits et des chances, la participation et la citoyenneté des personnes handicapées définit le handicap comme "toute limitation d’activité ou restriction de participation à la vie en société subie dans son environnement par une personne en raison d’une altération substantielle, durable ou définitive d’une ou plusieurs fonctions physiques, sensorielles, mentales, cognitives ou psychiques, d’un polyhandicap ou d’un trouble de santé invalidant".</p>
		  <li>Comment obtenir la reconnaissance du handicap ? </li>
		  <p id="jump1">Il n’existe pas, en France, de reconnaissance du handicap en tant que telle. Une personne en situation de handicap peut demander une analyse de sa situation, conformément à l’article L. 114 précité, à la commission des droits et de l’autonomie des personnes handicapées (CDAPH) de la maison départementale des personnes handicapées (MDPH), qui peut décider de la mise en place d’un plan de compensation comprenant plusieurs types de décision : orientation, aide humaine, attribution d’une allocation, attribution d’une carte d’invalidité, etc.</p>
		<li>Comment mon enfant peut-il être accompagné dans sa scolarité ?</li>
		<p id="jump2">L’accompagnement d’un élève ne dépend ni de la nature de son handicap ni du niveau d’enseignement. L’attribution est possible dès lors qu’un examen approfondi de la situation de l’élève fait apparaître le besoin, pour une durée déterminée, d’une aide humaine ou de l’appui d’un service d’éducation spéciale et de soins à domicile (SESSAD), en vue d’optimiser son autonomie dans les apprentissages.</p>
		  <li>Mon enfant aura-t-il le même auxiliaire de vie scolaire (AVS) pendant toute sa scolarité ? </li>
		  <p id="jump3">Dans tous les cas reconnus nécessaires, votre enfant bénéficiera d’un accompagnement. En revanche, les contrats des AVS étant variables (deux ans, cinq ans, six ans ou à durée indéterminée), il est possible, mais pas systématique, que votre enfant ait le même AVS durant toute sa scolarité.</p>
		<li>......</li>
		</ul>

</div>
											


					</div>
				</div>
			</div>
		</div>
	</header>
	
	<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-p	b-md">

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>About <span class="footer-logo">HELP<span>.<span></span></h3>
						<p>HELP est un site d'aide aux handicapés. Il leurs propose des services correspondants à leurs 
						besoins afin de leurs prouver que l'handicap n'est pas une fatalité</p>
					</div>
				</div>

				<div class="col-md-4 col-md-push-1">
					<div class="gtco-widget">
						<h3>Links</h3>
						<ul class="gtco-footer-links">
							<li><a href="#">Knowledge Base</a></li>
							<li><a href="#">Career</a></li>
							<li><a href="#">Press</a></li>
							<li><a href="#">Terms of services</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>Get In Touch</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i> +1 234 567 890</a></li>
							<li><a href="#"><i class="icon-mail2"></i> info@FreeHTML5.co</a></li>
							<li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
						</ul>
					</div>
				</div>

			</div>


		</div>
	</footer>
	</div>

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->

	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

