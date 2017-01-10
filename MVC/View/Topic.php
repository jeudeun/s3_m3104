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
    <link rel="stylesheet" href="css/forum.css">
    <link rel="stylesheet" href="css/topic.css">

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
    //session_unset('user');
    $User->connecter();
    $accueil = "Accueil.php";
    $d = "visible";
}
else{
    //session_destroy(user);
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
                        <div id="gtco-logo"><a href=<?php echo $accueil ?>>HELP <em>.</em></a></div>
                    </div>
                    <div class="col-xs-8 text-right menu-1">
                        <ul>
                            <li><a id='acc' href=<?php echo $accueil ?>>Accueil</a></li>
                            <li><a href="Actualite.php">Actualite</a></li>
                            <li class="has-dropdown">
                                <a href="Profil.php">Profil</a>
                                <ul class="dropdown">
                                    <li><a href="#">Service</a></li>
                                    <li><a href="#">Branding</a></li>
                                    <li><a href="#">API</a></li>
                                </ul>
                            </li>
                            <li><a href="Service.php">Service</a></li>
                            <li><a href="Forum.php">Forum</a></li>
                            <li><a href="Aide.php">Aide</a></li>
                            <li class="<?php echo $d?>"><a href="index.php"><span>Déconnexion</span></a></li>
                        </ul>
                    </div>
                </div>

            

			</div>
            <div class="containertopic">
                <h1>Topic</h1>
				
				<form action="http://localhost/s3_m3104/MVC/View/Forum1.php">
				
                <fieldset>
                    <label>Topic : </label><input placeholder="TITRE" type="titre" name="Topic" tabindex="1" required autofocus style="height:50px;width:200px;">
                </fieldset>
            </div>
            <div class="containertopic1">
                <fieldset>
                    <label>Description : </label><input placeholder="DESCRIPTION" type="description" name="Contenu" tabindex="2" required style="height:100px;width:400px;">
                </fieldset>
                <br><br>
               <!--   <input type="reset" value="Annuler"> -->
                 <input type="submit" value="Valider"> 
			  </form>
            </div>
        

		
		</nav>   
	<header id="gtco-header" class="gtco-cover" role="banner" style="background-image: url(images/img_6.jpg)">
            <div class="overlay"></div>
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-12 col-md-offset-0 text-left">




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
                                <li><a href="#"><i class="icon-mail2"></i> info@Help.co</a></li>
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
