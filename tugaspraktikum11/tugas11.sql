-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2020 at 10:40 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas11`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `no_isbn` varchar(13) NOT NULL,
  `tahun_terbit` int(4) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `penerbit` varchar(30) NOT NULL,
  `stok` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`no_isbn`, `tahun_terbit`, `judul`, `penerbit`, `stok`) VALUES
('9786020331522', 2015, 'Teenlit:Jingga dan Senja[Cover', 'Gramedia Pustaka Utama', 5),
('9786020639512', 2020, 'Selena', 'Gramedia Pustaka Utama', 10),
('9786022917199', 2020, 'Lockdown 309 Tahun', 'Bentang Pustaka', 1),
('9786024813680', 2020, 'Kanker Biografi Suatu Penyakit', 'Kepustakaan Populer Gramedia', 7),
('9786026682079', 2017, 'Love Theft', 'Inari', 7),
('9786237211594', 2019, 'Trouvaille', 'Loveable', 5),
('9786237351283', 2010, 'BONE', 'Haru', 2),
('9786237439363', 2018, 'Raja Untuk Ratu', 'Coconut Books', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`no_isbn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
