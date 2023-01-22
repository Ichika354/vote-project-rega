-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2023 at 05:45 PM
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
  `nama_kandidat` varchar(250) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `jabatan` varchar(250) NOT NULL,
  `visi` varchar(250) NOT NULL,
  `misi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kandidat`
--

INSERT INTO `kandidat` (`id_kandidat`, `gambar`, `nama_kandidat`, `prodi`, `jabatan`, `visi`, `misi`) VALUES
(5220001, 'ghaida.jpg', 'Ghaida Fasya Y.A', 'D4 Teknik Informatika', 'Ketua', 'Jajan', 'Tidur'),
(5220004, '63cd1b2b7430f.jpg', 'M Fachriza Farhan', 'D4 Teknik Informatika', 'Wakil', 'Ngoding', 'Ngoding dulu jagonya belakangan'),
(5220005, '63cd26c266332.png', 'Daffy Raisan', 'D3 Teknik Informatika', 'Ketua', 'Molor', 'Molor');

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
  `level` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama_lengkap`, `username`, `email`, `password`, `level`) VALUES
(1, 'M Fachriza Farhan', 'ichika', 'farhan350411@gmail.com', '12345', 'admin'),
(2, 'fachriza', 'miku', 'farhan350411@gmail.com', '$2y$10$/6d/uIq03SznLcREraVKeedaFeEICB8fqZBP9izpJGUvVRv2R/TZ6', 'user'),
(3, 'ghaida fasya', 'aca', 'handa82624@gmail.com', '$2y$10$hSb.WUmGqIj6JhpWCcZt4OcExhi0WWujnb1Ov.irM3a79n/uiVDgi', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`id_kandidat`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kandidat`
--
ALTER TABLE `kandidat`
  MODIFY `id_kandidat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5220006;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
