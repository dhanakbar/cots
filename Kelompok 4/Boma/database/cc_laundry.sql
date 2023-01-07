-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2023 at 12:57 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cc_laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$Ewl33rpy9hbSYO4GisvKdOjSX2Yj9YRXq/X8PE00TppC2u8NRksKW');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `paket_laundry` varchar(128) NOT NULL,
  `berat_laundry` int(5) NOT NULL,
  `paket_sepatu` varchar(128) NOT NULL,
  `banyak_sepatu` int(5) NOT NULL,
  `alamat_pesanan` varchar(256) NOT NULL,
  `status` varchar(256) NOT NULL,
  `estimasi` varchar(20) NOT NULL,
  `total_harga` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_user`, `paket_laundry`, `berat_laundry`, `paket_sepatu`, `banyak_sepatu`, `alamat_pesanan`, `status`, `estimasi`, `total_harga`) VALUES
(13, 8, 'Reguler', 1, 'Express', 3, 'Bandung Selatan', 'Kurir telah mengambil pesanan anda', '30-12-2022 02:34:44', '35000'),
(14, 8, 'Express', 0, 'Super Express', 0, 'Bandung Selatan', 'Pesanan anda telah selesai', '28-12-2022 02:36:20', '0'),
(15, 8, 'Super Express', 0, 'Super Express', 0, 'Bandung Selatan', 'Pesanan diterima', '28-12-2022 02:39:21', '0'),
(16, 8, 'None', 0, 'None', 0, 'Bandung Selatan', 'Orderan diterima', '28-12-2022 03:01:50', '0'),
(17, 8, 'Super Express', 2, 'Reguler', 3, 'jakarta', 'Pesanan anda telah selesai', '31-12-2022 04:49:55', '45000'),
(18, 8, 'Express', 2, 'Reguler', 3, 'Bandung Selatan', 'Pesanan anda sedang dalam pengiriman', '31-12-2022 04:50:48', '35000'),
(19, 8, 'Reguler', 0, 'Super Express', 0, 'Bandung Selatan', 'Orderan diterima', '30-12-2022 04:51:06', '20000'),
(20, 8, 'Super Express', 2, 'Express', 1, 'Bandung Selatan', 'Kurir telah mengambil pesanan anda', '29-12-2022 04:52:00', '40000'),
(21, 8, 'Super Express', 2, 'Super Express', 2, 'NEW NI BOSS', 'Pesanan anda sedang dalam proses pencucian', '28-12-2022 04:52:45', '60000'),
(22, 8, 'Super Express', 2, 'Super Express', 3, 'NEW NI BOSS', 'Pesanan anda telah selesai', '28-12-2022 04:52:48', '75000'),
(23, 8, 'Super Express', 1, 'Super Express', 1, 'Baru lagi ni boss', 'Pesanan anda telah selesai dicuci', '28-12-2022 04:53:28', '30000'),
(24, 8, 'Express', 0, 'Reguler', 0, 'Baru lagi ni boss', 'Orderan diterima', '31-12-2022 04:57:14', '15000'),
(25, 8, 'Express', 0, 'Reguler', 0, 'Baru lagi ni boss', 'Orderan diterima', '31-12-2022 04:57:50', '15000'),
(26, 8, 'Express', 0, 'Express', 0, 'Baru lagi ni boss', 'Orderan diterima', '29-12-2022 04:58:23', '20000'),
(27, 8, 'Reguler', 0, 'Super Express', 0, 'Baru lagi ni boss', 'Orderan diterima', '30-12-2022 05:00:28', '20000'),
(28, 8, 'Reguler', 0, 'Super Express', 0, 'Baru lagi ni boss', 'Orderan diterima', '30-12-2022 05:01:01', '20000'),
(29, 9, 'Express', 0, 'Reguler', 0, 'Bandung Utara', 'Orderan diterima', '31-12-2022 05:01:21', '15000'),
(30, 9, 'Express', 0, 'Reguler', 0, 'Bandung Utara', 'Orderan diterima', '31-12-2022 05:35:06', '15000'),
(31, 9, 'Express', 0, 'Super Express', 0, 'Bandung Utara', 'Orderan diterima', '28-12-2022 05:35:37', '25000'),
(32, 9, 'Super Express', 0, 'Express', 0, 'Bandung Utara', 'Orderan diterima', '29-12-2022 05:36:01', '25000'),
(33, 9, 'Express', 0, 'Reguler', 0, 'Bandung Utara', 'Orderan diterima', '31-12-2022 05:36:59', '15000'),
(34, 9, 'Reguler', 0, 'Express', 0, 'Bandung Utara', 'Orderan diterima', '30-12-2022 05:39:36', '15000'),
(35, 9, 'Express', 0, 'Reguler', 0, 'Bandung Utara', 'Orderan diterima', '31-12-2022 05:40:20', '15000'),
(36, 9, 'None', 0, 'None', 0, 'Bandung Utara', 'Orderan diterima', '28-12-2022 05:40:21', '0'),
(37, 9, 'Express', 0, 'Express', 0, 'Bandung Utara', 'Orderan diterima', '29-12-2022 05:41:38', '20000'),
(38, 9, 'Express', 0, 'Reguler', 0, 'Bandung Utara', 'Orderan diterima', '31-12-2022 05:53:06', '15000'),
(39, 9, 'Reguler', 0, 'Express', 0, 'Bandung Utara', 'Orderan diterima', '30-12-2022 05:54:30', '15000'),
(40, 9, 'Express', 0, 'Reguler', 0, 'Bandung Utara', 'Orderan diterima', '31-12-2022 05:54:57', '15000'),
(41, 9, 'Reguler', 0, 'Express', 0, 'Bandung Utara', 'Orderan diterima', '30-12-2022 05:55:31', '15000'),
(42, 9, 'Super Express', 0, 'Express', 0, 'tes', 'Orderan diterima', '29-12-2022 06:16:22', '25000'),
(43, 10, 'Express', 0, 'Reguler', 0, 'Bandung barat', 'Orderan diterima', '01-01-2023 02:02:06', '15000'),
(44, 10, 'Super Express', 0, 'Super Express', 0, 'Bandung barat', 'Orderan diterima', '29-12-2022 02:02:11', '30000'),
(45, 10, 'Express', 0, 'Reguler', 0, 'BARUU BOSSS BARUU', 'Orderan diterima', '01-01-2023 02:02:25', '15000'),
(46, 8, 'Reguler', 0, 'Super Express', 0, 'Balikpapan perumnas', 'Pesanan diterima', '31-12-2022 03:21:20', '0'),
(47, 12, 'Express', 0, 'Reguler', 0, 'Bekasi', 'Pesanan diterima', '05-01-2023 01:12:24', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `username` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(128) NOT NULL,
  `alamat` varchar(512) NOT NULL,
  `email` varchar(128) NOT NULL,
  `no_telp` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `jenis_kelamin`, `alamat`, `email`, `no_telp`, `password`, `is_active`, `date_created`) VALUES
(8, 'Luthfi Siregar', 'luthfi', 'laki-laki', 'Balikpapan perumnas', 'luthfi12354@gmail.com', '0844442341', '$2y$10$OULWQaEo8XwZMMwVeCvTIeWpPD9zxIUpO6B0Xx2rRxmQx9jHI6mWa', 1, 1672169568),
(9, 'Fairuz Jamil', 'fairuz', 'laki-laki', 'fairuz@gmail.com', 'fairuz@gmail.com', '083173861783', '$2y$10$XVHn6Gjev4DeIF8Qgijadur.fAbwQ5ZADrfVBZO/GOSWFCg34OmBe', 1, 1672169604),
(10, 'Elia Angga', 'angga', 'laki-laki', 'BARUU BOSSS BARUU', 'angga@gmail.com', '08313131', '$2y$10$XVHn6Gjev4DeIF8Qgijadur.fAbwQ5ZADrfVBZO/GOSWFCg34OmBe', 1, 1672169634),
(11, 'Luthfi Siregar', 'Luthfi', 'laki-laki', 'Bandung bojongsoang', 'luthfi@gmail.com', '08913131231', '$2y$10$h4xow3XtOMOG27FloXi7bu5mH6FZJiXsxYhDOoE0rs6vW0xiA07k.', 1, 1672304518),
(12, 'Fairuz J', 'fairuzj', 'laki-laki', 'Bekasi', 'fairuzj@gmail.com', '0808808808', '$2y$10$hOwHDAkmC1dRvyyj9f9/UuBNqqBkulPY.fHz8f12WLc/3xuEmgqYK', 1, 1672574590);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
