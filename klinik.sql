-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Des 2014 pada 10.53
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `nama` varchar(50) NOT NULL,
  `umur` int(2) NOT NULL,
  `gejala` text NOT NULL,
  `jeniskelamin` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`nama`, `umur`, `gejala`, `jeniskelamin`, `alamat`, `username`, `password`) VALUES
('ferdi', 12, 'gatau', 'laki', 'gunben', 'ferdi554', 'ferdismkn4padalarang'),
('ferday', 12, 'a', 'awe', 'aw', 'afda', 'farwea'),
('aku', 12, 'gatau', 'oh', 'aw', 'fea', 'faw'),
('ferdi', 12, 'gatau', 'laki', 'gunben', 'ferdi554', 'ferdismkn4padalarang'),
('ferday', 12, 'a', 'awe', 'aw', 'afda', 'farwea'),
('aku', 12, 'gatau', 'oh', 'aw', 'fea', 'faw'),
('ferdi', 12, 'gatau', 'laki', 'gunben', 'ferdi554', 'ferdismkn4padalarang'),
('ferday', 12, 'a', 'awe', 'aw', 'afda', 'farwea'),
('aku', 12, 'gatau', 'oh', 'aw', 'fea', 'faw');

-- --------------------------------------------------------

--
-- Struktur dari tabel `databaru`
--

CREATE TABLE IF NOT EXISTS `databaru` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `umur` int(50) NOT NULL,
  `jeniskelamin` varchar(50) NOT NULL,
  `gejala` text NOT NULL,
  `penyakitsebelum` text NOT NULL,
  `golongandarah` varchar(2) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data untuk tabel `databaru`
--

INSERT INTO `databaru` (`id`, `username`, `nama`, `umur`, `jeniskelamin`, `gejala`, `penyakitsebelum`, `golongandarah`, `type`) VALUES
(5, 'asrul', 'asrul sujani', 15, '', '31dwae', '', '', 'lama'),
(6, 'deden', 'deden farhan', 12, 'Laki Laki', 'h', 'u', 'O', 'baru'),
(7, 'deden', '', 12, '', 'hu', '', '', 'lama'),
(8, 'deden', '', 14, '', 'sakit hati', '', '', 'lama'),
(9, 'deden', '', 15, '', 'sakit gigi', '', '', 'lama'),
(10, 'deden', '', 19, '', 'udah tua', '', '', 'lama'),
(12, 'deden', '', 19, '', 'h', '', '', 'lama'),
(13, 'rosita', 'Rosita Permata Dewi Nuriani', 16, '', 'he', '', '', 'lama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datadokter`
--

CREATE TABLE IF NOT EXISTS `datadokter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `datadokter`
--

INSERT INTO `datadokter` (`id`, `username`, `password`, `nama`, `level`) VALUES
(3, 'hendi', 'hendi', 'Hendi Agusti', 'dokter'),
(4, 'asep', 'asep', 'Asep Otong', 'dokter');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `komentar` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `username`, `komentar`) VALUES
(4, 'deden', 'da'),
(5, 'deden', 'hihi'),
(6, 'asrul', 'bingung mau ngomen apa ._.'),
(7, 'rosita', 'sayang ferdi :*'),
(8, 'deden', 'hahhaah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`no`, `userid`, `password`, `level`) VALUES
(7, 'ferdi', 'ferdi', 'frontoffice'),
(24, 'hendi', 'hendi', 'dokter'),
(28, 'rosita', 'rosita', 'pasien'),
(29, 'ferday', 'ferday', 'admin'),
(30, 'asrul', 'asrul', 'pasien'),
(32, 'deden', 'deden', 'pasien'),
(33, 'asep', 'asep', 'dokter');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
