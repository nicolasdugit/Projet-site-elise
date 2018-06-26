-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  lun. 25 juin 2018 à 10:01
-- Version du serveur :  10.1.26-MariaDB
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `poissonnerieduport1111`
--

-- --------------------------------------------------------

--
-- Structure de la table `boot-mail`
--

CREATE TABLE `boot-mail` (
  `id` int(11) NOT NULL,
  `mail-subjet` varchar(255) NOT NULL,
  `mail-name` varchar(255) NOT NULL,
  `mail-mail` varchar(255) NOT NULL,
  `mail-date` date NOT NULL,
  `mail-content` text NOT NULL,
  `mail-status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `boot-users`
--

CREATE TABLE `boot-users` (
  `id` int(11) NOT NULL,
  `user-name` varchar(255) NOT NULL,
  `user-mail` varchar(255) NOT NULL,
  `user-pass` varchar(255) NOT NULL,
  `user-status` tinyint(1) NOT NULL DEFAULT '0',
  `user-picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `boot-mail`
--
ALTER TABLE `boot-mail`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `boot-users`
--
ALTER TABLE `boot-users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `boot-mail`
--
ALTER TABLE `boot-mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `boot-users`
--
ALTER TABLE `boot-users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
