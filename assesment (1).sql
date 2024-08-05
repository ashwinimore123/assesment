-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2024 at 04:54 PM
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
-- Database: `assesment`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `branch_id` int(10) UNSIGNED NOT NULL,
  `business_id` int(10) UNSIGNED NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `map_url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `promo_line` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `billing_printer` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `postcode` int(11) NOT NULL,
  `cashback_percentage` int(11) NOT NULL,
  `delivery_charges` int(11) NOT NULL,
  `delivery_area` varchar(255) NOT NULL,
  `merge_table` int(11) NOT NULL,
  `take_away_order` int(11) NOT NULL,
  `app_order` int(11) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `show_hidden` int(11) NOT NULL,
  `is_online` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`branch_id`, `business_id`, `branch_name`, `address`, `map_url`, `image`, `latitude`, `longitude`, `promo_line`, `phone`, `billing_printer`, `website`, `area`, `postcode`, `cashback_percentage`, `delivery_charges`, `delivery_area`, `merge_table`, `take_away_order`, `app_order`, `is_active`, `show_hidden`, `is_online`, `created_at`, `updated_at`) VALUES
(1, 1, 'Wakad', 'bhumkar nagar', 'map url', 'image/TLRnVV43IRTuAdnrxE28rlvNMJoBwiOEiIFhxHm3.jpg', 'lattitude', 'longlatitude', 'promo line', 1234567890, 'Billing printer', 'vebsigns.com', 'at post wakad', 123, 10, 300, 'at post laxmichowk', 1, 1, 1, 1, 1, 1, '2021-03-03 23:54:09', '2021-03-03 23:54:09'),
(2, 1, 'Pune', 'bhumkar nagar', 'map url', 'image/Q6s4iQobOtB32PJO58G6ZvwcCQXNKLCECHe5WJsu.jpg', 'lattitude', 'longlatitude', 'promo line', 1234567890, 'Billing printer', 'vebsigns.com', 'at post pune', 123, 10, 300, 'at post laxmichowk', 1, 1, 1, 1, 1, 1, '2021-03-04 00:05:16', '2021-03-04 00:05:16'),
(3, 1, 'mumbai', 'bhumkar nagar', 'map url', 'image/zuI133BC5X01WsCU2lg7rw2HtQdjDN8xMWdqYLxz.jpg', 'lattitude', 'longlatitude', 'promo line', 1234567890, 'Billing printer', 'vebsigns.com', 'at post mumbai', 123, 10, 300, 'at post mumbai', 1, 1, 1, 1, 1, 1, '2021-03-04 00:27:09', '2021-03-04 00:27:09'),
(4, 2, 'Aurangabad', 'laxminagr', 'map url', 'image/Ff3RCVYb5RKwPT664arRFX4UVUncBIJbmlWwf7KD.jpg', 'lattitude', 'longlatitude', 'promo line', 1234567890, 'Billing printer', 'vebsigns.com', 'at post wakad', 123, 10, 300, 'at post laxmichowk', 1, 1, 1, 1, 1, 1, '2021-03-04 08:20:15', '2021-03-04 08:20:15');

-- --------------------------------------------------------

--
-- Table structure for table `branch_users`
--

CREATE TABLE `branch_users` (
  `branch_user_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(10) UNSIGNED NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branch_users`
--

INSERT INTO `branch_users` (`branch_user_id`, `user_id`, `branch_id`, `is_active`, `created_at`, `updated_at`) VALUES
(11, 2, 2, 1, '2021-03-05 00:54:49', '2021-03-05 00:54:49'),
(12, 2, 3, 1, '2021-03-05 00:54:49', '2021-03-05 00:54:49'),
(13, 2, 4, 1, '2021-03-05 00:54:49', '2021-03-05 00:54:49'),
(14, 3, 1, 1, '2021-03-05 01:02:10', '2021-03-05 01:02:10'),
(15, 3, 3, 1, '2021-03-05 01:02:10', '2021-03-05 01:02:10'),
(16, 3, 4, 1, '2021-03-05 01:02:10', '2021-03-05 01:02:10');

-- --------------------------------------------------------

--
-- Table structure for table `businesses`
--

CREATE TABLE `businesses` (
  `business_id` int(10) UNSIGNED NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `version` int(11) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `expiry_date` date NOT NULL,
  `renewal_date` date NOT NULL,
  `tag_line` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `splash_screen` varchar(255) NOT NULL,
  `login_screen` varchar(255) NOT NULL,
  `registration_screen` varchar(255) NOT NULL,
  `otp_screen` varchar(255) NOT NULL,
  `text_color` varchar(255) NOT NULL,
  `background_color` varchar(255) NOT NULL,
  `policy_title` varchar(255) NOT NULL,
  `policy_image` varchar(255) NOT NULL,
  `policy_description` longtext NOT NULL,
  `about_title` varchar(255) NOT NULL,
  `about_image` varchar(255) NOT NULL,
  `about_description` longtext NOT NULL,
  `is_app` int(11) NOT NULL DEFAULT 0,
  `company_name` varchar(255) NOT NULL,
  `business_number` int(11) NOT NULL,
  `website` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `state_id` int(10) UNSIGNED NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `post_code` int(11) NOT NULL,
  `contact_number` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `timezone_id` int(10) UNSIGNED NOT NULL,
  `currency_id` int(10) UNSIGNED NOT NULL,
  `taxsettings` varchar(255) NOT NULL,
  `domain` varchar(255) NOT NULL,
  `subdomain` varchar(255) NOT NULL,
  `is_restaurant` int(11) NOT NULL DEFAULT 0,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `businesses`
--

INSERT INTO `businesses` (`business_id`, `business_name`, `version`, `package_name`, `expiry_date`, `renewal_date`, `tag_line`, `logo`, `splash_screen`, `login_screen`, `registration_screen`, `otp_screen`, `text_color`, `background_color`, `policy_title`, `policy_image`, `policy_description`, `about_title`, `about_image`, `about_description`, `is_app`, `company_name`, `business_number`, `website`, `address`, `country_id`, `state_id`, `city_id`, `post_code`, `contact_number`, `email`, `facebook`, `instagram`, `timezone_id`, `currency_id`, `taxsettings`, `domain`, `subdomain`, `is_restaurant`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Restaurant', 4, 'Android', '2021-03-04', '2021-04-09', 'tag line', 'logo/iqc8HS7CznjpMVXjMZCAHTkcFz5BID5LPQ0FKxvn.jpg', 'Splash_Screen_Image/Z5Qb9y3PsCl7Q6vunZQ1nnizOQ1YwUWsdHDzX09S.jpg', 'Login_Screen_Image/n2e2RBp56xwWglKhcUOSVqX40QjM0hYHc7qsbTD6.jpg', 'Registration_Screen_Image/L8WRkp2uUiZ3XH6NYdCdtCm3snpFYQRiWuzzPbrg.jpg', 'otp screen', 'red', 'lightblue', 'policy title', 'Policy_Image/NYp3vCUMZRGO3bulZtoXXGdkF261NMD16uf3rnmI.jpg', 'Policy Description Policy Description', 'About title', 'About_Image/fl7wyVA7kf18f6DJlQakaSmjOn89sCnaYfxxP1dE.jpg', 'About Description About Description', 1, 'vebsigns', 18, 'vebsigns.com', 'bhumkar nagar', 1, 1, 2, 123, 1234567890, 'akshay_pawar@vebsigns.com', 'facebook', 'instagram', 1, 1, 'tax settings', 'domain', 'subdomain', 0, 1, '2021-03-03 23:52:19', '2021-03-03 23:52:19'),
(2, 'shop', 4, 'Android', '2021-03-24', '2021-03-15', 'Pizza', 'logo/iHiFx17AVEcwHmt7f4ZQLBAuSDi0GFlmHG1TB5zr.jpg', 'Splash_Screen_Image/1buMAIMi4KCKN2pf9eLKCcxAu8cCr4Nj15GSstwF.jpg', 'Login_Screen_Image/bLki9ytm2QVUFIydDOJfhhDxo21DQ2gj6ZNn3TLA.jpg', 'Registration_Screen_Image/U3a0cBeKLj9a6kifDFy5y0WzBsfwAfFm4FiJ3rgd.jpg', 'otp screen', 'red', 'lightblue', 'policy title', 'Policy_Image/R7oznixFLr0ugBMv90O04eYmw3lzw9JGgoDEae5Y.jpg', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'About title', 'About_Image/IduzXbUWqb5uGvJ4QQSnYAbuGGN2MNjiyjH9PZH3.jpg', 'aaaaaaaaaaaaaaaaaaaaaaaa', 1, 'vebsigns', 9, 'asaaqwqw', 'bhumkar nagar', 1, 1, 1, 123, 1234567890, 'akshay_pawar@vebsigns.com', 'facebook', 'instagram', 1, 1, 'lsdfhgkhfdg', 'domain', 'Subdomain', 1, 1, '2021-03-04 08:18:02', '2021-03-04 08:18:02');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `business_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `priority` varchar(255) NOT NULL,
  `branch_id` int(10) UNSIGNED NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `business_id`, `category_name`, `color`, `priority`, `branch_id`, `is_active`, `created_at`, `updated_at`) VALUES
