-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2022 at 08:12 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `momo_base`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_momos`
--

CREATE TABLE `account_momos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gioihan` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_momos`
--

INSERT INTO `account_momos` (`id`, `sdt`, `password`, `token`, `gioihan`, `status`, `created_at`, `updated_at`) VALUES
(2, '0915272831', '123456', '66CB3228-A908-6A38-4E5E-E5EACEA27C312', 30000000, '2', '2021-12-27 02:07:31', '2022-01-08 01:53:03'),
(3, '0964103861', 'abcd1234', '66CB3228-A908-6A38-4E5E-E5EACEA27C312', 30000000, '1', '2021-12-31 10:11:42', '2021-12-31 11:14:48'),
(4, '0964838323', '123456', '66CB3228-A908-6A38-4E5E-E5EACEA27C312', 30000000, '2', '2021-12-31 10:13:31', '2021-12-31 10:18:44');

-- --------------------------------------------------------

--
-- Table structure for table `caches`
--

CREATE TABLE `caches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `time_bank_top_tuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `version` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `caches`
--

INSERT INTO `caches` (`id`, `time_bank_top_tuan`, `version`, `created_at`, `updated_at`) VALUES
(1, '24/05/2021', '1.0', NULL, '2021-05-24 17:10:54');

-- --------------------------------------------------------

--
-- Table structure for table `chan_le2s`
--

CREATE TABLE `chan_le2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `min` int(11) NOT NULL,
  `max` int(11) NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tile` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chan_le2s`
--

INSERT INTO `chan_le2s` (`id`, `min`, `max`, `sdt`, `tile`, `created_at`, `updated_at`) VALUES
(1, 20000, 2000000, '3', 2.5, NULL, '2022-01-08 02:00:26');

-- --------------------------------------------------------

--
-- Table structure for table `chan_les`
--

CREATE TABLE `chan_les` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `min` int(11) NOT NULL,
  `max` int(11) NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tile` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chan_les`
--

INSERT INTO `chan_les` (`id`, `min`, `max`, `sdt`, `tile`, `created_at`, `updated_at`) VALUES
(1, 20000, 2000000, '3', 2.5, NULL, '2022-01-08 02:00:11');

-- --------------------------------------------------------

--
-- Table structure for table `config_message_momos`
--

CREATE TABLE `config_message_momos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `config_message_momos`
--

INSERT INTO `config_message_momos` (`id`, `type`, `message`, `created_at`, `updated_at`) VALUES
(1, 'tra-thuong', 'Trả thường chẵn lẻ Momo', NULL, '2021-05-30 11:11:06'),
(2, 'thuong-top-tuan', 'Trả thưởng top tuần', NULL, '2021-12-10 14:34:49'),
(3, 'no-huu', 'Trả thưởng game Nổ Hũ', NULL, '2021-05-30 11:11:06');

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
-- Table structure for table `gap3s`
--

CREATE TABLE `gap3s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `min` int(11) NOT NULL,
  `max` int(11) NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tile1` double NOT NULL,
  `tile2` double NOT NULL,
  `tile3` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gap3s`
--

INSERT INTO `gap3s` (`id`, `min`, `max`, `sdt`, `tile1`, `tile2`, `tile3`, `created_at`, `updated_at`) VALUES
(1, 50000, 2000000, '3', 3.5, 4.5, 5.5, NULL, '2022-01-08 02:00:41');

-- --------------------------------------------------------

--
-- Table structure for table `lich_su_choi_momos`
--

CREATE TABLE `lich_su_choi_momos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt_get` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `magiaodich` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tiencuoc` int(11) NOT NULL,
  `tiennhan` int(11) NOT NULL,
  `trochoi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ketqua` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lich_su_choi_momos`
--

INSERT INTO `lich_su_choi_momos` (`id`, `sdt`, `sdt_get`, `magiaodich`, `tiencuoc`, `tiennhan`, `trochoi`, `noidung`, `ketqua`, `status`, `created_at`, `updated_at`) VALUES
(1, '0963198566', '0963198566', '123456', 3000000, 699999, 'chan-le', 'L', 1, 1, '2021-12-09 15:37:55', '2021-12-10 15:37:55'),
(2, '012456789', '012456789', '13579', 3000000, 699999, 'Tai Xiu', 'C', 2, 1, '2021-12-09 15:37:55', '2021-12-10 15:37:55'),
(3, '015148487', '015148487', '852161', 3000000, 699999, 'Chẵn lẻ', '', 1, 1, '2021-12-09 15:37:55', '2021-12-10 15:37:55');

-- --------------------------------------------------------

--
-- Table structure for table `lich_su_choi_no_hus`
--

CREATE TABLE `lich_su_choi_no_hus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `magiaodich` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tiencuoc` int(11) NOT NULL,
  `tienvaohu` int(11) NOT NULL,
  `tiennhan` int(11) NOT NULL,
  `noidung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ketqua` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lich_su_tra_thuong_tuans`
