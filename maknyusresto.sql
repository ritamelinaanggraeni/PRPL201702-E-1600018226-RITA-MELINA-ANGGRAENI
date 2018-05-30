-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15 Mei 2018 pada 02.37
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maknyusresto`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `idcustomer` varchar(15) NOT NULL,
  `namacustomer` varchar(30) DEFAULT NULL,
  `alamatcustomer` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telp` char(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`idcustomer`, `namacustomer`, `alamatcustomer`, `email`, `telp`) VALUES
('123', 'rita melina', 'cilacap', 'ritamelina41@gmail.com', '089623939163');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `idmenu` varchar(15) NOT NULL,
  `jenismenu` varchar(50) DEFAULT NULL,
  `namamenu` varchar(50) DEFAULT NULL,
  `hargamenu` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `idcustomer` varchar(10) DEFAULT NULL,
  `namacustomer` varchar(50) DEFAULT NULL,
  `nomormeja` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `order1` varchar(50) DEFAULT NULL,
  `order2` varchar(50) DEFAULT NULL,
  `order3` varchar(50) DEFAULT NULL,
  `order4` varchar(50) DEFAULT NULL,
  `order5` varchar(50) DEFAULT NULL,
  `order6` varchar(50) DEFAULT NULL,
  `order7` varchar(50) DEFAULT NULL,
  `order8` varchar(50) DEFAULT NULL,
  `order9` varchar(50) DEFAULT NULL,
  `order10` varchar(50) DEFAULT NULL,
  `order11` varchar(50) DEFAULT NULL,
  `order12` varchar(50) DEFAULT NULL,
  `jumlahpesanan` varchar(50) DEFAULT NULL,
  `subtotal` varchar(50) DEFAULT NULL,
  `bayar` varchar(50) DEFAULT NULL,
  `cash` varchar(50) DEFAULT NULL,
  `diskon` varchar(50) DEFAULT NULL,
  `kembalian` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`idcustomer`, `namacustomer`, `nomormeja`, `tanggal`, `order1`, `order2`, `order3`, `order4`, `order5`, `order6`, `order7`, `order8`, `order9`, `order10`, `order11`, `order12`, `jumlahpesanan`, `subtotal`, `bayar`, `cash`, `diskon`, `kembalian`) VALUES
('123', NULL, '1', '2018-05-14', '1', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '2', NULL, '40000', '50000', NULL, '10000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`idcustomer`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idmenu`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
