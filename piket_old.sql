-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2019 at 01:17 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

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
  `update_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
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
(12, '2007812229', 'Bagus Fernata', 'On Call', '2019-11-22', '2019-11-22', '2019-11-22 05:01:26', 'maker', '2019-11-22 05:18:13', 'maker', '2019-11-22', '0', NULL, NULL),
(13, '3004841993', 'Lamhotma Parulian Siboro', 'On Call', '2019-11-22', '2019-11-22', '2019-11-22 05:15:43', 'maker', '2019-11-22 05:20:19', 'maker', NULL, '0', 'date', NULL),
(14, '0001721855', 'Teguh Yuwono', 'standby', '2019-11-05', '2019-11-08', '2019-11-22 06:07:48', 'maker', NULL, NULL, '2019-11-22', '0', 'realisasi', NULL),
(16, '0000511805', 'Budihardjo', 'standby', '2019-11-18', '2019-11-22', '2019-11-22 06:22:36', 'maker', NULL, NULL, '2019-11-22', '0', 'realisasi', NULL),
(17, '2007812229', 'Bagus Fernata', 'standby', '2019-11-19', '2019-11-23', '2019-11-22 08:41:45', 'maker', NULL, NULL, NULL, '0', 'jadwal', NULL),
(18, '0000511805', 'Budihardjo', 'oncall', '2019-11-22', '2019-11-23', '2019-11-22 08:58:32', 'maker', NULL, NULL, NULL, '0', 'jadwal', NULL);

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
(54, '2019-12-25 00:00:00', 'Libur Nasional', '2020-01-01 00:00:00', NULL);

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
(6, 'asep.herlambang', NULL, 'Maker', NULL, NULL, 'LDAP', 1);

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
-- Indexes for table `periode`
--
ALTER TABLE `periode`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `periode`
--
ALTER TABLE `periode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
