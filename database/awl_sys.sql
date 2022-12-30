-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 02, 2022 at 07:03 PM
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
(1, 1, '1.1.2022', '100', '100', '2022-10-02 00:50:44', '2022-10-02 01:21:30'),
(3, 2, '2.2.2022', '100', '100', '2022-10-02 01:08:10', '2022-10-02 01:08:10'),
(4, 2, '3.3.2022', '50', '0', '2022-10-02 02:58:08', '2022-10-02 02:58:08');

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
(5, '2022_09_29_075400_add_fields_to_users_table', 2),
(6, '2022_10_01_035144_create_countries_table', 3),
(7, '2022_10_01_041558_create_overseas_agencies_table', 4),
(8, '2022_10_02_070418_create_demands_table', 5),
(9, '2022_10_02_093904_create_pre_interviews_table', 6),
(10, '2022_10_02_094732_add_overseas_agencie_id_to_pre_interviews_table', 7),
(12, '2022_10_02_105223_create_name_lists_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `name_lists`
--

CREATE TABLE `name_lists` (
  `id` int(10) UNSIGNED NOT NULL,
  `pre_interview_id` int(11) DEFAULT NULL,
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `name_lists`
--

INSERT INTO `name_lists` (`id`, `pre_interview_id`, `demand_id`, `overseas_agencie_id`, `name`, `gender`, `nrc`, `father_name`, `mother_name`, `qualification`, `date_of_birth`, `native_town`, `region`, `come_from_to_interview`, `expiry_date`, `slip_date`, `passport_issue_date`, `medical_fail`, `phone_number`, `passport_number`, `remark`, `labour_card_no`, `issue_of_labour_date`, `join_date`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'Pyae Pyae Phyo', 'F', '14/WAKAMA(N)318385', 'Kyaw Win', 'Myint Myint', '10', '30.10.2003', 'Wakema', 'Ayarwaddy', 'Wakema', 'Nail', 'Nail', 'Nail', 'X-Ray Fail ', '097767029109', 'Nail', '', NULL, NULL, '2022-10-02 04:51:05', '2022-10-01 22:21:05', '2022-10-01 22:21:05'),
(2, 1, 1, 1, 'Cherry Lwin', 'F', '14/WaKAMA(N)318378', 'Kyaw Moe Khaing', 'Htay Than', '10', '7.5.2003', 'Wakema', 'Ayarwaddy', 'Wakema', '20.2.2027', '-', '21.2.2022', '', '09776731889', 'MF681124', '', NULL, NULL, '2022-10-02 04:51:05', '2022-10-01 22:21:05', '2022-10-01 22:21:05'),
(3, 1, 1, 1, 'Ei Ei Han', 'F', '14/PHAPANA(N)173838', 'Win Shwe', 'Than Than', '8', '17.12.1991', 'Pharpon', 'Ayarwaddy', 'Pharpon', 'Nail', 'Nail', 'Nail', '', '09686554160', 'Nail', '', NULL, NULL, '2022-10-02 04:51:05', '2022-10-01 22:21:05', '2022-10-01 22:21:05'),
(4, 1, 1, 1, 'Soe Thiri Khaing', 'F', '14/HAKAKA(N)045792', 'Khin Mg Soe', 'Win Win Khaing', '10', '8.8.1995', 'Haigyikyun', 'Ayarwaddy', 'Haigyikyun', 'Nail', 'Nail', 'Nail', '', '09688012856', 'Nail', '', NULL, NULL, '2022-10-02 04:51:05', '2022-10-01 22:21:05', '2022-10-01 22:21:05'),
(5, 1, 1, 1, 'Khaing Tha Zin Thin', 'F', '14/WAKHAMA(N)311491', 'Win Tun', 'Sein Htwe', '10', '2.6.2004', 'Wakema', 'Ayarwaddy', 'Wakema', '27.6.2027', '-', '28.7.2022', '', '09761275851', 'MG194018', '', NULL, NULL, '2022-10-02 04:51:05', '2022-10-01 22:21:05', '2022-10-01 22:21:05'),
(6, 1, 1, 1, 'Zar Zar Nwe', 'F', '14/WAKHAMA(N)358624', 'Mya Soe', 'Daw Soe', '9', '3.2.2003', 'Wakema', 'Ayarwaddy', 'Wakema', '27.7.2027', '-', '28.7.2022', '', '09661534687', 'MG194019', '', NULL, NULL, '2022-10-02 04:51:05', '2022-10-01 22:21:05', '2022-10-01 22:21:05'),
(7, 1, 1, 1, 'Khaing Yu May', 'F', '14/KAKAHTA(N)157119', 'Kyaw Mya Gyi', 'Aye Phyu', '8', '5.10.1987', 'Kangyidouk', 'Ayarwaddy', 'Kangyidouk', 'Nail', 'Nail', 'Nail', '', '09660470710', 'Nail', '', NULL, NULL, '2022-10-02 04:51:05', '2022-10-01 22:21:05', '2022-10-01 22:21:05'),
(8, 1, 1, 1, 'Nant May Hlaing Myint', 'F', '14/KAKAHTA(N)159432', 'Shwe Myint Kyaw', 'Balue May', 'B.Sc\n(Math)', '3.5.1996', 'Kangyidouk', 'Ayarwaddy', 'Kangyidouk', 'Nail', 'Nail', 'Nail', '', '09250443047', 'Nail', '', NULL, NULL, '2022-10-02 04:51:05', '2022-10-01 22:21:05', '2022-10-01 22:21:05'),
(9, 1, 1, 1, 'Khin Hnin Wai', 'F', '14/LAMANA(N)117056', 'Mg Pu', 'San Win', '8', '12.2.1997', 'Lemyethna', 'Ayarwaddy', 'Lemyetha', 'Nail', 'Nail', 'Nail', '', '09253734520', 'Nail', '', NULL, NULL, '2022-10-02 04:51:05', '2022-10-01 22:21:05', '2022-10-01 22:21:05'),
(10, 1, 1, 1, 'Theint Theint Thu', 'F', '14/LAMANA(N)116854', 'Tin Mg Than', 'Ohm San', '4', '5.1.1995', 'Lemyethna', 'Ayarwaddy', 'Lemyetha', 'Nail', 'Nail', 'Nail', '', '09680162359', 'Nail', '', NULL, NULL, '2022-10-02 04:51:05', '2022-10-01 22:21:05', '2022-10-01 22:21:05'),
(11, 1, 1, 1, 'Zin Zin Htay', 'F', '14/LAMANA(N)135951', 'Thaung Nyunt', 'Win Nu', '8', '7.10.1986', 'Lemyethna', 'Ayarwaddy', 'Lemyetha', 'Nail', 'Nail', 'Nail', '', '09665381077', 'Nail', '', NULL, NULL, '2022-10-02 04:51:05', '2022-10-01 22:21:05', '2022-10-01 22:21:05'),
(12, 1, 1, 1, 'Ei Zin Maw', 'F', '14/LAMANA(N)122070', 'Min Aung', 'Zin Zin Htay', '9', '13.11.2003', 'Lemyethna', 'Ayarwaddy', 'Lemyetha', 'Nail', 'Nail', 'Nail', '', '09893069073', 'Nail', '', NULL, NULL, '2022-10-02 04:51:05', '2022-10-01 22:21:05', '2022-10-01 22:21:05'),
(13, 1, 1, 1, 'Win Win Htet', 'F', '14/LAMANA(N)102549', 'Win Naing', 'Myint Myint Thein', '10', '17.03.1999', 'Lemyethna', 'Ayarwaddy', 'Lemyetha', 'Nail', 'Nail', 'Nail', '', '09677749539', 'Nail', '', NULL, NULL, '2022-10-02 04:51:05', '2022-10-01 22:21:05', '2022-10-01 22:21:05'),
(14, 1, 1, 1, 'Zin Zin Phyo', 'F', '14/LAMANA(N)112038', 'Myint Htay', 'Nyunt Nyunt Htay', '9', '03.08.2000', 'Lemyethna', 'Ayarwaddy', 'Lemyetha', 'Nail', 'Nail', 'Nail', '', '09672473384', 'Nail', '', NULL, NULL, '2022-10-02 04:51:05', '2022-10-01 22:21:05', '2022-10-01 22:21:05'),
(15, 1, 1, 1, 'Hnin Ei Hlaing', 'F', '14/LAMANA(N)131824', 'Moe Lwin', 'Nyo Nyo Hlaing', '10', '02.04.2004', 'Lemyethna', 'Ayarwaddy', 'Lemyetha', 'Nail', 'Nail', 'Nail', '', '09682658233', 'Nail', '', NULL, NULL, '2022-10-02 04:51:05', '2022-10-01 22:21:05', '2022-10-01 22:21:05'),
(16, 1, 1, 1, 'May Win Khaing', 'F', '14/LAMANA(N)092089', 'Myint Shwe', 'Yin Shwe', '4', '12.01.1987', 'Lemyethna', 'Ayarwaddy', 'Lemyetha', 'Nail', 'Nail', 'Nail', 'B Positive', '09441586243', 'Nail', '', NULL, NULL, '2022-10-02 04:51:05', '2022-10-01 22:21:05', '2022-10-01 22:21:05'),
(17, 1, 1, 1, 'War War Soe', 'F', '', '', '', '10', '11.05.1994', 'Ngaputaw', 'Ayarwaddy', 'Ngaputaw', '26.07.2023', '', '', '', '09764524590', '', 'FAIL(Book)', NULL, NULL, '2022-10-02 04:51:05', '2022-10-01 22:21:05', '2022-10-01 22:21:05'),
(18, 1, 1, 1, 'Thandar Moe', 'F', '14/LAMANA(N)125744', 'Mg Pu', 'Than Than Ohm', '10', '01.05.2003', 'Lemyethna', 'Ayarwaddy', 'Lemyetha', 'Nail', 'Nail', 'Nail', '', '09661953562', 'Nail', '', NULL, NULL, '2022-10-02 04:51:05', '2022-10-01 22:21:05', '2022-10-01 22:21:05'),
(19, 1, 1, 1, 'Thazin Moe', 'F', '14/LAMANA(N)103644', 'Mg Pu', 'Than Than Ohm', '10', '09.09.1999', 'Lemyethna', 'Ayarwaddy', 'Lemyetha', 'Nail', 'Nail', 'Nail', '', '09662789828', 'Nail', '', NULL, NULL, '2022-10-02 04:51:05', '2022-10-01 22:21:05', '2022-10-01 22:21:05'),
(20, 1, 1, 1, 'San San Aye', 'F', '7/NYALAPA(N)123249', 'Kyaw Lin', 'Kyin Than', '7', '4.6.1986', 'Naunglaybin', 'Bago', 'Naunglaybin', 'Nail', 'Nail', 'Nail', '', '09794140119', 'Nail', '', NULL, NULL, '2022-10-02 04:51:05', '2022-10-01 22:21:05', '2022-10-01 22:21:05'),
(21, 1, 1, 1, 'Hnin Thandar Aung', 'F', '7/PAKANA(N)491709', 'Aung Ko Ko', 'Khaing Khaing Htwe', '10', '3.2.2001', 'Bago', 'Bago', 'Bago', 'Nail', 'Nail', 'Nail', '', '09683594071', 'Nail', '', NULL, NULL, '2022-10-02 04:51:05', '2022-10-01 22:21:05', '2022-10-01 22:21:05'),
(22, 1, 1, 1, 'Hla Hla Htay Mu', 'F', '7/PAKANA(N)243800', 'Khin Win', 'Tin Nyo', '7', '26.10.1989', 'Bago', 'Bago', 'Bago', '04.02.2027', '-', '5.2.2022', '', '09402309736', 'MF654201', '', NULL, NULL, '2022-10-02 04:51:05', '2022-10-01 22:21:05', '2022-10-01 22:21:05'),
(23, 1, 1, 1, 'Chan Thar', 'F', '7/PAKHANA(N)318849', 'Boe Naing', 'Ohm Sein', '6', '12.6.1989', 'Bago', 'Bago', 'Bago', '04.02.2027', '-', '5.2.2022', 'X Ray ', '09890003846', 'MF654203', '', NULL, NULL, '2022-10-02 04:51:05', '2022-10-01 22:21:05', '2022-10-01 22:21:05'),
(24, 1, 1, 1, 'Khine Yin Min Oo', 'F', '7/TAKANA(N)143946', 'Han Win', 'Daw Thida', '10', '26.3.2001', 'Thegon', 'Bago', 'Thegon', '16.08.2027', '-', '17.8.2022', '', '09676137949', 'MG298994', '', NULL, NULL, '2022-10-02 04:51:05', '2022-10-01 22:21:05', '2022-10-01 22:21:05'),
(25, 1, 1, 1, 'Hein Moe', 'M', '14/KALANA(N)184073', 'U Loe', 'Soe Soe', '9', '7.7.1995', 'Kyaiklat', 'Ayarwaddy', 'Kyaiklat', '30.1.2025', '-', '31.1.2020', '', '09790271474', 'MF001088', 'PP Update', NULL, NULL, '2022-10-02 04:51:05', '2022-10-01 22:21:05', '2022-10-01 22:21:05'),
(26, 1, 1, 1, 'Phyo Htet Aung', 'M', '7/PAMANA(N)232603', 'Ye Min Aung', 'Htet Htet Khaing', '10', '11.8.2004', 'Pyay', 'Bago', 'Pyay', 'Nail', 'Nail', 'Nail', '', '09980125159', 'Nail', '', NULL, NULL, '2022-10-02 04:51:05', '2022-10-01 22:21:05', '2022-10-01 22:21:05'),
(27, 1, 1, 1, 'Zaw Htike', 'M', '', '', '', '8', '05.10.1996', 'Yaytarshay', 'Bago', '', '12.01.2027', '', '', '', '09692366087', '', 'FAIL(Book)', NULL, NULL, '2022-10-02 04:51:05', '2022-10-01 22:21:05', '2022-10-01 22:21:05'),
(28, 1, 1, 1, 'Hein Thet Aung', 'M', '7/PAMANA(N)232603', 'Mg Aye', 'Pyome Pyome Aye', 'Third year\n( Myanmar)', '02.06.1995', 'Mohnyin', 'Kachin', 'Mohnyin', '01.07.2027', 'Nail', '2.7.2022', 'B Positive ', '09455461121', 'MG107084', '', NULL, NULL, '2022-10-02 04:51:05', '2022-10-01 22:21:05', '2022-10-01 22:21:05'),
(29, 1, 1, 1, 'Soe Tun Kyaw', 'M', '', '', '', '5', '07.09.1993', 'Thaton', 'Mon', '', '', '', '', '', '09660961964', '', 'FAIL(Book)', NULL, NULL, '2022-10-02 04:51:05', '2022-10-01 22:21:05', '2022-10-01 22:21:05'),
(30, 1, 1, 1, 'Khant Ko Ko', 'M', '9/TAKANA(N)250797', 'Aung Aung', 'Moe Moe Hlaing', '10', '12.04.2004', 'Tatkon', 'Naypyidaw', 'Tatkon', 'Nail', 'Nail', 'Nail', '', '09963828948', 'Nail', '', NULL, NULL, '2022-10-02 04:51:05', '2022-10-01 22:21:05', '2022-10-01 22:21:05'),
(31, 1, 1, 1, 'Thet San Aung', 'M', '6/PALANA(N)100271', 'Ohm Tin', 'Daw Htwe', '8', '10.1.1990', 'Palaw', 'Tanintharyee', 'Palaw', 'Nail', '3.9.2022', 'Nail', '', '09456077241', 'Nail', '', NULL, NULL, '2022-10-02 04:51:05', '2022-10-01 22:21:05', '2022-10-01 22:21:05'),
(32, 1, 1, 1, 'Khine Khant Kyaw', 'M', '6/PALANA(N)106936', 'Win Nwet', 'Ni Ni Win', '10', '27.11.2000', 'Palaw', 'Tanintharyee', 'Palaw', '', '3.9.2022', '', '', '09977058048', 'Nail', '', NULL, NULL, '2022-10-02 04:51:05', '2022-10-01 22:21:05', '2022-10-01 22:21:05'),
(33, 1, 1, 1, 'Win Ya Soe', 'M', '6/PALANA(N)114337', 'Kyaw Soe', 'Mya Htay', '9', '6.6.2004', 'Palaw', 'Tanintharyee', 'Palaw', '', '3.9.2022', '', '', '09678719470', 'Nail', '', NULL, NULL, '2022-10-02 04:51:05', '2022-10-01 22:21:05', '2022-10-01 22:21:05'),
(34, 1, 1, 1, 'Zin Min Aung', 'M', '12/THAKANA(N)105570', 'Aye Kyaing', 'Khin Pyome Myint', '10', '26.05.1989', 'Tatkon', 'Yangon', '', '10.05.2022', '', '11.3.2022', '', '09253311101', 'MC054595', 'PP Update', NULL, NULL, '2022-10-02 04:51:05', '2022-10-01 22:21:05', '2022-10-01 22:21:05'),
(35, 1, 1, 1, 'Zay Chan Paing', 'M', '8/THAYANA(N)117761', 'Kyaw Swar Myint', 'Ye Ye Nwe', '10', '28.06.2004', 'Hlaingtharyar', 'Yangon', 'Hlaingtharyar', 'Nail', 'Nail', 'Nail', '', '09757262546', 'Nail', '', NULL, NULL, '2022-10-02 04:51:05', '2022-10-01 22:21:05', '2022-10-01 22:21:05'),
(36, 1, 1, 1, 'Aung Kaung Htet', 'M', '12/OHKAMA(N)271850', 'Hla Htay', 'Khin Mar Win', '10', '11.03.2001', 'North Okkalapa', 'Yangon', 'North Okkalapa', '24.03.2027', '-', '25.3.2022', '', '09764700121', 'MF752268', '', NULL, NULL, '2022-10-02 04:51:05', '2022-10-01 22:21:05', '2022-10-01 22:21:05'),
(37, 1, 1, 1, 'Khin Mg Win', 'M', '7/PATANA(N)121809', 'Aye Thaung', 'Tin Tin Nwet', '7', '1.8.1986', 'PaundDal', 'Bago', 'PaundDal', 'Nail', 'Nail', 'Nail', '', '09250408575', 'Nail', '', NULL, NULL, '2022-10-02 04:51:05', '2022-10-01 22:21:05', '2022-10-01 22:21:05');

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
(1, 'ABC Co.,Ltd', 'Factory', '09123123123', 'info@abc.com', 'www.abc.com', 'Thailand', '1', 'No Test', '2022-09-30 21:59:23', '2022-09-30 22:19:07'),
(2, 'DEF', NULL, NULL, NULL, NULL, NULL, '1', NULL, '2022-10-02 01:07:56', '2022-10-02 01:07:56');

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
  `overseas_agencie_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pre_interviews`
--

INSERT INTO `pre_interviews` (`id`, `demand_id`, `interview_date`, `male`, `female`, `created_at`, `updated_at`, `overseas_agencie_id`) VALUES
(1, 1, '10.1.2022', '100', '0', '2022-10-02 03:19:39', '2022-10-02 03:30:38', 1),
(2, 1, '11.1.2022', '0', '100', '2022-10-02 03:19:46', '2022-10-02 03:19:46', 1),
(3, 3, '20.2.2022', '100', '0', '2022-10-02 03:24:23', '2022-10-02 03:24:23', 2),
(4, 3, '21.2.2022', '0', '100', '2022-10-02 03:24:33', '2022-10-02 03:24:33', 2);

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
  `passport_photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `employee_id`, `phone`, `nrc_number`, `gender`, `address`, `join_date`, `passport_photo`) VALUES
(1, 'U Admin', 'admin@gmail.com', NULL, '$2y$10$XghoSCFS2wmT1V8yHZC1HOeFn.2GEcMBOjA7ecXgzxLiEAdJxij96', NULL, '2022-09-28 23:48:46', '2022-09-29 02:07:06', '00001', '091231231233', '1/abc(n)009221', 'male', 'YGN', '2022-09-29 03:07 PM', 'public/passport/zFWl8Bms7NsJ2ULPZFVnHQRpMrzYJkkdYHYMfVmV.png'),
(2, 'Mg Mg', 'mgmg@gmail.com', NULL, '$2y$10$Y/SX9IYZlHq8K85iEdedAuCZNwI8GkK.wBuOjItk2OZ0LnG8oC11e', NULL, '2022-09-29 01:31:35', '2022-09-29 01:31:35', '0001', '09123123123', '1/abc(n)009221', 'male', 'Yangon', NULL, 'public/passport/HDdLmt2GDQemtebUgYajsRsVW1SOj75IYJya1Eqi.png');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `demands`
--
ALTER TABLE `demands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `name_lists`
--
ALTER TABLE `name_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
