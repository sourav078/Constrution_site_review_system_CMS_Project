-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2023 at 10:00 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `construction_site_review`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `mouza` text NOT NULL,
  `amount` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `number`, `mouza`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sourav', 546345353, 'dfghdh', 4533, 1, '2023-08-02 03:19:39', '2023-08-02 03:19:39');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `regular_price` varchar(255) NOT NULL,
  `selling_price` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `long_description` longtext NOT NULL,
  `starting_date` text NOT NULL,
  `image` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `enroll_count` int(11) NOT NULL DEFAULT 0,
  `hit_count` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(9, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(10, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(12, '2023_06_19_042433_create_sessions_table', 1),
(13, '2023_06_20_035924_create_categories_table', 1),
(14, '2023_06_24_051500_create_teachers_table', 1),
(15, '2023_06_25_061626_create_courses_table', 1),
(16, '2023_08_02_071906_create_surveyers_table', 1),
(17, '2023_08_03_175547_create_tasks_table', 2),
(18, '2023_08_03_182558_create_surveyor_task_table', 3),
(19, '2023_08_03_184412_create_surveyer_task_table', 4),
(20, '2023_08_03_212803_create_task_surveyer_table', 5);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
('f7H4GMgLZklTt4bu6BBkShMTlxCsWkAaHGm8A7a7', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 OPR/100.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiTG5relpaOFhaUWw5b1Z0SGExQVd6d3J0RnowWVpiV3J1cGxvaWVadCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi90YXNrcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkbld1ZGc0L2ZzRGgzYUpEQVZQQWp5ZXRZOXp1WUFCN3I5ODJnRkZsa3NRbEFwOXBJZ01FRG0iO30=', 1691155134),
('JuvOLrV5A9RhoNjrqMMwgwwIXJavKqm7trwCOc6V', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 OPR/100.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiMG9wQTFxdmVPT3pPN25pRnlLcU5LeE9FQjNZQ2ZkUUhjYXdJTVNWbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi90YXNrcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkbld1ZGc0L2ZzRGgzYUpEQVZQQWp5ZXRZOXp1WUFCN3I5ODJnRkZsa3NRbEFwOXBJZ01FRG0iO30=', 1691099394);

-- --------------------------------------------------------

--
-- Table structure for table `surveyers`
--

CREATE TABLE `surveyers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `image` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `nid` varchar(255) DEFAULT NULL,
  `blood_group` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surveyers`
--

INSERT INTO `surveyers` (`id`, `category_id`, `name`, `email`, `password`, `mobile`, `image`, `address`, `nid`, `blood_group`, `date_of_birth`, `created_at`, `updated_at`) VALUES
(2, 1, 'sarker', 'sarker@gmail.com', '$2y$10$2w7S9smWxDAFtUDJcnMb/.Lz2d9MhBKu1t4srgmP5KdBfxT0dPXLq', '1234567', 'upload/teacher-images/Untitled1_20221124182420.png', NULL, NULL, NULL, NULL, '2023-08-02 07:00:32', '2023-08-02 07:00:32');

-- --------------------------------------------------------

--
-- Table structure for table `surveyer_task`
--

CREATE TABLE `surveyer_task` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `surveyer_id` bigint(20) UNSIGNED NOT NULL,
  `task_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surveyor_task`
--

CREATE TABLE `surveyor_task` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `surveyer_id` bigint(20) UNSIGNED NOT NULL,
  `task_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `survey_type` enum('Plan','Area','Demarcation','Level','Conture','Calculation_of_Fill') NOT NULL,
  `Reporting In The Office` varchar(255) NOT NULL,
  `Leave For Work` varchar(255) NOT NULL,
  `Confirmed Arrival` varchar(255) NOT NULL,
  `Getting Started After Reki` varchar(255) NOT NULL,
  `End Of The Work` varchar(255) NOT NULL,
  `Bill Receive` tinyint(1) NOT NULL DEFAULT 0,
  `Collect Due Bills` tinyint(1) NOT NULL DEFAULT 0,
  `Returned Office` varchar(255) NOT NULL,
  `Data Process` varchar(255) NOT NULL,
  `Fix File Name` varchar(255) NOT NULL,
  `Prepare Report` varchar(255) NOT NULL,
  `Approve Report` varchar(255) NOT NULL,
  `Mail Report` varchar(255) NOT NULL,
  `Print Report` varchar(255) NOT NULL,
  `Report Submission` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `survey_type`, `Reporting In The Office`, `Leave For Work`, `Confirmed Arrival`, `Getting Started After Reki`, `End Of The Work`, `Bill Receive`, `Collect Due Bills`, `Returned Office`, `Data Process`, `Fix File Name`, `Prepare Report`, `Approve Report`, `Mail Report`, `Print Report`, `Report Submission`, `created_at`, `updated_at`) VALUES
(1, 'Plan', 'hjhj', 'sedas', 'qwe', 'qwq', 'wqsdq', 1, 1, 'sdaxcsd', 'ds', 'edd', 'desew', 'ded', 'dqwe', 'sdqw', 'sdqw', '2023-08-23 18:56:32', '2023-08-29 18:56:32');

-- --------------------------------------------------------

--
-- Table structure for table `task_surveyer`
--

CREATE TABLE `task_surveyer` (
  `task_id` bigint(20) UNSIGNED NOT NULL,
  `surveyer_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `image` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `nid` varchar(255) DEFAULT NULL,
  `blood_group` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `category_id`, `name`, `email`, `password`, `mobile`, `image`, `address`, `nid`, `blood_group`, `date_of_birth`, `created_at`, `updated_at`) VALUES
(1, 1, 'Alif', 'alif@gmail.com', '$2y$10$5X3/4aEq8qaBIIILhVHn0.xgVPRrx3TlrgNd3DC5/TS8TVctECwKu', '478089', 'upload/teacher-images/Untitled1_20221124182420.png', NULL, NULL, NULL, NULL, '2023-08-02 03:21:21', '2023-08-02 03:21:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$nWudg4/fsDh3aJDAVPAjyetY9zuYAB7r982gFFlksQlAp9pIgMEDm', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-02 03:12:56', '2023-08-02 03:12:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `surveyers`
--
ALTER TABLE `surveyers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `surveyers_email_unique` (`email`),
  ADD UNIQUE KEY `surveyers_mobile_unique` (`mobile`),
  ADD UNIQUE KEY `surveyers_nid_unique` (`nid`);

--
-- Indexes for table `surveyer_task`
--
ALTER TABLE `surveyer_task`
  ADD PRIMARY KEY (`id`),
  ADD KEY `surveyer_task_surveyer_id_foreign` (`surveyer_id`),
  ADD KEY `surveyer_task_task_id_foreign` (`task_id`);

--
-- Indexes for table `surveyor_task`
--
ALTER TABLE `surveyor_task`
  ADD PRIMARY KEY (`id`),
  ADD KEY `surveyor_task_surveyer_id_foreign` (`surveyer_id`),
  ADD KEY `surveyor_task_task_id_foreign` (`task_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_surveyer`
--
ALTER TABLE `task_surveyer`
  ADD KEY `task_surveyer_task_id_foreign` (`task_id`),
  ADD KEY `task_surveyer_surveyer_id_foreign` (`surveyer_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teachers_email_unique` (`email`),
  ADD UNIQUE KEY `teachers_mobile_unique` (`mobile`),
  ADD UNIQUE KEY `teachers_nid_unique` (`nid`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surveyers`
--
ALTER TABLE `surveyers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `surveyer_task`
--
ALTER TABLE `surveyer_task`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surveyor_task`
--
ALTER TABLE `surveyor_task`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `surveyer_task`
--
ALTER TABLE `surveyer_task`
  ADD CONSTRAINT `surveyer_task_surveyer_id_foreign` FOREIGN KEY (`surveyer_id`) REFERENCES `surveyers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `surveyer_task_task_id_foreign` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `surveyor_task`
--
ALTER TABLE `surveyor_task`
  ADD CONSTRAINT `surveyor_task_surveyer_id_foreign` FOREIGN KEY (`surveyer_id`) REFERENCES `surveyers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `surveyor_task_task_id_foreign` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `task_surveyer`
--
ALTER TABLE `task_surveyer`
  ADD CONSTRAINT `task_surveyer_surveyer_id_foreign` FOREIGN KEY (`surveyer_id`) REFERENCES `surveyers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `task_surveyer_task_id_foreign` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