--

CREATE TABLE `lich_su_tra_thuong_tuans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sotien` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lich_su_tra_thuong_tuans`
--

INSERT INTO `lich_su_tra_thuong_tuans` (`id`, `sdt`, `sotien`, `status`, `created_at`, `updated_at`) VALUES
(1, '0963205899', 3000000, 123, '2021-12-09 15:35:21', '2021-12-10 15:35:21');

-- --------------------------------------------------------

--
-- Table structure for table `limit_crons`
--

CREATE TABLE `limit_crons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `limit_crons`
--

INSERT INTO `limit_crons` (`id`, `type`, `time`, `created_at`, `updated_at`) VALUES
(1, 'gettrathuongtuan', 1639115873, '2021-12-10 04:57:53', '2021-12-10 04:57:53'),
(2, 'trathuonggiaodich', 1639115874, '2021-12-10 04:57:54', '2021-12-10 04:57:54'),
(3, 'trathuonggiaodicherror', 1639115875, '2021-12-10 04:57:55', '2021-12-10 04:57:55'),
(4, 'xulinohu', 1639115875, '2021-12-10 04:57:55', '2021-12-10 04:57:55'),
(5, 'xulinohuloi', 1639115876, '2021-12-10 04:57:56', '2021-12-10 04:57:56'),
(6, 'xulitrathuongtuan', 1639115876, '2021-12-10 04:57:56', '2021-12-10 04:57:56'),
(7, 'xulitrathuongtuanloi', 1639115877, '2021-12-10 04:57:57', '2021-12-10 04:57:57'),
(8, 'savegiaodich', 1639115938, '2021-12-10 04:58:58', '2021-12-10 04:58:58'),
(9, 'gettrathuongtuan', 1639115944, '2021-12-10 04:59:04', '2021-12-10 04:59:04'),
(10, 'trathuonggiaodich', 1639115944, '2021-12-10 04:59:04', '2021-12-10 04:59:04'),
(11, 'trathuonggiaodicherror', 1639115945, '2021-12-10 04:59:05', '2021-12-10 04:59:05'),
(12, 'xulinohu', 1639115945, '2021-12-10 04:59:05', '2021-12-10 04:59:05'),
(13, 'xulinohuloi', 1639115946, '2021-12-10 04:59:06', '2021-12-10 04:59:06'),
(14, 'xulitrathuongtuan', 1639115947, '2021-12-10 04:59:07', '2021-12-10 04:59:07'),
(15, 'xulitrathuongtuanloi', 1639115947, '2021-12-10 04:59:07', '2021-12-10 04:59:07');

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
(4, '2021_05_22_124541_create_no_hus_table', 1),
(5, '2014_10_12_000000_create_users_table', 2),
(6, '2014_10_12_100000_create_password_resets_table', 2),
(7, '2019_08_19_000000_create_failed_jobs_table', 2),
(8, '2021_05_22_151157_create_tai_xius_table', 2),
(9, '2021_05_22_153235_create_settings_table', 3),
(10, '2021_05_22_155928_create_chan_les_table', 4),
(11, '2021_05_22_155947_create_chan_le2s_table', 4),
(12, '2021_05_22_160126_create_gap3s_table', 4),
(13, '2021_05_22_160205_create_tong3_sos_table', 4),
(14, '2021_05_22_161329_create_1_phan3s_table', 4),
(15, '2021_05_22_181803_create_x1_phan3s_table', 5),
(16, '2021_05_22_195443_create_telephone_momos_table', 6),
(17, '2021_05_22_202642_create_account_momos_table', 7),
(18, '2021_05_23_101602_create_config_message_momos_table', 8),
(19, '2021_05_23_111027_create_lich_su_choi_momos_table', 9),
(20, '2021_05_23_151953_create_caches_table', 10),
(21, '2021_05_23_204429_create_setting_phan_thuong_tops_table', 11),
(22, '2021_05_23_205626_create_caches_table', 12),
(23, '2021_05_23_212240_create_lich_su_tra_thuong_tuans_table', 13),
(24, '2021_05_24_103151_create_no_huus_table', 14),
(25, '2021_05_24_103223_create_lich_su_choi_no_hus_table', 14),
(26, '2021_05_26_185931_create_limit_crons_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `no_huus`
--

CREATE TABLE `no_huus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tiencuoc` int(11) NOT NULL,
  `tienmacdinh` int(11) NOT NULL,
  `ptvaohu` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `no_huus`
--

INSERT INTO `no_huus` (`id`, `tiencuoc`, `tienmacdinh`, `ptvaohu`, `created_at`, `updated_at`) VALUES
(1, 100000, 1000000, 70, NULL, '2021-05-29 16:52:13');

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
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkvideoyoutube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zalo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `script` varchar(10000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `baotri` int(11) DEFAULT NULL,
  `color_header` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_footer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_table` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_table2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `on_chanle` int(11) NOT NULL,
  `on_taixiu` int(11) NOT NULL,
  `on_chanle2` int(11) NOT NULL,
  `on_gap3` int(11) NOT NULL,
  `on_tong3so` int(11) NOT NULL,
  `on_1phan3` int(11) NOT NULL,
  `on_nohu` int(11) NOT NULL,
  `on_trathuongtuan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `description`, `logo`, `linkvideoyoutube`, `zalo`, `script`, `baotri`, `color_header`, `color_footer`, `color_table`, `color_table2`, `on_chanle`, `on_taixiu`, `on_chanle2`, `on_gap3`, `on_tong3so`, `on_1phan3`, `on_nohu`, `on_trathuongtuan`, `created_at`, `updated_at`) VALUES
(1, 'MINI GAME MOMO', 'Game chẵn lẻ momo hàng đầu Việt Nam', 'https://static.mservice.io/jk/accmm/rs/assets/img/momo-white.png', 'https://www.youtube.com/embed/3nL87hawUsI', 'https://www.asianscreens.com/yui_amane2.asp', NULL, 0, '#ff1493', '#122a38', '#3c8dbc', '#3c8dbc', 1, 1, 1, 1, 1, 1, 1, 2, NULL, '2022-01-08 02:03:29');

-- --------------------------------------------------------

--
-- Table structure for table `setting_phan_thuong_tops`
--

CREATE TABLE `setting_phan_thuong_tops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `top` int(11) NOT NULL,
  `sdt2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phanthuong` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `magic` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting_phan_thuong_tops`
--

INSERT INTO `setting_phan_thuong_tops` (`id`, `top`, `sdt2`, `phanthuong`, `created_at`, `updated_at`, `magic`) VALUES
(1, 1, '079508****', 1000000, NULL, '2021-12-29 02:23:45', 1534000),
(2, 2, '033779****', 800000, NULL, '2021-12-29 02:24:12', 980000),
(3, 3, '096351****', 500000, NULL, '2021-12-29 02:24:12', 784000),
(4, 4, '096351****', 200000, NULL, '2021-12-29 02:24:12', 489000),
(5, 5, '035360****', 100000, NULL, '2021-12-29 02:24:12', 358000);

-- --------------------------------------------------------

--
-- Table structure for table `tai_xius`
--

CREATE TABLE `tai_xius` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `min` int(11) NOT NULL,
  `max` int(11) NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tile` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tai_xius`
--

INSERT INTO `tai_xius` (`id`, `min`, `max`, `sdt`, `tile`, `created_at`, `updated_at`) VALUES
(2, 20000, 2000000, '3', 3, NULL, '2022-01-08 02:00:20');

-- --------------------------------------------------------

--
-- Table structure for table `thuong_top`
--

CREATE TABLE `thuong_top` (
  `id` int(11) NOT NULL,
  `top` int(11) NOT NULL,
  `sdt` varchar(255) NOT NULL,
  `sdt2` varchar(255) NOT NULL,
  `money` int(11) NOT NULL,
  `reward` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thuong_top`
--

INSERT INTO `thuong_top` (`id`, `top`, `sdt`, `sdt2`, `money`, `reward`) VALUES
(1, 1, '0964103861', '079508****', 345158, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `tong3_sos`
--

CREATE TABLE `tong3_sos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `min` int(11) NOT NULL,
  `max` int(11) NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tile1` double NOT NULL,
  `tile2` double NOT NULL,
  `tile3` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tong3_sos`
--

INSERT INTO `tong3_sos` (`id`, `min`, `max`, `sdt`, `tile1`, `tile2`, `tile3`, `created_at`, `updated_at`) VALUES
(1, 20000, 2000000, '3', 2.5, 3.5, 4.5, NULL, '2022-01-08 02:00:54');

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
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `note`) VALUES
(1, 'haduc25', 'haduc25@mail.com', '0000-00-00 00:00:00', '$2y$10$l/3GRMGFmpC00zfYkQhrNOznUmNQJxqDJVAk3m8onD3nj0qts4Wne', 'XnL0oZwvnLlRePZTGsPFNaw2p9yZTXe3CqibIaMPT6nWikndMLyjg0mTS5NV', '2021-12-10 07:35:41', '2021-12-10 07:35:41', '#private13579');

-- --------------------------------------------------------

--
-- Table structure for table `x1_phan3s`
--

CREATE TABLE `x1_phan3s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `min` int(11) NOT NULL,
  `max` int(11) NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tile` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `x1_phan3s`
--

INSERT INTO `x1_phan3s` (`id`, `min`, `max`, `sdt`, `tile`, `created_at`, `updated_at`) VALUES
(1, 20000, 2000000, '3', 3.5, NULL, '2022-01-08 02:01:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_momos`
--
ALTER TABLE `account_momos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `caches`
--
ALTER TABLE `caches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chan_le2s`
--
ALTER TABLE `chan_le2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chan_les`
--
ALTER TABLE `chan_les`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config_message_momos`
--
ALTER TABLE `config_message_momos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gap3s`
--
ALTER TABLE `gap3s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lich_su_choi_momos`
--
ALTER TABLE `lich_su_choi_momos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lich_su_choi_no_hus`
--
ALTER TABLE `lich_su_choi_no_hus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lich_su_tra_thuong_tuans`
--
ALTER TABLE `lich_su_tra_thuong_tuans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `limit_crons`
--
ALTER TABLE `limit_crons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `no_huus`
--
ALTER TABLE `no_huus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_phan_thuong_tops`
--
ALTER TABLE `setting_phan_thuong_tops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tai_xius`
--
ALTER TABLE `tai_xius`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thuong_top`
--
ALTER TABLE `thuong_top`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tong3_sos`
--
ALTER TABLE `tong3_sos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `x1_phan3s`
--
ALTER TABLE `x1_phan3s`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_momos`
--
ALTER TABLE `account_momos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `caches`
--
ALTER TABLE `caches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chan_le2s`
--
ALTER TABLE `chan_le2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chan_les`
--
ALTER TABLE `chan_les`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `config_message_momos`
--
ALTER TABLE `config_message_momos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gap3s`
--
ALTER TABLE `gap3s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lich_su_choi_momos`
--
ALTER TABLE `lich_su_choi_momos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lich_su_choi_no_hus`
--
ALTER TABLE `lich_su_choi_no_hus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lich_su_tra_thuong_tuans`
--
ALTER TABLE `lich_su_tra_thuong_tuans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `limit_crons`
--
ALTER TABLE `limit_crons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `no_huus`
--
ALTER TABLE `no_huus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `setting_phan_thuong_tops`
--
ALTER TABLE `setting_phan_thuong_tops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tai_xius`
--
ALTER TABLE `tai_xius`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `thuong_top`
--
ALTER TABLE `thuong_top`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tong3_sos`
--
ALTER TABLE `tong3_sos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `x1_phan3s`
--
ALTER TABLE `x1_phan3s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
