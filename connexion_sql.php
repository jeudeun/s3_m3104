<?php

// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=m3104_bdd;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    echo "Connecter a la BDD.<br>";
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
