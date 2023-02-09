-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2023 at 11:36 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vote-rega`
--

-- --------------------------------------------------------

--
-- Table structure for table `kandidat`
--

CREATE TABLE `kandidat` (
  `id_kandidat` int(11) NOT NULL,
  `gambar` varchar(250) NOT NULL,
  `ketua` varchar(250) NOT NULL,
  `wakil` varchar(250) NOT NULL,
  `prodi_ketua` varchar(100) NOT NULL,
  `prodi_wakil` varchar(250) NOT NULL,
  `visi` varchar(250) NOT NULL,
  `misi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kandidat`
--

INSERT INTO `kandidat` (`id_kandidat`, `gambar`, `ketua`, `wakil`, `prodi_ketua`, `prodi_wakil`, `visi`, `misi`) VALUES
(5220001, '63d632b13a86b.jpg', 'Ghaida Fasya Y.A', 'M. Fachriza Farhan', 'D3 Logistik Bisnis', 'D4 E-Commerce Logistik', 'Jajan', 'Tidur\r\n'),
(5220007, '63d2946274ac3.jpeg', 'Raihan', 'Muhammad Qintar', 'D4 Logistik Bisnis', 'D4 Teknik Informatika', 'Use \"R\" to steal object', 'Melegalkan ganja di sekitar kampus, menghapus peraturan.'),
(5220008, '63d640d23aa9f.jpg', 'Daffy Raisan', 'Alfian Benardo', 'D4 Teknik Informatika', 'D4 Teknik Informatika', 'molor', 'molor');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `id_kandidat` varchar(250) NOT NULL,
  `ketua` varchar(250) NOT NULL,
  `wakil` varchar(250) NOT NULL,
  `pemilih` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `id_kandidat`, `ketua`, `wakil`, `pemilih`) VALUES
(1, '', 'Ghaida Fasya Y.A', '', ''),
(2, '', 'Ghaida Fasya Y.A', '', ''),
(3, '', 'Raihan', '', ''),
(4, '5220001', 'Ghaida Fasya Y.A', 'M. Fachriza Farhan', ''),
(5, '5220001', 'Ghaida Fasya Y.A', 'M. Fachriza Farhan', ''),
(6, '5220001', 'Ghaida Fasya Y.A', 'M. Fachriza Farhan', ''),
(7, '5220007', 'Raihan', 'Muhammad Qintar', ''),
(8, '5220001', 'Ghaida Fasya Y.A', 'M. Fachriza Farhan', ''),
(9, '5220008', 'Daffy Raisan', 'Alfian Benardo', ''),
(10, '5220001', 'Ghaida Fasya Y.A', 'M. Fachriza Farhan', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `level` varchar(9) NOT NULL,
  `kelas` varchar(250) NOT NULL,
  `npm` varchar(250) NOT NULL,
  `prodi_mhs` varchar(250) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama_lengkap`, `username`, `email`, `password`, `level`, `kelas`, `npm`, `prodi_mhs`, `alamat`, `foto`) VALUES
(1, 'M Fachriza Farhan', 'ichika', 'farhan350411@gmail.com', '12345', 'admin', '', '', '', '', '0'),
(5, 'Daffy Raisan', 'dapi', 'aaa@aaa', '$2y$10$8RpTL5/mn55cXd7k8iwwgeQleZQX2sFROulpCf2N0Mu60F0ybM5mm', 'user', '', '', '', '', '0'),
(6, 'Ghaida Fasya', 'aca', 'handa82624@gmail.com', '$2y$10$CovkSpo9Bo3zkHyg./iexO/SRHmPqlhrn0iXxx8zn1v.CkNQ.Aj5a', 'user', '', '', '', '', '0'),
(8, 'Fachriza', 'reza', 'farhan350411@gmail.com', '$2y$10$//TqM1okT0WEWL8zvYa.Z.k38JeYI6pho1l17SsBEq6sfe9uBVK92', 'user', '', '', '', 'Batujajar', ''),
(9, 'Alfian Benardo', 'pian', 'aa@aa', '$2y$10$hMG2.VOqZrZMVAPREFKcpOgk1jKcLhSXbWh/mgQRKuSLaGHcEKEgS', 'user', '', '', '', '', ''),
(10, 'Nakano Ichika', 'chika', 'farhan350411@gmail.com', '$2y$10$ELln14y3QWU.cc9AT/BB7eA30/IcY1Kzqi5kraCgLLfd8uHIdTnE.', 'user', '1-A', '426326', 'D4 E-Commerce Logistik', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`id_kandidat`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `npm` (`npm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kandidat`
--
ALTER TABLE `kandidat`
  MODIFY `id_kandidat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5220013;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
