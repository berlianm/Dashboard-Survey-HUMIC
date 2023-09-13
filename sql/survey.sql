-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Agu 2023 pada 04.11
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `exam`
--

CREATE TABLE `exam` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `quizId` varchar(255) NOT NULL,
  `answer` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `exam`
--

INSERT INTO `exam` (`id`, `email`, `quizId`, `answer`, `created_at`, `updated_at`, 'role') VALUES
(1, 'pindankmentah@gmail.com', '1', 5, '2023-07-17 08:26:05', '2023-07-17 08:39:52', 'MAHASISWA'),
(2, 'pindankmentah@gmail.com', '2', 5, '2023-07-17 08:26:22', '2023-07-17 08:39:54', 'MAHASISWA'),
(3, 'pindankmentah@gmail.com', '3', 5, '2023-07-17 08:26:26', '2023-07-17 08:39:56', 'MAHASISWA'),
(4, 'pindankmentah@gmail.com', '4', 5, '2023-07-17 08:26:29', '2023-07-17 08:32:06', 'MAHASISWA'),
(5, 'pindankmentah@gmail.com', '5', 5, '2023-07-17 08:26:41', '2023-07-17 08:40:01', 'MAHASISWA'),
(6, 'bmsehatno@gmail.com', '1', 1, '2023-07-17 09:40:15', '2023-07-17 09:48:19', 'MAHASISWA'),
(7, 'bmsehatno@gmail.com', '2', 3, '2023-07-17 09:40:18', '2023-07-17 09:40:18', 'MAHASISWA'),
(8, 'bmsehatno@gmail.com', '3', 3, '2023-07-17 09:40:22', '2023-07-17 09:40:22', 'MAHASISWA'),
(9, 'bmsehatno@gmail.com', '4', 2, '2023-07-17 09:40:25', '2023-07-17 09:40:25', 'MAHASISWA'),
(10, 'bmsehatno@gmail.com', '5', 1, '2023-07-17 09:40:28', '2023-07-17 09:40:28', 'MAHASISWA'),
(11, 'asyu@gmail.com', '1', 4, '2023-07-18 06:52:20', '2023-07-27 10:09:54', 'MAHASISWA'),
(12, 'asyu@gmail.com', '2', 4, '2023-07-18 06:52:20', '2023-07-27 10:09:54', 'MAHASISWA'),
(13, 'asyu@gmail.com', '3', 4, '2023-07-18 06:52:20', '2023-07-24 03:02:01', 'MAHASISWA'),
(14, 'asyu@gmail.com', '4', 4, '2023-07-18 06:52:20', '2023-07-24 03:02:01', 'MAHASISWA'),
(15, 'asyu@gmail.com', '5', 2, '2023-07-18 06:52:20', '2023-07-27 10:09:54', 'MAHASISWA'),
(16, 'asyu@gmail.com', '6', 3, '2023-07-24 02:53:02', '2023-07-24 03:00:30', 'MAHASISWA'),
(17, 'test1@gmail.com', '1', 4, '2023-07-31 20:09:33', '2023-07-31 20:09:33', 'MAHASISWA'),
(18, 'test1@gmail.com', '2', 4, '2023-07-31 20:09:33', '2023-07-31 20:09:33', 'MAHASISWA'),
(19, 'test1@gmail.com', '3', 5, '2023-07-31 20:09:33', '2023-07-31 20:09:33', 'MAHASISWA'),
(20, 'test1@gmail.com', '4', 3, '2023-07-31 20:09:33', '2023-07-31 20:09:33', 'MAHASISWA'),
(21, 'test1@gmail.com', '5', 5, '2023-07-31 20:09:33', '2023-07-31 20:09:33', 'MAHASISWA'),
(22, 'test1@gmail.com', '6', 4, '2023-07-31 20:09:33', '2023-07-31 20:09:33', 'MAHASISWA');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_13_113924_quiz', 1),
(6, '2022_06_13_113946_exam', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `quiz`
--

CREATE TABLE `quiz` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quiz` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `quiz`
--

INSERT INTO `quiz` (`id`, `quiz`, `description`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Apakah Anda merasa puas dengan pelayanan yang diberikan oleh tim kami?', '', '2023-07-17 06:26:30', '2023-07-17 06:26:30', 'MAHASISWA'),
(2, 'Seberapa responsif tim kami dalam menanggapi pertanyaan atau permintaan Anda?', '', '2023-07-17 06:26:30', '2023-07-17 06:26:30', 'MAHASISWA'),
(3, 'Bagaimana pendapat Anda mengenai kejelasan dan keakuratan informasi yang diberikan oleh tim kami?', '', '2023-07-17 06:26:30', '2023-07-17 06:26:30', 'MAHASISWA'),
(4, 'Apakah Anda merasa diperlakukan dengan ramah dan sopan oleh staf kami?', '', '2023-07-17 06:26:30', '2023-07-17 06:26:30', 'MAHASISWA'),
(5, 'Seberapa efektif solusi yang diberikan oleh tim kami dalam menyelesaikan masalah atau kebutuhan Anda?', '', '2023-07-17 06:26:30', '2023-07-17 06:26:30', 'MAHASISWA'),
(6, 'test tamu', '', NULL, NULL, 'TAMU'),
(7, 'test dosen', '', NULL, NULL, 'DOSEN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `exam`
--
ALTER TABLE `exam`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
