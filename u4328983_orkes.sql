-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Sep 2021 pada 13.43
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
(1, 'Samarinda Kota', 1, '2021-07-13 18:30:10', '2021-09-13 06:51:34'),
(2, 'Tenggarong', 2, '2021-07-14 15:40:57', '2021-07-14 15:48:53'),
(3, 'Samarinda Seberang', 1, '2021-09-13 05:55:24', '2021-09-13 05:55:24');

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
(1, '3000000', '10.00 - 23.00', '2021-07-13 18:30:10', '2021-07-14 15:31:22'),
(2, '3000000', '10.00 - 16.00', '2021-07-14 15:31:53', '2021-07-14 15:31:53'),
(3, '5000000', '10.00 - 16.00', '2021-07-27 06:49:36', '2021-07-27 06:49:36'),
(4, '2000000', '07.00 - 13.00', '2021-07-27 06:58:20', '2021-07-27 06:58:20'),
(5, '2000000', '07.00 - 13.00', '2021-07-27 06:59:39', '2021-07-27 06:59:39'),
(6, '4000000', '10.00-23.00', '2021-07-27 07:00:37', '2021-09-13 06:16:13'),
(10, '6500000', '10.00-23.00', '2021-09-13 07:12:33', '2021-09-13 07:12:33');

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
(9, NULL, 'Ahmad Benjol', 'bentrok', 'Jl. Sempaja', '081213141516', '$2y$10$sMhN70b2oLM4H4U7TOZQ1eIbbpdcrGq6Nf/pioJLNZIHf9TLb5xMW', 'okeaja', '2021-07-20 06:02:09', '2021-07-20 06:02:09'),
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

--
-- Dumping data untuk tabel `sewa`
--

INSERT INTO `sewa` (`id`, `acara`, `tgl_acara`, `member_id`, `alamat_id`, `struk`, `status`, `created_at`, `updated_at`) VALUES
(32, 'tasmiyah', '2021-10-01', 24, 3, 'storage/Struk/2021-09/14/VFStmg5oN5.png', '2', '2021-09-14 13:15:50', '2021-09-14 13:16:48');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `harga`
--
ALTER TABLE `harga`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

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
