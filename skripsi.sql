-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Feb 2020 pada 03.47
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_alpha`
--

CREATE TABLE `table_alpha` (
  `id` int(1) NOT NULL,
  `nilai_alpha` float NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_alpha`
--

INSERT INTO `table_alpha` (`id`, `nilai_alpha`, `update_at`) VALUES
(1, 0.2, '2020-02-16 15:38:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_data`
--

CREATE TABLE `table_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jumlah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `table_data`
--

INSERT INTO `table_data` (`id`, `jumlah`, `create_at`) VALUES
(1, '120', '2020-02-16 15:14:02'),
(2, '125', '2020-02-16 15:14:02'),
(3, '129', '2020-02-16 15:14:02'),
(4, '124', '2020-02-16 15:14:02'),
(5, '130', '2020-02-16 15:14:02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `table_alpha`
--
ALTER TABLE `table_alpha`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `table_data`
--
ALTER TABLE `table_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `table_alpha`
--
ALTER TABLE `table_alpha`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `table_data`
--
ALTER TABLE `table_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
