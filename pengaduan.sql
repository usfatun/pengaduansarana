-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Feb 2026 pada 03.31
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengaduan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `jobs`
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
-- Struktur dari tabel `job_batches`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_02_03_050455_create_pengaduans_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduans`
--

CREATE TABLE `pengaduans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `status` enum('menunggu','diproses','selesai','ditolak') NOT NULL DEFAULT 'menunggu',
  `tanggapan_admin` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengaduans`
--

INSERT INTO `pengaduans` (`id`, `user_id`, `judul`, `kategori`, `lokasi`, `deskripsi`, `foto`, `status`, `tanggapan_admin`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ada Game FF', 'Peralatan', 'LAB 3', 'Ada game FF di komputer no 23', '1770096974_Blue Gradient Geometric 3D Computer Welcome Google Classroom Header (1).png', 'ditolak', 'Ok kakak keluhan anda akan kami perbaiki', '2026-02-02 22:36:15', '2026-02-03 10:46:25'),
(2, 4, 'Wifi', 'Fasilitas Sekolah', 'Lab 3 RPL', 'Mohon diperbaiki Internet LAB 3 , lemot', '1770167655_5.png', 'selesai', 'Baik Kakak Cantik akan segera kami perbaiki', '2026-02-03 18:14:15', '2026-02-10 21:20:08'),
(3, 5, 'wifi lambat', 'Sarana Sekolah', 'Lab 2', 'Wifi Lab 2 lambat sekali', '1770779520_lab-kom.jpg', 'diproses', 'Baik kakak, akan kami sampaikan keluh kesah anda', '2026-02-10 20:12:00', '2026-02-10 20:48:37'),
(4, 5, 'Lampu mati', 'Sarana Sekolah', 'Lab 2', 'Lampu Lab 2 mati', '1770781939_r6a.jpeg', 'menunggu', NULL, '2026-02-10 20:52:19', '2026-02-10 21:17:36'),
(5, 6, 'Komputer Lemot', 'Sarana Sekolah', 'Lab 2', 'Komputter nomor 13 yang manggoni Dewa paling ganteng dewe, aggah gede dhuwur, Kaisar Masa lampau terlahir kembali di dunia 2026.', '1770784979_lab-kom.jpg', 'diproses', 'baik sang Kaisar akan segera kami perbaiki', '2026-02-10 21:43:00', '2026-02-11 00:03:35'),
(6, 7, 'Meja rusak', 'Sarana Sekolah', 'Lab 3', 'Saya Rizal sang kaisar yang terlahir kembali di jaman modern , menemukan meja rusak di lab 3. dan batu giok saya hilang', '1770860159_lab.jfif', 'selesai', 'ok Sang Kaisar akan segera kami perbaiki', '2026-02-11 18:35:59', '2026-02-11 18:37:51'),
(7, 10, 'Meja ada coretan', 'Sarana Sekolah', 'Lab 3', 'Ada coretan di meja nomor 35.', '1770867702_lab-kom.jpg', 'selesai', 'Baik Ka Keluhan anda segera akan kami tindak lanjuti', '2026-02-11 20:41:42', '2026-02-11 20:42:36'),
(8, 11, 'lampu mati', 'Sarana Sekolah', 'Lab 3', 'Ada lampu mati bagian belakang', '1770868131_lab-kom.jpg', 'selesai', 'lampu sudah kami perbaiki', '2026-02-11 20:48:51', '2026-02-11 20:50:01'),
(9, 5, 'Pintu kamar mandi rusak', 'Toilet', 'Toilet putri', 'Engsel pintu rusak, pintu sebelah utara', '1770947204_kamar mandi.jfif', 'menunggu', NULL, '2026-02-12 18:46:44', '2026-02-12 18:46:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','siswa') NOT NULL DEFAULT 'siswa',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'mama', 'mama@gmail.com', '$2y$12$Ja4HoAteSVskgMrGBP8YF.pvRO51JwoeikSjnYUL6KhzmZTQRvS7W', 'siswa', '2026-02-02 22:27:30', '2026-02-02 22:27:30'),
(2, 'Admin Sekolah', 'admin@gmail.com', '$2y$12$9EN.xTwF0x7AFPk4z8IIBuHRRyBo0fGRQwy7NeikHUw3IUMR5LFAG', 'admin', '2026-02-02 22:37:52', '2026-02-02 22:37:52'),
(3, 'Admin Sekolah', 'usfatun@gmail.com', '$2y$12$9u.yOPtF9bym84mvpCNqLuHs1tzlGbcYymdWX/Ax8bcL2jNlJ98Yy', 'admin', '2026-02-03 17:46:59', '2026-02-03 17:46:59'),
(4, 'Luna', 'luna@gmail.com', '$2y$12$DN3jyYigLbeSGVljObzM5OaKerCSF6oSmph2MdnscwI4m5G.QSNi.', 'siswa', '2026-02-03 18:12:08', '2026-02-03 18:12:08'),
(5, 'Usfatun', 'uus@gmail.com', '$2y$12$a6UmgXIbW5/uLJ32uAneEu6wgzszQO4QuzsGmaD1owFJs7XDTev/u', 'siswa', '2026-02-10 19:52:51', '2026-02-10 19:52:51'),
(6, 'Dewa dowo', 'dewa@gmail.com', '$2y$12$ElIKakd6hTf399gotLM5Qug1bYsFqnM4/vM8e7/YuizuI.Y3XY3Iq', 'siswa', '2026-02-10 21:41:19', '2026-02-10 21:41:19'),
(7, 'Rizal', 'rizal@gmail.com', '$2y$12$/YcQKnCst0jxJgzF6JKVceWqcn0QzfZ0t8PEPJe64wIja2krc.ol.', 'siswa', '2026-02-11 18:34:03', '2026-02-11 18:34:03'),
(8, 'Dadang', 'dadang@gmail.com', '$2y$12$MIb3DpsBd60f2bEE9V6gBOS6B.PzlSVJYXxK2I75tOkS4vFz/wsAm', 'siswa', '2026-02-11 19:24:55', '2026-02-11 19:24:55'),
(9, 'Sholeh', 'sholehuddinaljamali234412@gmail.com', '$2y$12$.0hJA88TVb3/H6ZxViGvQufvxZxYaU2ankZANXohSJZzm.0WYSQ/.', 'siswa', '2026-02-11 19:26:03', '2026-02-11 19:26:03'),
(10, 'Usfatun', 'mamaus@gmail.com', '$2y$12$1atXbhCvZSlmUsRUhUFC4.B0TQmWzKqFDSpHNRJBUPCpsoTMKDLW2', 'siswa', '2026-02-11 20:40:52', '2026-02-11 20:40:52'),
(11, 'Usfatun K', 'mamaus1@gmail.com', '$2y$12$o28mnvgo0hbxE7wYydS4fuE8Uz7z7MYbk9/r4cp3km4hYGIitD/Ve', 'siswa', '2026-02-11 20:48:04', '2026-02-11 20:48:04');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengaduans`
--
ALTER TABLE `pengaduans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengaduans_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pengaduans`
--
ALTER TABLE `pengaduans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pengaduans`
--
ALTER TABLE `pengaduans`
  ADD CONSTRAINT `pengaduans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
