-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Bulan Mei 2023 pada 23.20
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datateman`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `teman`
--

CREATE TABLE `teman` (
  `id` int(3) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jns_kel` varchar(10) NOT NULL,
  `usia` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `teman`
--

INSERT INTO `teman` (`id`, `nama`, `jns_kel`, `usia`) VALUES
(1, 'Gunawan', 'LAKI-LAKI', 22),
(2, 'Abdul Ahmad', 'LAKI-LAKI', 12),
(4, 'Reni', 'PEREMPUAN', 9),
(9, 'putri', 'PEREMPUAN', 60),
(21, 'Abdul Dani', 'LAKI-LAKI', 70),
(78, 'robby', 'LAKI-LAKI', 56);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `teman`
--
ALTER TABLE `teman`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
