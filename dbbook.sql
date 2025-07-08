-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2025 at 06:52 PM
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
-- Database: `dbbook`
--

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
('laravel_cache_356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1751989589),
('laravel_cache_356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1751989589;', 1751989589),
('laravel_cache_livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1751986780),
('laravel_cache_livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1751986780;', 1751986780),
('laravel_cache_livewire-rate-limiter:c249f2149727eeb79f1792b01e586e68c4ec6608', 'i:1;', 1751980400),
('laravel_cache_livewire-rate-limiter:c249f2149727eeb79f1792b01e586e68c4ec6608:timer', 'i:1751980400;', 1751980400);

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
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskrips` text DEFAULT NULL,
  `qty` int(11) NOT NULL DEFAULT 0,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `nama`, `deskrips`, `qty`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'AC POLYTRON', 'AC Polytron', 32, 'fasilitas/01JZMSFDSDPKEQJKWKQM3NQ2WR.jpg', '2025-07-08 03:32:03', '2025-07-08 05:40:22'),
(2, 'AC PANASONIC', 'AC Panasonic', 3, 'fasilitas/01JZMSGEG3QKBN2FFYSTCSG8V7.png', '2025-07-08 03:32:37', '2025-07-08 03:32:37'),
(3, 'PROYEKTOR', 'Proyektor Epson', 60, 'fasilitas/01JZMSJDQN6RNN8EGV6788W8Z6.jpeg', '2025-07-08 03:33:41', '2025-07-08 03:33:41'),
(4, 'PAPAN TULIS', 'Papan Tulis Ukuran 90 x 200', 65, 'fasilitas/01JZMSK97BDGE1Y7Z180CTJBVD.jpg', '2025-07-08 03:34:10', '2025-07-08 04:13:15'),
(5, 'KURSI', 'Kursi Belajar', 325, 'fasilitas/01JZMSN25TF7MNEQXJKTAH88A6.jpg', '2025-07-08 03:35:08', '2025-07-08 03:35:08'),
(6, 'MEJA', 'Meja dosen kayu', 84, 'fasilitas/01JZMSPREX18WR77652B4ASZNM.jpg', '2025-07-08 03:36:03', '2025-07-08 03:36:03'),
(7, 'WIFI', 'Wifi internet kampus', 27, 'fasilitas/01JZMSR5A11ZSJEMD1E0A1KA51.png', '2025-07-08 03:36:49', '2025-07-08 03:36:49'),
(8, 'KOMPUTER', 'Komputer terbaru tahun 2024', 48, 'fasilitas/01JZMTKFMKQHM1ZPZJ085S1H6Y.webp', '2025-07-08 03:37:40', '2025-07-08 03:51:45'),
(9, 'LAPTOP', 'Laptop ASUS VIVOBOOK', 17, 'fasilitas/01JZMSXPTSCT7FWCZARMHJC6VT.webp', '2025-07-08 03:39:51', '2025-07-08 03:39:51'),
(10, 'SOUND SYSTEM', 'Sound System dan Mic', 40, 'fasilitas/01JZNBA7J3M6S8KEDHSWGSJG4R.jpg', '2025-07-08 08:43:47', '2025-07-08 08:43:47'),
(11, 'STOP KONTAK', 'Stop Kontak isi 5 colokan', 21, 'fasilitas/01JZNBDF76Z5AG3F1D4SY6VXQP.jpg', '2025-07-08 08:45:33', '2025-07-08 08:45:33');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_has_ruangans`
--

CREATE TABLE `fasilitas_has_ruangans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ruangan_id` bigint(20) UNSIGNED NOT NULL,
  `fasilitas_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fasilitas_has_ruangans`
--

INSERT INTO `fasilitas_has_ruangans` (`id`, `ruangan_id`, `fasilitas_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL),
(2, 1, 5, NULL, NULL),
(3, 1, 6, NULL, NULL),
(4, 1, 4, NULL, NULL),
(5, 1, 9, NULL, NULL),
(6, 1, 7, NULL, NULL),
(7, 1, 3, NULL, NULL),
(8, 2, 8, NULL, NULL),
(9, 2, 9, NULL, NULL),
(10, 2, 4, NULL, NULL),
(11, 2, 3, NULL, NULL),
(12, 2, 6, NULL, NULL),
(13, 2, 7, NULL, NULL),
(14, 2, 5, NULL, NULL),
(15, 3, 2, NULL, NULL),
(16, 3, 6, NULL, NULL),
(17, 3, 3, NULL, NULL),
(18, 3, 7, NULL, NULL),
(19, 3, 4, NULL, NULL),
(20, 3, 5, NULL, NULL),
(21, 4, 7, NULL, NULL),
(22, 4, 4, NULL, NULL),
(23, 4, 6, NULL, NULL),
(24, 4, 3, NULL, NULL),
(25, 4, 5, NULL, NULL),
(26, 4, 2, NULL, NULL),
(27, 5, 1, NULL, NULL),
(28, 5, 4, NULL, NULL),
(29, 5, 3, NULL, NULL),
(30, 5, 7, NULL, NULL),
(31, 5, 6, NULL, NULL),
(32, 5, 5, NULL, NULL),
(33, 6, 2, NULL, NULL),
(34, 6, 8, NULL, NULL),
(35, 6, 6, NULL, NULL),
(36, 6, 7, NULL, NULL),
(37, 6, 4, NULL, NULL),
(38, 6, 5, NULL, NULL),
(39, 7, 1, NULL, NULL),
(40, 7, 3, NULL, NULL),
(41, 7, 6, NULL, NULL),
(42, 7, 7, NULL, NULL),
(43, 7, 5, NULL, NULL),
(44, 8, 5, NULL, NULL),
(45, 8, 6, NULL, NULL),
(46, 8, 3, NULL, NULL),
(47, 8, 4, NULL, NULL),
(48, 8, 7, NULL, NULL),
(49, 8, 2, NULL, NULL),
(50, 9, 2, NULL, NULL),
(51, 9, 5, NULL, NULL),
(52, 9, 6, NULL, NULL),
(53, 9, 4, NULL, NULL),
(54, 9, 3, NULL, NULL),
(55, 9, 7, NULL, NULL),
(56, 10, 2, NULL, NULL),
(57, 10, 5, NULL, NULL),
(58, 10, 6, NULL, NULL),
(59, 10, 4, NULL, NULL),
(60, 10, 3, NULL, NULL),
(61, 10, 7, NULL, NULL),
(62, 11, 2, NULL, NULL),
(63, 11, 5, NULL, NULL),
(64, 11, 4, NULL, NULL),
(65, 11, 3, NULL, NULL),
(66, 11, 7, NULL, NULL),
(67, 11, 6, NULL, NULL),
(68, 12, 2, NULL, NULL),
(69, 12, 8, NULL, NULL),
(70, 12, 5, NULL, NULL),
(71, 12, 6, NULL, NULL),
(72, 12, 7, NULL, NULL),
(73, 12, 4, NULL, NULL),
(74, 12, 3, NULL, NULL),
(75, 13, 3, NULL, NULL),
(76, 13, 7, NULL, NULL),
(77, 13, 2, NULL, NULL),
(78, 13, 5, NULL, NULL),
(79, 13, 6, NULL, NULL),
(80, 13, 4, NULL, NULL),
(81, 14, 2, NULL, NULL),
(82, 14, 5, NULL, NULL),
(83, 14, 7, NULL, NULL),
(84, 14, 3, NULL, NULL);

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
(4, '2025_07_07_005732_create_ruangans_table', 1),
(5, '2025_07_07_005824_create_fasilitas_table', 1),
(6, '2025_07_07_005917_create_fasilitas_has_ruangans_table', 1),
(7, '2025_07_07_005953_create_peminjamen_table', 1),
(8, '2025_07_07_010035_create_pemesanans_table', 1),
(9, '2025_07_07_010126_create_penggunas_table', 1);

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
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `ruangan_id` bigint(20) UNSIGNED NOT NULL,
  `keterangan` text DEFAULT NULL,
  `catatan` text NOT NULL,
  `status` enum('Menunggu','Disetujui','Ditolak') NOT NULL DEFAULT 'Menunggu',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `ruangan_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `status` enum('Menunggu','Disetujui','Ditolak') NOT NULL DEFAULT 'Menunggu',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `user_id`, `ruangan_id`, `tanggal_pinjam`, `jam_mulai`, `jam_selesai`, `lokasi`, `keterangan`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 8, '2025-07-25', '20:00:00', '12:00:00', 'Kampus A', 'untuk acara seminar teknologi', 'Disetujui', '2025-07-08 05:47:19', '2025-07-08 05:55:58'),
(2, 8, 6, '2025-08-01', '21:00:00', '12:00:00', 'Kampus A', 'untuk kegiatan belajar', 'Menunggu', '2025-07-08 06:06:11', '2025-07-08 06:06:11');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telpon` varchar(255) NOT NULL,
  `prodi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `user_id`, `nim`, `email`, `no_telpon`, `prodi`, `created_at`, `updated_at`) VALUES
(1, 2, '0110124986', 'mahasiswa@gmail.com', '08635283131', 'Sistem Informasi', '2025-07-08 05:43:29', '2025-07-08 05:43:29'),
(2, 8, '0110124206', 'asahi@gmail.com', '08352613133', 'Teknik Informatika', '2025-07-08 06:04:27', '2025-07-08 06:04:27');

-- --------------------------------------------------------

--
-- Table structure for table `ruangans`
--

CREATE TABLE `ruangans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `lokasi_ruangan` varchar(100) NOT NULL,
  `kapasitas` int(11) NOT NULL DEFAULT 0,
  `status` enum('Tersedia','Dibooking','Renovasi') NOT NULL DEFAULT 'Tersedia',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ruangans`
--

INSERT INTO `ruangans` (`id`, `gambar`, `nama`, `kode`, `lokasi_ruangan`, `kapasitas`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ruangans/01JZMVQ558FAK3DS9PY7D5875Y.jpeg', 'Kelas A 401', 'KA401', 'Kampus A', 40, 'Tersedia', '2025-07-08 04:11:14', '2025-07-08 05:16:21'),
(2, 'ruangans/01JZNAGTKR198XC5WGWDJKARAJ.jpg', 'Kelas A 301', 'KA301', 'Kampus A', 38, 'Tersedia', '2025-07-08 05:11:33', '2025-07-08 08:29:55'),
(3, 'ruangans/01JZN9QKDEFTHAG7M5NQJEDJY1.jpg', 'Kelas A 402', 'KA402', 'Kampus A', 40, 'Dibooking', '2025-07-08 05:13:23', '2025-07-08 08:16:08'),
(4, 'ruangans/01JZN9TNS8G6DN83V96DPSHYFZ.jpg', 'Kelas A 403', 'KA403', 'Kampus A', 40, 'Renovasi', '2025-07-08 05:17:50', '2025-07-08 08:17:49'),
(5, 'ruangans/01JZNAYFH268V4WYRBKEVYM5YH.jpg', 'Kelas A 404', 'KA404', 'Kampus A', 39, 'Tersedia', '2025-07-08 05:19:56', '2025-07-08 08:37:22'),
(6, 'ruangans/01JZNAJRN1G3TRF5RWK6K4BPPP.jpg', 'Kelas A 302', 'KA302', 'Kampus A', 38, 'Tersedia', '2025-07-08 05:21:30', '2025-07-08 08:30:58'),
(7, 'ruangans/01JZNANP0N7VP8F8DQRMT401H7.jpg', 'Kelas A 303', 'KA303', 'Kampus A', 39, 'Dibooking', '2025-07-08 05:24:08', '2025-07-08 08:32:34'),
(8, 'ruangans/01JZN941Y2CJ0EPD28GBBKXGYK.jpg', 'Kelas A 110', 'KA110', 'Kampus A', 42, 'Dibooking', '2025-07-08 05:25:43', '2025-07-08 08:05:28'),
(9, 'ruangans/01JZN9JC113PZKYRP325KNWBMX.jpg', 'Kelas A 111', 'KA111', 'Kampus A', 30, 'Tersedia', '2025-07-08 05:27:58', '2025-07-08 08:13:17'),
(10, 'ruangans/01JZN9KCSWVT6XAA80PGYD73M6.jpg', 'Kelas A 112', 'KA112', 'Kampus A', 32, 'Renovasi', '2025-07-08 05:29:47', '2025-07-08 08:13:50'),
(11, 'ruangans/01JZNARB56BVDDNGK42RN8YH42.jpg', 'Kelas B1 101', 'KB1101', 'Kampus B', 40, 'Tersedia', '2025-07-08 05:33:56', '2025-07-08 08:34:01'),
(12, 'ruangans/01JZNAVWJGY36Z1N6T37HHD43T.jpg', 'Kelas B1 102', 'KB1102', 'Kampus B', 20, 'Dibooking', '2025-07-08 05:35:32', '2025-07-08 08:36:42'),
(13, 'ruangans/01JZNAM5M8PES0RKBDBVYN01TY.jpg', 'Kelas B2 201', 'KB2201', 'Kampus B', 40, 'Tersedia', '2025-07-08 05:38:20', '2025-07-08 08:31:44'),
(14, 'ruangans/01JZN8SY291Y2WYATN9AY56S5T.webp', 'Auditorium', 'Audit', 'Kampus B', 250, 'Tersedia', '2025-07-08 05:39:09', '2025-07-08 07:59:56');

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
('63EkwmsudTkH72NKitl7mEXoNSfZm0RTs3sNIdpl', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiTnNOYVJQclhPV21wT1J5VXFZTmZzbWJ2cUlXbzFLMFJhUVNnSTk2aiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1751985227),
('FssjWNmDgTLCZVsKlJZoGOcf9lcZ6kTktgdJUMS3', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiaEtrS1pKbjNSemJCWEtzTGVXVHRNRXJDM0RZeG9yRHIyemZBaDFyOCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMiQ4d2tHbi85V1lVdG1aYjNqR0Zpa1N1RHZZTVI0N0hrSEg5VGZRLlo3LmRueUdFTWtQZXNTNiI7czo4OiJmaWxhbWVudCI7YTowOnt9fQ==', 1751992263);

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
  `role` enum('admin','staff','mahasiswa') NOT NULL DEFAULT 'mahasiswa',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Zhahara N Sukirman', 'kelompok02@gmail.com', NULL, '$2y$12$8wkGn/9WYUtmZb3jGFikSuDvYMR47HkHH9TfQ.Z7.dnyGEMkPesS6', 'admin', NULL, '2025-07-08 02:37:25', '2025-07-08 02:37:25'),
(2, 'Sang Qois', 'qois@mahasiswa.com', NULL, '$2y$12$tT9YRNX30wBPFiB6NQZkp.gKCyW1IOotMCCgd2ZV/Y25eWgIHqRce', 'mahasiswa', NULL, '2025-07-08 02:37:36', '2025-07-08 06:16:54'),
(3, 'Mulan', 'mulan@staff.com', NULL, '$2y$12$99BsuEg/flDZDVa2BssTa.kc13Awx05ffASFbrTDYgKdiMPYr6ROS', 'staff', NULL, '2025-07-08 02:37:51', '2025-07-08 08:23:58'),
(4, 'Muhammad Fauzan', 'fauzan@staff.gmail.com', NULL, '$2y$12$pOM2IKzY9LpozXBWHcyvvuNEWh1ZczdjoH0u3hgyRLgyKUeoZJmHq', 'staff', NULL, '2025-07-08 02:41:20', '2025-07-08 02:41:20'),
(5, 'Sania Agustin', 'sania@staff.gmail.com', NULL, '$2y$12$72UK43HbCW/FYQ58FQpWHuz0mCAUwr/qBbNmvRoarrjg3ymxpZiKm', 'staff', NULL, '2025-07-08 02:54:01', '2025-07-08 02:54:43'),
(6, 'Mulandari Putri', 'mulan@admin.com', NULL, '$2y$12$0dhPILFCJk5cDgpRQFjJ5e63HnvCt8C2ZLFsLI51/6cw0iFz/viPe', 'admin', NULL, '2025-07-08 03:01:05', '2025-07-08 03:01:42'),
(7, 'Lee Taeyong', 'taeyong@admin.com', NULL, '$2y$12$CT.voKHtooWtVkW04kSr9.Hh6p2PEf2QtR5At9626plI5aPC5xkNe', 'admin', NULL, '2025-07-08 03:06:38', '2025-07-08 03:06:38'),
(8, 'Asahi Hamada', 'asahi@mahasiswa.com', NULL, '$2y$12$Q1jqVzFImmTp7CHYvubHNulWzf1FkwRq9NKQCJYogzluiSTTRpdBe', 'mahasiswa', NULL, '2025-07-08 03:21:28', '2025-07-08 06:16:17'),
(9, 'Junghwan', 'junghwan@mahasiswa.com', NULL, '$2y$12$h5EY6Y.aW9eWL8I4kemaHu3vipATe8DtyYumetzlr.Yzq7JAC2RfG', 'mahasiswa', NULL, '2025-07-08 06:12:20', '2025-07-08 06:12:20');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fasilitas_has_ruangans`
--
ALTER TABLE `fasilitas_has_ruangans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fasilitas_has_ruangans_ruangan_id_foreign` (`ruangan_id`),
  ADD KEY `fasilitas_has_ruangans_fasilitas_id_foreign` (`fasilitas_id`);

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
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pemesanan_user_id_foreign` (`user_id`),
  ADD KEY `pemesanan_ruangan_id_foreign` (`ruangan_id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peminjaman_user_id_foreign` (`user_id`),
  ADD KEY `peminjaman_ruangan_id_foreign` (`ruangan_id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pengguna_nim_unique` (`nim`),
  ADD UNIQUE KEY `pengguna_email_unique` (`email`),
  ADD KEY `pengguna_user_id_foreign` (`user_id`);

--
-- Indexes for table `ruangans`
--
ALTER TABLE `ruangans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ruangans_kode_unique` (`kode`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `fasilitas_has_ruangans`
--
ALTER TABLE `fasilitas_has_ruangans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ruangans`
--
ALTER TABLE `ruangans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fasilitas_has_ruangans`
--
ALTER TABLE `fasilitas_has_ruangans`
  ADD CONSTRAINT `fasilitas_has_ruangans_fasilitas_id_foreign` FOREIGN KEY (`fasilitas_id`) REFERENCES `fasilitas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fasilitas_has_ruangans_ruangan_id_foreign` FOREIGN KEY (`ruangan_id`) REFERENCES `ruangans` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ruangan_id_foreign` FOREIGN KEY (`ruangan_id`) REFERENCES `ruangans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pemesanan_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ruangan_id_foreign` FOREIGN KEY (`ruangan_id`) REFERENCES `ruangans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `peminjaman_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
