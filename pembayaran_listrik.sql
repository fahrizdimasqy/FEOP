-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2019 at 04:14 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pembayaran_listrik`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `IDPelanggan` int(10) NOT NULL,
  `Nometer` int(10) DEFAULT NULL,
  `Nama` varchar(50) DEFAULT NULL,
  `Alamat` varchar(100) DEFAULT NULL,
  `Kodetarif` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`IDPelanggan`, `Nometer`, `Nama`, `Alamat`, `Kodetarif`) VALUES
(4, 12, 'Tiani', 'jampang', 'k110'),
(6, 10, 'Zaun', 'Tasik', 'K004'),
(7, 12, 'Ebod', 'Cikakak', 'K009');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_bayar` int(10) NOT NULL,
  `IDPelanggan` int(10) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `bulan_bayar` date DEFAULT NULL,
  `biaya_admin` int(10) DEFAULT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_bayar`, `IDPelanggan`, `tanggal`, `bulan_bayar`, `biaya_admin`, `total`) VALUES
(1, 4, '2018-12-12', '2018-11-18', 2500, 0);

-- --------------------------------------------------------

--
-- Table structure for table `penggunaan`
--

CREATE TABLE `penggunaan` (
  `IDPenggunaan` int(10) NOT NULL,
  `IDPelanggan` int(10) NOT NULL,
  `Bulan` date NOT NULL,
  `Tahun` year(4) NOT NULL,
  `Meterawal` int(15) NOT NULL,
  `Meterakhir` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tagihan`
--

CREATE TABLE `tagihan` (
  `IDTagihan` int(10) NOT NULL,
  `IDPelanggan` int(10) NOT NULL,
  `Bulan` date NOT NULL,
  `Tahun` year(4) NOT NULL,
  `Jumlahmeter` int(15) NOT NULL,
  `Status` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tarif`
--

CREATE TABLE `tarif` (
  `IDTarif` int(10) NOT NULL,
  `kodetarif` varchar(10) DEFAULT NULL,
  `Daya` int(10) DEFAULT NULL,
  `Tarifperkwh` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tarif`
--

INSERT INTO `tarif` (`IDTarif`, `kodetarif`, `Daya`, `Tarifperkwh`) VALUES
(2, 'k001', 50, 100),
(4, 'K003', 10, 10),
(5, 'K005', 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kasir`
--

CREATE TABLE `tb_kasir` (
  `id_kasir` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `akses` enum('admin','kasir','kepala_toko','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kasir`
--

INSERT INTO `tb_kasir` (`id_kasir`, `nama`, `alamat`, `telepon`, `status`, `username`, `password`, `akses`) VALUES
(1, 'Fahriz Dimasqy (CEO)', 'Kp cempaka Putih jawa barat', '081588792112', 'aktif', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'Kidto1412', 'Kp cempaka Putih Palabuhanratu', '085312858112', 'aktif', 'kasir', 'c7911af3adbd12a035b289556d96470a', 'kasir'),
(5, 'Asep Sukandar', 'Cikakak', '081512312', 'aktif', 'asep', '202cb962ac59075b964b07152d234b70', 'kasir'),
(9, 'Tian', 'Jampang', '0815xxx', 'aktif', 'toko', 'bbb48314e5e6ee68d2d8bc1364b8599b', 'kepala_toko'),
(18, 'asas', 'asasas', 'asasasa', 'nonaktif', 'as', 'as', 'kasir'),
(19, '1212', 'sasA', '1212121', 'aktif', '12', '12', 'admin'),
(20, 'ASASASASAS', 'ASASASAS', '13124124', 'aktif', '12', '1', 'kepala_toko'),
(25, 'OOOM', 'DIAN', '071', 'nonaktif', '1', '2', 'kepala_toko');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`IDPelanggan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_bayar`),
  ADD KEY `IDPelanggan` (`IDPelanggan`);

--
-- Indexes for table `penggunaan`
--
ALTER TABLE `penggunaan`
  ADD PRIMARY KEY (`IDPenggunaan`),
  ADD KEY `IDPelanggan` (`IDPelanggan`);

--
-- Indexes for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`IDTagihan`),
  ADD KEY `IDPelanggan` (`IDPelanggan`);

--
-- Indexes for table `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`IDTarif`);

--
-- Indexes for table `tb_kasir`
--
ALTER TABLE `tb_kasir`
  ADD PRIMARY KEY (`id_kasir`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `IDPelanggan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_bayar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penggunaan`
--
ALTER TABLE `penggunaan`
  MODIFY `IDPenggunaan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tagihan`
--
ALTER TABLE `tagihan`
  MODIFY `IDTagihan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tarif`
--
ALTER TABLE `tarif`
  MODIFY `IDTarif` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_kasir`
--
ALTER TABLE `tb_kasir`
  MODIFY `id_kasir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`IDPelanggan`) REFERENCES `pelanggan` (`IDPelanggan`);

--
-- Constraints for table `penggunaan`
--
ALTER TABLE `penggunaan`
  ADD CONSTRAINT `penggunaan_ibfk_1` FOREIGN KEY (`IDPelanggan`) REFERENCES `pelanggan` (`IDPelanggan`);

--
-- Constraints for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD CONSTRAINT `tagihan_ibfk_1` FOREIGN KEY (`IDPelanggan`) REFERENCES `pelanggan` (`IDPelanggan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
