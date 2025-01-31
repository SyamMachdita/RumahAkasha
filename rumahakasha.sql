-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2024 at 04:03 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahakasha`
--

-- --------------------------------------------------------

--
-- Table structure for table `baristas`
--

CREATE TABLE `baristas` (
  `id_barista` bigint(20) UNSIGNED NOT NULL,
  `nama_barista` varchar(255) NOT NULL,
  `foto_barista` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `tahun_kerja` varchar(255) NOT NULL,
  `job_desk` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `baristas`
--

INSERT INTO `baristas` (`id_barista`, `nama_barista`, `foto_barista`, `deskripsi`, `tahun_kerja`, `job_desk`, `created_at`, `updated_at`) VALUES
(20, 'Rio', '../public/img/barista/img3.JPG', 'mantap', '2222', 'Cook', NULL, NULL),
(22, 'Nobel', '../public/img/barista/IMG_3713.JPG', 'Mantapppp', '2021 - 2098', 'Barista', NULL, NULL),
(24, 'qweqwe', '../public/img/barista/img5.JPG', 'qweqwe', 'qweqwe', 'qweqwe', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `fee` double NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `date`, `time`, `image`, `description`, `fee`, `status`, `created_at`, `updated_at`) VALUES
(9, 'Event 1', '2024-05-27', '16:43:00', '../public/img/event/img7.jpg', 'TES EVENT 1', 40000, 'done', NULL, NULL),
(10, 'EVENT 2', '2024-05-03', '16:42:00', '../public/img/event/img3.JPG', 'TES UPCOMING EVENT', 40000, 'done', NULL, '2024-05-27 03:56:07'),
(11, 'tes', '2024-05-27', '16:45:00', '../public/img/event/img3.JPG', 'qwewqe', 123123, 'done', NULL, NULL),
(13, 'Event 3', '2024-05-25', '07:55:00', '../public/img/event/Instagram.png', 'Event 3', 40000, 'done', NULL, NULL),
(14, 'Event 5', '2024-05-04', '07:58:00', '../public/img/event/Linkedin.png', 'Event 5 mantap', 20000, 'done', NULL, NULL),
(29, 'Event Baru Tes', '2024-06-09', '04:21:00', '../public/img/event/3.png', 'qweqwe', 12000, 'in_progress', NULL, NULL);

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
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id_menu` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `description` text NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id_menu`, `name`, `image`, `price`, `description`, `kategori`) VALUES
(35, 'Coffee 3', '../public/img/menu/istockphoto-1471981886-612x612.jpg', '21000.00', 'coffee3, mantappp', 'coffee'),
(36, 'Non-Coffee', '../public/img/menu/istockphoto-1356367433-612x612.jpg', '21000.00', 'Non-Coffee', 'noncoffee'),
(37, 'Non Coffee 2', '../public/img/menu/images.jpg', '19000.00', 'Mantapp', 'noncoffee'),
(38, 'Signature 1', '../public/img/menu/How-to-make-an-English-Garden-mocktail-recipe-from-tt-liquor.jpg', '26000.00', 'Signaturee, mantap', 'signature'),
(39, 'Signature 2', '../public/img/menu/Garden-Of-Eden2-scaled.jpg', '24000.00', 'signature 2, mantapp', 'signature'),
(40, 'Food', '../public/img/menu/sweet-3f0b1c286c216c430921d08129c2bd95.jpeg', '30000.00', 'food mantap', 'food'),
(41, 'Food 2', '../public/img/menu/Waitoa-Chicken-Katsu-19729-landscape-1200x1200-1.webp', '32000.00', 'enak', 'food'),
(42, 'Food 3', '../public/img/menu/istockphoto-641845768-612x612.jpg', '24000.00', 'Enakkk', 'food'),
(46, 'Coffee 2', '../public/img/menu/cup-hot-cappuccino-coffee-on-600nw-2027907107.jpg', '12000.00', 'dqweqwe', 'coffee');

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
(5, '2024_05_22_095110_add_role_to_users_table', 2),
(6, '2024_05_22_100448_create_colom_users', 3),
(7, '2024_05_23_082519_create_menus_table', 4),
(8, '2024_05_25_113706_create_baristas_table', 5),
(9, '2024_05_27_093244_add_time_stamps_to_event', 6),
(10, '2024_05_27_093456_add_time_stamps_to_event_second', 7),
(11, '2024_05_28_131633_create_reservasis_table', 8),
(12, '2024_05_28_140258_create_pesanans_table', 9),
(14, '2024_05_28_140851_create_pembayarans_table', 10),
(15, '2024_06_04_072912_add_status_on_pembayarans', 11),
(16, '2024_06_04_184852_add_payment_token_to_reservations_table', 12),
(17, '2024_06_05_092312_add_orderid_pembayaran', 13);

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
-- Table structure for table `pembayarans`
--

CREATE TABLE `pembayarans` (
  `id_pembayaran` bigint(20) UNSIGNED NOT NULL,
  `order_id` text DEFAULT NULL,
  `id_reservasi` bigint(20) UNSIGNED NOT NULL,
  `id_customer` bigint(20) UNSIGNED NOT NULL,
  `total_harga` int(11) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembayarans`
