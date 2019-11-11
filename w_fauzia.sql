-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2018 at 04:34 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `w_fauzia`
--

-- --------------------------------------------------------

--
-- Table structure for table `b_pembayaran`
--

CREATE TABLE `b_pembayaran` (
  `id_b_pembayaran` int(11) NOT NULL,
  `id_pesanan` int(11) NOT NULL,
  `b_pembayaran` blob NOT NULL,
  `nama` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b_pembayaran`
--

INSERT INTO `b_pembayaran` (`id_b_pembayaran`, `id_pesanan`, `b_pembayaran`, `nama`) VALUES
(13, 42, 0x625f70656d6261796172616e2e6a7067, 'customer'),
(14, 43, 0x625f70656d6261796172616e2e6a7067, 'ichang'),
(15, 44, 0x625f70656d6261796172616e2e6a7067, 'customer'),
(16, 45, 0x625f70656d6261796172616e2e6a7067, 'fatir');

-- --------------------------------------------------------

--
-- Table structure for table `b_terbaik`
--

CREATE TABLE `b_terbaik` (
  `id_b_terbaik` int(11) NOT NULL,
  `nama_p` varchar(22) NOT NULL,
  `alamat_p` varchar(252) NOT NULL,
  `bulan_p` varchar(22) NOT NULL,
  `gambar` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b_terbaik`
--

INSERT INTO `b_terbaik` (`id_b_terbaik`, `nama_p`, `alamat_p`, `bulan_p`, `gambar`) VALUES
(3, 'customer', 'Lumajang, Tempeh, Jl. Mangga no. 02', 'November', 0x68656d372e706e67),
(4, 'Tumir', 'Lumajang, Lumajang, Kepuharjo, Jl. Manggo no. 02', 'Desember', 0x68656d2e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `data_bahan`
--

CREATE TABLE `data_bahan` (
  `id_bahan` int(11) NOT NULL,
  `nama` varchar(22) NOT NULL,
  `warna` varchar(22) NOT NULL,
  `stok` int(22) NOT NULL,
  `harga` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_bahan`
--

INSERT INTO `data_bahan` (`id_bahan`, `nama`, `warna`, `stok`, `harga`) VALUES
(22, 'Jeans', 'Biru', 4, 60000),
(23, 'Katun', 'Coklat', 3, 30000),
(24, 'Katun', 'Merah', 4, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `nama` varchar(22) NOT NULL,
  `no_hp` varchar(22) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_pesanan` enum('baju','celana') NOT NULL,
  `model_pesanan` varchar(22) NOT NULL,
  `id_bahan` int(11) NOT NULL,
  `ukuran` enum('S','M','L','XL','XXL') NOT NULL,
  `banyak_pesanan` int(11) NOT NULL,
  `tanggal_pesanan` date NOT NULL,
  `bank` enum('BCA','MANDIRI','BRI','BNI') NOT NULL,
  `nama_rekening` varchar(22) NOT NULL,
  `no_rekening` varchar(22) NOT NULL,
  `total_harga` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `nama`, `no_hp`, `alamat`, `jenis_pesanan`, `model_pesanan`, `id_bahan`, `ukuran`, `banyak_pesanan`, `tanggal_pesanan`, `bank`, `nama_rekening`, `no_rekening`, `total_harga`) VALUES
(42, 'customer', '087654345652', 'Lumajang, Tempeh, Jl. Mangga no. 02', 'baju', 'Hem', 24, 'L', 1, '2017-11-15', 'BCA', 'Customer Ahmad', '123-98769873-32', 95000),
(43, 'ichang', '089765432123', 'Lumajang, Lumajang, Jl. Mangga no. 02', 'celana', 'Pensil', 22, 'L', 2, '2017-12-15', 'BCA', 'Ichang Beth', '453-76352-298392', 235000),
(44, 'customer', '087654345321', 'Lumajang, Tempeh, Jl. Mangga no. 02', 'baju', 'Hem', 23, 'L', 1, '2017-12-18', 'BCA', 'Customer Ahmad', '28736-2632736-12', 95000),
(45, 'fatir', '087654321', 'Lumajang, Lumajang, Jl. Mangga no. 02', 'baju', 'Hem', 23, 'S', 1, '2017-12-24', 'BCA', 'Tum tum', '8976-967-9226', 95000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(22) NOT NULL,
  `hak_akses` varchar(22) NOT NULL,
  `level` int(11) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `hak_akses`, `level`, `password`) VALUES
(1, 'penjahit', 'penjahit', 2, 'penjahit'),
(2, 'admin', 'admin', 1, 'admin'),
(3, 'customer', 'customer', 3, 'customer'),
(7, 'ichang', 'customer', 3, 'ichang'),
(8, 'syarif', 'customer', 3, 'syarif'),
(9, 'fatir', 'customer', 3, 'fatir'),
(10, 'rojak', 'customer', 3, 'rojak'),
(11, 'ayis', 'customer', 3, 'ayis'),
(12, 'gendut', 'customer', 3, 'gendut'),
(13, 'fikri', 'customer', 3, 'fikri');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `b_pembayaran`
--
ALTER TABLE `b_pembayaran`
  ADD PRIMARY KEY (`id_b_pembayaran`),
  ADD KEY `id_pesanan` (`id_pesanan`);

--
-- Indexes for table `b_terbaik`
--
ALTER TABLE `b_terbaik`
  ADD PRIMARY KEY (`id_b_terbaik`);

--
-- Indexes for table `data_bahan`
--
ALTER TABLE `data_bahan`
  ADD PRIMARY KEY (`id_bahan`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_bahan` (`id_bahan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `b_pembayaran`
--
ALTER TABLE `b_pembayaran`
  MODIFY `id_b_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `b_terbaik`
--
ALTER TABLE `b_terbaik`
  MODIFY `id_b_terbaik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_bahan`
--
ALTER TABLE `data_bahan`
  MODIFY `id_bahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `b_pembayaran`
--
ALTER TABLE `b_pembayaran`
  ADD CONSTRAINT `b_pembayaran_ibfk_1` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id_pesanan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`id_bahan`) REFERENCES `data_bahan` (`id_bahan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
