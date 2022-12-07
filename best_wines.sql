-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 07 déc. 2022 à 12:21
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.0.25

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

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `association`
--

CREATE TABLE `association` (
  `id` int(11) NOT NULL,
  `association_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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

CREATE TABLE `cepage` (
  `id` int(11) NOT NULL,
  `cepage_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `note` int(11) NOT NULL,
  `text_comment` text NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_sale` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `total_price` float NOT NULL,
  `id_sale` int(11) NOT NULL,
  `id_promotion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `order_tracking`
--

CREATE TABLE `order_tracking` (
  `id` int(11) NOT NULL,
  `order_state` varchar(255) NOT NULL,
  `id_receipt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
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
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `note_final`, `photo`, `stock`, `alcohol_percentage`, `id_region`, `id_cepage`, `id_taste`, `id_association`, `id_comment`, `id_type`, `price`) VALUES
(10001, '1er vin', 'Ceci est notre premier vin', NULL, 'files/vin1.jpg', 40, 20, 5, 4, 4, 4, NULL, 4, 15),
(10003, '1er vin rouge', '1er vin rouge ajouté', NULL, 'img/rouge1', 20, 12, 10, 9, 2, 3, NULL, 2, 12),
(10004, '2eme vin rouge', '2eme vin rouge ajouté', NULL, 'img/vinrouge2', 1, 15, 11, 10, 2, 2, NULL, 2, 8),
(10005, '1er vin blanc', '1er vin blanc ajouté', NULL, 'img/vinblanc1', 456, 18, 1, 11, 6, 5, NULL, 1, 18),
(10006, '2eme vin blanc', '2eme vin blanc ajouté', NULL, 'img/vinblanc2', 5, 12, 5, 6, 5, 3, NULL, 1, 9.99),
(10007, '1er champagne', '1er champagne ajouté', NULL, 'img/champ1', 50, 16, 2, 1, 3, 5, NULL, 3, 16),
(10008, '2eme champagne', '2eme champagne ajouté', NULL, 'img/champ2', 900, 12.5, 9, 11, 5, 2, NULL, 3, 11.99);

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

CREATE TABLE `promotion` (
  `id` int(11) NOT NULL,
  `promotion_name` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `percentage` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

CREATE TABLE `region` (
  `id` int(11) NOT NULL,
  `region_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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

CREATE TABLE `sale` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `quantity_sold` int(11) NOT NULL,
  `price_total_product` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `taste`
--

CREATE TABLE `taste` (
  `id` int(11) NOT NULL,
  `taste_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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

CREATE TABLE `type_product` (
  `id_type` int(11) NOT NULL,
  `type_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `type_product`
--

INSERT INTO `type_product` (`id_type`, `type_name`) VALUES
(1, 'white'),
(2, 'red'),
(3, 'champagne'),
(4, 'box');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `is_employee` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `is_admin`, `is_employee`) VALUES
(1, 'test123@test123.Fr', '$argon2id$v=19$m=65536,t=4,p=1$ZU1KdVEyVkdkMFdzTmhDVg$o0ErI4Vljtp4/yrQp3GJ6VTw1VdYlusXT9J+I2wlFRY', 0, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `association`
--
ALTER TABLE `association`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cepage`
--
ALTER TABLE `cepage`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_sale` (`id_sale`);

--
-- Index pour la table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sale` (`id_sale`),
  ADD KEY `id_promotion` (`id_promotion`);

--
-- Index pour la table `order_tracking`
--
ALTER TABLE `order_tracking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_receipt` (`id_receipt`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_region` (`id_region`),
  ADD KEY `id_cepage` (`id_cepage`),
  ADD KEY `id_taste` (`id_taste`),
  ADD KEY `id_association` (`id_association`),
  ADD KEY `id_comment` (`id_comment`),
  ADD KEY `id_type` (`id_type`);

--
-- Index pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `taste`
--
ALTER TABLE `taste`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type_product`
--
ALTER TABLE `type_product`
  ADD PRIMARY KEY (`id_type`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `association`
--
ALTER TABLE `association`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `cepage`
--
ALTER TABLE `cepage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `order_tracking`
--
ALTER TABLE `order_tracking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10009;

--
-- AUTO_INCREMENT pour la table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `sale`
--
ALTER TABLE `sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `taste`
--
ALTER TABLE `taste`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `type_product`
--
ALTER TABLE `type_product`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
