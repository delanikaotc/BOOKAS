-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2021 at 01:43 PM
-- Server version: 8.0.22
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookas`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `tgl_terbit` varchar(255) DEFAULT NULL,
  `penerbit` varchar(255) DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `kondisi` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `penulis` varchar(255) DEFAULT NULL,
  `id_user` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `created_at`, `updated_at`, `image`, `tgl_terbit`, `penerbit`, `deskripsi`, `kondisi`, `penulis`, `id_user`) VALUES
(1, 'Wingit', '50000', '2021-05-18 07:08:14', '2021-05-18 07:08:17', 'buku5.png', '2021-05-18', 'Gramedia', 'Penelusuran sebuah kompleks perumahan tua terbengkalai di daerah Jakarta Timur malam itu awalnya berjalan menyenangkan. Sebelum masuk ke area kompleks, saya bersama Wisnu, Fadi, dan Demian membuka vlog dengan gimmick seru untuk mencairkan suasana. Namun, saat tiba di sebuah lokasi rumah tingkat yang dikelilingi pepohonan dan semak, saya melihat semakin banyak makhluk tak kasatmata yang membuat saya terkejut.', 'Menurut aku buku ini bagus banget! Bukunya di cover, ga ada sobek sama sekali. Baru dibaca sekali. Dijual karena emang ga pernah dibaca lagi:( Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru', 'Sarah Wijayanto', 0),
(2, 'Ini adalah tes', '150000', '2021-05-18 07:09:08', '2021-05-18 07:09:11', 'buku2.png', '2021-05-18', 'Gramedia', 'Penelusuran sebuah kompleks perumahan tua terbengkalai di daerah Jakarta Timur malam itu awalnya berjalan menyenangkan. Sebelum masuk ke area kompleks, saya bersama Wisnu, Fadi, dan Demian membuka vlog dengan gimmick seru untuk mencairkan suasana. Namun, saat tiba di sebuah lokasi rumah tingkat yang dikelilingi pepohonan dan semak, saya melihat semakin banyak makhluk tak kasatmata yang membuat saya terkejut.', 'Menurut aku buku ini bagus banget! Bukunya di cover, ga ada sobek sama sekali. Baru dibaca sekali. Dijual karena emang ga pernah dibaca lagi:( Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru', 'Sarah ', 0),
(3, 'Lingsir Wengi', '54000', '2021-05-18 07:10:01', '2021-05-18 07:10:03', 'buku1.png', '2021-05-18', 'Gramedia', 'Penelusuran sebuah kompleks perumahan tua terbengkalai di daerah Jakarta Timur malam itu awalnya berjalan menyenangkan. Sebelum masuk ke area kompleks, saya bersama Wisnu, Fadi, dan Demian membuka vlog dengan gimmick seru untuk mencairkan suasana. Namun, saat tiba di sebuah lokasi rumah tingkat yang dikelilingi pepohonan dan semak, saya melihat semakin banyak makhluk tak kasatmata yang membuat saya terkejut.', 'Menurut aku buku ini bagus banget! Bukunya di cover, ga ada sobek sama sekali. Baru dibaca sekali. Dijual karena emang ga pernah dibaca lagi:( Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru', 'Wijayanto', 0),
(4, 'Bulan Bintang', '10000', '2021-05-18 07:13:16', '2021-05-18 07:13:18', 'buku3.png', '2021-05-18', 'Gramedia', 'Penelusuran sebuah kompleks perumahan tua terbengkalai di daerah Jakarta Timur malam itu awalnya berjalan menyenangkan. Sebelum masuk ke area kompleks, saya bersama Wisnu, Fadi, dan Demian membuka vlog dengan gimmick seru untuk mencairkan suasana. Namun, saat tiba di sebuah lokasi rumah tingkat yang dikelilingi pepohonan dan semak, saya melihat semakin banyak makhluk tak kasatmata yang membuat saya terkejut.', 'Menurut aku buku ini bagus banget! Bukunya di cover, ga ada sobek sama sekali. Baru dibaca sekali. Dijual karena emang ga pernah dibaca lagi:( Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru', 'Suko Wijayanto', 0),
(5, 'Wangsit', '14500', '2021-05-18 07:14:32', '2021-05-18 07:14:34', 'buku4.png', '2021-05-18', 'ramedia', 'Penelusuran sebuah kompleks perumahan tua terbengkalai di daerah Jakarta Timur malam itu awalnya berjalan menyenangkan. Sebelum masuk ke area kompleks, saya bersama Wisnu, Fadi, dan Demian membuka vlog dengan gimmick seru untuk mencairkan suasana. Namun, saat tiba di sebuah lokasi rumah tingkat yang dikelilingi pepohonan dan semak, saya melihat semakin banyak makhluk tak kasatmata yang membuat saya terkejut.', 'Menurut aku buku ini bagus banget! Bukunya di cover, ga ada sobek sama sekali. Baru dibaca sekali. Dijual karena emang ga pernah dibaca lagi:( Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru', 'Sarah Widodo', 0),
(7, 'bukuku', '10000', '2021-05-19 06:41:55', '2021-05-22 09:35:30', '1621701330_buku3.png', '17 agustus', 'mayang', 'nuasn', 'nuans', 'nuansa', 5),
(9, 'menari', '40000', '2021-05-19 20:23:30', '2021-05-19 20:23:30', '1621481010_buku1.png', '18 Maret 2020', 'mayang', 'menari adalah dia dia adalah menari, tapikita tidak pernah menari', 'masih bagus banget sebenernya, cuma aku udah lama banget ga baca jadi ya yaudah deh aku jual', 'nusa dua', 6),
(10, 'bernyanyi', '40000', '2021-05-19 20:31:16', '2021-05-19 20:31:16', '1621481476_buku4.png', '18 Maret 2020', 'mayang', 'nuasn', 'masih bagus banget sebenernya, cuma aku udah lama banget ga baca jadi ya yaudah deh aku jual', 'nuansa', 6);

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
--

CREATE TABLE `rekening` (
  `id` int NOT NULL,
  `iduser` int NOT NULL,
  `namaBank` varchar(255) NOT NULL,
  `noRekening` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rekening`
