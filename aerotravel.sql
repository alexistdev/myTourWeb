-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2021 at 04:42 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `status`) VALUES
(1, 'admin', '$2y$10$jj3StaGg/XQZ8TGzR4FbuuWu2y.Fs1AVAr5ZuCMElDQD.RoPAaNS6', 1);

-- --------------------------------------------------------

--
-- Table structure for table `destinasi`
--

CREATE TABLE `destinasi` (
  `id_destinasi` int(11) NOT NULL,
  `judul_destinasi` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar1` varchar(50) DEFAULT NULL,
  `gambar2` varchar(50) DEFAULT NULL,
  `gambar3` varchar(50) DEFAULT NULL,
  `gambar4` varchar(50) DEFAULT NULL,
  `gambar5` varchar(50) DEFAULT NULL,
  `like_destinasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destinasi`
--

INSERT INTO `destinasi` (`id_destinasi`, `judul_destinasi`, `deskripsi`, `gambar1`, `gambar2`, `gambar3`, `gambar4`, `gambar5`, `like_destinasi`) VALUES
(1, 'Pulau Pahawang', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'pahawang1.jpg', 'pahawang2.jpg', 'pahawang3.jpg', 'pahawang4.jpg', '', 15),
(2, 'Tegal Mas', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'tegalmas1.jpg', 'tegalmas2.jpg', 'tegalmas3.jpg', 'tegalmas4.jpg', 'tegalmas5.jpg', 25);

-- --------------------------------------------------------

--
-- Table structure for table `destinasi_like`
--

CREATE TABLE `destinasi_like` (
  `id_like` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_destinasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(5, 5, 'Alexsanderr Hendra Wijaya', '123123123', 'adadadada', '085602013002');

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `id_harga` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `harga_standar` int(11) NOT NULL,
  `harga_premium` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`id_harga`, `id_paket`, `keterangan`, `harga_standar`, `harga_premium`) VALUES
(1, 1, '1-5 Orang', 150000, NULL);

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
(3, 5, 0, 'ini testing judul', 'lorem ipssum', '8c8d357b5e872bbacd45197626bd5759', 1609353632, 1);

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
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_destinasi` int(11) NOT NULL,
  `type` int(11) NOT NULL COMMENT '1 = 1 day\r\n2 =  2 day',
  `waktu` varchar(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_destinasi`, `type`, `waktu`, `keterangan`) VALUES
(1, 1, 1, '08:00 - 09:00', 'Pembagian alat snorkling dan persiapan keberangktan'),
(2, 1, 1, '09:00 - 10:00', 'Perjalanan menuju Cukuh Bedil'),
(3, 1, 1, '09:45 - 11:15', 'Snorkling di Spot Cukuh Bedil'),
(4, 1, 1, '11:15 - 11:30', 'Perjalanan Menuju Pulau Pahawang Besar'),
(5, 1, 1, '11:30 - 13:00', 'ISHOMA di Pulau Pahawang Besar'),
(6, 1, 1, '13:00 - 13:15', 'Perjalanan menuju Spot Taman Nemo'),
(7, 1, 1, '13:15 - 14:00', 'Snorkling di spot Taman Nemo'),
(8, 1, 1, '14:00 - 14:15', 'perjalanan menuju Pulau Pahawang Kecil'),
(9, 1, 1, '14:15 - 15:15', 'Water Sport + bersantai (Foto-foto) di pulau Pahawang Kecil'),
(10, 1, 1, '15:15- 15:30', 'Perjalanan menuju pulau kelagian kecil'),
(11, 1, 1, '15:30:16:00', 'Bersantai di pulau kelagian kecil'),
(12, 1, 1, '16:00 : 16:30', 'Perjalanan pulang ke dermaga ketapang'),
(13, 1, 1, '16:30 - 17:00', 'Salin foto dan sayonara'),
(14, 2, 1, '07:00 - 08:00', 'Kedatangan Peserta'),
(15, 2, 1, '08:00 - 09:00', 'Briefiung dan Pembagian Alat'),
(16, 2, 1, '09:00 - 10:00', 'Perjalanan Menuju Pulau Tegal Mas'),
(17, 2, 1, '10:00 - 12:00', 'Hopping Island Tegal Mas ( Kepiting Resort, Lombok Mas , Lombok Laut, Dll. )'),
(18, 2, 1, '12:00 - 13:30', 'Isoma ( Free Time )'),
(19, 2, 1, '13:30 - 14:00', 'Snorkeling & Water Sport Tegal Mas'),
(20, 2, 1, '14:00 - 15:00', 'Menuju Pulau Mahitam / Pulau Kelagian'),
(21, 2, 1, '15:00 - 16:30', 'Snorkeling di Kelagian / Hopping Island Pulau Mahitam'),
(22, 2, 1, '16:30 - 17:00', 'Perjalanan Kembali ke Dermaga Ketapang');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `status` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `status`) VALUES
(1, 'Open', 1),
(2, 'Privat', 1);

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `tipe_paket` int(11) NOT NULL COMMENT '1= open\r\n2= private',
  `id_kategori` int(11) NOT NULL,
  `judul_paket` varchar(80) NOT NULL,
  `deksripsi` text NOT NULL,
  `status_paket` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `tipe_paket`, `id_kategori`, `judul_paket`, `deksripsi`, `status_paket`) VALUES
(1, 1, 1, '1 DAY PAHAWANG NEW NORMAL 2020', 'Paket Open Trip merupakan tipe paket ekonomis dimana berapapun peserta yang daftar bisa berangkat trip tanpa minimal kuota, akan tetapi dalam 1 perahu di isi 10-20 peserta bisa dari kelompok lain atau kelompok itu sendiri, Jadwal Open Trip mengikuti aturan menejemen atau kesepakatan Peserta Trip', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(128) NOT NULL,
  `status` int(11) NOT NULL,
  `token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `password`, `email`, `status`, `token`) VALUES
(5, '1bff10ca1e9743c39dc90a14fb165f6b6e9dcb4b', 'alexistdev@gmail.com', 1, 'dqMDQGgEwh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `destinasi`
--
ALTER TABLE `destinasi`
  ADD PRIMARY KEY (`id_destinasi`);

--
-- Indexes for table `destinasi_like`
--
ALTER TABLE `destinasi_like`
  ADD PRIMARY KEY (`id_like`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_destinasi` (`id_destinasi`);

--
-- Indexes for table `detail_user`
--
ALTER TABLE `detail_user`
  ADD PRIMARY KEY (`id_detail_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id_harga`),
  ADD KEY `harga_ibfk_1` (`id_paket`);

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
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `destinasi`
--
ALTER TABLE `destinasi`
  MODIFY `id_destinasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `destinasi_like`
--
ALTER TABLE `destinasi_like`
  MODIFY `id_like` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_user`
--
ALTER TABLE `detail_user`
  MODIFY `id_detail_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `harga`
--
ALTER TABLE `harga`
  MODIFY `id_harga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `destinasi_like`
--
ALTER TABLE `destinasi_like`
  ADD CONSTRAINT `destinasi_like_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `destinasi_like_ibfk_2` FOREIGN KEY (`id_destinasi`) REFERENCES `destinasi` (`id_destinasi`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `detail_user`
--
ALTER TABLE `detail_user`
  ADD CONSTRAINT `detail_user_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE;

--
-- Constraints for table `harga`
--
ALTER TABLE `harga`
  ADD CONSTRAINT `harga_ibfk_1` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`) ON DELETE CASCADE;

--
-- Constraints for table `inbox`
--
ALTER TABLE `inbox`
  ADD CONSTRAINT `inbox_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `paket`
--
ALTER TABLE `paket`
  ADD CONSTRAINT `paket_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
