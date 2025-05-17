-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2025 at 05:55 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jjhealthcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `AddressID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Street` varchar(255) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Apartment` varchar(100) NOT NULL,
  `ZipCode` varchar(20) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `PhoneNumber` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`AddressID`, `UserID`, `Street`, `City`, `Apartment`, `ZipCode`, `Country`, `PhoneNumber`) VALUES
(2, 1, 'plateau road', 'goodlands', '', '30416', 'mauritius', '58308521');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `CategoryID` int(11) NOT NULL,
  `Brand` varchar(50) NOT NULL,
  `CategoryName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CategoryID`, `Brand`, `CategoryName`) VALUES
(1, 'Amaeyya', 'Skincare'),
(2, 'Amaeyya', 'Face'),
(3, 'Amaeyya', 'Lips'),
(4, 'Amaeyya', 'Eyes'),
(5, 'Amaeyya', 'Hair Care'),
(6, 'Amaeyya', 'Body Care'),
(7, 'Amaeyya', 'Nails'),
(8, 'Prohall', 'Shampoos'),
(9, 'Prohall', 'Conditioners'),
(10, 'Prohall', 'Hair Masks'),
(11, 'Prohall', 'Leave-Ins, Sprays & Oils'),
(12, 'Prohall', 'Hair Supplements'),
(13, 'Prohall', 'Hair Treatments '),
(14, 'Prohall', 'Hair Color '),
(15, 'Prohall', 'Bleaching');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` int(11) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `ProductName` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Price` int(11) NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `CategoryID`, `ProductName`, `Description`, `Price`, `Image`) VALUES
(1, 8, 'Select One 1lt', 'Introducing Select One Prohall, a luxurious Brazilian keratin hair treatment for all hair types. Our formaldehyde-free formula reduces frizz and volume, leaving your hair looking sleek, smooth, and easy to manage. The treatment nourishes hair fibers from within, providing up to six months of softness, shine, and durability. Enjoy salon-quality results in the comfort of your own home with our user-friendly and gentle keratin treatment enriched with the Lumini System and Coconut Oil.', 3385, 'img/product/Cópia de select-one-1-litro.jpg'),
(2, 8, 'Select One 300ml', 'Introducing Select One Prohall, a luxurious Brazilian keratin hair treatment for all hair types. Our formaldehyde-free formula reduces frizz and volume, leaving your hair looking sleek, smooth, and easy to manage. The treatment nourishes hair fibers from within, providing up to six months of softness, shine, and durability. Enjoy salon-quality results in the comfort of your own home with our user-friendly and gentle keratin treatment enriched with the Lumini System and Coconut Oil.', 1230, 'img/product/Cópia de select-one-300.jpg'),
(3, 8, 'Shampoo Miracle Therapy 500ml', 'N/A', 1510, 'img/product/Cópia de miracle-therapy-2.jpg'),
(4, 8, 'Shampoo Biomask 1lt', 'Biomask moisture mask is a highly moisturizing product that treats dry and dull hair. Returning the hair natural moisture leaves them softer, suppler, healthier, and brighter.', 1420, 'img/product/Cópia de shampoo-biomask-1l.jpg'),
(6, 8, 'Shampoo Biomask 300ml', 'Biomask moisture mask is a highly moisturizing product that treats dry and dull hair. Returning the hair natural moisture leaves them softer, suppler, healthier, and brighter.', 620, 'img/product/Cópia de shampoo-biomask-300.jpg'),
(7, 8, 'Shampoo Extreme Repair 1lt', 'The Home Care Macadâmia Extreme Repair Shampoo nourishes and repairs hair fiber with its highly nutritious properties. It contains Hydrolyzed Collagen and Macadamia Oil, which work together to recover severe damage to hair fiber and replace lost nutrients. This shampoo is a great option for hair recovery after chemical treatments or external aggressions.', 1860, 'img/product/Cópia de shampoo-extreme-repair-1l.jpg'),
(8, 8, 'Shampoo Select Care 1lt', 'Select Care Shampoo 1L provides   gentle cleaning and enhances the alignment of straight hair. Rich in moisturizing properties, the product sanitizes the hair perimeter without compromising the hydration of the hair, preserving its softness, movement and shine. Its difference lies precisely in this emollient action, which maintains the aligned appearance of the hair and leaves its structure free from frizz, roughness, split ends and other signs of dryness.', 1420, 'img/product/Cópia de shampoo-select-care-litro.jpg'),
(9, 8, 'Shampoo Select Care 300ml', 'Select Care Shampoo 1L provides   gentle cleaning and enhances the alignment of straight hair. Rich in moisturizing properties, the product sanitizes the hair perimeter without compromising the hydration of the hair, preserving its softness, movement and shine. Its difference lies precisely in this emollient action, which maintains the aligned appearance of the hair and leaves its structure free from frizz, roughness, split ends and other signs of dryness.', 620, 'img/product/Cópia de shampoo-select-care.jpg'),
(10, 8, 'Shampoo Force Hair 500ml', 'Force Hair Fortifying Shampoo deeply   cleans the entire hair perimeter and contributes to the growth and strengthening of locks. Enriched with highly antioxidant properties, the product is capable of delaying damage caused by free radicals and, thus, promoting hair rejuvenation.', 1580, 'img/product/Cópia de shampoo-force-hair.jpg'),
(11, 8, 'Shampoo Twist Curls 300ml', 'Low Poo Cachos Shampoo guarantees   complete cleaning of the scalp without interfering with the balance of the cuticles. Its gentle formula is responsible for sanitizing curly strands and preparing them for subsequent treatments. In addition, the product also helps hydrate and define curls, giving much more vitality to the hair. Developed especially for Low Poo techniques, Curls Shampoo is ideal for anyone looking for nourished, silky and defined curls.', 620, 'img/product/Cópia de shampoo-twist-cachos.jpg'),
(12, 8, 'Shampoo All Blond 300ml', 'All Blond Shampoo gently   cleanses the scalp and prepares blonde hair for subsequent treatments. Its light, nutrient-rich formula is responsible for reducing signs of dryness and softening damage caused by free radicals, offering much more strength and vitality to blonde hair. Furthermore, its technology is also capable of promoting healthy growth, as it stimulates blood flow to the scalp and promotes the development of hair bulbs.', 620, 'img/product/Cópia de shampoo-all-blond.jpg'),
(13, 8, 'Shampoo Plex 500ml', 'Moisturizing, antioxidant and anti-rubber action!The Plex Shampoo formula is developed from three main ingredients: Palm Oil, Vitamin E and Amino Complex.While Vitamin E and Palm Oil act directly on hydrating and nourishing the hair, the Amino Complex, in turn, has an anti-rubber action and rebalances the elasticity of the hair, helping to repair the damage caused by the coloring method.', 950, 'img/product/Cópia de shampoo-plex.jpg'),
(14, 9, 'Conditioner Biomask 1lt', 'Biomask moisture mask is a highly moisturizing product that treats dry and dull hair. Returning the hair\'s natural moisture leaves them softer, suppler, healthier, and brighter.', 1420, 'img/product/Cópia de condicioandor-biomask-1l.jpg'),
(15, 9, 'Conditioner Biomask 300ml', 'Biomask moisture mask is a highly moisturizing product that treats dry and dull hair. Returning the hair\'s natural moisture leaves them softer, suppler, healthier, and brighter.', 620, 'img/product/Cópia de condicionador-biomask-300.jpg'),
(16, 9, 'Conditioner Extreme Repair 1lt', 'The Home Care Macadâmia Extreme Repair Shampoo nourishes and repairs hair fiber with its highly nutritious properties. It contains Hydrolyzed Collagen and Macadamia Oil, which work together to recover severe damage to hair fiber and replace lost nutrients. This shampoo is a great option for hair recovery after chemical treatments or external aggressions.', 1860, 'img/product/Cópia de condicionador-extreme-repair-1l.jpg'),
(17, 9, 'Conditioner Extreme Repair 300ml', 'The Home Care Macadâmia Extreme Repair Shampoo nourishes and repairs hair fiber with its highly nutritious properties. It contains Hydrolyzed Collagen and Macadamia Oil, which work together to recover severe damage to hair fiber and replace lost nutrients. This shampoo is a great option for hair recovery after chemical treatments or external aggressions.', 1060, 'img/product/Cópia de condicionador-extreme-repair.jpg'),
(18, 9, 'Conditioner Select Care 1lt', 'Select Care Shampoo 1L provides   gentle cleaning and enhances the alignment of straight hair. Rich in moisturizing properties, the product sanitizes the hair perimeter without compromising the hydration of the hair, preserving its softness, movement and shine. Its difference lies precisely in this emollient action, which maintains the aligned appearance of the hair and leaves its structure free from frizz, roughness, split ends and other signs of dryness.', 1420, 'img/product/Cópia de condicionador-select-care-litro.jpg'),
(19, 9, 'Conditioner Select Care 300ml', 'Select Care Shampoo 1L provides   gentle cleaning and enhances the alignment of straight hair. Rich in moisturizing properties, the product sanitizes the hair perimeter without compromising the hydration of the hair, preserving its softness, movement and shine. Its difference lies precisely in this emollient action, which maintains the aligned appearance of the hair and leaves its structure free from frizz, roughness, split ends and other signs of dryness.', 620, 'img/product/Cópia de condicionador-select-care.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `FirstName`, `LastName`, `Email`, `Password`) VALUES
(1, 'sheefah', 'chamroo', 'sheefah_chamroo@hotmail.com', '8A9hRSenOh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`AddressID`),
  ADD KEY `userid` (`UserID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `categoryid` (`CategoryID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `AddressID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `userid` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `categoryid` FOREIGN KEY (`CategoryID`) REFERENCES `categories` (`CategoryID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
