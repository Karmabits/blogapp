-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Mar 12, 2021 at 04:53 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_10_094335_create_posts_table', 1),
(5, '2021_03_10_144128_add_user_id_to_posts', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created_at`, `updated_at`, `user_id`, `active`) VALUES
(21, 'Arno irasas 1', 'Arno iraso 1 tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas.', '2021-03-12 13:46:07', '2021-03-12 13:48:19', 2, 1),
(22, 'Arno irasas 2', 'Arno iraso 2 tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas.', '2021-03-12 13:46:18', '2021-03-12 13:48:20', 2, 1),
(23, 'Arno irasas 3', 'Arno iraso 3 tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas.', '2021-03-12 13:46:50', '2021-03-12 13:48:18', 2, 1),
(24, 'Arno irasas 4', 'Arno iraso 4 tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas.', '2021-03-12 13:47:45', '2021-03-12 13:48:16', 2, 1),
(25, 'Arno irasas 5', 'Arno irasas 5 tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas.', '2021-03-12 13:48:03', '2021-03-12 13:48:15', 2, 1),
(26, 'Arno irasas 6', 'Arno iraso 6 tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas. Arno iraso tekstas.', '2021-03-12 13:48:12', '2021-03-12 13:48:14', 2, 1),
(27, 'Pauliaus irasas 1', 'Pauliaus iraso 1 tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas.', '2021-03-12 13:49:41', '2021-03-12 13:51:00', 1, 1),
(28, 'Pauliaus irasas 2', 'Pauliaus iraso 2 tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas.', '2021-03-12 13:50:08', '2021-03-12 13:50:59', 1, 1),
(29, 'Pauliaus irasas 3', 'Pauliaus iraso 3 tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas.', '2021-03-12 13:50:16', '2021-03-12 13:50:57', 1, 1),
(30, 'Pauliaus irasas 4', 'Pauliaus iraso 4 tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas.', '2021-03-12 13:50:26', '2021-03-12 13:50:58', 1, 1),
(31, 'Pauliaus irasas 5', 'Pauliaus iraso 5 tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas.', '2021-03-12 13:50:39', '2021-03-12 13:50:54', 1, 1),
(32, 'Pauliaus irasas 6', 'Pauliaus iraso 6 tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas. Pauliaus iraso tekstas.', '2021-03-12 13:50:51', '2021-03-12 13:50:53', 1, 1),
(33, 'Pauliaus neaktyvus irasas', 'Cia yra neaktyvus irasas nerodomas pagrindiniame puslapyje.', '2021-03-12 13:51:24', '2021-03-12 13:51:24', 1, 0),
(34, 'Arno neaktyvus irasas', 'Cia yra Arno neaktyvus irasas nerodomas pagrindiniame puslapyje.', '2021-03-12 13:52:07', '2021-03-12 13:52:07', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Paulius', 'janciauskaspaulius@gmail.com', NULL, '$2y$10$Gzpv/KuFma.ozzTS1Kihp.Xl/.BQ3bEPmJ7eMUpuYxQkdBK4E8JiG', NULL, '2021-03-10 12:20:59', '2021-03-10 12:20:59'),
(2, 'Arnas', 'arnas@example.com', NULL, '$2y$10$s3Jc6Gqd1l3iz86HBIS8aeJpzK4.jQgslaITnAvJOhg.9KN8fxXHG', NULL, '2021-03-10 13:18:52', '2021-03-10 13:18:52');

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
