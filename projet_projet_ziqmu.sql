-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 28 avr. 2020 à 01:55
-- Version du serveur :  10.1.35-MariaDB
-- Version de PHP :  7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_projet_ziqmu`
--

-- --------------------------------------------------------

--
-- Structure de la table `adherent`
--

CREATE TABLE `adherent` (
  `idAdherent` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `Telephone` int(10) DEFAULT NULL,
  `adresse` varchar(30) NOT NULL,
  `mail` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `adherent`
--

INSERT INTO `adherent` (`idAdherent`, `nom`, `prenom`, `Telephone`, `adresse`, `mail`) VALUES
(13, 'toto', 'tata', 0, 'titi', 'tutu'),
(14, 'a', 'a', 0, 'a', 'a'),
(15, 'b', 'b', 0, 'b', 'b'),
(16, 'c', 'c', 0, 'c', 'cc'),
(17, 'YsidÃ©e', 'Mickael', 0, 'haiti', 'lhommemoche@pue.fr'),
(18, 'YsidÃ©e', 'Mickael', 0, 'haiti', 'lhommemoche@pue.fr'),
(19, 'zxsdcec', 'hvhg', 0, 'gghch', 'hgv'),
(20, 'll', 'jkjk', 0, 'jkjk', 'nh'),
(21, 'femme', 'sexy', 0, 'miel', 'amelie'),
(22, 'lili', 'lili', 0, 'lii', 'lllll'),
(23, 'cuffy', 'homme', 0, 'manatham', 'lala'),
(24, 'cuffy', 'homme', 0, 'manatham', 'lala'),
(25, 'kk', 'pppppp', 0, 'ddzdfg', 'nbnn'),
(26, 'paname', 'aa', 0, 'a', 'a'),
(27, 'tete', 'tetet', 0, 'tettrtr', 'tetre'),
(28, '^^^^', '^^^', 0, '^^', '^'),
(29, 'p', 'p', 0, 'pp', 'ppppppp'),
(30, 'popo', 'lili', 0, 'Ã Ã Ã Ã Ã ', 'mmm'),
(31, '^^^', 'p', 0, 'o', 'p'),
(32, 'y', 'y', 0, 'yyy', 'y'),
(33, 'ulrickblavin', 'blavin', 0, 'aaaa', 'aa'),
(34, 'ulrick', 'blavin', 0, '1111', '222'),
(35, 'test', 'test', 0, 'test', 'test'),
(36, 'test', 'test', 0, 'test', 'test'),
(37, 'a', 'a', 0, 'a', 'aa');

-- --------------------------------------------------------

--
-- Structure de la table `cour`
--

CREATE TABLE `cour` (
  `IdCour` int(11) NOT NULL,
  `Instrument` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `heure` time NOT NULL,
  `idMatière` int(11) NOT NULL,
  `idProfesseur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cour`
--

INSERT INTO `cour` (`IdCour`, `Instrument`, `Date`, `heure`, `idMatière`, `idProfesseur`) VALUES
(1, 'piano', '2018-10-01', '17:00:00', 1, 1),
(2, 'xylophone', '2018-10-18', '20:00:00', 1, 1),
(3, 'violon', '2018-10-11', '20:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `inscrit`
--

CREATE TABLE `inscrit` (
  `idCour` int(11) NOT NULL,
  `idAdherent` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `Telephone` int(10) NOT NULL,
  `idInscription` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `inscrit`
--

INSERT INTO `inscrit` (`idCour`, `idAdherent`, `nom`, `prenom`, `adresse`, `mail`, `Telephone`, `idInscription`) VALUES
(1, 37, 'a', 'a', 'a', 'aa', 0, 30);

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE `matiere` (
  `idMatière` int(11) NOT NULL,
  `libelle` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`idMatière`, `libelle`) VALUES
(1, 'chant');

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

CREATE TABLE `professeur` (
  `idProfesseur` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prénom` varchar(30) NOT NULL,
  `Téléphone` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `professeur`
--

INSERT INTO `professeur` (`idProfesseur`, `nom`, `prénom`, `Téléphone`) VALUES
(1, 'blavin', 'ulrick', 662641501);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adherent`
--
ALTER TABLE `adherent`
  ADD PRIMARY KEY (`idAdherent`),
  ADD KEY `idAdherent` (`idAdherent`),
  ADD KEY `idAdherent_2` (`idAdherent`);

--
-- Index pour la table `cour`
--
ALTER TABLE `cour`
  ADD PRIMARY KEY (`IdCour`),
  ADD KEY `idMatière` (`idMatière`),
  ADD KEY `idMatière_2` (`idMatière`),
  ADD KEY `idProfesseur` (`idProfesseur`);

--
-- Index pour la table `inscrit`
--
ALTER TABLE `inscrit`
  ADD PRIMARY KEY (`idCour`,`idAdherent`),
  ADD KEY `idAdherent` (`idAdherent`),
  ADD KEY `idInscription` (`idInscription`);

--
-- Index pour la table `matiere`
--
ALTER TABLE `matiere`
  ADD PRIMARY KEY (`idMatière`),
  ADD UNIQUE KEY `idMatière` (`idMatière`);

--
-- Index pour la table `professeur`
--
ALTER TABLE `professeur`
  ADD PRIMARY KEY (`idProfesseur`),
  ADD UNIQUE KEY `idProfesseur` (`idProfesseur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adherent`
--
ALTER TABLE `adherent`
  MODIFY `idAdherent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `cour`
--
ALTER TABLE `cour`
  MODIFY `IdCour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `inscrit`
--
ALTER TABLE `inscrit`
  MODIFY `idInscription` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `matiere`
--
ALTER TABLE `matiere`
  MODIFY `idMatière` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `professeur`
--
ALTER TABLE `professeur`
  MODIFY `idProfesseur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
