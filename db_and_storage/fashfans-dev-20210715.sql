-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2021 at 08:45 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashfans-dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` int(11) NOT NULL DEFAULT 1,
  `published` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `photo`, `url`, `position`, `published`, `created_at`, `updated_at`) VALUES
(4, 'uploads/banners/banner.jpg', '#', 1, 1, '2019-03-12 05:58:23', '2019-06-11 04:56:50'),
(5, 'uploads/banners/banner.jpg', '#', 1, 1, '2019-03-12 05:58:41', '2019-03-12 05:58:57'),
(6, 'uploads/banners/banner.jpg', '#', 2, 1, '2019-03-12 05:58:52', '2019-03-12 05:58:57'),
(7, 'uploads/banners/banner.jpg', '#', 2, 1, '2019-05-26 05:16:38', '2019-05-26 05:17:34'),
(8, 'uploads/banners/banner.jpg', '#', 2, 1, '2019-06-11 05:00:06', '2019-06-11 05:00:27'),
(9, 'uploads/banners/banner.jpg', '#', 1, 1, '2019-06-11 05:00:15', '2019-06-11 05:00:29'),
(10, 'uploads/banners/banner.jpg', '#', 1, 0, '2019-06-11 05:00:24', '2019-06-11 05:01:56');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `top` int(1) NOT NULL DEFAULT 0,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `logo`, `top`, `slug`, `meta_title`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Coco Chanel', 'uploads/brands/DjfVOuZKJ6ouprZyyHFhlX0GO4DyrklUVBl8goEu.png', 1, 'Coco-Chanel', 'Coco Chanel', NULL, '2019-03-12 06:05:56', '2021-05-18 12:24:20'),
(2, 'Valentino', 'uploads/brands/NISsJTeZ8r0u7CL5VMu2cHavhLJfIwYQhM7l0HvP.png', 1, 'Valentino', 'Valentino', NULL, '2019-03-12 06:06:13', '2021-05-18 12:23:17'),
(3, 'Georgio Armani', 'uploads/brands/vfy7MFZKpqtkatdCedlA3AnOtaLC0EgPBS1Haq3b.png', 0, 'Georgio-Armani', 'Georgio Armani', NULL, '2021-05-16 13:46:27', '2021-05-18 12:21:55');

-- --------------------------------------------------------

--
-- Table structure for table `business_settings`
--

CREATE TABLE `business_settings` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `business_settings`
--

INSERT INTO `business_settings` (`id`, `type`, `value`, `created_at`, `updated_at`) VALUES
(1, 'home_default_currency', '1', '2018-10-16 01:35:52', '2019-01-28 01:26:53'),
(2, 'system_default_currency', '27', '2018-10-16 01:36:58', '2020-08-20 19:55:07'),
(3, 'currency_format', '1', '2018-10-17 03:01:59', '2018-10-17 03:01:59'),
(4, 'symbol_format', '1', '2018-10-17 03:01:59', '2019-01-20 02:10:55'),
(5, 'no_of_decimals', '0', '2018-10-17 03:01:59', '2018-10-17 03:01:59'),
(6, 'product_activation', '1', '2018-10-28 01:38:37', '2019-02-04 01:11:41'),
(7, 'vendor_system_activation', '1', '2018-10-28 07:44:16', '2019-02-04 01:11:38'),
(8, 'show_vendors', '1', '2018-10-28 07:44:47', '2019-02-04 01:11:13'),
(9, 'paypal_payment', '1', '2018-10-28 07:45:16', '2020-05-11 17:39:24'),
(10, 'stripe_payment', '1', '2018-10-28 07:45:47', '2020-05-11 17:39:26'),
(11, 'cash_payment', '1', '2018-10-28 07:46:05', '2019-01-24 03:40:18'),
(12, 'payumoney_payment', '0', '2018-10-28 07:46:27', '2019-03-05 05:41:36'),
(13, 'best_selling', '1', '2018-12-24 08:13:44', '2019-02-14 05:29:13'),
(14, 'paypal_sandbox', '1', '2019-01-16 12:44:18', '2020-05-11 17:40:34'),
(15, 'sslcommerz_sandbox', '1', '2019-01-16 12:44:18', '2019-03-14 00:07:26'),
(16, 'sslcommerz_payment', '1', '2019-01-24 09:39:07', '2020-05-11 17:39:27'),
(17, 'vendor_commission', '20', '2019-01-31 06:18:04', '2019-04-13 06:49:26'),
(18, 'verification_form', '[{\"type\":\"text\",\"label\":\"Your name\"},{\"type\":\"text\",\"label\":\"Shop name\"},{\"type\":\"text\",\"label\":\"Email\"},{\"type\":\"text\",\"label\":\"License No\"},{\"type\":\"text\",\"label\":\"Full Address\"},{\"type\":\"text\",\"label\":\"Phone Number\"},{\"type\":\"file\",\"label\":\"Tax Papers\"}]', '2019-02-03 11:36:58', '2019-02-16 06:14:42'),
(19, 'google_analytics', '0', '2019-02-06 12:22:35', '2019-02-06 12:22:35'),
(20, 'facebook_login', '1', '2019-02-07 12:51:59', '2020-05-11 17:39:37'),
(21, 'google_login', '1', '2019-02-07 12:52:10', '2020-05-11 17:39:38'),
(22, 'twitter_login', '1', '2019-02-07 12:52:20', '2020-05-11 17:39:39'),
(23, 'payumoney_payment', '1', '2019-03-05 11:38:17', '2019-03-05 11:38:17'),
(24, 'payumoney_sandbox', '1', '2019-03-05 11:38:17', '2019-03-05 05:39:18'),
(36, 'facebook_chat', '0', '2019-04-15 11:45:04', '2019-04-15 11:45:04'),
(37, 'email_verification', '0', '2019-04-30 07:30:07', '2019-04-30 07:30:07'),
(38, 'wallet_system', '1', '2019-05-19 08:05:44', '2020-05-11 17:39:10'),
(39, 'coupon_system', '1', '2019-06-11 09:46:18', '2020-05-11 17:39:12'),
(40, 'current_version', '1.9', '2019-06-11 09:46:18', '2019-06-11 09:46:18'),
(41, 'instamojo_payment', '1', '2019-07-06 09:58:03', '2020-05-11 17:39:30'),
(42, 'instamojo_sandbox', '1', '2019-07-06 09:58:43', '2019-07-06 09:58:43'),
(43, 'razorpay', '1', '2019-07-06 09:58:43', '2020-05-11 17:39:31'),
(44, 'paystack', '1', '2019-07-21 13:00:38', '2020-05-11 17:39:32'),
(45, 'pickup_point', '1', '2019-10-17 11:50:39', '2020-05-11 17:39:14'),
(46, 'maintenance_mode', '0', '2019-10-17 11:51:04', '2019-10-17 11:51:04'),
(47, 'voguepay', '1', '2019-10-17 11:51:24', '2020-05-11 17:39:34'),
(48, 'voguepay_sandbox', '1', '2019-10-17 11:51:38', '2020-05-11 17:41:01'),
(50, 'category_wise_commission', '1', '2020-01-21 07:22:47', '2020-05-11 17:39:20'),
(51, 'conversation_system', '1', '2020-01-21 07:23:21', '2020-01-21 07:23:21'),
(52, 'guest_checkout_active', '1', '2020-01-22 07:36:38', '2020-01-22 07:36:38'),
(53, 'facebook_pixel', '0', '2020-01-22 11:43:58', '2020-01-22 11:43:58'),
(54, 'bkash_personal_number_activation', '0', '2021-03-18 16:09:45', '2021-03-18 17:21:57'),
(55, 'bkash_merchant_number_activation', '1', '2021-03-18 16:09:59', '2021-03-18 17:21:55'),
(56, 'bkash_personal_number', '8801776648827', '2021-03-18 18:06:58', '2021-03-18 18:22:50'),
(57, 'bkash_merchant_number', '8801911223344', '2021-03-18 18:22:26', '2021-03-18 18:22:48');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `commision_rate` double(8,2) NOT NULL DEFAULT 0.00,
  `banner` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `featured` int(1) NOT NULL DEFAULT 0,
  `top` int(1) NOT NULL DEFAULT 0,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `commision_rate`, `banner`, `icon`, `featured`, `top`, `slug`, `meta_title`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Women Clothing', 0.00, 'uploads/categories/banner/category-banner.jpg', 'uploads/categories/icon/KjJP9wuEZNL184XVUk3S7EiZ8NnBN99kiU4wdvp3.png', 0, 1, 'Men', 'Demo category 1', NULL, '2021-04-01 07:47:15', '2019-08-06 06:06:58'),
(2, 'Beauty & Fashion', 0.00, 'uploads/categories/banner/category-banner.jpg', 'uploads/categories/icon/h9XhWwI401u6sRoLITEk9SUMRAlWN8moGrpPfS6I.png', 0, 1, 'Women', 'Demo category 2', NULL, '2021-04-01 07:47:18', '2019-08-06 06:06:58'),
(3, 'Daily Needs', 0.00, 'uploads/categories/banner/category-banner.jpg', 'uploads/categories/icon/rKAPw5rNlS84JtD9ZQqn366jwE11qyJqbzAe5yaA.png', 0, 1, 'Children', 'Demo category 3', NULL, '2021-04-01 07:47:20', '2019-08-06 06:06:58'),
(4, 'Haute Couture', 0.00, 'uploads/categories/banner/haute_couture.jpg', 'uploads/categories/icon/haute_couture.jpg', 1, 1, 'Demo category 4', 'Demo category 4', NULL, '2021-07-03 19:15:42', '2021-04-01 08:38:04'),
(5, 'Street Wear', 0.00, 'uploads/categories/banner/street_wear.jpg', 'uploads/categories/icon/street_wear.jpg', 1, 1, 'Demo category 5', 'Demo category 5', NULL, '2021-07-03 19:15:36', '2021-04-01 08:39:17'),
(6, 'Vintage', 0.00, 'uploads/categories/banner/vintage.jpg', 'uploads/categories/icon/vintage.jpg', 1, 1, 'Demo category 6', 'Demo category 6', NULL, '2021-07-03 19:15:31', '2021-04-01 08:39:17'),
(7, 'Mix and Match', 0.00, 'uploads/categories/banner/mix_and_match.jpg', 'uploads/categories/icon/mix_and_match.jpg', 1, 1, 'Demo category 7', 'Demo category 7', NULL, '2021-07-03 19:15:23', '2021-04-01 08:39:17'),
(9, 'Food and Beverage', 0.00, 'uploads/categories/banner/NQRq9hqirUfXqml6IeFI5ZfG4F3Mjyu224lAdVl4.jpg', 'uploads/categories/icon/l5lV8bbB71ZDQjnDB65CQWP4NKsjZ1AAaboii7Gy.jpg', 0, 1, 'Food-and-Beverage', 'Food and Beverage', NULL, '2021-05-16 20:57:56', '2021-05-16 14:57:56');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, 'IndianRed', '#CD5C5C', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(2, 'LightCoral', '#F08080', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(3, 'Salmon', '#FA8072', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(4, 'DarkSalmon', '#E9967A', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(5, 'LightSalmon', '#FFA07A', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(6, 'Crimson', '#DC143C', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(7, 'Red', '#FF0000', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(8, 'FireBrick', '#B22222', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(9, 'DarkRed', '#8B0000', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(10, 'Pink', '#FFC0CB', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(11, 'LightPink', '#FFB6C1', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(12, 'HotPink', '#FF69B4', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(13, 'DeepPink', '#FF1493', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(14, 'MediumVioletRed', '#C71585', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(15, 'PaleVioletRed', '#DB7093', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(16, 'LightSalmon', '#FFA07A', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(17, 'Coral', '#FF7F50', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(18, 'Tomato', '#FF6347', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(19, 'OrangeRed', '#FF4500', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(20, 'DarkOrange', '#FF8C00', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(21, 'Orange', '#FFA500', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(22, 'Gold', '#FFD700', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(23, 'Yellow', '#FFFF00', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(24, 'LightYellow', '#FFFFE0', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(25, 'LemonChiffon', '#FFFACD', '2018-11-05 02:12:26', '2018-11-05 02:12:26'),
(26, 'LightGoldenrodYellow', '#FAFAD2', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(27, 'PapayaWhip', '#FFEFD5', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(28, 'Moccasin', '#FFE4B5', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(29, 'PeachPuff', '#FFDAB9', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(30, 'PaleGoldenrod', '#EEE8AA', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(31, 'Khaki', '#F0E68C', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(32, 'DarkKhaki', '#BDB76B', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(33, 'Lavender', '#E6E6FA', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(34, 'Thistle', '#D8BFD8', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(35, 'Plum', '#DDA0DD', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(36, 'Violet', '#EE82EE', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(37, 'Orchid', '#DA70D6', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(38, 'Fuchsia', '#FF00FF', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(39, 'Magenta', '#FF00FF', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(40, 'MediumOrchid', '#BA55D3', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(41, 'MediumPurple', '#9370DB', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(42, 'Amethyst', '#9966CC', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(43, 'BlueViolet', '#8A2BE2', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(44, 'DarkViolet', '#9400D3', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(45, 'DarkOrchid', '#9932CC', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(46, 'DarkMagenta', '#8B008B', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(47, 'Purple', '#800080', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(48, 'Indigo', '#4B0082', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(49, 'SlateBlue', '#6A5ACD', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(50, 'DarkSlateBlue', '#483D8B', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(51, 'MediumSlateBlue', '#7B68EE', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(52, 'GreenYellow', '#ADFF2F', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(53, 'Chartreuse', '#7FFF00', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(54, 'LawnGreen', '#7CFC00', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(55, 'Lime', '#00FF00', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(56, 'LimeGreen', '#32CD32', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(57, 'PaleGreen', '#98FB98', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(58, 'LightGreen', '#90EE90', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(59, 'MediumSpringGreen', '#00FA9A', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(60, 'SpringGreen', '#00FF7F', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(61, 'MediumSeaGreen', '#3CB371', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(62, 'SeaGreen', '#2E8B57', '2018-11-05 02:12:27', '2018-11-05 02:12:27'),
(63, 'ForestGreen', '#228B22', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(64, 'Green', '#008000', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(65, 'DarkGreen', '#006400', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(66, 'YellowGreen', '#9ACD32', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(67, 'OliveDrab', '#6B8E23', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(68, 'Olive', '#808000', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(69, 'DarkOliveGreen', '#556B2F', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(70, 'MediumAquamarine', '#66CDAA', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(71, 'DarkSeaGreen', '#8FBC8F', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(72, 'LightSeaGreen', '#20B2AA', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(73, 'DarkCyan', '#008B8B', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(74, 'Teal', '#008080', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(75, 'Aqua', '#00FFFF', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(76, 'Cyan', '#00FFFF', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(77, 'LightCyan', '#E0FFFF', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(78, 'PaleTurquoise', '#AFEEEE', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(79, 'Aquamarine', '#7FFFD4', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(80, 'Turquoise', '#40E0D0', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(81, 'MediumTurquoise', '#48D1CC', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(82, 'DarkTurquoise', '#00CED1', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(83, 'CadetBlue', '#5F9EA0', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(84, 'SteelBlue', '#4682B4', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(85, 'LightSteelBlue', '#B0C4DE', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(86, 'PowderBlue', '#B0E0E6', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(87, 'LightBlue', '#ADD8E6', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(88, 'SkyBlue', '#87CEEB', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(89, 'LightSkyBlue', '#87CEFA', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(90, 'DeepSkyBlue', '#00BFFF', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(91, 'DodgerBlue', '#1E90FF', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(92, 'CornflowerBlue', '#6495ED', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(93, 'MediumSlateBlue', '#7B68EE', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(94, 'RoyalBlue', '#4169E1', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(95, 'Blue', '#0000FF', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(96, 'MediumBlue', '#0000CD', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(97, 'DarkBlue', '#00008B', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(98, 'Navy', '#000080', '2018-11-05 02:12:28', '2018-11-05 02:12:28'),
(99, 'MidnightBlue', '#191970', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(100, 'Cornsilk', '#FFF8DC', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(101, 'BlanchedAlmond', '#FFEBCD', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(102, 'Bisque', '#FFE4C4', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(103, 'NavajoWhite', '#FFDEAD', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(104, 'Wheat', '#F5DEB3', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(105, 'BurlyWood', '#DEB887', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(106, 'Tan', '#D2B48C', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(107, 'RosyBrown', '#BC8F8F', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(108, 'SandyBrown', '#F4A460', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(109, 'Goldenrod', '#DAA520', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(110, 'DarkGoldenrod', '#B8860B', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(111, 'Peru', '#CD853F', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(112, 'Chocolate', '#D2691E', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(113, 'SaddleBrown', '#8B4513', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(114, 'Sienna', '#A0522D', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(115, 'Brown', '#A52A2A', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(116, 'Maroon', '#800000', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(117, 'White', '#FFFFFF', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(118, 'Snow', '#FFFAFA', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(119, 'Honeydew', '#F0FFF0', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(120, 'MintCream', '#F5FFFA', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(121, 'Azure', '#F0FFFF', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(122, 'AliceBlue', '#F0F8FF', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(123, 'GhostWhite', '#F8F8FF', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(124, 'WhiteSmoke', '#F5F5F5', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(125, 'Seashell', '#FFF5EE', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(126, 'Beige', '#F5F5DC', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(127, 'OldLace', '#FDF5E6', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(128, 'FloralWhite', '#FFFAF0', '2018-11-05 02:12:29', '2018-11-05 02:12:29'),
(129, 'Ivory', '#FFFFF0', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(130, 'AntiqueWhite', '#FAEBD7', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(131, 'Linen', '#FAF0E6', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(132, 'LavenderBlush', '#FFF0F5', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(133, 'MistyRose', '#FFE4E1', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(134, 'Gainsboro', '#DCDCDC', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(135, 'LightGrey', '#D3D3D3', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(136, 'Silver', '#C0C0C0', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(137, 'DarkGray', '#A9A9A9', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(138, 'Gray', '#808080', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(139, 'DimGray', '#696969', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(140, 'LightSlateGray', '#778899', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(141, 'SlateGray', '#708090', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(142, 'DarkSlateGray', '#2F4F4F', '2018-11-05 02:12:30', '2018-11-05 02:12:30'),
(143, 'Black', '#000000', '2018-11-05 02:12:30', '2018-11-05 02:12:30');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

CREATE TABLE `conversations` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `title` varchar(1000) COLLATE utf32_unicode_ci DEFAULT NULL,
  `sender_viewed` int(1) NOT NULL DEFAULT 1,
  `receiver_viewed` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `code` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `code`, `name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CG', 'Congo'),
