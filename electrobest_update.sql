-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 19 jan. 2023 à 21:28
-- Version du serveur : 5.7.33
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `electrobest_project`
--

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `product_name`, `product_price`, `product_quantity`, `product_image`) VALUES
(316, 84, 42, 'arduino', 653, 1, 'arduino.jpg'),
(317, 84, 42, 'arduino', 653, 1, 'arduino.jpg'),
(318, 84, 43, 'arduino nano', 784, 1, 'arduino-nano.webp'),
(319, 85, 42, 'arduino', 653, 1, 'arduino.jpg'),
(320, 87, 43, 'Multimetre', 784, 3, 'multimeter3.webp'),
(321, 87, 43, 'arduino nano', 784, 1, 'arduino-nano.webp');

-- --------------------------------------------------------

--
-- Structure de la table `customer`
--

CREATE TABLE `customer` (
  `cid` int(11) NOT NULL,
  `username` char(20) NOT NULL,
  `useremail` char(30) NOT NULL,
  `contactNumber` bigint(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `user_role` enum('customer','admin') NOT NULL DEFAULT 'customer',
  `user_picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `customer`
--

INSERT INTO `customer` (`cid`, `username`, `useremail`, `contactNumber`, `password`, `user_role`, `user_picture`) VALUES
(82, 'marcosmedenou', 'marcosmedenou@gmail.com', 96103161, '$2y$10$mNwrEjR.sEGYS2eEfMGDvuNiWoXXHGF./frj0utpAq0xJerZ9aRse', 'admin', 'avatar.jpg'),
(84, 'moisemedenou', 'moisemedenou@gmail.com', 94969244, '$2y$10$4inIjWXwWJ0NnDVcfMLHxuISAk2kJLbyqKPhe7/bTB3Ra8AN0K7AK', 'customer', 'avatar.jpg'),
(85, 'majomedenou', 'majomedenou@gmail.com', 94969245, '$2y$10$jn.WhRl1y6SJRqApDHEkZuSswCTThajCz7zZkIGcOpYFRF7YfF4wW', 'customer', 'avatar.jpg'),
(86, 'jacques', 'jacques@gmail.com', 56495561, '$2y$10$quBXxDxXWyMo9FI5hn/IS.PkjxZKUoX/.z2LvE98k2o89Vs1ibx7C', 'customer', 'avatar.jpg'),
(87, 'momo', 'momo@gmail.com', 45564641564, '$2y$10$JkOw4vw4dFqhhs9sTSYCFuJgMLr8g0jICCSI0RM5cOq7dKMjvb7LO', 'customer', 'avatar.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_reference` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`product_id`, `product_reference`, `product_name`, `product_category`, `product_price`, `product_description`, `product_image`) VALUES
(42, 'Ref. produit1', 'arduino', 'Carte électronique', 653, '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro rem dolorum voluptates! Dolor, odit quo! Rem officia ea, optio perspiciatis sunt nam modi, dolores veritatis harum, nostrum suscipit totam incidunt!\r\n', 'arduino.jpg'),
(43, 'Ref. produit2', 'arduino nano', 'Carte électronique', 784, '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro rem dolorum voluptates! Dolor, odit quo! Rem officia ea, optio perspiciatis sunt nam modi, dolores veritatis harum, nostrum suscipit totam incidunt!\r\n', 'arduino-nano.webp'),
(44, 'Ref. produit3', 'Condensateur', 'Composants électronique', 10, '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro rem dolorum voluptates! Dolor, odit quo! Rem officia ea, optio perspiciatis sunt nam modi, dolores veritatis harum, nostrum suscipit totam incidunt!\r\n', 'condo2.webp'),
(45, 'Ref. produit4', 'Multimetre', 'Appareil de mesure', 74, '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro rem dolorum voluptates! Dolor, odit quo! Rem officia ea, optio perspiciatis sunt nam modi, dolores veritatis harum, nostrum suscipit totam incidunt!\r\n', 'multimeter3.webp'),
(57, 'Ref. produit10', 'raspberry', 'Carte électronique', 74, '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro rem dolorum voluptates! Dolor, odit quo! Rem officia ea, optio perspiciatis sunt nam modi, dolores veritatis harum, nostrum suscipit totam incidunt!\r\n', 'H1eb5b5ee42fe4afb9137176f9f5463f4g.jpg_720x720q50.jpg'),
(62, 'Ref. produit11', 'fer a souder', 'Kit électronique', 103, '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro rem dolorum voluptates! Dolor, odit quo! Rem officia ea, optio perspiciatis sunt nam modi, dolores veritatis harum, nostrum suscipit totam incidunt!\r\n', 'fer a souder.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `unique_email` (`useremail`),
  ADD UNIQUE KEY `unique_no` (`contactNumber`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=322;

--
-- AUTO_INCREMENT pour la table `customer`
--
ALTER TABLE `customer`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
