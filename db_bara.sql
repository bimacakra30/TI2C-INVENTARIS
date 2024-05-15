-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Bulan Mei 2024 pada 18.25
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bara`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bigdata`
--

CREATE TABLE `bigdata` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(16) NOT NULL,
  `religion` varchar(16) NOT NULL,
  `school` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bigdata`
--

INSERT INTO `bigdata` (`id`, `name`, `address`, `gender`, `religion`, `school`) VALUES
(10, 'Bima Cakra Bara Karebet', 'Madiun Timur', 'Male', 'Islam', 'Politeknik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `nm` varchar(25) NOT NULL,
  `addrs` varchar(50) NOT NULL,
  `bod` date NOT NULL,
  `cnumber` varchar(15) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `pass` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `form`
--

INSERT INTO `form` (`id`, `nm`, `addrs`, `bod`, `cnumber`, `mail`, `pass`) VALUES
(18, 'Bima Cakra', 'Madiun', '2024-04-04', '081390231903', 'bimacakra@gmail.com', '123'),
(19, 'Bima Cakra Bara Karebet', 'JL.Raya Madiun', '2004-10-04', '081133211903', 'cakra@gmail.com', '1122');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bigdata`
--
ALTER TABLE `bigdata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bigdata`
--
ALTER TABLE `bigdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
