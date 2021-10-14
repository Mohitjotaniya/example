-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 14, 2021 at 12:14 PM
-- Server version: 5.7.33-0ubuntu0.18.04.1
-- PHP Version: 7.3.27-9+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `example`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prize` bigint(20) NOT NULL,
  `pages` bigint(20) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quan` bigint(20) NOT NULL,
  `image` blob NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `name`, `author`, `language`, `prize`, `pages`, `description`, `quan`, `image`, `created_at`, `updated_at`) VALUES
(1, 'gfg@gmail.com', 'Sadhguru', 'Guajrati', 32, 22, 'Death is a taboo in most societies in the world. But what if we have got this completely wrong?', 6, 0x313633313835363938352e6a7067, '2021-09-16 23:56:49', '2021-09-17 00:06:25'),
(2, 'Mrityu: Jaanen Ek Mahayogi Se', 'Sadhguru 1', 'English', 43, 33, '1. The new edition of BHU B. Com Entrance Examination is a complete study package 2.', 7, 0x313633313835363932362e6a7067, '2021-09-16 23:57:14', '2021-09-17 00:14:59'),
(3, 'B.Com Entrance Exam 2021', 'unknown', 'Hindi', 53, 55, 'Civil Seva Evam Anya Rajya Parikshao Hetu  (Hindi, Paperback, Laxmikanth M.)', 6, 0x313633313835363437342e6a7067, '2021-09-16 23:57:54', '2021-09-16 23:57:54'),
(4, 'Bharat Ki Rajvyavastha', 'Sadhguru', 'Guajrati', 87, 77, 'Civil Seva Evam Anya Rajya Parikshao Hetu  (Hindi, Paperback, Laxmikanth M.)', 7, 0x313633313835363439392e6a7067, '2021-09-16 23:58:19', '2021-09-16 23:58:19'),
(5, 'B.Com Entrance Exam 2021', 'Laxmikanth M.', 'Guajrati', 88, 8, 'The new edition of BHU B. Com Entrance Examination is a complete study package', 8, 0x313633313835363533332e6a7067, '2021-09-16 23:58:53', '2021-09-16 23:58:53'),
(6, 'mohit', 'Mohit', 'Hindi', 8, 8, '1. The new edition of BHU B. Com Entrance Examination is a complete study package 2.', 5, 0x313633313835363535392e6a7067, '2021-09-16 23:59:19', '2021-09-16 23:59:19');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `c_id` int(10) UNSIGNED NOT NULL,
  `u_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quan` bigint(20) DEFAULT NULL,
  `prize` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2021_09_02_123113_create_books_table', 1),
(12, '2021_09_02_123144_create_carts_table', 1),
(13, '2021_09_02_123202_create_orders_table', 1),
(14, '2021_09_02_123217_create_writers_table', 1),
(15, '2016_06_01_000001_create_oauth_auth_codes_table', 2),
(16, '2016_06_01_000002_create_oauth_access_tokens_table', 2),
(17, '2016_06_01_000003_create_oauth_refresh_tokens_table', 2),
(18, '2016_06_01_000004_create_oauth_clients_table', 2),
(19, '2016_06_01_000005_create_oauth_personal_access_clients_table', 2),
(20, '2019_12_14_000001_create_personal_access_tokens_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `o_id` int(10) UNSIGNED NOT NULL,
  `u_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `b_sum` bigint(20) NOT NULL,
  `r_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`o_id`, `u_id`, `book_id`, `b_sum`, `r_date`, `created_at`, `updated_at`) VALUES
