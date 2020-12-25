-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2020 at 07:43 PM
-- Server version: 10.2.10-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drnutrition`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_23_004302_create_products_table', 2),
(7, '2017_06_26_000000_create_shopping_cart_table', 3),
(8, '2020_12_24_182943_create_products_images_table', 3),
(9, '2020_12_23_004327_create_product_prices_table', 4),
(10, '2020_12_23_004344_create_product_stock_table', 4),
(11, '2020_12_24_190311_drop_image_from_products', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `available` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `available`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"WHEY ADD\",\"ar\":\"\\u0628\\u0631\\u0648\\u062a\\u064a\\u0646 \\u0648\\u064a\\u064a \\u0627\\u062f\\u062f\"}', 1, '2020-12-24 17:08:36', '2020-12-24 17:08:36'),
(2, '{\"en\":\"ISO ADD\",\"ar\":\"\\u0628\\u0631\\u0648\\u062a\\u064a\\u0646 \\u0627\\u064a\\u0632\\u0648 \\u0627\\u062f\\u062f\"}', 1, '2020-12-24 17:09:14', '2020-12-24 17:09:14'),
(3, '{\"en\":\"MULTI VITAMIN\",\"ar\":\"\\u0645\\u0644\\u062a\\u064a \\u0641\\u064a\\u062a\\u0627\\u0645\\u064a\\u0646\"}', 1, '2020-12-24 17:10:09', '2020-12-24 17:10:09'),
(4, '{\"en\":\" GOLD STANDARD ISOLATE\",\"ar\":\"\\u0628\\u0631\\u0648\\u062a\\u064a\\u0646 \\u0645\\u0639\\u0632\\u0648\\u0644\"}', 1, '2020-12-24 17:10:50', '2020-12-24 17:10:50'),
(5, '{\"en\":\"OMEGA FISH OIL\",\"ar\":\"\\u0632\\u064a\\u062a \\u0633\\u0645\\u0643 \\u0627\\u0648\\u0645\\u064a\\u062c\\u0627\"}', 0, '2020-12-24 17:12:18', '2020-12-24 17:12:18'),
(6, '{\"en\":\"SERIOUS MASS\",\"ar\":\"\\u0633\\u064a\\u0631\\u064a\\u0648\\u0633 \\u0645\\u0627\\u0633\"}', 1, '2020-12-24 17:12:59', '2020-12-24 17:12:59'),
(7, '{\"en\":\"CLA+ CARNITINE\",\"ar\":\"\\u0643\\u0627\\u0631\\u0646\\u064a\\u062a\\u064a\\u0646 \\u0633\\u064a \\u0627\\u0644 \\u0627\\u064a\\u0647 \\u0628\\u0644\\u0635\"}', 1, '2020-12-24 17:14:47', '2020-12-24 17:14:47'),
(8, '{\"en\":\"MASS TECH EXTREME 2000\",\"ar\":\"\\u0628\\u0631\\u0648\\u062a\\u064a\\u0646 \\u0645\\u0646 \\u0645\\u0627\\u0643\\u0633 \\u062a\\u064a\\u0643\"}', 1, '2020-12-24 17:15:40', '2020-12-24 17:15:40'),
(9, '{\"en\":\"PURE CREATINE MONOHYDRATE\",\"ar\":\"\\u0643\\u0631\\u064a\\u0627\\u062a\\u064a\\u0646 \\u0645\\u0648\\u0646\\u0648\\u0647\\u064a\\u062f\\u0631\\u0627\\u062a\"}', 0, '2020-12-24 17:16:34', '2020-12-24 17:16:34'),
(10, '{\"en\":\"ON GLUTAMINE\",\"ar\":\"\\u062c\\u0644\\u0648\\u062a\\u0627\\u0645\\u064a\\u0646 \\u0645\\u0646 \\u0627\\u0648\\u0646\"}', 1, '2020-12-24 17:17:18', '2020-12-24 17:17:18');

-- --------------------------------------------------------

--
-- Table structure for table `products_images`
--

CREATE TABLE `products_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('cover','image') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_images`
--

INSERT INTO `products_images` (`id`, `product_id`, `image`, `type`, `created_at`, `updated_at`) VALUES
(1, 1, '11.png', 'cover', NULL, NULL),
(2, 1, '12.jpg', 'image', NULL, NULL),
(3, 1, '13.jpg', 'image', NULL, NULL),
(4, 2, '21.png', 'cover', NULL, NULL),
(5, 2, '22.jpg', 'image', NULL, NULL),
(6, 2, '23.jpg', 'image', NULL, NULL),
(7, 3, '31.jpg', 'cover', NULL, NULL),
(8, 3, '32.png', 'image', NULL, NULL),
(9, 4, '41.jpg', 'cover', NULL, NULL),
(10, 4, '42.jpg', 'image', NULL, NULL),
(11, 5, '51.png', 'cover', NULL, NULL),
(12, 5, '52.jpg', 'image', NULL, NULL),
(13, 6, '61.jpg', 'cover', NULL, NULL),
(14, 6, '62.jpg', 'image', NULL, NULL),
(15, 7, '71.png', 'cover', NULL, NULL),
(16, 7, '72.jpg', 'image', NULL, NULL),
(17, 8, '81.jpg', 'cover', NULL, NULL),
(18, 8, '82.jpg', 'image', NULL, NULL),
(19, 9, '91.jpg', 'cover', NULL, NULL),
(20, 9, '92.png', 'image', NULL, NULL),
(21, 10, 'x1.jpg', 'cover', NULL, NULL),
(22, 10, 'x2.jpg', 'image', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products_prices`
--

