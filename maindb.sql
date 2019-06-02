-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jun 2019 pada 08.51
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maindb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_diri`
--

CREATE TABLE `data_diri` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kota_kab` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_diri`
--

INSERT INTO `data_diri` (`id`, `nama`, `provinsi`, `kota_kab`, `kecamatan`) VALUES
(1, 'milzan', 'DKI JAKARTA', 'KAB. ADM. KEP. SERIBU', 'Kepulauan Seribu Utara'),
(7, 'dzikri', 'JAWA BARAT', 'KAB. SUKABUMI', 'Pelabuhanratu'),
(10, 'Ade', 'DKI JAKARTA', 'KOTA ADM. JAKARTA PUSAT', 'Sawah Besar'),
(12, 'asd', 'JAWA BARAT', 'KAB. BOGOR', 'Gunung Putri'),
(13, 'Andi', 'JAWA TENGAH', 'KAB. BANYUMAS', 'Wangon');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wilayah`
--

CREATE TABLE `wilayah` (
  `kode` varchar(13) NOT NULL,
  `nama` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wilayah`
--

INSERT INTO `wilayah` (`kode`, `nama`) VALUES
('11', 'ACEH'),
('11.01', 'KAB. ACEH SELATAN'),
('11.01.01', 'Bakongan'),
('11.01.02', 'Kluet Utara'),
('11.01.03', 'Kluet Selatan'),
('11.01.04', 'Labuhan Haji'),
('11.02', 'KAB. ACEH TENGGARA'),
('11.02.01', 'Lawe Alas'),
('11.02.02', 'Lawe Sigala-Gala'),
('11.02.03', 'Bambel'),
('11.03', 'KAB. ACEH TIMUR'),
('11.03.01', 'Darul Aman'),
('11.03.02', 'Julok'),
('31', 'DKI JAKARTA'),
('31.01', 'KAB. ADM. KEP. SERIBU'),
('31.01.01', 'Kepulauan Seribu Utara'),
('31.01.02', 'Kepulauan Seribu Selatan'),
('31.71', 'KOTA ADM. JAKARTA PUSAT'),
('31.71.01', 'Gambir'),
('31.71.02', 'Sawah Besar'),
('32', 'JAWA BARAT'),
('32.01', 'KAB. BOGOR'),
('32.01.01', 'Cibinong'),
('32.01.02', 'Gunung Putri'),
('32.01.03', 'Citeureup'),
('32.02', 'KAB. SUKABUMI'),
('32.02.01', 'Pelabuhanratu'),
('32.02.02', 'Simpenan'),
('33', 'JAWA TENGAH'),
('33.01', 'KAB. CILACAP'),
('33.01.01', 'Kedungreja'),
('33.01.02', 'Kesugihan'),
('33.01.03', 'Adipala'),
('33.02', 'KAB. BANYUMAS'),
('33.02.01', 'Lumbir'),
('33.02.02', 'Wangon');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_diri`
--
ALTER TABLE `data_diri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_diri`
--
ALTER TABLE `data_diri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