(1, 7, 2, 83, '2021-09-17', '2021-09-17 00:13:34', '2021-09-17 00:14:59'),
(2, 7, 1, 83, NULL, '2021-09-17 00:13:34', '2021-09-17 00:13:34'),
(3, 7, 6, 83, NULL, '2021-09-17 00:13:34', '2021-09-17 00:13:34'),
(4, 26, 1, 75, NULL, '2021-09-17 05:06:48', '2021-09-17 05:06:48'),
(5, 26, 2, 75, NULL, '2021-09-17 05:06:48', '2021-09-17 05:06:48');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(3, 'App\\Models\\User', 1, 'my-app-token', '76552d9437b2077f03d2aedf7fea37dc370b0bbb0cb6fff296c362077ee764c8', '[\"*\"]', NULL, '2021-09-15 00:28:22', '2021-09-15 00:28:22'),
(4, 'App\\Models\\User', 1, 'my-app-token', '092f6dbd5bb113933d7dcc35dd566d4a981b9b4837adb6ec97edd9a3ba10e970', '[\"*\"]', NULL, '2021-09-15 00:37:37', '2021-09-15 00:37:37'),
(5, 'App\\Models\\User', 1, 'my-app-token', '9e592e08cb83f5445ee93031d4b45518c5bfe9c9e83380c3766e698bbf8b4cce', '[\"*\"]', NULL, '2021-09-15 00:41:07', '2021-09-15 00:41:07'),
(6, 'App\\Models\\User', 1, 'my-app-token', 'dea409ac7a96c5f71c3a76e6c0a9c73810ab06417ecdb59c8090867e2f8a246e', '[\"*\"]', NULL, '2021-09-15 01:07:47', '2021-09-15 01:07:47'),
(7, 'App\\Models\\Writers', 1, 'my-app-token', '3e8a44684025aa51e728ad904831cb5d06335ba1b6d13e1af79ca02d1d057d44', '[\"*\"]', NULL, '2021-09-15 01:12:39', '2021-09-15 01:12:39'),
(8, 'App\\Models\\Writers', 21, 'my-app-token', '018f0b91d1024a24cba65baf73b09fbb6b47d841861fec3f8f23ab7b61a67232', '[\"*\"]', NULL, '2021-09-15 01:19:55', '2021-09-15 01:19:55'),
(9, 'App\\Models\\Writers', 21, 'my-app-token', 'ab8156c887e477fc0dcbab065034459a4f734bcaf45aa1da8f82a28486e4056c', '[\"*\"]', NULL, '2021-09-15 01:20:32', '2021-09-15 01:20:32'),
(10, 'App\\Models\\Writers', 1, 'my-app-token', '9097e8557c98d2e846dc3fa0b092a6242868be1b063762b7b41373dfa53ff914', '[\"*\"]', '2021-09-16 00:55:17', '2021-09-15 01:27:30', '2021-09-16 00:55:17'),
(11, 'App\\Models\\Writers', 1, 'my-app-token', 'b7b71cad953e0d93fd4fbf0f09b146ceffd469aaec565d6f7c07a07e704ce835', '[\"*\"]', '2021-09-15 05:42:24', '2021-09-15 05:40:15', '2021-09-15 05:42:24'),
(12, 'App\\Models\\Writers', 1, 'my-app-token', 'cb531e415379ab475d92e96e7c5c844072830ddd0f0f5861f92a63f34833ce0d', '[\"*\"]', '2021-09-15 10:02:29', '2021-09-15 05:52:07', '2021-09-15 10:02:29'),
(13, 'App\\Models\\Writers', 1, 'my-app-token', '46476a4a8cecd24970403e099759b7550ec4b64d9516ac5dacaea4b47260f6b6', '[\"*\"]', '2021-09-17 03:24:36', '2021-09-16 00:55:13', '2021-09-17 03:24:36'),
(14, 'App\\Models\\Writers', 1, 'my-app-token', 'be8ab8a274ad935625365a0db79332be6f69051b581ebb508fb7fa1c04ea5baa', '[\"*\"]', NULL, '2021-09-17 03:42:32', '2021-09-17 03:42:32'),
(15, 'App\\Models\\Writers', 1, 'my-app-token', '9c444c2431ffe657e39818bffacdf4f0fca6c939d82487c39923a2a98281603d', '[\"*\"]', NULL, '2021-09-17 03:46:55', '2021-09-17 03:46:55'),
(16, 'App\\Models\\Writers', 24, 'Laravel Password Grant Client', '2cceb94fe739fc75746e910d863f94287e70f18e1aa3bbecd40840b1bf5349fc', '[\"*\"]', NULL, '2021-09-17 04:32:53', '2021-09-17 04:32:53'),
(17, 'App\\Models\\Writers', 25, 'Laravel Password Grant Client', '6c34c1f073d51a4f7baaa6ff112eab23d860adc91f8589ef25fd263e14d04562', '[\"*\"]', NULL, '2021-09-17 04:35:57', '2021-09-17 04:35:57'),
(18, 'App\\Models\\Writers', 25, 'my-app-token', '8f53c0d67af9df6c5791062527c9c9e073ef438e00794c0b0c5cffe2ecd9739b', '[\"*\"]', '2021-09-17 04:39:25', '2021-09-17 04:36:25', '2021-09-17 04:39:25'),
(19, 'App\\Models\\Writers', 26, 'Laravel Password Grant Client', 'e93962e212f3e9562164357611aa076bf4fced8bb4c631cea3c7b6ba25ad4966', '[\"*\"]', NULL, '2021-09-17 04:40:21', '2021-09-17 04:40:21'),
(20, 'App\\Models\\Writers', 27, 'Laravel Password Grant Client', 'b0367469998b49c6a59c329675bf2a7f30b3108e98b895cbe024d9095c98c180', '[\"*\"]', NULL, '2021-09-17 04:42:23', '2021-09-17 04:42:23'),
(21, 'App\\Models\\Writers', 27, 'my-app-token', 'b34942792c5563ab25ad56ec686958d8519a270125bd888a3bd51cbb4bc336ca', '[\"*\"]', '2021-09-17 04:56:29', '2021-09-17 04:42:50', '2021-09-17 04:56:29'),
(22, 'App\\Models\\Writers', 28, 'Laravel Password Grant Client', '90359554caef1abadd0f8bcb756ea914eddfdacdd461369b8970d5267242d0c6', '[\"*\"]', NULL, '2021-09-17 04:59:01', '2021-09-17 04:59:01'),
(23, 'App\\Models\\Writers', 28, 'my-app-token', '904dd72b10e629e7a0969abd1ab0e1ae4dac9cb78be5ec57a0fc17f31ac57461', '[\"*\"]', '2021-09-20 03:24:15', '2021-09-17 04:59:27', '2021-09-20 03:24:15');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mohit', 'admin@gmail.com', NULL, '$2y$10$GKD0lUz4ViYUe3sUJhj.VeSsNu82LNP2Vf38GZOuSCeOg1zc3.fQO', NULL, '2021-09-02 23:32:42', '2021-09-02 23:32:42');

