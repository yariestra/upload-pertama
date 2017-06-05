-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2017 at 06:50 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sinauweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `id_kategori`, `penulis`, `judul`, `tanggal`, `isi`, `gambar`) VALUES
(21, 3, '', 'Michael Jackson masih hidup', '2017-01-17', 'ternyata mj still alive', '5382696_20130504020226.jpg'),
(22, 0, '', 'haha hihi', '2017-01-17', 'ss', ''),
(24, 0, '', 'smir', '2017-01-17', 'aa', ''),
(26, 2, '', 'Kapak Merah beraksi', '2017-01-17', 'dsa', '5946115_20131005115642 copy.jpg'),
(27, 0, '', 'hehe', '2017-01-17', 'das', ''),
(28, 1, '', 'cara jalan pagi', '2017-01-17', 'mulai lah kesehatan', 'dota-2-queen-of-paindeviantart--more-like-dota2-akasha-the-queen-of-pain--wallpaper-akkc4bxp.png'),
(29, 1, '', 'liverpool juara EPL', '2017-01-19', 'finally', '1414256_20140524101618.jpg'),
(30, 0, '', '29', '2017-01-19', '2', 'h'),
(31, 0, '', '28', '2017-01-19', '1', 'd'),
(32, 0, '', '28', '2017-01-19', '1', 'd'),
(33, 0, '', '29', '2017-01-19', '2', 'h'),
(34, 2, '', 'q', '2017-01-21', '', ''),
(35, 5, '', 'qa', '2017-01-21', 's', ''),
(36, 3, 'admin@gmail.com', 'xz', '2017-01-21', '', ''),
(37, 2, 'aria@gmail.com', 'hahah', '2017-01-21', 'dsaas', 'mugrobert .jpg');

-- --------------------------------------------------------

--
-- Table structure for table `instansi`
--

CREATE TABLE `instansi` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instansi`
--

INSERT INTO `instansi` (`id`, `nama`, `deskripsi`) VALUES
(1, 'PT cahayacdc', 'perusahaan bergerak bidang furniture'),
(2, 'PT MAju', 'perusahaan bergerak bidang kargo');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `username`, `password`, `nama`) VALUES
(1, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'yuda'),
(2, 'aria@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'aria');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `instansi`
--
ALTER TABLE `instansi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
