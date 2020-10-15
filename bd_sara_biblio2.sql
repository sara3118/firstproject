-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 13 oct. 2020 à 13:37
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
(14, 'AUTEUR09', 'AUTEUR', 'CUBA');

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
(16, 'ASL31', 'CESSON', '0734883883'),
(19, 'CREATION', 'CESSON', '669999');

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
(3, 'GAMAL', 'Sara', ''),
(4, 'GAMAL', 'Sara', ''),
(5, 'DIDA', 'Didi', '131331'),
(6, 'lana', 'lana', '444'),
(8, 'LANA', 'lana', '88'),
(10, 'AHMED', 'AHMED', '3635'),
(13, 'ADAM', 'ADAM', '232'),
(14, 'CLIENT1', 'CLIENT1', '11111');

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
('2020-09-18', 2, 4, 4);

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
  `logolivre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`id_livre`, `id_bibliotheque`, `titre`, `genre`, `logolivre`) VALUES
(1, 2, 'L\'étranger', 'Littérature française', ''),
(2, 1, 'Caligula', 'Littérature française', ''),
(3, 16, 'Correspondance', 'Littérature française', 'project-4.jpg'),
(4, 2, 'Contes de la folie ordinaire', 'Littérature américaine', ''),
(5, 1, 'La peste', 'Littérature française', ''),
(11, 2, 'PICASO', 'ARABE', ''),
(15, 6, 'conversations', 'English', '800.jpg'),
(16, 2, 'gggggggg', 'English', '90.jpg'),
(17, 5, 'mega', 'fr', '100.jpg'),
(18, 5, 'mega', 'fr', '200.jpg'),
(19, 7, 'van gogh', 'anglais', 'image-02-510x419.png'),
(21, 7, 'rembrante', 'holand', 'partner-2-133x38.png'),
(22, 6, 'SELVADOR DALY', 'ANGLAIS', ''),
(24, 6, 'SELVADOR DALY', 'ANGLAIS', 'im1.png'),
(25, 6, ' DALY6', 'ALMANDE', 'partner-3-180x45.png'),
(31, 5, 'SARITA', 'PHARONE', ''),
(43, 16, 'my story', 'english', ''),
(57, 2, 'My story 2', 'french', ''),
(63, 7, 'STORIES', 'ENGLISH', 'alfa-.jpg'),
(65, 16, 'my story', 'english', ''),
(80, 16, 'MY GUEST', 'LAST ONE', ''),
(90, 2, 'EMMENEZ MOI', 'FRANCAISE', ''),
(91, 2, 'L4HH', 'FRANCAISE', 'unnamed.gif'),
(92, 2, 'L4HH', 'FRANCAISE', '3.gif'),
(93, 7, 'MEME', 'MEME', 'flower.jpg'),
(95, 16, 'jojo', 'td', 'uploads/bg0.jpg'),
(96, 16, 'my story', 'english', 'uploads/01.jpg'),
(97, 2, 'my story 1', 'english', 'uploads/1.jpg'),
(98, 16, 'my story 1', 'english', 'uploads/logo.png'),
(102, 16, 'bestcanadian', 'best', 'uploads/best canadian-1 .jpg'),
(103, 5, 'REMY', 'reading', 'uploads/im.jpg'),
(104, 5, 'REMY', 'reading', 'uploads/alfa-.jpg'),
(108, 1, 'FAVO', 'POLITIQUE', 'uploads/index.jpg'),
(111, 16, 'SALSA', 'AR', 'uploads/project-4.jpg'),
(113, 16, 'LARA', 'READING', ''),
(114, 19, 'CREATION', 'DREAWING', ''),
(116, 16, 'MUSIQUE', 'MUSIQUE', '');

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
(90, 2, 3, 1, '2021-01-31'),
(90, 2, 3, 2, '2021-01-31'),
(1, 2, 2, 3, '2020-09-01'),
(1, 3, 11, 11, '2020-10-27'),
(88, 2, 31, 12, '2021-07-20'),
(88, 2, 90, 22, '2020-10-04'),
(88, 1, 25, 30, '2020-10-04'),
(90, 2, 3, 33, '2021-01-31'),
(1, 2, 22, 55, '2020-10-31'),
(1, 3, 63, 87, '2021-01-10'),
(88, 2, 90, 90, '2020-10-15'),
(88, 1, 11, 93, '2020-10-01'),
(1, 2, 19, 111, '2020-11-13'),
(1, 1, 21, 311, '2021-01-31'),
(90, 2, 102, 315, '2020-10-31'),
(1, 2, 108, 319, '2020-11-05'),
(88, 2, 111, 322, '2020-10-08'),
(93, 6, 113, 324, '2020-10-14'),
(96, 3, 114, 325, '2020-10-05'),
(91, 5, 116, 327, '2020-10-22');

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
(37, 'amany', 'emy@gfg.fr', 22, 'sss', 'femme', 'france', 'admin');

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
  MODIFY `id_auteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `bibliotheque`
--
ALTER TABLE `bibliotheque`
  MODIFY `id_bibliotheque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `editeur`
--
ALTER TABLE `editeur`
  MODIFY `id_editeur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT pour la table `emprunter`
--
ALTER TABLE `emprunter`
  MODIFY `id_emprunter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `livre`
--
ALTER TABLE `livre`
  MODIFY `id_livre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT pour la table `publier`
--
ALTER TABLE `publier`
  MODIFY `id_publier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=328;

--
-- AUTO_INCREMENT pour la table `rendre`
--
ALTER TABLE `rendre`
  MODIFY `id_rendre` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

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