-- --------------------------------------------------------

--
-- Table structure for table `writers`
--

CREATE TABLE `writers` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `bod` date NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `county` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `writers`
--

INSERT INTO `writers` (`u_id`, `u_name`, `lname`, `email`, `password`, `phone`, `bod`, `gender`, `address`, `city`, `county`, `created_at`, `updated_at`) VALUES
(1, 'mohit', 'DSFSDF', 'jotaniyamohit6259@gmail.com', '$2y$10$.k1LIZCZ5xtviDTSJsMWpers5BXyWUuW0bObsyedY7lod/MfgftDC', 1234567590, '2021-09-04', 'female', 'DFDFDS', 'rajkot', 'gujarat', '2021-09-02 23:36:58', '2021-09-02 23:36:58'),
(2, 'vivekfghfgh', 'dd', 'jghfhfgh@gmail.com', '$2y$10$DNksrH6uW8kvkl5t8zOC/OrXDJEWlv3w3rJA4xkcUwZu0V0kg0asW', 1234567890, '2021-09-04', 'male', 'fdhfghfgdh', 'fghf', 'fghfgh', '2021-09-02 23:37:23', '2021-09-14 02:23:13'),
(3, 'mmmm', 'dd', 'jeeee@gmail.com', '$2y$10$tkEQlz5V1Dn0VDGD9LpWGe9ziThfVcCoRuyZn9mvBnf0K/10re5K.', 1234567890, '2021-09-04', 'male', 'fdhfghfgdh', 'fghf', 'fghfgh', '2021-09-07 02:49:55', '2021-09-13 05:51:54'),
(5, 'dfsgdfgdf', 'dfgdfgdfg', 'avccc@gmail.com', '$2y$10$Q2zBSHa8dA2F84pH/46LZO3OHaJCh0Q5dr6mOhF7ZuRclO4GTgVrS', 12345678, '2021-07-09', 'male', 'dfdsufdsgdfgdf', 'gdfgdfg', 'fdgdfg', '2021-09-07 02:51:55', '2021-09-17 05:02:18'),
(6, 'mm', 'mm3', 'aettfff@gmail.com', '$2y$10$ByeOmLOTOKosYHF8T4kf2eDDKhHdtHPZajlNroUaux3EiO74qETXO', 1111111111, '2021-08-03', 'male', 'gdfdfgdfgdfgdfg', 'rajkot', 'gujrat', '2021-09-07 02:53:35', '2021-09-07 02:53:35'),
(7, 'mm', 'qq', 'ggtg@gmail.co', '$2y$10$wi6pmcr.564RP2UxojV0luXx/zhaLLff.h9H5GPOPYTpasA7gj68e', 1111111111, '2021-08-03', 'male', 'gdfdfgdfgdfgdfg', 'rajkot', 'gujrat', '2021-09-07 03:43:52', '2021-09-07 03:43:52'),
(8, 'htrytry', 'DSFSDF', 'admin12@gmail.com', '$2y$10$4ufDwXRxEBR52IOuDcWd6eX93gJSpT5PXIPnrASHglSVW3QEI.j0W', 1234567887, '2021-09-08', 'female', 'DFDFDS', 'rajkot', 'gujarat', '2021-09-08 00:05:40', '2021-09-08 00:05:40'),
(9, 'mm', 'qq', 'a@gmail.com', '$2y$10$vcwD/VG5raAjm3fmoX6Xou0/Zph4d7A2rw7TBi6Kb6EUYOg4NAbKu', 1111111111, '2021-08-03', 'male', 'gdfdfgdfgdfgdfg', 'rajkot', 'gujrat', '2021-09-08 03:19:24', '2021-09-08 03:19:24'),
(10, 'vivektt', 'ddt', 'jtt@gmail.com', '$2y$10$bAHZaXg2CDytTlZ6tlPnxe1vVL2I9V2yGIFogOh7Sb8/z9uQI73xi', 1234567890, '2021-09-04', 'male', 'fdhfghfgdh', 'fghf', 'fghfgh', '2021-09-14 00:55:40', '2021-09-14 00:55:40'),
(11, 'vivedddktt', 'ddt', 'jtddt@gmail.com', '$2y$10$K.pYl9ftUzGYtRVBkNcRHuEbOwAljjUCq.Jkvy1WXPJZw.H6EwtqC', 1234567890, '2021-09-04', 'male', 'fdhfghfgdh', 'fghf', 'fghfgh', '2021-09-14 01:04:40', '2021-09-14 01:04:40'),
(13, 'vivekfghfghgg', 'ddggg', 'jghfhfggggh@gmail.com', '$2y$10$7M60MFSLV7Qnt.rswNUbGO3MqdTdYsgZAMqu84QG7sOuOXK9NOWLG', 1234567890, '2021-09-04', 'male', 'fdhfghfgdh', 'fghf', 'fghfgh', '2021-09-14 04:38:36', '2021-09-14 04:38:36'),
(15, 'vivekfghfghggf', 'ddggg', 'jghfhfgggggh@gmail.com', '$2y$10$VH265oMcHYWSCxq103EzZ.5bZdAHkv3gM3RODETkBDZTwZ49ydKim', 1234567890, '2021-09-04', 'male', 'fdhfghfgdh', 'fghf', 'fghfgh', '2021-09-14 04:41:36', '2021-09-14 04:41:36'),
(16, 'vivekfghfghggf', 'ddggg', 'jghfhssfgggggh@gmail.com', '$2y$10$/eSSStsihydBoPtKiLvAVepxkJc31MVwupesaZVyWGhp96y2Jy7sq', 1234567890, '2021-09-04', 'male', 'fdhfghfgdh', 'fghf', 'fghfgh', '2021-09-14 04:50:10', '2021-09-14 04:50:10'),
(18, 'vivekfghfghggf', 'ddggg', 'jghfhshhsfgggggh@gmail.com', '$2y$10$3JpEhgKAFVJq4PYtz8XdPuRH3Vnxow.rbSGdzM1UfsJ.zaUWkH8ui', 1234567890, '2021-09-04', 'male', 'fdhfghfgdh', 'fghf', 'fghfgh', '2021-09-14 08:45:05', '2021-09-14 08:45:05'),
(19, 'vivekfghfghggf', 'ddggg', 'jghfhshhdsfgggggh@gmail.com', '$2y$10$wWE6RoMmfc.R2PwdiEAc1.dQaV17ffqQaFMrJtHKllVkyWsDRfCqa', 1234567890, '2021-09-04', 'male', 'fdhfghfgdh', 'fghf', 'fghfgh', '2021-09-14 08:58:15', '2021-09-14 08:58:15'),
(20, 'vivekfghfghggf', 'ddggg', 'jghfhshhdsffdgdgggggh@gmail.com', '$2y$10$awj9PT4nBXR0Kp5663YWLuAIaev36Zk9Pz1M2eF0UsHRJ5QCccx3G', 1234567890, '2021-09-04', 'male', 'fdhfghfgdh', 'fghf', 'fghfgh', '2021-09-14 08:59:44', '2021-09-14 08:59:44'),
(21, 'vivedddkttfff', 'ddt', 'jtfffffffffffffffddt@gmail.com', '$2y$10$rYzLYcw4T6HpEzPrtrxMtO80I.WTQw1JKIAV33gCdWnH0lDEsZEne', 1234567890, '2021-09-04', 'male', 'fdhfghfgdh', 'fghf', 'fghfgh', '2021-09-14 09:48:59', '2021-09-14 09:48:59'),
(24, 'mohit', 'jotaniya', 'aa@gmail.com', '$2y$10$/tM7lqTGji.4m6rbcqH4KeEdK03XYl4i/JGzKJScJ7K5LaNeiep3a', 1234567890, '2021-09-04', 'male', 'tgdfgdgfgdf', 'rajkot', 'Gujarat', '2021-09-17 04:32:53', '2021-09-17 04:32:53'),
(25, 'mohit', 'jotaniya', 'aaa@gmail.com', '$2y$10$rtQJu2.UpxIo6XD.8sfQ5e8/FjhxlQcSZD10ef0u1fBHjyCs7DJCS', 1234567899, '2021-09-04', 'male', 'fhfghfg', 'gfhfgh', 'gfhfg', '2021-09-17 04:35:57', '2021-09-17 04:35:57'),
(26, 'mohit', 'jotaniya', 'aada@gmail.com', '$2y$10$QmmAN1gwGeUmAaFT6dzS6.vACZMhzxqT.V6bIybWTSB6WEnV0akGu', 1234567899, '2021-09-04', 'male', 'fhfghfg', 'gfhfgh', 'gfhfg', '2021-09-17 04:40:21', '2021-09-17 04:40:21'),
(27, 'mohit', 'jotaniya', 'abc@gmail.com', '$2y$10$v2HWgBh.FFR5ARLa/G12wOjPJHEBD0YbgWgPWe7tBkjwtkEEJOfS2', 1234567890, '2021-09-04', 'male', 'fdgdfg', 'dfgdf', 'dfgdfg', '2021-09-17 04:42:23', '2021-09-17 04:42:23'),
(28, 'mohit', 'jotaniya', 'abcd@gmail.com', '$2y$10$6rUfCEQ2z/YhVOsXMO6GQ.bKA0W/IejwjDDN3IvfsGpYJaByUdXO2', 1234567899, '2021-09-04', 'male', 'fghfghfg', 'gfhfgh', 'fghfg', '2021-09-17 04:59:01', '2021-09-17 04:59:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `c_id` (`u_id`,`book_id`),
  ADD KEY `book_id` (`book_id`);

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
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `o_id` (`u_id`,`book_id`) USING BTREE,
  ADD KEY `orders_ibfk_2` (`book_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `writers`
--
ALTER TABLE `writers`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `writers_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `c_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `writers`
--
ALTER TABLE `writers`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carts_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `writers` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `writers` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
