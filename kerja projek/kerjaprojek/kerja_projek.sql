-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Nov 2023 pada 11.07
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kerja_projek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(200) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `email` varchar(255) NOT NULL,
  `komen` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `tanggal`, `nama`, `email`, `komen`) VALUES
(2, 'qwerty', 'qwerty', '', ''),
(3, 'qwerty', 'qwerty', '', ''),
(4, 'qwerty', 'qwerty', '', ''),
(7, 'qwerty', 'sayang', '2023-11-24', ''),
(8, 'jinga', 'qwerty', '2023-11-24', ''),
(9, '2023-11-24', 'qwerty', '12345', 'qwerty');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tc`
--

CREATE TABLE `tc` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `sekolah` varchar(200) NOT NULL,
  `no_telpon` varchar(16) NOT NULL,
  `lomba` varchar(260) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tc`
--

INSERT INTO `tc` (`id`, `nama`, `sekolah`, `no_telpon`, `lomba`) VALUES
(1, 'diva', 'qwerty', '0812345678', 'SPELLING BEE');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tc`
--
ALTER TABLE `tc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tc`
--
ALTER TABLE `tc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
