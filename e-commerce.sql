-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3309
-- Generation Time: Jun 17, 2022 at 07:05 PM
-- Server version: 5.7.36
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
CREATE TABLE IF NOT EXISTS `brands` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'default-brand.png',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1: Active, 0: Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Apple', 'Apple Inc. designs, manufactures and markets smartphones, personal computers, tablets, wearables and accessories, and sells a variety of related services.', 'images/brands/62632214a4d9f-.png', 1, '2022-04-22 19:45:56', '2022-04-22 19:45:56'),
(2, 'SAMSUNG', 'Samsung, South Korean company that is one of the world\'s largest producers of electronic devices.', 'images/brands/626dce94d12a31651363476.jpg', 1, '2022-04-22 19:49:45', '2022-04-30 22:04:36'),
(3, 'Nokia', 'At Nokia, we create technology that helps the world act together.', 'images/brands/626dce5a93fab1651363418.jpg', 1, '2022-04-22 19:56:13', '2022-04-30 22:03:38'),
(4, 'DELL', 'Dell Inc., formerly PC\'s Limited (1984–88) and Dell Computer Corporation (1988–2003), global company that designs, develops, and manufactures personal computers (PCs) and a variety of computer-related products.', 'images/brands/626dce1bf15551651363355.png', 1, '2022-04-22 20:00:45', '2022-04-30 22:02:35'),
(5, 'Lenovo', 'Lenovo Group Ltd. is a leading global manufacturer of personal computers (PCs). The company was already the largest PC manufacturer in China when it acquired IBM\'s Personal Computing Division in 2005.', 'images/brands/62632605bfeaa-.png', 1, '2022-04-22 20:02:45', '2022-04-22 20:02:45'),
(6, 'ADIDAS', 'Adidas, in full Adidas AG, German manufacturer of athletic shoes and apparel and sporting goods. In the early 21st century it was the largest sportswear', 'images/brands/6263269f09f27-.jpg', 1, '2022-04-22 20:05:19', '2022-04-22 20:05:19'),
(7, 'CANON', 'Canon EOS (Electro-Optical System) is an autofocus single-lens reflex camera (SLR) and mirrorless camera series produced by Canon Inc.', 'images/brands/62632cfb3030f-.jpg', 1, '2022-04-22 20:32:27', '2022-04-22 20:32:27'),
(8, 'LG', 'LG is one of the most known electronic brands worldwide. After having started in South Korea in 1947', 'images/brands/626dcebe4e7621651363518.png', 1, '2022-04-24 18:41:43', '2022-04-30 22:05:18'),
(9, 'Olympus', 'Break Free with Olympus. Explore small, lightweight, travel-ready camera and lens systems to take your photography to exciting new places.', 'images/brands/6269cb429f3d2-.jpg', 1, '2022-04-27 21:01:22', '2022-04-27 21:01:22'),
(10, 'Herman Miller', 'Herman Miller is a 100-year-old-plus company that places great importance on design, the environment, community service, and the health and well-being of', 'images/brands/626dcfaf975b31651363759.png', 1, '2022-04-28 20:29:17', '2022-04-30 22:09:19'),
(11, 'American Eagle', NULL, 'images/brands/6287c832a3a70-.png', 1, '2022-05-20 14:56:18', '2022-05-20 14:56:18'),
(12, 'Mens Wear', NULL, 'images/brands/6287c8ae427b5-.png', 1, '2022-05-20 14:58:22', '2022-05-20 14:58:22'),
(13, 'Iconic', NULL, 'images/brands/6287c959eb992-.webp', 1, '2022-05-20 15:01:13', '2022-05-20 15:01:13'),
(14, 'Zara', NULL, 'images/brands/6287ce50ab525-.png', 1, '2022-05-20 15:22:24', '2022-05-20 15:22:24'),
(15, 'Alex & Eve', NULL, 'images/brands/6291362013988-.webp', 1, '2022-05-27 18:35:44', '2022-05-27 18:35:44'),
(16, 'JINX TANK', NULL, 'images/brands/629147a9d1468-.webp', 1, '2022-05-27 19:50:33', '2022-05-27 19:50:33'),
(17, 'Oakley', 'Oakley, Inc. is an innovation-driven designer, manufacturer, and distributor of high-performance eyewear, including sunglasses and goggles. Oakley sunglasses sell for anywhere from $65 to $335 a pair. Although known best for its sunglasses, Oakley has also expanded into footwear, watches, apparel, and accessories.', 'images/brands/62923877c3ea7-.jpg', 1, '2022-05-28 12:57:59', '2022-05-28 12:57:59'),
(18, 'Carrera', 'Austrian eyewear maker and pioneer Wilhelm Anger decided to rename his Company from ‘Wilhelm Anger Werker’ to ‘Carrera’, drawing inspiration from Carrera Panamericana.\r\nThis open road racing event that ran in Mexico in the early 1950s is widely considered one of the most dangerous car races in the world.', 'images/brands/6292406cc2c4b-.png', 1, '2022-05-28 13:31:56', '2022-05-28 13:31:56'),
(19, 'Goumi Kids', 'Thoughtfully designed organic footie pyjamas that are versatile, breathable and super soft', 'images/brands/6292493f617db-.webp', 1, '2022-05-28 14:09:35', '2022-05-28 14:09:35'),
(20, 'Dauphinette', 'Handmade trademark', 'images/brands/629264a224d5f-.webp', 1, '2022-05-28 16:06:26', '2022-05-28 16:06:26');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

DROP TABLE IF EXISTS `carts`;
CREATE TABLE IF NOT EXISTS `carts` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`,`product_id`),
  KEY `carts_product_id_foreign` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`user_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(12, 38, 1, '2022-06-17 15:35:15', '2022-06-17 15:35:15'),
