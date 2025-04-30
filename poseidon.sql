-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2025 at 03:29 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poseidon`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `code` varchar(255) NOT NULL,
  `account_type_id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `is_payment` tinyint(1) NOT NULL DEFAULT 0,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `account_translations`
--

CREATE TABLE `account_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `account_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `account_types`
--

CREATE TABLE `account_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_types`
--

INSERT INTO `account_types` (`id`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(2, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(3, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(4, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(5, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(6, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(7, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(8, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(9, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(10, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(11, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(12, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(13, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(14, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(15, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(16, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(17, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(18, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(19, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(20, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(21, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(22, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(23, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(24, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(25, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(26, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(27, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(28, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(29, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(30, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(31, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(32, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(33, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(34, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(35, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(36, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(37, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(38, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(39, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(40, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(41, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(42, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(43, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(44, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(45, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(46, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(47, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(48, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(49, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(50, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(51, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(52, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(53, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(54, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `account_type_translations`
--

CREATE TABLE `account_type_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `account_type_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_type_translations`
--

INSERT INTO `account_type_translations` (`id`, `account_type_id`, `locale`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', 'الأصول', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(2, 2, 'ar', 'الأصول غير المتداولة', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(3, 3, 'ar', 'عقارات وآلات ومعدات', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(4, 4, 'ar', 'أصول غير ملموسة', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(5, 5, 'ar', 'أصول غير متداولة أخرى', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(6, 6, 'ar', 'الأصول المتداولة', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(7, 7, 'ar', 'النقدية ومافي حكمها', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(8, 8, 'ar', 'عهد نقدية', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(9, 9, 'ar', 'حساب البنك', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(10, 10, 'ar', 'المدينون', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(11, 11, 'ar', 'مصروفات مقدمة', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(12, 12, 'ar', 'سلف موظفين', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(13, 13, 'ar', 'المخزون', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(14, 14, 'ar', 'مدينون وأرصدة مدينة أخرى', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(15, 15, 'ar', 'الإلتزامات', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(16, 16, 'ar', 'الإلتزامات المتداولة', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(17, 17, 'ar', 'الدائنون', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(18, 18, 'ar', 'مصاريف مستحقة', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(19, 19, 'ar', 'الرواتب والمبالغ المستحقة للموظفين', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(20, 20, 'ar', 'قروض قصيرة الأجل', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(21, 21, 'ar', 'ضريبة القيمة المضافة المستحقة', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(22, 22, 'ar', 'الضرائب المستحقة', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(23, 23, 'ar', 'الإيرادات المقدمة', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(24, 24, 'ar', 'إلتزامات متداولة أخرى', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(25, 25, 'ar', 'مجمع الاهلاك', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(26, 26, 'ar', 'أرصدة دائنة أخرى', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(27, 27, 'ar', 'الإلتزامات غير المتادولة', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(28, 28, 'ar', 'قروض طويلة الأجل', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(29, 29, 'ar', 'حقوق الملاك', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(30, 30, 'ar', 'رأس المال المصدر', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(31, 31, 'ar', 'رأس المال', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(32, 32, 'ar', 'رأس المال الإضافي المدفوع', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(33, 33, 'ar', 'حقوق الملاك الأخرى', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(34, 34, 'ar', 'حقوق ملكية أخرى', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(35, 35, 'ar', 'الإحتياطيات', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(36, 36, 'ar', 'أرباح/خسائر مبقاه', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(37, 37, 'ar', 'الأرباح المبقاه (أو الخسائر)', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(38, 38, 'ar', 'الإيرادات', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(39, 39, 'ar', 'المبيعات', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(40, 40, 'ar', 'الإيرادات الأخرى', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(41, 41, 'ar', 'المصروفات', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(42, 42, 'ar', 'التكلفة المباشرة', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(43, 43, 'ar', 'تكلفة المبيعات', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(44, 44, 'ar', 'تكاليف مباشرة أخرى', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(45, 45, 'ar', 'مصاريف تشغيلية', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(46, 46, 'ar', 'الرواتب', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(47, 47, 'ar', 'مصاريف عمومية وإدارية', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(48, 48, 'ar', 'مصاريف تسويقية', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(49, 49, 'ar', 'مكافآت وحوافز', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(50, 50, 'ar', 'مصاريف الإستهلاك', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(51, 51, 'ar', 'تكاليف غير تشغيلية', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(52, 52, 'ar', 'ضرائب', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(53, 53, 'ar', 'ترجمة عملات أجنبية', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(54, 54, 'ar', 'مصروف فوائد', '2025-03-03 11:00:28', '2025-03-03 11:00:28');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `setting_job_id` bigint(20) UNSIGNED DEFAULT 1,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `national_id` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `branch_id` bigint(20) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `employee_type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `employee_nationality_id` bigint(20) UNSIGNED DEFAULT NULL,
  `employee_religion_id` bigint(20) UNSIGNED DEFAULT NULL,
  `employee_marital_status_id` bigint(20) UNSIGNED DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `employee_identity_type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `identity_num` varchar(255) DEFAULT NULL,
  `employee_card_issuer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `release_date` date DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `salary` decimal(10,2) DEFAULT NULL,
  `commission_rate` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `code`, `user_name`, `setting_job_id`, `email`, `phone`, `national_id`, `password`, `image`, `branch_id`, `active`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `employee_type_id`, `employee_nationality_id`, `employee_religion_id`, `employee_marital_status_id`, `birthdate`, `mobile`, `employee_identity_type_id`, `identity_num`, `employee_card_issuer_id`, `release_date`, `expiry_date`, `salary`, `commission_rate`) VALUES
(1, 'Super Admin', 'SUP-19354542', 'superadmin', 1, NULL, '01001111111', NULL, '$2y$12$gipltywOdG7RhnSwIArRiOC7cPyKmndiLfI9FwiDw0BbwYR8Gvu.y', 'admins/default.png', NULL, 1, 'dFd3guVbem23hIr3Gt5fq1jfHHNclaZYAKtBZpWQa5SnmJjGrKSjdh13e3PU', '2025-03-27 08:03:45', '2025-03-27 08:03:45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Branch Manager', 'BRA-17833514', 'branchmanager', 1, NULL, '01001111112', NULL, '$2y$12$YXbp9VjTgqdr8ZbTQKq9Fu/4LJLuXfkiZ3rCo0/8TwWwmzoQo9K8.', 'admins/default.png', 1, 1, NULL, '2025-03-27 08:03:45', '2025-03-27 08:03:45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_password_reset_tokens`
--

CREATE TABLE `admin_password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_type` enum('private','group') NOT NULL DEFAULT 'private',
  `branch_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sailing_boat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `booking_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `total_hours` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `booking_type`, `branch_id`, `sailing_boat_id`, `type_id`, `booking_date`, `start_time`, `end_time`, `total_hours`, `created_at`, `updated_at`) VALUES
(1, 'group', 1, 1, 4, '2025-03-05', '15:00:00', '20:00:00', '5:00', '2025-03-04 18:58:55', '2025-03-04 18:58:55'),
(2, 'private', 2, 2, 1, '2025-03-06', '16:20:00', '22:25:00', '6:05', '2025-03-04 19:13:20', '2025-03-04 19:13:20'),
(3, 'group', 2, 2, 2, '2025-03-19', '01:00:00', '06:00:00', '5:00', '2025-03-05 18:04:36', '2025-03-05 18:04:36'),
(4, 'private', 2, 2, 4, '2025-03-11', '19:00:00', '22:00:00', '3:00', '2025-03-05 20:11:36', '2025-03-05 20:11:36'),
(5, 'group', 1, 1, 4, '2025-03-20', '15:00:00', '20:00:00', '5:00', '2025-03-10 19:47:28', '2025-03-10 19:47:28'),
(6, 'group', 1, 1, 3, '2025-03-17', '20:25:00', '22:15:00', '1:50', '2025-03-17 17:20:27', '2025-03-17 17:20:27'),
(7, 'private', 2, 2, 1, '2025-03-17', '16:05:00', '22:00:00', '5:55', '2025-03-17 17:25:00', '2025-03-17 17:25:00'),
(8, 'group', 1, 1, 4, '2025-03-25', '15:30:00', '20:30:00', '5:00', '2025-03-24 11:34:11', '2025-03-24 11:34:11'),
(9, 'group', 1, 1, 4, '2025-03-24', '15:00:00', '20:00:00', '5:00', '2025-03-24 20:21:11', '2025-03-24 20:21:11'),
(10, 'group', 1, 1, 4, '2025-03-26', '13:00:00', '18:00:00', '5:00', '2025-03-26 20:35:38', '2025-03-26 20:35:38'),
(11, 'group', 1, 3, 2, '2025-03-26', '11:30:00', '16:30:00', '5:00', '2025-03-26 20:42:47', '2025-03-26 20:42:47'),
(12, 'private', 1, 3, 5, '2025-03-27', '16:30:00', '20:30:00', '4:00', '2025-03-26 20:48:37', '2025-03-26 20:48:37'),
(13, 'private', 2, 2, 5, '2025-03-26', '09:00:00', '12:00:00', '3:00', '2025-03-26 20:50:41', '2025-03-26 20:50:41'),
(14, 'private', 2, 2, 5, '2025-03-26', '13:00:00', '16:00:00', '3:00', '2025-03-26 20:54:22', '2025-03-26 20:54:22'),
(15, 'private', 2, 2, 5, '2025-03-26', '17:00:00', '19:00:00', '2:00', '2025-03-26 20:58:03', '2025-03-26 20:58:03'),
(16, 'group', 1, 3, 2, '2025-03-29', '10:00:00', '15:00:00', '5:00', '2025-03-26 21:00:37', '2025-03-26 21:00:37'),
(17, 'private', 2, 2, 3, '2025-03-28', '21:45:00', '22:00:00', '0:15', '2025-03-28 18:42:13', '2025-03-28 18:42:13'),
(18, 'private', 1, 3, 4, '2025-04-05', '17:10:00', '17:25:00', '0:15', '2025-04-05 14:01:53', '2025-04-05 14:01:53');

-- --------------------------------------------------------

--
-- Table structure for table `booking_groups`
--

CREATE TABLE `booking_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` bigint(20) UNSIGNED DEFAULT NULL,
  `booking_group_num` varchar(255) DEFAULT NULL,
  `sales_area_id` bigint(20) UNSIGNED DEFAULT NULL,
  `supplier_type` varchar(255) DEFAULT 'AppModelsClientSupplier',
  `client_supplier_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_supplier_value` decimal(8,2) DEFAULT 0.00,
  `client_id` bigint(20) UNSIGNED DEFAULT NULL,
  `currency_id` bigint(20) UNSIGNED DEFAULT NULL,
  `hour_member_price` decimal(8,2) DEFAULT 0.00,
  `price` decimal(8,2) DEFAULT 0.00,
  `discounted` decimal(8,2) DEFAULT 0.00,
  `total_after_discount` decimal(8,2) DEFAULT 0.00,
  `tax` decimal(8,2) DEFAULT 0.00,
  `total` decimal(8,2) DEFAULT 0.00,
  `description` varchar(255) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `is_taxed` tinyint(1) NOT NULL DEFAULT 0,
  `credit_sales` tinyint(1) NOT NULL DEFAULT 0,
  `out_marina` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking_groups`
--

INSERT INTO `booking_groups` (`id`, `booking_id`, `booking_group_num`, `sales_area_id`, `supplier_type`, `client_supplier_id`, `client_supplier_value`, `client_id`, `currency_id`, `hour_member_price`, `price`, `discounted`, `total_after_discount`, `tax`, `total`, `description`, `notes`, `active`, `is_taxed`, `credit_sales`, `out_marina`, `created_at`, `updated_at`) VALUES
(1, 1, 'PORTO-0000000001', 5, 'App\\Models\\ClientSupplier', 5, 5.00, 1, 1, 1500.00, 11250.00, 1250.00, 10000.00, 0.00, 10000.00, NULL, 'فرد كبير بدون العاب بحرية', 1, 0, 0, 1, '2025-03-04 19:01:37', '2025-03-05 17:58:14'),
(2, 1, 'PORTO-0000000002', 4, 'App\\Models\\ClientSupplier', 5, 5.00, 2, 1, 1500.00, 4500.00, 0.00, 4500.00, 0.00, 4500.00, NULL, NULL, 1, 0, 0, 1, '2025-03-04 19:04:34', '2025-03-17 09:34:26'),
(3, 2, 'MARASSI-0000000001', 1, 'App\\Models\\ClientSupplier', 5, 5.00, 2, 2, 500.00, 3040.00, 40.00, 3000.00, 0.00, 3000.00, NULL, NULL, 1, 0, 0, 1, '2025-03-04 19:14:49', '2025-03-04 19:14:49'),
(4, 3, 'MARASSI-0000000002', 2, 'App\\Models\\ClientSupplier', 5, 5.00, 2, 1, 1200.00, 1200.00, 200.00, 1000.00, 0.00, 1000.00, NULL, NULL, 1, 0, 0, 1, '2025-03-05 18:09:41', '2025-03-05 18:10:14'),
(5, 4, 'MARASSI-0000000003', 2, 'App\\Models\\ClientSupplier', 5, 5.00, 1, 1, 1000.00, 3000.00, 500.00, 2500.00, 350.00, 2850.00, NULL, NULL, 1, 1, 0, 1, '2025-03-05 20:13:27', '2025-03-05 20:13:27'),
(6, 5, 'PORTO-0000000003', 1, 'App\\Models\\ClientSupplier', 2, 0.00, 1, 2, 25.00, 750.00, 0.00, 750.00, 0.00, 750.00, NULL, NULL, 1, 0, 0, 1, '2025-03-10 19:50:44', '2025-03-21 05:07:19'),
(7, 7, 'MARASSI-0000000004', 1, 'App\\Models\\ClientSupplier', 4, 0.00, 1, 1, 2000.00, 11840.00, 0.00, 11840.00, 0.00, 11840.00, NULL, NULL, 1, 0, 1, 0, '2025-03-17 17:26:19', '2025-03-21 04:51:52'),
(8, 5, 'PORTO-0000000004', 4, 'App\\Models\\ClientSupplier', 8, 2.00, 7, 1, 700.00, 2100.00, 0.00, 2100.00, 0.00, 2100.00, NULL, NULL, 1, 0, 1, 1, '2025-03-24 11:32:59', '2025-03-24 11:32:59'),
(9, 9, 'PORTO-0000000005', 4, 'App\\Models\\ClientSupplier', 9, 2.00, 8, 1, 700.00, 2100.00, 0.00, 2100.00, 294.00, 2394.00, NULL, NULL, 1, 1, 0, 0, '2025-03-24 20:22:15', '2025-03-24 20:22:57'),
(10, 9, 'PORTO-0000000006', 5, 'App\\Models\\ClientSupplier', 9, 2.00, 9, 1, 700.00, 1400.00, 0.00, 1400.00, 0.00, 1400.00, NULL, NULL, 1, 0, 0, 0, '2025-03-24 20:52:27', '2025-03-24 20:52:27'),
(11, 10, 'PORTO-0000000007', 5, 'App\\Models\\ClientSupplier', 9, 2.00, 3, 1, 700.00, 42000.00, 0.00, 42000.00, 0.00, 42000.00, NULL, NULL, 1, 0, 0, 0, '2025-03-26 20:41:45', '2025-03-26 20:41:45'),
(12, 11, 'PORTO-0000000008', 5, 'App\\Models\\ClientSupplier', 2, 0.00, 10, 1, 900.00, 18000.00, 0.00, 18000.00, 0.00, 18000.00, NULL, NULL, 1, 0, 1, 1, '2025-03-26 20:44:31', '2025-03-26 20:44:31'),
(13, 12, 'PORTO-0000000009', 4, 'App\\Models\\ClientSupplier', 7, 2.00, 11, 3, 15000.00, 60000.00, 0.00, 60000.00, 0.00, 60000.00, NULL, NULL, 1, 0, 0, 0, '2025-03-26 20:49:38', '2025-03-26 20:49:38'),
(14, 13, 'MARASSI-0000000005', 3, 'App\\Models\\ClientSupplier', 8, 2.00, 12, 3, 5000.00, 15000.00, 0.00, 15000.00, 2100.00, 17100.00, NULL, NULL, 1, 1, 0, 0, '2025-03-26 20:53:18', '2025-03-26 20:53:18'),
(15, 14, 'MARASSI-0000000006', 5, 'App\\Models\\ClientSupplier', 8, 2.00, 13, 2, 500.00, 1500.00, 0.00, 1500.00, 0.00, 1500.00, NULL, NULL, 1, 0, 0, 0, '2025-03-26 20:55:29', '2025-03-26 20:57:23'),
(16, 15, 'MARASSI-0000000007', 3, 'App\\Models\\ClientSupplier', 1, 0.00, 14, 1, 30000.00, 60000.00, 0.00, 60000.00, 0.00, 60000.00, NULL, NULL, 1, 0, 0, 0, '2025-03-26 20:59:06', '2025-03-26 20:59:06'),
(17, 16, 'PORTO-0000000010', 5, 'App\\Models\\ClientSupplier', 2, 0.00, 15, 2, 50.00, 1050.00, 0.00, 1050.00, 0.00, 1050.00, NULL, NULL, 1, 0, 1, 1, '2025-03-26 21:01:11', '2025-03-26 21:01:11');

-- --------------------------------------------------------

--
-- Table structure for table `booking_group_members`
--

CREATE TABLE `booking_group_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` bigint(20) UNSIGNED DEFAULT NULL,
  `booking_group_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `members_count` int(11) DEFAULT NULL,
  `discount_type` enum('fixed','percentage') NOT NULL DEFAULT 'percentage',
  `discount_value` decimal(8,2) DEFAULT 0.00,
  `member_price` decimal(8,2) DEFAULT 0.00,
  `member_total_price` decimal(8,2) DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking_group_members`
--

INSERT INTO `booking_group_members` (`id`, `booking_id`, `booking_group_id`, `client_type_id`, `members_count`, `discount_type`, `discount_value`, `member_price`, `member_total_price`, `created_at`, `updated_at`) VALUES
(8, 2, 3, 1, 10, '', 0.00, 0.00, 0.00, '2025-03-04 19:14:49', '2025-03-04 19:14:49'),
(9, 2, 3, 3, 5, '', 0.00, 0.00, 0.00, '2025-03-04 19:14:49', '2025-03-04 19:14:49'),
(10, 1, 1, 1, 5, 'percentage', 0.00, 1500.00, 7500.00, '2025-03-05 17:58:14', '2025-03-05 17:58:14'),
(11, 1, 1, 3, 5, 'percentage', 50.00, 750.00, 3750.00, '2025-03-05 17:58:14', '2025-03-05 17:58:14'),
(12, 1, 1, 2, 5, 'percentage', 100.00, 0.00, 0.00, '2025-03-05 17:58:14', '2025-03-05 17:58:14'),
(14, 3, 4, 1, 1, 'percentage', 0.00, 1200.00, 1200.00, '2025-03-05 18:10:14', '2025-03-05 18:10:14'),
(15, 4, 5, 1, 5, '', 0.00, 0.00, 0.00, '2025-03-05 20:13:27', '2025-03-05 20:13:27'),
(20, 1, 2, 1, 3, 'percentage', 0.00, 1500.00, 4500.00, '2025-03-17 09:34:26', '2025-03-17 09:34:26'),
(26, 7, 7, 1, 1, '', 0.00, 0.00, 0.00, '2025-03-21 04:51:52', '2025-03-21 04:51:52'),
(27, 5, 6, 1, 20, 'percentage', 0.00, 25.00, 500.00, '2025-03-21 05:07:19', '2025-03-21 05:07:19'),
(28, 5, 6, 3, 20, 'percentage', 50.00, 12.50, 250.00, '2025-03-21 05:07:19', '2025-03-21 05:07:19'),
(29, 5, 6, 2, 10, 'percentage', 100.00, 0.00, 0.00, '2025-03-21 05:07:19', '2025-03-21 05:07:19'),
(30, 5, 8, 2, 1, 'percentage', 100.00, 0.00, 0.00, '2025-03-24 11:32:59', '2025-03-24 11:32:59'),
(31, 5, 8, 1, 3, 'percentage', 0.00, 700.00, 2100.00, '2025-03-24 11:32:59', '2025-03-24 11:32:59'),
(34, 9, 9, 1, 3, 'percentage', 0.00, 700.00, 2100.00, '2025-03-24 20:22:57', '2025-03-24 20:22:57'),
(35, 9, 9, 2, 2, 'percentage', 100.00, 0.00, 0.00, '2025-03-24 20:22:57', '2025-03-24 20:22:57'),
(36, 9, 10, 1, 2, 'percentage', 0.00, 700.00, 1400.00, '2025-03-24 20:52:27', '2025-03-24 20:52:27'),
(37, 10, 11, 1, 50, 'percentage', 0.00, 700.00, 35000.00, '2025-03-26 20:41:45', '2025-03-26 20:41:45'),
(38, 10, 11, 2, 3, 'percentage', 100.00, 0.00, 0.00, '2025-03-26 20:41:45', '2025-03-26 20:41:45'),
(39, 10, 11, 3, 20, 'percentage', 50.00, 350.00, 7000.00, '2025-03-26 20:41:45', '2025-03-26 20:41:45'),
(40, 11, 12, 1, 20, 'percentage', 0.00, 900.00, 18000.00, '2025-03-26 20:44:31', '2025-03-26 20:44:31'),
(41, 12, 13, 1, 200, '', 0.00, 0.00, 0.00, '2025-03-26 20:49:38', '2025-03-26 20:49:38'),
(42, 13, 14, 1, 20, '', 0.00, 0.00, 0.00, '2025-03-26 20:53:18', '2025-03-26 20:53:18'),
(44, 14, 15, 1, 10, '', 0.00, 0.00, 0.00, '2025-03-26 20:57:23', '2025-03-26 20:57:23'),
(45, 15, 16, 1, 3, '', 0.00, 0.00, 0.00, '2025-03-26 20:59:06', '2025-03-26 20:59:06'),
(46, 16, 17, 1, 21, 'percentage', 0.00, 50.00, 1050.00, '2025-03-26 21:01:11', '2025-03-26 21:01:11');

-- --------------------------------------------------------

--
-- Table structure for table `booking_group_payments`
--

CREATE TABLE `booking_group_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` bigint(20) UNSIGNED DEFAULT NULL,
  `booking_group_id` bigint(20) UNSIGNED DEFAULT NULL,
  `payment_method_id` bigint(20) UNSIGNED DEFAULT NULL,
  `paid` decimal(8,2) DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking_group_payments`
--

INSERT INTO `booking_group_payments` (`id`, `booking_id`, `booking_group_id`, `payment_method_id`, `paid`, `created_at`, `updated_at`) VALUES
(4, 2, 3, 3, 1000.00, '2025-03-04 19:14:49', '2025-03-04 19:14:49'),
(5, 1, 1, 3, 5000.00, '2025-03-05 17:58:14', '2025-03-05 17:58:14'),
(9, 3, 4, 3, 200.00, '2025-03-05 18:10:14', '2025-03-05 18:10:14'),
(10, 3, 4, 2, 500.00, '2025-03-05 18:10:14', '2025-03-05 18:10:14'),
(11, 3, 4, 1, 300.00, '2025-03-05 18:10:14', '2025-03-05 18:10:14'),
(12, 4, 5, 3, 2000.00, '2025-03-05 20:13:27', '2025-03-05 20:13:27'),
(14, 1, 2, 2, 1500.00, '2025-03-17 09:34:26', '2025-03-17 09:34:26'),
(16, 5, 6, 3, 750.00, '2025-03-21 05:07:19', '2025-03-21 05:07:19'),
(18, 9, 9, 3, 2100.00, '2025-03-24 20:22:57', '2025-03-24 20:22:57'),
(19, 9, 10, 3, 1400.00, '2025-03-24 20:52:27', '2025-03-24 20:52:27'),
(20, 10, 11, 1, 25000.00, '2025-03-26 20:41:45', '2025-03-26 20:41:45'),
(21, 10, 11, 2, 15000.00, '2025-03-26 20:41:45', '2025-03-26 20:41:45'),
(22, 10, 11, 3, 2000.00, '2025-03-26 20:41:45', '2025-03-26 20:41:45'),
(23, 12, 13, 3, 60000.00, '2025-03-26 20:49:38', '2025-03-26 20:49:38'),
(24, 13, 14, 2, 17100.00, '2025-03-26 20:53:18', '2025-03-26 20:53:18'),
(26, 14, 15, 3, 1500.00, '2025-03-26 20:57:23', '2025-03-26 20:57:23'),
(27, 15, 16, 3, 60000.00, '2025-03-26 20:59:06', '2025-03-26 20:59:06');

-- --------------------------------------------------------

--
-- Table structure for table `booking_group_services`
--

CREATE TABLE `booking_group_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` bigint(20) UNSIGNED DEFAULT NULL,
  `branch_id` bigint(20) UNSIGNED DEFAULT NULL,
  `booking_group_id` bigint(20) UNSIGNED DEFAULT NULL,
  `booking_group_service_num` varchar(255) DEFAULT NULL,
  `services_count` int(11) DEFAULT NULL,
  `extra_service_id` bigint(20) UNSIGNED DEFAULT NULL,
  `currency_id` bigint(20) UNSIGNED DEFAULT NULL,
  `price` decimal(8,2) DEFAULT 0.00,
  `discounted` decimal(8,2) DEFAULT 0.00,
  `total` decimal(8,2) DEFAULT 0.00,
  `is_taxed` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking_group_services`
--

INSERT INTO `booking_group_services` (`id`, `booking_id`, `branch_id`, `booking_group_id`, `booking_group_service_num`, `services_count`, `extra_service_id`, `currency_id`, `price`, `discounted`, `total`, `is_taxed`, `created_at`, `updated_at`) VALUES
(3, 1, 1, 1, 'SERVICE-PORTO-0000000002', 1, 12, 1, 100.00, 0.00, 100.00, 0, '2025-03-05 20:04:40', '2025-03-05 20:04:40'),
(5, 1, 1, 2, 'SERVICE-PORTO-0000000003', 5, 4, 1, 250.00, 0.00, 1250.00, 0, '2025-03-05 20:05:06', '2025-03-05 20:05:06'),
(6, 4, 2, 5, 'SERVICE-MARASSI-0000000001', 10, 1, 1, 1000.00, 0.00, 10000.00, 0, '2025-03-07 19:04:49', '2025-03-07 19:04:49'),
(7, 7, 2, 7, 'SERVICE-MARASSI-0000000002', 1, 12, 1, 5000.00, 0.00, 5000.00, 0, '2025-03-17 17:29:16', '2025-03-17 17:29:16'),
(8, 5, 1, 6, 'SERVICE-PORTO-0000000004', 1, 6, 1, 350.00, 0.00, 350.00, 0, '2025-03-18 20:38:51', '2025-03-18 20:38:51'),
(9, 5, 1, 6, 'SERVICE-PORTO-0000000005', 1, 7, 2, 300.00, 0.00, 300.00, 0, '2025-03-18 20:38:51', '2025-03-18 20:38:51'),
(10, 15, 2, 16, 'SERVICE-MARASSI-0000000003', 1, 2, 1, 5000.00, 0.00, 5000.00, 0, '2025-03-26 21:04:59', '2025-03-26 21:04:59');

-- --------------------------------------------------------

--
-- Table structure for table `booking_group_service_payments`
--

CREATE TABLE `booking_group_service_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_group_service_id` bigint(20) UNSIGNED DEFAULT NULL,
  `payment_method_id` bigint(20) UNSIGNED DEFAULT NULL,
  `paid` decimal(8,2) DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking_group_service_payments`
--

INSERT INTO `booking_group_service_payments` (`id`, `booking_group_service_id`, `payment_method_id`, `paid`, `created_at`, `updated_at`) VALUES
(3, 3, 3, 100.00, '2025-03-05 20:04:40', '2025-03-05 20:04:40'),
(5, 5, 3, 250.00, '2025-03-05 20:05:06', '2025-03-05 20:05:06'),
(6, 7, 3, 1.00, '2025-03-17 17:29:16', '2025-03-17 17:29:16'),
(7, 7, 2, 1.00, '2025-03-17 17:29:16', '2025-03-17 17:29:16'),
(8, 10, 3, 5000.00, '2025-03-26 21:04:59', '2025-03-26 21:04:59');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '2025-03-27 08:03:44', '2025-03-27 08:03:44', NULL),
(2, 1, '2025-03-27 08:03:44', '2025-03-27 08:03:44', NULL),
(3, 1, '2025-03-27 08:03:44', '2025-03-27 08:03:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `branch_translations`
--

CREATE TABLE `branch_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branch_translations`
--

INSERT INTO `branch_translations` (`id`, `branch_id`, `locale`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'en', 'Porto', '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(2, 1, 'ar', 'بورتو', '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(3, 2, 'en', 'Marassi', '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(4, 2, 'ar', 'مراسي', '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(5, 3, 'en', 'Marsa Matruh', '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(6, 3, 'ar', 'مطروح', '2025-03-27 08:03:44', '2025-03-27 08:03:44');

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
('database:008195e68c8f2b1907eb671c9df0fa9f', 'b:1;', 1744205603),
('database:090b3d982427d4ce050b492c7c64abfb', 'b:1;', 1744204024),
('database:2283e65dd93b194f892f0780542a95eb', 'b:0;', 1744205603),
('database:38565828fe06efc62c9c3773d264d7da', 'b:1;', 1744204024),
('database:3a13695a132f576261b13dfa58a66882', 'b:1;', 1744204024),
('database:995370126fdff368a6031b79f89d1ce9', 'b:0;', 1744198550),
('database:bce7b2048a85b8e41a7f2d02ea804d4d', 'b:1;', 1744204024),
('database:c9cb19bda7dd22506343f0069eb39453', 'b:1;', 1744204024),
('database:fb1cd439eadae7ad88594c930cbd2d28', 'b:0;', 1744204024),
('languages', 'O:39:\"Illuminate\\Database\\Eloquent\\Collection\":2:{s:8:\"\0*\0items\";a:2:{i:0;O:43:\"Modules\\AdminRoleAuthModule\\Models\\Language\":34:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:9:\"languages\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:2;s:4:\"code\";s:2:\"ar\";s:5:\"image\";s:21:\"languages/lang-ar.png\";s:3:\"rtl\";i:1;s:6:\"active\";i:1;s:7:\"default\";i:1;s:10:\"created_at\";s:19:\"2025-03-27 10:03:45\";s:10:\"updated_at\";s:19:\"2025-03-27 10:03:45\";s:10:\"deleted_at\";N;}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:2;s:4:\"code\";s:2:\"ar\";s:5:\"image\";s:21:\"languages/lang-ar.png\";s:3:\"rtl\";i:1;s:6:\"active\";i:1;s:7:\"default\";i:1;s:10:\"created_at\";s:19:\"2025-03-27 10:03:45\";s:10:\"updated_at\";s:19:\"2025-03-27 10:03:45\";s:10:\"deleted_at\";N;}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:1:{s:10:\"deleted_at\";s:8:\"datetime\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:1:{s:12:\"translations\";O:39:\"Illuminate\\Database\\Eloquent\\Collection\":2:{s:8:\"\0*\0items\";a:1:{i:0;O:54:\"Modules\\AdminRoleAuthModule\\Models\\LanguageTranslation\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:21:\"language_translations\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:6:{s:2:\"id\";i:4;s:11:\"language_id\";i:2;s:6:\"locale\";s:2:\"ar\";s:4:\"name\";s:14:\"العربية\";s:10:\"created_at\";s:19:\"2025-03-27 10:03:45\";s:10:\"updated_at\";s:19:\"2025-03-27 10:03:45\";}s:11:\"\0*\0original\";a:6:{s:2:\"id\";i:4;s:11:\"language_id\";i:2;s:6:\"locale\";s:2:\"ar\";s:4:\"name\";s:14:\"العربية\";s:10:\"created_at\";s:19:\"2025-03-27 10:03:45\";s:10:\"updated_at\";s:19:\"2025-03-27 10:03:45\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:8:\"fillable\";a:3:{i:0;s:11:\"language_id\";i:1;s:4:\"name\";i:2;s:6:\"locale\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:8:\"fillable\";a:5:{i:0;s:4:\"code\";i:1;s:5:\"image\";i:2;s:6:\"active\";i:3;s:7:\"default\";i:4;s:3:\"rtl\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}s:16:\"translationModel\";s:54:\"Modules\\AdminRoleAuthModule\\Models\\LanguageTranslation\";s:20:\"translatedAttributes\";a:1:{i:0;s:4:\"name\";}s:16:\"\0*\0defaultLocale\";N;s:16:\"\0*\0forceDeleting\";b:0;}i:1;O:43:\"Modules\\AdminRoleAuthModule\\Models\\Language\":34:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:9:\"languages\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:9:{s:2:\"id\";i:1;s:4:\"code\";s:2:\"en\";s:5:\"image\";s:21:\"languages/lang-en.png\";s:3:\"rtl\";i:0;s:6:\"active\";i:1;s:7:\"default\";i:0;s:10:\"created_at\";s:19:\"2025-03-27 10:03:45\";s:10:\"updated_at\";s:19:\"2025-03-27 10:03:45\";s:10:\"deleted_at\";N;}s:11:\"\0*\0original\";a:9:{s:2:\"id\";i:1;s:4:\"code\";s:2:\"en\";s:5:\"image\";s:21:\"languages/lang-en.png\";s:3:\"rtl\";i:0;s:6:\"active\";i:1;s:7:\"default\";i:0;s:10:\"created_at\";s:19:\"2025-03-27 10:03:45\";s:10:\"updated_at\";s:19:\"2025-03-27 10:03:45\";s:10:\"deleted_at\";N;}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:1:{s:10:\"deleted_at\";s:8:\"datetime\";}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:1:{s:12:\"translations\";O:39:\"Illuminate\\Database\\Eloquent\\Collection\":2:{s:8:\"\0*\0items\";a:1:{i:0;O:54:\"Modules\\AdminRoleAuthModule\\Models\\LanguageTranslation\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:21:\"language_translations\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:6:{s:2:\"id\";i:2;s:11:\"language_id\";i:1;s:6:\"locale\";s:2:\"ar\";s:4:\"name\";s:20:\"الانجليزية\";s:10:\"created_at\";s:19:\"2025-03-27 10:03:45\";s:10:\"updated_at\";s:19:\"2025-03-27 10:03:45\";}s:11:\"\0*\0original\";a:6:{s:2:\"id\";i:2;s:11:\"language_id\";i:1;s:6:\"locale\";s:2:\"ar\";s:4:\"name\";s:20:\"الانجليزية\";s:10:\"created_at\";s:19:\"2025-03-27 10:03:45\";s:10:\"updated_at\";s:19:\"2025-03-27 10:03:45\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:8:\"fillable\";a:3:{i:0;s:11:\"language_id\";i:1;s:4:\"name\";i:2;s:6:\"locale\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:8:\"fillable\";a:5:{i:0;s:4:\"code\";i:1;s:5:\"image\";i:2;s:6:\"active\";i:3;s:7:\"default\";i:4;s:3:\"rtl\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}s:16:\"translationModel\";s:54:\"Modules\\AdminRoleAuthModule\\Models\\LanguageTranslation\";s:20:\"translatedAttributes\";a:1:{i:0;s:4:\"name\";}s:16:\"\0*\0defaultLocale\";N;s:16:\"\0*\0forceDeleting\";b:0;}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', 2059554086),
('mail_settings', 'a:0:{}', 2059041593),
('settings', 'O:39:\"Illuminate\\Database\\Eloquent\\Collection\":2:{s:8:\"\0*\0items\";a:5:{s:9:\"site_logo\";O:42:\"Modules\\AdminRoleAuthModule\\Models\\Setting\":33:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"settings\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:5:{s:2:\"id\";i:1;s:3:\"key\";s:9:\"site_logo\";s:4:\"type\";s:5:\"image\";s:10:\"created_at\";s:19:\"2025-03-27 10:03:45\";s:10:\"updated_at\";s:19:\"2025-03-27 10:03:45\";}s:11:\"\0*\0original\";a:5:{s:2:\"id\";i:1;s:3:\"key\";s:9:\"site_logo\";s:4:\"type\";s:5:\"image\";s:10:\"created_at\";s:19:\"2025-03-27 10:03:45\";s:10:\"updated_at\";s:19:\"2025-03-27 10:03:45\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:1:{s:12:\"translations\";O:39:\"Illuminate\\Database\\Eloquent\\Collection\":2:{s:8:\"\0*\0items\";a:1:{i:0;O:53:\"Modules\\AdminRoleAuthModule\\Models\\SettingTranslation\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:20:\"setting_translations\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:6:{s:2:\"id\";i:1;s:10:\"setting_id\";i:1;s:6:\"locale\";s:2:\"ar\";s:5:\"value\";s:13:\"logo/logo.png\";s:10:\"created_at\";s:19:\"2025-03-27 10:03:45\";s:10:\"updated_at\";s:19:\"2025-03-27 10:03:45\";}s:11:\"\0*\0original\";a:6:{s:2:\"id\";i:1;s:10:\"setting_id\";i:1;s:6:\"locale\";s:2:\"ar\";s:5:\"value\";s:13:\"logo/logo.png\";s:10:\"created_at\";s:19:\"2025-03-27 10:03:45\";s:10:\"updated_at\";s:19:\"2025-03-27 10:03:45\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:3:{i:0;s:10:\"setting_id\";i:1;s:5:\"value\";i:2;s:6:\"locale\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:2:{i:0;s:3:\"key\";i:1;s:4:\"type\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}s:16:\"translationModel\";s:53:\"Modules\\AdminRoleAuthModule\\Models\\SettingTranslation\";s:20:\"translatedAttributes\";a:1:{i:0;s:5:\"value\";}s:16:\"\0*\0defaultLocale\";N;}s:9:\"site_icon\";O:42:\"Modules\\AdminRoleAuthModule\\Models\\Setting\":33:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"settings\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:5:{s:2:\"id\";i:2;s:3:\"key\";s:9:\"site_icon\";s:4:\"type\";s:5:\"image\";s:10:\"created_at\";s:19:\"2025-03-27 10:03:45\";s:10:\"updated_at\";s:19:\"2025-03-27 10:03:45\";}s:11:\"\0*\0original\";a:5:{s:2:\"id\";i:2;s:3:\"key\";s:9:\"site_icon\";s:4:\"type\";s:5:\"image\";s:10:\"created_at\";s:19:\"2025-03-27 10:03:45\";s:10:\"updated_at\";s:19:\"2025-03-27 10:03:45\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:1:{s:12:\"translations\";O:39:\"Illuminate\\Database\\Eloquent\\Collection\":2:{s:8:\"\0*\0items\";a:1:{i:0;O:53:\"Modules\\AdminRoleAuthModule\\Models\\SettingTranslation\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:20:\"setting_translations\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:6:{s:2:\"id\";i:2;s:10:\"setting_id\";i:2;s:6:\"locale\";s:2:\"ar\";s:5:\"value\";s:13:\"logo/icon.png\";s:10:\"created_at\";s:19:\"2025-03-27 10:03:45\";s:10:\"updated_at\";s:19:\"2025-03-27 10:03:45\";}s:11:\"\0*\0original\";a:6:{s:2:\"id\";i:2;s:10:\"setting_id\";i:2;s:6:\"locale\";s:2:\"ar\";s:5:\"value\";s:13:\"logo/icon.png\";s:10:\"created_at\";s:19:\"2025-03-27 10:03:45\";s:10:\"updated_at\";s:19:\"2025-03-27 10:03:45\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:3:{i:0;s:10:\"setting_id\";i:1;s:5:\"value\";i:2;s:6:\"locale\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:2:{i:0;s:3:\"key\";i:1;s:4:\"type\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}s:16:\"translationModel\";s:53:\"Modules\\AdminRoleAuthModule\\Models\\SettingTranslation\";s:20:\"translatedAttributes\";a:1:{i:0;s:5:\"value\";}s:16:\"\0*\0defaultLocale\";N;}s:9:\"site_name\";O:42:\"Modules\\AdminRoleAuthModule\\Models\\Setting\":33:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"settings\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:5:{s:2:\"id\";i:3;s:3:\"key\";s:9:\"site_name\";s:4:\"type\";s:4:\"text\";s:10:\"created_at\";s:19:\"2025-03-27 10:03:45\";s:10:\"updated_at\";s:19:\"2025-03-27 10:03:45\";}s:11:\"\0*\0original\";a:5:{s:2:\"id\";i:3;s:3:\"key\";s:9:\"site_name\";s:4:\"type\";s:4:\"text\";s:10:\"created_at\";s:19:\"2025-03-27 10:03:45\";s:10:\"updated_at\";s:19:\"2025-03-27 10:03:45\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:1:{s:12:\"translations\";O:39:\"Illuminate\\Database\\Eloquent\\Collection\":2:{s:8:\"\0*\0items\";a:1:{i:0;O:53:\"Modules\\AdminRoleAuthModule\\Models\\SettingTranslation\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:20:\"setting_translations\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:6:{s:2:\"id\";i:3;s:10:\"setting_id\";i:3;s:6:\"locale\";s:2:\"ar\";s:5:\"value\";s:53:\"شركة بوسيدون للأنشطة البحرية\";s:10:\"created_at\";s:19:\"2025-03-27 10:03:45\";s:10:\"updated_at\";s:19:\"2025-03-27 10:03:45\";}s:11:\"\0*\0original\";a:6:{s:2:\"id\";i:3;s:10:\"setting_id\";i:3;s:6:\"locale\";s:2:\"ar\";s:5:\"value\";s:53:\"شركة بوسيدون للأنشطة البحرية\";s:10:\"created_at\";s:19:\"2025-03-27 10:03:45\";s:10:\"updated_at\";s:19:\"2025-03-27 10:03:45\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:3:{i:0;s:10:\"setting_id\";i:1;s:5:\"value\";i:2;s:6:\"locale\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:2:{i:0;s:3:\"key\";i:1;s:4:\"type\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}s:16:\"translationModel\";s:53:\"Modules\\AdminRoleAuthModule\\Models\\SettingTranslation\";s:20:\"translatedAttributes\";a:1:{i:0;s:5:\"value\";}s:16:\"\0*\0defaultLocale\";N;}s:13:\"site_keywords\";O:42:\"Modules\\AdminRoleAuthModule\\Models\\Setting\":33:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"settings\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:5:{s:2:\"id\";i:4;s:3:\"key\";s:13:\"site_keywords\";s:4:\"type\";s:5:\"fixed\";s:10:\"created_at\";s:19:\"2025-03-27 10:03:45\";s:10:\"updated_at\";s:19:\"2025-03-27 10:03:45\";}s:11:\"\0*\0original\";a:5:{s:2:\"id\";i:4;s:3:\"key\";s:13:\"site_keywords\";s:4:\"type\";s:5:\"fixed\";s:10:\"created_at\";s:19:\"2025-03-27 10:03:45\";s:10:\"updated_at\";s:19:\"2025-03-27 10:03:45\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:1:{s:12:\"translations\";O:39:\"Illuminate\\Database\\Eloquent\\Collection\":2:{s:8:\"\0*\0items\";a:1:{i:0;O:53:\"Modules\\AdminRoleAuthModule\\Models\\SettingTranslation\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:20:\"setting_translations\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:6:{s:2:\"id\";i:5;s:10:\"setting_id\";i:4;s:6:\"locale\";s:2:\"ar\";s:5:\"value\";s:39:\"Poseidon, snorkeling, swimming, sailing\";s:10:\"created_at\";s:19:\"2025-03-27 10:03:45\";s:10:\"updated_at\";s:19:\"2025-03-27 10:03:45\";}s:11:\"\0*\0original\";a:6:{s:2:\"id\";i:5;s:10:\"setting_id\";i:4;s:6:\"locale\";s:2:\"ar\";s:5:\"value\";s:39:\"Poseidon, snorkeling, swimming, sailing\";s:10:\"created_at\";s:19:\"2025-03-27 10:03:45\";s:10:\"updated_at\";s:19:\"2025-03-27 10:03:45\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:3:{i:0;s:10:\"setting_id\";i:1;s:5:\"value\";i:2;s:6:\"locale\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:2:{i:0;s:3:\"key\";i:1;s:4:\"type\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}s:16:\"translationModel\";s:53:\"Modules\\AdminRoleAuthModule\\Models\\SettingTranslation\";s:20:\"translatedAttributes\";a:1:{i:0;s:5:\"value\";}s:16:\"\0*\0defaultLocale\";N;}s:16:\"site_description\";O:42:\"Modules\\AdminRoleAuthModule\\Models\\Setting\":33:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"settings\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:5:{s:2:\"id\";i:5;s:3:\"key\";s:16:\"site_description\";s:4:\"type\";s:4:\"text\";s:10:\"created_at\";s:19:\"2025-03-27 10:03:45\";s:10:\"updated_at\";s:19:\"2025-03-27 10:03:45\";}s:11:\"\0*\0original\";a:5:{s:2:\"id\";i:5;s:3:\"key\";s:16:\"site_description\";s:4:\"type\";s:4:\"text\";s:10:\"created_at\";s:19:\"2025-03-27 10:03:45\";s:10:\"updated_at\";s:19:\"2025-03-27 10:03:45\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:1:{s:12:\"translations\";O:39:\"Illuminate\\Database\\Eloquent\\Collection\":2:{s:8:\"\0*\0items\";a:1:{i:0;O:53:\"Modules\\AdminRoleAuthModule\\Models\\SettingTranslation\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:20:\"setting_translations\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:6:{s:2:\"id\";i:6;s:10:\"setting_id\";i:5;s:6:\"locale\";s:2:\"ar\";s:5:\"value\";s:1743:\"في بوسيدون، لدينا شغف كبير لخلق لحظات لا تنسى، اعتدنا على تقديم السعادة لأكثر من 15 عامًا. رحلاتنا عبارة عن حزمة من المرح والهدوء والذكريات، فهل أنت مستعد؟ تبدأ رحلتنا البحرية بالإبحار في بحيرة مارينا مع مرشدنا السياحي الذي يقدم لنا كيف أصبحت مارينا واحدة من أجمل الوجهات المذهلة في مصر. هل أنت مستعد للسباحة؟ لقد حان وقتك للاستمتاع بمياه البحر الصافية ولكن ضع في اعتبارك أن سلامتك تأتي أولاً، لذلك ستكون تحت إشراف مرشد الغطس المحترف لدينا. ولإضافة المزيد من الإثارة والمتعة إلى الرحلة، فإن الرياضات المائية جاهزة لك مثل قارب الموز والأريكة والجيت سكي. يلي ذلك الرياضات المائية، يسعدنا أن نقدم لك بوفيه مفتوح أعده رئيس الطهاة لدينا. بعد تناول الغداء، نختتم المتعة وتنتهي الرحلة بسعادة.. كما ذكرنا، فإن المهمة الرئيسية لبوسيدون هي تقديم السعادة، لذلك نقدم العديد من المنتجات الفريدة على متن السفينة ونوفر مصورًا محترفًا لخدمتك. تتمنى لكم شركة بوسيدون إقامة طيبة في مصر ورحلة لا تنسى وتخبر بها الجميع. حافظوا على سلامتكم، ومرحبًا بكم دائمًا لزيارة مصر مرة أخرى.\";s:10:\"created_at\";s:19:\"2025-03-27 10:03:45\";s:10:\"updated_at\";s:19:\"2025-03-27 10:03:45\";}s:11:\"\0*\0original\";a:6:{s:2:\"id\";i:6;s:10:\"setting_id\";i:5;s:6:\"locale\";s:2:\"ar\";s:5:\"value\";s:1743:\"في بوسيدون، لدينا شغف كبير لخلق لحظات لا تنسى، اعتدنا على تقديم السعادة لأكثر من 15 عامًا. رحلاتنا عبارة عن حزمة من المرح والهدوء والذكريات، فهل أنت مستعد؟ تبدأ رحلتنا البحرية بالإبحار في بحيرة مارينا مع مرشدنا السياحي الذي يقدم لنا كيف أصبحت مارينا واحدة من أجمل الوجهات المذهلة في مصر. هل أنت مستعد للسباحة؟ لقد حان وقتك للاستمتاع بمياه البحر الصافية ولكن ضع في اعتبارك أن سلامتك تأتي أولاً، لذلك ستكون تحت إشراف مرشد الغطس المحترف لدينا. ولإضافة المزيد من الإثارة والمتعة إلى الرحلة، فإن الرياضات المائية جاهزة لك مثل قارب الموز والأريكة والجيت سكي. يلي ذلك الرياضات المائية، يسعدنا أن نقدم لك بوفيه مفتوح أعده رئيس الطهاة لدينا. بعد تناول الغداء، نختتم المتعة وتنتهي الرحلة بسعادة.. كما ذكرنا، فإن المهمة الرئيسية لبوسيدون هي تقديم السعادة، لذلك نقدم العديد من المنتجات الفريدة على متن السفينة ونوفر مصورًا محترفًا لخدمتك. تتمنى لكم شركة بوسيدون إقامة طيبة في مصر ورحلة لا تنسى وتخبر بها الجميع. حافظوا على سلامتكم، ومرحبًا بكم دائمًا لزيارة مصر مرة أخرى.\";s:10:\"created_at\";s:19:\"2025-03-27 10:03:45\";s:10:\"updated_at\";s:19:\"2025-03-27 10:03:45\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:3:{i:0;s:10:\"setting_id\";i:1;s:5:\"value\";i:2;s:6:\"locale\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:2:{i:0;s:3:\"key\";i:1;s:4:\"type\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}s:16:\"translationModel\";s:53:\"Modules\\AdminRoleAuthModule\\Models\\SettingTranslation\";s:20:\"translatedAttributes\";a:1:{i:0;s:5:\"value\";}s:16:\"\0*\0defaultLocale\";N;}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', 2059554085);
INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('spatie.permission.cache', 'a:3:{s:5:\"alias\";a:8:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"d\";s:16:\"permission_order\";s:1:\"e\";s:19:\"permission_group_id\";s:1:\"f\";s:15:\"permission_icon\";s:1:\"g\";s:14:\"permission_url\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:154:{i:0;a:8:{s:1:\"a\";i:1;s:1:\"b\";s:14:\"View Dashboard\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";N;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:1;a:8:{s:1:\"a\";i:2;s:1:\"b\";s:11:\"View Admins\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:1;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:2;a:8:{s:1:\"a\";i:3;s:1:\"b\";s:13:\"Create Admins\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:1;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:3;a:8:{s:1:\"a\";i:4;s:1:\"b\";s:11:\"Edit Admins\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:1;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:4;a:8:{s:1:\"a\";i:5;s:1:\"b\";s:13:\"Delete Admins\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:1;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:5;a:8:{s:1:\"a\";i:6;s:1:\"b\";s:16:\"View Admin Roles\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:1;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:6;a:8:{s:1:\"a\";i:7;s:1:\"b\";s:18:\"Create Admin Roles\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:1;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:7;a:8:{s:1:\"a\";i:8;s:1:\"b\";s:16:\"Edit Admin Roles\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:1;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:8;a:8:{s:1:\"a\";i:9;s:1:\"b\";s:18:\"Delete Admin Roles\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:1;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:9;a:8:{s:1:\"a\";i:10;s:1:\"b\";s:18:\"View Site Settings\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:10;a:8:{s:1:\"a\";i:11;s:1:\"b\";s:18:\"Edit Site Settings\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:11;a:8:{s:1:\"a\";i:12;s:1:\"b\";s:14:\"View Languages\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:12;a:8:{s:1:\"a\";i:13;s:1:\"b\";s:16:\"Create Languages\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:13;a:8:{s:1:\"a\";i:14;s:1:\"b\";s:14:\"Edit Languages\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:14;a:8:{s:1:\"a\";i:15;s:1:\"b\";s:16:\"Delete Languages\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:15;a:8:{s:1:\"a\";i:16;s:1:\"b\";s:18:\"View SMTP Settings\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:16;a:8:{s:1:\"a\";i:17;s:1:\"b\";s:18:\"Edit SMTP Settings\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:17;a:8:{s:1:\"a\";i:18;s:1:\"b\";s:13:\"View Branches\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:18;a:8:{s:1:\"a\";i:19;s:1:\"b\";s:15:\"Create Branches\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:19;a:8:{s:1:\"a\";i:20;s:1:\"b\";s:13:\"Edit Branches\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:20;a:8:{s:1:\"a\";i:21;s:1:\"b\";s:15:\"Delete Branches\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:21;a:8:{s:1:\"a\";i:22;s:1:\"b\";s:10:\"View Types\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:4;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:22;a:8:{s:1:\"a\";i:23;s:1:\"b\";s:12:\"Create Types\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:4;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:23;a:8:{s:1:\"a\";i:24;s:1:\"b\";s:10:\"Edit Types\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:4;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:24;a:8:{s:1:\"a\";i:25;s:1:\"b\";s:12:\"Delete Types\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:4;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:25;a:8:{s:1:\"a\";i:26;s:1:\"b\";s:15:\"View Currencies\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:26;a:8:{s:1:\"a\";i:27;s:1:\"b\";s:17:\"Create Currencies\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:27;a:8:{s:1:\"a\";i:28;s:1:\"b\";s:15:\"Edit Currencies\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:28;a:8:{s:1:\"a\";i:29;s:1:\"b\";s:17:\"Delete Currencies\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:29;a:8:{s:1:\"a\";i:30;s:1:\"b\";s:17:\"View File Manager\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:3;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:30;a:8:{s:1:\"a\";i:31;s:1:\"b\";s:16:\"View Sales Areas\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:31;a:8:{s:1:\"a\";i:32;s:1:\"b\";s:18:\"Create Sales Areas\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:32;a:8:{s:1:\"a\";i:33;s:1:\"b\";s:16:\"Edit Sales Areas\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:33;a:8:{s:1:\"a\";i:34;s:1:\"b\";s:18:\"Delete Sales Areas\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:34;a:8:{s:1:\"a\";i:35;s:1:\"b\";s:21:\"View Client Suppliers\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:35;a:8:{s:1:\"a\";i:36;s:1:\"b\";s:23:\"Create Client Suppliers\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:36;a:8:{s:1:\"a\";i:37;s:1:\"b\";s:21:\"Edit Client Suppliers\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:37;a:8:{s:1:\"a\";i:38;s:1:\"b\";s:23:\"Delete Client Suppliers\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:38;a:8:{s:1:\"a\";i:39;s:1:\"b\";s:10:\"View Goods\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:39;a:8:{s:1:\"a\";i:40;s:1:\"b\";s:12:\"Create Goods\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:40;a:8:{s:1:\"a\";i:41;s:1:\"b\";s:10:\"Edit Goods\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:41;a:8:{s:1:\"a\";i:42;s:1:\"b\";s:12:\"Delete Goods\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:42;a:8:{s:1:\"a\";i:43;s:1:\"b\";s:9:\"View Jobs\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:43;a:8:{s:1:\"a\";i:44;s:1:\"b\";s:11:\"Create Jobs\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:44;a:8:{s:1:\"a\";i:45;s:1:\"b\";s:9:\"Edit Jobs\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:45;a:8:{s:1:\"a\";i:46;s:1:\"b\";s:11:\"Delete Jobs\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:46;a:8:{s:1:\"a\";i:47;s:1:\"b\";s:20:\"View Payment Methods\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:47;a:8:{s:1:\"a\";i:48;s:1:\"b\";s:22:\"Create Payment Methods\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:48;a:8:{s:1:\"a\";i:49;s:1:\"b\";s:20:\"Edit Payment Methods\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:49;a:8:{s:1:\"a\";i:50;s:1:\"b\";s:22:\"Delete Payment Methods\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:50;a:8:{s:1:\"a\";i:51;s:1:\"b\";s:17:\"View Client Types\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:51;a:8:{s:1:\"a\";i:52;s:1:\"b\";s:19:\"Create Client Types\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:52;a:8:{s:1:\"a\";i:53;s:1:\"b\";s:17:\"Edit Client Types\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:53;a:8:{s:1:\"a\";i:54;s:1:\"b\";s:19:\"Delete Client Types\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:54;a:8:{s:1:\"a\";i:55;s:1:\"b\";s:18:\"View Sailing Boats\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:55;a:8:{s:1:\"a\";i:56;s:1:\"b\";s:20:\"Create Sailing Boats\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:56;a:8:{s:1:\"a\";i:57;s:1:\"b\";s:18:\"Edit Sailing Boats\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:57;a:8:{s:1:\"a\";i:58;s:1:\"b\";s:20:\"Delete Sailing Boats\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:58;a:8:{s:1:\"a\";i:59;s:1:\"b\";s:20:\"View Goods Suppliers\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:59;a:8:{s:1:\"a\";i:60;s:1:\"b\";s:22:\"Create Goods Suppliers\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:60;a:8:{s:1:\"a\";i:61;s:1:\"b\";s:20:\"Edit Goods Suppliers\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:61;a:8:{s:1:\"a\";i:62;s:1:\"b\";s:22:\"Delete Goods Suppliers\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:62;a:8:{s:1:\"a\";i:63;s:1:\"b\";s:19:\"View Expenses Types\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:63;a:8:{s:1:\"a\";i:64;s:1:\"b\";s:21:\"Create Expenses Types\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:64;a:8:{s:1:\"a\";i:65;s:1:\"b\";s:19:\"Edit Expenses Types\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:65;a:8:{s:1:\"a\";i:66;s:1:\"b\";s:21:\"Delete Expenses Types\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:66;a:8:{s:1:\"a\";i:67;s:1:\"b\";s:21:\"View Experience Types\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:67;a:8:{s:1:\"a\";i:68;s:1:\"b\";s:23:\"Create Experience Types\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:68;a:8:{s:1:\"a\";i:69;s:1:\"b\";s:21:\"Edit Experience Types\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:69;a:8:{s:1:\"a\";i:70;s:1:\"b\";s:23:\"Delete Experience Types\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:2;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:70;a:8:{s:1:\"a\";i:71;s:1:\"b\";s:12:\"View Clients\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:5;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:71;a:8:{s:1:\"a\";i:72;s:1:\"b\";s:14:\"Create Clients\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:5;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:72;a:8:{s:1:\"a\";i:73;s:1:\"b\";s:12:\"Edit Clients\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:5;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:73;a:8:{s:1:\"a\";i:74;s:1:\"b\";s:14:\"Delete Clients\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:5;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:74;a:8:{s:1:\"a\";i:75;s:1:\"b\";s:14:\"View FeedBacks\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:5;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:75;a:8:{s:1:\"a\";i:76;s:1:\"b\";s:16:\"Create FeedBacks\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:5;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:76;a:8:{s:1:\"a\";i:77;s:1:\"b\";s:14:\"Edit FeedBacks\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:5;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:77;a:8:{s:1:\"a\";i:78;s:1:\"b\";s:16:\"Delete FeedBacks\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:5;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:78;a:8:{s:1:\"a\";i:79;s:1:\"b\";s:13:\"View Bookings\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:6;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:79;a:8:{s:1:\"a\";i:80;s:1:\"b\";s:15:\"Create Bookings\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:6;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:80;a:8:{s:1:\"a\";i:81;s:1:\"b\";s:13:\"Edit Bookings\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:6;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:81;a:8:{s:1:\"a\";i:82;s:1:\"b\";s:15:\"Delete Bookings\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:6;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:82;a:8:{s:1:\"a\";i:83;s:1:\"b\";s:21:\"Create Booking Groups\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:6;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:83;a:8:{s:1:\"a\";i:84;s:1:\"b\";s:19:\"Edit Booking Groups\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:6;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:84;a:8:{s:1:\"a\";i:85;s:1:\"b\";s:21:\"Delete Booking Groups\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:6;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:85;a:8:{s:1:\"a\";i:86;s:1:\"b\";s:19:\"View Extra Services\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:7;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:86;a:8:{s:1:\"a\";i:87;s:1:\"b\";s:21:\"Create Extra Services\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:7;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:87;a:8:{s:1:\"a\";i:88;s:1:\"b\";s:19:\"Edit Extra Services\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:7;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:88;a:8:{s:1:\"a\";i:89;s:1:\"b\";s:21:\"Delete Extra Services\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:7;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:89;a:8:{s:1:\"a\";i:90;s:1:\"b\";s:27:\"View Booking Extra Services\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:7;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:90;a:8:{s:1:\"a\";i:91;s:1:\"b\";s:29:\"Create Booking Extra Services\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:7;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:91;a:8:{s:1:\"a\";i:92;s:1:\"b\";s:27:\"Edit Booking Extra Services\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:7;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:92;a:8:{s:1:\"a\";i:93;s:1:\"b\";s:29:\"Delete Booking Extra Services\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:7;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:93;a:8:{s:1:\"a\";i:94;s:1:\"b\";s:19:\"View Employee Types\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:9;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:94;a:8:{s:1:\"a\";i:95;s:1:\"b\";s:21:\"Create Employee Types\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:9;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:95;a:8:{s:1:\"a\";i:96;s:1:\"b\";s:19:\"Edit Employee Types\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:9;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:96;a:8:{s:1:\"a\";i:97;s:1:\"b\";s:21:\"Delete Employee Types\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:9;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:97;a:8:{s:1:\"a\";i:98;s:1:\"b\";s:27:\"View Employee Nationalities\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:9;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:98;a:8:{s:1:\"a\";i:99;s:1:\"b\";s:29:\"Create Employee Nationalities\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:9;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:99;a:8:{s:1:\"a\";i:100;s:1:\"b\";s:27:\"Edit Employee Nationalities\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:9;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:100;a:8:{s:1:\"a\";i:101;s:1:\"b\";s:29:\"Delete Employee Nationalities\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:9;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:101;a:8:{s:1:\"a\";i:102;s:1:\"b\";s:23:\"View Employee Religions\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:9;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:102;a:8:{s:1:\"a\";i:103;s:1:\"b\";s:25:\"Create Employee Religions\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:9;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:103;a:8:{s:1:\"a\";i:104;s:1:\"b\";s:23:\"Edit Employee Religions\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:9;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:104;a:8:{s:1:\"a\";i:105;s:1:\"b\";s:25:\"Delete Employee Religions\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:9;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:105;a:8:{s:1:\"a\";i:106;s:1:\"b\";s:28:\"View Employee Marital Status\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:9;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:106;a:8:{s:1:\"a\";i:107;s:1:\"b\";s:30:\"Create Employee Marital Status\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:9;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:107;a:8:{s:1:\"a\";i:108;s:1:\"b\";s:28:\"Edit Employee Marital Status\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:9;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:108;a:8:{s:1:\"a\";i:109;s:1:\"b\";s:30:\"Delete Employee Marital Status\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:9;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:109;a:8:{s:1:\"a\";i:110;s:1:\"b\";s:28:\"View Employee Identity Types\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:9;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:110;a:8:{s:1:\"a\";i:111;s:1:\"b\";s:30:\"Create Employee Identity Types\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:9;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:111;a:8:{s:1:\"a\";i:112;s:1:\"b\";s:28:\"Edit Employee Identity Types\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:9;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:112;a:8:{s:1:\"a\";i:113;s:1:\"b\";s:30:\"Delete Employee Identity Types\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:9;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:113;a:8:{s:1:\"a\";i:114;s:1:\"b\";s:26:\"View Employee Card Issuers\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:9;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:114;a:8:{s:1:\"a\";i:115;s:1:\"b\";s:28:\"Create Employee Card Issuers\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:9;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:115;a:8:{s:1:\"a\";i:116;s:1:\"b\";s:26:\"Edit Employee Card Issuers\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:9;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:116;a:8:{s:1:\"a\";i:117;s:1:\"b\";s:28:\"Delete Employee Card Issuers\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:9;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:117;a:8:{s:1:\"a\";i:118;s:1:\"b\";s:14:\"View Employees\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:9;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:118;a:8:{s:1:\"a\";i:119;s:1:\"b\";s:16:\"Create Employees\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:9;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:119;a:8:{s:1:\"a\";i:120;s:1:\"b\";s:14:\"Edit Employees\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:9;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:120;a:8:{s:1:\"a\";i:121;s:1:\"b\";s:16:\"Delete Employees\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:9;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:121;a:8:{s:1:\"a\";i:122;s:1:\"b\";s:13:\"View Expenses\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:8;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:122;a:8:{s:1:\"a\";i:123;s:1:\"b\";s:15:\"Create Expenses\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:8;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:123;a:8:{s:1:\"a\";i:124;s:1:\"b\";s:13:\"Edit Expenses\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:8;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:124;a:8:{s:1:\"a\";i:125;s:1:\"b\";s:15:\"Delete Expenses\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:8;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:125;a:8:{s:1:\"a\";i:126;s:1:\"b\";s:18:\"View Car Suppliers\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:10;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:126;a:8:{s:1:\"a\";i:127;s:1:\"b\";s:20:\"Create Car Suppliers\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:10;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:127;a:8:{s:1:\"a\";i:128;s:1:\"b\";s:18:\"Edit Car Suppliers\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:10;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:128;a:8:{s:1:\"a\";i:129;s:1:\"b\";s:20:\"Delete Car Suppliers\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:10;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:129;a:8:{s:1:\"a\";i:130;s:1:\"b\";s:18:\"View Car Contracts\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:10;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:130;a:8:{s:1:\"a\";i:131;s:1:\"b\";s:20:\"Create Car Contracts\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:10;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:131;a:8:{s:1:\"a\";i:132;s:1:\"b\";s:18:\"Edit Car Contracts\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:10;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:132;a:8:{s:1:\"a\";i:133;s:1:\"b\";s:20:\"Delete Car Contracts\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:10;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:133;a:8:{s:1:\"a\";i:134;s:1:\"b\";s:17:\"View Car Expenses\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:10;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:134;a:8:{s:1:\"a\";i:135;s:1:\"b\";s:19:\"Create Car Expenses\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:10;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:135;a:8:{s:1:\"a\";i:136;s:1:\"b\";s:17:\"Edit Car Expenses\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:10;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:136;a:8:{s:1:\"a\";i:137;s:1:\"b\";s:19:\"Delete Car Expenses\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:10;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:137;a:8:{s:1:\"a\";i:138;s:1:\"b\";s:14:\"View Car Tasks\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:10;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:138;a:8:{s:1:\"a\";i:139;s:1:\"b\";s:16:\"Create Car Tasks\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:10;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:139;a:8:{s:1:\"a\";i:140;s:1:\"b\";s:14:\"Edit Car Tasks\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:10;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:140;a:8:{s:1:\"a\";i:141;s:1:\"b\";s:16:\"Delete Car Tasks\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:10;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:141;a:8:{s:1:\"a\";i:142;s:1:\"b\";s:28:\"View Detailed Clients Report\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:11;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:142;a:8:{s:1:\"a\";i:143;s:1:\"b\";s:19:\"View Clients Report\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:11;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:143;a:8:{s:1:\"a\";i:144;s:1:\"b\";s:28:\"View Client Suppliers Report\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:11;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:144;a:8:{s:1:\"a\";i:145;s:1:\"b\";s:26:\"View Booking Groups Report\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:11;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:145;a:8:{s:1:\"a\";i:146;s:1:\"b\";s:26:\"View Extra Services Report\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:11;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:146;a:8:{s:1:\"a\";i:147;s:1:\"b\";s:33:\"View Credit Sales Bookings Report\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:11;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:147;a:8:{s:1:\"a\";i:148;s:1:\"b\";s:20:\"View Expenses Report\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:11;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:148;a:8:{s:1:\"a\";i:149;s:1:\"b\";s:25:\"View Trip Analysis Report\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:11;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:149;a:8:{s:1:\"a\";i:150;s:1:\"b\";s:39:\"View Trip Analysis By Sales Area Report\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:11;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:150;a:8:{s:1:\"a\";i:151;s:1:\"b\";s:24:\"View Car Expenses Report\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:11;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:151;a:8:{s:1:\"a\";i:152;s:1:\"b\";s:22:\"View Car Income Report\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:11;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:152;a:8:{s:1:\"a\";i:153;s:1:\"b\";s:31:\"View Car Income Expenses Report\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:11;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:153;a:8:{s:1:\"a\";i:154;s:1:\"b\";s:36:\"View Car Contracts Due Amount Report\";s:1:\"c\";s:5:\"admin\";s:1:\"d\";N;s:1:\"e\";i:11;s:1:\"f\";N;s:1:\"g\";N;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}}s:5:\"roles\";a:2:{i:0;a:3:{s:1:\"a\";i:1;s:1:\"b\";s:11:\"Super Admin\";s:1:\"c\";s:5:\"admin\";}i:1;a:3:{s:1:\"a\";i:2;s:1:\"b\";s:14:\"Branch Manager\";s:1:\"c\";s:5:\"admin\";}}}', 1744280470);

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
-- Table structure for table `car_contracts`
--

CREATE TABLE `car_contracts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car_supplier_id` bigint(20) UNSIGNED DEFAULT NULL,
  `car_type` varchar(255) DEFAULT NULL,
  `branch_id` bigint(20) UNSIGNED DEFAULT 1,
  `currency_id` bigint(20) UNSIGNED DEFAULT 1,
  `passengers_num` int(11) DEFAULT NULL,
  `license_expiration_date` date DEFAULT NULL,
  `contract_start_date` date DEFAULT NULL,
  `contract_end_date` date DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `total` decimal(8,2) DEFAULT 0.00,
  `paid` decimal(8,2) DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_contracts`
--

INSERT INTO `car_contracts` (`id`, `car_supplier_id`, `car_type`, `branch_id`, `currency_id`, `passengers_num`, `license_expiration_date`, `contract_start_date`, `contract_end_date`, `image`, `notes`, `total`, `paid`, `created_at`, `updated_at`) VALUES
(1, 1, 'هاي اس', 1, 1, 14, '2026-09-22', '2025-03-19', '2025-09-26', NULL, NULL, 100000.00, 25000.00, '2025-03-20 20:09:41', '2025-03-20 20:09:41');

-- --------------------------------------------------------

--
-- Table structure for table `car_expenses`
--

CREATE TABLE `car_expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_expenses`
--

INSERT INTO `car_expenses` (`id`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '2025-03-20 20:10:06', '2025-03-20 20:10:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `car_expenses_translations`
--

CREATE TABLE `car_expenses_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car_expenses_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_expenses_translations`
--

INSERT INTO `car_expenses_translations` (`id`, `car_expenses_id`, `locale`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', 'جاز', '2025-03-27 08:04:03', '2025-03-27 08:04:03');

-- --------------------------------------------------------

--
-- Table structure for table `car_suppliers`
--

CREATE TABLE `car_suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_suppliers`
--

INSERT INTO `car_suppliers` (`id`, `name`, `active`, `created_at`, `updated_at`) VALUES
(1, 'شركة بيست تورز', 1, '2025-03-20 20:08:31', '2025-03-20 20:08:31');

-- --------------------------------------------------------

--
-- Table structure for table `car_tasks`
--

CREATE TABLE `car_tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial_num` varchar(255) DEFAULT NULL,
  `car_contract_id` bigint(20) UNSIGNED DEFAULT NULL,
  `currency_id` bigint(20) UNSIGNED DEFAULT 1,
  `paid` decimal(8,2) DEFAULT 0.00,
  `date` date DEFAULT NULL,
  `total_expenses` decimal(8,2) DEFAULT 0.00,
  `car_income` decimal(8,2) DEFAULT 0.00,
  `notes` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_tasks`
--

INSERT INTO `car_tasks` (`id`, `serial_num`, `car_contract_id`, `currency_id`, `paid`, `date`, `total_expenses`, `car_income`, `notes`, `created_at`, `updated_at`) VALUES
(1, 'شركة بيست تورز-0000000001', 1, 1, 0.00, NULL, 100.00, 84.00, NULL, '2025-03-20 20:13:19', '2025-03-20 20:13:19'),
(2, 'شركة بيست تورز-0000000002', 1, 1, 0.00, '2025-03-31', 0.00, 5000.00, NULL, '2025-03-28 18:38:47', '2025-03-28 18:38:47');

-- --------------------------------------------------------

--
-- Table structure for table `car_task_details`
--

CREATE TABLE `car_task_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car_task_id` bigint(20) UNSIGNED NOT NULL,
  `time` time NOT NULL,
  `from` varchar(255) DEFAULT NULL,
  `to` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_task_details`
--

INSERT INTO `car_task_details` (`id`, `car_task_id`, `time`, `from`, `to`, `created_at`, `updated_at`) VALUES
(1, 2, '17:30:00', 'بورتو', 'ريكسوس', '2025-03-28 18:38:47', '2025-03-28 18:38:47'),
(2, 2, '09:10:00', 'ريكسوس', 'بورتو', '2025-03-28 18:38:47', '2025-03-28 18:38:47');

-- --------------------------------------------------------

--
-- Table structure for table `car_task_expenses`
--

CREATE TABLE `car_task_expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car_task_id` bigint(20) UNSIGNED NOT NULL,
  `car_expenses_id` bigint(20) UNSIGNED NOT NULL,
  `total` decimal(8,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_task_expenses`
--

INSERT INTO `car_task_expenses` (`id`, `car_task_id`, `car_expenses_id`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 100.00, '2025-03-20 20:13:19', '2025-03-20 20:13:19');

-- --------------------------------------------------------

--
-- Table structure for table `chart_of_accounts`
--

CREATE TABLE `chart_of_accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `parent_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chart_of_accounts`
--

INSERT INTO `chart_of_accounts` (`id`, `account_name`, `account_number`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'الاصول', '1', NULL, '2025-04-09 05:02:20', '2025-04-09 05:02:20'),
(2, 'الإلتزامات وصافي الأصول', '2', NULL, '2025-04-09 05:04:22', '2025-04-09 05:04:22'),
(3, 'الإيرادات والتبرعات', '3', NULL, '2025-04-09 05:05:00', '2025-04-09 05:05:00'),
(4, 'المصروفات', '4', NULL, '2025-04-09 05:05:55', '2025-04-09 05:05:55'),
(5, 'الاصول المتداوله', '11', '1', '2025-04-09 05:06:25', '2025-04-09 05:06:25'),
(6, 'الاصول غير المتداوله', '12', '1', '2025-04-09 05:07:08', '2025-04-09 05:07:08'),
(7, 'اصول الاوقاف', '13', '1', '2025-04-09 05:07:25', '2025-04-09 05:07:25'),
(8, 'النقدية وما في حكمها', '111', '5', '2025-04-09 05:07:52', '2025-04-09 05:07:52'),
(9, 'نقدية وودائع في البنوك', '1111', '8', '2025-04-09 05:08:23', '2025-04-09 05:08:23'),
(10, 'حسابات جارية - مصرف الراجحي', '11111', '9', '2025-04-09 05:08:54', '2025-04-09 05:08:54'),
(11, 'مصرف الراجحي-فرع السادة- ح/العام 510000', '111111', '10', '2025-04-09 05:10:21', '2025-04-09 05:10:21'),
(12, 'احد', '121', '6', '2025-04-09 05:11:31', '2025-04-09 05:11:31'),
(13, 'ءئؤ', '6548', '12', '2025-04-09 05:15:10', '2025-04-09 05:15:10');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `national_id` varchar(255) DEFAULT NULL,
  `passport_number` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `phone`, `mobile`, `national_id`, `passport_number`, `country`, `state`, `area`, `city`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'عبدالرحمن', '01148886070', '0100000000', NULL, NULL, 'مصر', NULL, 'الأسكندرية', NULL, 1, '2025-03-04 18:59:53', '2025-03-04 18:59:53', NULL),
(2, 'محمد', '011111111', '022222222', NULL, NULL, 'مصر', NULL, 'القاهرة', NULL, 1, '2025-03-04 19:03:15', '2025-03-04 19:03:15', NULL),
(3, 'محمود احمد', '01141223221', '0', NULL, NULL, 'اليمن', NULL, 'يمن', NULL, 1, '2025-03-24 10:54:52', '2025-03-24 10:54:52', NULL),
(4, 'عبدالرحمن عبدربه', '01004976528', '011115394546', NULL, NULL, 'فلسطين', NULL, 'رفح', NULL, 1, '2025-03-24 10:56:29', '2025-03-24 10:56:29', NULL),
(5, 'هبة محمد توفيق', '01003335314', '01', NULL, NULL, 'مصر', NULL, 'الاسكندرية', NULL, 1, '2025-03-24 10:57:03', '2025-03-24 10:57:03', NULL),
(6, 'معتز فيصل', '01023421240', '096000', NULL, NULL, 'السودان', NULL, 'الخرطوم', NULL, 1, '2025-03-24 11:04:45', '2025-03-24 11:04:45', NULL),
(7, 'عثمان ابو بكر', '01223678806', '960008', NULL, NULL, 'السودان', NULL, 'الخرطوم', NULL, 1, '2025-03-24 11:05:25', '2025-03-24 11:05:25', NULL),
(8, 'ايمان محمد', '01026149109', '01257862563', NULL, NULL, 'مصر', NULL, 'القاهرة', NULL, 1, '2025-03-24 20:16:37', '2025-03-24 20:16:37', NULL),
(9, 'عصام الثقفي', '00966555516864', '00965231851452', NULL, NULL, 'السعودية', NULL, 'مكة', NULL, 1, '2025-03-24 20:51:46', '2025-03-24 20:51:46', NULL),
(10, 'Jouce', '0100000090', '0100000080', NULL, NULL, 'Russia', NULL, 'Russia', NULL, 1, '2025-03-26 20:43:47', '2025-03-26 20:43:47', NULL),
(11, 'زياد', '01119152997', '01229152997', NULL, NULL, 'مصر', NULL, 'القاهرة', NULL, 1, '2025-03-26 20:46:33', '2025-03-26 20:46:33', NULL),
(12, 'شيماء الشواف', '966553399055', '966553399056', NULL, NULL, 'السعودية', NULL, 'مكة', NULL, 1, '2025-03-26 20:52:04', '2025-03-26 20:52:04', NULL),
(13, 'بدر ابو العيله', '96594402139', '96594402138', NULL, NULL, 'الكويت', NULL, 'كويت', NULL, 1, '2025-03-26 20:54:53', '2025-03-26 20:54:53', NULL),
(14, 'نواف العواد', '966552045452', '966552045455', NULL, NULL, 'الكويت', NULL, 'كويت', NULL, 1, '2025-03-26 20:58:32', '2025-03-26 20:58:32', NULL),
(15, 'Nefar', '01111111118', '01111111119', NULL, NULL, 'Russia', NULL, 'Russia', NULL, 1, '2025-03-26 20:59:51', '2025-03-26 20:59:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `client_suppliers`
--

CREATE TABLE `client_suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `value` decimal(8,2) DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_suppliers`
--

INSERT INTO `client_suppliers` (`id`, `name`, `active`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'مندوب', 1, 0.00, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(2, 'شركة سياحة', 1, 0.00, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(3, 'اعلانات', 1, 0.00, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(4, 'مندوب تعاقدات', 1, 0.00, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(5, 'شيماء', 1, 5.00, '2025-03-04 18:55:59', '2025-03-04 18:55:59', NULL),
(6, 'فاطيمة', 1, 3.00, '2025-03-24 10:47:33', '2025-03-24 10:47:33', NULL),
(7, 'محمد جمال', 1, 2.00, '2025-03-24 10:47:43', '2025-03-24 10:47:43', NULL),
(8, 'شروق', 1, 2.00, '2025-03-24 10:47:53', '2025-03-24 10:47:53', NULL),
(9, 'عمر رأفت', 1, 2.00, '2025-03-24 10:48:18', '2025-03-24 10:48:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `client_types`
--

CREATE TABLE `client_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `discount_type` enum('fixed','percentage') NOT NULL DEFAULT 'percentage',
  `discount_value` decimal(8,2) DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_types`
--

INSERT INTO `client_types` (`id`, `active`, `discount_type`, `discount_value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'percentage', 0.00, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(2, 1, 'percentage', 100.00, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(3, 1, 'percentage', 50.00, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(4, 1, 'percentage', 100.00, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(5, 1, 'percentage', 100.00, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(6, 1, 'percentage', 60.00, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(7, 1, 'percentage', 40.00, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(8, 1, 'percentage', 20.00, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `client_type_translations`
--

CREATE TABLE `client_type_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_type_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_type_translations`
--

INSERT INTO `client_type_translations` (`id`, `client_type_id`, `locale`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'en', 'Regular customer (full ticket)', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(2, 1, 'ar', 'عميل عادي (تيكت كامل)', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(3, 2, 'en', 'Free', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(4, 2, 'ar', 'فري', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(5, 3, 'en', 'Half ticket client (under age)', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(6, 3, 'ar', 'عميل نص تكت (تحت سن )', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(7, 4, 'en', 'Poseidon Hospitality', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(8, 4, 'ar', 'ضيافة شركه بوسيدون', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(9, 5, 'en', 'Hospitality of Al Rakia Company', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(10, 5, 'ar', 'ضيافة شركه ع الراكية', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(11, 6, 'en', 'Staff Hitam Hospitality 60%', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(12, 6, 'ar', 'ضيافة ستاف هيتم 60%', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(13, 7, 'en', 'Staff Hitam Hospitality 40%', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(14, 7, 'ar', 'ضيافة ستاف هيتم 40%', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(15, 8, 'en', 'Staff Hitam Hospitality 20%', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(16, 8, 'ar', 'ضيافة ستاف هيتم 20%', '2025-03-03 11:00:28', '2025-03-03 11:00:28');

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `symbol` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `default` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `code`, `symbol`, `color`, `active`, `default`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'EGP', 'E£', '#0162e8', 1, 1, '2025-03-27 08:03:45', '2025-03-27 08:03:45', NULL),
(2, 'USD', '$', '#ee335e', 1, 0, '2025-03-27 08:03:45', '2025-03-27 08:03:45', NULL),
(3, 'SAR', 'SAR', '#fbbc0b', 1, 0, '2025-03-27 08:03:45', '2025-03-27 08:03:45', NULL),
(4, 'EUR', '€', '#22c03c', 1, 0, '2025-03-27 08:03:45', '2025-03-27 08:03:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `currency_translations`
--

CREATE TABLE `currency_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `currency_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currency_translations`
--

INSERT INTO `currency_translations` (`id`, `currency_id`, `locale`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', 'الجنية المصري', '2025-03-27 08:03:45', '2025-03-27 08:03:45'),
(2, 1, 'en', 'Egyptian pound', '2025-03-27 08:03:45', '2025-03-27 08:03:45'),
(3, 2, 'ar', 'الدولار الامريكي', '2025-03-27 08:03:45', '2025-03-27 08:03:45'),
(4, 2, 'en', 'US Dollar', '2025-03-27 08:03:45', '2025-03-27 08:03:45'),
(5, 3, 'en', 'Saudi Riyal', '2025-03-27 08:03:45', '2025-03-27 08:03:45'),
(6, 3, 'ar', 'الريال السعودي', '2025-03-27 08:03:45', '2025-03-27 08:03:45'),
(7, 4, 'en', 'Euro', '2025-03-27 08:03:45', '2025-03-27 08:03:45'),
(8, 4, 'ar', 'يورو', '2025-03-27 08:03:45', '2025-03-27 08:03:45');

-- --------------------------------------------------------

--
-- Table structure for table `employee_card_issuers`
--

CREATE TABLE `employee_card_issuers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_card_issuer_translations`
--

CREATE TABLE `employee_card_issuer_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_card_issuer_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_identity_types`
--

CREATE TABLE `employee_identity_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_identity_types`
--

INSERT INTO `employee_identity_types` (`id`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '2025-03-17 17:14:58', '2025-03-17 17:14:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee_identity_type_translations`
--

CREATE TABLE `employee_identity_type_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_identity_type_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_identity_type_translations`
--

INSERT INTO `employee_identity_type_translations` (`id`, `employee_identity_type_id`, `locale`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', 'مصري', '2025-03-17 17:14:58', '2025-03-17 17:14:58');

-- --------------------------------------------------------

--
-- Table structure for table `employee_marital_status`
--

CREATE TABLE `employee_marital_status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_marital_status`
--

INSERT INTO `employee_marital_status` (`id`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '2025-03-17 17:14:21', '2025-03-17 17:14:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee_marital_status_translations`
--

CREATE TABLE `employee_marital_status_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_marital_status_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_marital_status_translations`
--

INSERT INTO `employee_marital_status_translations` (`id`, `employee_marital_status_id`, `locale`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', 'متزوج', '2025-03-17 17:14:21', '2025-03-17 17:14:21');

-- --------------------------------------------------------

--
-- Table structure for table `employee_nationalities`
--

CREATE TABLE `employee_nationalities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_nationality_translations`
--

CREATE TABLE `employee_nationality_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_nationality_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_religions`
--

CREATE TABLE `employee_religions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_religions`
--

INSERT INTO `employee_religions` (`id`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '2025-03-17 17:13:59', '2025-03-17 17:13:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee_religion_translations`
--

CREATE TABLE `employee_religion_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_religion_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_religion_translations`
--

INSERT INTO `employee_religion_translations` (`id`, `employee_religion_id`, `locale`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', 'مسلم', '2025-03-17 17:13:59', '2025-03-17 17:13:59');

-- --------------------------------------------------------

--
-- Table structure for table `employee_types`
--

CREATE TABLE `employee_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_types`
--

INSERT INTO `employee_types` (`id`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '2025-03-17 17:13:30', '2025-03-17 17:13:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee_type_translations`
--

CREATE TABLE `employee_type_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_type_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_type_translations`
--

INSERT INTO `employee_type_translations` (`id`, `employee_type_id`, `locale`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', 'محاسب', '2025-03-17 17:13:30', '2025-03-17 17:13:30');

-- --------------------------------------------------------

--
-- Table structure for table `entries`
--

CREATE TABLE `entries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `entry_number` varchar(255) NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `account_name2` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `account_number2` varchar(255) NOT NULL,
  `cost_center` varchar(255) NOT NULL,
  `cost_center2` varchar(255) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `reference2` varchar(255) NOT NULL,
  `debit` decimal(10,2) NOT NULL,
  `credit` decimal(10,2) NOT NULL,
  `totel` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `entries`
--

INSERT INTO `entries` (`id`, `date`, `entry_number`, `account_name`, `account_name2`, `account_number`, `account_number2`, `cost_center`, `cost_center2`, `reference`, `reference2`, `debit`, `credit`, `totel`, `created_at`, `updated_at`) VALUES
(1, '2025-04-01', '11', 'احد', '', '121', '', '1', '', '1', '', 50000.00, 0.00, 45000.00, '2025-04-09 10:01:10', '2025-04-09 10:01:10'),
(2, '2025-04-01', '11', 'مصرف الراجحي-فرع السادة- ح/العام 510000', '', '111111', '', '1', '', '1', '', 0.00, 5000.00, 45000.00, '2025-04-09 10:01:10', '2025-04-09 10:01:10'),
(3, '2025-04-01', '1', 'الإيرادات والتبرعات', '', '3', '', '1', '', '1', '', 50000.00, 0.00, 40000.00, '2025-04-09 10:58:58', '2025-04-09 10:58:58'),
(4, '2025-04-01', '1', 'نقدية وودائع في البنوك', '', '1111', '', '1', '', '1', '', 0.00, 10000.00, 40000.00, '2025-04-09 10:58:58', '2025-04-09 10:58:58');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch_id` bigint(20) UNSIGNED DEFAULT NULL,
  `expenses_type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `value` decimal(8,2) DEFAULT NULL,
  `currency_id` bigint(20) UNSIGNED DEFAULT 1,
  `image` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `expense_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `branch_id`, `expenses_type_id`, `value`, `currency_id`, `image`, `note`, `expense_date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 2, 5000.00, 1, NULL, 'ايجار شهر فبراير', '2025-03-01', '2025-03-09 19:37:08', '2025-03-09 19:37:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `expenses_types`
--

CREATE TABLE `expenses_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses_types`
--

INSERT INTO `expenses_types` (`id`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '2025-03-09 19:36:03', '2025-03-09 19:36:03', NULL),
(2, 1, '2025-03-09 19:36:24', '2025-03-09 19:36:24', NULL),
(3, 1, '2025-03-24 10:49:24', '2025-03-24 10:49:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `expenses_type_translations`
--

CREATE TABLE `expenses_type_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `expenses_type_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses_type_translations`
--

INSERT INTO `expenses_type_translations` (`id`, `expenses_type_id`, `locale`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', 'كهرباء', '2025-03-09 19:36:03', '2025-03-09 19:36:03'),
(2, 2, 'ar', 'إيجار', '2025-03-09 19:36:24', '2025-03-09 19:36:24'),
(3, 3, 'ar', 'إكراميات', '2025-03-24 10:49:24', '2025-03-24 10:49:24');

-- --------------------------------------------------------

--
-- Table structure for table `experience_types`
--

CREATE TABLE `experience_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `color` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experience_types`
--

INSERT INTO `experience_types` (`id`, `active`, `color`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '#11d94d', '2025-03-12 08:11:19', '2025-03-12 08:11:19', NULL),
(2, 1, '#0f6aea', '2025-03-12 08:11:28', '2025-03-12 08:11:28', NULL),
(3, 1, '#accc28', '2025-03-12 08:11:40', '2025-03-12 08:11:40', NULL),
(4, 1, '#e56815', '2025-03-12 08:11:51', '2025-03-12 08:11:51', NULL),
(5, 1, '#bf3232', '2025-03-12 08:12:06', '2025-03-12 08:12:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `experience_type_translations`
--

CREATE TABLE `experience_type_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `experience_type_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experience_type_translations`
--

INSERT INTO `experience_type_translations` (`id`, `experience_type_id`, `locale`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', 'ممتاز', '2025-03-12 08:11:19', '2025-03-12 08:11:19'),
(2, 2, 'ar', 'جيد جدا', '2025-03-12 08:11:28', '2025-03-12 08:11:28'),
(3, 3, 'ar', 'جيد', '2025-03-12 08:11:40', '2025-03-12 08:11:40'),
(4, 4, 'ar', 'مقبول', '2025-03-12 08:11:51', '2025-03-12 08:11:51'),
(5, 5, 'ar', 'سيئة', '2025-03-12 08:12:06', '2025-03-12 08:12:06');

-- --------------------------------------------------------

--
-- Table structure for table `extra_services`
--

CREATE TABLE `extra_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `extra_services`
--

INSERT INTO `extra_services` (`id`, `parent_id`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(2, NULL, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(3, NULL, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(4, 3, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(5, 3, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(6, 3, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(7, 3, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(8, 3, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(9, 3, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(10, NULL, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(11, 10, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(12, 10, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `extra_service_translations`
--

CREATE TABLE `extra_service_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `extra_service_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `extra_service_translations`
--

INSERT INTO `extra_service_translations` (`id`, `extra_service_id`, `locale`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'en', 'Meals', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(2, 1, 'ar', 'وجبات', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(3, 2, 'en', 'Photographer', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(4, 2, 'ar', 'التصوير', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(5, 3, 'en', 'Water Games', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(6, 3, 'ar', 'ألعاب مائية', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(7, 4, 'en', 'Banana', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(8, 4, 'ar', 'الموزة', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(9, 5, 'en', 'Tube', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(10, 5, 'ar', 'تيوب', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(11, 6, 'en', 'Donut', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(12, 6, 'ar', 'دونت', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(13, 7, 'en', 'Butterfly', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(14, 7, 'ar', 'الفراشة', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(15, 8, 'en', 'InBoat', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(16, 8, 'ar', 'في المركب', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(17, 9, 'en', 'Delivery', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(18, 9, 'ar', 'توصيل', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(19, 10, 'en', 'Parachute', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(20, 10, 'ar', 'براشوت', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(21, 11, 'en', 'Single', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(22, 11, 'ar', 'فردي', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(23, 12, 'en', 'Double', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(24, 12, 'ar', 'زوجي', '2025-03-03 11:00:28', '2025-03-03 11:00:28');

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
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `feature` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `active_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `title`, `feature`, `description`, `active_at`) VALUES
(1, NULL, 'languages-feature', NULL, '2025-03-03 11:00:27'),
(2, NULL, 'smtp-feature', NULL, '2025-03-03 11:00:27'),
(3, NULL, 'file-manager-feature', NULL, '2025-03-03 11:00:27'),
(4, NULL, 'background-image-feature', NULL, NULL),
(5, NULL, 'branches-feature', NULL, '2025-03-03 11:00:27'),
(6, NULL, 'currencies-feature', NULL, '2025-03-03 11:00:27'),
(7, NULL, 'regions-branches-feature', NULL, NULL),
(8, NULL, 'types-feature', NULL, '2025-03-03 11:00:27'),
(9, NULL, 'firebase-feature', NULL, NULL),
(10, NULL, 'track-financials-feature', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `feed_backs`
--

CREATE TABLE `feed_backs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED DEFAULT NULL,
  `booking_group_id` bigint(20) UNSIGNED DEFAULT NULL,
  `experience_type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `rating` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `service_quality` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `staff_behavior` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `cleanliness` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feed_backs`
--

INSERT INTO `feed_backs` (`id`, `client_id`, `booking_group_id`, `experience_type_id`, `comment`, `rating`, `service_quality`, `staff_behavior`, `cleanliness`, `created_at`, `updated_at`) VALUES
(1, 1, 6, 2, NULL, 5, 4, 4, 3, '2025-03-12 08:16:39', '2025-03-12 08:16:39'),
(2, 2, 4, 2, 'bbbb', 3, 3, 5, 3, '2025-03-13 07:58:43', '2025-03-13 07:58:43'),
(3, 1, 5, 2, 'ابلعهغقبل', 5, 5, 5, 5, '2025-03-16 20:20:43', '2025-03-16 20:20:43');

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE `goods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`id`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(2, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(3, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(4, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `good_suppliers`
--

CREATE TABLE `good_suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `good_translations`
--

CREATE TABLE `good_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `good_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `good_translations`
--

INSERT INTO `good_translations` (`id`, `good_id`, `locale`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'en', 'Grilled', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(2, 1, 'ar', 'مشويات', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(3, 2, 'en', 'Fish', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(4, 2, 'ar', 'أسماك', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(5, 3, 'en', 'Soft drinks', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(6, 3, 'ar', 'مشروبات غازية', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(7, 4, 'en', 'Chickens', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(8, 4, 'ar', 'فراخ', '2025-03-03 11:00:28', '2025-03-03 11:00:28');

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
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `rtl` tinyint(1) NOT NULL DEFAULT 0,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `default` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `code`, `image`, `rtl`, `active`, `default`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'en', 'languages/lang-en.png', 0, 1, 0, '2025-03-27 08:03:45', '2025-03-27 08:03:45', NULL),
(2, 'ar', 'languages/lang-ar.png', 1, 1, 1, '2025-03-27 08:03:45', '2025-03-27 08:03:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `language_translations`
--

CREATE TABLE `language_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `language_translations`
--

INSERT INTO `language_translations` (`id`, `language_id`, `locale`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'en', 'English', '2025-03-27 08:03:45', '2025-03-27 08:03:45'),
(2, 1, 'ar', 'الانجليزية', '2025-03-27 08:03:45', '2025-03-27 08:03:45'),
(3, 2, 'en', 'Arabic', '2025-03-27 08:03:45', '2025-03-27 08:03:45'),
(4, 2, 'ar', 'العربية', '2025-03-27 08:03:45', '2025-03-27 08:03:45');

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
(4, '2024_09_03_072835_create_features_table', 1),
(5, '2024_10_16_190841_create_permission_tables', 1),
(6, '2024_10_16_190842_create_permission_groups_table', 1),
(7, '2024_10_16_190843_create_permission_group_translations_table', 1),
(8, '2024_10_16_190845_create_permission_translations_table', 1),
(9, '2024_10_16_190850_add_group_id_to_permissions_table', 1),
(10, '2024_10_17_091023_create_admins_table', 1),
(11, '2024_10_17_091055_create_admin_password_reset_tokens', 1),
(12, '2024_11_01_190359_create_languages_table', 1),
(13, '2024_11_01_190907_create_language_translations_table', 1),
(14, '2024_11_11_091916_create_settings_table', 1),
(15, '2024_11_11_092011_create_setting_translations_table', 1),
(16, '2024_11_21_063425_create_regions_table', 1),
(17, '2024_11_21_063807_create_region_translations_table', 1),
(18, '2024_11_26_111322_create_client_suppliers_table', 1),
(19, '2024_11_26_111322_create_types_table', 1),
(20, '2024_11_26_111853_create_client_supplier_translations_table', 1),
(21, '2024_11_26_111853_create_type_translations_table', 1),
(22, '2025_02_07_144740_create_branches_table', 1),
(23, '2025_02_07_144806_create_branch_translation_table', 1),
(24, '2025_02_07_144856_add_region_branch_in_admins_table', 1),
(25, '2025_02_09_220518_create_currencies_table', 1),
(26, '2025_02_09_220626_create_currency_translations_table', 1),
(27, '2025_02_10_171048_create_goods_table', 1),
(28, '2025_02_10_180812_create_good_translations_table', 1),
(29, '2025_02_10_191711_create_setting_jobs_table', 1),
(30, '2025_02_10_191842_create_setting_job_translations_table', 1),
(31, '2025_02_10_204130_add_setting_job_id_in_admins_table', 1),
(32, '2025_02_10_210818_create_payment_methods_table', 1),
(33, '2025_02_10_210847_create_payment_method_translations_table', 1),
(34, '2025_02_10_214714_create_client_types_table', 1),
(35, '2025_02_10_214753_create_client_type_translations_table', 1),
(36, '2025_02_10_222527_create_sailing_boats_table', 1),
(37, '2025_02_10_222601_create_sailing_boat_translations_table', 1),
(38, '2025_02_10_235801_create_good_suppliers_table', 1),
(39, '2025_02_11_013928_create_clients_table', 1),
(40, '2025_02_11_122242_create_bookings_table', 1),
(41, '2025_02_11_122333_create_booking_groups_table', 1),
(42, '2025_02_11_124246_create_booking_group_members_table', 1),
(43, '2025_02_11_124903_create_booking_group_payments_table', 1),
(44, '2025_02_12_131111_create_extra_services_table', 1),
(45, '2025_02_12_131251_create_extra_service_translations_table', 1),
(46, '2025_02_12_143508_create_booking_group_services_table', 1),
(47, '2025_02_12_143666_create_booking_group_service_payments_table', 1),
(48, '2025_02_22_141422_create_account_types_table', 1),
(49, '2025_02_22_153954_create_account_type_translations_table', 1),
(50, '2025_02_23_143632_create_accounts_table', 1),
(51, '2025_02_23_144013_create_account_translations_table', 1),
(52, '2024_12_05_075818_create_expenses_types_table', 2),
(53, '2024_12_05_080652_create_expenses_type_translations_table', 2),
(54, '2024_12_16_091341_create_expenses_table', 2),
(55, '2025_03_08_121242_add_credit_sales_column_in_booking_groups_table', 2),
(56, '2024_12_04_183322_create_experience_types_table', 3),
(57, '2024_12_04_183340_create_experience_types_translations_table', 3),
(58, '2025_03_10_153005_create_feed_backs_table', 3),
(59, '2025_03_10_100401_create_employee_types_table', 4),
(60, '2025_03_10_100438_create_employee_type_translations_table', 4),
(61, '2025_03_10_124945_create_employee_nationalities_table', 4),
(62, '2025_03_10_125135_create_employee_nationality_translations_table', 4),
(63, '2025_03_10_201856_create_employee_religions_table', 4),
(64, '2025_03_10_201959_create_employee_religion_translations_table', 4),
(65, '2025_03_10_210421_create_employee_marital_status_table', 4),
(66, '2025_03_10_210507_create_employee_marital_status_translations_table', 4),
(67, '2025_03_10_210534_create_employee_identity_types_table', 4),
(68, '2025_03_10_210602_create_employee_identity_type_translations_table', 4),
(69, '2025_03_11_071328_create_employee_card_issuers_table', 4),
(70, '2025_03_11_071357_create_employee_card_issuer_translations_table', 4),
(71, '2025_03_11_084651_add_employee_details_to_admins_table', 4),
(72, '2025_03_16_084151_add_supplier_type_to_column_booking_groups_table', 5),
(73, '2025_03_17_060700_drop_client_supplier_translations_table', 5),
(74, '2025_03_17_112234_add_currency_id_in_expenses_table', 6),
(75, '2025_03_19_084919_add_branch_id_in_expenses_table', 7),
(76, '2025_03_16_123646_create_car_suppliers_table', 8),
(77, '2025_03_17_082818_create_car_contracts_table', 8),
(78, '2025_03_18_071642_create_car_tasks_table', 8),
(79, '2025_03_18_080536_create_car_expenses_table', 8),
(81, '2025_03_18_124111_create_car_task_expenses_table', 8),
(82, '2025_03_23_095635_add_branch_id_and_currency_id_in_car_contracts_table', 9),
(83, '2025_03_26_082928_create_sales_areas_table', 9),
(84, '2025_03_26_084147_create_sales_area_translations_table', 9),
(85, '2025_03_26_115747_add_sales_area_id_column_in_booking_groups_table', 9),
(86, '2025_03_18_080622_create_car_expenses_translations_table', 10),
(87, '2025_03_25_131649_update_car_tasks_table', 10),
(88, '2025_03_26_093507_create_car_task_details_table', 10),
(89, '2025_03_24_225145_create_entries_table', 11),
(90, '2025_03_24_225146_create_chart_of_accounts_table', 11),
(91, '2025_03_26_222018_add_chart_of_account_id_to_entries_table', 11),
(92, '2025_03_24_225145_create_entries_table copy', 12),
(93, '2025_03_24_225146_create_chart_of_accounts_table copy', 12),
(94, '2025_03_26_222018_add_chart_of_account_id_to_entries_table copy', 12),
(95, '2025_03_26_222019_create_type_of_restriction_table', 12),
(96, '2025_04_08_145213_modify_account_number_unique_constraint_in_chart_of_accounts_table', 12),
(97, '2023_11_20_remove_chart_of_account_id_from_entries', 13);

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
(1, 'Modules\\AdminRoleAuthModule\\Models\\Admin', 1),
(2, 'Modules\\AdminRoleAuthModule\\Models\\Admin', 2);

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
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(2, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(3, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payment_method_translations`
--

CREATE TABLE `payment_method_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_method_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_method_translations`
--

INSERT INTO `payment_method_translations` (`id`, `payment_method_id`, `locale`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'en', 'Instapay', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(2, 1, 'ar', 'انستاباي', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(3, 2, 'en', 'Visa', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(4, 2, 'ar', 'فيزا', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(5, 3, 'en', 'Cash', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(6, 3, 'ar', 'كاش', '2025-03-03 11:00:28', '2025-03-03 11:00:28');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `permission_order` int(11) DEFAULT NULL,
  `permission_group_id` bigint(20) UNSIGNED DEFAULT NULL,
  `permission_icon` varchar(255) DEFAULT NULL,
  `permission_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `permission_order`, `permission_group_id`, `permission_icon`, `permission_url`, `created_at`, `updated_at`) VALUES
(1, 'View Dashboard', 'admin', NULL, NULL, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(2, 'View Admins', 'admin', NULL, 1, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(3, 'Create Admins', 'admin', NULL, 1, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(4, 'Edit Admins', 'admin', NULL, 1, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(5, 'Delete Admins', 'admin', NULL, 1, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(6, 'View Admin Roles', 'admin', NULL, 1, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(7, 'Create Admin Roles', 'admin', NULL, 1, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(8, 'Edit Admin Roles', 'admin', NULL, 1, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(9, 'Delete Admin Roles', 'admin', NULL, 1, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(10, 'View Site Settings', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(11, 'Edit Site Settings', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(12, 'View Languages', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(13, 'Create Languages', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(14, 'Edit Languages', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(15, 'Delete Languages', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(16, 'View SMTP Settings', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(17, 'Edit SMTP Settings', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(18, 'View Branches', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(19, 'Create Branches', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(20, 'Edit Branches', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(21, 'Delete Branches', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(22, 'View Types', 'admin', NULL, 4, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(23, 'Create Types', 'admin', NULL, 4, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(24, 'Edit Types', 'admin', NULL, 4, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(25, 'Delete Types', 'admin', NULL, 4, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(26, 'View Currencies', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(27, 'Create Currencies', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(28, 'Edit Currencies', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(29, 'Delete Currencies', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(30, 'View File Manager', 'admin', NULL, 3, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(31, 'View Sales Areas', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(32, 'Create Sales Areas', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(33, 'Edit Sales Areas', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(34, 'Delete Sales Areas', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(35, 'View Client Suppliers', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(36, 'Create Client Suppliers', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(37, 'Edit Client Suppliers', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(38, 'Delete Client Suppliers', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(39, 'View Goods', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(40, 'Create Goods', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(41, 'Edit Goods', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(42, 'Delete Goods', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(43, 'View Jobs', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(44, 'Create Jobs', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(45, 'Edit Jobs', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(46, 'Delete Jobs', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(47, 'View Payment Methods', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(48, 'Create Payment Methods', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(49, 'Edit Payment Methods', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(50, 'Delete Payment Methods', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(51, 'View Client Types', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(52, 'Create Client Types', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(53, 'Edit Client Types', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(54, 'Delete Client Types', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(55, 'View Sailing Boats', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(56, 'Create Sailing Boats', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(57, 'Edit Sailing Boats', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(58, 'Delete Sailing Boats', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(59, 'View Goods Suppliers', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(60, 'Create Goods Suppliers', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(61, 'Edit Goods Suppliers', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(62, 'Delete Goods Suppliers', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(63, 'View Expenses Types', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(64, 'Create Expenses Types', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(65, 'Edit Expenses Types', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(66, 'Delete Expenses Types', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(67, 'View Experience Types', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(68, 'Create Experience Types', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(69, 'Edit Experience Types', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(70, 'Delete Experience Types', 'admin', NULL, 2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(71, 'View Clients', 'admin', NULL, 5, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(72, 'Create Clients', 'admin', NULL, 5, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(73, 'Edit Clients', 'admin', NULL, 5, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(74, 'Delete Clients', 'admin', NULL, 5, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(75, 'View FeedBacks', 'admin', NULL, 5, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(76, 'Create FeedBacks', 'admin', NULL, 5, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(77, 'Edit FeedBacks', 'admin', NULL, 5, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(78, 'Delete FeedBacks', 'admin', NULL, 5, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(79, 'View Bookings', 'admin', NULL, 6, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(80, 'Create Bookings', 'admin', NULL, 6, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(81, 'Edit Bookings', 'admin', NULL, 6, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(82, 'Delete Bookings', 'admin', NULL, 6, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(83, 'Create Booking Groups', 'admin', NULL, 6, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(84, 'Edit Booking Groups', 'admin', NULL, 6, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(85, 'Delete Booking Groups', 'admin', NULL, 6, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(86, 'View Extra Services', 'admin', NULL, 7, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(87, 'Create Extra Services', 'admin', NULL, 7, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(88, 'Edit Extra Services', 'admin', NULL, 7, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(89, 'Delete Extra Services', 'admin', NULL, 7, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(90, 'View Booking Extra Services', 'admin', NULL, 7, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(91, 'Create Booking Extra Services', 'admin', NULL, 7, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(92, 'Edit Booking Extra Services', 'admin', NULL, 7, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(93, 'Delete Booking Extra Services', 'admin', NULL, 7, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(94, 'View Employee Types', 'admin', NULL, 9, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(95, 'Create Employee Types', 'admin', NULL, 9, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(96, 'Edit Employee Types', 'admin', NULL, 9, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(97, 'Delete Employee Types', 'admin', NULL, 9, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(98, 'View Employee Nationalities', 'admin', NULL, 9, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(99, 'Create Employee Nationalities', 'admin', NULL, 9, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(100, 'Edit Employee Nationalities', 'admin', NULL, 9, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(101, 'Delete Employee Nationalities', 'admin', NULL, 9, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(102, 'View Employee Religions', 'admin', NULL, 9, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(103, 'Create Employee Religions', 'admin', NULL, 9, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(104, 'Edit Employee Religions', 'admin', NULL, 9, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(105, 'Delete Employee Religions', 'admin', NULL, 9, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(106, 'View Employee Marital Status', 'admin', NULL, 9, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(107, 'Create Employee Marital Status', 'admin', NULL, 9, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(108, 'Edit Employee Marital Status', 'admin', NULL, 9, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(109, 'Delete Employee Marital Status', 'admin', NULL, 9, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(110, 'View Employee Identity Types', 'admin', NULL, 9, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(111, 'Create Employee Identity Types', 'admin', NULL, 9, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(112, 'Edit Employee Identity Types', 'admin', NULL, 9, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(113, 'Delete Employee Identity Types', 'admin', NULL, 9, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(114, 'View Employee Card Issuers', 'admin', NULL, 9, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(115, 'Create Employee Card Issuers', 'admin', NULL, 9, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(116, 'Edit Employee Card Issuers', 'admin', NULL, 9, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(117, 'Delete Employee Card Issuers', 'admin', NULL, 9, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(118, 'View Employees', 'admin', NULL, 9, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(119, 'Create Employees', 'admin', NULL, 9, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(120, 'Edit Employees', 'admin', NULL, 9, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(121, 'Delete Employees', 'admin', NULL, 9, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(122, 'View Expenses', 'admin', NULL, 8, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(123, 'Create Expenses', 'admin', NULL, 8, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(124, 'Edit Expenses', 'admin', NULL, 8, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(125, 'Delete Expenses', 'admin', NULL, 8, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(126, 'View Car Suppliers', 'admin', NULL, 10, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(127, 'Create Car Suppliers', 'admin', NULL, 10, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(128, 'Edit Car Suppliers', 'admin', NULL, 10, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(129, 'Delete Car Suppliers', 'admin', NULL, 10, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(130, 'View Car Contracts', 'admin', NULL, 10, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(131, 'Create Car Contracts', 'admin', NULL, 10, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(132, 'Edit Car Contracts', 'admin', NULL, 10, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(133, 'Delete Car Contracts', 'admin', NULL, 10, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(134, 'View Car Expenses', 'admin', NULL, 10, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(135, 'Create Car Expenses', 'admin', NULL, 10, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(136, 'Edit Car Expenses', 'admin', NULL, 10, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(137, 'Delete Car Expenses', 'admin', NULL, 10, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(138, 'View Car Tasks', 'admin', NULL, 10, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(139, 'Create Car Tasks', 'admin', NULL, 10, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(140, 'Edit Car Tasks', 'admin', NULL, 10, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(141, 'Delete Car Tasks', 'admin', NULL, 10, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(142, 'View Detailed Clients Report', 'admin', NULL, 11, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(143, 'View Clients Report', 'admin', NULL, 11, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(144, 'View Client Suppliers Report', 'admin', NULL, 11, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(145, 'View Booking Groups Report', 'admin', NULL, 11, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(146, 'View Extra Services Report', 'admin', NULL, 11, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(147, 'View Credit Sales Bookings Report', 'admin', NULL, 11, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(148, 'View Expenses Report', 'admin', NULL, 11, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(149, 'View Trip Analysis Report', 'admin', NULL, 11, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(150, 'View Trip Analysis By Sales Area Report', 'admin', NULL, 11, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(151, 'View Car Expenses Report', 'admin', NULL, 11, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(152, 'View Car Income Report', 'admin', NULL, 11, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(153, 'View Car Income Expenses Report', 'admin', NULL, 11, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(154, 'View Car Contracts Due Amount Report', 'admin', NULL, 11, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44');

-- --------------------------------------------------------

--
-- Table structure for table `permission_groups`
--

CREATE TABLE `permission_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_order` int(11) DEFAULT NULL,
  `group_icon` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_groups`
--

INSERT INTO `permission_groups` (`id`, `group_order`, `group_icon`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(2, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(3, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(4, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(5, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(6, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(7, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(8, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(9, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(10, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(11, NULL, NULL, '2025-03-27 08:03:44', '2025-03-27 08:03:44');

-- --------------------------------------------------------

--
-- Table structure for table `permission_group_translations`
--

CREATE TABLE `permission_group_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `permission_group_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_group_translations`
--

INSERT INTO `permission_group_translations` (`id`, `permission_group_id`, `locale`, `group_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', 'المستخدمين والصلاحيات', '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(2, 1, 'en', 'Users and Permissions', '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(3, 2, 'ar', 'إعدادات عامة', '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(4, 2, 'en', 'General Settings', '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(5, 3, 'ar', 'إدارة الملفات', '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(6, 3, 'en', 'File Manager', '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(7, 4, 'ar', 'إدارة الخدمات البحرية', '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(8, 4, 'en', 'Services Management', '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(9, 5, 'ar', 'إدارة العملاء', '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(10, 5, 'en', 'Clients Management', '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(11, 6, 'ar', 'إدارة الحجوزات', '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(12, 6, 'en', 'Bookings Management', '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(13, 7, 'ar', 'إدارة الخدمات الإضافية', '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(14, 7, 'en', 'Extra Services Management', '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(15, 8, 'ar', 'إدارة المالية', '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(16, 8, 'en', 'Financial Management', '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(17, 9, 'ar', 'إدارة الموظفين', '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(18, 9, 'en', 'Eemployee Management', '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(19, 10, 'ar', 'إدارة السيارات', '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(20, 10, 'en', 'Car Management', '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(21, 11, 'ar', 'التقارير والإحصائيات', '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(22, 11, 'en', 'Reports & Statistics', '2025-03-27 08:03:44', '2025-03-27 08:03:44');

-- --------------------------------------------------------

--
-- Table structure for table `permission_translations`
--

CREATE TABLE `permission_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `permission_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Super Admin', 'admin', NULL, NULL),
(2, 'Branch Manager', 'admin', NULL, NULL);

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
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(5, 2),
(6, 1),
(6, 2),
(7, 1),
(7, 2),
(8, 1),
(8, 2),
(9, 1),
(9, 2),
(10, 1),
(10, 2),
(11, 1),
(11, 2),
(12, 1),
(12, 2),
(13, 1),
(13, 2),
(14, 1),
(14, 2),
(15, 1),
(15, 2),
(16, 1),
(16, 2),
(17, 1),
(17, 2),
(18, 1),
(18, 2),
(19, 1),
(19, 2),
(20, 1),
(20, 2),
(21, 1),
(21, 2),
(22, 1),
(22, 2),
(23, 1),
(23, 2),
(24, 1),
(24, 2),
(25, 1),
(25, 2),
(26, 1),
(26, 2),
(27, 1),
(27, 2),
(28, 1),
(28, 2),
(29, 1),
(29, 2),
(30, 1),
(30, 2),
(31, 1),
(31, 2),
(32, 1),
(32, 2),
(33, 1),
(33, 2),
(34, 1),
(34, 2),
(35, 1),
(35, 2),
(36, 1),
(36, 2),
(37, 1),
(37, 2),
(38, 1),
(38, 2),
(39, 1),
(39, 2),
(40, 1),
(40, 2),
(41, 1),
(41, 2),
(42, 1),
(42, 2),
(43, 1),
(43, 2),
(44, 1),
(44, 2),
(45, 1),
(45, 2),
(46, 1),
(46, 2),
(47, 1),
(47, 2),
(48, 1),
(48, 2),
(49, 1),
(49, 2),
(50, 1),
(50, 2),
(51, 1),
(51, 2),
(52, 1),
(52, 2),
(53, 1),
(53, 2),
(54, 1),
(54, 2),
(55, 1),
(55, 2),
(56, 1),
(56, 2),
(57, 1),
(57, 2),
(58, 1),
(58, 2),
(59, 1),
(59, 2),
(60, 1),
(60, 2),
(61, 1),
(61, 2),
(62, 1),
(62, 2),
(63, 1),
(63, 2),
(64, 1),
(64, 2),
(65, 1),
(65, 2),
(66, 1),
(66, 2),
(67, 1),
(67, 2),
(68, 1),
(68, 2),
(69, 1),
(69, 2),
(70, 1),
(70, 2),
(71, 1),
(71, 2),
(72, 1),
(72, 2),
(73, 1),
(73, 2),
(74, 1),
(74, 2),
(75, 1),
(75, 2),
(76, 1),
(76, 2),
(77, 1),
(77, 2),
(78, 1),
(78, 2),
(79, 1),
(79, 2),
(80, 1),
(80, 2),
(81, 1),
(81, 2),
(82, 1),
(82, 2),
(83, 1),
(83, 2),
(84, 1),
(84, 2),
(85, 1),
(85, 2),
(86, 1),
(86, 2),
(87, 1),
(87, 2),
(88, 1),
(88, 2),
(89, 1),
(89, 2),
(90, 1),
(90, 2),
(91, 1),
(91, 2),
(92, 1),
(92, 2),
(93, 1),
(93, 2),
(94, 1),
(94, 2),
(95, 1),
(95, 2),
(96, 1),
(96, 2),
(97, 1),
(97, 2),
(98, 1),
(98, 2),
(99, 1),
(99, 2),
(100, 1),
(100, 2),
(101, 1),
(101, 2),
(102, 1),
(102, 2),
(103, 1),
(103, 2),
(104, 1),
(104, 2),
(105, 1),
(105, 2),
(106, 1),
(106, 2),
(107, 1),
(107, 2),
(108, 1),
(108, 2),
(109, 1),
(109, 2),
(110, 1),
(110, 2),
(111, 1),
(111, 2),
(112, 1),
(112, 2),
(113, 1),
(113, 2),
(114, 1),
(114, 2),
(115, 1),
(115, 2),
(116, 1),
(116, 2),
(117, 1),
(117, 2),
(118, 1),
(118, 2),
(119, 1),
(119, 2),
(120, 1),
(120, 2),
(121, 1),
(121, 2),
(122, 1),
(122, 2),
(123, 1),
(123, 2),
(124, 1),
(124, 2),
(125, 1),
(125, 2),
(126, 1),
(126, 2),
(127, 1),
(127, 2),
(128, 1),
(128, 2),
(129, 1),
(129, 2),
(130, 1),
(130, 2),
(131, 1),
(131, 2),
(132, 1),
(132, 2),
(133, 1),
(133, 2),
(134, 1),
(134, 2),
(135, 1),
(135, 2),
(136, 1),
(136, 2),
(137, 1),
(137, 2),
(138, 1),
(138, 2),
(139, 1),
(139, 2),
(140, 1),
(140, 2),
(141, 1),
(141, 2),
(142, 1),
(142, 2),
(143, 1),
(143, 2),
(144, 1),
(144, 2),
(145, 1),
(145, 2),
(146, 1),
(146, 2),
(147, 1),
(147, 2),
(148, 1),
(148, 2),
(149, 1),
(149, 2),
(150, 1),
(150, 2),
(151, 1),
(151, 2),
(152, 1),
(152, 2),
(153, 1),
(153, 2),
(154, 1),
(154, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sailing_boats`
--

CREATE TABLE `sailing_boats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch_id` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sailing_boats`
--

INSERT INTO `sailing_boats` (`id`, `branch_id`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(2, 2, 1, '2025-03-03 11:00:28', '2025-03-03 11:00:28', NULL),
(3, 1, 1, '2025-03-24 10:48:48', '2025-03-24 10:48:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sailing_boat_translations`
--

CREATE TABLE `sailing_boat_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sailing_boat_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sailing_boat_translations`
--

INSERT INTO `sailing_boat_translations` (`id`, `sailing_boat_id`, `locale`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'en', 'Classic', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(2, 1, 'ar', 'كلاسيك ', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(3, 2, 'en', 'Sailing Boat 2', '2025-03-03 11:00:28', '2025-03-03 11:00:28'),
(4, 2, 'ar', 'قادر', '2025-03-03 11:00:28', '2025-03-24 10:48:41'),
(5, 3, 'ar', 'سي 2', '2025-03-24 10:48:48', '2025-03-24 10:48:48');

-- --------------------------------------------------------

--
-- Table structure for table `sales_areas`
--

CREATE TABLE `sales_areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch_id` bigint(20) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales_areas`
--

INSERT INTO `sales_areas` (`id`, `branch_id`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 1, '2025-03-27 08:04:22', '2025-03-27 08:04:22', NULL),
(2, 3, 1, '2025-03-27 08:04:26', '2025-03-27 08:04:32', NULL),
(3, 2, 1, '2025-03-27 08:04:38', '2025-03-27 08:04:38', NULL),
(4, 1, 1, '2025-03-27 08:04:48', '2025-03-27 08:04:48', NULL),
(5, 1, 1, '2025-03-27 08:04:54', '2025-03-27 08:04:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sales_area_translations`
--

CREATE TABLE `sales_area_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sales_area_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales_area_translations`
--

INSERT INTO `sales_area_translations` (`id`, `sales_area_id`, `locale`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', 'منطقة بيع 1', '2025-03-27 08:04:22', '2025-03-27 08:04:22'),
(2, 2, 'ar', 'منطقة بيع 2', '2025-03-27 08:04:26', '2025-03-27 08:04:26'),
(3, 3, 'ar', 'منطقة بيع 3', '2025-03-27 08:04:38', '2025-03-27 08:04:38'),
(4, 4, 'ar', 'منطقة بيع 4', '2025-03-27 08:04:48', '2025-03-27 08:04:48'),
(5, 5, 'ar', 'منطقة بيع 5', '2025-03-27 08:04:54', '2025-03-27 08:04:54');

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
('0DIlZSD7JaUVHYiIPyfg1W6htEtWxRTnR7c3uCMG', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo5OntzOjY6Il90b2tlbiI7czo0MDoicVI3ZUx2QXpRY2dWak5TU1VEUlk2QW9GVnl6NUM4RzVMMWFLYnpvdCI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjY0OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYWRtaW4vYWRtaW4vYWNjb3VudGluZy1kZXBhcnRtZW50L2FjY291bnRzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjUyOiJsb2dpbl9hZG1pbl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzQ0MjA0ODY5O31zOjY6ImxvY2FsZSI7czoyOiJhciI7czozOiJydGwiO2k6MTt9', 1744203569),
('llS3volDJo6IPPCCMwJkd52kbSKtCaZRotyFVR77', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiS1N0czM5c0hTOWQ0MG9GYUMxdXNGNHBEVURqamNNRGNHa3NzaXlpeCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo2NDoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWluL2FkbWluL2FjY291bnRpbmctZGVwYXJ0bWVudC9hY2NvdW50cyI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMzOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYWRtaW4vbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjE4OiJmbGFzaGVyOjplbnZlbG9wZXMiO2E6MDp7fX0=', 1744197950);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'text',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `type`, `created_at`, `updated_at`) VALUES
(1, 'site_logo', 'image', '2025-03-27 08:03:45', '2025-03-27 08:03:45'),
(2, 'site_icon', 'image', '2025-03-27 08:03:45', '2025-03-27 08:03:45'),
(3, 'site_name', 'text', '2025-03-27 08:03:45', '2025-03-27 08:03:45'),
(4, 'site_keywords', 'fixed', '2025-03-27 08:03:45', '2025-03-27 08:03:45'),
(5, 'site_description', 'text', '2025-03-27 08:03:45', '2025-03-27 08:03:45');

-- --------------------------------------------------------

--
-- Table structure for table `setting_jobs`
--

CREATE TABLE `setting_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting_jobs`
--

INSERT INTO `setting_jobs` (`id`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '2025-03-27 08:03:44', '2025-03-27 08:03:44', NULL),
(2, 1, '2025-03-27 08:03:44', '2025-03-27 08:03:44', NULL),
(3, 1, '2025-03-27 08:03:44', '2025-03-27 08:03:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `setting_job_translations`
--

CREATE TABLE `setting_job_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `setting_job_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting_job_translations`
--

INSERT INTO `setting_job_translations` (`id`, `setting_job_id`, `locale`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'en', 'Representative', '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(2, 1, 'ar', 'مندوب', '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(3, 2, 'en', 'Accountant', '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(4, 2, 'ar', 'محاسب', '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(5, 3, 'en', 'Employee', '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(6, 3, 'ar', 'موظف', '2025-03-27 08:03:44', '2025-03-27 08:03:44');

-- --------------------------------------------------------

--
-- Table structure for table `setting_translations`
--

CREATE TABLE `setting_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `setting_id` bigint(20) UNSIGNED DEFAULT NULL,
  `locale` varchar(255) NOT NULL,
  `value` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting_translations`
--

INSERT INTO `setting_translations` (`id`, `setting_id`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', 'logo/logo.png', '2025-03-27 08:03:45', '2025-03-27 08:03:45'),
(2, 2, 'ar', 'logo/icon.png', '2025-03-27 08:03:45', '2025-03-27 08:03:45'),
(3, 3, 'ar', 'شركة بوسيدون للأنشطة البحرية', '2025-03-27 08:03:45', '2025-03-27 08:03:45'),
(4, 3, 'en', 'Poseidon', '2025-03-27 08:03:45', '2025-03-27 08:03:45'),
(5, 4, 'ar', 'Poseidon, snorkeling, swimming, sailing', '2025-03-27 08:03:45', '2025-03-27 08:03:45'),
(6, 5, 'ar', 'في بوسيدون، لدينا شغف كبير لخلق لحظات لا تنسى، اعتدنا على تقديم السعادة لأكثر من 15 عامًا. رحلاتنا عبارة عن حزمة من المرح والهدوء والذكريات، فهل أنت مستعد؟ تبدأ رحلتنا البحرية بالإبحار في بحيرة مارينا مع مرشدنا السياحي الذي يقدم لنا كيف أصبحت مارينا واحدة من أجمل الوجهات المذهلة في مصر. هل أنت مستعد للسباحة؟ لقد حان وقتك للاستمتاع بمياه البحر الصافية ولكن ضع في اعتبارك أن سلامتك تأتي أولاً، لذلك ستكون تحت إشراف مرشد الغطس المحترف لدينا. ولإضافة المزيد من الإثارة والمتعة إلى الرحلة، فإن الرياضات المائية جاهزة لك مثل قارب الموز والأريكة والجيت سكي. يلي ذلك الرياضات المائية، يسعدنا أن نقدم لك بوفيه مفتوح أعده رئيس الطهاة لدينا. بعد تناول الغداء، نختتم المتعة وتنتهي الرحلة بسعادة.. كما ذكرنا، فإن المهمة الرئيسية لبوسيدون هي تقديم السعادة، لذلك نقدم العديد من المنتجات الفريدة على متن السفينة ونوفر مصورًا محترفًا لخدمتك. تتمنى لكم شركة بوسيدون إقامة طيبة في مصر ورحلة لا تنسى وتخبر بها الجميع. حافظوا على سلامتكم، ومرحبًا بكم دائمًا لزيارة مصر مرة أخرى.', '2025-03-27 08:03:45', '2025-03-27 08:03:45'),
(7, 5, 'en', 'In Poseidon we have a great passion to create joyful memorable moments, we used to deliver  happiness more than 15 years. Our trips are a bundle of fun, tranquility, and memories, So are you ready? Our sea cruise starts with sailing in Marina Lake with our tour guide introducing how Marina became one of the most beautiful and amazing destinations in Egypt. Are you ready for swimming? It’s your time to enjoy the crystal-clear seawater but keep in mind that your safety comes first, so you will be under the supervision of our professional snorkeling guide. Adding more spice and fun to the trip, water sports are ready for you such as Banana-boat, Sofa, and Jetski. Followed by water sport it’s our pleasure to serve you an open buffet prepared by our professional chef. After having lunch, we wrap up the enjoyment and the trip happily ends.. As mentioned Poseidon’s main mission is to deliver happiness, so we are serving many unique products aboard and we  provide  a professional photographer at  your service. Poseidon wishes you a  nice stay in Egypt and a trip to remember and tell everyone about. Stay safe and you’re always welcomed to visit Egypt again.', '2025-03-27 08:03:45', '2025-03-27 08:03:45');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '2025-03-27 08:03:44', '2025-03-27 08:03:44', NULL),
(2, 1, '2025-03-27 08:03:44', '2025-03-27 08:03:44', NULL),
(3, 1, '2025-03-27 08:03:44', '2025-03-27 08:03:44', NULL),
(4, 1, '2025-03-27 08:03:44', '2025-03-27 08:03:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `type_of_restriction`
--

CREATE TABLE `type_of_restriction` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `restriction_type` varchar(255) NOT NULL,
  `entry_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_of_restriction`
--

INSERT INTO `type_of_restriction` (`id`, `restriction_type`, `entry_id`, `created_at`, `updated_at`) VALUES
(1, '2-قيد يومية', 1, '2025-04-09 10:01:10', '2025-04-09 10:01:10'),
(2, '2-قيد يومية', 2, '2025-04-09 10:01:10', '2025-04-09 10:01:10'),
(3, '4-قيد تسوية', 3, '2025-04-09 10:58:58', '2025-04-09 10:58:58'),
(4, '4-قيد تسوية', 4, '2025-04-09 10:58:58', '2025-04-09 10:58:58');

-- --------------------------------------------------------

--
-- Table structure for table `type_translations`
--

CREATE TABLE `type_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_translations`
--

INSERT INTO `type_translations` (`id`, `type_id`, `locale`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'en', 'Fishing', '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(2, 1, 'ar', 'صيد', '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(3, 2, 'en', 'Full day morning', '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(4, 2, 'ar', 'يوم كامل صباحي', '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(5, 3, 'en', 'Sunrise', '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(6, 3, 'ar', 'شروق شمس', '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(7, 4, 'en', 'Full day evening', '2025-03-27 08:03:44', '2025-03-27 08:03:44'),
(8, 4, 'ar', 'يوم كامل مسائي', '2025-03-27 08:03:44', '2025-03-27 08:03:44');

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `accounts_code_unique` (`code`),
  ADD KEY `accounts_account_type_id_foreign` (`account_type_id`);

--
-- Indexes for table `account_translations`
--
ALTER TABLE `account_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `account_translations_account_id_locale_unique` (`account_id`,`locale`),
  ADD UNIQUE KEY `account_translations_name_unique` (`name`),
  ADD KEY `account_translations_locale_index` (`locale`);

--
-- Indexes for table `account_types`
--
ALTER TABLE `account_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account_type_translations`
--
ALTER TABLE `account_type_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `account_type_translations_account_type_id_locale_unique` (`account_type_id`,`locale`),
  ADD UNIQUE KEY `account_type_translations_name_unique` (`name`),
  ADD KEY `account_type_translations_locale_index` (`locale`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_code_unique` (`code`),
  ADD UNIQUE KEY `admins_user_name_unique` (`user_name`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_phone_unique` (`phone`),
  ADD UNIQUE KEY `admins_national_id_unique` (`national_id`),
  ADD KEY `admins_branch_id_foreign` (`branch_id`),
  ADD KEY `admins_setting_job_id_foreign` (`setting_job_id`),
  ADD KEY `admins_employee_type_id_foreign` (`employee_type_id`),
  ADD KEY `admins_employee_nationality_id_foreign` (`employee_nationality_id`),
  ADD KEY `admins_employee_religion_id_foreign` (`employee_religion_id`),
  ADD KEY `admins_employee_marital_status_id_foreign` (`employee_marital_status_id`),
  ADD KEY `admins_employee_identity_type_id_foreign` (`employee_identity_type_id`),
  ADD KEY `admins_employee_card_issuer_id_foreign` (`employee_card_issuer_id`);

--
-- Indexes for table `admin_password_reset_tokens`
--
ALTER TABLE `admin_password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_branch_id_foreign` (`branch_id`),
  ADD KEY `bookings_sailing_boat_id_foreign` (`sailing_boat_id`),
  ADD KEY `bookings_type_id_foreign` (`type_id`),
  ADD KEY `bookings_booking_date_index` (`booking_date`),
  ADD KEY `bookings_start_time_index` (`start_time`),
  ADD KEY `bookings_end_time_index` (`end_time`);

--
-- Indexes for table `booking_groups`
--
ALTER TABLE `booking_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `booking_groups_booking_group_num_unique` (`booking_group_num`),
  ADD KEY `booking_groups_booking_id_foreign` (`booking_id`),
  ADD KEY `booking_groups_client_id_foreign` (`client_id`),
  ADD KEY `booking_groups_currency_id_foreign` (`currency_id`),
  ADD KEY `booking_groups_sales_area_id_foreign` (`sales_area_id`);

--
-- Indexes for table `booking_group_members`
--
ALTER TABLE `booking_group_members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_group_members_booking_id_foreign` (`booking_id`),
  ADD KEY `booking_group_members_booking_group_id_foreign` (`booking_group_id`),
  ADD KEY `booking_group_members_client_type_id_foreign` (`client_type_id`);

--
-- Indexes for table `booking_group_payments`
--
ALTER TABLE `booking_group_payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_group_payments_booking_id_foreign` (`booking_id`),
  ADD KEY `booking_group_payments_booking_group_id_foreign` (`booking_group_id`),
  ADD KEY `booking_group_payments_payment_method_id_foreign` (`payment_method_id`);

--
-- Indexes for table `booking_group_services`
--
ALTER TABLE `booking_group_services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `booking_group_services_booking_group_service_num_unique` (`booking_group_service_num`),
  ADD KEY `booking_group_services_booking_id_foreign` (`booking_id`),
  ADD KEY `booking_group_services_branch_id_foreign` (`branch_id`),
  ADD KEY `booking_group_services_booking_group_id_foreign` (`booking_group_id`),
  ADD KEY `booking_group_services_extra_service_id_foreign` (`extra_service_id`),
  ADD KEY `booking_group_services_currency_id_foreign` (`currency_id`);

--
-- Indexes for table `booking_group_service_payments`
--
ALTER TABLE `booking_group_service_payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_group_service_payments_booking_group_service_id_foreign` (`booking_group_service_id`),
  ADD KEY `booking_group_service_payments_payment_method_id_foreign` (`payment_method_id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch_translations`
--
ALTER TABLE `branch_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `branch_translations_branch_id_locale_unique` (`branch_id`,`locale`),
  ADD UNIQUE KEY `branch_translations_name_unique` (`name`),
  ADD KEY `branch_translations_locale_index` (`locale`);

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
-- Indexes for table `car_contracts`
--
ALTER TABLE `car_contracts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `car_contracts_car_supplier_id_foreign` (`car_supplier_id`),
  ADD KEY `car_contracts_branch_id_foreign` (`branch_id`),
  ADD KEY `car_contracts_currency_id_foreign` (`currency_id`);

--
-- Indexes for table `car_expenses`
--
ALTER TABLE `car_expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_expenses_translations`
--
ALTER TABLE `car_expenses_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `car_expenses_translations_car_expenses_id_locale_unique` (`car_expenses_id`,`locale`),
  ADD UNIQUE KEY `car_expenses_translations_name_unique` (`name`),
  ADD KEY `car_expenses_translations_locale_index` (`locale`);

--
-- Indexes for table `car_suppliers`
--
ALTER TABLE `car_suppliers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `car_suppliers_name_unique` (`name`);

--
-- Indexes for table `car_tasks`
--
ALTER TABLE `car_tasks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `car_tasks_serial_num_unique` (`serial_num`),
  ADD KEY `car_tasks_car_contract_id_foreign` (`car_contract_id`),
  ADD KEY `car_tasks_currency_id_foreign` (`currency_id`);

--
-- Indexes for table `car_task_details`
--
ALTER TABLE `car_task_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `car_task_details_car_task_id_foreign` (`car_task_id`),
  ADD KEY `car_task_details_time_index` (`time`);

--
-- Indexes for table `car_task_expenses`
--
ALTER TABLE `car_task_expenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `car_task_expenses_car_task_id_foreign` (`car_task_id`),
  ADD KEY `car_task_expenses_car_expenses_id_foreign` (`car_expenses_id`);

--
-- Indexes for table `chart_of_accounts`
--
ALTER TABLE `chart_of_accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `account_number_parent_unique` (`account_number`,`parent_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_phone_unique` (`phone`),
  ADD UNIQUE KEY `clients_mobile_unique` (`mobile`),
  ADD UNIQUE KEY `clients_national_id_unique` (`national_id`),
  ADD UNIQUE KEY `clients_passport_number_unique` (`passport_number`);

--
-- Indexes for table `client_suppliers`
--
ALTER TABLE `client_suppliers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `client_suppliers_name_unique` (`name`);

--
-- Indexes for table `client_types`
--
ALTER TABLE `client_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_type_translations`
--
ALTER TABLE `client_type_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `client_type_translations_client_type_id_locale_unique` (`client_type_id`,`locale`),
  ADD UNIQUE KEY `client_type_translations_name_unique` (`name`),
  ADD KEY `client_type_translations_locale_index` (`locale`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currency_translations`
--
ALTER TABLE `currency_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `currency_translations_currency_id_locale_unique` (`currency_id`,`locale`),
  ADD UNIQUE KEY `currency_translations_name_unique` (`name`),
  ADD KEY `currency_translations_locale_index` (`locale`);

--
-- Indexes for table `employee_card_issuers`
--
ALTER TABLE `employee_card_issuers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_card_issuer_translations`
--
ALTER TABLE `employee_card_issuer_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emp_car_trans_unique` (`employee_card_issuer_id`,`locale`),
  ADD UNIQUE KEY `employee_card_issuer_translations_name_unique` (`name`),
  ADD KEY `employee_card_issuer_translations_locale_index` (`locale`);

--
-- Indexes for table `employee_identity_types`
--
ALTER TABLE `employee_identity_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_identity_type_translations`
--
ALTER TABLE `employee_identity_type_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emp_ide_trans_unique` (`employee_identity_type_id`,`locale`),
  ADD UNIQUE KEY `employee_identity_type_translations_name_unique` (`name`),
  ADD KEY `employee_identity_type_translations_locale_index` (`locale`);

--
-- Indexes for table `employee_marital_status`
--
ALTER TABLE `employee_marital_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_marital_status_translations`
--
ALTER TABLE `employee_marital_status_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emp_mar_trans_unique` (`employee_marital_status_id`,`locale`),
  ADD UNIQUE KEY `employee_marital_status_translations_name_unique` (`name`),
  ADD KEY `employee_marital_status_translations_locale_index` (`locale`);

--
-- Indexes for table `employee_nationalities`
--
ALTER TABLE `employee_nationalities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_nationality_translations`
--
ALTER TABLE `employee_nationality_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emp_nat_trans_unique` (`employee_nationality_id`,`locale`),
  ADD UNIQUE KEY `employee_nationality_translations_name_unique` (`name`),
  ADD KEY `employee_nationality_translations_locale_index` (`locale`);

--
-- Indexes for table `employee_religions`
--
ALTER TABLE `employee_religions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_religion_translations`
--
ALTER TABLE `employee_religion_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emp_rel_trans_unique` (`employee_religion_id`,`locale`),
  ADD UNIQUE KEY `employee_religion_translations_name_unique` (`name`),
  ADD KEY `employee_religion_translations_locale_index` (`locale`);

--
-- Indexes for table `employee_types`
--
ALTER TABLE `employee_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_type_translations`
--
ALTER TABLE `employee_type_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employee_type_translations_employee_type_id_locale_unique` (`employee_type_id`,`locale`),
  ADD UNIQUE KEY `employee_type_translations_name_unique` (`name`),
  ADD KEY `employee_type_translations_locale_index` (`locale`);

--
-- Indexes for table `entries`
--
ALTER TABLE `entries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expenses_expenses_type_id_foreign` (`expenses_type_id`),
  ADD KEY `expenses_currency_id_foreign` (`currency_id`),
  ADD KEY `expenses_branch_id_foreign` (`branch_id`);

--
-- Indexes for table `expenses_types`
--
ALTER TABLE `expenses_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses_type_translations`
--
ALTER TABLE `expenses_type_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `expenses_type_translations_expenses_type_id_locale_unique` (`expenses_type_id`,`locale`),
  ADD UNIQUE KEY `expenses_type_translations_name_unique` (`name`),
  ADD KEY `expenses_type_translations_locale_index` (`locale`);

--
-- Indexes for table `experience_types`
--
ALTER TABLE `experience_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `experience_types_color_unique` (`color`);

--
-- Indexes for table `experience_type_translations`
--
ALTER TABLE `experience_type_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `experience_type_translations_experience_type_id_locale_unique` (`experience_type_id`,`locale`),
  ADD UNIQUE KEY `experience_type_translations_name_unique` (`name`),
  ADD KEY `experience_type_translations_locale_index` (`locale`);

--
-- Indexes for table `extra_services`
--
ALTER TABLE `extra_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extra_service_translations`
--
ALTER TABLE `extra_service_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `extra_service_translations_extra_service_id_locale_unique` (`extra_service_id`,`locale`),
  ADD UNIQUE KEY `extra_service_translations_name_unique` (`name`),
  ADD KEY `extra_service_translations_locale_index` (`locale`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `features_feature_unique` (`feature`);

--
-- Indexes for table `feed_backs`
--
ALTER TABLE `feed_backs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feed_backs_client_id_foreign` (`client_id`),
  ADD KEY `feed_backs_booking_group_id_foreign` (`booking_group_id`),
  ADD KEY `feed_backs_experience_type_id_foreign` (`experience_type_id`);

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `good_suppliers`
--
ALTER TABLE `good_suppliers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `good_suppliers_phone_unique` (`phone`);

--
-- Indexes for table `good_translations`
--
ALTER TABLE `good_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `good_translations_good_id_locale_unique` (`good_id`,`locale`),
  ADD UNIQUE KEY `good_translations_name_unique` (`name`),
  ADD KEY `good_translations_locale_index` (`locale`);

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
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `languages_code_unique` (`code`);

--
-- Indexes for table `language_translations`
--
ALTER TABLE `language_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `language_translations_language_id_locale_unique` (`language_id`,`locale`),
  ADD KEY `language_translations_locale_index` (`locale`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_method_translations`
--
ALTER TABLE `payment_method_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payment_method_translations_payment_method_id_locale_unique` (`payment_method_id`,`locale`),
  ADD UNIQUE KEY `payment_method_translations_name_unique` (`name`),
  ADD KEY `payment_method_translations_locale_index` (`locale`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`),
  ADD KEY `permissions_permission_group_id_foreign` (`permission_group_id`);

--
-- Indexes for table `permission_groups`
--
ALTER TABLE `permission_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_group_translations`
--
ALTER TABLE `permission_group_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permission_group_translations_permission_group_id_locale_unique` (`permission_group_id`,`locale`),
  ADD UNIQUE KEY `permission_group_translations_group_name_unique` (`group_name`),
  ADD KEY `permission_group_translations_locale_index` (`locale`);

--
-- Indexes for table `permission_translations`
--
ALTER TABLE `permission_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permission_translations_permission_id_locale_unique` (`permission_id`,`locale`),
  ADD UNIQUE KEY `permission_translations_permission_name_unique` (`permission_name`),
  ADD KEY `permission_translations_locale_index` (`locale`);

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
-- Indexes for table `sailing_boats`
--
ALTER TABLE `sailing_boats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sailing_boats_branch_id_foreign` (`branch_id`);

--
-- Indexes for table `sailing_boat_translations`
--
ALTER TABLE `sailing_boat_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sailing_boat_translations_sailing_boat_id_locale_unique` (`sailing_boat_id`,`locale`),
  ADD UNIQUE KEY `sailing_boat_translations_name_unique` (`name`),
  ADD KEY `sailing_boat_translations_locale_index` (`locale`);

--
-- Indexes for table `sales_areas`
--
ALTER TABLE `sales_areas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sales_areas_branch_id_foreign` (`branch_id`);

--
-- Indexes for table `sales_area_translations`
--
ALTER TABLE `sales_area_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sales_area_translations_sales_area_id_locale_unique` (`sales_area_id`,`locale`),
  ADD KEY `sales_area_translations_locale_index` (`locale`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `setting_jobs`
--
ALTER TABLE `setting_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_job_translations`
--
ALTER TABLE `setting_job_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `setting_job_translations_setting_job_id_locale_unique` (`setting_job_id`,`locale`),
  ADD UNIQUE KEY `setting_job_translations_name_unique` (`name`),
  ADD KEY `setting_job_translations_locale_index` (`locale`);

--
-- Indexes for table `setting_translations`
--
ALTER TABLE `setting_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `setting_translations_setting_id_locale_unique` (`setting_id`,`locale`),
  ADD KEY `setting_translations_locale_index` (`locale`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_of_restriction`
--
ALTER TABLE `type_of_restriction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_of_restriction_entry_id_foreign` (`entry_id`);

--
-- Indexes for table `type_translations`
--
ALTER TABLE `type_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `type_translations_type_id_locale_unique` (`type_id`,`locale`),
  ADD UNIQUE KEY `type_translations_name_unique` (`name`),
  ADD KEY `type_translations_locale_index` (`locale`);

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
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `account_translations`
--
ALTER TABLE `account_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `account_types`
--
ALTER TABLE `account_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `account_type_translations`
--
ALTER TABLE `account_type_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `booking_groups`
--
ALTER TABLE `booking_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `booking_group_members`
--
ALTER TABLE `booking_group_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `booking_group_payments`
--
ALTER TABLE `booking_group_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `booking_group_services`
--
ALTER TABLE `booking_group_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `booking_group_service_payments`
--
ALTER TABLE `booking_group_service_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `branch_translations`
--
ALTER TABLE `branch_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `car_contracts`
--
ALTER TABLE `car_contracts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `car_expenses`
--
ALTER TABLE `car_expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `car_expenses_translations`
--
ALTER TABLE `car_expenses_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `car_suppliers`
--
ALTER TABLE `car_suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `car_tasks`
--
ALTER TABLE `car_tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `car_task_details`
--
ALTER TABLE `car_task_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `car_task_expenses`
--
ALTER TABLE `car_task_expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chart_of_accounts`
--
ALTER TABLE `chart_of_accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `client_suppliers`
--
ALTER TABLE `client_suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `client_types`
--
ALTER TABLE `client_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `client_type_translations`
--
ALTER TABLE `client_type_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `currency_translations`
--
ALTER TABLE `currency_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employee_card_issuers`
--
ALTER TABLE `employee_card_issuers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_card_issuer_translations`
--
ALTER TABLE `employee_card_issuer_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_identity_types`
--
ALTER TABLE `employee_identity_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee_identity_type_translations`
--
ALTER TABLE `employee_identity_type_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee_marital_status`
--
ALTER TABLE `employee_marital_status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee_marital_status_translations`
--
ALTER TABLE `employee_marital_status_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee_nationalities`
--
ALTER TABLE `employee_nationalities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_nationality_translations`
--
ALTER TABLE `employee_nationality_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_religions`
--
ALTER TABLE `employee_religions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee_religion_translations`
--
ALTER TABLE `employee_religion_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee_types`
--
ALTER TABLE `employee_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee_type_translations`
--
ALTER TABLE `employee_type_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `entries`
--
ALTER TABLE `entries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `expenses_types`
--
ALTER TABLE `expenses_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `expenses_type_translations`
--
ALTER TABLE `expenses_type_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `experience_types`
--
ALTER TABLE `experience_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `experience_type_translations`
--
ALTER TABLE `experience_type_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `extra_services`
--
ALTER TABLE `extra_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `extra_service_translations`
--
ALTER TABLE `extra_service_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `feed_backs`
--
ALTER TABLE `feed_backs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `goods`
--
ALTER TABLE `goods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `good_suppliers`
--
ALTER TABLE `good_suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `good_translations`
--
ALTER TABLE `good_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `language_translations`
--
ALTER TABLE `language_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment_method_translations`
--
ALTER TABLE `payment_method_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `permission_groups`
--
ALTER TABLE `permission_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `permission_group_translations`
--
ALTER TABLE `permission_group_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `permission_translations`
--
ALTER TABLE `permission_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sailing_boats`
--
ALTER TABLE `sailing_boats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sailing_boat_translations`
--
ALTER TABLE `sailing_boat_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sales_areas`
--
ALTER TABLE `sales_areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sales_area_translations`
--
ALTER TABLE `sales_area_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `setting_jobs`
--
ALTER TABLE `setting_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `setting_job_translations`
--
ALTER TABLE `setting_job_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `setting_translations`
--
ALTER TABLE `setting_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `type_of_restriction`
--
ALTER TABLE `type_of_restriction`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `type_translations`
--
ALTER TABLE `type_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `accounts_account_type_id_foreign` FOREIGN KEY (`account_type_id`) REFERENCES `account_types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `account_translations`
--
ALTER TABLE `account_translations`
  ADD CONSTRAINT `account_translations_account_id_foreign` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `account_type_translations`
--
ALTER TABLE `account_type_translations`
  ADD CONSTRAINT `account_type_translations_account_type_id_foreign` FOREIGN KEY (`account_type_id`) REFERENCES `account_types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_branch_id_foreign` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `admins_employee_card_issuer_id_foreign` FOREIGN KEY (`employee_card_issuer_id`) REFERENCES `employee_card_issuers` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `admins_employee_identity_type_id_foreign` FOREIGN KEY (`employee_identity_type_id`) REFERENCES `employee_identity_types` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `admins_employee_marital_status_id_foreign` FOREIGN KEY (`employee_marital_status_id`) REFERENCES `employee_marital_status` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `admins_employee_nationality_id_foreign` FOREIGN KEY (`employee_nationality_id`) REFERENCES `employee_nationalities` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `admins_employee_religion_id_foreign` FOREIGN KEY (`employee_religion_id`) REFERENCES `employee_religions` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `admins_employee_type_id_foreign` FOREIGN KEY (`employee_type_id`) REFERENCES `employee_types` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `admins_setting_job_id_foreign` FOREIGN KEY (`setting_job_id`) REFERENCES `setting_jobs` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `booking_groups`
--
ALTER TABLE `booking_groups`
  ADD CONSTRAINT `booking_groups_booking_id_foreign` FOREIGN KEY (`booking_id`) REFERENCES `bookings` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `booking_groups_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `booking_groups_currency_id_foreign` FOREIGN KEY (`currency_id`) REFERENCES `currencies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `booking_groups_sales_area_id_foreign` FOREIGN KEY (`sales_area_id`) REFERENCES `sales_areas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `type_of_restriction`
--
ALTER TABLE `type_of_restriction`
  ADD CONSTRAINT `type_of_restriction_entry_id_foreign` FOREIGN KEY (`entry_id`) REFERENCES `entries` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
