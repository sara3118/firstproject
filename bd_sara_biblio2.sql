﻿-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 27 oct. 2020 à 15:30
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bd_sara_biblio2`
--

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE `auteur` (
  `id_auteur` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `nationalite` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`id_auteur`, `nom`, `prenom`, `nationalite`) VALUES
(1, 'CAMUS', 'ggf', 'Française'),
(2, 'BUCKOVSKI', 'Charles', 'Américaine'),
(3, 'CESAIRE', 'Aimé', 'Française'),
(5, 'DO', 'deda', 'fr'),
(6, 'SARITA', 'SARITA', 'egypt'),
(10, 'SOMEBODY', 'SOMEBODY', 'AMRICAIN'),
(14, 'AUTEUR09', 'AUTEUR', 'CUBA'),
(15, 'Serre', ' Frédéric ', 'française');

-- --------------------------------------------------------

--
-- Structure de la table `bibliotheque`
--

CREATE TABLE `bibliotheque` (
  `id_bibliotheque` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `telephone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `bibliotheque`
--

INSERT INTO `bibliotheque` (`id_bibliotheque`, `nom`, `adresse`, `telephone`) VALUES
(1, 'cao bibliotheque sara', 'Quai François Mauriac75 013 Paris', '01 53 79 59 59'),
(2, 'NONO LIBRARY', '2 Rue des Monts Gets94400 Vitry sur Seine', '01 44 55 66 77'),
(3, 'MEHDI LIBRARY', '12 Rue de la Justice\r\n93400 Saint Ouen', '0122 33 44 55'),
(5, 'MIMI LIBRARY', '22 ALLEE DE BATELIERS\r\n93110 ROSNY SOUS BOIS', '01 21 34 45 56'),
(6, 'SAFIA LIBRARY', '40 AVENUE DE LA RANCUNE\r\n95100 ARGENTEUIL', '01 24 46 68 80'),
(7, 'NANALIBRARY', '62 BOULEVARD DE LA FIERTE93110 ROSNY SOUS BOIS', '01 64 42 88 00'),
(16, 'ASL', 'CESSON', '0734883883'),
(19, 'CREATION', 'CESSON', '669999'),
(24, 'LARAETLANA', 'NANTEUIL', '0224421');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `telephone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom`, `prenom`, `telephone`) VALUES
(1, 'DOUADI', 'Sonia', '06 07 08 09 00'),
(2, 'SCHOENARTS', 'Matthias', '06 05 04 03 02'),
(4, 'GAMAL', 'Sara', ''),
(5, 'DIDA', 'Didi', '131331'),
(10, 'AHMED', 'AHMED', '3635'),
(13, 'ADAM', 'ADAM', '232'),
(14, 'CLIENT1', 'CLIENT1', '11111'),
(16, 'ABDALLAH', 'LARA', '333333'),
(17, 'BEDO', 'lana', '444');

-- --------------------------------------------------------

--
-- Structure de la table `editeur`
--

