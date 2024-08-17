-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2024 at 08:23 PM
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
-- Database: `lighthouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `counters`
--

CREATE TABLE `counters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `founded` varchar(255) DEFAULT NULL,
  `teachers` varchar(255) DEFAULT NULL,
  `students` varchar(255) DEFAULT NULL,
  `staff` varchar(255) DEFAULT NULL,
  `branches` varchar(255) DEFAULT NULL,
  `campus` varchar(255) DEFAULT NULL,
  `bellow_text` varchar(255) DEFAULT NULL,
  `button_text` varchar(255) DEFAULT NULL,
  `bg` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `counters`
--

INSERT INTO `counters` (`id`, `title`, `content`, `founded`, `teachers`, `students`, `staff`, `branches`, `campus`, `bellow_text`, `button_text`, `bg`, `created_at`, `updated_at`) VALUES
(1, 'History of our School', 'The Averroes International School is recognized by the Bangladesh Ministry of Education and authorized by British Council and Edexcel as an English –medium educational institution for both Primary and Secondary Sections. The school established in 2015 is situated at Lalmatia, Mohammadpur in Dhaka. The School, surrounded by peaceful environment, which gives pleasures to children, offers education from Play to A Level Read More', '2015', '210', '4200', '50', '3', '9', 'Start your Beautiful & Bright Future From Here', 'Book Now', '1722850020.jpg', NULL, '2024-08-05 22:35:21');

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
-- Table structure for table `herosections`
--

CREATE TABLE `herosections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `top_title` varchar(255) DEFAULT NULL,
  `main_title` varchar(255) DEFAULT NULL,
  `button_text` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image_1` varchar(255) DEFAULT NULL,
  `image_2` varchar(255) DEFAULT NULL,
  `rating` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `herosections`
--

INSERT INTO `herosections` (`id`, `top_title`, `main_title`, `button_text`, `description`, `image_1`, `image_2`, `rating`, `created_at`, `updated_at`) VALUES
(1, 'LEARN. PLAY. EXPLORE', 'A safe and joyful place for your lovely children', 'Enroll your kid', 'Assalamu Alaikum! Welcome to lighthouse international school, where academic excellence meets moral values. Located at Bashundhara Residential Area in Dhaka, our English medium institution offers a holistic education, nurturing students to thrive academically and spiritually. Join us for a journey of learning and enlightenment', '1722839159.jpg', '17228391592.jpg', '4.8 rating on Google', NULL, '2024-08-05 00:43:47');

-- --------------------------------------------------------

--
-- Table structure for table `home_about_us`
--

CREATE TABLE `home_about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_about_us`
--

INSERT INTO `home_about_us` (`id`, `title`, `image`, `content`, `created_at`, `updated_at`) VALUES
(1, 'lighthouse international school is admitting students from Playgroup to Grade 7', '1722946829.jpg', '<p>lighthouse international school follows the Pearson Edexcel curriculum and intends to deliver excellent educational programs in the following Key Learning Areas: English, Mathematics, Science, Technology, Global Citizenship, Creative Arts, Personal Development, Health and Physical Education as well as lessons in Quran, Islamic Studies and Arabic Language classes.</p><p>&nbsp;Here at lighthouse international school, we aim to help our precious children to think and act in ways that are truly inspiring.</p>', NULL, '2024-08-06 06:31:51');

-- --------------------------------------------------------

--
-- Table structure for table `home_age_specifics`
--

CREATE TABLE `home_age_specifics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_age_specifics`
--

INSERT INTO `home_age_specifics` (`id`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'PRESCHOOL', '<p>We welcome children from 3 to 6 in the Preschool Program to participate in the classroom from Playgroup (Reception 1), Nursery (Reception 2) and Kindergarten (Year 1). Our children in Preschool (Early Years) are exposed to different areas of learning that includes communication and language, personal, social and emotional development, physical development, literacy, mathematics, understanding the world, expressive arts and design. Learning process is pursued through various fun and playful activities to develop the sense of spirituality and to build the foundation for academic success.</p>', '1722963840.jpg', NULL, '2024-08-06 11:04:00'),
(2, 'PRIMARY SCHOOL', '<p>In the Primary School program children can enroll from Year 2 to Year 6 (Grade 1 to Grade 5). To continue the development of student’s academic success Reverie School keeps on nurturing the innate curiosity and learning skills of each child. We expose students to a wide range of subject areas to keep them motivated to become creative, analytical and continue to achieve academic success. Students are taught English, Bangla, Maths, Science, Computing, Global Citizenship, Islam, Arabic, Tahfeez (reading and memorizing surahs from the Quran), creative art and physical education.</p>', '1722963880.jpg', NULL, '2024-08-06 11:04:40'),
(3, 'MIDDLE SCHOOL', '<p>In the Lower Secondary School program are taught to the children in Year 7 (Grade 6), Year 8 (Grade 7) and Year 9 (Grade 8) in order to prepare them for IGCSE O &amp; A Levels. The Lower Secondary School Program provides a safe place for students to meet, individually or in small groups, to focus on social and emotional development, and to seek guidance from school counselors. Students increase their levels of independence in emotional self-regulation, and interpersonal skills by continuing their learning journey in English (reading and memorizing surahs from the Quran) and physical education.</p>', '1722963910.jpg', NULL, '2024-08-06 11:28:38');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_08_04_154514_create_settings_table', 2),
(6, '2024_08_04_182334_create_herosections_table', 3),
(7, '2024_08_05_072000_create_counters_table', 4),
(8, '2024_08_06_112245_create_home_about_us_table', 5),
(9, '2024_08_06_153955_create_home_age_specifics_table', 6);

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
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `map` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `designation` varchar(255) NOT NULL DEFAULT 'Admin',
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `status`, `designation`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'SuperAdmin', 'Active', 'Admin', 'superadmin@gmail.com', NULL, '$2y$10$7W8Xkzc9jvNhS8Daacn5cODkBAhu91wjVvrAAk/9ojjk1GVa83Jw6', NULL, NULL, NULL),
(2, 'Light House', 'Active', 'Admin', 'lighthouse@gmail.com', NULL, '$2y$10$r.oOTOJd7S7M1oYAtxy5/.nCGgD5NJD7rl6VE3dCU0Tgt9dQPO3nK', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `counters`
--
ALTER TABLE `counters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `herosections`
--
ALTER TABLE `herosections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_about_us`
--
ALTER TABLE `home_about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_age_specifics`
--
ALTER TABLE `home_age_specifics`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
-- AUTO_INCREMENT for table `counters`
--
ALTER TABLE `counters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `herosections`
--
ALTER TABLE `herosections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_about_us`
--
ALTER TABLE `home_about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_age_specifics`
--
ALTER TABLE `home_age_specifics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
