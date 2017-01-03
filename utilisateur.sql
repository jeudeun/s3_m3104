-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 03 Janvier 2017 à 13:11
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `m3104_bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `email` varchar(30) NOT NULL,
  `mdp` varchar(10) NOT NULL,
  `idUtilisateur` int(11) NOT NULL PRIMARY KEY,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `adresse` text NOT NULL,
  `codepostal` int(11) NOT NULL,
  `ville` text NOT NULL,
  `numero` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`email`, `mdp`, `idUtilisateur`, `nom`, `prenom`, `adresse`, `codepostal`, `ville`, `numero`) VALUES
('vivianne@gmail.com', 'vivianne', 1, 'Vandan', 'Vivianne', 'Rue de France', 59600, 'Maubeuge', '14'),
('julien@gmail.com', 'julien', 2, 'Bokkop', 'Julien', 'Rue de la Croix', 59600, 'Maubeuge', '54'),
('giselle@gmail.com', 'giselle', 3, 'Volkart', 'Giselle', 'Rue du poulin', 56900, 'Maubeuge', '59');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `utilisateur`
--
-- ALTER TABLE `utilisateur`
--  ADD PRIMARY KEY (`idUtilisateur`),
  
--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
