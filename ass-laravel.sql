-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 01, 2022 lúc 09:32 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ass-laravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `attributes`
--

INSERT INTO `attributes` (`id`, `name`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'size', 0, NULL, NULL),
(2, 'L', 1, NULL, NULL),
(3, 'M', 1, NULL, NULL),
(4, 'S', 1, NULL, NULL),
(7, 'color', 0, NULL, NULL),
(8, 'vàng', 7, NULL, NULL),
(9, 'đỏ', 7, NULL, NULL),
(10, 'nâu', 7, NULL, NULL),
(11, 'xanh dương', 7, NULL, NULL),
(12, 'xám', 7, NULL, NULL),
(13, 'hồng', 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `attr_products`
--

CREATE TABLE `attr_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `attr_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `attr_products`
--

INSERT INTO `attr_products` (`id`, `attr_id`, `product_id`, `created_at`, `updated_at`) VALUES
(27, 4, 22, '2022-07-31 21:44:33', '2022-07-31 21:44:33'),
(28, 8, 22, '2022-07-31 21:44:33', '2022-07-31 21:44:33'),
(29, 11, 22, '2022-07-31 21:44:33', '2022-07-31 21:44:33'),
(30, 12, 22, '2022-07-31 21:44:33', '2022-07-31 21:44:33'),
(31, 2, 20, '2022-07-31 22:23:03', '2022-07-31 22:23:03'),
(32, 3, 20, '2022-07-31 22:23:03', '2022-07-31 22:23:03'),
(33, 4, 20, '2022-07-31 22:23:03', '2022-07-31 22:23:03'),
(34, 10, 20, '2022-07-31 22:23:03', '2022-07-31 22:23:03'),
(35, 2, 21, '2022-07-31 22:26:51', '2022-07-31 22:26:51'),
(36, 3, 21, '2022-07-31 22:26:51', '2022-07-31 22:26:51'),
(37, 4, 21, '2022-07-31 22:26:51', '2022-07-31 22:26:51'),
(38, 11, 21, '2022-07-31 22:26:51', '2022-07-31 22:26:51'),
(39, 2, 23, '2022-08-06 18:37:40', '2022-08-06 18:37:40'),
(40, 3, 23, '2022-08-06 18:37:40', '2022-08-06 18:37:40'),
(41, 4, 23, '2022-08-06 18:37:40', '2022-08-06 18:37:40'),
(42, 12, 23, '2022-08-06 18:37:40', '2022-08-06 18:37:40'),
(43, 2, 24, '2022-08-06 18:45:28', '2022-08-06 18:45:28'),
(44, 3, 24, '2022-08-06 18:45:28', '2022-08-06 18:45:28'),
(45, 4, 24, '2022-08-06 18:45:28', '2022-08-06 18:45:28'),
(46, 12, 24, '2022-08-06 18:45:28', '2022-08-06 18:45:28'),
(47, 2, 25, '2022-08-06 18:47:28', '2022-08-06 18:47:28'),
(48, 3, 25, '2022-08-06 18:47:28', '2022-08-06 18:47:28'),
(49, 12, 25, '2022-08-06 18:47:29', '2022-08-06 18:47:29'),
(50, 2, 26, '2022-08-06 18:50:10', '2022-08-06 18:50:10'),
(51, 4, 26, '2022-08-06 18:50:10', '2022-08-06 18:50:10'),
(52, 12, 26, '2022-08-06 18:50:10', '2022-08-06 18:50:10'),
(53, 2, 27, '2022-08-06 18:54:07', '2022-08-06 18:54:07'),
(54, 3, 27, '2022-08-06 18:54:07', '2022-08-06 18:54:07'),
(55, 4, 27, '2022-08-06 18:54:07', '2022-08-06 18:54:07'),
(56, 12, 27, '2022-08-06 18:54:07', '2022-08-06 18:54:07'),
(57, 2, 28, '2022-08-06 19:15:10', '2022-08-06 19:15:10'),
(58, 4, 28, '2022-08-06 19:15:10', '2022-08-06 19:15:10'),
(59, 12, 28, '2022-08-06 19:15:10', '2022-08-06 19:15:10'),
(60, 13, 28, '2022-08-06 19:15:10', '2022-08-06 19:15:10'),
(61, 2, 29, '2022-08-06 19:56:44', '2022-08-06 19:56:44'),
(62, 4, 29, '2022-08-06 19:56:44', '2022-08-06 19:56:44'),
(63, 8, 29, '2022-08-06 19:56:44', '2022-08-06 19:56:44'),
(64, 12, 29, '2022-08-06 19:56:44', '2022-08-06 19:56:44'),
(65, 2, 30, '2022-08-06 19:59:14', '2022-08-06 19:59:14'),
(66, 4, 30, '2022-08-06 19:59:14', '2022-08-06 19:59:14'),
(67, 12, 30, '2022-08-06 19:59:14', '2022-08-06 19:59:14'),
(68, 3, 31, '2022-08-06 20:07:57', '2022-08-06 20:07:57'),
(69, 8, 31, '2022-08-06 20:07:57', '2022-08-06 20:07:57'),
(70, 2, 32, '2022-08-06 20:10:04', '2022-08-06 20:10:04'),
(71, 8, 32, '2022-08-06 20:10:04', '2022-08-06 20:10:04'),
(72, 2, 33, '2022-08-06 20:13:22', '2022-08-06 20:13:22'),
(73, 12, 33, '2022-08-06 20:13:22', '2022-08-06 20:13:22'),
(74, 2, 34, '2022-08-06 20:15:09', '2022-08-06 20:15:09'),
(75, 3, 34, '2022-08-06 20:15:09', '2022-08-06 20:15:09'),
(76, 4, 34, '2022-08-06 20:15:09', '2022-08-06 20:15:09'),
(77, 12, 34, '2022-08-06 20:15:09', '2022-08-06 20:15:09'),
(78, 2, 35, '2022-08-06 20:18:02', '2022-08-06 20:18:02'),
(79, 4, 35, '2022-08-06 20:18:02', '2022-08-06 20:18:02'),
(80, 12, 35, '2022-08-06 20:18:02', '2022-08-06 20:18:02'),
(81, 2, 36, '2022-08-06 20:21:36', '2022-08-06 20:21:36'),
(82, 4, 36, '2022-08-06 20:21:36', '2022-08-06 20:21:36'),
(83, 12, 36, '2022-08-06 20:21:36', '2022-08-06 20:21:36'),
(84, 2, 37, '2022-08-06 20:25:34', '2022-08-06 20:25:34'),
(85, 4, 37, '2022-08-06 20:25:34', '2022-08-06 20:25:34'),
(86, 10, 37, '2022-08-06 20:25:34', '2022-08-06 20:25:34'),
(87, 2, 38, '2022-08-06 20:27:27', '2022-08-06 20:27:27'),
(88, 4, 38, '2022-08-06 20:27:27', '2022-08-06 20:27:27'),
(89, 10, 38, '2022-08-06 20:27:27', '2022-08-06 20:27:27'),
(90, 2, 39, '2022-08-14 19:39:13', '2022-08-14 19:39:13'),
(91, 3, 39, '2022-08-14 19:39:13', '2022-08-14 19:39:13'),
(92, 4, 39, '2022-08-14 19:39:13', '2022-08-14 19:39:13'),
(93, 9, 39, '2022-08-14 19:39:13', '2022-08-14 19:39:13'),
(94, 2, 40, '2022-08-14 19:41:49', '2022-08-14 19:41:49'),
(95, 3, 40, '2022-08-14 19:41:49', '2022-08-14 19:41:49'),
(96, 4, 40, '2022-08-14 19:41:49', '2022-08-14 19:41:49'),
(97, 12, 40, '2022-08-14 19:41:49', '2022-08-14 19:41:49'),
(98, 2, 41, '2022-08-14 19:44:12', '2022-08-14 19:44:12'),
(99, 3, 41, '2022-08-14 19:44:12', '2022-08-14 19:44:12'),
(100, 4, 41, '2022-08-14 19:44:12', '2022-08-14 19:44:12'),
(101, 13, 41, '2022-08-14 19:44:12', '2022-08-14 19:44:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ghế Sofa', 'ghe-sofa', 0, NULL, NULL),
(2, 'Tủ Quần Áo', 'tu-quan-ao', 0, NULL, NULL),
(3, 'Tủ Giày Dép', 'tu-giay-dep', 0, NULL, NULL),
(4, 'Bàn ăn', 'ban-an', 0, NULL, NULL),
(5, 'Thảm', 'tham', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `product_id`, `rating`, `message`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 4, 22, '2', 'ahhhhhhhhhhhhhhhaa', 0, '2022-08-02 22:46:17', '2022-08-02 22:46:17'),
(2, 4, 22, '4', 'ghê quá haaaaaa', 0, '2022-08-02 22:51:17', '2022-08-02 22:51:17'),
(3, 4, 21, '5', 'sản phẩm mờ vãi đạn', 0, '2022-08-02 22:52:10', '2022-08-02 22:52:10'),
(4, 4, 21, '2', 'sản phẩm như bìu', 0, '2022-08-02 22:54:26', '2022-08-02 22:54:26'),
(5, 6, 22, '5', 'thật là tuyệt với', 0, '2022-08-03 01:16:08', '2022-08-03 01:16:08'),
(6, 6, 22, '3', 'ảo thật đấy', 0, '2022-08-03 01:18:27', '2022-08-03 01:18:27'),
(7, 4, 21, '3', 'cũng ra gì đấy', 0, '2022-08-03 01:20:59', '2022-08-03 01:20:59'),
(8, 4, 22, '4', 'ra gì đấy', 0, '2022-08-03 01:33:21', '2022-08-03 01:33:21'),
(9, 4, 20, '5', 'sản phẩm như b t ấy', 0, '2022-08-03 01:38:32', '2022-08-03 01:38:32'),
(10, 6, 21, '5', 'rat ra gi day', 0, '2022-08-03 04:37:42', '2022-08-03 04:37:42'),
(13, 13, 30, '4', 'bàn ăn xịn đấy', 0, '2022-08-07 23:21:22', '2022-08-07 23:21:22'),
(14, 14, 30, '3', 'không có gì đặc biệt ở đây', 0, '2022-08-08 00:54:35', '2022-08-08 00:54:35'),
(15, 14, 20, '3', 'san ráda', 0, '2022-08-08 01:25:37', '2022-08-08 01:25:37'),
(16, 14, 21, '2', 'hay lắm', 0, '2022-08-11 08:03:18', '2022-08-11 08:03:18'),
(17, 16, 22, '5', 'cũng ok đấy chứ', 0, '2022-08-11 22:39:05', '2022-08-11 22:39:05'),
(18, 16, 22, '4', 'vãi thật', 0, '2022-08-12 00:46:35', '2022-08-12 00:46:35'),
(19, 16, 22, '3', 'má đỉnh quá trời', 0, '2022-08-12 02:07:05', '2022-08-12 02:07:05'),
(20, 16, 21, '5', 'quả thật đấy', 0, '2022-08-12 02:15:43', '2022-08-12 02:15:43'),
(21, 16, 21, '5', 'cũng ra gì đấy', 0, '2022-08-12 02:16:16', '2022-08-12 02:16:16'),
(22, 16, 21, '4', 'hay đấy chứ', 0, '2022-08-12 02:17:43', '2022-08-12 02:17:43'),
(23, 16, 21, '5', 'hơi bị ảo đấy', 0, '2022-08-12 02:20:45', '2022-08-12 02:20:45'),
(24, 16, 21, '5', 'mùi khét', 0, '2022-08-12 02:21:40', '2022-08-12 02:21:40'),
(25, 16, 21, '3', 'hài vãi ra', 0, '2022-08-12 02:24:07', '2022-08-12 02:24:07'),
(26, 16, 21, '5', 'sản phẩm bẩn v', 0, '2022-08-12 02:27:33', '2022-08-12 02:27:33'),
(27, 16, 21, '5', 'là ai là ai cơ', 0, '2022-08-12 02:29:03', '2022-08-12 02:29:03'),
(28, 16, 20, '5', 'vãi cả bamn', 0, '2022-08-12 03:03:28', '2022-08-12 03:03:28'),
(29, 16, 20, '5', 'chán ghê chưa', 0, '2022-08-12 03:03:37', '2022-08-12 03:03:37'),
(30, 16, 20, '2', 'đùa vãi bạn ơi', 0, '2022-08-12 03:03:52', '2022-08-12 03:03:52'),
(31, 16, 20, '2', 'cũng ra gì', 0, '2022-08-12 03:04:04', '2022-08-12 03:04:04'),
(32, 16, 20, '2', 'vãi bạn ơi', 0, '2022-08-12 03:04:51', '2022-08-12 03:04:51'),
(33, 13, 28, '5', 'ảnh không thấy rõ gì cả', 0, '2022-08-13 08:52:59', '2022-08-13 08:52:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `topic`, `content`, `time`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Văn Hoàng PH 1 5 1 9 8', 'hoangnvph15198@fpt.edu.vn', 'sản phẩm bất ổn', 'tôi thấy rằng sản phẩm bên mình kém chất lượng lắm luôn', '2022-08-08 04:41:49', '2022-08-07 21:41:49', '2022-08-07 21:41:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `startTime` datetime NOT NULL,
  `endTime` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `image_products`
--

CREATE TABLE `image_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `image_products`
--

INSERT INTO `image_products` (`id`, `image`, `product_id`, `created_at`, `updated_at`) VALUES
(21, 'images/products//1659323441980.jpg', 22, '2022-07-31 07:20:46', '2022-07-31 20:10:41'),
(26, 'images/products//1659331611695.jpg', 21, '2022-07-31 22:26:51', '2022-07-31 22:26:51'),
(27, 'images/products//1659836260893.jpg', 23, '2022-08-06 18:37:40', '2022-08-06 18:37:40'),
(28, 'images/products//1659836260820.jpg', 23, '2022-08-06 18:37:40', '2022-08-06 18:37:40'),
(29, 'images/products//1659836539792.jpg', 20, '2022-08-06 18:42:19', '2022-08-06 18:42:19'),
(30, 'images/products//1659836595144.jpg', 21, '2022-08-06 18:43:15', '2022-08-06 18:43:15'),
(31, 'images/products//1659836623381.jpg', 22, '2022-08-06 18:43:43', '2022-08-06 18:43:43'),
(32, 'images/products//1659836728824.jpg', 24, '2022-08-06 18:45:28', '2022-08-06 18:45:28'),
(33, 'images/products//1659836728972.jpg', 24, '2022-08-06 18:45:28', '2022-08-06 18:45:28'),
(34, 'images/products//1659836848699.jpg', 25, '2022-08-06 18:47:28', '2022-08-06 18:47:28'),
(35, 'images/products//1659836848125.jpg', 25, '2022-08-06 18:47:28', '2022-08-06 18:47:28'),
(36, 'images/products//1659837010423.jpg', 26, '2022-08-06 18:50:10', '2022-08-06 18:50:10'),
(37, 'images/products//1659837010707.jpg', 26, '2022-08-06 18:50:10', '2022-08-06 18:50:10'),
(38, 'images/products//1659837247492.jpg', 27, '2022-08-06 18:54:07', '2022-08-06 18:54:07'),
(39, 'images/products//1659837247431.jpg', 27, '2022-08-06 18:54:07', '2022-08-06 18:54:07'),
(40, 'images/products//165983851076.jpg', 28, '2022-08-06 19:15:10', '2022-08-06 19:15:10'),
(41, 'images/products//1659838510496.jpg', 28, '2022-08-06 19:15:10', '2022-08-06 19:15:10'),
(42, 'images/products//1659841004201.jpg', 29, '2022-08-06 19:56:44', '2022-08-06 19:56:44'),
(43, 'images/products//1659841004273.jpg', 29, '2022-08-06 19:56:44', '2022-08-06 19:56:44'),
(44, 'images/products//1659841154403.jpg', 30, '2022-08-06 19:59:14', '2022-08-06 19:59:14'),
(45, 'images/products//1659841154351.jpg', 30, '2022-08-06 19:59:14', '2022-08-06 19:59:14'),
(46, 'images/products//1659841677308.jpg', 31, '2022-08-06 20:07:57', '2022-08-06 20:07:57'),
(47, 'images/products//1659841677492.jpg', 31, '2022-08-06 20:07:57', '2022-08-06 20:07:57'),
(48, 'images/products//1659841804232.jpg', 32, '2022-08-06 20:10:04', '2022-08-06 20:10:04'),
(49, 'images/products//1659841804828.jpg', 32, '2022-08-06 20:10:04', '2022-08-06 20:10:04'),
(50, 'images/products//1659841804217.jpg', 32, '2022-08-06 20:10:04', '2022-08-06 20:10:04'),
(51, 'images/products//1659842002158.jpg', 33, '2022-08-06 20:13:22', '2022-08-06 20:13:22'),
(52, 'images/products//1659842002882.jpg', 33, '2022-08-06 20:13:22', '2022-08-06 20:13:22'),
(53, 'images/products//1659842109828.jpg', 34, '2022-08-06 20:15:09', '2022-08-06 20:15:09'),
(54, 'images/products//1659842109598.jpg', 34, '2022-08-06 20:15:09', '2022-08-06 20:15:09'),
(55, 'images/products//1659842282170.jpg', 35, '2022-08-06 20:18:02', '2022-08-06 20:18:02'),
(56, 'images/products//1659842282840.jpg', 35, '2022-08-06 20:18:02', '2022-08-06 20:18:02'),
(57, 'images/products//1659842496502.jpg', 36, '2022-08-06 20:21:36', '2022-08-06 20:21:36'),
(58, 'images/products//16598424966.jpg', 36, '2022-08-06 20:21:36', '2022-08-06 20:21:36'),
(59, 'images/products//1659842734691.jpg', 37, '2022-08-06 20:25:34', '2022-08-06 20:25:34'),
(60, 'images/products//1659842734619.jpg', 37, '2022-08-06 20:25:34', '2022-08-06 20:25:34'),
(61, 'images/products//1659842847867.jpg', 38, '2022-08-06 20:27:27', '2022-08-06 20:27:27'),
(62, 'images/products//1659842847163.jpg', 38, '2022-08-06 20:27:27', '2022-08-06 20:27:27'),
(63, 'images/products//1660531153432.jpg', 39, '2022-08-14 19:39:13', '2022-08-14 19:39:13'),
(64, 'images/products//1660531153168.jpg', 39, '2022-08-14 19:39:13', '2022-08-14 19:39:13'),
(65, 'images/products//1660531309694.jpg', 40, '2022-08-14 19:41:49', '2022-08-14 19:41:49'),
(66, 'images/products//1660531309449.jpg', 40, '2022-08-14 19:41:49', '2022-08-14 19:41:49'),
(67, 'images/products//1660531452385.jpg', 41, '2022-08-14 19:44:12', '2022-08-14 19:44:12'),
(68, 'images/products//1660531452203.jpg', 41, '2022-08-14 19:44:12', '2022-08-14 19:44:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(103, '2014_10_12_000000_create_users_table', 1),
(104, '2014_10_12_100000_create_password_resets_table', 1),
(105, '2019_08_19_000000_create_failed_jobs_table', 1),
(106, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(107, '2022_07_30_084311_create_categories_table', 1),
(108, '2022_07_30_090453_create_attributes_table', 1),
(109, '2022_07_30_092510_create_products_table', 1),
(110, '2022_07_30_092552_create_attr_products_table', 1),
(111, '2022_07_30_092833_create_comments_table', 1),
(112, '2022_07_30_093445_create_coupons_table', 1),
(113, '2022_07_30_094118_create_image_products_table', 1),
(114, '2022_07_30_162252_update_products_table', 2),
(115, '2022_08_01_071249_create_banners_table', 3),
(122, '2022_08_04_111937_create_orders_table', 4),
(123, '2022_08_04_112012_create_order_detail_table', 4),
(125, '2022_08_08_040355_create_contacts_table', 5),
(126, '2022_08_11_150926_update_orders_table', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `orderDate` datetime NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(10) UNSIGNED NOT NULL,
  `totalCost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `orderDate`, `city`, `address`, `note`, `status`, `totalCost`, `created_at`, `updated_at`, `name`, `phone`, `email`) VALUES
(8, 4, '2022-08-04 14:48:39', 'Hà nội', 'Lạc Hồng', 'được  của nó', 2, '31569090', '2022-08-04 07:48:39', '2022-08-07 20:07:43', '', '', ''),
(9, 13, '2022-08-08 03:58:52', 'Hà nội', '15 phú kiều kiều mai', 'không có gì để nói cả', 0, '14352000', '2022-08-07 20:58:52', '2022-08-07 20:58:52', '', '', ''),
(10, 4, '2022-08-08 07:31:00', 'Hà nội', '15 phú kiều ,kiều mai', 'sản phẩm cũng ra gì đấy', 0, '110048000', '2022-08-08 00:31:00', '2022-08-08 00:31:00', '', '', ''),
(11, 14, '2022-08-08 08:26:57', 'Hà nội', 'hà nam', 'ddd', 0, '13500000', '2022-08-08 01:26:57', '2022-08-08 01:26:57', '', '', ''),
(12, 16, '2022-08-12 03:59:18', 'Hà nội', 'nhổn ,trường đại học công nghiệp', 'sản phẩm đắt v', 0, '14352000', '2022-08-11 20:59:18', '2022-08-11 20:59:18', 'nguyễn văn hoàng', '0379101632', 'anhhoang2001@gmai.com'),
(13, 16, '2022-08-15 07:23:40', 'Hà nội', 'hà tĩnh', 'asd', 0, '27000000', '2022-08-15 00:23:40', '2022-08-15 00:23:40', 'hoang1505', '0379101632', 'long@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id`, `created_at`, `updated_at`, `order_id`, `product_id`, `qty`, `attr`) VALUES
(7, '2022-08-04 07:48:39', '2022-08-04 07:48:39', 8, 22, '2', 'xám,S'),
(8, '2022-08-04 07:48:39', '2022-08-04 07:48:39', 8, 20, '2', 'nâu,L'),
(9, '2022-08-07 20:58:52', '2022-08-07 20:58:52', 9, 38, '3', 'nâu,S'),
(10, '2022-08-08 00:31:00', '2022-08-08 00:31:00', 10, 24, '2', 'xám,L'),
(11, '2022-08-08 00:31:00', '2022-08-08 00:31:00', 10, 26, '2', 'xám,L'),
(12, '2022-08-08 01:26:57', '2022-08-08 01:26:57', 11, 20, '3', 'nâu,L'),
(13, '2022-08-11 20:59:18', '2022-08-11 20:59:18', 12, 38, '3', 'nâu,L'),
(14, '2022-08-15 00:23:40', '2022-08-15 00:23:40', 13, 21, '3', ',');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
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
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sale` int(10) UNSIGNED NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(10) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `desc`, `slug`, `sale`, `qty`, `image`, `status`, `category_id`, `created_at`, `updated_at`) VALUES
(20, 'ghế sofa penny-nâu', '5000000', '<p>sản phẩm được</p>', 'sofa-penny-3', 10, '5', 'images/products//1659331383453.jpg', 0, 1, '2022-07-30 10:19:28', '2022-08-11 21:58:56'),
(21, 'ghế sofa penny màu xám', '10000000', '<p>hay qua ta</p>', 'ghe-sofa-penny-mau-xam', 10, '5', 'images/products//1659331611276.jpg', 0, 1, '2022-07-30 10:22:18', '2022-08-11 21:40:51'),
(22, 'bàn ăn nhỏ màu nâu', '15690000', '<p>sản phẩm được đấy chứ lị</p>', 'ban-an-nho', 0, '2', 'images/products//16593234413.jpg', 0, 1, '2022-07-31 07:20:46', '2022-08-06 19:03:05'),
(23, 'TỦ QUẦN ÁO BLANCO', '31250000', '<p><strong>K&iacute;ch Thước</strong></p>\r\n\r\n<p>Chiều ngang: 1488mm<br />\r\nChiều s&acirc;u: 600mm<br />\r\nChiều cao: 2220mm</p>\r\n\r\n<p><strong>Xuất xứ</strong></p>\r\n\r\n<p>Thương hiệu Ho&agrave;n Mỹ, sản xuất tại Việt Nam.</p>\r\n\r\n<p><strong>Chất Liệu</strong></p>\r\n\r\n<p>&ndash; Cốt gỗ MDF chống ẩm đạt chuẩn Ch&acirc;u &Acirc;u.<br />\r\n&ndash; Bề mặt phủ Acrylic EARC11</p>', 'tu-quan-ao-blanco', 3, '6', 'images/products//1659836260.jpg', 0, 2, '2022-08-06 18:37:40', '2022-08-06 20:04:35'),
(24, 'TỦ QUẦN ÁO MONRO', '23100000', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>K&iacute;ch thước</strong></td>\r\n					</tr>\r\n					<tr>\r\n						<td>&ndash; Chiều ngang: 1100mm<br />\r\n						&ndash; Chiều s&acirc;u: 600mm<br />\r\n						&ndash; Chiều cao: 2000mm</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n			<td>\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>Chất liệu</strong></td>\r\n					</tr>\r\n					<tr>\r\n						<td>Cốt MDF chống ẩm đạt chuẩn ch&acirc;u &Acirc;u<br />\r\n						Bề mặt phủ Acrylic EARC13 cao cấp</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>Xuất xứ</strong></td>\r\n					</tr>\r\n					<tr>\r\n						<td>Thương hiệu Ho&agrave;n Mỹ, sản xuất tại Việt Nam.</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n			<td>\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>Bảo h&agrave;nh</strong></td>\r\n					</tr>\r\n					<tr>\r\n						<td>Bảo h&agrave;nh 24 th&aacute;ng<br />\r\n						Bảo tr&igrave; trọn đời sản phẩm</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'tu-quan-ao-monro', 5, '7', 'images/products//1659836728.jpg', 0, 2, '2022-08-06 18:45:28', '2022-08-06 20:04:17'),
(25, 'TỦ QUẦN ÁO SPELLMAN', '24160000', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>K&iacute;ch thước</strong></td>\r\n					</tr>\r\n					<tr>\r\n						<td>D&agrave;i:&nbsp;1983mm<br />\r\n						Rộng:&nbsp;600mm<br />\r\n						Cao:&nbsp;2220mm</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n			<td>\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>Chất liệu</strong></td>\r\n					</tr>\r\n					<tr>\r\n						<td>Bề mặt phủ Melamine 949EV cao cấp<br />\r\n						Cốt MDF chống ẩm đạt chuẩn ch&acirc;u &Acirc;u</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>Xuất xứ</strong></td>\r\n					</tr>\r\n					<tr>\r\n						<td>Ho&agrave;n Mỹ, Việt Nam</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'tu-quan-ao-spellman', 3, '8', 'images/products//1659836848.jpg', 0, 2, '2022-08-06 18:47:28', '2022-08-06 20:05:00'),
(26, 'TỦ QUẦN ÁO SWEET', '34820000', '<p><strong>K&iacute;ch Thước</strong></p>\r\n\r\n<p>D&agrave;i:&nbsp;1982mm<br />\r\nRộng:&nbsp;600mm<br />\r\nCao:&nbsp;2220mm</p>\r\n\r\n<p><strong>Xu&acirc;t xư</strong></p>\r\n\r\n<p>Ho&agrave;n Mỹ, Việt Nam</p>\r\n\r\n<p><strong>Chất Liệu</strong></p>\r\n\r\n<p>Bề mặt phủ Melamine 106SH cao cấp<br />\r\nCốt MDF chống ẩm đạt chuẩn ch&acirc;u &Acirc;u</p>', 'tu-quan-ao-sweet', 5, '5', 'images/products//1659837010.jpg', 0, 2, '2022-08-06 18:50:10', '2022-08-06 20:05:27'),
(27, 'BÀN ĂN RAPHAEL', '25110000', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>K&iacute;ch thước</strong></td>\r\n					</tr>\r\n					<tr>\r\n						<td>Chiều d&agrave;i: 1800mm<br />\r\n						Chiều rộng: 900mm<br />\r\n						Chiều cao: 750mm</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n			<td>\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>Chất liệu</strong></td>\r\n					</tr>\r\n					<tr>\r\n						<td>&ndash; Mặt đ&aacute; VINAQUARTZ m&agrave;u trắng m&atilde; VQ8066W, độ d&agrave;y 20mm.<br />\r\n						&ndash; Thanh nan, th&acirc;n b&agrave;n: Sử dụng cốt gỗ MDF chống ẩm, sơn trắng b&oacute;ng.<br />\r\n						&ndash; Ch&acirc;n đế b&agrave;n: Inox mạ m&agrave;u hồng b&oacute;ng.</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>Xuất xứ</strong></td>\r\n					</tr>\r\n					<tr>\r\n						<td>Thương hiệu Ho&agrave;n Mỹ, sản xuất tại Việt Nam.</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n			<td>\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>Điểm nổi bật</strong></td>\r\n					</tr>\r\n					<tr>\r\n						<td>&ndash; Bề mặt đ&aacute; c&oacute; độ nhẵn mịn ho&agrave;n hảo, c&aacute;c đường v&acirc;n m&acirc;y độc đ&aacute;o, tạo điểm nhấn sang trọng cho kh&ocirc;ng gian.<br />\r\n						&ndash; Kiểu d&aacute;ng thời thượng, đề cao yếu tố hiện đại v&agrave; tinh tế.<br />\r\n						&ndash; Sản phẩm do Ho&agrave;n Mỹ s&aacute;ng tạo, sản xuất tr&ecirc;n d&acirc;y chuyền c&ocirc;ng nghệ của Italia, Nhật Bản. Đạt ti&ecirc;u chuẩn chất lượng ISO.<br />\r\n						&ndash; C&oacute; khả năng chống thấm, hạn chế ố, rất dễ vệ sinh sản phẩm.<br />\r\n						&ndash; Sản phẩm c&oacute; độ bền cao.</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>Bảo h&agrave;nh</strong></td>\r\n					</tr>\r\n					<tr>\r\n						<td>Bảo h&agrave;nh phần gỗ 12 th&aacute;ng<br />\r\n						Bảo h&agrave;nh phần kim loại 12 th&aacute;ng.<br />\r\n						Bảo tr&igrave; trọn đời sản phẩm</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'ban-an-taplael', 0, '7', 'images/products//1659837247.jpg', 0, 4, '2022-08-06 18:54:07', '2022-08-07 22:31:25'),
(28, 'BÀN ĂN ETERNAL', '17690000', '<p><strong>K&iacute;ch Thước</strong></p>\r\n\r\n<p>&ndash; Chiều d&agrave;i: 1600mm<br />\r\n&ndash; Chiều rộng: 900mm<br />\r\n&ndash; Chiều cao: 750mm</p>\r\n\r\n<p><strong>Chất liệu</strong></p>\r\n\r\n<p>&ndash; Mặt ceramic d&agrave;y 9mm.<br />\r\n&ndash; Th&acirc;n b&agrave;n, thanh nan, đế ch&acirc;n b&agrave;n: Sử dụng gỗ MDF sơn m&agrave;u trắng b&oacute;ng.<br />\r\n&ndash; Viền inox mạ hồng b&oacute;ng phần th&acirc;n b&agrave;n.</p>', 'ban-an-enternal', 0, '6', 'images/products//1659838510.jpg', 0, 4, '2022-08-06 19:15:10', '2022-08-06 19:15:10'),
(29, 'BÀN ĂN GRANDE', '14360000', '<p><strong>K&iacute;ch Thước</strong></p>\r\n\r\n<p>&nbsp;Đường k&iacute;nh: 1200mm<br />\r\n&ndash; Chiều cao: 750mm</p>', 'ban-an-GRANDE', 5, '5', 'images/products//1659841004.jpg', 0, 4, '2022-08-06 19:56:44', '2022-08-06 19:56:44'),
(30, 'BÀN ĂN CLIVE', '808000', '<p><strong>K&iacute;ch Thước</strong></p>\r\n\r\n<p>&ndash; Chiều d&agrave;i: 1400mm<br />\r\n&ndash; Chiều rộng: 800mm<br />\r\n&ndash; Chiều cao: 760mm</p>\r\n\r\n<p><strong>Xuất xứ</strong></p>\r\n\r\n<p>Thương hiệu Ho&agrave;n Mỹ, sản xuất tại Trung Quốc</p>', 'ban-an-clive', 0, '6', 'images/products//1659841154.jpg', 0, 4, '2022-08-06 19:59:14', '2022-08-06 19:59:14'),
(31, 'THẢM TRANG TRÍ OR-67', '9310000', '<p><strong>Điểm nổi bật</strong></p>\r\n\r\n<p>&ndash; Thảm dệt tay thượng hạng, t&ocirc;n n&eacute;t sang trọng v&agrave; hiện đại cho kh&ocirc;ng gian.<br />\r\n&ndash; Dễ vệ sinh v&agrave; lau ch&ugrave;i, do sợi rất mịn n&ecirc;n thảm dễ giặt.<br />\r\n&ndash; Tone m&agrave;u thanh lịch, dễ phối c&ugrave;ng c&aacute;c sản phẩm Nội thất kh&aacute;c.<br />\r\n&ndash; Chất liệu Viscose l&agrave; một trong những chất liệu thảm được y&ecirc;u th&iacute;ch nhất tr&ecirc;n thế giới.<br />\r\n<strong>K&iacute;ch Thước</strong></p>\r\n\r\n<p>Chiều d&agrave;i 3000mm<br />\r\nChiều rộng 2000mm</p>', 'tham-trang-tri-or-67', 0, '8', 'images/products//1659841677.jpg', 0, 5, '2022-08-06 20:07:57', '2022-08-06 20:11:05'),
(32, 'THẢM TRANG TRÍ OR-60', '9310000', '<p><strong>Điểm nổi bật</strong></p>\r\n\r\n<p>&ndash; Thảm dệt tay thượng hạng, t&ocirc;n n&eacute;t sang trọng v&agrave; hiện đại cho kh&ocirc;ng gian.<br />\r\n&ndash; Chất liệu Viscose l&agrave; một trong những chất liệu thảm được y&ecirc;u th&iacute;ch nhất tr&ecirc;n thế giới.</p>', 'tham-trang-tri-or-60', 0, '5', 'images/products//1659841804.jpg', 0, 5, '2022-08-06 20:10:04', '2022-08-06 20:10:04'),
(33, 'THẢM TRANG TRÍ ARA', '15650000', '<p><strong>Điểm nổi bật</strong></p>\r\n\r\n<p>&ndash; Chất liệu Viscose l&agrave; một trong những chất liệu thảm được y&ecirc;u th&iacute;ch nhất tr&ecirc;n thế giới.<br />\r\n&ndash; Dễ vệ sinh v&agrave; lau ch&ugrave;i, do sợi rất mịn n&ecirc;n thảm dễ giặt.<br />\r\n&ndash; Thảm dệt tay thượng hạng, t&ocirc;n n&eacute;t sang trọng v&agrave; hiện đại cho kh&ocirc;ng gian.</p>', 'tham-trang-tri-ara', 0, '5', 'images/products//1659842002.jpg', 0, 5, '2022-08-06 20:13:22', '2022-08-06 20:13:22'),
(34, 'THẢM TRANG TRÍ RUG005B', '11950000', '<p><strong>Điểm nổi bật</strong></p>\r\n\r\n<p>&ndash; LINIE DESIGN l&agrave; thương hiệu h&agrave;ng đầu Đan Mạch chuy&ecirc;n ph&aacute;t triển v&agrave; cung cấp thảm thủ c&ocirc;ng lớn nhất tại Bắc &Acirc;u, sản phẩm được ưa chuộng tr&ecirc;n hơn 60 quốc gia to&agrave;n Thế giới.<br />\r\n&ndash; Sợi thảm dai, mềm, rất bền m&agrave;u.<br />\r\n&ndash; Sản phẩm gi&uacute;p t&ocirc;n n&eacute;t hiện đại, sang trọng v&agrave; tinh tế cho kh&ocirc;ng gian.</p>', 'tham-trang-tri-rug0058', 3, '8', 'images/products//1659842109.jpg', 0, 5, '2022-08-06 20:15:09', '2022-08-06 20:15:09'),
(35, 'THẢM TRANG TRÍ RONALDO – RUG011A', '12400000', '<p><strong>Điểm nổi bật</strong></p>\r\n\r\n<p>&ndash; LINIE DESIGN l&agrave; thương hiệu h&agrave;ng đầu Đan Mạch chuy&ecirc;n ph&aacute;t triển v&agrave; cung cấp thảm thủ c&ocirc;ng lớn nhất tại Bắc &Acirc;u, sản phẩm được ưa chuộng tr&ecirc;n hơn 60 quốc gia to&agrave;n Thế giới.<br />\r\n&ndash; Sợi thảm dai, mềm, rất bền m&agrave;u.<br />\r\n&ndash; Tone m&agrave;u sang trọng, dễ phối c&ugrave;ng c&aacute;c sản phẩm nội thất kh&aacute;c c&ugrave;ng kh&ocirc;ng gian.</p>', 'tham-trang-tri-ranaldor-rug011a', 1, '8', 'images/products//1659842282.jpg', 0, 5, '2022-08-06 20:18:02', '2022-08-06 20:18:02'),
(36, 'Tủ Để Giày  Gỗ MDF', '3100000', '<ul>\r\n	<li><a href=\"https://noithatdogoviet.com/tu-giay-go-cong-nghiep\" target=\"_blank\"><strong>Tủ để gi&agrave;y gỗ c&ocirc;ng nghiệp</strong></a>&nbsp;TG801F hướng đến đối tượng kh&aacute;ch h&agrave;ng c&oacute; nhu cầu sử dụng lớn nhưng c&oacute; mức ng&acirc;n s&aacute;ch kh&ocirc;ng qu&aacute; cao. Được sản xuất từ gỗ c&ocirc;ng nghiệp MDF/MFC cao cấp với lớp m&agrave;u sơn PU 5 lớp chống bong tr&oacute;c, chống bay m&agrave;u hiệu quả. Giữ cho sản phẩm c&oacute; độ bền tốt, m&agrave;u sắc bền đẹp theo thời gian m&agrave; vẫn đảm bảo chi ph&iacute; thấp hơn nhiều so với c&aacute;c loại l&agrave;m từ gỗ mdf l&otilde;i xanh hay gỗ tự nhi&ecirc;n kh&aacute;c.</li>\r\n	<li><a href=\"https://noithatdogoviet.com/tu-giay-dep\" target=\"_blank\"><strong>Tủ đựng gi&agrave;y d&eacute;p gia đ&igrave;nh</strong></a>&nbsp;TG801F thiết kế gồm 3 ngăn tủ ch&iacute;nh với 1 ngăn tủ mở b&ecirc;n h&ocirc;ng được chia th&agrave;nh 4 tầng kệ c&oacute; chiều cao ~20cm. Với ngăn b&ecirc;n h&ocirc;ng n&agrave;y kh&aacute;ch h&agrave;ng c&oacute; thể để những loại gi&agrave;y d&eacute;p đắt tiền, &iacute;t sử dụng để giữ cho đồ d&ugrave;ng được bền hơn, dễ ph&acirc;n biệt so với c&aacute;c loại gi&agrave;y d&eacute;p kh&aacute;c.</li>\r\n	<li>Ngăn tủ giữa gồm 5 tầng kệ chiều cao ~15cm, diện t&iacute;ch mặt ngang rộng, l&agrave; nơi th&iacute;ch hợp để c&aacute;c loại gi&agrave;y d&eacute;p thường xuy&ecirc;n sử dụng. Thiết kế nhiều tầng gi&uacute;p kh&aacute;ch h&agrave;ng c&oacute; thể ph&acirc;n chia kh&ocirc;ng gian cho từng th&agrave;nh vi&ecirc;n trong gia đ&igrave;nh hoặc c&aacute;c loại gi&agrave;y d&eacute;p kh&aacute;c nhau. Chống việc nhầm lẫn hay &aacute;m m&ugrave;i đồ d&ugrave;ng lẫn nhau, đặc biệt l&agrave; những đ&ocirc;i gi&agrave;y, d&eacute;p sử dụng nhiều trong m&ugrave;a mưa.</li>\r\n	<li>Ngăn kệ k&eacute;o ph&iacute;a tr&ecirc;n l&agrave; thiết kế đi k&egrave;m để kh&aacute;ch h&agrave;ng c&oacute; thể tận dụng bỏ ch&igrave;a kh&oacute;a, &aacute;o mưa, &ocirc; hoặc một số vật dụng thường d&ugrave;ng kh&aacute;c. Kệ được gắn ray trượt k&eacute;o chuy&ecirc;n dụng gi&uacute;p thao t&aacute;c đ&oacute;ng mở tủ nhanh ch&oacute;ng, dễ d&agrave;ng, kh&ocirc;ng g&acirc;y tiếng động.</li>\r\n	<li>Sản phẩm đươc chia th&agrave;nh 3 c&aacute;nh mở vớ tay nắm chữ I đơn giản, mặt c&aacute;nh tủ gồm c&aacute;c đường thẳng song song gi&uacute;p kh&ocirc;ng kh&iacute; lưu th&ocirc;ng dễ d&agrave;ng. Loại bỏ hiệu quả m&ugrave;i h&ocirc;i mốc của đồ d&ugrave;ng b&ecirc;n trong, giữ cho gi&agrave;y d&eacute;p lu&ocirc;n được kh, thơm tho, sạch sẽ.</li>\r\n</ul>', 'tu-de-giay-mdf', 30, '7', 'images/products//1659842496.jpg', 0, 3, '2022-08-06 20:21:36', '2022-08-06 20:22:47'),
(37, 'Tủ Giày Thông Minh Gỗ Công Nghiệp', '9600000', '<ul>\r\n	<li><a href=\"https://noithatdogoviet.com/tu-giay-dep\" target=\"_blank\"><strong>Tủ gi&agrave;y d&eacute;p gi&aacute; rẻ TPHCM</strong></a>&nbsp;TG01E l&agrave; mẫu tủ gi&agrave;y th&ocirc;ng minh rất được ưa chuộng tr&ecirc;n thị trường hiện nay. Sở hữu thiết kế ấn tượng với bản lề xoay th&ocirc;ng minh gi&uacute;p thao t&aacute;c dễ d&agrave;ng. M&agrave;u sắc tủ phối m&agrave;u kem + trắng trẻ trung, l&agrave; lựa chọn l&yacute; tưởng với những kh&ocirc;ng gian hiện đại trẻ trung &amp; đặc biệt l&agrave; những căn chung cư, nh&agrave; phố nhỏ.</li>\r\n	<li>Nội thất tủ gi&agrave;y rộng r&atilde;i gồm 3 hộc để gi&agrave;y được chia th&agrave;nh 9 ngăn tủ ri&ecirc;ng biệt để ph&acirc;n loại gi&agrave;y d&eacute;p cho từng c&aacute; nh&acirc;n. Ngo&agrave;i ra tủ c&ograve;n c&oacute; 3 tầng kệ ri&ecirc;ng biệt để đồ, 1 hộc k&eacute;o để phụ kiện. Sẵn s&agrave;ng phục vụ tốt cho gia đ&igrave;nh c&oacute; từ 3 &ndash; 5 th&agrave;nh vi&ecirc;n với số lượng gi&agrave;y d&eacute;p từ 20 &ndash; 30 đ&ocirc;i c&aacute;c loại.</li>\r\n	<li>Bản lề tủ thiết kế kiểu xoay tiện lợi để kh&aacute;ch h&agrave;ng c&oacute; thể thao t&aacute;c đơn giản chỉ với việc k&eacute;o đẩy nhẹ nh&agrave;ng, tiết kiệm c&ocirc;ng sức v&agrave; tối ưu h&oacute;a diện t&iacute;ch tốt hơn so với kiểu cửa mở truyền thống. Hộc k&eacute;o tủ được gắn ray trượt chuy&ecirc;n dụng, thao t&aacute;c đơn giản, an to&agrave;n với người d&ugrave;ng, đặc biệt l&agrave; trẻ nhỏ.</li>\r\n	<li>Phụ kiện tủ bao gồm bản lề tủ, ray trượt hộc đều được l&agrave;m từ inox kh&ocirc;ng gỉ, b&aacute;nh xe trượt c&oacute; tuổi thọ ~5000 lần thao t&aacute;c, với độ bền ổn định, đ&aacute;p ứng được nhu cầu sử dụng ở tần suất cao m&agrave; vẫn đảm bảo chất lượng.</li>\r\n	<li><a href=\"https://noithatdogoviet.com/tu-giay-go-cong-nghiep\" target=\"_blank\"><strong>Tủ gi&agrave;y gỗ c&ocirc;ng nghiệp</strong></a>&nbsp;được ho&agrave;n thiện từ chất liệu MDF chất lượng cao, khả năng kh&aacute;ng mối mọt tốt, chống &aacute;m m&ugrave;i hiệu quả, hạn chế việc &aacute;m m&ugrave;i l&ecirc;n gi&agrave;y d&eacute;p tốt hơn. Bề mặt được phủ th&ecirc;m lớp veneer chống trầy hạn chế tối đa t&igrave;nh trạng ẩm mốc, b&aacute;m nước, đảm bảo tuổi thọ từ 15 &ndash; 20 năm.</li>\r\n</ul>', 'tu-giay-thong-minh-cong-nghiep', 50, '8', 'images/products//1659842734.jpg', 0, 3, '2022-08-06 20:25:34', '2022-08-06 20:25:34'),
(38, 'tủ giày đẹp HM', '5980000', '<p><strong>Điểm nổi bật</strong></p>\r\n\r\n<p>Ch&acirc;n sắt sơn tĩnh điện<br />\r\nGỗ MDF chống ẩm phủ Melamine 389SL kết hợp 204SH.<br />\r\nRay bi Imundex.<br />\r\nTh&ugrave;ng ngăn k&eacute;o sử dụng gỗ MDF chống ẩm phủ Melamine m&atilde; 101T, bản lề.<br />\r\n&nbsp;</p>', 'tu-giay-dep-hm', 20, '4', 'images/products//1659842847.jpg', 0, 3, '2022-08-06 20:27:27', '2022-08-06 20:27:27'),
(39, 'SOFA BED CAO CẤP 2IN1 FS110', '3750000', '<p>Sofa bed&nbsp; hay c&ograve;n gọi sofa giường - một vật dụng nội thất ho&agrave;n hảo kh&ocirc;ng thể thiếu trong kh&ocirc;ng gian sống hiện đại ng&agrave;y nay. Ghế vừa c&oacute; thể l&agrave;m nơi tiếp kh&aacute;ch tuyệt vời, vừa c&oacute; thể l&agrave;m kh&ocirc;ng gian ngủ sang trọng, mềm mại &ecirc;m &aacute;i v&agrave; l&agrave; nơi thư giản đọc s&aacute;ch hay xem ti vi.</p>\r\n\r\n<p>Sofa bed cao cấp 2in1&nbsp; FS110</p>\r\n\r\n<p>- Thiết kế đặc biệt c&oacute; thể gấp lại gọn g&agrave;ng như những chiếc ghế Sofa sang trọng hay mở ra th&agrave;nh chiếc giường c&aacute; nh&acirc;n c&oacute; đệm &ecirc;m &aacute;i.</p>\r\n\r\n<p>- Ruột đệm d&agrave;y, &ecirc;m c&ugrave;ng vỏ đệm mịn đẹp, phần ch&acirc;n đỡ bằng kim loại c&oacute; khả năng chịu lực lớn.</p>\r\n\r\n<p>- Tựa lưng c&oacute; thể n&acirc;ng l&ecirc;n hạ xuống rất tiện dụng gi&uacute;p bạn c&oacute; thể ngả lưng hay nằm thoải m&aacute;i khi đọc s&aacute;ch, xem phim, nghỉ ngơi&hellip;</p>\r\n\r\n<p>- Ph&ugrave; hợp với c&aacute;c căn hộ c&oacute; diện t&iacute;ch khi&ecirc;m tốn vừa tiết kiệm diện t&iacute;ch vừa tạo kh&ocirc;ng gian sang trọng v&agrave; tiện nghi cho gia chủ.</p>\r\n\r\n<p>- Sản phẩm c&oacute; nhiều m&agrave;u kh&aacute;c nhau cho bạn lựa chọn.</p>', 'sofa-cao-cap-2in1-fs110', 15, '5', 'images/products//1660531152.jpg', 0, 1, '2022-08-14 19:39:13', '2022-08-14 19:39:13'),
(40, 'SOFA BED ĐA NĂNG CAO CẤP MF819', '10375000', '<p><a href=\"https://nhadep.vn/sofa-giuong.html\"><strong>Sofa giường th&ocirc;ng minh</strong></a>&nbsp;được thiết kế theo xu hướng hiện đại linh hoạt trong qu&aacute; tr&igrave;nh sử dụng, được cấu th&agrave;nh từ những vật liệu chất lượng, bền bỉ cho thời gian sử dụng l&acirc;u d&agrave;i. Sofa giường l&agrave; giải ph&aacute;p hiệu quả cao để n&acirc;ng cao tiện &iacute;ch cuộc sống, tiết kiệm kh&ocirc;ng gian sử dụng của bạn. Kh&ocirc;ng chỉ linh hoạt, sản phẩm c&ograve;n mang t&iacute;nh thẩm mỹ, ph&ugrave; hợp với c&aacute;c hộ gia đ&igrave;nh c&oacute; diện t&iacute;ch nhỏ.&nbsp;</p>\r\n\r\n<p><strong>Sofa bed đa năng cao cấp MF819</strong></p>\r\n\r\n<p>- Thiết kế đặc biệt c&oacute; thể gấp lại gọn g&agrave;ng như những chiếc ghế Sofa sang trọng hay mở ra th&agrave;nh chiếc giường chỉ với thao t&aacute;c đơn giản.</p>\r\n\r\n<p>- Ruột đệm &ecirc;m &aacute;i, c&ugrave;ng vỏ đệm mịn đẹp..</p>\r\n\r\n<p>- Khung kim loại chắc chắn, chịu lực cực tốt.</p>\r\n\r\n<p>- Thiết kế ngăn chứa đồ tiện lợi.</p>\r\n\r\n<p>- L&agrave; sản phẩm đa năng gi&uacute;p tiết kiệm kh&ocirc;ng gian.</p>', 'sofa-beb-da-nang-cao-cap-mf819', 20, '3', 'images/products//1660531309.jpg', 0, 1, '2022-08-14 19:41:49', '2022-08-14 19:41:49'),
(41, 'ELEGANT SOFA BED MF805', '15625000', '<p>Elegant sofa bed MF805</p>\r\n\r\n<p>- Thiết kế đặc biệt c&oacute; thể gấp lại gọn g&agrave;ng như những chiếc ghế Sofa sang trọng hay mở ra th&agrave;nh chiếc giường chỉ với thao t&aacute;c đơn giản.</p>\r\n\r\n<p>- Ruột đệm &ecirc;m &aacute;i, c&ugrave;ng vỏ đệm mịn đẹp..</p>\r\n\r\n<p>- Khung kim loại chắc chắn, chịu lực cực tốt.</p>\r\n\r\n<p>- Thiết kế ngăn chứa đồ tiện lợi.</p>\r\n\r\n<p>- L&agrave; sản phẩm đa năng gi&uacute;p tiết kiệm kh&ocirc;ng gian.</p>\r\n\r\n<p><strong>Elegant sofa bed MF805</strong>&nbsp;được thiết kế theo xu hướng hiện đại linh hoạt trong qu&aacute; tr&igrave;nh sử dụng, được cấu th&agrave;nh từ những vật liệu chất lượng, bền bỉ cho thời gian sử dụng l&acirc;u d&agrave;i. Sofa giường l&agrave; giải ph&aacute;p hiệu quả cao để n&acirc;ng cao tiện &iacute;ch cuộc sống, tiết kiệm kh&ocirc;ng gian sử dụng của bạn. Kh&ocirc;ng chỉ linh hoạt, sản phẩm c&ograve;n mang t&iacute;nh thẩm mỹ, ph&ugrave; hợp với c&aacute;c hộ gia đ&igrave;nh c&oacute; diện t&iacute;ch nhỏ.&nbsp;</p>', 'elegent-sofa-bed-mf805', 15, '4', 'images/products//1660531451.jpg', 0, 1, '2022-08-14 19:44:11', '2022-08-14 19:44:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `status` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `phone`, `address`, `role_id`, `status`, `email`, `password`, `avatar`, `google_id`, `facebook_id`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hoàng', 'hoangnvph1516', '0379105123', '0000-00-00 00:00:00', 1, 0, 'hoangnvph15198@gmail.com', '$2a$11$mQX/1px42aO4yPPz84yhbOfd60Ay6SeylfwtviLEsxdoo8jRvEAqK', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'thắng', 'thangnv15198', '053412323', '0000-00-00 00:00:00', 0, 0, 'thang@gmail.com', '$2a$11$gPKoh6JGyorST9xBn5Bsie6/5xJecricE8t4TlKaOLSfNnSkHHLNu', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'nguyễn nam', 'nguyennam15198', NULL, NULL, 1, 0, 'nam@gmail.com', '$2y$10$yBtZdcYBflYId4IHkNM4AuDdTsMbIIIZRMK94SjmN9c7pwU6aI.8u', NULL, NULL, NULL, NULL, NULL, '2022-08-01 01:24:26', '2022-08-07 09:40:33'),
(4, 'tuan đẹp trai', 'tuandeptrai', '0379101632', '15 phú kiều ,kiều mai', 0, 0, 'tuandeptrai@gmail.com', '$2y$10$aVIDuwCCdGNkUfKmZZScduHJRmUQiT6KdVQxszE7Q.q9JGmURMGMC', NULL, NULL, NULL, NULL, NULL, '2022-08-01 01:27:16', '2022-08-08 00:31:00'),
(5, 'nam ok', 'namokday', NULL, NULL, 0, 0, 'namok@gmail.com', '$2y$10$1KOgetsB/F6xD3Pz6XuynuZ5lwuQfgRRdYaneMhi6uPtgYaXBq7ie', NULL, NULL, NULL, NULL, NULL, '2022-08-03 00:15:06', '2022-08-03 00:15:06'),
(6, 'long', 'long123', NULL, NULL, 0, 0, 'long@gmail.com', '$2y$10$bmwmBbkNXnJyM9wo1Lvqtu3bRtvp3zyN/9.v07Q74YGocpuEfL4jq', NULL, NULL, NULL, NULL, NULL, '2022-08-03 01:05:23', '2022-08-03 01:05:23'),
(13, 'Nguyễn Văn Hoàng PH 1 5 1 9 8', 'Nguyễn Văn Hoàng PH 1 5 1 9 8', '0379101632', '15 phú kiều kiều mai', 1, 0, 'hoangnvph15198@fpt.edu.vn', NULL, 'https://lh3.googleusercontent.com/a-/AFdZucq3IMjArmr_RB9JHAdo15HTdkxsgxv2m4yK_UAtSQ=s96-c', '110866336754102777896', NULL, NULL, NULL, '2022-08-07 20:56:16', '2022-08-12 22:21:36'),
(14, 'Hoang Nguyen', 'Hoang Nguyen', '0379101632', 'hà nam', 0, 0, 'hoangnvph111111@gmail.com', NULL, 'https://lh3.googleusercontent.com/a/AItbvmnq7TM6Y1Xps2kNEDSCHgo2sh1TGj8ZX5U8meo=s96-c', '109638581037665245149', NULL, NULL, NULL, '2022-08-08 00:23:10', '2022-08-08 01:26:57'),
(16, 'Hoàng Nguyễn Văn', 'Hoàng Nguyễn Văn', '', NULL, 0, 0, 'nguyenvanhoang2444@gmail.com', NULL, 'https://lh3.googleusercontent.com/a-/AFdZucpj6yVMPq-QUyxmU3r24SacI-1s1hdCRijGUBQm=s96-c', '104632705562936008368', NULL, NULL, NULL, '2022-08-11 20:15:33', '2022-08-11 20:15:33');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `attr_products`
--
ALTER TABLE `attr_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attr_products_attr_id_foreign` (`attr_id`),
  ADD KEY `attr_products_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `image_products`
--
ALTER TABLE `image_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_products_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_detail_order_id_foreign` (`order_id`),
  ADD KEY `order_detail_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `attr_products`
--
ALTER TABLE `attr_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT cho bảng `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `image_products`
--
ALTER TABLE `image_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `attr_products`
--
ALTER TABLE `attr_products`
  ADD CONSTRAINT `attr_products_attr_id_foreign` FOREIGN KEY (`attr_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `attr_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `image_products`
--
ALTER TABLE `image_products`
  ADD CONSTRAINT `image_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_detail_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
