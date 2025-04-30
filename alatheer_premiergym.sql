-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 10, 2025 at 02:32 PM
-- Server version: 8.0.37
-- PHP Version: 8.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alatheer_premiergym`
--

-- --------------------------------------------------------

--
-- Table structure for table `dalel`
--

DROP TABLE IF EXISTS `dalel`;
CREATE TABLE `dalel` (
  `id` int NOT NULL,
  `parent` bigint DEFAULT NULL,
  `parent_code` bigint DEFAULT NULL,
  `ttype` varchar(255) DEFAULT NULL,
  `code` bigint DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `level` smallint DEFAULT NULL,
  `hesab_no3` smallint DEFAULT NULL,
  `hesab_tabe3a` smallint DEFAULT NULL,
  `hesab_report` smallint DEFAULT NULL,
  `last_value` varchar(255) NOT NULL DEFAULT '0',
  `markz_tklfa` tinyint NOT NULL DEFAULT '2'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `dalel`
--

INSERT INTO `dalel` (`id`, `parent`, `parent_code`, `ttype`, `code`, `name`, `level`, `hesab_no3`, `hesab_tabe3a`, `hesab_report`, `last_value`, `markz_tklfa`) VALUES
(1, 0, 0, 'أصول', 1, 'الأصول', 1, 1, 1, 1, '0', 2),
(2, 0, 0, 'الالتزامات وصافي الأصول', 2, 'الإلتزامات ', 1, 1, 2, 1, '0', 2),
(3, 0, 0, 'الإيرادات والتبرعات', 3, 'الإيرادات', 1, 1, 2, 2, '0', 2),
(4, 0, 0, 'المصروفات', 4, 'المصروفات', 1, 1, 1, 2, '0', 2),
(5, 0, 0, 'حقوق الملكية', 5, 'حقوق الملكية', 1, 1, 1, 1, '0', 2),
(6, 1, 1, 'أصول', 101, 'اصول ثابتة', 2, 1, 1, 1, '0', 2),
(7, 1, 1, 'أصول', 102, 'مشروعات تحت التنفيذ', 2, 1, 1, 1, '0', 2),
(8, 1, 1, 'أصول', 103, 'اصول متداولة', 2, 1, 1, 1, '0', 2),
(9, 6, 101, 'أصول', 10101, 'اراضى', 3, 2, 1, 1, '0', 1),
(10, 6, 101, 'أصول', 10102, 'مبانى وانشاءات', 3, 2, 1, 1, '0', 1),
(11, 6, 101, 'أصول', 10103, 'الات صناعية', 3, 2, 1, 1, '0', 1),
(12, 6, 101, 'أصول', 10104, 'مولدات', 3, 2, 1, 1, '0', 1),
(13, 6, 101, 'أصول', 10105, 'معدات', 3, 2, 1, 1, '0', 1),
(14, 6, 101, 'أصول', 10106, 'اجهزة كمبيوتر', 3, 2, 1, 1, '0', 1),
(15, 6, 101, 'أصول', 10107, 'اثاث وتجهيزات', 3, 2, 1, 1, '0', 1),
(16, 6, 101, 'أصول', 10108, 'سيارات', 3, 2, 1, 1, '0', 1),
(17, 6, 101, 'أصول', 10109, 'الخ......', 3, 2, 1, 1, '0', 1),
(19, 7, 102, 'أصول', 10202, 'الخ.....', 3, 2, 1, 1, '0', 1),
(20, 8, 103, 'أصول', 10301, 'خزينة', 3, 2, 1, 1, '0', 1),
(21, 8, 103, 'أصول', 10302, 'بنوك', 3, 2, 1, 1, '0', 1),
(22, 8, 103, 'أصول', 10303, 'عملاء', 3, 2, 1, 1, '0', 1),
(23, 8, 103, 'أصول', 10304, 'موردين', 3, 2, 1, 1, '0', 1),
(24, 8, 103, 'أصول', 10305, 'حسابات جارية', 3, 2, 1, 1, '0', 1),
(25, 8, 103, 'أصول', 10306, 'عهد', 3, 2, 1, 1, '0', 1),
(26, 8, 103, 'أصول', 10307, 'سلف عاملين', 3, 2, 1, 1, '0', 1),
(27, 8, 103, 'أصول', 10308, 'اوراق قبض', 3, 2, 1, 1, '0', 1),
(28, 8, 103, 'أصول', 10309, 'البنك اوراق قبض', 3, 2, 1, 1, '0', 1),
(29, 8, 103, 'أصول', 10310, 'مخزون اخر المدة', 3, 2, 1, 1, '0', 1),
(30, 8, 103, 'أصول', 10311, 'الخ......', 3, 2, 1, 1, '0', 1),
(31, 2, 2, 'الخصوم وصافي الأصول', 201, 'التزامات طويلة الاجل', 2, 1, 2, 1, '0', 2),
(32, 2, 2, 'الخصوم وصافي الأصول', 202, 'التزامات قصيرة الاجل', 2, 1, 2, 1, '0', 2),
(33, 31, 201, 'الخصوم وصافي الأصول', 20101, 'البنك التجاري الدولي', 3, 2, 2, 1, '0', 2),
(34, 31, 201, 'الخصوم وصافي الأصول', 20102, 'الخ......', 3, 2, 2, 1, '0', 2),
(35, 32, 202, 'الخصوم وصافي الأصول', 20201, 'موردين', 3, 2, 2, 1, '0', 2),
(36, 32, 202, 'الخصوم وصافي الأصول', 20202, 'اوراق دفع', 3, 2, 2, 1, '0', 1),
(37, 32, 202, 'الخصوم وصافي الأصول', 20203, 'حسابات جارية', 3, 2, 2, 1, '0', 2),
(39, 3, 3, 'إيرادات', 301, 'مبيعات', 2, 1, 2, 2, '0', 2),
(40, 4, 4, 'المصروفات', 401, 'مشتريات', 2, 1, 1, 2, '0', 2),
(41, 4, 4, 'المصروفات', 402, 'مصروفات تشغيل', 2, 1, 1, 2, '0', 2),
(42, 4, 4, 'المصروفات', 403, 'مصروفات عمومية', 2, 1, 1, 2, '0', 2),
(43, 4, 4, 'المصروفات', 404, 'مصروفات تسويقية', 2, 1, 1, 2, '0', 2),
(44, 4, 4, 'المصروفات', 405, 'مصروفات تمويلية', 2, 1, 1, 2, '0', 2),
(45, 4, 4, 'المصروفات', 406, 'مخصص اهلاك', 2, 1, 1, 2, '0', 2),
(46, 40, 401, 'المصروفات', 40101, 'خامات رئيسية', 3, 2, 1, 2, '0', 2),
(49, 41, 402, 'المصروفات', 40201, 'اجور', 3, 2, 1, 2, '0', 1),
(50, 41, 402, 'المصروفات', 40202, ' كهرباء', 3, 2, 1, 2, '0', 2),
(51, 41, 402, 'المصروفات', 40203, 'تليفونات', 3, 2, 1, 2, '0', 2),
(52, 41, 402, 'المصروفات', 40204, 'صيانة وقطع غيار', 3, 2, 1, 2, '0', 2),
(97, 41, 402, 'المصروفات', 40207, 'ايجار printer', 3, 2, 1, 2, '0', 2),
(55, 42, 403, 'المصروفات', 40303, 'صيانة الجيم ', 3, 2, 1, 2, '0', 2),
(56, 42, 403, 'المصروفات', 40304, 'رسوم واشتراكات', 3, 2, 1, 2, '0', 2),
(57, 42, 403, 'المصروفات', 40305, 'ضرائب قيمه مضافه', 3, 2, 1, 2, '0', 2),
(60, 42, 403, 'المصروفات', 40316, 'ادوات كتابية', 3, 2, 1, 2, '0', 2),
(61, 40, 401, 'المصروفات', 40105, 'ادوات نظافه', 3, 2, 1, 2, '0', 2),
(62, 42, 403, 'المصروفات', 40310, 'ضيافة', 3, 2, 1, 2, '0', 2),
(63, 42, 403, 'المصروفات', 40311, 'اكراميات', 3, 2, 1, 2, '0', 2),
(64, 42, 403, 'المصروفات', 40312, 'انتقالات', 3, 2, 1, 2, '0', 2),
(65, 42, 403, 'المصروفات', 40313, 'صندوق الخير', 3, 2, 1, 2, '0', 2),
(66, 43, 404, 'المصروفات', 40401, 'دعايه و اعلان شركة بولد ', 3, 2, 1, 2, '0', 2),
(67, 43, 404, 'المصروفات', 40402, 'دعايه و اعلان - شركة التسويق ', 3, 2, 1, 2, '0', 2),
(68, 43, 404, 'المصروفات', 40403, 'عمولات السيلز', 3, 2, 1, 2, '0', 2),
(71, 44, 405, 'المصروفات', 40501, 'بنك مصر ', 3, 2, 1, 2, '0', 2),
(75, 45, 406, 'المصروفات', 40601, 'مبانى وتنشاءات', 3, 2, 1, 2, '0', 2),
(76, 45, 406, 'المصروفات', 40602, 'الات ومعدات ', 3, 2, 1, 2, '0', 2),
(77, 45, 406, 'المصروفات', 40603, 'سيارات', 3, 2, 1, 2, '0', 2),
(78, 45, 406, 'المصروفات', 40604, 'اثاث وتجهيزات', 3, 2, 1, 2, '0', 2),
(80, 5, 5, 'حقوق الملكية', 501, 'راس المال المدفوع', 2, 1, 1, 1, '0', 2),
(81, 5, 5, 'حقوق الملكية', 502, 'جارى الشركاء', 2, 1, 1, 1, '0', 2),
(82, 80, 501, 'حقوق الملكية', 50101, 'شريك 1', 3, 2, 1, 1, '0', 2),
(83, 80, 501, 'حقوق الملكية', 50102, 'شريك 2', 3, 2, 1, 1, '0', 2),
(84, 81, 502, 'حقوق الملكية', 50201, 'علي فراج ', 3, 2, 2, 1, '0', 2),
(85, 81, 502, 'حقوق الملكية', 50202, 'محمد  فراج', 3, 2, 2, 1, '0', 2),
(86, 5, 5, 'حقوق الملكية', 503, 'ارباح مرحلة ', 2, 1, 1, 1, '0', 2),
(87, 5, 5, 'حقوق الملكية', 504, 'ارباح العام', 2, 1, 1, 1, '0', 2),
(96, 81, 502, 'حقوق الملكية', 50203, 'خالد فراج', 3, 2, 2, 1, '0', 2),
(89, 39, 301, 'إيرادات', 30101, 'مبيعات نقدي', 3, 2, 2, 2, '0', 2),
(90, 39, 301, 'إيرادات', 30102, 'مبيعات  pos', 3, 2, 2, 2, '0', 2),
(91, 20, 10301, 'أصول', 10301001, 'خزينة فرعيه ', 4, 2, 1, 1, '0', 2),
(92, 20, 10301, 'أصول', 10301002, 'خزينة رئيسيه', 4, 2, 1, 1, '0', 2),
(93, 21, 10302, 'أصول', 10302001, 'بنك مصر', 4, 2, 1, 1, '0', 2),
(95, 41, 402, 'المصروفات', 40206, 'مياه', 3, 2, 1, 2, '0', 2),
(98, 41, 402, 'المصروفات', 40208, 'كلاسات ', 3, 2, 1, 2, '0', 2),
(99, 41, 402, 'المصروفات', 40209, 'انترنت', 3, 2, 1, 2, '0', 2),
(100, 81, 502, 'حقوق الملكية', 50204, 'محمد فينو', 3, 2, 2, 1, '0', 2),
(101, 32, 202, 'الخصوم وصافي الأصول', 20206, 'جهاز  inbody', 3, 2, 2, 1, '0', 2),
(102, 32, 202, 'الخصوم وصافي الأصول', 20205, 'ادوات نظافه - شركة دابكوم', 3, 2, 2, 1, '0', 2),
(103, 41, 402, 'المصروفات', 40210, 'سلف عاملين ', 3, 2, 1, 2, '0', 2),
(104, 43, 404, 'المصروفات', 40406, 'مستحقات call center', 3, 2, 1, 2, '0', 2),
(105, 41, 402, 'المصروفات', 40211, 'inbody', 3, 2, 1, 2, '0', 2),
(106, 4, 4, 'المصروفات', 407, 'مصروفات اعضاء مجلس الادارة', 2, 1, 1, 2, '0', 2),
(121, 32, 202, 'الخصوم وصافي الأصول', 20207, 'اقساط تكييفات- ميراكو ', 3, 2, 2, 1, '0', 2),
(111, 39, 301, 'إيرادات', 30103, 'ايرادات اخرى _ كافيه', 3, 2, 2, 2, '0', 2),
(112, 42, 403, 'المصروفات', 40315, 'الريحاني', 3, 2, 1, 2, '0', 2),
(114, 41, 402, 'المصروفات', 40212, 'اجر- احمد الزهيري ', 3, 2, 1, 2, '0', 2),
(115, 43, 404, 'المصروفات', 40407, 'ايفينتات', 3, 2, 1, 2, '0', 2),
(120, 41, 402, 'المصروفات', 40217, 'اجور- كباتن', 3, 2, 1, 2, '0', 2),
(116, 41, 402, 'المصروفات', 40213, 'اجور - استقبال', 3, 2, 1, 2, '0', 2),
(117, 41, 402, 'المصروفات', 40214, 'اجور -سيلز', 3, 2, 1, 2, '0', 2),
(118, 41, 402, 'المصروفات', 40215, 'اجور- خدمات معاونة', 3, 2, 1, 2, '0', 2),
(119, 41, 402, 'المصروفات', 40216, 'اجور- ادارة', 3, 2, 1, 2, '0', 2),
(122, 43, 404, 'المصروفات', 40408, 'خصم مسموح به ', 3, 2, 1, 2, '0', 2),
(123, 39, 301, 'إيرادات', 30104, 'مبيعات اجله ', 3, 2, 2, 2, '0', 2),
(124, 41, 402, 'المصروفات', 40218, 'مردودات مبيعات ', 3, 2, 1, 2, '0', 2),
(125, 41, 402, 'المصروفات', 40219, 'اشتراك   bein sport', 3, 2, 1, 2, '0', 2),
(126, 41, 402, 'المصروفات', 40220, 'ايجار مقر الجيم ', 3, 2, 1, 2, '0', 2),
(127, 41, 402, 'المصروفات', 40221, 'شئون قانونية- سيد كيلاني', 3, 2, 1, 2, '0', 2),
(128, 42, 403, 'المصروفات', 40317, 'شئون قانونية ', 3, 2, 1, 2, '0', 2),
(129, 81, 502, 'حقوق الملكية', 50205, 'محمد علي فراج', 3, 2, 2, 1, '0', 2),
(130, 32, 202, 'الخصوم وصافي الأصول', 20208, 'جهاز  treadmall', 3, 2, 2, 1, '0', 2),
(131, 6, 101, 'أصول', 10110, 'اللاب', 3, 2, 1, 1, '0', 2),
(132, 3, 3, 'الإيرادات والتبرعات', 302, 'ايرادات اشتراكات', 2, 2, 2, 2, '0', 2);

-- --------------------------------------------------------

--
-- Table structure for table `finance_quods`
--

DROP TABLE IF EXISTS `finance_quods`;
CREATE TABLE `finance_quods` (
  `id` int NOT NULL,
  `rkm` int NOT NULL,
  `no3_qued` int NOT NULL,
  `no3_qued_name` varchar(500) DEFAULT NULL,
  `halet_qued` tinyint NOT NULL,
  `halet_qued_name` varchar(255) DEFAULT NULL,
  `qued_date` varchar(255) DEFAULT NULL,
  `qued_date_ar` varchar(255) DEFAULT NULL,
  `total_value` decimal(19,2) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `date_s` varchar(255) DEFAULT NULL,
  `publisher` varchar(500) DEFAULT NULL,
  `publisher_name` varchar(500) DEFAULT NULL,
  `deport` tinyint NOT NULL DEFAULT '0',
  `deport_date_s` varchar(255) DEFAULT NULL,
  `deport_date_ar` varchar(255) DEFAULT NULL,
  `deport_date` varchar(500) DEFAULT NULL,
  `deport_publisher_id` varchar(500) DEFAULT NULL,
  `deport_publisher_name` varchar(200) DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `cancel` enum('yes','no') NOT NULL DEFAULT 'no',
  `cancel_reason` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `finance_quods`
--

INSERT INTO `finance_quods` (`id`, `rkm`, `no3_qued`, `no3_qued_name`, `halet_qued`, `halet_qued_name`, `qued_date`, `qued_date_ar`, `total_value`, `date`, `date_s`, `publisher`, `publisher_name`, `deport`, `deport_date_s`, `deport_date_ar`, `deport_date`, `deport_publisher_id`, `deport_publisher_name`, `status`, `cancel`, `cancel_reason`) VALUES
(1, 1, 2, 'قيد يومية', 1, 'تمت المراجعة', '1675112400', '2023-01-31', 118028.00, '2023-03-08', '1678224015', '124', 'Ahmed.Okda', 1, '1680210000', '2023-03-31', '2023-03-31', '124', 'Ahmed.Okda', 0, 'no', NULL),
(2, 2, 2, 'قيد يومية', 1, 'تمت المراجعة', '1675112400', '2023-01-31', 158974.00, '2023-03-08', '1678225049', '124', 'Ahmed.Okda', 1, '1680210000', '2023-03-31', '2023-03-31', '124', 'Ahmed.Okda', 0, 'no', NULL),
(3, 3, 2, 'قيد يومية', 1, 'تمت المراجعة', '1675112400', '2023-01-31', 49325.00, '2023-03-08', '1678306110', '124', 'Ahmed.Okda', 1, '1680210000', '2023-03-31', '2023-03-31', '124', 'Ahmed.Okda', 0, 'no', NULL),
(4, 4, 2, 'قيد يومية', 1, 'تمت المراجعة', '1675112400', '2023-01-31', 20058.00, '2023-03-08', '1678307310', '124', 'Ahmed.Okda', 1, '1680210000', '2023-03-31', '2023-03-31', '124', 'Ahmed.Okda', 0, 'no', NULL),
(5, 5, 2, 'قيد يومية', 1, 'تمت المراجعة', '1672520400', '2023-01-01', 14000.00, '2023-03-09', '1678311025', '124', 'Ahmed.Okda', 1, '1678309200', '2023-03-09', '2023-03-09', '124', 'Ahmed.Okda', 0, 'no', NULL),
(6, 6, 2, 'قيد يومية', 1, 'تمت المراجعة', '1672693200', '2023-01-03', 8965.00, '2023-03-09', '1678311101', '124', 'Ahmed.Okda', 1, '1678309200', '2023-03-09', '2023-03-09', '124', 'Ahmed.Okda', 0, 'no', NULL),
(7, 7, 2, 'قيد يومية', 1, 'تمت المراجعة', '1672952400', '2023-01-06', 20000.00, '2023-03-09', '1678311168', '124', 'Ahmed.Okda', 1, '1678309200', '2023-03-09', '2023-03-09', '124', 'Ahmed.Okda', 0, 'no', NULL),
(8, 8, 2, 'قيد يومية', 1, 'تمت المراجعة', '1673125200', '2023-01-08', 9990.00, '2023-03-09', '1678311242', '124', 'Ahmed.Okda', 1, '1678309200', '2023-03-09', '2023-03-09', '124', 'Ahmed.Okda', 0, 'no', NULL),
(9, 9, 2, 'قيد يومية', 1, 'تمت المراجعة', '1673557200', '2023-01-13', 5724.00, '2023-03-09', '1678311319', '124', 'Ahmed.Okda', 1, '1678309200', '2023-03-09', '2023-03-09', '124', 'Ahmed.Okda', 0, 'no', NULL),
(10, 10, 2, 'قيد يومية', 1, 'تمت المراجعة', '1674248400', '2023-01-21', 8130.00, '2023-03-09', '1678311380', '124', 'Ahmed.Okda', 1, '1678309200', '2023-03-09', '2023-03-09', '124', 'Ahmed.Okda', 0, 'no', NULL),
(11, 11, 2, 'قيد يومية', 1, 'تمت المراجعة', '1674421200', '2023-01-23', 21845.00, '2023-03-09', '1678311458', '124', 'Ahmed.Okda', 1, '1678309200', '2023-03-09', '2023-03-09', '124', 'Ahmed.Okda', 0, 'no', NULL),
(12, 12, 2, 'قيد يومية', 1, 'تمت المراجعة', '1674421200', '2023-01-23', 10500.00, '2023-03-09', '1678311543', '124', 'Ahmed.Okda', 1, '1678309200', '2023-03-09', '2023-03-09', '124', 'Ahmed.Okda', 0, 'no', NULL),
(13, 13, 2, 'قيد يومية', 1, 'تمت المراجعة', '1674853200', '2023-01-28', 10000.00, '2023-03-09', '1678311625', '124', 'Ahmed.Okda', 1, '1678309200', '2023-03-09', '2023-03-09', '124', 'Ahmed.Okda', 0, 'no', NULL),
(14, 14, 2, 'قيد يومية', 1, 'تمت المراجعة', '1675112400', '2023-01-31', 6555.00, '2023-03-09', '1678311692', '124', 'Ahmed.Okda', 1, '1678309200', '2023-03-09', '2023-03-09', '124', 'Ahmed.Okda', 0, 'no', NULL),
(15, 15, 2, 'قيد يومية', 1, 'تمت المراجعة', '1680210000', '2023-03-31', 0.00, '2023-03-09', '1678358541', '124', 'Ahmed.Okda', 1, '1681160400', '2023-04-11', '2023-04-11', '124', 'Ahmed.Okda', 0, 'no', NULL),
(16, 15, 2, 'قيد يومية', 1, 'تمت المراجعة', '1680210000', '2023-03-31', 246678.00, '2023-03-09', '1678358565', '124', 'Ahmed.Okda', 1, '1681160400', '2023-04-11', '2023-04-11', '124', 'Ahmed.Okda', 0, 'no', NULL),
(17, 16, 2, 'قيد يومية', 1, 'تمت المراجعة', '1674162000', '2023-01-20', 3000.00, '2023-03-09', '1678359068', '124', 'Ahmed.Okda', 1, '1678482000', '2023-03-11', '2023-03-11', '124', 'Ahmed.Okda', 0, 'no', NULL),
(18, 17, 2, 'قيد يومية', 1, 'تمت المراجعة', '1677531600', '2023-02-28', 283816.00, '2023-03-26', '1679783073', '124', 'Ahmed.Okda', 1, '1679778000', '2023-03-26', '2023-03-26', '124', 'Ahmed.Okda', 0, 'no', NULL),
(19, 18, 2, 'قيد يومية', 1, 'تمت المراجعة', '1677531600', '2023-02-28', 26377.00, '2023-03-26', '1679783413', '124', 'Ahmed.Okda', 1, '1680210000', '2023-03-31', '2023-03-31', '124', 'Ahmed.Okda', 0, 'no', NULL),
(20, 19, 2, 'قيد يومية', 1, 'تمت المراجعة', '1677531600', '2023-02-28', 152231.00, '2023-03-26', '1679784572', '124', 'Ahmed.Okda', 1, '1679950800', '2023-03-28', '2023-03-28', '124', 'Ahmed.Okda', 0, 'no', NULL),
(21, 20, 2, 'قيد يومية', 1, 'تمت المراجعة', '1677531600', '2023-02-28', 130514.00, '2023-03-26', '1679785035', '124', 'Ahmed.Okda', 1, '1679950800', '2023-03-28', '2023-03-28', '124', 'Ahmed.Okda', 0, 'no', NULL),
(23, 21, 2, 'قيد يومية', 1, 'تمت المراجعة', '1680210000', '2023-03-31', 233833.00, '2023-04-11', '1681199191', '124', 'Ahmed.Okda', 1, '1682888400', '2023-05-01', '2023-05-01', '124', 'Ahmed.Okda', 0, 'no', NULL),
(24, 22, 2, 'قيد يومية', 1, 'تمت المراجعة', '1680210000', '2023-03-31', 43241.00, '2023-04-11', '1681200369', '124', 'Ahmed.Okda', 1, '1681160400', '2023-04-11', '2023-04-11', '124', 'Ahmed.Okda', 0, 'no', NULL),
(25, 23, 2, 'قيد يومية', 1, 'تمت المراجعة', '1680210000', '2023-03-31', 24277.00, '2023-04-11', '1681201461', '124', 'Ahmed.Okda', 1, '1681160400', '2023-04-11', '2023-04-11', '124', 'Ahmed.Okda', 0, 'no', NULL),
(26, 24, 2, 'قيد يومية', 1, 'تمت المراجعة', '1680210000', '2023-03-31', 247362.00, '2023-04-11', '1681208090', '124', 'Ahmed.Okda', 1, '1681160400', '2023-04-11', '2023-04-11', '124', 'Ahmed.Okda', 0, 'no', NULL),
(27, 25, 2, 'قيد يومية', 1, 'تمت المراجعة', '1680210000', '2023-03-31', 246678.00, '2023-04-11', '1681209069', '124', 'Ahmed.Okda', 1, '1682888400', '2023-05-01', '2023-05-01', '124', 'Ahmed.Okda', 0, 'no', NULL),
(28, 26, 2, 'قيد يومية', 1, 'تمت المراجعة', '1682802000', '2023-04-30', 255712.00, '2023-05-08', '1683571138', '124', 'Ahmed.Okda', 1, '1683493200', '2023-05-08', '2023-05-08', '124', 'Ahmed.Okda', 0, 'no', NULL),
(29, 27, 2, 'قيد يومية', 1, 'تمت المراجعة', '-52469003212', '0307-04-30', 22762.00, '2023-05-08', '1683572837', '124', 'Ahmed.Okda', 1, '1683493200', '2023-05-08', '2023-05-08', '124', 'Ahmed.Okda', 0, 'no', NULL),
(30, 28, 2, 'قيد يومية', 1, 'تمت المراجعة', '1682802000', '2023-04-30', 193338.00, '2023-05-08', '1683574725', '124', 'Ahmed.Okda', 1, '1683493200', '2023-05-08', '2023-05-08', '124', 'Ahmed.Okda', 0, 'no', NULL),
(31, 29, 2, 'قيد يومية', 1, 'تمت المراجعة', '1682802000', '2023-04-30', 195037.50, '2023-05-08', '1683576444', '124', 'Ahmed.Okda', 1, '1683493200', '2023-05-08', '2023-05-08', '124', 'Ahmed.Okda', 0, 'no', NULL),
(32, 30, 2, 'قيد يومية', 1, 'تمت المراجعة', '1685480400', '2023-05-31', 415089.00, '2023-06-06', '1686083252', '124', 'Ahmed.Okda', 1, '1686776400', '2023-06-15', '2023-06-15', '124', 'Ahmed.Okda', 0, 'no', NULL),
(34, 31, 2, 'قيد يومية', 1, 'تمت المراجعة', '1685480400', '2023-05-31', 43784.00, '2023-06-20', '1687260044', '124', 'Ahmed.Okda', 1, '1687208400', '2023-06-20', '2023-06-20', '124', 'Ahmed.Okda', 0, 'no', NULL),
(35, 32, 2, 'قيد يومية', 1, 'تمت المراجعة', '1685480400', '2023-05-31', 163056.00, '2023-06-20', '1687260420', '124', 'Ahmed.Okda', 1, '1688331600', '2023-07-03', '2023-07-03', '124', 'Ahmed.Okda', 0, 'no', NULL),
(36, 33, 2, 'قيد يومية', 1, 'تمت المراجعة', '1685480400', '2023-05-31', 191451.00, '2023-06-20', '1687261133', '124', 'Ahmed.Okda', 1, '1687208400', '2023-06-20', '2023-06-20', '124', 'Ahmed.Okda', 0, 'no', NULL),
(38, 35, 2, 'قيد يومية', 1, 'تمت المراجعة', '1736715600', '2025-01-13', 200.00, '2025-01-13', '1736756357', '19', 'alatheers', 1, '1736715600', '2025-01-13', '2025-01-13', '19', 'alatheers', 0, 'no', NULL),
(39, 36, 2, 'قيد يومية', 1, 'تمت المراجعة', '1736715600', '2025-01-13', 1000.00, '2025-01-13', '1736769446', '19', 'alatheers', 1, '1736715600', '2025-01-13', '2025-01-13', '19', 'alatheers', 0, 'no', NULL),
(40, 37, 2, 'قيد يومية', 1, 'تمت المراجعة', '1737925200', '2025-01-27', 5000.00, '2025-01-27', '1737964606', '140', 'ahmedh', 1, '1737925200', '2025-01-27', '2025-01-27', '140', 'ahmedh', 0, 'no', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `finance_quods_attaches`
--

DROP TABLE IF EXISTS `finance_quods_attaches`;
CREATE TABLE `finance_quods_attaches` (
  `id` int NOT NULL,
  `qued_rkm_fk` int NOT NULL DEFAULT '0',
  `file_attached` text,
  `title` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `finance_quods_details`
--

DROP TABLE IF EXISTS `finance_quods_details`;
CREATE TABLE `finance_quods_details` (
  `id` int NOT NULL,
  `qued_rkm_fk` int NOT NULL DEFAULT '0',
  `qued_rkm_id_fk` int DEFAULT NULL,
  `maden` decimal(19,2) DEFAULT NULL,
  `dayen` decimal(19,2) DEFAULT NULL,
  `value` int NOT NULL DEFAULT '0',
  `rkm_hesab` bigint NOT NULL,
  `hesab_name` varchar(500) DEFAULT NULL,
  `markz_id` tinyint DEFAULT NULL,
  `markz_name` varchar(100) DEFAULT NULL,
  `byan1` varchar(500) DEFAULT NULL,
  `byan` varchar(500) DEFAULT NULL,
  `marg3` double DEFAULT NULL,
  `esal_rkm` int DEFAULT NULL,
  `harka_id` tinyint(1) DEFAULT NULL,
  `harka_name` varchar(10) DEFAULT NULL,
  `date` varchar(15) DEFAULT NULL,
  `date_ar` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `finance_sanad_qabd`
--

DROP TABLE IF EXISTS `finance_sanad_qabd`;
CREATE TABLE `finance_sanad_qabd` (
  `id` int NOT NULL,
  `rqm_sanad` int NOT NULL,
  `qued_rkm_id_fk` int DEFAULT NULL,
  `date_sanad` varchar(255) DEFAULT NULL,
  `date_sanad_ar` varchar(255) DEFAULT NULL,
  `pay_method` varchar(255) DEFAULT NULL,
  `recived_from` varchar(255) DEFAULT NULL,
  `type` tinyint DEFAULT NULL,
  `person_name` varchar(500) DEFAULT NULL,
  `mother_national_num` varchar(255) DEFAULT NULL,
  `person_id_fk` int DEFAULT NULL,
  `person_mob` varchar(255) DEFAULT NULL,
  `box_rqm_hesab` bigint DEFAULT NULL,
  `box_name` varchar(500) DEFAULT NULL,
  `about` varchar(255) DEFAULT NULL,
  `total_value` double DEFAULT '0',
  `sheek_num` varchar(255) DEFAULT NULL,
  `sheek_date` varchar(255) DEFAULT NULL,
  `sheek_date_ar` varchar(255) DEFAULT NULL,
  `bank_id_fk` varchar(255) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `date_s` varchar(255) DEFAULT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  `print_type` int NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `finance_sanad_qabd`
--

INSERT INTO `finance_sanad_qabd` (`id`, `rqm_sanad`, `qued_rkm_id_fk`, `date_sanad`, `date_sanad_ar`, `pay_method`, `recived_from`, `type`, `person_name`, `mother_national_num`, `person_id_fk`, `person_mob`, `box_rqm_hesab`, `box_name`, `about`, `total_value`, `sheek_num`, `sheek_date`, `sheek_date_ar`, `bank_id_fk`, `bank_name`, `date`, `date_s`, `publisher`, `print_type`) VALUES
(2, 1, 34, '1698958800', '2023-11-03', '1', 'محمد علي محمد حسن احمد ', 1, 'محمد علي محمد حسن احمد ', '', 20, '01001361254', 10302001, 'بنك مصر', 'ايداع نقدي', 1705, '', '', '', '', NULL, '2023-12-03', '1701550800', '124', 1);

-- --------------------------------------------------------

--
-- Table structure for table `finance_sanad_qabd_attachment`
--

DROP TABLE IF EXISTS `finance_sanad_qabd_attachment`;
CREATE TABLE `finance_sanad_qabd_attachment` (
  `id` int NOT NULL,
  `rqm_sanad_id_fk` varchar(100) DEFAULT NULL,
  `file_attached` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `finance_sanad_qabd_details`
--

DROP TABLE IF EXISTS `finance_sanad_qabd_details`;
CREATE TABLE `finance_sanad_qabd_details` (
  `id` int NOT NULL,
  `rqm_sanad_fk` varchar(255) DEFAULT NULL,
  `rqm_sanad_id_fk` int DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `rqm_hesab` varchar(255) DEFAULT NULL,
  `name_hesab` varchar(255) DEFAULT NULL,
  `byan` varchar(255) DEFAULT NULL,
  `marg3` int DEFAULT NULL,
  `marg3_rkm_esal` int DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `finance_sanad_qabd_details`
--

INSERT INTO `finance_sanad_qabd_details` (`id`, `rqm_sanad_fk`, `rqm_sanad_id_fk`, `value`, `rqm_hesab`, `name_hesab`, `byan`, `marg3`, `marg3_rkm_esal`) VALUES
(114, '1', 2, '1705', '10302001', 'بنك مصر', 'ايداع نقدي', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `finance_sanad_sarf`
--

DROP TABLE IF EXISTS `finance_sanad_sarf`;
CREATE TABLE `finance_sanad_sarf` (
  `id` int NOT NULL,
  `rqm_sanad` int NOT NULL,
  `rqm_quod` int DEFAULT NULL,
  `date_sanad` varchar(255) DEFAULT NULL,
  `date_sanad_ar` varchar(255) DEFAULT NULL,
  `pay_method` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `type` tinyint DEFAULT NULL,
  `person_name` varchar(500) DEFAULT NULL,
  `mother_national_num` varchar(255) DEFAULT NULL,
  `person_id_fk` int DEFAULT NULL,
  `person_mob` varchar(255) DEFAULT NULL,
  `box_rqm_hesab` bigint DEFAULT NULL,
  `box_name` varchar(500) DEFAULT NULL,
  `sheek_bank_id` int DEFAULT NULL,
  `sheek_bank_name` varchar(255) DEFAULT NULL,
  `sheek_rqm_hesab` varchar(255) DEFAULT NULL,
  `sheek_num_bank` int DEFAULT NULL,
  `bank_account_id_fk` int DEFAULT NULL,
  `bank_account_num` varchar(100) DEFAULT NULL,
  `about` varchar(255) DEFAULT NULL,
  `total_value` decimal(19,2) DEFAULT NULL,
  `sheek_num` varchar(255) DEFAULT NULL,
  `sheek_date` varchar(255) DEFAULT NULL,
  `sheek_date_ar` varchar(255) DEFAULT NULL,
  `bank_id_fk` varchar(255) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `date_s` varchar(255) DEFAULT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  `type_paid` tinyint DEFAULT NULL,
  `cancel` enum('yes','no') NOT NULL DEFAULT 'no',
  `cancel_reason` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `finance_sanad_sarf_attaches`
--

DROP TABLE IF EXISTS `finance_sanad_sarf_attaches`;
CREATE TABLE `finance_sanad_sarf_attaches` (
  `id` int NOT NULL,
  `rqm_sanad_fk` int DEFAULT NULL,
  `file_attached` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `finance_sanad_sarf_details`
--

DROP TABLE IF EXISTS `finance_sanad_sarf_details`;
CREATE TABLE `finance_sanad_sarf_details` (
  `id` int NOT NULL,
  `rqm_sanad_fk` int DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `rqm_hesab` varchar(255) DEFAULT NULL,
  `name_hesab` varchar(255) DEFAULT NULL,
  `byan` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dalel`
