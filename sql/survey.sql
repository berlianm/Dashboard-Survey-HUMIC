-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2023 at 06:59 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
-- Table structure for table `exam`
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
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `email`, `quizId`, `answer`, `created_at`, `updated_at`, `role`) VALUES
(23, 'aa@gmail.com', '1', 5, '2023-09-13 20:29:01', '2023-09-13 20:29:01', 'MAHASISWA'),
(24, 'aa@gmail.com', '2', 4, '2023-09-13 20:29:01', '2023-09-13 20:29:01', 'MAHASISWA'),
(25, 'aa@gmail.com', '3', 3, '2023-09-13 20:29:01', '2023-09-13 20:29:01', 'MAHASISWA'),
(26, 'aa@gmail.com', '4', 2, '2023-09-13 20:29:01', '2023-09-13 20:29:01', 'MAHASISWA'),
(27, 'aa@gmail.com', '5', 1, '2023-09-13 20:29:01', '2023-09-13 20:29:01', 'MAHASISWA'),
(28, 'aa@gmail.com', '6', 3, '2023-09-13 20:29:01', '2023-09-13 20:29:01', 'MAHASISWA'),
(29, 'aa@gmail.com', '7', 2, '2023-09-13 20:29:01', '2023-09-13 20:29:01', 'MAHASISWA'),
(30, 'aa@gmail.com', '8', 2, '2023-09-13 20:29:01', '2023-09-13 20:29:01', 'MAHASISWA'),
(31, 'aa@gmail.com', '9', 5, '2023-09-13 20:29:01', '2023-09-13 20:29:01', 'MAHASISWA'),
(32, 'aa@gmail.com', '10', 5, '2023-09-13 20:29:01', '2023-09-13 20:29:01', 'MAHASISWA'),
(33, 'bb@gmail.com', '1', 3, '2023-09-13 20:36:12', '2023-09-13 20:36:12', 'TAMU'),
(34, 'bb@gmail.com', '2', 4, '2023-09-13 20:36:12', '2023-09-13 20:36:12', 'TAMU'),
(35, 'bb@gmail.com', '3', 5, '2023-09-13 20:36:12', '2023-09-13 20:36:12', 'TAMU'),
(36, 'bb@gmail.com', '4', 2, '2023-09-13 20:36:12', '2023-09-13 20:36:12', 'TAMU'),
(37, 'bb@gmail.com', '5', 4, '2023-09-13 20:36:12', '2023-09-13 20:36:12', 'TAMU'),
(38, 'bb@gmail.com', '6', 5, '2023-09-13 20:36:12', '2023-09-13 20:36:12', 'TAMU'),
(39, 'bb@gmail.com', '7', 5, '2023-09-13 20:36:12', '2023-09-13 20:36:12', 'TAMU'),
(40, 'bb@gmail.com', '8', 5, '2023-09-13 20:36:12', '2023-09-13 20:36:12', 'TAMU'),
(41, 'bb@gmail.com', '9', 3, '2023-09-13 20:36:12', '2023-09-13 20:36:12', 'TAMU'),
(42, 'bb@gmail.com', '10', 1, '2023-09-13 20:36:12', '2023-09-13 20:36:12', 'TAMU'),
(43, 'eric@gmail.com', '1', 5, '2023-09-28 00:25:20', '2023-09-28 00:25:20', 'MAHASISWA'),
(44, 'eric@gmail.com', '2', 5, '2023-09-28 00:25:20', '2023-09-28 00:25:20', 'MAHASISWA'),
(45, 'eric@gmail.com', '3', 5, '2023-09-28 00:25:20', '2023-09-28 00:25:20', 'MAHASISWA'),
(46, 'eric@gmail.com', '4', 2, '2023-09-28 00:25:20', '2023-09-28 00:25:20', 'MAHASISWA'),
(47, 'eric@gmail.com', '5', 4, '2023-09-28 00:25:20', '2023-09-28 00:25:20', 'MAHASISWA'),
(48, 'eric@gmail.com', '6', 5, '2023-09-28 00:25:20', '2023-09-28 00:25:20', 'MAHASISWA'),
(49, 'eric@gmail.com', '7', 1, '2023-09-28 00:25:20', '2023-09-28 00:25:20', 'MAHASISWA'),
(50, 'eric@gmail.com', '8', 2, '2023-09-28 00:25:20', '2023-09-28 00:25:20', 'MAHASISWA'),
(51, 'eric@gmail.com', '9', 3, '2023-09-28 00:25:20', '2023-09-28 00:25:20', 'MAHASISWA'),
(52, 'eric@gmail.com', '10', 4, '2023-09-28 00:25:20', '2023-09-28 00:25:20', 'MAHASISWA'),
(71, 'berlian@gmail.com', '1', 1, '2023-10-08 07:36:08', '2023-10-08 07:36:08', 'MAHASISWA'),
(72, 'berlian@gmail.com', '2', 4, '2023-10-08 07:36:08', '2023-10-08 07:36:08', 'MAHASISWA'),
(73, 'berlian@gmail.com', '3', 3, '2023-10-08 07:36:08', '2023-10-08 07:36:08', 'MAHASISWA'),
(74, 'berlian@gmail.com', '4', 3, '2023-10-08 07:36:08', '2023-10-08 07:36:08', 'MAHASISWA'),
(75, 'berlian@gmail.com', '5', 1, '2023-10-08 07:36:08', '2023-10-08 07:36:08', 'MAHASISWA'),
(76, 'berlian@gmail.com', '6', 3, '2023-10-08 07:36:08', '2023-10-08 07:36:08', 'MAHASISWA'),
(77, 'berlian@gmail.com', '7', 5, '2023-10-08 07:36:08', '2023-10-08 07:36:08', 'MAHASISWA'),
(78, 'berlian@gmail.com', '8', 3, '2023-10-08 07:36:08', '2023-10-08 07:36:08', 'MAHASISWA'),
(79, 'berlian@gmail.com', '9', 2, '2023-10-08 07:36:08', '2023-10-08 07:36:08', 'MAHASISWA'),
(80, 'berlian@gmail.com', '10', 4, '2023-10-08 07:36:08', '2023-10-08 07:36:08', 'MAHASISWA'),
(81, 'qiuqiu@gmail.com', '1', 3, '2023-10-08 07:37:15', '2023-10-08 07:37:15', 'DOSEN'),
(82, 'qiuqiu@gmail.com', '2', 1, '2023-10-08 07:37:15', '2023-10-08 07:37:15', 'DOSEN'),
(83, 'qiuqiu@gmail.com', '3', 3, '2023-10-08 07:37:15', '2023-10-08 07:37:15', 'DOSEN'),
(84, 'qiuqiu@gmail.com', '4', 4, '2023-10-08 07:37:15', '2023-10-08 07:37:15', 'DOSEN'),
(85, 'qiuqiu@gmail.com', '5', 5, '2023-10-08 07:37:15', '2023-10-08 07:37:15', 'DOSEN'),
(86, 'qiuqiu@gmail.com', '6', 5, '2023-10-08 07:37:15', '2023-10-08 07:37:15', 'DOSEN'),
(87, 'qiuqiu@gmail.com', '7', 5, '2023-10-08 07:37:15', '2023-10-08 07:37:15', 'DOSEN'),
(88, 'qiuqiu@gmail.com', '8', 4, '2023-10-08 07:37:15', '2023-10-08 07:37:15', 'DOSEN'),
(89, 'qiuqiu@gmail.com', '9', 2, '2023-10-08 07:37:15', '2023-10-08 07:37:15', 'DOSEN'),
(90, 'qiuqiu@gmail.com', '10', 5, '2023-10-08 07:37:15', '2023-10-08 07:37:15', 'DOSEN');

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
(5, '2022_06_13_113924_quiz', 1),
(6, '2022_06_13_113946_exam', 1);

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
-- Table structure for table `quiz`
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
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `quiz`, `description`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Apakah Anda merasa bahwa layanan web HUMIC mudah digunakan untuk menemukan informasi yang Anda butuhkan?', '', '2023-07-17 06:26:30', '2023-07-17 06:26:30', 'MAHASISWA'),
(2, 'Sejauh mana Anda puas dengan kualitas konten yang disediakan oleh HUMIC untuk mahasiswa?', '', '2023-07-17 06:26:30', '2023-07-17 06:26:30', 'MAHASISWA'),
(3, 'Apakah Anda merasa bahwa HUMIC memberikan akses yang memadai ke berbagai sumber daya pendidikan, seperti jurnal, buku, dan materi kuliah?', '', '2023-07-17 06:26:30', '2023-07-17 06:26:30', 'MAHASISWA'),
(4, 'Bagaimana pendapat Anda tentang responsivitas tim dukungan HUMIC jika Anda mengalami masalah teknis?', '', '2023-07-17 06:26:30', '2023-07-17 06:26:30', 'MAHASISWA'),
(5, 'Apakah HUMIC memberikan fitur-fitur tambahan yang membantu Anda dalam pembelajaran online?', '', '2023-07-17 06:26:30', '2023-07-17 06:26:30', 'MAHASISWA'),
(6, 'Apakah Anda merasa bahwa HUMIC memberikan dukungan yang memadai untuk pembelajaran jarak jauh, terutama selama situasi pandemi ini?', '', '2023-07-17 06:26:30', '2023-07-17 06:26:30', 'MAHASISWA'),
(7, 'Sejauh mana Anda puas dengan antarmuka pengguna (UI/UX) situs web HUMIC? Apakah mudah dinavigasi?', '', '2023-07-17 06:26:30', '2023-07-17 06:26:30', 'MAHASISWA'),
(8, 'Apakah Anda merasa bahwa HUMIC memberikan layanan pembayaran online yang efisien untuk biaya kuliah, pendaftaran, dan lainnya?', '', '2023-07-17 06:26:30', '2023-07-17 06:26:30', 'MAHASISWA'),
(9, 'Bagaimana pendapat Anda tentang tingkat keamanan data pribadi Anda yang disimpan di dalam sistem HUMIC?', '', '2023-07-17 06:26:30', '2023-07-17 06:26:30', 'MAHASISWA'),
(10, 'Apakah Anda merasa bahwa HUMIC mengintegrasikan teknologi terbaru dengan baik dalam pengalaman belajar Anda?', '', '2023-07-17 06:26:30', '2023-07-17 06:26:30', 'MAHASISWA'),
(11, 'Apakah Anda merasa bahwa HUMIC memberikan platform yang efisien untuk mengelola dan mengunggah materi kuliah Anda?', '', '2023-07-17 06:26:30', '2023-07-17 06:26:30', 'DOSEN'),
(12, 'Sejauh mana Anda puas dengan dukungan teknis yang diberikan oleh HUMIC dalam hal integrasi dengan sistem pembelajaran Anda?\r\n', '', '2023-07-17 06:26:30', '2023-07-17 06:26:30', 'DOSEN'),
(13, 'Apakah Anda merasa bahwa HUMIC mendukung efektivitas pengajaran online Anda dengan baik?\r\n', '', '2023-07-17 06:26:30', '2023-07-17 06:26:30', 'DOSEN'),
(14, 'Bagaimana pendapat Anda tentang fitur kolaborasi yang ditawarkan oleh HUMIC untuk interaksi dengan mahasiswa?', '', '2023-07-17 06:26:30', '2023-07-17 06:26:30', 'DOSEN'),
(15, 'Apakah Anda merasa bahwa HUMIC memberikan alat evaluasi yang memadai untuk mengukur kinerja dan partisipasi mahasiswa dalam kursus Anda?', '', '2023-07-17 06:26:30', '2023-07-17 06:26:30', 'DOSEN'),
(16, 'Bagaimana pendapat Anda tentang fleksibilitas HUMIC dalam mendukung berbagai jenis materi kuliah, termasuk teks, gambar, video, dan materi interaktif?', '', '2023-07-17 06:26:30', '2023-07-17 06:26:30', 'DOSEN'),
(17, 'Apakah HUMIC menyediakan alat analitik atau laporan yang membantu Anda memantau kemajuan mahasiswa Anda secara efektif?', '', '2023-07-17 06:26:30', '2023-07-17 06:26:30', 'DOSEN'),
(18, 'Sejauh mana HUMIC mendukung komunikasi dan kolaborasi antara dosen dan mahasiswa di luar jam kuliah?', '', '2023-07-17 06:26:30', '2023-07-17 06:26:30', 'DOSEN'),
(19, 'Bagaimana pengalaman Anda dalam mengelola pengunggahan tugas dan tugas online melalui HUMIC?', '', '2023-07-17 06:26:30', '2023-07-17 06:26:30', 'DOSEN'),
(20, 'Apakah HUMIC memiliki fitur penjadwalan yang memadai untuk menetapkan dan mengelola jadwal kuliah Anda?', '', '2023-07-17 06:26:30', '2023-07-17 06:26:30', 'DOSEN'),
(21, 'Apakah Anda merasa bahwa situs web HUMIC memberikan informasi yang jelas dan berguna tentang acara atau kegiatan di kampus?', '', '2023-07-17 06:26:30', '2023-07-17 06:26:30', 'TAMU'),
(22, 'Sejauh mana Anda puas dengan pengalaman navigasi dan pencarian informasi di situs web HUMIC sebagai tamu?', '', '2023-07-17 06:26:30', '2023-07-17 06:26:30', 'TAMU'),
(23, 'Apakah HUMIC memberikan informasi kontak yang cukup untuk membantu Anda menghubungi kampus atau departemen yang relevan?', '', '2023-07-17 06:26:30', '2023-07-17 06:26:30', 'TAMU'),
(24, 'Bagaimana pendapat Anda tentang kemudahan pendaftaran atau pemesanan layanan melalui situs web HUMIC?', '', '2023-07-17 06:26:30', '2023-07-17 06:26:30', 'TAMU'),
(25, 'Apakah Anda merasa bahwa HUMIC memberikan informasi yang diperlukan tentang kebijakan kampus, seperti peraturan parkir atau kebijakan keamanan?', '', '2023-07-17 06:26:30', '2023-07-17 06:26:30', 'TAMU'),
(26, 'Apakah Anda merasa bahwa HUMIC memberikan informasi yang cukup tentang acara-acara kampus yang akan datang, termasuk tanggal, lokasi, dan deskripsi acara?', '', '2023-07-17 06:26:30', '2023-07-17 06:26:30', 'TAMU'),
(27, 'Sejauh mana HUMIC memberikan panduan yang jelas untuk mencapai kampus atau lokasi tertentu jika Anda adalah seorang tamu?', '', '2023-07-17 06:26:30', '2023-07-17 06:26:30', 'TAMU'),
(28, 'Bagaimana pengalaman Anda dalam mencari informasi kontak untuk departemen atau staf yang relevan di kampus melalui situs web HUMIC?', '', '2023-07-17 06:26:30', '2023-07-17 06:26:30', 'TAMU'),
(29, 'Apakah HUMIC memiliki opsi untuk memberikan umpan balik atau saran sebagai seorang tamu?', '', '2023-07-17 06:26:30', '2023-07-17 06:26:30', 'TAMU'),
(30, 'Bagaimana pendapat Anda tentang aksesibilitas situs web HUMIC untuk orang dengan kebutuhan khusus atau difabel?', '', '2023-07-17 06:26:30', '2023-07-17 06:26:30', 'TAMU');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
