<?php

// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=bdd_pro_php;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    echo "Connecter.<br>";
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
