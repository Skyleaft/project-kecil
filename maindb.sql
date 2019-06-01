-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jun 2019 pada 19.16
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
  `nama` varchar(25) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kota_kab` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_diri`
--

INSERT INTO `data_diri` (`nama`, `provinsi`, `kota_kab`, `kecamatan`) VALUES
('milzan', '31', '31.71', '31.71.01'),
('', '', '', ''),
('dzikri', '32', '32.01', '32.01.02'),
('', '', '', ''),
('dani', '31', '31.01', '31.01.02'),
('', '', '', ''),
('ade', '33', '33.01', '33.01.03'),
('', '', '', '');

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
-- Indeks untuk tabel `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`kode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
