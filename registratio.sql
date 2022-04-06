-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 06 avr. 2022 à 01:20
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `registratio`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `name-c` varchar(255) NOT NULL,
  `email-c` varchar(255) NOT NULL,
  `tel-c` int(255) NOT NULL,
  `message-c` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ecomm`
--

DROP TABLE IF EXISTS `ecomm`;
CREATE TABLE IF NOT EXISTS `ecomm` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `description` varchar(250) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `prix` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ecomm`
--

INSERT INTO `ecomm` (`id`, `description`, `photo`, `prix`) VALUES
(9, 'SITE VITRINE: rÃ©fÃ©rencement local', 'cc.jpg', 250),
(11, 'SITE VITRINE: rÃ©fÃ©rencement  national', 'LL.png', 400),
(13, 'SITE E-Commerce : en fonction des expressions', 'nn.jpg', 800);

-- --------------------------------------------------------

--
-- Structure de la table `logex`
--

DROP TABLE IF EXISTS `logex`;
CREATE TABLE IF NOT EXISTS `logex` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(35) NOT NULL,
  `passw` varchar(35) NOT NULL,
  `email` varchar(40) NOT NULL,
  `confirm_pasword` varchar(35) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `logex`
--

INSERT INTO `logex` (`id`, `username`, `passw`, `email`, `confirm_pasword`, `Phone`) VALUES
(18, 'abdelati', 'abdelati', 'chraiha1abdelati@gmail.com', 'abdelati', '0655609287');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