(50, 'CK', 'Cook Islands'),
(51, 'CR', 'Costa Rica'),
(52, 'HR', 'Croatia (Hrvatska)'),
(53, 'CU', 'Cuba'),
(54, 'CY', 'Cyprus'),
(55, 'CZ', 'Czech Republic'),
(56, 'DK', 'Denmark'),
(57, 'DJ', 'Djibouti'),
(58, 'DM', 'Dominica'),
(59, 'DO', 'Dominican Republic'),
(60, 'TP', 'East Timor'),
(61, 'EC', 'Ecuador'),
(62, 'EG', 'Egypt'),
(63, 'SV', 'El Salvador'),
(64, 'GQ', 'Equatorial Guinea'),
(65, 'ER', 'Eritrea'),
(66, 'EE', 'Estonia'),
(67, 'ET', 'Ethiopia'),
(68, 'FK', 'Falkland Islands (Malvinas)'),
(69, 'FO', 'Faroe Islands'),
(70, 'FJ', 'Fiji'),
(71, 'FI', 'Finland'),
(72, 'FR', 'France'),
(73, 'FX', 'France, Metropolitan'),
(74, 'GF', 'French Guiana'),
(75, 'PF', 'French Polynesia'),
(76, 'TF', 'French Southern Territories'),
(77, 'GA', 'Gabon'),
(78, 'GM', 'Gambia'),
(79, 'GE', 'Georgia'),
(80, 'DE', 'Germany'),
(81, 'GH', 'Ghana'),
(82, 'GI', 'Gibraltar'),
(83, 'GK', 'Guernsey'),
(84, 'GR', 'Greece'),
(85, 'GL', 'Greenland'),
(86, 'GD', 'Grenada'),
(87, 'GP', 'Guadeloupe'),
(88, 'GU', 'Guam'),
(89, 'GT', 'Guatemala'),
(90, 'GN', 'Guinea'),
(91, 'GW', 'Guinea-Bissau'),
(92, 'GY', 'Guyana'),
(93, 'HT', 'Haiti'),
(94, 'HM', 'Heard and Mc Donald Islands'),
(95, 'HN', 'Honduras'),
(96, 'HK', 'Hong Kong'),
(97, 'HU', 'Hungary'),
(98, 'IS', 'Iceland'),
(99, 'IN', 'India'),
(100, 'IM', 'Isle of Man'),
(101, 'ID', 'Indonesia'),
(102, 'IR', 'Iran (Islamic Republic of)'),
(103, 'IQ', 'Iraq'),
(104, 'IE', 'Ireland'),
(105, 'IL', 'Israel'),
(106, 'IT', 'Italy'),
(107, 'CI', 'Ivory Coast'),
(108, 'JE', 'Jersey'),
(109, 'JM', 'Jamaica'),
(110, 'JP', 'Japan'),
(111, 'JO', 'Jordan'),
(112, 'KZ', 'Kazakhstan'),
(113, 'KE', 'Kenya'),
(114, 'KI', 'Kiribati'),
(115, 'KP', 'Korea, Democratic People\'s Republic of'),
(116, 'KR', 'Korea, Republic of'),
(117, 'XK', 'Kosovo'),
(118, 'KW', 'Kuwait'),
(119, 'KG', 'Kyrgyzstan'),
(120, 'LA', 'Lao People\'s Democratic Republic'),
(121, 'LV', 'Latvia'),
(122, 'LB', 'Lebanon'),
(123, 'LS', 'Lesotho'),
(124, 'LR', 'Liberia'),
(125, 'LY', 'Libyan Arab Jamahiriya'),
(126, 'LI', 'Liechtenstein'),
(127, 'LT', 'Lithuania'),
(128, 'LU', 'Luxembourg'),
(129, 'MO', 'Macau'),
(130, 'MK', 'Macedonia'),
(131, 'MG', 'Madagascar'),
(132, 'MW', 'Malawi'),
(133, 'MY', 'Malaysia'),
(134, 'MV', 'Maldives'),
(135, 'ML', 'Mali'),
(136, 'MT', 'Malta'),
(137, 'MH', 'Marshall Islands'),
(138, 'MQ', 'Martinique'),
(139, 'MR', 'Mauritania'),
(140, 'MU', 'Mauritius'),
(141, 'TY', 'Mayotte'),
(142, 'MX', 'Mexico'),
(143, 'FM', 'Micronesia, Federated States of'),
(144, 'MD', 'Moldova, Republic of'),
(145, 'MC', 'Monaco'),
(146, 'MN', 'Mongolia'),
(147, 'ME', 'Montenegro'),
(148, 'MS', 'Montserrat'),
(149, 'MA', 'Morocco'),
(150, 'MZ', 'Mozambique'),
(151, 'MM', 'Myanmar'),
(152, 'NA', 'Namibia'),
(153, 'NR', 'Nauru'),
(154, 'NP', 'Nepal'),
(155, 'NL', 'Netherlands'),
(156, 'AN', 'Netherlands Antilles'),
(157, 'NC', 'New Caledonia'),
(158, 'NZ', 'New Zealand'),
(159, 'NI', 'Nicaragua'),
(160, 'NE', 'Niger'),
(161, 'NG', 'Nigeria'),
(162, 'NU', 'Niue'),
(163, 'NF', 'Norfolk Island'),
(164, 'MP', 'Northern Mariana Islands'),
(165, 'NO', 'Norway'),
(166, 'OM', 'Oman'),
(167, 'PK', 'Pakistan'),
(168, 'PW', 'Palau'),
(169, 'PS', 'Palestine'),
(170, 'PA', 'Panama'),
(171, 'PG', 'Papua New Guinea'),
(172, 'PY', 'Paraguay'),
(173, 'PE', 'Peru'),
(174, 'PH', 'Philippines'),
(175, 'PN', 'Pitcairn'),
(176, 'PL', 'Poland'),
(177, 'PT', 'Portugal'),
(178, 'PR', 'Puerto Rico'),
(179, 'QA', 'Qatar'),
(180, 'RE', 'Reunion'),
(181, 'RO', 'Romania'),
(182, 'RU', 'Russian Federation'),
(183, 'RW', 'Rwanda'),
(184, 'KN', 'Saint Kitts and Nevis'),
(185, 'LC', 'Saint Lucia'),
(186, 'VC', 'Saint Vincent and the Grenadines'),
(187, 'WS', 'Samoa'),
(188, 'SM', 'San Marino'),
(189, 'ST', 'Sao Tome and Principe'),
(190, 'SA', 'Saudi Arabia'),
(191, 'SN', 'Senegal'),
(192, 'RS', 'Serbia'),
(193, 'SC', 'Seychelles'),
(194, 'SL', 'Sierra Leone'),
(195, 'SG', 'Singapore'),
(196, 'SK', 'Slovakia'),
(197, 'SI', 'Slovenia'),
(198, 'SB', 'Solomon Islands'),
(199, 'SO', 'Somalia'),
(200, 'ZA', 'South Africa'),
(201, 'GS', 'South Georgia South Sandwich Islands'),
(202, 'SS', 'South Sudan'),
(203, 'ES', 'Spain'),
(204, 'LK', 'Sri Lanka'),
(205, 'SH', 'St. Helena'),
(206, 'PM', 'St. Pierre and Miquelon'),
(207, 'SD', 'Sudan'),
(208, 'SR', 'Suriname'),
(209, 'SJ', 'Svalbard and Jan Mayen Islands'),
(210, 'SZ', 'Swaziland'),
(211, 'SE', 'Sweden'),
(212, 'CH', 'Switzerland'),
(213, 'SY', 'Syrian Arab Republic'),
(214, 'TW', 'Taiwan'),
(215, 'TJ', 'Tajikistan'),
(216, 'TZ', 'Tanzania, United Republic of'),
(217, 'TH', 'Thailand'),
(218, 'TG', 'Togo'),
(219, 'TK', 'Tokelau'),
(220, 'TO', 'Tonga'),
(221, 'TT', 'Trinidad and Tobago'),
(222, 'TN', 'Tunisia'),
(223, 'TR', 'Turkey'),
(224, 'TM', 'Turkmenistan'),
(225, 'TC', 'Turks and Caicos Islands'),
(226, 'TV', 'Tuvalu'),
(227, 'UG', 'Uganda'),
(228, 'UA', 'Ukraine'),
(229, 'AE', 'United Arab Emirates'),
(230, 'GB', 'United Kingdom'),
(231, 'US', 'United States'),
(232, 'UM', 'United States minor outlying islands'),
(233, 'UY', 'Uruguay'),
(234, 'UZ', 'Uzbekistan'),
(235, 'VU', 'Vanuatu'),
(236, 'VA', 'Vatican City State'),
(237, 'VE', 'Venezuela'),
(238, 'VN', 'Vietnam'),
(239, 'VG', 'Virgin Islands (British)'),
(240, 'VI', 'Virgin Islands (U.S.)'),
(241, 'WF', 'Wallis and Futuna Islands'),
(242, 'EH', 'Western Sahara'),
(243, 'YE', 'Yemen'),
(244, 'ZR', 'Zaire'),
(245, 'ZM', 'Zambia'),
(246, 'ZW', 'Zimbabwe'),
(247, 'AF', 'Afghanistan'),
(248, 'AL', 'Albania'),
(249, 'DZ', 'Algeria'),
(250, 'DS', 'American Samoa'),
(251, 'AD', 'Andorra'),
(252, 'AO', 'Angola'),
(253, 'AI', 'Anguilla'),
(254, 'AQ', 'Antarctica'),
(255, 'AG', 'Antigua and Barbuda'),
(256, 'AR', 'Argentina'),
(257, 'AM', 'Armenia'),
(258, 'AW', 'Aruba'),
(259, 'AU', 'Australia'),
(260, 'AT', 'Austria'),
(261, 'AZ', 'Azerbaijan'),
(262, 'BS', 'Bahamas'),
(263, 'BH', 'Bahrain'),
(264, 'BD', 'Bangladesh'),
(265, 'BB', 'Barbados'),
(266, 'BY', 'Belarus'),
(267, 'BE', 'Belgium'),
(268, 'BZ', 'Belize'),
(269, 'BJ', 'Benin'),
(270, 'BM', 'Bermuda'),
(271, 'BT', 'Bhutan'),
(272, 'BO', 'Bolivia'),
(273, 'BA', 'Bosnia and Herzegovina'),
(274, 'BW', 'Botswana'),
(275, 'BV', 'Bouvet Island'),
(276, 'BR', 'Brazil'),
(277, 'IO', 'British Indian Ocean Territory'),
(278, 'BN', 'Brunei Darussalam'),
(279, 'BG', 'Bulgaria'),
(280, 'BF', 'Burkina Faso'),
(281, 'BI', 'Burundi'),
(282, 'KH', 'Cambodia'),
(283, 'CM', 'Cameroon'),
(284, 'CA', 'Canada'),
(285, 'CV', 'Cape Verde'),
(286, 'KY', 'Cayman Islands'),
(287, 'CF', 'Central African Republic'),
(288, 'TD', 'Chad'),
(289, 'CL', 'Chile'),
(290, 'CN', 'China'),
(291, 'CX', 'Christmas Island'),
(292, 'CC', 'Cocos (Keeling) Islands'),
(293, 'CO', 'Colombia'),
(294, 'KM', 'Comoros'),
(295, 'CG', 'Congo'),
(296, 'CK', 'Cook Islands');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8_unicode_ci NOT NULL,
  `discount` double(8,2) NOT NULL,
  `discount_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` int(15) NOT NULL,
  `end_date` int(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupon_usages`
--

CREATE TABLE `coupon_usages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `coupon_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `symbol` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `exchange_rate` double(10,5) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0,
  `code` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `name`, `symbol`, `exchange_rate`, `status`, `code`, `created_at`, `updated_at`) VALUES
(1, 'U.S. Dollar', '$', 1.00000, 1, 'USD', '2018-10-09 11:35:08', '2018-10-17 05:50:52'),
(2, 'Australian Dollar', '$', 1.28000, 1, 'AUD', '2018-10-09 11:35:08', '2019-02-04 05:51:55'),
(5, 'Brazilian Real', 'R$', 3.25000, 1, 'BRL', '2018-10-09 11:35:08', '2018-10-17 05:51:00'),
(6, 'Canadian Dollar', '$', 1.27000, 1, 'CAD', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(7, 'Czech Koruna', 'K??', 20.65000, 1, 'CZK', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(8, 'Danish Krone', 'kr', 6.05000, 1, 'DKK', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(9, 'Euro', '???', 0.85000, 1, 'EUR', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(10, 'Hong Kong Dollar', '$', 7.83000, 1, 'HKD', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(11, 'Hungarian Forint', 'Ft', 255.24000, 1, 'HUF', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(12, 'Israeli New Sheqel', '???', 3.48000, 1, 'ILS', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(13, 'Japanese Yen', '??', 107.12000, 1, 'JPY', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(14, 'Malaysian Ringgit', 'RM', 3.91000, 1, 'MYR', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(15, 'Mexican Peso', '$', 18.72000, 1, 'MXN', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(16, 'Norwegian Krone', 'kr', 7.83000, 1, 'NOK', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(17, 'New Zealand Dollar', '$', 1.38000, 1, 'NZD', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(18, 'Philippine Peso', '???', 52.26000, 1, 'PHP', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(19, 'Polish Zloty', 'z??', 3.39000, 1, 'PLN', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(20, 'Pound Sterling', '??', 0.72000, 1, 'GBP', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(21, 'Russian Ruble', '??????', 55.93000, 1, 'RUB', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(22, 'Singapore Dollar', '$', 1.32000, 1, 'SGD', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(23, 'Swedish Krona', 'kr', 8.19000, 1, 'SEK', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(24, 'Swiss Franc', 'CHF', 0.94000, 1, 'CHF', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(26, 'Thai Baht', '???', 31.39000, 1, 'THB', '2018-10-09 11:35:08', '2018-10-09 11:35:08'),
(27, 'Taka', '???', 84.00000, 1, 'BDT', '2018-10-09 11:35:08', '2018-12-02 05:16:13'),
(28, 'Indian Rupee', 'Rs', 68.45000, 1, 'Rupee', '2019-07-07 10:33:46', '2019-07-07 10:33:46');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 8, '2021-07-12 09:29:13', '2021-07-12 09:29:13'),
(3, 9, '2021-07-13 10:27:57', '2021-07-13 10:27:57');

-- --------------------------------------------------------

--
-- Table structure for table `flash_deals`
--

CREATE TABLE `flash_deals` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `start_date` int(20) DEFAULT NULL,
  `end_date` int(20) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `featured` int(1) NOT NULL DEFAULT 0,
  `background_color` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text_color` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'dark',
  `banner` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `flash_deals`
--

INSERT INTO `flash_deals` (`id`, `title`, `start_date`, `end_date`, `status`, `featured`, `background_color`, `text_color`, `banner`, `slug`, `created_at`, `updated_at`) VALUES
(7, 'Eid Offer', 1600819200, 1672444800, 1, 1, '#fff', 'white', 'uploads/offers/banner/KpAaomwRNzxbTHTw0jCILxF2ShYTH5t52jRrchhy.jpeg', 'eid-offer-kokfc', '2020-05-11 18:45:32', '2020-09-23 13:35:17');

-- --------------------------------------------------------

--
-- Table structure for table `flash_deal_products`
--

CREATE TABLE `flash_deal_products` (
  `id` int(11) NOT NULL,
  `flash_deal_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `discount` double(8,2) DEFAULT 0.00,
  `discount_type` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `flash_deal_products`
--

INSERT INTO `flash_deal_products` (`id`, `flash_deal_id`, `product_id`, `discount`, `discount_type`, `created_at`, `updated_at`) VALUES
(53, 7, 1, 2.00, 'amount', '2020-09-23 13:35:17', '2020-09-23 13:35:17'),
(54, 7, 2, 2.00, 'amount', '2020-09-23 13:35:17', '2020-09-23 13:35:17'),
(55, 7, 3, 2.00, 'amount', '2020-09-23 13:35:17', '2020-09-23 13:35:17'),
(56, 7, 4, 2.00, 'amount', '2020-09-23 13:35:17', '2020-09-23 13:35:17'),
(57, 7, 5, 2.00, 'amount', '2020-09-23 13:35:17', '2020-09-23 13:35:17'),
(58, 7, 6, 2.00, 'amount', '2020-09-23 13:35:17', '2020-09-23 13:35:17'),
(59, 7, 7, 0.00, 'amount', '2020-09-23 13:35:17', '2020-09-23 13:35:17'),
(60, 7, 8, 2.00, 'amount', '2020-09-23 13:35:17', '2020-09-23 13:35:17');

-- --------------------------------------------------------

--
-- Table structure for table `followers`
--

CREATE TABLE `followers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shop_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` int(11) NOT NULL,
  `frontend_color` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default',
  `logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin_logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin_login_background` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin_login_sidebar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `site_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instagram` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `youtube` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `google_plus` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `frontend_color`, `logo`, `admin_logo`, `admin_login_background`, `admin_login_sidebar`, `favicon`, `site_name`, `address`, `description`, `phone`, `email`, `facebook`, `instagram`, `twitter`, `youtube`, `google_plus`, `created_at`, `updated_at`) VALUES
(1, '2', 'uploads/logo/lKvBYlH83g5PBlmYlWW2S69axQ59TOoyWJ3BHZcT.png', 'uploads/admin_logo/EEVGfAFbSAs5YSv19IuoMc6toKxm1GubI1brIT1B.webp', NULL, NULL, 'uploads/favicon/NljAMcQJyBVuKbiyc10pJM4euwi6DGR1qYB5CF54.webp', 'FashFans - Online Shopping', 'Dhaka, Bangladesh', 'FashFans CMS is a Multi vendor system that is such a platform to build a borderless marketplace.', '01700000000', 'info@fashfans.com', 'https://www.facebook.com', 'https://www.instagram.com', 'https://www.twitter.com', 'https://www.youtube.com', 'https://www.googleplus.com', '2020-11-26 08:36:48', '2020-11-26 02:36:48');

-- --------------------------------------------------------

--
-- Table structure for table `home_categories`
--

CREATE TABLE `home_categories` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subsubcategories` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `home_categories`
--

INSERT INTO `home_categories` (`id`, `category_id`, `subsubcategories`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '[\"1\"]', 1, '2019-03-12 06:38:23', '2019-03-12 06:38:23'),
(2, 2, '[\"10\"]', 1, '2019-03-12 06:44:54', '2019-03-12 06:44:54');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `rtl` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `code`, `rtl`, `created_at`, `updated_at`) VALUES
(1, 'English', 'en', 0, '2019-01-20 12:13:20', '2019-01-20 12:13:20'),
(3, 'Bangla', 'bd', 0, '2019-02-17 06:35:37', '2019-02-18 06:49:51'),
(4, 'Arabic', 'sa', 1, '2019-04-28 18:34:12', '2019-04-28 18:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `name`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Link 1', 'http://google.com', '2020-05-11 23:46:43', '2020-05-11 17:46:43'),
(2, 'Link 2', 'http://google.com', '2020-05-11 17:46:57', '2020-05-11 17:46:57'),
(3, 'Link 3', 'http://google.com', '2020-05-11 17:47:08', '2020-05-11 17:47:08'),
(4, 'Link 4', 'http://google.com', '2020-05-11 17:47:17', '2020-05-11 17:47:17'),
(5, 'Link 5', 'http://google.com', '2020-05-11 17:47:30', '2020-05-11 17:47:30');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `conversation_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` text COLLATE utf32_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `conversation_id`, `user_id`, `message`, `created_at`, `updated_at`) VALUES
(8, 2, 1, 'http://localhost/test/ecommerce1/product/BEIOU-Sports-Downtown-Carbon-Wheels-Ultra-Superlight-Urban-Bike-akFBu', '2020-09-23 13:46:01', '2020-09-23 13:46:01');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2020_11_30_030250_create_posts_table', 2),
(5, '2020_12_05_094416_create_comments_table', 3),
(6, '2020_12_05_094549_create_likes_table', 4),
(8, '2020_12_05_094643_create_followers_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `guest_id` int(11) DEFAULT NULL,
  `shipping_address` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_type` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_status` varchar(20) COLLATE utf8_unicode_ci DEFAULT 'unpaid',
  `payment_details` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `grand_total` double(8,2) DEFAULT NULL,
  `coupon_discount` double(8,2) NOT NULL DEFAULT 0.00,
  `code` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` int(20) NOT NULL,
  `viewed` int(1) NOT NULL DEFAULT 0,
  `delivery_viewed` int(1) NOT NULL DEFAULT 0,
  `payment_status_viewed` int(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `guest_id`, `shipping_address`, `payment_type`, `payment_status`, `payment_details`, `grand_total`, `coupon_discount`, `code`, `date`, `viewed`, `delivery_viewed`, `payment_status_viewed`, `created_at`, `updated_at`) VALUES
(1, NULL, 519970, '{\"name\":\"asraf\",\"email\":\"seaudbd@gmail.com\",\"address\":\"Dhaka, Bangladesh\",\"country\":\"Bangladesh\",\"city\":\"Dhaka\",\"postal_code\":\"1216\",\"phone\":\"01776648825\"}', 'stripe', 'paid', 'Stripe\\Charge JSON: {\n    \"id\": \"ch_1IYZvTFODuTloJzeAaNf58x9\",\n    \"object\": \"charge\",\n    \"amount\": 2000,\n    \"amount_captured\": 2000,\n    \"amount_refunded\": 0,\n    \"application\": null,\n    \"application_fee\": null,\n    \"application_fee_amount\": null,\n    \"balance_transaction\": \"txn_1IYZvUFODuTloJzemB6nNuTQ\",\n    \"billing_details\": {\n        \"address\": {\n            \"city\": null,\n            \"country\": null,\n            \"line1\": null,\n            \"line2\": null,\n            \"postal_code\": null,\n            \"state\": null\n        },\n        \"email\": null,\n        \"name\": null,\n        \"phone\": null\n    },\n    \"calculated_statement_descriptor\": \"Stripe\",\n    \"captured\": true,\n    \"created\": 1616604683,\n    \"currency\": \"usd\",\n    \"customer\": null,\n    \"description\": \"Checkout\",\n    \"destination\": null,\n    \"dispute\": null,\n    \"disputed\": false,\n    \"failure_code\": null,\n    \"failure_message\": null,\n    \"fraud_details\": [],\n    \"invoice\": null,\n    \"livemode\": false,\n    \"metadata\": [],\n    \"on_behalf_of\": null,\n    \"order\": null,\n    \"outcome\": {\n        \"network_status\": \"approved_by_network\",\n        \"reason\": null,\n        \"risk_level\": \"normal\",\n        \"risk_score\": 25,\n        \"seller_message\": \"Payment complete.\",\n        \"type\": \"authorized\"\n    },\n    \"paid\": true,\n    \"payment_intent\": null,\n    \"payment_method\": \"card_1IYZvSFODuTloJze3UOV0wHo\",\n    \"payment_method_details\": {\n        \"card\": {\n            \"brand\": \"visa\",\n            \"checks\": {\n                \"address_line1_check\": null,\n                \"address_postal_code_check\": null,\n                \"cvc_check\": \"pass\"\n            },\n            \"country\": \"US\",\n            \"exp_month\": 12,\n            \"exp_year\": 2022,\n            \"fingerprint\": \"YqZPvTVM9P0iyoL1\",\n            \"funding\": \"credit\",\n            \"installments\": null,\n            \"last4\": \"4242\",\n            \"network\": \"visa\",\n            \"three_d_secure\": null,\n            \"wallet\": null\n        },\n        \"type\": \"card\"\n    },\n    \"receipt_email\": null,\n    \"receipt_number\": null,\n    \"receipt_url\": \"https:\\/\\/pay.stripe.com\\/receipts\\/acct_1IW2dvFODuTloJze\\/ch_1IYZvTFODuTloJzeAaNf58x9\\/rcpt_JAvnS46Jhg41OsAXC4to2qhs8cX7Gx2\",\n    \"refunded\": false,\n    \"refunds\": {\n        \"object\": \"list\",\n        \"data\": [],\n        \"has_more\": false,\n        \"total_count\": 0,\n        \"url\": \"\\/v1\\/charges\\/ch_1IYZvTFODuTloJzeAaNf58x9\\/refunds\"\n    },\n    \"review\": null,\n    \"shipping\": null,\n    \"source\": {\n        \"id\": \"card_1IYZvSFODuTloJze3UOV0wHo\",\n        \"object\": \"card\",\n        \"address_city\": null,\n        \"address_country\": null,\n        \"address_line1\": null,\n        \"address_line1_check\": null,\n        \"address_line2\": null,\n        \"address_state\": null,\n        \"address_zip\": null,\n        \"address_zip_check\": null,\n        \"brand\": \"Visa\",\n        \"country\": \"US\",\n        \"customer\": null,\n        \"cvc_check\": \"pass\",\n        \"dynamic_last4\": null,\n        \"exp_month\": 12,\n        \"exp_year\": 2022,\n        \"fingerprint\": \"YqZPvTVM9P0iyoL1\",\n        \"funding\": \"credit\",\n        \"last4\": \"4242\",\n        \"metadata\": [],\n        \"name\": null,\n        \"tokenization_method\": null\n    },\n    \"source_transfer\": null,\n    \"statement_descriptor\": null,\n    \"statement_descriptor_suffix\": null,\n    \"status\": \"succeeded\",\n    \"transfer_data\": null,\n    \"transfer_group\": null\n}', 20.00, 0.00, '20210324-16512466', 1616604684, 0, 0, 0, '2021-03-24 10:51:24', '2021-03-24 10:51:24'),
(2, NULL, 945655, '{\"name\":\"Aousaf\",\"email\":\"aousaf@gmail.com\",\"address\":\"Malibag, Dhaka\",\"country\":\"Bangladesh\",\"city\":\"Dhaka\",\"postal_code\":\"1215\",\"phone\":\"01716239406\"}', 'stripe', 'paid', 'Stripe\\Charge JSON: {\n    \"id\": \"ch_1IYaEXFODuTloJzeiLyLdATD\",\n    \"object\": \"charge\",\n    \"amount\": 4000,\n    \"amount_captured\": 4000,\n    \"amount_refunded\": 0,\n    \"application\": null,\n    \"application_fee\": null,\n    \"application_fee_amount\": null,\n    \"balance_transaction\": \"txn_1IYaEXFODuTloJzeXZf3j9RE\",\n    \"billing_details\": {\n        \"address\": {\n            \"city\": null,\n            \"country\": null,\n            \"line1\": null,\n            \"line2\": null,\n            \"postal_code\": null,\n            \"state\": null\n        },\n        \"email\": null,\n        \"name\": null,\n        \"phone\": null\n    },\n    \"calculated_statement_descriptor\": \"Stripe\",\n    \"captured\": true,\n    \"created\": 1616605865,\n    \"currency\": \"usd\",\n    \"customer\": null,\n    \"description\": \"Checkout\",\n    \"destination\": null,\n    \"dispute\": null,\n    \"disputed\": false,\n    \"failure_code\": null,\n    \"failure_message\": null,\n    \"fraud_details\": [],\n    \"invoice\": null,\n    \"livemode\": false,\n    \"metadata\": [],\n    \"on_behalf_of\": null,\n    \"order\": null,\n    \"outcome\": {\n        \"network_status\": \"approved_by_network\",\n        \"reason\": null,\n        \"risk_level\": \"normal\",\n        \"risk_score\": 59,\n        \"seller_message\": \"Payment complete.\",\n        \"type\": \"authorized\"\n    },\n    \"paid\": true,\n    \"payment_intent\": null,\n    \"payment_method\": \"card_1IYaEWFODuTloJze0glmjrkJ\",\n    \"payment_method_details\": {\n        \"card\": {\n            \"brand\": \"visa\",\n            \"checks\": {\n                \"address_line1_check\": null,\n                \"address_postal_code_check\": null,\n                \"cvc_check\": \"pass\"\n            },\n            \"country\": \"US\",\n            \"exp_month\": 12,\n            \"exp_year\": 2022,\n            \"fingerprint\": \"YqZPvTVM9P0iyoL1\",\n            \"funding\": \"credit\",\n            \"installments\": null,\n            \"last4\": \"4242\",\n            \"network\": \"visa\",\n            \"three_d_secure\": null,\n            \"wallet\": null\n        },\n        \"type\": \"card\"\n    },\n    \"receipt_email\": null,\n    \"receipt_number\": null,\n    \"receipt_url\": \"https:\\/\\/pay.stripe.com\\/receipts\\/acct_1IW2dvFODuTloJze\\/ch_1IYaEXFODuTloJzeiLyLdATD\\/rcpt_JAw6Sh9gS7veIBM1s329IldiuGx9HnQ\",\n    \"refunded\": false,\n    \"refunds\": {\n        \"object\": \"list\",\n        \"data\": [],\n        \"has_more\": false,\n        \"total_count\": 0,\n        \"url\": \"\\/v1\\/charges\\/ch_1IYaEXFODuTloJzeiLyLdATD\\/refunds\"\n    },\n    \"review\": null,\n    \"shipping\": null,\n    \"source\": {\n        \"id\": \"card_1IYaEWFODuTloJze0glmjrkJ\",\n        \"object\": \"card\",\n        \"address_city\": null,\n        \"address_country\": null,\n        \"address_line1\": null,\n        \"address_line1_check\": null,\n        \"address_line2\": null,\n        \"address_state\": null,\n        \"address_zip\": null,\n        \"address_zip_check\": null,\n        \"brand\": \"Visa\",\n        \"country\": \"US\",\n        \"customer\": null,\n        \"cvc_check\": \"pass\",\n        \"dynamic_last4\": null,\n        \"exp_month\": 12,\n        \"exp_year\": 2022,\n        \"fingerprint\": \"YqZPvTVM9P0iyoL1\",\n        \"funding\": \"credit\",\n        \"last4\": \"4242\",\n        \"metadata\": [],\n        \"name\": null,\n        \"tokenization_method\": null\n    },\n    \"source_transfer\": null,\n    \"statement_descriptor\": null,\n    \"statement_descriptor_suffix\": null,\n    \"status\": \"succeeded\",\n    \"transfer_data\": null,\n    \"transfer_group\": null\n}', 40.00, 0.00, '20210324-17110655', 1616605866, 1, 0, 0, '2021-03-24 16:11:06', '2021-05-18 13:06:14');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `variation` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` double(8,2) DEFAULT NULL,
  `tax` double(8,2) NOT NULL DEFAULT 0.00,
  `shipping_cost` double(8,2) NOT NULL DEFAULT 0.00,
  `quantity` int(11) DEFAULT NULL,
  `payment_status` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'unpaid',
  `delivery_status` varchar(20) COLLATE utf8_unicode_ci DEFAULT 'pending',
  `shipping_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pickup_point_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `seller_id`, `product_id`, `variation`, `price`, `tax`, `shipping_cost`, `quantity`, `payment_status`, `delivery_status`, `shipping_type`, `pickup_point_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, NULL, 8.00, 2.00, 10.00, 1, 'unpaid', 'pending', NULL, NULL, '2021-03-24 10:51:24', '2021-03-24 10:51:24'),
