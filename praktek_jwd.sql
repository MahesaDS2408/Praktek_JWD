-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2023 at 07:39 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `praktek_jwd`
--

-- --------------------------------------------------------

--
-- Table structure for table `ajuan_beasiswa`
--

CREATE TABLE `ajuan_beasiswa` (
  `id_ajuan_beasiswa` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `file_ajuan_beasiswa` varchar(190) NOT NULL,
  `status_ajuan` enum('verifikasi','belum di verivikasi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `beasiswa`
--

CREATE TABLE `beasiswa` (
  `id_beasiswa` int(11) NOT NULL,
  `value_beasiswa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beasiswa`
--

INSERT INTO `beasiswa` (`id_beasiswa`, `value_beasiswa`) VALUES
(1, 'akademik'),
(2, 'non akademik'),
(3, 'bank indonesia'),
(4, 'SMART scholarship'),
(5, 'Kartu Indonesia Pintar'),
(6, 'DJarum');

-- --------------------------------------------------------

--
-- Table structure for table `ipk`
--

CREATE TABLE `ipk` (
  `id_ipk` int(11) NOT NULL,
  `id_semester` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `ipk` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ipk`
--

INSERT INTO `ipk` (`id_ipk`, `id_semester`, `id_mahasiswa`, `ipk`) VALUES
(2, 1, 1, '4,45');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nama_mahasiswa` varchar(100) NOT NULL,
  `email_mahasiswa` varchar(165) NOT NULL,
  `no_hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nama_mahasiswa`, `email_mahasiswa`, `no_hp`) VALUES
(1, 'mahesa darma satria', 'mahesadarmasatria@gmail.com', '088274090609'),
(2, 'intan ramadani', 'intanramadani@gmail.com', '088274090610'),
(3, 'kejora dara lestari', 'kejoradaralestari@gmail.com', '088274090611'),
(4, 'putri ayu wulandari', 'putriayuwulandari@gmail.com', '088274090612');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id_semester` int(11) NOT NULL,
  `value_semester` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id_semester`, `value_semester`) VALUES
(1, 'semester 1'),
(2, 'semester 2'),
(3, 'semester 3'),
(4, 'semester 4'),
(5, 'semester 5'),
(6, 'semester 6'),
(7, 'semester 7'),
(8, 'semester 8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ajuan_beasiswa`
--
ALTER TABLE `ajuan_beasiswa`
  ADD PRIMARY KEY (`id_ajuan_beasiswa`);

--
-- Indexes for table `beasiswa`
--
ALTER TABLE `beasiswa`
  ADD PRIMARY KEY (`id_beasiswa`);

--
-- Indexes for table `ipk`
--
ALTER TABLE `ipk`
  ADD PRIMARY KEY (`id_ipk`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id_semester`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ajuan_beasiswa`
--
ALTER TABLE `ajuan_beasiswa`
  MODIFY `id_ajuan_beasiswa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `beasiswa`
--
ALTER TABLE `beasiswa`
  MODIFY `id_beasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ipk`
--
ALTER TABLE `ipk`
  MODIFY `id_ipk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id_semester` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
