-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 02, 2019 at 07:37 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `piket`
--

-- --------------------------------------------------------

--
-- Table structure for table `hirarki`
--

CREATE TABLE `hirarki` (
  `id` int(11) NOT NULL,
  `username_maker` varchar(100) NOT NULL,
  `username_approver` varchar(100) NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `satker` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `nipg` varchar(45) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `status_piket` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `create_by` varchar(255) DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `modified_by` varchar(255) DEFAULT NULL,
  `date_approve` date DEFAULT NULL,
  `status_approval` varchar(255) DEFAULT 'pending',
  `tipe` varchar(255) DEFAULT NULL,
  `approve_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `nipg`, `nama`, `status_piket`, `start_date`, `end_date`, `create_at`, `create_by`, `modified_at`, `modified_by`, `date_approve`, `status_approval`, `tipe`, `approve_at`) VALUES
(34, '2007812229', 'Bagus Fernata', '1', '2019-12-01', '2019-12-01', '2019-11-27 10:17:15', 'maker', NULL, NULL, NULL, '1', 'jadwal', NULL),
(35, '2007812229', 'Bagus Fernata', '1', '2019-12-02', '2019-12-02', '2019-11-27 10:17:15', 'maker', NULL, NULL, NULL, '0', 'jadwal', NULL),
(36, '2007812229', 'Bagus Fernata', '2', '2019-12-03', '2019-12-03', '2019-11-27 10:17:15', 'maker', NULL, NULL, NULL, '0', 'jadwal', NULL),
(37, '2007812229', 'Bagus Fernata', '2', '2019-12-05', '2019-12-05', '2019-11-27 10:17:15', 'maker', NULL, NULL, NULL, '0', 'jadwal', NULL),
(38, '2007812229', 'Bagus Fernata', '1', '2019-12-07', '2019-12-07', '2019-11-27 10:17:15', 'maker', NULL, NULL, NULL, '0', 'jadwal', NULL),
(39, '2007812229', 'Bagus Fernata', '2', '2019-12-09', '2019-12-09', '2019-11-27 10:17:15', 'maker', NULL, NULL, NULL, '0', 'jadwal', NULL),
(40, '0010872599', 'Eko Yunianto', '2', '2019-12-01', '2019-12-01', '2019-11-27 10:17:15', 'maker', NULL, NULL, NULL, '0', 'jadwal', NULL),
(41, '0010872599', 'Eko Yunianto', '2', '2019-12-02', '2019-12-02', '2019-11-27 10:17:15', 'maker', NULL, NULL, NULL, '0', 'jadwal', NULL),
(42, '0010872599', 'Eko Yunianto', '1', '2019-12-03', '2019-12-03', '2019-11-27 10:17:15', 'maker', NULL, NULL, NULL, '0', 'jadwal', NULL),
(43, '0010872599', 'Eko Yunianto', '1', '2019-12-04', '2019-12-04', '2019-11-27 10:17:15', 'maker', NULL, NULL, NULL, '0', 'jadwal', NULL),
(44, '0010872599', 'Eko Yunianto', '1', '2019-12-05', '2019-12-05', '2019-11-27 10:17:15', 'maker', NULL, NULL, NULL, '0', 'jadwal', NULL),
(45, '0010872599', 'Eko Yunianto', '1', '2019-12-06', '2019-12-06', '2019-11-27 10:17:15', 'maker', NULL, NULL, NULL, '0', 'jadwal', NULL),
(46, '0010872599', 'Eko Yunianto', '1', '2019-12-08', '2019-12-08', '2019-11-27 10:17:15', 'maker', NULL, NULL, NULL, '0', 'jadwal', NULL),
(47, '2007812229', 'Bagus Fernata', '2', '2019-12-10', '2019-12-10', '2019-11-27 10:34:21', 'maker', NULL, NULL, NULL, '0', 'jadwal', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pekerja`
--

CREATE TABLE `pekerja` (
  `id` int(11) NOT NULL,
  `nipg` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerja`
--

INSERT INTO `pekerja` (`id`, `nipg`, `nama`) VALUES
(1, '10', 'wjk'),
(2, '20', 'lsjklsj'),
(3, '30', 'djwjrjw');

-- --------------------------------------------------------

--
-- Table structure for table `periode`
--

CREATE TABLE `periode` (
  `id` int(11) NOT NULL,
  `start_date` datetime DEFAULT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `periode`
--

INSERT INTO `periode` (`id`, `start_date`, `ket`, `end_date`, `active`) VALUES
(68, '2019-12-01 00:00:00', 'test123', '2019-12-10 00:00:00', 1),
(69, '2019-11-01 00:00:00', 'test1231231', '2019-11-08 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `realisasi`
--

CREATE TABLE `realisasi` (
  `id` int(11) NOT NULL,
  `nipg` varchar(45) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `sk` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `create_by` varchar(45) DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `modified_by` varchar(45) DEFAULT NULL,
  `status_piket` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `date_login` datetime DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `koneksi` varchar(255) DEFAULT NULL,
  `active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `date_login`, `nama`, `koneksi`, `active`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', NULL, 'Admin PGN', 'Manual', 1),
(2, 'maker', '81dc9bdb52d04dc20036dbd8313ed055', 'maker', NULL, 'Maker PGN', 'Manual', 1),
(3, 'approver', 'c20ad4d76fe97759aa27a0c99bff6710', 'approver', NULL, 'Approver PGN', 'Manual', 1),
(4, 'bagus.fernata', NULL, 'admin', NULL, NULL, 'LDAP', 1),
(5, 'lamhotma.siboro', NULL, 'Maker', NULL, NULL, 'LDAP', 1),
(6, 'asep.herlambang', NULL, 'Maker', NULL, NULL, 'LDAP', 1),
(11, 'kaka', NULL, 'Admin', NULL, NULL, '', 1),
(12, 'kaka', NULL, 'Admin', NULL, NULL, '', 1),
(13, 'kaka2', NULL, 'Admin', NULL, NULL, 'Manual', 1),
(14, 'deded', NULL, 'Admin', NULL, NULL, 'Manual', 1),
(15, 'kakak', NULL, 'Admin', NULL, NULL, 'Manual', 1),
(17, 'kelas', NULL, 'Admin', NULL, NULL, 'Manual', 1),
(18, 'jajajjas', NULL, 'Admin', NULL, NULL, 'Manual', 1),
(19, 'badang', NULL, 'Admin', NULL, NULL, 'Manual', 1),
(20, 'tets1', NULL, 'Admin', NULL, NULL, 'Manual', 1),
(21, 'test2', NULL, 'Admin', NULL, NULL, 'Manual', 1),
(22, 'abdi', '1234', 'Maker', NULL, NULL, 'Manual', 1),
(23, 'adbi', '1234', 'Maker', NULL, NULL, 'Manual', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hirarki`
--
ALTER TABLE `hirarki`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pekerja`
--
ALTER TABLE `pekerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `realisasi`
--
ALTER TABLE `realisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `periode`
--
ALTER TABLE `periode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `realisasi`
--
ALTER TABLE `realisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
