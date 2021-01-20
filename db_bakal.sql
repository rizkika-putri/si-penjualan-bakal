-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Jan 2021 pada 15.17
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_bakal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_datapenjualan`
--

CREATE TABLE IF NOT EXISTS `tb_datapenjualan` (
`id_barang` int(5) NOT NULL,
  `jenis_bakal` varchar(25) NOT NULL,
  `harga_bakal` varchar(20) NOT NULL,
  `jumlah_terjual` varchar(10) NOT NULL,
  `warna` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `tb_datapenjualan`
--

INSERT INTO `tb_datapenjualan` (`id_barang`, `jenis_bakal`, `harga_bakal`, `jumlah_terjual`, `warna`) VALUES
(2, 'batik', '200000', '2 meter', 'coklat'),
(3, 'katun', '40000', '5 meter', 'hitam'),
(5, 'batik', '1500000', '2 meter', 'hijau'),
(6, 'brokat', '50.000', '3 meter', 'pink');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_persediaanbarang`
--

CREATE TABLE IF NOT EXISTS `tb_persediaanbarang` (
`id_barang` int(5) NOT NULL,
  `jenis_bakal` varchar(10) NOT NULL,
  `stok` varchar(10) NOT NULL,
  `warna` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `tb_persediaanbarang`
--

INSERT INTO `tb_persediaanbarang` (`id_barang`, `jenis_bakal`, `stok`, `warna`) VALUES
(1, 'katun', '1 Gulung', 'maroon'),
(2, 'brukat', '1 Gulung', 'merah'),
(3, 'batik', '2 Gulung', 'hitam'),
(4, 'satin', '3 Gulung', 'biru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('adeirma', 'fa6a6bd136dec26a1dd5e326b7e43254', 'adeirma11@gmail.com', 'Ade Irma Saputri', 2, 'Pemilik Toko '),
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin123@gmail.com', 'Toko Bakal Kisaran', 1, 'Admin Toko Bakal'),
('aqmal', '45c1933a6557233e735a15089a09d923', 'sitinuraqmal@gmail.com', 'Siti Nur Aqmal', 3, 'Staff Pergudangan'),
('rizkika', '32604b262979e7903262e4cac9d7960f', 'rizkika345@gmail.com', 'Rizkika putri sitorus', 1, 'Pegawai Toko');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_datapenjualan`
--
ALTER TABLE `tb_datapenjualan`
 ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tb_persediaanbarang`
--
ALTER TABLE `tb_persediaanbarang`
 ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_datapenjualan`
--
ALTER TABLE `tb_datapenjualan`
MODIFY `id_barang` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_persediaanbarang`
--
ALTER TABLE `tb_persediaanbarang`
MODIFY `id_barang` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
