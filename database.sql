-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 12:22 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penulisan_ilmiah`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', '*4ACFE3202A5FF5CF467898FC58AAB1D615029441');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `nama`, `deskripsi`, `foto`, `timestamp`) VALUES
(1, 'nama', '  erqhifjqer', 'room1.jpg', '2022-11-30 16:41:43'),
(2, 'ug tv', ' anjayiuerguerhijgrow', 'room1.jpg', '2022-11-30 16:41:52'),
(3, 'eroigj', ' eirngiongioqngiongr', 'room1.jpg', '2022-11-30 16:42:46'),
(5, 'tesik', 'ii  tes', 'room1.jpg', '2022-11-28 18:25:38');

-- --------------------------------------------------------

--
-- Table structure for table `ukm`
--

CREATE TABLE `ukm` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskukm` text DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `deskripsi1` varchar(255) DEFAULT NULL,
  `foto1` varchar(255) DEFAULT NULL,
  `deskripsi2` varchar(255) DEFAULT NULL,
  `foto2` varchar(255) DEFAULT NULL,
  `ig` varchar(100) DEFAULT NULL,
  `twt` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ukm`
--

INSERT INTO `ukm` (`id`, `nama`, `deskukm`, `deskripsi`, `foto`, `deskripsi1`, `foto1`, `deskripsi2`, `foto2`, `ig`, `twt`) VALUES
(1, 'UKM Kerohanian Islam', ' Unit Kegiatan Mahasiswa (UKM) adalah lembaga kemahasiswaan tempat berkumpulnya mahasiswa yang memiliki kesamaan minat atau kegemaran, kreativitas, serta orientasi aktivitas penyaluran kegiatan ekstrakurikuler di dalam kampus. Di bangku sekolah, istilah UKM ini biasanya dikenal dengan istilah ekskul atau ekstrakurikuler. Tidak hanya berlandaskan pada azas manfaat semata, UKM juga berlandaskan pada azas edukatif dan memiliki nilai-nilai sosial di antaranya: saling menghargai, gotong-royong, peduli terhadap sesama, kemandirian, persatuan dan kesatuan. Universitas Gunadarma sendiri memiliki beberapa Unit Kegiatan Mahasiswa (UKM) yang berjalan sampai dengan saat ini.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mapa1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'bakso.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'ati.jpeg', 'https://www.instagram.com/cristiano', 'https://twitter.com/cristiano'),
(3, 'UKM Kerohanian Kristen (UKM Rohkris)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'UKM Kerohanian Katolik (UKM Rohkat)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'UKM Kerohanian Hindu (UKM Rohin)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'UKM Kerohanian Budha (UKM Rohbud)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'UKM Rohani Khonghuchu (UKM RohKhong)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'UKM Paduan Suara (UKM PS)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'UKM Mahasiswa Pencinta Alam (UKM MAPA)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ukm`
--
ALTER TABLE `ukm`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ukm`
--
ALTER TABLE `ukm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
