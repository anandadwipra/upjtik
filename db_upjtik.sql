-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 28, 2019 at 07:14 PM
-- Server version: 10.0.38-MariaDB-0ubuntu0.16.04.1
-- PHP Version: 7.3.12-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_upjtik`
--
CREATE DATABASE IF NOT EXISTS `db_upjtik` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_upjtik`;

-- --------------------------------------------------------

--
-- Table structure for table `upjtik`
--

CREATE TABLE `upjtik` (
  `no` int(10) NOT NULL,
  `NamaAP` varchar(255) DEFAULT NULL,
  `Identity` varchar(255) DEFAULT NULL,
  `SSID` varchar(255) DEFAULT NULL,
  `Stx` int(3) DEFAULT NULL,
  `Srx` int(3) DEFAULT NULL,
  `Petugas` varchar(255) DEFAULT NULL,
  `Tanggal` date DEFAULT NULL,
  `Sewa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upjtik`
--

INSERT INTO `upjtik` (`no`, `NamaAP`, `Identity`, `SSID`, `Stx`, `Srx`, `Petugas`, `Tanggal`, `Sewa`) VALUES
(1, 'test', 'test2', 'test3', NULL, NULL, NULL, NULL, 0),
(2, 'AP SMK Barat', 'SMKGedangan', 'Smkn1Gedangan', 64, 68, 'Ahmad Nur Rizki', '2019-12-03', 100000),
(3, 'AP SMK Barat', 'SMKGedangan', 'Smkn1Gedangan', 64, 68, 'Ahmad Nur Rizki', '2019-12-03', 100000),
(4, 'AP SMK Barat', 'SMKGedangan', 'Smkn1Gedangan', 64, 68, 'Ahmad Nur Rizki', '2019-12-03', 100000),
(5, 'AP SMK Timur', 'Malang', 'Gedangan', 33, 52, 'test', '2019-12-12', 100000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `upjtik`
--
ALTER TABLE `upjtik`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `upjtik`
--
ALTER TABLE `upjtik`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
