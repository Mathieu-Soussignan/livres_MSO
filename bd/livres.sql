-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 26 jan. 2023 à 17:50
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bdp6`
--

-- --------------------------------------------------------

--
-- Structure de la table `livres`
--

CREATE TABLE `livres` (
  `Id` int(11) NOT NULL,
  `ISBN` varchar(13) NOT NULL,
  `Titre` varchar(255) NOT NULL,
  `Theme` varchar(255) NOT NULL,
  `Nb_pages` int(11) NOT NULL,
  `Format` varchar(255) NOT NULL,
  `Nom_auteur` varchar(255) NOT NULL,
  `Prenom_auteur` varchar(255) NOT NULL,
  `Annee_edition` int(11) NOT NULL,
  `Prix` int(30) NOT NULL,
  `Langue` varchar(255) NOT NULL,
  `Editeur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `livres`
--

INSERT INTO `livres` (`Id`, `ISBN`, `Titre`, `Theme`, `Nb_pages`, `Format`, `Nom_auteur`, `Prenom_auteur`, `Annee_edition`, `Prix`, `Langue`, `Editeur`) VALUES
(1, '978-1-56619-9', 'Livre 1', 'Science-fiction', 300, 'Poche', 'Nom Auteur 1', 'Prenom Auteur 1', 2020, 16, 'Français', 'Editeur 1'),
(2, '978-1-56619-9', 'Livre 2', 'Thriller', 400, 'Broché', 'Nom Auteur 2', 'Prenom Auteur 2', 2019, 21, 'Français', 'Editeur 2'),
(3, '978-1-56619-9', 'Livre 3', 'Romance', 250, 'Ebook', 'Nom Auteur 3', 'Prenom Auteur 3', 2018, 13, 'Anglais', 'Editeur 3'),
(4, '978-1-56619-9', 'Livre 4', 'Horreur', 350, 'Audio', 'Nom Auteur 4', 'Prenom Auteur 4', 2017, 23, 'Espagnol', 'Editeur 4'),
(5, '978-1-56619-9', 'Livre 5', 'Historique', 600, 'Poche', 'Nom Auteur 5', 'Prenom Auteur 5', 2016, 19, 'Français', 'Editeur 5'),
(6, '978-1-56619-9', 'Les Misérables', 'Roman historique', 1488, 'poche', 'Hugo', 'Victor', 1862, 11, 'Français', 'Gallimard'),
(7, '978-1-56619-9', 'Livre 7', 'Manga', 210, 'poche', 'Eiichirō ', 'Oda', 2023, 6, 'Français', 'Glénat'),
(8, '978-0-451-232', '1984', 'Science-fiction', 328, 'broché', 'Orwell', 'George', 1949, 14, 'Anglais', 'Secker & Warburg'),
(9, '978-1-56619-9', 'Livre 9', 'Manga', 322, 'poche', 'Orwelle', 'Victor', 2023, 6, 'Français', 'Glénat'),
(10, '0545010225', 'Harry Potter et la pierre philosophale', 'Fantasy', 223, 'Poche', 'Rowling', 'J.K.', 1997, 11, 'Français', 'Gallimard'),
(11, '0545010233', 'Harry Potter et la chambre des secrets', 'Fantasy', 251, 'Poche', 'Rowling', 'J.K.', 1998, 11, 'Français', 'Gallimard'),
(12, '0545010241', 'Harry Potter et le prisonnier d\'Azkaban', 'Fantasy', 317, 'Poche', 'Rowling', 'J.K.', 1999, 11, 'Français', 'Gallimard'),
(13, '054501026X', 'Harry Potter et la coupe de feu', 'Fantasy', 636, 'Poche', 'Rowling', 'J.K.', 2000, 11, 'Français', 'Gallimard'),
(14, '0545010278', 'Harry Potter et l\'ordre du phénix', 'Fantasy', 838, 'Poche', 'Rowling', 'J.K.', 2003, 11, 'Français', 'Gallimard'),
(15, '0545010286', 'Harry Potter et le prince de sang-mêlé', 'Fantasy', 607, 'Poche', 'Rowling', 'J.K.', 2005, 11, 'Français', 'Gallimard'),
(16, '0545010294', 'Harry Potter et les reliques de la mort', 'Fantasy', 734, 'Poche', 'Rowling', 'J.K.', 2007, 11, 'Français', 'Gallimard');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `livres`
--
ALTER TABLE `livres`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `livres`
--
ALTER TABLE `livres`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
