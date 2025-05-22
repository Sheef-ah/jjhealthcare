-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2025 at 12:00 PM
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
(19, 9, 'Conditioner Select Care 300ml', 'Select Care Shampoo 1L provides   gentle cleaning and enhances the alignment of straight hair. Rich in moisturizing properties, the product sanitizes the hair perimeter without compromising the hydration of the hair, preserving its softness, movement and shine. Its difference lies precisely in this emollient action, which maintains the aligned appearance of the hair and leaves its structure free from frizz, roughness, split ends and other signs of dryness.', 620, 'img/product/Cópia de condicionador-select-care.jpg'),
(20, 10, 'Mask Biomask 500g', 'Biomask moisture mask is a highly moisturizing product that treats dry and dull hair. Returning the hair\'s natural moisture leaves them softer, suppler, healthier, and brighter.\r\n', 1045, 'img/product/Cópia de biomask-mascara.jpg'),
(21, 10, 'Mask Biomask 300g', 'Biomask moisture mask is a highly moisturizing product that treats dry and dull hair. Returning the hair\'s natural moisture leaves them softer, suppler, healthier, and brighter.\r\n', 670, 'img/product/Cópia de masc-biomask-300.jpg'),
(22, 10, 'Mask Extreme Repair 500g', 'The Home Care Macadâmia Extreme Repair Shampoo nourishes and repairs hair fiber with its highly nutritious properties. It contains Hydrolyzed Collagen and Macadamia Oil, which work together to recover severe damage to hair fiber and replace lost nutrients. This shampoo is a great option for hair recovery after chemical treatments or external aggressions.\r\n', 1045, 'img/product/Cópia de extreme-repair-mascara.jpg'),
(23, 10, 'Mask Extreme Repair 300g', 'The Home Care Macadâmia Extreme Repair Shampoo nourishes and repairs hair fiber with its highly nutritious properties. It contains Hydrolyzed Collagen and Macadamia Oil, which work together to recover severe damage to hair fiber and replace lost nutrients. This shampoo is a great option for hair recovery after chemical treatments or external aggressions.\r\n', 1110, 'img/product/Cópia de mascara-extreme-repair.jpg'),
(24, 10, 'Mask Select Care 500g', 'Select Care Shampoo 1L provides   gentle cleaning and enhances the alignment of straight hair. Rich in moisturizing properties, the product sanitizes the hair perimeter without compromising the hydration of the hair, preserving its softness, movement and shine. Its difference lies precisely in this emollient action, which maintains the aligned appearance of the hair and leaves its structure free from frizz, roughness, split ends and other signs of dryness.\r\n', 1045, 'img/product/Cópia de mascara-select-care-500.jpg'),
(25, 10, 'Mask Select Care 300g', 'Select Care Shampoo 1L provides   gentle cleaning and enhances the alignment of straight hair. Rich in moisturizing properties, the product sanitizes the hair perimeter without compromising the hydration of the hair, preserving its softness, movement and shine. Its difference lies precisely in this emollient action, which maintains the aligned appearance of the hair and leaves its structure free from frizz, roughness, split ends and other signs of dryness.\r\n', 670, 'img/product/Cópia de mascara-select-care-300.jpg'),
(26, 10, 'Mask Force Hair 500ml', 'Force Hair Fortifying Shampoo deeply   cleans the entire hair perimeter and contributes to the growth and strengthening of locks. Enriched with highly antioxidant properties, the product is capable of delaying damage caused by free radicals and, thus, promoting hair rejuvenation.\r\n', 1670, 'img/product/Cópia de mascara-force-hair.jpg'),
(27, 10, 'Mask Twist Curls 300g', 'Low Poo Cachos Shampoo guarantees   complete cleaning of the scalp without interfering with the balance of the cuticles. Its gentle formula is responsible for sanitizing curly strands and preparing them for subsequent treatments. In addition, the product also helps hydrate and define curls, giving much more vitality to the hair. Developed especially for Low Poo techniques, Curls Shampoo is ideal for anyone looking for nourished, silky and defined curls.\r\n', 670, 'img/product/Cópia de masc-twist-cachos.jpg'),
(28, 10, 'Mask Proboo Fiber 500g', 'Proboo  Fiber Intensive Reconstruction Mask  regenerates damage suffered by the hair structure and restores strength to weakened hair. Enriched with a load of 19 amino acids, the mask repairs damaged areas and replaces  nutrients Reducing dryness and hair weakening! The Proboo Fiber Intensive Reconstruction Mask is developed from three main ingredients, which are considered the pillars of its composition. They are: Panthenol, Shea Butter and a Mix of Red Fruits. While Panthenol recovers lost nutrients and reduces signs of dryness, Shea Butter and Red Fruit Mix, in turn, are responsible for restoring the hair\'s natural oils and preventing hair loss caused by hair weakening.\r\n', 1485, 'img/product/Cópia de proboo-fiber.jpg'),
(29, 10, 'Mask Equalise 500g', 'The Equalize Mask, as the name suggests, aims to equalize the pH of the hair and revitalize the hair structure.Its acidifying and anti-rubberizing action is responsible for rebalancing damaged cuticles and regenerating aggression caused by chemical substances and external agents, providing much more strength and firmness to the hair strand. Enriched with a nutritious and protein formula, the reconstruction mask neutralizes weakening conditions and enhances the hydration of the hair fiber, delivering soft, healthy, resistant and pH-balanced hair.\r\n', 1485, 'img/product/Cópia de equalize-mask.jpg'),
(30, 10, 'Mask Plex 300g', 'Moisturizing, antioxidant and anti-rubber action!The Plex Shampoo formula is developed from three main ingredients: Palm Oil, Vitamin E and Amino Complex.While Vitamin E and Palm Oil act directly on hydrating and nourishing the hair, the Amino Complex, in turn, has an anti-rubber action and rebalances the elasticity of the hair, helping to repair the damage caused by the coloring method.\r\n', 950, 'img/product/Cópia de mascara-plex.jpg'),
(31, 10, 'All Blond Mask 300g', 'All Blond Shampoo gently   cleanses the scalp and prepares blonde hair for subsequent treatments. Its light, nutrient-rich formula is responsible for reducing signs of dryness and softening damage caused by free radicals, offering much more strength and vitality to blonde hair. Furthermore, its technology is also capable of promoting healthy growth, as it stimulates blood flow to the scalp and promotes the development of hair bulbs.\r\n', 670, 'img/product/Cópia de mascara-all-blond.jpg'),
(32, 10, 'Matizer Mask Black Gloss 500ml', 'Prohall Black Gloss Matizer Mask 500ml acts to neutralize the unwanted yellow tones of bleached blonde hair, with highlights or highlights, promoting platinum blonde tones.  Made with Phyto Floral Extracts and Monoi Oil, it has a revitalizing, moisturizing, and nourishing action, enhancing color and shine.\r\n', 950, 'img/product/Cópia de black-gloss.jpg'),
(33, 10, 'Matizer Mask Blond Gloss 500ml', 'Prohall Black Gloss Matizer Mask 500ml acts to neutralize the unwanted yellow tones of bleached blonde hair, with highlights or highlights, promoting platinum blonde tones.  Made with Phyto Floral Extracts and Monoi Oil, it has a revitalizing, moisturizing, and nourishing action, enhancing color and shine.\r\n', 950, 'img/product/Cópia de blond-gloss.jpg'),
(34, 10, 'Matizer Mask Brown Gloss 500ml', 'Prohall Black Gloss Matizer Mask 500ml acts to neutralize the unwanted yellow tones of bleached blonde hair, with highlights or highlights, promoting platinum blonde tones.  Made with Phyto Floral Extracts and Monoi Oil, it has a revitalizing, moisturizing, and nourishing action, enhancing color and shine.\r\n', 950, 'img/product/Cópia de brown-gloss.jpg'),
(35, 10, 'Matizer Mask Silver Gloss 500ml', 'Prohall Black Gloss Matizer Mask 500ml acts to neutralize the unwanted yellow tones of bleached blonde hair, with highlights or highlights, promoting platinum blonde tones.  Made with Phyto Floral Extracts and Monoi Oil, it has a revitalizing, moisturizing, and nourishing action, enhancing color and shine.\r\n', 950, 'img/product/Cópia de silver-gloss.jpg'),
(36, 11, 'Spray All Blond 150ml', 'All Blond Shampoo gently   cleanses the scalp and prepares blonde hair for subsequent treatments. Its light, nutrient-rich formula is responsible for reducing signs of dryness and softening damage caused by free radicals, offering much more strength and vitality to blonde hair. Furthermore, its technology is also capable of promoting healthy growth, as it stimulates blood flow to the scalp and promotes the development of hair bulbs.\r\n', 1230, 'img/product/Cópia de spray-all-blond.jpg'),
(37, 11, 'Spray Force Hair 150ml', 'Force Hair Fortifying Shampoo deeply   cleans the entire hair perimeter and contributes to the growth and strengthening of locks. Enriched with highly antioxidant properties, the product is capable of delaying damage caused by free radicals and, thus, promoting hair rejuvenation.\r\n', 1110, ' img/product/Cópia de tonico-force-hair.jpg\r\n'),
(38, 11, 'Absolute One Spray Mask 200ml', 'The  Absolut One 12 Benefits in 1 Spray Mask 200ml  guarantees complete repair of the hair fiber and the main damage caused by external agents. The product promotes the sealing of all strands, reducing porosity and aligning the cuticles. Its technology is multifaceted and acts on different areas of the hair perimeter. Absolut One is a treatment mask. It\'s a finisher. It\'s a tip repairman. Use it however you want, whenever you want. Absolut One has its technology developed with two main ingredients, Lactic Acid and Panthenol (Vitamin B5). The combined action of these two components is capable of promoting intense hydration and strengthening the hair structure, preventing problems with breakage and/or hair loss. Furthermore, both ingredients have conditioning properties that enhance the soft touch and luminous appearance of the locks.\r\n', 1390, ' img/product/Cópia de absolut-one.jpg\r\n'),
(39, 11, 'Absolute Oil 7ml (Box of 12 Units)', 'The  Absolut Oil Serum 7ml  is a finisher rich in Argan Oil, a powerful moisturizer and natural antioxidant that fights free radicals, repairing the hair internally. With a blend of multifunctional silicones, the cuticles receive a specific treatment that prevents split ends and protects the hair fiber from any external agent.\r\n', 1045, ' img/product/Cópia de absolut-oil.jpg\r\n'),
(40, 11, 'Absolute Oil 60ml', 'The  Absolut Oil Serum 7ml  is a finisher rich in Argan Oil, a powerful moisturizer and natural antioxidant that fights free radicals, repairing the hair internally. With a blend of multifunctional silicones, the cuticles receive a specific treatment that prevents split ends and protects the hair fiber from any external agent.\r\n', 1200, ' img/product/Cópia de absolut-oil-e-absolut-one-2.jpg\r\n'),
(41, 11, 'Plex Protector 200ml', 'Moisturizing, antioxidant and anti-rubber action!The Plex Shampoo formula is developed from three main ingredients: Palm Oil, Vitamin E and Amino Complex.While Vitamin E and Palm Oil act directly on hydrating and nourishing the hair, the Amino Complex, in turn, has an anti-rubber action and rebalances the elasticity of the hair, helping to repair the damage caused by the coloring method.\r\n', 950, ' img/product/Cópia de plex-protector.jpg\r\n'),
(42, 11, 'Heat Protector Plex 150ml', 'Moisturizing, antioxidant and anti-rubber action!The Plex Shampoo formula is developed from three main ingredients: Palm Oil, Vitamin E and Amino Complex.While Vitamin E and Palm Oil act directly on hydrating and nourishing the hair, the Amino Complex, in turn, has an anti-rubber action and rebalances the elasticity of the hair, helping to repair the damage caused by the coloring method.\r\n', 950, ' img/product/Cópia de protetor-termico.jpg\r\n'),
(43, 12, 'Force Hair Supplement – 60 capsules', 'Force Hair Fortifying Shampoo deeply   cleans the entire hair perimeter and contributes to the growth and strengthening of locks. Enriched with highly antioxidant properties, the product is capable of delaying damage caused by free radicals and, thus, promoting hair rejuvenation.\r\n', 1045, ' img/product/Cópia de suplemento-force-hair.jpg\r\n'),
(44, 13, 'Select Blond 1lt', 'Select Blond volume-reducing treatment is specially designed for blond hair, providing soft, silky, frizz-free hair. It reduces volume and neutralizes yellow tones with the Lumini System, while reconstructing and deeply hydrating the hair fibers, providing brightness in just one step.\r\n', 3575, ' img/product/Cópia de select-blond.jpg\r\n'),
(45, 13, 'Protein Miracle Therapy 500ml', 'N/A\r\n', 1510, ' img/product/Cópia de miracle-therapy-2.jpg\r\n'),
(46, 13, 'Finisher Miracle Therapy 300ml', 'N/A\r\n', 1510, ' img/product/Cópia de miracle-therapy-2.jpg\r\n'),
(47, 13, 'Btx Blend Repair 1kg', 'Prohall BTX Blend Repair is a hair realignment treatment, with a formula developed specially to meet the needs of hair weakened by chemical processes that require mass replacement and intense care.\r\n', 2730, ' img/product/Cópia de btx-blend-repair-1kg.jpg\r\n'),
(48, 13, 'Btx Blend Repair 300g', 'Prohall BTX Blend Repair is a hair realignment treatment, with a formula developed specially to meet the needs of hair weakened by chemical processes that require mass replacement and intense care.\r\n', 1045, ' img/product/Cópia de btx-blend-repair.jpg\r\n'),
(49, 13, 'Btx Blend Repair Blond 1kg', 'Btx  Blend Repair Blond  is a product intended for Hair Botox techniques whose formula is designed to meet the needs of blonde and bleached hair. Rich in hydrating and nourishing actives, Btx Blend Repair Blond helps to standardize the color of blonde strands while treating the hair fiber, providing intense nutrition and reconstruction of fragile areas. The results encompass the alignment of the capillary structure, the reduction of frizz, the control of excessive volume and the enhancement of shine.\r\n', 2825, ' img/product/Cópia de btx-blend-repair-blond-1kg.jpg\r\n'),
(50, 15, 'Bleaching Powder White 500g', 'White Prohall Professional Bleaching Powder 500g has a formula with exclusive technology, capable of providing an opening of up to 9 tones. Versatile, it can be applied in various hair bleaching and lightening techniques, ensuring an even blonde and free of yellow tones.\r\n', 1135, ' img/product/Cópia de pó-descolorante-1.jpg\r\n'),
(51, 15, 'Bleaching Powder Blue 500g', 'White Prohall Professional Bleaching Powder 500g has a formula with exclusive technology, capable of providing an opening of up to 9 tones. Versatile, it can be applied in various hair bleaching and lightening techniques, ensuring an even blonde and free of yellow tones.\r\n', 1135, ' img/product/Cópia de pó-descolorante-2.jpg\r\n'),
(52, 15, 'Hydrogen Peroxide Ox 1.5% – 900ml', 'The  OX 05 Vol 900ml Revealing Lotion  is authorized for all hair coloring processes and promotes an ideal level of oxidation in the hair, ensuring rapid and damage-free pigmentation. The product is suitable for professional use and its technology works not only to achieve the perfect shade, but also to preserve the hair fiber, providing healthy and uniform hair.\r\n', 715, ' img/product/Cópia de ox-5-vol.jpg\r\n'),
(53, 15, 'Hydrogen Peroxide Ox 3% – 900ml', 'The  OX 05 Vol 900ml Revealing Lotion  is authorized for all hair coloring processes and promotes an ideal level of oxidation in the hair, ensuring rapid and damage-free pigmentation. The product is suitable for professional use and its technology works not only to achieve the perfect shade, but also to preserve the hair fiber, providing healthy and uniform hair.\r\n', 715, ' img/product/Cópia de ox-10-vol.jpg\r\n'),
(54, 15, 'Hydrogen Peroxide Ox 6% – 900ml', 'The  OX 05 Vol 900ml Revealing Lotion  is authorized for all hair coloring processes and promotes an ideal level of oxidation in the hair, ensuring rapid and damage-free pigmentation. The product is suitable for professional use and its technology works not only to achieve the perfect shade, but also to preserve the hair fiber, providing healthy and uniform hair.\r\n', 715, ' img/product/Cópia de ox-20-vol.jpg\r\n'),
(55, 15, 'Hydrogen Peroxide Ox 9% – 900ml', 'The  OX 05 Vol 900ml Revealing Lotion  is authorized for all hair coloring processes and promotes an ideal level of oxidation in the hair, ensuring rapid and damage-free pigmentation. The product is suitable for professional use and its technology works not only to achieve the perfect shade, but also to preserve the hair fiber, providing healthy and uniform hair.\r\n', 715, ' img/product/Cópia de ox-30-vol.jpg\r\n'),
(56, 15, 'Hydrogen Peroxide Ox 12% – 900ml', 'The  OX 05 Vol 900ml Revealing Lotion  is authorized for all hair coloring processes and promotes an ideal level of oxidation in the hair, ensuring rapid and damage-free pigmentation. The product is suitable for professional use and its technology works not only to achieve the perfect shade, but also to preserve the hair fiber, providing healthy and uniform hair.\r\n', 715, ' img/product/Cópia de ox-40-vol.jpg\r\n');

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
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

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
