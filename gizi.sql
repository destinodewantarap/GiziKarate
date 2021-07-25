-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2021 at 10:07 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gizi`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_menu`
--

CREATE TABLE `detail_menu` (
  `id_menu` varchar(5) DEFAULT NULL,
  `id_waktu` varchar(2) DEFAULT NULL,
  `id_range` varchar(2) DEFAULT NULL,
  `id_paket` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_menu`
--

INSERT INTO `detail_menu` (`id_menu`, `id_waktu`, `id_range`, `id_paket`) VALUES
('Me001', 'W1', 'M1', 'P1'),
('Me002', 'W1', 'M1', 'P1'),
('Me003', 'W1', 'M1', 'P1'),
('Me004', 'W1', 'M1', 'P1'),
('Me005', 'W1', 'M1', 'P1'),
('Me006', 'W1', 'M1', 'P1'),
('Me007', 'W1', 'M1', 'P1'),
('Me008', 'W1', 'M1', 'P1'),
('Me009', 'W2', 'M1', 'P1'),
('Me010', 'W3', 'M1', 'P1'),
('Me011', 'W3', 'M1', 'P1'),
('Me012', 'W3', 'M1', 'P1'),
('Me013', 'W3', 'M1', 'P1'),
('Me014', 'W3', 'M1', 'P1'),
('Me015', 'W4', 'M1', 'P1'),
('Me010', 'W5', 'M1', 'P1'),
('Me016', 'W5', 'M1', 'P1'),
('Me017', 'W5', 'M1', 'P1'),
('Me018', 'W5', 'M1', 'P1'),
('Me019', 'W1', 'M1', 'P2'),
('Me020', 'W1', 'M1', 'P2'),
('Me022', 'W2', 'M1', 'P2'),
('Me001', 'W3', 'M1', 'P2'),
('Me023', 'W3', 'M1', 'P2'),
('Me024', 'W3', 'M1', 'P2'),
('Me025', 'W3', 'M1', 'P2'),
('Me026', 'W4', 'M1', 'P2'),
('Me001', 'W5', 'M1', 'P2'),
('Me027', 'W5', 'M1', 'P2'),
('Me028', 'W5', 'M1', 'P2'),
('Me029', 'W1', 'M1', 'P3'),
('Me030', 'W1', 'M1', 'P3'),
('Me031', 'W1', 'M1', 'P3'),
('Me032', 'W1', 'M1', 'P3'),
('Me033', 'W1', 'M1', 'P3'),
('Me035', 'W2', 'M1', 'P3'),
('Me036', 'W3', 'M1', 'P3'),
('Me037', 'W3', 'M1', 'P3'),
('Me038', 'W3', 'M1', 'P3'),
('Me039', 'W4', 'M1', 'P3'),
('Me040', 'W5', 'M1', 'P3'),
('Me041', 'W5', 'M1', 'P3'),
('Me042', 'W5', 'M1', 'P3'),
('Me043', 'W5', 'M1', 'P3'),
('Me044', 'W5', 'M1', 'P3'),
('Me006', 'W1', 'M2', 'P1'),
('Me048', 'W1', 'M2', 'P1'),
('Me010', 'W1', 'M2', 'P1'),
('Me045', 'W1', 'M2', 'P1'),
('Me032', 'W1', 'M2', 'P1'),
('Me047', 'W1', 'M2', 'P1'),
('Me150', 'W1', 'M2', 'P1'),
('Me049', 'W2', 'M2', 'P1'),
('Me086', 'W2', 'M2', 'P1'),
('Me051', 'W3', 'M2', 'P1'),
('Me034', 'W3', 'M2', 'P1'),
('Me052', 'W4', 'M2', 'P1'),
('Me087', 'W4', 'M2', 'P1'),
('Me054', 'W5', 'M2', 'P1'),
('Me055', 'W5', 'M2', 'P1'),
('Me042', 'W5', 'M2', 'P1'),
('Me056', 'W5', 'M2', 'P1'),
('Me008', 'W5', 'M2', 'P1'),
('Me054', 'W1', 'M2', 'P2'),
('Me057', 'W1', 'M2', 'P2'),
('Me083', 'W1', 'M2', 'P2'),
('Me089', 'W1', 'M2', 'P2'),
('Me151', 'W1', 'M2', 'P2'),
('Me142', 'W1', 'M2', 'P2'),
('Me059', 'W2', 'M2', 'P2'),
('Me145', 'W2', 'M2', 'P2'),
('Me091', 'W2', 'M2', 'P2'),
('Me010', 'W3', 'M2', 'P2'),
('Me092', 'W3', 'M2', 'P2'),
('Me093', 'W3', 'M2', 'P2'),
('Me062', 'W4', 'M2', 'P2'),
('Me139', 'W4', 'M2', 'P2'),
('Me090', 'W4', 'M2', 'P2'),
('Me010', 'W5', 'M2', 'P2'),
('Me065', 'W5', 'M2', 'P2'),
('Me098', 'W5', 'M2', 'P2'),
('Me084', 'W5', 'M2', 'P2'),
('Me006', 'W5', 'M2', 'P2'),
('Me040', 'W1', 'M2', 'P3'),
('Me099', 'W1', 'M2', 'P3'),
('Me100', 'W1', 'M2', 'P3'),
('Me058', 'W1', 'M2', 'P3'),
('Me078', 'W1', 'M2', 'P3'),
('Me155', 'W2', 'M2', 'P3'),
('Me101', 'W2', 'M2', 'P3'),
('Me156', 'W2', 'M2', 'P3'),
('Me060', 'W3', 'M2', 'P3'),
('Me061', 'W3', 'M2', 'P3'),
('Me153', 'W4', 'M2', 'P3'),
('Me063', 'W4', 'M2', 'P3'),
('Me064', 'W5', 'M2', 'P3'),
('Me097', 'W5', 'M2', 'P3'),
('Me032', 'W5', 'M2', 'P3'),
('Me102', 'W5', 'M2', 'P3'),
('Me018', 'W5', 'M2', 'P3'),
('Me008', 'W5', 'M2', 'P3'),
('Me064', 'W1', 'M3', 'P1'),
('Me103', 'W1', 'M3', 'P1'),
('Me119', 'W1', 'M3', 'P1'),
('Me082', 'W2', 'M3', 'P1'),
('Me104', 'W2', 'M3', 'P1'),
('Me066', 'W3', 'M3', 'P1'),
('Me096', 'W3', 'M3', 'P1'),
('Me096', 'W3', 'M3', 'P1'),
('Me097', 'W3', 'M3', 'P1'),
('Me021', 'W3', 'M3', 'P1'),
('Me017', 'W4', 'M3', 'P1'),
('Me018', 'W4', 'M3', 'P1'),
('Me019', 'W5', 'M3', 'P1'),
('Me110', 'W5', 'M3', 'P1'),
('Me066', 'W1', 'M3', 'P2'),
('Me067', 'W1', 'M3', 'P2'),
('Me068', 'W1', 'M3', 'P2'),
('Me085', 'W1', 'M3', 'P2'),
('Me157', 'W1', 'M3', 'P2'),
('Me070', 'W2', 'M3', 'P2'),
('Me148', 'W2', 'M3', 'P2'),
('Me066', 'W3', 'M3', 'P2'),
('Me072', 'W3', 'M3', 'P2'),
('Me073', 'W3', 'M3', 'P2'),
('Me074', 'W3', 'M3', 'P2'),
('Me075', 'W3', 'M3', 'P2'),
('Me157', 'W3', 'M3', 'P2'),
('Me050', 'W3', 'M3', 'P2'),
('Me076', 'W4', 'M3', 'P2'),
('Me085', 'W4', 'M3', 'P2'),
('Me158', 'W5', 'M3', 'P2'),
('Me077', 'W5', 'M3', 'P2'),
('Me143', 'W5', 'M3', 'P2'),
('Me114', 'W1', 'M3', 'P3'),
('Me079', 'W1', 'M3', 'P3'),
('Me152', 'W1', 'M3', 'P3'),
('Me119', 'W1', 'M3', 'P3'),
('Me115', 'W2', 'M3', 'P3'),
('Me116', 'W2', 'M3', 'P3'),
('Me066', 'W3', 'M3', 'P3'),
('Me081', 'W3', 'M3', 'P3'),
('Me069', 'W3', 'M3', 'P3'),
('Me111', 'W3', 'M3', 'P3'),
('Me107', 'W4', 'M3', 'P3'),
('Me108', 'W4', 'M3', 'P3'),
('Me046', 'W5', 'M3', 'P3'),
('Me117', 'W5', 'M3', 'P3'),
('Me146', 'W5', 'M3', 'P3'),
('Me118', 'W5', 'M3', 'P3'),
('Me010', 'W1', 'M4', 'P1'),
('Me120', 'W1', 'M4', 'P1'),
('Me147', 'W1', 'M4', 'P1'),
('Me144', 'W1', 'M4', 'P1'),
('Me094', 'W2', 'M4', 'P1'),
('Me121', 'W2', 'M4', 'P1'),
('Me066', 'W3', 'M4', 'P1'),
('Me088', 'W3', 'M4', 'P1'),
('Me122', 'W3', 'M4', 'P1'),
('Me123', 'W4', 'M4', 'P1'),
('Me149', 'W4', 'M4', 'P1'),
('Me064', 'W5', 'M4', 'P1'),
('Me124', 'W5', 'M4', 'P1'),
('Me125', 'W5', 'M4', 'P1'),
('Me159', 'W5', 'M4', 'P1'),
('Me126', 'W5', 'M4', 'P1'),
('Me006', 'W1', 'M4', 'P2'),
('Me127', 'W1', 'M4', 'P2'),
('Me128', 'W1', 'M4', 'P2'),
('Me064', 'W1', 'M4', 'P2'),
('Me129', 'W1', 'M4', 'P2'),
('Me030', 'W1', 'M4', 'P2'),
('Me130', 'W1', 'M4', 'P2'),
('Me071', 'W1', 'M4', 'P2'),
('Me095', 'W2', 'M4', 'P2'),
('Me080', 'W2', 'M4', 'P2'),
('Me131', 'W2', 'M4', 'P2'),
('Me066', 'W3', 'M4', 'P2'),
('Me132', 'W3', 'M4', 'P2'),
('Me069', 'W3', 'M4', 'P2'),
('Me133', 'W3', 'M4', 'P2'),
('Me134', 'W3', 'M4', 'P2'),
('Me135', 'W3', 'M4', 'P2'),
('Me136', 'W4', 'M4', 'P2'),
('Me137', 'W5', 'M4', 'P2'),
('Me138', 'W5', 'M4', 'P2'),
('Me006', 'W1', 'M4', 'P3'),
('Me127', 'W1', 'M4', 'P3'),
('Me128', 'W1', 'M4', 'P3'),
('Me064', 'W1', 'M4', 'P3'),
('Me129', 'W1', 'M4', 'P3'),
('Me030', 'W1', 'M4', 'P3'),
('Me130', 'W1', 'M4', 'P3'),
('Me071', 'W1', 'M4', 'P3'),
('Me095', 'W2', 'M4', 'P3'),
('Me154', 'W2', 'M4', 'P3'),
('Me131', 'W2', 'M4', 'P3'),
('Me066', 'W3', 'M4', 'P3'),
('Me132', 'W3', 'M4', 'P3'),
('Me069', 'W3', 'M4', 'P3'),
('Me133', 'W3', 'M4', 'P3'),
('Me134', 'W3', 'M4', 'P3'),
('Me135', 'W3', 'M4', 'P3'),
('Me136', 'W4', 'M4', 'P3'),
('Me137', 'W5', 'M4', 'P3'),
('Me140', 'W5', 'M4', 'P3');

-- --------------------------------------------------------

--
-- Table structure for table `hitung_demo`
--

CREATE TABLE `hitung_demo` (
  `id` varchar(5) NOT NULL,
  `id_pelatihan` int(3) NOT NULL,
  `k_gizi` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hitung_demo`
--

INSERT INTO `hitung_demo` (`id`, `id_pelatihan`, `k_gizi`) VALUES
('DE001', 8, 16.8953),
('DE001', 9, 19.0471),
('DE001', 10, 6.87405),
('DE001', 11, 17.5235),
('DE001', 12, 9.35949),
('DE001', 13, 19.4145),
('DE001', 14, 18.9642);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` varchar(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(6) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `level` enum('1','2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`, `nama_lengkap`, `alamat`, `no_telp`, `level`) VALUES
('US001', 'admin', 'admin1', 'Admin', 'Jember', '085732328500', '1'),
('US002', 'pelatih', '123456', 'Pelatih', 'Jember', '089608510339', '2'),
('US003', 'kiki', '123456', 'Rizky Aulia', 'Lumajang', '085732328500', '3'),
('US004', 'Diah_Ayu', 'diahay', 'Diah Ayu Wulandari Keswoyo', 'DS.Genaharji, Kec.Semanding, Kab.Tuban, Jawa Timur', '082230578066', '3'),
('US005', 'arie_akbar', '123456', 'Arie Akbar Rafsanjani', 'Jl. Trunojoyo G.7 Blok 3 no 157', '081359109242', '3'),
('US006', 'Trusinda Kumala ', 'mala12', 'Trusinda Kumala Dewi', 'Dsn. Banyurip RT 03 RW 03 Ds. Rejoso Kec. Rejoso Kab. Nganjuk', '081554562152', '3'),
('US007', 'G41191635', 'fikri1', 'Mohamad Fikri Rizaldi Romadhani', 'jl.baturaden 1 no 9', '082132851423', '3'),
('US008', 'atlet01', '123456', 'Atlet Karate', 'Jember', '085732328500', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bahan`
--

CREATE TABLE `tbl_bahan` (
  `id_menu` varchar(5) NOT NULL,
  `bahan` varchar(50) DEFAULT NULL,
  `berat` int(3) DEFAULT NULL,
  `energi` float DEFAULT NULL,
  `protein` float DEFAULT NULL,
  `lemak` float DEFAULT NULL,
  `kh` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bahan`
--

INSERT INTO `tbl_bahan` (`id_menu`, `bahan`, `berat`, `energi`, `protein`, `lemak`, `kh`) VALUES
('Me001', 'Beras (100g)', 100, 130, 2.4, 0.2, 28.6),
('Me002', 'Daging ayam', 50, 142.4, 13.4, 9.4, 0),
('Me003', 'Udang ', 50, 39.6, 8.4, 0.4, 0),
('Me004', 'Tahu', 55, 41.8, 4.5, 2.6, 1),
('Me004', 'Minyak ', 3, 21.6, 0, 2.5, 0),
('Me005', 'Pepaya muda', 100, 44.9, 0.4, 2.1, 7),
('Me006', 'Tepung susu skim', 30, 110.4, 10.7, 0.6, 15.4),
('Me007', 'Buah Pepaya', 100, 39, 0.6, 0.1, 9.8),
('Me008', 'Air putih', 250, 0, 0, 0, 0),
('Me009', 'Melon', 100, 38.2, 0.6, 0.2, 0.3),
('Me009', 'Semangka', 50, 19.1, 0.3, 0.1, 4.1),
('Me009', 'Agar agar', 59, 0, 0, 0, 0),
('Me009', 'Gula pasir', 13, 50.3, 0, 0, 13),
('Me009', 'Mayonaise', 50, 241.2, 0.3, 26, 2.5),
('Me009', 'Yoghurt ', 10, 6.4, 0.3, 0.3, 0.5),
('Me009', 'Susu sapi', 50, 33, 1.6, 2, 2.4),
('Me009', 'Keju ', 10, 29.5, 3.2, 1.8, 0),
('Me010', 'Beras (75g)', 75, 97.5, 1.8, 0.2, 21.5),
('Me011', 'Ikan tongkol', 50, 55.4, 12, 0.5, 0),
('Me011', 'Daging ayam bagian sayap', 50, 74, 7, 4.9, 0),
('Me012', 'Tempe ', 50, 177, 8.6, 13.4, 7.7),
('Me012', 'Minyak kelapa', 3, 21.6, 0, 2.5, 0),
('Me013', 'Bayam', 100, 37, 3.7, 0.2, 7.3),
('Me014', 'Semangka ', 50, 19.1, 0.3, 0.1, 4.1),
('Me014', 'Gula pasir', 13, 50.3, 0, 0, 13),
('Me015', 'Tahu', 100, 76, 8.1, 4.8, 1.9),
('Me015', 'Minyak ', 3, 21.6, 0, 2.5, 0),
('Me016', 'Udang segar', 100, 79.1, 16.7, 0.9, 0),
('Me016', 'Tempe ', 50, 99.6, 9.5, 3.8, 8.5),
('Me016', 'Minyak kelapa', 3, 21.6, 0, 2.5, 0),
('Me017', 'Kacang panjang', 50, 17.4, 0.9, 0.2, 4),
('Me017', 'Krai/mentimun', 50, 6.5, 0.3, 0.1, 1.4),
('Me017', 'Air putih', 0, 0, 0, 0, 0),
('Me018', 'Tepung susu skim', 20, 73.6, 7.1, 0.4, 10.3),
('Me019', 'Havermuth', 100, 61.9, 2.6, 1, 10.8),
('Me019', 'Susu skim tanpa lemak', 100, 34.9, 3.4, 0.2, 4.9),
('Me019', 'Kacang mete', 50, 294.5, 10, 26.1, 10.2),
('Me019', 'Strawberry fresh', 100, 32, 0.8, 0.4, 5.5),
('Me020', 'Susu skim tanpa lemak', 200, 69.8, 6.8, 0.4, 9.8),
('Me020', 'Gula pasir', 13, 50.3, 0, 0, 13),
('Me021', 'Apel', 50, 29.5, 0.1, 0.2, 7.7),
('Me022', 'Ubi jalar kuning', 100, 102.1, 2.1, 0.1, 24.3),
('Me022', 'Minyak kelapa', 5, 43.1, 0, 5, 0),
('Me023', 'Wortel ', 50, 12.9, 0.5, 0.1, 2.4),
('Me023', 'Kubis', 50, 12.4, 0.7, 0.1, 2.1),
('Me023', 'Buncis', 50, 17.4, 0.9, 0.2, 4),
('Me023', 'Daging sapi', 50, 134.4, 12.4, 9, 0),
('Me024', 'Tempe ', 50, 99.5, 9.5, 3.8, 8.5),
('Me024', 'Minyak ', 5, 43.1, 0, 5, 0),
('Me025', 'Strawberry', 100, 32, 0.8, 0.4, 5.5),
('Me025', 'Gula pasir ', 13, 50.3, 0, 0, 13),
('Me026', 'Kacang kedelai', 50, 207.5, 18.3, 10, 15.1),
('Me026', 'Gula pasir', 8, 31, 0, 0, 8),
('Me026', 'Air putih', 0, 0, 0, 0, 0),
('Me027', 'Daging ayam', 80, 227.9, 21.5, 15.1, 0),
('Me027', 'Udang', 35, 27.7, 5.8, 0.3, 0),
('Me027', 'Wortel', 50, 12.9, 0.5, 0.1, 2.4),
('Me027', 'Jamur coklat', 50, 13.5, 1.1, 0.3, 2.5),
('Me027', 'Kubis ', 50, 12.4, 0.7, 0.1, 2.1),
('Me027', 'Tahu ', 100, 76, 8.1, 4.8, 1.9),
('Me027', 'Bakso pentol', 30, 111, 7.1, 9, 0),
('Me028', 'Jeruk manis', 100, 47.1, 0.9, 0.1, 11.8),
('Me028', 'Gula pasir', 7, 27.1, 0, 0, 7),
('Me028', 'Air putih', 0, 0, 0, 0, 0),
('Me029', 'Kentang ', 100, 93, 2, 0.1, 21.6),
('Me029', 'Mentega ', 10, 71, 0, 8.1, 0),
('Me030', 'Daging ayam', 50, 142.4, 13.4, 9.4, 0),
('Me031', 'Wortel ', 50, 12.9, 0.5, 0.1, 2.4),
('Me032', 'Telur ayam', 50, 77.6, 6.3, 5.3, 0.6),
('Me032', 'Minyak kelapa', 5, 43.1, 0, 5, 0),
('Me033', 'Jeruk manis', 100, 47.1, 0.9, 0.1, 11.8),
('Me033', 'Gula pasir', 13, 50.3, 0, 0, 13),
('Me033', 'Tepung susu skim', 30, 110.4, 10.7, 0.6, 15.4),
('Me033', 'Pisang raja', 100, 92, 1, 0.5, 23.4),
('Me033', 'Strawberry fresh', 100, 32, 0.8, 0.4, 5.5),
('Me034', 'Kelapa muda daging + air', 100, 70, 0.5, 3.4, 10),
('Me035', 'Kentang ', 100, 93, 2, 0.1, 21.6),
('Me035', 'Keju ', 30, 50.2, 11.4, 0.3, 0),
('Me035', 'Tepung terigu', 20, 72.8, 2.1, 0.2, 15.3),
('Me035', 'Minyak kelapa', 5, 43.1, 0, 5, 0),
('Me036', 'Lontong ', 100, 188.1, 2.2, 4.2, 35.5),
('Me037', 'Selada air mentah', 30, 11.1, 1.1, 0.1, 2.2),
('Me037', 'Kentang', 50, 46.5, 1, 0.1, 10.8),
('Me037', 'Kacang panjang ', 50, 17.4, 0.9, 0.2, 4),
('Me037', 'Toge kacang hijau ', 50, 30.5, 3.3, 1.7, 2.4),
('Me037', 'Tomat ', 10, 2, 0.1, 0, 0.3),
('Me037', 'Kacang tanah tanpa kulit', 10, 56.7, 2.6, 4.9, 1.6),
('Me037', 'Gula pasir', 10, 38.7, 0, 0, 10),
('Me037', 'Tahu ', 50, 38, 4.1, 2.4, 0.9),
('Me037', 'Tempe kedele murni', 50, 99.5, 9.5, 3.8, 8.5),
('Me037', 'Minyak kelapa', 5, 43.1, 0, 5, 0),
('Me038', 'Kelapa muda daging + air ', 100, 0.5, 3.4, 10, 0.9),
('Me039', 'Apel ', 50, 29.5, 0.1, 0.2, 7.7),
('Me039', 'Melon ', 50, 19.1, 0.3, 0.1, 4.1),
('Me039', 'Semangka ', 50, 19.1, 0.3, 0.1, 4.1),
('Me039', 'yoghurt', 50, 32.1, 1.5, 1.7, 2.3),
('Me039', 'Susu kental manis', 30, 96, 2.3, 2.6, 16.4),
('Me040', 'Nasi jagung ', 150, 181.4, 4.2, 0.9, 40.8),
('Me041', 'Tahu', 50, 38, 4.1, 2.4, 0.9),
('Me042', 'Tempe kedele murni', 50, 99.5, 9.5, 3.8, 8.5),
('Me043', 'Ikan asin pari', 50, 41.9, 9.1, 0.3, 0),
('Me044', 'Terong belanda/ungu', 50, 14, 0.4, 0.1, 3.3),
('Me044', 'Santan (kelapa dan air)', 20, 21.2, 0.2, 2, 0.9),
('Me044', 'Kacang panjang mentah', 50, 17.4, 0.9, 0.2, 4),
('Me044', 'Minyak ', 5, 43.1, 0, 5, 0),
('Me045', 'Daging ayam', 50, 142, 13.4, 9.4, 0),
('Me046', 'Lontong ', 150, 282.1, 3.3, 6.3, 53.3),
('Me047', 'Wortel ', 50, 12.9, 0.5, 0.1, 0.9),
('Me047', 'Brokoli ', 50, 11.6, 1.6, 0.1, 0.9),
('Me047', 'Buncis ', 50, 30.5, 3.3, 1.7, 2.4),
('Me048', 'Roti susu', 50, 153, 5.4, 3, 25.5),
('Me048', 'Keju ', 20, 33.5, 7.6, 0.2, 0),
('Me048', 'Alpukat', 30, 65.2, 0.6, 7.1, 0.1),
('Me049', 'Tahu ', 100, 76, 8, 4.8, 1.9),
('Me049', 'Tepung terigu', 50, 182, 5.2, 0.5, 38.2),
('Me049', 'Minyak kelapa', 5, 43.1, 0, 5, 0),
('Me050', 'Melon ', 100, 38.2, 0.6, 0.2, 8.3),
('Me051', 'Mie kering', 50, 162.5, 4.8, 3.2, 28.3),
('Me051', 'Bakso daging sapi', 75, 277.5, 17.6, 22.4, 0.1),
('Me051', 'Sawi hijau', 100, 15.1, 2.3, 0.2, 2.1),
('Me051', 'Daun bawang', 30, 6.3, 0.4, 0.2, 1.5),
('Me052', 'Kedondong ', 25, 8, 0.2, 0.1, 1.8),
('Me052', 'Mangga muda', 25, 16.3, 0.1, 0.1, 4.3),
('Me052', 'Jambu biji', 25, 12.7, 0.2, 0.2, 3),
('Me052', 'Pepaya muda mentah', 25, 5.5, 0.3, 0.1, 1.1),
('Me052', 'Kacang tanah tanpa kulit', 25, 141.7, 6.4, 12.3, 4),
('Me052', 'Gula aren', 10, 36.9, 0.1, 0, 9.4),
('Me053', 'Mangga harum manis', 50, 32.5, 0.3, 0.2, 8.5),
('Me054', 'Beras (50g)', 50, 130, 2.4, 0.2, 28.6),
('Me055', 'Ikan lele', 75, 62.9, 11.1, 1.7, 0),
('Me056', 'Daun kemangi', 50, 10.5, 0.6, 0.3, 2.5),
('Me056', 'Kubis ', 50, 12.4, 0.7, 0.1, 2.1),
('Me056', 'Minyak kelapa', 5, 0, 0, 5, 0),
('Me057', 'Daun pepaya ', 20, 12, 1.1, 0.2, 2.2),
('Me057', 'Kacang panjang ', 20, 7, 0.4, 0.1, 1.6),
('Me057', 'Toge ', 20, 12.2, 1.3, 0.7, 1),
('Me057', 'Kelapa parut', 20, 35.4, 0.3, 3.4, 1.5),
('Me058', 'Ikan asin ', 30, 48.6, 3.9, 3.6, 0),
('Me058', 'Minyak kelapa', 5, 43.1, 0, 5, 0),
('Me059', 'Kentang ', 50, 46.5, 1, 0.1, 10.8),
('Me059', 'Mentega', 10, 71, 0, 8.1, 0),
('Me059', 'Tepung susu skim', 20, 73.6, 7.1, 0.4, 10.3),
('Me060', 'Lontong', 150, 282.1, 3.3, 6.3, 53.3),
('Me060', 'Bakso daging sapi', 100, 370, 23.5, 29.9, 0.1),
('Me060', 'Tahu putih', 30, 22.8, 2.4, 1.4, 0.6),
('Me060', 'Sawi ', 20, 7.4, 0.7, 0, 1.5),
('Me061', 'milo', 50, 193.5, 5.4, 4.8, 32.9),
('Me061', 'Gula pasir', 10, 38.7, 0, 0, 10),
('Me061', 'Air putih', 250, 0, 0, 0, 0),
('Me062', 'Melon fresh', 100, 38.2, 0.6, 0.2, 8.3),
('Me062', 'Semangka', 100, 38.2, 0.6, 0.2, 8.3),
('Me062', 'Nanas ', 100, 38.2, 0.6, 0.2, 8.3),
('Me063', 'Telur puyuh', 200, 370, 25.6, 27.6, 3),
('Me064', 'Beras (150g)', 150, 195, 3.6, 0.3, 42.9),
('Me065', 'Ikan cumi ', 100, 272, 26, 12.3, 12.6),
('Me066', 'Beras (200g)', 200, 260, 4.8, 0.4, 57.2),
('Me067', 'Daging ayam', 150, 427.3, 40.3, 28.3, 0),
('Me067', 'Udang', 100, 79.1, 16.7, 0.9, 0),
('Me068', 'Bayam', 100, 37, 3.7, 0.2, 7.3),
('Me068', 'Santan', 50, 53.1, 0.5, 5.1, 2.3),
('Me069', 'Krupuk udang', 20, 105.4, 0.6, 6.1, 11.9),
('Me070', 'Manga muda', 30, 19.5, 0.2, 0.1, 5.1),
('Me070', 'Nanas ', 20, 9.8, 0.1, 0.1, 2.5),
('Me070', 'Ketimun ', 30, 3.9, 0.2, 0, 0.8),
('Me070', 'Papaya muda', 30, 6.6, 0.3, 0.1, 1.4),
('Me070', 'Gula merah', 20, 75.2, 0, 0, 19.5),
('Me071', 'Melon fresh', 100, 38.2, 0.6, 0, 8.3),
('Me071', 'Gula pasir', 13, 50.3, 0, 0, 13),
('Me071', 'Air putih', 250, 0, 0, 0, 0),
('Me072', 'Kangkung', 100, 15.1, 2.3, 0.2, 2.1),
('Me072', 'Kecap', 10, 6, 1, 0, 0.6),
('Me072', 'Gula', 5, 19.3, 0, 0, 5),
('Me073', 'Tempe kedelai', 100, 199.1, 19, 7.7, 17),
('Me074', 'Ikan mas ', 100, 218, 16.7, 15.7, 2.9),
('Me074', 'minyak', 5, 43.1, 0, 5, 0),
('Me075', 'Udang segar ', 50, 39.6, 8.4, 0.4, 0),
('Me076', 'Roti tawar manis', 100, 284.9, 7.9, 2.7, 56.7),
('Me076', 'Selai blackberry', 20, 53.4, 0.1, 0.1, 12.8),
('Me076', 'Selai strawberry', 20, 53.6, 0.1, 0, 13),
('Me077', 'Udang segar', 20, 15.8, 3.3, 0.2, 0),
('Me077', 'Tepung terigu ', 40, 145.6, 4.1, 0.4, 30.5),
('Me078', 'Jeruk manis', 50, 23.5, 0.4, 0.1, 5.9),
('Me078', 'Gula pasir', 10, 38.7, 0, 0, 10),
('Me078', 'Air putih', 250, 0, 0, 0, 0),
('Me079', 'Roti tawar manis', 50, 142.4, 4, 1.4, 28.4),
('Me079', 'Keju ', 10, 16.7, 3.8, 0.1, 0),
('Me080', 'Biskuit ', 40, 40, 2.8, 4.2, 31.2),
('Me081', 'Soto ayam', 100, 108, 7.4, 4.6, 8.7),
('Me082', 'Semangka ', 75, 28.7, 0.5, 0.2, 6.2),
('Me082', 'Melon ', 100, 39, 0.6, 0.1, 9.8),
('Me082', 'Papaya', 100, 38.2, 0.6, 0.2, 8.3),
('Me082', 'Strawberry ', 100, 32, 0.8, 0.4, 5.5),
('Me083', 'Daging ayam bagian paha', 100, 213.9, 20.2, 14.2, 0),
('Me084', 'Minyak kelapa', 5, 43.1, 0, 5, 0),
('Me084', 'Wortel ', 50, 12.9, 0.5, 0.1, 2.4),
('Me084', 'Brokoli ', 100, 23.2, 3.2, 0.2, 1.5),
('Me084', 'Jamur coklat mentah', 30, 8.1, 0.7, 0.2, 1.5),
('Me084', 'Jamur kuping', 50, 13.5, 1.1, 0.3, 2.5),
('Me085', 'Tepung susu', 20, 92.8, 4.3, 3.8, 10.3),
('Me085', 'Gula pasir', 10, 38.7, 0, 9.9, 10),
('Me086', 'Semangka fresh', 100, 38.2, 0.6, 0.2, 8.3),
('Me087', 'Sirsak matang', 50, 32.5, 0.3, 0.2, 8.5),
('Me088', 'Ayam', 100, 284.9, 26.9, 18.9, 0),
('Me088', 'Minyak kelapa', 10, 86.2, 0, 10, 0),
('Me089', 'Ikan pindang juwi', 50, 56, 10.7, 1.1, 0),
('Me090', 'Air putih', 200, 0, 0, 0, 0),
('Me091', 'Mangga arum manis', 100, 65, 0.5, 0.3, 17),
('Me091', 'Gula pasir', 13, 50.3, 0, 0, 13),
('Me091', 'Air putih', 200, 0, 0, 0, 0),
('Me092', 'Daging sapi', 50, 134.4, 12.4, 9, 0),
('Me092', 'Tahu', 50, 38, 4.1, 2.4, 0.9),
('Me092', 'Udang segar', 50, 39.6, 8.4, 0.4, 0),
('Me093', 'Wortel ', 50, 25.8, 1, 0.2, 4.8),
('Me093', 'Buncis ', 100, 34.9, 1.9, 0.3, 7.9),
('Me093', 'Kubis putih', 50, 38.2, 0.5, 0.2, 8.3),
('Me094', 'Semangka ', 100, 38.2, 0.6, 0.2, 8.3),
('Me094', 'Nanas ', 100, 49, 0.4, 0.4, 12.4),
('Me094', 'Anggur merah', 100, 71, 0.7, 0.3, 15.6),
('Me095', 'Semangka ', 100, 100, 32, 0.6, 7.2),
('Me095', 'Melon', 100, 100, 28.2, 0.6, 8.3),
('Me095', 'Anggur merah', 100, 100, 71, 0.7, 15.6),
('Me096', 'Cumi cumi', 100, 147, 25, 2.2, 5),
('Me097', 'Ikan cumi ', 100, 272, 26, 12.3, 12.6),
('Me098', 'Bakso daging sapi', 50, 185, 11.8, 14.9, 0.1),
('Me099', 'Kubis ', 10, 3.7, 0.4, 0, 0.7),
('Me099', 'Kacang panjang', 20, 7, 0.4, 0.1, 1.6),
('Me099', 'Tauge ', 20, 12.2, 1.3, 0.7, 1),
('Me099', 'Kelapa parut', 20, 35.4, 0.3, 3.4, 1.5),
('Me100', 'Telur ayam', 50, 77.6, 6.3, 5.3, 0.6),
('Me101', 'Buncis ', 20, 5.2, 0.2, 0, 1),
('Me102', 'Wortel', 50, 12.9, 0.5, 0.1, 2.4),
('Me102', 'Brokoli', 100, 23.2, 3.2, 0.2, 1),
('Me102', 'Jamur coklat', 30, 8.1, 0.7, 0.2, 1.5),
('Me102', 'Jamur kuping', 50, 13.5, 1.1, 0.3, 2.5),
('Me103', 'Ayam ', 50, 142.4, 13.4, 9.4, 0),
('Me103', 'Telur ayam', 50, 77.6, 6.3, 5.3, 0.6),
('Me103', 'Kaldu ayam', 20, 1.6, 0.1, 0.1, 0.2),
('Me103', 'Krupuk udang', 20, 105.4, 0.6, 6.1, 11.9),
('Me104', 'Susu sapi', 200, 131.9, 6.4, 7.8, 9.6),
('Me104', 'Gula pasir', 13, 50.3, 0, 0, 13),
('Me105', 'Udang segar', 50, 39.6, 8.4, 0.4, 0),
('Me105', 'Tempe ', 75, 149.3, 14.3, 5.8, 12.8),
('Me106', 'Kangkung', 100, 15.1, 2.3, 0.2, 2.1),
('Me107', 'Ubi jalar putih', 200, 224.2, 4.8, 0.2, 52.6),
('Me107', 'Tepung sagu', 100, 381, 0.3, 0.1, 91.3),
('Me107', 'Gula merah', 80, 300.8, 0, 0, 77.8),
('Me107', 'Kelapa muda ', 60, 42, 0.3, 2, 6),
('Me108', 'Jus alpukat +susu', 75, 71.2, 1, 3.6, 9.8),
('Me109', 'Nasi goreng', 150, 375, 5.3, 25.8, 30.2),
('Me109', 'Telur ayam', 50, 77.6, 6.3, 5.3, 0.6),
('Me110', 'Teh', 50, 25, 0, 0, 5),
('Me110', 'Gula pasir', 13, 50.3, 0, 0, 13),
('Me110', 'Air putih ', 250, 0, 0, 0, 0),
('Me111', 'Susu sapi', 200, 131.9, 6.4, 7.8, 9.6),
('Me112', 'Telur ayam', 50, 77.6, 5.3, 55.3, 0.6),
('Me112', 'Sosis sapi', 50, 142.6, 5.8, 13.5, 0),
('Me112', 'Sawi hijau', 50, 7.5, 1.1, 0.1, 1),
('Me112', 'Tepung maizena', 10, 38.1, 0, 0, 9.1),
('Me113', 'Teh', 10, 5, 0, 0, 1),
('Me113', 'Gula pasir', 10, 38.7, 0, 0, 10),
('Me114', 'Susu sapi', 200, 131.9, 6.4, 7.8, 9.6),
('Me114', 'Strawberry ', 50, 16, 0.4, 0.2, 2.8),
('Me115', 'Pisang raja', 50, 46, 0.5, 0.3, 11.7),
('Me115', 'Tepung terigu', 30, 109.2, 3.1, 0.3, 22.9),
('Me115', 'Gula pasir', 13, 50.3, 0, 0, 13),
('Me116', 'Tape goreng', 50, 248, 0.9, 15.3, 28.6),
('Me116', 'Minyak', 5, 43.1, 0, 5, 0),
('Me117', 'Telur ayam', 50, 77.6, 6.3, 5.3, 0.6),
('Me118', 'Teh kotak', 200, 99.9, 0, 0, 20),
('Me119', 'Jeruk manis', 100, 47.1, 0.9, 0.1, 11.8),
('Me119', 'Gula pasir', 13, 50.3, 0, 0, 13),
('Me119', 'Air putih', 250, 0, 0, 0, 0),
('Me120', 'Tahu ', 75, 57, 6.1, 3.6, 1.4),
('Me120', 'Daging sapi', 50, 134.4, 12.4, 9, 0),
('Me120', 'Minyak kelapa', 5, 43.1, 0, 5, 0),
('Me121', 'Tepung susu', 30, 110.4, 10.7, 0.6, 15.4),
('Me121', 'kopi', 20, 25.8, 1.3, 0, 5.2),
('Me121', 'Air putih', 200, 0, 0, 0, 0),
('Me122', 'Tempe', 50, 99.5, 9.5, 3.8, 8.5),
('Me122', 'Kacang panjang', 100, 34.9, 1.9, 0.3, 7.9),
('Me122', 'sosis', 75, 163.5, 12.6, 12.6, 0.1),
('Me123', 'Tepung terigu', 75, 273, 7.7, 0.8, 57.2),
('Me123', 'Tepung maizena', 20, 76.2, 0.1, 0, 18.3),
('Me123', 'Telur ayam', 50, 77.6, 6.3, 5.3, 0.6),
('Me123', 'Gula pasir', 13, 50.3, 0, 0, 13),
('Me123', 'Susu UHT', 100, 66, 3.2, 3.9, 4.8),
('Me123', 'Mozarela ', 50, 147.3, 15.9, 9.1, 0),
('Me123', 'Tepung panir', 20, 72.4, 1.6, 0.7, 15.4),
('Me123', 'Coklat', 20, 95.4, 0.8, 5.9, 12.7),
('Me124', 'Sate ayam', 100, 314.1, 25.6, 23, 0),
('Me125', 'Krupuk udang', 30, 158.1, 0.9, 9.1, 17.9),
('Me126', 'Kebab ', 150, 111.9, 4.4, 3.3, 15.2),
('Me127', 'Roti keju', 70, 196.1, 6.7, 3.2, 34.6),
('Me128', 'Apel ', 60, 35.4, 0.1, 0.2, 9.2),
('Me129', 'Telur ayam', 50, 77.6, 6.3, 5.3, 0.6),
('Me130', 'Wortel', 100, 25.8, 1, 0, 4.8),
('Me130', 'Broccoli ', 100, 23.2, 3.2, 0, 1.9),
('Me131', 'Lemon', 100, 100, 100.1, 0.6, 19.8),
('Me131', 'Gula pasir', 13, 13, 50.3, 0, 13),
('Me132', 'Soto daging', 200, 113.8, 7.2, 9.2, 0),
('Me133', 'Telur asin', 50, 77.6, 6.3, 5.3, 0.6),
('Me134', 'Usus ayam', 50, 47, 7.1, 1.9, 0),
('Me135', 'Susu kental manis', 20, 64, 1.6, 1.7, 10.9),
('Me135', 'Strawberry ', 100, 32, 0.8, 0.4, 5.5),
('Me136', 'Agar agar with coconut', 50, 77, 1.3, 3, 12.8),
('Me136', 'Apel', 50, 29.5, 0, 0, 7.7),
('Me136', 'Semangka', 50, 16, 0, 0, 3.6),
('Me136', 'Melon ', 50, 19.1, 0, 0, 4),
('Me136', 'SKM', 30, 96, 2.3, 2.6, 16.4),
('Me136', 'Sirup', 20, 42.8, 0, 0, 11.1),
('Me136', 'Es batu', 200, 0, 0, 0, 0),
('Me137', 'Nasi goreng', 150, 375, 5.3, 25.8, 30.2),
('Me137', 'Telur ayam', 50, 77.6, 6.3, 5.3, 0.6),
('Me137', 'Ayam suwir', 20, 57, 5.4, 3.8, 0),
('Me137', 'Krupuk udang', 30, 158, 0, 9.1, 17.9),
('Me138', 'Kebab ', 150, 339.7, 27, 11.8, 30.9),
('Me138', 'Snack taro', 100, 501, 6, 25.7, 62),
('Me138', 'Air putih', 250, 0, 0, 0, 0),
('Me139', 'Telur puyuh', 200, 370, 25.6, 27.6, 3),
('Me140', 'Susu milo hangat', 40, 154.8, 4.3, 3.8, 26.3),
('Me140', 'Snack tic tic', 100, 558.1, 5.9, 38.4, 51),
('Me140', 'Usus ayam', 50, 47, 7.1, 1.9, 0),
('Me140', 'Sosis bakar', 100, 285.1, 11.5, 26.9, 0),
('Me140', 'Tahu bakar', 50, 38, 4.1, 2.4, 0.9),
('Me141', 'Jeruk manis', 100, 47.1, 0.9, 0.1, 11.8),
('Me141', 'Gula pasir', 13, 50.3, 0, 0, 13),
('Me141', 'Air putih', 250, 0, 0, 0, 0),
('Me142', 'Jeruk manis', 100, 47.1, 0.9, 0.1, 11.8),
('Me142', 'Air', 250, 0, 0, 0, 0),
('Me143', 'Jeruk manis', 50, 23.5, 0.4, 0.1, 5.9),
('Me143', 'Gula pasir', 5, 19.3, 0, 0, 5),
('Me144', 'Jeruk manis', 100, 47.1, 0.9, 0.1, 11.8),
('Me144', 'Gula pasir', 13, 50.3, 0, 0, 13),
('Me144', 'Es batu', 100, 0, 0, 0, 0),
('Me145', 'Wortel', 20, 5.2, 0.2, 0, 1),
('Me146', 'Udang segar', 100, 79.1, 16.7, 0.9, 0),
('Me146', 'Nagka muda', 50, 22, 0.7, 0.1, 5.1),
('Me146', 'Terong belanda', 50, 14, 0.4, 0.1, 3.3),
('Me146', 'Santan', 50, 53.1, 0.5, 5.1, 2.3),
('Me147', 'Nangka muda', 100, 44, 1.4, 0.2, 10.2),
('Me147', 'Kacang panjang', 50, 17.4, 0.9, 0.2, 4),
('Me148', 'Melon ', 100, 38.2, 0.6, 0.2, 8.3),
('Me148', 'Susu kental manis', 20, 64, 1.6, 1.7, 10.9),
('Me148', 'Air putih', 250, 0, 0, 0, 0),
('Me149', 'Melon ', 100, 38.2, 0.6, 0.2, 8.3),
('Me149', 'madu', 20, 60.8, 0.1, 0, 16.5),
('Me150', 'Buah melon', 100, 47.1, 0.9, 0.1, 11.8),
('Me150', 'Gula pasir', 13, 50.3, 0, 0, 13),
('Me151', 'Krupuk udang', 25, 131.8, 0.8, 7.6, 14.9),
('Me151', 'Minyak kelapa', 5, 43.1, 0, 5, 0),
('Me152', 'Kentang ', 150, 139.5, 3, 0.2, 32.4),
('Me152', 'Keju ', 20, 33.5, 7.6, 0.2, 0),
('Me152', 'Daging sapi', 50, 134.4, 12.4, 9, 0),
('Me152', 'Telur ayam', 50, 77.6, 6.3, 5.3, 0.6),
('Me153', 'Melon kuning', 100, 38.2, 0.6, 0.2, 8.3),
('Me153', 'Semangka', 100, 38.2, 0.6, 0.2, 8.3),
('Me153', 'Nanas ', 100, 49, 0.4, 0.4, 12.4),
('Me154', 'Telur puyuh ', 50, 92.5, 6.4, 6.9, 0),
('Me155', 'Kentang', 50, 46.5, 1, 0.1, 10.8),
('Me155', 'Mentega', 10, 71, 0, 8.1, 0),
('Me155', 'Tepung susu', 20, 92.8, 4.3, 3.8, 10.3),
('Me156', 'Manga ', 100, 65, 0.5, 0.3, 17),
('Me156', 'Tepung susu skim', 20, 64, 1.6, 1.7, 10.9),
('Me157', 'Kerupuk udang', 20, 109.8, 1.3, 5.7, 13.3),
('Me158', 'Nasi goreng', 2000, 500, 7, 34.4, 40.2),
('Me159', 'Jeruk manis', 100, 47.1, 0.9, 0.1, 11.8),
('Me159', 'Gula pasir', 13, 50.3, 0, 0, 13);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_demo`
--

CREATE TABLE `tbl_demo` (
  `id` varchar(5) NOT NULL,
  `bb_demo` float NOT NULL,
  `tb_demo` float NOT NULL,
  `u_demo` varchar(2) NOT NULL,
  `jk_demo` varchar(10) NOT NULL,
  `lp_demo` float NOT NULL,
  `lpi_demo` float NOT NULL,
  `lper_demo` float NOT NULL,
  `la_demo` float NOT NULL,
  `lb_demo` float NOT NULL,
  `imt_demo` float NOT NULL,
  `tot_demo` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_demo`
--

INSERT INTO `tbl_demo` (`id`, `bb_demo`, `tb_demo`, `u_demo`, `jk_demo`, `lp_demo`, `lpi_demo`, `lper_demo`, `la_demo`, `lb_demo`, `imt_demo`, `tot_demo`) VALUES
('DE001', 53, 1.55, '19', 'Perempuan', 75, 100, 15, 26, 22, 22.0604, 2607.6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kesimpulan`
--

CREATE TABLE `tbl_kesimpulan` (
  `id_user` varchar(5) NOT NULL,
  `id_login` varchar(5) NOT NULL,
  `status_gizi` varchar(10) NOT NULL,
  `id_range` varchar(2) NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kesimpulan`
--

INSERT INTO `tbl_kesimpulan` (`id_user`, `id_login`, `status_gizi`, `id_range`, `tgl_input`) VALUES
('ID001', 'US003', 'Normal', 'M2', '2020-08-04'),
('ID002', 'US003', 'Normal', 'M2', '2020-08-07'),
('ID003', 'US003', 'Normal', 'M2', '2020-08-08'),
('ID004', 'US003', 'Normal', 'M2', '2020-08-11'),
('ID005', 'US004', 'Normal', 'M2', '2020-08-14'),
('ID006', 'US004', 'Normal', 'M2', '2020-08-14'),
('ID007', 'US005', 'Normal', 'M3', '2020-08-14'),
('ID008', 'US005', 'Normal', 'M3', '2020-08-14'),
('ID009', 'US006', 'Normal', 'M2', '2020-08-14'),
('ID010', 'US007', 'Normal', 'M3', '2020-08-15'),
('ID011', 'US007', 'Normal', 'M3', '2020-08-15'),
('ID012', 'US006', 'Normal', 'M2', '2020-08-15'),
('ID013', 'US003', 'Normal', 'M3', '2020-08-21'),
('ID014', 'US008', 'Normal', 'M2', '2020-08-26'),
('ID015', 'US008', 'Normal', 'M2', '2020-09-03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id_menu` varchar(5) NOT NULL,
  `nama_menu` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`id_menu`, `nama_menu`) VALUES
('Me001', 'Nasi Putih (100 g)'),
('Me002', 'Ayam Goreng (50 g)'),
('Me003', 'Udang Goreng'),
('Me004', 'Tahu Goreng (55 g)'),
('Me005', 'Tumis Pepaya Muda'),
('Me006', 'Susu Hangat (30 g)'),
('Me007', 'Buah Pepaya'),
('Me008', 'Air Putih (250 g)'),
('Me009', 'Salad Buah 1'),
('Me010', 'Nasi Putih (75 g)'),
('Me011', 'Ayam dan Tongkol Bumbu Bali'),
('Me012', 'Tempe Orek'),
('Me013', 'Sayur Bening Bayam'),
('Me014', 'Jus Semangka'),
('Me015', 'Tahu Sumedang'),
('Me016', 'Udang dan Tempe Bumbu Bakar'),
('Me017', 'Sayur Asem'),
('Me018', 'Susu Hangat (20 g)'),
('Me019', 'Bubur Havermuth Toping Kacang Mete dan Strawberry'),
('Me020', 'Susu Hangat (200 g)'),
('Me021', 'Buah Apel (50g)'),
('Me022', 'Bola Bola Ubi Kuning Krispy'),
('Me023', 'Sop Daging Sapi'),
('Me024', 'Tempe Goreng'),
('Me025', 'Jus Strawberry'),
('Me026', 'Susu Kedelai'),
('Me027', 'Capjay Jamur Tiram'),
('Me028', 'Es Jeruk (100 g)'),
('Me029', 'Bubur Kentang'),
('Me030', 'Daging Ayam Kukus'),
('Me031', 'Wortel Steam (50 g)'),
('Me032', 'Telur Ayam Dadar'),
('Me033', 'Nutrishake + Buah'),
('Me034', 'Es Degan'),
('Me035', 'Kentang Isi Keju Krispy'),
('Me036', 'Lontong (100g)'),
('Me037', 'Gado Gado'),
('Me038', 'Es Kelapa Muda'),
('Me039', 'Salad Buah 2'),
('Me040', 'Nasi Jagung (150 g)'),
('Me041', 'Tahu Goreng (50 g)'),
('Me042', 'Tempe Goreng (50g)'),
('Me043', 'Ikan Asin'),
('Me044', 'Sayur Lodeh 1'),
('Me045', 'Ayam Bakar'),
('Me046', 'Lontong (150g)'),
('Me047', 'Tumis Sayur'),
('Me048', 'Sanwich Alpukat'),
('Me049', 'Tahu Krispy'),
('Me050', 'Buah Melon'),
('Me051', 'Mie Bakso'),
('Me052', 'Rujak Buah'),
('Me053', 'Jus Mangga Arum Manis (50)'),
('Me054', 'Nasi Putih (50 g)'),
('Me055', 'Ikan Lele Bakar'),
('Me056', 'Lalapan'),
('Me057', 'Sayur Urap 1'),
('Me058', 'Ikan Asin Goreng'),
('Me059', 'Mashed Potato'),
('Me060', 'Bakso'),
('Me061', 'Es Milo'),
('Me062', 'Buah Potong (Melon -  Semangka -  Nanas)'),
('Me063', 'Telur Puyuh Bakar'),
('Me064', 'Nasi Putih (150 g)'),
('Me065', 'Cumi Bakar (50g)'),
('Me066', 'Nasi Putih (200 g)'),
('Me067', 'Daging Ayam dan Udang Bumbu Balado Pedas'),
('Me068', 'Sayur Bobor Bayam'),
('Me069', 'Krupuk Udang 1 (20 g)'),
('Me070', 'Rujak Manis 1'),
('Me071', 'Jus Melon'),
('Me072', 'Cah Kangkung'),
('Me073', 'Tempe Goreng (100 g)'),
('Me074', 'Ikan Mas Goreng'),
('Me075', 'Udang Bakar'),
('Me076', 'Roti Isi Selai Balckberry dan Strawberry'),
('Me077', 'Udang Krispy'),
('Me078', 'Es Jeruk (50 g)'),
('Me079', 'Roti Bakar 1'),
('Me080', 'Biskuit'),
('Me081', 'Soto Ayam'),
('Me082', 'Buah Potong (Semangka -  Melon -  Papaya -  Strawberry)'),
('Me083', 'Ayam Goreng (100 g) 1'),
('Me084', 'Cap Jay 2'),
('Me085', 'Susu Hangat 1 (20 g) '),
('Me086', 'Buah Semangka'),
('Me087', 'Jus Sirsak'),
('Me088', 'Ayam Goreng (100g) 2'),
('Me089', 'Ikan Pindang Bumbu Bali'),
('Me090', 'Air Putih (200g)'),
('Me091', 'Jus Mangga Arum Manis (100)'),
('Me092', 'Daging Sapi Bistik'),
('Me093', 'Lalapan Sayur'),
('Me094', 'Buah Potong (Semangka -  Nanas -  Anggur Merah)'),
('Me095', 'Buah Potong (Semangka -  Melon -  Anggur Merah)'),
('Me096', 'Cumi Bakar (100g)'),
('Me097', 'Ikan Cumi Bakar'),
('Me098', 'Bakso Bakar'),
('Me099', 'Sayur Urap 2'),
('Me100', 'Telur Ayam Rebus'),
('Me101', 'Buncis Rebus'),
('Me102', 'Cap Jay Jamur'),
('Me103', 'Soto'),
('Me104', 'Susu Sapi'),
('Me105', 'Udang dan Tempe Bumbu Kecap'),
('Me106', 'Tumis Kangkung'),
('Me107', 'Kue Klepon'),
('Me108', 'Jus Alpukat'),
('Me109', 'Nasi Goreng + Telur'),
('Me110', 'Es Teh'),
('Me111', 'Es Susu'),
('Me112', 'Telur Orak Arik Saos Padang'),
('Me113', 'Teh Hangat '),
('Me114', 'Susu Shake Buah'),
('Me115', 'Pisang Goreng'),
('Me116', 'Tape Goreng'),
('Me117', 'Telur Ayam Kecap'),
('Me118', 'Teh Kotak'),
('Me119', 'Jus Jeruk'),
('Me120', 'Tahu dan Daging Empal Goreng'),
('Me121', 'Kopi Susu'),
('Me122', 'Orak Arik Kacang Panjang'),
('Me123', 'Corn Dog'),
('Me124', 'Sate Ayam'),
('Me125', 'Krupuk Udang (30g)'),
('Me126', 'Kebab'),
('Me127', 'Roti Keju'),
('Me128', 'Buah Apel (60g)'),
('Me129', 'Telur Ayam Ceplok'),
('Me130', 'Sayur Oseng'),
('Me131', 'Es Jus Lemon'),
('Me132', 'Soto Daging'),
('Me133', 'Telur Asin'),
('Me134', 'Usus Ayam Bakar'),
('Me135', 'Strawberry Shake'),
('Me136', 'Es Campur'),
('Me137', 'Nasi Goreng Spesial'),
('Me138', 'Camilan 1'),
('Me139', 'Telur Puyuh (200g)'),
('Me140', 'Camilan 2'),
('Me141', 'Es Jeruk Manis'),
('Me142', 'Es Jeruk 1'),
('Me143', 'Es Jeruk 2'),
('Me144', 'Es Jeruk 3'),
('Me145', 'Wortel Steam (20 g)'),
('Me146', 'Sayur Lodeh 2'),
('Me147', 'sayur Lodeh 3'),
('Me148', 'Jus Melon Susu'),
('Me149', 'Jus Melon Madu'),
('Me150', 'Melon'),
('Me151', 'Krupuk Udang (25g)'),
('Me152', 'Mashed Potato Panggang'),
('Me153', 'Buah Potong (Melon Kuning - Semangka - Nanas)'),
('Me154', 'Telur Puyuh (50g)'),
('Me155', 'Mashed Potato 2'),
('Me156', 'Jus Mangga'),
('Me157', 'Krupuk Udang 2 (20g)'),
('Me158', 'Nasi Goreng'),
('Me159', 'Es Jeruk 4');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_metode`
--

CREATE TABLE `tbl_metode` (
  `id_user` varchar(5) NOT NULL,
  `id_pelatihan` int(3) NOT NULL,
  `id_range` varchar(2) NOT NULL,
  `jarak_gizi` float NOT NULL,
  `jarak_menu` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_metode`
--

INSERT INTO `tbl_metode` (`id_user`, `id_pelatihan`, `id_range`, `jarak_gizi`, `jarak_menu`) VALUES
('ID001', 8, 'M2', 0, 0.0000000000000284217),
('ID001', 9, 'M1', 15.1936, 440.678),
('ID001', 10, 'M2', 12.1248, 1035.17),
('ID001', 11, 'M1', 14.238, 247.459),
('ID001', 12, 'M2', 9.14186, 44.0642),
('ID001', 13, 'M2', 11.8219, 138.987),
('ID001', 14, 'M2', 8.14801, 169.49),
('ID002', 8, 'M2', 1.96214, 0.0000000000000284217),
('ID002', 9, 'M1', 14.608, 440.678),
('ID002', 10, 'M2', 12.8553, 1035.17),
('ID002', 11, 'M1', 13.3293, 247.459),
('ID002', 12, 'M2', 9.61268, 44.0642),
('ID002', 13, 'M2', 10.6455, 138.987),
('ID002', 14, 'M2', 7.26911, 169.49),
('ID003', 8, 'M2', 4.98799, 67.7962),
('ID003', 9, 'M1', 13.1379, 372.882),
('ID003', 10, 'M2', 12.5463, 979.822),
('ID003', 11, 'M1', 10.7275, 179.663),
('ID003', 12, 'M2', 10.4811, 111.86),
('ID003', 13, 'M2', 7.62603, 71.1912),
('ID003', 14, 'M2', 3.92301, 101.694),
('ID004', 8, 'M2', 5.20384, 0.0000000000000284217),
('ID004', 9, 'M1', 14.581, 440.678),
('ID004', 10, 'M2', 13.0541, 1035.17),
('ID004', 11, 'M1', 11.5447, 247.459),
('ID004', 12, 'M2', 10.0227, 44.0642),
('ID004', 13, 'M2', 8.1949, 138.987),
('ID004', 14, 'M2', 5.77841, 169.49),
('ID005', 8, 'M2', 16.8953, 67.7962),
('ID005', 9, 'M1', 19.0471, 372.882),
('ID005', 10, 'M2', 6.87405, 979.822),
('ID005', 11, 'M1', 17.5235, 179.663),
('ID005', 12, 'M2', 9.35949, 111.86),
('ID005', 13, 'M2', 19.4145, 71.1912),
('ID005', 14, 'M2', 18.9642, 101.694),
('ID006', 8, 'M2', 16.8953, 67.7962),
('ID006', 9, 'M1', 19.0471, 372.882),
('ID006', 10, 'M2', 6.87405, 979.822),
('ID006', 11, 'M1', 17.5235, 179.663),
('ID006', 12, 'M2', 9.35949, 111.86),
('ID006', 13, 'M2', 19.4145, 71.1912),
('ID006', 14, 'M2', 18.9642, 101.694),
('ID007', 1, 'M3', 158.429, 160.964),
('ID007', 2, 'M3', 158.557, 102.43),
('ID007', 3, 'M3', 158.703, 182.914),
('ID007', 4, 'M4', 160.969, 504.835),
('ID007', 5, 'M3', 158.382, 0.002),
('ID007', 6, 'M3', 158.488, 98.7737),
('ID007', 7, 'M3', 158.368, 91.4538),
('ID008', 1, 'M3', 4.68419, 160.964),
('ID008', 2, 'M3', 9.02441, 102.43),
('ID008', 3, 'M3', 11.3, 182.914),
('ID008', 4, 'M4', 28.809, 504.835),
('ID008', 5, 'M3', 4.42904, 0.002),
('ID008', 6, 'M3', 7.71622, 98.7737),
('ID008', 7, 'M3', 4.2858, 91.4538),
('ID009', 8, 'M2', 9.06923, 67.7962),
('ID009', 9, 'M1', 18.9524, 508.474),
('ID009', 10, 'M2', 9.55274, 1091.92),
('ID009', 11, 'M1', 18.1513, 315.255),
('ID009', 12, 'M2', 6.88483, 23.7319),
('ID009', 13, 'M2', 17.4334, 206.784),
('ID009', 14, 'M2', 15.0679, 237.287),
('ID010', 1, 'M3', 62.3652, 2223.11),
('ID010', 2, 'M3', 59.8309, 2164.58),
('ID010', 3, 'M3', 54.2836, 1879.23),
('ID010', 4, 'M4', 72.1485, 2566.98),
('ID010', 5, 'M3', 58.1673, 2062.15),
('ID010', 6, 'M3', 60.4356, 2160.92),
('ID010', 7, 'M3', 55.9432, 1970.69),
('ID011', 1, 'M3', 14.2545, 95.1123),
('ID011', 2, 'M3', 9.81249, 153.647),
('ID011', 3, 'M3', 21.2564, 438.991),
('ID011', 4, 'M4', 18.1055, 248.758),
('ID011', 5, 'M3', 15.9644, 256.075),
('ID011', 6, 'M3', 13.4791, 157.303),
('ID011', 7, 'M3', 17.8301, 347.53),
('ID012', 8, 'M2', 9.06923, 67.7962),
('ID012', 9, 'M1', 18.9524, 508.474),
('ID012', 10, 'M2', 9.55274, 1091.92),
('ID012', 11, 'M1', 18.1513, 315.255),
('ID012', 12, 'M2', 6.88483, 23.7319),
('ID012', 13, 'M2', 17.4334, 206.784),
('ID012', 14, 'M2', 15.0679, 237.287),
('ID013', 1, 'M3', 64.9291, 570.683),
('ID013', 2, 'M3', 72.416, 629.218),
('ID013', 3, 'M3', 66.7505, 914.561),
('ID013', 4, 'M4', 84.7491, 226.812),
('ID013', 5, 'M3', 63.6668, 731.646),
('ID013', 6, 'M3', 68.1798, 632.874),
('ID013', 7, 'M3', 65.9538, 823.101),
('ID014', 8, 'M2', 16.8953, 67.7962),
('ID014', 9, 'M1', 19.0471, 372.882),
('ID014', 10, 'M2', 6.87405, 979.822),
('ID014', 11, 'M1', 17.5235, 179.663),
('ID014', 12, 'M2', 9.35949, 111.86),
('ID014', 13, 'M2', 19.4145, 71.1912),
('ID014', 14, 'M2', 18.9642, 101.694),
('ID015', 8, 'M2', 16.6251, 50.8471),
('ID015', 9, 'M1', 19.3321, 389.831),
('ID015', 10, 'M2', 7.04219, 993.514),
('ID015', 11, 'M1', 17.779, 196.612),
('ID015', 12, 'M2', 9.16188, 94.9114),
('ID015', 13, 'M2', 19.5515, 88.1402),
('ID015', 14, 'M2', 19.0001, 118.643);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paket`
--

CREATE TABLE `tbl_paket` (
  `id_paket` varchar(2) NOT NULL,
  `paket` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_paket`
--

INSERT INTO `tbl_paket` (`id_paket`, `paket`) VALUES
('P1', 'Paket 1'),
('P2', 'Paket 2'),
('P3', 'Paket 3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelatihan`
--

CREATE TABLE `tbl_pelatihan` (
  `id_pelatihan` int(3) NOT NULL,
  `bb` float NOT NULL,
  `tb` float NOT NULL,
  `usia` varchar(2) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `ling_perut` float NOT NULL,
  `ling_pang` float NOT NULL,
  `ling_perg` float NOT NULL,
  `leng_atas` float NOT NULL,
  `leng_bawah` float NOT NULL,
  `imt` float NOT NULL,
  `status` varchar(10) NOT NULL,
  `bmr` float NOT NULL,
  `sda` float NOT NULL,
  `bmr_sda` float NOT NULL,
  `aktFisik` float NOT NULL,
  `olMenit` float NOT NULL,
  `total` float NOT NULL,
  `id_range` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pelatihan`
--

INSERT INTO `tbl_pelatihan` (`id_pelatihan`, `bb`, `tb`, `usia`, `jk`, `ling_perut`, `ling_pang`, `ling_perg`, `leng_atas`, `leng_bawah`, `imt`, `status`, `bmr`, `sda`, `bmr_sda`, `aktFisik`, `olMenit`, `total`, `id_range`) VALUES
(1, 62.4, 1.64, '18', 'Laki-Laki', 75, 82, 15.7, 26.3, 24.5, 21.48, 'Normal', 1633.72, 163.37, 1797.09, 3055.06, 427.89, 3482.94, 'M3'),
(2, 60.8, 1.7, '19', 'Laki-Laki', 78.5, 89.8, 15.9, 27.7, 25.5, 21.04, 'Normal', 1609.24, 160.92, 1770.16, 3009.28, 416.91, 3426.19, 'M3'),
(3, 53, 1.7, '21', 'Laki-Laki', 67, 87.5, 14.7, 25.5, 24.8, 18.34, 'Normal', 1489.9, 148.99, 1638.89, 2786.11, 363.43, 3149.54, 'M3'),
(4, 71.8, 1.63, '23', 'Laki-Laki', 90.4, 101, 15.4, 32, 25.5, 27.02, 'Obesitas', 1777.54, 177.75, 1955.29, 3324, 492.34, 3816.34, 'M4'),
(5, 58, 1.68, '22', 'Laki-Laki', 72, 82, 17, 27.5, 26.1, 20.55, 'Normal', 1566.4, 156.64, 1723.04, 2929.17, 397.71, 3326.88, 'M3'),
(6, 60.7, 1.7, '19', 'Laki-Laki', 72, 88.5, 16.5, 26.3, 25, 21, 'Normal', 1607.71, 160.77, 1768.48, 3006.42, 416.23, 3422.65, 'M3'),
(7, 55.5, 1.69, '20', 'Laki-Laki', 77, 80.5, 15.4, 25.5, 24, 19.43, 'Normal', 1528.15, 152.82, 1680.97, 2857.64, 380.57, 3238.21, 'M3'),
(8, 55, 1.6, '22', 'Perempuan', 79, 84, 15, 25.7, 22.6, 21.48, 'Normal', 1304.5, 130.45, 1434.95, 2295.92, 377.14, 2673.06, 'M2'),
(9, 42, 1.53, '20', 'Perempuan', 74, 85.5, 12.3, 22, 19.5, 17.94, 'Normal', 1113.4, 111.34, 1224.74, 1959.58, 288, 2247.58, 'M1'),
(10, 50, 1.5, '20', 'Perempuan', 75, 94, 16, 26.5, 22, 22.22, 'Normal', 1231, 123.1, 1354.1, 1266.56, 342.86, 2509.42, 'M2'),
(11, 47.7, 1.59, '20', 'Perempuan', 67.7, 85.5, 13.8, 23, 20, 18.87, 'Normal', 1197.19, 119.72, 1316.91, 2107.05, 327.09, 2434.14, 'M1'),
(12, 56.3, 1.54, '20', 'Perempuan', 74.5, 91.5, 14.5, 25, 23.4, 23.74, 'Kegemukan', 1323.61, 132.36, 1455.97, 2329.55, 386.06, 2715.61, 'M2'),
(13, 50.9, 1.52, '20', 'Perempuan', 68.5, 82, 14.1, 23.9, 21.8, 22.03, 'Normal', 1244.23, 124.42, 1368.65, 2189.84, 349.03, 2538.87, 'M2'),
(14, 50, 1.6, '21', 'Perempuan', 73.3, 81.5, 14, 26.5, 22.5, 19.53, 'Normal', 1231, 123.1, 1354.1, 2166.56, 342.86, 2509.42, 'M2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_range`
--

CREATE TABLE `tbl_range` (
  `id_range` varchar(2) NOT NULL,
  `range1` int(4) DEFAULT NULL,
  `range2` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_range`
--

INSERT INTO `tbl_range` (`id_range`, `range1`, `range2`) VALUES
('M1', 2000, 2500),
('M2', 2501, 3000),
('M3', 3001, 3500),
('M4', 3501, 4000),
('M5', 4001, 4500);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uji`
--

CREATE TABLE `tbl_uji` (
  `id_user` varchar(5) NOT NULL,
  `id_login` varchar(5) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `berat_badan` float NOT NULL,
  `tinggi_badan` float NOT NULL,
  `usia` varchar(2) NOT NULL,
  `lingkar_perut` float NOT NULL,
  `lingkar_panggul` float NOT NULL,
  `lingkar_pergelangan` float NOT NULL,
  `lengan_atas` float NOT NULL,
  `lengan_bawah` float NOT NULL,
  `imt` float NOT NULL,
  `bmr` float NOT NULL,
  `sda` float NOT NULL,
  `bmrSDA` float NOT NULL,
  `aktivitas_fisik` float NOT NULL,
  `menit` int(3) NOT NULL,
  `olahraga` float NOT NULL,
  `total` float NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_uji`
--

INSERT INTO `tbl_uji` (`id_user`, `id_login`, `jenis_kelamin`, `berat_badan`, `tinggi_badan`, `usia`, `lingkar_perut`, `lingkar_panggul`, `lingkar_pergelangan`, `lengan_atas`, `lengan_bawah`, `imt`, `bmr`, `sda`, `bmrSDA`, `aktivitas_fisik`, `menit`, `olahraga`, `total`, `tgl_input`) VALUES
('ID001', 'US003', 'Perempuan', 55, 1.6, '22', 79, 84, 15, 25.7, 22.6, 21.4844, 1304.5, 130.45, 1434.95, 2295.92, 120, 377.143, 2673.06, '2020-08-04'),
('ID002', 'US003', 'Perempuan', 55, 1.6, '22', 78, 83, 14, 25, 22, 21.4844, 1304.5, 130.45, 1434.95, 2295.92, 120, 377.143, 2673.06, '2020-08-07'),
('ID003', 'US003', 'Perempuan', 53, 1.6, '22', 75, 82, 15.4, 26.3, 22, 20.7031, 1275.1, 127.51, 1402.61, 2244.18, 120, 363.429, 2607.6, '2020-08-08'),
('ID004', 'US003', 'Perempuan', 55, 1.6, '20', 75, 82, 15.4, 26.3, 21, 21.4844, 1304.5, 130.45, 1434.95, 2295.92, 120, 377.143, 2673.06, '2020-08-11'),
('ID005', 'US004', 'Perempuan', 53, 1.55, '19', 75, 100, 15, 26, 22, 22.0604, 1275.1, 127.51, 1402.61, 2244.18, 120, 363.429, 2607.6, '2020-08-14'),
('ID006', 'US004', 'Perempuan', 53, 1.55, '19', 75, 100, 15, 26, 22, 22.0604, 1275.1, 127.51, 1402.61, 2244.18, 120, 363.429, 2607.6, '2020-08-14'),
('ID007', 'US005', 'Laki-Laki', 58, 160, '19', 75, 82, 16, 27, 25.5, 0.00226562, 1566.4, 156.64, 1723.04, 2929.17, 120, 397.714, 3326.88, '2020-08-14'),
('ID008', 'US005', 'Laki-Laki', 58, 1.6, '19', 75, 82, 16, 27, 25.5, 22.6562, 1566.4, 156.64, 1723.04, 2929.17, 120, 397.714, 3326.88, '2020-08-14'),
('ID009', 'US006', 'Perempuan', 57, 1.57, '19', 81, 92, 16, 26, 23, 23.1247, 1333.9, 133.39, 1467.29, 2347.66, 120, 390.857, 2738.52, '2020-08-14'),
('ID010', 'US007', 'Laki-Laki', 1.63, 1.63, '19', 80, 90, 20, 35, 28, 0.613497, 703.939, 70.3939, 774.333, 1316.37, 120, 11.1771, 1327.54, '2020-08-15'),
('ID011', 'US007', 'Laki-Laki', 65, 1.63, '19', 80, 90, 20, 35, 28, 24.4646, 1673.5, 167.35, 1840.85, 3129.45, 120, 445.714, 3575.16, '2020-08-15'),
('ID012', 'US006', 'Perempuan', 57, 1.57, '19', 81, 92, 16, 26, 23, 23.1247, 1333.9, 133.39, 1467.29, 2347.66, 120, 390.857, 2738.52, '2020-08-15'),
('ID013', 'US003', 'Laki-Laki', 78, 1.7, '46', 42, 39, 10, 15, 15, 26.9896, 1872.4, 187.24, 2059.64, 3501.39, 120, 534.857, 4036.25, '2020-08-21'),
('ID014', 'US008', 'Perempuan', 53, 1.55, '19', 75, 100, 15, 26, 22, 22.0604, 1275.1, 127.51, 1402.61, 2244.18, 120, 363.429, 2607.6, '2020-08-26'),
('ID015', 'US008', 'Perempuan', 53.5, 1.55, '20', 75.3, 100, 15, 26, 22, 22.2685, 1282.45, 128.245, 1410.69, 2257.11, 120, 366.857, 2623.97, '2020-09-03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_waktu`
--

CREATE TABLE `tbl_waktu` (
  `id_waktu` varchar(2) NOT NULL,
  `waktu` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_waktu`
--

INSERT INTO `tbl_waktu` (`id_waktu`, `waktu`) VALUES
('W1', 'Pagi'),
('W2', 'Selingan Pagi'),
('W3', 'Siang'),
('W4', 'Selingan Sore'),
('W5', 'Malam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_menu`
--
ALTER TABLE `detail_menu`
  ADD KEY `id_menu` (`id_menu`),
  ADD KEY `id_waktu` (`id_waktu`),
  ADD KEY `id_range` (`id_range`),
  ADD KEY `id_paket` (`id_paket`);

--
-- Indexes for table `hitung_demo`
--
ALTER TABLE `hitung_demo`
  ADD KEY `id` (`id`),
  ADD KEY `id_pelatihan` (`id_pelatihan`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `tbl_bahan`
--
ALTER TABLE `tbl_bahan`
  ADD KEY `id_menu` (`id_menu`);

--
-- Indexes for table `tbl_demo`
--
ALTER TABLE `tbl_demo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kesimpulan`
--
ALTER TABLE `tbl_kesimpulan`
  ADD KEY `id_login` (`id_login`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_range` (`id_range`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tbl_metode`
--
ALTER TABLE `tbl_metode`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_pelatihan` (`id_pelatihan`),
  ADD KEY `id_range` (`id_range`);

--
-- Indexes for table `tbl_paket`
--
ALTER TABLE `tbl_paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `tbl_pelatihan`
--
ALTER TABLE `tbl_pelatihan`
  ADD PRIMARY KEY (`id_pelatihan`),
  ADD KEY `id_range` (`id_range`);

--
-- Indexes for table `tbl_range`
--
ALTER TABLE `tbl_range`
  ADD PRIMARY KEY (`id_range`);

--
-- Indexes for table `tbl_uji`
--
ALTER TABLE `tbl_uji`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_login` (`id_login`);

--
-- Indexes for table `tbl_waktu`
--
ALTER TABLE `tbl_waktu`
  ADD PRIMARY KEY (`id_waktu`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_menu`
--
ALTER TABLE `detail_menu`
  ADD CONSTRAINT `detail_menu_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `tbl_menu` (`id_menu`),
  ADD CONSTRAINT `detail_menu_ibfk_2` FOREIGN KEY (`id_waktu`) REFERENCES `tbl_waktu` (`id_waktu`),
  ADD CONSTRAINT `detail_menu_ibfk_3` FOREIGN KEY (`id_paket`) REFERENCES `tbl_paket` (`id_paket`),
  ADD CONSTRAINT `detail_menu_ibfk_4` FOREIGN KEY (`id_range`) REFERENCES `tbl_range` (`id_range`);

--
-- Constraints for table `tbl_bahan`
--
ALTER TABLE `tbl_bahan`
  ADD CONSTRAINT `tbl_bahan_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `tbl_menu` (`id_menu`);

--
-- Constraints for table `tbl_kesimpulan`
--
ALTER TABLE `tbl_kesimpulan`
  ADD CONSTRAINT `tbl_kesimpulan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_uji` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_kesimpulan_ibfk_2` FOREIGN KEY (`id_login`) REFERENCES `login` (`id_login`),
  ADD CONSTRAINT `tbl_kesimpulan_ibfk_3` FOREIGN KEY (`id_range`) REFERENCES `tbl_range` (`id_range`);

--
-- Constraints for table `tbl_metode`
--
ALTER TABLE `tbl_metode`
  ADD CONSTRAINT `tbl_metode_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_uji` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_metode_ibfk_2` FOREIGN KEY (`id_range`) REFERENCES `tbl_range` (`id_range`),
  ADD CONSTRAINT `tbl_metode_ibfk_3` FOREIGN KEY (`id_pelatihan`) REFERENCES `tbl_pelatihan` (`id_pelatihan`);

--
-- Constraints for table `tbl_pelatihan`
--
ALTER TABLE `tbl_pelatihan`
  ADD CONSTRAINT `tbl_pelatihan_ibfk_1` FOREIGN KEY (`id_range`) REFERENCES `tbl_range` (`id_range`);

--
-- Constraints for table `tbl_uji`
--
ALTER TABLE `tbl_uji`
  ADD CONSTRAINT `tbl_uji_ibfk_1` FOREIGN KEY (`id_login`) REFERENCES `login` (`id_login`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
