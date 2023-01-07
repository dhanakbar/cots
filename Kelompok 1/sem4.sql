-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20221222.e5e070c814
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2023 at 11:15 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sem4`
--

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `id_pengguna`, `id_produk`) VALUES
(22, 6, 14);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `no_telp`, `nama`, `username`, `password`) VALUES
(1, '089529307135', 'glen', 'rio', '321'),
(2, '082913123', 'dodit', 'doydoy', '123123'),
(3, '083434324', 'resty', 'resty', '654321'),
(4, '0853223555', 'rio', 'rio', '222'),
(5, '08532235552', 'rio', 'rio', '123'),
(6, '089529307135', 'afaf', 'afaf', 'gwgp'),
(7, '999', 'rrq', 'rrq', 'rrq'),
(8, '', 'rio', 'aris', '321'),
(9, '', 'zzz', 'zzz', 'zzz'),
(10, '', 'asdas', 'asdasd', 'asdasd'),
(11, '', 'tahunbaru', 'tahunbaru', '123');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga_produk` varchar(255) NOT NULL,
  `jenis_produk` varchar(255) NOT NULL,
  `foto_produk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `jenis_produk`, `foto_produk`) VALUES
(1, 'FISH FILLET COMBO', '77000\r\n', 'Warungayam', 'fish fillet combo.png'),
(2, 'COLONEL YAKINIKI COMBO', '99000', 'Warungayam', 'kfc-web_colonelyakinikucombo_t.png'),
(3, 'CRISPY BOX', '35000', 'Warungayam', 'kfc-web_crispy-box_t.png'),
(4, 'BURGET COMBO', '69000', 'Warungayam', 'kfc-web_O.R burgercombo_t.png'),
(5, 'SIGNATURE BOX 1', '100000', 'Warungayam', 'kfc-web_signature-box1_t.png'),
(6, 'SUPER BESAR 1', '99000', 'Warungayam', 'kfc-web_super-besar1_t.png'),
(7, 'SUPER STAR 3', '45000', 'Warungayam', 'kfc-web_superstar-3_t.png'),
(8, 'CLASSIC COMBO', '49000', 'Warungayam', 'w_classic_combo_t.png'),
(9, 'CHICKEN KATSU', '50000', 'Warungjapansunda', 'Chicken-katsu.jpg'),
(10, 'FRY COMBO', '40000', 'Warungjapansunda', 'FryCombo.jpg'),
(11, 'GOKANA 1', '70000', 'Warungjapansunda', 'Gokana-1.jpg'),
(12, 'GOKANA 2', '55000', 'Warungjapansunda', 'Gokana-2.jpg'),
(13, '\r\nSPICY CHICKEN', '75000', 'Warungjapansunda', 'SpicyChicken.jpg'),
(14, 'TEMPURA MISO RAMEN', '99000', 'Warungjapansunda', 'Tempura-Miso-Ramen.jpg'),
(15, 'TEMPURA SOYU RAMEN', '35000', 'Warungjapansunda', 'Tempura-Soyu-Ramen.jpg'),
(16, 'TEMPURA', '65000', 'Warungjapansunda', 'Tempura.jpg'),
(17, 'WAGYU KENTANG', '1000000', 'WarungWagyu', '1.jpg'),
(18, 'WAGYU SAYUR', '1250000', 'WarungWagyu', '2.jpg'),
(19, 'WAGYU ES KRIM', '2000000', 'WarungWagyu', '3.jpg'),
(20, 'WAGYU KENTANG SAYUR', '1333000', 'WarungWagyu', '4.jpg'),
(21, 'WAGYU JERUK NIPIS', '1200000', 'WarungWagyu', '5.jpg'),
(22, 'WAGYU KECAP SAYUR', '1500000', 'WarungWagyu', '6.jpg'),
(23, 'WAGYU ALADIN', '7000000', 'WarungWagyu', '7.jpg'),
(24, 'WAGYU TOMAT JAMURAN', '6000000', 'WarungWagyu', '8.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
