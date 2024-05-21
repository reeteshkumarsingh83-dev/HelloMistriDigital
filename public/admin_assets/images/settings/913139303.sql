-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 18, 2024 at 12:52 PM
-- Server version: 8.0.36-0ubuntu0.22.04.1
-- PHP Version: 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `original_cargo`
--

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `type`, `value`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'logo', 'img/ONE EXTREME cargo logo.png', 'en', '2023-09-25 00:33:49', '2023-10-12 06:55:14'),
(2, 'favicon', 'img/cargo logo 4.png', 'en', '2023-09-25 00:33:49', '2023-10-18 06:55:13'),
(3, 'site_name', 'one tremex1', 'en', '2023-09-25 00:33:49', '2023-09-25 01:37:20'),
(4, 'signature', 'oneextreme', 'en', '2023-09-25 00:33:49', '2023-10-17 05:45:07'),
(5, 'email', 'onextremeinfo@gmail.com', 'en', '2023-09-25 00:33:49', '2023-10-26 11:36:16'),
(6, 'phone', '+91 9811881668, +91 8076695685', 'en', '2023-09-25 00:33:49', '2023-10-17 06:52:25'),
(7, 'address', 'E-42/B Gali no-18 Madhu vihar, Delhi Near- Urmil Jwellers', 'en', '2023-09-25 00:33:49', '2023-10-17 05:39:09'),
(8, 'zip_code', '110092', 'en', '2023-09-25 00:33:49', '2023-10-17 05:39:09'),
(9, 'city', 'Delhi', 'en', '2023-09-25 00:33:49', '2023-10-17 05:39:09'),
(10, 'state', 'Utter Pradesh', 'en', '2023-09-25 00:33:49', '2023-10-05 02:34:46'),
(11, 'country', 'India', 'en', '2023-09-25 00:33:49', '2023-10-05 02:34:46'),
(12, 'banner1', 'img/plane-170272_1280.jpg', 'en', '2023-09-25 00:33:49', '2023-09-28 03:51:59'),
(13, 'banner1_title', 'Your Lightning Fast Delivery Partner', 'en', '2023-09-25 00:33:49', '2023-09-27 03:30:46'),
(14, 'banner1_description', '<p>Facere distinctio molestiae nisi fugit tenetur repellat non praesentium nesciunt optio quis sit odio nemo quisquam. eius quos reiciendis eum vel eum voluptatem eum maiores eaque id optio ullam occaecati odio est possimus vel reprehenderit</p>', 'en', '2023-09-25 00:33:49', '2023-09-27 03:30:46'),
(15, 'frontend_logo', 'img/cargo logo 2.png', 'en', '2023-09-25 00:33:49', '2023-10-18 08:15:23'),
(16, 'header_background_color', '#fff', 'en', '2023-09-25 00:33:49', '2023-10-04 07:32:18'),
(17, 'header_text_color', '#000', 'en', '2023-09-25 00:33:49', '2023-10-04 07:32:18'),
(18, 'footer_background_color', '#0c3956', 'en', '2023-09-25 00:33:49', '2023-10-11 12:31:49'),
(19, 'footer_text_color', '#fff', 'en', '2023-09-25 00:33:49', '2023-10-05 04:09:41'),
(20, 'footer_about_description', '<p>Dolor iure expedita id fuga asperiores qui sunt consequatur minima. Quidem voluptas deleniti. Sit quia molestiae quia quas qui magnam itaque veritatis dolores. Corrupti totam ut eius incidunt reiciendis veritatis asperiores placeat.</p>', 'en', '2023-09-25 00:33:49', '2023-09-27 02:12:01'),
(21, 'facebook', 'https://www.facebook.com', 'en', '2023-09-25 00:33:49', '2023-09-27 02:05:25'),
(22, 'linkedin', 'https://www.linkedin.com', 'en', '2023-09-25 00:33:49', '2023-09-27 02:09:15'),
(23, 'youtube', 'https://www.youtybe.com', 'en', '2023-09-25 00:33:49', '2023-09-27 02:09:15'),
(24, 'twitter', 'https://www.twitter.com', 'en', '2023-09-25 00:33:49', '2023-09-27 02:09:15'),
(25, 'banner2', 'img/photo-1601584115197-04ecc0da31d7.jpeg', NULL, NULL, '2023-09-27 03:27:25'),
(26, 'banner3', 'img/photo-1601584115197-04ecc0da31d7.jpeg', 'en', NULL, '2023-09-27 03:27:36'),
(27, 'referral_amount', '30', 'en', NULL, '2023-10-23 09:16:06'),
(29, 'customer_care_no', '8588897707', 'en', NULL, '2023-10-17 06:53:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
