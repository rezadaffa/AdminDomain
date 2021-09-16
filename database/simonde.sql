-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2021 at 09:35 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simonde`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `fasilitas` varchar(50) NOT NULL,
  `domian` varchar(100) NOT NULL,
  `artikel` int(50) NOT NULL,
  `update` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `kecamatan`, `desa`, `fasilitas`, `domian`, `artikel`, `update`) VALUES
(1, 'Ajibarang', 'Ajibarang Kulon', 'Bukan', 'ajibarangkulon.desa.id', 0, '2011-09-01'),
(2, 'Ajibarang', 'Ajibarang Wetan', 'Bukan', 'ajibarangwetan.desa.id', 12, '2020-09-15'),
(3, 'Ajibarang', 'Banjarsari', 'Ya', 'banjarsari-ajb.desa.id', 0, '2011-09-01'),
(4, 'Ajibarang', 'Ciberung', 'Ya', 'ciberung.desa.id ', 5, '2017-12-05'),
(5, 'Ajibarang', 'Darmakradenan', 'Bukan', 'darmakradenan.desa.id', 12, '2020-11-15'),
(6, 'Ajibarang', 'Jingkang', 'Ya', 'jingkang.desa.id', 7, '2020-11-26'),
(7, 'Ajibarang', 'Kalibenda', 'Ya', 'kalibenda.desa.id', 3, '2017-12-05'),
(8, 'Ajibarang', 'Karangbawang', 'Ya', 'karangbawang.desa.id', 2, '2017-12-07'),
(9, 'Ajibarang', 'Kracak', 'Ya', 'kracak.desa.id', 2, '12-01-2012'),
(10, 'Sokaraja', 'Sokaraja Kidul', 'Ya', 'sokaraja-kidul.com', 14, '12-30-2001'),
(11, 'Sokaraja', 'Sokaraja Tengah', 'Ya', 'sokaraja-tengah.com', 15, '19-02-2018'),
(12, 'halo', 'test', 'ya', 'test.com', 49, '12-30-2001');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepone` varchar(15) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `telepone`, `password`) VALUES
(1, 'Reza Daffa', 'reza@gmail.com', '083863590106', 'master123'),
(3, 'Bayu Prihandoko', 'bayu@gmail.com', '08214832948', 'dc2f4ef676263fe9dde73a9ae');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
