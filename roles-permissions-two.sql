-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2023 at 09:25 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roles-permissions-two`
--

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
(8, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2023_08_03_080522_create_roles_table', 1),
(12, '2023_08_03_080543_create_permissions_table', 1),
(13, '2023_08_03_081417_create_permission_role_table', 1),
(14, '2023_10_12_000000_create_users_table', 1),
(15, '2023_08_03_213215_create_posts_table', 2);

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'update post', '2023-08-03 12:59:38', '2023-08-04 00:42:48'),
(4, 'create post', '2023-08-03 23:14:18', '2023-08-03 23:14:18'),
(5, 'delete post', '2023-08-04 00:43:03', '2023-08-04 00:43:03');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(4, 6),
(4, 3),
(3, 6);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, 'Facere temporibus libero.', 'Id error porro quos optio ut. Corporis sed optio fugiat ut placeat. Eum placeat dolorem reiciendis et. Nisi dolor quam rerum pariatur temporibus velit corrupti. Consequatur eligendi qui sint corrupti.', '2023-08-03 16:07:41', '2023-08-03 16:07:41'),
(2, 'Quia voluptatem exercitationem consequatur.', 'Non est et harum cupiditate quasi. Non ullam distinctio dolor quibusdam qui sed quia quo. Et tenetur neque repudiandae similique eius et nulla. Dolorem omnis quasi dolores qui enim velit.', '2023-08-03 16:07:41', '2023-08-03 16:07:41'),
(3, 'Placeat sed molestiae.', 'Aut earum vero ut alias animi perspiciatis. Fuga sit mollitia nihil iure sunt repellendus facilis neque. Tempora eum totam facere eaque libero tempora. Sint inventore omnis eum non sint.', '2023-08-03 16:07:41', '2023-08-03 16:07:41'),
(4, 'Molestiae voluptas magnam.', 'Ut minima est voluptatem. Officia velit sit est temporibus sunt exercitationem rerum consectetur. Reiciendis ipsum voluptas ex possimus ipsa rem.', '2023-08-03 16:07:41', '2023-08-03 16:07:41'),
(5, 'Blanditiis aut et enim et.', 'Illum qui cumque quia omnis ab. Porro cupiditate maiores et dolores enim molestiae et. Quia modi alias ducimus illum recusandae.', '2023-08-03 16:07:41', '2023-08-03 16:07:41'),
(6, 'Ea atque fugit.', 'Alias vitae ipsum similique sunt reprehenderit. Ipsum quam tempore incidunt voluptatem. Optio sit et id debitis qui rerum provident. Eos est debitis debitis est odit iusto iusto cumque.', '2023-08-03 16:07:41', '2023-08-03 16:07:41'),
(7, 'Qui non et.', 'Animi quis porro suscipit. Quos animi corrupti eos dolor. Asperiores vero dolor rerum ipsa adipisci.', '2023-08-03 16:07:41', '2023-08-03 16:07:41'),
(8, 'Voluptas similique et.', 'Et ullam eligendi eaque sit. Iusto hic dolores dolorum assumenda. Aut expedita tempora sunt officiis vitae autem quae.', '2023-08-03 16:07:41', '2023-08-03 16:07:41'),
(9, 'Ea iusto ipsa.', 'Et minus facilis natus quidem et ut. Ad fuga tempore explicabo necessitatibus. A aut maiores impedit quidem vel. Corporis quisquam qui dolore ullam est.', '2023-08-03 16:07:41', '2023-08-03 16:07:41'),
(10, 'Amet possimus dignissimos quod.', 'Modi nihil earum enim molestiae nihil libero enim. Quos cupiditate ut temporibus provident saepe. Quia voluptas quibusdam corrupti pariatur laborum dolor odio qui. Maiores pariatur est ipsum natus tempora. Quis ea magnam temporibus dolores quibusdam.', '2023-08-03 16:07:41', '2023-08-03 16:07:41'),
(11, 'Laravel 10', 'the latest version of laravel in 2023', '2023-08-04 00:03:58', '2023-08-04 00:03:58'),
(12, 'Sint eum consequat', 'Ea impedit veniam', '2023-08-04 00:04:42', '2023-08-04 00:04:42'),
(13, 'Id quaerat architec', 'Cum eos amet ut ill', '2023-08-04 00:05:32', '2023-08-04 00:05:32'),
(14, 'post 458', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available', '2023-08-04 00:06:16', '2023-08-04 00:06:16'),
(15, 'Ad quae in amet vol', 'Deleniti veritatis e', '2023-08-04 00:09:16', '2023-08-04 00:09:16'),
(16, 'Etgewrt', 'rtrtretre', '2023-08-04 00:13:52', '2023-08-04 00:13:52'),
(17, 'write post', 'write post with write permission', '2023-08-04 01:07:27', '2023-08-04 01:07:27');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'user', '2023-08-03 03:15:23', '2023-08-03 12:05:04'),
(2, 'admin', '2023-08-03 03:15:23', '2023-08-03 03:15:23'),
(3, 'writer', '2023-08-03 03:55:50', '2023-08-03 03:55:50'),
(6, 'author', '2023-08-03 23:13:22', '2023-08-03 23:13:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', 2, NULL, '$2y$10$BeeDriSfEcr7htEYRylujecyfCfidASenbMQBdKkGlTFrFN1kjFbS', NULL, '2023-08-03 03:15:23', '2023-08-03 03:15:23'),
(2, 'test', 'test@test.com', 3, NULL, '$2y$10$BeeDriSfEcr7htEYRylujecyfCfidASenbMQBdKkGlTFrFN1kjFbS', NULL, '2023-08-03 03:21:36', '2023-08-03 15:51:22'),
(4, 'author', 'author@author.com', 6, NULL, '$2y$10$UpodS6txwsfl.3CViZtnGOnL3zaJVQTW7d8WFd5I6HmbkXvAyHl6W', NULL, '2023-08-03 23:11:56', '2023-08-03 23:13:48');

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `permission_role_permission_id_foreign` (`permission_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
