-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 02 Agu 2022 pada 01.21
-- Versi server: 10.1.48-MariaDB-0ubuntu0.18.04.1
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itbjm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_user`
--

CREATE TABLE `ms_user` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `ms_user`
--

INSERT INTO `ms_user` (`id`, `user_id`, `nama`, `dept`, `level`) VALUES
(1, 15083298, 'Away', 'IT', 'super admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `kode_toko` varchar(5) NOT NULL,
  `nama_toko` varchar(100) NOT NULL,
  `nik` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nama_request` varchar(50) NOT NULL,
  `tgl_request` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `request`
--

INSERT INTO `request` (`id`, `kode_toko`, `nama_toko`, `nik`, `nama`, `nama_request`, `tgl_request`, `status`) VALUES
(1, '1GM5', 'TRANSKAL KAPUAS', 15083298, 'Away', 'flag_pda', '2022-07-30', 'SUCCESS'),
(2, '1GL7', 'TRANSKAL BARITO                               ', 15083298, 'Away', 'kunci_pda', '2022-07-30', 'SUCCESS');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ms_user`
--
ALTER TABLE `ms_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ms_user`
--
ALTER TABLE `ms_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