--
ALTER TABLE `dalel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finance_quods`
--
ALTER TABLE `finance_quods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finance_quods_attaches`
--
ALTER TABLE `finance_quods_attaches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finance_quods_details`
--
ALTER TABLE `finance_quods_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finance_sanad_qabd`
--
ALTER TABLE `finance_sanad_qabd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finance_sanad_qabd_attachment`
--
ALTER TABLE `finance_sanad_qabd_attachment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finance_sanad_qabd_details`
--
ALTER TABLE `finance_sanad_qabd_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finance_sanad_sarf`
--
ALTER TABLE `finance_sanad_sarf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finance_sanad_sarf_attaches`
--
ALTER TABLE `finance_sanad_sarf_attaches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finance_sanad_sarf_details`
--
ALTER TABLE `finance_sanad_sarf_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dalel`
--
ALTER TABLE `dalel`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `finance_quods`
--
ALTER TABLE `finance_quods`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `finance_quods_attaches`
--
ALTER TABLE `finance_quods_attaches`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `finance_quods_details`
--
ALTER TABLE `finance_quods_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `finance_sanad_qabd`
--
ALTER TABLE `finance_sanad_qabd`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `finance_sanad_qabd_attachment`
--
ALTER TABLE `finance_sanad_qabd_attachment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `finance_sanad_qabd_details`
--
ALTER TABLE `finance_sanad_qabd_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `finance_sanad_sarf`
--
ALTER TABLE `finance_sanad_sarf`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `finance_sanad_sarf_attaches`
--
ALTER TABLE `finance_sanad_sarf_attaches`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `finance_sanad_sarf_details`
--
ALTER TABLE `finance_sanad_sarf_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
