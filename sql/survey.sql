-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2023 at 04:37 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