--

INSERT INTO `pembayarans` (`id_pembayaran`, `order_id`, `id_reservasi`, `id_customer`, `total_harga`, `status`, `created_at`, `updated_at`) VALUES
(2, NULL, 1, 3, 52000, NULL, '2024-05-28 21:30:43', '2024-05-28 21:30:43'),
(3, NULL, 2, 5, 76000, NULL, '2024-05-28 21:42:45', '2024-05-28 21:42:45'),
(4, NULL, 3, 5, 76000, NULL, '2024-05-28 21:44:19', '2024-05-28 21:44:19'),
(5, NULL, 4, 5, 130000, NULL, '2024-05-28 21:44:57', '2024-05-28 21:44:57'),
(6, NULL, 5, 3, 88000, NULL, '2024-05-29 00:20:03', '2024-05-29 00:20:03'),
(7, NULL, 6, 6, 60000, NULL, '2024-05-29 00:42:31', '2024-05-29 00:42:31'),
(8, NULL, 7, 7, 106000, NULL, '2024-05-30 03:27:03', '2024-05-30 03:27:03'),
(10, NULL, 9, 7, 38000, NULL, '2024-05-30 04:17:54', '2024-05-30 04:17:54'),
(16, NULL, 15, 3, 192600, NULL, '2024-05-31 07:12:14', '2024-05-31 07:12:14'),
(17, 'e222789c4ecd7fe2c957e288ec8ed520', 16, 5, 101200, NULL, '2024-06-01 00:15:58', '2024-06-08 07:34:30'),
(18, NULL, 17, 7, 24000, NULL, '2024-06-01 05:23:16', '2024-06-01 05:23:16'),
(19, NULL, 18, 7, 0, NULL, '2024-06-01 05:24:21', '2024-06-01 05:24:21'),
(20, NULL, 19, 7, 0, NULL, '2024-06-01 05:25:33', '2024-06-01 05:25:33'),
(21, NULL, 20, 7, 0, NULL, '2024-06-01 05:25:44', '2024-06-01 05:25:44'),
(22, NULL, 21, 3, 85000, NULL, '2024-06-01 23:20:07', '2024-06-01 23:20:07'),
(23, NULL, 22, 10, 69600, NULL, '2024-06-02 01:20:36', '2024-06-02 01:20:36'),
(24, NULL, 23, 9, 57200, NULL, '2024-06-02 02:55:47', '2024-06-02 02:55:47'),
(25, NULL, 24, 13, 66000, NULL, '2024-06-02 07:26:38', '2024-06-02 07:26:38'),
(26, NULL, 25, 10, 128200, NULL, '2024-06-03 01:39:12', '2024-06-03 01:39:12'),
(27, '5188c50fbe296cb3da4efea7c49a89ae', 26, 8, 368003, NULL, '2024-06-03 23:25:14', '2024-06-06 08:44:00'),
(28, NULL, 27, 3, 318003, NULL, '2024-06-04 05:33:29', '2024-06-04 05:33:29'),
(29, NULL, 28, 14, 36000, NULL, '2024-06-04 11:28:37', '2024-06-04 11:28:37'),
(30, NULL, 29, 15, 144000, NULL, '2024-06-04 11:55:51', '2024-06-04 11:55:51'),
(31, NULL, 30, 16, 182002, NULL, '2024-06-04 19:48:01', '2024-06-04 19:48:01'),
(33, NULL, 32, 17, 36000, NULL, '2024-06-04 21:31:35', '2024-06-04 21:31:35'),
(36, NULL, 35, 4, 186003, NULL, '2024-06-04 22:16:15', '2024-06-04 22:16:15'),
(37, '1899acd77931a9a16a354e53d6e79a44', 36, 18, 64001, NULL, '2024-06-05 03:03:57', '2024-06-05 03:16:42'),
(43, '443a5555496f2be5408a34ccd516742c', 42, 13, 114001, 'PAID', '2024-06-06 02:18:04', '2024-06-06 08:43:49'),
(44, '2fec49e485a6fac2a1c631834a1d0484', 43, 10, 198003, 'PAID', '2024-06-06 08:45:49', '2024-06-06 08:46:15'),
(47, '1a24cbb6bb4361593b8ff9a80853d41a', 46, 3, 195000, 'PAID', '2024-06-08 07:31:59', '2024-06-08 07:32:17'),
(48, 'bb75e741a03b7855ee4d4bf7d36436d1', 47, 4, 648000, 'PAID', '2024-06-08 07:35:47', '2024-06-08 07:35:59'),
(49, '2bb5a8516d5e7c9e3f86ea1641b3cb04', 48, 19, 142000, 'PAID', '2024-06-08 07:53:46', '2024-06-08 07:54:31'),
(50, NULL, 49, 3, 0, NULL, '2024-06-09 00:49:19', '2024-06-09 00:49:19'),
(51, NULL, 50, 4, 77000, NULL, '2024-06-09 00:50:07', '2024-06-09 00:50:07'),
(52, 'fadff3ee881394b73ae67c07bacc5fd2', 51, 4, 120000, 'PAID', '2024-06-09 00:50:32', '2024-06-09 00:52:34'),
(53, NULL, 52, 20, 0, NULL, '2024-06-09 02:29:57', '2024-06-09 02:29:57');

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
-- Table structure for table `pesanans`
--