CREATE TABLE `editeur` (
  `id_editeur` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `adresse` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `editeur`
--

INSERT INTO `editeur` (`id_editeur`, `nom`, `adresse`) VALUES
(1, 'FLAMMAR2', '87 Quai Panhard et Levassor75016 Paris'),
(88, 'Sara', 'MEAUX'),
(90, 'jomangy', 'Cesson'),
(91, 'LARA', 'CESSON'),
(92, 'sarita', 'sarita'),
(93, 'gamal', 'giza'),
(94, 'EDITEUR', 'NANTEUIL'),
(96, 'MAI', 'EGYPTE'),
(98, 'EDITEUR2', 'TORCY');

-- --------------------------------------------------------

--
-- Structure de la table `emprunter`
--

CREATE TABLE `emprunter` (
  `date_emprunt` date NOT NULL,
  `id_client` int(200) NOT NULL,
  `id_livre` int(200) NOT NULL,
  `id_emprunter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `emprunter`
--

INSERT INTO `emprunter` (`date_emprunt`, `id_client`, `id_livre`, `id_emprunter`) VALUES
('2020-09-18', 2, 4, 4),
('2020-10-20', 2, 1, 5),
('2020-10-30', 10, 121, 6);

-- --------------------------------------------------------

--
-- Structure de la table `formusers`
--

CREATE TABLE `formusers` (
  `id_users` int(11) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `age` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

CREATE TABLE `livre` (
  `id_livre` int(11) NOT NULL,
  `id_bibliotheque` int(11) NOT NULL,
  `titre` varchar(200) NOT NULL,
  `genre` varchar(200) NOT NULL,
  `logolivre` varchar(200) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `prix` int(200) DEFAULT NULL,
  `page` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`id_livre`, `id_bibliotheque`, `titre`, `genre`, `logolivre`, `description`, `prix`, `page`) VALUES
(1, 2, 'L\'étranger', 'Littérature française', '', NULL, NULL, NULL),
(4, 2, 'Contes de la folie ordinaire', 'Littérature américaine', '', NULL, NULL, NULL),
(5, 1, 'La peste', 'Littérature française', '', NULL, NULL, NULL),
(15, 6, 'conversations', 'English', '800.jpg', NULL, NULL, NULL),
(16, 2, 'gggggggg', 'English', '90.jpg', NULL, NULL, NULL),
(17, 5, 'mega', 'fr', '100.jpg', NULL, NULL, NULL),
(18, 5, 'mega', 'fr', '200.jpg', NULL, NULL, NULL),
(24, 6, 'SELVADOR DALY', 'ANGLAIS', 'im1.png', NULL, NULL, NULL),
(43, 16, 'my story', 'english', '', NULL, NULL, NULL),
(57, 2, 'My story 2', 'french', '', NULL, NULL, NULL),
(65, 16, 'my story', 'english', '', NULL, NULL, NULL),
(80, 16, 'MY GUEST', 'LAST ONE', '', NULL, NULL, NULL),
(91, 2, 'L4HH', 'FRANCAISE', 'unnamed.gif', NULL, NULL, NULL),
(92, 2, 'L4HH', 'FRANCAISE', '3.gif', NULL, NULL, NULL),
(93, 7, 'MEME', 'MEME', 'flower.jpg', NULL, NULL, NULL),
(95, 16, 'jojo', 'td', 'uploads/bg0.jpg', NULL, NULL, NULL),
(96, 16, 'my story', 'english', 'uploads/01.jpg', NULL, NULL, NULL),
(97, 2, 'my story 1', 'english', 'uploads/1.jpg', NULL, NULL, NULL),
(98, 16, 'my story 1', 'english', 'uploads/logo.png', NULL, NULL, NULL),
(103, 5, 'REMY', 'reading', 'uploads/im.jpg', NULL, NULL, NULL),
(104, 5, 'REMY', 'reading', 'uploads/alfa-.jpg', NULL, NULL, NULL),
(119, 24, 'correspondances', 'literatur française', '', 'any describ', 50, NULL),
(121, 2, 'STELLA STONE', 'READERS', 'uploads/5f8c6262b54fe-FB_IMG_1591969208550.jpg', 'description', 90, '300'),
(125, 19, 'le pouvoir des sens', 'psychiatrique', 'uploads/5f8f1c1aa3161-FB_IMG_1594551823270.jpg', 'l’utilisation des systèmes sensoriels', 10, '50');

-- --------------------------------------------------------

--
-- Structure de la table `publier`
--

CREATE TABLE `publier` (
  `id_editeur` int(200) NOT NULL,
  `id_auteur` int(200) NOT NULL,
  `id_livre` int(200) NOT NULL,
  `id_publier` int(11) NOT NULL,
  `date_publication` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `publier`
--

INSERT INTO `publier` (`id_editeur`, `id_auteur`, `id_livre`, `id_publier`, `date_publication`) VALUES
(93, 3, 119, 330, '2020-10-08'),
(1, 1, 121, 332, '2021-01-24'),
(94, 15, 125, 336, '2018-10-03');

-- --------------------------------------------------------

--
-- Structure de la table `rendre`
--

CREATE TABLE `rendre` (
  `id_livre` int(150) NOT NULL,
  `id_client` int(150) NOT NULL,
  `date_retour` date NOT NULL,
  `id_rendre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `password` varchar(70) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `pays` varchar(70) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_users`, `prenom`, `email`, `age`, `password`, `sex`, `pays`, `role`) VALUES
(29, 'Sara', 'selawady311@hotmail.com', 10, 'sara311', 'homme', 'canada', 'admin'),
(37, 'amany', 'emy@gfg.fr', 22, 'sss', 'femme', 'france', 'admin'),
(53, 'LANA', 'LANA311@hotmail.com', 33, 'FDF', 'femme', 'togo', 'admin'),
(54, 'LARA', 'LARA311@hotmail.com', 35, 'DF', 'femme', 'suisse', 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `auteur`
--
ALTER TABLE `auteur`
  ADD PRIMARY KEY (`id_auteur`);

--
-- Index pour la table `bibliotheque`
--
ALTER TABLE `bibliotheque`
  ADD PRIMARY KEY (`id_bibliotheque`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `editeur`
--
ALTER TABLE `editeur`
  ADD PRIMARY KEY (`id_editeur`);

--
-- Index pour la table `emprunter`
--
ALTER TABLE `emprunter`
  ADD PRIMARY KEY (`id_emprunter`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_livre` (`id_livre`);

--
-- Index pour la table `formusers`
--
ALTER TABLE `formusers`
  ADD PRIMARY KEY (`id_users`);

--
-- Index pour la table `livre`
--
ALTER TABLE `livre`
  ADD PRIMARY KEY (`id_livre`),
  ADD KEY `id_bibliotheque` (`id_bibliotheque`);

--
-- Index pour la table `publier`
--
ALTER TABLE `publier`
  ADD PRIMARY KEY (`id_publier`),
  ADD KEY `id_auteur` (`id_auteur`),
  ADD KEY `id_editeur` (`id_editeur`),
  ADD KEY `id_livre` (`id_livre`);

--
-- Index pour la table `rendre`
--
ALTER TABLE `rendre`
  ADD PRIMARY KEY (`id_rendre`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_livre` (`id_livre`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `auteur`
--
ALTER TABLE `auteur`
  MODIFY `id_auteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `bibliotheque`
--
ALTER TABLE `bibliotheque`
  MODIFY `id_bibliotheque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `editeur`
--
ALTER TABLE `editeur`
  MODIFY `id_editeur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT pour la table `emprunter`
--
ALTER TABLE `emprunter`
  MODIFY `id_emprunter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `livre`
--
ALTER TABLE `livre`
  MODIFY `id_livre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT pour la table `publier`
--
ALTER TABLE `publier`
  MODIFY `id_publier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=337;

--
-- AUTO_INCREMENT pour la table `rendre`
--
ALTER TABLE `rendre`
  MODIFY `id_rendre` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `emprunter`
--
ALTER TABLE `emprunter`
  ADD CONSTRAINT `emprunter_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `emprunter_ibfk_2` FOREIGN KEY (`id_livre`) REFERENCES `livre` (`id_livre`);

--
-- Contraintes pour la table `livre`
--
ALTER TABLE `livre`
  ADD CONSTRAINT `livre_ibfk_1` FOREIGN KEY (`id_bibliotheque`) REFERENCES `bibliotheque` (`id_bibliotheque`);

--
-- Contraintes pour la table `publier`
--
ALTER TABLE `publier`
  ADD CONSTRAINT `publier_ibfk_1` FOREIGN KEY (`id_auteur`) REFERENCES `auteur` (`id_auteur`),
  ADD CONSTRAINT `publier_ibfk_2` FOREIGN KEY (`id_editeur`) REFERENCES `editeur` (`id_editeur`),
  ADD CONSTRAINT `publier_ibfk_3` FOREIGN KEY (`id_livre`) REFERENCES `livre` (`id_livre`);

--
-- Contraintes pour la table `rendre`
--
ALTER TABLE `rendre`
  ADD CONSTRAINT `rendre_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `rendre_ibfk_2` FOREIGN KEY (`id_livre`) REFERENCES `livre` (`id_livre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
