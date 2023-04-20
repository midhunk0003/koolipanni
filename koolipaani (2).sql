-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2023 at 01:03 PM
-- Server version: 10.4.18-MariaDB-log
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koolipaani`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `bannerimg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `status`, `category_image`, `created_at`, `updated_at`, `deleted_at`, `bannerimg`) VALUES
(15, 'painters', '0', 'category_image/6389cfd6112ff.png', '2022-12-02 04:43:42', '2022-12-13 00:51:20', NULL, 'bannerimg/639819e03ebf7.jpg'),
(16, 'truck crane pickers', '0', 'category_image/6389cff5e92b4.jpg', '2022-12-02 04:44:13', '2022-12-13 01:13:54', NULL, 'bannerimg/63981f2a2f021.jpg'),
(17, 'lorry loader', '0', 'category_image/6389d0164f23e.jpg', '2022-12-02 04:44:46', '2022-12-13 01:16:52', NULL, 'bannerimg/63981fdc7190c.jpg'),
(18, 'plumbers', '0', 'category_image/6389d04aa72bb.jpg', '2022-12-02 04:45:12', '2022-12-13 01:17:44', NULL, 'bannerimg/63982010aef39.jpg'),
(19, 'electricians', '0', 'category_image/6389d06d3f627.jpg', '2022-12-02 04:46:13', '2022-12-13 00:58:35', NULL, 'bannerimg/63981b93c81cb.jpg'),
(20, 'Brick workers', '0', 'category_image/6389d08696a5f.jpg', '2022-12-02 04:46:38', '2022-12-13 00:53:19', NULL, 'bannerimg/63981a57d4f89.jpg'),
(21, 'AC mechanic', '0', 'category_image/6389d0a4236f5.jpg', '2022-12-02 04:47:08', '2022-12-19 01:25:06', NULL, 'bannerimg/63981a0d66cbe.jpg'),
(22, 'gardener', '0', 'category_image/6389d0bd5661b.jpg', '2022-12-02 04:47:33', '2022-12-13 01:03:20', NULL, 'bannerimg/63981cb020509.jpg'),
(23, 'welders', '0', 'category_image/6389d0e05a4c9.jpg', '2022-12-02 04:48:08', '2022-12-13 01:32:05', NULL, 'bannerimg/6398236dafad9.jpg'),
(24, 'tiles workers', '0', 'category_image/6389d1030e76b.jpg', '2022-12-02 04:48:43', '2022-12-13 01:26:25', NULL, 'bannerimg/6398221902a0d.jpg'),
(25, 'home nurse', '0', 'category_image/6389d1254137d.jpg', '2022-12-02 04:49:17', '2022-12-13 01:04:21', NULL, 'bannerimg/63981ced63810.jpg'),
(26, 'coconut tree climber', '0', 'category_image/6389d1483e72c.jpg', '2022-12-02 04:49:52', '2022-12-13 02:07:40', NULL, 'bannerimg/63982bc495590.jpg'),
(27, 'septic tank cleaning', '0', 'category_image/6389d164b63dc.jpg', '2022-12-02 04:50:20', '2022-12-13 01:24:14', NULL, 'bannerimg/6398219629ca2.jpg'),
(28, 'pest control', '0', 'category_image/6389d195ddbcc.jpg', '2022-12-02 04:51:09', '2022-12-13 01:15:12', NULL, 'bannerimg/63981f78b15fd.jpg'),
(29, 'sanitization', '0', 'category_image/6389d1b307a79.jpg', '2022-12-02 04:51:39', '2022-12-13 01:22:06', NULL, 'bannerimg/6398211687ac5.jpg'),
(30, 'security', '0', 'category_image/6389d1c8b4f22.jpg', '2022-12-02 04:52:00', '2022-12-13 01:22:48', NULL, 'bannerimg/6398214092f5e.jpg'),
(31, 'security camera technician', '0', 'category_image/6389d1e21bdcc.jpg', '2022-12-02 04:52:26', '2022-12-13 01:23:29', NULL, 'bannerimg/639821699039b.jpg'),
(32, 'site house workers', '0', 'category_image/6389d206b71dd.jpg', '2022-12-02 04:53:02', '2022-12-13 01:25:47', NULL, 'bannerimg/639821f37f9d4.webp'),
(33, 'tv technicians', '0', 'category_image/6389d26682b89.jpg', '2022-12-02 04:54:38', '2022-12-13 01:29:32', NULL, 'bannerimg/639822d420132.jfif'),
(34, 'refrigerator technician', '0', 'category_image/6389d2b1cbbe0.jpg', '2022-12-02 04:55:53', '2022-12-13 01:18:43', NULL, 'bannerimg/6398204b66a24.jfif'),
(35, 'washing machine technician', '0', 'category_image/6389d2dc23828.jpg', '2022-12-02 04:56:36', '2022-12-13 01:30:11', NULL, 'bannerimg/639822fbdbd8e.jpg'),
(36, 'interlock workers', '0', 'category_image/6389d313839ec.jpg', '2022-12-02 04:57:31', '2022-12-13 01:09:26', NULL, 'bannerimg/63981e1e4c8b2.jpg'),
(37, 'laptop technician', '0', 'category_image/6389d36e0391e.jpg', '2022-12-02 04:59:02', '2022-12-13 01:10:18', NULL, 'bannerimg/63981e52db055.jpg'),
(38, 'carpenter', '0', 'category_image/63902c7db57d9.png', '2022-12-07 00:32:37', '2022-12-13 00:54:32', NULL, 'bannerimg/63981aa010a8b.jpg'),
(39, 'drivers', '0', 'category_image/63982a77b489d.png', '2022-12-13 02:02:07', '2022-12-13 02:02:07', NULL, 'bannerimg/63982a77b7bd2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `commentsandratings`
--

CREATE TABLE `commentsandratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `worker_details_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `comments` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `commentsandratings`
--

INSERT INTO `commentsandratings` (`id`, `worker_details_id`, `user_name`, `user_id`, `comments`, `rating`, `created_at`, `updated_at`, `deleted_at`) VALUES
(48, 69, 'midhun', 41, 'dada', '2', '2023-02-07 03:41:54', '2023-02-07 03:41:54', NULL),
(49, 66, 'midhun', 41, 'adasdas', '5', '2023-02-07 03:42:07', '2023-02-07 03:42:07', NULL),
(50, 67, 'midhun', 41, 'adsasd', '1', '2023-02-07 03:42:16', '2023-02-07 03:42:16', NULL),
(51, 68, 'midhun', 41, 'dadadada', '3', '2023-02-07 03:42:27', '2023-02-07 03:42:27', NULL);

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
-- Table structure for table `like`
--

CREATE TABLE `like` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `worker_details_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `likes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `like`
--

INSERT INTO `like` (`id`, `category_id`, `worker_details_id`, `user_id`, `status`, `likes`, `created_at`, `updated_at`) VALUES
(34, 21, 67, '41', '0', '1', '2023-02-07 03:48:19', '2023-02-07 03:48:19'),
(35, 21, 66, '41', '0', '1', '2023-02-07 04:25:21', '2023-02-07 04:25:21');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `logo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'category_image/638dd3fcf40fa.png', '2022-12-05 05:50:29', '2022-12-05 05:50:29', NULL);

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
(5, '2022_11_14_071858_create_category', 2),
(7, '2022_11_14_095814_create_worker_details', 3),
(8, '2022_11_15_100406_create_workerdocument', 4),
(9, '2022_11_15_101956_create_workerdesigination_table', 4),
(10, '2022_11_15_115230_create_state_table', 5),
(11, '2022_11_21_044209_alter_worker_details_add_country', 6),
(15, '2022_12_03_055242_create_subcategorymodel_table', 7),
(16, '2022_12_03_055624_alter_subcategorymodel_add_image', 7),
(17, '2022_12_03_063600_alter_subcategorymodel_add_details', 7),
(19, '2022_12_03_075029_create_workincluded', 8),
(20, '2022_12_03_103518_alter_workiincluded_add_subcat_id', 8),
(21, '2022_12_05_102254_create_logo_table', 9),
(22, '2022_12_07_054822_alter_subcategorymodel_add_duration', 10),
(23, '2022_12_07_061142_alter_subcategorymodel_add_starting_price', 11),
(24, '2022_12_13_061012_alter_category_add_mainimg', 12),
(25, '2022_12_29_100911_alter_users_add_location', 13),
(26, '2023_01_04_055640_alter_worker_details_add_userid', 14),
(27, '2023_01_04_105226_create_works_images', 15),
(28, '2023_01_04_105824_alter_workers_images_add_field', 16),
(29, '2023_01_05_104609_alter_worker_details_add_totime', 17),
(30, '2023_01_11_112223_create_commentsandratings', 18),
(31, '2023_01_11_114542_alter_commentsandratings_add_username', 19),
(32, '2023_01_14_070015_create_wishlist', 20),
(34, '2023_01_18_053447_create_viewsandlikes_table', 21),
(35, '2023_01_18_064531_create_like_table', 22),
(36, '2023_01_23_053858_create_userprofileimage_table', 23),
(37, '2023_01_24_090410_alter_worker_details_add_workerprofileimg', 24),
(38, '2022_12_29_100743_alter_users_add_location', 25),
(40, '2023_02_10_103747_create_recent_viewed_worker', 26);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 41, 'myapp', 'ac4fa7e33fb6e39df2134eb77968411431060a84767945896b898e4f4b369c55', '[\"*\"]', NULL, NULL, '2023-02-24 05:19:15', '2023-02-24 05:19:15'),
(2, 'App\\Models\\User', 41, 'myapp', '2bfdfca5d6d6d80dda355074fe65ea5e9198a74b3b35c224a363edfc9976a03c', '[\"*\"]', NULL, NULL, '2023-02-24 05:19:35', '2023-02-24 05:19:35'),
(3, 'App\\Models\\User', 41, 'myapp', '4165c52cc7bdbf9dafb4fcaf1cd62caedec1466a5ddc9dc201bbb630352d23b5', '[\"*\"]', NULL, NULL, '2023-02-24 05:19:41', '2023-02-24 05:19:41'),
(4, 'App\\Models\\User', 41, 'myapp', '9ee0a123147c9082ffadbd77a3a5896b7fea90ed573169f4ab269f88497c7ac1', '[\"*\"]', NULL, NULL, '2023-02-24 05:19:45', '2023-02-24 05:19:45'),
(5, 'App\\Models\\User', 41, 'myapp', 'a2fe129a9e2ec32d18c9ed0f70f63077975c6cb8f11328ff97d33b10caafbc13', '[\"*\"]', NULL, NULL, '2023-02-24 05:21:16', '2023-02-24 05:21:16'),
(6, 'App\\Models\\User', 41, 'myapp', 'a4a8740e94c4bdc811813531c2336e5f172e15457d50a8d223c5eeef121abdf5', '[\"*\"]', NULL, NULL, '2023-02-24 05:22:26', '2023-02-24 05:22:26'),
(7, 'App\\Models\\User', 41, 'myapp', '62d5fcad8ff6c8d16bb51bfe37cd422b91746366dc268b539e43068445cd31d5', '[\"*\"]', NULL, NULL, '2023-02-24 05:22:54', '2023-02-24 05:22:54'),
(8, 'App\\Models\\User', 41, 'myapp', '12790e8db8ac51404a2a6112218ecf1659b7bc57eb0925642b9b3b3529089b3f', '[\"*\"]', NULL, NULL, '2023-02-24 05:24:56', '2023-02-24 05:24:56'),
(9, 'App\\Models\\User', 41, 'myapp', '39683ea9685ce56cc2dc452281039a6e28fdc15882e027ea52f6be649ce98a83', '[\"*\"]', NULL, NULL, '2023-02-26 23:59:18', '2023-02-26 23:59:18'),
(10, 'App\\Models\\User', 41, 'myapp', '94d2aa844610687cdd8c08318cc68d2f32494abb89d2a62a5cae05c601f60a64', '[\"*\"]', NULL, NULL, '2023-02-27 02:25:06', '2023-02-27 02:25:06'),
(11, 'App\\Models\\User', 41, 'myapp', 'c1d329038be7fd82d76b65dec69b3674b259fafcef90f385a8a52eee43320b08', '[\"*\"]', NULL, NULL, '2023-02-28 00:51:25', '2023-02-28 00:51:25'),
(12, 'App\\Models\\User', 41, 'myapp', '37f4c75a825990eb1560a4316915dda8fa7addbd0ccb19104fe19490f0701145', '[\"*\"]', '2023-03-02 05:17:08', NULL, '2023-02-28 00:53:21', '2023-03-02 05:17:08');

-- --------------------------------------------------------

--
-- Table structure for table `recent_viewed_worker`
--

CREATE TABLE `recent_viewed_worker` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `worker_details_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recent_viewed_worker`
--

INSERT INTO `recent_viewed_worker` (`id`, `category_id`, `worker_details_id`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(9, 21, 66, 41, '2023-02-11 04:42:50', '2023-02-11 04:42:50', NULL),
(10, 21, 67, 41, '2023-02-11 04:43:15', '2023-02-11 04:43:15', NULL),
(11, 21, 68, 41, '2023-02-11 04:45:30', '2023-02-11 04:45:30', NULL),
(13, 21, 70, 41, '2023-02-11 05:26:29', '2023-02-11 05:26:29', NULL),
(17, 21, 69, 41, '2023-02-22 04:43:23', '2023-02-22 04:43:23', NULL),
(18, NULL, NULL, 41, '2023-02-28 00:57:35', '2023-02-28 00:57:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `state`, `created_at`, `updated_at`) VALUES
(43, 'Andhra Pradesh', NULL, NULL),
(44, 'Arunachal Pradesh', NULL, NULL),
(45, 'Assam', NULL, NULL),
(46, 'Bihar', NULL, NULL),
(47, 'Chhattisgarh', NULL, NULL),
(48, 'Goa', NULL, NULL),
(49, 'Gujarat', NULL, NULL),
(50, 'Haryana', NULL, NULL),
(51, 'Himachal Pradesh', NULL, NULL),
(52, 'Jammu and Kashmir', NULL, NULL),
(53, 'Jharkhand', NULL, NULL),
(54, 'Karnataka', NULL, NULL),
(55, 'Kerala', NULL, NULL),
(56, 'Madhya Pradesh', NULL, NULL),
(57, 'Maharashtra', NULL, NULL),
(58, 'Manipur', NULL, NULL),
(59, 'Meghalaya', NULL, NULL),
(60, 'Mizoram', NULL, NULL),
(61, 'Nagaland', NULL, NULL),
(62, 'Odisha', NULL, NULL),
(63, 'Punjab', NULL, NULL),
(64, 'Rajasthan', NULL, NULL),
(65, 'Sikkim', NULL, NULL),
(66, 'Tamil Nadu', NULL, NULL),
(67, 'Telangana', NULL, NULL),
(68, 'Tripura', NULL, NULL),
(69, 'Uttarakhand', NULL, NULL),
(70, 'Uttar Pradesh', NULL, NULL),
(71, 'West Bengal', NULL, NULL),
(72, 'Andaman and Nicobar Islands', NULL, NULL),
(73, 'Chandigarh', NULL, NULL),
(74, 'Dadra and Nagar Haveli', NULL, NULL),
(75, 'Daman and Diu', NULL, NULL),
(76, 'Delhi', NULL, NULL),
(77, 'Lakshadweep', NULL, NULL),
(78, 'Puducherry', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategorymodel`
--

CREATE TABLE `subcategorymodel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subcategory` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `turnaround_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subcat_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `included_details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `general_starting_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `starting_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategorymodel`
--

INSERT INTO `subcategorymodel` (`id`, `category_id`, `subcategory`, `image`, `duration`, `status`, `turnaround_time`, `subcat_description`, `work_details`, `included_details`, `general_starting_price`, `starting_price`, `created_at`, `updated_at`, `deleted_at`) VALUES
(8, 38, 'General carpentry work', 'subcategory_image/63902f96a256c.png', 'Same day service', '0', '2 hours', 'Are you looking to do some interior changes in your home? Do you want to fix that squeaky door or window? Hire the best carpenters near you to carry out custom home improvements, custom cabinetry, repair works and more. Please note: Convenience fee/ visiting charge of Rs 199 will be charged if no job is performed after the Pro visits the customer site.', 'Are you looking to do some interior changes in your home? Do you want to fix that squeaky door or window? Hire the best carpenters near you to carry out custom home improvements, custom cabinetry, repair works and more. Please note: Convenience fee/ visiting charge of Rs 199 will be charged if no job is performed after the Pro visits the customer site.', NULL, 'Work based', '199', '2022-12-07 00:45:50', '2022-12-07 00:45:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userprofileimage`
--

CREATE TABLE `userprofileimage` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` bigint(20) UNSIGNED NOT NULL,
  `profileimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userprofileimage`
--

INSERT INTO `userprofileimage` (`id`, `userid`, `profileimage`, `created_at`, `updated_at`, `deleted_at`) VALUES
(20, 45, 'profileimage/63ce75d814479.jpeg', '2023-01-23 06:20:26', '2023-01-23 06:26:08', NULL),
(28, 41, 'profileimage/63e4b8ca85193.png', '2023-02-09 03:41:23', '2023-02-09 03:41:38', NULL),
(29, 51, 'profileimage/63f5e4aa235a8.png', '2023-02-22 04:15:15', '2023-02-22 04:17:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loungnitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userregisternumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phonenumber`, `email_verified_at`, `password`, `remember_token`, `pincode`, `state`, `city`, `location`, `country`, `latitude`, `loungnitude`, `userregisternumber`, `updated_at`, `created_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, NULL, '$2y$10$8ZFJDRVCYfeUZSlbYf5zs.MdUqt/O.OZ8WGqPQcdysRR2tqJohG.m', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-14 01:44:44', NULL),
(41, 'midhun', 'midhun@gmail.com', NULL, NULL, '$2y$10$9TIr2SRJ1dasT7HytgqzdO0aaIwBeMVqrlwdVGUwxLbOGtNYFHkzW', NULL, NULL, 'KL', 'Kozhikode', 'Karuvissery, Kozhikode, Kerala, India', 'India', '11.2983844', '75.78511209999999', 'tLRM6hMw', '2022-12-30 03:50:50', '2022-12-30 03:50:50'),
(42, 'midhun', 'abaya', NULL, NULL, '$2y$10$FNHxNDse.n2JzNUf1zFFJu/fDGfgjKaAvGDhvatLv5OVdEHEbSqH2', NULL, NULL, 'KL', 'Aluva', 'Aluva, Kerala, India', 'India', '10.1003709', '76.35703819999999', 'HlnKitA8', '2023-01-11 01:23:01', '2023-01-11 01:23:01'),
(43, 'midhun', 'amina@gmail.com', NULL, NULL, '$2y$10$4rN/jY.xBOXv5D9v0WAwiO4YfzocAJvpnAhopSxIfHhu9Q2m843TC', NULL, NULL, 'KL', 'Sabarimala', 'Sabarimala, Kerala, India', 'India', '9.4320761', '77.08200149999999', '0YHKu1mK', '2023-01-11 01:24:05', '2023-01-11 01:24:05'),
(44, 'midhun', 'rinshina', NULL, NULL, '$2y$10$15bDDm3O5LIpj1BKUTQKOeT08QK5mXtLvk0oQptv.4LZANylHZosa', NULL, NULL, 'KL', 'Alappuzha', 'Alappuzha, Kerala, India', 'India', '9.498066699999999', '76.3388484', 'bNnOiU8i', '2023-01-11 01:24:56', '2023-01-11 01:24:56'),
(45, 'mk', 'midhun11@gmail.com', NULL, NULL, '$2y$10$oEtjLpeWMeddEqzpUPUXPOD4D5gtldp7u.wccWR7Fb6HP3/XbGWnW', NULL, NULL, 'KL', 'Alappuzha', 'Alappuzha, Kerala, India', 'India', '9.498066699999999', '76.3388484', '2Z6X1H22', '2023-01-13 02:00:37', '2023-01-13 02:00:37'),
(50, 'jackap', 'jackap@gmail.com', NULL, NULL, '$2y$10$0OpMSQbUI8jUbYotlxtaluB222rB.tCVJbkFlM1L18tZvRxSW.t5W', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OhNFE7N2', '2023-02-22 01:55:11', '2023-02-22 01:55:11'),
(51, 'GGHDH', 'amina.promiza@gmail.com', NULL, NULL, '$2y$10$DxWapnq8OEiiBBnARTz7iOLyoCuApk68J2a1pn4oMiXIgXdHz9sYi', NULL, NULL, NULL, NULL, 'CALICUT', NULL, NULL, NULL, 'eeZ9V0ff', '2023-02-22 04:14:58', '2023-02-22 04:14:58'),
(52, 'midhunMidhun k', 'midhunk', NULL, NULL, '$2y$10$WAC22TMmcQbfAaI.gqp8GeiuaOnW13QvGhiydnIg584v6/GpM/7Gy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'gX35hh1G', '2023-04-20 05:16:29', '2023-04-20 05:16:29');

-- --------------------------------------------------------

--
-- Table structure for table `viewsandlikes`
--

CREATE TABLE `viewsandlikes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `worker_details_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `views` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `viewsandlikes`
--

INSERT INTO `viewsandlikes` (`id`, `category_id`, `worker_details_id`, `user_id`, `status`, `views`, `created_at`, `updated_at`) VALUES
(92, 21, 69, '41', '0', '1', '2023-02-07 03:41:50', '2023-02-07 03:41:50'),
(93, 21, 66, '41', '0', '1', '2023-02-07 03:42:01', '2023-02-07 03:42:01'),
(94, 21, 67, '41', '0', '1', '2023-02-07 03:42:12', '2023-02-07 03:42:12'),
(95, 21, 68, '41', '0', '1', '2023-02-07 03:42:22', '2023-02-07 03:42:22'),
(96, 21, 67, '41', '0', '1', '2023-02-07 03:48:42', '2023-02-07 03:48:42'),
(97, 21, 66, '41', '0', '1', '2023-02-07 03:49:36', '2023-02-07 03:49:36'),
(98, 21, 67, '41', '0', '1', '2023-02-09 05:32:56', '2023-02-09 05:32:56'),
(99, 21, 66, '41', '0', '1', '2023-02-10 23:35:52', '2023-02-10 23:35:52'),
(100, 21, 66, '41', '0', '1', '2023-02-10 23:36:27', '2023-02-10 23:36:27'),
(101, 21, 66, '41', '0', '1', '2023-02-10 23:37:27', '2023-02-10 23:37:27'),
(102, 21, 66, '41', '0', '1', '2023-02-10 23:44:38', '2023-02-10 23:44:38'),
(103, 21, 66, '41', '0', '1', '2023-02-10 23:44:50', '2023-02-10 23:44:50'),
(104, 21, 66, '41', '0', '1', '2023-02-10 23:45:43', '2023-02-10 23:45:43'),
(105, 21, 66, '41', '0', '1', '2023-02-10 23:45:55', '2023-02-10 23:45:55'),
(106, 21, 66, '41', '0', '1', '2023-02-10 23:46:41', '2023-02-10 23:46:41'),
(107, 21, 66, '41', '0', '1', '2023-02-10 23:47:14', '2023-02-10 23:47:14'),
(108, 21, 66, '41', '0', '1', '2023-02-10 23:47:23', '2023-02-10 23:47:23'),
(109, 21, 66, '41', '0', '1', '2023-02-10 23:47:37', '2023-02-10 23:47:37'),
(110, 21, 66, '41', '0', '1', '2023-02-10 23:56:23', '2023-02-10 23:56:23'),
(111, 21, 66, '41', '0', '1', '2023-02-11 00:06:00', '2023-02-11 00:06:00'),
(112, 21, 66, '41', '0', '1', '2023-02-11 00:06:26', '2023-02-11 00:06:26'),
(113, 21, 66, '41', '0', '1', '2023-02-11 00:06:54', '2023-02-11 00:06:54'),
(114, 21, 66, '41', '0', '1', '2023-02-11 00:08:01', '2023-02-11 00:08:01'),
(115, 21, 66, '41', '0', '1', '2023-02-11 00:08:01', '2023-02-11 00:08:01'),
(116, 21, 66, '41', '0', '1', '2023-02-11 00:13:24', '2023-02-11 00:13:24'),
(117, 21, 66, '41', '0', '1', '2023-02-11 00:13:25', '2023-02-11 00:13:25'),
(118, 21, 66, '41', '0', '1', '2023-02-11 00:15:21', '2023-02-11 00:15:21'),
(119, 21, 66, '41', '0', '1', '2023-02-11 00:15:21', '2023-02-11 00:15:21'),
(120, 21, 67, '41', '0', '1', '2023-02-11 00:15:36', '2023-02-11 00:15:36'),
(121, 21, 67, '41', '0', '1', '2023-02-11 00:15:36', '2023-02-11 00:15:36'),
(122, 21, 66, '41', '0', '1', '2023-02-11 03:38:16', '2023-02-11 03:38:16'),
(123, 21, 67, '41', '0', '1', '2023-02-11 03:42:21', '2023-02-11 03:42:21'),
(124, 21, 68, '41', '0', '1', '2023-02-11 03:44:28', '2023-02-11 03:44:28'),
(125, 21, 66, '45', '0', '1', '2023-02-11 03:44:57', '2023-02-11 03:44:57'),
(126, 21, 70, '45', '0', '1', '2023-02-11 03:46:14', '2023-02-11 03:46:14'),
(127, 21, 66, '41', '0', '1', '2023-02-11 04:00:21', '2023-02-11 04:00:21'),
(128, 21, 66, '41', '0', '1', '2023-02-11 04:20:11', '2023-02-11 04:20:11'),
(129, 21, 66, '41', '0', '1', '2023-02-11 04:20:34', '2023-02-11 04:20:34'),
(130, 21, 66, '41', '0', '1', '2023-02-11 04:21:01', '2023-02-11 04:21:01'),
(131, 21, 66, '41', '0', '1', '2023-02-11 04:21:30', '2023-02-11 04:21:30'),
(132, 21, 66, '41', '0', '1', '2023-02-11 04:23:32', '2023-02-11 04:23:32'),
(133, 21, 67, '41', '0', '1', '2023-02-11 04:23:37', '2023-02-11 04:23:37'),
(134, 21, 66, '41', '0', '1', '2023-02-11 04:25:03', '2023-02-11 04:25:03'),
(135, 21, 67, '41', '0', '1', '2023-02-11 04:25:08', '2023-02-11 04:25:08'),
(136, 21, 66, '41', '0', '1', '2023-02-11 04:25:26', '2023-02-11 04:25:26'),
(137, 21, 66, '41', '0', '1', '2023-02-11 04:26:36', '2023-02-11 04:26:36'),
(138, 21, 66, '41', '0', '1', '2023-02-11 04:26:54', '2023-02-11 04:26:54'),
(139, 21, 66, '41', '0', '1', '2023-02-11 04:27:14', '2023-02-11 04:27:14'),
(140, 21, 66, '41', '0', '1', '2023-02-11 04:27:55', '2023-02-11 04:27:55'),
(141, 21, 66, '41', '0', '1', '2023-02-11 04:29:14', '2023-02-11 04:29:14'),
(142, 21, 66, '41', '0', '1', '2023-02-11 04:30:15', '2023-02-11 04:30:15'),
(143, 21, 66, '41', '0', '1', '2023-02-11 04:30:37', '2023-02-11 04:30:37'),
(144, 21, 66, '41', '0', '1', '2023-02-11 04:32:19', '2023-02-11 04:32:19'),
(145, 21, 66, '41', '0', '1', '2023-02-11 04:33:04', '2023-02-11 04:33:04'),
(146, 21, 66, '41', '0', '1', '2023-02-11 04:33:24', '2023-02-11 04:33:24'),
(147, 21, 66, '41', '0', '1', '2023-02-11 04:35:10', '2023-02-11 04:35:10'),
(148, 21, 66, '41', '0', '1', '2023-02-11 04:35:48', '2023-02-11 04:35:48'),
(149, 21, 66, '41', '0', '1', '2023-02-11 04:38:07', '2023-02-11 04:38:07'),
(150, 21, 66, '41', '0', '1', '2023-02-11 04:38:22', '2023-02-11 04:38:22'),
(151, 21, 66, '41', '0', '1', '2023-02-11 04:40:07', '2023-02-11 04:40:07'),
(152, 21, 66, '41', '0', '1', '2023-02-11 04:41:07', '2023-02-11 04:41:07'),
(153, 21, 66, '41', '0', '1', '2023-02-11 04:42:50', '2023-02-11 04:42:50'),
(154, 21, 66, '41', '0', '1', '2023-02-11 04:43:03', '2023-02-11 04:43:03'),
(155, 21, 67, '41', '0', '1', '2023-02-11 04:43:15', '2023-02-11 04:43:15'),
(156, 21, 67, '41', '0', '1', '2023-02-11 04:44:21', '2023-02-11 04:44:21'),
(157, 21, 68, '41', '0', '1', '2023-02-11 04:44:31', '2023-02-11 04:44:31'),
(158, 21, 70, '41', '0', '1', '2023-02-11 04:44:58', '2023-02-11 04:44:58'),
(159, 21, 68, '41', '0', '1', '2023-02-11 04:45:29', '2023-02-11 04:45:29'),
(160, 21, 66, '41', '0', '1', '2023-02-11 04:55:46', '2023-02-11 04:55:46'),
(161, 21, 68, '41', '0', '1', '2023-02-11 04:56:02', '2023-02-11 04:56:02'),
(162, 21, 70, '41', '0', '1', '2023-02-11 04:56:11', '2023-02-11 04:56:11'),
(163, 21, 68, '41', '0', '1', '2023-02-11 04:56:32', '2023-02-11 04:56:32'),
(164, 21, 66, '45', '0', '1', '2023-02-11 05:00:10', '2023-02-11 05:00:10'),
(165, 21, 67, '45', '0', '1', '2023-02-11 05:00:23', '2023-02-11 05:00:23'),
(166, 21, 66, '45', '0', '1', '2023-02-11 05:23:37', '2023-02-11 05:23:37'),
(167, 21, 66, '45', '0', '1', '2023-02-11 05:25:24', '2023-02-11 05:25:24'),
(168, 21, 66, '45', '0', '1', '2023-02-11 05:25:54', '2023-02-11 05:25:54'),
(169, 21, 70, '41', '0', '1', '2023-02-11 05:26:29', '2023-02-11 05:26:29'),
(170, 21, 67, '45', '0', '1', '2023-02-11 05:26:58', '2023-02-11 05:26:58'),
(171, 21, 67, '45', '0', '1', '2023-02-11 05:28:04', '2023-02-11 05:28:04'),
(172, 21, 67, '45', '0', '1', '2023-02-11 05:28:46', '2023-02-11 05:28:46'),
(173, 21, 66, '45', '0', '1', '2023-02-11 05:28:55', '2023-02-11 05:28:55'),
(174, 21, 70, '45', '0', '1', '2023-02-11 06:10:37', '2023-02-11 06:10:37'),
(175, 21, 66, '45', '0', '1', '2023-02-13 04:39:23', '2023-02-13 04:39:23'),
(176, 21, 70, '45', '0', '1', '2023-02-13 04:39:31', '2023-02-13 04:39:31'),
(177, 21, 70, '41', '0', '1', '2023-02-22 04:43:09', '2023-02-22 04:43:09'),
(178, 21, 69, '41', '0', '1', '2023-02-22 04:43:22', '2023-02-22 04:43:22'),
(179, 21, 66, '41', '0', '1', '2023-02-22 04:53:58', '2023-02-22 04:53:58'),
(180, 21, 66, '41', '0', '1', '2023-02-22 05:06:46', '2023-02-22 05:06:46'),
(181, 21, 67, '41', '0', '1', '2023-02-23 05:13:30', '2023-02-23 05:13:30'),
(182, 21, 66, '41', '0', '1', '2023-02-25 01:04:27', '2023-02-25 01:04:27'),
(183, 21, 68, '41', '0', '1', '2023-02-25 01:10:47', '2023-02-25 01:10:47'),
(184, 21, 68, '41', '0', '1', '2023-02-25 01:10:49', '2023-02-25 01:10:49'),
(185, NULL, NULL, NULL, '0', '1', '2023-02-28 00:56:09', '2023-02-28 00:56:09'),
(186, NULL, NULL, '41', '0', '1', '2023-02-28 00:57:35', '2023-02-28 00:57:35'),
(187, NULL, NULL, '41', '0', '1', '2023-02-28 00:58:00', '2023-02-28 00:58:00'),
(188, NULL, NULL, '41', '0', '1', '2023-03-01 04:56:52', '2023-03-01 04:56:52'),
(189, NULL, NULL, '41', '0', '1', '2023-03-02 05:17:08', '2023-03-02 05:17:08');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `worker_details_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `workerdesigination`
--

CREATE TABLE `workerdesigination` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `worker_details_id` bigint(20) UNSIGNED DEFAULT NULL,
  `workerdocument_id` bigint(20) UNSIGNED DEFAULT NULL,
  `worker_charge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desiginationdetails` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workerdesigination`
--

INSERT INTO `workerdesigination` (`id`, `category_id`, `worker_details_id`, `workerdocument_id`, `worker_charge`, `price`, `desiginationdetails`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(50, 21, 66, 59, 'perhour', '100', 'asgfahsfafsghafhsgafgh', '0', '2023-02-07 03:36:17', '2023-02-07 03:36:17', NULL),
(51, 22, 67, 60, 'perhour', '100', 'sadasdasdsad\r\nsadas\r\ndsad\r\nasd\r\nsa\r\nd\r\nasd', '0', '2023-02-07 03:37:59', '2023-02-07 03:37:59', NULL),
(52, 24, 68, 61, 'perhour', '100', 'sdasdasdasdsad\r\nasd\r\na\r\nsd\r\nsa\r\nd\r\nsa\r\nd', '0', '2023-02-07 03:39:31', '2023-02-07 03:39:31', NULL),
(53, 26, 69, 62, 'perhour', '100', 'sfafzfasfsf\r\nasfasf\r\nas\r\nfa\r\nsf', '0', '2023-02-07 03:41:41', '2023-02-07 03:41:41', NULL),
(54, 38, 70, 63, 'perhour', '122', 'dasdasds', '0', '2023-02-07 03:45:17', '2023-02-07 03:45:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `workerdocument`
--

CREATE TABLE `workerdocument` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `worker_details_id` bigint(20) UNSIGNED DEFAULT NULL,
  `aadhar_frount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aadhar_back` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desigination_doc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workerdocument`
--

INSERT INTO `workerdocument` (`id`, `category_id`, `worker_details_id`, `aadhar_frount`, `aadhar_back`, `desigination_doc`, `created_at`, `updated_at`, `deleted_at`) VALUES
(59, 21, 66, 'aadharfront/63e2148927e94.jpeg', 'aadharback/63e2148928391.jpeg', 'desiginationdoc/63e214892db61.jpeg', '2023-02-07 03:36:17', '2023-02-07 03:36:17', NULL),
(60, 22, 67, 'aadharfront/63e214ef106c6.jpeg', 'aadharback/63e214ef168cf.jpeg', 'desiginationdoc/63e214ef16c9a.jpeg', '2023-02-07 03:37:59', '2023-02-07 03:37:59', NULL),
(61, 24, 68, 'aadharfront/63e2154b4655c.jpeg', 'aadharback/63e2154b47039.jpeg', 'desiginationdoc/63e2154b47a34.jpeg', '2023-02-07 03:39:31', '2023-02-07 03:39:31', NULL),
(62, 26, 69, 'aadharfront/63e215cdbc401.jpeg', 'aadharback/63e215cdbc7d0.jpeg', 'desiginationdoc/63e215cdbcad1.jpeg', '2023-02-07 03:41:41', '2023-02-07 03:41:41', NULL),
(63, 38, 70, 'aadharfront/63e216a582270.jpeg', 'aadharback/63e216a582554.jpeg', 'desiginationdoc/63e216a582914.jpeg', '2023-02-07 03:45:17', '2023-02-07 03:45:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `worker_details`
--

CREATE TABLE `worker_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workerprofileimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `register_date` date DEFAULT NULL,
  `todateandtime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `register_enroll_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `loungnitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `worker_details`
--

INSERT INTO `worker_details` (`id`, `category_id`, `user_id`, `fname`, `lname`, `workerprofileimage`, `email`, `phone`, `phone2`, `password`, `status`, `register_date`, `todateandtime`, `register_enroll_id`, `full_address`, `reference_name`, `reference_phone`, `reference_address`, `pincode`, `state`, `city`, `location`, `country`, `latitude`, `created_at`, `updated_at`, `loungnitude`) VALUES
(66, 21, '45', 'midhun', 'k', 'workerprofileimage/63e214884db96.png', 'mk@gmail.com', '7845956895', '4562325658', '$2y$10$2Chv2YOpRrk.wzavdUmN4.hTFQRW1t02T7DnjfheO5gzzxqzttcfO', '1', '2023-02-07', '2023-03-09T09:04:30', '63', 'asdsadsadsadsa\r\nasdadsfadfsdafdsfad\r\nasafsasfahgsafgs', 'kipio', '5623256989', 'asdafdsfasahghagsjagsa', '673015', 'Kerala', 'Aluva', 'Aluva, Kerala, India', 'India', '10.1003709', '2023-02-07 03:36:16', '2023-02-13 04:56:00', '76.35703819999999'),
(67, 22, '45', 'roja', 'm', 'workerprofileimage/63e214eee0ca4.jpg', 'roja@gmail.com', '4523265985', '4523265985', '$2y$10$3LAftlVWexT3J.DLMV.9juXYqcp5RQFm3WDiJ8hLVyJ.uI2Oinr1K', '1', '2023-02-07', '2023-03-09T09:06:28', '70', 'adasdasdsd', '4523265985', '4523265985', 'dsadsadasd', '673010', 'Kozhikode', 'Karuvissery', 'Karuvisseri, Kozhikode, Kerala, India', 'Kerala', '11.2983844', '2023-02-07 03:37:58', '2023-02-13 04:56:07', '75.78511209999999'),
(68, 24, '41', 'amina', 'm', 'workerprofileimage/63e2154b09abc.webp', 'amina@gmail.com', '4523265985', '4523265985', '$2y$10$fjkpyFOKHjXI/0sSOLDWT.b13Rz1qEjkKYwCgQ6.GwrOrawvMMny.', '1', '2023-02-07', '2023-03-09T09:08:21', '74', 'adsadasdad', '4523265985', '4523265985', 'asfsffsf', '451236', 'Kerala', 'Olavanna', 'Olavanna, Kerala, India', 'India', '11.2241936', '2023-02-07 03:39:31', '2023-02-13 04:56:14', '75.8290437'),
(69, 26, '41', 'abaya', 'ud', 'workerprofileimage/63e215cd90eba.jpg', 'ab@gmail.com', '4523265985', '4523265985', '$2y$10$hAdmQXT14eisg1rtzEALSu9YuH6OfowcDKYP1lTyndK6S/Tjjgt4O', '1', '2023-02-07', '2023-03-09T09:09:39', '71', 'adasdsaasfas\r\nfasfa\r\nsfa\r\nsf\r\nasf', 'miki', '4523265985', 'dsfasfasfsafsf\r\nasf\r\na\r\nfa\r\nf\r\nas', '685421', 'Kerala', 'Beypore', 'Beypore, Kerala, India', 'India', '11.173585', '2023-02-07 03:41:41', '2023-02-13 04:56:19', '75.8040022'),
(70, 38, '41', 'booban', 'p', 'workerprofileimage/63e216a5490f6.jpg', 'booban@gmail.com', '4523265985', '4523265985', '$2y$10$xCe8spSM0k/XXnSyGTl/CeMiVjvVuSXLQA.kawuirO35UV1f/ODkO', '1', '2023-02-07', '2023-03-09T09:12:32', '62', 'afasfasfasfaf', 'rahul', '4523265985', 'dadasdasd', '673010', 'Kozhikode', 'Karaparamba', 'Karaparamba, Kozhikode, Kerala, India', 'Kerala', '11.287121', '2023-02-07 03:45:17', '2023-02-13 04:56:30', '75.78502999999999');

-- --------------------------------------------------------

--
-- Table structure for table `workincluded`
--

CREATE TABLE `workincluded` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `workerincludeddetails` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcateg_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workincluded`
--

INSERT INTO `workincluded` (`id`, `category_id`, `workerincludeddetails`, `subcateg_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(12, 38, 'Repair work', 8, '2022-12-07 00:45:50', '2022-12-07 00:45:50', NULL),
(13, 38, 'Building new furniture', 8, '2022-12-07 00:45:50', '2022-12-07 00:45:50', NULL),
(14, 38, 'Cost of material used', 8, '2022-12-07 00:45:50', '2022-12-07 00:45:50', NULL),
(15, 38, 'Cost of material used2', 8, '2022-12-07 00:45:50', '2022-12-07 00:45:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `works_images`
--

CREATE TABLE `works_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `worker_details_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `worksimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `works_images`
--

INSERT INTO `works_images` (`id`, `worker_details_id`, `user_id`, `worksimage`, `created_at`, `updated_at`, `deleted_at`) VALUES
(102, 66, 45, 'workimages/63e21488ef91e.jpeg', '2023-02-07 03:36:17', '2023-02-07 03:36:17', NULL),
(103, 67, 45, 'workimages/63e214ef06c20.jpg', '2023-02-07 03:37:59', '2023-02-07 03:37:59', NULL),
(104, 68, 41, 'workimages/63e2154b2e95d.jpeg', '2023-02-07 03:39:31', '2023-02-07 03:39:31', NULL),
(105, 69, 41, 'workimages/63e215cdb0bb2.jpeg', '2023-02-07 03:41:41', '2023-02-07 03:41:41', NULL),
(106, 70, 41, 'workimages/63e216a565bea.png', '2023-02-07 03:45:17', '2023-02-07 03:45:17', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commentsandratings`
--
ALTER TABLE `commentsandratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commentsandratings_worker_details_id_foreign` (`worker_details_id`),
  ADD KEY `commentsandratings_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `like`
--
ALTER TABLE `like`
  ADD PRIMARY KEY (`id`),
  ADD KEY `like_category_id_foreign` (`category_id`),
  ADD KEY `like_worker_details_id_foreign` (`worker_details_id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `recent_viewed_worker`
--
ALTER TABLE `recent_viewed_worker`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recent_viewed_worker_category_id_foreign` (`category_id`),
  ADD KEY `recent_viewed_worker_worker_details_id_foreign` (`worker_details_id`),
  ADD KEY `recent_viewed_worker_user_id_foreign` (`user_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategorymodel`
--
ALTER TABLE `subcategorymodel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategorymodel_category_id_foreign` (`category_id`);

--
-- Indexes for table `userprofileimage`
--
ALTER TABLE `userprofileimage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userprofileimage_userid_foreign` (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `viewsandlikes`
--
ALTER TABLE `viewsandlikes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `viewsandlikes_category_id_foreign` (`category_id`),
  ADD KEY `viewsandlikes_worker_details_id_foreign` (`worker_details_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlist_category_id_foreign` (`category_id`),
  ADD KEY `wishlist_worker_details_id_foreign` (`worker_details_id`);

--
-- Indexes for table `workerdesigination`
--
ALTER TABLE `workerdesigination`
  ADD PRIMARY KEY (`id`),
  ADD KEY `workerdesigination_category_id_foreign` (`category_id`),
  ADD KEY `workerdesigination_worker_details_id_foreign` (`worker_details_id`),
  ADD KEY `workerdesigination_workerdocument_id_foreign` (`workerdocument_id`);

--
-- Indexes for table `workerdocument`
--
ALTER TABLE `workerdocument`
  ADD PRIMARY KEY (`id`),
  ADD KEY `workerdocument_category_id_foreign` (`category_id`),
  ADD KEY `workerdocument_worker_details_id_foreign` (`worker_details_id`);

--
-- Indexes for table `worker_details`
--
ALTER TABLE `worker_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `worker_details_category_id_foreign` (`category_id`);

--
-- Indexes for table `workincluded`
--
ALTER TABLE `workincluded`
  ADD PRIMARY KEY (`id`),
  ADD KEY `workincluded_category_id_foreign` (`category_id`),
  ADD KEY `workincluded_subcateg_id_foreign` (`subcateg_id`);

--
-- Indexes for table `works_images`
--
ALTER TABLE `works_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `works_images_worker_details_id_foreign` (`worker_details_id`),
  ADD KEY `works_images_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `commentsandratings`
--
ALTER TABLE `commentsandratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `like`
--
ALTER TABLE `like`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `recent_viewed_worker`
--
ALTER TABLE `recent_viewed_worker`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `subcategorymodel`
--
ALTER TABLE `subcategorymodel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `userprofileimage`
--
ALTER TABLE `userprofileimage`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `viewsandlikes`
--
ALTER TABLE `viewsandlikes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `workerdesigination`
--
ALTER TABLE `workerdesigination`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `workerdocument`
--
ALTER TABLE `workerdocument`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `worker_details`
--
ALTER TABLE `worker_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `workincluded`
--
ALTER TABLE `workincluded`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `works_images`
--
ALTER TABLE `works_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commentsandratings`
--
ALTER TABLE `commentsandratings`
  ADD CONSTRAINT `commentsandratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commentsandratings_worker_details_id_foreign` FOREIGN KEY (`worker_details_id`) REFERENCES `worker_details` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `like`
--
ALTER TABLE `like`
  ADD CONSTRAINT `like_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `like_worker_details_id_foreign` FOREIGN KEY (`worker_details_id`) REFERENCES `worker_details` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `recent_viewed_worker`
--
ALTER TABLE `recent_viewed_worker`
  ADD CONSTRAINT `recent_viewed_worker_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `recent_viewed_worker_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `recent_viewed_worker_worker_details_id_foreign` FOREIGN KEY (`worker_details_id`) REFERENCES `worker_details` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subcategorymodel`
--
ALTER TABLE `subcategorymodel`
  ADD CONSTRAINT `subcategorymodel_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `userprofileimage`
--
ALTER TABLE `userprofileimage`
  ADD CONSTRAINT `userprofileimage_userid_foreign` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `viewsandlikes`
--
ALTER TABLE `viewsandlikes`
  ADD CONSTRAINT `viewsandlikes_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `viewsandlikes_worker_details_id_foreign` FOREIGN KEY (`worker_details_id`) REFERENCES `worker_details` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wishlist_worker_details_id_foreign` FOREIGN KEY (`worker_details_id`) REFERENCES `worker_details` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `workerdesigination`
--
ALTER TABLE `workerdesigination`
  ADD CONSTRAINT `workerdesigination_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `workerdesigination_worker_details_id_foreign` FOREIGN KEY (`worker_details_id`) REFERENCES `worker_details` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `workerdesigination_workerdocument_id_foreign` FOREIGN KEY (`workerdocument_id`) REFERENCES `workerdocument` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `workerdocument`
--
ALTER TABLE `workerdocument`
  ADD CONSTRAINT `workerdocument_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `workerdocument_worker_details_id_foreign` FOREIGN KEY (`worker_details_id`) REFERENCES `worker_details` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `worker_details`
--
ALTER TABLE `worker_details`
  ADD CONSTRAINT `worker_details_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `workincluded`
--
ALTER TABLE `workincluded`
  ADD CONSTRAINT `workincluded_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `workincluded_subcateg_id_foreign` FOREIGN KEY (`subcateg_id`) REFERENCES `subcategorymodel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `works_images`
--
ALTER TABLE `works_images`
  ADD CONSTRAINT `works_images_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `works_images_worker_details_id_foreign` FOREIGN KEY (`worker_details_id`) REFERENCES `worker_details` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