(2, 2, 1, 1, NULL, 8.00, 2.00, 10.00, 1, 'unpaid', 'pending', NULL, NULL, '2021-03-24 16:11:06', '2021-03-24 16:11:06'),
(3, 2, 1, 3, NULL, 8.00, 2.00, 10.00, 1, 'unpaid', 'pending', NULL, NULL, '2021-03-24 16:11:06', '2021-03-24 16:11:06');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `amount` double(8,2) NOT NULL DEFAULT 0.00,
  `payment_details` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pickup_points`
--

CREATE TABLE `pickup_points` (
  `id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `pick_up_status` int(1) DEFAULT NULL,
  `cash_on_pickup_status` int(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `policies`
--

CREATE TABLE `policies` (
  `id` int(11) NOT NULL,
  `name` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `policies`
--

INSERT INTO `policies` (`id`, `name`, `content`, `created_at`, `updated_at`) VALUES
(1, 'support_policy', '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.', '2020-05-11 23:44:48', '2020-05-11 17:44:48'),
(2, 'return_policy', '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.', '2020-05-11 23:44:40', '2020-05-11 17:44:40'),
(4, 'seller_policy', '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.', '2020-05-11 23:44:26', '2020-05-11 17:44:26'),
(5, 'terms', '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.', '2020-05-11 23:44:55', '2020-05-11 17:44:55'),
(6, 'privacy_policy', '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.', '2020-05-11 23:45:02', '2020-05-11 17:45:02');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `content`, `image`, `video`, `created_at`, `updated_at`) VALUES
(20, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'uploads/social/1.png', NULL, '2020-11-30 21:56:53', '2020-11-30 21:56:53'),
(21, 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'uploads/social/2.png', NULL, '2020-11-30 21:57:21', '2020-11-30 21:57:21'),
(22, 3, 'Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry. Lorem Ipsum Has Been The Industry\'s Standard Dummy Text Ever Since The 1500s, When An Unknown Printer Took A Galley Of Type And Scrambled It To Make A Type Specimen Book.Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry. Lorem Ipsum Has Been The Industry\'s Standard Dummy Text Ever Since The 1500s, When An Unknown Printer Took A Galley Of Type And Scrambled It To Make A Type Specimen Book.Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry. Lorem Ipsum Has Been The Industry\'s Standard Dummy Text Ever Since The 1500s, When An Unknown Printer Took A Galley Of Type And Scrambled It To Make A Type Specimen Book.Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry. Lorem Ipsum Has Been The Industry\'s Standard Dummy Text Ever Since The 1500s, When An Unknown Printer Took A Galley Of Type And Scrambled It To Make A Type Specimen Book.', 'uploads/social/3.png', NULL, '2020-11-30 21:58:00', '2020-12-04 05:52:51'),
(23, 4, 'Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry. Lorem Ipsum Has Been The Industry\'s Standard Dummy Text Ever Since The 1500s, When An Unknown Printer Took A Galley Of Type And Scrambled It To Make A Type Specimen Book.Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry. Lorem Ipsum Has Been The Industry\'s Standard Dummy Text Ever Since The 1500s, When An Unknown Printer Took A Galley Of Type And Scrambled It To Make A Type Specimen Book.Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry. Lorem Ipsum Has Been The Industry\'s Standard Dummy Text Ever Since The 1500s, When An Unknown Printer Took A Galley Of Type And Scrambled It To Make A Type Specimen Book.Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry. Lorem Ipsum Has Been The Industry\'s Standard Dummy Text Ever Since The 1500s, When An Unknown Printer Took A Galley Of Type And Scrambled It To Make A Type Specimen Book.', 'uploads/social/4.jpg', NULL, '2020-12-01 00:04:48', '2020-12-01 00:04:48'),
(24, 1, 'Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry. Lorem Ipsum Has Been The Industry\'s Standard Dummy Text Ever Since The 1500s, When An Unknown Printer Took A Galley Of Type And Scrambled It To Make A Type Specimen Book.Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry. Lorem Ipsum Has Been The Industry\'s Standard Dummy Text Ever Since The 1500s, When An Unknown Printer Took A Galley Of Type And Scrambled It To Make A Type Specimen Book.Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry. Lorem Ipsum Has Been The Industry\'s Standard Dummy Text Ever Since The 1500s, When An Unknown Printer Took A Galley Of Type And Scrambled It To Make A Type Specimen Book.Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry. Lorem Ipsum Has Been The Industry\'s Standard Dummy Text Ever Since The 1500s, When An Unknown Printer Took A Galley Of Type And Scrambled It To Make A Type Specimen Book.', 'uploads/social/5.jpg', NULL, '2020-12-01 00:19:28', '2020-12-01 00:19:28'),
(25, 2, 'Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry. Lorem Ipsum Has Been The Industry\'s Standard Dummy Text Ever Since The 1500s, When An Unknown Printer Took A Galley Of Type And Scrambled It To Make A Type Specimen Book.Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry. Lorem Ipsum Has Been The Industry\'s Standard Dummy Text Ever Since The 1500s, When An Unknown Printer Took A Galley Of Type And Scrambled It To Make A Type Specimen Book.', 'uploads/social/6.jpg', NULL, '2020-12-01 05:55:19', '2020-12-04 05:53:51'),
(28, 1, NULL, 'uploads/social/sky-shop-2-1606825394.jpeg', NULL, '2020-12-01 12:23:14', '2020-12-01 12:23:14'),
(30, 1, NULL, 'uploads/social/sky-shop-2-1606930732.jpeg', NULL, '2020-12-02 17:38:52', '2020-12-02 17:38:52'),
(31, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry. Lorem Ipsum Has Been The Industry\'s Standard Dummy Text Ever Since The 1500s, When An Unknown Printer Took A Galley Of Type And Scrambled It To Make A Type Specimen Book. Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry. Lorem Ipsum Has Been The Industry\'s Standard Dummy Text Ever Since The 1500s, When An Unknown Printer Took A Galley Of Type And Scrambled It To Make A Type Specimen Book.', NULL, NULL, '2020-12-02 17:46:29', '2020-12-11 09:23:01'),
(33, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', NULL, NULL, '2020-12-02 17:48:08', '2020-12-02 17:48:08'),
(61, 1, 'The natural beauty of Bangladesh', NULL, 'uploads/social/seller-shop-1-1607703528.mp4', '2020-12-11 16:18:48', '2020-12-11 16:18:48');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `added_by` varchar(6) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'admin',
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subsubcategory_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `photos` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thumbnail_img` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `featured_img` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `flash_deal_img` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_provider` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_link` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tags` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit_price` double(8,2) NOT NULL,
  `purchase_price` double(8,2) NOT NULL,
  `choice_options` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `colors` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `variations` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `todays_deal` int(11) NOT NULL DEFAULT 0,
  `published` int(11) NOT NULL DEFAULT 1,
  `featured` int(11) NOT NULL DEFAULT 0,
  `current_stock` int(10) NOT NULL DEFAULT 0,
  `unit` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `discount` double(8,2) DEFAULT NULL,
  `discount_type` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tax` double(8,2) DEFAULT NULL,
  `tax_type` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'flat_rate',
  `shipping_cost` double(8,2) DEFAULT 0.00,
  `num_of_sale` int(11) NOT NULL DEFAULT 0,
  `meta_title` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdf` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `rating` double(8,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `added_by`, `user_id`, `category_id`, `subcategory_id`, `subsubcategory_id`, `brand_id`, `photos`, `thumbnail_img`, `featured_img`, `flash_deal_img`, `video_provider`, `video_link`, `tags`, `description`, `unit_price`, `purchase_price`, `choice_options`, `colors`, `variations`, `todays_deal`, `published`, `featured`, `current_stock`, `unit`, `discount`, `discount_type`, `tax`, `tax_type`, `shipping_type`, `shipping_cost`, `num_of_sale`, `meta_title`, `meta_description`, `meta_img`, `pdf`, `slug`, `rating`, `created_at`, `updated_at`) VALUES
(1, 'Ladies Sweater', 'admin', 1, 1, 3, 7, 1, '\"[\\\"uploads\\\\\\/products\\\\\\/photos\\\\\\/p0W5vX3Xsha3wBcph1SNwgfQZnDIp12ZRrteytyL.png\\\"]\"', 'uploads/products/thumbnail/tmengNqbr04Jg5ZFJb3Bxgta0jKmAsrqDBdou4LY.png', 'uploads/products/featured/ezzSajIgd1XJHzAvqIoiYwj8VDYxT88oCZJjSPWX.png', 'uploads/products/flash_deal/YUbP7dtuBUgJNG89V5IcDzUbR7r1bHRlby3NswIF.png', 'youtube', NULL, 'demo,product', 'This saree from the house of GiniGold is made from cotton and is orange in color. The saree has been designed keeping in mind the latest trends in fashion when it comes to dressing up at par for a casual evening.<br><br>The saree has a beautiful pattern on its borders. This makes the saree look attractive and stylish and complements the saree making it a suitable choice for your wardrobe.', 1.00, 8.00, '[]', '[\"#9966CC\",\"#00FFFF\",\"#00FFFF\"]', '{\"Amethyst\":{\"price\":\"100\",\"sku\":\"GWCS-Amethyst\",\"qty\":\"99\"},\"Aqua\":{\"price\":\"100\",\"sku\":\"GWCS-Aqua\",\"qty\":\"100\"}}', 1, 1, 1, 0, 'pc', 0.00, 'percent', 0.00, 'amount', 'flat_rate', 10.00, 1, 'Demo product', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'uploads/products/meta/nOThz3HPq8sKoHwLvgsvCv2JTIHAmtKgQvWRSLoN.jpeg', NULL, 'Ladies-Sweater-UoIp8', 0.00, '2019-03-12 06:37:56', '2021-05-18 11:10:32'),
(2, 'Floret Cotton Saree', 'seller', 2, 1, 1, 1, 1, '\"[\"images/product/cotton_saree_2_1.jpg\",\"images/product/cotton_saree_2_2.jpg\",\"images/product/cotton_saree_2_3.jpg\",\"images/product/cotton_saree_2_1.jpg\"]\"', 'uploads/products/thumbnail/2.png', 'uploads/products/featured/2.png', 'uploads/products/flash_deal/flash-deal-image.jpg', 'youtube', NULL, 'demo,product', 'This Wax printed cotton saree was dyed using the natural ingredients Indigo & Catechu to bring out the marvellous Blue & brown colour of the product.<br><br>Using natural materials, full-handmade Aranya???s products are aligned within fair trade framework.', 2.00, 8.00, '[]', '[\"#9966CC\",\"#00FFFF\",\"#00FFFF\"]', '{\"Amethyst\":{\"price\":100,\"sku\":null,\"qty\":99},\"Aqua\":{\"price\":100,\"sku\":null,\"qty\":100}}', 1, 1, 1, 0, 'pc', 0.00, 'percent', 0.00, 'amount', 'flat_rate', 10.00, 0, 'Demo product', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'uploads/products/meta/nOThz3HPq8sKoHwLvgsvCv2JTIHAmtKgQvWRSLoN.jpeg', NULL, 'Demo-product-VCQuv', 0.00, '2019-03-12 06:39:14', '2020-05-04 07:09:42'),
(3, 'Handloom Bengal Tant Saree', 'seller', 3, 1, 1, 1, 1, '\"[\"images/product/cotton_saree_3_1.jpg\",\"images/product/cotton_saree_3_2.jpg\",\"images/product/cotton_saree_3_3.jpg\",\"images/product/cotton_saree_3_4.jpg\"]\"', 'uploads/products/thumbnail/3.png', 'uploads/products/featured/3.png', 'uploads/products/flash_deal/flash-deal-image.jpg', 'youtube', NULL, 'demo,product', 'Explore the collection of beautifully Bengal Traditional Tant/Tangail Handloom Hand Made Cotton Saree of West Bengal designed sarees. Each piece is elegantly crafted and will surely add to your wardrobe. Pair this piece with heels or flats for a graceful look. You can wear this saree in all occasions specially Puja, Party and any occasion in your family or friends. The decorative material is Cotton Threads. Its Unique cotton thread design whole body. Great looking color combination. The color may vary due to screen setting . Fabric: Cotton; Length: 5.50 meter Set Content: Without Blouse Piece Care Instructions: Dry Clean Only Wash Care : Dry Wash Only, Don\'t Bleach.', 3.00, 8.00, '[]', '[\"#9966CC\",\"#00FFFF\",\"#00FFFF\"]', '{\"Amethyst\":{\"price\":100,\"sku\":null,\"qty\":99},\"Aqua\":{\"price\":100,\"sku\":null,\"qty\":100}}', 1, 1, 1, 0, 'pc', 0.00, 'percent', 0.00, 'amount', 'flat_rate', 10.00, 0, 'Demo product', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'uploads/products/meta/nOThz3HPq8sKoHwLvgsvCv2JTIHAmtKgQvWRSLoN.jpeg', NULL, 'Demo-product-O0v1o', 0.00, '2019-03-12 06:39:42', '2020-05-04 07:09:42'),
(4, 'Bengal Tant Cotton Saree', 'seller', 4, 1, 1, 1, 1, '\"[\"images/product/cotton_saree_4_1.jpg\",\"images/product/cotton_saree_4_2.jpg\",\"images/product/cotton_saree_4_3.jpg\",\"images/product/cotton_saree_4_4.jpg\"]\"', 'uploads/products/thumbnail/4.png', 'uploads/products/featured/4.png', 'uploads/products/flash_deal/flash-deal-image.jpg', 'youtube', NULL, 'demo,product', 'Quintessentially Indian, the saree is an outfit which women can carry off with great panache. With the right material and drape, it can accentuate the beauty of women of all ages and forms. Be it a festival or a wedding, sarees are a hot favorite worldwide due to its popularity. Sarees give you the opportunity to provide a modern touch to a traditional Indian attire.<br><br>You can pair a saree with a clutch and a pair of fashion sandals or any casual footwear of your choice for a casual look when dressing up for a party. You can also pair it with a pair of earrings and bangles when adorning this outfit for a festive occasion.', 4.00, 8.00, '[]', '[\"#9966CC\",\"#00FFFF\",\"#00FFFF\"]', '{\"Amethyst\":{\"price\":100,\"sku\":null,\"qty\":99},\"Aqua\":{\"price\":100,\"sku\":null,\"qty\":100}}', 1, 1, 1, 0, 'pc', 0.00, 'percent', 0.00, 'amount', 'flat_rate', 10.00, 0, 'Demo product', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'uploads/products/meta/nOThz3HPq8sKoHwLvgsvCv2JTIHAmtKgQvWRSLoN.jpeg', NULL, 'Demo-product-4KaDV', 0.00, '2019-03-12 06:39:44', '2020-05-04 07:09:42'),
(5, 'Ladies Hand Bag', 'admin', 1, 2, 4, 10, 1, '\"[\\\"uploads\\\\\\/products\\\\\\/photos\\\\\\/Uj5aJQtuyD3wbbO269mwQrzjaLytzoMXSB3oDHou.png\\\"]\"', 'uploads/products/thumbnail/BcEhAkB0yTjD5JVZSuH3IN9kIc8RakDOTedTOGNn.png', 'uploads/products/featured/n1Kys7mPooh1BfjZCMXXB6yBTRDVZLpCwCYdClZJ.png', 'uploads/products/flash_deal/pqgu9cohhSJLC4IrmAIj2aB6qilvtqVDHBWbUQin.png', 'youtube', NULL, 'seller,product', '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\"><span>&nbsp;</span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></p><p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\"><span>&nbsp;</span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></p>\r\n<table style=\"width: 100%;\">\r\n<tbody><tr>\r\n	<td>Demo</td>\r\n	<td>Demo</td>\r\n	<td>Demo</td></tr><tr><td>Title</td><td>Title</td><td>Title</td></tr></tbody></table><p><br></p><p><img src=\"data:image/jpeg;base64,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\"><br></p>', 5.00, 15.00, '[{\"name\":\"choice_0\",\"title\":\"Size\",\"options\":[\"32\",\"34\",\"36\"]}]', '[]', '{\"32\":{\"price\":\"5\",\"sku\":\"Dsp-32\",\"qty\":\"10\"},\"34\":{\"price\":\"5\",\"sku\":\"Dsp-34\",\"qty\":\"10\"},\"36\":{\"price\":\"5\",\"sku\":\"Dsp-36\",\"qty\":\"10\"}}', 0, 1, 1, 0, 'pc', 0.00, 'percent', 0.00, 'amount', 'flat_rate', 10.00, 1, 'Demo seller product', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the .', NULL, NULL, 'Ladies-Hand-Bag-ADv9n', 0.00, '2019-03-12 06:43:16', '2021-05-18 11:09:44'),
(6, 'Demo seller product', 'seller', 2, 2, 4, 10, 1, '\"[\"uploads/products/photos/Product-main-image.jpg\"]\"', 'uploads/products/thumbnail/6.png', 'uploads/products/featured/6.png', 'uploads/products/flash_deal/flash-deal-image.jpg', 'youtube', NULL, 'seller,product', '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\"><span>&nbsp;</span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></p><p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\"><span>&nbsp;</span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></p>\r\n<table style=\"width: 100%;\">\r\n<tr>\r\n	<td>Demo</td>\r\n	<td>Demo</td>\r\n	<td>Demo</td></tr><tr><td>Title</td><td>Title</td><td>Title</td></tr></table><p><br></p><p><img src=\"data:image/jpeg;base64,/9j/4QCuRXhpZgAASUkqAAgAAAADADEBAgAdAAAAMgAAADIBAgAaAAAAUAAAAGmHBAABAAAAagAAAAAAAABBZG9iZSBQaG90b3Nob3AgQ0MgKFdpbmRvd3MpAAAyMDE5LTAzLTEyVDE4OjM1OjU3KzA2OjAwAAQAAJAHAAQAAAAwMjIwCZIDAAEAAAAAAAAAAqAEAAEAAAAiAQAAA6AEAAEAAAAsAQAAAAAAACwBAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QPwaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjUtYzAxNCA3OS4xNTE0ODEsIDIwMTMvMDMvMTMtMTI6MDk6MTUgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6ZGM9Imh0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSIgeG1wOkNyZWF0ZURhdGU9IjIwMTktMDMtMTJUMTc6MzM6MTkrMDY6MDAiIHhtcDpNb2RpZnlEYXRlPSIyMDE5LTAzLTEyVDE4OjM1OjU3KzA2OjAwIiB4bXA6TWV0YWRhdGFEYXRlPSIyMDE5LTAzLTEyVDE4OjM1OjU3KzA2OjAwIiBkYzpmb3JtYXQ9ImltYWdlL2pwZWciIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NjJDMTREM0U0NEMzMTFFOUIzNUNDQkU2RTk5MDlDRUIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NjJDMTREM0Y0NEMzMTFFOUIzNUNDQkU2RTk5MDlDRUIiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo2MkMxNEQzQzQ0QzMxMUU5QjM1Q0NCRTZFOTkwOUNFQiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo2MkMxNEQzRDQ0QzMxMUU5QjM1Q0NCRTZFOTkwOUNFQiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pv/uAA5BZG9iZQBkwAAAAAH/2wCEAAYEBAQFBAYFBQYJBgUGCQsIBgYICwwKCgsKCgwQDAwMDAwMEAwODxAPDgwTExQUExMcGxsbHB8fHx8fHx8fHx8BBwcHDQwNGBAQGBoVERUaHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fH//AABEIASwBIgMBEQACEQEDEQH/xAB+AAEBAQADAQEBAAAAAAAAAAAABQQDBgcCAQgBAQAAAAAAAAAAAAAAAAAAAAAQAAEDAgIGCAYBAwIEBwAAAAABAgMEBREGIRJTNBUHMXGR0XKiExRBsSJigrJRYTIIIxaBQjOztCV1dhc3OBEBAAAAAAAAAAAAAAAAAAAAAP/aAAwDAQACEQMRAD8A93XpUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAvSoAD7hglmcrY26zkTFUxRNH/EDm4bW7PzN7wHDa3Z+ZveA4bW7PzN7wHDa3Z+ZveA4bW7PzN7wHDa3Z+ZveA4bW7PzN7wHDa3Z+ZveA4bW7PzN7wHDa3Z+ZveA4bW7PzN7wHDa3Z+ZveA4bW7PzN7wHDa3Z+ZveA4bW7PzN7wHDa3Z+ZveA4bW7PzN7wHDa3Z+ZveA4bW7PzN7wHDa3Z+ZveA4bW7PzN7wHDa3Z+ZveA4bW7PzN7wHDa3Z+ZveA4bW7PzN7wHDa3Z+ZveA4bW7PzN7wHDa3Z+ZveA4bW7PzN7wHDa3Z+ZveB8yUVVExXvZg1OlcUXp0fBQOAAAAL0qAA3WjeXeBfmgFWSRkbdZ7ka3+VA4/e0m1b2gPe0m1b2gPe0m1b2gPe0m1b2gPe0m1b2gPe0m1b2gPe0m1b2gPe0m1b2gPe0m1b2gPe0m1b2gPe0m1b2gPe0m1b2gPe0m1b2gPe0m1b2gPe0m1b2gPe0m1b2gPe0m1b2gPe0m1b2gPe0m1b2gPe0m1b2gPe0m1b2gPe0m1b2gPe0m1b2gPe0m1b2gPe0m1b2gPe0m1b2gPe0m1b2gPe0m1b2gfUdTBI7VY9HO/hAOK5blJ+P7IBDAAAC9KgAN1o3l3gX5oBsum6L1oBFAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGy1b2nhUChctyk/H9kAhgAABelQAG60by7wL80A2XTdF60AigAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADZat7TwqBQuW5Sfj+yAQwAAAvSoADdaN5d4F+aAbLpui9aARQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABstW9p4VAoXLcpPx/ZAIYAAAXpUAButG8u8C/NANl03RetAIoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA2Wre08KgULluUn4/sgEMAAAL0qAA3WjeXeBfmgGy6bovWgEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAbLVvaeFQKFy3KT8f2QCGAAAF6VAAbrRvLvAvzQDZdN0XrQCKAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAANlq3tPCoFC5blJ+P7IBDAAAC9KgAN1o3l3gX5oBsum6L1oBFAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGy1b2nhUChctyk/H9kAhgAABelQAG60by7wL80A2XTdF60AigAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADZat7TwqBQuW5Sfj+yAQwAAAvSoADdaN5d4F+aAbLpui9aARQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABstW9p4VAoXLcpPx/ZAIYAAAXpUAButG8u8C/NANl03RetAIoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA2Wre08KgULluUn4/sgEMAAAL0qAA3WjeXeBfmgGy6bovWgEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAbLVvaeFQKFy3KT8f2QCGAAAF6VAAbrRvLvAvzQDZdN0XrQCKAAAAAACXmPMdry7a33O5ukZSMc1jliiknfi9cE+iJr3L2AdOTn9yzWoWnSsq1qEbrrD7Cs10b0a2r6WOAFNeamXXVuV6amiqZ2Zskqo7fMsSwoxaNUbJ6rJvTkbiq/T9OkDuQAAAAAAIGes5W/JuWanMFwhlqKWldG18VOjVkX1ZGxphruY3pd/IFyKRJImSImCPajkRf6piB9gAAADgrah9NRVFSyF9Q+GN8jaeJEWSRWNVUYxFwTWdhggHS67mvTWvl6zOl4stwt8SyJFJa5WNbVNV0qxNcrZFj0LhrJjhoA72AAAAAGy1b2nhUChctyk/H9kAhgAABelQAG60by7wL80A2XTdF60AigAAAAAAAeU2/wD/AExcv/bDf/FwgTueVTdKbmDy1ktMUc1zWouMdGyZVbEksrKeNrpFTTqMV2s7DTgmgD6z1Qc2MmWZ+b6XN771w5WzXS0VFLDFTyxOejX+lqfUxrUXoxxw/wCbHpCves83WbPfLeK2VTobLmWnqqqrptVjklYlM2aHFyork1db/lVAK3OvMF4y9yyvN4s9StJcqX23oVCNa9W+pVxRu+l6ObpY9U0oB1rmTnLO1svXLuiy9O1Z7/7iOrgla1YpX+nTox8q6quRsSyue5GKmKaAMGemc1+X1qjzgublzBRUU0XGbXU0sMEb45pGx/6Sx6yt+t6IifDpxXoUKlXl7nFfLK/MVHmxbPcKmL3Vvy/FSxOgiY5uvHBLK7Xc+RU0PfgqY9CYAdZz1nSozl/jJNfaqNsdbK+niq2sRUZ6sNaxjnNRfg7DWw+GOAHZqXLHOHMNsivK5uTLktRCyS32SnpY5ooGaFY2oleutI9zcNfRgi9GKaAMtBzKzXV8rc4SXDVos5ZT9ekq6iJrdR0sSfROxrk1fqwXRhh8U0LgBy5ds/NXOGULZfJc4PslTVUMD6SlpqaGRjl9Nv8Ar1D3IjnOmd9atbg1qKiJ8QPrKXNu5wcs8w3fNDGS3zKNRNb65Y8GMqKiJWsiXQiI31JHoxcE6dKJ8AOLLuXOdl9tFPmSszo21V9cxlVS2aOiikpYo3prNjl1lR/1NVMfi3+VUDi5ZZ6z1d79n2jzHI2CoskUTYKKJGLFBMjJUkdE/VRzmvdGjm6yroA6tm/MF4zD/ixSXi8VK1dyqqlPXqFa1iu9O4SRt+liNboYxE0IB/RwAAAAAbLVvaeFQKFy3KT8f2QCGAAAF6VAAbrRvLvAvzQDZdN0XrQCKAAAAAAAB5hQ0Nan+RlxrVp5EonZbbE2pVjvSWT3US6iPw1dbBMcMQHMuhrZ+aXLOohp5JaemqLitRMxjnMjR0UKN13ImDccNGIHYebdPPUctMyQU8b5p5KGVscUbVc9zlTQjWpiqqB5tmG3X+zZe5U5zpbZUV7csUEEV2t0LFWobFU0cUb3IxUxxZquRUX44Y4aVA/eb/MCPOfLe6WvKtpuNeknt31876SaFsLGVMTka3XaiySK/V+lmP04ux0AW842+vlz1ylmjppXw0vvPdSNY5Wxa1PTonqKiYNxVNGIFj/ICjq6zlHfqajgkqaiT2mpDC1z3uwrYXLg1qKq4ImIHdrK1zbPQtcio5KeJFRdCoqMQD+dKeyXlP8AFWpty0FTxBaxFSj9J/rYe+Y7H08Nb+3T0Aeg0vOZMv2tlszVYbpBmGiibE6KlpnTwVbmtRGy00yYNVsmhfqw1V0dKAQKHLeZ15U8wb9d6GSlu2bVnrYbSjVWWKJW4QscxE1tddZdGGOGGOnED1Tl1DNBy+yxDMx0U0VpoWSRvRWua5tMxFa5F0oqL0oB5VZsj3PMWW+bViWF9PPdL9VzW907XRMkdHP60LkcqaWOfGn1JoAr5Y52Jb7FS2fMOXrxHmmhjZSTW+CjfKtRJE1GJJE/Q3VfhjpXqxTSBK5VU2apM0cy6/MFufQVtxhglSBEc6NFdHMqRMkwRJFja5rXK34gQq6y3hf8ULdbkoKhbg2ocrqNIn+sicRldpjw1v7Vx6OgD+kgAAAAA2Wre08KgULluUn4/sgEMAAAL0qAA3WjeXeBfmgGy6bovWgEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAbLVvaeFQKFy3KT8f2QCGAAAF6VAAbrRvLvAvzQDZdN0XrQCKAAAAAAAAAAAOo5Bz27NLb+6WkbRNsl0qLXj6mukiU+H+quLWauOt0aesDs01fQw6izVMUSSf9PXe1ut4cV0gck9RTwR+rPKyKJMMZHuRrdPRpXQB+wzQzRtlhe2SN39r2Kjmr1KgHxUVtHTavuZ44dfQ31HtZj1YqgH36sesjNdus5MWtxTFU/lEA+aiqpaZmvUTMhYq4I6RyNTHrVUA/UngVGOSRqpJ/01xTB3V/IH7NNDDGsk0jY42/3PeqNanWqgfkFRT1EfqU8rJo1XBHxuRzcU/qgHIAAAAAAAAA2Wre08KgULluUn4/sgEMAAAL0qAA3WjeXeBfmgGy6bovWgEUAAAAAAAAAAAeAZb/8ArPnH/wCqXr/soBZ5f8lsj33l5Zq3MFNJdLlcLfTu97LNIj4YljT0ooEa5GsbE1URNGnpXECRyhyLRZqoblR5xmlvlHlOvnstpop5HpDG2FcXSuaxya71R6Mbiq6rUREAr5Bt8OS+cWYcoWl8jctS2lt5hoHvdIkEzZY43JGr1XQ7Xdj/AMP4Am8rOX1i5jWupz7neN14uN4nnZS00ksjYaWnie6NsUbY3M6FR2H8aMNOKqH1asqf7W/yAsNopKmWayNtNTLaoJ3+o6mY/Xa+na5yq9Y2uZrN1v5w+AH7kzKlq5oZtzRmXN6PuNJa7lNa7NanSPbBBHDhi7VYrcVcitx+GOKr8MAxZqyVR5N5ncvbdZZpI8u1lxfPT2qWR8raaoi1EldE+Rzn6sqStxavxTH4gc94q8vZr5tZhpM6pW1ljyz7aC02elpq6qgdNLGrpJ50o45fqRUVG6+GKLhp1VA+6Wns+WuYNgrOXNDdILZdaltFmW1Lb7jFSJHIqNjqsauJjWemrsXKjtCJ8E1sQ94AAAAAAAAAbLVvaeFQKFy3KT8f2QCGAAAF6VAAbrRvLvAvzQDZdN0XrQCKAAAAAAAAAAAPKbPy2zJSZM5hWiVIPd5mrbjU23CTFupVxo2P1Fw+lcekDvORbPWWXJlktFbq+7t9FBTVGous3XijRrtVdGKYoBD5W5PvGWv9z8S9P/za91VxpPSdr/6E+rqa2hMHaNKAflNk27s5y1ubZEiWz1FkS2sTWxkWb145FxZh/bqsXTiB1my5R5p8vquvt2UaegvmVquZ9TQ0tXM6nmpHyf3Mx6HM6unp0LjiHLYOXmf/AP5St2d8x1dLUyrRzQVkNKqtiptZHJFBA1ya72t1lVznL0qBwxZczxlXOl+rsgyW692m71HurrYqmo9Oalq5MVc5rkVUaj3Yrp+GjDQigQcz0GcZOZXL665tmpmXWquT46Kz0CufDTUsTWukcrnfU+RznJru6EREwA7resnZzsWd63OGSW0ta29RxR3yyVj3QpI+BqtjmhlRFRrkTQqOT+f50AtOWuYt/wA6UWZM2SxWa12lrkoMv0FQ+ZJZX4ostTIiMa7V+lWp/ToTTrB6UAAAAAAAAA2Wre08KgULluUn4/sgEMAAAL0qAA3WjeXeBfmgGy6bovWgEUAAAAAAAAAAAAAAAAAAed5o5U19TmmXNmUcwS5Zv1VG2G4PbBHVU9QxqIiK+GRUaj8Gpp09HRjpA5Mp8sK+jzH/ALpzbfX5mzBDGsNunfCymhpY3IqP9KGNVZruxXF2jR2gegAAAAAAAAAAADZat7TwqBQuW5Sfj+yAQwAAAvSoADdaN5d4F+aAbLpui9aARQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABstW9p4VAoXLcpPx/ZAIYAAAXpUAButG8u8C/NANl03RetAIoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA2Wre08KgULluUn4/sgEMAAAL0qAA3WjeXeBfmgGy6bovWgEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAbLVvaeFQKFy3KT8f2QCGAAAF6VAAbrRvLvAvzQDZdN0XrQCKAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAANlq3tPCoFC5blJ+P7IBDAAAC9KgAN1o3l3gX5oBsum6L1oBFAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGy1b2nhUChctyk/H9kAhgAABelQAG60by7wL80A2XTdF60AigAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADZat7TwqBQuW5Sfj+yAQwAAAvSoADdaN5d4F+aAbLpui9aARQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABstW9p4VAoXLcpPx/ZAIYAAAXpUAButG8u8C/NANl03RetAIoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA2Wre08KgULluUn4/sgEMAAAL0qAA3WjeXeBfmgGy6bovWgEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAbLVvaeFQKFy3KT8f2QCGAAAF6VAAbrRvLvAvzQDZdN0XrQCKAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAANlq3tPCoFC5blJ+P7IBDAAAC9KgAN1o3l3gX5oBsum6L1oBFAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGy1b2nhUChctyk/H9kAhgAABelQAG60by7wL80A2XTdF60AigAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADZat7TwqBQuW5Sfj+yAQwAAAvSoADdaN5d4F+aAb66F81OrGYayqi6f6ATuFVf29oDhVX9vaA4VV/b2gOFVf29oDhVX9vaA4VV/b2gOFVf29oDhVX9vaA4VV/b2gOFVf29oDhVX9vaA4VV/b2gOFVf29oDhVX9vaA4VV/b2gOFVf29oDhVX9vaA4VV/b2gOFVf29oDhVX9vaA4VV/b2gOFVf29oDhVX9vaA4VV/b2gOFVf29oDhVX9vaA4VV/b2gOFVf29oGihoZ4Z9d+GrgqaFA0XLcpPx/ZAIYAAAXpUABqts8UM7nSO1Wq1URcFXTin8AUuJUW08ru4BxKi2nld3AOJUW08ru4BxKi2nld3AOJUW08ru4BxKi2nld3AOJUW08ru4BxKi2nld3AOJUW08ru4BxKi2nld3AOJUW08ru4BxKi2nld3AOJUW08ru4BxKi2nld3AOJUW08ru4BxKi2nld3AOJUW08ru4BxKi2nld3AOJUW08ru4BxKi2nld3AOJUW08ru4BxKi2nld3AOJUW08ru4BxKi2nld3AOJUW08ru4BxKi2nld3AOJUW08ru4BxKi2nld3AOJUW08ru4BxKi2nld3AcFbW0stK9jH4uXDBMFToVF+KASgAAAvSoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABelQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP/2Q==\"><br></p>', 6.00, 15.00, '[{\"name\":\"choice_0\",\"title\":\"Size\",\"options\":[\"32\",\"34\",\"36\"]}]', '[]', '{\"Amethyst\":{\"price\":100,\"sku\":null,\"qty\":99},\"Aqua\":{\"price\":100,\"sku\":null,\"qty\":100}}', 0, 1, 0, 0, 'pc', 0.00, 'percent', 0.00, '1', 'flat_rate', 10.00, 0, 'Demo seller product', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the .', NULL, NULL, 'Demo-seller-product-1jgFa', 0.00, '2019-03-12 06:43:22', '2020-05-04 07:09:42'),
(7, 'Demo seller product', 'seller', 3, 2, 4, 10, 1, '\"[\"uploads/products/photos/Product-main-image.jpg\"]\"', 'uploads/products/thumbnail/7.png', 'uploads/products/featured/7.png', 'uploads/products/flash_deal/flash-deal-image.jpg', 'youtube', NULL, 'seller,product', '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\"><span>&nbsp;</span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></p><p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\"><span>&nbsp;</span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></p>\r\n<table style=\"width: 100%;\">\r\n<tr>\r\n	<td>Demo</td>\r\n	<td>Demo</td>\r\n	<td>Demo</td></tr><tr><td>Title</td><td>Title</td><td>Title</td></tr></table><p><br></p><p><img src=\"data:image/jpeg;base64,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\"><br></p>', 7.00, 15.00, '[{\"name\":\"choice_0\",\"title\":\"Size\",\"options\":[\"32\",\"34\",\"36\"]}]', '[]', '{\"Amethyst\":{\"price\":100,\"sku\":null,\"qty\":99},\"Aqua\":{\"price\":100,\"sku\":null,\"qty\":100}}', 1, 1, 1, 0, 'pc', 0.00, 'percent', 0.00, '1', 'flat_rate', 10.00, 0, 'Demo seller product', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the .', NULL, NULL, 'Demo-seller-product-qeVLn', 0.00, '2019-03-12 06:43:26', '2020-05-04 07:09:42');
INSERT INTO `products` (`id`, `name`, `added_by`, `user_id`, `category_id`, `subcategory_id`, `subsubcategory_id`, `brand_id`, `photos`, `thumbnail_img`, `featured_img`, `flash_deal_img`, `video_provider`, `video_link`, `tags`, `description`, `unit_price`, `purchase_price`, `choice_options`, `colors`, `variations`, `todays_deal`, `published`, `featured`, `current_stock`, `unit`, `discount`, `discount_type`, `tax`, `tax_type`, `shipping_type`, `shipping_cost`, `num_of_sale`, `meta_title`, `meta_description`, `meta_img`, `pdf`, `slug`, `rating`, `created_at`, `updated_at`) VALUES
(8, 'Demo seller product', 'seller', 4, 2, 4, 10, 1, '\"[\"uploads/products/photos/Product-main-image.jpg\"]\"', 'uploads/products/thumbnail/8.png', 'uploads/products/featured/8.png', 'uploads/products/flash_deal/flash-deal-image.jpg', 'youtube', NULL, 'seller,product', '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\"><span>&nbsp;</span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></p><p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\"><span>&nbsp;</span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></p>\r\n<table style=\"width: 100%;\">\r\n<tbody><tr>\r\n	<td>Demo</td>\r\n	<td>Demo</td>\r\n	<td>Demo</td></tr><tr><td>Title</td><td>Title</td><td>Title</td></tr></tbody></table><p><br></p><p><img src=\"data:image/jpeg;base64,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\"><br></p>', 8.00, 15.00, '[{\"name\":\"choice_0\",\"title\":\"Size\",\"options\":[\"32\",\"34\",\"36\"]}]', '[]', '{\"Amethyst\":{\"price\":100,\"sku\":null,\"qty\":99},\"Aqua\":{\"price\":100,\"sku\":null,\"qty\":100}}', 0, 1, 1, 0, 'pc', 0.00, 'percent', 0.00, 'amount', 'flat_rate', 10.00, 0, NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the .', NULL, NULL, 'Demo-seller-product-7k6AA', 0.00, '2019-03-12 06:43:30', '2020-05-04 07:09:42'),
(9, 'Ladies Long Kameez', 'admin', 1, 1, 3, 7, 1, '\"[\\\"uploads\\\\\\/products\\\\\\/photos\\\\\\/yf5OSpOtCI1qwGfgtK8uY4BoRxkuBlXx8GlEAYkf.png\\\"]\"', 'uploads/products/thumbnail/QYbplFlVZFQN2ZwfeNhm9tbARL4QecezFV2NaO8W.png', 'uploads/products/featured/6HsUXCqGeB0NYS1Qn9bzhA9TXUWH7NMr3ixlgayw.png', 'uploads/products/flash_deal/zJNXOgPGreHCj2G61ILtzgr0E2fVXC8rTImbodS1.png', 'youtube', NULL, 'seller,product', '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\"><span>&nbsp;</span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></p><p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\"><span>&nbsp;</span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></p>\r\n<table style=\"width: 100%;\">\r\n<tbody><tr>\r\n	<td>Demo</td>\r\n	<td>Demo</td>\r\n	<td>Demo</td></tr><tr><td>Title</td><td>Title</td><td>Title</td></tr></tbody></table><p><br></p><p><img src=\"data:image/jpeg;base64,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\"><br></p>', 9.00, 15.00, '[{\"name\":\"choice_0\",\"title\":\"Size\",\"options\":[\"32\",\"34\",\"36\"]}]', '[]', '{\"32\":{\"price\":\"9\",\"sku\":\"Dsp-32\",\"qty\":\"10\"},\"34\":{\"price\":\"9\",\"sku\":\"Dsp-34\",\"qty\":\"10\"},\"36\":{\"price\":\"9\",\"sku\":\"Dsp-36\",\"qty\":\"10\"}}', 0, 1, 1, 0, 'pc', 0.00, 'percent', 0.00, 'amount', 'flat_rate', 10.00, 1, NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the .', NULL, NULL, 'Ladies-Long-Kameez-R6KFl', 0.00, '2019-05-26 04:47:11', '2021-05-18 11:08:42'),
(10, 'Eye Liner', 'seller', 2, 2, 4, 10, 1, '\"[\\\"uploads\\\\\\/products\\\\\\/photos\\\\\\/5KCfGyQVbbiaXMmcY6pcXVrgDBz12wp8ve5Adp8o.png\\\"]\"', 'uploads/products/thumbnail/10.png', 'uploads/products/featured/wL6ugV76VP7cZ0IDbmG54hYvpNZR2xCsjpYKItth.png', 'uploads/products/flash_deal/62anzsZnJFcy13N64hg63QBcWKjPgGEEGGEfKjZa.png', 'youtube', NULL, 'seller,product', '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\"><span>&nbsp;</span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></p><p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\"><span>&nbsp;</span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></p>\r\n<table style=\"width: 100%;\">\r\n<tbody><tr>\r\n	<td>Demo</td>\r\n	<td>Demo</td>\r\n	<td>Demo</td></tr><tr><td>Title</td><td>Title</td><td>Title</td></tr></tbody></table><p><br></p><p><img src=\"data:image/jpeg;base64,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\"><br></p>', 10.00, 15.00, '[{\"name\":\"choice_0\",\"title\":\"Size\",\"options\":[\"32\",\"34\",\"36\"]}]', '[]', '{\"32\":{\"price\":\"10\",\"sku\":\"VEL-32\",\"qty\":\"10\"},\"34\":{\"price\":\"10\",\"sku\":\"VEL-34\",\"qty\":\"10\"},\"36\":{\"price\":\"10\",\"sku\":\"VEL-36\",\"qty\":\"10\"}}', 1, 1, 1, 0, 'pc', 0.00, 'percent', 0.00, 'amount', 'flat_rate', 10.00, 0, 'Demo seller product', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the .', NULL, NULL, 'Eye-Liner-4wobb', 0.00, '2019-05-26 04:47:17', '2021-05-18 12:14:17'),
(11, 'Oran', 'seller', 3, 1, 3, 7, 1, '\"[\\\"uploads\\\\\\/products\\\\\\/photos\\\\\\/7BMo04VEd7XzF76HyQg7FcPWUWGB2WwOxvHqr5AF.png\\\"]\"', 'uploads/products/thumbnail/11.png', 'uploads/products/featured/KTx78hEfTKZV86qQHj5zGucc2uPqsHKsfWPDWWGd.png', 'uploads/products/flash_deal/hqPNUQDSYJgV5ZRFjVjBCOIS6ZfWFG1BC6PqM2zc.png', 'youtube', NULL, 'demo,product', '<strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\"><span>&nbsp;</span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span><br>', 11.00, 8.00, '[]', '[\"#9966CC\",\"#00FFFF\",\"#00FFFF\"]', '{\"Amethyst\":{\"price\":\"100\",\"sku\":\"GWCS-Amethyst\",\"qty\":\"99\"},\"Aqua\":{\"price\":\"100\",\"sku\":\"GWCS-Aqua\",\"qty\":\"100\"}}', 1, 1, 1, 0, 'pc', 0.00, 'percent', 0.00, 'amount', 'flat_rate', 10.00, 2, 'Demo product', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'uploads/products/meta/nOThz3HPq8sKoHwLvgsvCv2JTIHAmtKgQvWRSLoN.jpeg', NULL, 'Oran-wXoUT', 0.00, '2019-05-26 04:47:48', '2021-05-18 12:15:02'),
(12, 'Nighty Dress', 'seller', 4, 1, 2, 4, 1, '\"[\\\"uploads\\\\\\/products\\\\\\/photos\\\\\\/gpwdlOa3OvPnsJezavGQib3tBuRiVG8dIUPJ3Rnm.png\\\"]\"', 'uploads/products/thumbnail/eK86Zov0JIELwc8ZY8tGSbeweGgQ1fqPaHNBm0Qi.png', 'uploads/products/featured/7CvqxPvDEUs4ARt2dFWJiCp7ubtTddu1sDNaLIOD.png', 'uploads/products/flash_deal/ahGV26styNrALixcQORnTuCbSvqPLZ5flidWIcvG.png', 'youtube', NULL, 'demo,product', '<strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\"><span>&nbsp;</span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span><br>', 12.00, 8.00, '[]', '[\"#9966CC\",\"#00FFFF\",\"#00FFFF\"]', '{\"Amethyst\":{\"price\":\"100\",\"sku\":\"FCS-Amethyst\",\"qty\":\"99\"},\"Aqua\":{\"price\":\"100\",\"sku\":\"FCS-Aqua\",\"qty\":\"100\"}}', 1, 1, 1, 0, 'pc', 0.00, 'percent', 0.00, 'amount', 'flat_rate', 10.00, 0, 'Demo product', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'uploads/products/meta/nOThz3HPq8sKoHwLvgsvCv2JTIHAmtKgQvWRSLoN.jpeg', NULL, 'Nighty-Dress-41zHs', 0.00, '2019-05-26 04:47:57', '2021-05-18 12:16:06'),
(13, 'Ladies Brown Shirt', 'admin', 1, 1, 3, 7, 1, '\"[\\\"uploads\\\\\\/products\\\\\\/photos\\\\\\/A2B2kEHlbLRuPhk96h3erqjOGcfxPSrZgXB9oor7.png\\\"]\"', 'uploads/products/thumbnail/1PVBVB3xvt8qDEVmpP8hLBf33XXv76ZzEkXvHfzT.png', 'uploads/products/featured/61DsTM5NNeICplzsfBsOUQ6SDJyKmZTq1MdVVGPl.png', 'uploads/products/flash_deal/Arx4q3MBcaku1PlfDNXyTJdkGXXNwgSAU6I8RIht.png', 'youtube', NULL, 'cycle', 'BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike', 549.00, 500.00, '[]', '[]', '[]', 0, 1, 1, 100, '50', 0.00, 'percent', 0.00, 'amount', 'free', 0.00, 0, 'BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike', 'BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike', 'uploads/products/meta/5T9vV0NZucsed5aKVhKB2r2QP1ldA6BgQSEgzISh.jpeg', NULL, 'Ladies-Brown-Shirt-IPwSo', 0.00, '2020-09-23 13:44:47', '2021-05-18 11:11:52'),
(14, 'Lingerie Dress', 'seller', 2, 1, 2, 4, 1, '\"[\\\"uploads\\\\\\/products\\\\\\/photos\\\\\\/IHyktAC0xiiFtUY2y4CsBSnd7Eiw9KwcK3MLumNW.png\\\"]\"', 'uploads/products/thumbnail/4.png', 'uploads/products/featured/OAJ8I5QKQmv1WyJlGO05x9CKQ75SuWxd0FGdwwe8.png', 'uploads/products/flash_deal/NaiHyk1CvDc9Jkdd910SfIz52PAsi0Jd5PJsnLJD.png', 'youtube', NULL, 'cycle', 'BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike', 548.00, 500.00, '[]', '[]', '[]', 0, 1, 1, 100, '50', 0.00, 'percent', 0.00, 'amount', 'free', 0.00, 0, 'BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike', 'BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike', 'uploads/products/meta/5T9vV0NZucsed5aKVhKB2r2QP1ldA6BgQSEgzISh.jpeg', NULL, 'Lingerie-Dress-fwjhl', 0.00, '2020-09-23 13:45:02', '2021-05-18 12:16:53'),
(15, 'Women Bag', 'seller', 3, 2, 5, 13, 1, '\"[\\\"uploads\\\\\\/products\\\\\\/photos\\\\\\/LxHUr0DZThvaHg0BN0MarQBiTBEpnO2NELtz633m.png\\\"]\"', 'uploads/products/thumbnail/15.png', 'uploads/products/featured/qLMShtJX9X2J1CQguWVhuhT7FTRy7o2G1KkZke8o.png', 'uploads/products/flash_deal/DoJl3COoRk5BxEhKsaa3NbbOW6AwPUBmnAor49mZ.png', 'youtube', NULL, 'cycle', 'BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike', 547.00, 500.00, '[]', '[]', '[]', 0, 1, 1, 100, '50', 0.00, 'percent', 0.00, 'amount', 'free', 0.00, 0, 'BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike', 'BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike', 'uploads/products/meta/5T9vV0NZucsed5aKVhKB2r2QP1ldA6BgQSEgzISh.jpeg', NULL, 'Women-Bag-akFBu', 0.00, '2020-09-23 13:45:07', '2021-05-18 12:17:46'),
(16, 'Floret Cotton Saree', 'seller', 4, 1, 1, 1, 1, '\"[\"images/product/cotton_saree_2_1.jpg\",\"images/product/cotton_saree_2_2.jpg\",\"images/product/cotton_saree_2_3.jpg\",\"images/product/cotton_saree_2_1.jpg\"]\"', 'uploads/products/thumbnail/16.png', 'uploads/products/featured/16.png', 'uploads/products/flash_deal/mKHcFkiddzE5QjHrTb5q4dpK0PNr9kS7qrWVLA9h.jpeg', 'youtube', NULL, 'cycle', 'BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike', 546.00, 500.00, '[]', '[]', '{\"Amethyst\":{\"price\":100,\"sku\":null,\"qty\":99},\"Aqua\":{\"price\":100,\"sku\":null,\"qty\":100}}', 0, 1, 1, 100, '50', 0.00, 'percent', 0.00, 'amount', 'free', 0.00, 0, 'BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike', 'BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike', 'uploads/products/meta/5T9vV0NZucsed5aKVhKB2r2QP1ldA6BgQSEgzISh.jpeg', NULL, 'BEIOU-Sports-Downtown-Carbon-Wheels-Ultra-Superlight-Urban-Bike-J1axS', 0.00, '2020-09-23 13:47:30', '2020-09-23 13:50:43');
INSERT INTO `products` (`id`, `name`, `added_by`, `user_id`, `category_id`, `subcategory_id`, `subsubcategory_id`, `brand_id`, `photos`, `thumbnail_img`, `featured_img`, `flash_deal_img`, `video_provider`, `video_link`, `tags`, `description`, `unit_price`, `purchase_price`, `choice_options`, `colors`, `variations`, `todays_deal`, `published`, `featured`, `current_stock`, `unit`, `discount`, `discount_type`, `tax`, `tax_type`, `shipping_type`, `shipping_cost`, `num_of_sale`, `meta_title`, `meta_description`, `meta_img`, `pdf`, `slug`, `rating`, `created_at`, `updated_at`) VALUES
(17, 'Ladies Black Shirt', 'admin', 1, 1, 3, 7, 1, '\"[\\\"uploads\\\\\\/products\\\\\\/photos\\\\\\/rbo0Hjk5Nrr5BYCjbHhUUZWqnXe4qmEMFZ6YPVVr.png\\\"]\"', 'uploads/products/thumbnail/ltaVTVdcwX2yBiDyOFfQ7NdUGeGj81TuZwy1cESZ.png', 'uploads/products/featured/mfiW64W7cEGmOVSfhdUqeDNyHAA5uJyoOH2tdvkp.png', 'uploads/products/flash_deal/l1FTGg3QzmLuwQkKs4lgw0gNEooapmhWISEbyzgF.png', 'youtube', NULL, 'cycle', 'BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike', 545.00, 500.00, '[]', '[]', '[]', 0, 1, 1, 100, '50', 0.00, 'percent', 0.00, 'amount', 'free', 0.00, 0, 'BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike', 'BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike BEIOU Sports Downtown Carbon Wheels Ultra Superlight Urban Bike', 'uploads/products/meta/5T9vV0NZucsed5aKVhKB2r2QP1ldA6BgQSEgzISh.jpeg', NULL, 'Ladies-Black-Shirt-DoHik', 0.00, '2020-09-23 13:47:35', '2021-05-18 11:06:49'),
(21, 'Ladies Lipstick', 'admin', 1, 2, 4, 10, 1, '\"[\\\"uploads\\\\\\/products\\\\\\/photos\\\\\\/W6leMJG1M8NzMl4lbhtmYC5OwlKnOoE0ZahsYbZn.jpg\\\"]\"', 'uploads/products/thumbnail/haute_couture_lipstick.jpg', 'uploads/products/featured/haute_couture_lipstick.jpg', 'uploads/products/flash_deal/haute_couture_lipstick.jpg', 'youtube', NULL, '', NULL, 50.00, 40.00, '[]', '[]', '[]', 0, 1, 1, 100, 'Pc', 0.00, 'percent', 0.00, 'amount', 'flat_rate', 0.00, 0, NULL, NULL, 'uploads/products/meta/haute_couture_lipstick.jpg', NULL, 'Ladies-Lipstick-stick', 0.00, '2021-04-01 10:05:45', '2021-05-18 10:58:14'),
(22, 'Makeup Box', 'admin', 1, 2, 4, 10, 1, '\"[\\\"uploads\\\\\\/products\\\\\\/photos\\\\\\/BBScrlEVl6LRWZqj4u9KRXAalpkz3ISxJPxwLGdk.jpg\\\"]\"', 'uploads/products/thumbnail/haute_couture_cosmetics.jpg', 'uploads/products/featured/haute_couture_cosmetics.jpg', 'uploads/products/flash_deal/haute_couture_cosmetics.jpg', 'youtube', NULL, '', NULL, 50.00, 40.00, '[]', '[]', '[]', 1, 1, 1, 100, 'Pc', 0.00, 'percent', 0.00, 'amount', 'flat_rate', 0.00, 0, NULL, NULL, 'uploads/products/meta/haute_couture_cosmetics.jpg', NULL, 'Makeup-Box-p Box', 0.00, '2021-04-01 10:14:15', '2021-05-18 09:56:57'),
(23, 'Ladies Dress', 'admin', 1, 3, 7, 15, 1, '\"[\\\"uploads\\\\\\/products\\\\\\/photos\\\\\\/W33sY4hL6QEjwrK2BAVQJ3sDnu7ZFb0avfOHRzOv.jpg\\\"]\"', 'uploads/products/thumbnail/haute_couture_dress.jpg', 'uploads/products/featured/haute_couture_dress.jpg', 'uploads/products/flash_deal/haute_couture_dress.jpg', 'youtube', NULL, '', NULL, 50.00, 40.00, '[]', '[]', '[]', 0, 1, 1, 100, 'Pc', 0.00, 'percent', 0.00, 'amount', 'flat_rate', 0.00, 0, NULL, NULL, 'uploads/products/meta/haute_couture_dress.jpg', NULL, 'Ladies-Dress-Dress', 0.00, '2021-04-01 10:14:15', '2021-05-18 09:58:09'),
(24, 'Georgio Armani Lipstick', 'seller', 2, 2, 4, 10, 1, '\"[\\\"uploads\\\\\\/products\\\\\\/photos\\\\\\/Q1inN4GOOBUvTtyl3Kri4snDfHyVPgKfmr7MYEar.jpg\\\"]\"', 'uploads/products/thumbnail/haute_couture_lipstick.jpg', 'uploads/products/featured/haute_couture_lipstick.jpg', 'uploads/products/flash_deal/haute_couture_lipstick.jpg', 'youtube', NULL, 'Lipstick', NULL, 50.00, 40.00, '[]', '[]', '[]', 0, 1, 1, 100, 'Pc', 0.00, 'percent', 0.00, 'amount', 'flat_rate', 0.00, 0, NULL, NULL, 'uploads/products/meta/haute_couture_lipstick.jpg', NULL, 'Georgio-Armani-Lipstick-stick', 0.00, '2021-04-01 11:06:52', '2021-05-18 09:23:11'),
(25, 'Georgio Armani Makeup Box', 'seller', 2, 2, 4, 10, 1, '\"[\\\"uploads\\\\\\/products\\\\\\/photos\\\\\\/f2lRdfPsoBAdIEoTPQLrn1EupODcFHxCxX8BGsJ8.jpg\\\"]\"', 'uploads/products/thumbnail/haute_couture_cosmetics.jpg', 'uploads/products/featured/haute_couture_cosmetics.jpg', 'uploads/products/flash_deal/haute_couture_cosmetics.jpg', 'youtube', NULL, '', NULL, 50.00, 40.00, '[]', '[]', '[]', 0, 1, 1, 100, 'Pc', 0.00, 'percent', 0.00, 'amount', 'flat_rate', 0.00, 0, NULL, NULL, 'uploads/products/meta/haute_couture_cosmetics.jpg', NULL, 'Georgio-Armani-Makeup-Box-p Box', 0.00, '2021-04-01 11:06:52', '2021-05-18 09:23:48'),
(26, 'Georgio Armani Dress', 'seller', 2, 2, 4, 10, 1, '\"[\\\"uploads\\\\\\/products\\\\\\/photos\\\\\\/h9JtFbiBYo3zextFX48FLrcEd11FzPN9XnOSEXKZ.jpg\\\"]\"', 'uploads/products/thumbnail/haute_couture_dress.jpg', 'uploads/products/featured/haute_couture_dress.jpg', 'uploads/products/flash_deal/haute_couture_dress.jpg', 'youtube', NULL, '', NULL, 50.00, 40.00, '[]', '[]', '[]', 0, 1, 1, 100, 'Pc', 0.00, 'percent', 0.00, 'amount', 'flat_rate', 0.00, 0, NULL, NULL, 'uploads/products/meta/haute_couture_dress.jpg', NULL, 'Georgio-Armani-Dress-Dress', 0.00, '2021-04-01 11:06:52', '2021-05-18 09:41:51'),
(27, 'Valentino Ladies Lipstick', 'seller', 3, 2, 4, 10, 1, '\"[\\\"uploads\\\\\\/products\\\\\\/photos\\\\\\/a1x8YPWTEWLpnwW3BKm71R1uQ5E1i2WxDcjmMfGg.jpg\\\"]\"', 'uploads/products/thumbnail/P5AOZ64R61N1ZOpXGsB2xIVTGFYTzeDwcWpn44Tl.jpg', 'uploads/products/featured/7tLsPtyseFqqnVVgjdOGwMMFkCeYpVPGqC7ZuKqZ.jpg', 'uploads/products/flash_deal/VWSFGNMgtuGIyb0A1vRDAx9gwbCxQCoC1NVTwv9p.jpg', 'youtube', NULL, '', NULL, 50.00, 40.00, '[]', '[]', '[]', 0, 1, 1, 100, 'Pc', 0.00, 'percent', 0.00, 'amount', 'flat_rate', 0.00, 0, NULL, NULL, 'uploads/products/meta/haute_couture_lipstick.jpg', NULL, 'Valentino-Ladies-Lipstick-stick', 0.00, '2021-04-01 11:06:52', '2021-05-18 11:22:42'),
(28, 'Valentino Makeup Box', 'seller', 3, 2, 4, 10, 1, '\"[\\\"uploads\\\\\\/products\\\\\\/photos\\\\\\/Q9sZW6BlIqlT0SHTxxCdmqlz6YhbNxWri9gSL7O2.jpg\\\"]\"', 'uploads/products/thumbnail/Kws9SATeq1DPZfKnE0XxPJmccNmkLU8VvtEkVYN4.jpg', 'uploads/products/featured/9tHTLLpmJ2HDWdoMuak771cDYNzPzzIjSXbTeusb.jpg', 'uploads/products/flash_deal/qSr38DjPDC7UW6etkjwwXjN800g8c1ZfQhTRZs9L.jpg', 'youtube', NULL, '', NULL, 50.00, 40.00, '[]', '[]', '[]', 0, 1, 1, 100, 'Pc', 0.00, 'percent', 0.00, 'amount', 'flat_rate', 0.00, 0, NULL, NULL, 'uploads/products/meta/haute_couture_cosmetics.jpg', NULL, 'Valentino-Makeup-Box-p Box', 0.00, '2021-04-01 11:06:52', '2021-05-18 12:04:46'),
(29, 'Valentino Ladies Dress', 'seller', 3, 2, 4, 10, 1, '\"[\\\"uploads\\\\\\/products\\\\\\/photos\\\\\\/2Clx6nNS2frTSIT4ksZxNhUQbMptRDsgEqBL7KDD.jpg\\\"]\"', 'uploads/products/thumbnail/haute_couture_dress.jpg', 'uploads/products/featured/haute_couture_dress.jpg', 'uploads/products/flash_deal/haute_couture_dress.jpg', 'youtube', NULL, '', NULL, 50.00, 40.00, '[]', '[]', '[]', 0, 1, 1, 100, 'Pc', 0.00, 'percent', 0.00, 'amount', 'flat_rate', 0.00, 0, NULL, NULL, 'uploads/products/meta/haute_couture_dress.jpg', NULL, 'Valentino-Ladies-Dress-Dress', 0.00, '2021-04-01 11:06:52', '2021-05-18 12:10:08'),
(30, 'Coco Chanel Lipstick', 'seller', 4, 2, 4, 10, 1, '\"[\\\"uploads\\\\\\/products\\\\\\/photos\\\\\\/gDqJnJanUooDXxV8nY6ncnmVGsN4lzofwd7NFgCb.jpg\\\"]\"', 'uploads/products/thumbnail/haute_couture_lipstick.jpg', 'uploads/products/featured/haute_couture_lipstick.jpg', 'uploads/products/flash_deal/haute_couture_lipstick.jpg', 'youtube', NULL, '', NULL, 50.00, 40.00, '[]', '[]', '[]', 0, 1, 1, 100, 'Pc', 0.00, 'percent', 0.00, 'amount', 'flat_rate', 0.00, 0, NULL, NULL, 'uploads/products/meta/haute_couture_lipstick.jpg', NULL, 'Coco-Chanel-Lipstick-stick', 0.00, '2021-04-01 11:06:52', '2021-05-18 12:10:54'),
(31, 'Coco Chanel Makeup Box', 'seller', 4, 2, 4, 10, 1, '\"[\\\"uploads\\\\\\/products\\\\\\/photos\\\\\\/bkqHHxUHIxgB2CH0vcwu6pv29dyfrsHEYovY7xyH.jpg\\\"]\"', 'uploads/products/thumbnail/haute_couture_cosmetics.jpg', 'uploads/products/featured/haute_couture_cosmetics.jpg', 'uploads/products/flash_deal/haute_couture_cosmetics.jpg', 'youtube', NULL, '', NULL, 50.00, 40.00, '[]', '[]', '[]', 0, 1, 1, 100, 'Pc', 0.00, 'percent', 0.00, 'amount', 'flat_rate', 0.00, 0, NULL, NULL, 'uploads/products/meta/haute_couture_cosmetics.jpg', NULL, 'Coco-Chanel-Makeup-Box-p Box', 0.00, '2021-04-01 11:06:52', '2021-05-18 12:11:25'),
(32, 'Coco Chanel Dress', 'seller', 4, 2, 4, 10, 1, '\"[\\\"uploads\\\\\\/products\\\\\\/photos\\\\\\/VU4XJGOn6B2QLx5azhOvMQaIcH3Dztc4NjEIKAE9.jpg\\\"]\"', 'uploads/products/thumbnail/haute_couture_dress.jpg', 'uploads/products/featured/haute_couture_dress.jpg', 'uploads/products/flash_deal/haute_couture_dress.jpg', 'youtube', NULL, '', NULL, 50.00, 40.00, '[]', '[]', '[]', 0, 1, 1, 100, 'Pc', 0.00, 'percent', 0.00, 'amount', 'flat_rate', 0.00, 0, NULL, NULL, 'uploads/products/meta/haute_couture_dress.jpg', NULL, 'Coco-Chanel-Dress-Dress', 0.00, '2021-04-01 11:06:52', '2021-05-18 12:11:54');

-- --------------------------------------------------------

--
-- Table structure for table `product_stocks`
--

CREATE TABLE `product_stocks` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `stocks` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL DEFAULT 0,
  `comment` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `viewed` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'Manager', '[\"1\",\"2\",\"4\"]', '2018-10-10 04:39:47', '2018-10-10 04:51:37'),
(2, 'Accountant', '[\"2\",\"3\"]', '2018-10-10 04:52:09', '2018-10-10 04:52:09');

-- --------------------------------------------------------

--
-- Table structure for table `searches`
--

CREATE TABLE `searches` (
  `id` int(11) NOT NULL,
  `query` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `count` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `verification_status` int(1) NOT NULL DEFAULT 0,
  `verification_info` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `cash_on_delivery_status` int(1) NOT NULL DEFAULT 0,
  `sslcommerz_status` int(1) NOT NULL DEFAULT 0,
  `stripe_status` int(1) NOT NULL DEFAULT 0,
  `paypal_status` int(1) NOT NULL DEFAULT 0,
  `paypal_client_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `paypal_client_secret` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ssl_store_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ssl_password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stripe_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stripe_secret` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instamojo_status` int(1) NOT NULL DEFAULT 0,
  `instamojo_api_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instamojo_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `razorpay_status` int(1) NOT NULL DEFAULT 0,
  `razorpay_api_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `razorpay_secret` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `paystack_status` int(1) NOT NULL DEFAULT 0,
  `paystack_public_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `paystack_secret_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `voguepay_status` int(1) NOT NULL DEFAULT 0,
  `voguepay_merchand_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bkash_personal_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bkash_merchant_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin_to_pay` double(8,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `user_id`, `verification_status`, `verification_info`, `cash_on_delivery_status`, `sslcommerz_status`, `stripe_status`, `paypal_status`, `paypal_client_id`, `paypal_client_secret`, `ssl_store_id`, `ssl_password`, `stripe_key`, `stripe_secret`, `instamojo_status`, `instamojo_api_key`, `instamojo_token`, `razorpay_status`, `razorpay_api_key`, `razorpay_secret`, `paystack_status`, `paystack_public_key`, `paystack_secret_key`, `voguepay_status`, `voguepay_merchand_id`, `bkash_personal_number`, `bkash_merchant_number`, `admin_to_pay`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '[{\"type\":\"text\",\"label\":\"Name\",\"value\":\"Mr. Seller\"},{\"type\":\"select\",\"label\":\"Marital Status\",\"value\":\"Married\"},{\"type\":\"multi_select\",\"label\":\"Company\",\"value\":\"[\\\"Company\\\"]\"},{\"type\":\"select\",\"label\":\"Gender\",\"value\":\"Male\"},{\"type\":\"file\",\"label\":\"Image\",\"value\":\"uploads\\/verification_form\\/CRWqFifcbKqibNzllBhEyUSkV6m1viknGXMEhtiW.png\"}]', 1, 1, 1, 0, NULL, NULL, 'activ5c3c5dac9254d', 'activ5c3c5dac9254d@ssl', 'pk_test_CqAfBW85ZifDyuEOhGaD4ZbE', 'sk_test_mRRMmV4GnBJ4UT7qeLlDe5F8', 0, NULL, NULL, 0, NULL, NULL, 1, 'pk_test_855c5f39d8f662a5d63fabe25ead64fe21018f15', 'sk_test_1175e92519f88e9c665d0b980f53ff1cfffbbc38', 0, NULL, NULL, NULL, 78.40, '2018-10-07 04:42:57', '2020-05-11 18:59:47'),
(2, 2, 1, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, 0.00, '2021-03-31 06:14:39', '2021-05-18 12:26:42'),
(3, 3, 1, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, 0.00, '2021-03-31 06:32:11', '2021-05-18 12:26:41'),
(4, 4, 1, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, 0.00, '2021-03-31 06:32:20', '2021-05-18 12:26:39'),
(6, 8, 1, '[{\"type\":\"text\",\"label\":\"Your name\",\"value\":\"Asraf\"},{\"type\":\"text\",\"label\":\"Shop name\",\"value\":\"Bio Traders\"},{\"type\":\"text\",\"label\":\"Email\",\"value\":\"seaudbd@gmail.com\"},{\"type\":\"text\",\"label\":\"License No\",\"value\":\"123456\"},{\"type\":\"text\",\"label\":\"Full Address\",\"value\":\"Mirpur, Dhaka\"},{\"type\":\"text\",\"label\":\"Phone Number\",\"value\":\"01776648825\"},{\"type\":\"file\",\"label\":\"Tax Papers\",\"value\":\"uploads\\/verification_form\\/AmJHyjKriQx2WBDiLhwsVQi3SgNieJQKaBhHqFzP.png\"}]', 1, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, 0.00, '2021-07-12 09:32:10', '2021-07-12 09:51:50');

-- --------------------------------------------------------

--
-- Table structure for table `seller_withdraw_requests`
--

CREATE TABLE `seller_withdraw_requests` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `amount` double(8,2) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `viewed` int(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seo_settings`
--

CREATE TABLE `seo_settings` (
  `id` int(11) NOT NULL,
  `keyword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `revisit` int(11) NOT NULL,
  `sitemap_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `seo_settings`
--

INSERT INTO `seo_settings` (`id`, `keyword`, `author`, `revisit`, `sitemap_link`, `description`, `created_at`, `updated_at`) VALUES
(1, 'bootstrap,responsive,template,developer', 'FashFans', 11, 'https://fashfans.com', 'FashFans CMS Multi vendor system is such a platform to build a borderless marketplace both for physical and digital goods.', '2020-11-26 08:36:01', '2020-11-26 02:36:01');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sliders` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `google` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `pick_up_point_id` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `user_id`, `name`, `logo`, `sliders`, `address`, `facebook`, `google`, `twitter`, `youtube`, `slug`, `meta_title`, `meta_description`, `pick_up_point_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'FashFans', 'uploads/shop/logo/fashfans.jpg', '[\"uploads\\/shop\\/sliders\\/fashfans_banner.jpg\",\"uploads\\/shop\\/sliders\\/fashfans_profile_page_image.jpg\",\"uploads\\/shop\\/sliders\\/fashfans_featured_image.jpg\"]', 'Mirpur, Dhaka, Bangladesh', 'www.facebook.com', 'www.google.com', 'www.twitter.com', 'www.youtube.com', 'FashFans', 'FashFans', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut purus viverra, bibendum quam in, pretium turpis. Sed porta ligula et tortor accumsan viverra. Nulla fermentum ipsum et lacus fermentum dapibus. Proin egestas, eros vitae porta euismod, nibh dolor aliquam erat, quis molestie odio felis et est. Maecenas egestas finibus orci.\r\n<br><br>\r\nEget tincidunt ligula pulvinar ornare. In eleifend egestas dictum. Fusce iaculis, lorem quis tincidunt scelerisque, felis nisl tempus ex, vel hendrerit dui purus vel urna. Aenean aliquam dapibus facilisis. Integer efficitur id velit in iaculis.\r\n<br><br>\r\nMaecenas non dui sit amet nisl ultricies euismod. Donec risus diam, ullamcorper non eros at, pulvinar volutpat sem. Phasellus tempus vel nibh sed ultricies. Quisque ut nibh nunc. Nam nisl dolor, cursus sit amet tempus non, pharetra ac purus.\r\n<br><br>\r\nSed viverra volutpat sem vel mattis. Duis porta nisl non fermentum suscipit. Nulla blandit mauris id leo vestibulum, sit amet elementum metus posuere. Etiam elementum ex odio. Phasellus rhoncus commodo dolor facilisis dapibus. Fusce varius sapien ex, a pharetra nisl interdum in. Morbi eget sapien tristique, efficitur sem ac, suscipit velit.', '[]', '2018-11-27 10:23:13', '2020-11-29 05:00:58'),
(2, 2, 'Giorgio Armani', 'uploads/shop/logo/giorgio_armani.jpg', '[\"uploads\\/shop\\/sliders\\/giorgio_armani_banner.png\",\"uploads\\/shop\\/sliders\\/giorgio_armani_profile_page_image.jpg\",\"uploads\\/shop\\/sliders\\/giorgio_armani_featured_image.jpg\"]', 'Venice, Italy', NULL, NULL, NULL, NULL, 'GeorgioArmani', 'GeorgioArmani', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut purus viverra, bibendum quam in, pretium turpis. Sed porta ligula et tortor accumsan viverra. Nulla fermentum ipsum et lacus fermentum dapibus. Proin egestas, eros vitae porta euismod, nibh dolor aliquam erat, quis molestie odio felis et est. Maecenas egestas finibus orci.\r\n<br><br>\r\nEget tincidunt ligula pulvinar ornare. In eleifend egestas dictum. Fusce iaculis, lorem quis tincidunt scelerisque, felis nisl tempus ex, vel hendrerit dui purus vel urna. Aenean aliquam dapibus facilisis. Integer efficitur id velit in iaculis.\r\n<br><br>\r\nMaecenas non dui sit amet nisl ultricies euismod. Donec risus diam, ullamcorper non eros at, pulvinar volutpat sem. Phasellus tempus vel nibh sed ultricies. Quisque ut nibh nunc. Nam nisl dolor, cursus sit amet tempus non, pharetra ac purus.\r\n<br><br>\r\nSed viverra volutpat sem vel mattis. Duis porta nisl non fermentum suscipit. Nulla blandit mauris id leo vestibulum, sit amet elementum metus posuere. Etiam elementum ex odio. Phasellus rhoncus commodo dolor facilisis dapibus. Fusce varius sapien ex, a pharetra nisl interdum in. Morbi eget sapien tristique, efficitur sem ac, suscipit velit.', NULL, '2021-03-31 06:24:28', '2021-03-31 06:24:28'),
(3, 3, 'Valentino', 'uploads/shop/logo/valentino.jpg', '[\"uploads\\/shop\\/sliders\\/valentino_banner.jpg\",\"uploads\\/shop\\/sliders\\/valentino_profile_page_image.jpg\",\"uploads\\/shop\\/sliders\\/valentino_featured_image.jpg\"]', 'Paris, France', NULL, NULL, NULL, NULL, 'Valentino', 'Valentino', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut purus viverra, bibendum quam in, pretium turpis. Sed porta ligula et tortor accumsan viverra. Nulla fermentum ipsum et lacus fermentum dapibus. Proin egestas, eros vitae porta euismod, nibh dolor aliquam erat, quis molestie odio felis et est. Maecenas egestas finibus orci.\r\n<br><br>\r\nEget tincidunt ligula pulvinar ornare. In eleifend egestas dictum. Fusce iaculis, lorem quis tincidunt scelerisque, felis nisl tempus ex, vel hendrerit dui purus vel urna. Aenean aliquam dapibus facilisis. Integer efficitur id velit in iaculis.\r\n<br><br>\r\nMaecenas non dui sit amet nisl ultricies euismod. Donec risus diam, ullamcorper non eros at, pulvinar volutpat sem. Phasellus tempus vel nibh sed ultricies. Quisque ut nibh nunc. Nam nisl dolor, cursus sit amet tempus non, pharetra ac purus.\r\n<br><br>\r\nSed viverra volutpat sem vel mattis. Duis porta nisl non fermentum suscipit. Nulla blandit mauris id leo vestibulum, sit amet elementum metus posuere. Etiam elementum ex odio. Phasellus rhoncus commodo dolor facilisis dapibus. Fusce varius sapien ex, a pharetra nisl interdum in. Morbi eget sapien tristique, efficitur sem ac, suscipit velit.', NULL, '2021-03-31 06:30:25', '2021-03-31 06:30:25'),
(4, 4, 'Coco Chanel', 'uploads/shop/logo/coco_chanel.jpg', '[\"uploads\\/shop\\/sliders\\/coco_chanel_banner.jpg\",\"uploads\\/shop\\/sliders\\/coco_chanel_profile_page_image.jpg\",\"uploads\\/shop\\/sliders\\/coco_chanel_featured_image.jpg\"]', 'Paris, France', NULL, NULL, NULL, NULL, 'CocoChanel', 'CocoChanel', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut purus viverra, bibendum quam in, pretium turpis. Sed porta ligula et tortor accumsan viverra. Nulla fermentum ipsum et lacus fermentum dapibus. Proin egestas, eros vitae porta euismod, nibh dolor aliquam erat, quis molestie odio felis et est. Maecenas egestas finibus orci.\r\n<br><br>\r\nEget tincidunt ligula pulvinar ornare. In eleifend egestas dictum. Fusce iaculis, lorem quis tincidunt scelerisque, felis nisl tempus ex, vel hendrerit dui purus vel urna. Aenean aliquam dapibus facilisis. Integer efficitur id velit in iaculis.\r\n<br><br>\r\nMaecenas non dui sit amet nisl ultricies euismod. Donec risus diam, ullamcorper non eros at, pulvinar volutpat sem. Phasellus tempus vel nibh sed ultricies. Quisque ut nibh nunc. Nam nisl dolor, cursus sit amet tempus non, pharetra ac purus.\r\n<br><br>\r\nSed viverra volutpat sem vel mattis. Duis porta nisl non fermentum suscipit. Nulla blandit mauris id leo vestibulum, sit amet elementum metus posuere. Etiam elementum ex odio. Phasellus rhoncus commodo dolor facilisis dapibus. Fusce varius sapien ex, a pharetra nisl interdum in. Morbi eget sapien tristique, efficitur sem ac, suscipit velit.', NULL, '2021-03-31 06:31:35', '2021-03-31 06:31:35'),
(6, 8, 'Bio Traders', 'uploads/shop/logo/A4hRoyqz6bBcSWqfbxzT3WYl8qBsZGaDV0IvhkBC.png', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, NULL, 'Bio-Traders-6', 'Bio Traders', 'Bio Traders', '[]', '2021-07-12 09:32:10', '2021-07-12 09:35:25');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `published` int(1) NOT NULL DEFAULT 1,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `photo`, `published`, `link`, `created_at`, `updated_at`) VALUES
(7, 'uploads/sliders/slider-image.jpg', 1, NULL, '2019-03-12 05:58:05', '2019-03-12 05:58:05'),
(8, 'uploads/sliders/slider-image.jpg', 1, NULL, '2019-03-12 05:58:12', '2019-03-12 05:58:12');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `category_id`, `slug`, `meta_title`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'SAREE COLLECTION', 1, 'Shirt', 'Demo sub category 1', NULL, '2019-03-12 06:13:24', '2019-08-06 06:07:14'),
(2, 'INNERWEAR AND LINGERIE', 1, 'Shoes', 'Demo sub category 2', NULL, '2019-03-12 06:13:44', '2019-08-06 06:07:14'),
(3, 'MODERN AND WESTERN', 1, 'Watch', 'Demo sub category 3', NULL, '2019-03-12 06:13:59', '2019-08-06 06:07:14'),
(4, 'COSMETICS & SKIN', 2, 'Jewellery', 'Demo sub category 1', NULL, '2019-03-12 06:18:25', '2019-08-06 06:07:14'),
(5, 'LADIES WATCH', 2, 'Gown', 'Demo sub category 2', NULL, '2019-03-12 06:18:38', '2019-08-06 06:07:14'),
(6, 'FOOTWEAR', 2, 'Bags', 'Demo sub category 3', NULL, '2019-03-12 06:18:51', '2019-08-06 06:07:14'),
(7, 'TOILETRIES', 3, 'Toys', 'Demo sub category 1', NULL, '2019-03-12 06:19:05', '2019-08-06 06:07:14'),
(8, 'HEALTH & CARE', 3, 'Dress', 'Demo sub category 2', NULL, '2019-03-12 06:19:13', '2019-08-06 06:07:14'),
(9, 'ENTERTAINMENT', 3, 'Diaper', 'Demo sub category 3', NULL, '2019-03-12 06:19:22', '2019-08-06 06:07:14'),
(11, 'Vegetable', 9, 'Vegetable', 'Vegetable', NULL, '2021-05-16 15:01:02', '2021-05-16 15:01:17');

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_categories`
--

CREATE TABLE `sub_sub_categories` (
  `id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `brands` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sub_sub_categories`
--

INSERT INTO `sub_sub_categories` (`id`, `sub_category_id`, `name`, `brands`, `slug`, `meta_title`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Cotton, Taant Saree', '[\"1\",\"2\"]', 'Demo-sub-sub-category', 'Demo sub sub category', NULL, '2019-03-12 06:19:49', '2019-08-06 06:07:19'),
(2, 1, 'Muslin & Half Silk Saree', '[\"1\",\"2\"]', 'Demo-sub-sub-category-2', 'Demo sub sub category 2', NULL, '2019-03-12 06:20:23', '2019-08-06 06:07:19'),
(3, 1, 'Tangail Saree', '[\"1\",\"2\"]', 'Demo-sub-sub-category-3', 'Demo sub sub category 3', NULL, '2019-03-12 06:20:43', '2019-08-06 06:07:19'),
(4, 2, 'Innerwear & Nighty', '[\"1\",\"2\"]', 'Demo-sub-sub-category-1', 'Demo sub sub category 1', NULL, '2019-03-12 06:21:28', '2019-08-06 06:07:19'),
(5, 2, 'Stylish Lingerie', '[\"1\",\"2\"]', 'Demo-sub-sub-category-2', 'Demo sub sub category 2', NULL, '2019-03-12 06:21:40', '2019-08-06 06:07:19'),
(6, 2, 'Demo sub sub category 3', '[\"1\",\"2\"]', 'Demo-sub-sub-category-3', 'Demo sub sub category 3', NULL, '2019-03-12 06:21:56', '2019-08-06 06:07:19'),
(7, 3, 'Demo sub sub category 1', '[\"1\",\"2\"]', 'Demo-sub-sub-category-1', 'Demo sub sub category 1', NULL, '2019-03-12 06:23:31', '2019-08-06 06:07:19'),
(8, 3, 'Demo sub sub category 3', '[\"1\",\"2\"]', 'Demo-sub-sub-category-3', 'Demo sub sub category 3', NULL, '2019-03-12 06:23:48', '2019-08-06 06:07:19'),
(9, 3, 'Demo sub sub category 3', '[\"1\",\"2\"]', 'Demo-sub-sub-category-3', 'Demo sub sub category 3', NULL, '2019-03-12 06:24:01', '2019-08-06 06:07:19'),
(10, 4, 'Demo sub sub category 1', '[\"1\",\"2\"]', 'Demo-sub-sub-category-1', 'Demo sub sub category 1', NULL, '2019-03-12 06:24:37', '2019-08-06 06:07:19'),
(11, 4, 'Demo sub sub category 2', '[\"1\",\"2\"]', 'Demo-sub-sub-category-2', 'Demo sub sub category 2', NULL, '2019-03-12 06:25:14', '2019-08-06 06:07:19'),
(12, 4, 'Demo sub sub category', '[\"1\",\"2\"]', 'Demo-sub-sub-category', 'Demo sub sub category', NULL, '2019-03-12 06:25:25', '2019-08-06 06:07:19'),
(13, 5, 'Demo sub sub category 1', '[\"1\",\"2\"]', 'Demo-sub-sub-category-1', 'Demo sub sub category 1', NULL, '2019-03-12 06:25:58', '2019-08-06 06:07:19'),
(14, 6, 'Demo sub sub category 1', '[\"1\",\"2\"]', 'Demo-sub-sub-category-1', 'Demo sub sub category 1', NULL, '2019-03-12 06:26:16', '2019-08-06 06:07:19'),
(15, 7, 'Demo sub sub category', '[\"1\",\"2\"]', 'Demo-sub-sub-category', 'Demo sub sub category', NULL, '2019-03-12 06:27:17', '2019-08-06 06:07:19'),
(16, 8, 'Demo sub sub category', '[\"1\",\"2\"]', 'Demo-sub-sub-category', 'Demo sub sub category', NULL, '2019-03-12 06:27:29', '2019-08-06 06:07:19'),
(17, 9, 'Demo sub sub category', '[\"1\",\"2\"]', 'Demo-sub-sub-category', 'Demo sub sub category', NULL, '2019-03-12 06:27:41', '2019-08-06 06:07:19');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `code` int(6) NOT NULL,
  `user_id` int(11) NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `files` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'pending',
  `viewed` int(1) NOT NULL DEFAULT 0,
  `client_viewed` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `code`, `user_id`, `subject`, `details`, `files`, `status`, `viewed`, `client_viewed`, `created_at`, `updated_at`) VALUES
(1, 100000, 8, 'Help', 'I need help.', NULL, 'pending', 0, 1, '2021-07-12 15:53:22', '2021-07-12 09:53:22');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_replies`
--

CREATE TABLE `ticket_replies` (
  `id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reply` longtext COLLATE utf8_unicode_ci NOT NULL,
  `files` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `provider_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_type` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'customer',
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar_original` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postal_code` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `balance` double(8,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `provider_id`, `user_type`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `avatar`, `avatar_original`, `address`, `country`, `city`, `postal_code`, `phone`, `balance`, `created_at`, `updated_at`) VALUES
(1, NULL, 'admin', 'FashFans', 'admin@example.com', '2020-05-04 07:05:42', '$2y$10$3VmNfTJfi/YyW7Gd1LcccOhHkPJgnD5djA/M8sL6B6J6cQy5JaRR.', NULL, NULL, 'uploads/users/fashfans.png', NULL, NULL, NULL, NULL, NULL, 0.00, '2020-05-04 07:09:42', '2020-11-26 02:37:31'),
(2, NULL, 'seller', 'Giorgio Armani', 'giorgio_armani@gmail.com', '2021-03-31 06:06:29', '$2y$10$3VmNfTJfi/YyW7Gd1LcccOhHkPJgnD5djA/M8sL6B6J6cQy5JaRR.', NULL, NULL, 'uploads/users/georgio_armani.png', 'Venice, Italy', 'Italy', 'Venice', NULL, NULL, 0.00, NULL, NULL),
(3, NULL, 'seller', 'Valentino', 'valentino@gmail.com', '2021-03-31 06:06:29', '$2y$10$3VmNfTJfi/YyW7Gd1LcccOhHkPJgnD5djA/M8sL6B6J6cQy5JaRR.', NULL, NULL, 'uploads/users/valentino.png', 'Paris, France', 'France', 'Paris', NULL, NULL, 0.00, NULL, NULL),
(4, NULL, 'seller', 'Coco Chanel', 'coco_chanel@gmail.com', '2021-03-31 06:06:29', '$2y$10$3VmNfTJfi/YyW7Gd1LcccOhHkPJgnD5djA/M8sL6B6J6cQy5JaRR.', NULL, NULL, 'uploads/users/coco_chanel.png', 'Paris, France', 'France', 'Paris', NULL, NULL, 0.00, NULL, NULL),
(8, '117160752593090441810', 'seller', 'Asraf Ud Duha', 'seaudbd@gmail.com', '2021-07-12 09:07:10', NULL, NULL, 'https://lh3.googleusercontent.com/a-/AOh14GgrJAw_h240GbWADnHCZg4u1rRPLtusGsu57S8HDQ=s96-c', 'uploads/7pBF93vHfwRJtojW5E845bTgQDu4YdJSbcmBRhQi.jpg', 'Mirpur, Dhaka', 'BD', 'Dhaka', '1216', '01776648825', 0.00, '2021-07-12 09:29:13', '2021-07-12 09:51:50'),
(9, '105700686863978459946', 'customer', 'Asraf Ud Duha', 'archiverz.com@gmail.com', NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a/AATXAJyC7khwNjgTzgAvR7E9oLe_t06rrSnPQoSDgYI2=s96-c', 'uploads/users/fPhKFJZGS7RZKDI4om18zqGBH5aIWn0QDB37Ej5W.jpg', 'Mirpur, Dhaka', 'BD', 'Dhaka', '1216', '01776648825', 0.00, '2021-07-13 10:27:57', '2021-07-13 10:31:55');

-- --------------------------------------------------------

--
-- Table structure for table `wallets`
--

CREATE TABLE `wallets` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` double(8,2) NOT NULL,
  `payment_method` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_details` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_settings`
--
ALTER TABLE `business_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon_usages`
--
ALTER TABLE `coupon_usages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flash_deals`
--
ALTER TABLE `flash_deals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flash_deal_products`
--
ALTER TABLE `flash_deal_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `followers`
--
ALTER TABLE `followers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_categories`
--
ALTER TABLE `home_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `likes_post_id_foreign` (`post_id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pickup_points`
--
ALTER TABLE `pickup_points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `policies`
--
ALTER TABLE `policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_stocks`
--
ALTER TABLE `product_stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `searches`
--
ALTER TABLE `searches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_withdraw_requests`
--
ALTER TABLE `seller_withdraw_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_settings`
--
ALTER TABLE `seo_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_category_id` (`category_id`);

--
-- Indexes for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sub_category_id` (`sub_category_id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_replies`
--
ALTER TABLE `ticket_replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wallets`
--
ALTER TABLE `wallets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `business_settings`
--
ALTER TABLE `business_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=297;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupon_usages`
--
ALTER TABLE `coupon_usages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `flash_deals`
--
ALTER TABLE `flash_deals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `flash_deal_products`
--
ALTER TABLE `flash_deal_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `followers`
--
ALTER TABLE `followers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_categories`
--
ALTER TABLE `home_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pickup_points`
--
ALTER TABLE `pickup_points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `policies`
--
ALTER TABLE `policies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `product_stocks`
--
ALTER TABLE `product_stocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `searches`
--
ALTER TABLE `searches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seller_withdraw_requests`
--
ALTER TABLE `seller_withdraw_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_settings`
--
ALTER TABLE `seo_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ticket_replies`
--
ALTER TABLE `ticket_replies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `wallets`
--
ALTER TABLE `wallets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
