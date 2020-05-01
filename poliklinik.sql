-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2018 at 05:58 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poliklinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `kd_dokter` varchar(15) NOT NULL,
  `kd_poli` varchar(15) NOT NULL,
  `tgl_kunjungan` date NOT NULL,
  `kd_user` varchar(15) NOT NULL,
  `nm_dokter` varchar(20) NOT NULL,
  `sip` int(11) NOT NULL,
  `tmpat_lahir` date NOT NULL,
  `no_tlp` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan`
--

CREATE TABLE `kunjungan` (
  `tgl_kunjungan` date NOT NULL,
  `no_pasien` int(15) NOT NULL,
  `kd_poli` varchar(15) NOT NULL,
  `jam_kunjungan` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kunjungan`
--

INSERT INTO `kunjungan` (`tgl_kunjungan`, `no_pasien`, `kd_poli`, `jam_kunjungan`) VALUES
('2017-01-11', 1, '2', 11);

-- --------------------------------------------------------

--
-- Table structure for table `laboratorium`
--

CREATE TABLE `laboratorium` (
  `kd_lab` varchar(15) NOT NULL,
  `no_rm` int(11) NOT NULL,
  `hasil_lab` varchar(50) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laboratorium`
--

INSERT INTO `laboratorium` (`kd_lab`, `no_rm`, `hasil_lab`, `ket`) VALUES
('11', 12, 'wada', 'dawd'),
('11114', 2, 'sehat', 'alhamdulillah'),
('123', 0, 'baik', 'amann');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `kd_user` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`kd_user`, `username`, `password`) VALUES
('', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
('0', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `kd_obat` varchar(11) NOT NULL,
  `nm_obat` varchar(15) NOT NULL,
  `jml_obat` int(11) NOT NULL,
  `ukuran` varchar(10) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`kd_obat`, `nm_obat`, `jml_obat`, `ukuran`, `harga`) VALUES
('123eq', 'paracetamol', 3, '5', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `no_pasien` int(5) NOT NULL,
  `nm_pasien` varchar(60) NOT NULL,
  `j_kel` enum('Laki-Laki','Perempuan') NOT NULL,
  `agama` enum('Islam','Kristen','Hindu','Budha','Konghucu') NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `usia` int(3) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `nm_kk` int(16) NOT NULL,
  `hub_kel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`no_pasien`, `nm_pasien`, `j_kel`, `agama`, `alamat`, `tgl_lhr`, `usia`, `no_tlp`, `nm_kk`, `hub_kel`) VALUES
(123, 'Stuart', 'Laki-Laki', 'Islam', 'London', '2001-06-06', 19, '08888888', 2147483647, 'tidak diketahui');

-- --------------------------------------------------------

--
-- Table structure for table `poliklinik`
--

CREATE TABLE `poliklinik` (
  `kd_poli` int(11) NOT NULL,
  `nm_poli` varchar(11) NOT NULL,
  `lantai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poliklinik`
--

INSERT INTO `poliklinik` (`kd_poli`, `nm_poli`, `lantai`) VALUES
(3333, 'umum', 1),
(11111, 'umum', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rekammedis`
--

CREATE TABLE `rekammedis` (
  `no_rm` int(11) NOT NULL,
  `kd_tindakan` varchar(11) NOT NULL,
  `kd_obat` varchar(11) NOT NULL,
  `kd_user` varchar(11) NOT NULL,
  `no_pasien` int(11) NOT NULL,
  `diagnosa` varchar(20) NOT NULL,
  `resep` varchar(20) NOT NULL,
  `keluhan` varchar(20) NOT NULL,
  `tgl_pemeriksaan` date NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekammedis`
--

INSERT INTO `rekammedis` (`no_rm`, `kd_tindakan`, `kd_obat`, `kd_user`, `no_pasien`, `diagnosa`, `resep`, `keluhan`, `tgl_pemeriksaan`, `ket`) VALUES
(4214, '213', '21321', '124', 0, 'pilek', 'insafna', 'sakit kaki', '2018-09-02', 'aman');

-- --------------------------------------------------------

--
-- Table structure for table `tindakan`
--

CREATE TABLE `tindakan` (
  `kd_tindakan` varchar(11) NOT NULL,
  `nm_tindakan` varchar(20) NOT NULL,
  `ket` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tindakan`
--

INSERT INTO `tindakan` (`kd_tindakan`, `nm_tindakan`, `ket`) VALUES
('123456', 'operasiiii', 'cedera'),
('1111', 'sakitt', 'pilekk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laboratorium`
--
ALTER TABLE `laboratorium`
  ADD PRIMARY KEY (`kd_lab`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`kd_user`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`no_pasien`);

--
-- Indexes for table `poliklinik`
--
ALTER TABLE `poliklinik`
  ADD PRIMARY KEY (`kd_poli`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
