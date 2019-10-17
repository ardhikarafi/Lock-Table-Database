-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2019 at 04:38 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas`
--

-- --------------------------------------------------------

--
-- Table structure for table `active_user`
--

CREATE TABLE `active_user` (
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id` int(10) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `nim` varchar(20) DEFAULT NULL,
  `jurusan` varchar(30) DEFAULT NULL,
  `kelamin` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `name`, `nim`, `jurusan`, `kelamin`) VALUES
(1, 'Rafi', 'A11.2016.09841', 'Teknik Informatika', 'Laki-laki'),
(2, 'Aang', 'A11', 'Komputer', 'Laki-laki'),
(4, 'Ardhika', 'A11.2016.09841', 'teknik informatika', 'Laki-laki'),
(5, 'Bahtiar', 'A11.2016.09840', 'komputer', 'Laki-laki'),
(6, 'Rafiii Pratama ok', 'a1', 'ok', 'ok');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `active_user`
--
ALTER TABLE `active_user`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