CREATE TABLE `pesanans` (
  `id_pesanan` bigint(20) UNSIGNED NOT NULL,
  `id_customer` bigint(20) UNSIGNED NOT NULL,
  `id_menu` bigint(20) UNSIGNED NOT NULL,
  `id_reservasi` bigint(20) NOT NULL,
  `nama_menu` varchar(255) NOT NULL,
  `harga_menu` decimal(8,2) NOT NULL,
  `jumlah_menu` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesanans`
--

INSERT INTO `pesanans` (`id_pesanan`, `id_customer`, `id_menu`, `id_reservasi`, `nama_menu`, `harga_menu`, `jumlah_menu`, `created_at`, `updated_at`) VALUES
(162, 3, 36, 46, 'Non-Coffee', '21000.00', 1, '2024-06-08 07:31:59', '2024-06-08 07:31:59'),
(163, 3, 37, 46, 'Non Coffee 2', '19000.00', 1, '2024-06-08 07:31:59', '2024-06-08 07:31:59'),
(164, 3, 38, 46, 'Signature 1', '26000.00', 1, '2024-06-08 07:31:59', '2024-06-08 07:31:59'),
(165, 3, 39, 46, 'Signature 2', '24000.00', 1, '2024-06-08 07:31:59', '2024-06-08 07:31:59'),
(166, 3, 40, 46, 'Food 1', '30000.00', 1, '2024-06-08 07:31:59', '2024-06-08 07:31:59'),
(167, 3, 41, 46, 'Food 2', '32000.00', 1, '2024-06-08 07:31:59', '2024-06-08 07:31:59'),
(169, 4, 35, 47, 'Coffee 3', '21000.00', 5, '2024-06-08 07:35:47', '2024-06-08 07:35:47'),
(170, 4, 36, 47, 'Non-Coffee', '21000.00', 6, '2024-06-08 07:35:47', '2024-06-08 07:35:47'),
(171, 4, 41, 47, 'Food 2', '32000.00', 8, '2024-06-08 07:35:47', '2024-06-08 07:35:47'),
(173, 19, 36, 48, 'Non-Coffee', '21000.00', 1, '2024-06-08 07:53:46', '2024-06-08 07:53:46'),
(174, 19, 37, 48, 'Non Coffee 2', '19000.00', 1, '2024-06-08 07:53:46', '2024-06-08 07:53:46'),
(175, 19, 38, 48, 'Signature 1', '26000.00', 1, '2024-06-08 07:53:46', '2024-06-08 07:53:46'),
(176, 19, 39, 48, 'Signature 2', '24000.00', 1, '2024-06-08 07:53:46', '2024-06-08 07:53:46'),
(177, 19, 41, 48, 'Food 2', '32000.00', 1, '2024-06-08 07:53:46', '2024-06-08 07:53:46'),
(178, 4, 36, 50, 'Non-Coffee', '21000.00', 1, '2024-06-09 00:50:07', '2024-06-09 00:50:07'),
(179, 4, 38, 50, 'Signature 1', '26000.00', 1, '2024-06-09 00:50:07', '2024-06-09 00:50:07'),
(180, 4, 40, 50, 'Food 1', '30000.00', 1, '2024-06-09 00:50:07', '2024-06-09 00:50:07'),
(182, 4, 35, 51, 'Coffee 3', '21000.00', 1, '2024-06-09 00:50:32', '2024-06-09 00:50:32'),
(183, 4, 37, 51, 'Non Coffee 2', '19000.00', 4, '2024-06-09 00:50:32', '2024-06-09 00:50:32');

-- --------------------------------------------------------

--
-- Table structure for table `registrasi_event`
--

CREATE TABLE `registrasi_event` (
  `id_registrasievent` bigint(20) UNSIGNED NOT NULL,
  `id_event` int(11) NOT NULL,
  `id_customer` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrasi_event`
--

INSERT INTO `registrasi_event` (`id_registrasievent`, `id_event`, `id_customer`, `status`) VALUES
(7, 10, 3, 'checked'),
(8, 10, 4, 'checked'),
(9, 10, 5, 'checked'),
(10, 10, 6, NULL),
(40, 29, 7, 'checked'),
(41, 29, 20, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reservasis`
--

CREATE TABLE `reservasis` (
  `id_reservasi` bigint(20) UNSIGNED NOT NULL,
  `id_customer` bigint(20) UNSIGNED NOT NULL,
  `tempat` enum('indoor','outdoor') NOT NULL,
  `jumlah_orang` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `note` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `payment_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservasis`
--

INSERT INTO `reservasis` (`id_reservasi`, `id_customer`, `tempat`, `jumlah_orang`, `tanggal`, `jam`, `note`, `created_at`, `updated_at`, `payment_token`) VALUES
(1, 3, 'outdoor', 20, '2024-05-29', '11:36:00', 'TESS', '2024-05-28 21:30:43', '2024-05-28 21:30:43', NULL),
(2, 5, 'indoor', 20, '2024-05-29', '23:42:00', 'TES PESEN MENU', '2024-05-28 21:42:45', '2024-05-28 21:42:45', NULL),
(3, 5, 'indoor', 20, '2024-05-29', '23:42:00', 'TES PESEN MENU', '2024-05-28 21:44:19', '2024-05-28 21:44:19', NULL),
(4, 5, 'indoor', 12, '2024-05-29', '23:44:00', 'qweqwe', '2024-05-28 21:44:57', '2024-05-28 21:44:57', NULL),
(5, 3, 'outdoor', 99, '2024-05-30', '02:19:00', 'Mantap', '2024-05-29 00:20:03', '2024-05-29 00:20:03', NULL),
(6, 6, 'outdoor', 12, '2024-06-08', '02:42:00', 'QWPOEQWEPOQW', '2024-05-29 00:42:31', '2024-05-29 00:42:31', NULL),
(7, 7, 'indoor', 12, '2024-05-04', '05:26:00', 'TES BARU', '2024-05-30 03:27:03', '2024-05-30 03:27:03', NULL),
(9, 7, 'outdoor', 90, '2024-05-30', '06:17:00', NULL, '2024-05-30 04:17:54', '2024-05-30 04:17:54', NULL),
(15, 3, 'outdoor', 20, '2024-05-31', '09:11:00', 'TES RESERVASI BARU', '2024-05-31 07:12:14', '2024-05-31 07:12:14', NULL),
(16, 5, 'outdoor', 12, '2024-06-15', '02:15:00', 'TES', '2024-06-01 00:15:58', '2024-06-01 00:15:58', NULL),
(17, 7, 'indoor', 12, '2024-06-01', '19:29:00', 'asdasda', '2024-06-01 05:23:16', '2024-06-01 05:23:16', NULL),
(18, 7, 'indoor', 12, '2024-06-15', '07:24:00', 'qweqwe', '2024-06-01 05:24:21', '2024-06-01 05:24:21', NULL),
(19, 7, 'indoor', 12, '2024-06-15', '07:24:00', 'qweqwe', '2024-06-01 05:25:33', '2024-06-01 05:25:33', NULL),
(20, 7, 'outdoor', 12, '2024-06-22', '07:25:00', 'qweqwe', '2024-06-01 05:25:44', '2024-06-01 05:25:44', NULL),
(21, 3, 'outdoor', 12, '2024-06-02', '01:19:00', 'TES RESERVASI INFO', '2024-06-01 23:20:07', '2024-06-01 23:20:07', NULL),
(22, 10, 'outdoor', 69, '2024-06-02', '03:20:00', 'TES MENU', '2024-06-02 01:20:36', '2024-06-02 01:20:36', NULL),
(23, 9, 'indoor', 96, '2024-06-02', '04:55:00', 'TES MANTAP JIWA', '2024-06-02 02:55:47', '2024-06-02 02:55:47', NULL),
(24, 13, 'outdoor', 12, '2024-06-03', '09:26:00', 'testestse', '2024-06-02 07:26:38', '2024-06-02 07:26:38', NULL),
(25, 10, 'outdoor', 12, '2024-06-04', '03:39:00', 'TES RESERVASI', '2024-06-03 01:39:12', '2024-06-03 01:39:12', NULL),
(26, 8, 'outdoor', 32, '2024-07-06', '13:28:00', 'tes', '2024-06-03 23:25:14', '2024-06-03 23:25:14', NULL),
(27, 3, 'outdoor', 12, '2024-06-05', '07:33:00', 'qweqweqwe', '2024-06-04 05:33:29', '2024-06-04 05:33:29', NULL),
(28, 14, 'indoor', 12, '2024-06-05', '13:28:00', 'tes payment', '2024-06-04 11:28:36', '2024-06-04 11:28:36', NULL),
(29, 15, 'outdoor', 20, '2024-06-05', '01:56:00', '222', '2024-06-04 11:55:51', '2024-06-04 11:55:51', NULL),
(30, 16, 'outdoor', 11, '2024-06-05', '21:47:00', 'qwewqe', '2024-06-04 19:48:00', '2024-06-04 19:48:00', NULL),
(32, 17, 'indoor', 12, '2024-06-05', '11:32:00', 'qweqweeqw', '2024-06-04 21:31:35', '2024-06-04 21:31:35', NULL),
(33, 13, 'outdoor', 12, '2024-06-05', '23:45:00', 'qweqwe', '2024-06-04 21:45:11', '2024-06-04 21:45:11', NULL),
(35, 4, 'indoor', 12, '2024-06-05', '00:16:00', 'qweqwe', '2024-06-04 22:16:15', '2024-06-04 22:16:15', NULL),
(36, 18, 'outdoor', 10, '2024-06-05', '17:03:00', 'fauzan', '2024-06-05 03:03:57', '2024-06-05 03:03:57', NULL),
(42, 13, 'indoor', 24, '2024-06-06', '04:17:00', 'qweqweq', '2024-06-06 02:18:04', '2024-06-06 02:18:04', NULL),
(43, 10, 'outdoor', 25, '2024-06-06', '10:45:00', 'halo', '2024-06-06 08:45:48', '2024-06-06 08:45:48', NULL),
(44, 11, 'outdoor', 20, '2024-06-07', '04:30:00', 'tes reservasi', '2024-06-07 02:30:20', '2024-06-07 02:30:20', NULL),
(46, 3, 'outdoor', 15, '2024-06-08', '09:31:00', 'Tidak ada', '2024-06-08 07:31:59', '2024-06-08 07:31:59', NULL),
(47, 4, 'indoor', 31, '2024-06-08', '09:34:00', 'Tidak ada', '2024-06-08 07:35:47', '2024-06-08 07:35:47', NULL),
(48, 19, 'outdoor', 20, '2024-06-10', '09:53:00', 'Tidak ada', '2024-06-08 07:53:46', '2024-06-08 07:53:46', NULL),
(49, 3, 'indoor', 12, '2024-06-09', '02:49:00', 'dasdasda', '2024-06-09 00:49:19', '2024-06-09 00:49:19', NULL),
(50, 4, 'indoor', 2, '2024-06-08', '02:49:00', 'qwe', '2024-06-09 00:50:07', '2024-06-09 00:50:07', NULL),
(51, 4, 'outdoor', 2, '2024-06-09', '02:50:00', 'qweqweqw', '2024-06-09 00:50:32', '2024-06-09 00:50:32', NULL),
(52, 20, 'outdoor', 2, '2024-06-09', '04:29:00', 'qweqwe', '2024-06-09 02:29:57', '2024-06-09 02:29:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('customer','staff','owner') NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `full_name`, `email`, `no_telp`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Staff_Akasha', '', 'staff@gmail.com', '', NULL, '$2y$12$D5oqtGoXN1YfoqXuC/XrEOuanYFcqwBKgDF306VwdjroxMKpyAsIO', 'staff', NULL, '2024-05-26 07:30:32', '2024-05-26 07:30:32'),
(2, 'Owner_Akasha', '', 'owner@gmail.com', '', NULL, '$2y$12$B8eenKlFlCok03la3JS3XutDP1wHuCQv8k9jdoSHgaYUzeS/H0qji', 'owner', NULL, '2024-05-26 07:30:32', '2024-05-26 07:30:32'),
(3, 'customer1', 'customer_akasha', 'customer@gmail.com', '08123343322', NULL, '$2y$12$1PwFz4e8y7V.yc7j7wBIIuu3jNzYMLwWnBNn4WPQXAh/kt.uFf14G', 'customer', NULL, '2024-05-26 07:34:38', '2024-05-26 07:34:38'),
(4, 'customer2', 'customer2', 'customer2@gmail.com', '123456', NULL, '$2y$12$DYvFtAERE8qinrVpuhkwI.Kpnyl4/kYPZdTRGj6/Umr58Cp5936ge', 'customer', NULL, '2024-05-27 03:14:52', '2024-05-27 03:14:52'),
(5, 'customer3', 'customer3', 'customer3@gmail.com', '4321', NULL, '$2y$12$81KDRVjvtCwWO2/.gb6tAOGZjent8Ebq9Qo7s4Pte.IDA6p22CNb2', 'customer', NULL, '2024-05-27 03:15:21', '2024-05-27 03:15:21'),
(6, 'customer4', 'customer4', 'customer4@gmail.com', '532123', NULL, '$2y$12$/f4DyMnsOsgCUCRlJXtkYezZpW6/GVgI4YqelGSJ3ytS83BF5yQTq', 'customer', NULL, '2024-05-27 03:54:56', '2024-05-27 03:54:56'),
(7, 'customer5', 'customer5', 'customer5@gmail.com', '54321', NULL, '$2y$12$xqgiXvj.C/5DbXgBzLvS4eqkChsy5jwTfJQQOfaYFzDFmBRzesWu6', 'customer', NULL, '2024-05-27 18:06:59', '2024-05-27 18:06:59'),
(8, 'customer6', 'customer6', 'customer6@gmail.com', '654321', NULL, '$2y$12$lZl7r98QTR1pqCNj8sYs2OGsgp24xbfOEObkJ37xRa69ZvPTjwBGq', 'customer', NULL, '2024-05-27 18:07:27', '2024-05-27 18:07:27'),
(9, 'customer7', 'customer7', 'customer7@gmail.com', '57612312', NULL, '$2y$12$RalhHy/icbbCXChlbsx41egWmwYCVAWaW66p1ldL6DcjCynZjwqLO', 'customer', NULL, '2024-05-27 18:08:01', '2024-05-27 18:08:01'),
(10, 'customer8', 'customer8', 'customer8@gmail.com', '581237', NULL, '$2y$12$diSJX5Yc7VIuzgsFFM3AxOqreZrBqEWf6mMJSv5HGaXFdLO1jy5YG', 'customer', NULL, '2024-05-27 18:08:37', '2024-05-27 18:08:37'),
(11, 'customerbaru', 'customerbaru', 'customerbaru@gmail.com', '0814331556', NULL, '$2y$12$asAWfmFKNIbz1qdmtoSzGumawyCyEec5yx9NdPdKobuOuoomuuOC.', 'customer', NULL, '2024-05-29 00:15:44', '2024-05-29 00:15:44'),
(12, 'customertes', 'customertes', 'customertes@gmail.com', '08547561', NULL, '$2y$12$IlOS9xbM7cpM.Ho5iSP43OojGX9lGqhsbDSFOpC3GKRHEMF1/dW0K', 'customer', NULL, '2024-05-31 21:26:05', '2024-05-31 21:26:05'),
(13, 'wildan', 'wildan botel', 'wildan@gmail.com', '0812347819', NULL, '$2y$12$5t1oCmlinQuASX9kLKol1Oc.lSIoeiyvp9V1v8BAFZcsUhOFK1Ah.', 'customer', NULL, '2024-06-02 07:25:53', '2024-06-02 07:25:53'),
(14, 'payment', 'payment', 'customerpayment@gmail.com', '019231590', NULL, '$2y$12$8UcWp1gqvEbTCJBi5POec.ih7lUmGe9OGSQClIlZ1mmtpzcnXG7k.', 'customer', NULL, '2024-06-04 11:27:37', '2024-06-04 11:27:37'),
(15, 'customer10', 'customer10', 'customer10@gmail.com', '08133229933', NULL, '$2y$12$gsGHq32kckesFCH3BH9L3.cvJPR1dXfACm4Wb.WjAQ6u2.8P555Em', 'customer', NULL, '2024-06-04 11:55:04', '2024-06-04 11:55:04'),
(16, 'customer11', 'customer11', 'customer11@gmail.com', '869412314', NULL, '$2y$12$x/lQ7BI92Rs3eGyERsNIDOSYUrc7OOALyDSP865SpLWHvcL2JbrQ.', 'customer', NULL, '2024-06-04 19:47:07', '2024-06-04 19:47:07'),
(17, 'customer12', 'customer12', 'customer12@gmail.com', '112391410', NULL, '$2y$12$Fj9BRd5nWSuillG0v0KGCemvYQiEoZiZykgfQc/2F/GQfHMUDKNga', 'customer', NULL, '2024-06-04 21:03:04', '2024-06-04 21:03:04'),
(18, 'fauzan', 'fauzan', 'fauzan@gmail.com', '3219123', NULL, '$2y$12$Ia2CbzqEsv47zuazW0HSwuSWgCx2JsSS76mur8yW/YQotNkwMNYVG', 'customer', NULL, '2024-06-05 03:03:13', '2024-06-05 03:03:13'),
(19, 'customerakasha', 'customerakasha', 'customerbaruakasha@gmail.com', '0814351235', NULL, '$2y$12$KEYsHGP2/MNIM52r.KFzcePRgNPVsZRn6ylRmkjgCCeAcH9lTkxS6', 'customer', NULL, '2024-06-08 07:51:39', '2024-06-08 07:51:39'),
(20, 'qweqwe', 'qweqweqwe', 'customertess@gmail.com', '123123', NULL, '$2y$12$aSB4iipW4BqIQE9wYp52kuo1wpI/PaUeniTMdCtdhS9CscDz.H9q2', 'customer', NULL, '2024-06-09 02:29:28', '2024-06-09 02:29:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baristas`
--
ALTER TABLE `baristas`
  ADD PRIMARY KEY (`id_barista`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id_menu`);

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
-- Indexes for table `pembayarans`
--
ALTER TABLE `pembayarans`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `pembayarans_id_reservasi_foreign` (`id_reservasi`),
  ADD KEY `pembayarans_id_customer_foreign` (`id_customer`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pesanans`
--
ALTER TABLE `pesanans`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `pesanans_id_customer_foreign` (`id_customer`),
  ADD KEY `pesanans_id_menu_foreign` (`id_menu`);

--
-- Indexes for table `registrasi_event`
--
ALTER TABLE `registrasi_event`
  ADD PRIMARY KEY (`id_registrasievent`),
  ADD KEY `id_event` (`id_event`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indexes for table `reservasis`
--
ALTER TABLE `reservasis`
  ADD PRIMARY KEY (`id_reservasi`),
  ADD KEY `reservasis_id_customer_foreign` (`id_customer`);

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
-- AUTO_INCREMENT for table `baristas`
--
ALTER TABLE `baristas`
  MODIFY `id_barista` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id_menu` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pembayarans`
--
ALTER TABLE `pembayarans`
  MODIFY `id_pembayaran` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanans`
--
ALTER TABLE `pesanans`
  MODIFY `id_pesanan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

--
-- AUTO_INCREMENT for table `registrasi_event`
--
ALTER TABLE `registrasi_event`
  MODIFY `id_registrasievent` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `reservasis`
--
ALTER TABLE `reservasis`
  MODIFY `id_reservasi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayarans`
--
ALTER TABLE `pembayarans`
  ADD CONSTRAINT `pembayarans_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pembayarans_id_reservasi_foreign` FOREIGN KEY (`id_reservasi`) REFERENCES `reservasis` (`id_reservasi`) ON DELETE CASCADE;

--
-- Constraints for table `pesanans`
--
ALTER TABLE `pesanans`
  ADD CONSTRAINT `pesanans_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pesanans_id_menu_foreign` FOREIGN KEY (`id_menu`) REFERENCES `menus` (`id_menu`) ON DELETE CASCADE;

--
-- Constraints for table `registrasi_event`
--
ALTER TABLE `registrasi_event`
  ADD CONSTRAINT `registrasi_event_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `events` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `registrasi_event_ibfk_2` FOREIGN KEY (`id_customer`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reservasis`
--
ALTER TABLE `reservasis`
  ADD CONSTRAINT `reservasis_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
