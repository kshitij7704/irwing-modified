-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 16, 2025 at 04:13 PM
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
-- Database: `ivr`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `achievement` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `details` text DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`id`, `user_id`, `achievement`, `date`, `details`, `document`, `created_at`, `updated_at`) VALUES
(1, 1, '5G Pilot Project', '2025-10-17', 'Launched in select urban areas', 'achievements/Lc3zrzqU4Jy7VNHdbF5jY2K29v4LJ1coHa0Qvrvq.pdf', '2025-10-16 03:30:24', '2025-10-16 03:30:24'),
(2, 1, 'achivement 2', '2025-10-17', 'dsfgdg', 'achievements/pDqDvFi01uSco6e2Ch0VLiJgPbD7Dirym1jvivfP.pdf', '2025-10-16 03:38:43', '2025-10-16 03:38:43');

-- --------------------------------------------------------

--
-- Table structure for table `agencies`
--

CREATE TABLE `agencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agencies`
--

INSERT INTO `agencies` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'ITU', '', NULL, NULL),
(2, 'APT', NULL, NULL, NULL),
(3, 'ISS', NULL, NULL, NULL),
(4, 'IOSC', NULL, NULL, NULL),
(5, 'BRICS', NULL, NULL, NULL),
(6, 'ASEAN', NULL, NULL, NULL),
(7, '3GPP', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brochures`
--

CREATE TABLE `brochures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `published_at` date DEFAULT NULL,
  `file_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brochures`
--

INSERT INTO `brochures` (`id`, `title`, `description`, `published_at`, `file_path`, `created_at`, `updated_at`) VALUES
(2, 'ttt', NULL, '2025-09-29', 'brochures/F8xY6m9l4XPPfznBWlmx0JQCwkJfLPPEnhRJ028k.pdf', '2025-09-28 13:36:01', '2025-09-28 13:36:01'),
(3, 'naman test', NULL, '2025-10-18', 'brochures/q6snELrj5pWyPtGpC6H3sIyzk9uMB5UMBrYAbQFG.pdf', '2025-10-16 01:19:51', '2025-10-16 01:19:51');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel_cache_0f384269f49ce2254cae13f51b17bce9', 'i:1;', 1760596956),
('laravel_cache_0f384269f49ce2254cae13f51b17bce9:timer', 'i:1760596956;', 1760596956),
('laravel_cache_1585e7c4fffebfd5166e59125d86734b', 'i:1;', 1760418758),
('laravel_cache_1585e7c4fffebfd5166e59125d86734b:timer', 'i:1760418758;', 1760418758),
('laravel_cache_1744d34da548464ceca136a4ae9b7cf0', 'i:1;', 1760591185),
('laravel_cache_1744d34da548464ceca136a4ae9b7cf0:timer', 'i:1760591185;', 1760591185),
('laravel_cache_a426855645002178ecd525de6f8e7211', 'i:1;', 1760418717),
('laravel_cache_a426855645002178ecd525de6f8e7211:timer', 'i:1760418717;', 1760418717),
('laravel_cache_admin.bharat-telecom@gov.in|127.0.0.1', 'i:1;', 1760418717),
('laravel_cache_admin.bharat-telecom@gov.in|127.0.0.1:timer', 'i:1760418717;', 1760418717),
('laravel_cache_admin@irwings.com|127.0.0.1', 'i:1;', 1758011431),
('laravel_cache_admin@irwings.com|127.0.0.1:timer', 'i:1758011431;', 1758011431),
('laravel_cache_fc467f805522bee41df77defd6992d6b', 'i:1;', 1758011431),
('laravel_cache_fc467f805522bee41df77defd6992d6b:timer', 'i:1758011431;', 1758011431),
('laravel_cache_spatie.permission.cache', 'a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:112:{i:0;a:4:{s:1:\"a\";i:1;s:1:\"b\";s:10:\"users.view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:1;a:4:{s:1:\"a\";i:2;s:1:\"b\";s:12:\"users.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:2;a:4:{s:1:\"a\";i:3;s:1:\"b\";s:10:\"users.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:3;a:4:{s:1:\"a\";i:4;s:1:\"b\";s:12:\"users.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:4;a:4:{s:1:\"a\";i:5;s:1:\"b\";s:10:\"roles.view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:5;a:4:{s:1:\"a\";i:6;s:1:\"b\";s:12:\"roles.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:6;a:4:{s:1:\"a\";i:7;s:1:\"b\";s:10:\"roles.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:7;a:4:{s:1:\"a\";i:8;s:1:\"b\";s:12:\"roles.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:8;a:4:{s:1:\"a\";i:9;s:1:\"b\";s:16:\"permissions.view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:9;a:4:{s:1:\"a\";i:10;s:1:\"b\";s:18:\"permissions.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:10;a:4:{s:1:\"a\";i:11;s:1:\"b\";s:16:\"permissions.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:11;a:4:{s:1:\"a\";i:12;s:1:\"b\";s:18:\"permissions.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:12;a:4:{s:1:\"a\";i:65;s:1:\"b\";s:33:\"submission.personal_performa.view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:13;a:4:{s:1:\"a\";i:66;s:1:\"b\";s:35:\"submission.personal_performa.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:14;a:4:{s:1:\"a\";i:67;s:1:\"b\";s:33:\"submission.personal_performa.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:15;a:4:{s:1:\"a\";i:68;s:1:\"b\";s:35:\"submission.personal_performa.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:16;a:4:{s:1:\"a\";i:69;s:1:\"b\";s:28:\"submission.tour_reports.view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:17;a:4:{s:1:\"a\";i:70;s:1:\"b\";s:30:\"submission.tour_reports.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:18;a:4:{s:1:\"a\";i:71;s:1:\"b\";s:28:\"submission.tour_reports.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:19;a:4:{s:1:\"a\";i:72;s:1:\"b\";s:30:\"submission.tour_reports.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:20;a:4:{s:1:\"a\";i:73;s:1:\"b\";s:33:\"generation.personal_performa.view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:21;a:4:{s:1:\"a\";i:74;s:1:\"b\";s:35:\"generation.personal_performa.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:22;a:4:{s:1:\"a\";i:75;s:1:\"b\";s:33:\"generation.personal_performa.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:23;a:4:{s:1:\"a\";i:76;s:1:\"b\";s:35:\"generation.personal_performa.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:24;a:4:{s:1:\"a\";i:77;s:1:\"b\";s:29:\"generation.visit_tracker.view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:25;a:4:{s:1:\"a\";i:78;s:1:\"b\";s:31:\"generation.visit_tracker.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:26;a:4:{s:1:\"a\";i:79;s:1:\"b\";s:29:\"generation.visit_tracker.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:27;a:4:{s:1:\"a\";i:80;s:1:\"b\";s:31:\"generation.visit_tracker.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:28;a:4:{s:1:\"a\";i:81;s:1:\"b\";s:30:\"generation.sanction_memos.view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:29;a:4:{s:1:\"a\";i:82;s:1:\"b\";s:32:\"generation.sanction_memos.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:30;a:4:{s:1:\"a\";i:83;s:1:\"b\";s:30:\"generation.sanction_memos.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:31;a:4:{s:1:\"a\";i:84;s:1:\"b\";s:32:\"generation.sanction_memos.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:32;a:4:{s:1:\"a\";i:85;s:1:\"b\";s:19:\"generation.qrp.view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:33;a:4:{s:1:\"a\";i:86;s:1:\"b\";s:21:\"generation.qrp.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:34;a:4:{s:1:\"a\";i:87;s:1:\"b\";s:19:\"generation.qrp.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:35;a:4:{s:1:\"a\";i:88;s:1:\"b\";s:21:\"generation.qrp.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:36;a:4:{s:1:\"a\";i:89;s:1:\"b\";s:28:\"repository.tour_reports.view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:3;i:2;i:4;}}i:37;a:4:{s:1:\"a\";i:90;s:1:\"b\";s:30:\"repository.tour_reports.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:3;i:2;i:4;}}i:38;a:4:{s:1:\"a\";i:91;s:1:\"b\";s:28:\"repository.tour_reports.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:3;i:2;i:4;}}i:39;a:4:{s:1:\"a\";i:92;s:1:\"b\";s:30:\"repository.tour_reports.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:3;i:2;i:4;}}i:40;a:4:{s:1:\"a\";i:93;s:1:\"b\";s:29:\"repository.presentations.view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:3;i:2;i:4;}}i:41;a:4:{s:1:\"a\";i:94;s:1:\"b\";s:31:\"repository.presentations.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:3;i:2;i:4;}}i:42;a:4:{s:1:\"a\";i:95;s:1:\"b\";s:29:\"repository.presentations.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:3;i:2;i:4;}}i:43;a:4:{s:1:\"a\";i:96;s:1:\"b\";s:31:\"repository.presentations.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:3;i:2;i:4;}}i:44;a:4:{s:1:\"a\";i:97;s:1:\"b\";s:29:\"repository.action_points.view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:3;i:2;i:4;}}i:45;a:4:{s:1:\"a\";i:98;s:1:\"b\";s:31:\"repository.action_points.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:3;i:2;i:4;}}i:46;a:4:{s:1:\"a\";i:99;s:1:\"b\";s:29:\"repository.action_points.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:3;i:2;i:4;}}i:47;a:4:{s:1:\"a\";i:100;s:1:\"b\";s:31:\"repository.action_points.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:3;i:2;i:4;}}i:48;a:4:{s:1:\"a\";i:101;s:1:\"b\";s:32:\"repository.officer_database.view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:3;i:2;i:4;}}i:49;a:4:{s:1:\"a\";i:102;s:1:\"b\";s:34:\"repository.officer_database.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:3;i:2;i:4;}}i:50;a:4:{s:1:\"a\";i:103;s:1:\"b\";s:32:\"repository.officer_database.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:3;i:2;i:4;}}i:51;a:4:{s:1:\"a\";i:104;s:1:\"b\";s:34:\"repository.officer_database.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:3;i:2;i:4;}}i:52;a:4:{s:1:\"a\";i:105;s:1:\"b\";s:32:\"repository.itu_focal_points.view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:53;a:4:{s:1:\"a\";i:106;s:1:\"b\";s:34:\"repository.itu_focal_points.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:54;a:4:{s:1:\"a\";i:107;s:1:\"b\";s:32:\"repository.itu_focal_points.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:55;a:4:{s:1:\"a\";i:108;s:1:\"b\";s:34:\"repository.itu_focal_points.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:56;a:4:{s:1:\"a\";i:109;s:1:\"b\";s:38:\"repository.indian_mission_contact.view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:57;a:4:{s:1:\"a\";i:110;s:1:\"b\";s:40:\"repository.indian_mission_contact.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:58;a:4:{s:1:\"a\";i:111;s:1:\"b\";s:38:\"repository.indian_mission_contact.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:59;a:4:{s:1:\"a\";i:112;s:1:\"b\";s:40:\"repository.indian_mission_contact.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:60;a:4:{s:1:\"a\";i:113;s:1:\"b\";s:44:\"repository.country_mission_master_sheet.view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:4:{i:0;i:1;i:1;i:2;i:2;i:3;i:3;i:4;}}i:61;a:4:{s:1:\"a\";i:114;s:1:\"b\";s:46:\"repository.country_mission_master_sheet.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:4:{i:0;i:1;i:1;i:2;i:2;i:3;i:3;i:4;}}i:62;a:4:{s:1:\"a\";i:115;s:1:\"b\";s:44:\"repository.country_mission_master_sheet.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:4:{i:0;i:1;i:1;i:2;i:2;i:3;i:3;i:4;}}i:63;a:4:{s:1:\"a\";i:116;s:1:\"b\";s:46:\"repository.country_mission_master_sheet.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:4:{i:0;i:1;i:1;i:2;i:2;i:3;i:3;i:4;}}i:64;a:4:{s:1:\"a\";i:117;s:1:\"b\";s:33:\"engagement.bilateral_tracker.view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:65;a:4:{s:1:\"a\";i:118;s:1:\"b\";s:35:\"engagement.bilateral_tracker.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:66;a:4:{s:1:\"a\";i:119;s:1:\"b\";s:33:\"engagement.bilateral_tracker.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:67;a:4:{s:1:\"a\";i:120;s:1:\"b\";s:35:\"engagement.bilateral_tracker.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:68;a:4:{s:1:\"a\";i:121;s:1:\"b\";s:36:\"engagement.multilateral_tracker.view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:69;a:4:{s:1:\"a\";i:122;s:1:\"b\";s:38:\"engagement.multilateral_tracker.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:70;a:4:{s:1:\"a\";i:123;s:1:\"b\";s:36:\"engagement.multilateral_tracker.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:71;a:4:{s:1:\"a\";i:124;s:1:\"b\";s:38:\"engagement.multilateral_tracker.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:72;a:4:{s:1:\"a\";i:125;s:1:\"b\";s:37:\"engagement.mou_foreign_countries.view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:73;a:4:{s:1:\"a\";i:126;s:1:\"b\";s:39:\"engagement.mou_foreign_countries.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:74;a:4:{s:1:\"a\";i:127;s:1:\"b\";s:37:\"engagement.mou_foreign_countries.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:75;a:4:{s:1:\"a\";i:128;s:1:\"b\";s:39:\"engagement.mou_foreign_countries.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:76;a:4:{s:1:\"a\";i:129;s:1:\"b\";s:31:\"engagement.country_profile.view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:77;a:4:{s:1:\"a\";i:130;s:1:\"b\";s:33:\"engagement.country_profile.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:78;a:4:{s:1:\"a\";i:131;s:1:\"b\";s:31:\"engagement.country_profile.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:79;a:4:{s:1:\"a\";i:132;s:1:\"b\";s:33:\"engagement.country_profile.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:80;a:4:{s:1:\"a\";i:133;s:1:\"b\";s:35:\"engagement.itu_council_tracker.view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:81;a:4:{s:1:\"a\";i:134;s:1:\"b\";s:37:\"engagement.itu_council_tracker.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:82;a:4:{s:1:\"a\";i:135;s:1:\"b\";s:35:\"engagement.itu_council_tracker.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:83;a:4:{s:1:\"a\";i:136;s:1:\"b\";s:37:\"engagement.itu_council_tracker.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:84;a:4:{s:1:\"a\";i:137;s:1:\"b\";s:34:\"engagement.itu_council_emails.view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:85;a:4:{s:1:\"a\";i:138;s:1:\"b\";s:36:\"engagement.itu_council_emails.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:86;a:4:{s:1:\"a\";i:139;s:1:\"b\";s:34:\"engagement.itu_council_emails.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:87;a:4:{s:1:\"a\";i:140;s:1:\"b\";s:36:\"engagement.itu_council_emails.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:88;a:4:{s:1:\"a\";i:141;s:1:\"b\";s:36:\"reports.yearwise_foreign_visits.view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:89;a:4:{s:1:\"a\";i:142;s:1:\"b\";s:38:\"reports.yearwise_foreign_visits.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:90;a:4:{s:1:\"a\";i:143;s:1:\"b\";s:36:\"reports.yearwise_foreign_visits.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:91;a:4:{s:1:\"a\";i:144;s:1:\"b\";s:38:\"reports.yearwise_foreign_visits.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:92;a:4:{s:1:\"a\";i:145;s:1:\"b\";s:34:\"reports.officer_participation.view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:93;a:4:{s:1:\"a\";i:146;s:1:\"b\";s:36:\"reports.officer_participation.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:94;a:4:{s:1:\"a\";i:147;s:1:\"b\";s:34:\"reports.officer_participation.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:95;a:4:{s:1:\"a\";i:148;s:1:\"b\";s:36:\"reports.officer_participation.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:96;a:4:{s:1:\"a\";i:149;s:1:\"b\";s:30:\"reports.bilateral_summary.view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:97;a:4:{s:1:\"a\";i:150;s:1:\"b\";s:32:\"reports.bilateral_summary.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:98;a:4:{s:1:\"a\";i:151;s:1:\"b\";s:30:\"reports.bilateral_summary.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:99;a:4:{s:1:\"a\";i:152;s:1:\"b\";s:32:\"reports.bilateral_summary.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:100;a:4:{s:1:\"a\";i:153;s:1:\"b\";s:33:\"reports.multilateral_summary.view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:101;a:4:{s:1:\"a\";i:154;s:1:\"b\";s:35:\"reports.multilateral_summary.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:102;a:4:{s:1:\"a\";i:155;s:1:\"b\";s:33:\"reports.multilateral_summary.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:103;a:4:{s:1:\"a\";i:156;s:1:\"b\";s:35:\"reports.multilateral_summary.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:104;a:4:{s:1:\"a\";i:157;s:1:\"b\";s:26:\"reports.visit_tracker.view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:105;a:4:{s:1:\"a\";i:158;s:1:\"b\";s:28:\"reports.visit_tracker.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:106;a:4:{s:1:\"a\";i:159;s:1:\"b\";s:26:\"reports.visit_tracker.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:107;a:4:{s:1:\"a\";i:160;s:1:\"b\";s:28:\"reports.visit_tracker.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:4;}}i:108;a:4:{s:1:\"a\";i:161;s:1:\"b\";s:21:\"submission.qrp.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:3;i:1;i:4;}}i:109;a:4:{s:1:\"a\";i:162;s:1:\"b\";s:21:\"submission.qrp.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:3;i:1;i:4;}}i:110;a:4:{s:1:\"a\";i:163;s:1:\"b\";s:19:\"submission.qrp.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:3;i:1;i:4;}}i:111;a:4:{s:1:\"a\";i:164;s:1:\"b\";s:19:\"submission.qrp.view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:3;i:1;i:4;}}}s:5:\"roles\";a:4:{i:0;a:3:{s:1:\"a\";i:1;s:1:\"b\";s:5:\"admin\";s:1:\"c\";s:3:\"web\";}i:1;a:3:{s:1:\"a\";i:2;s:1:\"b\";s:7:\"Officer\";s:1:\"c\";s:3:\"web\";}i:2;a:3:{s:1:\"a\";i:4;s:1:\"b\";s:16:\"Higher Authority\";s:1:\"c\";s:3:\"web\";}i:3;a:3:{s:1:\"a\";i:3;s:1:\"b\";s:5:\"nodal\";s:1:\"c\";s:3:\"web\";}}}', 1760692100);

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
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Naman Hooda', 'namanhooda86@gmail.com', 'nmmnm', 'aaaa', '2025-09-28 13:08:58', '2025-09-28 13:08:58'),
(2, 'Naman Hooda', 'namanhooda86@gmail.com', 'nmmnm', 'mesage', '2025-09-29 05:21:36', '2025-09-29 05:21:36');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Afghanistan', NULL, NULL),
(2, 'Albania', NULL, NULL),
(3, 'Algeria', NULL, NULL),
(4, 'Andorra', NULL, NULL),
(5, 'Angola', NULL, NULL),
(6, 'Argentina', NULL, NULL),
(7, 'Armenia', NULL, NULL),
(8, 'Australia', NULL, NULL),
(9, 'Austria', NULL, NULL),
(10, 'Azerbaijan', NULL, NULL),
(11, 'Bahamas', NULL, NULL),
(12, 'Bahrain', NULL, NULL),
(13, 'Bangladesh', NULL, NULL),
(14, 'Belarus', NULL, NULL),
(15, 'Belgium', NULL, NULL),
(16, 'Bhutan', NULL, NULL),
(17, 'Bolivia', NULL, NULL),
(18, 'Bosnia and Herzegovina', NULL, NULL),
(19, 'Brazil', NULL, NULL),
(20, 'Bulgaria', NULL, NULL),
(21, 'Cambodia', NULL, NULL),
(22, 'Cameroon', NULL, NULL),
(23, 'Canada', NULL, NULL),
(24, 'Chile', NULL, NULL),
(25, 'China', NULL, NULL),
(26, 'Colombia', NULL, NULL),
(27, 'Costa Rica', NULL, NULL),
(28, 'Croatia', NULL, NULL),
(29, 'Cuba', NULL, NULL),
(30, 'Cyprus', NULL, NULL),
(31, 'Czech Republic', NULL, NULL),
(32, 'Denmark', NULL, NULL),
(33, 'Dominican Republic', NULL, NULL),
(34, 'Ecuador', NULL, NULL),
(35, 'Egypt', NULL, NULL),
(36, 'Estonia', NULL, NULL),
(37, 'Ethiopia', NULL, NULL),
(38, 'Finland', NULL, NULL),
(39, 'France', NULL, NULL),
(40, 'Germany', NULL, NULL),
(41, 'Greece', NULL, NULL),
(42, 'Hungary', NULL, NULL),
(43, 'Iceland', NULL, NULL),
(44, 'India', NULL, NULL),
(45, 'Indonesia', NULL, NULL),
(46, 'Iran', NULL, NULL),
(47, 'Iraq', NULL, NULL),
(48, 'Ireland', NULL, NULL),
(49, 'Israel', NULL, NULL),
(50, 'Italy', NULL, NULL),
(51, 'Japan', NULL, NULL),
(52, 'Jordan', NULL, NULL),
(53, 'Kazakhstan', NULL, NULL),
(54, 'Kenya', NULL, NULL),
(55, 'Kuwait', NULL, NULL),
(56, 'Latvia', NULL, NULL),
(57, 'Lebanon', NULL, NULL),
(58, 'Lithuania', NULL, NULL),
(59, 'Luxembourg', NULL, NULL),
(60, 'Malaysia', NULL, NULL),
(61, 'Maldives', NULL, NULL),
(62, 'Mexico', NULL, NULL),
(63, 'Moldova', NULL, NULL),
(64, 'Monaco', NULL, NULL),
(65, 'Mongolia', NULL, NULL),
(66, 'Morocco', NULL, NULL),
(67, 'Nepal', NULL, NULL),
(68, 'Netherlands', NULL, NULL),
(69, 'New Zealand', NULL, NULL),
(70, 'Nigeria', NULL, NULL),
(71, 'North Korea', NULL, NULL),
(72, 'Norway', NULL, NULL),
(73, 'Oman', NULL, NULL),
(74, 'Pakistan', NULL, NULL),
(75, 'Palestine', NULL, NULL),
(76, 'Panama', NULL, NULL),
(77, 'Peru', NULL, NULL),
(78, 'Philippines', NULL, NULL),
(79, 'Poland', NULL, NULL),
(80, 'Portugal', NULL, NULL),
(81, 'Qatar', NULL, NULL),
(82, 'Romania', NULL, NULL),
(83, 'Russia', NULL, NULL),
(84, 'Saudi Arabia', NULL, NULL),
(85, 'Serbia', NULL, NULL),
(86, 'Singapore', NULL, NULL),
(87, 'Slovakia', NULL, NULL),
(88, 'Slovenia', NULL, NULL),
(89, 'South Africa', NULL, NULL),
(90, 'South Korea', NULL, NULL),
(91, 'Spain', NULL, NULL),
(92, 'Sri Lanka', NULL, NULL),
(93, 'Sweden', NULL, NULL),
(94, 'Switzerland', NULL, NULL),
(95, 'Syria', NULL, NULL),
(96, 'Taiwan', NULL, NULL),
(97, 'Tajikistan', NULL, NULL),
(98, 'Tanzania', NULL, NULL),
(99, 'Thailand', NULL, NULL),
(100, 'Turkey', NULL, NULL),
(101, 'Ukraine', NULL, NULL),
(102, 'United Arab Emirates', NULL, NULL),
(103, 'United Kingdom', NULL, NULL),
(104, 'United States', NULL, NULL),
(105, 'Uruguay', NULL, NULL),
(106, 'Uzbekistan', NULL, NULL),
(107, 'Venezuela', NULL, NULL),
(108, 'Vietnam', NULL, NULL),
(109, 'Yemen', NULL, NULL),
(110, 'Zambia', NULL, NULL),
(111, 'Zimbabwe', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `division_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'desgig 1', NULL, NULL),
(2, 1, 'desgig 1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unit_office_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `unit_office_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'division 1', NULL, NULL),
(2, 1, 'division 2', NULL, NULL);

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
-- Table structure for table `international_forms`
--

CREATE TABLE `international_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `international_forms`
--

INSERT INTO `international_forms` (`id`, `title`, `description`, `url`, `created_at`, `updated_at`) VALUES
(1, 'ITU', 'ITU', 'https://www.itu.int/', '2025-09-29 04:57:05', '2025-09-29 04:57:05'),
(2, 'APT', 'APT', 'https://www.apt.int/', '2025-09-29 04:57:18', '2025-09-29 04:57:18'),
(3, 'CTO', 'CTO', 'https://www.cto.int/', '2025-09-29 04:57:31', '2025-09-29 04:57:31'),
(4, 'ASEAN', 'ASEAN', 'https://www.asean.org/', '2025-09-29 04:57:48', '2025-09-29 04:57:48'),
(5, 'BRICS', 'BRICS', 'https://www.brics.br/', '2025-09-29 04:58:03', '2025-09-29 04:58:03');

-- --------------------------------------------------------

--
-- Table structure for table `itu_sectors`
--

CREATE TABLE `itu_sectors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `agency_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `itu_sectors`
--

INSERT INTO `itu_sectors` (`id`, `agency_id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'sector 1', NULL, NULL, NULL),
(2, 1, 'sector 1', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `itu_sector_groups`
--

CREATE TABLE `itu_sector_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sector_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `itu_sector_groups`
--

INSERT INTO `itu_sector_groups` (`id`, `sector_id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'group 1', NULL, NULL, NULL),
(2, 1, 'group 1', NULL, NULL, NULL);

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
-- Table structure for table `meeting_calendars`
--

CREATE TABLE `meeting_calendars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `color` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meeting_calendars`
--

INSERT INTO `meeting_calendars` (`id`, `title`, `date`, `color`, `created_at`, `updated_at`) VALUES
(1, 'Itu meeting', '2025-09-04', '#6366f1', '2025-09-30 01:58:50', '2025-09-30 01:58:50'),
(2, 'test naman', '2025-09-18', '#7cf264', '2025-09-30 05:07:36', '2025-09-30 05:07:36');

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
(4, '2024_03_18_000000_create_content_table', 1),
(5, '2024_03_21_000001_create_it_support_automation_tables', 1),
(6, '2025_04_06_164110_add_description_and_status_to_services_table', 1),
(7, '2025_04_06_164111_create_cta_sections_table', 1),
(8, '2025_04_06_164112_create_faqs_table', 1),
(9, '2025_04_06_164113_create_testimonials_table', 1),
(10, '2025_04_06_204155_ensure_longtext_descriptions', 1),
(11, '2025_06_06_061034_add_missing_columns_for_smart_ai_workforce', 1),
(12, '2025_06_29_183800_add_subtitle_to_service_features_sections_table', 1),
(13, '2025_06_30_131357_create_blog_categories_table', 1),
(14, '2025_06_30_142655_create_news_categories_table', 1),
(15, '2025_07_04_152434_create_gallery_images_table', 1),
(16, '2025_07_05_162553_create_leads_table', 1),
(17, '2025_07_05_171907_add_phone_to_leads_table', 1),
(18, '2025_07_13_173641_add_two_factor_columns_to_users_table', 1),
(19, '2025_07_13_173740_create_personal_access_tokens_table', 1),
(20, '2025_07_13_173912_create_permission_tables', 1),
(21, '2025_07_14_053025_create_blogs_table', 1),
(22, '2025_07_14_053125_create_news_table', 1),
(23, '2025_07_14_115508_create_pages_table', 1),
(24, '2025_07_14_120313_create_galleries_table', 1),
(25, '2025_07_14_122140_add_poster_to_galleries_table', 1),
(26, '2025_07_14_200354_create_news_letters_table', 1),
(27, '2025_09_09_074905_create_qrp_forms_table', 2),
(28, '2025_09_04_065203_create_personal_performas_table', 3),
(29, '2025_09_16_083211_create_orms_table', 4),
(30, '2025_09_17_071138_create_profiles_table', 5),
(31, '2025_09_21_071854_create_agencies_table', 6),
(32, '2025_09_21_071923_create_itu_sectors_table', 7),
(33, '2025_09_21_074810_create_countries_table', 8),
(34, '2025_09_21_094435_create_divisions_table', 9),
(35, '2025_09_21_094437_create_designations_table', 10),
(36, '2025_09_21_094431_create_units_table', 11),
(37, '2025_09_25_032829_create_press_releases_table', 12),
(38, '2025_09_04_072453_create_orps_table', 13),
(39, '2025_09_28_183601_create_contacts_table', 14),
(40, '2025_09_28_184954_create_brochures_table', 15),
(41, '2025_09_29_094809_create_promotional_videos_table', 16),
(42, '2025_09_29_102006_create_international_forms_table', 17),
(43, '2025_09_30_071005_create_meeting_calendars_table', 18),
(44, '2025_09_30_073110_create_sliders_table', 19),
(45, '2025_09_30_081035_create_minister_messages_table', 20),
(46, '2025_10_01_095710_create_notifications_table', 21),
(47, '2025_10_15_090528_create_tour_reports_table', 22),
(48, '2025_10_16_084946_create_achievements_table', 23);

-- --------------------------------------------------------

--
-- Table structure for table `minister_messages`
--

CREATE TABLE `minister_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `minister_messages`
--

INSERT INTO `minister_messages` (`id`, `name`, `title`, `photo`, `message`, `created_at`, `updated_at`) VALUES
(1, 'test name', 'Message from the Hon\'ble Minister of Communications', 'minister_photos/ulnw98YJ6iN1zR9lHhjv2kKKc85pwoIJxhok2va3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Donec vel nisl vel nulla scelerisque accumsan.', '2025-09-30 02:52:32', '2025-09-30 02:52:32'),
(2, 'test name', 'Message from  Hon\'ble Minister of State', 'minister_photos/5w5IHmdaxZaYspq3WHwtJrZMxblXsbR988omCMA5.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Donec vel nisl vel nulla scelerisque accumsan.', '2025-09-30 02:54:41', '2025-09-30 02:54:41');

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 2),
(1, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 4),
(3, 'App\\Models\\User', 1),
(3, 'App\\Models\\User', 5),
(4, 'App\\Models\\User', 6);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `message` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `status` enum('unread','read') NOT NULL DEFAULT 'unread',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `message`, `url`, `status`, `created_at`, `updated_at`) VALUES
(1, 12, 'You have an invitation for a meeting. Please fill personal performa.', 'http://127.0.0.1:8001/personal-performa/create?meeting_id=16', 'unread', '2025-10-01 04:28:23', '2025-10-01 04:28:23'),
(2, 1265, 'You have an invitation for a meeting. Please fill personal performa.', 'http://127.0.0.1:8001/personal-performa/create?meeting_id=17', 'unread', '2025-10-01 04:42:57', '2025-10-01 04:42:57'),
(3, 1265, 'You have an invitation for a meeting. Please fill personal performa.', 'http://127.0.0.1:8002/personal-performa/create?meeting_id=18', 'unread', '2025-10-08 03:42:34', '2025-10-08 03:42:34'),
(4, 1265, 'You have an invitation for a meeting. Please fill personal performa.', 'http://127.0.0.1:8002/personal-performa/create?meeting_id=19', 'unread', '2025-10-08 03:42:34', '2025-10-08 03:42:34'),
(5, 1267, 'You have an invitation for a meeting. Please fill personal performa.', 'http://127.0.0.1:8002/personal-performa/create?meeting_id=19', 'unread', '2025-10-08 03:42:34', '2025-10-08 03:42:34'),
(6, 1265, 'You have an invitation for a meeting. Please fill personal performa.', 'http://127.0.0.1:8002/personal-performa/create?meeting_id=20', 'unread', '2025-10-08 03:42:34', '2025-10-08 03:42:34'),
(7, 1265, 'You have an invitation for a meeting. Please fill personal performa.', 'http://127.0.0.1:8002/personal-performa/create?meeting_id=17', 'unread', '2025-10-14 01:06:43', '2025-10-14 01:06:43');

-- --------------------------------------------------------

--
-- Table structure for table `orms`
--

CREATE TABLE `orms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orms`
--

INSERT INTO `orms` (`id`, `title`, `file`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Guidance on nomination of officials for foreign visits, documentation of visit outcomes, and follow-up-reg.', '1.pdf', '12.12.2024', NULL, NULL),
(2, 'Policy Documents for the Participation of Indian Delegation in ITU - Radiocommunication, ITU - Telecommunication Standardization and ITU - Telecommunication Development sector meetings', '2.pdf', '27.01.2025', NULL, NULL),
(3, 'Prioritisation of ITU-R study group questions for future contributions', '3.pdf', '13.03.2025', NULL, NULL),
(4, 'Prioritisation of ITU-T study group questions for future contributions', '4.pdf', '13.03.2025', NULL, NULL),
(5, 'Prioritisation of ITU-D study group questions for future contributions', '5.pdf', '13.03.2025', NULL, NULL),
(6, 'Centralized Handling of Foreign Delegation Proposals', '6.pdf', '24.03.2025', NULL, NULL),
(7, 'Inviting Nominations for the leadership positions, Chair/Vice chair of ITU-D Study Groups', '7.pdf', '29.04.2025', NULL, NULL),
(8, 'Standard Operating Procedure for submitting Contributions to ITU Study Groups', '8.pdf', '26.05.2025', NULL, NULL),
(9, 'Details of foreign tours processed by IR Division, DoT during 2025 as on date by officials of the rank of Joint Secretary to the Government and above as well as the heads of the Department', '9..pdf', '29.05.2025', NULL, NULL),
(10, 'Proposal of MEA for circulation of vacancy notification for the expert positions on the Panel of Experts pursuant to UNSC Resolution 2745-2024', 'file/1758867180_Coral Telecom Ltd - Jaypee Institute of Information Technology, Noida.pdf', '2025-09-27', NULL, '2025-09-26 00:43:00'),
(11, '04.06.2025', '11.pdf', '06.08.2025', NULL, NULL),
(12, 'tttt', 'orm_files/Zr7tjRdMSuncgTthojnaQxT2rP8iLjwBO1oFrDoL.pdf', '2025-09-16', '2025-09-16 06:34:43', '2025-09-16 06:34:43'),
(13, 'title', 'files/1758866257_Admin_Panel_CMS_Document.pdf', '2025-09-27', '2025-09-26 00:27:37', '2025-09-26 00:27:37'),
(14, 'test title', 'file/1760597140_5G Use Case Lab Winners.pdf', '2025-10-16', '2025-10-16 01:15:40', '2025-10-16 01:15:40');

-- --------------------------------------------------------

--
-- Table structure for table `orps`
--

CREATE TABLE `orps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `agency` varchar(255) DEFAULT NULL,
  `agency_other` varchar(255) DEFAULT NULL,
  `itu_type` varchar(255) DEFAULT NULL,
  `meeting_name` varchar(255) DEFAULT NULL,
  `meeting_from` date DEFAULT NULL,
  `meeting_to` date DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `invitation_letter` varchar(255) DEFAULT NULL,
  `similar_meeting` varchar(255) NOT NULL DEFAULT 'No',
  `previous_report` varchar(255) DEFAULT NULL,
  `mode` varchar(255) DEFAULT NULL,
  `staff_no` varchar(255) DEFAULT NULL,
  `officer_name` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `division` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `justification` text DEFAULT NULL,
  `justification_file` varchar(255) DEFAULT NULL,
  `expected_outcome` text DEFAULT NULL,
  `expected_file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` longtext DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `canonical_url` varchar(255) DEFAULT NULL,
  `og_title` varchar(255) DEFAULT NULL,
  `og_description` text DEFAULT NULL,
  `og_image` varchar(255) DEFAULT NULL,
  `twitter_title` varchar(255) DEFAULT NULL,
  `twitter_description` text DEFAULT NULL,
  `twitter_image` varchar(255) DEFAULT NULL,
  `meta_data` longtext DEFAULT NULL,
  `json_ld` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `content`, `meta_title`, `meta_description`, `meta_keywords`, `canonical_url`, `og_title`, `og_description`, `og_image`, `twitter_title`, `twitter_description`, `twitter_image`, `meta_data`, `json_ld`, `created_at`, `updated_at`) VALUES
