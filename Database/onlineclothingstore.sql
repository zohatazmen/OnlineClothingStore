-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2024 at 05:50 PM
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
-- Database: `onlineclothingstore`
--

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
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT 'null',
  `email` varchar(255) NOT NULL DEFAULT 'null',
  `subject` varchar(255) NOT NULL DEFAULT 'null',
  `message` varchar(255) NOT NULL DEFAULT 'null',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Zoha Tazmen', 'zohatazmen770@gmail.com', 'hiygfgv', 't yhbn', '2024-07-13 05:35:03', '2024-07-13 05:35:03'),
(2, 'nvutfgv', 'rimsha@gmail.com', 'ljugrftudcg', 'bhgfdrf', '2024-07-13 05:45:41', '2024-07-13 05:45:41'),
(3, 'zoha tazmen', 'zohatazmen@gmail.com', 'review', 'thank you', '2024-07-15 09:06:59', '2024-07-15 09:06:59');

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
(4, '2024_07_07_113956_alter_users_table', 2),
(5, '2024_07_09_083705_create_products_table', 3),
(6, '2024_07_09_171249_create_products_table', 4),
(7, '2024_07_11_233904_create_registration_data_table', 5),
(8, '2024_07_13_103110_create_contact_table', 6),
(9, '2024_07_13_105744_create_orders_table', 7),
(10, '2024_07_13_112214_create_orders_table', 8),
(11, '2024_07_13_121507_update_address_field_in_orders_table', 9),
(12, '2024_07_13_122130_create_orders_table', 10),
(13, '2024_07_13_122333_add_address_to_orders_table', 11),
(14, '2024_07_13_122643_modify_address_in_orders_table', 12),
(15, '2024_07_13_122942_update_address_in_orders_table', 13),
(16, '2024_07_13_141110_create_reviews_table', 14),
(17, '2024_07_13_141202_create_reviews_table', 15),
(18, '2024_07_13_143426_create_reviews_table', 16),
(19, '2024_07_13_165409_add_status_to_products_table', 17),
(20, '2024_07_15_125043_create_promotions_table', 18),
(21, '2024_07_15_125447_create_promotion_usages_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  `cart` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`cart`)),
  `total_price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_name`, `customer_email`, `address`, `cart`, `total_price`, `created_at`, `updated_at`) VALUES
