-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 25, 2022 at 09:40 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `awl_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `id` int(10) UNSIGNED NOT NULL,
  `demand_id` int(11) DEFAULT NULL,
  `overseas_agencie_id` int(11) DEFAULT NULL,
  `lot` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contract_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `male` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `female` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contracts`
--

INSERT INTO `contracts` (`id`, `demand_id`, `overseas_agencie_id`, `lot`, `contract_date`, `male`, `female`, `remark`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'LOT1', '1.1.2022', '1', '0', NULL, '1', '2022-10-24 22:12:02', '2022-10-24 22:32:52'),
(2, 1, 1, 'LOT2', '1.1.2022', '0', '1', NULL, '1', '2022-10-24 22:16:31', '2022-10-24 22:32:56');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `country` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country`, `created_at`, `updated_at`) VALUES
(1, 'Thailand', '2022-09-30 21:25:50', '2022-09-30 21:26:07');

-- --------------------------------------------------------

--
-- Table structure for table `demands`
--

CREATE TABLE `demands` (
  `id` int(10) UNSIGNED NOT NULL,
  `overseas_agencie_id` int(11) DEFAULT NULL,
  `demand_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `male` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `female` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `demands`
--

INSERT INTO `demands` (`id`, `overseas_agencie_id`, `demand_date`, `male`, `female`, `created_at`, `updated_at`) VALUES
(1, 1, '1.1.2022', '100', '0', '2022-10-03 02:14:52', '2022-10-03 02:15:07'),
(2, 2, '1.1.2022', '10', '20', '2022-10-18 09:11:50', '2022-10-18 09:11:50');

-- --------------------------------------------------------

--
-- Table structure for table `employer_interviews`
--

CREATE TABLE `employer_interviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `demand_id` int(11) DEFAULT NULL,
  `interview_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `male` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `female` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `overseas_agencie_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `government_process_contracts`
--

CREATE TABLE `government_process_contracts` (
  `id` int(10) UNSIGNED NOT NULL,
  `demand_id` int(11) DEFAULT NULL,
  `overseas_agencie_id` int(11) DEFAULT NULL,
  `thai_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cabinet_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `government_process_contracts`
--

INSERT INTO `government_process_contracts` (`id`, `demand_id`, `overseas_agencie_id`, `thai_date`, `cabinet_date`, `issue_date`, `file_name`, `file_path`, `user_id`, `created_at`, `updated_at`) VALUES
(4, 1, 1, '1.1.2022', '1.1.2022', '1.1.2022', 'Alpha World Link Co, Ltd ( Code of Conduct ).pdf', 'public/files/XjEr4U8zYfs2jxWVXdkOFoPim2NkvEUOuRUsRsEw.pdf', 1, '2022-10-18 09:03:02', '2022-10-18 09:03:02'),
(5, 2, 2, '1.1.2022', '1.1.2022', '11.1.2022', 'HdfUEWRB4Jcvycw2jJjrEObu1YO6MNPJGHVNbEIN.pdf', 'public/files/LoQTrQGiIjaI892RKVFvcfl3evwQVv54d6QFbBAv.pdf', 1, '2022-10-18 09:12:10', '2022-10-18 09:13:32'),
(6, 1, 1, '1.1.2022', '1.1.2022', '1.1.2022', 'Alpha World Link Co, Ltd ( Code of Conduct ).pdf', 'public/files/b6sz1i2PDcm84Iw1rYXXC34OHvNBzlYLs8S7PUFw.pdf', 1, '2022-10-18 09:23:25', '2022-10-18 09:23:25');

-- --------------------------------------------------------

--
-- Table structure for table `government_process_sendings`
--

