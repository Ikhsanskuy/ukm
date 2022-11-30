-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Waktu pembuatan: 30 Nov 2022 pada 10.51
-- Versi server: 5.7.34
-- Versi PHP: 8.0.8

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
-- Struktur dari tabel `ukm`
--

CREATE TABLE `ukm` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `deskripsi1` varchar(255) NOT NULL,
  `foto1` varchar(255) NOT NULL,
  `deskripsi2` varchar(255) NOT NULL,
  `foto2` varchar(255) NOT NULL,
  `ig` varchar(100) DEFAULT NULL,
  `twt` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `ukm`
--

INSERT INTO `ukm` (`id`, `nama`, `deskripsi`, `foto`, `deskripsi1`, `foto1`, `deskripsi2`, `foto2`, `ig`, `twt`) VALUES
(1, 'iuerg', '          erqheruuieqrwergewjaja', 'mapa1.jpg', '', '', '', '', 'https://www.instagram.com/cristiano', 'https://twitter.com/cristiano');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ukm`
--
ALTER TABLE `ukm`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ukm`
--
ALTER TABLE `ukm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
