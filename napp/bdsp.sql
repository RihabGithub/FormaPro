-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 11 Mars 2017 à 15:39
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `bdsp`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL,
  `motdepasse` varchar(30) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `nom`, `prenom`, `login`, `motdepasse`) VALUES
('admin', 'admin', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `assistant`
--

CREATE TABLE IF NOT EXISTS `assistant` (
  `id_assistant` varchar(30) NOT NULL,
  `noma` varchar(30) NOT NULL,
  `prenoma` varchar(30) NOT NULL,
  `emaila` varchar(30) NOT NULL,
  `adressea` varchar(30) NOT NULL,
  `cina` varchar(30) NOT NULL,
  `tel1` int(11) NOT NULL,
  `tel2` int(11) NOT NULL,
  `logina` varchar(30) NOT NULL,
  `pwda` varchar(30) NOT NULL,
  `datea` date NOT NULL,
  `salaire` int(15) NOT NULL,
  PRIMARY KEY (`id_assistant`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `assistant`
--

INSERT INTO `assistant` (`id_assistant`, `noma`, `prenoma`, `emaila`, `adressea`, `cina`, `tel1`, `tel2`, `logina`, `pwda`, `datea`, `salaire`) VALUES
('20170311102249', 'aaaaa', 'aaaaa', 'megdiche@gmail.com', 'aaaaa', '12365478', 12365478, 12365478, 'dfghjkl:m', '$2y$10$9kieKEoDv0XYZtHZ7iXUue1', '2017-03-02', 147);

-- --------------------------------------------------------

--
-- Structure de la table `client_ent`
--

CREATE TABLE IF NOT EXISTS `client_ent` (
  `id_client_ent` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tel1` int(11) NOT NULL,
  `tel2` int(11) NOT NULL,
  `responsable` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `motdepasse` varchar(30) NOT NULL,
  PRIMARY KEY (`id_client_ent`),
  UNIQUE KEY `id_client_ent` (`id_client_ent`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `client_ent`
--

INSERT INTO `client_ent` (`id_client_ent`, `nom`, `adresse`, `email`, `tel1`, `tel2`, `responsable`, `login`, `motdepasse`) VALUES
('2017-02-15 22:10:12', 'formapro', 'bizerte', 'formapro2017.gmail.com', 12346, 12346, 12346, 'seantiago', '$2y$10$Ki9nCHIH2mtGpK8J8lHHJeT'),
('2017-02-18 12:05:19', '', '', '', 0, 0, 0, 'seantiago', '$2y$10$qvqCOjMRu.2.7QwcNbr0B.6'),
('2017-02-18 12:11:38', '', '', '', 0, 0, 0, 'seantiago', '$2y$10$FGwXjvWgLZ4NhHdJ.2L1FOR');

-- --------------------------------------------------------

--
-- Structure de la table `client_par`
--

CREATE TABLE IF NOT EXISTS `client_par` (
  `id_client_part` varchar(255) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `numtel` int(11) NOT NULL,
  `num_tel2` int(11) NOT NULL,
  `num_res` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL,
  `cin` varchar(30) NOT NULL,
  `motdepasse` varchar(30) NOT NULL,
  `date_nissance` date NOT NULL,
  PRIMARY KEY (`id_client_part`),
  UNIQUE KEY `id_client_part` (`id_client_part`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `client_par`
--

INSERT INTO `client_par` (`id_client_part`, `nom`, `prenom`, `adresse`, `numtel`, `num_tel2`, `num_res`, `email`, `login`, `cin`, `motdepasse`, `date_nissance`) VALUES
('20170227071730', 'megdich', 'rihab', 'bizerte', 26465838, 50883346, 12345678, 'megdiche.rihab@gmail.com', 'megdich', '11392804', '$2y$10$EiX95Dz6Ei2bgCgcwxcLReA', '2017-02-09'),
('20170227072107', 'megdich', 'rihab', 'Tunis', 25691324, 54886821, 13569874, 'megdiche.rihab@gmail.com', 'megdich', '11392804', '$2y$10$etGtZR7iM.4Di7j9pNxAa.r', '2017-02-03'),
('20170306052539', 'boughdiri', 'chiheb', ' Manouba', 23052633, 52496287, 123456, 'blablabla@gmail.com', 'fprmapro', '11392804', '$2y$10$2nU6RH6mkMM6DIEqDri6YO3', '1994-06-12'),
('20170307080213', 'Labidi', 'Marwa', 'Tunis', 12345678, 12345678, 12345678, 'rrihab@yahoo.fr', '12345678', '11392804', '$2y$10$9m79cBxGqnoT59c7E/Tfx.x', '2015-02-20'),
('20170307085722', 'manoubi', 'semi', 'beja', 12365478, 12365478, 12365478, 'semi87@hotmail.com', 'fprmapro', '123458', '$2y$10$5hGTvTwSJrobErG9wmszSuu', '2017-03-04'),
('20170307090049', 'manoubi', 'semi', 'beja', 12365478, 12365478, 12365478, 'semi87@hotmail.com', 'fprmapro', '14789578', '$2y$10$nDyxv8jr/X2tiG9u7qZ5Quk', '2017-03-03'),
('20170311015357', 'dgsjud', 'gvhjk,d h', 'bizerte', 12345678, 12345678, 12345678, 'megdiche.rihab@gmail.com', 'mdkjdnjd', '12345678', '$2y$10$SAW7ZxyXN4dgmr3C5wOW..2', '2017-03-23');

-- --------------------------------------------------------

--
-- Structure de la table `formateur`
--

CREATE TABLE IF NOT EXISTS `formateur` (
  `id_formateur` varchar(30) NOT NULL,
  `nomf` varchar(30) NOT NULL,
  `prenomf` varchar(30) NOT NULL,
  `adressef` varchar(30) NOT NULL,
  `cinf` varchar(30) NOT NULL,
  `emailf` varchar(30) NOT NULL,
  `date_ness` date NOT NULL,
  `tel1` int(12) NOT NULL,
  `tel2` int(12) NOT NULL,
  `salaire` int(30) NOT NULL,
  `loginf` varchar(30) NOT NULL,
  `pwdf` varchar(30) NOT NULL,
  PRIMARY KEY (`id_formateur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `formateur`
--

INSERT INTO `formateur` (`id_formateur`, `nomf`, `prenomf`, `adressef`, `cinf`, `emailf`, `date_ness`, `tel1`, `tel2`, `salaire`, `loginf`, `pwdf`) VALUES
('20170311103052', 'Ouali', 'Mohamed', 'Bizerte', '11111111', 'ouali123@gmail.com', '1980-06-27', 55443388, 99887744, 200, 'ouali', '$2y$10$8J9e2DMZyqbfhLSI4OgHtu3');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE IF NOT EXISTS `formation` (
  `id_formation` varchar(30) NOT NULL,
  `libelle` varchar(30) NOT NULL,
  `prix` int(11) NOT NULL,
  `categorie` varchar(30) NOT NULL,
  PRIMARY KEY (`id_formation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `formation`
--

INSERT INTO `formation` (`id_formation`, `libelle`, `prix`, `categorie`) VALUES
('20170311021200', 'FranÃ§ais', 100, 'Langue'),
('20170311021220', 'java', 200, 'dÃ©veloppement');

-- --------------------------------------------------------

--
-- Structure de la table `local`
--

CREATE TABLE IF NOT EXISTS `local` (
  `id_local` varchar(30) NOT NULL,
  `libelle` varchar(30) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `id_assistant` varchar(30) NOT NULL,
  PRIMARY KEY (`id_local`),
  KEY `cle_assistant` (`id_assistant`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `personnel_ent`
--

CREATE TABLE IF NOT EXISTS `personnel_ent` (
  `id_personnel` int(11) NOT NULL,
  `nom` int(11) NOT NULL,
  `prenom` int(11) NOT NULL,
  `date_naissance` int(11) NOT NULL,
  `cin` int(11) NOT NULL,
  `adresse` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `login` int(11) NOT NULL,
  `motdepasse` int(11) NOT NULL,
  PRIMARY KEY (`id_personnel`),
  UNIQUE KEY `id_personnel` (`id_personnel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE IF NOT EXISTS `salle` (
  `id_salle` varchar(30) NOT NULL,
  `libelle` varchar(30) NOT NULL,
  `nb_pc` int(2) NOT NULL,
  `id_local` varchar(30) NOT NULL,
  PRIMARY KEY (`id_salle`),
  KEY `cle_local` (`id_local`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `session`
--

CREATE TABLE IF NOT EXISTS `session` (
  `id_session` varchar(30) NOT NULL,
  `date_deb` date NOT NULL,
  `date_fin` date NOT NULL,
  `nb_heure` int(11) NOT NULL,
  `id_client` varchar(30) NOT NULL,
  `id_formateur` varchar(30) NOT NULL,
  `id_formation` varchar(30) NOT NULL,
  `id_salle` varchar(30) NOT NULL,
  `categorie_session` varchar(30) NOT NULL,
  `formation_session` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `cin` varchar(30) NOT NULL,
  PRIMARY KEY (`id_session`),
  KEY `sessio_fk` (`id_client`),
  KEY `for_fk` (`id_formateur`),
  KEY `salle_fk` (`id_salle`),
  KEY `cle_formation` (`id_formation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `local`
--
ALTER TABLE `local`
  ADD CONSTRAINT `cle_assistant` FOREIGN KEY (`id_assistant`) REFERENCES `assistant` (`id_assistant`);

--
-- Contraintes pour la table `salle`
--
ALTER TABLE `salle`
  ADD CONSTRAINT `cle_local` FOREIGN KEY (`id_local`) REFERENCES `local` (`id_local`);

--
-- Contraintes pour la table `session`
--
ALTER TABLE `session`
  ADD CONSTRAINT `cle_formateur` FOREIGN KEY (`id_formateur`) REFERENCES `formateur` (`id_formateur`),
  ADD CONSTRAINT `cle_formation` FOREIGN KEY (`id_formation`) REFERENCES `formation` (`id_formation`),
  ADD CONSTRAINT `for_fk` FOREIGN KEY (`id_formateur`) REFERENCES `formateur` (`id_formateur`),
  ADD CONSTRAINT `salle_fk` FOREIGN KEY (`id_salle`) REFERENCES `salle` (`id_salle`),
  ADD CONSTRAINT `sessio_fk` FOREIGN KEY (`id_client`) REFERENCES `client_par` (`id_client_part`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
