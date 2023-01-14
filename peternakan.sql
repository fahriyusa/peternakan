-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2023 at 04:05 AM
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
-- Database: `peternakan`
--

-- --------------------------------------------------------

--
-- Table structure for table `ambil_pakan`
--

CREATE TABLE `ambil_pakan` (
  `id` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ambil_pakan`
--

INSERT INTO `ambil_pakan` (`id`, `id_anggota`, `tanggal`, `jumlah`) VALUES
(1, 1020, '2023-01-13', 9000),
(2, 1003, '2023-01-13', 400);

-- --------------------------------------------------------

--
-- Table structure for table `ambil_telur`
--

CREATE TABLE `ambil_telur` (
  `id` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `id_telur` int(11) NOT NULL,
  `tanggal_ambil` date NOT NULL,
  `jumlah` int(50) NOT NULL,
  `harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ambil_telur`
--

INSERT INTO `ambil_telur` (`id`, `id_anggota`, `id_telur`, `tanggal_ambil`, `jumlah`, `harga`) VALUES
(1011, 1022, 7, '2023-01-05', 4, 1000),
(1021, 1014, 6, '2023-01-11', 3, 70000),
(1023, 1022, 6, '2023-01-13', 9, 7000);

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama_anggota` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `tanggal_gabung` date NOT NULL,
  `status` enum('a','na') NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_anggota`, `username`, `password`, `tanggal_gabung`, `status`, `jabatan`) VALUES
(1003, 'rehan', 'admin', '$2y$10$E6/53qralzgSbghyvau6huCheJRolupn7RlQsfeH9grk.e/8xjHCS', '2023-01-26', 'a', 'Anggota'),
(1014, 'Irfan', 'irfan', '202cb962ac59075b964b07152d234b70', '2023-01-09', 'a', 'Anggota'),
(1020, 'ipin', 'ipin', '$2y$10$Ft8TZf/i212foU51vBjwLOuw0dRn.4A0Wj4BQ7Z2jY3', '2023-01-01', 'a', 'Anggota'),
(1021, 'p', 'admin', '$2y$10$pe9h4CBE0snr6PmsPavokOvPW0vVse9ho7cbdoKOHg8qFJ2grgFhq', '2023-01-10', 'a', 'petugas'),
(1022, 'Rehann', 'rhn', '1f32aa4c9a1d2ea010adcf2348166a04', '2023-01-11', 'a', 'Anggota'),
(1023, 'farhan kebab', 'frhan', '6debcca18d734dd2eca7f8504b0139b7', '2023-01-11', 'a', 'Anggota'),
(1024, 'Raihan', 'R', '$2y$10$e1IX6k7m8og255cY6ILuz.aknBcN/vEg910mO4ztEJrvT7mTLx4Ka', '2023-01-13', 'a', 'ANGGOTA');

-- --------------------------------------------------------

--
-- Table structure for table `data_pakan`
--

CREATE TABLE `data_pakan` (
  `id` int(11) NOT NULL,
  `id_team` int(11) NOT NULL,
  `tgl_produksi_pakan` date NOT NULL,
  `jumlah` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pakan`
--

INSERT INTO `data_pakan` (`id`, `id_team`, `tgl_produksi_pakan`, `jumlah`) VALUES
(45, 1, '2023-01-14', 122);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_team` int(11) NOT NULL,
  `status` enum('a','na') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `panen`
--

CREATE TABLE `panen` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `buyer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `panen`
--

INSERT INTO `panen` (`id`, `tanggal`, `id_anggota`, `jumlah`, `harga`, `total`, `buyer`) VALUES
(1, '2023-01-13', 1003, 67, 56, 0, 'ii');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id_team` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `nama_team` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id_team`, `id_anggota`, `nama_team`) VALUES
(1, 1001, 'qqq'),
(2, 1003, 'qqq'),
(3, 1003, 'RRQ'),
(4, 1014, 'RRQ'),
(5, 1014, 'NIC'),
(6, 1020, 'NIC');

-- --------------------------------------------------------

--
-- Table structure for table `telur`
--

CREATE TABLE `telur` (
  `id_telur` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `sumber` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `telur`
--

INSERT INTO `telur` (`id_telur`, `tanggal`, `sumber`) VALUES
(14, '2023-01-13', 'RR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ambil_pakan`
--
ALTER TABLE `ambil_pakan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ambil_telur`
--
ALTER TABLE `ambil_telur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `data_pakan`
--
ALTER TABLE `data_pakan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `panen`
--
ALTER TABLE `panen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id_team`);

--
-- Indexes for table `telur`
--
ALTER TABLE `telur`
  ADD PRIMARY KEY (`id_telur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ambil_pakan`
--
ALTER TABLE `ambil_pakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ambil_telur`
--
ALTER TABLE `ambil_telur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1024;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1025;

--
-- AUTO_INCREMENT for table `data_pakan`
--
ALTER TABLE `data_pakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `panen`
--
ALTER TABLE `panen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `telur`
--
ALTER TABLE `telur`
  MODIFY `id_telur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
