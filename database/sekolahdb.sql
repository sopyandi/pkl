-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 07:56 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolahdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `tgl_publis` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `img` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `tgl_publis`, `deskripsi`, `id_kategori`, `img`) VALUES
(1, 'Ternyata Kehadiran Suti Sutarmi Menjadi Sorotan', 'senin, 20 juli 2022', 'selamanya sayang selama nya', 1, 'b1.jpg'),
(2, 'Hanya rindu padamu sayang tak lebih hanya rindu padamu', 'senin, 20 juli 2022', 'ternyata hari di bunuh koirban', 2, 'b7.jpg'),
(3, 'Sayang Abi RIndu Pisan Sayang Ayang Nuju naon ', 'senin, 20 juli 2022', 'wsedsd', 2, 'b2.jpg'),
(4, 'selama nyawa ini bergetar aku sayang kamu ', 'senin, 20 juli 2022', 'selalu merindu ', 3, 'b5.jpg'),
(5, 'Hanya rindu padamu sayang tak lebih hanya rindu padamu', 'senin, 20 juli 2022', 'selalu belajar', 3, 'b3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'berita utama'),
(2, 'berita kemenag'),
(3, 'berita luar ');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nik` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jk` enum('l','p','','') NOT NULL,
  `kelas` enum('x','xi','xii','') NOT NULL,
  `poto` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nik`, `nama`, `jk`, `kelas`, `poto`) VALUES
(12121, 'dina larima', 'p', 'xii', 'dina.jpg'),
(12122, 'hardi ferdian', 'l', 'xii', 'hardi.jpg'),
(12123, 'pani rahma', 'p', 'xii', 'pani.jpg'),
(12124, 'randi', 'l', 'xii', 'randi.jpg'),
(12125, 'rina arganahraini', 'p', 'xii', 'rina.jpg'),
(12126, 'rian sopyandi', 'l', 'xii', 'minions.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