(2, 1, 'category', 'red', '12', 2, 1, '2021-03-03 23:54:30', '2021-03-03 23:54:30'),
(3, 1, 'category2', 'blue', 'prioriry 22', 2, 1, NULL, NULL),
(4, 1, 'category3', 'red', 'priority36', 2, 1, NULL, NULL),
(5, 2, 'category c', 'red', '10', 1, 1, '2021-03-16 07:10:46', '2021-03-16 07:10:46'),
(6, 2, 'sgfh', 'yellow', '200', 1, 1, '2021-03-16 07:11:17', '2021-03-16 07:11:17');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int(10) UNSIGNED NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `state_id` int(10) UNSIGNED NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city_name`, `state_id`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Pune', 1, 1, '2021-03-03 23:38:12', '2021-03-03 23:38:12'),
(2, 'Buldana', 1, 1, '2021-03-03 23:38:21', '2021-03-03 23:38:21');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `country_id` int(10) UNSIGNED NOT NULL,
  `country_name` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_id`, `country_name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'India', 1, '2021-03-03 23:35:52', '2021-03-03 23:35:52'),
(2, 'US', 1, '2021-03-03 23:36:07', '2021-03-03 23:36:07');

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `currency_id` int(10) UNSIGNED NOT NULL,
  `currency_name` varchar(255) NOT NULL,
  `currency_symbol` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`currency_id`, `currency_name`, `currency_symbol`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Rupee', '₹', 1, '2021-03-03 23:41:45', '2021-03-03 23:41:45'),
(2, 'Doller', '$', 1, '2021-03-03 23:41:53', '2021-03-03 23:41:53');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kitchen_sections`
--