(1, 'Home Page', 'home-page', NULL, 'title nmn hooda', 'title nmn', 'fdsngj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '2025-08-04 04:56:19', '2025-08-04 04:56:19');

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
-- Table structure for table `performance_stats`
--

CREATE TABLE `performance_stats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `stats` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `performance_stats`
--

INSERT INTO `performance_stats` (`id`, `service_id`, `title`, `subtitle`, `stats`, `created_at`, `updated_at`) VALUES
(1, 1, 'Performance Stats', 'Our AI Workforce delivers measurable results', '\"[{\\\"stat_number\\\":\\\"99%\\\",\\\"stat_title\\\":\\\"Efficiency\\\",\\\"stat_description\\\":\\\"improvement in operations\\\"}]\"', '2025-08-02 10:17:54', '2025-08-02 10:17:54'),
(2, 3, 'Academy Impact Metrics', 'Transforming Careers Globally', '\"[{\\\"stat_number\\\":\\\"10,000+\\\",\\\"stat_title\\\":\\\"Graduates\\\",\\\"stat_description\\\":\\\"Building AI solutions worldwide\\\"},{\\\"stat_number\\\":\\\"95%\\\",\\\"stat_title\\\":\\\"Placement Rate\\\",\\\"stat_description\\\":\\\"Within 6 months of graduation\\\"},{\\\"stat_number\\\":\\\"50+\\\",\\\"stat_title\\\":\\\"Countries\\\",\\\"stat_description\\\":\\\"Our global student community\\\"}]\"', '2025-08-02 10:17:54', '2025-08-02 10:17:54'),
(3, 4, 'Compatible with Leading Enterprise Platforms', 'Seamlessly integrates with your existing technology stack', '\"[{\\\"number\\\":\\\"50+\\\",\\\"label\\\":\\\"Enterprise integrations including Google, ServiceNow, Microsoft, and more\\\"},{\\\"number\\\":\\\"100%\\\",\\\"label\\\":\\\"Cloud-native compatibility across major platforms\\\"},{\\\"number\\\":\\\"24\\\\\\/7\\\",\\\"label\\\":\\\"Automated support and monitoring capabilities\\\"}]\"', '2025-08-02 10:17:54', '2025-08-02 10:17:54'),
(4, 6, 'Performance Stats', 'Our AI Agents for Sales & Marketing deliver measurable results that transform customer engagement', '\"[{\\\"stat_number\\\":\\\"50%\\\",\\\"stat_title\\\":\\\"Agent Turnover Decrease\\\",\\\"stat_description\\\":\\\"reduction in agent turnover\\\"},{\\\"stat_number\\\":\\\">3 min\\\",\\\"stat_title\\\":\\\"Time Saved per Interaction\\\",\\\"stat_description\\\":\\\"with automated call wrap-up\\\"},{\\\"stat_number\\\":\\\"32%\\\",\\\"stat_title\\\":\\\"CSAT Improvement\\\",\\\"stat_description\\\":\\\"increase in customer satisfaction\\\"}]\"', '2025-08-02 10:17:54', '2025-08-02 10:17:57'),
(5, 7, 'Vidhira Performance Metrics', 'Measurable results that demonstrate Vidhira\'s impact', '\"[{\\\"stat_number\\\":\\\">90%\\\",\\\"stat_title\\\":\\\"Customer Engagement Rate\\\",\\\"stat_description\\\":\\\"in virtual interactions\\\"},{\\\"stat_number\\\":\\\"50%\\\",\\\"stat_title\\\":\\\"Customer Retention Improvement\\\",\\\"stat_description\\\":\\\"for personalized experiences\\\"},{\\\"stat_number\\\":\\\"3x\\\",\\\"stat_title\\\":\\\"Higher Conversion Rates\\\",\\\"stat_description\\\":\\\"with interactive sales support\\\"}]\"', '2025-08-02 10:17:54', '2025-08-02 10:17:54'),
(6, 10, 'Performance Stats', 'Our AI Voice Agents deliver measurable results that transform voice-based customer engagement', '\"[{\\\"stat_number\\\":\\\"99.7%\\\",\\\"stat_title\\\":\\\"Intent Recognition\\\",\\\"stat_description\\\":\\\"successful intent recognition accuracy\\\"},{\\\"stat_number\\\":\\\"40%\\\",\\\"stat_title\\\":\\\"Routing Accuracy\\\",\\\"stat_description\\\":\\\"increase in call routing precision\\\"},{\\\"stat_number\\\":\\\"68%\\\",\\\"stat_title\\\":\\\"AHT Reduction\\\",\\\"stat_description\\\":\\\"reduction in average handling time\\\"}]\"', '2025-08-02 10:17:54', '2025-08-02 10:17:54'),
(7, 13, 'Transforming Automotive Services with AI LifeBOT', NULL, '\"[{\\\"stat_number\\\":\\\"90%\\\",\\\"stat_title\\\":\\\"Customer Inquiries Handled\\\",\\\"stat_description\\\":\\\"of customer inquiries handled by AI Agents\\\"},{\\\"stat_number\\\":\\\"45%\\\",\\\"stat_title\\\":\\\"Dealership Efficiency\\\",\\\"stat_description\\\":\\\"increase in dealership efficiency with automated scheduling\\\"},{\\\"stat_number\\\":\\\"40%\\\",\\\"stat_title\\\":\\\"Response Time Reduction\\\",\\\"stat_description\\\":\\\"reduction in roadside assistance response times\\\"}]\"', '2025-08-02 10:17:55', '2025-08-02 10:17:55'),
(8, 14, 'Transforming Aviation & Logistics with AI LifeBOT', 'Measurable results that transform aviation and logistics operations', '\"[{\\\"stat_number\\\":\\\"80%\\\",\\\"stat_title\\\":\\\"Customer Inquiries Handled\\\",\\\"stat_description\\\":\\\"of customer inquiries handled by AI Agents\\\"},{\\\"stat_number\\\":\\\"60%\\\",\\\"stat_title\\\":\\\"Operational Delays Reduced\\\",\\\"stat_description\\\":\\\"reduction in operational delays with AI automation\\\"},{\\\"stat_number\\\":\\\"90%\\\",\\\"stat_title\\\":\\\"Tracking Accuracy\\\",\\\"stat_description\\\":\\\"accuracy in real-time tracking and updates\\\"}]\"', '2025-08-02 10:17:55', '2025-08-02 10:17:55'),
(9, 15, 'Transforming Banking with AI LifeBOT', NULL, '\"[{\\\"stat_number\\\":\\\"90%\\\",\\\"stat_title\\\":\\\"Customer Queries Handled\\\",\\\"stat_description\\\":\\\"of customer queries handled by AI Agents\\\"},{\\\"stat_number\\\":\\\"60%\\\",\\\"stat_title\\\":\\\"Call Center Volume Reduction\\\",\\\"stat_description\\\":\\\"reduction in call center volume\\\"},{\\\"stat_number\\\":\\\"80%\\\",\\\"stat_title\\\":\\\"Customer Satisfaction Increase\\\",\\\"stat_description\\\":\\\"increase in customer satisfaction with AI-driven interactions\\\"}]\"', '2025-08-02 10:17:55', '2025-08-02 10:17:55'),
(10, 16, 'AI Impact Metrics', 'Measurable Business Improvements', '\"[{\\\"stat_number\\\":\\\"40%\\\",\\\"stat_title\\\":\\\"Cost Reduction\\\",\\\"stat_description\\\":\\\"Average savings in customer service operations\\\"},{\\\"stat_number\\\":\\\"24\\\\\\/7\\\",\\\"stat_title\\\":\\\"Availability\\\",\\\"stat_description\\\":\\\"Round-the-clock customer support\\\"},{\\\"stat_number\\\":\\\"85%\\\",\\\"stat_title\\\":\\\"Accuracy Rate\\\",\\\"stat_description\\\":\\\"Precision of modern AI responses\\\"}]\"', '2025-08-02 10:17:55', '2025-08-02 10:17:55'),
(11, 18, 'Cross-Industry Impact Metrics', 'Measurable Results from AI Implementation', '\"[{\\\"stat_number\\\":\\\"40%\\\",\\\"stat_title\\\":\\\"Quality Improvement\\\",\\\"stat_description\\\":\\\"Average improvement in service quality across all case studies.\\\"},{\\\"stat_number\\\":\\\"30%\\\",\\\"stat_title\\\":\\\"Cost Reduction\\\",\\\"stat_description\\\":\\\"Average operational cost savings achieved through AI implementation.\\\"},{\\\"stat_number\\\":\\\"58%\\\",\\\"stat_title\\\":\\\"User Preference\\\",\\\"stat_description\\\":\\\"Users prefer AI-generated responses over traditional search results.\\\"}]\"', '2025-08-02 10:17:55', '2025-08-02 10:17:55'),
(12, 20, 'Performance Stats', 'Our AI Agents for Contact Centers deliver measurable results that transform customer service operations', '\"[{\\\"stat_number\\\":\\\"99.7%\\\",\\\"stat_title\\\":\\\"Intent Recognition\\\",\\\"stat_description\\\":\\\"successful intent understanding\\\"},{\\\"stat_number\\\":\\\"40%\\\",\\\"stat_title\\\":\\\"Routing Accuracy\\\",\\\"stat_description\\\":\\\"improvement in call routing\\\"},{\\\"stat_number\\\":\\\"68%\\\",\\\"stat_title\\\":\\\"AHT Reduction\\\",\\\"stat_description\\\":\\\"lower average handling time\\\"}]\"', '2025-08-02 10:17:55', '2025-08-02 10:17:55'),
(13, 22, 'AI Customer Service Performance Stats', 'Proven Results with AI LifeBOT', '\"[{\\\"stat_number\\\":\\\"95%\\\",\\\"stat_title\\\":\\\"Accurate Query Resolution\\\",\\\"stat_description\\\":\\\"For routine inquiries\\\"},{\\\"stat_number\\\":\\\"30%\\\",\\\"stat_title\\\":\\\"Reduction in Support Costs\\\",\\\"stat_description\\\":\\\"Lower operational expenses with AI automation\\\"},{\\\"stat_number\\\":\\\"40%\\\",\\\"stat_title\\\":\\\"Faster Issue Resolution\\\",\\\"stat_description\\\":\\\"Accelerated customer support with AI\\\"}]\"', '2025-08-02 10:17:55', '2025-08-02 10:17:55'),
(14, 23, 'Deploy AI Agents Seamlessly', 'Multi-Channel Integration Capabilities', '\"[{\\\"stat_number\\\":\\\"Multi-Channel\\\",\\\"stat_title\\\":\\\"Deployment Options\\\",\\\"stat_description\\\":\\\"Engage customers across webchat, WhatsApp, Microsoft Teams, and more.\\\"},{\\\"stat_number\\\":\\\"Secure\\\",\\\"stat_title\\\":\\\"Endpoint Management\\\",\\\"stat_description\\\":\\\"Monitor all AI agent endpoints with robust access controls.\\\"},{\\\"stat_number\\\":\\\"Flexible\\\",\\\"stat_title\\\":\\\"Snapshot Deployments\\\",\\\"stat_description\\\":\\\"Save, version, and restore agent configurations reliably.\\\"}]\"', '2025-08-02 10:17:55', '2025-08-02 10:17:55'),
(15, 24, 'Transforming Education with AI LifeBOT', 'Measurable results that transform learning experiences', '\"[{\\\"stat_number\\\":\\\"80%\\\",\\\"stat_title\\\":\\\"Student Inquiries Handled\\\",\\\"stat_description\\\":\\\"of student inquiries handled by AI Agents\\\"},{\\\"stat_number\\\":\\\"60%\\\",\\\"stat_title\\\":\\\"Administrative Workload Reduced\\\",\\\"stat_description\\\":\\\"reduction in administrative workload for educators\\\"},{\\\"stat_number\\\":\\\"90%\\\",\\\"stat_title\\\":\\\"Student Satisfaction\\\",\\\"stat_description\\\":\\\"student satisfaction with AI-driven academic support\\\"}]\"', '2025-08-02 10:17:55', '2025-08-02 10:17:55'),
(16, 25, 'Experience the Future of Onboarding with Generative AI', 'Measurable results that transform your hiring success', '\"[{\\\"number\\\":\\\"5%\\\",\\\"label\\\":\\\"Reduction in candidate dropout rate\\\"},{\\\"number\\\":\\\"50%\\\",\\\"label\\\":\\\"Higher employee retention among new hires\\\"},{\\\"number\\\":\\\"50%\\\",\\\"label\\\":\\\"Higher productivity in onboarding groups\\\"}]\"', '2025-08-02 10:17:55', '2025-08-02 10:17:55'),
(17, 27, 'Experience the Future of Enterprise Knowledge Management', 'Measurable results that transform your knowledge workflows', '\"[{\\\"number\\\":\\\"75%\\\",\\\"label\\\":\\\"Faster knowledge discovery and retrieval\\\"},{\\\"number\\\":\\\"90%\\\",\\\"label\\\":\\\"Reduction in time spent searching for information\\\"},{\\\"number\\\":\\\"1000+\\\",\\\"label\\\":\\\"Prebuilt enterprise connectors available\\\"}]\"', '2025-08-02 10:17:56', '2025-08-02 10:17:56'),
(18, 28, 'Finance Transformation: Industry Insights', 'Drive Success with AI-Powered Intelligence', '\"[{\\\"number\\\":\\\"61%\\\",\\\"label\\\":\\\"of finance leaders consider AI a top priority within the next 3 years (Source: Gartner)\\\"},{\\\"number\\\":\\\"30%\\\",\\\"label\\\":\\\"increase in productivity and up to 50% cost reduction with AI-based finance solutions (Source: Forrester)\\\"},{\\\"number\\\":\\\"50%\\\",\\\"label\\\":\\\"of finance teams will adopt AI assistants and advanced analytics by 2025 (Source: Gartner)\\\"}]\"', '2025-08-02 10:17:56', '2025-08-02 10:17:56'),
(19, 29, 'Transforming Healthcare with AI LifeBOT', 'Measurable results that transform patient care', '\"[{\\\"stat_number\\\":\\\"85%\\\",\\\"stat_title\\\":\\\"Routine Inquiries Handled\\\",\\\"stat_description\\\":\\\"of routine inquiries handled by AI Agents\\\"},{\\\"stat_number\\\":\\\"70%\\\",\\\"stat_title\\\":\\\"Patient Wait Times Reduced\\\",\\\"stat_description\\\":\\\"reduction in patient wait times\\\"},{\\\"stat_number\\\":\\\"95%\\\",\\\"stat_title\\\":\\\"Patient Satisfaction\\\",\\\"stat_description\\\":\\\"patient satisfaction with AI-driven support\\\"}]\"', '2025-08-02 10:17:56', '2025-08-02 10:17:56'),
(20, 30, 'Achieve Measurable Outcomes', 'Real results with AI-powered helpdesk transformation', '\"[{\\\"number\\\":\\\"70%\\\",\\\"label\\\":\\\"Reduction in ticket volume\\\"},{\\\"number\\\":\\\"40%\\\",\\\"label\\\":\\\"Increase in employee self-service\\\"},{\\\"number\\\":\\\"30%\\\",\\\"label\\\":\\\"Reduction in ticket resolution time\\\"}]\"', '2025-08-02 10:17:56', '2025-08-02 10:17:56'),
(21, 31, 'What Results Can You Expect?', 'Trusted by Global Fortune 500 Enterprises', '\"[{\\\"number\\\":\\\"70%\\\",\\\"label\\\":\\\"Reduction in manual HR service requests\\\"},{\\\"number\\\":\\\"2.5x\\\",\\\"label\\\":\\\"Improvement in resolution time\\\"},{\\\"number\\\":\\\"80%\\\",\\\"label\\\":\\\"Drop in routine HR inquiries\\\"}]\"', '2025-08-02 10:17:56', '2025-08-02 10:17:56'),
(22, 32, 'Transforming Insurance with AI LifeBOT', 'Measurable results that transform insurance services', '\"[{\\\"stat_number\\\":\\\"Significant\\\",\\\"stat_title\\\":\\\"Increase in NPS\\\",\\\"stat_description\\\":\\\"improvement with AI-powered customer service\\\"},{\\\"stat_number\\\":\\\"39%\\\",\\\"stat_title\\\":\\\"Lower AHT\\\",\\\"stat_description\\\":\\\"reduction in handling time within three months\\\"},{\\\"stat_number\\\":\\\"45%\\\",\\\"stat_title\\\":\\\"Faster Response Times\\\",\\\"stat_description\\\":\\\"decrease in average response time\\\"}]\"', '2025-08-02 10:17:56', '2025-08-02 10:17:56'),
(23, 33, 'Transforming Businesses with Proven Results', 'Real outcomes from enterprise customers worldwide', '\"[{\\\"number\\\":\\\"96%\\\",\\\"label\\\":\\\"User Adoption Rate\\\"},{\\\"number\\\":\\\"99%\\\",\\\"label\\\":\\\"Employee Satisfaction Score\\\"},{\\\"number\\\":\\\"80%\\\",\\\"label\\\":\\\"Decrease in IT Queries\\\"},{\\\"number\\\":\\\"99%\\\",\\\"label\\\":\\\"Query Resolution Rate\\\"}]\"', '2025-08-02 10:17:56', '2025-08-02 10:17:56'),
(24, 34, 'Breakthrough Results in Just 6 Weeks', 'Trusted by Global Enterprises, Including Fortune 500 Leaders', '\"[{\\\"number\\\":\\\"75%\\\",\\\"label\\\":\\\"Boost in service desk productivity\\\"},{\\\"number\\\":\\\"98%\\\",\\\"label\\\":\\\"Accuracy in ticket triage and routing\\\"},{\\\"number\\\":\\\"40%\\\",\\\"label\\\":\\\"Reduction in resolution time\\\"}]\"', '2025-08-02 10:17:57', '2025-08-02 10:17:57'),
(25, 35, 'Proven Results: Success with Godrej', 'AI Lifebot delivers measurable impact for enterprise IT support. Here\'s how we transformed outcomes for Godrej:', '\"[{\\\"number\\\":\\\"80%\\\",\\\"label\\\":\\\"Decrease in how-to queries\\\"},{\\\"number\\\":\\\"99.97%\\\",\\\"label\\\":\\\"Faster resolution for common IT issues\\\"},{\\\"number\\\":\\\"96.6%\\\",\\\"label\\\":\\\"Sessions rated helpful with accurate resolutions\\\"}]\"', '2025-08-02 10:17:57', '2025-08-02 10:17:57'),
(26, 37, 'Transforming Manufacturing with AI FactoryBOT', 'Measurable results that transform industrial operations', '\"[{\\\"stat_number\\\":\\\"80%\\\",\\\"stat_title\\\":\\\"Routine Inquiries Handled\\\",\\\"stat_description\\\":\\\"of routine inquiries handled by AI Agents\\\"},{\\\"stat_number\\\":\\\"60%\\\",\\\"stat_title\\\":\\\"Production Downtime Reduced\\\",\\\"stat_description\\\":\\\"reduction in production downtime\\\"},{\\\"stat_number\\\":\\\"90%\\\",\\\"stat_title\\\":\\\"Predictive Maintenance Accuracy\\\",\\\"stat_description\\\":\\\"accuracy in predictive maintenance alerts\\\"}]\"', '2025-08-02 10:17:57', '2025-08-02 10:17:57'),
(27, 40, 'Proven Procurement Transformation Results', 'Trusted by Leading Global Enterprises, Including Fortune 500 Organizations', '\"[{\\\"number\\\":\\\"80%\\\",\\\"label\\\":\\\"Time savings in critical procurement use cases\\\"},{\\\"number\\\":\\\"58%\\\",\\\"label\\\":\\\"Of supply chain processes can be restructured using AI\\\"},{\\\"number\\\":\\\"29%\\\",\\\"label\\\":\\\"Of working hours redirected to strategic activities\\\"}]\"', '2025-08-02 10:17:57', '2025-08-02 10:17:57'),
(28, 41, 'Transforming Public Services & Utilities with AI LifeBOT', 'Measurable results that transform citizen services', '\"[{\\\"stat_number\\\":\\\"80%\\\",\\\"stat_title\\\":\\\"Routine Inquiries Resolved\\\",\\\"stat_description\\\":\\\"reducing the workload on human agents\\\"},{\\\"stat_number\\\":\\\"60%\\\",\\\"stat_title\\\":\\\"Faster Service Processing\\\",\\\"stat_description\\\":\\\"improving efficiency in citizen interactions\\\"},{\\\"stat_number\\\":\\\"90%\\\",\\\"stat_title\\\":\\\"Citizen Satisfaction\\\",\\\"stat_description\\\":\\\"AI-driven support enhances trust, accessibility, and response times\\\"}]\"', '2025-08-02 10:17:57', '2025-08-02 10:17:57'),
(29, 42, 'What the Industry Is Saying About AI in Sales', 'Trusted by Global Fortune 500 Enterprises', '\"[{\\\"number\\\":\\\"15%\\\",\\\"label\\\":\\\"Boost in sales productivity (Source: Forrester)\\\"},{\\\"number\\\":\\\"80%\\\",\\\"label\\\":\\\"Of B2B sales interactions will use AI by 2025 (Source: Gartner)\\\"},{\\\"number\\\":\\\"4.2x\\\",\\\"label\\\":\\\"More likely to use AI than low-performing teams (Source: Salesforce)\\\"}]\"', '2025-08-02 10:17:57', '2025-08-02 10:17:57'),
(30, 43, 'Revolutionizing Travel & Tourism with AI LifeBOT', 'Measurable results that transform travel experiences', '\"[{\\\"stat_number\\\":\\\"85%\\\",\\\"stat_title\\\":\\\"Routine Travel Inquiries Handled\\\",\\\"stat_description\\\":\\\"reducing reliance on human agents\\\"},{\\\"stat_number\\\":\\\"50%\\\",\\\"stat_title\\\":\\\"Faster Booking & Check-in\\\",\\\"stat_description\\\":\\\"eliminating delays and improving traveler experience\\\"},{\\\"stat_number\\\":\\\"92%\\\",\\\"stat_title\\\":\\\"Traveler Satisfaction Rate\\\",\\\"stat_description\\\":\\\"AI-driven interactions enhance customer service quality\\\"}]\"', '2025-08-02 10:17:58', '2025-08-02 10:17:58'),
(31, 44, 'Technical Specifications', 'Platform Performance & Capabilities', '\"[{\\\"stat_number\\\":\\\"99.9%\\\",\\\"stat_title\\\":\\\"API Uptime\\\",\\\"stat_description\\\":\\\"Enterprise-grade reliability with global CDN and load balancing.\\\"},{\\\"stat_number\\\":\\\"<100ms\\\",\\\"stat_title\\\":\\\"Response Time\\\",\\\"stat_description\\\":\\\"Average API response time for optimal user experience.\\\"},{\\\"stat_number\\\":\\\"50K+\\\",\\\"stat_title\\\":\\\"Concurrent Users\\\",\\\"stat_description\\\":\\\"Horizontal scaling capabilities for enterprise workloads.\\\"}]\"', '2025-08-02 10:17:58', '2025-08-02 10:17:58'),
(32, 46, 'Performance Stats', 'Our AI Voice Agents deliver measurable results that transform customer service operations', '\"[{\\\"stat_number\\\":\\\"99.7%\\\",\\\"stat_title\\\":\\\"Intent Recognition\\\",\\\"stat_description\\\":\\\"successful intent understanding\\\"},{\\\"stat_number\\\":\\\"40%\\\",\\\"stat_title\\\":\\\"Routing Accuracy\\\",\\\"stat_description\\\":\\\"improvement in call routing\\\"},{\\\"stat_number\\\":\\\"68%\\\",\\\"stat_title\\\":\\\"Efficiency Gain\\\",\\\"stat_description\\\":\\\"reduction in average handling time\\\"}]\"', '2025-08-02 10:17:58', '2025-08-02 10:17:58'),
(33, 47, 'Transforming Retail & E-Commerce with AI LifeBOT', 'Measurable results that transform shopping experiences', '\"[{\\\"stat_number\\\":\\\"75%\\\",\\\"stat_title\\\":\\\"Routine Inquiries Handled\\\",\\\"stat_description\\\":\\\"reducing workload for human agents\\\"},{\\\"stat_number\\\":\\\"40%\\\",\\\"stat_title\\\":\\\"Faster Checkout Process\\\",\\\"stat_description\\\":\\\"minimizing cart abandonment with AI-powered assistance\\\"},{\\\"stat_number\\\":\\\"30%\\\",\\\"stat_title\\\":\\\"Customer Retention Increase\\\",\\\"stat_description\\\":\\\"personalized AI-driven engagement improves brand loyalty\\\"}]\"', '2025-08-02 10:17:58', '2025-08-02 10:17:58');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'users.view', 'web', '2025-08-02 10:17:53', '2025-08-02 10:17:53'),
(2, 'users.create', 'web', '2025-08-02 10:17:53', '2025-08-02 10:17:53'),
(3, 'users.edit', 'web', '2025-08-02 10:17:53', '2025-08-02 10:17:53'),
(4, 'users.delete', 'web', '2025-08-02 10:17:53', '2025-08-02 10:17:53'),
(5, 'roles.view', 'web', '2025-08-02 10:17:53', '2025-08-02 10:17:53'),
(6, 'roles.create', 'web', '2025-08-02 10:17:53', '2025-08-02 10:17:53'),
(7, 'roles.edit', 'web', '2025-08-02 10:17:53', '2025-08-02 10:17:53'),
(8, 'roles.delete', 'web', '2025-08-02 10:17:53', '2025-08-02 10:17:53'),
(9, 'permissions.view', 'web', '2025-08-02 10:17:53', '2025-08-02 10:17:53'),
(10, 'permissions.create', 'web', '2025-08-02 10:17:53', '2025-08-02 10:17:53'),
(11, 'permissions.edit', 'web', '2025-08-02 10:17:53', '2025-08-02 10:17:53'),
(12, 'permissions.delete', 'web', '2025-08-02 10:17:53', '2025-08-02 10:17:53'),
(65, 'submission.personal_performa.view', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(66, 'submission.personal_performa.create', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(67, 'submission.personal_performa.edit', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(68, 'submission.personal_performa.delete', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(69, 'submission.tour_reports.view', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(70, 'submission.tour_reports.create', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(71, 'submission.tour_reports.edit', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(72, 'submission.tour_reports.delete', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(73, 'generation.personal_performa.view', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(74, 'generation.personal_performa.create', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(75, 'generation.personal_performa.edit', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(76, 'generation.personal_performa.delete', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(77, 'generation.visit_tracker.view', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(78, 'generation.visit_tracker.create', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(79, 'generation.visit_tracker.edit', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(80, 'generation.visit_tracker.delete', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(81, 'generation.sanction_memos.view', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(82, 'generation.sanction_memos.create', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(83, 'generation.sanction_memos.edit', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(84, 'generation.sanction_memos.delete', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(85, 'generation.qrp.view', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(86, 'generation.qrp.create', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(87, 'generation.qrp.edit', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(88, 'generation.qrp.delete', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(89, 'repository.tour_reports.view', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(90, 'repository.tour_reports.create', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(91, 'repository.tour_reports.edit', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(92, 'repository.tour_reports.delete', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(93, 'repository.presentations.view', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(94, 'repository.presentations.create', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(95, 'repository.presentations.edit', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(96, 'repository.presentations.delete', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(97, 'repository.action_points.view', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(98, 'repository.action_points.create', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(99, 'repository.action_points.edit', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(100, 'repository.action_points.delete', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(101, 'repository.officer_database.view', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(102, 'repository.officer_database.create', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(103, 'repository.officer_database.edit', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(104, 'repository.officer_database.delete', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(105, 'repository.itu_focal_points.view', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(106, 'repository.itu_focal_points.create', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(107, 'repository.itu_focal_points.edit', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(108, 'repository.itu_focal_points.delete', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(109, 'repository.indian_mission_contact.view', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(110, 'repository.indian_mission_contact.create', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(111, 'repository.indian_mission_contact.edit', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(112, 'repository.indian_mission_contact.delete', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(113, 'repository.country_mission_master_sheet.view', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(114, 'repository.country_mission_master_sheet.create', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(115, 'repository.country_mission_master_sheet.edit', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(116, 'repository.country_mission_master_sheet.delete', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(117, 'engagement.bilateral_tracker.view', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(118, 'engagement.bilateral_tracker.create', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(119, 'engagement.bilateral_tracker.edit', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(120, 'engagement.bilateral_tracker.delete', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(121, 'engagement.multilateral_tracker.view', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(122, 'engagement.multilateral_tracker.create', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(123, 'engagement.multilateral_tracker.edit', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(124, 'engagement.multilateral_tracker.delete', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(125, 'engagement.mou_foreign_countries.view', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(126, 'engagement.mou_foreign_countries.create', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(127, 'engagement.mou_foreign_countries.edit', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(128, 'engagement.mou_foreign_countries.delete', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(129, 'engagement.country_profile.view', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(130, 'engagement.country_profile.create', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(131, 'engagement.country_profile.edit', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(132, 'engagement.country_profile.delete', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(133, 'engagement.itu_council_tracker.view', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(134, 'engagement.itu_council_tracker.create', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(135, 'engagement.itu_council_tracker.edit', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(136, 'engagement.itu_council_tracker.delete', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(137, 'engagement.itu_council_emails.view', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(138, 'engagement.itu_council_emails.create', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(139, 'engagement.itu_council_emails.edit', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(140, 'engagement.itu_council_emails.delete', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(141, 'reports.yearwise_foreign_visits.view', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(142, 'reports.yearwise_foreign_visits.create', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(143, 'reports.yearwise_foreign_visits.edit', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(144, 'reports.yearwise_foreign_visits.delete', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(145, 'reports.officer_participation.view', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(146, 'reports.officer_participation.create', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(147, 'reports.officer_participation.edit', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(148, 'reports.officer_participation.delete', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(149, 'reports.bilateral_summary.view', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(150, 'reports.bilateral_summary.create', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(151, 'reports.bilateral_summary.edit', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(152, 'reports.bilateral_summary.delete', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(153, 'reports.multilateral_summary.view', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(154, 'reports.multilateral_summary.create', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(155, 'reports.multilateral_summary.edit', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(156, 'reports.multilateral_summary.delete', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(157, 'reports.visit_tracker.view', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(158, 'reports.visit_tracker.create', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(159, 'reports.visit_tracker.edit', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(160, 'reports.visit_tracker.delete', 'web', '2025-09-05 08:30:34', '2025-09-05 08:30:34'),
(161, 'submission.qrp.create', 'web', '2025-09-09 10:11:23', '2025-09-09 10:11:23'),
(162, 'submission.qrp.delete', 'web', '2025-09-09 10:11:23', '2025-09-09 10:11:23'),
(163, 'submission.qrp.edit', 'web', '2025-09-09 10:11:23', '2025-09-09 10:11:23'),
(164, 'submission.qrp.view', 'web', '2025-09-09 10:11:23', '2025-09-09 10:11:23');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_performas`
--

CREATE TABLE `personal_performas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meeting_id` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `service_other` varchar(255) DEFAULT NULL,
  `staff_no` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `designation` varchar(255) NOT NULL,
  `posting` varchar(255) NOT NULL,
  `dob` date DEFAULT NULL,
  `visits` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`visits`)),
  `property_return_date` date DEFAULT NULL,
  `pay_level` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `aadhaar` varchar(255) DEFAULT NULL,
  `pan` varchar(255) DEFAULT NULL,
  `tour_report` varchar(255) DEFAULT NULL,
  `justification_file` varchar(255) DEFAULT NULL,
  `event_name` varchar(255) DEFAULT NULL,
  `event_location` varchar(255) DEFAULT NULL,
  `event_date_from` date DEFAULT NULL,
  `event_date_to` date DEFAULT NULL,
  `event_brief` text DEFAULT NULL,
  `justification` text DEFAULT NULL,
  `expected_outcomes` text DEFAULT NULL,
  `is_itu` enum('Yes','No') NOT NULL DEFAULT 'No',
  `itu_current_roles` varchar(255) DEFAULT NULL,
  `itu_questions_rapporteur` int(11) DEFAULT NULL,
  `itu_questions_associate` int(11) DEFAULT NULL,
  `itu_editor_items` int(11) DEFAULT NULL,
  `itu_previous_roles` varchar(255) DEFAULT NULL,
  `itu_work_items` int(11) DEFAULT NULL,
  `itu_proposed` int(11) DEFAULT NULL,
  `itu_consented` int(11) DEFAULT NULL,
  `itu_in_progress` int(11) DEFAULT NULL,
  `itu_recommendations` int(11) DEFAULT NULL,
  `itu_reports` int(11) DEFAULT NULL,
  `itu_online_meetings` int(11) DEFAULT NULL,
  `itu_physical_meetings` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_performas`
--

INSERT INTO `personal_performas` (`id`, `meeting_id`, `title`, `service`, `service_other`, `staff_no`, `user_id`, `designation`, `posting`, `dob`, `visits`, `property_return_date`, `pay_level`, `mobile`, `email`, `aadhaar`, `pan`, `tour_report`, `justification_file`, `event_name`, `event_location`, `event_date_from`, `event_date_to`, `event_brief`, `justification`, `expected_outcomes`, `is_itu`, `itu_current_roles`, `itu_questions_rapporteur`, `itu_questions_associate`, `itu_editor_items`, `itu_previous_roles`, `itu_work_items`, `itu_proposed`, `itu_consented`, `itu_in_progress`, `itu_recommendations`, `itu_reports`, `itu_online_meetings`, `itu_physical_meetings`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Mr.', 'ITS', NULL, '45525', 1, 'SO', 'HQ', '2025-09-11', '\"{\\\"1\\\":{\\\"meeting\\\":\\\"test m 1\\\",\\\"from\\\":\\\"2025-09-10\\\",\\\"to\\\":\\\"2025-09-10\\\",\\\"country\\\":\\\"India\\\",\\\"city\\\":\\\"Beri\\\"},\\\"2\\\":{\\\"meeting\\\":\\\"test m 2\\\",\\\"from\\\":\\\"2025-09-18\\\",\\\"to\\\":\\\"2025-09-16\\\",\\\"country\\\":\\\"India\\\",\\\"city\\\":\\\"Chandigarh\\\"},\\\"3\\\":{\\\"meeting\\\":\\\"test m 3\\\",\\\"from\\\":\\\"2025-09-15\\\",\\\"to\\\":\\\"2025-09-16\\\",\\\"country\\\":\\\"India\\\",\\\"city\\\":\\\"JHAJJAR\\\"},\\\"4\\\":{\\\"meeting\\\":\\\"test m 1\\\",\\\"from\\\":\\\"2025-09-14\\\",\\\"to\\\":\\\"2025-09-25\\\",\\\"country\\\":\\\"India\\\",\\\"city\\\":\\\"JHAJJAR\\\"}}\"', '2025-09-14', 'Level 1', '+1234567890', 'admin@irwing.com', '842842053237', 'chopn7848a', NULL, NULL, 'test event', 'chandigarh', '2025-09-14', '2025-09-15', 'sdfgfdg', 'gsdgsgdh', 'hshsfgh', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', '2025-09-12 14:36:49', '2025-09-18 00:54:45'),
(2, NULL, 'Mr.', 'ITS', NULL, '805900', 4, 'SO', 'HQ', '1998-10-24', '\"{\\\"1\\\":{\\\"meeting\\\":\\\"test m 1\\\",\\\"from\\\":\\\"2025-10-09\\\",\\\"to\\\":\\\"2025-10-10\\\",\\\"country\\\":\\\"India\\\",\\\"city\\\":\\\"Chandigarh\\\"},\\\"2\\\":{\\\"meeting\\\":null,\\\"from\\\":null,\\\"to\\\":null,\\\"country\\\":null,\\\"city\\\":null},\\\"3\\\":{\\\"meeting\\\":null,\\\"from\\\":null,\\\"to\\\":null,\\\"country\\\":null,\\\"city\\\":null},\\\"4\\\":{\\\"meeting\\\":null,\\\"from\\\":null,\\\"to\\\":null,\\\"country\\\":null,\\\"city\\\":null}}\"', '2025-10-10', 'Level 3', '9898989898', 'officer@irwing.com', '842842053237', 'chopn7848a', NULL, NULL, 'test event', 'chandigarh', '2025-10-08', '2025-10-10', 'iuhhihhuh', 'fsg', 'gs', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', '2025-10-07 03:21:07', '2025-10-07 03:21:07');

-- --------------------------------------------------------

--
-- Table structure for table `press_releases`
--

CREATE TABLE `press_releases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `Url` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `ministry` varchar(255) DEFAULT NULL,
  `date` date NOT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `press_releases`
--