(1, 'Zoha Tazmen', 'zohatazmen@gmail.com', 'ch house', '{\"3\":{\"quantity\":2,\"name\":\"Product 3\",\"price\":\"70.00\",\"image\":\"product_3.png\"},\"5\":{\"quantity\":\"1\",\"name\":\"Product 5\",\"price\":\"90.00\",\"image\":\"product_5.png\"}}', 230.00, '2024-07-13 07:32:32', '2024-07-13 07:32:32'),
(4, 'zoha tazmen', 'zohatazmen@gmail.com', 'ch house sahiwal', '\"{\\\"25\\\":{\\\"quantity\\\":\\\"2\\\",\\\"name\\\":\\\"Product 25\\\",\\\"price\\\":\\\"290.00\\\",\\\"image\\\":\\\"product_25.png\\\"},\\\"9\\\":{\\\"quantity\\\":\\\"2\\\",\\\"name\\\":\\\"Product 9\\\",\\\"price\\\":\\\"130.00\\\",\\\"image\\\":\\\"product_9.png\\\"}}\"', 840.00, '2024-07-15 08:55:18', '2024-07-15 08:55:18');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `discount_price` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `image`, `category`, `size`, `color`, `brand`, `price`, `discount_price`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Product 1', 'Description for Product 1', 'product_1.png', 'women', 'small', 'black', 'Brand A', 50.00, 45.00, '2024-07-09 17:15:10', '2024-07-09 17:15:10', 1),
(2, 'Product 2', 'Description for Product 2', 'product_2.png', 'women', 'medium', 'blue', 'Brand B', 60.00, 55.00, '2024-07-09 17:15:10', '2024-07-09 17:15:10', 1),
(3, 'Product 3', 'Description for Product 3', 'product_3.png', 'women', 'large', 'pink', 'Brand C', 70.00, 65.00, '2024-07-09 17:15:10', '2024-07-09 17:15:10', 1),
(4, 'Product 4', 'Description for Product 4', 'product_4.png', 'women', 'small', 'white', 'Brand D', 80.00, 75.00, '2024-07-09 17:15:10', '2024-07-09 17:15:10', 1),
(5, 'Product 5', 'Description for Product 5', 'product_5.png', 'women', 'medium', 'red', 'Brand E', 90.00, 85.00, '2024-07-09 17:15:10', '2024-07-09 17:15:10', 1),
(6, 'Product 6', 'Description for Product 6', 'product_6.png', 'women', 'large', '', 'Brand F', 100.00, 95.00, '2024-07-09 17:15:10', '2024-07-09 17:15:10', 1),
(7, 'Product 7', 'Description for Product 7', 'product_7.png', 'women', 'small', 'red', 'Brand A', 110.00, 105.00, '2024-07-09 17:15:10', '2024-07-09 17:15:10', 1),
(8, 'Product 8', 'Description for Product 8', 'product_8.png', 'women', 'medium', 'blue', 'Brand B', 120.00, 115.00, '2024-07-09 17:15:10', '2024-07-09 17:15:10', 1),
(9, 'Product 9', 'Description for Product 9', 'product_9.png', 'women', 'large', 'green', 'Brand C', 130.00, 125.00, '2024-07-09 17:15:10', '2024-07-09 17:15:10', 1),
(10, 'Product 10', 'Description for Product 10', 'product_10.png', 'women', 'small', 'red', 'Brand D', 140.00, 135.00, '2024-07-09 17:15:10', '2024-07-09 17:15:10', 1),
(11, 'Product 11', 'Description for Product 11', 'product_11.png', 'women', 'medium', 'blue', 'Brand E', 150.00, 145.00, '2024-07-09 17:15:10', '2024-07-09 17:15:10', 1),
(12, 'Product 12', 'Description for Product 12', 'product_12.png', 'women', 'large', 'green', 'Brand F', 160.00, 155.00, '2024-07-09 17:15:10', '2024-07-09 17:15:10', 1),
(13, 'Product 13', 'Description for Product 13', 'product_13.png', 'men', 'small', 'red', 'Brand A', 170.00, 165.00, '2024-07-09 17:15:10', '2024-07-09 17:15:10', 1),
(14, 'Product 14', 'Description for Product 14', 'product_14.png', 'men', 'medium', 'blue', 'Brand B', 180.00, 175.00, '2024-07-09 17:15:10', '2024-07-09 17:15:10', 1),
(15, 'Product 15', 'Description for Product 15', 'product_15.png', 'men', 'large', 'green', 'Brand C', 190.00, 185.00, '2024-07-09 17:15:10', '2024-07-09 17:15:10', 1),
(16, 'Product 16', 'Description for Product 16', 'product_16.png', 'men', 'small', 'red', 'Brand D', 200.00, 195.00, '2024-07-09 17:15:10', '2024-07-09 17:15:10', 1),
(17, 'Product 17', 'Description for Product 17', 'product_17.png', 'men', 'medium', 'blue', 'Brand E', 210.00, 205.00, '2024-07-09 17:15:10', '2024-07-09 17:15:10', 1),
(18, 'Product 18', 'Description for Product 18', 'product_18.png', 'men', 'large', 'green', 'Brand F', 220.00, 215.00, '2024-07-09 17:15:10', '2024-07-09 17:15:10', 1),
(19, 'Product 19', 'Description for Product 19', 'product_19.png', 'men', 'small', 'red', 'Brand A', 230.00, 225.00, '2024-07-09 17:15:10', '2024-07-09 17:15:10', 1),
(20, 'Product 20', 'Description for Product 20', 'product_20.png', 'men', 'medium', 'blue', 'Brand B', 240.00, 235.00, '2024-07-09 17:15:10', '2024-07-09 17:15:10', 1),
(21, 'Product 21', 'Description for Product 21', 'product_21.png', 'men', 'large', 'green', 'Brand C', 250.00, 245.00, '2024-07-09 17:15:10', '2024-07-09 17:15:10', 1),
(22, 'Product 22', 'Description for Product 22', 'product_22.png', 'men', 'small', 'red', 'Brand D', 260.00, 255.00, '2024-07-09 17:15:10', '2024-07-09 17:15:10', 1),
(23, 'Product 23', 'Description for Product 23', 'product_23.png', 'men', 'medium', 'blue', 'Brand E', 270.00, 265.00, '2024-07-09 17:15:10', '2024-07-09 17:15:10', 1),
(24, 'Product 24', 'Description for Product 24', 'product_24.png', 'men', 'large', 'green', 'Brand F', 280.00, 275.00, '2024-07-09 17:15:10', '2024-07-09 17:15:10', 1),
(25, 'Product 25', 'Description for Product 25', 'product_25.png', 'kids', 'small', 'red', 'Brand A', 290.00, 285.00, '2024-07-09 17:15:10', '2024-07-09 17:15:10', 1),
(26, 'Product 26', 'Description for Product 26', 'product_26.png', 'kids', 'medium', 'blue', 'Brand B', 300.00, 295.00, '2024-07-09 17:15:10', '2024-07-09 17:15:10', 1),
(27, 'Product 27', 'Description for Product 27', 'product_27.png', 'kids', 'large', 'green', 'Brand C', 310.00, 305.00, '2024-07-09 17:15:10', '2024-07-09 17:15:10', 1),
(28, 'Product 28', 'Description for Product 28', 'product_28.png', 'kids', 'small', 'red', 'Brand D', 320.00, 315.00, '2024-07-09 17:15:10', '2024-07-09 17:15:10', 1),
(29, 'Product 29', 'Description for Product 29', 'product_29.png', 'kids', 'medium', 'blue', 'Brand E', 330.00, 325.00, '2024-07-09 17:15:10', '2024-07-09 17:15:10', 1),
(30, 'Product 30', 'Description for Product 30', 'product_30.png', 'kids', 'large', 'green', 'Brand F', 340.00, 335.00, '2024-07-09 17:15:10', '2024-07-09 17:15:10', 1),
(31, 'Product 31', 'Description for Product 31', 'product_31.png', 'kids', 'small', 'red', 'Brand A', 350.00, 345.00, '2024-07-09 17:15:10', '2024-07-09 17:15:10', 1),
(32, 'Product 32', 'Description for Product 32', 'product_32.png', 'kids', 'medium', 'blue', 'Brand B', 360.00, 355.00, '2024-07-09 17:15:10', '2024-07-09 17:15:10', 1),
(33, 'Product 33', 'Description for Product 33', 'product_33.png', 'kids', 'large', 'green', 'Brand C', 370.00, 365.00, '2024-07-09 17:15:10', '2024-07-09 17:15:10', 1),
(34, 'Product 34', 'Description for Product 34', 'product_34.png', 'kids', 'small', 'red', 'Brand D', 380.00, 375.00, '2024-07-09 17:15:10', '2024-07-09 17:15:10', 1),
(35, 'Product 35', 'Description for Product 35', 'product_35.png', 'kids', 'medium', 'blue', 'Brand E', 390.00, 385.00, '2024-07-09 17:15:10', '2024-07-09 17:15:10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `discount` decimal(8,2) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promotions`
--

INSERT INTO `promotions` (`id`, `code`, `discount`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(2, '525806', 40.00, '2024-07-26 00:00:00', '2024-07-31 00:00:00', '2024-07-15 08:18:31', '2024-07-15 08:18:31');

-- --------------------------------------------------------

--
-- Table structure for table `promotion_usages`
--

CREATE TABLE `promotion_usages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `promotion_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration_data`
--

CREATE TABLE `registration_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registration_data`
--

INSERT INTO `registration_data` (`id`, `name`, `email`, `phone`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Zoha Tazmen', 'zohatazmen@gmail.com', '03071327880', '$2y$12$60AxaKwbBEmK3MNbuPwokOPeQylByvCnZx44/wAiT4RAfNZIH5lqS', '2024-07-11 19:07:42', '2024-07-11 19:07:42'),
(2, 'Zoha Tazmen', 'zohatazmen770@gmail.com', '03071327880', '$2y$12$iycKh1lnA161UYtJyk3TdeFd5G8ekgsCFJb3WIrKpAYX6FadSeMQm', '2024-07-12 14:04:14', '2024-07-12 14:04:14'),
(3, 'Zoha Tazmen', 'rimsha@gmail.com', '03154500505', '$2y$12$pu2HPlopBckg9v2aFliD3e48r46.BfEjQZoSdW2NaMxoLRtO7j8Gm', '2024-07-12 14:15:00', '2024-07-12 14:15:00'),
(4, 'Zoha Tazmen', 'zoha@gmail.com', '78789', '$2y$12$1fHwtGHQyCWy2w/2UPezn.zP7GvAP0ZkYG7IHWvLjB5ygl146ONCG', '2024-07-13 05:10:04', '2024-07-13 05:10:04'),
(5, 'Zoha Tazmen', 'zohatazmen4@gmail.com', '0324693577', '$2y$12$ALwgKUcDR.PCN1SUhYc0wer9Cz4DZqWrpbzn0UbcMM5NrklNmOMeG', '2024-07-13 05:14:26', '2024-07-13 05:22:13'),
(6, 'fffg', 'zohatazmen1@gmail.com', '03241681147', '$2y$12$jl69RTNr8NePE7hzXc3jOO5vg4n91.NAXzbDCZz8HV1kuvcNBrOTS', '2024-07-13 05:24:07', '2024-07-13 05:24:54'),
(7, 'zoha tazmen', 'zohatazmen11@gmail.com', '03077936322', '$2y$12$jE4KH3Rkx3tpdrGcmlu.tuUlykf.5aunxEp9fh9SnAXpmSaqNlEMu', '2024-07-15 08:56:02', '2024-07-15 09:06:33');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `review` text NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `review`, `rating`, `created_at`, `updated_at`) VALUES
(1, 'thank you soo much', 4, '2024-07-13 09:34:40', '2024-07-13 09:34:40'),
(2, 'tugb', 2, '2024-07-13 09:36:29', '2024-07-13 09:36:29'),
(4, 'thank you', 2, '2024-07-15 07:46:09', '2024-07-15 07:46:09'),
(5, 'thank you', 2, '2024-07-15 07:46:58', '2024-07-15 07:46:58'),
(6, 'thank you', 5, '2024-07-15 09:07:17', '2024-07-15 09:07:17');

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

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('3TvnSvVg7PcoqKxdoE9bJoYB6eDW7nvOlc6DS2QG', 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidUlyR1k5bzBTRHl3V21ERXdKbVZnYklJWTV4ZWVFV3NEYjVmOUdMMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjc7fQ==', 1721052868),
('NRTkaSie1HKQRE0DpyRSEisz0UDed78L5tv8Hzvs', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWEFQVllVaDRJZVp0VWJEOUFCMlJjWDNWZDFlTXA3b1NHeTBvU01jeCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTI6ImxvZ2luX2FkbWluXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1721051092);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 1,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@example.com', 2, NULL, '$2y$12$tRw9OhzA2.pSjm2dMJM2Iue0rEay8KbZkkr7hHl5ichKnnaKWZ.sG', NULL, '2024-07-07 06:51:37', '2024-07-07 06:51:37'),
(2, 'zoha tazmen', 'zoha@gmail.com', 1, NULL, '$2y$12$DoS/sdFpkgpy9NCXL1kw4.sDUUDQ59KibViB5wFNXTXK3XlXeD.Za', NULL, '2024-07-07 06:54:07', '2024-07-07 06:54:07');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `promotions_code_unique` (`code`);

--
-- Indexes for table `promotion_usages`
--
ALTER TABLE `promotion_usages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `promotion_usages_promotion_id_foreign` (`promotion_id`);

--
-- Indexes for table `registration_data`
--
ALTER TABLE `registration_data`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `registration_data_email_unique` (`email`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `promotion_usages`
--
ALTER TABLE `promotion_usages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration_data`
--
ALTER TABLE `registration_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `promotion_usages`
--
ALTER TABLE `promotion_usages`
  ADD CONSTRAINT `promotion_usages_promotion_id_foreign` FOREIGN KEY (`promotion_id`) REFERENCES `promotions` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
