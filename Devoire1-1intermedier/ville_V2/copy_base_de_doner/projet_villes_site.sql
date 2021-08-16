-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 03 juin 2021 à 13:24
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_villes_site`
--

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

DROP TABLE IF EXISTS `pays`;
CREATE TABLE IF NOT EXISTS `pays` (
  `pays_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pays_nom` varchar(15) NOT NULL,
  PRIMARY KEY (`pays_id`),
  UNIQUE KEY `pays_id` (`pays_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`pays_id`, `pays_nom`) VALUES
(1, 'France'),
(2, 'Espagne'),
(3, 'Allmagne'),
(4, 'Russie'),
(5, 'Italie'),
(6, 'Japom');

-- --------------------------------------------------------

--
-- Structure de la table `villes`
--

DROP TABLE IF EXISTS `villes`;
CREATE TABLE IF NOT EXISTS `villes` (
  `ville_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ville_nom` varchar(15) NOT NULL,
  `ville_texte` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pays_id` int(11) NOT NULL,
  PRIMARY KEY (`ville_id`),
  UNIQUE KEY `ville_id` (`ville_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `villes`
--

INSERT INTO `villes` (`ville_id`, `ville_nom`, `ville_texte`, `pays_id`) VALUES
(1, '   Paris', 'Paris  est la commune la plus peuplée et la capitale de la France.\r\n\r\nElle se situe au cœur d\'un vaste bassin sédimentaire aux sols fertiles et au climat tempéré, le bassin parisien, sur une boucle de la Seine, entre les confluents de celle-ci avec la Marne et l\'Oise. Paris est également le chef-lieu de la région Île-de-France et le centre de la métropole du Grand Paris, créée en 2016. \r\n', 1),
(2, 'Rome', 'Rome ; en italien : Roma  est la capitale de l\'Italie. Située au centre-ouest de la péninsule italienne, près de la mer Tyrrhénienne, elle est également la capitale de la région du Latium. En 2019, elle compte 2 844 395 habitants établis sur 1 285 km2, ce qui fait d\'elle la commune la plus peuplée d\'Italie et la troisième plus étendue d\'Europe après Moscou et Londres3. Son aire urbaine recense 4 356 403 habitants en 20164,5.', 5),
(3, 'Berlin', 'Berlin  Écouter (en allemand : 3 Écouter) est la capitale4 et la plus grande ville d\'Allemagne. Institutionnellement, c’est une ville-État nommée Land de Berlin.\r\n\r\nSituée dans le Nord-Est du pays, Berlin compte environ 3,8 millions d\'habitants1. Ses habitants s\'appellent les Berlinois et les Berlinoises (die Berliner et die Berlinerinnen en allemand). Elle est la première ville et la huitième agglomération la plus peuplée de l\'Union européenne. ', 3),
(4, ' Moscou', 'Moscou  est la capitale de la Russie et compte environ 12 600 000 habitants intra muros (2017) sur une superficie de 2 510 km2, ce qui en fait la ville la plus peuplée à la fois du pays et d\'Europe. Sur le plan administratif Moscou fait partie du district fédéral central et a le statut de ville d\'importance fédérale qui lui donne le même niveau d\'autonomie que les autres sujets de la Russie. Elle est quasiment enclavée dans l\'oblast de Moscou, mais en est administrativement indépendante. Ses habitants sont les Moscovites. >', 4),
(5, 'Madrid', 'Madrid  est la capitale et la plus grande ville d\'Espagne. Située dans la partie centrale du royaume, elle est également la capitale et la ville la plus peuplée de la Communauté de Madrid. En tant que capitale d\'État, elle abrite la plupart des institutions politiques du pays, dont la résidence royale, le siège du gouvernement et le Parlement.', 2),
(6, 'Copenhague', 'Copenhague est la capitale et la plus grande ville du Danemark. La commune de Copenhague (Københavns Kommune) compte 623 404 habitants3 en 2014, et son agglomération, le Grand Copenhague, en compte 1 320 628 (janvier 2019). ', 0),
(7, 'Stockholm', 'La ville de Stockholm (Stockholms stad) ou, plus officiellement, la commune de Stockholm (Stockholms kommun) est, avec ses 962 154 habitants1, la plus peuplée des 290 municipalités suédoises. Le Grand Stockholm, qui couvre la majeure partie du Comté de Stockholm, a, lui, une population de 2 135 612 habitants1 sur une superficie de près de 6 500 km2.\r\n\r\n\r\n\r\n', 0),
(9, 'Tokyo', 'Tokio Capitale de l\'est »), anciennement Edo (江戸?), officiellement Métropole de Tokyo (東京都, Tōkyō-to?), est de facto la capitale actuelle du Japon. Elle est la plus peuplée des préfectures du Japon, avec plus de 13 831 421 habitants intra-muros en 2018 et 42 794 714 dans l\'agglomération4, et forme l\'aire urbaine la plus peuplée au monde.', 6),
(10, 'Ozaka', 'Osaka ou Ōsaka (大阪市, Ōsaka-shi?, prononcé /oː.sa.ka.ɕi/) est la troisième plus grande municipalité du Japon et le centre de la conurbation du Keihanshin (Kyoto-Kobe-Osaka), deuxième aire métropolitaine du pays tant en nombre d\'habitants qu’en PIB1.', 6);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
