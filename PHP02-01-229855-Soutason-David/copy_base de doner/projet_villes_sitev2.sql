-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 13 août 2021 à 12:16
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
-- Base de données :  `projet_villes_sitev2`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin_user`
--

DROP TABLE IF EXISTS `admin_user`;
CREATE TABLE IF NOT EXISTS `admin_user` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_nom` varchar(20) NOT NULL,
  `admin_prenom` varchar(20) NOT NULL,
  `admin_pseudo` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `admin_loging` varchar(55) NOT NULL,
  `admin_password` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `admin_id` (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `admin_user`
--

INSERT INTO `admin_user` (`admin_id`, `admin_nom`, `admin_prenom`, `admin_pseudo`, `admin_loging`, `admin_password`) VALUES
(1, 'teste2', 'teste2', 'teste2', 'teste2@gmail.com', '96a62ca98bdec7f55343f8cfa594379bdba76cc9'),
(2, 'teste3', 'teste3', 'teste3', 'teste3@gmail.com', '5458cb00631fc6748f9d3a52cf6c22ae9b232e91');

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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`pays_id`, `pays_nom`) VALUES
(1, 'France'),
(2, 'Espagne'),
(3, 'Allmagne'),
(4, 'Russie'),
(5, 'Italie'),
(6, 'Japon'),
(7, 'Danemark'),
(8, 'Suède'),
(9, 'Chine'),
(11, 'suise');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` tinyint(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `user_loging` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `user_password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `users_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`user_id`, `nom`, `prenom`, `pseudo`, `user_loging`, `user_password`) VALUES
(1, 'soutarson', 'david', 'davidS', 'triplaxs@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964'),
(2, 'teste1', 'teste1', 'teste1', 'teste@gmail.com', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2'),
(3, 'teste3', 'teste3', 'teste3evoiyer', 'teste3@gmail.com', '5458cb00631fc6748f9d3a52cf6c22ae9b232e91'),
(4, 'david22', 'david22', 'david22', 'david22@gmail.com', '2e0ffebc6114206063af01ab6335d38bbe9b0ec1');

-- --------------------------------------------------------

--
-- Structure de la table `user_searchs_pays`
--

DROP TABLE IF EXISTS `user_searchs_pays`;
CREATE TABLE IF NOT EXISTS `user_searchs_pays` (
  `user_searchs_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `pays_id` int(11) NOT NULL,
  PRIMARY KEY (`user_searchs_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='stocke les  id ville, pays ,user d''une user recherche valide';

--
-- Déchargement des données de la table `user_searchs_pays`
--

INSERT INTO `user_searchs_pays` (`user_searchs_id`, `user_id`, `pays_id`) VALUES
(1, 4, 8),
(2, 4, 11),
(3, 1, 1),
(4, 1, 5),
(5, 1, 4),
(6, 1, 6);

-- --------------------------------------------------------

--
-- Structure de la table `user_searchs_ville`
--

DROP TABLE IF EXISTS `user_searchs_ville`;
CREATE TABLE IF NOT EXISTS `user_searchs_ville` (
  `user_searchs_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `ville_id` int(11) NOT NULL,
  PRIMARY KEY (`user_searchs_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='stocke les  id ville, pays ,user d''une user recherche valide';

--
-- Déchargement des données de la table `user_searchs_ville`
--

INSERT INTO `user_searchs_ville` (`user_searchs_id`, `user_id`, `ville_id`) VALUES
(1, 4, 8),
(2, 1, 1),
(3, 1, 5),
(4, 1, 2),
(5, 1, 7);

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
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `villes`
--

INSERT INTO `villes` (`ville_id`, `ville_nom`, `ville_texte`, `pays_id`) VALUES
(1, 'Paris', 'Paris, capitale de la France, est une grande ville européenne et un centre mondial de l\'art, de la mode, de la gastronomie et de la culture. Son paysage urbain du XIXe siècle est traversé par de larges boulevards et la Seine. Outre les monuments comme la tour Eiffel et la cathédrale gothique Notre-Dame du XIIe siècle, la ville est réputée pour ses cafés et ses boutiques de luxe bordant la rue du Faubourg-Saint-Honoré', 1),
(2, 'Moscou', 'Moscou, sur la Moskva à l\'ouest de la Russie, est la capitale cosmopolite du pays. Son centre historique est le Kremlin, résidence du Président et complexe abritant les trésors des tsars dans l\'Armurerie. À l\'extérieur, la place Rouge est le centre symbolique de la Russie. Le mausolée de Lénine, le Musée historique d\'État et sa vaste collection, et la cathédrale Saint-Basile-le-Bienheureux, célèbre pour ses clochers à bulbe colorés, y sont implantés', 4),
(3, 'Madrid', 'Située au centre de l\'Espagne, Madrid, sa capitale, est une ville dotée d\'élégants boulevards et de vastes parcs très bien entretenus comme le Retiro. Elle est réputée pour ses riches collections d\'œuvres d\'art européennes, avec notamment celles du musée du Prado, réalisées par Goya, Velázquez et d\'autres maîtres espagnols. Au cœur de la vieille Madrid des Habsbourgs se trouve la Plaza Mayor, bordée de portiques, et, à proximité, le Palais royal baroque et son Armurerie, qui comporte des armes historiques', 2),
(4, 'Berlin', 'La capitale allemande, Berlin, est née au XIIIe siècle. Le Mémorial de l’Holocauste et les pans restants du mur de Berlin, sur lesquels des graffitis ont été peints, témoignent de son passé tumultueux. Divisé en deux pendant la guerre froide, le pays a adopté la porte de Brandebourg du XVIIIe siècle comme symbole de sa réunification. La ville est aussi réputée pour sa scène artistique et ses monuments modernes, comme la Philharmonie de Berlin, un bâtiment doré construit en 1963 dont le toit présente une forme géométrique particulière', 3),
(5, 'Rome', 'Capitale de l\'Italie, Rome est une grande ville cosmopolite dont l\'art, l\'architecture et la culture de presque 3 000 ans rayonnent dans le monde entier. Ses ruines telles que celles du Forum Romain et du Colisée évoquent la puissance de l\'ancien Empire romain. Siège de l\'Église catholique romaine, la Cité du Vatican compte la basilique Saint-Pierre et les musées du Vatican où se trouvent des chefs-d\'œuvre tels que la fresque de la chapelle Sixtine, peinte par Michel-Ange', 5),
(6, 'Copenhague', 'Copenhague, la capitale du Danemark, se trouve sur les îles côtières de Seeland et Amager. Elle est reliée à Malmö, au sud de la Suède, par le pont de l’Øresund. Le centre historique de la ville, Indre By, contient un quartier du XVIIIe siècle de style rococo appelé Frederiksstaden : c’est ici que l’on trouve le palais d’Amalienborg, résidence de la famille royale. À quelques pas de là se tiennent les châteaux de Christiansborg et de Rosenborg. C\'est dans ce dernier, entouré de jardins, que sont conservés les joyaux de la couronne.', 7),
(7, 'Tokio', 'Capitale animée du Japon, Tokyo associe les styles ultramodernes et traditionnels, dans un mélange de gratte-ciel aux néons lumineux et de temples anciens. Le somptueux Meiji-jingū est un sanctuaire shinto réputé pour son entrée imposante et les bois qui l\'environnent. Le palais impérial est entouré de vastes jardins publics. Les nombreux musées de la ville proposent des expositions allant de l\'art classique, au musée national de Tokyo, à un théâtre kabuki reconstruit, au musée d\'Edo-Tokyo', 6),
(8, 'Stockholm', 'Stockholm, la capitale de la Suède, est située sur un vaste archipel de la mer Baltique, comprenant 14 îles et plus de 50 ponts. Les rues pavées et les bâtiments de couleur ocre de Gamla stan (la vieille ville) abritent la cathédrale de Storkyrkan du XIIIe siècle, le palais royal de Stockholm et le musée Nobel, consacré au prix Nobel. Des ferries et des bateaux de tourisme transportent les passagers entre', 8),
(9, 'lozane', 'Fance', 1),
(17, 'lozane-suise', 'exit en fr et en suice', 11);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `user`
--
ALTER TABLE `user` ADD FULLTEXT KEY `user_login` (`user_loging`,`user_password`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
