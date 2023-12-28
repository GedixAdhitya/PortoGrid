-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2023 at 04:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portogrid`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_feedback`
--

CREATE TABLE `tb_feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `query` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_feedback`
--

INSERT INTO `tb_feedback` (`id`, `name`, `email`, `query`) VALUES
(1, 'DWORD', 'dword69@gmail.com', 'Good Website, i need help with your skill for my job. i\'m already follow your Instagram, i will DM you soon.'),
(3, 'merta ', 'dada@dasdasd.com', 'hallo'),
(4, 'portogrit', 'porto@gmail.com', 'bagus'),
(5, 'porto', 'protokeren@gmail.com', 'oke banget');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_portofolio`
--

CREATE TABLE `tb_portofolio` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `photoaktif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_portofolio`
--

INSERT INTO `tb_portofolio` (`id`, `photo`, `judul`, `photoaktif`) VALUES
(45, 'image-14.jpg', 'gambar 10', 0),
(46, 'image-3.jpg', 'gambar 3', 1),
(47, 'image-4.jpg', 'g4', 1),
(48, 'image-5.jpg', 'g5', 1),
(49, 'image-6.jpg', 'gambarr 6', 1),
(50, 'image-8.jpg', 'gambar 8', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_feedback`
--
ALTER TABLE `tb_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_portofolio`
--
ALTER TABLE `tb_portofolio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_feedback`
--
ALTER TABLE `tb_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_portofolio`
--
ALTER TABLE `tb_portofolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