INSERT INTO `press_releases` (`id`, `title`, `Url`, `description`, `ministry`, `date`, `pdf`, `created_at`, `updated_at`) VALUES
(1, 'Prime Minister pays tribute to Pandit Deendayal Upadhyaya on His Jayanti', 'The President of India to Confer National Geoscience Awards 2024 on 26th September 2025 in New Delhi', NULL, 'Prime Minister\'s Office', '2025-09-25', NULL, NULL, NULL),
(2, 'The President of India to Confer National Geoscience Awards 2024 on 26th September 2025 in New Delhi', 'The President of India to Confer National Geoscience Awards 2024 on 26th September 2025 in New Delhi', NULL, 'Ministry of Mines', '2025-09-25', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(255) DEFAULT NULL,
  `profile_completed` varchar(255) DEFAULT NULL,
  `year_of_allotment` varchar(255) DEFAULT NULL,
  `date_of_entry_in_service` varchar(255) DEFAULT NULL,
  `staff_no` varchar(255) DEFAULT NULL,
  `officer_name` varchar(255) DEFAULT NULL,
  `present_posting` varchar(255) DEFAULT NULL,
  `office_address` varchar(255) DEFAULT NULL,
  `date_of_joining_office` varchar(255) DEFAULT NULL,
  `office_phone` varchar(255) DEFAULT NULL,
  `office_fax` varchar(255) DEFAULT NULL,
  `office_email` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `native_district` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `educational_qualifications` varchar(255) DEFAULT NULL,
  `languages_known` varchar(255) DEFAULT NULL,
  `date_of_entry_in_present_grade` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `level_in_pay_matrix` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `email_id` varchar(255) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `serving_status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `profile_completed`, `year_of_allotment`, `date_of_entry_in_service`, `staff_no`, `officer_name`, `present_posting`, `office_address`, `date_of_joining_office`, `office_phone`, `office_fax`, `office_email`, `date_of_birth`, `native_district`, `state`, `educational_qualifications`, `languages_known`, `date_of_entry_in_present_grade`, `grade`, `level_in_pay_matrix`, `mobile_no`, `email_id`, `language`, `serving_status`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, '21348', 'MANISH KUMAR SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1985-01-04 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(2, NULL, NULL, NULL, NULL, '111026', 'RAMKUMAR RAMNATH KORI', NULL, NULL, NULL, NULL, NULL, NULL, '1966-07-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(3, NULL, NULL, NULL, NULL, '20901', 'SANJAY KUMAR MADHUKAR', NULL, NULL, NULL, NULL, NULL, NULL, '1969-05-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(4, NULL, NULL, NULL, NULL, '21416', 'A ALEX VIKAS', NULL, NULL, NULL, NULL, NULL, NULL, '1990-08-19 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(5, NULL, NULL, NULL, NULL, '20865', 'A NAGA JYOTI', NULL, NULL, NULL, NULL, NULL, NULL, '1972-05-13 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(6, NULL, NULL, NULL, NULL, '21067', 'A SRAVAN KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1971-04-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(7, NULL, NULL, NULL, NULL, '111032', 'A.K. GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1971-10-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(8, NULL, NULL, NULL, NULL, '20300', 'A.V.SRIKUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1970-08-06 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(9, NULL, NULL, NULL, NULL, '20080', 'ABBAS SYED TAUSIF', NULL, NULL, NULL, NULL, NULL, NULL, '1967-06-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(10, NULL, NULL, NULL, NULL, '20431', 'ABDUL KAYUM', NULL, NULL, NULL, NULL, NULL, NULL, '1967-12-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(11, NULL, NULL, NULL, NULL, '20971', 'ABHAY KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1971-05-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(12, NULL, NULL, NULL, NULL, '20079', 'ABHAY SHANKER VERMA', NULL, NULL, NULL, NULL, NULL, NULL, '1965-10-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(13, NULL, NULL, NULL, NULL, '21281', 'ABHINAV KUMAR VERMA', NULL, NULL, NULL, NULL, NULL, NULL, '1985-02-19 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(14, NULL, NULL, NULL, NULL, '21445', 'ABHISHEK SHUKLA', NULL, NULL, NULL, NULL, NULL, NULL, '1992-07-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(15, NULL, NULL, NULL, NULL, '21271', 'ABHISHEK SINGH CHAUHAN', NULL, NULL, NULL, NULL, NULL, NULL, '1987-01-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(16, NULL, NULL, NULL, NULL, '20518', 'ACHINTYA BISWAS', NULL, NULL, NULL, NULL, NULL, NULL, '1969-07-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(17, NULL, NULL, NULL, NULL, '21461', 'Adepu Mounika', NULL, NULL, NULL, NULL, NULL, NULL, '1993-01-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(18, NULL, NULL, NULL, NULL, '8625', 'ADHIR KUMAR SINGHAL', NULL, NULL, NULL, NULL, NULL, NULL, '1964-09-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(19, NULL, NULL, NULL, NULL, '21280', 'ADITYA SHARMA', NULL, NULL, NULL, NULL, NULL, NULL, '1987-05-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(20, NULL, NULL, NULL, NULL, '20976', 'ADITYA SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1975-06-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(21, NULL, NULL, NULL, NULL, '20858', 'AJAI CHANDRA', NULL, NULL, NULL, NULL, NULL, NULL, '1969-12-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(22, NULL, NULL, NULL, NULL, '20277', 'AJAY KAMAL', NULL, NULL, NULL, NULL, NULL, NULL, '1967-05-13 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(23, NULL, NULL, NULL, NULL, '21413', 'AJAY KOTHARI', NULL, NULL, NULL, NULL, NULL, NULL, '1991-10-13 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(24, NULL, NULL, NULL, NULL, '111034', 'AJAY KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1969-11-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(25, NULL, NULL, NULL, NULL, '20175', 'AJAY KUMAR KARARHA', NULL, NULL, NULL, NULL, NULL, NULL, '1967-07-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(26, NULL, NULL, NULL, NULL, '21439', 'AJAY KUMAR MEENA', NULL, NULL, NULL, NULL, NULL, NULL, '1992-11-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(27, NULL, NULL, NULL, NULL, '20574', 'AJAY KUMAR NEMA', NULL, NULL, NULL, NULL, NULL, NULL, '1970-07-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(28, NULL, NULL, NULL, NULL, '8319', 'Ajay Kumar Sahu', NULL, NULL, NULL, NULL, NULL, NULL, '1964-06-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(29, NULL, NULL, NULL, NULL, '20498', 'AJAY KUMAR SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1966-08-07 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(30, NULL, NULL, NULL, NULL, '20917', 'AJAY M MHETRE', NULL, NULL, NULL, NULL, NULL, NULL, '1972-09-13 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(31, NULL, NULL, NULL, NULL, '21412', 'AJAY NAIN', NULL, NULL, NULL, NULL, NULL, NULL, '1993-05-07 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(32, NULL, NULL, NULL, NULL, '20522', 'AJAY NEGI', NULL, NULL, NULL, NULL, NULL, NULL, '1970-10-13 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(33, NULL, NULL, NULL, NULL, '20427', 'AJAY PAL SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1966-03-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(34, NULL, NULL, NULL, NULL, '21275', 'AJAY SINGH CHAUHAN', NULL, NULL, NULL, NULL, NULL, NULL, '1983-07-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(35, NULL, NULL, NULL, NULL, '21498', 'Ajay Wavhale', NULL, NULL, NULL, NULL, NULL, NULL, '1993-07-22 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(36, NULL, NULL, NULL, NULL, '20519', 'AJEET KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1967-04-19 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(37, NULL, NULL, NULL, NULL, '21387', 'AJEET SHARMA', NULL, NULL, NULL, NULL, NULL, NULL, '1990-10-31 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(38, NULL, NULL, NULL, NULL, '21458', 'Akash Kumar Agrawal', NULL, NULL, NULL, NULL, NULL, NULL, '1991-10-24 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(39, NULL, NULL, NULL, NULL, '20612', 'AKHIL SAXENA', NULL, NULL, NULL, NULL, NULL, NULL, '1969-09-04 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(40, NULL, NULL, NULL, NULL, '20326', 'AKHILESH GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1969-07-27 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(41, NULL, NULL, NULL, NULL, '8545', 'AKHILESH KR.GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1965-05-06 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(42, NULL, NULL, NULL, NULL, '20222', 'AKHILESH KUMAR GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1967-07-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(43, NULL, NULL, NULL, NULL, '21036', 'AKHILESH KUMAR TRIVEDI', NULL, NULL, NULL, NULL, NULL, NULL, '1972-06-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(44, NULL, NULL, NULL, NULL, '21212', 'AKMAL HASAN', NULL, NULL, NULL, NULL, NULL, NULL, '1977-01-29 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(45, NULL, NULL, NULL, NULL, '60088', 'Akshat Chourey', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(46, NULL, NULL, NULL, NULL, '20970', 'ALI EHTESHAM', NULL, NULL, NULL, NULL, NULL, NULL, '1975-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(47, NULL, NULL, NULL, NULL, '20049', 'ALOK JAIMAL', NULL, NULL, NULL, NULL, NULL, NULL, '1964-11-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(48, NULL, NULL, NULL, NULL, '20006', 'ALOK KR. MISRA', NULL, NULL, NULL, NULL, NULL, NULL, '1965-01-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(49, NULL, NULL, NULL, NULL, '21331', 'ALOK RANJAN', NULL, NULL, NULL, NULL, NULL, NULL, '1986-03-06 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(50, NULL, NULL, NULL, NULL, '20009', 'ALOK SHUKLA', NULL, NULL, NULL, NULL, NULL, NULL, '1966-12-24 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(51, NULL, NULL, NULL, NULL, '20563', 'ALPANA SHUKLA RAO', NULL, NULL, NULL, NULL, NULL, NULL, '1970-11-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(52, NULL, NULL, NULL, NULL, '21417', 'AMAN CHAWLA', NULL, NULL, NULL, NULL, NULL, NULL, '1989-01-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(53, NULL, NULL, NULL, NULL, '21241', 'AMANDEEP SINGLA', NULL, NULL, NULL, NULL, NULL, NULL, '1979-08-22 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(54, NULL, NULL, NULL, NULL, '20730', 'AMAR SINGH MEENA', NULL, NULL, NULL, NULL, NULL, NULL, '1971-07-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(55, NULL, NULL, NULL, NULL, '60095', 'Amaresh Kumar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:33', '2025-09-17 02:36:33'),
(56, NULL, NULL, NULL, NULL, '21483', 'Amarjeet Kumar', NULL, NULL, NULL, NULL, NULL, NULL, '1997-09-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(57, NULL, NULL, NULL, NULL, '20794', 'AMIN AHMED TAZIR', NULL, NULL, NULL, NULL, NULL, NULL, '1968-11-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(58, NULL, NULL, NULL, NULL, '60003', 'Amit Arora', NULL, NULL, NULL, NULL, NULL, NULL, '1985-11-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(59, NULL, NULL, NULL, NULL, '21180', 'AMIT GARG', NULL, NULL, NULL, NULL, NULL, NULL, '1975-08-19 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(60, NULL, NULL, NULL, NULL, '21126', 'AMIT GHOSAL', NULL, NULL, NULL, NULL, NULL, NULL, '1978-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(61, NULL, NULL, NULL, NULL, '21005', 'AMIT GURDASANI', NULL, NULL, NULL, NULL, NULL, NULL, '1975-03-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(62, NULL, NULL, NULL, NULL, '21405', 'AMIT KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1987-01-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(63, NULL, NULL, NULL, NULL, '21246', 'AMIT KUMAR CHAUHAN', NULL, NULL, NULL, NULL, NULL, NULL, '1979-10-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(64, NULL, NULL, NULL, NULL, '60009', 'Amit Kumar Goyal', NULL, NULL, NULL, NULL, NULL, NULL, '1987-02-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(65, NULL, NULL, NULL, NULL, '21051', 'AMIT KUMAR JHA', NULL, NULL, NULL, NULL, NULL, NULL, '1975-07-07 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(66, NULL, NULL, NULL, NULL, '20878', 'AMIT KUMAR SRIVASTAVA', NULL, NULL, NULL, NULL, NULL, NULL, '1973-07-31 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(67, NULL, NULL, NULL, NULL, '21240', 'AMIT RASTOGI', NULL, NULL, NULL, NULL, NULL, NULL, '1982-02-23 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(68, NULL, NULL, NULL, NULL, '21408', 'AMIT RAWAT', NULL, NULL, NULL, NULL, NULL, NULL, '1992-04-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(69, NULL, NULL, NULL, NULL, '20215', 'AMIT SAXENA', NULL, NULL, NULL, NULL, NULL, NULL, '1965-11-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(70, NULL, NULL, NULL, NULL, '20103', 'AMIT SINGAL', NULL, NULL, NULL, NULL, NULL, NULL, '1966-01-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(71, NULL, NULL, NULL, NULL, '20900', 'AMRENDRA KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1972-01-11 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(72, NULL, NULL, NULL, NULL, '20560', 'ANAND KATOCH', NULL, NULL, NULL, NULL, NULL, NULL, '1970-04-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(73, NULL, NULL, NULL, NULL, '8567', 'ANAND KHARE', NULL, NULL, NULL, NULL, NULL, NULL, '1966-08-07 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(74, NULL, NULL, NULL, NULL, '20361', 'ANAND KUMAR MISRA', NULL, NULL, NULL, NULL, NULL, NULL, '1966-09-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(75, NULL, NULL, NULL, NULL, '20624', 'ANAND KUMAR SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1971-08-29 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(76, NULL, NULL, NULL, NULL, '20819', 'ANIL BHATIA', NULL, NULL, NULL, NULL, NULL, NULL, '1971-03-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(77, NULL, NULL, NULL, NULL, '20058', 'ANIL KR RANJAN', NULL, NULL, NULL, NULL, NULL, NULL, '1966-08-09 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(78, NULL, NULL, NULL, NULL, '21154', 'ANIL KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1975-05-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(79, NULL, NULL, NULL, NULL, '21137', 'ANIL KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1973-02-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(80, NULL, NULL, NULL, NULL, '20569', 'ANIL KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1971-03-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(81, NULL, NULL, NULL, NULL, '21058', 'ANIL KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1970-09-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(82, NULL, NULL, NULL, NULL, '20180', 'ANIL KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1966-07-23 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(83, NULL, NULL, NULL, NULL, '20934', 'ANIL KUMAR AGRAWAL', NULL, NULL, NULL, NULL, NULL, NULL, '1975-10-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(84, NULL, NULL, NULL, NULL, '20949', 'ANIL KUMAR AHIRWAR', NULL, NULL, NULL, NULL, NULL, NULL, '1976-02-27 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(85, NULL, NULL, NULL, NULL, '20386', 'ANIL KUMAR GAUTAM', NULL, NULL, NULL, NULL, NULL, NULL, '1968-02-04 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(86, NULL, NULL, NULL, NULL, '20790', 'ANIL KUMAR GEHLOT', NULL, NULL, NULL, NULL, NULL, NULL, '1969-08-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(87, NULL, NULL, NULL, NULL, '20759', 'ANIL KUMAR GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1972-10-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(88, NULL, NULL, NULL, NULL, '20001', 'ANIL KUMAR GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1968-03-06 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(89, NULL, NULL, NULL, NULL, '20474', 'ANIL KUMAR SUBUDHI', NULL, NULL, NULL, NULL, NULL, NULL, '1967-06-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(90, NULL, NULL, NULL, NULL, '8652', 'ANIL N. DHANORKAR', NULL, NULL, NULL, NULL, NULL, NULL, '1966-08-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(91, NULL, NULL, NULL, NULL, '8536', 'ANIL VERMA', NULL, NULL, NULL, NULL, NULL, NULL, '1965-03-19 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(92, NULL, NULL, NULL, NULL, '21478', 'Anish Kumar Singh ', NULL, NULL, NULL, NULL, NULL, NULL, '1990-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(93, NULL, NULL, NULL, NULL, '20345', 'ANISH MEHTA', NULL, NULL, NULL, NULL, NULL, NULL, '1970-04-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(94, NULL, NULL, NULL, NULL, '20907', 'ANITA RAMADASS', NULL, NULL, NULL, NULL, NULL, NULL, '1972-12-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(95, NULL, NULL, NULL, NULL, '60002', 'Anjaneya Gupta', NULL, NULL, NULL, NULL, NULL, NULL, '1987-08-29 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(96, NULL, NULL, NULL, NULL, '21420', 'ANKIT KUMAR SHARMA', NULL, NULL, NULL, NULL, NULL, NULL, '1990-07-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(97, NULL, NULL, NULL, NULL, '21388', 'ANKIT SHUKLA', NULL, NULL, NULL, NULL, NULL, NULL, '1992-10-29 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(98, NULL, NULL, NULL, NULL, '21338', 'ANKUR GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1987-08-26 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(99, NULL, NULL, NULL, NULL, '21392', 'ANSHUL AGARWAL', NULL, NULL, NULL, NULL, NULL, NULL, '1988-10-09 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(100, NULL, NULL, NULL, NULL, '60081', 'Anshul Kumar Gupta', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(101, NULL, NULL, NULL, NULL, '20773', 'ANSHUMAN GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1971-11-23 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(102, NULL, NULL, NULL, NULL, '21109', 'ANU SHRIVASTAVA', NULL, NULL, NULL, NULL, NULL, NULL, '1974-09-27 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(103, NULL, NULL, NULL, NULL, '60066', 'Anubhav Chaudhary', NULL, NULL, NULL, NULL, NULL, NULL, '1991-07-06 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(104, NULL, NULL, NULL, NULL, '20115', 'ANUP KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1965-07-16 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(105, NULL, NULL, NULL, NULL, '21309', 'ANUPAM ANISH CHAUHAN', NULL, NULL, NULL, NULL, NULL, NULL, '1984-07-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(106, NULL, NULL, NULL, NULL, '20185', 'ANUPAMA SANGHI', NULL, NULL, NULL, NULL, NULL, NULL, '1966-06-16 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(107, NULL, NULL, NULL, NULL, '20487', 'ANURAAG KOCHAR', NULL, NULL, NULL, NULL, NULL, NULL, '1969-08-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(108, NULL, NULL, NULL, NULL, '60111', 'Anurag Deependra gaur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(109, NULL, NULL, NULL, NULL, '21327', 'ANURODH KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1988-02-18 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(110, NULL, NULL, NULL, NULL, '20565', 'ARBIND PRASAD', NULL, NULL, NULL, NULL, NULL, NULL, '1969-01-03 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(111, NULL, NULL, NULL, NULL, '21382', 'ARJUN SHAW', NULL, NULL, NULL, NULL, NULL, NULL, '1990-07-09 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(112, NULL, NULL, NULL, NULL, '21463', 'Arjun Singh', NULL, NULL, NULL, NULL, NULL, NULL, '1993-08-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(113, NULL, NULL, NULL, NULL, '21361', 'ARPIT SHUKLA', NULL, NULL, NULL, NULL, NULL, NULL, '1988-07-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(114, NULL, NULL, NULL, NULL, '21182', 'ARPITA TRIPATHI', NULL, NULL, NULL, NULL, NULL, NULL, '1978-03-11 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(115, NULL, NULL, NULL, NULL, '20373', 'ARUMAYA DAKUA', NULL, NULL, NULL, NULL, NULL, NULL, '1969-11-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(116, NULL, NULL, NULL, NULL, '20186', 'ARUN AGARWAL', NULL, NULL, NULL, NULL, NULL, NULL, '1968-05-26 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(117, NULL, NULL, NULL, NULL, '21199', 'ARUN GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1977-09-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(118, NULL, NULL, NULL, NULL, '20016', 'ARUN KR. VERMA', NULL, NULL, NULL, NULL, NULL, NULL, '1967-06-28 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(119, NULL, NULL, NULL, NULL, '21027', 'ARUN KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1974-01-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(120, NULL, NULL, NULL, NULL, '20264', 'ARUN KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1969-05-27 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(121, NULL, NULL, NULL, NULL, '20701', 'ARUN KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1967-06-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(122, NULL, NULL, NULL, NULL, '20024', 'ARUN KUMAR GARG', NULL, NULL, NULL, NULL, NULL, NULL, '1966-12-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(123, NULL, NULL, NULL, NULL, '20086', 'ARUN KUMAR SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1967-01-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(124, NULL, NULL, NULL, NULL, '21250', 'ARUN KUMAR YADAV', NULL, NULL, NULL, NULL, NULL, NULL, '1977-07-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(125, NULL, NULL, NULL, NULL, '20489', 'ARUN MICHAEL', NULL, NULL, NULL, NULL, NULL, NULL, '1967-09-09 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(126, NULL, NULL, NULL, NULL, '20597', 'ARUN PATI TRIPATHI', NULL, NULL, NULL, NULL, NULL, NULL, '1968-06-24 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(127, NULL, NULL, NULL, NULL, '20891', 'ARUNG SIRAM', NULL, NULL, NULL, NULL, NULL, NULL, '1975-10-18 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(128, NULL, NULL, NULL, NULL, '20821', 'ARUP DAS', NULL, NULL, NULL, NULL, NULL, NULL, '1971-09-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(129, NULL, NULL, NULL, NULL, '21145', 'ARVIND KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1976-03-24 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(130, NULL, NULL, NULL, NULL, '20911', 'ARVIND KUMAR CHOUDHARY', NULL, NULL, NULL, NULL, NULL, NULL, '1974-11-18 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(131, NULL, NULL, NULL, NULL, '20675', 'ARVIND KUMAR MISHRA', NULL, NULL, NULL, NULL, NULL, NULL, '1969-07-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(132, NULL, NULL, NULL, NULL, '20864', 'ARVIND KUMAR TRIPATHI', NULL, NULL, NULL, NULL, NULL, NULL, '1969-08-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(133, NULL, NULL, NULL, NULL, '20391', 'ARVIND P.PATIL', NULL, NULL, NULL, NULL, NULL, NULL, '1970-04-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(134, NULL, NULL, NULL, NULL, '20577', 'ARVIND PANDEY', NULL, NULL, NULL, NULL, NULL, NULL, '1969-10-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(135, NULL, NULL, NULL, NULL, '21108', 'ARVIND SHARMA', NULL, NULL, NULL, NULL, NULL, NULL, '1977-11-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(136, NULL, NULL, NULL, NULL, '20947', 'ARVIND SINGH RAJPUT', NULL, NULL, NULL, NULL, NULL, NULL, '1971-07-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(137, NULL, NULL, NULL, NULL, '21195', 'ASHI KAPOOR', NULL, NULL, NULL, NULL, NULL, NULL, '1977-03-23 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(138, NULL, NULL, NULL, NULL, '21360', 'ASHISH CHUGH', NULL, NULL, NULL, NULL, NULL, NULL, '1986-11-17 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(139, NULL, NULL, NULL, NULL, '21141', 'ASHISH KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1974-07-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(140, NULL, NULL, NULL, NULL, '20338', 'ASHISH KUMAR DAS', NULL, NULL, NULL, NULL, NULL, NULL, '1969-02-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(141, NULL, NULL, NULL, NULL, '21186', 'ASHISH KUMAR SANGHI', NULL, NULL, NULL, NULL, NULL, NULL, '1975-08-18 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(142, NULL, NULL, NULL, NULL, '21206', 'ASHISH KUSHWAHA', NULL, NULL, NULL, NULL, NULL, NULL, '1977-07-28 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(143, NULL, NULL, NULL, NULL, '60072', 'Ashish Redhu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(144, NULL, NULL, NULL, NULL, '20580', 'ASHISH TAYAL', NULL, NULL, NULL, NULL, NULL, NULL, '1970-06-07 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(145, NULL, NULL, NULL, NULL, '20196', 'ASHISH THAKER', NULL, NULL, NULL, NULL, NULL, NULL, '1966-08-26 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(146, NULL, NULL, NULL, NULL, '60024', 'Ashish Vyas', NULL, NULL, NULL, NULL, NULL, NULL, '1987-02-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(147, NULL, NULL, NULL, NULL, '21132', 'ASHOK KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1977-07-11 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(148, NULL, NULL, NULL, NULL, '20888', 'ASHOK KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1973-02-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(149, NULL, NULL, NULL, NULL, '20620', 'ASHOK KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1971-01-06 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(150, NULL, NULL, NULL, NULL, '9663', 'ASHOK KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1964-10-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(151, NULL, NULL, NULL, NULL, '20576', 'ASHOK KUMAR JAIN', NULL, NULL, NULL, NULL, NULL, NULL, '1970-11-29 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(152, NULL, NULL, NULL, NULL, '20194', 'ASHOK KUMAR JAIN', NULL, NULL, NULL, NULL, NULL, NULL, '1965-08-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(153, NULL, NULL, NULL, NULL, '20082', 'ASHOK KUMAR JHA', NULL, NULL, NULL, NULL, NULL, NULL, '1969-01-03 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(154, NULL, NULL, NULL, NULL, '21083', 'ASHOK KUMAR PATESHWARY', NULL, NULL, NULL, NULL, NULL, NULL, '1967-01-22 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(155, NULL, NULL, NULL, NULL, '21144', 'ASHOK KUMAR SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1974-11-26 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(156, NULL, NULL, NULL, NULL, '111046', 'ASHOK KUMAR SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1971-07-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(157, NULL, NULL, NULL, NULL, '20553', 'ASHOK MAHESHWARI', NULL, NULL, NULL, NULL, NULL, NULL, '1967-04-07 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(158, NULL, NULL, NULL, NULL, '60041', 'ASHUTOSH DHAWAN', NULL, NULL, NULL, NULL, NULL, NULL, '1986-07-26 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(159, NULL, NULL, NULL, NULL, '21426', 'ASHUTOSH DIWAKAR', NULL, NULL, NULL, NULL, NULL, NULL, '1988-06-13 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(160, NULL, NULL, NULL, NULL, '60047', 'Ashutosh Gupta', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(161, NULL, NULL, NULL, NULL, '20302', 'ASHUTOSH GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1969-11-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(162, NULL, NULL, NULL, NULL, '20481', 'ASHUTOSH JAIN', NULL, NULL, NULL, NULL, NULL, NULL, '1972-05-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(163, NULL, NULL, NULL, NULL, '20982', 'ASHWANI KR MAHAUR', NULL, NULL, NULL, NULL, NULL, NULL, '1973-04-18 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(164, NULL, NULL, NULL, NULL, '21203', 'ASHWANI KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1974-11-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(165, NULL, NULL, NULL, NULL, '112332', 'ASHWANI LOHTIA', NULL, NULL, NULL, NULL, NULL, NULL, '1969-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(166, NULL, NULL, NULL, NULL, '20420', 'ASIT KADAYAN', NULL, NULL, NULL, NULL, NULL, NULL, '1970-09-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(167, NULL, NULL, NULL, NULL, '21409', 'ASWATHY SIVANANDAN', NULL, NULL, NULL, NULL, NULL, NULL, '1992-10-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(168, NULL, NULL, NULL, NULL, '21184', 'ATIQUE AHMED', NULL, NULL, NULL, NULL, NULL, NULL, '1977-07-03 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(169, NULL, NULL, NULL, NULL, '21414', 'ATUL JOSHI', NULL, NULL, NULL, NULL, NULL, NULL, '1991-01-18 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(170, NULL, NULL, NULL, NULL, '20130', 'ATUL KUMAR CHAUDHARY', NULL, NULL, NULL, NULL, NULL, NULL, '1969-06-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(171, NULL, NULL, NULL, NULL, '20706', 'ATUL KUMAR KARELIYA', NULL, NULL, NULL, NULL, NULL, NULL, '1972-04-24 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(172, NULL, NULL, NULL, NULL, '20962', 'ATUL KUMAR SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1973-10-26 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(173, NULL, NULL, NULL, NULL, '20407', 'ATUL SAXENA', NULL, NULL, NULL, NULL, NULL, NULL, '1971-01-09 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(174, NULL, NULL, NULL, NULL, '20122', 'ATUL SHARMA', NULL, NULL, NULL, NULL, NULL, NULL, '1966-07-19 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(175, NULL, NULL, NULL, NULL, '20199', 'ATUL SINHA', NULL, NULL, NULL, NULL, NULL, NULL, '1968-10-07 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(176, NULL, NULL, NULL, NULL, '21121', 'ATUL WAKHLE', NULL, NULL, NULL, NULL, NULL, NULL, '1970-05-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(177, NULL, NULL, NULL, NULL, '60067', 'Aumkarnath Mishra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(178, NULL, NULL, NULL, NULL, '21263', 'AVADHESH SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1988-10-22 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(179, NULL, NULL, NULL, NULL, '20416', 'AVINASH AGARWAL', NULL, NULL, NULL, NULL, NULL, NULL, '1970-07-03 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(180, NULL, NULL, NULL, NULL, '21365', 'AVINASH KHATRI', NULL, NULL, NULL, NULL, NULL, NULL, '1990-12-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(181, NULL, NULL, NULL, NULL, '21287', 'AVINASH SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1984-07-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(182, NULL, NULL, NULL, NULL, '20777', 'AYESHA SIDDIQUI', NULL, NULL, NULL, NULL, NULL, NULL, '1972-03-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(183, NULL, NULL, NULL, NULL, '21493', 'AYUSH KR TIWARI', NULL, NULL, NULL, NULL, NULL, NULL, '1997-03-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(184, NULL, NULL, NULL, NULL, '21494', 'Ayushi Agarwal ', NULL, NULL, NULL, NULL, NULL, NULL, '1999-07-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(185, NULL, NULL, NULL, NULL, '20799', 'AZAM SIDDIQUI', NULL, NULL, NULL, NULL, NULL, NULL, '1967-04-29 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(186, NULL, NULL, NULL, NULL, '9687', 'B B CHAUDHARY', NULL, NULL, NULL, NULL, NULL, NULL, '1964-06-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(187, NULL, NULL, NULL, NULL, '20610', 'B P VISHWAKARMA', NULL, NULL, NULL, NULL, NULL, NULL, '1971-12-27 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(188, NULL, NULL, NULL, NULL, '20696', 'B PRAVEEN KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1973-07-29 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(189, NULL, NULL, NULL, NULL, '20658', 'B SRI RAMA CH MURTY', NULL, NULL, NULL, NULL, NULL, NULL, '1969-07-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(190, NULL, NULL, NULL, NULL, '20507', 'B SUDHAKARA RAO', NULL, NULL, NULL, NULL, NULL, NULL, '1968-06-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(191, NULL, NULL, NULL, NULL, '20532', 'B VENKATESWARLU', NULL, NULL, NULL, NULL, NULL, NULL, '1967-06-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(192, NULL, NULL, NULL, NULL, '20261', 'BABU C V RAMANA', NULL, NULL, NULL, NULL, NULL, NULL, '1968-08-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(193, NULL, NULL, NULL, NULL, '20063', 'BABU RAM', NULL, NULL, NULL, NULL, NULL, NULL, '1965-12-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(194, NULL, NULL, NULL, NULL, '21454', 'BADAWATH NARESH', NULL, NULL, NULL, NULL, NULL, NULL, '1995-06-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(195, NULL, NULL, NULL, NULL, '21118', 'BALA CHANDRA SENA', NULL, NULL, NULL, NULL, NULL, NULL, '1975-08-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(196, NULL, NULL, NULL, NULL, '20253', 'BALVINDER SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1966-10-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(197, NULL, NULL, NULL, NULL, '111043', 'BALWANT RAI', NULL, NULL, NULL, NULL, NULL, NULL, '1969-02-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(198, NULL, NULL, NULL, NULL, '20488', 'BASANT KUMAR GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1970-03-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(199, NULL, NULL, NULL, NULL, '20238', 'BEERABAL PRASAD', NULL, NULL, NULL, NULL, NULL, NULL, '1967-05-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(200, NULL, NULL, NULL, NULL, '21151', 'BEERAN PRAJAPATI', NULL, NULL, NULL, NULL, NULL, NULL, '1972-04-04 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(201, NULL, NULL, NULL, NULL, '21296', 'BEERENDRA KUMAR MAURYA', NULL, NULL, NULL, NULL, NULL, NULL, '1989-05-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(202, NULL, NULL, NULL, NULL, '20985', 'BHAGWAN SWAROOP NAGAR', NULL, NULL, NULL, NULL, NULL, NULL, '1972-10-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(203, NULL, NULL, NULL, NULL, '20972', 'BHARAT BHUSHAN', NULL, NULL, NULL, NULL, NULL, NULL, '1974-10-04 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(204, NULL, NULL, NULL, NULL, '20830', 'BHARAT LAL MEENA', NULL, NULL, NULL, NULL, NULL, NULL, '1968-11-17 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(205, NULL, NULL, NULL, NULL, '20866', 'BHAVANI SINGH YADAV', NULL, NULL, NULL, NULL, NULL, NULL, '1971-06-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(206, NULL, NULL, NULL, NULL, '21063', 'BHERU LAL GAHLOT', NULL, NULL, NULL, NULL, NULL, NULL, '1970-03-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(207, NULL, NULL, NULL, NULL, '21418', 'BHOOMIKA GAUR', NULL, NULL, NULL, NULL, NULL, NULL, '1992-07-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(208, NULL, NULL, NULL, NULL, '21104', 'BHOOMIKA GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1977-08-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(209, NULL, NULL, NULL, NULL, '21446', 'BHUPENDER', NULL, NULL, NULL, NULL, NULL, NULL, '1992-12-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(210, NULL, NULL, NULL, NULL, '21008', 'BHUVNESH KUMAR YADAV', NULL, NULL, NULL, NULL, NULL, NULL, '1974-10-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(211, NULL, NULL, NULL, NULL, '21437', 'BHUVNESHWAR PANWAR', NULL, NULL, NULL, NULL, NULL, NULL, '1990-09-18 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(212, NULL, NULL, NULL, NULL, '21130', 'BHUWANENDRA KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1977-05-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(213, NULL, NULL, NULL, NULL, '20380', 'BIDYA NAND', NULL, NULL, NULL, NULL, NULL, NULL, '1968-11-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(214, NULL, NULL, NULL, NULL, '20670', 'BIJAYA KUMAR BEHERA', NULL, NULL, NULL, NULL, NULL, NULL, '1966-11-07 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(215, NULL, NULL, NULL, NULL, '20568', 'BIJOY KUMAR NATH', NULL, NULL, NULL, NULL, NULL, NULL, '1969-10-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(216, NULL, NULL, NULL, NULL, '20329', 'BINAY KUMAR SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1968-08-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(217, NULL, NULL, NULL, NULL, '21364', 'BISHNU DUBEY', NULL, NULL, NULL, NULL, NULL, NULL, '1989-12-11 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34');
INSERT INTO `profiles` (`id`, `user_id`, `profile_completed`, `year_of_allotment`, `date_of_entry_in_service`, `staff_no`, `officer_name`, `present_posting`, `office_address`, `date_of_joining_office`, `office_phone`, `office_fax`, `office_email`, `date_of_birth`, `native_district`, `state`, `educational_qualifications`, `languages_known`, `date_of_entry_in_present_grade`, `grade`, `level_in_pay_matrix`, `mobile_no`, `email_id`, `language`, `serving_status`, `created_at`, `updated_at`) VALUES
(218, NULL, NULL, NULL, NULL, '20494', 'BISHNU R PANIGRAHI', NULL, NULL, NULL, NULL, NULL, NULL, '1965-11-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(219, NULL, NULL, NULL, NULL, '21157', 'BISHWA MOHAN PATEL', NULL, NULL, NULL, NULL, NULL, NULL, '1974-10-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(220, NULL, NULL, NULL, NULL, '21187', 'BRAHMANANDA SRIVASTAVA', NULL, NULL, NULL, NULL, NULL, NULL, '1972-09-07 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(221, NULL, NULL, NULL, NULL, '20446', 'BRAJENDRA KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1969-07-03 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(222, NULL, NULL, NULL, NULL, '21072', 'BRAJESH KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1974-05-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(223, NULL, NULL, NULL, NULL, '20466', 'BRAJESH MISHRA', NULL, NULL, NULL, NULL, NULL, NULL, '1970-05-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(224, NULL, NULL, NULL, NULL, '20417', 'BRIJ MOHAN SETIA', NULL, NULL, NULL, NULL, NULL, NULL, '1968-03-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(225, NULL, NULL, NULL, NULL, '20887', 'BRIJENDRA KUMAR SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1970-10-16 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(226, NULL, NULL, NULL, NULL, '8626', 'BRIJESH PRAJAPATI', NULL, NULL, NULL, NULL, NULL, NULL, '1965-06-23 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(227, NULL, NULL, NULL, NULL, '21088', 'BUDDHI PRAKASH MEENA', NULL, NULL, NULL, NULL, NULL, NULL, '1973-06-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(228, NULL, NULL, NULL, NULL, '21019', 'BUDHI PRAKASH SHARMA', NULL, NULL, NULL, NULL, NULL, NULL, '1975-08-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(229, NULL, NULL, NULL, NULL, '20633', 'C LALHMA CHHUANA', NULL, NULL, NULL, NULL, NULL, NULL, '1968-04-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(230, NULL, NULL, NULL, NULL, '20614', 'C N SAI SRAVANAN', NULL, NULL, NULL, NULL, NULL, NULL, '1966-12-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(231, NULL, NULL, NULL, NULL, '20564', 'C SINGHAL', NULL, NULL, NULL, NULL, NULL, NULL, '1970-08-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(232, NULL, NULL, NULL, NULL, '21074', 'C V RAMA RAJU', NULL, NULL, NULL, NULL, NULL, NULL, '1975-07-06 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(233, NULL, NULL, NULL, NULL, '60079', 'CHANDAN KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1990-12-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(234, NULL, NULL, NULL, NULL, '60077', 'Chandan Oraon', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(235, NULL, NULL, NULL, NULL, '21305', 'CHANDRA BHAN YADAV', NULL, NULL, NULL, NULL, NULL, NULL, '1986-07-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(236, NULL, NULL, NULL, NULL, '20973', 'CHANDRA BHUSHAN SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1973-11-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(237, NULL, NULL, NULL, NULL, '21251', 'CHANDRA PRAKASH YADAV', NULL, NULL, NULL, NULL, NULL, NULL, '1980-01-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(238, NULL, NULL, NULL, NULL, '20649', 'CHANDRA SHEKHAR SHARMA', NULL, NULL, NULL, NULL, NULL, NULL, '1971-06-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(239, NULL, NULL, NULL, NULL, '20269', 'CHANDRAGUPTA BIDIKA', NULL, NULL, NULL, NULL, NULL, NULL, '1967-04-04 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(240, NULL, NULL, NULL, NULL, '20252', 'CHANDRASEKAR M', NULL, NULL, NULL, NULL, NULL, NULL, '1969-02-04 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(241, NULL, NULL, NULL, NULL, '20257', 'CHANDRASEKHAR M', NULL, NULL, NULL, NULL, NULL, NULL, '1967-01-06 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(242, NULL, NULL, NULL, NULL, '21143', 'CHANDRASHEKHAR PRASAD SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1973-04-29 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(243, NULL, NULL, NULL, NULL, '8642', 'CHARAN DASS', NULL, NULL, NULL, NULL, NULL, NULL, '1965-01-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(244, NULL, NULL, NULL, NULL, '8644', 'CHARAN SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1966-02-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(245, NULL, NULL, NULL, NULL, '20926', 'CHARU SHARMA', NULL, NULL, NULL, NULL, NULL, NULL, '1974-06-23 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(246, NULL, NULL, NULL, NULL, '21358', 'CHETAN SHARMA', NULL, NULL, NULL, NULL, NULL, NULL, '1991-03-28 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(247, NULL, NULL, NULL, NULL, '20097', 'CHINNAPPAN BENNY', NULL, NULL, NULL, NULL, NULL, NULL, '1966-05-31 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(248, NULL, NULL, NULL, NULL, '21384', 'CHIRAG', NULL, NULL, NULL, NULL, NULL, NULL, '1992-06-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(249, NULL, NULL, NULL, NULL, '60001', 'Chittaranjan Debata', NULL, NULL, NULL, NULL, NULL, NULL, '1989-05-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(250, NULL, NULL, NULL, NULL, '9686', 'D M EZHIL BUDDHAN', NULL, NULL, NULL, NULL, NULL, NULL, '1966-06-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(251, NULL, NULL, NULL, NULL, '20578', 'D R RAJESHWARI', NULL, NULL, NULL, NULL, NULL, NULL, '1970-08-29 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(252, NULL, NULL, NULL, NULL, '20385', 'D.BHASKARA RAO', NULL, NULL, NULL, NULL, NULL, NULL, '1969-01-23 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(253, NULL, NULL, NULL, NULL, '112357', 'D.K. GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1972-02-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(254, NULL, NULL, NULL, NULL, '20740', 'D.M. BHASKAR', NULL, NULL, NULL, NULL, NULL, NULL, '1973-08-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(255, NULL, NULL, NULL, NULL, '8641', 'DAILY GIRI', NULL, NULL, NULL, NULL, NULL, NULL, '1965-09-28 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(256, NULL, NULL, NULL, NULL, '60034', 'Dalesh Kumar Sahu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(257, NULL, NULL, NULL, NULL, '20504', 'DALVINDER SINGH MANKU', NULL, NULL, NULL, NULL, NULL, NULL, '1969-08-03 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(258, NULL, NULL, NULL, NULL, '9668', 'DEB KUMAR CHAKRABARTI', NULL, NULL, NULL, NULL, NULL, NULL, '1966-07-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(259, NULL, NULL, NULL, NULL, '9670', 'DEBASIS SARKAR', NULL, NULL, NULL, NULL, NULL, NULL, '1964-09-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(260, NULL, NULL, NULL, NULL, '20493', 'DEEP KRISHNA MISHRA', NULL, NULL, NULL, NULL, NULL, NULL, '1969-07-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(261, NULL, NULL, NULL, NULL, '21415', 'DEEPA', NULL, NULL, NULL, NULL, NULL, NULL, '1992-01-11 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(262, NULL, NULL, NULL, NULL, '20014', 'DEEPA ARORA', NULL, NULL, NULL, NULL, NULL, NULL, '1968-07-24 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(263, NULL, NULL, NULL, NULL, '60091', 'Deepak Agarwal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(264, NULL, NULL, NULL, NULL, '20661', 'DEEPAK AGRAWAL', NULL, NULL, NULL, NULL, NULL, NULL, '1971-05-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(265, NULL, NULL, NULL, NULL, '20211', 'DEEPAK GARG', NULL, NULL, NULL, NULL, NULL, NULL, '1969-06-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(266, NULL, NULL, NULL, NULL, '20313', 'DEEPAK GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1968-11-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(267, NULL, NULL, NULL, NULL, '20331', 'DEEPAK KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1969-06-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(268, NULL, NULL, NULL, NULL, '8555', 'DEEPAK MUKHERJEE', NULL, NULL, NULL, NULL, NULL, NULL, '1965-07-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(269, NULL, NULL, NULL, NULL, '20945', 'DEEPAK PATHAK', NULL, NULL, NULL, NULL, NULL, NULL, '1973-12-06 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(270, NULL, NULL, NULL, NULL, '20655', 'DEEPAK SHARMA', NULL, NULL, NULL, NULL, NULL, NULL, '1973-08-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(271, NULL, NULL, NULL, NULL, '21435', 'DEEPAK SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1991-03-03 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(272, NULL, NULL, NULL, NULL, '8578', 'DEEPIKA KHOSLA', NULL, NULL, NULL, NULL, NULL, NULL, '1964-11-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(273, NULL, NULL, NULL, NULL, '20855', 'DEEPIKA POKHARNA', NULL, NULL, NULL, NULL, NULL, NULL, '1969-06-09 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(274, NULL, NULL, NULL, NULL, '20124', 'DEEPU N SALIM', NULL, NULL, NULL, NULL, NULL, NULL, '1968-02-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(275, NULL, NULL, NULL, NULL, '21059', 'DEO SHANKAR', NULL, NULL, NULL, NULL, NULL, NULL, '1977-03-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(276, NULL, NULL, NULL, NULL, '21393', 'DEVAL SAXENA', NULL, NULL, NULL, NULL, NULL, NULL, '1991-09-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(277, NULL, NULL, NULL, NULL, '20135', 'DEVANAND SAHAY', NULL, NULL, NULL, NULL, NULL, NULL, '1965-12-16 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(278, NULL, NULL, NULL, NULL, '21383', 'DEVANSHU SHUKLA', NULL, NULL, NULL, NULL, NULL, NULL, '1991-06-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(279, NULL, NULL, NULL, NULL, '20750', 'DEVENDRA DWIVEDI', NULL, NULL, NULL, NULL, NULL, NULL, '1968-08-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(280, NULL, NULL, NULL, NULL, '60016', 'Devendra Kumar', NULL, NULL, NULL, NULL, NULL, NULL, '1988-04-07 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(281, NULL, NULL, NULL, NULL, '21366', 'DEVENDRA KUMAR SAINI', NULL, NULL, NULL, NULL, NULL, NULL, '1991-08-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(282, NULL, NULL, NULL, NULL, '20713', 'DEVENDRA SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1973-04-16 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(283, NULL, NULL, NULL, NULL, '8535', 'DEVENDRA SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1964-07-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(284, NULL, NULL, NULL, NULL, '20795', 'DEVENDRA SINGH KACHHWAHA', NULL, NULL, NULL, NULL, NULL, NULL, '1969-08-03 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(285, NULL, NULL, NULL, NULL, '20645', 'DEVENDRA YADAV', NULL, NULL, NULL, NULL, NULL, NULL, '1968-10-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(286, NULL, NULL, NULL, NULL, '21156', 'DEVINDER YADAV', NULL, NULL, NULL, NULL, NULL, NULL, '1969-09-26 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(287, NULL, NULL, NULL, NULL, '21219', 'DHANANJAY KUMAR RANJAN', NULL, NULL, NULL, NULL, NULL, NULL, '1972-01-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(288, NULL, NULL, NULL, NULL, '21377', 'DHANESH GOEL', NULL, NULL, NULL, NULL, NULL, NULL, '1989-08-06 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(289, NULL, NULL, NULL, NULL, '20557', 'DHARMENDRA BHARGAVA', NULL, NULL, NULL, NULL, NULL, NULL, '1970-02-11 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(290, NULL, NULL, NULL, NULL, '8554', 'DHARMENDRA SHARMA', NULL, NULL, NULL, NULL, NULL, NULL, '1965-03-24 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(291, NULL, NULL, NULL, NULL, '20796', 'DHARMENDRA YADAV', NULL, NULL, NULL, NULL, NULL, NULL, '1972-05-18 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(292, NULL, NULL, NULL, NULL, '21075', 'DHARMESH MAKWANA', NULL, NULL, NULL, NULL, NULL, NULL, '1973-08-11 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(293, NULL, NULL, NULL, NULL, '21333', 'DHARMVEER KUSHWAH', NULL, NULL, NULL, NULL, NULL, NULL, '1987-11-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(294, NULL, NULL, NULL, NULL, '21379', 'DHEERAJ MALHOTRA', NULL, NULL, NULL, NULL, NULL, NULL, '1990-12-17 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(295, NULL, NULL, NULL, NULL, '20922', 'DHIRENDRA VERMA', NULL, NULL, NULL, NULL, NULL, NULL, '1974-08-11 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(296, NULL, NULL, NULL, NULL, '21485', 'Diksha Dhiman', NULL, NULL, NULL, NULL, NULL, NULL, '1998-02-27 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(297, NULL, NULL, NULL, NULL, '20436', 'DILIP KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1967-07-09 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(298, NULL, NULL, NULL, NULL, '21254', 'DILIP SINGH ASWAR', NULL, NULL, NULL, NULL, NULL, NULL, '1978-06-07 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(299, NULL, NULL, NULL, NULL, '20537', 'DILIP SIRAM', NULL, NULL, NULL, NULL, NULL, NULL, '1970-01-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(300, NULL, NULL, NULL, NULL, '20198', 'DINDAYAL TOSNIWAL', NULL, NULL, NULL, NULL, NULL, NULL, '1967-03-24 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(301, NULL, NULL, NULL, NULL, '21018', 'DINESH KUMAR GARG', NULL, NULL, NULL, NULL, NULL, NULL, '1973-08-17 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(302, NULL, NULL, NULL, NULL, '21120', 'DINESH KUMAR GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1971-03-06 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(303, NULL, NULL, NULL, NULL, '20346', 'DINESH MAHUR', NULL, NULL, NULL, NULL, NULL, NULL, '1969-12-24 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(304, NULL, NULL, NULL, NULL, '20062', 'DIPESH CHANDRA TIKADAR', NULL, NULL, NULL, NULL, NULL, NULL, '1966-08-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(305, NULL, NULL, NULL, NULL, '60017', 'Divya Kumar Singh', NULL, NULL, NULL, NULL, NULL, NULL, '1989-08-19 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(306, NULL, NULL, NULL, NULL, '21283', 'DIVYA SHARMA', NULL, NULL, NULL, NULL, NULL, NULL, '1987-04-18 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(307, NULL, NULL, NULL, NULL, '21481', 'Drupad Gupta', NULL, NULL, NULL, NULL, NULL, NULL, '1995-05-24 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(308, NULL, NULL, NULL, NULL, '20236', 'DUSHMANTA K BEHERA', NULL, NULL, NULL, NULL, NULL, NULL, '1969-06-06 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(309, NULL, NULL, NULL, NULL, '21173', 'DWARKA KAROL', NULL, NULL, NULL, NULL, NULL, NULL, '1977-07-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(310, NULL, NULL, NULL, NULL, '20727', 'EDWINSON SWER', NULL, NULL, NULL, NULL, NULL, NULL, '1967-05-19 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(311, NULL, NULL, NULL, NULL, '20398', 'F.R.TIRKEY', NULL, NULL, NULL, NULL, NULL, NULL, '1966-11-19 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(312, NULL, NULL, NULL, NULL, '20729', 'FATEH SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1971-07-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(313, NULL, NULL, NULL, NULL, '20355', 'FRANCIS JACOB K', NULL, NULL, NULL, NULL, NULL, NULL, '1966-05-31 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(314, NULL, NULL, NULL, NULL, '20683', 'G BRAHMAIAH', NULL, NULL, NULL, NULL, NULL, NULL, '1969-05-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(315, NULL, NULL, NULL, NULL, '20818', 'G RAJA RAM MOHAN', NULL, NULL, NULL, NULL, NULL, NULL, '1972-09-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(316, NULL, NULL, NULL, NULL, '20697', 'G RAMESH', NULL, NULL, NULL, NULL, NULL, NULL, '1970-03-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(317, NULL, NULL, NULL, NULL, '21097', 'G SURESH REDDY', NULL, NULL, NULL, NULL, NULL, NULL, '1972-06-09 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(318, NULL, NULL, NULL, NULL, '21053', 'G V MANOJ KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1971-08-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(319, NULL, NULL, NULL, NULL, '20061', 'G. RATNA KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1966-12-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(320, NULL, NULL, NULL, NULL, '20381', 'G.N.HOWAL', NULL, NULL, NULL, NULL, NULL, NULL, '1968-09-19 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(321, NULL, NULL, NULL, NULL, '20528', 'GAJENDER SINGH THAKUR', NULL, NULL, NULL, NULL, NULL, NULL, '1969-06-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(322, NULL, NULL, NULL, NULL, '21026', 'GAJENDRA SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1975-05-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(323, NULL, NULL, NULL, NULL, '20280', 'GAJENDRA SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1966-10-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(324, NULL, NULL, NULL, NULL, '21452', 'GANDAMALA PAPARAO', NULL, NULL, NULL, NULL, NULL, NULL, '1988-06-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(325, NULL, NULL, NULL, NULL, '20999', 'GANESH A BAKADE', NULL, NULL, NULL, NULL, NULL, NULL, '1973-05-09 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(326, NULL, NULL, NULL, NULL, '21164', 'GANESH CHANDRA', NULL, NULL, NULL, NULL, NULL, NULL, '1970-08-18 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(327, NULL, NULL, NULL, NULL, '60018', 'Ganesh Naik LG ', NULL, NULL, NULL, NULL, NULL, NULL, '1985-07-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(328, NULL, NULL, NULL, NULL, '60087', 'Ganta Ganesh Kumar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(329, NULL, NULL, NULL, NULL, '20254', 'GAUTAM KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1967-04-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(330, NULL, NULL, NULL, NULL, '111040', 'Gaya Prasad', NULL, NULL, NULL, NULL, NULL, NULL, '1972-06-17 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(331, NULL, NULL, NULL, NULL, '21048', 'GEETHA GODWIN', NULL, NULL, NULL, NULL, NULL, NULL, '1970-01-29 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(332, NULL, NULL, NULL, NULL, '20128', 'GHAZALA FAISAL', NULL, NULL, NULL, NULL, NULL, NULL, '1967-07-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(333, NULL, NULL, NULL, NULL, '20845', 'GIRIRAJ GARG', NULL, NULL, NULL, NULL, NULL, NULL, '1973-02-19 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(334, NULL, NULL, NULL, NULL, '20593', 'GIRIRAJ SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1969-11-28 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(335, NULL, NULL, NULL, NULL, '20383', 'GIRISH N KATARIA', NULL, NULL, NULL, NULL, NULL, NULL, '1968-02-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(336, NULL, NULL, NULL, NULL, '20229', 'GOLLAMUDI ADAM', NULL, NULL, NULL, NULL, NULL, NULL, '1967-02-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(337, NULL, NULL, NULL, NULL, '20214', 'GOPAL KRUSHNA SUTAR', NULL, NULL, NULL, NULL, NULL, NULL, '1966-05-06 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(338, NULL, NULL, NULL, NULL, '21354', 'GOPAL PRASAD KURMI', NULL, NULL, NULL, NULL, NULL, NULL, '1990-06-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(339, NULL, NULL, NULL, NULL, '21386', 'GOTIPAMUL DINESH JANARDAN', NULL, NULL, NULL, NULL, NULL, NULL, '1990-05-26 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(340, NULL, NULL, NULL, NULL, '8621', 'GOVIND KEWLANI', NULL, NULL, NULL, NULL, NULL, NULL, '1966-01-24 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(341, NULL, NULL, NULL, NULL, '21014', 'GOVIND PRASAD GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1972-03-19 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(342, NULL, NULL, NULL, NULL, '20653', 'GOVIND SINGHAL', NULL, NULL, NULL, NULL, NULL, NULL, '1969-09-19 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(343, NULL, NULL, NULL, NULL, '21209', 'GULAB CHAND JEENGAR', NULL, NULL, NULL, NULL, NULL, NULL, '1974-05-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(344, NULL, NULL, NULL, NULL, '20332', 'GULAB CHANDRA RAI', NULL, NULL, NULL, NULL, NULL, NULL, '1967-07-23 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(345, NULL, NULL, NULL, NULL, '21447', 'GUNDA RAGHAVA REDDY', NULL, NULL, NULL, NULL, NULL, NULL, '1993-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(346, NULL, NULL, NULL, NULL, '21278', 'GUNDA V. DHANAMJAYA RAO', NULL, NULL, NULL, NULL, NULL, NULL, '1988-08-24 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(347, NULL, NULL, NULL, NULL, '8465', 'GUNJAN SAXENA', NULL, NULL, NULL, NULL, NULL, NULL, '1964-07-07 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(348, NULL, NULL, NULL, NULL, '21015', 'GURDAS MEHER', NULL, NULL, NULL, NULL, NULL, NULL, '1972-07-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(349, NULL, NULL, NULL, NULL, '20490', 'GURJINDER PAUL SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1970-09-27 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(350, NULL, NULL, NULL, NULL, '20827', 'GYAN CHAND MEENA', NULL, NULL, NULL, NULL, NULL, NULL, '1969-08-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(351, NULL, NULL, NULL, NULL, '20476', 'GYANENDRA KUMAR DWIVEDI', NULL, NULL, NULL, NULL, NULL, NULL, '1970-07-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(352, NULL, NULL, NULL, NULL, '20726', 'H. L. NONGKHLAW', NULL, NULL, NULL, NULL, NULL, NULL, '1969-02-09 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(353, NULL, NULL, NULL, NULL, '60011', 'Harendra', NULL, NULL, NULL, NULL, NULL, NULL, '1989-02-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(354, NULL, NULL, NULL, NULL, '20524', 'HARI NARAYAN', NULL, NULL, NULL, NULL, NULL, NULL, '1965-08-22 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(355, NULL, NULL, NULL, NULL, '20688', 'HARI NARAYAN JANGID', NULL, NULL, NULL, NULL, NULL, NULL, '1969-08-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(356, NULL, NULL, NULL, NULL, '20823', 'HARI PRASAD MEENA', NULL, NULL, NULL, NULL, NULL, NULL, '1973-08-03 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(357, NULL, NULL, NULL, NULL, '21307', 'HARIKRISHNAN S.', NULL, NULL, NULL, NULL, NULL, NULL, '1986-06-03 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(358, NULL, NULL, NULL, NULL, '20195', 'HARINDER KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1969-01-16 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(359, NULL, NULL, NULL, NULL, '21221', 'HARIOM SOLANKI', NULL, NULL, NULL, NULL, NULL, NULL, '1971-07-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(360, NULL, NULL, NULL, NULL, '20929', 'HARISH AGARWAL', NULL, NULL, NULL, NULL, NULL, NULL, '1975-12-07 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(361, NULL, NULL, NULL, NULL, '20539', 'HARISH CHAND', NULL, NULL, NULL, NULL, NULL, NULL, '1966-03-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(362, NULL, NULL, NULL, NULL, '21227', 'HARISH KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1977-07-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(363, NULL, NULL, NULL, NULL, '60038', 'Harish Kumar Jeengar', NULL, NULL, NULL, NULL, NULL, NULL, '1987-11-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(364, NULL, NULL, NULL, NULL, '20296', 'HARKESH MEENA', NULL, NULL, NULL, NULL, NULL, NULL, '1966-08-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(365, NULL, NULL, NULL, NULL, '21274', 'HARMIT SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1982-09-04 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(366, NULL, NULL, NULL, NULL, '60050', 'Harsh Kamal Sinha', NULL, NULL, NULL, NULL, NULL, NULL, '1990-07-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(367, NULL, NULL, NULL, NULL, '21291', 'HARSH SHARMA', NULL, NULL, NULL, NULL, NULL, NULL, '1982-12-04 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(368, NULL, NULL, NULL, NULL, '20179', 'HARSH VARDHAN SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1968-09-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(369, NULL, NULL, NULL, NULL, '21394', 'HARSHIT MODI', NULL, NULL, NULL, NULL, NULL, NULL, '1992-05-11 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(370, NULL, NULL, NULL, NULL, '20111', 'HAWA SINGH JAKHAR', NULL, NULL, NULL, NULL, NULL, NULL, '1967-07-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(371, NULL, NULL, NULL, NULL, '21090', 'HEMANT KUMAR R PATEL', NULL, NULL, NULL, NULL, NULL, NULL, '1972-06-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(372, NULL, NULL, NULL, NULL, '20278', 'HEMANT KUMAR RAJDHAR LANJEWAR', NULL, NULL, NULL, NULL, NULL, NULL, '1968-05-04 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(373, NULL, NULL, NULL, NULL, '20015', 'HEMANT PANDAY', NULL, NULL, NULL, NULL, NULL, NULL, '1965-10-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(374, NULL, NULL, NULL, NULL, '20860', 'HEMANT RATHWE', NULL, NULL, NULL, NULL, NULL, NULL, '1970-10-18 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(375, NULL, NULL, NULL, NULL, '21096', 'HEMANT S BORALE', NULL, NULL, NULL, NULL, NULL, NULL, '1972-01-18 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(376, NULL, NULL, NULL, NULL, '20921', 'HEMENDRA KUMAR SHARMA', NULL, NULL, NULL, NULL, NULL, NULL, '1975-05-16 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(377, NULL, NULL, NULL, NULL, '60068', 'Himanshu Gupta', NULL, NULL, NULL, NULL, NULL, NULL, '1993-01-11 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(378, NULL, NULL, NULL, NULL, '20969', 'HIMANSHU KUMAR - II', NULL, NULL, NULL, NULL, NULL, NULL, '1974-02-16 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(379, NULL, NULL, NULL, NULL, '21264', 'HIMANSHU SHARMA', NULL, NULL, NULL, NULL, NULL, NULL, '1985-12-16 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(380, NULL, NULL, NULL, NULL, '60103', 'Hind Gaurav ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(381, NULL, NULL, NULL, NULL, '21378', 'HITESH', NULL, NULL, NULL, NULL, NULL, NULL, '1991-09-07 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(382, NULL, NULL, NULL, NULL, '20663', 'HOSHIAR SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1970-01-13 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(383, NULL, NULL, NULL, NULL, '21372', 'IJAZ M YOUSUF', NULL, NULL, NULL, NULL, NULL, NULL, '1988-08-24 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(384, NULL, NULL, NULL, NULL, '20242', 'ILANTHIRAI V S', NULL, NULL, NULL, NULL, NULL, NULL, '1968-06-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(385, NULL, NULL, NULL, NULL, '20374', 'INDRA GOVIND SOREN', NULL, NULL, NULL, NULL, NULL, NULL, '1970-07-16 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(386, NULL, NULL, NULL, NULL, '21043', 'ISRAR AHMAD', NULL, NULL, NULL, NULL, NULL, NULL, '1971-07-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(387, NULL, NULL, NULL, NULL, '9666', 'J V RAJA REDDY', NULL, NULL, NULL, NULL, NULL, NULL, '1965-04-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(388, NULL, NULL, NULL, NULL, '20626', 'JAGDISH CHANDRA', NULL, NULL, NULL, NULL, NULL, NULL, '1966-09-03 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(389, NULL, NULL, NULL, NULL, '21169', 'JAGDISH PRASAD MEENA', NULL, NULL, NULL, NULL, NULL, NULL, '1974-06-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(390, NULL, NULL, NULL, NULL, '21113', 'JAGRAJ SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1975-10-16 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(391, NULL, NULL, NULL, NULL, '9688', 'JAI KUMAR SAH', NULL, NULL, NULL, NULL, NULL, NULL, '1966-08-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(392, NULL, NULL, NULL, NULL, '21245', 'JAI KUMAR WADHWANI', NULL, NULL, NULL, NULL, NULL, NULL, '1981-05-07 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(393, NULL, NULL, NULL, NULL, '20991', 'JAI PAL SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1973-10-03 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(394, NULL, NULL, NULL, NULL, '21310', 'JAI PRAKASH', NULL, NULL, NULL, NULL, NULL, NULL, '1986-04-09 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(395, NULL, NULL, NULL, NULL, '20874', 'JAI PRAKASH GARG', NULL, NULL, NULL, NULL, NULL, NULL, '1973-09-18 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(396, NULL, NULL, NULL, NULL, '20747', 'JAIPAL SINGH TOMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1972-10-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:34', '2025-09-17 02:36:34'),
(397, NULL, NULL, NULL, NULL, '21442', 'JAPJIT SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1991-10-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(398, NULL, NULL, NULL, NULL, '20368', 'JARADODDY RAMESH', NULL, NULL, NULL, NULL, NULL, NULL, '1969-06-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(399, NULL, NULL, NULL, NULL, '21064', 'JASVIR SINGH PANESAR', NULL, NULL, NULL, NULL, NULL, NULL, '1975-02-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(400, NULL, NULL, NULL, NULL, '60031', 'JAY PAL SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1990-04-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(401, NULL, NULL, NULL, NULL, '20744', 'JAYAN KUMAR SAO', NULL, NULL, NULL, NULL, NULL, NULL, '1973-08-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(402, NULL, NULL, NULL, NULL, '20110', 'JAYANT KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1967-04-04 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(403, NULL, NULL, NULL, NULL, '20826', 'JAYANT RAJ DEEN', NULL, NULL, NULL, NULL, NULL, NULL, '1973-12-29 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(404, NULL, NULL, NULL, NULL, '21032', 'JAYANTA KOLE', NULL, NULL, NULL, NULL, NULL, NULL, '1973-01-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(405, NULL, NULL, NULL, NULL, '20623', 'JAYKUMAR N THORAT', NULL, NULL, NULL, NULL, NULL, NULL, '1967-03-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(406, NULL, NULL, NULL, NULL, '20956', 'JEETESH SHARMA', NULL, NULL, NULL, NULL, NULL, NULL, '1975-10-16 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(407, NULL, NULL, NULL, NULL, '20615', 'JEEVAN LAL MAHAVAR', NULL, NULL, NULL, NULL, NULL, NULL, '1970-02-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(408, NULL, NULL, NULL, NULL, '20723', 'JITENDER KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1968-06-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(409, NULL, NULL, NULL, NULL, '21081', 'JITENDER PRAKASH', NULL, NULL, NULL, NULL, NULL, NULL, '1976-06-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(410, NULL, NULL, NULL, NULL, '20334', 'JITENDER SETIA', NULL, NULL, NULL, NULL, NULL, NULL, '1969-12-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(411, NULL, NULL, NULL, NULL, '20240', 'JITENDRA B CHAVAN', NULL, NULL, NULL, NULL, NULL, NULL, '1969-03-24 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(412, NULL, NULL, NULL, NULL, '21429', 'JITENDRA BHOI', NULL, NULL, NULL, NULL, NULL, NULL, '1991-03-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(413, NULL, NULL, NULL, NULL, '20676', 'JITENDRA GARG', NULL, NULL, NULL, NULL, NULL, NULL, '1973-03-09 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(414, NULL, NULL, NULL, NULL, '20602', 'JITENDRA KHARE', NULL, NULL, NULL, NULL, NULL, NULL, '1971-03-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(415, NULL, NULL, NULL, NULL, '20835', 'JITENDRA KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1973-11-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(416, NULL, NULL, NULL, NULL, '21047', 'JITENDRA KUMAR JOSHI', NULL, NULL, NULL, NULL, NULL, NULL, '1973-10-16 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(417, NULL, NULL, NULL, NULL, '21011', 'JITENDRA LAL GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1976-07-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(418, NULL, NULL, NULL, NULL, '20281', 'JODHEY LAL', NULL, NULL, NULL, NULL, NULL, NULL, '1965-06-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(419, NULL, NULL, NULL, NULL, '21455', 'JYOTI ROAT', NULL, NULL, NULL, NULL, NULL, NULL, '1991-08-23 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(420, NULL, NULL, NULL, NULL, '60055', 'JYOTI SENGAR', NULL, NULL, NULL, NULL, NULL, NULL, '1991-08-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(421, NULL, NULL, NULL, NULL, '20997', 'JYOTSNA EKKA', NULL, NULL, NULL, NULL, NULL, NULL, '1976-07-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(422, NULL, NULL, NULL, NULL, '112169', 'K K JAIN', NULL, NULL, NULL, NULL, NULL, NULL, '1970-09-22 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(423, NULL, NULL, NULL, NULL, '20979', 'K MURLI KRISHNA', NULL, NULL, NULL, NULL, NULL, NULL, '1973-05-31 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(424, NULL, NULL, NULL, NULL, '60022', 'K Naga Subba Reddy', NULL, NULL, NULL, NULL, NULL, NULL, '1983-06-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(425, NULL, NULL, NULL, NULL, '20617', 'K NAVEEN KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1971-03-06 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(426, NULL, NULL, NULL, NULL, '20899', 'K V SURESH BABU', NULL, NULL, NULL, NULL, NULL, NULL, '1972-06-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(427, NULL, NULL, NULL, NULL, '20327', 'K.SAJU GEORGE', NULL, NULL, NULL, NULL, NULL, NULL, '1965-07-27 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(428, NULL, NULL, NULL, NULL, '20538', 'KAILASH CHANDRA', NULL, NULL, NULL, NULL, NULL, NULL, '1967-07-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(429, NULL, NULL, NULL, NULL, '8624', 'KAILASH CHANDRA PANDAY', NULL, NULL, NULL, NULL, NULL, NULL, '1964-06-18 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(430, NULL, NULL, NULL, NULL, '20464', 'KALIM AHMAD SIDDIQUI', NULL, NULL, NULL, NULL, NULL, NULL, '1969-12-31 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(431, NULL, NULL, NULL, NULL, '20008', 'KAMAL BHAGAT', NULL, NULL, NULL, NULL, NULL, NULL, '1965-02-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(432, NULL, NULL, NULL, NULL, '21272', 'KAMAL DEO TRIPATHI', NULL, NULL, NULL, NULL, NULL, NULL, '1985-12-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(433, NULL, NULL, NULL, NULL, '20882', 'KAMAL KUMAR AGARWAL', NULL, NULL, NULL, NULL, NULL, NULL, '1969-04-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35');
INSERT INTO `profiles` (`id`, `user_id`, `profile_completed`, `year_of_allotment`, `date_of_entry_in_service`, `staff_no`, `officer_name`, `present_posting`, `office_address`, `date_of_joining_office`, `office_phone`, `office_fax`, `office_email`, `date_of_birth`, `native_district`, `state`, `educational_qualifications`, `languages_known`, `date_of_entry_in_present_grade`, `grade`, `level_in_pay_matrix`, `mobile_no`, `email_id`, `language`, `serving_status`, `created_at`, `updated_at`) VALUES
(434, NULL, NULL, NULL, NULL, '21400', 'KAMAL KUMAR JANGID', NULL, NULL, NULL, NULL, NULL, NULL, '1991-06-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(435, NULL, NULL, NULL, NULL, '21431', 'KAMAL SINGH YADAV', NULL, NULL, NULL, NULL, NULL, NULL, '1990-05-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(436, NULL, NULL, NULL, NULL, '20499', 'KAMLESH L TAYADE', NULL, NULL, NULL, NULL, NULL, NULL, '1970-10-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(437, NULL, NULL, NULL, NULL, '21421', 'KANIKA GAMBHIR', NULL, NULL, NULL, NULL, NULL, NULL, '1990-11-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(438, NULL, NULL, NULL, NULL, '21423', 'KANNAM VIJAY KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1990-11-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(439, NULL, NULL, NULL, NULL, '21046', 'KANWAL DEEP SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1975-02-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(440, NULL, NULL, NULL, NULL, '20484', 'KAPIL RASTOGI', NULL, NULL, NULL, NULL, NULL, NULL, '1969-09-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(441, NULL, NULL, NULL, NULL, '21326', 'KARAN GOYAL', NULL, NULL, NULL, NULL, NULL, NULL, '1988-08-19 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(442, NULL, NULL, NULL, NULL, '21496', 'Kase Subha sai', NULL, NULL, NULL, NULL, NULL, NULL, '1996-11-29 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(443, NULL, NULL, NULL, NULL, '20057', 'KASI MADHU MOHAN KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1965-04-11 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(444, NULL, NULL, NULL, NULL, '20475', 'KAUSHIK MUKHERJEE', NULL, NULL, NULL, NULL, NULL, NULL, '1967-09-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(445, NULL, NULL, NULL, NULL, '20113', 'KENDURKAR V', NULL, NULL, NULL, NULL, NULL, NULL, '1967-08-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(446, NULL, NULL, NULL, NULL, '21125', 'KHAGESH GARG', NULL, NULL, NULL, NULL, NULL, NULL, '1973-12-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(447, NULL, NULL, NULL, NULL, '21249', 'KHOT BIPIN RAMESH', NULL, NULL, NULL, NULL, NULL, NULL, '1980-07-09 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(448, NULL, NULL, NULL, NULL, '21346', 'KHUSHBOO SHARMA', NULL, NULL, NULL, NULL, NULL, NULL, '1986-08-28 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(449, NULL, NULL, NULL, NULL, '20036', 'KHUSHWANT RAI', NULL, NULL, NULL, NULL, NULL, NULL, '1966-04-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(450, NULL, NULL, NULL, NULL, '20314', 'KIRAN DUBEY', NULL, NULL, NULL, NULL, NULL, NULL, '1969-07-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(451, NULL, NULL, NULL, NULL, '20604', 'KISHORE BHAGTANI', NULL, NULL, NULL, NULL, NULL, NULL, '1970-06-06 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(452, NULL, NULL, NULL, NULL, '20728', 'KISHORE EKKA', NULL, NULL, NULL, NULL, NULL, NULL, '1972-01-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(453, NULL, NULL, NULL, NULL, '20100', 'KISHUN PAL VERMA', NULL, NULL, NULL, NULL, NULL, NULL, '1964-09-09 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(454, NULL, NULL, NULL, NULL, '21484', 'Komma Siva Rajeev Reddy', NULL, NULL, NULL, NULL, NULL, NULL, '1992-10-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(455, NULL, NULL, NULL, NULL, '21486', 'Koppati Siva Sankara Prasad', NULL, NULL, NULL, NULL, NULL, NULL, '1994-11-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(456, NULL, NULL, NULL, NULL, '21293', 'KOTA VIJAY', NULL, NULL, NULL, NULL, NULL, NULL, '1988-07-03 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(457, NULL, NULL, NULL, NULL, '20950', 'KRISHAN KUMAR AGRAWAL', NULL, NULL, NULL, NULL, NULL, NULL, '1972-11-04 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(458, NULL, NULL, NULL, NULL, '20521', 'KRISHNA BIHARI MEENA', NULL, NULL, NULL, NULL, NULL, NULL, '1966-06-04 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(459, NULL, NULL, NULL, NULL, '20960', 'KRISHNA KANT SINHA', NULL, NULL, NULL, NULL, NULL, NULL, '1973-11-04 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(460, NULL, NULL, NULL, NULL, '21290', 'KRISHNA KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1986-09-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(461, NULL, NULL, NULL, NULL, '20948', 'KRISHNA NAND RAI', NULL, NULL, NULL, NULL, NULL, NULL, '1975-01-11 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(462, NULL, NULL, NULL, NULL, '21298', 'KUDUPUDI RAM MANOHAR', NULL, NULL, NULL, NULL, NULL, NULL, '1988-06-06 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(463, NULL, NULL, NULL, NULL, '21480', 'Kuldeep', NULL, NULL, NULL, NULL, NULL, NULL, '1993-02-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(464, NULL, NULL, NULL, NULL, '20943', 'KULDEEP KUMAR SAHARAWAT', NULL, NULL, NULL, NULL, NULL, NULL, '1971-09-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(465, NULL, NULL, NULL, NULL, '20810', 'KULDEEP KUMAR SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1969-12-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(466, NULL, NULL, NULL, NULL, '20399', 'KULRANJAN KUJUR', NULL, NULL, NULL, NULL, NULL, NULL, '1970-10-07 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(467, NULL, NULL, NULL, NULL, '20042', 'KULWINDER KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1966-04-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(468, NULL, NULL, NULL, NULL, '20260', 'KUMAR PONUGOTI P', NULL, NULL, NULL, NULL, NULL, NULL, '1967-06-03 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(469, NULL, NULL, NULL, NULL, '20099', 'KUMAR R SAJI', NULL, NULL, NULL, NULL, NULL, NULL, '1967-05-31 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(470, NULL, NULL, NULL, NULL, '20695', 'KUMBHAM RAMESH', NULL, NULL, NULL, NULL, NULL, NULL, '1968-12-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(471, NULL, NULL, NULL, NULL, '21443', 'KUMUD JINDAL', NULL, NULL, NULL, NULL, NULL, NULL, '1995-01-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(472, NULL, NULL, NULL, NULL, '60069', 'Kunal Kulshrestha', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(473, NULL, NULL, NULL, NULL, '20957', 'KUNJ BIHARI SHARMA', NULL, NULL, NULL, NULL, NULL, NULL, '1974-08-06 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(474, NULL, NULL, NULL, NULL, '20176', 'KUSH KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1966-09-23 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(475, NULL, NULL, NULL, NULL, '20237', 'KUSH MANHAR', NULL, NULL, NULL, NULL, NULL, NULL, '1968-01-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(476, NULL, NULL, NULL, NULL, '20533', 'L SREENU', NULL, NULL, NULL, NULL, NULL, NULL, '1969-01-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(477, NULL, NULL, NULL, NULL, '20916', 'LAKHAN SINGH MEENA', NULL, NULL, NULL, NULL, NULL, NULL, '1968-08-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(478, NULL, NULL, NULL, NULL, '21472', 'Laksheswari Kumari jaiswal ', NULL, NULL, NULL, NULL, NULL, NULL, '1996-07-28 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(479, NULL, NULL, NULL, NULL, '20909', 'LALIT BIHARI LAL', NULL, NULL, NULL, NULL, NULL, NULL, '1973-07-24 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(480, NULL, NULL, NULL, NULL, '60014', 'Lalit Kumar Verma', NULL, NULL, NULL, NULL, NULL, NULL, '1986-08-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(481, NULL, NULL, NULL, NULL, '20984', 'LALIT YADAV', NULL, NULL, NULL, NULL, NULL, NULL, '1973-08-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(482, NULL, NULL, NULL, NULL, '21340', 'LAVI GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1990-12-26 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(483, NULL, NULL, NULL, NULL, '21013', 'LAXMI', NULL, NULL, NULL, NULL, NULL, NULL, '1974-08-03 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(484, NULL, NULL, NULL, NULL, '21462', 'Laxmi Kanta Nayak', NULL, NULL, NULL, NULL, NULL, NULL, '1992-09-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(485, NULL, NULL, NULL, NULL, '21474', 'Logesh Kumar V', NULL, NULL, NULL, NULL, NULL, NULL, '1998-01-07 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(486, NULL, NULL, NULL, NULL, '20640', 'LOKESH KUMAR GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1972-08-24 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(487, NULL, NULL, NULL, NULL, '60042', 'Lokesh Kumar K', NULL, NULL, NULL, NULL, NULL, NULL, '1987-02-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(488, NULL, NULL, NULL, NULL, '20813', 'M ABHISHEK', NULL, NULL, NULL, NULL, NULL, NULL, '1964-11-29 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(489, NULL, NULL, NULL, NULL, '21094', 'M ARVIND KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1975-04-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(490, NULL, NULL, NULL, NULL, '21172', 'M BHADRU', NULL, NULL, NULL, NULL, NULL, NULL, '1972-04-22 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(491, NULL, NULL, NULL, NULL, '20540', 'M CHANDRA MOULI', NULL, NULL, NULL, NULL, NULL, NULL, '1968-07-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(492, NULL, NULL, NULL, NULL, '20628', 'M ESHWAR', NULL, NULL, NULL, NULL, NULL, NULL, '1967-11-17 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(493, NULL, NULL, NULL, NULL, '20679', 'M RAVISHANKAR', NULL, NULL, NULL, NULL, NULL, NULL, '1972-05-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(494, NULL, NULL, NULL, NULL, '20977', 'M S DHAKER', NULL, NULL, NULL, NULL, NULL, NULL, '1971-09-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(495, NULL, NULL, NULL, NULL, '20702', 'M SRINIVASA RAO', NULL, NULL, NULL, NULL, NULL, NULL, '1968-06-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(496, NULL, NULL, NULL, NULL, '20470', 'M SRINIVASULU REDDY', NULL, NULL, NULL, NULL, NULL, NULL, '1970-06-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(497, NULL, NULL, NULL, NULL, '20879', 'M THULASI RAJASEKHAR', NULL, NULL, NULL, NULL, NULL, NULL, '1971-04-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(498, NULL, NULL, NULL, NULL, '21168', 'M V RAMANAIAH', NULL, NULL, NULL, NULL, NULL, NULL, '1972-05-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(499, NULL, NULL, NULL, NULL, '20027', 'M. MURALI KRISHNA', NULL, NULL, NULL, NULL, NULL, NULL, '1968-05-28 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(500, NULL, NULL, NULL, NULL, '110972', 'M.K. KHATRI', NULL, NULL, NULL, NULL, NULL, NULL, '1970-09-17 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(501, NULL, NULL, NULL, NULL, '21311', 'M.N. PAVAN KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1988-08-28 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(502, NULL, NULL, NULL, NULL, '21229', 'MADAN LAL', NULL, NULL, NULL, NULL, NULL, NULL, '1977-02-18 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(503, NULL, NULL, NULL, NULL, '8435', 'MADHU ARORA', NULL, NULL, NULL, NULL, NULL, NULL, '1964-12-17 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(504, NULL, NULL, NULL, NULL, '21217', 'MADHU DAS', NULL, NULL, NULL, NULL, NULL, NULL, '1974-11-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(505, NULL, NULL, NULL, NULL, '60099', 'Madhu Timan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(506, NULL, NULL, NULL, NULL, '21078', 'MADHURI RAJIV NIMJE', NULL, NULL, NULL, NULL, NULL, NULL, '1976-05-26 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(507, NULL, NULL, NULL, NULL, '20883', 'MAHANDER SINGH YADAV', NULL, NULL, NULL, NULL, NULL, NULL, '1972-11-11 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(508, NULL, NULL, NULL, NULL, '20044', 'MAHENDRA KR YADAV', NULL, NULL, NULL, NULL, NULL, NULL, '1966-03-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(509, NULL, NULL, NULL, NULL, '21248', 'MAHENDRA KUMAR JAIN', NULL, NULL, NULL, NULL, NULL, NULL, '1981-05-23 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(510, NULL, NULL, NULL, NULL, '21211', 'MAHENDRA PRAKASH GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1975-06-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(511, NULL, NULL, NULL, NULL, '8580', 'MAHENDRA SRIVASTAVA', NULL, NULL, NULL, NULL, NULL, NULL, '1964-10-31 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(512, NULL, NULL, NULL, NULL, '21170', 'MAHESH CHAND MEENA', NULL, NULL, NULL, NULL, NULL, NULL, '1976-11-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(513, NULL, NULL, NULL, NULL, '20622', 'MAHESH CHAND SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1970-08-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(514, NULL, NULL, NULL, NULL, '20875', 'MAHESH KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1972-09-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(515, NULL, NULL, NULL, NULL, '20660', 'MAHESH KUMAR PIPLANI', NULL, NULL, NULL, NULL, NULL, NULL, '1968-04-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(516, NULL, NULL, NULL, NULL, '21092', 'MAHESH SINGH NIKHURPA', NULL, NULL, NULL, NULL, NULL, NULL, '1974-10-13 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(517, NULL, NULL, NULL, NULL, '20535', 'MAITAN TOPPO', NULL, NULL, NULL, NULL, NULL, NULL, '1969-10-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(518, NULL, NULL, NULL, NULL, '21374', 'MANAS KUMAR PANDA', NULL, NULL, NULL, NULL, NULL, NULL, '1987-07-07 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(519, NULL, NULL, NULL, NULL, '21441', 'MANDEEP SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1985-08-11 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(520, NULL, NULL, NULL, NULL, '21475', 'Mani Shankar Meena', NULL, NULL, NULL, NULL, NULL, NULL, '1994-01-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(521, NULL, NULL, NULL, NULL, '20209', 'MANIS DAS', NULL, NULL, NULL, NULL, NULL, NULL, '1965-01-29 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(522, NULL, NULL, NULL, NULL, '21106', 'MANISH GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1974-01-28 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(523, NULL, NULL, NULL, NULL, '21258', 'MANISH JAIN', NULL, NULL, NULL, NULL, NULL, NULL, '1975-07-26 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(524, NULL, NULL, NULL, NULL, '21301', 'MANISH KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1985-05-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(525, NULL, NULL, NULL, NULL, '21225', 'MANISH KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1978-04-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(526, NULL, NULL, NULL, NULL, '20192', 'MANISH KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1967-09-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(527, NULL, NULL, NULL, NULL, '60104', 'MANISH KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(528, NULL, NULL, NULL, NULL, '20734', 'MANISH KUMAR AGARWAL', NULL, NULL, NULL, NULL, NULL, NULL, '1973-10-29 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(529, NULL, NULL, NULL, NULL, '21002', 'MANISH KUMAR BANSAL', NULL, NULL, NULL, NULL, NULL, NULL, '1973-01-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(530, NULL, NULL, NULL, NULL, '20573', 'MANISH KUMAR GARG', NULL, NULL, NULL, NULL, NULL, NULL, '1973-07-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(531, NULL, NULL, NULL, NULL, '21035', 'MANISH KUMAR RAJPUT', NULL, NULL, NULL, NULL, NULL, NULL, '1972-02-26 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(532, NULL, NULL, NULL, NULL, '20987', 'MANISH KUMAR VIMAL', NULL, NULL, NULL, NULL, NULL, NULL, '1973-07-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(533, NULL, NULL, NULL, NULL, '21116', 'MANISH LODHA', NULL, NULL, NULL, NULL, NULL, NULL, '1975-04-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(534, NULL, NULL, NULL, NULL, '20457', 'MANISH NIGAM', NULL, NULL, NULL, NULL, NULL, NULL, '1969-05-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(535, NULL, NULL, NULL, NULL, '111042', 'MANISH RANJAN', NULL, NULL, NULL, NULL, NULL, NULL, '1969-05-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(536, NULL, NULL, NULL, NULL, '21037', 'MANISH RATHORE', NULL, NULL, NULL, NULL, NULL, NULL, '1976-01-04 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(537, NULL, NULL, NULL, NULL, '20693', 'MANISH SAHU', NULL, NULL, NULL, NULL, NULL, NULL, '1967-03-26 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(538, NULL, NULL, NULL, NULL, '20546', 'MANISH SAXENA', NULL, NULL, NULL, NULL, NULL, NULL, '1970-12-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(539, NULL, NULL, NULL, NULL, '21279', 'MANISH SHUKLA', NULL, NULL, NULL, NULL, NULL, NULL, '1986-10-29 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(540, NULL, NULL, NULL, NULL, '20217', 'MANISH SHUKLA', NULL, NULL, NULL, NULL, NULL, NULL, '1967-12-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(541, NULL, NULL, NULL, NULL, '60008', 'Manish Tripathi', NULL, NULL, NULL, NULL, NULL, NULL, '1987-12-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(542, NULL, NULL, NULL, NULL, '20169', 'MANMOHAN SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1968-05-31 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(543, NULL, NULL, NULL, NULL, '20243', 'MANNA LAL MEGHWAL', NULL, NULL, NULL, NULL, NULL, NULL, '1966-03-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(544, NULL, NULL, NULL, NULL, '20087', 'MANOJ C', NULL, NULL, NULL, NULL, NULL, NULL, '1966-01-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(545, NULL, NULL, NULL, NULL, '21469', 'Manoj Kumar', NULL, NULL, NULL, NULL, NULL, NULL, '1993-10-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(546, NULL, NULL, NULL, NULL, '20638', 'MANOJ KUMAR - I', NULL, NULL, NULL, NULL, NULL, NULL, '1972-12-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(547, NULL, NULL, NULL, NULL, '21152', 'MANOJ KUMAR BHAKTA', NULL, NULL, NULL, NULL, NULL, NULL, '1972-02-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(548, NULL, NULL, NULL, NULL, '20680', 'MANOJ KUMAR MAHESHWARI', NULL, NULL, NULL, NULL, NULL, NULL, '1969-01-26 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(549, NULL, NULL, NULL, NULL, '21234', 'MANOJ KUMAR PANDEY', NULL, NULL, NULL, NULL, NULL, NULL, '1972-07-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(550, NULL, NULL, NULL, NULL, '20322', 'MANOJ KUMAR PATEL', NULL, NULL, NULL, NULL, NULL, NULL, '1968-08-13 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(551, NULL, NULL, NULL, NULL, '8515', 'MANOJ KUMAR SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1964-11-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(552, NULL, NULL, NULL, NULL, '20804', 'MANOJ KUMAR SONI', NULL, NULL, NULL, NULL, NULL, NULL, '1972-02-28 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(553, NULL, NULL, NULL, NULL, '21045', 'MANOJ VERMA', NULL, NULL, NULL, NULL, NULL, NULL, '1970-10-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(554, NULL, NULL, NULL, NULL, '21267', 'MANORANJAN', NULL, NULL, NULL, NULL, NULL, NULL, '1989-02-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(555, NULL, NULL, NULL, NULL, '9689', 'MANSHARAM RAWAT', NULL, NULL, NULL, NULL, NULL, NULL, '1964-11-09 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(556, NULL, NULL, NULL, NULL, '20872', 'MASHARIB GUL', NULL, NULL, NULL, NULL, NULL, NULL, '1972-08-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(557, NULL, NULL, NULL, NULL, '21440', 'MAYANK AWASTHI', NULL, NULL, NULL, NULL, NULL, NULL, '1987-12-03 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(558, NULL, NULL, NULL, NULL, '20769', 'MAYANK KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1974-09-28 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(559, NULL, NULL, NULL, NULL, '21284', 'MAYANK MRINAL', NULL, NULL, NULL, NULL, NULL, NULL, '1986-06-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(560, NULL, NULL, NULL, NULL, '21200', 'MAYANK TRIPATHI', NULL, NULL, NULL, NULL, NULL, NULL, '1977-05-04 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(561, NULL, NULL, NULL, NULL, '60013', 'Md Absarul Haque', NULL, NULL, NULL, NULL, NULL, NULL, '1986-02-28 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(562, NULL, NULL, NULL, NULL, '20596', 'MD SALIM BEG', NULL, NULL, NULL, NULL, NULL, NULL, '1969-07-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(563, NULL, NULL, NULL, NULL, '21294', 'MD. AFTAB ALAM', NULL, NULL, NULL, NULL, NULL, NULL, '1988-03-16 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(564, NULL, NULL, NULL, NULL, '21155', 'MD. SHAHKAR BARI', NULL, NULL, NULL, NULL, NULL, NULL, '1977-03-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(565, NULL, NULL, NULL, NULL, '21352', 'MEENA SHRIPHAL CHIRANJILAL', NULL, NULL, NULL, NULL, NULL, NULL, '1987-08-09 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(566, NULL, NULL, NULL, NULL, '21089', 'MEHAR CHAND NEGI', NULL, NULL, NULL, NULL, NULL, NULL, '1971-07-18 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(567, NULL, NULL, NULL, NULL, '20861', 'MEHUL R JOSHI', NULL, NULL, NULL, NULL, NULL, NULL, '1971-04-07 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(568, NULL, NULL, NULL, NULL, '20095', 'MITHILESH KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1967-12-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(569, NULL, NULL, NULL, NULL, '60032', 'MOHAMMAD FARAAZ AKHTAR', NULL, NULL, NULL, NULL, NULL, NULL, '1987-01-06 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(570, NULL, NULL, NULL, NULL, '60118', 'Mohammad Omair', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(571, NULL, NULL, NULL, NULL, '20204', 'MOHAMMAD ZAFAR IQBAL', NULL, NULL, NULL, NULL, NULL, NULL, '1968-06-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(572, NULL, NULL, NULL, NULL, '20292', 'MOHAN K P', NULL, NULL, NULL, NULL, NULL, NULL, '1967-03-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(573, NULL, NULL, NULL, NULL, '20168', 'MOHAN LAL', NULL, NULL, NULL, NULL, NULL, NULL, '1965-04-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(574, NULL, NULL, NULL, NULL, '20898', 'MOHAN LAL HIRWAL', NULL, NULL, NULL, NULL, NULL, NULL, '1972-07-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(575, NULL, NULL, NULL, NULL, '21253', 'MOHD ANIS UR REHMAN', NULL, NULL, NULL, NULL, NULL, NULL, '1978-05-29 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(576, NULL, NULL, NULL, NULL, '20805', 'MOHD MAHMOOD UR REHMAN', NULL, NULL, NULL, NULL, NULL, NULL, '1971-11-09 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(577, NULL, NULL, NULL, NULL, '21052', 'MOHD ZAKIR HUSSAIN', NULL, NULL, NULL, NULL, NULL, NULL, '1971-11-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(578, NULL, NULL, NULL, NULL, '8569', 'MOHD. WASEEM KAZMI', NULL, NULL, NULL, NULL, NULL, NULL, '1964-08-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(579, NULL, NULL, NULL, NULL, '21268', 'MOHIT BANSAL', NULL, NULL, NULL, NULL, NULL, NULL, '1988-10-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(580, NULL, NULL, NULL, NULL, '21357', 'MOHIT KUMAR AGGARWAL', NULL, NULL, NULL, NULL, NULL, NULL, '1989-10-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(581, NULL, NULL, NULL, NULL, '21057', 'MOMIDI VENAIAH', NULL, NULL, NULL, NULL, NULL, NULL, '1971-07-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(582, NULL, NULL, NULL, NULL, '21397', 'MONALISA NAGAR', NULL, NULL, NULL, NULL, NULL, NULL, '1988-01-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(583, NULL, NULL, NULL, NULL, '21339', 'MONU GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1988-06-04 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(584, NULL, NULL, NULL, NULL, '60026', 'Ms. Mudita Chandra', NULL, NULL, NULL, NULL, NULL, NULL, '1989-02-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(585, NULL, NULL, NULL, NULL, '60015', 'Ms. Ritu Chauhan', NULL, NULL, NULL, NULL, NULL, NULL, '1990-02-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(586, NULL, NULL, NULL, NULL, '21247', 'MUDIT MISHRA', NULL, NULL, NULL, NULL, NULL, NULL, '1980-12-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(587, NULL, NULL, NULL, NULL, '20029', 'MUKESH KR. CHAUHAN', NULL, NULL, NULL, NULL, NULL, NULL, '1966-12-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(588, NULL, NULL, NULL, NULL, '21034', 'MUKESH KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1976-01-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(589, NULL, NULL, NULL, NULL, '21185', 'MUKESH KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1974-01-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(590, NULL, NULL, NULL, NULL, '20363', 'MUKESH KUMAR GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1968-05-04 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(591, NULL, NULL, NULL, NULL, '20686', 'MUKESH KUMAR-I', NULL, NULL, NULL, NULL, NULL, NULL, '1969-12-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(592, NULL, NULL, NULL, NULL, '20716', 'MUKESH KUMAR-II', NULL, NULL, NULL, NULL, NULL, NULL, '1972-06-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(593, NULL, NULL, NULL, NULL, '20811', 'MUKESH LAL', NULL, NULL, NULL, NULL, NULL, NULL, '1972-08-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(594, NULL, NULL, NULL, NULL, '20516', 'MUKESH MANDAL', NULL, NULL, NULL, NULL, NULL, NULL, '1968-04-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(595, NULL, NULL, NULL, NULL, '20325', 'MUKESH MANGAL', NULL, NULL, NULL, NULL, NULL, NULL, '1968-11-06 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(596, NULL, NULL, NULL, NULL, '20918', 'MUKESH MEENA', NULL, NULL, NULL, NULL, NULL, NULL, '1971-09-06 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(597, NULL, NULL, NULL, NULL, '60092', 'Mukund Mishra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(598, NULL, NULL, NULL, NULL, '20349', 'MUMTAJ AHMED', NULL, NULL, NULL, NULL, NULL, NULL, '1969-07-04 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(599, NULL, NULL, NULL, NULL, '20337', 'MUNEESH GOGIA', NULL, NULL, NULL, NULL, NULL, NULL, '1968-04-09 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(600, NULL, NULL, NULL, NULL, '111380', 'MUNISH KAPOOR', NULL, NULL, NULL, NULL, NULL, NULL, '1970-01-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(601, NULL, NULL, NULL, NULL, '21347', 'MUPPURI RAJ ANUP', NULL, NULL, NULL, NULL, NULL, NULL, '1990-12-03 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(602, NULL, NULL, NULL, NULL, '20064', 'MURALI MOHAN P', NULL, NULL, NULL, NULL, NULL, NULL, '1967-01-18 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(603, NULL, NULL, NULL, NULL, '21166', 'N JANARDHAN', NULL, NULL, NULL, NULL, NULL, NULL, '1973-06-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(604, NULL, NULL, NULL, NULL, '20287', 'N MURALI KRISHNA', NULL, NULL, NULL, NULL, NULL, NULL, '1967-02-19 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(605, NULL, NULL, NULL, NULL, '21115', 'N RAMESH', NULL, NULL, NULL, NULL, NULL, NULL, '1977-06-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(606, NULL, NULL, NULL, NULL, '20567', 'N SATYANARAYANA', NULL, NULL, NULL, NULL, NULL, NULL, '1969-08-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(607, NULL, NULL, NULL, NULL, '20046', 'N. MURALI', NULL, NULL, NULL, NULL, NULL, NULL, '1966-04-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(608, NULL, NULL, NULL, NULL, '21282', 'NAIDU MARRI', NULL, NULL, NULL, NULL, NULL, NULL, '1986-08-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(609, NULL, NULL, NULL, NULL, '20453', 'NAINA RAM BISHNOI', NULL, NULL, NULL, NULL, NULL, NULL, '1968-10-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(610, NULL, NULL, NULL, NULL, '20824', 'NAKTA RAM', NULL, NULL, NULL, NULL, NULL, NULL, '1973-01-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(611, NULL, NULL, NULL, NULL, '20032', 'NALLI SUJATHA', NULL, NULL, NULL, NULL, NULL, NULL, '1966-07-16 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(612, NULL, NULL, NULL, NULL, '21353', 'NAMRATA SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1991-11-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(613, NULL, NULL, NULL, NULL, '21261', 'NAND KISHOR BIJARANIYAN', NULL, NULL, NULL, NULL, NULL, NULL, '1986-03-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(614, NULL, NULL, NULL, NULL, '20212', 'NANDLAL SUCHDEV', NULL, NULL, NULL, NULL, NULL, NULL, '1967-10-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(615, NULL, NULL, NULL, NULL, '21122', 'NARENDRA B NAKTODE', NULL, NULL, NULL, NULL, NULL, NULL, '1970-12-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(616, NULL, NULL, NULL, NULL, '111950', 'NARENDRA CHOUBEY', NULL, NULL, NULL, NULL, NULL, NULL, '1974-11-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(617, NULL, NULL, NULL, NULL, '20276', 'NARENDRA K KHOKHAR', NULL, NULL, NULL, NULL, NULL, NULL, '1968-06-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(618, NULL, NULL, NULL, NULL, '21039', 'NARENDRA KUMAR AGRAWAL', NULL, NULL, NULL, NULL, NULL, NULL, '1973-09-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(619, NULL, NULL, NULL, NULL, '21158', 'NARENDRA KUMAR H OZA', NULL, NULL, NULL, NULL, NULL, NULL, '1970-02-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(620, NULL, NULL, NULL, NULL, '20665', 'NARENDRA KUMAR LODHA', NULL, NULL, NULL, NULL, NULL, NULL, '1972-02-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(621, NULL, NULL, NULL, NULL, '20914', 'NARENDRA KUMAR MEENA', NULL, NULL, NULL, NULL, NULL, NULL, '1976-02-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(622, NULL, NULL, NULL, NULL, '8571', 'NARESH KHANNA', NULL, NULL, NULL, NULL, NULL, NULL, '1965-02-24 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(623, NULL, NULL, NULL, NULL, '8444', 'NARESH KUMAR GOEL', NULL, NULL, NULL, NULL, NULL, NULL, '1964-06-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(624, NULL, NULL, NULL, NULL, '20397', 'NARSI LAL MEENA', NULL, NULL, NULL, NULL, NULL, NULL, '1966-07-03 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(625, NULL, NULL, NULL, NULL, '21363', 'NAVEEN JAKHAR', NULL, NULL, NULL, NULL, NULL, NULL, '1990-01-11 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(626, NULL, NULL, NULL, NULL, '60025', 'Naveen Khichar', NULL, NULL, NULL, NULL, NULL, NULL, '1988-12-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(627, NULL, NULL, NULL, NULL, '20613', 'NAVEEN KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1971-06-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(628, NULL, NULL, NULL, NULL, '112324', 'NAVEEN KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1969-08-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(629, NULL, NULL, NULL, NULL, '20342', 'NAVEEN KUMAR GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1969-06-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(630, NULL, NULL, NULL, NULL, '21066', 'NAVENDRA SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1975-08-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(631, NULL, NULL, NULL, NULL, '20690', 'NAVNEET CHOUHAN', NULL, NULL, NULL, NULL, NULL, NULL, '1971-07-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(632, NULL, NULL, NULL, NULL, '21021', 'NAZIR AHMAD JOO', NULL, NULL, NULL, NULL, NULL, NULL, '1973-03-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(633, NULL, NULL, NULL, NULL, '21243', 'NEELESH SHRIVASTAVA', NULL, NULL, NULL, NULL, NULL, NULL, '1975-04-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(634, NULL, NULL, NULL, NULL, '21069', 'NEELESH SHRIVASTAVA', NULL, NULL, NULL, NULL, NULL, NULL, '1971-01-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(635, NULL, NULL, NULL, NULL, '20463', 'NEELIMA R. PHILLIPS', NULL, NULL, NULL, NULL, NULL, NULL, '1971-09-27 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(636, NULL, NULL, NULL, NULL, '20352', 'NEERAJ AGARWAL', NULL, NULL, NULL, NULL, NULL, NULL, '1965-07-31 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(637, NULL, NULL, NULL, NULL, '20193', 'NEERAJ KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1967-06-28 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(638, NULL, NULL, NULL, NULL, '20840', 'NEERAJ NARUKA', NULL, NULL, NULL, NULL, NULL, NULL, '1972-12-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(639, NULL, NULL, NULL, NULL, '20601', 'NEERAJ SINGHAL', NULL, NULL, NULL, NULL, NULL, NULL, '1969-10-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(640, NULL, NULL, NULL, NULL, '21020', 'NEERESH SHARMA', NULL, NULL, NULL, NULL, NULL, NULL, '1973-11-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(641, NULL, NULL, NULL, NULL, '20741', 'NEETESH KUMAR SRIVASTAVA', NULL, NULL, NULL, NULL, NULL, NULL, '1973-12-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(642, NULL, NULL, NULL, NULL, '21451', 'NEETU', NULL, NULL, NULL, NULL, NULL, NULL, '1990-08-27 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(643, NULL, NULL, NULL, NULL, '21286', 'NEHA UPADHYAY', NULL, NULL, NULL, NULL, NULL, NULL, '1986-12-19 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(644, NULL, NULL, NULL, NULL, '21306', 'NGANGBAM RATANJOY KHUMAN', NULL, NULL, NULL, NULL, NULL, NULL, '1986-04-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(645, NULL, NULL, NULL, NULL, '21376', 'NIDHI', NULL, NULL, NULL, NULL, NULL, NULL, '1988-08-17 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(646, NULL, NULL, NULL, NULL, '20837', 'NIDHI MATHUR', NULL, NULL, NULL, NULL, NULL, NULL, '1971-08-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(647, NULL, NULL, NULL, NULL, '21252', 'NIJAMUDDIN', NULL, NULL, NULL, NULL, NULL, NULL, '1979-05-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(648, NULL, NULL, NULL, NULL, '21453', 'NIKHIL KUMAR SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1991-09-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(649, NULL, NULL, NULL, NULL, '20757', 'NILAY SAHA', NULL, NULL, NULL, NULL, NULL, NULL, '1969-10-29 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35');
INSERT INTO `profiles` (`id`, `user_id`, `profile_completed`, `year_of_allotment`, `date_of_entry_in_service`, `staff_no`, `officer_name`, `present_posting`, `office_address`, `date_of_joining_office`, `office_phone`, `office_fax`, `office_email`, `date_of_birth`, `native_district`, `state`, `educational_qualifications`, `languages_known`, `date_of_entry_in_present_grade`, `grade`, `level_in_pay_matrix`, `mobile_no`, `email_id`, `language`, `serving_status`, `created_at`, `updated_at`) VALUES
(650, NULL, NULL, NULL, NULL, '60045', 'Nilesh Kumar Sinha', NULL, NULL, NULL, NULL, NULL, NULL, '1989-05-04 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(651, NULL, NULL, NULL, NULL, '21082', 'NILESHKUMAR HIRALAL CHAUHAN', NULL, NULL, NULL, NULL, NULL, NULL, '1975-08-16 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(652, NULL, NULL, NULL, NULL, '21432', 'NIRAJ', NULL, NULL, NULL, NULL, NULL, NULL, '1990-07-23 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(653, NULL, NULL, NULL, NULL, '20392', 'NIRMAL P.G.', NULL, NULL, NULL, NULL, NULL, NULL, '1968-05-13 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(654, NULL, NULL, NULL, NULL, '21385', 'NISHA', NULL, NULL, NULL, NULL, NULL, NULL, '1992-03-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(655, NULL, NULL, NULL, NULL, '21422', 'NISHANT CHAUDHARY', NULL, NULL, NULL, NULL, NULL, NULL, '1991-04-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(656, NULL, NULL, NULL, NULL, '21030', 'NITI SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1975-05-23 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(657, NULL, NULL, NULL, NULL, '21434', 'NITIKA', NULL, NULL, NULL, NULL, NULL, NULL, '1992-06-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(658, NULL, NULL, NULL, NULL, '20157', 'NITIN CHAYANDE', NULL, NULL, NULL, NULL, NULL, NULL, '1968-11-09 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(659, NULL, NULL, NULL, NULL, '8534', 'NITIN JAIN', NULL, NULL, NULL, NULL, NULL, NULL, '1964-08-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(660, NULL, NULL, NULL, NULL, '21473', 'NITIN PANCHAL', NULL, NULL, NULL, NULL, NULL, NULL, '1993-03-04 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(661, NULL, NULL, NULL, NULL, '20749', 'NITISH SINHA', NULL, NULL, NULL, NULL, NULL, NULL, '1973-10-09 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(662, NULL, NULL, NULL, NULL, '20282', 'OM PARKASH MANHAS', NULL, NULL, NULL, NULL, NULL, NULL, '1968-04-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(663, NULL, NULL, NULL, NULL, '21223', 'OM PRAKASH JANGIR', NULL, NULL, NULL, NULL, NULL, NULL, '1972-07-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(664, NULL, NULL, NULL, NULL, '21071', 'OM PRAKASH KANAUJIA', NULL, NULL, NULL, NULL, NULL, NULL, '1971-08-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(665, NULL, NULL, NULL, NULL, '20828', 'OMEGA R MARAK', NULL, NULL, NULL, NULL, NULL, NULL, '1970-07-19 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(666, NULL, NULL, NULL, NULL, '20897', 'P LOGANATHAN', NULL, NULL, NULL, NULL, NULL, NULL, '1967-01-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(667, NULL, NULL, NULL, NULL, '20666', 'P PANI PRASAD', NULL, NULL, NULL, NULL, NULL, NULL, '1971-08-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(668, NULL, NULL, NULL, NULL, '20511', 'P RAJU', NULL, NULL, NULL, NULL, NULL, NULL, '1968-04-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(669, NULL, NULL, NULL, NULL, '20993', 'P RAVI KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1969-12-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(670, NULL, NULL, NULL, NULL, '20978', 'P S SUBRAMANYAM', NULL, NULL, NULL, NULL, NULL, NULL, '1969-10-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(671, NULL, NULL, NULL, NULL, '20429', 'P V B PRASAD', NULL, NULL, NULL, NULL, NULL, NULL, '1967-05-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(672, NULL, NULL, NULL, NULL, '20722', 'P. VENKATESHAM', NULL, NULL, NULL, NULL, NULL, NULL, '1970-04-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(673, NULL, NULL, NULL, NULL, '20259', 'PABITRA SARKAR', NULL, NULL, NULL, NULL, NULL, NULL, '1967-12-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(674, NULL, NULL, NULL, NULL, '20190', 'PAI K SHANTHARAM', NULL, NULL, NULL, NULL, NULL, NULL, '1965-07-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(675, NULL, NULL, NULL, NULL, '21436', 'PAKHARE PANKAJ RAJAN', NULL, NULL, NULL, NULL, NULL, NULL, '1987-08-28 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(676, NULL, NULL, NULL, NULL, '20684', 'PALAMALA RADHIKA', NULL, NULL, NULL, NULL, NULL, NULL, '1970-05-23 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(677, NULL, NULL, NULL, NULL, '20312', 'PALLAVI TANDON', NULL, NULL, NULL, NULL, NULL, NULL, '1968-03-18 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(678, NULL, NULL, NULL, NULL, '60119', 'Pandit Subhakth Alen Anurag', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(679, NULL, NULL, NULL, NULL, '20551', 'PANKAJ BHANDARI', NULL, NULL, NULL, NULL, NULL, NULL, '1969-01-17 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(680, NULL, NULL, NULL, NULL, '20265', 'PANKAJ DAS', NULL, NULL, NULL, NULL, NULL, NULL, '1968-04-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(681, NULL, NULL, NULL, NULL, '20657', 'PANKAJ GARG', NULL, NULL, NULL, NULL, NULL, NULL, '1970-08-23 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(682, NULL, NULL, NULL, NULL, '21006', 'PANKAJ GOYAL', NULL, NULL, NULL, NULL, NULL, NULL, '1977-05-27 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(683, NULL, NULL, NULL, NULL, '20651', 'PANKAJ GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1970-01-09 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(684, NULL, NULL, NULL, NULL, '20205', 'PANKAJ KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1968-11-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(685, NULL, NULL, NULL, NULL, '107369', 'PANKAJ KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1966-05-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(686, NULL, NULL, NULL, NULL, '21345', 'PANKAJ KUMAR BHAGAT', NULL, NULL, NULL, NULL, NULL, NULL, '1987-04-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(687, NULL, NULL, NULL, NULL, '20928', 'PANKAJ KUMAR CHAND', NULL, NULL, NULL, NULL, NULL, NULL, '1970-05-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(688, NULL, NULL, NULL, NULL, '21111', 'PANKAJ KUMAR SALODIA', NULL, NULL, NULL, NULL, NULL, NULL, '1977-08-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(689, NULL, NULL, NULL, NULL, '20621', 'PANKAJ PORWAL', NULL, NULL, NULL, NULL, NULL, NULL, '1971-11-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(690, NULL, NULL, NULL, NULL, '21196', 'PANKAJ SRIVASTAVA', NULL, NULL, NULL, NULL, NULL, NULL, '1973-01-16 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(691, NULL, NULL, NULL, NULL, '60094', 'Pankaja Sahu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(692, NULL, NULL, NULL, NULL, '20941', 'PARAG AGRAWAL', NULL, NULL, NULL, NULL, NULL, NULL, '1974-05-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(693, NULL, NULL, NULL, NULL, '20635', 'PARITOSH KUMAR SHAH', NULL, NULL, NULL, NULL, NULL, NULL, '1970-01-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(694, NULL, NULL, NULL, NULL, '8616', 'PARMATMA RAI', NULL, NULL, NULL, NULL, NULL, NULL, '1964-06-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(695, NULL, NULL, NULL, NULL, '20782', 'PARMOD KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1971-11-18 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(696, NULL, NULL, NULL, NULL, '21466', 'Parth Batra', NULL, NULL, NULL, NULL, NULL, NULL, '1998-04-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(697, NULL, NULL, NULL, NULL, '21315', 'PATANJALI PRAKASH', NULL, NULL, NULL, NULL, NULL, NULL, '1987-07-04 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(698, NULL, NULL, NULL, NULL, '20315', 'PAVAN KUMAR BHARGAVA', NULL, NULL, NULL, NULL, NULL, NULL, '1969-09-09 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(699, NULL, NULL, NULL, NULL, '21124', 'PAVAN KUMAR GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1972-06-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(700, NULL, NULL, NULL, NULL, '20218', 'PAWAN GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1967-08-09 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(701, NULL, NULL, NULL, NULL, '21003', 'PAWAN KUMAR AGGARWAL', NULL, NULL, NULL, NULL, NULL, NULL, '1975-07-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(702, NULL, NULL, NULL, NULL, '8619', 'PAWAN KUMAR JAIN', NULL, NULL, NULL, NULL, NULL, NULL, '1964-08-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(703, NULL, NULL, NULL, NULL, '20800', 'PAWAN KUMAR KHATRI', NULL, NULL, NULL, NULL, NULL, NULL, '1973-10-07 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(704, NULL, NULL, NULL, NULL, '20534', 'PAWAN KUMAR NEGI', NULL, NULL, NULL, NULL, NULL, NULL, '1966-01-03 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(705, NULL, NULL, NULL, NULL, '20506', 'PILLI KRISHNA KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1967-07-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(706, NULL, NULL, NULL, NULL, '20594', 'PIYUSH CHAND GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1970-06-24 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(707, NULL, NULL, NULL, NULL, '20585', 'PIYUSH CHETIYA', NULL, NULL, NULL, NULL, NULL, NULL, '1968-12-04 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(708, NULL, NULL, NULL, NULL, '20131', 'PIYUSH VERMA', NULL, NULL, NULL, NULL, NULL, NULL, '1965-08-07 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(709, NULL, NULL, NULL, NULL, '60117', 'Poonam Kumari', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(710, NULL, NULL, NULL, NULL, '8646', 'POONKODI T.', NULL, NULL, NULL, NULL, NULL, NULL, '1966-03-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(711, NULL, NULL, NULL, NULL, '20904', 'POORAN CHAND', NULL, NULL, NULL, NULL, NULL, NULL, '1969-01-07 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(712, NULL, NULL, NULL, NULL, '21086', 'POORAN SINGH KOUSHAL', NULL, NULL, NULL, NULL, NULL, NULL, '1975-03-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(713, NULL, NULL, NULL, NULL, '21017', 'PRABHA JI', NULL, NULL, NULL, NULL, NULL, NULL, '1970-12-28 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(714, NULL, NULL, NULL, NULL, '20803', 'PRABHANSH YADAV', NULL, NULL, NULL, NULL, NULL, NULL, '1972-08-29 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(715, NULL, NULL, NULL, NULL, '20944', 'PRABHAT DIKSHIT', NULL, NULL, NULL, NULL, NULL, NULL, '1975-03-13 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(716, NULL, NULL, NULL, NULL, '21395', 'PRABHOO DAYAL JAT', NULL, NULL, NULL, NULL, NULL, NULL, '1988-07-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(717, NULL, NULL, NULL, NULL, '20908', 'PRABHU PRADUTT', NULL, NULL, NULL, NULL, NULL, NULL, '1973-04-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(718, NULL, NULL, NULL, NULL, '20770', 'PRACHISH KHANNA', NULL, NULL, NULL, NULL, NULL, NULL, '1971-09-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(719, NULL, NULL, NULL, NULL, '21179', 'PRADEEP KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1976-08-16 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(720, NULL, NULL, NULL, NULL, '20588', 'PRADEEP KUMAR MISRA', NULL, NULL, NULL, NULL, NULL, NULL, '1970-07-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(721, NULL, NULL, NULL, NULL, '60085', 'Pradeep Singh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(722, NULL, NULL, NULL, NULL, '20309', 'PRADEEP SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1969-10-18 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(723, NULL, NULL, NULL, NULL, '60089', 'Pradhyuman Meena', NULL, NULL, NULL, NULL, NULL, NULL, '1990-07-11 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(724, NULL, NULL, NULL, NULL, '8572', 'PRADIP GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1966-03-19 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(725, NULL, NULL, NULL, NULL, '21068', 'PRADYUMNA KUMAR MOHAPATRA', NULL, NULL, NULL, NULL, NULL, NULL, '1972-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(726, NULL, NULL, NULL, NULL, '20206', 'PRAFUL KUMAR SIGTIA', NULL, NULL, NULL, NULL, NULL, NULL, '1967-08-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(727, NULL, NULL, NULL, NULL, '21368', 'PRAKASH DANGI', NULL, NULL, NULL, NULL, NULL, NULL, '1990-12-26 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(728, NULL, NULL, NULL, NULL, '60056', 'PRAKASH KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1987-11-11 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(729, NULL, NULL, NULL, NULL, '20298', 'PRAMIL GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1969-07-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(730, NULL, NULL, NULL, NULL, '20939', 'PRAMOD KUMAR PANDA', NULL, NULL, NULL, NULL, NULL, NULL, '1970-06-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(731, NULL, NULL, NULL, NULL, '20514', 'PRAMOD S SAPKALE', NULL, NULL, NULL, NULL, NULL, NULL, '1966-01-28 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(732, NULL, NULL, NULL, NULL, '21029', 'PRAMOD YADAV', NULL, NULL, NULL, NULL, NULL, NULL, '1975-12-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(733, NULL, NULL, NULL, NULL, '21102', 'PRANAB KUMAR ROY', NULL, NULL, NULL, NULL, NULL, NULL, '1970-12-31 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(734, NULL, NULL, NULL, NULL, '21450', 'PRANAY DIWAKAR', NULL, NULL, NULL, NULL, NULL, NULL, '1992-08-22 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(735, NULL, NULL, NULL, NULL, '20529', 'PRANJAL B THAKUR', NULL, NULL, NULL, NULL, NULL, NULL, '1967-01-09 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(736, NULL, NULL, NULL, NULL, '20500', 'PRASHANT KUMAR DHORE', NULL, NULL, NULL, NULL, NULL, NULL, '1970-01-11 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(737, NULL, NULL, NULL, NULL, '20762', 'PRASHANT PATI SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1970-12-11 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(738, NULL, NULL, NULL, NULL, '8551', 'PRASHANT R. PATIL', NULL, NULL, NULL, NULL, NULL, NULL, '1965-07-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(739, NULL, NULL, NULL, NULL, '20988', 'PRASHANT S PANTODE', NULL, NULL, NULL, NULL, NULL, NULL, '1975-03-16 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(740, NULL, NULL, NULL, NULL, '21314', 'PRASHANT VERMA', NULL, NULL, NULL, NULL, NULL, NULL, '1986-10-31 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(741, NULL, NULL, NULL, NULL, '21093', 'PRASHANTA KUMAR BASUMATARY', NULL, NULL, NULL, NULL, NULL, NULL, '1969-08-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(742, NULL, NULL, NULL, NULL, '21317', 'PRASHIK JAWADE', NULL, NULL, NULL, NULL, NULL, NULL, '1986-03-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(743, NULL, NULL, NULL, NULL, '21022', 'PRASOON CHANDRA', NULL, NULL, NULL, NULL, NULL, NULL, '1977-01-22 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(744, NULL, NULL, NULL, NULL, '21404', 'PRATIKSHA YADAV', NULL, NULL, NULL, NULL, NULL, NULL, '1992-02-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(745, NULL, NULL, NULL, NULL, '21430', 'PRAVEEN KULAHARI', NULL, NULL, NULL, NULL, NULL, NULL, '1992-04-17 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(746, NULL, NULL, NULL, NULL, '21487', 'Praveen Kumar Mishra', NULL, NULL, NULL, NULL, NULL, NULL, '1991-07-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(747, NULL, NULL, NULL, NULL, '21488', 'Pravin Kumar Singh', NULL, NULL, NULL, NULL, NULL, NULL, '1992-01-16 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(748, NULL, NULL, NULL, NULL, '20412', 'PREETI BANZAL', NULL, NULL, NULL, NULL, NULL, NULL, '1968-07-06 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(749, NULL, NULL, NULL, NULL, '21288', 'PREETIKA SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1987-02-23 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(750, NULL, NULL, NULL, NULL, '20717', 'PREM CHAND', NULL, NULL, NULL, NULL, NULL, NULL, '1969-12-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(751, NULL, NULL, NULL, NULL, '20857', 'PREM CHAND SHARMA', NULL, NULL, NULL, NULL, NULL, NULL, '1974-06-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(752, NULL, NULL, NULL, NULL, '20400', 'PREMJIT LAL SOLANKI', NULL, NULL, NULL, NULL, NULL, NULL, '1968-07-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(753, NULL, NULL, NULL, NULL, '60108', 'Prince Kumar', NULL, NULL, NULL, NULL, NULL, NULL, '1993-05-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(754, NULL, NULL, NULL, NULL, '20245', 'PROBODH K SAHANA', NULL, NULL, NULL, NULL, NULL, NULL, '1966-02-09 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(755, NULL, NULL, NULL, NULL, '60020', 'Pukhraj Meena', NULL, NULL, NULL, NULL, NULL, NULL, '1987-07-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(756, NULL, NULL, NULL, NULL, '21123', 'PUNEET KUMAR RAJPUT', NULL, NULL, NULL, NULL, NULL, NULL, '1975-07-11 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(757, NULL, NULL, NULL, NULL, '60012', 'Punit Kumar', NULL, NULL, NULL, NULL, NULL, NULL, '1987-12-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(758, NULL, NULL, NULL, NULL, '20483', 'PUNIT KUMAR SHRIVASTAVA', NULL, NULL, NULL, NULL, NULL, NULL, '1970-10-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(759, NULL, NULL, NULL, NULL, '60049', 'Puppireddy Rajesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(760, NULL, NULL, NULL, NULL, '20152', 'PUSHPENDRA KUMAR SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1967-12-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(761, NULL, NULL, NULL, NULL, '20662', 'R ANIL KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1968-05-31 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(762, NULL, NULL, NULL, NULL, '20894', 'R BABU SRINIVASA KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1969-11-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(763, NULL, NULL, NULL, NULL, '20721', 'R D NIKAM', NULL, NULL, NULL, NULL, NULL, NULL, '1968-04-09 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(764, NULL, NULL, NULL, NULL, '20793', 'R PAVANA MURTHY', NULL, NULL, NULL, NULL, NULL, NULL, '1970-06-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(765, NULL, NULL, NULL, NULL, '112348', 'R.K. GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1971-10-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(766, NULL, NULL, NULL, NULL, '111036', 'R.K. JHA', NULL, NULL, NULL, NULL, NULL, NULL, '1967-06-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(767, NULL, NULL, NULL, NULL, '20351', 'R.K.CHANDRAKAR', NULL, NULL, NULL, NULL, NULL, NULL, '1968-07-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(768, NULL, NULL, NULL, NULL, '21065', 'RABINDRA MURARI', NULL, NULL, NULL, NULL, NULL, NULL, '1973-01-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(769, NULL, NULL, NULL, NULL, '20698', 'RACHANA SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1969-05-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(770, NULL, NULL, NULL, NULL, '20030', 'RADHACHARAN SHAKYA', NULL, NULL, NULL, NULL, NULL, NULL, '1966-09-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(771, NULL, NULL, NULL, NULL, '8639', 'RADHESHYAM PARMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1966-08-22 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(772, NULL, NULL, NULL, NULL, '20255', 'RADHEY SHYAM VERMA', NULL, NULL, NULL, NULL, NULL, NULL, '1964-12-17 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(773, NULL, NULL, NULL, NULL, '21427', 'RAFI AHMAD ANSARI', NULL, NULL, NULL, NULL, NULL, NULL, '1988-02-17 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:35', '2025-09-17 02:36:35'),
(774, NULL, NULL, NULL, NULL, '21471', 'Raghav Purwar ', NULL, NULL, NULL, NULL, NULL, NULL, '1996-06-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(775, NULL, NULL, NULL, NULL, '8540', 'RAGHAVENDRA RAO G.', NULL, NULL, NULL, NULL, NULL, NULL, '1964-10-04 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(776, NULL, NULL, NULL, NULL, '20118', 'RAGHVENDRA GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1966-07-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(777, NULL, NULL, NULL, NULL, '21464', 'Rahul Chouhan', NULL, NULL, NULL, NULL, NULL, NULL, '1993-07-17 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(778, NULL, NULL, NULL, NULL, '21457', 'Rahul Jain', NULL, NULL, NULL, NULL, NULL, NULL, '1994-02-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(779, NULL, NULL, NULL, NULL, '20881', 'RAHUL KUMAR SACHAN', NULL, NULL, NULL, NULL, NULL, NULL, '1973-08-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(780, NULL, NULL, NULL, NULL, '21467', 'Rahul Naredi ', NULL, NULL, NULL, NULL, NULL, NULL, '1997-02-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(781, NULL, NULL, NULL, NULL, '20935', 'RAHUL RASTOGI', NULL, NULL, NULL, NULL, NULL, NULL, '1975-08-27 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(782, NULL, NULL, NULL, NULL, '21425', 'RAHUL SAHU', NULL, NULL, NULL, NULL, NULL, NULL, '1991-03-09 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(783, NULL, NULL, NULL, NULL, '21100', 'RAHUL SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1976-03-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(784, NULL, NULL, NULL, NULL, '21300', 'RAHUL YADAV', NULL, NULL, NULL, NULL, NULL, NULL, '1980-11-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(785, NULL, NULL, NULL, NULL, '20913', 'RAJ KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1973-10-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(786, NULL, NULL, NULL, NULL, '21228', 'RAJ KUMAR CHHANENA', NULL, NULL, NULL, NULL, NULL, NULL, '1977-12-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(787, NULL, NULL, NULL, NULL, '20637', 'RAJ KUMAR SRIVASTAVA', NULL, NULL, NULL, NULL, NULL, NULL, '1971-06-17 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(788, NULL, NULL, NULL, NULL, '20625', 'RAJAN KAMBOJ', NULL, NULL, NULL, NULL, NULL, NULL, '1971-03-18 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(789, NULL, NULL, NULL, NULL, '20293', 'RAJASEKHAR K', NULL, NULL, NULL, NULL, NULL, NULL, '1968-03-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(790, NULL, NULL, NULL, NULL, '21479', 'Rajat Jain', NULL, NULL, NULL, NULL, NULL, NULL, '1990-08-11 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(791, NULL, NULL, NULL, NULL, '20358', 'RAJEEV BANSAL', NULL, NULL, NULL, NULL, NULL, NULL, '1970-06-13 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(792, NULL, NULL, NULL, NULL, '20554', 'RAJEEV CHANDEL', NULL, NULL, NULL, NULL, NULL, NULL, '1967-09-06 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(793, NULL, NULL, NULL, NULL, '21491', 'Rajeev Daipuriya', NULL, NULL, NULL, NULL, NULL, NULL, '1994-10-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(794, NULL, NULL, NULL, NULL, '21270', 'RAJEEV GAUTAM', NULL, NULL, NULL, NULL, NULL, NULL, '1987-06-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(795, NULL, NULL, NULL, NULL, '20783', 'RAJEEV KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1974-10-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(796, NULL, NULL, NULL, NULL, '20364', 'RAJEEV KUMAR KAUSHIK', NULL, NULL, NULL, NULL, NULL, NULL, '1968-08-24 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(797, NULL, NULL, NULL, NULL, '20339', 'RAJEEV KUMAR TYAGI', NULL, NULL, NULL, NULL, NULL, NULL, '1970-01-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(798, NULL, NULL, NULL, NULL, '20849', 'RAJEEV KUSHWAH', NULL, NULL, NULL, NULL, NULL, NULL, '1971-06-04 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(799, NULL, NULL, NULL, NULL, '20308', 'RAJEEV NARANG', NULL, NULL, NULL, NULL, NULL, NULL, '1970-07-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(800, NULL, NULL, NULL, NULL, '21406', 'RAJEEV RANJAN', NULL, NULL, NULL, NULL, NULL, NULL, '1989-01-26 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(801, NULL, NULL, NULL, NULL, '21136', 'RAJEEV RANJAN', NULL, NULL, NULL, NULL, NULL, NULL, '1975-10-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(802, NULL, NULL, NULL, NULL, '107001', 'RAJEEV SHARMA', NULL, NULL, NULL, NULL, NULL, NULL, '1968-06-19 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(803, NULL, NULL, NULL, NULL, '21060', 'RAJEEV YADAV', NULL, NULL, NULL, NULL, NULL, NULL, '1972-08-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(804, NULL, NULL, NULL, NULL, '21070', 'RAJENDER KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1973-07-06 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(805, NULL, NULL, NULL, NULL, '20924', 'RAJENDRA KUMAR SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1970-06-07 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(806, NULL, NULL, NULL, NULL, '20892', 'RAJENDRA KUMAR SONI', NULL, NULL, NULL, NULL, NULL, NULL, '1968-05-06 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(807, NULL, NULL, NULL, NULL, '20153', 'RAJENDRA MESHRAM', NULL, NULL, NULL, NULL, NULL, NULL, '1968-01-13 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(808, NULL, NULL, NULL, NULL, '8655', 'RAJENDRAN C.', NULL, NULL, NULL, NULL, NULL, NULL, '1966-04-09 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(809, NULL, NULL, NULL, NULL, '21476', 'RAJESH ', NULL, NULL, NULL, NULL, NULL, NULL, '1998-11-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(810, NULL, NULL, NULL, NULL, '20318', 'RAJESH GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1968-02-04 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(811, NULL, NULL, NULL, NULL, '20224', 'RAJESH GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1967-03-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(812, NULL, NULL, NULL, NULL, '20340', 'RAJESH KANUNGO', NULL, NULL, NULL, NULL, NULL, NULL, '1969-02-04 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(813, NULL, NULL, NULL, NULL, '60053', 'RAJESH KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1990-01-07 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(814, NULL, NULL, NULL, NULL, '20228', 'RAJESH KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1968-05-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(815, NULL, NULL, NULL, NULL, '20556', 'RAJESH KUMAR AGERWAL', NULL, NULL, NULL, NULL, NULL, NULL, '1969-07-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(816, NULL, NULL, NULL, NULL, '21099', 'RAJESH KUMAR GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1974-07-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(817, NULL, NULL, NULL, NULL, '20931', 'RAJESH KUMAR GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1971-10-28 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(818, NULL, NULL, NULL, NULL, '20492', 'RAJESH KUMAR II', NULL, NULL, NULL, NULL, NULL, NULL, '1967-11-27 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(819, NULL, NULL, NULL, NULL, '20433', 'RAJESH KUMAR MAHESHWARI', NULL, NULL, NULL, NULL, NULL, NULL, '1970-06-17 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(820, NULL, NULL, NULL, NULL, '21007', 'RAJESH KUMAR SAHU', NULL, NULL, NULL, NULL, NULL, NULL, '1975-07-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(821, NULL, NULL, NULL, NULL, '20756', 'RAJESH KUMAR SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1972-10-22 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(822, NULL, NULL, NULL, NULL, '20219', 'RAJESH KUMAR SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1968-07-04 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(823, NULL, NULL, NULL, NULL, '20761', 'RAJESH KUMAR SONI', NULL, NULL, NULL, NULL, NULL, NULL, '1973-06-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(824, NULL, NULL, NULL, NULL, '20183', 'RAJESH KUMAR SONI', NULL, NULL, NULL, NULL, NULL, NULL, '1969-01-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(825, NULL, NULL, NULL, NULL, '20787', 'RAJESH KUMAR VERMA', NULL, NULL, NULL, NULL, NULL, NULL, '1973-03-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(826, NULL, NULL, NULL, NULL, '20486', 'RAJESH SHARMA', NULL, NULL, NULL, NULL, NULL, NULL, '1971-02-19 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(827, NULL, NULL, NULL, NULL, '20004', 'RAJESH SHARMA', NULL, NULL, NULL, NULL, NULL, NULL, '1965-03-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(828, NULL, NULL, NULL, NULL, '111038', 'RAJESH TRIPATHI', NULL, NULL, NULL, NULL, NULL, NULL, '1969-09-29 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(829, NULL, NULL, NULL, NULL, '20724', 'RAJESHWAR DAYAL', NULL, NULL, NULL, NULL, NULL, NULL, '1971-08-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(830, NULL, NULL, NULL, NULL, '8393', 'RAJINDER KUMAR DAWRA', NULL, NULL, NULL, NULL, NULL, NULL, '1964-07-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(831, NULL, NULL, NULL, NULL, '20847', 'RAJIV KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1971-03-31 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(832, NULL, NULL, NULL, NULL, '20738', 'RAJIV KUMAR GOYAL', NULL, NULL, NULL, NULL, NULL, NULL, '1972-05-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(833, NULL, NULL, NULL, NULL, '20590', 'RAJIV RANJAN TIWARI', NULL, NULL, NULL, NULL, NULL, NULL, '1969-05-06 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(834, NULL, NULL, NULL, NULL, '20654', 'RAJIVA SRIVASTAVA', NULL, NULL, NULL, NULL, NULL, NULL, '1968-06-22 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(835, NULL, NULL, NULL, NULL, '21117', 'RAJKUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1970-11-28 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(836, NULL, NULL, NULL, NULL, '21332', 'RAJMOHAN MEENA', NULL, NULL, NULL, NULL, NULL, NULL, '1988-07-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(837, NULL, NULL, NULL, NULL, '20301', 'RAJNEESH KR. JAISWAL', NULL, NULL, NULL, NULL, NULL, NULL, '1966-02-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(838, NULL, NULL, NULL, NULL, '60040', 'Rajneesh Kumar', NULL, NULL, NULL, NULL, NULL, NULL, '1984-07-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(839, NULL, NULL, NULL, NULL, '21159', 'RAJVINDER SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1973-10-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(840, NULL, NULL, NULL, NULL, '21460', 'Rakesh Goyal', NULL, NULL, NULL, NULL, NULL, NULL, '1991-12-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(841, NULL, NULL, NULL, NULL, '21162', 'RAKESH KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1976-11-24 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(842, NULL, NULL, NULL, NULL, '20268', 'RAKESH KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1968-12-06 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(843, NULL, NULL, NULL, NULL, '20316', 'RAKESH KUMAR AGRAWAL', NULL, NULL, NULL, NULL, NULL, NULL, '1967-07-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(844, NULL, NULL, NULL, NULL, '21256', 'RAKESH KUMAR MEENA', NULL, NULL, NULL, NULL, NULL, NULL, '1977-04-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(845, NULL, NULL, NULL, NULL, '21239', 'RAKESH KUMAR TIWARI', NULL, NULL, NULL, NULL, NULL, NULL, '1981-06-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(846, NULL, NULL, NULL, NULL, '20990', 'RAKESH KUMAR TONDAR', NULL, NULL, NULL, NULL, NULL, NULL, '1972-09-03 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(847, NULL, NULL, NULL, NULL, '20975', 'RAKESH KUMAR VERMA', NULL, NULL, NULL, NULL, NULL, NULL, '1973-12-24 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(848, NULL, NULL, NULL, NULL, '20767', 'RAKESH S DESAI', NULL, NULL, NULL, NULL, NULL, NULL, '1970-02-26 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(849, NULL, NULL, NULL, NULL, '20843', 'RAKESH SHRIVASTAVA', NULL, NULL, NULL, NULL, NULL, NULL, '1972-09-06 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(850, NULL, NULL, NULL, NULL, '21112', 'RAKSHPAL GIRI', NULL, NULL, NULL, NULL, NULL, NULL, '1975-05-03 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(851, NULL, NULL, NULL, NULL, '21231', 'RAM BABU JATAV', NULL, NULL, NULL, NULL, NULL, NULL, '1974-12-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(852, NULL, NULL, NULL, NULL, '21153', 'RAM CHANDRA', NULL, NULL, NULL, NULL, NULL, NULL, '1969-07-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(853, NULL, NULL, NULL, NULL, '21194', 'RAM CHANDRA SHARMA', NULL, NULL, NULL, NULL, NULL, NULL, '1970-08-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(854, NULL, NULL, NULL, NULL, '21001', 'RAM GOPAL MEENA', NULL, NULL, NULL, NULL, NULL, NULL, '1972-01-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(855, NULL, NULL, NULL, NULL, '20069', 'RAM GOPAL YADAV', NULL, NULL, NULL, NULL, NULL, NULL, '1966-07-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(856, NULL, NULL, NULL, NULL, '21232', 'RAM KAILASH MEENA', NULL, NULL, NULL, NULL, NULL, NULL, '1977-07-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(857, NULL, NULL, NULL, NULL, '20430', 'RAM KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1966-04-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(858, NULL, NULL, NULL, NULL, '20587', 'RAM KUMAR AGRAWAL', NULL, NULL, NULL, NULL, NULL, NULL, '1969-03-27 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(859, NULL, NULL, NULL, NULL, '21134', 'RAM NARAYAN YADAV', NULL, NULL, NULL, NULL, NULL, NULL, '1975-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(860, NULL, NULL, NULL, NULL, '21133', 'RAM PRATAP SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1974-01-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(861, NULL, NULL, NULL, NULL, '21160', 'RAM RAJ MEENA', NULL, NULL, NULL, NULL, NULL, NULL, '1973-07-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(862, NULL, NULL, NULL, NULL, '21140', 'RAM RAJ YADAVA', NULL, NULL, NULL, NULL, NULL, NULL, '1972-05-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(863, NULL, NULL, NULL, NULL, '20896', 'RAM SAJIWAN SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1970-07-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(864, NULL, NULL, NULL, NULL, '20207', 'RAMA ANJANEYULU RVSS', NULL, NULL, NULL, NULL, NULL, NULL, '1967-01-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(865, NULL, NULL, NULL, NULL, '8591', 'RAMA GOPAL S.N.', NULL, NULL, NULL, NULL, NULL, NULL, '1965-04-11 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36');
INSERT INTO `profiles` (`id`, `user_id`, `profile_completed`, `year_of_allotment`, `date_of_entry_in_service`, `staff_no`, `officer_name`, `present_posting`, `office_address`, `date_of_joining_office`, `office_phone`, `office_fax`, `office_email`, `date_of_birth`, `native_district`, `state`, `educational_qualifications`, `languages_known`, `date_of_entry_in_present_grade`, `grade`, `level_in_pay_matrix`, `mobile_no`, `email_id`, `language`, `serving_status`, `created_at`, `updated_at`) VALUES
(866, NULL, NULL, NULL, NULL, '21193', 'RAMA KRISHNA MAJETY', NULL, NULL, NULL, NULL, NULL, NULL, '1973-08-28 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(867, NULL, NULL, NULL, NULL, '20394', 'RAMA KRISHNA NELLI', NULL, NULL, NULL, NULL, NULL, NULL, '1966-08-06 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(868, NULL, NULL, NULL, NULL, '20227', 'RAMA KRISHNA TYDA S', NULL, NULL, NULL, NULL, NULL, NULL, '1969-08-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(869, NULL, NULL, NULL, NULL, '20384', 'RAMA SHANKAR RAM', NULL, NULL, NULL, NULL, NULL, NULL, '1970-09-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(870, NULL, NULL, NULL, NULL, '20998', 'RAMAWATAR MEENA', NULL, NULL, NULL, NULL, NULL, NULL, '1974-07-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(871, NULL, NULL, NULL, NULL, '20719', 'RAMESH CHAND', NULL, NULL, NULL, NULL, NULL, NULL, '1968-04-09 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(872, NULL, NULL, NULL, NULL, '60033', 'Ramesh Chand Singh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(873, NULL, NULL, NULL, NULL, '20291', 'RAMESH CHANDRA', NULL, NULL, NULL, NULL, NULL, NULL, '1964-12-19 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(874, NULL, NULL, NULL, NULL, '20919', 'RAMESH CHANDRA MEENA', NULL, NULL, NULL, NULL, NULL, NULL, '1968-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(875, NULL, NULL, NULL, NULL, '8565', 'RAMESH KUMAR GOYAL', NULL, NULL, NULL, NULL, NULL, NULL, '1966-02-18 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(876, NULL, NULL, NULL, NULL, '20013', 'RAMESH PRASAD', NULL, NULL, NULL, NULL, NULL, NULL, '1964-08-17 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(877, NULL, NULL, NULL, NULL, '21044', 'RAMESHWAR DHARIWAL', NULL, NULL, NULL, NULL, NULL, NULL, '1972-08-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(878, NULL, NULL, NULL, NULL, '21098', 'RAMIT MAURYA', NULL, NULL, NULL, NULL, NULL, NULL, '1977-06-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(879, NULL, NULL, NULL, NULL, '20077', 'RAMJI TEWARI', NULL, NULL, NULL, NULL, NULL, NULL, '1966-02-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(880, NULL, NULL, NULL, NULL, '21456', 'RANJAN KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1991-02-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(881, NULL, NULL, NULL, NULL, '21269', 'RANJANA SIVARAM', NULL, NULL, NULL, NULL, NULL, NULL, '1989-04-27 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(882, NULL, NULL, NULL, NULL, '60023', 'Ranjeet Kumar', NULL, NULL, NULL, NULL, NULL, NULL, '1988-02-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(883, NULL, NULL, NULL, NULL, '20478', 'RANJEET KUMAR SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1969-12-16 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(884, NULL, NULL, NULL, NULL, '60083', 'Ranjeet Pratap Singh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(885, NULL, NULL, NULL, NULL, '20870', 'RANJIT KUMAR SAHOO', NULL, NULL, NULL, NULL, NULL, NULL, '1969-05-22 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(886, NULL, NULL, NULL, NULL, '20007', 'RANVEER SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1965-06-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(887, NULL, NULL, NULL, NULL, '20294', 'RAO K VIDYADHARA', NULL, NULL, NULL, NULL, NULL, NULL, '1968-12-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(888, NULL, NULL, NULL, NULL, '8656', 'RAO K.V.N.', NULL, NULL, NULL, NULL, NULL, NULL, '1965-05-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(889, NULL, NULL, NULL, NULL, '20125', 'RAO M NAGESH', NULL, NULL, NULL, NULL, NULL, NULL, '1966-07-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(890, NULL, NULL, NULL, NULL, '20495', 'RATNA THAKUR', NULL, NULL, NULL, NULL, NULL, NULL, '1968-03-23 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(891, NULL, NULL, NULL, NULL, '21255', 'RAUT MILIND DHANLAL', NULL, NULL, NULL, NULL, NULL, NULL, '1977-01-09 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(892, NULL, NULL, NULL, NULL, '20210', 'RAVI A ROBERT JERARD', NULL, NULL, NULL, NULL, NULL, NULL, '1969-09-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(893, NULL, NULL, NULL, NULL, '21257', 'RAVI CHHAWAL', NULL, NULL, NULL, NULL, NULL, NULL, '1978-04-29 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(894, NULL, NULL, NULL, NULL, '20382', 'RAVI KUMAR BUNGA', NULL, NULL, NULL, NULL, NULL, NULL, '1969-01-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(895, NULL, NULL, NULL, NULL, '21370', 'RAVI KUMAR MATHUR', NULL, NULL, NULL, NULL, NULL, NULL, '1992-03-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(896, NULL, NULL, NULL, NULL, '60046', 'Ravi Kumar Singh', NULL, NULL, NULL, NULL, NULL, NULL, '1989-04-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(897, NULL, NULL, NULL, NULL, '21265', 'RAVI PRAKASH SAXENA', NULL, NULL, NULL, NULL, NULL, NULL, '1985-05-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(898, NULL, NULL, NULL, NULL, '8437', 'RAVI.G.R.', NULL, NULL, NULL, NULL, NULL, NULL, '1964-10-13 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(899, NULL, NULL, NULL, NULL, '21079', 'RAVINDER KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1974-07-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(900, NULL, NULL, NULL, NULL, '20616', 'RAVINDER KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1971-05-24 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(901, NULL, NULL, NULL, NULL, '21207', 'RAVINDER KUMAR-I', NULL, NULL, NULL, NULL, NULL, NULL, '1975-08-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(902, NULL, NULL, NULL, NULL, '21214', 'RAVINDER KUMAR-II', NULL, NULL, NULL, NULL, NULL, NULL, '1977-09-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(903, NULL, NULL, NULL, NULL, '20017', 'RAVINDRA K.CHOUDHARY', NULL, NULL, NULL, NULL, NULL, NULL, '1966-02-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(904, NULL, NULL, NULL, NULL, '20915', 'RAVINDRA PRASAD', NULL, NULL, NULL, NULL, NULL, NULL, '1972-07-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(905, NULL, NULL, NULL, NULL, '21318', 'RAVINDRA VERMA', NULL, NULL, NULL, NULL, NULL, NULL, '1983-01-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(906, NULL, NULL, NULL, NULL, '20369', 'RAWAT ASHOK KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1970-08-23 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(907, NULL, NULL, NULL, NULL, '20226', 'REDDY CHIRRA A', NULL, NULL, NULL, NULL, NULL, NULL, '1965-11-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(908, NULL, NULL, NULL, NULL, '20454', 'REENA MALHOTRA', NULL, NULL, NULL, NULL, NULL, NULL, '1969-10-18 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(909, NULL, NULL, NULL, NULL, '8597', 'REKHA SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1966-07-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(910, NULL, NULL, NULL, NULL, '21208', 'REMESH RAJ S N', NULL, NULL, NULL, NULL, NULL, NULL, '1976-05-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(911, NULL, NULL, NULL, NULL, '20859', 'RITESH KAVDIA', NULL, NULL, NULL, NULL, NULL, NULL, '1976-03-27 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(912, NULL, NULL, NULL, NULL, '20863', 'RITU PANDE', NULL, NULL, NULL, NULL, NULL, NULL, '1973-09-22 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(913, NULL, NULL, NULL, NULL, '20559', 'ROBIN ADAVAL', NULL, NULL, NULL, NULL, NULL, NULL, '1969-04-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(914, NULL, NULL, NULL, NULL, '21277', 'ROBIN KUMAR LAKHANPAL', NULL, NULL, NULL, NULL, NULL, NULL, '1987-07-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(915, NULL, NULL, NULL, NULL, '21335', 'ROHIT JAIN', NULL, NULL, NULL, NULL, NULL, NULL, '1989-01-18 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(916, NULL, NULL, NULL, NULL, '8456', 'ROHIT SHARMA', NULL, NULL, NULL, NULL, NULL, NULL, '1965-02-13 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(917, NULL, NULL, NULL, NULL, '20643', 'ROOPAM GARG', NULL, NULL, NULL, NULL, NULL, NULL, '1972-12-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(918, NULL, NULL, NULL, NULL, '20134', 'ROSHNI SOHNI', NULL, NULL, NULL, NULL, NULL, NULL, '1966-03-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(919, NULL, NULL, NULL, NULL, '8594', 'ROY M. JACOB', NULL, NULL, NULL, NULL, NULL, NULL, '1965-02-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(920, NULL, NULL, NULL, NULL, '9674', 'RUDRA NARAYAN PALAI', NULL, NULL, NULL, NULL, NULL, NULL, '1966-06-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(921, NULL, NULL, NULL, NULL, '20411', 'RUPENDRA KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1970-07-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(922, NULL, NULL, NULL, NULL, '60109', 'Rupesh Deorao Chirde', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(923, NULL, NULL, NULL, NULL, '20422', 'S A MELMALGI', NULL, NULL, NULL, NULL, NULL, NULL, '1968-06-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(924, NULL, NULL, NULL, NULL, '20161', 'S AJITH KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1967-04-11 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(925, NULL, NULL, NULL, NULL, '20890', 'S ANAND KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1966-03-13 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(926, NULL, NULL, NULL, NULL, '20650', 'S K VIJAIVERGIA', NULL, NULL, NULL, NULL, NULL, NULL, '1972-07-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(927, NULL, NULL, NULL, NULL, '20040', 'S PARTHIBAN', NULL, NULL, NULL, NULL, NULL, NULL, '1966-03-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(928, NULL, NULL, NULL, NULL, '20387', 'S PUGAZHENDI', NULL, NULL, NULL, NULL, NULL, NULL, '1968-06-18 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(929, NULL, NULL, NULL, NULL, '112360', 'S R CHITALE', NULL, NULL, NULL, NULL, NULL, NULL, '1970-08-16 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(930, NULL, NULL, NULL, NULL, '20886', 'S RAJASEKHAR', NULL, NULL, NULL, NULL, NULL, NULL, '1968-08-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(931, NULL, NULL, NULL, NULL, '21000', 'S RAVI KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1975-03-29 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(932, NULL, NULL, NULL, NULL, '20552', 'S SRIDHAR', NULL, NULL, NULL, NULL, NULL, NULL, '1968-08-23 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(933, NULL, NULL, NULL, NULL, '21312', 'S. SIVA RAM PRASAD', NULL, NULL, NULL, NULL, NULL, NULL, '1985-04-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(934, NULL, NULL, NULL, NULL, '20336', 'S.GOPALAN', NULL, NULL, NULL, NULL, NULL, NULL, '1970-03-03 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(935, NULL, NULL, NULL, NULL, '20321', 'S.K.BHALLA', NULL, NULL, NULL, NULL, NULL, NULL, '1968-07-31 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(936, NULL, NULL, NULL, NULL, '20320', 'S.S.GALGALI', NULL, NULL, NULL, NULL, NULL, NULL, '1967-09-22 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(937, NULL, NULL, NULL, NULL, '20629', 'SABITA SOY', NULL, NULL, NULL, NULL, NULL, NULL, '1969-12-07 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(938, NULL, NULL, NULL, NULL, '21428', 'SACHIN', NULL, NULL, NULL, NULL, NULL, NULL, '1992-11-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(939, NULL, NULL, NULL, NULL, '21369', 'SACHIN RATHORE', NULL, NULL, NULL, NULL, NULL, NULL, '1988-12-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(940, NULL, NULL, NULL, NULL, '21147', 'SAKET KUMAR VERMA', NULL, NULL, NULL, NULL, NULL, NULL, '1973-09-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(941, NULL, NULL, NULL, NULL, '20456', 'SALIL KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1970-05-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(942, NULL, NULL, NULL, NULL, '20523', 'SALIM SUBAS BARA', NULL, NULL, NULL, NULL, NULL, NULL, '1968-06-17 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(943, NULL, NULL, NULL, NULL, '20460', 'SAMEER GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1971-02-03 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(944, NULL, NULL, NULL, NULL, '20390', 'SAMPA SAHA', NULL, NULL, NULL, NULL, NULL, NULL, '1969-11-03 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(945, NULL, NULL, NULL, NULL, '21324', 'SANCHIT KUMAR GARG', NULL, NULL, NULL, NULL, NULL, NULL, '1987-07-27 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(946, NULL, NULL, NULL, NULL, '20912', 'SANDEEP ARYA', NULL, NULL, NULL, NULL, NULL, NULL, '1974-07-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(947, NULL, NULL, NULL, NULL, '20677', 'SANDEEP BHARDWAJ', NULL, NULL, NULL, NULL, NULL, NULL, '1971-08-18 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(948, NULL, NULL, NULL, NULL, '20815', 'SANDEEP BHAVSAGAR', NULL, NULL, NULL, NULL, NULL, NULL, '1972-02-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(949, NULL, NULL, NULL, NULL, '20081', 'SANDEEP GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1965-12-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(950, NULL, NULL, NULL, NULL, '20733', 'SANDEEP KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1973-06-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(951, NULL, NULL, NULL, NULL, '21189', 'SANDEEP KUMAR GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1978-07-06 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(952, NULL, NULL, NULL, NULL, '20822', 'SANDEEP KUMAR KESHKAR', NULL, NULL, NULL, NULL, NULL, NULL, '1973-07-07 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(953, NULL, NULL, NULL, NULL, '20545', 'SANDEEP KUMAR SINGHAL', NULL, NULL, NULL, NULL, NULL, NULL, '1972-01-11 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(954, NULL, NULL, NULL, NULL, '60122', 'Sandeep Kumar Yadav', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(955, NULL, NULL, NULL, NULL, '9667', 'SANDEEP SAWARKAR', NULL, NULL, NULL, NULL, NULL, NULL, '1965-10-13 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(956, NULL, NULL, NULL, NULL, '21024', 'SANGEETA ASRANI', NULL, NULL, NULL, NULL, NULL, NULL, '1977-06-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(957, NULL, NULL, NULL, NULL, '21016', 'SANJAY BANSAL', NULL, NULL, NULL, NULL, NULL, NULL, '1975-08-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(958, NULL, NULL, NULL, NULL, '20842', 'SANJAY GHOSH', NULL, NULL, NULL, NULL, NULL, NULL, '1971-09-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(959, NULL, NULL, NULL, NULL, '20868', 'SANJAY GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1972-04-18 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(960, NULL, NULL, NULL, NULL, '20974', 'SANJAY KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1974-04-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(961, NULL, NULL, NULL, NULL, '21105', 'SANJAY KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1974-03-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(962, NULL, NULL, NULL, NULL, '20959', 'SANJAY KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1972-02-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(963, NULL, NULL, NULL, NULL, '112337', 'SANJAY KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1970-07-16 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(964, NULL, NULL, NULL, NULL, '20225', 'SANJAY KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1969-11-29 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(965, NULL, NULL, NULL, NULL, '21073', 'SANJAY KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1969-06-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(966, NULL, NULL, NULL, NULL, '20127', 'SANJAY KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1966-05-18 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(967, NULL, NULL, NULL, NULL, '20142', 'SANJAY KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1964-09-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(968, NULL, NULL, NULL, NULL, '21138', 'SANJAY KUMAR - II', NULL, NULL, NULL, NULL, NULL, NULL, '1974-03-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(969, NULL, NULL, NULL, NULL, '20401', 'SANJAY KUMAR AGRAWAL', NULL, NULL, NULL, NULL, NULL, NULL, '1968-06-17 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(970, NULL, NULL, NULL, NULL, '20764', 'SANJAY KUMAR GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1974-06-09 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(971, NULL, NULL, NULL, NULL, '20098', 'SANJAY KUMAR SOHANI', NULL, NULL, NULL, NULL, NULL, NULL, '1966-04-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(972, NULL, NULL, NULL, NULL, '20432', 'SANJAY KUMAR VARSHNEY', NULL, NULL, NULL, NULL, NULL, NULL, '1971-01-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(973, NULL, NULL, NULL, NULL, '20376', 'SANJAY PRASAD', NULL, NULL, NULL, NULL, NULL, NULL, '1969-09-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(974, NULL, NULL, NULL, NULL, '20636', 'SANJAY SETHI', NULL, NULL, NULL, NULL, NULL, NULL, '1971-09-07 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(975, NULL, NULL, NULL, NULL, '20469', 'SANJEET KUMAR SRIVASTAV', NULL, NULL, NULL, NULL, NULL, NULL, '1969-12-16 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(976, NULL, NULL, NULL, NULL, '20018', 'SANJEEV GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1966-12-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(977, NULL, NULL, NULL, NULL, '20639', 'SANJEEV K SHARMA', NULL, NULL, NULL, NULL, NULL, NULL, '1972-05-13 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(978, NULL, NULL, NULL, NULL, '8494', 'SANJEEV K. BIDWAI', NULL, NULL, NULL, NULL, NULL, NULL, '1965-07-28 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(979, NULL, NULL, NULL, NULL, '20323', 'SANJEEV KR. NARANG', NULL, NULL, NULL, NULL, NULL, NULL, '1969-02-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(980, NULL, NULL, NULL, NULL, '60075', 'Sanjeev Kumar', NULL, NULL, NULL, NULL, NULL, NULL, '1990-07-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(981, NULL, NULL, NULL, NULL, '21163', 'SANJEEV KUMAR ARYA', NULL, NULL, NULL, NULL, NULL, NULL, '1977-06-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(982, NULL, NULL, NULL, NULL, '111041', 'SANJEEV KUMAR BALYAN', NULL, NULL, NULL, NULL, NULL, NULL, '1972-09-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(983, NULL, NULL, NULL, NULL, '20140', 'SANJEEV KUMAR SHARMA', NULL, NULL, NULL, NULL, NULL, NULL, '1968-08-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(984, NULL, NULL, NULL, NULL, '20467', 'SANJEEV NAGPAL', NULL, NULL, NULL, NULL, NULL, NULL, '1970-08-27 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(985, NULL, NULL, NULL, NULL, '20053', 'SANJEEV PEEKA', NULL, NULL, NULL, NULL, NULL, NULL, '1966-05-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(986, NULL, NULL, NULL, NULL, '20656', 'SANJEEV SHARAN AGRAWAL', NULL, NULL, NULL, NULL, NULL, NULL, '1970-08-19 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(987, NULL, NULL, NULL, NULL, '8537', 'SANJEEV TYAGI', NULL, NULL, NULL, NULL, NULL, NULL, '1965-04-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(988, NULL, NULL, NULL, NULL, '20772', 'SANJEEV VERMA', NULL, NULL, NULL, NULL, NULL, NULL, '1972-05-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(989, NULL, NULL, NULL, NULL, '20426', 'SANJIB KUMAR DAS', NULL, NULL, NULL, NULL, NULL, NULL, '1968-05-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(990, NULL, NULL, NULL, NULL, '21344', 'SANJIV MEENA', NULL, NULL, NULL, NULL, NULL, NULL, '1988-07-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(991, NULL, NULL, NULL, NULL, '8559', 'SANJIWAN KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1965-03-07 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(992, NULL, NULL, NULL, NULL, '60051', 'SANTHAPURI PRASAD', NULL, NULL, NULL, NULL, NULL, NULL, '1986-04-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(993, NULL, NULL, NULL, NULL, '21297', 'SANTOSH KUMAR SAHOO', NULL, NULL, NULL, NULL, NULL, NULL, '1987-05-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(994, NULL, NULL, NULL, NULL, '20880', 'SANTOSH KUMAR SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1968-01-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(995, NULL, NULL, NULL, NULL, '21010', 'SARANG MANDVIKER', NULL, NULL, NULL, NULL, NULL, NULL, '1974-09-28 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(996, NULL, NULL, NULL, NULL, '20938', 'SAROJ KUMAR SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1972-12-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(997, NULL, NULL, NULL, NULL, '20958', 'SARSIJ SAURABH', NULL, NULL, NULL, NULL, NULL, NULL, '1974-11-03 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(998, NULL, NULL, NULL, NULL, '20284', 'SATISH KUMAR CHOPRA', NULL, NULL, NULL, NULL, NULL, NULL, '1967-05-16 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(999, NULL, NULL, NULL, NULL, '20689', 'SATISH KUMAR NAIN', NULL, NULL, NULL, NULL, NULL, NULL, '1972-02-19 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1000, NULL, NULL, NULL, NULL, '21407', 'SATYAM SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1993-08-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1001, NULL, NULL, NULL, NULL, '20410', 'SATYANARAIN GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1970-11-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1002, NULL, NULL, NULL, NULL, '20525', 'SATYENDRA KUMAR DEKA', NULL, NULL, NULL, NULL, NULL, NULL, '1970-03-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1003, NULL, NULL, NULL, NULL, '21367', 'SATYESH KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1989-03-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1004, NULL, NULL, NULL, NULL, '111029', 'SATYESHWAR PRASAD UNIYAL', NULL, NULL, NULL, NULL, NULL, NULL, '1971-07-17 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1005, NULL, NULL, NULL, NULL, '21438', 'SATYPAL MEENA', NULL, NULL, NULL, NULL, NULL, NULL, '1991-10-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1006, NULL, NULL, NULL, NULL, '60112', 'Saurabh Gupta', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1007, NULL, NULL, NULL, NULL, '8629', 'SAURABH GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1964-07-16 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1008, NULL, NULL, NULL, NULL, '21477', 'Saurabh Kashyap ', NULL, NULL, NULL, NULL, NULL, NULL, '1996-01-17 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1009, NULL, NULL, NULL, NULL, '21308', 'SAURABH KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1984-03-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1010, NULL, NULL, NULL, NULL, '21470', 'Saurav Kumar Singh', NULL, NULL, NULL, NULL, NULL, NULL, '1998-12-09 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1011, NULL, NULL, NULL, NULL, '107023', 'SAVITA ROHILLA', NULL, NULL, NULL, NULL, NULL, NULL, '1968-04-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1012, NULL, NULL, NULL, NULL, '20132', 'SAXENA VINEET', NULL, NULL, NULL, NULL, NULL, NULL, '1966-12-23 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1013, NULL, NULL, NULL, NULL, '20584', 'SEEMA TIWARI', NULL, NULL, NULL, NULL, NULL, NULL, '1970-10-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1014, NULL, NULL, NULL, NULL, '21391', 'SEETHARAMAN T.A.', NULL, NULL, NULL, NULL, NULL, NULL, '1988-05-07 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1015, NULL, NULL, NULL, NULL, '20090', 'SESHACHALAM M', NULL, NULL, NULL, NULL, NULL, NULL, '1968-07-03 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1016, NULL, NULL, NULL, NULL, '20485', 'SHAIK MUJIB PASHA', NULL, NULL, NULL, NULL, NULL, NULL, '1968-08-31 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1017, NULL, NULL, NULL, NULL, '21313', 'SHAILENDRA SAGAR', NULL, NULL, NULL, NULL, NULL, NULL, '1983-06-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1018, NULL, NULL, NULL, NULL, '21273', 'SHAILENDRA SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1984-02-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1019, NULL, NULL, NULL, NULL, '20354', 'SHAILESH SHRIVASTAVA', NULL, NULL, NULL, NULL, NULL, NULL, '1967-07-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1020, NULL, NULL, NULL, NULL, '20283', 'SHAJI T R', NULL, NULL, NULL, NULL, NULL, NULL, '1966-11-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1021, NULL, NULL, NULL, NULL, '20267', 'SHAKAL RAM', NULL, NULL, NULL, NULL, NULL, NULL, '1966-02-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1022, NULL, NULL, NULL, NULL, '20751', 'SHALEEN AGRAWAL', NULL, NULL, NULL, NULL, NULL, NULL, '1970-07-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1023, NULL, NULL, NULL, NULL, '20350', 'SHAMBHU PRASAD SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1024, NULL, NULL, NULL, NULL, '20983', 'SHAMPA PAUL', NULL, NULL, NULL, NULL, NULL, NULL, '1968-12-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1025, NULL, NULL, NULL, NULL, '20178', 'SHAMUVEL BHATAMBRE', NULL, NULL, NULL, NULL, NULL, NULL, '1965-12-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1026, NULL, NULL, NULL, NULL, '20965', 'SHANKAR LAL MEENA', NULL, NULL, NULL, NULL, NULL, NULL, '1975-07-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1027, NULL, NULL, NULL, NULL, '20375', 'SHANKAR PRASAD', NULL, NULL, NULL, NULL, NULL, NULL, '1967-11-11 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1028, NULL, NULL, NULL, NULL, '20258', 'SHANKAR V', NULL, NULL, NULL, NULL, NULL, NULL, '1966-01-13 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1029, NULL, NULL, NULL, NULL, '21210', 'SHANKER LAL MEGHAVANSHI', NULL, NULL, NULL, NULL, NULL, NULL, '1977-05-18 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1030, NULL, NULL, NULL, NULL, '20853', 'SHARATCHANDRA TIWARI', NULL, NULL, NULL, NULL, NULL, NULL, '1973-07-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1031, NULL, NULL, NULL, NULL, '20239', 'SHASHANK BHALEKAR', NULL, NULL, NULL, NULL, NULL, NULL, '1969-06-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1032, NULL, NULL, NULL, NULL, '21399', 'SHASHANK KUMAR NAMDEO', NULL, NULL, NULL, NULL, NULL, NULL, '1983-04-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1033, NULL, NULL, NULL, NULL, '20139', 'SHASHANK MALVIYA', NULL, NULL, NULL, NULL, NULL, NULL, '1968-07-18 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1034, NULL, NULL, NULL, NULL, '20389', 'SHASHI DEV DURGA', NULL, NULL, NULL, NULL, NULL, NULL, '1970-09-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1035, NULL, NULL, NULL, NULL, '21167', 'SHASHI KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1976-02-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1036, NULL, NULL, NULL, NULL, '20223', 'SHASHI MOHAN', NULL, NULL, NULL, NULL, NULL, NULL, '1966-06-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1037, NULL, NULL, NULL, NULL, '21341', 'SHASHI SHEKHAR PANDEY', NULL, NULL, NULL, NULL, NULL, NULL, '1987-11-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1038, NULL, NULL, NULL, NULL, '111047', 'SHATRUGHAN PRASAD SAHU', NULL, NULL, NULL, NULL, NULL, NULL, '1970-11-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1039, NULL, NULL, NULL, NULL, '21080', 'SHEEL PRIYA GAUTAM', NULL, NULL, NULL, NULL, NULL, NULL, '1975-01-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1040, NULL, NULL, NULL, NULL, '20075', 'SHEO BHADRA SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1966-02-27 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1041, NULL, NULL, NULL, NULL, '111045', 'SHETAKE   TANAJI BALAKU', NULL, NULL, NULL, NULL, NULL, NULL, '1967-09-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1042, NULL, NULL, NULL, NULL, '21129', 'SHISHIR KANSAL', NULL, NULL, NULL, NULL, NULL, NULL, '1978-01-07 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1043, NULL, NULL, NULL, NULL, '20262', 'SHIV NARAIN', NULL, NULL, NULL, NULL, NULL, NULL, '1967-08-07 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1044, NULL, NULL, NULL, NULL, '20817', 'SHIV RATAN', NULL, NULL, NULL, NULL, NULL, NULL, '1973-07-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1045, NULL, NULL, NULL, NULL, '20471', 'SHIV SHANKER SACHAN', NULL, NULL, NULL, NULL, NULL, NULL, '1968-09-24 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1046, NULL, NULL, NULL, NULL, '21489', 'Shivam Gupta', NULL, NULL, NULL, NULL, NULL, NULL, '1994-08-04 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1047, NULL, NULL, NULL, NULL, '60074', 'Shivam Shukla', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1048, NULL, NULL, NULL, NULL, '20611', 'SHOBHENDRA BAHADUR', NULL, NULL, NULL, NULL, NULL, NULL, '1970-08-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1049, NULL, NULL, NULL, NULL, '60113', 'Shravan Kumar Vaishya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1050, NULL, NULL, NULL, NULL, '20341', 'SHRIGOPAL AGRAWAL', NULL, NULL, NULL, NULL, NULL, NULL, '1969-07-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1051, NULL, NULL, NULL, NULL, '9680', 'SHUBHA N BHAMBHANI', NULL, NULL, NULL, NULL, NULL, NULL, '1965-09-19 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1052, NULL, NULL, NULL, NULL, '21468', 'Shubham', NULL, NULL, NULL, NULL, NULL, NULL, '1994-07-19 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1053, NULL, NULL, NULL, NULL, '21359', 'SHUBHAM GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1990-06-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1054, NULL, NULL, NULL, NULL, '60121', 'Shubham Yadav', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1055, NULL, NULL, NULL, NULL, '8568', 'SHUBHENDU TIWARI', NULL, NULL, NULL, NULL, NULL, NULL, '1966-06-13 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1056, NULL, NULL, NULL, NULL, '20877', 'SHUCHI SRIVASTAVA', NULL, NULL, NULL, NULL, NULL, NULL, '1972-06-07 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1057, NULL, NULL, NULL, NULL, '20509', 'SHYAM SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1971-07-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1058, NULL, NULL, NULL, NULL, '8577', 'SHYAM SUNDER CHANDAK', NULL, NULL, NULL, NULL, NULL, NULL, '1965-06-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1059, NULL, NULL, NULL, NULL, '21342', 'SIDDHARTH KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1986-11-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1060, NULL, NULL, NULL, NULL, '21373', 'SIDDHARTH SABHARWAL', NULL, NULL, NULL, NULL, NULL, NULL, '1991-06-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1061, NULL, NULL, NULL, NULL, '20789', 'SIDDHARTHA SAHOO', NULL, NULL, NULL, NULL, NULL, NULL, '1973-05-23 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1062, NULL, NULL, NULL, NULL, '20986', 'SIDH KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1972-06-22 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1063, NULL, NULL, NULL, NULL, '21375', 'SIMON SAMUEL', NULL, NULL, NULL, NULL, NULL, NULL, '1992-03-03 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1064, NULL, NULL, NULL, NULL, '60090', 'Singampalli Anil Kumar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1065, NULL, NULL, NULL, NULL, '21235', 'SITA RAM MEENA', NULL, NULL, NULL, NULL, NULL, NULL, '1976-03-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1066, NULL, NULL, NULL, NULL, '8590', 'SOBHANA V.', NULL, NULL, NULL, NULL, NULL, NULL, '1965-05-31 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1067, NULL, NULL, NULL, NULL, '20434', 'SOUVICK KUMAR DAS', NULL, NULL, NULL, NULL, NULL, NULL, '1968-11-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1068, NULL, NULL, NULL, NULL, '20213', 'SRI KRISHNA KARUTURI', NULL, NULL, NULL, NULL, NULL, NULL, '1966-06-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1069, NULL, NULL, NULL, NULL, '21174', 'SRINIVASA RAO A', NULL, NULL, NULL, NULL, NULL, NULL, '1976-07-23 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1070, NULL, NULL, NULL, NULL, '21482', 'Stalwartshine S', NULL, NULL, NULL, NULL, NULL, NULL, '1995-11-17 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1071, NULL, NULL, NULL, NULL, '60036', 'Subash Singh', NULL, NULL, NULL, NULL, NULL, NULL, '1988-01-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1072, NULL, NULL, NULL, NULL, '20668', 'SUBHASH CHAND', NULL, NULL, NULL, NULL, NULL, NULL, '1970-01-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1073, NULL, NULL, NULL, NULL, '20739', 'SUBHASH CHANDER AGARWAL', NULL, NULL, NULL, NULL, NULL, NULL, '1972-09-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1074, NULL, NULL, NULL, NULL, '21087', 'SUBHASH CHANDRA KAROL', NULL, NULL, NULL, NULL, NULL, NULL, '1975-11-11 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1075, NULL, NULL, NULL, NULL, '21259', 'SUBHASH CHANDRA KESARWANI', NULL, NULL, NULL, NULL, NULL, NULL, '1981-10-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1076, NULL, NULL, NULL, NULL, '20846', 'SUBODH SAXENA', NULL, NULL, NULL, NULL, NULL, NULL, '1969-08-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1077, NULL, NULL, NULL, NULL, '20902', 'SUBRAT KUMAR PRUSTY', NULL, NULL, NULL, NULL, NULL, NULL, '1972-07-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1078, NULL, NULL, NULL, NULL, '20910', 'SUBRATA KUMAR SAHA', NULL, NULL, NULL, NULL, NULL, NULL, '1970-08-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1079, NULL, NULL, NULL, NULL, '20712', 'SUDESH KUMAR CHOPRA', NULL, NULL, NULL, NULL, NULL, NULL, '1970-12-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1080, NULL, NULL, NULL, NULL, '20172', 'SUDHAKAR S', NULL, NULL, NULL, NULL, NULL, NULL, '1966-02-09 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1081, NULL, NULL, NULL, NULL, '21449', 'SUDHIR', NULL, NULL, NULL, NULL, NULL, NULL, '1994-09-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36');
INSERT INTO `profiles` (`id`, `user_id`, `profile_completed`, `year_of_allotment`, `date_of_entry_in_service`, `staff_no`, `officer_name`, `present_posting`, `office_address`, `date_of_joining_office`, `office_phone`, `office_fax`, `office_email`, `date_of_birth`, `native_district`, `state`, `educational_qualifications`, `languages_known`, `date_of_entry_in_present_grade`, `grade`, `level_in_pay_matrix`, `mobile_no`, `email_id`, `language`, `serving_status`, `created_at`, `updated_at`) VALUES
(1082, NULL, NULL, NULL, NULL, '20070', 'SUDHIR GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1967-01-26 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1083, NULL, NULL, NULL, NULL, '20746', 'SUDHIR KUMAR RAI', NULL, NULL, NULL, NULL, NULL, NULL, '1967-12-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1084, NULL, NULL, NULL, NULL, '20876', 'SUDIPTA ACHARJEE', NULL, NULL, NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1085, NULL, NULL, NULL, NULL, '20191', 'SUJEET KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1969-06-26 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1086, NULL, NULL, NULL, NULL, '21295', 'SUJIT KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1988-07-03 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1087, NULL, NULL, NULL, NULL, '21062', 'SUJIT KUMAR GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1970-05-24 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1088, NULL, NULL, NULL, NULL, '20715', 'SUKHBIR SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1970-10-09 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1089, NULL, NULL, NULL, NULL, '20641', 'SUMIT GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1971-10-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1090, NULL, NULL, NULL, NULL, '20832', 'SUMIT MISHRA', NULL, NULL, NULL, NULL, NULL, NULL, '1973-09-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1091, NULL, NULL, NULL, NULL, '21419', 'SUMIT SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1993-09-06 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1092, NULL, NULL, NULL, NULL, '20562', 'SUMNESH JOSHI', NULL, NULL, NULL, NULL, NULL, NULL, '1971-03-03 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1093, NULL, NULL, NULL, NULL, '60044', 'Sundeep Meena', NULL, NULL, NULL, NULL, NULL, NULL, '1986-10-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1094, NULL, NULL, NULL, NULL, '20415', 'SUNEEL KUMAR NIRANIYAN', NULL, NULL, NULL, NULL, NULL, NULL, '1968-07-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1095, NULL, NULL, NULL, NULL, '21356', 'SUNEET KUMAR TOMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1992-03-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1096, NULL, NULL, NULL, NULL, '21216', 'SUNIL BHADU', NULL, NULL, NULL, NULL, NULL, NULL, '1976-12-31 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1097, NULL, NULL, NULL, NULL, '20807', 'SUNIL GAUTAM', NULL, NULL, NULL, NULL, NULL, NULL, '1973-04-26 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1098, NULL, NULL, NULL, NULL, '20031', 'SUNIL KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1967-01-04 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1099, NULL, NULL, NULL, NULL, '8584', 'SUNIL KUMAR B.', NULL, NULL, NULL, NULL, NULL, NULL, '1965-05-28 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1100, NULL, NULL, NULL, NULL, '21127', 'SUNIL KUMAR LAKHERA', NULL, NULL, NULL, NULL, NULL, NULL, '1975-07-07 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1101, NULL, NULL, NULL, NULL, '21150', 'SUNIL KUMAR RANA', NULL, NULL, NULL, NULL, NULL, NULL, '1975-02-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1102, NULL, NULL, NULL, NULL, '21049', 'SUNIL KUMAR RANJAN', NULL, NULL, NULL, NULL, NULL, NULL, '1970-11-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1103, NULL, NULL, NULL, NULL, '21042', 'SUNIL KUMAR SHARMA', NULL, NULL, NULL, NULL, NULL, NULL, '1974-06-09 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1104, NULL, NULL, NULL, NULL, '20405', 'SUNIL KUMAR SINGHAL', NULL, NULL, NULL, NULL, NULL, NULL, '1969-08-13 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1105, NULL, NULL, NULL, NULL, '20766', 'SUNIL KUMAR SINGHAL', NULL, NULL, NULL, NULL, NULL, NULL, '1969-07-07 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1106, NULL, NULL, NULL, NULL, '8558', 'SUNITA CHANDRA', NULL, NULL, NULL, NULL, NULL, NULL, '1965-12-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1107, NULL, NULL, NULL, NULL, '20967', 'SUPRIYA JAISWAL', NULL, NULL, NULL, NULL, NULL, NULL, '1972-06-04 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1108, NULL, NULL, NULL, NULL, '20286', 'SURENDRA BABU G', NULL, NULL, NULL, NULL, NULL, NULL, '1967-08-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1109, NULL, NULL, NULL, NULL, '20231', 'SURENDRA RAI', NULL, NULL, NULL, NULL, NULL, NULL, '1968-10-31 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1110, NULL, NULL, NULL, NULL, '20714', 'SURENDRA SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1966-05-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1111, NULL, NULL, NULL, NULL, '20145', 'SURENDRAN V', NULL, NULL, NULL, NULL, NULL, NULL, '1965-01-09 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1112, NULL, NULL, NULL, NULL, '20996', 'SURESH CHANDER BADAL', NULL, NULL, NULL, NULL, NULL, NULL, '1975-05-17 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1113, NULL, NULL, NULL, NULL, '20905', 'SURESH CHANDRA RAJEEV', NULL, NULL, NULL, NULL, NULL, NULL, '1972-08-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1114, NULL, NULL, NULL, NULL, '21343', 'SURESH KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1983-11-19 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1115, NULL, NULL, NULL, NULL, '20121', 'SURESH PURI', NULL, NULL, NULL, NULL, NULL, NULL, '1968-11-22 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1116, NULL, NULL, NULL, NULL, '20256', 'SURESHKUMAR K S R', NULL, NULL, NULL, NULL, NULL, NULL, '1968-10-26 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1117, NULL, NULL, NULL, NULL, '20801', 'SURYA PRAKASH', NULL, NULL, NULL, NULL, NULL, NULL, '1970-01-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1118, NULL, NULL, NULL, NULL, '21444', 'SURYASH GAUTAM', NULL, NULL, NULL, NULL, NULL, NULL, '1995-12-19 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1119, NULL, NULL, NULL, NULL, '20848', 'SUSHIL KABRA', NULL, NULL, NULL, NULL, NULL, NULL, '1970-12-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1120, NULL, NULL, NULL, NULL, '21177', 'SUSHIL KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1976-04-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1121, NULL, NULL, NULL, NULL, '20672', 'SUSHIL KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1970-07-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1122, NULL, NULL, NULL, NULL, '8634', 'SUSHIL KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1965-02-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1123, NULL, NULL, NULL, NULL, '21054', 'SUSHIL KUMAR CHAURASIA', NULL, NULL, NULL, NULL, NULL, NULL, '1975-08-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1124, NULL, NULL, NULL, NULL, '20234', 'SUSHIL KUMAR SHEEMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1969-07-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1125, NULL, NULL, NULL, NULL, '109906', 'SUSHIL NAGESIA', NULL, NULL, NULL, NULL, NULL, NULL, '1966-05-24 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1126, NULL, NULL, NULL, NULL, '20547', 'SUSHMA MISHRA', NULL, NULL, NULL, NULL, NULL, NULL, '1971-10-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1127, NULL, NULL, NULL, NULL, '20246', 'SUTAR P ARIKSHIT C', NULL, NULL, NULL, NULL, NULL, NULL, '1967-02-04 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1128, NULL, NULL, NULL, NULL, '20441', 'SWADESH KUMAR SAMANTA', NULL, NULL, NULL, NULL, NULL, NULL, '1969-01-18 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1129, NULL, NULL, NULL, NULL, '9694', 'T. ANILA KIRAN', NULL, NULL, NULL, NULL, NULL, NULL, '1964-08-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1130, NULL, NULL, NULL, NULL, '20448', 'T. SREENIVASAN', NULL, NULL, NULL, NULL, NULL, NULL, '1971-05-28 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1131, NULL, NULL, NULL, NULL, '60028', 'Tabish Jawed', NULL, NULL, NULL, NULL, NULL, NULL, '1986-09-26 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1132, NULL, NULL, NULL, NULL, '21084', 'TAKALIKAR PRASHANT VAKSIDDHA', NULL, NULL, NULL, NULL, NULL, NULL, '1972-05-31 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1133, NULL, NULL, NULL, NULL, '21389', 'TANDALE SANDEEP RAMHARI', NULL, NULL, NULL, NULL, NULL, NULL, '1990-05-03 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1134, NULL, NULL, NULL, NULL, '21465', 'Tapan Prakash Jha ', NULL, NULL, NULL, NULL, NULL, NULL, '1995-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1135, NULL, NULL, NULL, NULL, '20220', 'TAPAS PAL', NULL, NULL, NULL, NULL, NULL, NULL, '1964-10-31 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1136, NULL, NULL, NULL, NULL, '21038', 'TARAK NATH DAS', NULL, NULL, NULL, NULL, NULL, NULL, '1970-11-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1137, NULL, NULL, NULL, NULL, '21492', 'Tejaswini Devanaboyina ', NULL, NULL, NULL, NULL, NULL, NULL, '1994-06-04 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:36', '2025-09-17 02:36:36'),
(1138, NULL, NULL, NULL, NULL, '20802', 'TEJPAL SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1970-07-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1139, NULL, NULL, NULL, NULL, '21410', 'THADURI NAVEEN', NULL, NULL, NULL, NULL, NULL, NULL, '1992-10-23 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1140, NULL, NULL, NULL, NULL, '20520', 'THAIU MAG', NULL, NULL, NULL, NULL, NULL, NULL, '1968-03-31 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1141, NULL, NULL, NULL, NULL, '20174', 'THILAGAVATHY D', NULL, NULL, NULL, NULL, NULL, NULL, '1968-07-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1142, NULL, NULL, NULL, NULL, '20671', 'THOMAS VARGHESE', NULL, NULL, NULL, NULL, NULL, NULL, '1971-06-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1143, NULL, NULL, NULL, NULL, '21490', 'Thondur Naveen Kumar Reddy', NULL, NULL, NULL, NULL, NULL, NULL, '1996-07-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1144, NULL, NULL, NULL, NULL, '20526', 'TOSHAK KUMAR MARKAM', NULL, NULL, NULL, NULL, NULL, NULL, '1970-02-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1145, NULL, NULL, NULL, NULL, '20851', 'TRILOK CHAND GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1146, NULL, NULL, NULL, NULL, '20992', 'TRILOK CHANDRA', NULL, NULL, NULL, NULL, NULL, NULL, '1973-05-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1147, NULL, NULL, NULL, NULL, '8564', 'TRIPTI SAXENA', NULL, NULL, NULL, NULL, NULL, NULL, '1965-06-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1148, NULL, NULL, NULL, NULL, '21316', 'TRISHNA MANDAL', NULL, NULL, NULL, NULL, NULL, NULL, '1987-07-09 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1149, NULL, NULL, NULL, NULL, '21181', 'TRIVEDI BHAVESH RAJNIKANT', NULL, NULL, NULL, NULL, NULL, NULL, '1973-11-28 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1150, NULL, NULL, NULL, NULL, '21459', 'Tushar Rastogi', NULL, NULL, NULL, NULL, NULL, NULL, '1995-03-18 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1151, NULL, NULL, NULL, NULL, '20678', 'U SREENIVAS', NULL, NULL, NULL, NULL, NULL, NULL, '1969-06-06 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1152, NULL, NULL, NULL, NULL, '20402', 'UJWAL A GULHANE', NULL, NULL, NULL, NULL, NULL, NULL, '1970-01-18 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1153, NULL, NULL, NULL, NULL, '20708', 'UMA KANT YADAV', NULL, NULL, NULL, NULL, NULL, NULL, '1970-02-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1154, NULL, NULL, NULL, NULL, '60096', 'Umakant', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1155, NULL, NULL, NULL, NULL, '21302', 'UMESH KHEMNANI', NULL, NULL, NULL, NULL, NULL, NULL, '1982-10-06 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1156, NULL, NULL, NULL, NULL, '20820', 'UMESH KUMAR KHICHI', NULL, NULL, NULL, NULL, NULL, NULL, '1973-05-13 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1157, NULL, NULL, NULL, NULL, '20667', 'UMESH PRASAD SAH', NULL, NULL, NULL, NULL, NULL, NULL, '1968-07-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1158, NULL, NULL, NULL, NULL, '20513', 'UPENDRA BAKOLIA', NULL, NULL, NULL, NULL, NULL, NULL, '1968-07-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1159, NULL, NULL, NULL, NULL, '20784', 'UPKAR KUMAR KEDIA', NULL, NULL, NULL, NULL, NULL, NULL, '1973-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1160, NULL, NULL, NULL, NULL, '21266', 'URVASHI SANGWAN', NULL, NULL, NULL, NULL, NULL, NULL, '1984-09-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1161, NULL, NULL, NULL, NULL, '60098', 'Utkarsh Verma', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1162, NULL, NULL, NULL, NULL, '21320', 'UTTAM CHAND MEENA', NULL, NULL, NULL, NULL, NULL, NULL, '1983-06-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1163, NULL, NULL, NULL, NULL, '20632', 'V S BURDE', NULL, NULL, NULL, NULL, NULL, NULL, '1969-07-20 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1164, NULL, NULL, NULL, NULL, '20699', 'V S KUSHAWAHA', NULL, NULL, NULL, NULL, NULL, NULL, '1970-04-03 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1165, NULL, NULL, NULL, NULL, '20808', 'V SRIDHAR', NULL, NULL, NULL, NULL, NULL, NULL, '1972-08-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1166, NULL, NULL, NULL, NULL, '21085', 'V SWAMYDAS RAJU', NULL, NULL, NULL, NULL, NULL, NULL, '1975-01-06 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1167, NULL, NULL, NULL, NULL, '20893', 'V VENKATESHWARLU', NULL, NULL, NULL, NULL, NULL, NULL, '1969-09-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1168, NULL, NULL, NULL, NULL, '20710', 'V. D. GODGHATE', NULL, NULL, NULL, NULL, NULL, NULL, '1970-06-04 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1169, NULL, NULL, NULL, NULL, '21398', 'VADDEPALLY SRIKANTH', NULL, NULL, NULL, NULL, NULL, NULL, '1990-06-24 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1170, NULL, NULL, NULL, NULL, '21362', 'VAIBHAV JAIN', NULL, NULL, NULL, NULL, NULL, NULL, '1991-07-18 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1171, NULL, NULL, NULL, NULL, '20742', 'VANDANA SETHI', NULL, NULL, NULL, NULL, NULL, NULL, '1973-08-04 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1172, NULL, NULL, NULL, NULL, '20235', 'VARAPRASAD T', NULL, NULL, NULL, NULL, NULL, NULL, '1967-05-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1173, NULL, NULL, NULL, NULL, '20644', 'VARUGHESE MATHEW', NULL, NULL, NULL, NULL, NULL, NULL, '1969-03-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1174, NULL, NULL, NULL, NULL, '21292', 'VARVAKANTI SIVA SANKAR', NULL, NULL, NULL, NULL, NULL, NULL, '1985-06-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1175, NULL, NULL, NULL, NULL, '60101', 'Vasa K Durga Prasadu ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1176, NULL, NULL, NULL, NULL, '110032', 'VASAVE B.J.', NULL, NULL, NULL, NULL, NULL, NULL, '1969-06-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1177, NULL, NULL, NULL, NULL, '20725', 'VASUDEV SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1971-03-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1178, NULL, NULL, NULL, NULL, '20687', 'VED PRAKASH VERMA', NULL, NULL, NULL, NULL, NULL, NULL, '1971-08-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1179, NULL, NULL, NULL, NULL, '20141', 'VENKATESAN S', NULL, NULL, NULL, NULL, NULL, NULL, '1965-01-27 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1180, NULL, NULL, NULL, NULL, '20836', 'VIBHA TOMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1973-02-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1181, NULL, NULL, NULL, NULL, '20867', 'VIJAY AGARWAL', NULL, NULL, NULL, NULL, NULL, NULL, '1973-10-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1182, NULL, NULL, NULL, NULL, '21197', 'VIJAY DIXIT', NULL, NULL, NULL, NULL, NULL, NULL, '1979-04-18 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1183, NULL, NULL, NULL, NULL, '20995', 'VIJAY KR NAYAK', NULL, NULL, NULL, NULL, NULL, NULL, '1974-07-16 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1184, NULL, NULL, NULL, NULL, '60071', 'Vijay Kumar', NULL, NULL, NULL, NULL, NULL, NULL, '1988-04-07 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1185, NULL, NULL, NULL, NULL, '20068', 'VIJAY KUMAR CHHABLANI', NULL, NULL, NULL, NULL, NULL, NULL, '1966-05-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1186, NULL, NULL, NULL, NULL, '20952', 'VIJAY KUMAR LILHARE', NULL, NULL, NULL, NULL, NULL, NULL, '1969-10-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1187, NULL, NULL, NULL, NULL, '20266', 'VIJAY KUMAR MAKAY', NULL, NULL, NULL, NULL, NULL, NULL, '1966-01-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1188, NULL, NULL, NULL, NULL, '21149', 'VIJAY KUMAR MAURYA', NULL, NULL, NULL, NULL, NULL, NULL, '1972-07-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1189, NULL, NULL, NULL, NULL, '20806', 'VIJAY KUMAR ROY', NULL, NULL, NULL, NULL, NULL, NULL, '1965-01-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1190, NULL, NULL, NULL, NULL, '20072', 'VIJAY KUMAR SURENDRA', NULL, NULL, NULL, NULL, NULL, NULL, '1966-08-26 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1191, NULL, NULL, NULL, NULL, '21055', 'VIJAY NARAYAN RAI', NULL, NULL, NULL, NULL, NULL, NULL, '1971-08-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1192, NULL, NULL, NULL, NULL, '20831', 'VIJAY PRAKASH', NULL, NULL, NULL, NULL, NULL, NULL, '1970-05-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1193, NULL, NULL, NULL, NULL, '21218', 'VIJAY SINGH NEMIWAL', NULL, NULL, NULL, NULL, NULL, NULL, '1977-08-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1194, NULL, NULL, NULL, NULL, '20681', 'VIJOY KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1971-06-28 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1195, NULL, NULL, NULL, NULL, '21433', 'VIKAS', NULL, NULL, NULL, NULL, NULL, NULL, '1993-03-26 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1196, NULL, NULL, NULL, NULL, '20755', 'VIKAS AGARWAL', NULL, NULL, NULL, NULL, NULL, NULL, '1971-10-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1197, NULL, NULL, NULL, NULL, '20953', 'VIKAS DADHICH', NULL, NULL, NULL, NULL, NULL, NULL, '1975-01-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1198, NULL, NULL, NULL, NULL, '20932', 'VIKAS GARG', NULL, NULL, NULL, NULL, NULL, NULL, '1976-01-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1199, NULL, NULL, NULL, NULL, '60110', 'Vikas Gautam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1200, NULL, NULL, NULL, NULL, '60043', 'Vikas Kumar Meena', NULL, NULL, NULL, NULL, NULL, NULL, '1990-01-18 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1201, NULL, NULL, NULL, NULL, '60027', 'Vikas kumar singh', NULL, NULL, NULL, NULL, NULL, NULL, '1987-05-03 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1202, NULL, NULL, NULL, NULL, '20388', 'VIKAS YASHAVANT JAYKAR', NULL, NULL, NULL, NULL, NULL, NULL, '1970-05-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1203, NULL, NULL, NULL, NULL, '21380', 'VIKASH DAILA', NULL, NULL, NULL, NULL, NULL, NULL, '1993-01-26 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1204, NULL, NULL, NULL, NULL, '21303', 'VIKRAM CHAVRA', NULL, NULL, NULL, NULL, NULL, NULL, '1988-01-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1205, NULL, NULL, NULL, NULL, '20051', 'VIKRAM MALVIYA', NULL, NULL, NULL, NULL, NULL, NULL, '1968-06-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1206, NULL, NULL, NULL, NULL, '60037', 'Vimal Kumar Singh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1207, NULL, NULL, NULL, NULL, '20720', 'VINAI KUMAR KANAUJIA', NULL, NULL, NULL, NULL, NULL, NULL, '1972-10-07 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1208, NULL, NULL, NULL, NULL, '21237', 'VINAY KUMAR KOKADE', NULL, NULL, NULL, NULL, NULL, NULL, '1976-06-26 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1209, NULL, NULL, NULL, NULL, '21424', 'VINAY RAJ CHOUDHARY', NULL, NULL, NULL, NULL, NULL, NULL, '1993-06-16 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1210, NULL, NULL, NULL, NULL, '20549', 'VINAY V JAMBHALI', NULL, NULL, NULL, NULL, NULL, NULL, '1970-04-23 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1211, NULL, NULL, NULL, NULL, '60114', 'Vinayak Chouksey', NULL, NULL, NULL, NULL, NULL, NULL, '1991-09-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1212, NULL, NULL, NULL, NULL, '21390', 'VINEET MALIK', NULL, NULL, NULL, NULL, NULL, NULL, '1991-09-26 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1213, NULL, NULL, NULL, NULL, '20963', 'VINEET VERMA', NULL, NULL, NULL, NULL, NULL, NULL, '1972-11-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1214, NULL, NULL, NULL, NULL, '60060', 'Vineeth Johns Toms', NULL, NULL, NULL, NULL, NULL, NULL, '1989-10-03 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1215, NULL, NULL, NULL, NULL, '20187', 'VINOD CHANDRAN P', NULL, NULL, NULL, NULL, NULL, NULL, '1968-07-22 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1216, NULL, NULL, NULL, NULL, '8604', 'VINOD GUPTA', NULL, NULL, NULL, NULL, NULL, NULL, '1964-08-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1217, NULL, NULL, NULL, NULL, '20814', 'VINOD KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1974-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1218, NULL, NULL, NULL, NULL, '20968', 'VINOD KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1970-12-29 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1219, NULL, NULL, NULL, NULL, '21103', 'VINOD KUMAR DWIVEDI', NULL, NULL, NULL, NULL, NULL, NULL, '1973-03-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1220, NULL, NULL, NULL, NULL, '21095', 'VINOD KUMAR SHARMA', NULL, NULL, NULL, NULL, NULL, NULL, '1973-06-17 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1221, NULL, NULL, NULL, NULL, '20981', 'VINOD SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1975-04-19 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1222, NULL, NULL, NULL, NULL, '20137', 'VIPUL AGARWAL', NULL, NULL, NULL, NULL, NULL, NULL, '1966-12-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1223, NULL, NULL, NULL, NULL, '20244', 'VIRENDER PRASAD', NULL, NULL, NULL, NULL, NULL, NULL, '1966-07-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1224, NULL, NULL, NULL, NULL, '20158', 'VIRENDRA KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1968-07-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1225, NULL, NULL, NULL, NULL, '21289', 'VISHAL DHEER', NULL, NULL, NULL, NULL, NULL, NULL, '1986-03-05 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1226, NULL, NULL, NULL, NULL, '112345', 'VISHAL KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1968-01-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1227, NULL, NULL, NULL, NULL, '21497', 'Vishal sah', NULL, NULL, NULL, NULL, NULL, NULL, '1994-05-03 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1228, NULL, NULL, NULL, NULL, '21328', 'VISHAL SRIVASTAVA', NULL, NULL, NULL, NULL, NULL, NULL, '1987-06-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1229, NULL, NULL, NULL, NULL, '20838', 'VISHAL VIKRAM', NULL, NULL, NULL, NULL, NULL, NULL, '1969-09-11 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1230, NULL, NULL, NULL, NULL, '21495', 'Vishnu Priya Velpula', NULL, NULL, NULL, NULL, NULL, NULL, '1995-05-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1231, NULL, NULL, NULL, NULL, '20435', 'VISHWA MOHAN', NULL, NULL, NULL, NULL, NULL, NULL, '1970-07-07 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1232, NULL, NULL, NULL, NULL, '21402', 'VISLAVATH ARUNKUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1991-08-25 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1233, NULL, NULL, NULL, NULL, '21448', 'VISWA CHAITANYA REDDY P', NULL, NULL, NULL, NULL, NULL, NULL, '1992-07-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1234, NULL, NULL, NULL, NULL, '21201', 'VIVEK ASTHANA', NULL, NULL, NULL, NULL, NULL, NULL, '1972-06-23 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1235, NULL, NULL, NULL, NULL, '20779', 'VIVEK DUA', NULL, NULL, NULL, NULL, NULL, NULL, '1973-10-18 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1236, NULL, NULL, NULL, NULL, '20771', 'VIVEK KHARE', NULL, NULL, NULL, NULL, NULL, NULL, '1972-12-09 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1237, NULL, NULL, NULL, NULL, '60019', 'Vivek Krishna Verma', NULL, NULL, NULL, NULL, NULL, NULL, '1984-07-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1238, NULL, NULL, NULL, NULL, '20606', 'VIVEK KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1971-06-15 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1239, NULL, NULL, NULL, NULL, '20491', 'VIVEK KUMAR JAIN', NULL, NULL, NULL, NULL, NULL, NULL, '1969-09-12 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1240, NULL, NULL, NULL, NULL, '21198', 'VIVEK KUMAR MISHRA', NULL, NULL, NULL, NULL, NULL, NULL, '1978-03-24 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1241, NULL, NULL, NULL, NULL, '20096', 'VIVEK NARAYAN', NULL, NULL, NULL, NULL, NULL, NULL, '1965-01-29 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1242, NULL, NULL, NULL, NULL, '20583', 'VIVEK SRIVASTAVA', NULL, NULL, NULL, NULL, NULL, NULL, '1967-09-03 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1243, NULL, NULL, NULL, NULL, '21146', 'VIVEK VISHVAKARMA', NULL, NULL, NULL, NULL, NULL, NULL, '1976-02-07 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1244, NULL, NULL, NULL, NULL, '60030', 'VIVEKANAND KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1984-11-14 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1245, NULL, NULL, NULL, NULL, '20151', 'VIZO K D', NULL, NULL, NULL, NULL, NULL, NULL, '1968-02-04 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1246, NULL, NULL, NULL, NULL, '20501', 'Y RAVINDRA NATH', NULL, NULL, NULL, NULL, NULL, NULL, '1968-08-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1247, NULL, NULL, NULL, NULL, '20841', 'Y SREENIVASA RAO', NULL, NULL, NULL, NULL, NULL, NULL, '1970-08-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1248, NULL, NULL, NULL, NULL, '21396', 'YADAV MANISHKUMAR \nRAVINDERKUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1990-10-31 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1249, NULL, NULL, NULL, NULL, '60086', 'Yadav Neha Jaiprakash', NULL, NULL, NULL, NULL, NULL, NULL, '1990-10-08 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1250, NULL, NULL, NULL, NULL, '20378', 'YASH RAMRAO PANHEKAR', NULL, NULL, NULL, NULL, NULL, NULL, '1970-03-29 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1251, NULL, NULL, NULL, NULL, '21285', 'YASHASVI MUND', NULL, NULL, NULL, NULL, NULL, NULL, '1986-06-23 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1252, NULL, NULL, NULL, NULL, '20903', 'YASHENDRA KUMAR BANSOD', NULL, NULL, NULL, NULL, NULL, NULL, '1972-06-24 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1253, NULL, NULL, NULL, NULL, '20871', 'YASHWANT KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1971-11-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1254, NULL, NULL, NULL, NULL, '20603', 'YATINDER AGROHI', NULL, NULL, NULL, NULL, NULL, NULL, '1972-01-23 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1255, NULL, NULL, NULL, NULL, '20270', 'YATISH KATHERIA', NULL, NULL, NULL, NULL, NULL, NULL, '1967-05-10 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1256, NULL, NULL, NULL, NULL, '20047', 'YOGENDRA KR SINGH', NULL, NULL, NULL, NULL, NULL, NULL, '1965-07-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1257, NULL, NULL, NULL, NULL, '60006', 'Yogendra Singh Baghel', NULL, NULL, NULL, NULL, NULL, NULL, '1988-09-13 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1258, NULL, NULL, NULL, NULL, '21028', 'YOGENDRA SINGH SISODIA', NULL, NULL, NULL, NULL, NULL, NULL, '1976-09-30 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1259, NULL, NULL, NULL, NULL, '60021', 'Yogesh Goyal', NULL, NULL, NULL, NULL, NULL, NULL, '1984-09-16 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1260, NULL, NULL, NULL, NULL, '20816', 'YOGESH KUMAR', NULL, NULL, NULL, NULL, NULL, NULL, '1969-05-02 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1261, NULL, NULL, NULL, NULL, '21110', 'YOGESH KUMAR BHASHKER', NULL, NULL, NULL, NULL, NULL, NULL, '1971-12-21 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1262, NULL, NULL, NULL, NULL, '20505', 'YOGESH KUMAR MAURYA', NULL, NULL, NULL, NULL, NULL, NULL, '1967-07-17 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1263, NULL, NULL, NULL, NULL, '21033', 'YOGESH SHIRIVASTAVA', NULL, NULL, NULL, NULL, NULL, NULL, '1974-08-27 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1264, NULL, NULL, NULL, NULL, '60010', 'Ziaur Rahman', NULL, NULL, NULL, NULL, NULL, NULL, '1988-02-18 00:00:00', NULL, NULL, NULL, NULL, NULL, 'ITS', NULL, NULL, NULL, NULL, NULL, '2025-09-17 02:36:37', '2025-09-17 02:36:37'),
(1265, 4, 'yes', '2020', '2020', '805900', 'naman', 'delhi', 'Sector 21 (Chandigarh) Chandigarh', '2025-09-03', '08059000064', '8059000064', 'namanhooda86@gmail.com', '1998-10-24 00:00:00', 'jhajjar', 'Chandigarh', 'b.tech', 'english hindi', '2025-09-10', 'a', 'two', '08059000064', 'namanhooda86@gmail.com', 'hindi', NULL, NULL, '2025-09-29 05:19:48'),
(1266, 1, '', '2020', '2020', '805902', 'naman admin', 'delhi', 'Sector 21 (Chandigarh) Chandigarh', '2025-09-03', '08059000064', '8059000064', 'namanhooda86@gmail.com', '1998-10-24 00:00:00', 'jhajjar', 'Chandigarh', 'b.tech', 'english hindi', '2025-09-10', 'a', 'two', '7788778877', 'namanhooda861@gmail.com', 'hindi', NULL, NULL, '2025-09-29 05:19:48'),
(1267, 5, '', '2020', '2020', '805901', 'naman nodal', 'delhi', 'Sector 21 (Chandigarh) Chandigarh', '2025-09-03', '08059000064', '8051200064', 'namanhoodaaa86@gmail.com', '1998-10-24 00:00:00', 'jhajjar', 'Chandigarh', 'b.tech', 'english hindi', '2025-09-10', 'a', 'two', '7788778877', 'namanhooda861@gmail.com', 'hindi', NULL, NULL, '2025-09-29 05:19:48');

-- --------------------------------------------------------

--
-- Table structure for table `promotional_videos`
--

CREATE TABLE `promotional_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promotional_videos`
--

INSERT INTO `promotional_videos` (`id`, `category`, `title`, `description`, `path`, `url`, `thumbnail`, `created_at`, `updated_at`) VALUES
(1, 'test', 'Support India for Re-election to ITU Council 2027-2030', 'Description for Support India for Re-election to ITU Council 2027-2030 add yours', NULL, 'https://www.youtube.com/watch?v=YM3Cih_O9Fk', 'thumbnails/ywjlZk8I4RqBezg7x4dYPI8GeaWTckDtaGvDXegu.png', '2025-09-29 04:34:35', '2025-09-29 04:35:08'),
(2, 'test', 'title', 'test desc', NULL, 'https://www.youtube.com/watch?v=YM3Cih_O9Fk', 'thumbnails/kS5k6xOZfkcy2M6ehfCeurnD31K2iTZyTTgC5LlE.png', '2025-09-29 05:05:56', '2025-09-29 05:05:56');

-- --------------------------------------------------------

--
-- Table structure for table `qrp_forms`
--

CREATE TABLE `qrp_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meeting_id` varchar(255) DEFAULT NULL,
  `agency` varchar(255) DEFAULT NULL,
  `itu_sector` varchar(255) DEFAULT NULL,
  `sector_group` varchar(255) DEFAULT NULL,
  `agency_other` varchar(255) DEFAULT NULL,
  `itu_type` varchar(255) DEFAULT NULL,
  `quarter` varchar(255) NOT NULL,
  `meeting_name` varchar(255) DEFAULT NULL,
  `meeting_from` date DEFAULT NULL,
  `meeting_to` date DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `invitation_letter` varchar(255) DEFAULT NULL,
  `similar_meeting` varchar(255) NOT NULL DEFAULT 'No',
  `previous_report` varchar(255) DEFAULT NULL,
  `mode` varchar(255) DEFAULT NULL,
  `staff_no` varchar(255) DEFAULT NULL,
  `officer_name` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `division` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `justification` text DEFAULT NULL,
  `justification_file` varchar(255) DEFAULT NULL,
  `expected_outcome` text DEFAULT NULL,
  `expected_file` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `nodal_status` varchar(255) DEFAULT NULL,
  `adminidtrative_appr` varchar(255) DEFAULT NULL,
  `financial_appr` varchar(255) DEFAULT NULL,
  `poltical_clear` varchar(255) DEFAULT NULL,
  `scos_appr` varchar(255) DEFAULT NULL,
  `vigl_clear` varchar(255) DEFAULT NULL,
  `pmo_appr` varchar(255) DEFAULT NULL,
  `fcra_clear` varchar(255) DEFAULT NULL,
  `sanction_vetting` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qrp_forms`
--

INSERT INTO `qrp_forms` (`id`, `meeting_id`, `agency`, `itu_sector`, `sector_group`, `agency_other`, `itu_type`, `quarter`, `meeting_name`, `meeting_from`, `meeting_to`, `country`, `city`, `invitation_letter`, `similar_meeting`, `previous_report`, `mode`, `staff_no`, `officer_name`, `unit`, `division`, `designation`, `email`, `contact`, `justification`, `justification_file`, `expected_outcome`, `expected_file`, `status`, `nodal_status`, `adminidtrative_appr`, `financial_appr`, `poltical_clear`, `scos_appr`, `vigl_clear`, `pmo_appr`, `fcra_clear`, `sanction_vetting`, `created_by`, `created_at`, `updated_at`) VALUES
(16, 'J65', '1', '1', '1', NULL, NULL, 'Quater 4 (Oct-Dec)', 'tttafadfds', '2025-10-03', '2025-10-16', '[{\"country\":\"3\",\"city\":\"Chandigarh\"}]', NULL, NULL, 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', 'Submitted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-10-01 00:05:12', '2025-10-01 04:28:23'),
(17, 'X57', '1', '1', '1', NULL, NULL, 'Quater 4 (Oct-Dec)', 'aaaaaaa', '2025-10-22', '2025-10-30', '[{\"country\":\"3\",\"city\":\"aaaa\"}]', NULL, NULL, 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', 'Submitted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', '2025-10-01 04:41:14', '2025-10-14 01:06:43'),
(18, 'H21', '1', '1', '1', NULL, NULL, 'Quater 4 (Oct-Dec)', 'test meeting naman', '2025-10-10', '2025-10-31', '[{\"country\":\"1\",\"city\":\"Chandigarh\",\"meeting_from\":\"2025-10-09\",\"meeting_to\":\"2025-10-11\"},{\"country\":\"5\",\"city\":\"Beri\",\"meeting_from\":\"2025-10-10\",\"meeting_to\":\"2025-10-11\"}]', NULL, NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', 'Submitted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', '2025-10-08 03:16:26', '2025-10-08 03:42:34'),
(19, 'B50', '1', '1', '1', NULL, NULL, 'Quater 4 (Oct-Dec)', '122 meet', '2025-10-09', '2025-10-31', '[{\"country\":\"44\",\"city\":\"Beri\",\"meeting_from\":null,\"meeting_to\":null}]', NULL, NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jfdngjinsiughd', NULL, NULL, NULL, 'Approved', 'Submitted', 'Applied', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', '2025-10-08 03:21:06', '2025-10-08 03:57:24'),
(20, 'G60', '1', '1', '1', NULL, NULL, 'Quater 4 (Oct-Dec)', '111 met', '2025-10-11', '2025-10-22', '[{\"country\":\"1\",\"city\":\"Beri\",\"meeting_from\":\"2025-10-10\",\"meeting_to\":\"2025-10-17\"}]', NULL, NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'njfkdnsgjndsijfngs', NULL, NULL, NULL, 'Approved', 'Submitted', 'Approved', 'Applied', 'Rejected', 'Approved', NULL, NULL, NULL, NULL, '5', '2025-10-08 03:28:10', '2025-10-14 01:08:05');

-- --------------------------------------------------------

--
-- Table structure for table `qrp_officers`
--

CREATE TABLE `qrp_officers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `qrp_id` bigint(20) UNSIGNED NOT NULL,
  `profile_id` bigint(20) UNSIGNED DEFAULT NULL,
  `staff_no` varchar(255) DEFAULT NULL,
  `officer_name` varchar(255) NOT NULL,
  `unit` bigint(20) UNSIGNED DEFAULT NULL,
  `unit_office` bigint(20) UNSIGNED DEFAULT NULL,
  `division` bigint(20) UNSIGNED DEFAULT NULL,
  `designation` bigint(20) UNSIGNED DEFAULT NULL,
  `mode` enum('Online','Offline') NOT NULL DEFAULT 'Online',
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `meeting_from` date DEFAULT NULL,
  `meeting_to` date DEFAULT NULL,
  `country` text DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `justification` varchar(255) DEFAULT NULL,
  `justification_file` varchar(255) DEFAULT NULL,
  `expected_outcome` varchar(255) DEFAULT NULL,
  `expected_file` varchar(255) DEFAULT NULL,
  `expenditure_directorate` varchar(255) DEFAULT NULL,
  `expenditure_wpc` varchar(255) DEFAULT NULL,
  `expenditure_secretariat` varchar(255) DEFAULT NULL,
  `expenditure_tec` varchar(255) DEFAULT NULL,
  `expenditure_ncat` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qrp_officers`
--

INSERT INTO `qrp_officers` (`id`, `qrp_id`, `profile_id`, `staff_no`, `officer_name`, `unit`, `unit_office`, `division`, `designation`, `mode`, `email`, `contact`, `meeting_from`, `meeting_to`, `country`, `city`, `justification`, `justification_file`, `expected_outcome`, `expected_file`, `expenditure_directorate`, `expenditure_wpc`, `expenditure_secretariat`, `expenditure_tec`, `expenditure_ncat`, `created_at`, `updated_at`) VALUES
(1, 1, 1265, '805900', 'naman', 1, 1, 1, 1, 'Offline', 'namanhooda86@gmail.com', '9898989898', '2025-09-24', '2025-09-24', '[{\"country\":\"43\",\"city\":\"city\"}]', NULL, 'aa', NULL, 'adf', NULL, NULL, NULL, NULL, NULL, NULL, '2025-09-23 04:24:31', '2025-09-23 04:24:31'),
(2, 1, 1, '21348', 'MANISH KUMAR SINGH', 1, 1, 1, 1, 'Online', 'test123@gmail.com', '3737373737', '2025-09-24', '2025-09-27', '[{\"country\":\"1\",\"city\":\"cccc\"}]', NULL, 'bbb', NULL, 'bdf', NULL, NULL, NULL, NULL, NULL, NULL, '2025-09-23 04:24:31', '2025-09-23 04:24:31'),
(3, 2, 1265, '805900', 'naman', 1, 1, 1, 1, 'Online', 'namanhooda86@gmail.com', '9898989898', '2025-09-24', '2025-09-30', '[{\"country\":\"2\",\"city\":\"Chandigarh\"}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-09-23 05:23:14', '2025-09-23 05:23:14'),
(4, 2, 888, '8656', 'RAO K.V.N.', 1, 1, 1, 1, 'Offline', 'test123@gmail.com', '2343234567', '2025-09-24', '2025-09-30', '[{\"country\":\"44\",\"city\":\"JHAJJAR\"}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-09-23 05:23:14', '2025-09-23 05:23:14'),
(5, 3, 450, '20314', 'KIRAN DUBEY', 2, NULL, NULL, NULL, 'Online', 'namanhooda86@gmail.com', '9898989898', '2025-09-25', '2025-09-30', '[{\"country\":\"3\",\"city\":\"Beri\"}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-09-24 22:49:57', '2025-09-24 22:49:57'),
(6, 9, 450, '20314', 'KIRAN DUBEY', 1, NULL, NULL, NULL, 'Online', 'namanhooda86@gmail.com', '9898989898', '2025-09-25', '2025-09-30', '[{\"country\":\"3\",\"city\":\"Beri\"}]', NULL, 'dssd', NULL, 'gsdg', NULL, NULL, NULL, NULL, NULL, NULL, '2025-09-24 22:53:01', '2025-09-24 22:53:01'),
(7, 12, 297, '20436', 'DILIP KUMAR', 1, NULL, NULL, NULL, 'Offline', 'namanhooda86@gmail.com', '9898989898', '2025-09-27', '2025-09-30', '[{\"country\":\"1\",\"city\":\"aaaa\"},{\"country\":\"12\",\"city\":\"dafg\"},{\"country\":\"16\",\"city\":\"afg\"}]', NULL, 'dfgs', NULL, 'gsg', NULL, NULL, NULL, NULL, NULL, NULL, '2025-09-24 23:01:22', '2025-09-24 23:01:22'),
(8, 13, 297, '20436', 'DILIP KUMAR', 1, NULL, NULL, NULL, 'Offline', 'namanhooda86@gmail.com', '9898989898', '2025-09-27', '2025-09-30', '[{\"country\":\"44\",\"city\":\"Chandigarh\"},{\"country\":\"12\",\"city\":\"dafg\"},{\"country\":\"16\",\"city\":\"afg\"}]', NULL, 'dfgs', NULL, 'gsg', NULL, NULL, NULL, NULL, NULL, NULL, '2025-09-24 23:02:08', '2025-09-24 23:02:08'),
(9, 13, 251, '20578', 'D R RAJESHWARI', 1, 1, 1, 1, 'Online', 'namanhooda86@gmail.com', '3112121212', '2025-09-26', '2025-09-27', '[{\"country\":\"1\",\"city\":\"Beri\"},{\"country\":\"3\",\"city\":\"Beri\"},{\"country\":\"5\",\"city\":\"Beri\"}]', NULL, 'dfgs', NULL, 'gsg', NULL, NULL, NULL, NULL, NULL, NULL, '2025-09-24 23:02:08', '2025-09-24 23:02:08'),
(10, 14, 549, '21234', 'MANOJ KUMAR PANDEY', 1, 1, 1, 1, 'Offline', 'namanhooda86@gmail.com', '9898989898', '2025-09-30', '2025-09-30', '[{\"country\":\"1\",\"city\":\"Chandigarh\"}]', NULL, 'sdgs', NULL, 'gsefaf', NULL, NULL, NULL, NULL, NULL, NULL, '2025-09-28 14:05:37', '2025-09-28 14:05:37'),
(11, 15, 125, '20489', 'ARUN MICHAEL', 1, 1, 1, 1, 'Online', 'namanhooda86@gmail.com', '9898989898', '2025-10-25', '2025-11-28', '[{\"country\":\"1\",\"city\":\"delhi\"}]', NULL, 'aaa', NULL, 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, '2025-09-29 05:11:29', '2025-09-29 05:11:29'),
(12, 16, 1095, '21356', 'SUNEET KUMAR TOMAR', 1, NULL, NULL, NULL, 'Online', 'namanhooda86@gmail.com', '9898989898', '2025-10-15', '2025-10-21', '[{\"country\":\"1\",\"city\":\"Chandigarh\"}]', NULL, 'dgg', NULL, 'dshrh', NULL, NULL, NULL, NULL, NULL, NULL, '2025-10-01 00:05:12', '2025-10-01 00:05:12'),
(13, 17, 1265, '805900', 'naman', 1, 1, 1, 1, 'Online', 'namanhooda86@gmail.com', '9898989898', '2025-10-03', '2025-10-11', '[{\"country\":\"1\",\"city\":\"Chandigarh\"}]', NULL, 'aaa', NULL, 'aaaa', NULL, NULL, NULL, NULL, NULL, NULL, '2025-10-01 04:41:14', '2025-10-01 04:41:14'),
(14, 18, 1265, '805900', 'naman', 1, 1, 1, 1, 'Online', 'namanhooda86@gmail.com', '9898989898', '2025-10-09', '2025-10-17', '[{\"country\":\"3\",\"city\":\"Beri\"}]', NULL, 'aa', NULL, 'fadfa', NULL, NULL, NULL, NULL, NULL, NULL, '2025-10-08 03:16:26', '2025-10-08 03:16:26'),
(15, 19, 1265, '805900', 'naman', 1, 1, 1, 1, 'Online', 'namanhooda86@gmail.com', '9898989898', '2025-10-10', '2025-10-18', '[{\"country\":\"4\",\"city\":\"Beri\"},{\"country\":\"5\",\"city\":\"fdgsdfg\"}]', NULL, 'sb', NULL, 'bcvb', NULL, NULL, 'njsnn test data', NULL, NULL, NULL, '2025-10-08 03:21:06', '2025-10-14 01:10:21'),
(16, 19, 1267, '805901', 'naman nodal', 1, 1, 1, 1, 'Offline', 'namanhooda86@gmail.com', '3737373737', '2025-10-10', '2025-10-30', '[{\"country\":\"5\",\"city\":\"Beri\"}]', NULL, 'dasf', NULL, 'dsaf', NULL, NULL, NULL, NULL, NULL, NULL, '2025-10-08 03:21:06', '2025-10-08 03:21:06'),
(17, 20, 1265, '805900', 'naman', 1, 1, 1, 1, 'Online', 'namanhooda86@gmail.com', '9898989898', '2025-10-24', '2025-10-29', '[{\"country\":\"1\",\"city\":\"Beri\"}]', NULL, 'fz', NULL, 'bcvzxcb', NULL, 'test data', 'anjnjnf', NULL, NULL, NULL, '2025-10-08 03:28:10', '2025-10-14 01:10:09');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2025-08-02 10:17:53', '2025-08-02 10:17:53'),
(2, 'Officer', 'web', '2025-08-02 10:17:58', '2025-09-04 01:17:12'),
(3, 'nodal', 'web', '2025-09-05 02:24:46', '2025-09-05 05:13:58'),
(4, 'Higher Authority', 'web', '2025-09-05 05:11:10', '2025-09-05 05:11:10');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(65, 2),
(66, 2),
(67, 2),
(68, 2),
(69, 2),
(70, 2),
(71, 2),
(72, 2),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(85, 4),
(86, 1),
(86, 4),
(87, 1),
(87, 4),
(88, 1),
(88, 4),
(89, 1),
(89, 3),
(89, 4),
(90, 1),
(90, 3),
(90, 4),
(91, 1),
(91, 3),
(91, 4),
(92, 1),
(92, 3),
(92, 4),
(93, 1),
(93, 3),
(93, 4),
(94, 1),
(94, 3),
(94, 4),
(95, 1),
(95, 3),
(95, 4),
(96, 1),
(96, 3),
(96, 4),
(97, 1),
(97, 3),
(97, 4),
(98, 1),
(98, 3),
(98, 4),
(99, 1),
(99, 3),
(99, 4),
(100, 1),
(100, 3),
(100, 4),
(101, 1),
(101, 3),
(101, 4),
(102, 1),
(102, 3),
(102, 4),
(103, 1),
(103, 3),
(103, 4),
(104, 1),
(104, 3),
(104, 4),
(105, 1),
(106, 1),
(107, 1),
(108, 1),
(109, 1),
(110, 1),
(111, 1),
(112, 1),
(113, 1),
(113, 2),
(113, 3),
(113, 4),
(114, 1),
(114, 2),
(114, 3),
(114, 4),
(115, 1),
(115, 2),
(115, 3),
(115, 4),
(116, 1),
(116, 2),
(116, 3),
(116, 4),
(117, 1),
(117, 4),
(118, 1),
(118, 4),
(119, 1),
(119, 4),
(120, 1),
(120, 4),
(121, 1),
(121, 4),
(122, 1),
(122, 4),
(123, 1),
(123, 4),
(124, 1),
(124, 4),
(125, 1),
(125, 4),
(126, 1),
(126, 4),
(127, 1),
(127, 4),
(128, 1),
(128, 4),
(129, 1),
(129, 4),
(130, 1),
(130, 4),
(131, 1),
(131, 4),
(132, 1),
(132, 4),
(133, 1),
(134, 1),
(135, 1),
(136, 1),
(137, 1),
(138, 1),
(139, 1),
(140, 1),
(141, 1),
(141, 4),
(142, 1),
(142, 4),
(143, 1),
(143, 4),
(144, 1),
(144, 4),
(145, 1),
(145, 4),
(146, 1),
(146, 4),
(147, 1),
(147, 4),
(148, 1),
(148, 4),
(149, 1),
(149, 4),
(150, 1),
(150, 4),
(151, 1),
(151, 4),
(152, 1),
(152, 4),
(153, 1),
(153, 4),
(154, 1),
(154, 4),
(155, 1),
(155, 4),
(156, 1),
(156, 4),
(157, 1),
(157, 4),
(158, 1),
(158, 4),
(159, 1),
(159, 4),
(160, 1),
(160, 4),
(161, 3),
(161, 4),
(162, 3),
(162, 4),
(163, 3),
(163, 4),
(164, 3),
(164, 4);

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
('6GmCbds4kMtOheiudqsLurAgbe31ipUuCuEi5bLq', 4, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoicDM0TFk3ZHdKaDZDbnRBbEQ1RVF5VU1lNDJCSzdneUlwcDFoTDFSciI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQxOiJodHRwOi8vMTI3LjAuMC4xOjgwMDIvdG91ci1yZXBvcnRzL2NyZWF0ZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjQ7czoxMToiYWN0aXZlX3JvbGUiO3M6NzoiT2ZmaWNlciI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTIkY3JrcWphVGJvVFFhak1LWUV5MFNmLjNoZXpHTU5jUHR6c0daV3k2S1R1eTJwc0J0ZXpMakMiO30=', 1760598535),
('K4BnHlUpbV8cZdI3Ts8E8DnmEkepGpWvAuZ6isGF', 1, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiTVFWcTYwZVRCeWNCRVpiVlBMelZ4ZEZyd0I0QTVxYUxCd1l4WUJYdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMi9wZXJzb25hbC1wZXJmb3JtYS8xL2Rvd25sb2FkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjExOiJhY3RpdmVfcm9sZSI7czo1OiJhZG1pbiI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTIkdTVVM0xRWHpSU2JkM2VRMXBKd1p2ZVpXdzZXOHRGZEVKVlBicXpKWGtmRHhsUFl4THpiRC4iO30=', 1760424127),
('O5NaBHfRKuMIhyOlXS3dQ1tNFVu9pPkXESqS803e', 5, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiQ2daTnI3eTJkcEJCUnZLdmJZeFhob2lYSllLbmhieDk0OTBYeHBnZyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI4OiJodHRwOi8vMTI3LjAuMC4xOjgwMDIvcXJwLzIwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NTtzOjExOiJhY3RpdmVfcm9sZSI7czo1OiJub2RhbCI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTIkUC9lNTVNcElzaDczZzVSN1IySnhadW9kUm5iNXpOeGJnRnREQlA3SGlXU0xJUFljV3BJRWUiO30=', 1760423662),
('TKbn9EjOAJebTW1706xqTLKe19fzOUAAgFVsTYI3', 4, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiQjVnRDI0UzFTdkNVS25PcVdsRW1FcTkwdndBOTIwaHRtUkdqaEt4RyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM0OiJodHRwOi8vMTI3LjAuMC4xOjgwMDIvdG91ci1yZXBvcnRzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NDtzOjExOiJhY3RpdmVfcm9sZSI7czo3OiJPZmZpY2VyIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMiRjcmtxamFUYm9UUWFqTUtZRXkwU2YuM2hlekdNTmNQdHpzR1pXeTZLVHV5MnBzQnRlekxqQyI7fQ==', 1760522333),
('uHATSRcuE0z0ULZVVGSQB7BjxqVvspNfCkg198KD', 1, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiREk3b0hpd2RXNkFuYllibWJ4V3l1dE9kV2syeExXblZFY1pKbWpGciI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMyOiJodHRwOi8vMTI3LjAuMC4xOjgwMDIvY29udGFjdC11cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxMToiYWN0aXZlX3JvbGUiO3M6NToiYWRtaW4iO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEyJHU1VTNMUVh6UlNiZDNlUTFwSndadmVaV3c2Vzh0RmRFSlZQYnF6SlhrZkR4bFBZeEx6YkQuIjt9', 1760607011);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `image`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'sliders/HFaVWRZWFfANnybeZ1gV8uugm9ywYLb2E4UXp53A.jpg', 'http://127.0.0.1:8001/#', 1, '2025-09-30 02:16:08', '2025-09-30 02:19:57');

-- --------------------------------------------------------

--
-- Table structure for table `tour_reports`
--

CREATE TABLE `tour_reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tour_id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `staff_number` varchar(255) DEFAULT NULL,
  `meeting_name` varchar(255) DEFAULT NULL,
  `purpose` varchar(255) DEFAULT NULL,
  `service` varchar(255) DEFAULT NULL,
  `name_designation` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `equivalent_rank` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `key_contributions` text DEFAULT NULL,
  `follow_up_action_points` text DEFAULT NULL,
  `tour_report_pdf` varchar(255) DEFAULT NULL,
  `presentation` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tour_reports`
--

INSERT INTO `tour_reports` (`id`, `tour_id`, `user_id`, `staff_number`, `meeting_name`, `purpose`, `service`, `name_designation`, `grade`, `level`, `mobile_no`, `email`, `equivalent_rank`, `country`, `city`, `from_date`, `to_date`, `key_contributions`, `follow_up_action_points`, `tour_report_pdf`, `presentation`, `created_at`, `updated_at`) VALUES
(1, '19', 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'officer@irwing.com', NULL, NULL, NULL, NULL, NULL, 'cxbgdfxhbg', 'hgfhsfh', NULL, 'hgsfhs', '2025-10-16 00:08:11', '2025-10-16 00:08:11');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Headquarters', NULL, NULL, NULL),
(2, 'Attached Office', NULL, NULL, NULL),
(3, 'Subordinate Office', NULL, NULL, NULL),
(4, 'Wing / Specialized Unit', NULL, NULL, NULL),
(5, 'Autonomous Body', NULL, NULL, NULL),
(6, 'Training Institute', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `unit_offices`
--

CREATE TABLE `unit_offices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unit_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unit_offices`
--

INSERT INTO `unit_offices` (`id`, `unit_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Sanchar Bhawan, New Delhi (ministerial HQ and DoT divisions)', NULL, NULL),
(2, 2, 'Telecommunication Engineering Centre (TEC) — standards/specifications; HQ New Delhi, with regional centres', NULL, NULL),
(3, 2, 'Universal Service Obligation Fund (USOF) — rural/remote connectivity', NULL, NULL),
(4, 2, 'Controller General of Communication Accounts (CGCA) — oversees CCA system (finance, licensing revenue, pensions)', NULL, NULL),
(5, 3, 'Wireless Monitoring Organisation (WMO) — spectrum monitoring network (ISMES, IMSs, WMSs) under WPC Wing', NULL, NULL),
(6, 3, 'Wireless Monitoring Organisation (WMO) — spectrum monitoring network (ISMES, IMSs, WMSs) under WPC Wing', NULL, NULL),
(7, 4, 'Wireless Planning & Coordination (WPC) Wing — national radio regulatory authority (licensing, spectrum, SACFA)', NULL, NULL),
(8, 5, 'C-DOT (Centre for Development of Telematics) — R&D; autonomous under DoT', NULL, NULL),
(9, 6, 'NTIPRIT / National Communications Academy – Technology (NCA-T) — Ghaziabad (policy, innovation & training)', NULL, NULL),
(10, 6, 'NICF (National Institute of Communication Finance) — finance training (listed under Training on DoT site)', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
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

INSERT INTO `users` (`id`, `staff_id`, `name`, `profile`, `phone`, `status`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Admin User', 'admin', '+1234567890', '1', 'admin@irwing.com', '2025-08-02 10:17:54', '$2y$12$u5U3LQXzRSbd3eQ1pJwZveZWw6W8tFdEJVPbqzJXkfDxlPYxLzbD.', NULL, NULL, NULL, NULL, NULL, NULL, '2025-08-02 10:17:54', '2025-09-05 02:49:26'),
(2, NULL, 'Naman Hooda', NULL, '8059000064', '0', 'namanhooda86@gmail.com', NULL, '$2y$12$dByUANbwavcT1LEW5LjOkOcRYKtnKARyl3eqaujsvCwzf6TXhK5Yy', NULL, NULL, NULL, NULL, NULL, NULL, '2025-09-05 02:20:03', '2025-09-05 02:25:31'),
(3, NULL, 'rrr', NULL, '1123323432', NULL, 'rrr@gmail.com', NULL, '$2y$12$8/3f8W74G01zqLYtbKHVMujV2/Gohte9uMivU4SqTzCZAn0pIrjm6', NULL, NULL, NULL, NULL, NULL, NULL, '2025-09-05 02:22:11', '2025-09-05 02:22:11'),
(4, NULL, 'officer', NULL, '9898989898', NULL, 'officer@irwing.com', NULL, '$2y$12$crkqjaTboTQajMKYEy0Sf.3hezGMNcPtzsGZWy6KTuy2psBtezLjC', NULL, NULL, NULL, NULL, NULL, NULL, '2025-09-10 22:13:26', '2025-09-10 22:13:26'),
(5, NULL, 'nodal', NULL, '9797979797', NULL, 'nodal@irwing.com', NULL, '$2y$12$P/e55MpIsh73g5R7R2JxZuodRnb5zNxbgFtDBP7HiWSLIPYcWpIEe', NULL, NULL, NULL, NULL, NULL, NULL, '2025-09-10 22:14:01', '2025-09-10 22:14:01'),
(6, NULL, 'Higher Authority', NULL, '9696969696', NULL, 'authority@irwing.com', NULL, '$2y$12$YQQ6W4ChJluwYSeuD9GwGOwRnXGx8h9G8sjzJ3jSbXJygYdNvIG.G', NULL, NULL, NULL, NULL, NULL, NULL, '2025-09-10 22:14:32', '2025-09-10 22:14:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agencies`
--
ALTER TABLE `agencies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `agencies_name_unique` (`name`);

--
-- Indexes for table `brochures`
--
ALTER TABLE `brochures`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `designations_division_id_foreign` (`division_id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `divisions_unit_office_id_foreign` (`unit_office_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `international_forms`
--
ALTER TABLE `international_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itu_sectors`
--
ALTER TABLE `itu_sectors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `itu_sectors_agency_id_foreign` (`agency_id`);

--
-- Indexes for table `itu_sector_groups`
--
ALTER TABLE `itu_sector_groups`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `meeting_calendars`
--
ALTER TABLE `meeting_calendars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `minister_messages`
--
ALTER TABLE `minister_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orms`
--
ALTER TABLE `orms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orps`
--
ALTER TABLE `orps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `performance_stats`
--
ALTER TABLE `performance_stats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `performance_stats_service_id_foreign` (`service_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `personal_performas`
--
ALTER TABLE `personal_performas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `press_releases`
--
ALTER TABLE `press_releases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotional_videos`
--
ALTER TABLE `promotional_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qrp_forms`
--
ALTER TABLE `qrp_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qrp_officers`
--
ALTER TABLE `qrp_officers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_reports`
--
ALTER TABLE `tour_reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tour_reports_user_id_foreign` (`user_id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit_offices`
--
ALTER TABLE `unit_offices`
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
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `agencies`
--
ALTER TABLE `agencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `brochures`
--
ALTER TABLE `brochures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `international_forms`
--
ALTER TABLE `international_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `itu_sectors`
--
ALTER TABLE `itu_sectors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `itu_sector_groups`
--
ALTER TABLE `itu_sector_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meeting_calendars`
--
ALTER TABLE `meeting_calendars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `minister_messages`
--
ALTER TABLE `minister_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orms`
--
ALTER TABLE `orms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orps`
--
ALTER TABLE `orps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `performance_stats`
--
ALTER TABLE `performance_stats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_performas`
--
ALTER TABLE `personal_performas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `press_releases`
--
ALTER TABLE `press_releases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1268;

--
-- AUTO_INCREMENT for table `promotional_videos`
--
ALTER TABLE `promotional_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `qrp_forms`
--
ALTER TABLE `qrp_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `qrp_officers`
--
ALTER TABLE `qrp_officers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tour_reports`
--
ALTER TABLE `tour_reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `unit_offices`
--
ALTER TABLE `unit_offices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `designations`
--
ALTER TABLE `designations`
  ADD CONSTRAINT `designations_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `divisions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `divisions`
--
ALTER TABLE `divisions`
  ADD CONSTRAINT `divisions_unit_office_id_foreign` FOREIGN KEY (`unit_office_id`) REFERENCES `unit_offices` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `itu_sectors`
--
ALTER TABLE `itu_sectors`
  ADD CONSTRAINT `itu_sectors_agency_id_foreign` FOREIGN KEY (`agency_id`) REFERENCES `agencies` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `performance_stats`
--
ALTER TABLE `performance_stats`
  ADD CONSTRAINT `performance_stats_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tour_reports`
--
ALTER TABLE `tour_reports`
  ADD CONSTRAINT `tour_reports_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
