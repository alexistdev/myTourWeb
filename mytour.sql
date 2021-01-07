-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2021 at 11:43 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mytour`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_user`
--

CREATE TABLE `detail_user` (
  `id_detail_user` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `no_ktp` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_telp` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_user`
--

INSERT INTO `detail_user` (`id_detail_user`, `id_user`, `nama_lengkap`, `no_ktp`, `alamat`, `no_telp`) VALUES
(5, 5, 'Alexsander Hendra Wijaya', NULL, NULL, '085602013002');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `id_inbox` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `is_adm` int(11) NOT NULL,
  `judul` varchar(80) NOT NULL,
  `pesan` text NOT NULL,
  `key_token` varchar(100) NOT NULL,
  `time` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`id_inbox`, `id_user`, `is_adm`, `judul`, `pesan`, `key_token`, `time`, `status`) VALUES
(3, 5, 0, 'ini testing judul', 'lorem ipssum', '8c8d357b5e872bbacd45197626bd5759', 1609353632, 2);

-- --------------------------------------------------------

--
-- Table structure for table `inboxbalas`
--

CREATE TABLE `inboxbalas` (
  `id_balas` int(11) NOT NULL,
  `is_admin` int(11) NOT NULL,
  `key_token` int(100) NOT NULL,
  `pesan` text NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inboxbalas`
--

INSERT INTO `inboxbalas` (`id_balas`, `is_admin`, `key_token`, `pesan`, `time`) VALUES
(1, 1, 8, 'adadadaaaaaaaaaaaaaaaaaaaaaaaa', 1609391729),
(2, 2, 8, 'Take me to your leader! Switzerland is small and neutral! We are more like Germany, ambitious and misunderstood!', 1609392886),
(3, 1, 8, 'cupcake yang kecil , dimana , dimana', 1609393384);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` int(11) NOT NULL COMMENT '1= admin\r\n2 = operator\r\n3 = user',
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `password`, `type`, `email`) VALUES
(5, '25f9e794323b453885f5181f1b624d0b', 3, 'alexistdev@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_user`
--
ALTER TABLE `detail_user`
  ADD PRIMARY KEY (`id_detail_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`id_inbox`),
  ADD KEY `inbox_ibfk_1` (`id_user`);

--
-- Indexes for table `inboxbalas`
--
ALTER TABLE `inboxbalas`
  ADD PRIMARY KEY (`id_balas`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_user`
--
ALTER TABLE `detail_user`
  MODIFY `id_detail_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `id_inbox` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inboxbalas`
--
ALTER TABLE `inboxbalas`
  MODIFY `id_balas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_user`
--
ALTER TABLE `detail_user`
  ADD CONSTRAINT `detail_user_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE;

--
-- Constraints for table `inbox`
--
ALTER TABLE `inbox`
  ADD CONSTRAINT `inbox_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
