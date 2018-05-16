-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2018 at 06:50 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id_album` int(11) NOT NULL,
  `nama_album` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id_album`, `nama_album`, `deskripsi`) VALUES
(0, 'Uncategorised', 'belum masuk kategori manapun'),
(1, 'Kelas', 'Kegiatan sehari-hari dikelas'),
(2, 'Nongkrong', 'Kegiatan nongkrong bareng-bareng'),
(3, 'Arisan', 'Foto saat arisan bersama'),
(4, 'Reuni', 'Foto-foto reuni di monas');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id_foto` int(11) NOT NULL,
  `id_album` int(11) NOT NULL,
  `nama_foto` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `deskripsi` text NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id_foto`, `id_album`, `nama_foto`, `tgl`, `deskripsi`, `link`) VALUES
(19, 0, '', '0000-00-00', '', '0_1525955220.jpg'),
(20, 0, '', '0000-00-00', '', '0_1525955225.jpg'),
(21, 0, '', '0000-00-00', '', '0_1525955232.jpg'),
(23, 3, '', '0000-00-00', '', '0_1525958229.jpg'),
(24, 0, '', '0000-00-00', '', '0_1525958236.jpg'),
(25, 0, '', '0000-00-00', '', '0_1525958245.jpg'),
(26, 2, '', '0000-00-00', '', '0_1525958253.jpg'),
(27, 2, '', '0000-00-00', '', '0_1525958267.jpg'),
(28, 0, '', '0000-00-00', '', '0_1525958447.jpg'),
(29, 1, '', '0000-00-00', '', '0_1525958452.jpg'),
(30, 4, '', '0000-00-00', '', '0_1525958457.png'),
(31, 3, '', '0000-00-00', '', '0_1525958463.png'),
(32, 0, '', '0000-00-00', '', '0_1525958487.jpg'),
(33, 0, '', '0000-00-00', '', '0_1525958496.jpg'),
(34, 0, '', '0000-00-00', '', '0_1525958625.jpg'),
(35, 0, '', '0000-00-00', '', '0_1525958630.png'),
(36, 0, '', '0000-00-00', '', '0_1525958658.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `level`) VALUES
(1, 'admin', 'admin@admin.com', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id_album`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `id_album` (`id_album`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id_album` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `foto_ibfk_1` FOREIGN KEY (`id_album`) REFERENCES `album` (`id_album`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
