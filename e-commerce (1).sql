-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3309
-- Generation Time: May 07, 2022 at 03:08 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(10, 'Herman Miller', 'Herman Miller is a 100-year-old-plus company that places great importance on design, the environment, community service, and the health and well-being of', 'images/brands/626dcfaf975b31651363759.png', 1, '2022-04-28 20:29:17', '2022-04-30 22:09:19');

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
(12, 12, 1, '2022-05-04 01:25:31', '2022-05-04 01:25:31'),
(12, 14, 1, '2022-05-04 01:25:57', '2022-05-04 01:25:57'),
(12, 20, 1, '2022-05-04 01:22:43', '2022-05-04 01:22:43');

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
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(104, 'images/products/secondary/6272ef8dc73c81651699597.jpg', 0, 22, '2022-05-04 19:26:37', '2022-05-04 19:26:37');

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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `code`, `price`, `quantity`, `description`, `brand_id`, `subcategory_id`, `offer_id`, `created_at`, `updated_at`) VALUES
(1, 'LG Television', '55ccc', '10000.00', '17', 'The images used in the product overview below are for representative purposes.\r\nRefer to the image gallery at the top of the page for an accurate representation.', 2, 1, 2, '2022-04-22 20:51:23', '2022-05-07 02:38:58'),
(2, 'Crystal UHD 4K Smart TV', 'sm334', '9999.00', '5', 'Beautiful picture with curve design\r\nVivid, vivid color expression\r\nhigh image quality', 2, 1, NULL, '2022-04-23 01:30:42', '2022-05-04 01:13:16'),
(11, 'LG 43 Inch FHD LED TV With Built In HD Receiver - 43Lm5500', 'lg123', '6199.00', '20', 'Full HD screen delivers more accurate images in stunning resolution and vivid color\r\nAdvanced image processor adjusts color for richer, more natural images', 8, 1, NULL, '2022-04-24 21:02:26', '2022-05-04 01:25:44'),
(12, 'LG 50 inches UHD 4K Smart TV, Active HDR, WebOS Operating System SERIES CINEMA SCREEN DESIGN ThinQ AI - 50UP7750PVB', 'lgc2c', '9455.00', '29', 'Features Brand LG Model 50UP7750PVB Type of processor A5 AI Processor 4K Number of sound channels 2 Design Cinema screen Display Nano color Yes Nano accuracy Yes PlatformOperating system webOS Smart TV Number of CPUs Quad Video and picture quality AI upscaling 4K Upscaling Image enhancing Yes AI brightness control Yes Filmmaker mode Yes Dynamic tone mapping HDR dynamic tone mapping HEVC 4K at 60P 10 bit VP9 Video decoder 4K', 8, 1, NULL, '2022-04-27 19:53:18', '2022-05-04 01:25:31'),
(13, 'LG OLED TV 88 Inch Z1 Series Gallery Design Cinema HDR WebOS Smart ThinQ AI 8K Pixel Dimming', 'lgo33', '20000.00', '3', 'LG OLED TV is a joy to behold. Self-lit pixels allow truly spectacular picture quality and a whole host of design possibilities, while the latest cutting-edge technologies help deliver unprecedented levels of wonder. This is everything you love about TV — elevated in every way.', 8, 1, NULL, '2022-04-27 20:08:14', '2022-04-27 20:08:14'),
(14, 'LG G2 65 inch evo Gallery Edition', 'lgg65', '11000.00', '6', 'The images used in the product overview below are for representative purposes. Refer to the image gallery at the top of the page for an accurate representation.', 8, 1, NULL, '2022-04-27 20:12:46', '2022-05-04 01:25:58'),
(15, 'OLYMPUS OM-D E-M1 Mark III Black Camera Body', 'ol333', '1599.00', '33', 'Let our OM-D E-M1 Mark III take your work to new heights without weighing you down. For starters, it’s part of the world’s most portable camera system. Compact and lightweight, it works seamlessly with our powerfully compact M. Zuiko PRO lenses. You’ll move easier, react faster and rediscover the joy of photography.', 9, 3, NULL, '2022-04-27 21:08:03', '2022-04-27 21:08:03'),
(16, 'OLYMPUS OM-D E-M5 Mark III Black Body with Black M.Zuiko Digital ED 12-45mm F4.0 PRO Lens Kit', 'olm52', '1399.00', '20', 'The OM-D E-M5 Mark III is compact, lightweight and comfortable - made for roaming the biggest cities to the smallest villages and even the most remote destinations on earth. Equipped with a range of pro technologies like 30fps Sequential Shooting', 9, 3, NULL, '2022-04-27 21:11:53', '2022-04-27 21:11:53'),
(17, 'Canon EOS R Mirrorless Full Frame Camera w/ RF 24-105mm F4 L IS USM Lens Kit - Vlogging Camera 4K, Content Creator Camera, Wi-Fi, 30.3 MP Full-Frame CMOS Sensor', 'ca000', '2899.00', '23', 'The EOS R combines a redeveloped lens mount and an updated full-frame image sensor for a unique and sophisticated multimedia camera system. Revolving around the new RF lens mount, the EOS R was created to be the means to make the most of a new series of lenses and optical technologies.', 7, 3, NULL, '2022-04-27 21:22:01', '2022-04-27 21:22:01'),
(18, 'Canon PowerShot SX420 Digital Camera w/ 42x Optical Zoom - Wi-Fi & NFC Enabled', 'ca001', '242.98', '30', 'Smart AUTO is a sophisticated Canon technology that makes getting that great shot as simple as pressing the shutter button. It automatically detects scenes by assessing various factors in both the background and the subject.', 7, 3, NULL, '2022-04-27 21:32:20', '2022-04-27 21:32:20'),
(19, 'Apple iPhone XR, 128GB, Black', 'ipx12', '359.00', '20', 'With the iPhone XR, you get a roomy 6.1-inch display, fast enough performance from Apple\'s A12 Bionic processor and good camera quality in a colourful design and affordable package. Apple has included the all-new Liquid Retina LCD as the display on the iPhone XR.', 1, 7, NULL, '2022-04-28 19:42:54', '2022-04-28 19:43:24'),
(20, 'Apple iPhone 12, 64GB, Black', 'ip64B', '599.00', '8', 'Unlocked and compatible with any carrier of choice on GSM and CDMA networks (e.g. AT&T, T-Mobile, Sprint, Verizon, US Cellular, Cricket, Metro, Tracfone, Mint Mobile, etc)', 1, 7, NULL, '2022-04-28 19:46:28', '2022-05-04 01:22:43'),
(21, 'SAMSUNG Galaxy S22 Ultra Smartphone, Factory Unlocked Android Cell Phone, 128GB, 8K Camera & Video, Brightest Display, S Pen, Long Battery Life, Fast 4nm Processor, US Version, Phantom White', 'sms22', '999.00', '10', '8K SUPER STEADY VIDEO: Shoot videos that rival how epic your life is with stunning 8K recording, the highest recording resolution available on a smartphone; Video captured is effortlessly smooth, thanks to Auto Focus Video Stabilization on Galaxy S22 Ultra', 2, 7, NULL, '2022-04-28 20:14:35', '2022-05-04 01:24:14'),
(22, 'SAMSUNG Galaxy A13 5G Cell Phone, Factory Unlocked Android Smartphone, 64GB, Long Lasting Battery, Expandable Storage, Triple Lens Camera, Infinite Display, US Version, Black', 'sma13', '249.99', '44', 'LONG-LASTING BATTERY: Whatever your day has in store, this mobile phone’s 15W Fast Charging battery makes sure you’re ready for it and gives your charger a break', 2, 7, NULL, '2022-04-28 20:21:15', '2022-04-28 20:21:15'),
(23, 'Flash Furniture Mid-Back Black Mesh Swivel Ergonomic Task Office Chair with Flip-Up Arms', 'fur55', '66.99', '50', 'Herman Miller is a 100-year-old-plus company that places great importance on design, the environment, community service, and the health and well-being', 10, 9, NULL, '2022-04-28 20:31:56', '2022-04-29 00:43:25'),
(24, 'YITAHOME Patio Furniture Set,7-Piece All-Weather Rattan Patio Conversation', 'hm7se', '723.99', '60', 'ALL-WEATHER STURDY CONSTRUCTION-Engineered with high strength checkered PE rattan woven on a rigid coated steel frame to resist all weather conditions and provide a steady & comfortable sitting experience of outdoor life.', 10, 9, NULL, '2022-04-29 00:49:20', '2022-04-29 00:49:20'),
(25, 'Home Future 2 Seat Sofa - Beige', 'fr2sf', '3284.00', '100', 'Home Future Beige 2-Seat Sofa\r\nWidth: 80cm Depth: 80cm Height: 200cm\r\nMaterial: Bean Wasfeng-Fabric: Plush and Linen\r\nSponge Density: 30', 10, 10, NULL, '2022-04-29 01:14:35', '2022-05-07 02:24:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(15, 'Men', 'Men\'s clothes are articles of clothing designed for and worn by men. Typical men\'s clothes include trousers, shirts, jeans, suits, sweaters, gloves, jackets, and hats.', 'images/subcategories/6268bad92c1571651030745.png', 7, '2022-04-27 01:39:05', '2022-04-27 01:39:05');

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
(11, 'Saad ELkammah', 'admin', 'saad1998elkammah@gmail.com', NULL, '$2y$10$mGnF3xSo1Q.tDIWEsJEYi.3X04SrmDZtNEnkPNeRXvjBsBilhxq0S', '01025608740', NULL, NULL, NULL, 'images/users/default-user.png', 'MJuybqobLsLKa70ALuk0T9hxSbycAFFKZsbZzzSWrs3UEfEPcL7NfKYXKmut', '2022-04-22 19:44:53', '2022-04-26 18:17:51'),
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
