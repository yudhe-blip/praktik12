-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql201.infinityfree.com
-- Waktu pembuatan: 07 Feb 2025 pada 07.24
-- Versi server: 10.6.19-MariaDB
-- Versi PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_38262418_db_tokoko`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `KodeBarang` varchar(30) NOT NULL,
  `NamaBarang` varchar(50) NOT NULL,
  `JumlahStok` double(5,2) DEFAULT NULL,
  `HargaBeliTertinggi` double(9,2) DEFAULT NULL,
  `HargaJualTertinggi` double(10,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`KodeBarang`, `NamaBarang`, `JumlahStok`, `HargaBeliTertinggi`, `HargaJualTertinggi`) VALUES
('8992761166212', 'Freastea Apel', 40.00, 6000.00, 7000.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `IsiNota`
--

CREATE TABLE `IsiNota` (
  `NoNo` int(10) NOT NULL,
  `KodeB` varchar(30) NOT NULL,
  `JumlahJual` double(5,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `Nota`
--

CREATE TABLE `Nota` (
  `NoNota` int(10) NOT NULL,
  `WaktuTransaksi` datetime NOT NULL DEFAULT current_timestamp(),
  `NoHPWA` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `Pembeli`
--

CREATE TABLE `Pembeli` (
  `NoTelpWA` varchar(15) NOT NULL,
  `NamaPembeli` int(11) NOT NULL,
  `Alamat` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`KodeBarang`);

--
-- Indeks untuk tabel `IsiNota`
--
ALTER TABLE `IsiNota`
  ADD KEY `NoNo` (`NoNo`);

--
-- Indeks untuk tabel `Nota`
--
ALTER TABLE `Nota`
  ADD PRIMARY KEY (`NoNota`);

--
-- Indeks untuk tabel `Pembeli`
--
ALTER TABLE `Pembeli`
  ADD PRIMARY KEY (`NoTelpWA`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `Nota`
--
ALTER TABLE `Nota`
  MODIFY `NoNota` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
