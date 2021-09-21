-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Sep 2021 pada 20.12
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u4328983_orkes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alamat`
--

CREATE TABLE `alamat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `daerah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `alamat`
--

INSERT INTO `alamat` (`id`, `daerah`, `harga_id`, `created_at`, `updated_at`) VALUES
(1, 'Samarinda Kota', 6, '2021-07-13 18:30:10', '2021-09-16 09:41:59'),
(2, 'Tenggarong', 1, '2021-07-14 15:40:57', '2021-09-16 09:43:38'),
(3, 'Samarinda Seberang', 6, '2021-09-13 05:55:24', '2021-09-16 09:39:46'),
(4, 'Samarinda Seberang', 2, '2021-09-16 09:40:25', '2021-09-16 09:40:25'),
(5, 'Samarinda Seberang', 12, '2021-09-16 09:41:03', '2021-09-16 09:41:03'),
(6, 'Samarinda Kota', 2, '2021-09-16 09:42:23', '2021-09-16 09:42:23'),
(7, 'Samarinda Kota', 12, '2021-09-16 09:42:49', '2021-09-16 09:42:49'),
(8, 'Tenggarong', 14, '2021-09-16 09:44:02', '2021-09-16 09:44:02'),
(9, 'Tenggarong', 13, '2021-09-16 09:44:30', '2021-09-16 09:44:30'),
(10, 'Sebulu', 1, '2021-09-16 09:45:05', '2021-09-16 09:45:05'),
(11, 'Sebulu', 14, '2021-09-16 09:46:15', '2021-09-16 09:46:15'),
(12, 'Sebulu', 13, '2021-09-16 09:46:42', '2021-09-16 09:46:42'),
(13, 'Palaran', 6, '2021-09-16 09:47:36', '2021-09-16 09:47:36'),
(14, 'Palaran', 2, '2021-09-16 09:48:09', '2021-09-16 09:48:09'),
(15, 'Palaran', 12, '2021-09-16 09:48:36', '2021-09-16 09:48:36'),
(16, 'Handil', 1, '2021-09-16 09:49:07', '2021-09-16 09:49:07'),
(17, 'Handil', 14, '2021-09-16 09:49:35', '2021-09-16 09:49:35'),
(18, 'Handil', 13, '2021-09-16 09:50:00', '2021-09-16 09:50:00'),
(19, 'Anggana', 15, '2021-09-16 09:50:43', '2021-09-16 09:50:43'),
(20, 'Anggana', 16, '2021-09-16 09:51:13', '2021-09-16 09:51:13'),
(21, 'Anggana', 17, '2021-09-16 09:51:48', '2021-09-16 09:51:48'),
(22, 'Sungai Mariam', 15, '2021-09-16 09:52:42', '2021-09-16 09:52:42'),
(23, 'Sungai Mariam', 16, '2021-09-16 09:53:16', '2021-09-16 09:53:16'),
(24, 'Sungai Mariam', 17, '2021-09-16 09:53:38', '2021-09-16 09:53:38'),
(25, 'Bontang', 18, '2021-09-16 09:54:26', '2021-09-16 09:54:26'),
(26, 'Bontang', 19, '2021-09-16 09:54:56', '2021-09-16 09:54:56'),
(27, 'Bontang', 20, '2021-09-16 09:55:49', '2021-09-16 09:55:49'),
(28, 'Tanjung Santan', 18, '2021-09-16 09:57:09', '2021-09-16 09:57:09'),
(29, 'Tanjung Santan', 19, '2021-09-16 09:57:27', '2021-09-16 09:57:27'),
(30, 'Tanjung Santan', 20, '2021-09-16 09:57:48', '2021-09-16 09:57:48'),
(31, 'Sanga - Sanga', 15, '2021-09-16 09:58:46', '2021-09-16 09:58:46'),
(32, 'Sanga - Sanga', 16, '2021-09-16 09:59:13', '2021-09-16 09:59:13'),
(33, 'Sanga - Sanga', 17, '2021-09-16 09:59:36', '2021-09-16 09:59:36'),
(34, 'Bantuas', 21, '2021-09-16 10:00:40', '2021-09-16 10:00:40'),
(35, 'Bantuas', 22, '2021-09-16 10:01:14', '2021-09-16 10:01:14'),
(36, 'Bantuas', 23, '2021-09-16 10:03:51', '2021-09-16 10:03:51'),
(37, 'Bukuan', 25, '2021-09-16 10:06:58', '2021-09-16 10:06:58'),
(38, 'Bukuan', 26, '2021-09-16 10:07:20', '2021-09-16 10:07:20'),
(39, 'Bukuan', 44, '2021-09-16 10:08:55', '2021-09-16 10:08:55'),
(40, 'Loa Janan', 6, '2021-09-16 10:09:34', '2021-09-16 10:09:34'),
(41, 'Loa Janan', 2, '2021-09-16 10:10:11', '2021-09-16 10:10:11'),
(42, 'Loa Janan', 12, '2021-09-16 10:10:30', '2021-09-16 10:10:30'),
(43, 'Loa Kulu', 44, '2021-09-16 10:11:09', '2021-09-16 10:11:09'),
(44, 'Loa Kulu', 25, '2021-09-16 10:11:49', '2021-09-16 10:11:49'),
(45, 'Loa Kulu', 26, '2021-09-16 10:12:26', '2021-09-16 10:12:26'),
(46, 'Loa Bakung', 6, '2021-09-16 10:13:04', '2021-09-16 10:13:04'),
(47, 'Loa Bakung', 2, '2021-09-16 10:13:38', '2021-09-16 10:13:38'),
(48, 'Loa Bakung', 12, '2021-09-16 10:13:58', '2021-09-16 10:13:58'),
(49, 'Loa Duri', 44, '2021-09-16 10:14:51', '2021-09-16 10:14:51'),
(50, 'Loa Duri', 25, '2021-09-16 10:15:24', '2021-09-16 10:15:24'),
(51, 'Loa Duri', 26, '2021-09-16 10:15:49', '2021-09-16 10:15:49'),
(52, 'Balikpapan', 18, '2021-09-16 10:16:32', '2021-09-16 10:16:32'),
(53, 'Balikpapan', 19, '2021-09-16 10:16:59', '2021-09-16 10:16:59'),
(54, 'Balikpapan', 20, '2021-09-16 10:17:25', '2021-09-16 10:17:25'),
(55, 'Muara Pantuan', 29, '2021-09-16 10:18:37', '2021-09-16 10:18:37'),
(56, 'Muara Pantuan', 27, '2021-09-16 10:18:58', '2021-09-16 10:18:58'),
(57, 'Muara Pantuan', 28, '2021-09-16 10:19:18', '2021-09-16 10:19:18'),
(58, 'Muara Badak', 1, '2021-09-16 10:19:58', '2021-09-16 10:19:58'),
(59, 'Muara Badak', 14, '2021-09-16 10:20:37', '2021-09-16 10:20:37'),
(60, 'Muara Badak', 13, '2021-09-16 10:21:06', '2021-09-16 10:21:06'),
(61, 'Sungai Siring', 44, '2021-09-16 10:22:04', '2021-09-16 10:22:04'),
(62, 'Sungai Siring', 25, '2021-09-16 10:22:32', '2021-09-16 10:22:32'),
(63, 'Sungai Siring', 26, '2021-09-16 10:22:51', '2021-09-16 10:22:51'),
(64, 'Samboja', 18, '2021-09-16 10:24:49', '2021-09-16 10:24:49'),
(65, 'Samboja', 19, '2021-09-16 10:25:12', '2021-09-16 10:25:12'),
(66, 'Samboja', 20, '2021-09-16 10:25:30', '2021-09-16 10:25:30'),
(67, 'Saliki', 1, '2021-09-16 10:26:17', '2021-09-16 10:26:17'),
(68, 'Saliki', 45, '2021-09-16 10:29:25', '2021-09-16 10:29:25'),
(69, 'Saliki', 46, '2021-09-16 10:29:45', '2021-09-16 10:29:45'),
(70, 'Kutai Lama', 15, '2021-09-16 10:30:51', '2021-09-16 10:30:51'),
(71, 'Kutai Lama', 14, '2021-09-16 10:31:15', '2021-09-16 10:31:15'),
(72, 'Kutai Lama', 13, '2021-09-16 10:31:38', '2021-09-16 10:31:38'),
(73, 'Marangkayu', 14, '2021-09-16 10:33:07', '2021-09-16 10:33:07'),
(74, 'Marangkayu', 13, '2021-09-16 10:33:28', '2021-09-16 10:33:28'),
(75, 'Sanipah', 47, '2021-09-16 10:35:12', '2021-09-16 10:35:12'),
(76, 'sanipah', 45, '2021-09-16 10:35:55', '2021-09-16 10:35:55'),
(77, 'Sanipah', 46, '2021-09-16 10:36:16', '2021-09-16 10:36:16'),
(78, 'Marangkayu', 47, '2021-09-16 10:36:41', '2021-09-16 10:36:41'),
(79, 'Segihan', 1, '2021-09-16 10:37:11', '2021-09-16 10:37:11'),
(80, 'Segihan', 14, '2021-09-16 10:37:36', '2021-09-16 10:37:36'),
(81, 'Segihan', 13, '2021-09-16 10:37:56', '2021-09-16 10:37:56'),
(82, 'Sangatta', 29, '2021-09-16 10:38:38', '2021-09-16 10:38:38'),
(83, 'Sangatta', 27, '2021-09-16 10:39:03', '2021-09-16 10:39:03'),
(84, 'Sangatta', 28, '2021-09-16 10:39:31', '2021-09-16 10:39:31'),
(85, 'Penajam', 30, '2021-09-16 10:40:03', '2021-09-16 10:40:03'),
(86, 'Penajam', 31, '2021-09-16 10:40:24', '2021-09-16 10:40:24'),
(87, 'Penajam', 32, '2021-09-16 10:40:47', '2021-09-16 10:40:47'),
(88, 'Sepaku', 33, '2021-09-16 10:41:23', '2021-09-16 10:41:23'),
(89, 'Sepaku', 34, '2021-09-16 10:41:46', '2021-09-16 10:41:46'),
(90, 'Sepaku', 35, '2021-09-16 10:42:05', '2021-09-16 10:42:05'),
(91, 'Tanah Grogot', 36, '2021-09-16 10:42:46', '2021-09-16 10:42:46'),
(92, 'Tanah Grogot', 37, '2021-09-16 10:43:07', '2021-09-16 10:43:07'),
(93, 'Tanah Grogot', 38, '2021-09-16 10:43:38', '2021-09-16 10:43:38'),
(94, 'Melak', 36, '2021-09-16 10:44:10', '2021-09-16 10:44:10'),
(95, 'Melak', 37, '2021-09-16 10:44:33', '2021-09-16 10:44:33'),
(96, 'Melak', 38, '2021-09-16 10:44:53', '2021-09-16 10:44:53'),
(97, 'Sangkulirang', 41, '2021-09-16 10:45:28', '2021-09-16 10:45:28'),
(98, 'Sangkulirang', 42, '2021-09-16 10:45:49', '2021-09-16 10:45:49'),
(99, 'Sangkulirang', 43, '2021-09-16 10:46:10', '2021-09-16 10:46:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `harga`
--

CREATE TABLE `harga` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `harga`
--

INSERT INTO `harga` (`id`, `harga`, `waktu`, `created_at`, `updated_at`) VALUES
(1, '6500000', '10.00 - 23.00', '2021-07-13 18:30:10', '2021-09-16 09:00:58'),
(2, '3000000', '10.00 - 16.00', '2021-07-14 15:31:53', '2021-07-14 15:31:53'),
(6, '4000000', '10.00-23.00', '2021-07-27 07:00:37', '2021-09-13 06:16:13'),
(12, '3000000', '19.00 - 23.00', '2021-09-16 09:01:46', '2021-09-16 09:01:46'),
(13, '5000000', '19.00 - 23.00', '2021-09-16 09:02:40', '2021-09-16 09:02:40'),
(14, '5000000', '10.00 - 16.00', '2021-09-16 09:03:31', '2021-09-16 09:03:31'),
(15, '6000000', '10.00 - 23.00', '2021-09-16 09:04:57', '2021-09-16 09:04:57'),
(16, '4500000', '10.00 - 16.00', '2021-09-16 09:05:32', '2021-09-16 09:05:32'),
(17, '4500000', '19.00 - 23.00', '2021-09-16 09:06:51', '2021-09-16 09:06:51'),
(18, '7500000', '10.00 - 23.00', '2021-09-16 09:08:12', '2021-09-16 09:08:12'),
(19, '6000000', '10.00 - 16.00', '2021-09-16 09:08:58', '2021-09-16 09:08:58'),
(20, '6000000', '19.00 - 23.00', '2021-09-16 09:09:57', '2021-09-16 09:09:57'),
(21, '5500000', '10.00 - 23.00', '2021-09-16 09:13:47', '2021-09-16 09:13:47'),
(22, '4000000', '10.00 - 16.00', '2021-09-16 09:14:40', '2021-09-16 09:14:40'),
(23, '4000000', '19.00 - 23.00', '2021-09-16 09:15:13', '2021-09-16 09:15:13'),
(24, '3000000', '19.00 - 23.00', '2021-09-16 09:16:26', '2021-09-16 09:16:26'),
(25, '3500000', '10.00 - 16.00', '2021-09-16 09:17:43', '2021-09-16 09:17:43'),
(26, '3500000', '19.00 - 23.00', '2021-09-16 09:18:14', '2021-09-16 09:18:14'),
(27, '7000000', '10.00 - 16.00', '2021-09-16 09:20:00', '2021-09-16 09:20:00'),
(28, '7000000', '19.00 - 23.00', '2021-09-16 09:20:31', '2021-09-16 09:20:31'),
(29, '8500000', '10.00 - 23.00', '2021-09-16 09:21:16', '2021-09-16 09:21:16'),
(30, '9000000', '10.00 - 23.00', '2021-09-16 09:22:20', '2021-09-16 09:22:20'),
(31, '8500000', '10.00 - 16.00', '2021-09-16 09:23:08', '2021-09-16 09:23:08'),
(32, '8500000', '19.00 - 23.00', '2021-09-16 09:26:58', '2021-09-16 09:26:58'),
(33, '12500000', '10.00 - 23.00', '2021-09-16 09:27:00', '2021-09-16 09:30:18'),
(34, '11000000', '10.00 - 16.00', '2021-09-16 09:31:13', '2021-09-16 09:31:13'),
(35, '11000000', '19.00 - 23.00', '2021-09-16 09:32:05', '2021-09-16 09:32:05'),
(36, '25000000', '10.00 - 23.00', '2021-09-16 09:33:25', '2021-09-16 09:33:25'),
(37, '23000000', '10.00 - 16.00', '2021-09-16 09:34:04', '2021-09-16 09:34:04'),
(38, '23000000', '19.00 - 23.00', '2021-09-16 09:34:37', '2021-09-16 09:34:37'),
(39, '23500000', '10.00 - 16.00', '2021-09-16 09:35:10', '2021-09-16 09:35:10'),
(40, '23500000', '19.00 - 23.00', '2021-09-16 09:36:05', '2021-09-16 09:38:29'),
(41, '30000000', '10.00 - 23.00', '2021-09-16 09:36:52', '2021-09-16 09:36:52'),
(42, '28000000', '10.00 - 16.00', '2021-09-16 09:37:30', '2021-09-16 09:37:30'),
(43, '28000000', '19.00 - 23.00', '2021-09-16 09:37:57', '2021-09-16 09:37:57'),
(44, '4500000', '10.00 - 23.00', '2021-09-16 10:08:13', '2021-09-16 10:08:13'),
(45, '5500000', '10.00 - 16.00', '2021-09-16 10:28:03', '2021-09-16 10:28:03'),
(46, '5500000', '19.00 - 23.00', '2021-09-16 10:28:37', '2021-09-16 10:28:37'),
(47, '7000000', '10.00 - 23.00', '2021-09-16 10:34:05', '2021-09-16 10:34:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fcm_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plain` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id`, `fcm_id`, `name`, `email`, `alamat`, `nomor_hp`, `password`, `plain`, `created_at`, `updated_at`) VALUES
(1, 'fXvq-EIwSHqvAOn4og95bt:APA91bFJFjOotGnheCs7bdLT0xHA3mP8Fc5s5WXYmaQcWF6roZRhqj1Mx_XBuNNv8IDfP_kZf07e_u4ibqZY5Jupulsc7kM1Vl8DOdV4iH3TDwKnGF7seAsDTTEsYzgEGURwHNqplJ8d', 'Jl. Solong', 'tumor', '081228110335', 'Ahmad', '$2y$10$dlxKnB9YuUQCGccK5Sy3i.1mMJr26UgtFfT/f7V7DKmyR0aITU5oC', 'benjolan', '2021-07-13 07:47:34', '2021-07-31 05:26:47'),
(3, 'NULL', 'Fietra Giovani Prabaskara', 'kara', 'Jl . Karawang Jakarta Selatan', '085654811762', '$2y$10$VfElIDTWoOI8vQslif4peuAWXQNZUXAAMBOTBv1ja7nGwSFiv7l86', '090211', '2021-07-17 18:20:07', '2021-07-31 05:14:34'),
(4, NULL, 'Nurhidayah', 'dayana', 'Jl. Muso Salim', '081228110335', '$2y$10$MVbOzg8T8KFYN0VppbGa5.kQXp69jPF9A5.rgIjm1Tmtn7mFUzN4u', '123456', '2021-07-17 18:22:23', '2021-07-17 18:22:23'),
(9, NULL, 'Ahmad Benjol', 'bentrok', 'Jl. Sempaja', '081213141516', '$2y$10$M/k.5KJ0WV8WxstoDvuoHOiMxWm/F4PbyvsLe4jxeonAFpeNG8jCm', 'okeaja', '2021-07-20 06:02:09', '2021-09-18 02:30:25'),
(10, NULL, 'Langgeng Saputra', 'langseng', 'Jl. Merdeka', '081347131182', '$2y$10$i6ygoKG2TDjNj5J3pHvhKuIZtk5MPOO5KBG/.J51Y5cpElZJdrB4K', 'langseng', '2021-07-20 06:06:10', '2021-07-20 06:06:10'),
(11, NULL, 'nanda', 'nanda1', 'jl.kh.harun nafsi', '082221263710', '$2y$10$QLvLQYDrrQtApWM.L.q0YOfZIoVEOM3InL5M./by9q37lzzUmfWry', '12345678', '2021-07-26 07:09:43', '2021-07-26 07:09:43'),
(12, NULL, 'Ananda', 'Ananda', 'Jalan. Mas penghulu Gg.1', '085247555455', '$2y$10$2MZIGySjM3yYzZR0I9D0DeOLHlTeYqHg6GK3SoSaEFjbMNmEFmNoW', 'ananda2803', '2021-07-26 07:19:36', '2021-07-26 07:19:36'),
(13, NULL, 'ben', 'benoandri', 'jl.wahitasyim', '081254242064', '$2y$10$o8U7FNhOvFnv.8AqzYQzleKkkR5TixAp1KHxHt6SCYIp8/Mp2aK/G', 'ahmadilham', '2021-07-26 08:36:54', '2021-07-26 08:36:54'),
(14, NULL, 'rahmi', 'rah12', 'rahrahmi', '082221263710', '$2y$10$i7tHBrgZOhdXC2dNGVUbfuevFOUKeaAtSJ3Owh4sqbRD5CRtb/YtK', '123456u8', '2021-07-27 06:13:58', '2021-07-27 06:13:58'),
(15, NULL, 'rahmi', 'rah12', 'rahrahmi', '082221263710', '$2y$10$Djg7grroxKJzUSXIqUAspuTtBYVt85i5t/SDQKUN.pQIyNXRXg7ra', '123456u8', '2021-07-27 06:14:38', '2021-07-27 06:14:38'),
(16, 'fAxHjQAJSdmm1defbLhob0:APA91bE6KVZtg2tZNa0t_aVJiON5rVOgqMGj--qublOb0rtbOx5Pf9R0muT93XW_lxtUhsf7Or-q91vrCReUWA8Hru_MXt2qvnZnK1cGoQDiunM8MMvpT1NENbm0zvnfoidT6qKeApzm', 'ashari qalbi', 'asqal24', 'jln.H.A.M Rifaddin , Perumahan Bumi Rindang Luhur Blok J 10', '082217955861', '$2y$10$UN3TjLW.Dgf80j2iqkqv9.cDxig8lexW8RWlarY6IcwTB6bTfzWlG', '24081999', '2021-07-27 07:03:32', '2021-07-29 00:44:22'),
(17, 'dU7sO3wpRK-MAuvJal9LLD:APA91bHyTNz2JR1jkqRIbNi6MnywUspI1-uaKmKoODEryRoIVECpqWNhF-M4zMpMMT6zcZT48Wrq-ZqJptAHQ5G8pTA6FbOS-ENxBxhPuvritYyWZkH6Xj1vRxykcACnfFGliLZhDFY0', 'ler', 'sol', 'solng', '0811', '$2y$10$3h8x3isgSk29HFdJcptvOOGZPzd3XDQ46bNwryxZcmHCFqqzEYOri', '123456', '2021-07-28 02:50:05', '2021-07-28 02:50:18'),
(18, NULL, 'ler', 'sol', 'solng', '0811', '$2y$10$2xk.RGoz1dD8lw6zSDyKFOtH0mbbqkh1x5E5tzJojwiFsyaD8sZL2', '123456', '2021-07-28 02:50:05', '2021-07-28 02:50:05'),
(19, 'ckU-IihxRZy-9sLdz928Cn:APA91bF3WBVuEpwmVfaUp23WuWj87A_NaVLZbU9vJw8SkZqqon0kvthdTOlsvLespQSCB2AebpSZ3W8Z6AZFheydGA6jzLYqjWKXCHNxkaTTVPORm8-KgVv4Dn9pMV-3QNaSSK_GVwsY', 'rani', 'rani', 'nirani', '082221263710', '$2y$10$liTWbNufpyCwk9mV01KsmOBPYRzbYFIdiG6VStRqBskxvxUBw0LMq', 'rani12345', '2021-07-28 23:05:02', '2021-07-31 05:37:25'),
(20, NULL, 'Ananda', 'Ananda', 'Jl.samarinda', '085247555455', '$2y$10$FT4um7Ssj58kgfF8u7oL2u12Wgwyh1n4PfbFrfzp1HzYBeWDzN8Fe', '12345678', '2021-07-29 19:13:42', '2021-07-29 19:13:42'),
(21, NULL, 'Ananda', 'ananda28', 'Jl.smd', '085247555455', '$2y$10$tdMLYUCT0kt3ea3yuVr1JOxf9Gllup3KstDKi1hLTGy9kGBauLBd6', '12345678', '2021-07-29 19:14:39', '2021-07-29 19:14:39'),
(22, 'ckU-IihxRZy-9sLdz928Cn:APA91bF3WBVuEpwmVfaUp23WuWj87A_NaVLZbU9vJw8SkZqqon0kvthdTOlsvLespQSCB2AebpSZ3W8Z6AZFheydGA6jzLYqjWKXCHNxkaTTVPORm8-KgVv4Dn9pMV-3QNaSSK_GVwsY', 'asqla', 'asqla12', 'asqla', '085286312846', '$2y$10$y9mqYoIpX2KY8sZmfxsEe.dGnz3vOhU5Vs0U3CxIZ57FxIgNFw/fK', '12345678', '2021-07-31 07:52:02', '2021-07-31 07:52:20'),
(23, NULL, 'asqla', 'asqla12', 'asqla', '085286312846', '$2y$10$vTQa0FE9l33ARPghji6kuONU07oBvQOReeCQ5Xp6GgxBh/QLP60o.', '12345678', '2021-07-31 07:52:02', '2021-07-31 07:52:02'),
(24, NULL, 'anandaa', 'anandahdh', 'jl.samarinda', '085247555455', '$2y$10$tvRJZt5hxyVkxI0Wf5FKYe9yhp2IZouqjqRSwodcX7bV2rbIP04pS', '12345678', '2021-09-05 19:57:39', '2021-09-05 19:57:39'),
(25, NULL, 'anandahdh', 'anandahdh', 'jl.samarinda', '085247555455', '$2y$10$yUljiXupCO24KScW6UP8k.mAV9PndbI3Wzril39g1USyT9rLHPyM.', '12345678', '2021-09-05 22:33:11', '2021-09-05 22:33:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_13_135246_create_member_table', 2),
(5, '2021_07_14_003844_create_harga_table', 3),
(6, '2021_07_14_012838_create_harga_table', 4),
(7, '2021_07_14_020843_create_alamat_table', 5),
(8, '2021_07_15_033219_create_sewa_table', 6),
(9, '2021_07_15_034012_create_sewa_table', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sewa`
--

