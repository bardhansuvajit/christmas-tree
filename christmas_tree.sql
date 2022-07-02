-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2022 at 10:24 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `christmas_tree`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
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
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'christmas-tree Admin', 'admin@admin.com', NULL, '$2y$10$9gQzNoP5iEPYt2Tp41pwUeWSboRA0jyG9aviihoYrikYjKLrAIToW', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img_50` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_200` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_500` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_1000` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `primary_btn_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `primary_btn_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondary_btn_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondary_btn_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1: active, 0: inactive',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `img_50`, `img_200`, `img_500`, `img_1000`, `heading`, `desc`, `primary_btn_text`, `primary_btn_link`, `secondary_btn_text`, `secondary_btn_link`, `position`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'uploads/slide/1656532685.1656470628.1597491780.Screenshot (50).png', 'uploads/slide/1656530842.slide1.jpg', 'uploads/slide/1656532541.slide7.jpg', 'uploads/slide/1656532824.login-bg2.jpeg', 'Indonesia', NULL, 'text', 'https://www.google.com/search?q=lorem+ipsum&rlz=1C1RXQR_enIN998IN998&sxsrf=ALiCzsZtcQiA4XCRHK3XtDHGkK_9CIbrOw:1656462216907&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjF6ZbQstH4AhUaR2wGHQSTDaEQ_AUoAXoECAIQAw&biw=1242&bih=516&dpr=1.1#imgrc=PE11deJHR7ntxM', 'text2', 'https://www.google.com/search?q=lorem+ipsum&rlz=1C1RXQR_enIN998IN998&sxsrf=ALiCzsZtcQiA4XCRHK3XtDHGkK_9CIbrOw:1656462216907&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjF6ZbQstH4AhUaR2wGHQSTDaEQ_AUoAXoECAIQAw&biw=1242&bih=516&dpr=1.1#imgrc=PE11deJHR7ntxM', 1, 1, NULL, '2022-06-29 00:35:02', '2022-06-29 20:00:24'),
(2, 'uploads/slide/1656470354.1419095224.Screenshot (54).png', 'uploads/slide/1656470354.1419095224.Screenshot (54).png', 'uploads/slide/1656470354.1419095224.Screenshot (54).png', 'uploads/slide/slide2.jpg', 'Indonesia', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final', 'text', 'https://www.google.com/search?q=lorem+ipsum&rlz=1C1RXQR_enIN998IN998&sxsrf=ALiCzsZtcQiA4XCRHK3XtDHGkK_9CIbrOw:1656462216907&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjF6ZbQstH4AhUaR2wGHQSTDaEQ_AUoAXoECAIQAw&biw=1242&bih=516&dpr=1.1#imgrc=PE11deJHR7ntxM', 'text2', 'https://www.google.com/search?q=lorem+ipsum&rlz=1C1RXQR_enIN998IN998&sxsrf=ALiCzsZtcQiA4XCRHK3XtDHGkK_9CIbrOw:1656462216907&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjF6ZbQstH4AhUaR2wGHQSTDaEQ_AUoAXoECAIQAw&biw=1242&bih=516&dpr=1.1#imgrc=PE11deJHR7ntxM', 2, 1, NULL, '2022-06-29 00:35:02', '2022-06-29 20:06:16'),
(3, 'uploads/slide/1656470354.1419095224.Screenshot (54).png', 'uploads/slide/1656470354.1074875270.Screenshot (54).png', 'uploads/slide/1656470354.865109967.Screenshot (54).png', 'uploads/slide/slide3.jpg', 'text', 'desc', 'demo', 'https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_responsive_form', 'demo', 'https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_responsive_form', 3, 1, NULL, '2022-06-29 02:39:14', '2022-06-29 20:06:16'),
(4, 'uploads/slide/1656470628.462142288.Screenshot (6).png', 'uploads/slide/1656470628.1597491780.Screenshot (50).png', 'uploads/slide/1656470628.1959426691.Screenshot (50).png', 'uploads/slide/slide4.jpg', 'sundar ban', 'desc', 'primary', 'https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_responsive_form', 'secondary', 'https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_responsive_form', 4, 1, NULL, '2022-06-29 02:43:48', '2022-06-29 20:06:19'),
(5, 'uploads/slide/1656473843.5936660.Screenshot (50).png', 'uploads/slide/1656473843.370795273.Screenshot (50).png', 'uploads/slide/1656473843.2058078077.Screenshot (50).png', 'uploads/slide/1656473843.1512650117.Screenshot (50).png', 'Rajib', 'desc', 'primary', 'https://getbootstrap.com/docs/4.0/components/buttons/', 'Secondary', 'https://getbootstrap.com/docs/4.0/components/buttons/', 5, 0, NULL, '2022-06-29 03:37:23', '2022-06-29 20:00:53'),
(6, 'uploads/slide/1656524982.2061539322.Screenshot (55).png', 'uploads/slide/1656524982.849304416.Screenshot (12).png', 'uploads/slide/1656524982.120035584.Screenshot (21).png', 'uploads/slide/1656524982.1087584358.Screenshot (42).png', 'header', NULL, 'b1', 'https://stackoverflow.com/questions/39031224/how-to-center-cards-in-bootstrap-4', 'b2', 'https://stackoverflow.com/questions/39031224/how-to-center-cards-in-bootstrap-4', 6, 0, NULL, '2022-06-29 17:49:42', '2022-06-29 20:00:55');

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `overview` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `best_time_to_visit` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `how_to_reach` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `meta_key` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_29_121134_create_banners_table', 1),
(6, '2022_05_29_145240_create_destinations_table', 1),
(7, '2022_06_25_184707_create_admins_table', 2),
(8, '2022_06_25_195822_create_admins_table', 3),
(9, '2022_06_25_233317_create_destinations_table', 4);

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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rajib', 'rajib@gmail.com', NULL, '$2y$10$X38q3/bOC4kjrxoLxNCr6Om/UdgaPA67rrPgo7efcKFhPWRnuXTjC', NULL, '2022-06-25 13:12:09', '2022-06-25 13:12:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