CREATE TABLE `kitchen_sections` (
  `kitchen_section_id` int(10) UNSIGNED NOT NULL,
  `kitchen_section_name` varchar(255) DEFAULT NULL,
  `printer_id` int(10) UNSIGNED NOT NULL,
  `business_id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(10) UNSIGNED NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kitchen_sections`
--

INSERT INTO `kitchen_sections` (`kitchen_section_id`, `kitchen_section_name`, `printer_id`, `business_id`, `branch_id`, `is_active`, `created_at`, `updated_at`) VALUES
(4, NULL, 4, 1, 2, 1, '2021-03-11 04:44:52', '2021-03-11 04:44:52'),
(5, 'sfdedf', 3, 1, 2, 1, '2021-03-12 23:27:18', '2021-03-12 23:27:18');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_07_24_104603_create_members_table', 1),
(172, '2014_10_12_000000_create_users_table', 1),
(256, '2014_10_12_100000_create_password_resets_table', 2),
(257, '2021_02_08_123326_create_roles_table', 2),
(258, '2021_02_13_100055_create_countries_table', 2),
(259, '2021_02_15_071525_create_states_table', 2),
(260, '2021_02_15_072737_create_cities_table', 2),
(261, '2021_02_17_135709_create_currencies_table', 2),
(262, '2021_02_18_063538_create_taxes_table', 2),
(263, '2021_02_18_102932_create_timezones_table', 2),
(264, '2021_02_18_104006_create_permissions_table', 2),
(265, '2021_02_25_063700_create_businesses_table', 2),
(266, '2021_02_25_065343_create_branches_table', 2),
(267, '2021_02_25_065344_create_categories_table', 2),
(268, '2021_02_25_065345_create_users_table', 2),
(269, '2021_02_27_045315_create_branch_users_table', 2),
(270, '2021_03_09_060157_create_printers_table', 3),
(271, '2021_03_11_052022_create_kitchen_sections_table', 4),
(272, '2021_03_11_103922_create_varients_table', 5),
(273, '2021_03_11_104228_create_variants_table', 5),
(274, '2021_03_11_125036_create_product_variants_table', 6),
(275, '2021_03_12_050044_create_products_table', 7),
(276, '2021_03_12_103750_create_product_categories_table', 8),
(277, '2021_03_12_110233_create_s_k_u_s_table', 9),
(278, '2021_03_12_125553_create_s_k_u_s_table', 10),
(279, '2021_03_15_090714_create_s_k_u_s_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `permission_name` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`permission_id`, `permission_name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'All', 1, '2021-03-03 23:43:25', '2021-03-03 23:43:25');

-- --------------------------------------------------------

--
-- Table structure for table `printers`
--

CREATE TABLE `printers` (
  `printer_id` int(10) UNSIGNED NOT NULL,
  `printer_ip` varchar(255) NOT NULL,
  `business_id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(10) UNSIGNED NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `printers`
--

INSERT INTO `printers` (`printer_id`, `printer_ip`, `business_id`, `branch_id`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'asfasghy11111111111111', 1, 3, 1, NULL, '2021-03-10 08:10:08'),
(2, '123456789', 1, 2, 1, '2021-03-10 04:18:27', '2021-03-10 08:04:22'),
(3, '123456789', 1, 2, 1, '2021-03-10 04:19:44', '2021-03-10 04:19:44'),
(4, '123456789', 1, 2, 1, '2021-03-10 04:19:46', '2021-03-10 04:19:46'),
(5, '1232', 1, 2, 1, '2021-03-10 04:21:43', '2021-03-10 04:21:43'),
(6, '1232', 1, 2, 1, '2021-03-10 04:22:02', '2021-03-10 04:22:02'),
(7, '123456', 1, 2, 1, '2021-03-10 04:39:55', '2021-03-10 04:39:55'),
(8, 'dsadggfjy', 2, 3, 1, NULL, NULL),
(9, 'zxvccfbgn', 1, 3, 1, '2021-03-10 08:58:09', '2021-03-10 08:58:09'),
(10, '192.168.0.57', 2, 1, 1, '2021-03-10 23:27:12', '2021-03-10 23:27:12'),
(11, '123456789', 2, 4, 1, '2021-03-10 23:28:11', '2021-03-10 23:28:11');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `take_away_price` decimal(10,2) NOT NULL,
  `kitchen_section_id` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `tax_id` int(10) UNSIGNED NOT NULL,
  `tax_setting` varchar(255) NOT NULL,
  `business_id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(10) UNSIGNED NOT NULL,
  `parent_variant_id` int(10) UNSIGNED NOT NULL,
  `child_variant_id` int(10) UNSIGNED NOT NULL,
  `is_stock` int(11) NOT NULL DEFAULT 1,
  `is_restaurant` int(11) NOT NULL DEFAULT 0,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `color`, `image`, `price`, `take_away_price`, `kitchen_section_id`, `tax_id`, `tax_setting`, `business_id`, `branch_id`, `parent_variant_id`, `child_variant_id`, `is_stock`, `is_restaurant`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'product name', 'red', '', 20.32, 56.25, 5, 1, 'tax setting 11', 1, 2, 1, 1, 1, 1, 1, '2021-03-15 05:23:40', '2021-03-16 06:09:20'),
(2, 'product name', 'red', '', 20.32, 56.25, 5, 1, 'tax setting 11', 1, 2, 1, 1, 1, 1, 1, '2021-03-15 05:24:16', '2021-03-15 05:24:16'),
(3, 'product name', 'red', '', 20.32, 56.25, 5, 1, 'tax setting 11', 1, 2, 1, 1, 1, 1, 1, '2021-03-15 05:24:55', '2021-03-15 05:24:55'),
(4, 'product name', 'red', '', 20.32, 56.25, 5, 1, 'tax setting 11', 1, 2, 1, 1, 1, 1, 1, '2021-03-15 05:28:28', '2021-03-15 05:28:28'),
(5, 'product name', 'red', '', 20.32, 56.25, 5, 1, 'tax setting 11', 1, 2, 1, 1, 1, 1, 1, '2021-03-15 05:37:07', '2021-03-15 05:37:07'),
(9, 'product name2', 'green', '', 20.32, 56.25, 4, 1, 'tax setting 11', 1, 2, 3, 3, 1, 0, 1, '2021-03-15 05:59:29', '2021-03-15 05:59:29'),
(10, 'product name2', 'green', '', 20.32, 56.25, 4, 1, 'tax setting 11', 1, 2, 3, 3, 1, 0, 1, '2021-03-15 06:31:46', '2021-03-15 06:31:46'),
(11, 'product name2', 'green', '', 20.32, 56.25, 4, 1, 'tax setting 11', 1, 2, 3, 3, 1, 0, 1, '2021-03-15 06:45:12', '2021-03-15 06:45:12'),
(12, 'product name2', 'green', '', 20.32, 56.25, 4, 1, 'tax setting 11', 1, 2, 2, 3, 1, 0, 1, '2021-03-15 06:50:31', '2021-03-15 06:50:31'),
(13, 'product name', 'red', '', 20.32, 56.25, 4, 1, 'tax setting 11', 1, 2, 2, 2, 1, 0, 1, '2021-03-16 00:27:37', '2021-03-16 00:27:37'),
(14, 'product name', 'red', '', 20.32, 56.25, 4, 1, 'tax setting 11', 1, 2, 2, 2, 1, 0, 1, '2021-03-16 00:28:51', '2021-03-16 00:28:51'),
(15, 'product name', 'red', '', 20.32, 56.25, 4, 1, 'tax setting 11', 1, 2, 2, 2, 1, 0, 1, '2021-03-16 00:29:15', '2021-03-16 00:29:15'),
(16, 'product name22222', 'green', '', 20.32, 56.25, 4, 1, 'tax setting 11', 1, 2, 3, 2, 1, 0, 1, '2021-03-16 00:36:23', '2021-03-16 06:01:16'),
(17, 'product name4325', 'lightblue', '', 20.32, 56.25, 5, 1, 'tax setting 11', 1, 2, 1, 1, 1, 1, 1, '2021-03-16 06:13:28', '2021-03-16 06:13:28'),
(18, 'product name2', 'green', '', 20.32, 56.25, 5, 1, 'tax setting 11', 2, 1, 1, 1, 1, 1, 1, '2021-03-16 07:11:51', '2021-03-16 07:11:51'),
(19, 'Product 121', 'lightgreen', '', 20.32, 56.25, 5, 1, 'tax setting 11', 1, 2, 1, 1, 1, 1, 1, '2021-03-16 07:38:27', '2021-03-16 07:38:27'),
(20, 'product name 122', 'lightblue', '', 20.32, 56.25, 5, 1, 'tax setting 11', 1, 2, 1, 1, 1, 1, 1, '2021-03-16 07:44:32', '2021-03-16 07:44:32'),
(21, 'product name2', 'green', '', 20.32, 56.25, 5, 1, 'tax setting 11', 1, 2, 1, 1, 1, 1, 1, '2021-03-16 08:07:18', '2021-03-16 08:07:18'),
(22, 'product name', 'green', '', 20.32, 56.25, 5, 1, 'tax setting 11', 1, 2, 1, 1, 1, 1, 1, '2021-03-16 08:15:52', '2021-03-16 08:15:52');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `product_category_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`product_category_id`, `product_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 2, 2, '2021-03-15 05:24:16', '2021-03-15 05:24:16'),
(2, 3, 2, '2021-03-15 05:24:55', '2021-03-15 05:24:55'),
(3, 4, 2, '2021-03-15 05:28:28', '2021-03-15 05:28:28'),
(4, 5, 2, '2021-03-15 05:37:07', '2021-03-15 05:37:07'),
(5, 9, 2, '2021-03-15 05:59:29', '2021-03-15 05:59:29'),
(6, 10, 2, '2021-03-15 06:31:46', '2021-03-15 06:31:46'),
(7, 11, 2, '2021-03-15 06:45:12', '2021-03-15 06:45:12'),
(8, 12, 2, '2021-03-15 06:50:31', '2021-03-15 06:50:31'),
(44, 16, 4, '2021-03-16 06:02:48', '2021-03-16 06:02:48'),
(45, 17, 3, '2021-03-16 06:13:28', '2021-03-16 06:13:28'),
(46, 17, 4, '2021-03-16 06:13:28', '2021-03-16 06:13:28'),
(47, 18, 5, '2021-03-16 07:11:51', '2021-03-16 07:11:51'),
(48, 18, 6, '2021-03-16 07:11:51', '2021-03-16 07:11:51'),
(49, 19, 3, '2021-03-16 07:38:27', '2021-03-16 07:38:27'),
(50, 19, 4, '2021-03-16 07:38:27', '2021-03-16 07:38:27'),
(51, 20, 3, '2021-03-16 07:44:32', '2021-03-16 07:44:32'),
(52, 20, 4, '2021-03-16 07:44:32', '2021-03-16 07:44:32'),
(53, 21, 3, '2021-03-16 08:07:18', '2021-03-16 08:07:18'),
(54, 21, 4, '2021-03-16 08:07:18', '2021-03-16 08:07:18'),
(55, 22, 3, '2021-03-16 08:15:52', '2021-03-16 08:15:52'),
(56, 22, 4, '2021-03-16 08:15:52', '2021-03-16 08:15:52');

-- --------------------------------------------------------

--
-- Table structure for table `product_variants`
--

CREATE TABLE `product_variants` (
  `product_variant_id` int(10) UNSIGNED NOT NULL,
  `product_variant_name` varchar(255) DEFAULT NULL,
  `variant_id` int(10) UNSIGNED NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_variants`
--

INSERT INTO `product_variants` (`product_variant_id`, `product_variant_name`, `variant_id`, `is_active`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 1, '2021-03-11 08:19:44', '2021-03-11 08:56:21'),
(2, 'dkfhkh', 3, 1, '2021-03-11 08:26:33', '2021-03-11 08:56:23'),
(3, 'product variant 201', 4, 1, '2021-03-16 00:42:20', '2021-03-16 00:42:20'),
(4, 'product variant 202', 4, 1, '2021-03-16 00:42:34', '2021-03-16 00:42:34'),
(5, 'product variant 203', 4, 1, '2021-03-16 00:43:08', '2021-03-16 00:43:08');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `role_name` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 1, '2021-03-03 23:39:31', '2021-03-03 23:39:31'),
(2, 'Admin', 1, '2021-03-03 23:39:41', '2021-03-03 23:39:41'),
(3, 'Manager', 1, '2021-03-03 23:39:51', '2021-03-03 23:39:57'),
(4, 'Customer', 1, '2021-03-03 23:40:11', '2021-03-03 23:40:11');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skus`
--

CREATE TABLE `skus` (
  `sku_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `parent_product_variant_id` int(10) UNSIGNED NOT NULL,
  `child_product_variant_id` int(10) UNSIGNED NOT NULL,
  `business_id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(10) UNSIGNED NOT NULL,
  `sku_price` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) NOT NULL,
  `product_weight` int(11) NOT NULL,
  `product_unit` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `sku_name` varchar(255) NOT NULL,
  `barcode` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skus`
--

INSERT INTO `skus` (`sku_id`, `product_id`, `parent_product_variant_id`, `child_product_variant_id`, `business_id`, `branch_id`, `sku_price`, `discount`, `product_weight`, `product_unit`, `quantity`, `sku_name`, `barcode`, `created_at`, `updated_at`) VALUES
(1, 12, 2, 2, 1, 2, 25.36, 58.69, 96, 54, 63, 'Sku name', 'barcode', '2021-03-15 06:50:31', '2021-03-15 06:50:31'),
(2, 16, 2, 2, 1, 2, 25.36, 58.69, 96, 54, 63, 'Sku name22222', 'barcode', '2021-03-16 00:36:23', '2021-03-16 06:01:16');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `state_id` int(10) UNSIGNED NOT NULL,
  `state_name` varchar(255) NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`state_id`, `state_name`, `country_id`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Maharastra', 1, 1, '2021-03-03 23:36:25', '2021-03-03 23:36:25'),
(2, 'Telangana', 1, 1, '2021-03-03 23:36:34', '2021-03-03 23:36:34');

-- --------------------------------------------------------

--
-- Table structure for table `taxes`
--

CREATE TABLE `taxes` (
  `tax_id` int(10) UNSIGNED NOT NULL,
  `tax_name` varchar(255) NOT NULL,
  `tax_percentage` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taxes`
--

INSERT INTO `taxes` (`tax_id`, `tax_name`, `tax_percentage`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Income tax', '20%', 1, '2021-03-03 23:42:33', '2021-03-03 23:42:33');

-- --------------------------------------------------------

--
-- Table structure for table `timezones`
--

CREATE TABLE `timezones` (
  `timezone_id` int(10) UNSIGNED NOT NULL,
  `timezone` varchar(255) NOT NULL,
  `timezonedetails` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `timezones`
--

INSERT INTO `timezones` (`timezone_id`, `timezone`, `timezonedetails`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Asia/Kolkata', 'Use in India', 1, '2021-03-03 23:42:10', '2021-03-03 23:42:10'),
(2, 'Asia/Karachi', 'Use in Pakistan', 1, '2021-03-03 23:42:20', '2021-03-03 23:42:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `pin` int(20) NOT NULL,
  `contact_number` int(11) NOT NULL,
  `business_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `pin`, `contact_number`, `business_id`, `role_id`, `is_active`, `created_at`, `updated_at`) VALUES
(2, 'akshay pawar', 'akshay_pawar@vebsigns.com', '$2y$12$a3rmEPV1WMDDm.5/2AY3feTCSrzhJoehiymPhAkBTpreq5mHzL18W', NULL, 123654, 1234567890, 1, 2, 0, '2021-03-04 00:03:39', '2024-08-05 04:56:43'),
(3, 'Chetan Ubarhande', 'cubarhande@gmail.com', '$2y$10$g2Luha9IUqtMLB2eDj83guG8hQ5a2UUE1vZf/06r3NBpuUwjj3y9.', NULL, 3265, 968957, 2, 3, 1, '2021-03-04 08:43:26', '2021-03-04 08:43:26');

-- --------------------------------------------------------

--
-- Table structure for table `variants`
--

CREATE TABLE `variants` (
  `variant_id` int(10) UNSIGNED NOT NULL,
  `variant_name` varchar(255) DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `variants`
--

INSERT INTO `variants` (`variant_id`, `variant_name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, '2021-03-11 06:41:42', '2021-03-11 07:05:30'),
(2, 'variant 22', 1, '2021-03-11 07:05:10', '2021-03-11 07:05:16'),
(3, 'fgsdgs', 1, '2021-03-11 07:11:15', '2021-03-11 07:11:15'),
(4, 'variant101', 1, '2021-03-16 00:38:57', '2021-03-16 00:38:57'),
(5, 'variant102', 1, '2021-03-16 00:39:10', '2021-03-16 00:39:10'),
(6, 'variant103', 1, '2021-03-16 00:39:24', '2021-03-16 00:39:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`branch_id`),
  ADD KEY `branches_business_id_foreign` (`business_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `members_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `members` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
