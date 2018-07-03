-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mar. 03 juil. 2018 à 11:12
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
-- Structure de la table `boot_mail`
--

CREATE TABLE `boot_mail` (
  `id` int(11) NOT NULL,
  `mail_subject` varchar(255) NOT NULL,
  `mail_name` varchar(255) NOT NULL,
  `mail_mail` varchar(255) NOT NULL,
  `mail_date` date NOT NULL,
  `mail_content` text NOT NULL,
  `mail_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `boot_recette`
--

CREATE TABLE `boot_recette` (
  `id` int(11) NOT NULL,
  `recette_title` varchar(255) NOT NULL,
  `recette_img` varchar(255) NOT NULL,
  `recette_subtitle` varchar(255) NOT NULL,
  `recette_time` int(11) NOT NULL,
  `recette_portion` int(11) NOT NULL,
  `recette_instruction` text NOT NULL,
  `recette_author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `boot_recette`
--

INSERT INTO `boot_recette` (`id`, `recette_title`, `recette_img`, `recette_subtitle`, `recette_time`, `recette_portion`, `recette_instruction`, `recette_author`) VALUES
(1, 'Seiche (ou encornet) à la tomate', 'public/images/blog-1.jpg', 'Spécialité du bassin', 30, 4, 'Faire revenir les oignons et l\'ail émincés dans de l\'huile d\'olive.\r\nRajouter les lamelles de seiches. Saler, Poivrer. En remuant souvent, laisser cuire 5 min.\r\nRajouter les tomates, le laurier et le thym. Ajouter un peu d\'eau si nécessaire et laisser cuire 10 min.\r\nEn fin de cuisson, rajouter un peu de crème fraiche pour adoucir la sauce.\r\nA déguster avec du riz.', 'Elise'),
(2, 'Mule du Bassin et sa sauce verte', 'public/images/blog-2.jpg', 'Une recette typique du bassin', 25, 4, 'Badigeonnez les mules d\'huile d\'olive et les faire griller au barbecue ou à la plancha.\r\nPendant ce temps, préparer la sauce verte : hachez l\'ail et les échalotes, ciselez le persil. Dans un bol, mélangez ces ingrédients, ajoutez du vinaigre et de l\'huile d\'olive dans les proportions d\'une vinaigrette,\r\nSalez, poivrez.\r\nDéposez les mules cuits dans un plat, retirez la peau avec les écailles, arrosez de sauce verte et couvrez avec un papier d\'alu.\r\nLaissez reposer quelques instants afin que la sauce imprègne bien la chair des mules.\r\nServir avec des pommes de terre.', 'Elise');

-- --------------------------------------------------------

--
-- Structure de la table `boot_users`
--

CREATE TABLE `boot_users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_mail` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_status` tinyint(1) NOT NULL DEFAULT '0',
  `user_picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `boot_users`
--

INSERT INTO `boot_users` (`id`, `user_name`, `user_mail`, `user_pass`, `user_status`, `user_picture`) VALUES
(1, 'nicolas', 'duquesne.nico@gmail.com', 'toto', 1, 'moi.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `boot_mail`
--
ALTER TABLE `boot_mail`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `boot_recette`
--
ALTER TABLE `boot_recette`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `boot_users`
--
ALTER TABLE `boot_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `boot_mail`
--
ALTER TABLE `boot_mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `boot_recette`
--
ALTER TABLE `boot_recette`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `boot_users`
--
ALTER TABLE `boot_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
