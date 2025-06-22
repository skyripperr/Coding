-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2025 at 02:04 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penmaru`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_siswa`
--

CREATE TABLE `calon_siswa` (
  `Id` int(4) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Jenis_Kelamin` varchar(10) NOT NULL,
  `Agama` varchar(15) NOT NULL,
  `Sekolah_Asal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `calon_siswa`
--

INSERT INTO `calon_siswa` (`Id`, `Nama`, `Alamat`, `Jenis_Kelamin`, `Agama`, `Sekolah_Asal`) VALUES
(10, 'Septiandi', 'Nagoya', 'Laki-laki', 'Budha', 'SMP Maitreyawira'),
(11, 'Kevin', 'Tanjung Riau', 'Laki-laki', 'Kristen', 'SMP Advent'),
(12, 'William', 'Lubuk Baja', 'Laki-laki', 'Budha', 'SMP Advent'),
(13, 'Maya', 'Batam Centre', 'Perempuan', 'Islam', 'SMPN 005 Batam'),
(14, 'Steven', 'Tiban', 'Laki-laki', 'Konghucu', 'SMP Avava'),
(15, 'Ave', 'Bengkong', 'Perempuan', 'Hindu', 'SMP Kartini'),
(16, 'Kevin Edward Wuysang', 'Dubai     ', 'laki-laki', 'Kristen', 'SMP Advent');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_siswa`
--
ALTER TABLE `calon_siswa`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon_siswa`
--
ALTER TABLE `calon_siswa`
  MODIFY `Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
