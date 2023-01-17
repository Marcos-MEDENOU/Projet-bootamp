-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 15, 2023 at 11:35 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electrobest_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `shop_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_quantity` int NOT NULL,
  `shop_image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` int NOT NULL,
  `username` char(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `useremail` char(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `contactNumber` bigint NOT NULL,
  `password` varchar(200) NOT NULL,
  `user_role` enum('customer','admin') NOT NULL DEFAULT 'customer',
  `user_picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `username`, `useremail`, `contactNumber`, `password`, `user_role`, `user_picture`) VALUES
(75, 'momo', 'momo@gmail.com', 96451235, '$2y$10$Ak9JWYb2ivhF5rTI8Z/3J.XV.ESxzdESMVxHoKFUX0KrLz.5KQtyK', 'customer', 'jk.png'),
(77, 'Geoffroy OTEGBEYE', 'geoffroy@gmail.com', 61231873, '$2y$10$i2Il3f1uzaf8XQlk5/3Q8.ec72ClN5Yd6RReWc0sXG4G6C.k3r3VW', 'customer', 'jk.png'),
(79, 'Marcos MEDENOU', 'marcosmedenou@gmail.com', 96103161, '$2y$10$r62k0ivzGnf0WJr01K3VeO9oQpo.eJ7C3XYcpG65cvwtGEd13SPlq', 'customer', 'jk.png');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int NOT NULL,
  `product_reference` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_category` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` int NOT NULL,
  `product_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_reference`, `product_name`, `product_category`, `product_price`, `product_description`, `product_image`) VALUES
(42, 'Ref. produit1', 'arduino', 'Carte électronique', 653, '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro rem dolorum voluptates! Dolor, odit quo! Rem officia ea, optio perspiciatis sunt nam modi, dolores veritatis harum, nostrum suscipit totam incidunt!\r\n', 'arduino.jpg'),
(43, 'Ref. produit2', 'arduino nano', 'Carte électronique', 784, '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro rem dolorum voluptates! Dolor, odit quo! Rem officia ea, optio perspiciatis sunt nam modi, dolores veritatis harum, nostrum suscipit totam incidunt!\r\n', 'arduino-nano.webp'),
(44, 'Ref. produit3', 'Condensateur', 'Composants électronique', 10, '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro rem dolorum voluptates! Dolor, odit quo! Rem officia ea, optio perspiciatis sunt nam modi, dolores veritatis harum, nostrum suscipit totam incidunt!\r\n', 'condo2.webp'),
(45, 'Ref. produit4', 'Multimetre', 'Appareil de mesure', 74, '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro rem dolorum voluptates! Dolor, odit quo! Rem officia ea, optio perspiciatis sunt nam modi, dolores veritatis harum, nostrum suscipit totam incidunt!\r\n', 'multimeter3.webp'),
(51, 'Ref. produit5', 'arduino', 'Carte électronique', 47, '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro rem dolorum voluptates! Dolor, odit quo! Rem officia ea, optio perspiciatis sunt nam modi, dolores veritatis harum, nostrum suscipit totam incidunt!\r\n', 'arduino-mega16.webp'),
(52, 'Ref. produit5', 'arduino', 'Carte électronique', 47, '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro rem dolorum voluptates! Dolor, odit quo! Rem officia ea, optio perspiciatis sunt nam modi, dolores veritatis harum, nostrum suscipit totam incidunt!\r\n', 'He661a716732046dead81d6309872ff9eZ.jpg_720x720q50.jpg'),
(53, 'Ref. produit7', 'arduino', 'Carte électronique', 47, '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro rem dolorum voluptates! Dolor, odit quo! Rem officia ea, optio perspiciatis sunt nam modi, dolores veritatis harum, nostrum suscipit totam incidunt!\r\n', 'Hfe5abe3431774e0088036cb2a880899aW.jpg_720x720q50.jpg'),
(57, 'Ref. produit10', 'raspberry', 'Carte électronique', 74, '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro rem dolorum voluptates! Dolor, odit quo! Rem officia ea, optio perspiciatis sunt nam modi, dolores veritatis harum, nostrum suscipit totam incidunt!\r\n', 'H1eb5b5ee42fe4afb9137176f9f5463f4g.jpg_720x720q50.jpg'),
(59, 'Ref. produit10', 'arduino', 'Carte électronique', 74, '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro rem dolorum voluptates! Dolor, odit quo! Rem officia ea, optio perspiciatis sunt nam modi, dolores veritatis harum, nostrum suscipit totam incidunt!\r\n', 'arduino-mega12.webp'),
(61, 'Ref. produit10', 'arduino', 'Carte électronique', 47, '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro rem dolorum voluptates! Dolor, odit quo! Rem officia ea, optio perspiciatis sunt nam modi, dolores veritatis harum, nostrum suscipit totam incidunt!\r\n', 'arduino-mega2.webp'),
(62, 'Ref. produit11', 'fer a souder', 'Kit électronique', 103, '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro rem dolorum voluptates! Dolor, odit quo! Rem officia ea, optio perspiciatis sunt nam modi, dolores veritatis harum, nostrum suscipit totam incidunt!\r\n', 'fer a souder.png'),
(63, 'Ref. produit12', 'pince électronique', 'Kit électronique', 41, '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro rem dolorum voluptates! Dolor, odit quo! Rem officia ea, optio perspiciatis sunt nam modi, dolores veritatis harum, nostrum suscipit totam incidunt!\r\n', 'pince electronique.png'),
(64, 'Ref. produit12', 'pince électronique', 'Kit électronique', 41, '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro rem dolorum voluptates! Dolor, odit quo! Rem officia ea, optio perspiciatis sunt nam modi, dolores veritatis harum, nostrum suscipit totam incidunt!\r\n', 'kisspng-spanners-hand-tool-diy-store-mayonaise-5b2308765f1580.1001133915290225823895.png'),
(65, 'Ref. produit12', 'pince électronique', 'Kit électronique', 41, '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro rem dolorum voluptates! Dolor, odit quo! Rem officia ea, optio perspiciatis sunt nam modi, dolores veritatis harum, nostrum suscipit totam incidunt!\r\n', 'jk.png'),
(66, 'Ref. produit12', 'pince électronique', 'Kit électronique', 41, '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro rem dolorum voluptates! Dolor, odit quo! Rem officia ea, optio perspiciatis sunt nam modi, dolores veritatis harum, nostrum suscipit totam incidunt!\r\n', 'composants.jpg'),
(67, 'Ref. produit12', 'pince électronique', 'Kit électronique', 41, '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro rem dolorum voluptates! Dolor, odit quo! Rem officia ea, optio perspiciatis sunt nam modi, dolores veritatis harum, nostrum suscipit totam incidunt!\r\n', 'kit1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `unique_email` (`useremail`),
  ADD UNIQUE KEY `unique_no` (`contactNumber`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
