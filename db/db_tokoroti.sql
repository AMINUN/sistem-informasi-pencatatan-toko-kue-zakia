-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2022 at 12:04 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tokoroti`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ditempat`
--

CREATE TABLE `tbl_ditempat` (
  `id` int(5) NOT NULL,
  `idroti` int(11) NOT NULL,
  `tgl_pesanan` date NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ditempat`
--

INSERT INTO `tbl_ditempat` (`id`, `idroti`, `tgl_pesanan`, `keterangan`) VALUES
(36, 39, '2022-01-27', 'Lejat');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hantar`
--

CREATE TABLE `tbl_hantar` (
  `id` int(5) NOT NULL,
  `idroti` int(11) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `pembeli` varchar(100) NOT NULL,
  `tgl_pesanan` date NOT NULL,
  `penerima` varchar(100) NOT NULL,
  `kurir` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hantar`
--

INSERT INTO `tbl_hantar` (`id`, `idroti`, `no_hp`, `pembeli`, `tgl_pesanan`, `penerima`, `kurir`, `alamat`) VALUES
(22, 39, '081350748288', 'Alim', '2024-01-28', 'rico', 'Rudi', 'Jl.sudirman no 5');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roti`
--

CREATE TABLE `tbl_roti` (
  `idroti` int(5) NOT NULL,
  `nama_kue` varchar(25) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_roti`
--

INSERT INTO `tbl_roti` (`idroti`, `nama_kue`, `harga`) VALUES
(38, 'Donat Kacang', 'RP. 35.000'),
(39, 'Bingka Ambon', 'RP. 35.000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'mega1212@gmail.com', 'Nurdin', 1, 'admin'),
('pemilik', '58399557dae3c60e23c78606771dfa3d', 'pemiliktokoroti@gmail.com', 'Zakia', 0, 'pemilik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_ditempat`
--
ALTER TABLE `tbl_ditempat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_hantar`
--
ALTER TABLE `tbl_hantar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_roti`
--
ALTER TABLE `tbl_roti`
  ADD PRIMARY KEY (`idroti`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_ditempat`
--
ALTER TABLE `tbl_ditempat`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `tbl_hantar`
--
ALTER TABLE `tbl_hantar`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tbl_roti`
--
ALTER TABLE `tbl_roti`
  MODIFY `idroti` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
