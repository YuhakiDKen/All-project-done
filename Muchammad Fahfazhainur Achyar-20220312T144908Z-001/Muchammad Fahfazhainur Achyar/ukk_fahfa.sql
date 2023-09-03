-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Mar 2022 pada 07.43
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukk_fahfa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `namalengkap` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nik`, `namalengkap`) VALUES
(1, '01100144010001', 'Agung Prayoga'),
(2, '01100144020001', 'Ahmad Sadat'),
(3, '01100144030001', 'Ahmad Wahid Solikhin'),
(4, '01100144040001', 'Ahhmad Zahid'),
(5, '01100144050001', 'Aldi Nur Alfiansyah'),
(6, '01100144060001', 'Ananda Aji Namirza Rahman'),
(7, '01100144070001', 'Bagus Muhtadin Nur'),
(8, '01100144080001', 'Buyung Adi Mahendra'),
(9, '01100144090001', 'David Akbarudin'),
(10, '01100144100001', 'Diky Tri Hermawan'),
(11, '01100144110001', 'Eko Slamet Andriono'),
(12, '01100144120001', 'Helmi Ainur Rofiq'),
(13, '01100144130001', 'Kustakur Yoga S'),
(14, '01100144140001', 'Miftakhul Zahro'),
(15, '01100144150001', 'Miranda Permata Sari'),
(16, '01100144160001', 'Mochamad Galang Kusuma Hendra'),
(17, '01100144170001', 'Muchammad FahfaZhainur Achyar'),
(18, '01100144180001', 'Muhamad Ramadhan Sohib'),
(19, '01100144190001', 'Muhammad Ridhani Alfiansyah'),
(20, '01100144200001', 'Muzamil Syafii Al Zufri'),
(21, '01100144210001', 'Nabil Azizi'),
(22, '01100144220001', 'Putra Aditya'),
(23, '01100144230001', 'Putra Ananda Bagus Sasongko'),
(24, '01100144240001', 'Raya Dwi Ramadan'),
(25, '01100144250001', 'Saif M Ulum'),
(26, '01100144260001', 'Zidan Falich Elbahar'),
(27, '1111', 'Ajigblk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perjalanan`
--

CREATE TABLE `perjalanan` (
  `id_perjalanan` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(10) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `suhu` varchar(20) NOT NULL,
  `nik` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perjalanan`
--

INSERT INTO `perjalanan` (`id_perjalanan`, `tanggal`, `jam`, `lokasi`, `suhu`, `nik`) VALUES
(1, '2022-03-03', '13.00', 'Jl. Kastubi', '32.0', '01100145567435001'),
(2, '2022-03-04', '13.00', 'Jl. Kastubi', '32.0', '01100145567436001'),
(3, '2022-03-05', '14.00', 'Jl. Raya Puncak Jaya', '32.5', '01100145567437001'),
(4, '2022-03-06', '15.00', 'Jl. Imam Bonjol', '33.5', '01100145567438001'),
(5, '2022-03-07', '16.00', 'Jl. Wukir', '35.5', '01100145567439001'),
(6, '2022-03-08', '17.00', 'Jl. Diran', '34.7', '01100145567440001'),
(7, '2022-03-09', '18.00', 'Jl. Pandan Rejo', '33.9', '01100145567410001'),
(8, '2022-03-10', '19.00', 'Jl. Raya Jungo', '31.9', '01100145567420001'),
(9, '2022-03-11', '20.00', 'Jl. Sanggrahan', '34.4', '01100145567430001'),
(10, '2022-03-12', '21.00', 'Jl. Raya Godang', '33.2', '01100145567430001'),
(11, '2022-03-13', '22.00', 'Jl. Banaran', '35.1', '01100145567440001'),
(12, '2022-03-14', '13.30', 'Jl. Waru jajar', '34.8', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `perjalanan`
--
ALTER TABLE `perjalanan`
  ADD PRIMARY KEY (`id_perjalanan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `perjalanan`
--
ALTER TABLE `perjalanan`
  MODIFY `id_perjalanan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
