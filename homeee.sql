-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2020 at 02:35 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homeee`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homestay`
--

CREATE TABLE `homestay` (
  `id_homestay` int(11) NOT NULL,
  `nama_homestay` varchar(30) DEFAULT NULL,
  `jenis_homestay` varchar(25) DEFAULT NULL,
  `banyak_kamar` int(10) UNSIGNED DEFAULT NULL,
  `banyak_kamarmandi` int(10) UNSIGNED DEFAULT NULL,
  `alamat_homestay` varchar(100) DEFAULT NULL,
  `kodepos_homestay` int(11) DEFAULT NULL,
  `deskripsi_homestay` varchar(150) DEFAULT NULL,
  `id_pengelola` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homestay`
--

INSERT INTO `homestay` (`id_homestay`, `nama_homestay`, `jenis_homestay`, `banyak_kamar`, `banyak_kamarmandi`, `alamat_homestay`, `kodepos_homestay`, `deskripsi_homestay`, `id_pengelola`) VALUES
(1, 'jksof', 'gseger', 6, 6, 'gfsgsfga', 6666, 'aega a ata a', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `homestays`
--

CREATE TABLE `homestays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pengelola` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_homestay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_homestay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banyak_kmrtdr` int(11) NOT NULL,
  `banyak_kmrmndi` int(11) NOT NULL,
  `maks_perkamar` int(11) NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kodepos` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_permalam` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_mulai_beroperasi` date NOT NULL,
  `tanggal_berakhir_beroperasi` date NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homestays`
--

INSERT INTO `homestays` (`id`, `id_pengelola`, `nama_homestay`, `jenis_homestay`, `banyak_kmrtdr`, `banyak_kmrmndi`, `maks_perkamar`, `alamat`, `kota`, `kodepos`, `foto`, `deskripsi`, `harga_permalam`, `tanggal_mulai_beroperasi`, `tanggal_berakhir_beroperasi`, `kapasitas`, `created_at`, `updated_at`) VALUES
(1, '1', 'Rumah Bakso', 'apartemen', 5, 2, 4, 'jl mie kecamatan kuahhhhhhh woeeee', 'yogyakarta', '8767', '1576476958_bg_2.jpg', 'enak gurih enak gurih enak gurih enak gurih enak gurih', '40000', '2020-01-01', '2020-01-31', 20, '2019-12-15 23:06:29', '2019-12-31 20:04:07'),
(2, '1', 'YOOO MAN', 'rumah apung', 7, 2, 1, 'jl. dimana aja dah', 'yogyakarta', '8767', '1576531727_ralph-kayden-2d4lAQAlbDA-unsplash.jpg', 'tempat di tengah kota cuk, tapi dekat dengan pusat perbelanjaan', '100000', '2020-01-01', '2020-01-31', 7, '2019-12-15 23:21:49', '2020-01-02 10:44:01'),
(5, '2', 'Mie Ayam', 'apartemen', 5, 4, 2, 'jl. kecamatan ini kabupaten itu', 'yogyakarta', '7098', '1576526895_filios-sazeides-lg3TETZvqv4-unsplash.jpg', 'nyaman enak buat istirahat dekat dengan pedesaannyaman enak buat istirahat dekat dengan pedesaannyaman enak buat istirahat dekat dengan pedesaan', '80000', '2019-12-04', '2019-12-31', 10, '2019-12-16 13:08:15', '2019-12-16 13:44:58');

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
(61, '2014_10_12_000000_create_users_table', 1),
(62, '2014_10_12_100000_create_password_resets_table', 1),
(63, '2019_08_19_000000_create_failed_jobs_table', 1),
(65, '2019_12_06_195534_create_pengelola_table', 1),
(66, '2019_12_09_174335_create_penyewa_table', 1),
(68, '2019_12_14_153744_create_rekeningpgl_table', 2),
(70, '2019_12_05_033050_create_homestays_table', 3);

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
-- Table structure for table `pengelola`
--

CREATE TABLE `pengelola` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengelola`
--

INSERT INTO `pengelola` (`id`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'onji', 'onjiromzy@gmail.com', '$2y$10$z2am0ov/8Cor58HJHL5fZu3NDjiuPan2Cae/P6LYqO2jRTKM/EoZu', NULL, '2019-12-14 05:47:55', '2019-12-14 05:47:55'),
(2, 'onji2', 'onjiromzy2@gmail.com', '$2y$10$351RKDB4we51Md3ZlNXNaOdhvh5hQ4aKlBJWdLI0Bq0Ic9JKTp73K', NULL, '2019-12-14 09:59:37', '2019-12-14 09:59:37');

-- --------------------------------------------------------

--
-- Table structure for table `penyewa`
--

CREATE TABLE `penyewa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penyewa`
--

INSERT INTO `penyewa` (`id`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'romzi', 'onjiromzy@gmail.com', '$2y$10$aeDoChMSH.ObnKfqFdK7XucEPLNvCUXqbs2EUjZNt.vPrze1deWh2', NULL, '2019-12-14 11:59:31', '2019-12-14 11:59:31'),
(2, 'onjiromzi', 'onjiromzy2@gmail.com', '$2y$10$DImShqy7Di2kQaN1Hu3lCu6iUCCnfVI/HdLOWPS6wkgSsjPwZft8a', NULL, '2019-12-14 12:16:42', '2019-12-14 12:16:42');

-- --------------------------------------------------------

--
-- Table structure for table `rekeningpgl`
--

CREATE TABLE `rekeningpgl` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pengelola` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_rekening` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `atas_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rekeningpgl`
--

INSERT INTO `rekeningpgl` (`id`, `id_pengelola`, `nama_bank`, `no_rekening`, `atas_nama`, `created_at`, `updated_at`) VALUES
(5, '2', 'mandiri', '98709766765878', 'minong', '2019-12-14 12:58:28', '2019-12-14 12:58:28'),
(6, '2', 'bri', '676767', 'romzi', '2019-12-14 13:02:18', '2019-12-14 13:02:18'),
(10, '1', 'bri', '709868757699769', 'minong', '2019-12-15 20:58:42', '2019-12-15 20:58:42');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homestay`
--
ALTER TABLE `homestay`
  ADD PRIMARY KEY (`id_homestay`);

--
-- Indexes for table `homestays`
--
ALTER TABLE `homestays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengelola`
--
ALTER TABLE `pengelola`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pengelola_username_unique` (`username`),
  ADD UNIQUE KEY `pengelola_email_unique` (`email`);

--
-- Indexes for table `penyewa`
--
ALTER TABLE `penyewa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `penyewa_username_unique` (`username`),
  ADD UNIQUE KEY `penyewa_email_unique` (`email`);

--
-- Indexes for table `rekeningpgl`
--
ALTER TABLE `rekeningpgl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rekeningpgl_no_rekening_unique` (`no_rekening`);

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
-- AUTO_INCREMENT for table `homestay`
--
ALTER TABLE `homestay`
  MODIFY `id_homestay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homestays`
--
ALTER TABLE `homestays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `pengelola`
--
ALTER TABLE `pengelola`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penyewa`
--
ALTER TABLE `penyewa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rekeningpgl`
--
ALTER TABLE `rekeningpgl`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
