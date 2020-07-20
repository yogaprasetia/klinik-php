-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2020 at 06:00 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `kode_admin` int(3) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`kode_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'Admin Klinik', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `nip` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `poli` varchar(255) NOT NULL,
  `hari_praktek` varchar(255) NOT NULL,
  `jam_praktek` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`nip`, `nama`, `poli`, `hari_praktek`, `jam_praktek`) VALUES
('1122434352634', 'Dr. Paimin', 'Poli Jantung', 'Sabtu - Minggu', '18.00 - 00.00'),
('1122434352665', 'Dr. Sudirman', 'Poli Hati', 'Senin - Jumat', '09.00 - 12.00'),
('1122434352672', 'Dr. Soetomo', 'Poli Umum', 'Senin - Minggu', '09.00 - 12.00'),
('1122434352677', 'Dr. Darsono', 'Poli Gigi', 'Senin - Jumat', '13.00 - 17.00');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `poli` varchar(255) NOT NULL,
  `keluhan` varchar(255) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `tgl_janji` date NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `nik`, `nama`, `tgl_lahir`, `tempat_lahir`, `alamat`, `no_hp`, `poli`, `keluhan`, `tgl_daftar`, `tgl_janji`, `pass`) VALUES
('RM00001', '350911998222', 'Yoga Prasetia', '2020-07-28', 'Pacitan', 'Jl nin aja dulu', '08123456789', 'Poli Gigi', 'Sakit gigi sampai ke tulang tulang', '2020-07-20', '2020-07-29', '7694f4a66316e53c8cdd9d9954bd611d'),
('RM00003', '350911998223', 'Paijo', '2020-07-20', 'Pacitan', 'Jl kapan aja', '08123444555777', 'Poli Umum', 'Sakit pusing di otak', '2020-07-20', '2020-07-21', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
('RM00005', '35091199824', 'Paimin', '2020-07-21', 'Pacitan', 'Jl jalan keliling kota', '08913253273', 'Poli Umum', 'Sakit Area vital', '2020-07-20', '2020-07-21', '7694f4a66316e53c8cdd9d9954bd611d');

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `id` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `poli` varchar(255) NOT NULL,
  `keluhan` varchar(255) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `tgl_janji` date NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekam_medis`
--

INSERT INTO `rekam_medis` (`id`, `nik`, `nama`, `poli`, `keluhan`, `tgl_daftar`, `tgl_janji`, `no_hp`, `alamat`, `tempat_lahir`, `tgl_lahir`) VALUES
('RM00001', '350911998222', 'Yoga Prasetia', 'Poli Gigi', 'Sakit gigi sampai ke tulang tulang', '2020-07-20', '2020-07-29', '08123456789', 'Jl nin aja dulu', 'Pacitan', '2020-07-28'),
('RM00002', '350911998222', 'Yoga Prasetia', 'Poli Gigi', 'Sakit gigi lagi sampai ke jantung paru-paru', '2020-07-20', '2020-07-21', '08123456789', 'Jl nin aja dulu', 'Pacitan', '2020-07-28'),
('RM00003', '350911998223', 'Paijo', 'Poli Umum', 'Sakit pusing di otak', '2020-07-20', '2020-07-21', '08123444555777', 'Jl kapan aja', 'Pacitan', '2020-07-20'),
('RM00004', '350911998223', 'Paijo', 'Poli Umum', 'Sakit lagi di otak', '2020-07-20', '2020-07-28', '08123444555777', 'Jl kapan aja', 'Pacitan', '2020-07-20'),
('RM00005', '35091199824', 'Paimin', 'Poli Umum', 'Sakit Area vital', '2020-07-20', '2020-07-21', '08913253273', 'Jl jalan keliling kota', 'Pacitan', '2020-07-21'),
('RM00006', '350911998222', 'Yoga Prasetia', 'Poli Umum', 'Sakit Terjatuh', '2020-07-20', '2020-07-28', '08123456789', 'Jl nin aja dulu', 'Pacitan', '2020-07-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`kode_admin`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `kode_admin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