(12, 40, 1, '2022-06-17 15:35:29', '2022-06-17 15:35:29'),
(12, 46, 1, '2022-06-17 15:36:57', '2022-06-17 15:36:57');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'default-category.png',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1: Active, 0: Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Electronics', 'The field of electronics is a branch of physics and electrical engineering that deals with the emission, behaviour and effects of electrons using electronic', 'images/categories/62632744e36011650665284.jpg', 1, '2022-04-22 20:08:04', '2022-04-22 20:08:04'),
(3, 'Beauty And Personal Care', 'Explore Beauty and Personal Care products on Amazon. Shop makeup, skincare, hair care, nail polish, beauty appliances, men\'s grooming & more', 'images/categories/6263280a70ee41650665482.jpg', 1, '2022-04-22 20:11:22', '2022-04-22 20:11:22'),
(4, 'Sports', 'A human activity involving physical exertion and skill as the primary focus of the activity', 'images/categories/62687f7fb84901651015551.jpg', 1, '2022-04-22 20:18:21', '2022-04-26 21:25:51'),
(5, 'Furniture', 'Furniture consists of large objects such as tables, chairs, or beds that are used in a room for sitting or lying on or for putting things on or in. Each piece of furniture in their home suited the style of the house. Synonyms: household goods, furnishings, fittings, house fittings More Synonyms of furniture.', 'images/categories/626870b11b9d71651011761.jpg', 1, '2022-04-26 20:22:41', '2022-04-26 20:22:41'),
(6, 'Cooking', 'Cooking, cookery, or culinary arts is the art, science and craft of using heat to prepare food for consumption.', 'images/categories/62687cc9557181651014857.png', 1, '2022-04-26 21:14:17', '2022-04-26 21:14:17'),
(7, 'Clothing', 'Clothing is items worn on the body. Typically, clothing is made of fabrics or textiles, but over time it has included garments made from animal skin and other thin sheets of materials and natural products found in the environment, put together.', 'images/categories/6268b8d8ed6241651030232.webp', 1, '2022-04-27 01:30:32', '2022-04-27 01:30:32');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primary` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0: not primary, 1: primary',
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_images_product_id_foreign` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=341 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `primary`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'images/products/main/62649fec7a5c01650761708.webp', 1, 1, '2022-04-22 20:51:24', '2022-04-23 22:55:08'),
(2, 'images/products/secondary/6263316c277d91650667884.webp', 0, 1, '2022-04-22 20:51:24', '2022-04-22 20:51:24'),
(5, 'images/products/main/626372e23064f1650684642.webp', 1, 2, '2022-04-23 01:30:42', '2022-04-23 01:30:42'),
(6, 'images/products/secondary/626372e25d4431650684642.webp', 0, 2, '2022-04-23 01:30:42', '2022-04-23 01:30:42'),
(7, 'images/products/secondary/626372e26c6da1650684642.webp', 0, 2, '2022-04-23 01:30:42', '2022-04-23 01:30:42'),
(8, 'images/products/secondary/626372e2821651650684642.webp', 0, 2, '2022-04-23 01:30:42', '2022-04-23 01:30:42'),
(9, 'images/products/secondary/62649d70c0c9e1650761072.webp', 0, 1, '2022-04-23 22:44:32', '2022-04-23 22:44:32'),
(43, 'images/products/main/6265d702d31d31650841346.jpg', 1, 11, '2022-04-24 21:02:27', '2022-04-24 21:02:27'),
(44, 'images/products/secondary/6265d7030679d1650841347.jpg', 0, 11, '2022-04-24 21:02:27', '2022-04-24 21:02:27'),
(45, 'images/products/secondary/6265d703863c11650841347.jpg', 0, 11, '2022-04-24 21:02:27', '2022-04-24 21:02:27'),
(46, 'images/products/secondary/6265d703b31201650841347.jpg', 0, 11, '2022-04-24 21:02:27', '2022-04-24 21:02:27'),
(47, 'images/products/main/6269bb4ecebe71651096398.jpg', 1, 12, '2022-04-27 19:53:18', '2022-04-27 19:53:18'),
(48, 'images/products/secondary/6269bb4f03d591651096399.jpg', 0, 12, '2022-04-27 19:53:19', '2022-04-27 19:53:19'),
(49, 'images/products/secondary/6269bb4f88f141651096399.jpg', 0, 12, '2022-04-27 19:53:19', '2022-04-27 19:53:19'),
(50, 'images/products/secondary/6269bb4fa91551651096399.jpg', 0, 12, '2022-04-27 19:53:19', '2022-04-27 19:53:19'),
(51, 'images/products/secondary/6269bb4fcfa391651096399.jpg', 0, 12, '2022-04-27 19:53:19', '2022-04-27 19:53:19'),
(52, 'images/products/main/6269becec0d521651097294.webp', 1, 13, '2022-04-27 20:08:14', '2022-04-27 20:08:14'),
(53, 'images/products/secondary/6269beced88071651097294.webp', 0, 13, '2022-04-27 20:08:14', '2022-04-27 20:08:14'),
(54, 'images/products/secondary/6269becf4e0541651097295.webp', 0, 13, '2022-04-27 20:08:15', '2022-04-27 20:08:15'),
(55, 'images/products/secondary/6269becfa097c1651097295.webp', 0, 13, '2022-04-27 20:08:15', '2022-04-27 20:08:15'),
(56, 'images/products/secondary/6269becff3eeb1651097295.webp', 0, 13, '2022-04-27 20:08:16', '2022-04-27 20:08:16'),
(57, 'images/products/main/6269bfde918151651097566.webp', 1, 14, '2022-04-27 20:12:46', '2022-04-27 20:12:46'),
(58, 'images/products/secondary/6269bfde9dd511651097566.webp', 0, 14, '2022-04-27 20:12:46', '2022-04-27 20:12:46'),
(59, 'images/products/secondary/6269bfdeedda31651097566.webp', 0, 14, '2022-04-27 20:12:46', '2022-04-27 20:12:46'),
(60, 'images/products/secondary/6269bfdf321f01651097567.webp', 0, 14, '2022-04-27 20:12:47', '2022-04-27 20:12:47'),
(61, 'images/products/main/6269ccd33a2401651100883.jpg', 1, 15, '2022-04-27 21:08:03', '2022-04-27 21:08:03'),
(62, 'images/products/secondary/6269ccd3556f91651100883.jpg', 0, 15, '2022-04-27 21:08:03', '2022-04-27 21:08:03'),
(63, 'images/products/secondary/6269ccd3757951651100883.jpg', 0, 15, '2022-04-27 21:08:03', '2022-04-27 21:08:03'),
(64, 'images/products/secondary/6269ccd38aa711651100883.jpg', 0, 15, '2022-04-27 21:08:03', '2022-04-27 21:08:03'),
(65, 'images/products/secondary/6269ccd3a20dd1651100883.jpg', 0, 15, '2022-04-27 21:08:03', '2022-04-27 21:08:03'),
(66, 'images/products/main/6269cdb98424b1651101113.jpg', 1, 16, '2022-04-27 21:11:53', '2022-04-27 21:11:53'),
(67, 'images/products/secondary/6269cdb98e5b61651101113.jpg', 0, 16, '2022-04-27 21:11:53', '2022-04-27 21:11:53'),
(68, 'images/products/secondary/6269cdb9ad7051651101113.jpg', 0, 16, '2022-04-27 21:11:53', '2022-04-27 21:11:53'),
(69, 'images/products/main/6269d019436231651101721.jpg', 1, 17, '2022-04-27 21:22:01', '2022-04-27 21:22:01'),
(70, 'images/products/secondary/6269d01955fbc1651101721.jpg', 0, 17, '2022-04-27 21:22:01', '2022-04-27 21:22:01'),
(71, 'images/products/secondary/6269d0197d55f1651101721.jpg', 0, 17, '2022-04-27 21:22:01', '2022-04-27 21:22:01'),
(72, 'images/products/secondary/6269d0199ba061651101721.jpg', 0, 17, '2022-04-27 21:22:01', '2022-04-27 21:22:01'),
(73, 'images/products/secondary/6269d019b2b141651101721.jpg', 0, 17, '2022-04-27 21:22:01', '2022-04-27 21:22:01'),
(74, 'images/products/main/6269d284e31431651102340.jpg', 1, 18, '2022-04-27 21:32:20', '2022-04-27 21:32:20'),
(75, 'images/products/secondary/6269d284ed3ee1651102340.jpg', 0, 18, '2022-04-27 21:32:20', '2022-04-27 21:32:20'),
(76, 'images/products/secondary/6269d2852027c1651102341.jpg', 0, 18, '2022-04-27 21:32:21', '2022-04-27 21:32:21'),
(77, 'images/products/secondary/6269d28539f381651102341.jpg', 0, 18, '2022-04-27 21:32:21', '2022-04-27 21:32:21'),
(78, 'images/products/secondary/6269d2854ef5a1651102341.jpg', 0, 18, '2022-04-27 21:32:21', '2022-04-27 21:32:21'),
(79, 'images/products/main/626b0a5e8b7f11651182174.jpg', 1, 19, '2022-04-28 19:42:54', '2022-04-28 19:42:54'),
(80, 'images/products/secondary/626b0a5ed0d501651182174.jpg', 0, 19, '2022-04-28 19:42:54', '2022-04-28 19:42:54'),
(81, 'images/products/main/626b0b34221bb1651182388.jpg', 1, 20, '2022-04-28 19:46:28', '2022-04-28 19:46:28'),
(82, 'images/products/secondary/626b0b342c4731651182388.jpg', 0, 20, '2022-04-28 19:46:28', '2022-04-28 19:46:28'),
(83, 'images/products/secondary/626b0b345792b1651182388.jpg', 0, 20, '2022-04-28 19:46:28', '2022-04-28 19:46:28'),
(84, 'images/products/main/626b11cbd32571651184075.jpg', 1, 21, '2022-04-28 20:14:35', '2022-04-28 20:14:35'),
(85, 'images/products/secondary/626b11cbf26111651184075.jpg', 0, 21, '2022-04-28 20:14:35', '2022-04-28 20:14:35'),
(86, 'images/products/secondary/626b11cc211fb1651184076.jpg', 0, 21, '2022-04-28 20:14:36', '2022-04-28 20:14:36'),
(87, 'images/products/secondary/626b11cc405971651184076.jpg', 0, 21, '2022-04-28 20:14:36', '2022-04-28 20:14:36'),
(88, 'images/products/secondary/626b11cc50ee71651184076.jpg', 0, 21, '2022-04-28 20:14:36', '2022-04-28 20:14:36'),
(89, 'images/products/main/6272ee9b08a811651699355.jpg', 1, 22, '2022-04-28 20:21:15', '2022-05-04 19:22:35'),
(93, 'images/products/main/626b15dc8b7b21651185116.jpg', 1, 23, '2022-04-28 20:31:56', '2022-04-28 20:31:56'),
(94, 'images/products/secondary/626b15dc927a41651185116.jpg', 0, 23, '2022-04-28 20:31:56', '2022-04-28 20:31:56'),
(95, 'images/products/secondary/626b15dcb96881651185116.jpg', 0, 23, '2022-04-28 20:31:56', '2022-04-28 20:31:56'),
(96, 'images/products/secondary/626b15dce20f71651185116.jpg', 0, 23, '2022-04-28 20:31:56', '2022-04-28 20:31:56'),
(97, 'images/products/main/626b5230e4eb61651200560.jpg', 1, 24, '2022-04-29 00:49:21', '2022-04-29 00:49:21'),
(98, 'images/products/secondary/626b52314e66b1651200561.jpg', 0, 24, '2022-04-29 00:49:21', '2022-04-29 00:49:21'),
(99, 'images/products/secondary/626b5231c0e4f1651200561.jpg', 0, 24, '2022-04-29 00:49:21', '2022-04-29 00:49:21'),
(100, 'images/products/secondary/626b5231dd07e1651200561.jpg', 0, 24, '2022-04-29 00:49:21', '2022-04-29 00:49:21'),
(101, 'images/products/main/626b581b8fccc1651202075.jpg', 1, 25, '2022-04-29 01:14:35', '2022-04-29 01:14:35'),
(102, 'images/products/secondary/626b581b9ec491651202075.jpg', 0, 25, '2022-04-29 01:14:35', '2022-04-29 01:14:35'),
(103, 'images/products/secondary/6272ef8db0fda1651699597.jpg', 0, 22, '2022-05-04 19:26:37', '2022-05-04 19:26:37'),
(104, 'images/products/secondary/6272ef8dc73c81651699597.jpg', 0, 22, '2022-05-04 19:26:37', '2022-05-04 19:26:37'),
(116, 'images/products/main/629132cc6ce1a1653682892.webp', 1, 37, '2022-05-27 18:21:32', '2022-05-27 18:21:32'),
(117, 'images/products/secondary/629132ccce9501653682892.webp', 0, 37, '2022-05-27 18:21:32', '2022-05-27 18:21:32'),
(118, 'images/products/secondary/629132cd82b591653682893.webp', 0, 37, '2022-05-27 18:21:33', '2022-05-27 18:21:33'),
(119, 'images/products/secondary/629132cdacc1f1653682893.webp', 0, 37, '2022-05-27 18:21:33', '2022-05-27 18:21:33'),
(120, 'images/products/secondary/629132cddb01b1653682893.webp', 0, 37, '2022-05-27 18:21:33', '2022-05-27 18:21:33'),
(121, 'images/products/main/62913541332051653683521.webp', 1, 38, '2022-05-27 18:32:01', '2022-05-27 18:32:01'),
(122, 'images/products/secondary/629135413d6b41653683521.webp', 0, 38, '2022-05-27 18:32:01', '2022-05-27 18:32:01'),
(123, 'images/products/secondary/6291354176f961653683521.webp', 0, 38, '2022-05-27 18:32:01', '2022-05-27 18:32:01'),
(124, 'images/products/secondary/62913541a43a71653683521.webp', 0, 38, '2022-05-27 18:32:01', '2022-05-27 18:32:01'),
(125, 'images/products/secondary/62913541cd7e21653683521.webp', 0, 38, '2022-05-27 18:32:01', '2022-05-27 18:32:01'),
(126, 'images/products/main/62913c69c78b61653685353.webp', 1, 39, '2022-05-27 19:02:33', '2022-05-27 19:02:33'),
(127, 'images/products/secondary/62913c69d5ed51653685353.webp', 0, 39, '2022-05-27 19:02:33', '2022-05-27 19:02:33'),
(128, 'images/products/secondary/62913c6a0c34c1653685354.webp', 0, 39, '2022-05-27 19:02:34', '2022-05-27 19:02:34'),
(129, 'images/products/secondary/62913c6a3995a1653685354.webp', 0, 39, '2022-05-27 19:02:34', '2022-05-27 19:02:34'),
(130, 'images/products/secondary/62913c6a72a2d1653685354.webp', 0, 39, '2022-05-27 19:02:34', '2022-05-27 19:02:34'),
(131, 'images/products/main/629140b3ead781653686451.webp', 1, 40, '2022-05-27 19:20:52', '2022-05-27 19:20:52'),
(132, 'images/products/secondary/629140b429b2b1653686452.webp', 0, 40, '2022-05-27 19:20:52', '2022-05-27 19:20:52'),
(133, 'images/products/secondary/629140b49da0a1653686452.webp', 0, 40, '2022-05-27 19:20:52', '2022-05-27 19:20:52'),
(134, 'images/products/secondary/629140b4c21f01653686452.webp', 0, 40, '2022-05-27 19:20:52', '2022-05-27 19:20:52'),
(135, 'images/products/secondary/629140b4ed93b1653686452.webp', 0, 40, '2022-05-27 19:20:52', '2022-05-27 19:20:52'),
(136, 'images/products/main/629146ea995c31653688042.webp', 1, 41, '2022-05-27 19:47:23', '2022-05-27 19:47:23'),
(137, 'images/products/secondary/629146eb292281653688043.webp', 0, 41, '2022-05-27 19:47:23', '2022-05-27 19:47:23'),
(138, 'images/products/secondary/629146eb739a51653688043.webp', 0, 41, '2022-05-27 19:47:23', '2022-05-27 19:47:23'),
(139, 'images/products/secondary/629146eba4c731653688043.webp', 0, 41, '2022-05-27 19:47:23', '2022-05-27 19:47:23'),
(140, 'images/products/secondary/629146ebbe7521653688043.webp', 0, 41, '2022-05-27 19:47:23', '2022-05-27 19:47:23'),
(141, 'images/products/main/62914b1f6877e1653689119.webp', 1, 42, '2022-05-27 20:05:19', '2022-05-27 20:05:19'),
(142, 'images/products/secondary/62914b1f9e90d1653689119.webp', 0, 42, '2022-05-27 20:05:19', '2022-05-27 20:05:19'),
(143, 'images/products/secondary/62914b203c8a11653689120.webp', 0, 42, '2022-05-27 20:05:20', '2022-05-27 20:05:20'),
(144, 'images/products/secondary/62914b206a2361653689120.webp', 0, 42, '2022-05-27 20:05:20', '2022-05-27 20:05:20'),
(145, 'images/products/secondary/62914b209a09e1653689120.webp', 0, 42, '2022-05-27 20:05:20', '2022-05-27 20:05:20'),
(146, 'images/products/main/62914c0db8f0f1653689357.webp', 1, 43, '2022-05-27 20:09:17', '2022-05-27 20:09:17'),
(147, 'images/products/secondary/62914c0dc74a31653689357.webp', 0, 43, '2022-05-27 20:09:17', '2022-05-27 20:09:17'),
(148, 'images/products/secondary/62914c0e05f641653689358.webp', 0, 43, '2022-05-27 20:09:18', '2022-05-27 20:09:18'),
(149, 'images/products/secondary/62914c0e320a71653689358.webp', 0, 43, '2022-05-27 20:09:18', '2022-05-27 20:09:18'),
(150, 'images/products/secondary/62914c0e5ca471653689358.webp', 0, 43, '2022-05-27 20:09:18', '2022-05-27 20:09:18'),
(151, 'images/products/main/62914de838f371653689832.webp', 1, 44, '2022-05-27 20:17:12', '2022-05-27 20:17:12'),
(152, 'images/products/secondary/62914de84056a1653689832.webp', 0, 44, '2022-05-27 20:17:12', '2022-05-27 20:17:12'),
(153, 'images/products/secondary/62914de87373d1653689832.webp', 0, 44, '2022-05-27 20:17:12', '2022-05-27 20:17:12'),
(154, 'images/products/secondary/62914de89e0b21653689832.webp', 0, 44, '2022-05-27 20:17:12', '2022-05-27 20:17:12'),
(155, 'images/products/main/62914eaf351f81653690031.webp', 1, 45, '2022-05-27 20:20:31', '2022-05-27 20:20:31'),
(156, 'images/products/secondary/62914eaf4fc761653690031.webp', 0, 45, '2022-05-27 20:20:31', '2022-05-27 20:20:31'),
(157, 'images/products/secondary/62914eaf7a9901653690031.webp', 0, 45, '2022-05-27 20:20:31', '2022-05-27 20:20:31'),
(158, 'images/products/secondary/62914eaf9c8ce1653690031.webp', 0, 45, '2022-05-27 20:20:31', '2022-05-27 20:20:31'),
(159, 'images/products/secondary/62914eafbf37c1653690031.webp', 0, 45, '2022-05-27 20:20:31', '2022-05-27 20:20:31'),
(160, 'images/products/main/62915442728491653691458.webp', 1, 46, '2022-05-27 20:44:18', '2022-05-27 20:44:18'),
(161, 'images/products/secondary/629154427a4631653691458.webp', 0, 46, '2022-05-27 20:44:18', '2022-05-27 20:44:18'),
(162, 'images/products/secondary/62915442a0ae31653691458.webp', 0, 46, '2022-05-27 20:44:18', '2022-05-27 20:44:18'),
(163, 'images/products/secondary/62915442bf8461653691458.webp', 0, 46, '2022-05-27 20:44:18', '2022-05-27 20:44:18'),
(164, 'images/products/main/6291567ee29a71653692030.webp', 1, 47, '2022-05-27 20:53:50', '2022-05-27 20:53:50'),
(165, 'images/products/secondary/6291567ef10811653692030.webp', 0, 47, '2022-05-27 20:53:50', '2022-05-27 20:53:50'),
(166, 'images/products/secondary/6291567f177291653692031.webp', 0, 47, '2022-05-27 20:53:51', '2022-05-27 20:53:51'),
(167, 'images/products/secondary/6291567f449131653692031.webp', 0, 47, '2022-05-27 20:53:51', '2022-05-27 20:53:51'),
(168, 'images/products/main/6292192ed276c1653741870.webp', 1, 48, '2022-05-28 10:44:31', '2022-05-28 10:44:31'),
(169, 'images/products/secondary/6292192f119741653741871.webp', 0, 48, '2022-05-28 10:44:31', '2022-05-28 10:44:31'),
(170, 'images/products/secondary/6292192f6051f1653741871.webp', 0, 48, '2022-05-28 10:44:31', '2022-05-28 10:44:31'),
(171, 'images/products/secondary/6292192f7f9c91653741871.webp', 0, 48, '2022-05-28 10:44:31', '2022-05-28 10:44:31'),
(172, 'images/products/secondary/6292192f9d4ce1653741871.webp', 0, 48, '2022-05-28 10:44:31', '2022-05-28 10:44:31'),
(173, 'images/products/main/629221a633a631653744038.webp', 1, 49, '2022-05-28 11:20:38', '2022-05-28 11:20:38'),
(174, 'images/products/secondary/629221a672cd11653744038.webp', 0, 49, '2022-05-28 11:20:38', '2022-05-28 11:20:38'),
(175, 'images/products/secondary/629221a6b336f1653744038.webp', 0, 49, '2022-05-28 11:20:38', '2022-05-28 11:20:38'),
(176, 'images/products/secondary/629221a6d38cf1653744038.webp', 0, 49, '2022-05-28 11:20:38', '2022-05-28 11:20:38'),
(177, 'images/products/main/6292249b1d5951653744795.webp', 1, 50, '2022-05-28 11:33:15', '2022-05-28 11:33:15'),
(178, 'images/products/secondary/6292249b28c101653744795.webp', 0, 50, '2022-05-28 11:33:15', '2022-05-28 11:33:15'),
(179, 'images/products/secondary/6292249b43d301653744795.webp', 0, 50, '2022-05-28 11:33:15', '2022-05-28 11:33:15'),
(180, 'images/products/secondary/6292249b62e041653744795.webp', 0, 50, '2022-05-28 11:33:15', '2022-05-28 11:33:15'),
(181, 'images/products/secondary/6292249b86de21653744795.webp', 0, 50, '2022-05-28 11:33:15', '2022-05-28 11:33:15'),
(182, 'images/products/secondary/6292249ba39991653744795.webp', 0, 50, '2022-05-28 11:33:15', '2022-05-28 11:33:15'),
(183, 'images/products/main/629228ced973c1653745870.webp', 1, 51, '2022-05-28 11:51:10', '2022-05-28 11:51:10'),
(184, 'images/products/secondary/629228cee3b561653745870.webp', 0, 51, '2022-05-28 11:51:10', '2022-05-28 11:51:10'),
(185, 'images/products/secondary/629228cf10eda1653745871.webp', 0, 51, '2022-05-28 11:51:11', '2022-05-28 11:51:11'),
(186, 'images/products/secondary/629228cf32b531653745871.webp', 0, 51, '2022-05-28 11:51:11', '2022-05-28 11:51:11'),
(187, 'images/products/main/629229efd146d1653746159.webp', 1, 52, '2022-05-28 11:55:59', '2022-05-28 11:55:59'),
(188, 'images/products/secondary/62922a0e078d11653746190.webp', 0, 52, '2022-05-28 11:56:30', '2022-05-28 11:56:30'),
(189, 'images/products/secondary/62922a0e10e361653746190.webp', 0, 52, '2022-05-28 11:56:30', '2022-05-28 11:56:30'),
(190, 'images/products/secondary/62922a0e190881653746190.webp', 0, 52, '2022-05-28 11:56:30', '2022-05-28 11:56:30'),
(191, 'images/products/main/62922ab04f26a1653746352.webp', 1, 53, '2022-05-28 11:59:12', '2022-05-28 11:59:12'),
(192, 'images/products/secondary/62922ab0598b21653746352.webp', 0, 53, '2022-05-28 11:59:12', '2022-05-28 11:59:12'),
(193, 'images/products/secondary/62922ab0870fa1653746352.webp', 0, 53, '2022-05-28 11:59:12', '2022-05-28 11:59:12'),
(194, 'images/products/secondary/62922ab0b67f71653746352.webp', 0, 53, '2022-05-28 11:59:12', '2022-05-28 11:59:12'),
(195, 'images/products/main/629239240d8a81653750052.webp', 1, 54, '2022-05-28 13:00:52', '2022-05-28 13:00:52'),
(196, 'images/products/secondary/62923924543a31653750052.webp', 0, 54, '2022-05-28 13:00:52', '2022-05-28 13:00:52'),
(197, 'images/products/secondary/62923924a3af71653750052.webp', 0, 54, '2022-05-28 13:00:52', '2022-05-28 13:00:52'),
(198, 'images/products/secondary/62923924dabd41653750052.webp', 0, 54, '2022-05-28 13:00:52', '2022-05-28 13:00:52'),
(199, 'images/products/secondary/629239250b14a1653750053.webp', 0, 54, '2022-05-28 13:00:53', '2022-05-28 13:00:53'),
(200, 'images/products/main/62923fffcf9d81653751807.webp', 1, 55, '2022-05-28 13:30:07', '2022-05-28 13:30:07'),
(201, 'images/products/secondary/62923fffd6ecd1653751807.webp', 0, 55, '2022-05-28 13:30:07', '2022-05-28 13:30:07'),
(202, 'images/products/secondary/62924000023f81653751808.webp', 0, 55, '2022-05-28 13:30:08', '2022-05-28 13:30:08'),
(203, 'images/products/secondary/629240002de251653751808.webp', 0, 55, '2022-05-28 13:30:08', '2022-05-28 13:30:08'),
(204, 'images/products/secondary/629240006787d1653751808.webp', 0, 55, '2022-05-28 13:30:08', '2022-05-28 13:30:08'),
(205, 'images/products/main/629240f4d3d2c1653752052.webp', 1, 56, '2022-05-28 13:34:12', '2022-05-28 13:34:12'),
(206, 'images/products/secondary/629240f5046f41653752053.webp', 0, 56, '2022-05-28 13:34:13', '2022-05-28 13:34:13'),
(207, 'images/products/secondary/629240f521fa61653752053.webp', 0, 56, '2022-05-28 13:34:13', '2022-05-28 13:34:13'),
(208, 'images/products/secondary/629240f53d1c91653752053.webp', 0, 56, '2022-05-28 13:34:13', '2022-05-28 13:34:13'),
(209, 'images/products/secondary/629240f5582871653752053.webp', 0, 56, '2022-05-28 13:34:13', '2022-05-28 13:34:13'),
(210, 'images/products/main/629241bc16e671653752252.webp', 1, 57, '2022-05-28 13:37:32', '2022-05-28 13:37:32'),
(211, 'images/products/secondary/629241bc3359f1653752252.webp', 0, 57, '2022-05-28 13:37:32', '2022-05-28 13:37:32'),
(212, 'images/products/secondary/629241bc54bab1653752252.webp', 0, 57, '2022-05-28 13:37:32', '2022-05-28 13:37:32'),
(213, 'images/products/secondary/629241bc759001653752252.webp', 0, 57, '2022-05-28 13:37:32', '2022-05-28 13:37:32'),
(214, 'images/products/secondary/629241bc92a531653752252.webp', 0, 57, '2022-05-28 13:37:32', '2022-05-28 13:37:32'),
(215, 'images/products/main/6292427d5c3481653752445.webp', 1, 58, '2022-05-28 13:40:45', '2022-05-28 13:40:45'),
(216, 'images/products/secondary/6292427d665791653752445.webp', 0, 58, '2022-05-28 13:40:45', '2022-05-28 13:40:45'),
(217, 'images/products/secondary/6292427d82cf31653752445.webp', 0, 58, '2022-05-28 13:40:45', '2022-05-28 13:40:45'),
(218, 'images/products/secondary/6292427da1fad1653752445.webp', 0, 58, '2022-05-28 13:40:45', '2022-05-28 13:40:45'),
(219, 'images/products/secondary/6292427dc21d91653752445.webp', 0, 58, '2022-05-28 13:40:45', '2022-05-28 13:40:45'),
(220, 'images/products/secondary/6292427ddf2d61653752445.webp', 0, 58, '2022-05-28 13:40:45', '2022-05-28 13:40:45'),
(221, 'images/products/secondary/6292427e06f481653752446.webp', 0, 58, '2022-05-28 13:40:46', '2022-05-28 13:40:46'),
(222, 'images/products/main/6292435958d2e1653752665.webp', 1, 59, '2022-05-28 13:44:25', '2022-05-28 13:44:25'),
(223, 'images/products/secondary/6292435966d451653752665.webp', 0, 59, '2022-05-28 13:44:25', '2022-05-28 13:44:25'),
(224, 'images/products/secondary/629243598673b1653752665.webp', 0, 59, '2022-05-28 13:44:25', '2022-05-28 13:44:25'),
(225, 'images/products/secondary/62924359a14561653752665.webp', 0, 59, '2022-05-28 13:44:25', '2022-05-28 13:44:25'),
(226, 'images/products/secondary/62924359bd3e41653752665.webp', 0, 59, '2022-05-28 13:44:25', '2022-05-28 13:44:25'),
(227, 'images/products/secondary/62924359e2aa91653752665.webp', 0, 59, '2022-05-28 13:44:25', '2022-05-28 13:44:25'),
(228, 'images/products/main/6292443c5fb131653752892.webp', 1, 60, '2022-05-28 13:48:12', '2022-05-28 13:48:12'),
(229, 'images/products/secondary/6292443c6a2ab1653752892.webp', 0, 60, '2022-05-28 13:48:12', '2022-05-28 13:48:12'),
(230, 'images/products/secondary/6292443c9f70d1653752892.webp', 0, 60, '2022-05-28 13:48:12', '2022-05-28 13:48:12'),
(231, 'images/products/secondary/6292443cbf5471653752892.webp', 0, 60, '2022-05-28 13:48:12', '2022-05-28 13:48:12'),
(232, 'images/products/secondary/6292443ce248c1653752892.webp', 0, 60, '2022-05-28 13:48:12', '2022-05-28 13:48:12'),
(233, 'images/products/secondary/6292443d0a6ee1653752893.webp', 0, 60, '2022-05-28 13:48:13', '2022-05-28 13:48:13'),
(234, 'images/products/main/629249bec56301653754302.webp', 1, 61, '2022-05-28 14:11:42', '2022-05-28 14:11:42'),
(235, 'images/products/secondary/629249bed3d591653754302.webp', 0, 61, '2022-05-28 14:11:42', '2022-05-28 14:11:42'),
(236, 'images/products/secondary/629249bf0a9161653754303.webp', 0, 61, '2022-05-28 14:11:43', '2022-05-28 14:11:43'),
(237, 'images/products/secondary/629249bf2e8861653754303.webp', 0, 61, '2022-05-28 14:11:43', '2022-05-28 14:11:43'),
(238, 'images/products/secondary/629249bf5951e1653754303.webp', 0, 61, '2022-05-28 14:11:43', '2022-05-28 14:11:43'),
(239, 'images/products/main/62924a800a8361653754496.webp', 1, 62, '2022-05-28 14:14:56', '2022-05-28 14:14:56'),
(240, 'images/products/secondary/62924a8014aa11653754496.webp', 0, 62, '2022-05-28 14:14:56', '2022-05-28 14:14:56'),
(241, 'images/products/secondary/62924a80382b01653754496.webp', 0, 62, '2022-05-28 14:14:56', '2022-05-28 14:14:56'),
(242, 'images/products/secondary/62924a80593c01653754496.webp', 0, 62, '2022-05-28 14:14:56', '2022-05-28 14:14:56'),
(243, 'images/products/main/62924b39d1b3b1653754681.webp', 1, 63, '2022-05-28 14:18:01', '2022-05-28 14:18:01'),
(244, 'images/products/secondary/62924b39ea6321653754681.webp', 0, 63, '2022-05-28 14:18:01', '2022-05-28 14:18:01'),
(245, 'images/products/secondary/62924b3a2b9621653754682.webp', 0, 63, '2022-05-28 14:18:02', '2022-05-28 14:18:02'),
(246, 'images/products/secondary/62924b3a52eff1653754682.webp', 0, 63, '2022-05-28 14:18:02', '2022-05-28 14:18:02'),
(247, 'images/products/main/62925b822e8161653758850.webp', 1, 64, '2022-05-28 15:27:30', '2022-05-28 15:27:30'),
(248, 'images/products/secondary/62925b82604ad1653758850.webp', 0, 64, '2022-05-28 15:27:30', '2022-05-28 15:27:30'),
(249, 'images/products/secondary/62925b82b9f0b1653758850.webp', 0, 64, '2022-05-28 15:27:30', '2022-05-28 15:27:30'),
(250, 'images/products/secondary/62925b82da0e41653758850.webp', 0, 64, '2022-05-28 15:27:30', '2022-05-28 15:27:30'),
(251, 'images/products/main/62925d4aee4be1653759306.webp', 1, 65, '2022-05-28 15:35:06', '2022-05-28 15:35:06'),
(252, 'images/products/secondary/62925d4b044831653759307.webp', 0, 65, '2022-05-28 15:35:07', '2022-05-28 15:35:07'),
(253, 'images/products/secondary/62925d4b2c2101653759307.webp', 0, 65, '2022-05-28 15:35:07', '2022-05-28 15:35:07'),
(254, 'images/products/secondary/62925d4b4dfb01653759307.webp', 0, 65, '2022-05-28 15:35:07', '2022-05-28 15:35:07'),
(255, 'images/products/main/62925e62acf2c1653759586.webp', 1, 66, '2022-05-28 15:39:46', '2022-05-28 15:39:46'),
(256, 'images/products/secondary/62925e62b54b11653759586.webp', 0, 66, '2022-05-28 15:39:46', '2022-05-28 15:39:46'),
(257, 'images/products/secondary/62925e62de5571653759586.webp', 0, 66, '2022-05-28 15:39:46', '2022-05-28 15:39:46'),
(258, 'images/products/secondary/62925e63103d41653759587.webp', 0, 66, '2022-05-28 15:39:47', '2022-05-28 15:39:47'),
(259, 'images/products/secondary/62925e632fbbf1653759587.webp', 0, 66, '2022-05-28 15:39:47', '2022-05-28 15:39:47'),
(260, 'images/products/secondary/62925e635336d1653759587.webp', 0, 66, '2022-05-28 15:39:47', '2022-05-28 15:39:47'),
(261, 'images/products/main/62925f2c5de4e1653759788.webp', 1, 67, '2022-05-28 15:43:08', '2022-05-28 15:43:08'),
(262, 'images/products/secondary/62925f2c665431653759788.webp', 0, 67, '2022-05-28 15:43:08', '2022-05-28 15:43:08'),
(263, 'images/products/secondary/62925f2c8e5d41653759788.webp', 0, 67, '2022-05-28 15:43:08', '2022-05-28 15:43:08'),
(264, 'images/products/secondary/62925f2cb855e1653759788.webp', 0, 67, '2022-05-28 15:43:08', '2022-05-28 15:43:08'),
(265, 'images/products/secondary/62925f2cdb8cd1653759788.webp', 0, 67, '2022-05-28 15:43:08', '2022-05-28 15:43:08'),
(266, 'images/products/main/62926003a19ce1653760003.webp', 1, 68, '2022-05-28 15:46:43', '2022-05-28 15:46:43'),
(267, 'images/products/secondary/62926003b00d91653760003.webp', 0, 68, '2022-05-28 15:46:43', '2022-05-28 15:46:43'),
(268, 'images/products/secondary/62926003dfdc91653760003.webp', 0, 68, '2022-05-28 15:46:43', '2022-05-28 15:46:43'),
(269, 'images/products/secondary/629260041bc401653760004.webp', 0, 68, '2022-05-28 15:46:44', '2022-05-28 15:46:44'),
(270, 'images/products/secondary/6292600441a0d1653760004.webp', 0, 68, '2022-05-28 15:46:44', '2022-05-28 15:46:44'),
(271, 'images/products/secondary/6292600464cf91653760004.webp', 0, 68, '2022-05-28 15:46:44', '2022-05-28 15:46:44'),
(272, 'images/products/main/62926089eba731653760137.webp', 1, 69, '2022-05-28 15:48:57', '2022-05-28 15:48:57'),
(273, 'images/products/secondary/62926089f41d71653760137.webp', 0, 69, '2022-05-28 15:48:58', '2022-05-28 15:48:58'),
(274, 'images/products/secondary/6292608a2969d1653760138.webp', 0, 69, '2022-05-28 15:48:58', '2022-05-28 15:48:58'),
(275, 'images/products/secondary/6292608a4c6c61653760138.webp', 0, 69, '2022-05-28 15:48:58', '2022-05-28 15:48:58'),
(276, 'images/products/secondary/6292608a702811653760138.webp', 0, 69, '2022-05-28 15:48:58', '2022-05-28 15:48:58'),
(277, 'images/products/main/62926561cd9071653761377.webp', 1, 70, '2022-05-28 16:09:37', '2022-05-28 16:09:37'),
(278, 'images/products/secondary/62926561e02091653761377.webp', 0, 70, '2022-05-28 16:09:37', '2022-05-28 16:09:37'),
(279, 'images/products/secondary/629265621fd7e1653761378.webp', 0, 70, '2022-05-28 16:09:38', '2022-05-28 16:09:38'),
(280, 'images/products/secondary/6292656244abf1653761378.webp', 0, 70, '2022-05-28 16:09:38', '2022-05-28 16:09:38'),
(281, 'images/products/main/6292663412e0c1653761588.webp', 1, 71, '2022-05-28 16:13:08', '2022-05-28 16:13:08'),
(282, 'images/products/secondary/62926634359d31653761588.webp', 0, 71, '2022-05-28 16:13:08', '2022-05-28 16:13:08'),
(283, 'images/products/secondary/629266345df181653761588.webp', 0, 71, '2022-05-28 16:13:08', '2022-05-28 16:13:08'),
(284, 'images/products/secondary/629266348259b1653761588.webp', 0, 71, '2022-05-28 16:13:08', '2022-05-28 16:13:08'),
(285, 'images/products/main/629266b6dd1eb1653761718.webp', 1, 72, '2022-05-28 16:15:18', '2022-05-28 16:15:18'),
(286, 'images/products/secondary/629266b6e753c1653761718.webp', 0, 72, '2022-05-28 16:15:18', '2022-05-28 16:15:18'),
(287, 'images/products/secondary/629266b7139831653761719.webp', 0, 72, '2022-05-28 16:15:19', '2022-05-28 16:15:19'),
(288, 'images/products/main/6292672f3af0a1653761839.webp', 1, 73, '2022-05-28 16:17:19', '2022-05-28 16:17:19'),
(289, 'images/products/secondary/6292672f452771653761839.webp', 0, 73, '2022-05-28 16:17:19', '2022-05-28 16:17:19'),
(290, 'images/products/secondary/6292672f69af41653761839.webp', 0, 73, '2022-05-28 16:17:19', '2022-05-28 16:17:19'),
(291, 'images/products/main/629267e89e7221653762024.webp', 1, 74, '2022-05-28 16:20:24', '2022-05-28 16:20:24'),
(292, 'images/products/secondary/629267e8a6cb51653762024.webp', 0, 74, '2022-05-28 16:20:24', '2022-05-28 16:20:24'),
(293, 'images/products/secondary/629267e8d3f301653762024.webp', 0, 74, '2022-05-28 16:20:24', '2022-05-28 16:20:24'),
(294, 'images/products/secondary/629267e8f2f481653762024.webp', 0, 74, '2022-05-28 16:20:24', '2022-05-28 16:20:24'),
(295, 'images/products/main/6292686257fd01653762146.webp', 1, 75, '2022-05-28 16:22:26', '2022-05-28 16:22:26'),
(296, 'images/products/secondary/6292686262a291653762146.webp', 0, 75, '2022-05-28 16:22:26', '2022-05-28 16:22:26'),
(297, 'images/products/secondary/629268628770a1653762146.webp', 0, 75, '2022-05-28 16:22:26', '2022-05-28 16:22:26'),
(298, 'images/products/secondary/62926862b0e361653762146.webp', 0, 75, '2022-05-28 16:22:26', '2022-05-28 16:22:26'),
(299, 'images/products/secondary/62926862d7a471653762146.webp', 0, 75, '2022-05-28 16:22:26', '2022-05-28 16:22:26'),
(300, 'images/products/secondary/62926862ef81f1653762146.webp', 0, 75, '2022-05-28 16:22:26', '2022-05-28 16:22:26'),
(301, 'images/products/main/629268e9cec091653762281.webp', 1, 76, '2022-05-28 16:24:41', '2022-05-28 16:24:41'),
(302, 'images/products/secondary/629268e9d70db1653762281.webp', 0, 76, '2022-05-28 16:24:41', '2022-05-28 16:24:41'),
(303, 'images/products/secondary/629268ea05ef51653762282.webp', 0, 76, '2022-05-28 16:24:42', '2022-05-28 16:24:42'),
(304, 'images/products/secondary/629268ea238191653762282.webp', 0, 76, '2022-05-28 16:24:42', '2022-05-28 16:24:42'),
(305, 'images/products/secondary/629268ea436b61653762282.webp', 0, 76, '2022-05-28 16:24:42', '2022-05-28 16:24:42'),
(306, 'images/products/main/62926958524571653762392.webp', 1, 77, '2022-05-28 16:26:32', '2022-05-28 16:26:32'),
(307, 'images/products/secondary/62926958698861653762392.webp', 0, 77, '2022-05-28 16:26:32', '2022-05-28 16:26:32'),
(308, 'images/products/secondary/629269588a4bf1653762392.webp', 0, 77, '2022-05-28 16:26:32', '2022-05-28 16:26:32'),
(309, 'images/products/main/629269ef39c031653762543.webp', 1, 78, '2022-05-28 16:29:03', '2022-05-28 16:29:03'),
(310, 'images/products/secondary/629269ef436c11653762543.webp', 0, 78, '2022-05-28 16:29:03', '2022-05-28 16:29:03'),
(311, 'images/products/secondary/629269ef6028e1653762543.webp', 0, 78, '2022-05-28 16:29:03', '2022-05-28 16:29:03'),
(312, 'images/products/secondary/629269ef8b7ad1653762543.webp', 0, 78, '2022-05-28 16:29:03', '2022-05-28 16:29:03'),
(313, 'images/products/secondary/629269efb28ca1653762543.webp', 0, 78, '2022-05-28 16:29:03', '2022-05-28 16:29:03'),
(314, 'images/products/main/62926c2f5a8601653763119.webp', 1, 79, '2022-05-28 16:38:39', '2022-05-28 16:38:39'),
(315, 'images/products/secondary/62926c2f64e6d1653763119.webp', 0, 79, '2022-05-28 16:38:39', '2022-05-28 16:38:39'),
(316, 'images/products/secondary/62926c2f8aba01653763119.webp', 0, 79, '2022-05-28 16:38:39', '2022-05-28 16:38:39'),
(317, 'images/products/secondary/62926c2fab48e1653763119.webp', 0, 79, '2022-05-28 16:38:39', '2022-05-28 16:38:39'),
(318, 'images/products/main/62926d02a862f1653763330.webp', 1, 80, '2022-05-28 16:42:10', '2022-05-28 16:42:10'),
(319, 'images/products/secondary/62926d02b28cd1653763330.webp', 0, 80, '2022-05-28 16:42:10', '2022-05-28 16:42:10'),
(320, 'images/products/secondary/62926d02d66191653763330.webp', 0, 80, '2022-05-28 16:42:10', '2022-05-28 16:42:10'),
(321, 'images/products/secondary/62926d0304e7e1653763331.webp', 0, 80, '2022-05-28 16:42:11', '2022-05-28 16:42:11'),
(322, 'images/products/secondary/62926d032b49a1653763331.webp', 0, 80, '2022-05-28 16:42:11', '2022-05-28 16:42:11'),
(323, 'images/products/secondary/62926d03552591653763331.webp', 0, 80, '2022-05-28 16:42:11', '2022-05-28 16:42:11'),
(324, 'images/products/secondary/62926d03750cc1653763331.webp', 0, 80, '2022-05-28 16:42:11', '2022-05-28 16:42:11'),
(325, 'images/products/main/62926dedaf6811653763565.webp', 1, 81, '2022-05-28 16:46:05', '2022-05-28 16:46:05'),
(326, 'images/products/secondary/62926dedc20041653763565.webp', 0, 81, '2022-05-28 16:46:05', '2022-05-28 16:46:05'),
(327, 'images/products/secondary/62926dede57d11653763565.webp', 0, 81, '2022-05-28 16:46:05', '2022-05-28 16:46:05'),
(328, 'images/products/main/62926e7ecc5bd1653763710.webp', 1, 82, '2022-05-28 16:48:30', '2022-05-28 16:48:30'),
(329, 'images/products/secondary/62926e7ed76b21653763710.webp', 0, 82, '2022-05-28 16:48:30', '2022-05-28 16:48:30'),
(330, 'images/products/secondary/62926e7f0b7731653763711.webp', 0, 82, '2022-05-28 16:48:31', '2022-05-28 16:48:31'),
(331, 'images/products/secondary/62926e7f2501a1653763711.webp', 0, 82, '2022-05-28 16:48:31', '2022-05-28 16:48:31'),
(332, 'images/products/secondary/62926e7f4cf001653763711.webp', 0, 82, '2022-05-28 16:48:31', '2022-05-28 16:48:31'),
(333, 'images/products/secondary/62926e7f772e01653763711.webp', 0, 82, '2022-05-28 16:48:31', '2022-05-28 16:48:31'),
(334, 'images/products/secondary/62926e7fa05f01653763711.webp', 0, 82, '2022-05-28 16:48:31', '2022-05-28 16:48:31'),
(335, 'images/products/main/62926f6010a981653763936.webp', 1, 83, '2022-05-28 16:52:16', '2022-05-28 16:52:16'),
(336, 'images/products/secondary/62926f601ada51653763936.webp', 0, 83, '2022-05-28 16:52:16', '2022-05-28 16:52:16'),
(337, 'images/products/secondary/62926f60412a11653763936.webp', 0, 83, '2022-05-28 16:52:16', '2022-05-28 16:52:16'),
(338, 'images/products/secondary/62926f60690151653763936.webp', 0, 83, '2022-05-28 16:52:16', '2022-05-28 16:52:16'),
(339, 'images/products/secondary/62926f60966741653763936.webp', 0, 83, '2022-05-28 16:52:16', '2022-05-28 16:52:16'),
(340, 'images/products/secondary/62926f60bf07d1653763936.webp', 0, 83, '2022-05-28 16:52:16', '2022-05-28 16:52:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2015_04_14_150628_create_brands_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_04_14_00001_create_categories_table', 1),
(7, '2022_04_14_00002_create_subcategories_table', 1),
(8, '2022_04_14_003257_create_products_table', 1),
(9, '2022_04_14_004243_create_sizes_table', 1),
(10, '2022_04_14_154659_create_carts_table', 1),
(11, '2022_04_16_033224_create_product_images_table', 1),
(12, '2022_04_22_003641_add_quantity_to_products_table', 1),
(13, '2022_04_22_230752_rename_product_images_table', 2),
(16, '2022_05_04_225031_create_offers_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

DROP TABLE IF EXISTS `offers`;
CREATE TABLE IF NOT EXISTS `offers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0:active, 1:inactive',
  `discount` decimal(5,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `start_date`, `end_date`, `title`, `description`, `status`, `discount`, `created_at`, `updated_at`) VALUES
(2, '2022-05-07', '2022-05-30', 'Black Friday', NULL, 1, '20.00', '2022-05-07 01:39:07', '2022-05-07 01:39:07');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `subcategory_id` bigint(20) UNSIGNED NOT NULL,
  `offer_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_code_unique` (`code`),
  KEY `products_brand_id_foreign` (`brand_id`),
  KEY `products_subcategory_id_foreign` (`subcategory_id`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `code`, `price`, `quantity`, `description`, `brand_id`, `subcategory_id`, `offer_id`, `created_at`, `updated_at`) VALUES
(1, 'LG Television', '55ccc', '10000.00', '17', 'The images used in the product overview below are for representative purposes.\r\nRefer to the image gallery at the top of the page for an accurate representation.', 2, 1, 2, '2022-04-22 20:51:23', '2022-05-07 02:38:58'),
(2, 'Crystal UHD 4K Smart TV', 'sm334', '9999.00', '5', 'Beautiful picture with curve design\r\nVivid, vivid color expression\r\nhigh image quality', 2, 1, NULL, '2022-04-23 01:30:42', '2022-05-04 01:13:16'),
(11, 'LG 43 Inch FHD LED TV With Built In HD Receiver - 43Lm5500', 'lg123', '6199.00', '20', 'Full HD screen delivers more accurate images in stunning resolution and vivid color\r\nAdvanced image processor adjusts color for richer, more natural images', 8, 1, NULL, '2022-04-24 21:02:26', '2022-05-27 17:57:39'),
(12, 'LG 50 inches UHD 4K Smart TV, Active HDR, WebOS Operating System SERIES CINEMA SCREEN DESIGN ThinQ AI - 50UP7750PVB', 'lgc2c', '9455.00', '30', 'Features Brand LG Model 50UP7750PVB Type of processor A5 AI Processor 4K Number of sound channels 2 Design Cinema screen Display Nano color Yes Nano accuracy Yes PlatformOperating system webOS Smart TV Number of CPUs Quad Video and picture quality AI upscaling 4K Upscaling Image enhancing Yes AI brightness control Yes Filmmaker mode Yes Dynamic tone mapping HDR dynamic tone mapping HEVC 4K at 60P 10 bit VP9 Video decoder 4K', 8, 1, NULL, '2022-04-27 19:53:18', '2022-05-27 17:57:43'),
(13, 'LG OLED TV 88 Inch Z1 Series Gallery Design Cinema HDR WebOS Smart ThinQ AI 8K Pixel Dimming', 'lgo33', '20000.00', '3', 'LG OLED TV is a joy to behold. Self-lit pixels allow truly spectacular picture quality and a whole host of design possibilities, while the latest cutting-edge technologies help deliver unprecedented levels of wonder. This is everything you love about TV — elevated in every way.', 8, 1, NULL, '2022-04-27 20:08:14', '2022-04-27 20:08:14'),
(14, 'LG G2 65 inch evo Gallery Edition', 'lgg65', '11000.00', '7', 'The images used in the product overview below are for representative purposes. Refer to the image gallery at the top of the page for an accurate representation.', 8, 1, NULL, '2022-04-27 20:12:46', '2022-05-27 17:57:33'),
(15, 'OLYMPUS OM-D E-M1 Mark III Black Camera Body', 'ol333', '1599.00', '33', 'Let our OM-D E-M1 Mark III take your work to new heights without weighing you down. For starters, it’s part of the world’s most portable camera system. Compact and lightweight, it works seamlessly with our powerfully compact M. Zuiko PRO lenses. You’ll move easier, react faster and rediscover the joy of photography.', 9, 3, NULL, '2022-04-27 21:08:03', '2022-04-27 21:08:03'),
(16, 'OLYMPUS OM-D E-M5 Mark III Black Body with Black M.Zuiko Digital ED 12-45mm F4.0 PRO Lens Kit', 'olm52', '1399.00', '20', 'The OM-D E-M5 Mark III is compact, lightweight and comfortable - made for roaming the biggest cities to the smallest villages and even the most remote destinations on earth. Equipped with a range of pro technologies like 30fps Sequential Shooting', 9, 3, NULL, '2022-04-27 21:11:53', '2022-04-27 21:11:53'),
(17, 'Canon EOS R Mirrorless Full Frame Camera w/ RF 24-105mm F4 L IS USM Lens Kit - Vlogging Camera 4K, Content Creator Camera, Wi-Fi, 30.3 MP Full-Frame CMOS Sensor', 'ca000', '2899.00', '23', 'The EOS R combines a redeveloped lens mount and an updated full-frame image sensor for a unique and sophisticated multimedia camera system. Revolving around the new RF lens mount, the EOS R was created to be the means to make the most of a new series of lenses and optical technologies.', 7, 3, NULL, '2022-04-27 21:22:01', '2022-04-27 21:22:01'),
(18, 'Canon PowerShot SX420 Digital Camera w/ 42x Optical Zoom - Wi-Fi & NFC Enabled', 'ca001', '242.98', '30', 'Smart AUTO is a sophisticated Canon technology that makes getting that great shot as simple as pressing the shutter button. It automatically detects scenes by assessing various factors in both the background and the subject.', 7, 3, NULL, '2022-04-27 21:32:20', '2022-04-27 21:32:20'),
(19, 'Apple iPhone XR, 128GB, Black', 'ipx12', '359.00', '20', 'With the iPhone XR, you get a roomy 6.1-inch display, fast enough performance from Apple\'s A12 Bionic processor and good camera quality in a colourful design and affordable package. Apple has included the all-new Liquid Retina LCD as the display on the iPhone XR.', 1, 7, NULL, '2022-04-28 19:42:54', '2022-04-28 19:43:24'),
(20, 'Apple iPhone 12, 64GB, Black', 'ip64B', '599.00', '9', 'Unlocked and compatible with any carrier of choice on GSM and CDMA networks (e.g. AT&T, T-Mobile, Sprint, Verizon, US Cellular, Cricket, Metro, Tracfone, Mint Mobile, etc)', 1, 7, NULL, '2022-04-28 19:46:28', '2022-05-07 19:15:40'),
(21, 'SAMSUNG Galaxy S22 Ultra Smartphone, Factory Unlocked Android Cell Phone, 128GB, 8K Camera & Video, Brightest Display, S Pen, Long Battery Life, Fast 4nm Processor, US Version, Phantom White', 'sms22', '999.00', '10', '8K SUPER STEADY VIDEO: Shoot videos that rival how epic your life is with stunning 8K recording, the highest recording resolution available on a smartphone; Video captured is effortlessly smooth, thanks to Auto Focus Video Stabilization on Galaxy S22 Ultra', 2, 7, NULL, '2022-04-28 20:14:35', '2022-05-04 01:24:14'),
(22, 'SAMSUNG Galaxy A13 5G Cell Phone, Factory Unlocked Android Smartphone, 64GB, Long Lasting Battery, Expandable Storage, Triple Lens Camera, Infinite Display, US Version, Black', 'sma13', '249.99', '44', 'LONG-LASTING BATTERY: Whatever your day has in store, this mobile phone’s 15W Fast Charging battery makes sure you’re ready for it and gives your charger a break', 2, 7, NULL, '2022-04-28 20:21:15', '2022-04-28 20:21:15'),
(23, 'Flash Furniture Mid-Back Black Mesh Swivel Ergonomic Task Office Chair with Flip-Up Arms', 'fur55', '66.99', '50', 'Herman Miller is a 100-year-old-plus company that places great importance on design, the environment, community service, and the health and well-being', 10, 9, NULL, '2022-04-28 20:31:56', '2022-04-29 00:43:25'),
(24, 'YITAHOME Patio Furniture Set,7-Piece All-Weather Rattan Patio Conversation', 'hm7se', '723.99', '60', 'ALL-WEATHER STURDY CONSTRUCTION-Engineered with high strength checkered PE rattan woven on a rigid coated steel frame to resist all weather conditions and provide a steady & comfortable sitting experience of outdoor life.', 10, 9, NULL, '2022-04-29 00:49:20', '2022-04-29 00:49:20'),
(25, 'Home Future 2 Seat Sofa - Beige', 'fr2sf', '3284.00', '100', 'Home Future Beige 2-Seat Sofa\r\nWidth: 80cm Depth: 80cm Height: 200cm\r\nMaterial: Bean Wasfeng-Fabric: Plush and Linen\r\nSponge Density: 30', 10, 10, NULL, '2022-04-29 01:14:35', '2022-05-07 02:24:00'),
(37, 'Square Neck Pineapple Print Shirred Dress', 'SSD22', '20.00', '40', NULL, 14, 14, NULL, '2022-05-27 18:21:32', '2022-05-27 18:21:32'),
(38, 'SHEIN Ditsy Floral Puff Sleeve Ruched Bust Dress', 'SH213', '150.00', '19', 'Evoke a sense of nostalgia with this orange floral minidress from Tory Burch. Made from heavyweight twill to create a structed fit, it\'s designed with a square neck, slip pockets and an A-line skirt. Style yours with platform sandals for a directional look.', 14, 14, NULL, '2022-05-27 18:32:01', '2022-06-17 15:35:15'),
(39, 'SHEIN Button Front Rib-knit Bodycon Dress', '75jj5', '12.00', '30', 'When choosing a summer dress you want to find something that will keep you cool but also look good. While each woman will have different opinions on the best summer dress, ultimately it’s up to you to choose what you’re comfortable and confident in.', 15, 14, NULL, '2022-05-27 19:02:33', '2022-05-27 19:02:33'),
(40, 'SHEIN Tie Neck Ruched Bust Tiered Dress', '55lll', '22.00', '49', 'Get ready to really impress your date in our flowy and feminine Floral V-Neck Smocked Fit & Flare Dress! This fab frock boasts button details at the neckline and the prettiest allover pattern on its crinkled fabric, as well as a stretchy smocked waist panel for an extra-comfy fit. Ties at the shoulders add an unexpected yet fun accent', 15, 14, NULL, '2022-05-27 19:20:51', '2022-06-17 15:35:29'),
(41, 'Heart & Butterfly Print Round Neck Tee', 'he323', '8.00', '30', 'This awesome heart flutter graphic design is the perfect for women who love to watch monarchs and swallowtails flutter around the nectar feeder . If you have a huge heart to help others emerge from their cocoon , then this butterfly design is for you .', 15, 14, NULL, '2022-05-27 19:47:22', '2022-05-27 19:47:22'),
(42, 'Ditsy Floral Self-Tie Cami Peplum Top', 'dd876', '9.00', '100', 'all-over floral print stretchy smocked body and sleeves elasticated neck multi machine washable 100% cotton cambric lining 100% cotton cambric', 14, 14, NULL, '2022-05-27 20:05:19', '2022-05-27 20:05:19'),
(43, 'Shirred Bodice Swiss Dot Cami Top', 'sb333', '11.00', '25', 'Y\"Make this shirred frill sleeveless top your new favourite. Pair with denim for a casual look.', 16, 14, NULL, '2022-05-27 20:09:17', '2022-05-27 20:09:17'),
(44, '2pcs Letter Graphic Tank Top & 2pcs Halter Top', '44dsd', '21.00', '30', 'Sleeveless crop top. This garment may run small. We recommend you consult our size guide.', 16, 14, NULL, '2022-05-27 20:17:12', '2022-05-27 20:17:12'),
(45, 'Abstract Figure Graphic Drawstring Front Tee', 'AB232', '20.00', '33', 'short-sleeved cropped top enzyme wash and softener to keep it soft - wash after wash dropped shoulders for a relaxed', 14, 14, NULL, '2022-05-27 20:20:31', '2022-05-27 20:20:31'),
(46, 'Men Letter & Drink Print Tee', '34rsz', '11.00', '59', 'The attractive T-shirt has a crew neckline and short sleeves to keep you at ease all day long. This T-shirt will give you a comfortable feel, owing to the soft cotton blend fabric.', 12, 15, NULL, '2022-05-27 20:44:18', '2022-06-17 15:36:57'),
(47, 'Slogan Graphic Tee', 'ss123', '11.00', '51', 'Our classic soft tee\'s are perfect for everything. Style them your way.', 11, 15, NULL, '2022-05-27 20:53:50', '2022-05-27 20:53:50'),
(48, 'Men Ombre Pocket Detail Tee', 'mm222', '13.00', '50', 'New Model 2022. Variety of colours\r\nRibbed collar and contrast Callaway TPU logo on the wearer\'s right sleeve\r\n95% Polyester, 5% Elastane\r\nOmbre Pocket\r\nCGKS7056\r\nOpti-Dri: transfers moisture away from the body to aid in evaporation', 12, 15, NULL, '2022-05-28 10:44:30', '2022-05-28 10:44:30'),
(49, 'Men Cartoon Face Print Two Tone Tee', 'cc323', '13.00', '22', 'Color:Multicolor Style:Casual Pattern Type:C.artoonPattern \r\nSeason Summer Neckline Round Neck Sleeve Length Short Sleeve Sleeve Type Re\r\ngular Sleeve Length Regular Placket Type Pullovers Fit Type Regular Fit Fabric', 12, 15, NULL, '2022-05-28 11:20:38', '2022-05-28 11:20:38'),
(50, 'Men Reflective Panel Tee & Track Shorts', '75jj2', '23.00', '40', 'Color Black Style Preppy Pattern Type Letter Details Drawstring Season Summer Top Type T.ee Bottom Type T.rack S.hortsNecklineRound NeckSleeve L\r\nlength short SleeveSleeve TypeRegular SleeveFit TypeRegular FitFabric', 14, 15, NULL, '2022-05-28 11:33:15', '2022-05-28 11:33:15'),
(51, 'Men Letter And Tropical Print Tee & Sweatpants', 'SHE31', '31.00', '50', 'OFFICIAL NHL MERCHANDISE: Support your favourite team in style with this officially licensed NHL shirt, complete with NHL hang tags\r\nCOMFORT, STYLE, AND FIT: The performance fabric moves with your body, and is designed to wick-moisture while keeping you cool\r\nSCREEN PRINTED GRAPHICS: Distressed team logo print has a soft hand finish to keep the shirt feeling light on your skin', 14, 15, NULL, '2022-05-28 11:51:10', '2022-05-28 11:51:10'),
(52, 'Men Feather Print Tee & Slogan Graphic Drawstring Waist Sweatpants', 'MM333', '30.00', '250', 'Clothing worn on the upper part of the body. Covers from shoulders to waist. May or may not have sleeves, collar hoods, etc. Designed for men.', 14, 15, NULL, '2022-05-28 11:55:59', '2022-05-28 11:55:59'),
(53, 'Men Letter Patched Detail Pocket Front Shirt Without Tee', 'LL482', '34.00', '21', 'Full cut silhouette\r\nTaped shoulder-to-shoulder\r\nDouble-needle sleeve and bottom hem\r\nThis T-shirt Is Unisex Size Super Soft And Very Comfortable.\r\nWhere to wear: Our stylish T-shirts are perfect for sports, vacations, music festivals, parties, beaches and casual wear, It’s favourite costume for rappers and skateboard lovers.', 11, 15, NULL, '2022-05-28 11:59:12', '2022-05-28 11:59:12'),
(54, 'Men Flat Top Fashion Glasses', 'SUN01', '8.00', '100', 'Plastic frame\r\nPolycarbonate lens\r\nNon-Polarized\r\nUV Protection Coating coating\r\nLens width: 60 millimetres\r\nLens height: 48 millimeters\r\nBridge: 18 millimeters\r\nArm: 140 millimeters\r\nOversized Sunglasses for women is fashion style brand designer,It is suitable for any face, show your unique and fashion.The most fashionable flat top design, the perfect cover your eyes.', 17, 16, NULL, '2022-05-28 13:00:52', '2022-05-28 13:00:52'),
(55, 'Men Flat Top Tinted Lens Fashion Glasses', 'SUN02', '9.00', '50', 'Plastic frame Plastic lens Non-Polarized UV Protection Coating coating Lens width: 141 millimeters Lens height: 55 millimeters Bridge: 18 millimeters Arm: 132 millimetres SUPER DARK BLACK LENS: Look sleek and flashy with these blackout shades. A dark black lens maintains your privacy since you cannot see the wearer\'s eyes and also helps prevent migraines and headaches on bright sunny days.', 17, 16, NULL, '2022-05-28 13:30:07', '2022-05-28 13:30:07'),
(56, 'Men Tinted Lens Fashion Glasses', 'SUN03', '7.00', '22', '【BLUE LIGHT BLOCKING GLASSES】Made of Environmental & Skin-Friendly Materials, LightWeight and Durable, Shatterproofnon Fragile and Easy to Clean, and Safe to Wear. and our Blue Light Glasses feature a blue light filter embedded into the lens as well as the lens coating. 100% UVA/UVB protection with an anti-scratch and anti-reflective coating.', 18, 16, NULL, '2022-05-28 13:34:12', '2022-05-28 13:34:12'),
(57, 'Square Frame Fashion Glasses', 'SUN04', '5.00', '30', 'Composite frame plastic lens non-polarized UV Protection Coating coating Lens width: 60 millimeters Lens height: 48 millimeters Bridge: 14 millimeters Arm: 126 millimeters Measurements: 5 15/16\" (151 mm) W x 2 1/4\" (57 mm) H 100% UV 400 Protection Polycarbonate Lens', 18, 16, NULL, '2022-05-28 13:37:32', '2022-05-28 13:37:32'),
(58, '2pcs Tinted Lens Fashion Glasses', 'SUN05', '7.00', '20', 'Made of high quality PC Polycarbonate material, durable enough for long time using\r\nRetro style rectangle cut sunglasses design, colorful tinted lens, chic and stylish, a must-have item for cool-girl fashion accessory\r\nMetal arm make this sunglasses durable and shatterproof\r\nStylish rimless frames sunglasses for beach vacation, festival, shopping, , fashion street or cosplay etc.\r\nGreat present to your families, lovers or best friends!', 17, 16, NULL, '2022-05-28 13:40:45', '2022-05-28 13:40:45'),
(59, 'Anti-Blue Light Textured Frame Eyeglasses', 'SUN06', '7.00', '35', 'Plastic frame plastic lens non-polarized Lens width: 60 millimeters Arm: 140 millimeters DIMENSION:Lens height:45MM，Lens width:60MM,Bridge:15MM,Arm length:140MM\r\nMATERIAL: The composite frame is made of high-quality material technology, which has the characteristics of super lightness, abrasion resistance, low friction coefficient and so on. It can effectively prevent the damage to the eyes and face caused by the fracture and friction of the eyeglasses frame in the movement', 17, 16, NULL, '2022-05-28 13:44:25', '2022-05-28 13:44:25'),
(60, 'Toddler Kids Graphic Frame Fashion Glasses', '7SUN0', '7.00', '36', 'Plastic frame Plastic lens UV Protection Coating coating Made of plastic with metal hinges, they are durable The frame has a clear lens with 100% UV protection  You can take it to your eye doctor to replace with prescription lens Frame Size (approximate): Width: 5\", Height: 1.5\" Note: The glasses fit most 3-10-year-old kids but it depends on the size of the kids. For more accuracy, please refer to the frame size.', 17, 16, NULL, '2022-05-28 13:48:12', '2022-05-28 13:48:12'),
(61, 'Girls Allover Floral Print Shirred Back Ruffle Hem Slip Dress', 'CHI02', '50.00', '100', '100% Polyester Imported Pull On closure Soft, skin-friendly and comfortable fabric, fabric has a non stretch Featuring with allover print, wrap, ruffle hem, v neckline, cap sleeve, shirred high waist long dress for women Suitable to match it with your beautiful handbag, necklaces, earrings, and high heels for a stylish and charming look', 19, 17, NULL, '2022-05-28 14:11:42', '2022-05-28 14:11:42'),
(62, 'Girls Mock-neck Lantern Sleeve Heart Dress', 'CHI03', '15.00', '19', '64% Polyester, 26% Viscose, 10% Nylon Tie closure Chenille sweater dress features a crew ribbed neckline, long bishop sleeves formed by elastic cuffs The dress features with an included matching belt for an optimal waist, and a ribbed hemline This sweater is made with Chenille yarn, extremely soft and comfy The One and only dress you will want to wear all season long. No other sweater dress will do Model is wearing a small', 19, 17, NULL, '2022-05-28 14:14:55', '2022-06-17 13:37:46'),
(63, 'Girls Rainbow Striped Dress', 'CHI04', '20.00', '30', 'COTTON DRESS: Made from comfy jersey fabric, giving the girls optimum comfort throughout the day. MULTI BRIGHT COLORS STRIPED DRESS: featuring a rainbow striped, with embroidered rainbow detailing, this colorful long-sleeve dress is a fun everyday wardrobe addition they\'ll love to wear.\r\nCotton\r\nMachine Wash\r\nFastening: Pull-On\r\nA-Line\r\nLoose\r\nLong Sleeve', 19, 17, NULL, '2022-05-28 14:18:01', '2022-06-17 15:51:23'),
(64, 'Toddler Boys Slogan Graphic Tie Dye Tee', 'CHI06', '6.00', '40', '60% cotton, polyester Machine wash Imported SUSTAINABILITY FEATURES Supports more sustainable cotton farming Sourced through Better Cotton Initiative™', 19, 17, NULL, '2022-05-28 15:27:30', '2022-05-28 15:27:30'),
(65, 'Toddler Boys 3pcs Solid Polo Shirt', 'CHI08', '30.00', '40', '100% Cotton Boys Toddler Adorable Solid Casual Polo Shirt Size 3T Advised 2-3 Years Height 35-39inch, Weight 30-33pounds\r\nBoys Toddler Adorable Solid Casual Polo Shirt Size 4T Advised 3-4 Years Height 39-43inch, Weight 33-37pounds Boys Toddler Adorable Solid Casual Polo Shirt Size 5T Advised 4-5 Years Height 43-47inch, Weight 37-46pounds', 19, 17, NULL, '2022-05-28 15:35:06', '2022-05-28 15:35:06'),
(66, 'Toddler Boys Cartoon Graphic Tee & Shorts', 'CHI09', '11.00', '58', '100% Cotton Imported Machine Wash Ribbed neckline Short-sleeve Trusted Carter\'s quality, everyday low prices, and hassle-free tag less packaging-exclusively for Amazon member', 19, 17, NULL, '2022-05-28 15:39:46', '2022-05-28 15:39:46'),
(67, 'Toddler Boys Rocket & Planet Print Tee & Shorts', 'CHI10', '12.00', '60', '100% Cotton Pull-On closure Line Dry Officially Approved By NASA With COOL designs, including FUN phrases and STYLISH prints! They\'re out of this world! A Convenient and easy way to dress and make multiple different outfits! Enjoy all of these AWESOME colours of Red, Black, Grey, White and more! SOFT FABRIC: 100% Cotton and soft material for young boys. What better than to get a pack of 4 soft shirts that you can switch out!', 19, 17, NULL, '2022-05-28 15:43:08', '2022-05-28 15:43:08'),
(68, 'Baby Allover Butterfly Print Sleeveless Dress', 'CHI11', '9.00', '52', 'Zipper closure Hand Wash Only Material: cotton, Polyester, Jacquard, Comfortable hand feeling, High-quality fabric made, focus on the skin safety of girls. Light Weight, Convenience to wear, take care of Girl’s skin Dresses sizes for little girls 5-12 years old', 19, 17, NULL, '2022-05-28 15:46:43', '2022-05-28 15:46:43'),
(69, 'Baby Heart Print Shirred Puff Sleeve Dress', 'CHI12', '13.00', '66', 'DeFacto | BabyGirl Orange Casual Dress Gender: BabyGirl, Buyer Group: Dress & Skirt, Colour Family: Orange, Fit: Regular Fit, ShellFabric1 Cotton 97% Elastane 3%', 19, 17, NULL, '2022-05-28 15:48:57', '2022-05-28 15:48:57'),
(70, 'Color Block Scarf', 'HAM01', '6.00', '44', 'The great vintage scarf can be worn in several ways. Red and black colour block. The designer\'s signature is in the corner but it is hard to make out. Polyester. Great condition. Measures 7\" wide and 58\" long.', 20, 18, NULL, '2022-05-28 16:09:37', '2022-05-28 16:09:37'),
(71, 'Paisley Print Bandana', 'HAM02', '4.00', '30', '100% Cotton\r\nLARGE COTTON BANDANA – Large 22” x 22” classic square bandana is a perfect size to wear as a headband for a party or during a workout, head scarf to cover hair or bald head, wristband, necktie and more\r\n100% COTTON – Beautiful high-quality cotton with a 68 x 68 thread count that will only get softer over time. Soft to the touch and very comfortable to wear.', 20, 18, NULL, '2022-05-28 16:13:07', '2022-05-28 16:13:07'),
(72, 'Minimalist Solid Scarf', 'HAM03', '5.00', '10', 'Thin, soft and natural 100% linen scarf. Pleasant to wear, a simple, elegant scarf made from the highest quality European 100% linen fabric - stonewashed and softened.', 20, 18, NULL, '2022-05-28 16:15:18', '2022-05-28 16:15:18'),
(73, 'Two Tone Scarf', 'HAM05', '6.00', '60', 'All Little Otavalo products are handmade by the indigenous people of the Andes Mountains in Ecuador’s Otavalo City. As such, Little Otavalo uses alpaca wool because of its elegant fibres, which are warmer, lighter, and stronger than cashmere.', 20, 18, NULL, '2022-05-28 16:17:19', '2022-05-28 16:17:19'),
(74, 'Minimalist Solid Scarf', 'HAM04', '5.00', '20', 'Minimalist accessory in this season\'s most sought-after shades\r\nFringes at the ends\r\nSoft and warm acrylic weave\r\n12\" x 65.7\" (30.6 x 167 cm)', 20, 18, NULL, '2022-05-28 16:20:24', '2022-05-28 16:20:24'),
(75, 'Lotus Flower Print Scarf', 'HAM06', '4.00', '25', 'Seconds Sale Lotus Flower Print Grey Cotton Mix Scarf with Herringbone Detail and Frayed Edges', 20, 18, NULL, '2022-05-28 16:22:26', '2022-05-28 16:22:26'),
(76, 'Flower Print Scarf', 'HAM07', '3.00', '70', 'Georgette\r\nDry Cleaning, Hand Wash\r\nMaterial: Georgette. a kind of very thin silk, light and thin fabric that you can see through.\r\nSize:63Lx19.68W inches (160cmx50cm),super soft and comfortable\r\nFashion design: The Cute Floral Print Scarf is a classical style scarf, it\'s a perfect decoration for your outfit.\r\nSilk Square Scarf soft with great silky hand feel; Sensual and free-flowing', 20, 18, NULL, '2022-05-28 16:24:41', '2022-05-28 16:24:41'),
(77, 'Color Block Scarf', 'HAM08', '7.00', '55', 'Cotton Linen\r\nSize: 31.5\"x74.8\"(80CMx190CM) including the fringe, length is great for many kinds of styles, like Drape, Ascot, Once Round, Twice Round.\r\nMaterial: Soft cotton and linen scarf, warm but lightweight, will keep your neck stays toasty.\r\nMen\'s Fashion Accessories: the stylish male scarf is easy to add character and style to any outfit. Perfect choice for anyone who loves soft touch of nature as well as a sense of urban style added to the outfit.', 20, 18, NULL, '2022-05-28 16:26:32', '2022-05-28 16:26:32'),
(78, 'Gradient Mesh Scarf', 'HAM09', '3.00', '50', 'Featuring lacey, mesh stitching and stunning gradient colour palettes, these infinity scarves are the perfect outdoor accessories! May be worn circled around the neck or draped over the shoulders.', 20, 18, NULL, '2022-05-28 16:29:03', '2022-05-28 16:29:03'),
(79, '4pcs Letter Detail Beaded Face Covering Chain', 'HMA01', '8.00', '70', '【 Y2K Accessory】Cute Phone Charm! Equipped with smileys, stars, hearts, LOVE, evil eye, and other patterns. Easily match your clothes to make you highlight the youthful atmosphere!【 4-Pack 】Made of faux pearl, acrylic beads, glass beads, soft ceramic, polymer clay, string together with strong nylon rope, not easy to break', 20, 19, NULL, '2022-05-28 16:38:39', '2022-05-28 16:38:39'),
(80, '1pc Plastic Hand Press', 'HMA02', '7.00', '85', 'HandPro is the latest PLASTGrommet development in eyelet presses for the growing fabric market. It has been designed to work bench mounted and customer can easily adjust closing of the eyelet so it doesn’t roll even on light fabrics.', 20, 19, NULL, '2022-05-28 16:42:10', '2022-05-28 16:42:10'),
(81, 'Flower Print Hand Embroidery', 'HMA03', '6.00', '25', 'Oh, the moon. She\'s my jam! When drawing out this design, I may have overlooked how many elements I could comfortably put in a 6\"x6\" hoop, so when I printed it on my fabric, I realized that the entire piece would have to be done with just 1 or 2 strands of floss at a time. This happy accident resulted in an incredibly delicate feel, making this one of my favourite pieces of all time!', 20, 19, NULL, '2022-05-28 16:46:05', '2022-05-28 16:46:05'),
(82, 'Floral Pattern Cross Stitch', 'HMA05', '7.00', '50', 'The pattern was made personally by me, using computer software. First photo is computer generated preview. Zoom. You may choose to stitch on any fabric you prefer. Note that fabric count size reflects on your finished design size.', 20, 19, NULL, '2022-05-28 16:48:30', '2022-05-28 16:48:30'),
(83, 'MOTF PREMIUM 14K GOLD PLATED HANDMADE BRAIDED SECTOR DECOR EARRINGS', 'HMA06', '10.00', '23', 'Gender:	Women\r\nQuantity:	2 pcs\r\nStyle:	Vacation\r\nDetails:	Geometric\r\nColor:	Beige\r\nMagnetic:	No\r\nMetals Type:	K-Gold', 20, 19, NULL, '2022-05-28 16:52:16', '2022-05-28 16:52:16');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

DROP TABLE IF EXISTS `sizes`;
CREATE TABLE IF NOT EXISTS `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `small` tinyint(4) DEFAULT NULL,
  `medium` tinyint(4) DEFAULT NULL,
  `large` tinyint(4) DEFAULT NULL,
  `xlarge` tinyint(4) DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sizes_product_id_foreign` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

DROP TABLE IF EXISTS `subcategories`;
CREATE TABLE IF NOT EXISTS `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'default-subcategory.png',
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subcategories_category_id_foreign` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `description`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'TV & Video', 'An electronic system of transmitting transient images of fixed or moving objects together', 'images/subcategories/62632bcbcb6571650666443.jpg', 1, '2022-04-22 20:27:24', '2022-04-26 19:46:32'),
(3, 'Camera & Photo', 'camera, in photography, device for recording an image of an object on a light-sensitive surface; it is essentially a light-tight box with an aperture to admit light focused onto a sensitized film or plate.', 'images/subcategories/62632d88211291650666888.jpg', 1, '2022-04-22 20:34:48', '2022-04-22 20:34:48'),
(4, 'Skin care', 'Beauty Body, Eyes, Face, Gift Sets, Hands & Feet, Lips and more from the wide range of products', 'images/subcategories/6263301f76cce1650667551.jpg', 3, '2022-04-22 20:45:51', '2022-04-22 20:45:51'),
(6, 'Laptops & Computers', 'Shop online for Laptops - Computers, Components & Accessories from a huge selection of popular items in Egypt. Souq is now Amazon.eg. Free shipping & Cash ...', 'images/subcategories/626867ed0bc451651009517.jpg', 1, '2022-04-26 19:23:49', '2022-04-26 19:45:17'),
(7, 'Cell Phones', NULL, 'images/subcategories/62686d4fe9bfa1651010895.webp', 1, '2022-04-26 20:08:15', '2022-04-26 20:08:15'),
(8, 'Bedroom', 'bedroom Add to list Share. A bedroom is a room in a house for the bed, so it\'s mainly used for sleeping', 'images/subcategories/62687544db17a1651012932.jpg', 5, '2022-04-26 20:42:12', '2022-04-26 20:42:12'),
(9, 'Office', 'An office room is a private enclosed space and better known as an office unit. Office rooms are for rent from 6 square meters up to 100 square meters.', 'images/subcategories/62687832a72c91651013682.webp', 5, '2022-04-26 20:54:42', '2022-04-26 20:54:42'),
(10, 'Living Room', 'A living room is a room in a home that\'s used for entertaining friends, talking, reading, or watching television.', 'images/subcategories/626879839f5111651014019.jpg', 5, '2022-04-26 21:00:19', '2022-04-26 21:00:19'),
(11, 'Kitchen & Dining', 'A kitchen is a room or part of a room used for cooking and food preparation in a dwelling or in a commercial establishment.', 'images/subcategories/62687b598273f1651014489.jpg', 5, '2022-04-26 21:08:09', '2022-04-26 21:08:09'),
(12, 'Cookware', 'Cookware and bakeware are food preparation equipment, such as cooking pots, pans, baking sheets etc. used in kitchens. Cookware is used on a stove or range cooktop, while bakeware is used in an oven.', 'images/subcategories/6268807b92f091651015803.webp', 6, '2022-04-26 21:30:03', '2022-04-26 21:30:03'),
(13, 'Dinnerware & Tabletop', 'Tableware is any dish or dishware used for setting a table, serving food, and dining. It includes cutlery, glassware, serving dishes, and others', 'images/subcategories/6268812b3d89b1651015979.webp', 6, '2022-04-26 21:32:59', '2022-04-26 21:32:59'),
(14, 'Women', 'When choosing a summer dress you want to find something that will keep you cool but also look good. While each woman will have different opinions on the best summer dress, ultimately it’s up to you to choose what you’re comfortable and confident in.', 'images/subcategories/6268b9f3516c81651030515.jpg', 7, '2022-04-27 01:35:15', '2022-04-27 01:35:15'),
(15, 'Men', 'Men\'s clothes are articles of clothing designed for and worn by men. Typical men\'s clothes include trousers, shirts, jeans, suits, sweaters, gloves, jackets, and hats.', 'images/subcategories/6268bad92c1571651030745.png', 7, '2022-04-27 01:39:05', '2022-04-27 01:39:05'),
(16, 'Sunglasses', NULL, 'images/subcategories/62923746090081653749574.jpg', 7, '2022-05-28 12:52:54', '2022-05-28 12:52:54'),
(17, 'Children', 'Children\'s clothing or kids\' clothing is clothing for children who have not yet grown to full height. Children\'s clothing is often more casual than adult clothing, fit for play and rest.', 'images/subcategories/62924830888181653753904.webp', 7, '2022-05-28 14:05:04', '2022-05-28 14:05:04'),
(18, 'Scarf', 'handmade as an item made by hand or by a hand process. It was first used in the early seventeenth century. Other definitions include the aspect of craftsmanship and imply that a handmade item is typical of higher quality than one mass-produced by a machine.', 'images/subcategories/629263bea1e5a1653760958.jpg', 7, '2022-05-28 16:02:38', '2022-05-28 16:31:05'),
(19, 'Handmade', 'handmade as an item made by hand or by a hand process. It was first used in the early seventeenth century. Other definitions include the aspect of craftsmanship and imply that a handmade item is typically of higher quality than one mass produced by a machine', 'images/subcategories/62926b844f7261653762948.jpg', 7, '2022-05-28 16:35:48', '2022-05-28 16:35:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'default-user.png',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_phone_unique` (`phone`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `phone`, `street`, `city`, `country`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Eda Hackett', 'admin', 'olittel@example.org', '2022-04-22 19:41:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '959.990.9597', 'Ondricka Dam', 'Port Lonnieburgh', 'Guinea-Bissau', 'images/users/default-user.png', 'D17aBmHUzy', '2022-04-22 19:41:54', '2022-04-22 19:41:54'),
(2, 'Dr. Dorian McGlynn DDS', 'admin', 'rdickinson@example.org', '2022-04-22 19:41:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1-364-999-3210', 'Steuber Brook', 'New Carloschester', 'Romania', 'images/users/default-user.png', 'pva2GnnT6s', '2022-04-22 19:41:54', '2022-04-22 19:41:54'),
(3, 'Constance Schumm', 'user', 'amie61@example.net', '2022-04-22 19:41:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '+1-239-957-7347', 'Herzog Stravenue', 'South Cheyenne', 'Cyprus', 'images/users/default-user.png', 'XKWAO3RTRY', '2022-04-22 19:41:54', '2022-04-22 19:41:54'),
(4, 'Gilberto Marks', 'user', 'oschneider@example.net', '2022-04-22 19:41:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '+1-906-966-7021', 'Lemuel Centers', 'Lake Dedrickmouth', 'Armenia', 'images/users/default-user.png', 'rtvxDcuhNP', '2022-04-22 19:41:54', '2022-04-22 19:41:54'),
(5, 'Marques Smitham', 'user', 'jeffrey15@example.com', '2022-04-22 19:41:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '+12127477149', 'Doyle Turnpike', 'Nedrahaven', 'Israel', 'images/users/default-user.png', 'R2btGg2U6Y', '2022-04-22 19:41:54', '2022-04-22 19:41:54'),
(6, 'Sid Nienow', 'admin', 'elfrieda.stehr@example.org', '2022-04-22 19:41:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '361.200.4079', 'Rodolfo Pass', 'Volkmanport', 'Trinidad and Tobago', 'images/users/default-user.png', 'AIhYPwuHU0', '2022-04-22 19:41:55', '2022-04-22 19:41:55'),
(7, 'Magdalen Gislason', 'admin', 'maribel84@example.net', '2022-04-22 19:41:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '251-753-8238', 'Aurelio Highway', 'Lake Leonorafurt', 'Cayman Islands', 'images/users/default-user.png', 'kYfOr4b3g2', '2022-04-22 19:41:55', '2022-04-22 19:41:55'),
(8, 'Ms. Felicia Wyman Sr.', 'admin', 'tamia.johnston@example.com', '2022-04-22 19:41:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '402.296.1548', 'Jazmin Pines', 'West Ayla', 'Suriname', 'images/users/default-user.png', '8U9dVJvlRM', '2022-04-22 19:41:55', '2022-04-22 19:41:55'),
(9, 'Madge Beatty', 'admin', 'mohr.ryder@example.org', '2022-04-22 19:41:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1-458-778-8834', 'Lolita Flat', 'Port Vitachester', 'Benin', 'images/users/default-user.png', 'jdo7UL5QUF', '2022-04-22 19:41:55', '2022-04-22 19:41:55'),
(10, 'Prof. Donavon Ruecker Sr.', 'user', 'ulices.connelly@example.com', '2022-04-22 19:41:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '(931) 516-3906', 'Rosetta Groves', 'Kirlinborough', 'Panama', 'images/users/default-user.png', 'wuouIGJTy0', '2022-04-22 19:41:55', '2022-04-22 19:41:55'),
(11, 'Saad ELkammah', 'admin', 'saad1998elkammah@gmail.com', NULL, '$2y$10$mGnF3xSo1Q.tDIWEsJEYi.3X04SrmDZtNEnkPNeRXvjBsBilhxq0S', '01025608740', NULL, NULL, NULL, 'images/users/default-user.png', 'wsLizlkDB6jdmDL4IgbJtpyppLwu3sLIybBJi786KPLsYdskZaibyFNtEglS', '2022-04-22 19:44:53', '2022-04-26 18:17:51'),
(12, 'Ahmed', 'user', 'ahmed@yahoo.com', NULL, '$2y$10$u2RRELyFCK9A66QLio42m.QWjcea0ckFo57Uf8AwVwvTkXpVXrZbW', '01025458780', NULL, NULL, NULL, 'default-user.png', NULL, '2022-04-29 18:39:47', '2022-04-29 18:39:47');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sizes`
--
ALTER TABLE `sizes`
  ADD CONSTRAINT `sizes_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
