-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 10 déc. 2022 à 09:12
-- Version du serveur : 5.7.40
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `best_wines`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` datetime DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `photo_article` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `association`
--

DROP TABLE IF EXISTS `association`;
CREATE TABLE IF NOT EXISTS `association` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `association_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `association`
--

INSERT INTO `association` (`id`, `association_name`) VALUES
(1, 'Viande rouge'),
(2, 'Viande blanche'),
(3, 'Crustacé'),
(4, 'Poisson'),
(5, 'Fromage et dessert');

-- --------------------------------------------------------

--
-- Structure de la table `cepage`
--

DROP TABLE IF EXISTS `cepage`;
CREATE TABLE IF NOT EXISTS `cepage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cepage_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cepage`
--

INSERT INTO `cepage` (`id`, `cepage_name`) VALUES
(1, 'Riesling'),
(2, 'Chardonnay'),
(3, 'Sauvignon blanc'),
(4, 'Pinot blanc'),
(5, 'Pinot gris'),
(6, 'Muscat blanc'),
(7, 'Gewurztraminer'),
(8, 'Cabernet-Sauvignon'),
(9, 'Pinot noir'),
(10, 'Merlot'),
(11, 'Cabernet franc'),
(12, 'Grenache');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `note` int(11) NOT NULL,
  `text_comment` text NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_sale` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_product` (`id_product`),
  KEY `id_sale` (`id_sale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
CREATE TABLE IF NOT EXISTS `invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total_price` float NOT NULL,
  `id_sale` int(11) NOT NULL,
  `id_promotion` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_sale` (`id_sale`),
  KEY `id_promotion` (`id_promotion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `order_tracking`
--

DROP TABLE IF EXISTS `order_tracking`;
CREATE TABLE IF NOT EXISTS `order_tracking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_state` varchar(255) NOT NULL,
  `id_receipt` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_receipt` (`id_receipt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `note_final` float DEFAULT NULL,
  `photo` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `alcohol_percentage` float NOT NULL,
  `id_region` int(11) DEFAULT NULL,
  `id_cepage` int(11) DEFAULT NULL,
  `id_taste` int(11) DEFAULT NULL,
  `id_association` int(11) DEFAULT NULL,
  `id_comment` int(11) DEFAULT NULL,
  `id_type` int(11) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_region` (`id_region`),
  KEY `id_cepage` (`id_cepage`),
  KEY `id_taste` (`id_taste`),
  KEY `id_association` (`id_association`),
  KEY `id_comment` (`id_comment`),
  KEY `id_type` (`id_type`)
) ENGINE=InnoDB AUTO_INCREMENT=10015 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `note_final`, `photo`, `stock`, `alcohol_percentage`, `id_region`, `id_cepage`, `id_taste`, `id_association`, `id_comment`, `id_type`, `price`) VALUES
(10007, '1er champagne', '1er champagne ajouté', NULL, 'img/champ1', 50, 16, 2, 1, 3, 5, NULL, 3, 16),
(10008, '2eme champagne ajoutÃ©', '2eme champagne ajoutÃ©', NULL, 'vin (296).png', 500, 16.5, 9, 11, 5, 2, NULL, 3, 15.99),
(10009, '15', '15', NULL, 'vin (271).png', 15, 15, 1, 1, 1, 1, NULL, 2, 15),
(10010, 'test vin blanc', 'test vin blanc', NULL, 'vin (265).png', 12, 12, 1, 1, 1, 1, NULL, 1, 12),
(10011, 'Ceci est un test', 'test', NULL, 'vin (353).png', 12, 12, 1, 1, 1, 1, NULL, 2, 12),
(10013, 'test123456789', '123654654', NULL, 'vin (315).png', 12, 12, 3, 1, 1, 1, NULL, 4, 12),
(10014, 'TEst 123', 'TEST11234564', NULL, 'vin (271).png', 15, 15, 1, 1, 1, 1, NULL, 2, 15);

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

DROP TABLE IF EXISTS `promotion`;
CREATE TABLE IF NOT EXISTS `promotion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `promotion_name` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `percentage` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

DROP TABLE IF EXISTS `region`;
CREATE TABLE IF NOT EXISTS `region` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `region_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `region`
--

INSERT INTO `region` (`id`, `region_name`) VALUES
(1, 'Auvergne-Rhône-Alpes'),
(2, 'Bourgogne-Franche-Comté'),
(3, 'Bretagne'),
(4, 'Centre-Val de Loire'),
(5, 'Corse'),
(6, 'Grand Est'),
(7, 'Hauts-de-France'),
(8, 'Île-de-France'),
(9, 'Normandie'),
(10, 'Nouvelle-Aquitaine'),
(11, 'Occitanie'),
(12, 'Pays de la Loire'),
(13, 'Provence-Alpes-Côte d\'Azur');

-- --------------------------------------------------------

--
-- Structure de la table `sale`
--

DROP TABLE IF EXISTS `sale`;
CREATE TABLE IF NOT EXISTS `sale` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `price_total_product` float DEFAULT NULL,
  `quantity_total_sold` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_product` (`id_product`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sale`
--

INSERT INTO `sale` (`id`, `id_product`, `id_user`, `quantity`, `price_total_product`, `quantity_total_sold`) VALUES
(1, 10007, 1, 15, 15, 15),
(3, 10007, NULL, 25, 25, 40);

-- --------------------------------------------------------

--
-- Structure de la table `taste`
--

DROP TABLE IF EXISTS `taste`;
CREATE TABLE IF NOT EXISTS `taste` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `taste_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `taste`
--

INSERT INTO `taste` (`id`, `taste_name`) VALUES
(1, 'Fruité et charnu'),
(2, 'Fruité et frais'),
(3, 'Fruité et léger'),
(4, 'Puissant'),
(5, 'Riche et puissant'),
(6, 'Riche et rond');

-- --------------------------------------------------------

--
-- Structure de la table `type_product`
--

DROP TABLE IF EXISTS `type_product`;
CREATE TABLE IF NOT EXISTS `type_product` (
  `id_type` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(250) NOT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type_product`
--

INSERT INTO `type_product` (`id_type`, `type_name`) VALUES
(1, 'Blanc'),
(2, 'Rouge'),
(3, 'Champagne'),
(4, 'Coffrets');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `is_employee` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `is_admin`, `is_employee`) VALUES
(1, 'test123@test123.Fr', '$argon2id$v=19$m=65536,t=4,p=1$ZU1KdVEyVkdkMFdzTmhDVg$o0ErI4Vljtp4/yrQp3GJ6VTw1VdYlusXT9J+I2wlFRY', 0, 0),
(2, 'jdousse@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$ZXJJV2gweGdURUY4MUFBcg$82Dw9icknwf6FI1e1Jev9RddhaafJuy5AHfDrpIbA2Y', 0, 0);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id_sale`) REFERENCES `sale` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`id_sale`) REFERENCES `sale` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `invoice_ibfk_2` FOREIGN KEY (`id_promotion`) REFERENCES `promotion` (`id`);

--
-- Contraintes pour la table `order_tracking`
--
ALTER TABLE `order_tracking`
  ADD CONSTRAINT `order_tracking_ibfk_1` FOREIGN KEY (`id_receipt`) REFERENCES `invoice` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_region`) REFERENCES `region` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`id_association`) REFERENCES `association` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`id_cepage`) REFERENCES `cepage` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_4` FOREIGN KEY (`id_comment`) REFERENCES `comment` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_5` FOREIGN KEY (`id_taste`) REFERENCES `taste` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_6` FOREIGN KEY (`id_type`) REFERENCES `type_product` (`id_type`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `sale`
--
ALTER TABLE `sale`
  ADD CONSTRAINT `sale_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sale_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