CREATE TABLE `products_prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `price` double(8,2) NOT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_prices`
--

INSERT INTO `products_prices` (`id`, `product_id`, `price`, `region`, `created_at`, `updated_at`) VALUES
(1, 1, 150.00, 'ae', NULL, NULL),
(2, 1, 160.00, 'sa', NULL, NULL),
(3, 1, 1000.00, 'eg', NULL, NULL),
(4, 2, 160.00, 'ae', NULL, NULL),
(5, 2, 170.00, 'sa', NULL, NULL),
(6, 2, 1100.00, 'eg', NULL, NULL),
(7, 3, 60.00, 'ae', NULL, NULL),
(8, 3, 70.00, 'sa', NULL, NULL),
(9, 3, 450.00, 'eg', NULL, NULL),
(10, 4, 150.00, 'ae', NULL, NULL),
(11, 4, 160.00, 'sa', NULL, NULL),
(12, 4, 1400.00, 'eg', NULL, NULL),
(13, 5, 40.00, 'ae', NULL, NULL),
(14, 5, 50.00, 'sa', NULL, NULL),
(15, 5, 500.00, 'eg', NULL, NULL),
(16, 6, 160.00, 'ae', NULL, NULL),
(17, 6, 200.00, 'sa', NULL, NULL),
(18, 6, 1600.00, 'eg', NULL, NULL),
(19, 7, 100.00, 'ae', NULL, NULL),
(20, 7, 120.00, 'sa', NULL, NULL),
(21, 7, 750.00, 'eg', NULL, NULL),
(22, 8, 200.00, 'ae', NULL, NULL),
(23, 8, 250.00, 'sa', NULL, NULL),
(24, 8, 1700.00, 'eg', NULL, NULL),
(25, 9, 35.00, 'ae', NULL, NULL),
(26, 9, 50.00, 'sa', NULL, NULL),
(27, 9, 350.00, 'eg', NULL, NULL),
(28, 10, 55.00, 'ae', NULL, NULL),
(29, 10, 70.00, 'sa', NULL, NULL),
(30, 10, 400.00, 'eg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products_stock`
--

CREATE TABLE `products_stock` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_stock`
--

INSERT INTO `products_stock` (`id`, `product_id`, `quantity`, `region`, `created_at`, `updated_at`) VALUES
(1, 7, 5, 'ae', NULL, NULL),
(2, 1, 3, 'sa', NULL, NULL),
(3, 1, 1, 'eg', NULL, NULL),
(4, 2, 11, 'ae', NULL, NULL),
(5, 2, 3, 'sa', NULL, NULL),
(6, 2, 4, 'eg', NULL, NULL),
(7, 3, 6, 'ae', NULL, NULL),
(8, 3, 8, 'sa', NULL, NULL),
(9, 3, 4, 'eg', NULL, NULL),
(10, 4, 32, 'ae', NULL, NULL),
(11, 4, 23, 'sa', NULL, NULL),
(12, 4, 5, 'eg', NULL, NULL),
(13, 5, 8, 'ae', NULL, NULL),
(14, 5, 7, 'sa', NULL, NULL),
(15, 5, 11, 'eg', NULL, NULL),
(16, 6, 22, 'ae', NULL, NULL),
(17, 7, 4, 'sa', NULL, NULL),
(18, 8, 6, 'ae', NULL, NULL),
(19, 9, 11, 'eg', NULL, NULL),
(20, 10, 1, 'ae', NULL, NULL),
(21, 10, 2, 'sa', NULL, NULL),
(22, 10, 3, 'eg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_images`
--
ALTER TABLE `products_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `products_prices`
--
ALTER TABLE `products_prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_prices_product_id_foreign` (`product_id`);

--
-- Indexes for table `products_stock`
--
ALTER TABLE `products_stock`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_stock_product_id_foreign` (`product_id`);

--
-- Indexes for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`id`,`instance`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `products_images`
--
ALTER TABLE `products_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `products_prices`
--
ALTER TABLE `products_prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `products_stock`
--
ALTER TABLE `products_stock`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products_images`
--
ALTER TABLE `products_images`
  ADD CONSTRAINT `products_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products_prices`
--
ALTER TABLE `products_prices`
  ADD CONSTRAINT `products_prices_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products_stock`
--
ALTER TABLE `products_stock`
  ADD CONSTRAINT `products_stock_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
