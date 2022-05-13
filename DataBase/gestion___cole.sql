-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 11 mai 2022 à 10:01
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_école`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id_admin` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Role` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `id_etudiant` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Genre` varchar(255) NOT NULL,
  `Classe` varchar(255) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Email` varchar(255) NOT NULL,
  `nom_parent` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `parents`
--

CREATE TABLE `parents` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Genre` varchar(255) NOT NULL,
  `Job` varchar(255) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `Phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `parents`
--

INSERT INTO `parents` (`id`, `Name`, `Genre`, `Job`, `Adresse`, `Phone`) VALUES
(1, 'hamid toulal', 'homme', 'prof', 'Boulevard moulay youssef, Youssoufia, Maroc', '0612345678'),
(2, 'houda zinoun', 'femme', 'prof', 'Boulevard moulay youssef, Youssoufia, Maroc', '0612345678'),
(3, 'saida barakat', 'femme', 'docteur', 'Boulevard moulay youssef, Youssoufia, Maroc', '0612345677');

-- --------------------------------------------------------

--
-- Structure de la table `professeurs`
--

CREATE TABLE `professeurs` (
  `id_prof` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Genre` varchar(255) NOT NULL,
  `Classe` varchar(255) NOT NULL,
  `Matiere` varchar(255) NOT NULL,
  `Phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
