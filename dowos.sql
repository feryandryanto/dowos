-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2019 at 09:20 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dowos`
--

-- --------------------------------------------------------

--
-- Table structure for table `bayar`
--

CREATE TABLE `bayar` (
  `id_bayar` int(100) NOT NULL,
  `id_pesan` int(100) NOT NULL,
  `id_paket` int(10) NOT NULL,
  `id` int(11) NOT NULL,
  `total_harga` int(255) NOT NULL,
  `bukti` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`, `ket`) VALUES
(1, '2 orang', 'hanya untuk dua orang'),
(2, 'keluarga', 'untuk satu keluarga '),
(3, 'grup', 'untuk rombongan kantor, grup dll');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(255) NOT NULL,
  `harga` int(50) NOT NULL,
  `stok` int(50) DEFAULT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `harga`, `stok`, `ket`) VALUES
(1, '1D-Kec. Kejajar', 100000, 10, ''),
(2, '1D-kec. garung & wsb', 200000, 10, ''),
(3, '1D-Kec. watumalang, kaliwiro & wadaslintang', 300000, 10, ''),
(4, '2D1N-Kec. Kejajar & garung', 400000, 10, 'paket keluarga'),
(5, '2D1N-Kec. Wsb, watumlang, & wadas', 500000, 10, ''),
(6, '3D2N-seluruh objek wisata wsb', 1000000, 10, '');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `id` int(100) NOT NULL,
  `id_paket` int(10) DEFAULT NULL,
  `tgl_pesan` date NOT NULL,
  `tgl_tour` date NOT NULL,
  `dewasa` int(100) NOT NULL,
  `anak` int(100) DEFAULT NULL,
  `status` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `id`, `id_paket`, `tgl_pesan`, `tgl_tour`, `dewasa`, `anak`, `status`) VALUES
(21, 11, 1, '2019-10-08', '2019-11-01', 1, 1, ''),
(27, 5, 1, '2019-10-09', '2019-11-01', 2, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jk` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `tlp` int(255) DEFAULT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `email`, `jk`, `alamat`, `tlp`, `level`) VALUES
(5, 'fery', 'fery', 'fery', 'fery@gmail.com', 'L', 'Tambi, wonosobo', 12345, 'User'),
(6, 'alwi', 'alwi', 'alwi', 'alwimboke@gmail.com', 'L', 'wsb', 1234, ''),
(10, 'sdfg', 'sdgf', 'asfdf', 'sfdbfv', '', '', 0, 'User'),
(11, 'inayah nafilah', 'inayah', 'inayah', 'nafilahinayah@gmail.com', 'P', 'wsb', 1234567890, 'User'),
(12, 'dolan wonosobo', 'dowos', 'dowos', 'cs@dolanwonosobo.com', 'p', 'wonosobo', 88888888, 'Admin'),
(13, 'nana', 'nana', 'nana', 'nana@gmail.com', NULL, NULL, NULL, 'Mitra-Travel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