--

INSERT INTO `rekening` (`id`, `iduser`, `namaBank`, `noRekening`, `created_at`, `updated_at`) VALUES
(1, 5, 'bni', 17148, '2021-05-19 09:25:10', '2021-05-19 09:25:10'),
(2, 6, 'bca', 17171717, '2021-05-19 20:20:56', '2021-05-19 20:20:56'),
(3, 7, 'bca', 17148, '2021-05-22 10:51:57', '2021-05-22 10:51:57'),
(4, 7, 'bni', 17148, '2021-05-22 10:52:53', '2021-05-22 10:52:53');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int NOT NULL,
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `role_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`, `phone`, `address`, `role_id`) VALUES
(1, 'sukopay', 'voodoomodoo@gmail.com', '$2y$12$4ikr5JPN1zdd21.dY/0K/ubUV54Avw6ZpC4zvtULnqn6PMh9gLp2e', '2021-05-17 22:09:20', '2021-05-17 22:09:20', NULL, NULL, 1),
(3, 'sdfsd', 'fahrursanjaya@gmail.com', '$2y$12$DUXcmZNsplVYS0bWac4rFeR4olmKbBPX6jTYu87Hq2ri73yfxRbD.', '2021-05-18 06:03:25', '2021-05-18 06:03:25', NULL, NULL, 2),
(4, 'Alvina Vania', 'alvina@admin.com', '$2y$12$pOePKRINkI8yXQljhve.LOP3qCLsm6wV8G/VZlZHaDSz974NnJ3RW', '2021-05-18 19:12:43', '2021-05-18 19:12:43', NULL, NULL, 1),
(5, 'alvina', 'alvina@user.com', '$2y$12$U.LDjKbgmGC/htGEpoDU9ef6Q.P7ZF50cPjf9fkWsGZ/Fmh8n.VEu', '2021-05-18 23:50:10', '2021-05-19 10:36:14', '444444', 'jl. delta barat', 2),
(6, 'alvina', 'alvina@alvina.com', '$2y$12$Z2SZhLkL6sN0ZTHdS06I6.1QRJcgT40GZAJwnXjRuL1d8fyTPPo.m', '2021-05-19 20:09:54', '2021-05-19 20:20:50', '444444', 'jalan mangga', 2),
(7, 'alvina', 'alvinabaru@user.com', '$2y$12$PjMw6Yll.VqQxyTeQBPoeeJIBrXyRtxlHZG4e1a1CcZlvB3POt54i', '2021-05-22 10:46:13', '2021-05-22 10:51:49', '4444433', 'jalan mangga', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
