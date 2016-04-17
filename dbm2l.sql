-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 15 Avril 2016 à 13:37
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `dbm2l`
--

-- --------------------------------------------------------

--
-- Structure de la table `adherent`
--

CREATE TABLE IF NOT EXISTS `adherent` (
  `numLicence` int(8) NOT NULL,
  `mail` varchar(100) CHARACTER SET latin1 NOT NULL,
  `pseudo` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nom` varchar(60) CHARACTER SET latin1 NOT NULL,
  `prenom` varchar(60) CHARACTER SET latin1 NOT NULL,
  `password` varchar(30) CHARACTER SET latin1 NOT NULL,
  `ligue` varchar(100) CHARACTER SET latin1 NOT NULL,
  `tel` int(10) NOT NULL,
  `adress` varchar(150) CHARACTER SET latin1 NOT NULL,
  `ville` varchar(80) CHARACTER SET latin1 NOT NULL,
  `codePostal` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `adherent`
--

INSERT INTO `adherent` (`numLicence`, `mail`, `pseudo`, `nom`, `prenom`, `password`, `ligue`, `tel`, `adress`, `ville`, `codePostal`) VALUES
(123456789, 'dilan.christophe@hotmail.fr', 'manekin971', 'CHRISTOPHE', 'Dilan', 'fd3b6b61b9766b5c9ba484eec2e79c', 'guadeloupe', 690562271, 'rÃ©sidence la marina', 'gourbeyre', 97113);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