CREATE TABLE `government_process_sendings` (
  `id` int(10) UNSIGNED NOT NULL,
  `demand_id` int(11) DEFAULT NULL,
  `overseas_agencie_id` int(11) DEFAULT NULL,
  `thai_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cabinet_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `government_process_sendings`
--

INSERT INTO `government_process_sendings` (`id`, `demand_id`, `overseas_agencie_id`, `thai_date`, `cabinet_date`, `issue_date`, `file_name`, `file_path`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '1.1.2022', '1.1.2022', '1.1.2022', 'Alpha World Link Co, Ltd ( Code of Conduct ).pdf', 'public/files/atKXbuHa53K2LUUFwJUyswpwXb1mNh2YJOJL4vqi.pdf', 1, '2022-10-18 09:24:29', '2022-10-18 09:25:06'),
(2, 2, 2, '2.2.2022', '2.2.2022', '2.2.2022', 'BThTQaPa01uAcNOkN1YQV3Ybmy5ptmcYP6mNMWJC.doc', 'public/files/2RcJuNbXURlgw3bvYQjSIKJRJeYCnbsiWOt9Qbge.doc', 1, '2022-10-18 09:24:45', '2022-10-18 09:24:45');

-- --------------------------------------------------------

--
-- Table structure for table `interviews`
--

CREATE TABLE `interviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `interview_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interview_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `male` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `female` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interview_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `overseas_agencie_id` int(11) DEFAULT NULL,
  `demand_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `interviews`
--

INSERT INTO `interviews` (`id`, `interview_title`, `interview_date`, `male`, `female`, `interview_type`, `overseas_agencie_id`, `demand_id`, `created_at`, `updated_at`) VALUES
(1, 'First Interview', '1.1.2022', '2', '0', 'employer_interview', 1, 1, '2022-10-24 22:11:29', '2022-10-24 22:20:34'),
(2, 'First Interview', '1.2.2022', '0', '2', 'employer_interview', 1, 1, '2022-10-24 22:16:13', '2022-10-24 22:20:41'),
(3, 'First Interview', '1.1.2022', '1', '1', 'pre_interview', 1, 1, '2022-10-24 22:53:48', '2022-10-24 22:53:48');

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
(5, '2022_09_29_075400_add_fields_to_users_table', 2),
(6, '2022_10_01_035144_create_countries_table', 3),
(7, '2022_10_01_041558_create_overseas_agencies_table', 4),
(8, '2022_10_02_070418_create_demands_table', 5),
(9, '2022_10_02_093904_create_pre_interviews_table', 6),
(10, '2022_10_02_094732_add_overseas_agencie_id_to_pre_interviews_table', 7),
(16, '2022_10_03_003540_add_interview_title_to_pre_interviews_table', 11),
(17, '2022_10_03_004126_add_interview_title_to_employer_interviews_table', 12),
(18, '2022_10_03_015929_add_employer_interview_id_to_name_lists_table', 13),
(21, '2022_10_17_074050_create_interviews_table', 14),
(23, '2022_10_02_105223_create_name_lists_table', 15),
(24, '2022_10_02_235802_create_employer_interviews_table', 16),
(25, '2022_10_17_161113_add_extra_fields_to_name_lists_table', 17),
(26, '2022_10_18_150039_create_government_process_contracts_table', 18),
(27, '2022_10_18_154840_create_government_process_sendings_table', 19),
(29, '2022_10_19_040543_create_contracts_table', 20),
(30, '2022_10_21_081329_add_contract_id_to_name_lists_table', 21),
(31, '2022_10_23_043843_create_sendings_table', 22),
(33, '2022_10_25_050616_add_sending_field_to_name_lists_table', 23),
(34, '2022_10_25_054423_add_note_to_name_lists_table', 24),
(35, '2022_10_25_072930_add_fileds_to_users_table', 25);

-- --------------------------------------------------------

--
-- Table structure for table `name_lists`
--

CREATE TABLE `name_lists` (
  `id` int(10) UNSIGNED NOT NULL,
  `interview_id` int(11) DEFAULT NULL,
  `demand_id` int(11) DEFAULT NULL,
  `overseas_agencie_id` int(11) DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nrc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `native_town` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `come_from_to_interview` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expiry_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slip_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_issue_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medical_fail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `labour_card_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_of_labour_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `join_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_color` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interview_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fail_cancel` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contract_id` int(11) DEFAULT NULL,
  `contract_submit_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contract_user_id` int(11) DEFAULT NULL,
  `sending_id` int(11) DEFAULT NULL,
  `sending_submit_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sending_user_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `name_lists`
--

INSERT INTO `name_lists` (`id`, `interview_id`, `demand_id`, `overseas_agencie_id`, `name`, `gender`, `nrc`, `father_name`, `mother_name`, `qualification`, `date_of_birth`, `native_town`, `region`, `come_from_to_interview`, `expiry_date`, `slip_date`, `passport_issue_date`, `medical_fail`, `phone_number`, `passport_number`, `remark`, `labour_card_no`, `issue_of_labour_date`, `join_date`, `bg_color`, `interview_type`, `created_at`, `updated_at`, `no`, `fail_cancel`, `contract_id`, `contract_submit_date`, `contract_user_id`, `sending_id`, `sending_submit_date`, `sending_user_id`, `note`) VALUES
(1, 1, 1, 1, 'Pyae Pyae Phyo', 'F', '14/WAKAMA(N)318385', 'Kyaw Win', 'Myint Myint', '10', '30.10.2003', 'Wakema', 'Ayarwaddy', 'Wakema', 'Nail', 'Nail', 'Nail', '', '097767029109', 'Nail', 'Black List', NULL, NULL, '2022-10-25 05:01:29', NULL, 'employer_interview', '2022-10-24 22:31:29', '2022-10-24 23:51:54', '1', '', 1, '2022-10-25 05:03:03', 1, 1, '2022-10-25 05:09:52', '1', 'Ok'),
(2, 1, 1, 1, 'Cherry Lwin', 'F', '14/WaKAMA(N)318378', 'Kyaw Moe Khaing', 'Htay Than', '10', '7.5.2003', 'Wakema', 'Ayarwaddy', 'Wakema', '20.2.2027', '-', '21.2.2022', '', '09776731889', 'MF681124', '', NULL, NULL, '2022-10-25 05:01:29', '#ffffff', 'employer_interview', '2022-10-24 22:31:29', '2022-10-24 23:51:39', '2', '', 2, '2022-10-25 05:03:11', 1, 1, '2022-10-25 05:12:41', '1', 'No'),
(3, 3, 1, 1, 'Cherry Lwin', 'F', '14/WaKAMA(N)318378', 'Kyaw Moe Khaing', 'Htay Than', '10', '7.5.2003', 'Wakema', 'Ayarwaddy', 'Wakema', '20.2.2027', '-', '21.2.2022', '', '09776731889', 'MF681124', 'Failed', NULL, NULL, '2022-10-25 05:26:12', '#ffffff', 'pre_interview', '2022-10-24 22:56:12', '2022-10-24 22:56:45', '2', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 3, 1, 1, 'Ei Ei Han', 'F', '14/PHAPANA(N)173838', 'Win Shwe', 'Than Than', '8', '17.12.1991', 'Pharpon', 'Ayarwaddy', 'Pharpon', 'Nail', 'Nail', 'Nail', '', '09686554160', 'Nail', '', NULL, NULL, '2022-10-25 05:26:12', '#ffffff', 'pre_interview', '2022-10-24 22:56:12', '2022-10-24 22:59:44', '3', 'Book Fail', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 3, 1, 1, 'Cherry Lwin', 'F', '14/WaKAMA(N)318378', 'Kyaw Moe Khaing', 'Htay Than', '10', '7.5.2003', 'Wakema', 'Ayarwaddy', 'Wakema', '20.2.2027', '-', '21.2.2022', '', '09776731889', 'MF681124', '', NULL, NULL, '2022-10-25 05:36:07', NULL, 'pre_interview', '2022-10-24 23:06:07', '2022-10-24 23:36:00', '2', '', NULL, NULL, NULL, NULL, NULL, NULL, 'asdf'),
(6, 3, 1, 1, 'Ei Ei Han', 'F', '14/PHAPANA(N)173838', 'Win Shwe', 'Than Than', '8', '17.12.1991', 'Pharpon', 'Ayarwaddy', 'Pharpon', 'Nail', 'Nail', 'Nail', '', '09686554160', 'Nail', '', NULL, NULL, '2022-10-25 05:36:07', NULL, 'pre_interview', '2022-10-24 23:06:07', '2022-10-24 23:36:01', '3', '', NULL, NULL, NULL, NULL, NULL, NULL, 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `overseas_agencies`
--

CREATE TABLE `overseas_agencies` (
  `id` int(10) UNSIGNED NOT NULL,
  `employer_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_of_company` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_website` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `countrie_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `overseas_agencies`
--

INSERT INTO `overseas_agencies` (`id`, `employer_name`, `type_of_company`, `company_phone`, `company_email`, `company_website`, `company_address`, `countrie_id`, `remark`, `created_at`, `updated_at`) VALUES
(1, 'Testing', NULL, NULL, NULL, NULL, NULL, '1', NULL, '2022-10-03 02:14:41', '2022-10-03 02:14:41'),
(2, 'ABC Thai Company', NULL, NULL, NULL, NULL, NULL, '1', NULL, '2022-10-18 09:11:41', '2022-10-18 09:11:41');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$SvkOFRwzjk0N9RKpC4bAfOsMK3nRyM8BKKiqcmcBphGKoejsqVrLq', '2022-09-28 23:57:59');

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
-- Table structure for table `pre_interviews`
--

CREATE TABLE `pre_interviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `demand_id` int(11) DEFAULT NULL,
  `interview_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `male` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `female` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `overseas_agencie_id` int(11) DEFAULT NULL,
  `interview_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pre_interviews`
--

INSERT INTO `pre_interviews` (`id`, `demand_id`, `interview_date`, `male`, `female`, `created_at`, `updated_at`, `overseas_agencie_id`, `interview_title`) VALUES
(1, 1, '1.10.2022', '50', '0', '2022-10-16 23:27:58', '2022-10-16 23:27:58', 1, 'First Interview');

-- --------------------------------------------------------

--
-- Table structure for table `sendings`
--

CREATE TABLE `sendings` (
  `id` int(10) UNSIGNED NOT NULL,
  `contract_id` int(11) DEFAULT NULL,
  `demand_id` int(11) DEFAULT NULL,
  `overseas_agencie_id` int(11) DEFAULT NULL,
  `sending_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `male` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `female` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sendings`
--

INSERT INTO `sendings` (`id`, `contract_id`, `demand_id`, `overseas_agencie_id`, `sending_date`, `male`, `female`, `remark`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '1.1.2022', '2', '0', NULL, '1', '2022-10-24 22:14:48', '2022-10-24 22:33:19');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `employee_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nrc_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `join_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login_at` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login_ip` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `device` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `employee_id`, `phone`, `nrc_number`, `gender`, `address`, `join_date`, `passport_photo`, `last_login_at`, `last_login_ip`, `device`) VALUES
(1, 'U Admin', 'admin@gmail.com', NULL, '$2y$10$XghoSCFS2wmT1V8yHZC1HOeFn.2GEcMBOjA7ecXgzxLiEAdJxij96', NULL, '2022-09-28 23:48:46', '2022-10-25 01:05:35', '00001', '091231231233', '1/abc(n)009221', 'male', 'YGN', '2022-09-29 03:07 PM', 'public/passport/zFWl8Bms7NsJ2ULPZFVnHQRpMrzYJkkdYHYMfVmV.png', '2022-10-25 07:35:35', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36'),
(2, 'Mg Mg', 'mgmg@gmail.com', NULL, '$2y$10$Y/SX9IYZlHq8K85iEdedAuCZNwI8GkK.wBuOjItk2OZ0LnG8oC11e', NULL, '2022-09-29 01:31:35', '2022-10-25 01:06:49', '00002', '09123123123', '1/abc(n)009221', 'male', 'Yangon', '2022-10-25 02:06 PM', 'public/passport/HDdLmt2GDQemtebUgYajsRsVW1SOj75IYJya1Eqi.png', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demands`
--
ALTER TABLE `demands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employer_interviews`
--
ALTER TABLE `employer_interviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `government_process_contracts`
--
ALTER TABLE `government_process_contracts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `government_process_sendings`
--
ALTER TABLE `government_process_sendings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interviews`
--
ALTER TABLE `interviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `name_lists`
--
ALTER TABLE `name_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overseas_agencies`
--
ALTER TABLE `overseas_agencies`
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
-- Indexes for table `pre_interviews`
--
ALTER TABLE `pre_interviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sendings`
--
ALTER TABLE `sendings`
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
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `demands`
--
ALTER TABLE `demands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employer_interviews`
--
ALTER TABLE `employer_interviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `government_process_contracts`
--
ALTER TABLE `government_process_contracts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `government_process_sendings`
--
ALTER TABLE `government_process_sendings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `interviews`
--
ALTER TABLE `interviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `name_lists`
--
ALTER TABLE `name_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `overseas_agencies`
--
ALTER TABLE `overseas_agencies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pre_interviews`
--
ALTER TABLE `pre_interviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sendings`
--
ALTER TABLE `sendings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
