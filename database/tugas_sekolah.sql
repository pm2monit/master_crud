-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 18, 2020 at 10:43 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_loya`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`, `foto`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin 1', 'profil2.jpg'),
(2, 'admin2', '21232f297a57a5a743894a0e4a801fc3', 'Admin 2 ', 'profil2.jpg'),
(3, 'finance', '21232f297a57a5a743894a0e4a801fc3', 'Finance', 'profil2.jpg'),
(4, 'purchasing', '21232f297a57a5a743894a0e4a801fc3', 'Purchasing', 'profil2.jpg'),
(5, 'production', '21232f297a57a5a743894a0e4a801fc3', 'Production', 'profil2.jpg'),
(6, 'inventory', '21232f297a57a5a743894a0e4a801fc3', 'Inventory', 'profil2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `finance`
--

CREATE TABLE `finance` (
  `id` int(11) NOT NULL,
  `date_insert` date NOT NULL,
  `date_update` date NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `debit` int(30) NOT NULL,
  `kredit` int(30) NOT NULL,
  `saldo` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `finance`
--

INSERT INTO `finance` (`id`, `date_insert`, `date_update`, `keterangan`, `debit`, `kredit`, `saldo`) VALUES
(1, '2020-04-08', '2020-04-23', 'Pendapatan Penjualan Baju', 150000, 0, 150000),
(2, '2020-04-08', '2020-04-23', 'Pendapatan Penjualan Baju', 0, 150000, 150000);

-- --------------------------------------------------------

--
-- Table structure for table `kelamin`
--

CREATE TABLE `kelamin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelamin`
--

INSERT INTO `kelamin` (`id`, `nama`) VALUES
(1, 'Laki laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id`, `nama`) VALUES
(1, 'Malang'),
(3, 'Blitar'),
(4, 'Tulungagung'),
(17, 'Jakarta'),
(21, 'Surabaya'),
(22, 'Paris');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` varchar(255) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `id_kota` int(11) DEFAULT NULL,
  `id_kelamin` int(1) DEFAULT NULL,
  `id_posisi` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `telp`, `id_kota`, `id_kelamin`, `id_posisi`, `status`) VALUES
('10', 'Antony Febriansyah Hartono', '082199568540', 17, 1, 1, 1),
('11', 'Hafizh Asrofil Al Banna', '087859615271', 17, 1, 1, 1),
('12', 'Faiq Fajrullah', '085736333728', 1, 1, 2, 1),
('3', 'Mustofa Halim', '081330493322', 1, 1, 3, 1),
('4', 'Dody Ahmad Kusuma Jaya', '083854520015', 17, 1, 2, 1),
('5', 'Mokhammad Choirul Ikhsan', '085749535400', 3, 1, 2, 1),
('7', 'Achmad Chadil Auwfar', '08984119934', 2, 1, 1, 1),
('8', 'Rizal Ferdian', '087777284179', 1, 1, 3, 1),
('9', 'Redika Angga Pratama', '083834657395', 1, 1, 3, 1),
('1', 'Tolkha Hasan', '081233072122', 1, 1, 4, 1),
('2', 'Wawan Dwi Prasetyo', '085745966707', 4, 1, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posisi`
--

CREATE TABLE `posisi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posisi`
--

INSERT INTO `posisi` (`id`, `nama`) VALUES
(1, 'IT'),
(2, 'HRD'),
(3, 'Finance'),
(4, 'Production'),
(7, 'Purchasing'),
(8, 'Inventory');

-- --------------------------------------------------------

--
-- Table structure for table `production`
--

CREATE TABLE `production` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `deskripsi_produk` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL,
  `date_update` date NOT NULL,
  `date_insert` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `production`
--

INSERT INTO `production` (`id`, `nama_produk`, `deskripsi_produk`, `stok`, `date_update`, `date_insert`) VALUES
(1, 'Baju', 'Baju Kemeja', 1000, '2020-04-08', '2020-04-08'),
(2, 'Baju', 'Baju Kaos Oblong', 1000, '2020-04-08', '2020-04-08'),
(3, 'Makanan Ringan', 'Keripik Kentang', 1000, '2020-04-08', '2020-04-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finance`
--
ALTER TABLE `finance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelamin`
--
ALTER TABLE `kelamin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posisi`
--
ALTER TABLE `posisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `production`
--
ALTER TABLE `production`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `finance`
--
ALTER TABLE `finance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `posisi`
--
ALTER TABLE `posisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `production`
--
ALTER TABLE `production`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