CREATE TABLE `sewa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `acara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_acara` date NOT NULL,
  `member_id` bigint(20) UNSIGNED NOT NULL,
  `alamat_id` bigint(20) UNSIGNED NOT NULL,
  `struk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plain` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `plain`, `alamat`, `nomor_hp`, `foto`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin', 'dqGHP_MqgYHs4_mmx9Xry9:APA91bHfOQlsORHqDcKAJDn2wSVzs5z5fIEWLE2U4NQUe8E7lwM0YdxDgGvFSPeau7CYIySJM8uI0nCeuWat4l0aW9CClRRpjvsDypo4B00_4TPP085il2HaUUjD75ACcEGuBzhSAmTZ', '$2y$10$YhC5zPHL4zY/1g0a4YKMFeAheEZmghnTs1vXYJCFwnNYt2Ghbo41S', 'adminss', 'Jl. Samarinda Sebrang', '081228110335', 'f64avnGFQvuTuUeERgRhAN:APA91bFg3GNQJYVn3349zlkZm5Rdxq4fzCx6mL4kp3aS7-Lpez_PSRD4DmSb5_gzLlSbQHVP3GzzvIGhGmkPCsjMgwxz602TbFA4I8B2I2vwyrTiBoGmlgFreKtTAyvmlZNC8H2M8Jvk', NULL, '2021-07-13 06:52:07', '2021-07-13 06:52:07');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alamat_harga_id_foreign` (`harga_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sewa_member_id_foreign` (`member_id`),
  ADD KEY `sewa_alamat_id_foreign` (`alamat_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alamat`
--
ALTER TABLE `alamat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `harga`
--
ALTER TABLE `harga`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `sewa`
--
ALTER TABLE `sewa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `alamat`
--
ALTER TABLE `alamat`
  ADD CONSTRAINT `alamat_harga_id_foreign` FOREIGN KEY (`harga_id`) REFERENCES `harga` (`id`);

--
-- Ketidakleluasaan untuk tabel `sewa`
--
ALTER TABLE `sewa`
  ADD CONSTRAINT `sewa_alamat_id_foreign` FOREIGN KEY (`alamat_id`) REFERENCES `alamat` (`id`),
  ADD CONSTRAINT `sewa_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `member` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
