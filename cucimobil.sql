-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 05:16 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cucimobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` bigint(20) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `gaji`
--

CREATE TABLE `gaji` (
  `gaji` int(11) NOT NULL,
  `potongan` int(11) NOT NULL,
  `bonus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gaji`
--

INSERT INTO `gaji` (`gaji`, `potongan`, `bonus`) VALUES
(30000, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id_info` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `informasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id_info`, `name`, `informasi`) VALUES
(4, 'david', 'selamat gratis 1 kali cuci');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` bigint(20) NOT NULL,
  `nama_karyawan` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `email`, `password`) VALUES
(1, 'Joko', 'joko@gmail.com', '11111111'),
(2, 'Budi', 'budi@gmail.com', '11111111'),
(3, 'Abdul', 'abdul@gmail.com', '11111111'),
(4, 'Lele', 'lele@gmail.com', '11111111');

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
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2021_06_09_191700_add_google_id_column', 1),
(10, '2021_06_16_090843_create_paket_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` bigint(20) NOT NULL,
  `nama_paket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` bigint(20) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_telp` char(13) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Stand-in structure for view `pendapatan1`
-- (See below for the actual view)
--
CREATE TABLE `pendapatan1` (
`petugas` varchar(255)
,`total_rating` decimal(32,0)
,`total_pelanggan` bigint(21)
,`total_pendapatan` decimal(32,0)
,`gaji_harian` decimal(44,0)
,`tips` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` bigint(11) NOT NULL,
  `petugas` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `nama_paket` varchar(255) DEFAULT NULL,
  `no_plat` varchar(8) DEFAULT NULL,
  `tgl_cuci` date DEFAULT NULL,
  `jam_cuci` time DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `total_bayar` int(11) DEFAULT NULL,
  `bukti_bayar` blob DEFAULT NULL,
  `tips` varchar(255) NOT NULL,
  `validasi` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `pencucian` int(11) DEFAULT NULL,
  `informasi` varchar(255) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `petugas`, `name`, `nama_paket`, `no_plat`, `tgl_cuci`, `jam_cuci`, `rating`, `total_bayar`, `bukti_bayar`, `tips`, `validasi`, `keterangan`, `pencucian`, `informasi`, `status`, `updated_at`, `created_at`) VALUES
(35, 'Joko', 'David', 'Paket Relaks', 'AA7887CV', '2021-06-18', '13:00:00', 4, 35000, 0x4441465441522050454e4755525553204b4b4e203532202831292e706466, '300000', '1', 'bagus', 1, NULL, '1', '2021-06-18 06:31:56', NULL),
(36, 'Joko', 'David', 'Paket Relaks', 'AB6787UY', '2021-06-22', '13:53:00', 0, 35000, 0x43617368, '', '0', '-', 2, NULL, '0', NULL, NULL),
(37, 'Budi', 'Sule', 'Paket Regular', 'AB6787UY', '2021-07-01', '14:57:00', 0, 50000, 0x43617368, '', '0', '-', 1, NULL, '0', NULL, NULL),
(39, 'Joko', 'David', 'Paket Relaks', 'BK2122EZ', '2021-06-18', '20:00:00', 0, 35000, 0x4441465441522050454e4755525553204b4b4e203532202831292e706466, '', '0', '-', 3, NULL, '0', NULL, NULL),
(40, 'Abdul', 'Caca', 'Paket Relaks', 'AD897OI', '2021-06-18', '20:00:00', 5, 35000, 0x4441465441522050454e4755525553204b4b4e203532202831292e706466, '', '1', 'bagus sekali pelayanannya', 1, NULL, '1', '2021-06-18 06:10:32', NULL),
(41, 'Abdul', 'Caca', 'Paket Relaks', 'AA1111CV', '2021-06-18', '21:17:00', 3, 35000, 0x4441465441522050454e4755525553204b4b4e203532202831292e706466, '', '1', 'bagus', 2, NULL, '1', '2021-06-18 06:18:51', NULL);

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
  `level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`, `google_id`) VALUES
(1, 'Ronaldo', 'ronaldo@gmail.com', NULL, '$2y$10$Wsl770kZFTFMwVWG.SQNiezNu08IBWd4wpSlwHUtnD7wg4sCKJ.Ei', 'admin', NULL, '2021-06-16 19:56:59', '2021-06-16 19:56:59', NULL),
(2, 'Samson', 'samson@gmail.com', NULL, '$2y$10$KWG5oxqbmwGpWkFSu7gj0ewjMX.VCtfhJxWbXtgQlGmLaVSHQNL9.', 'karyawan', NULL, '2021-06-16 19:56:59', '2021-06-16 19:56:59', NULL),
(3, 'David', 'david@gmail.com', NULL, '$2y$10$3DWcJxUc.zyPUZBIt/oAOeUOOPIWORZIiSQXef66b0ZxZc9iPWPZ6', 'pelanggan', NULL, '2021-06-16 19:56:59', '2021-06-16 19:56:59', NULL),
(11, 'Caca', 'caca@gmail.com', NULL, '$2y$10$b7ENajiZWcI2Htfw17VbJ.JkDMrjwgvGe5a1ZJJQaRqVv9yMtR7ze', 'pelanggan', NULL, '2021-06-18 06:06:36', '2021-06-18 06:06:36', NULL);

-- --------------------------------------------------------

--
-- Structure for view `pendapatan1`
--
DROP TABLE IF EXISTS `pendapatan1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pendapatan1`  AS SELECT `transaksi`.`petugas` AS `petugas`, sum(`transaksi`.`rating`) AS `total_rating`, count(`transaksi`.`name`) AS `total_pelanggan`, sum(`transaksi`.`total_bayar`) AS `total_pendapatan`, if(`transaksi`.`rating` = 4,`gaji`.`gaji` + `gaji`.`potongan` * sum(`transaksi`.`total_bayar`) + `gaji`.`bonus` * sum(`transaksi`.`total_bayar`),`gaji`.`gaji` + `gaji`.`potongan` * sum(`transaksi`.`total_bayar`)) AS `gaji_harian`, `transaksi`.`tips` AS `tips` FROM (`transaksi` join `gaji`) GROUP BY `transaksi`.`petugas` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `email_2` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `email_2` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD KEY `email_2` (`email`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `petugas` (`petugas`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_info` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
