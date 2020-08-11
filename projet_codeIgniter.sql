-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 11 août 2020 à 11:05
-- Version du serveur :  10.3.16-MariaDB
-- Version de PHP :  7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `banque_ci`
--

-- --------------------------------------------------------

--
-- Structure de la table `clientmoral`
--

CREATE TABLE `clientmoral` (
  `id` int(11) NOT NULL,
  `nomEntreprise` varchar(35) NOT NULL,
  `AdresseEntreprise` varchar(45) NOT NULL,
  `RaisonSocial` varchar(30) NOT NULL,
  `numIdent` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `clientmoral`
--

INSERT INTO `clientmoral` (`id`, `nomEntreprise`, `AdresseEntreprise`, `RaisonSocial`, `numIdent`) VALUES
(1, 'SOCOCIM', 'Dakar', 'SEA', '1589 685 2015'),
(2, 'ORANGE', 'Dakar, Vdn', 'SEA', '12212211'),
(3, 'ATOS', 'Dakar', 'SEA', 'AT15298'),
(4, 'SDE', 'Dakar', 'SEA', 'SDE48596'),
(5, 'SAED', 'Saint-Louis', 'SEA', 'SAED152665'),
(6, 'SCL', 'Saint-Louis, Diama', 'SA', 'SCL95855'),
(10, 'SOCAS', 'Savoigne, Saint-Louis', 'SEA', 'SOCAS15252');

-- --------------------------------------------------------

--
-- Structure de la table `clientphysique`
--

CREATE TABLE `clientphysique` (
  `id` int(11) NOT NULL,
  `numCni` varchar(25) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `civilite` varchar(10) NOT NULL,
  `DateDeNaissance` varchar(20) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `clientMoral` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `clientphysique`
--

INSERT INTO `clientphysique` (`id`, `numCni`, `nom`, `prenom`, `civilite`, `DateDeNaissance`, `adresse`, `email`, `telephone`, `clientMoral`) VALUES
(1, '2552 2636 2222', 'sow', 'Fama', 'Melle', '1996-02-08', 'Dakar', 'sofama199@gmail.com', '771500364', 3),
(4, '6987 9966 2526', 'diop', 'Aissatou', 'Mdme', '1998-02-06', 'Dakar', 'saha@gmail.com', '771459585', 4),
(5, '2251 1888 96325', 'Fall', 'Modou', 'M.', '1993-08-10', 'Saint-Louis', 'mm@gmail.com', '771596326', 2),
(13, '2 251 2000 02199', 'ndiaye', 'fati', 'Melle', '02-08-1993', 'dakar', 'penda@gmail.com', '771596366', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `id` int(11) NOT NULL,
  `numagence` varchar(25) NOT NULL,
  `numCompte` varchar(25) NOT NULL,
  `cleRib` varchar(15) NOT NULL,
  `typeCompte` int(11) DEFAULT NULL,
  `clientphysique` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`id`, `numagence`, `numCompte`, `cleRib`, `typeCompte`, `clientphysique`) VALUES
(3, 'AG25526DK', '2563 2563 1526', '199', NULL, 5),
(4, 'AG1596SLFR', '6963 5659 9355 ', '15', NULL, 1),
(5, 'AG25526SL', '2563 2971 1526', '12', NULL, NULL),
(6, 'AG1596SL', '5963 5659 1111 ', '23', NULL, NULL),
(7, 'AG59632', '2563 2556 3652 ', '12', NULL, NULL),
(8, 'AG896588SL', '2569 6325 1552', '12', NULL, NULL),
(9, 'AG5896SL', '9857 5862 2222', '13', NULL, 4);

-- --------------------------------------------------------

--
-- Structure de la table `typecompte`
--

CREATE TABLE `typecompte` (
  `idTypeCompte` int(11) NOT NULL,
  `libelle` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `clientmoral`
--
ALTER TABLE `clientmoral`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `clientphysique`
--
ALTER TABLE `clientphysique`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_clientmoral` (`clientMoral`);

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_typecompte` (`typeCompte`),
  ADD KEY `fk_clientphysique` (`clientphysique`);

--
-- Index pour la table `typecompte`
--
ALTER TABLE `typecompte`
  ADD PRIMARY KEY (`idTypeCompte`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `clientmoral`
--
ALTER TABLE `clientmoral`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `clientphysique`
--
ALTER TABLE `clientphysique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `typecompte`
--
ALTER TABLE `typecompte`
  MODIFY `idTypeCompte` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `clientphysique`
--
ALTER TABLE `clientphysique`
  ADD CONSTRAINT `clientphysique_ibfk_1` FOREIGN KEY (`clientMoral`) REFERENCES `clientmoral` (`Id`);

--
-- Contraintes pour la table `compte`
--
ALTER TABLE `compte`
  ADD CONSTRAINT `compte_ibfk_1` FOREIGN KEY (`typeCompte`) REFERENCES `typecompte` (`idTypeCompte`),
  ADD CONSTRAINT `compte_ibfk_2` FOREIGN KEY (`clientphysique`) REFERENCES `clientphysique` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
