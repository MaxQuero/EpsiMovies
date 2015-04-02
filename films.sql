-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 02 Avril 2015 à 14:59
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `db_movie`
--

CREATE DATABASE IF NOT EXISTS `db_movie`;
USE `db_movie`;
-- --------------------------------------------------------

-- Drop table 

DROP TABLE IF EXISTS `films`;
--
-- Structure de la table `films`
--

CREATE TABLE IF NOT EXISTS `films` (
  `id_films` int(3) NOT NULL AUTO_INCREMENT,
  `titre` varchar(40) NOT NULL,
  `genre` varchar(40) DEFAULT NULL,
  `duree` varchar(20) DEFAULT NULL,
  `date_realisation` date NOT NULL DEFAULT '0000-00-00',
  `realisateur` varchar(40) DEFAULT NULL,
  `acteur` varchar(255) DEFAULT NULL,
  `resume` text NOT NULL,
  PRIMARY KEY (`id_films`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `films`
--

INSERT INTO `films` (`id_films`, `titre`, `genre`, `duree`, `date_realisation`, `realisateur`, `acteur`, `resume`) VALUES
(1, 'Inception', 'Action, Mystery, Sci-Fi', NULL, '2010-07-21', 'Christopher Nolan', 'Leonardo DiCaprio, Joseph Gordon-Levitt, Ellen Page', 'Dom Cobb est un voleur expérimenté – le meilleur qui soit dans l’art périlleux de l’extraction : sa spécialité consiste à s’approprier les secrets les plus précieux d’un individu, enfouis au plus profond de son subconscient, pendant qu’il rêve et que son esprit est particulièrement vulnérable. Très recherché pour ses talents dans l’univers trouble de l’espionnage industriel, Cobb est aussi devenu un fugitif traqué dans le monde entier qui a perdu tout ce qui lui est cher. Mais une ultime mission pourrait lui permettre de retrouver sa vie d’avant – à condition qu’il puisse accomplir l’impossible : l’inception. Au lieu de subtiliser un rêve, Cobb et son équipe doivent faire l’inverse : implanter une idée dans l’esprit d’un individu. S’ils y parviennent, il pourrait s’agir du crime parfait. Et pourtant, aussi méthodiques et doués soient-ils, rien n’aurait pu préparer Cobb et ses partenaires à un ennemi redoutable qui semble avoir systématiquement un coup d’avance sur eux. Un ennemi dont seul Cobb aurait pu soupçonner l’existence.'),
(3, 'Interstellar', 'Science fiction, Drame', '2h49min', '2014-11-05', 'Christopher Nolan', 'Matthew McConaughey, Anne Hathaway, Michael Caine', 'Le film raconte les aventures d’un groupe d’explorateurs qui utilisent une faille récemment découverte dans l’espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire. ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
