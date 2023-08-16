-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Agu 2023 pada 07.19
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_barang`
--

CREATE TABLE `jenis_barang` (
  `id_jenis` varchar(50) NOT NULL,
  `jenis_brg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `jenis_barang`
--

INSERT INTO `jenis_barang` (`id_jenis`, `jenis_brg`) VALUES
('1', 'MATERIAL'),
('2', 'ASSET'),
('3', 'OBAT'),
('4', 'PAKAN'),
('5', 'AYAM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masuk`
--

CREATE TABLE `masuk` (
  `id_masuk` int(11) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `Staff_Gudang` varchar(20) NOT NULL,
  `kode_brg` varchar(20) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `satuan` varchar(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `masuk`
--

INSERT INTO `masuk` (`id_masuk`, `unit`, `Staff_Gudang`, `kode_brg`, `id_jenis`, `jumlah`, `satuan`, `tgl_masuk`, `status`) VALUES
(1, 'melia', '', '420.06.1062', 2, 2, 'Unit', '2023-08-02', 0),
(2, 'melia', '', '110.01.0776', 1, 2, 'PC', '2023-08-02', 0),
(3, 'melia', '', 'EID50', 1, 4, 'PC', '2023-08-02', 0),
(4, 'melia', '', '110.01.0776', 1, 2, 'PC', '2023-08-04', 0),
(5, 'melia', '', '110.01.0776', 1, 2, 'PC', '2023-08-05', 0),
(6, 'melia', '', '110.01.0776', 1, 2, 'PC', '2023-08-05', 0),
(7, 'melia', '', '420.06.1062', 2, 5, 'Unit', '2023-08-05', 0),
(8, 'melia', '', '110.01.0776', 1, 1, 'PC', '2023-08-05', 0),
(9, 'melia', '', 'VL15810', 3, 1, 'VIAL', '2023-08-06', 0),
(10, 'melia', '', '25884666', 1, 1, 'PC', '2023-08-06', 0),
(11, 'melia', '', '420.06.1062', 2, 1, 'Unit', '2023-08-07', 0),
(12, 'melia', '', '420.06.1062', 2, 1, 'Unit', '2023-08-07', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `masuk_sementara`
--

CREATE TABLE `masuk_sementara` (
  `id_masuk_sementara` int(11) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `Staff_Gudang` varchar(20) NOT NULL,
  `kode_brg` varchar(20) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `satuan` varchar(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemasukan`
--

CREATE TABLE `pemasukan` (
  `id` int(11) NOT NULL,
  `unit` varchar(30) NOT NULL,
  `kode_brg` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pemasukan`
--

INSERT INTO `pemasukan` (`id`, `unit`, `kode_brg`, `jumlah`, `tgl_masuk`, `gambar`) VALUES
(38, 'Fahrianur', '110.01.0776', 3, '2023-08-01', ''),
(39, 'Fahrianur', '110.01.0776', 3, '2023-08-01', ''),
(40, 'Fahrianur', '110.01.0776', 3, '2023-08-01', ''),
(41, 'Fahrianur', '110.01.0776', 3, '2023-08-01', ''),
(42, 'Fahrianur', '110.01.0776', 2, '2023-08-01', ''),
(43, 'Fahrianur', '110.01.0776', 2, '2023-08-01', ''),
(44, 'Fahrianur', '110.01.0776', 3, '2023-08-02', ''),
(45, 'Fahrianur', '110.01.0776', 3, '2023-08-02', ''),
(46, 'Fahrianur', '110.01.0776', 7, '2023-08-02', ''),
(47, 'Fahrianur', '110.01.0776', 7, '2023-08-02', ''),
(48, 'Fahrianur', '110.01.0776', 5, '2023-08-02', ''),
(49, 'Fahrianur', '110.01.0776', 3, '2023-08-02', ''),
(50, 'Fahrianur', '420.06.1062', 3, '2023-08-02', ''),
(51, 'Fahrianur', '110.01.0776', 1, '2023-08-02', ''),
(52, 'Fahrianur', '25884666', 2, '2023-08-03', ''),
(53, 'Fahrianur', '420.06.1062', 1, '2023-08-04', ''),
(54, 'Fahrianur', 'VL15810', 5, '2023-08-04', ''),
(55, 'Fahrianur', '110.01.0776', 2, '2023-08-05', ''),
(56, 'Fahrianur', '420.06.1062', 1, '2023-08-05', ''),
(57, 'Fahrianur', '420.06.1062', 2, '2023-08-06', ''),
(58, 'Fahrianur', '110.01.0776', 1, '2023-08-06', ''),
(59, 'Fahrianur', 'VL15810', 1, '2023-08-06', ''),
(60, 'Fahrianur', 'VL15810', 1, '2023-08-08', ''),
(61, 'Fahrianur', '531R', 2000, '2023-08-09', ''),
(62, 'Fahrianur', '532R', 2500, '2023-08-09', ''),
(63, 'Fahrianur', '534-1R', 4000, '2023-08-09', ''),
(64, 'Fahrianur', '535R', 2000, '2023-08-09', ''),
(65, 'Fahrianur', '534-2R', 1800, '2023-08-09', ''),
(66, 'Fahrianur', '534PBR', 1750, '2023-08-09', ''),
(67, 'Fahrianur', '110.01.0776', 1, '2023-08-09', ''),
(68, 'Fahrianur', '410.03.0110', 12, '2023-08-09', ''),
(69, 'Fahrianur', '410.04.0412', 2, '2023-08-09', ''),
(70, 'Fahrianur', '110.09.0117', 20, '2023-08-09', ''),
(71, 'Fahrianur', '310.01.0366', 700, '2023-08-09', ''),
(72, 'Fahrianur', '110.02.0565', 2, '2023-08-09', ''),
(73, 'Fahrianur', '500.00.1561', 8, '2023-08-09', ''),
(74, 'Fahrianur', '500.00.1949', 8, '2023-08-09', ''),
(75, 'Fahrianur', '110.98.2254', 4, '2023-08-09', ''),
(76, 'Fahrianur', '110.20.0029', 3, '2023-08-09', ''),
(77, 'Fahrianur', '600.00.7536', 2, '2023-08-09', ''),
(78, 'Fahrianur', '600.00.7594', 1, '2023-08-09', ''),
(79, 'Fahrianur', '600.00.9124', 5, '2023-08-09', ''),
(80, 'Fahrianur', '600.00.9180', 1, '2023-08-09', ''),
(81, 'Fahrianur', '600.00.9636', 2, '2023-08-09', ''),
(82, 'Fahrianur', '410.14.0102', 5, '2023-08-09', ''),
(83, 'Fahrianur', '410.14.0156', 4, '2023-08-09', ''),
(84, 'Fahrianur', '600.00.8514', 1, '2023-08-09', ''),
(85, 'Fahrianur', '600.01.0579', 1, '2023-08-09', ''),
(86, 'Fahrianur', '048-01', 8985, '2023-08-09', ''),
(87, 'Fahrianur', '048-001', 1272, '2023-08-09', ''),
(88, 'Fahrianur', '048-02', 9006, '2023-08-09', ''),
(89, 'Fahrianur', '048-002', 1345, '2023-08-09', ''),
(90, 'Fahrianur', '048-03', 8945, '2023-08-09', ''),
(91, 'Fahrianur', '048-003', 1179, '2023-08-09', ''),
(92, 'Fahrianur', '048-04', 8907, '2023-08-09', ''),
(93, 'Fahrianur', '048-004', 13006, '2023-08-09', ''),
(94, 'Fahrianur', '048-05', 8882, '2023-08-09', ''),
(95, 'Fahrianur', '048-005', 1207, '2023-08-09', ''),
(96, 'Fahrianur', '534-2R46', 5250, '2023-08-09', ''),
(97, 'Fahrianur', 'VL15812', 88, '2023-08-09', ''),
(98, 'Fahrianur', 'PPM031', 25, '2023-08-09', ''),
(99, 'Fahrianur', 'PDE081', 70, '2023-08-09', ''),
(100, 'Fahrianur', 'DL01562', 8, '2023-08-09', ''),
(101, 'Fahrianur', 'DL01638', 8, '2023-08-09', ''),
(102, 'Fahrianur', 'DL02919', 6, '2023-08-09', ''),
(103, 'Fahrianur', 'PPM021', 120, '2023-08-09', ''),
(104, 'Fahrianur', '421.254.256.362', 8, '2023-08-09', ''),
(105, 'Fahrianur', '410.04.0436', 5, '2023-08-09', ''),
(106, 'Fahrianur', '600.00.7536', 1, '2023-08-13', '');

--
-- Trigger `pemasukan`
--
DELIMITER $$
CREATE TRIGGER `MASUK` AFTER INSERT ON `pemasukan` FOR EACH ROW BEGIN
  update stokbarang SET stok=stok + NEW.jumlah 
  WHERE kode_brg = NEW.kode_brg;
  
  update stokbarang SET sisa=sisa + NEW.jumlah 
  WHERE kode_brg = NEW.kode_brg;
  
	update pengajuan SET status=1 WHERE kode_brg=NEW.kode_brg AND 
	unit=NEW.unit;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemeliharaan`
--

CREATE TABLE `pemeliharaan` (
  `no_service` int(20) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `catatan` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `status` int(50) NOT NULL DEFAULT 0,
  `tgl_pemeliharaan` date NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pemeliharaan`
--

INSERT INTO `pemeliharaan` (`no_service`, `nama_brg`, `jumlah`, `catatan`, `unit`, `status`, `tgl_pemeliharaan`, `gambar`) VALUES
(12, 'LAPTOP LENOVO', 1, 'Rusak', 'Fahrianur', 1, '2023-08-09', '64d3d42e39397.jpg'),
(14, 'PC LENOVO WORKSTATION TS P340 W480 ES TW T CORE I7', 1, 'Rusak', 'Fahrianur', 1, '2023-08-09', '64d3d796df43f.jpg'),
(22, 'BANDO VAN BELT A-89', 2500, 'Rusak', 'Fahrianur', 1, '2023-08-07', '64d057ab0c063.jpg'),
(2522, 'EPSON L3150 PRINTER', 1, 'Rusak berat', 'Fahrianur', 1, '2023-08-07', '64d0935e8a634.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `kode_brg` varchar(20) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `satuan` varchar(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pengajuan`
--

INSERT INTO `pengajuan` (`id_pengajuan`, `unit`, `kode_brg`, `id_jenis`, `jumlah`, `satuan`, `category`, `tgl_pengajuan`, `status`) VALUES
(89, 'Fahrianur', '110.01.0776', 1, 3, 'pcs', '', '2023-08-01', 1),
(90, 'Fahrianur', '110.01.0776', 1, 3, 'pcs', '', '2023-08-01', 1),
(91, 'Fahrianur', '110.01.0776', 1, 2, 'pcs', '', '2023-08-01', 1),
(92, 'Fahrianur', '110.01.0776', 1, 3, 'pcs', '', '2023-08-01', 1),
(93, 'Fahrianur', '110.01.0776', 1, 3, 'pcs', '', '2023-08-01', 1),
(94, 'Fahrianur', '110.01.0776', 1, 4, 'pcs', '', '2023-08-02', 1),
(95, 'Fahrianur', '110.01.0776', 1, 7, 'pcs', '', '2023-08-02', 1),
(96, 'Fahrianur', '110.01.0776', 1, 5, 'pcs', '', '2023-08-02', 1),
(97, 'Fahrianur', '110.01.0776', 1, 3, 'PC', '', '2023-08-02', 1),
(98, 'Fahrianur', '420.06.1062', 2, 3, 'Unit', '', '2023-08-02', 1),
(99, 'Fahrianur', '110.01.0776', 1, 1, 'PC', '', '2023-08-02', 1),
(100, 'Fahrianur', '', 1, 1, '', '', '2023-08-02', 0),
(101, 'Fahrianur', '420.06.1062', 2, 1, 'Unit', '', '2023-08-02', 1),
(102, 'Fahrianur', 'VL15810', 3, 5, 'PAC', '', '2023-08-02', 1),
(103, 'Fahrianur', '420.06.1062', 2, 1, 'Unit', '', '2023-08-02', 1),
(104, 'Fahrianur', '', 1, -4, '', '', '2023-08-03', 0),
(106, 'Fahrianur', '25884666', 1, 2, 'PC', '', '2023-08-03', 1),
(117, 'Fahrianur', '110.01.0776', 1, 2, 'PC', 'G11_ME PARTS & POND MATERIALS', '2023-08-05', 1),
(118, 'Fahrianur', '420.06.1062', 2, 1, 'Unit', 'G06_IT EQUIPMENT', '2023-08-05', 1),
(119, 'Fahrianur', '420.06.1062', 2, 2, 'Unit', 'G06_IT EQUIPMENT', '2023-08-05', 1),
(120, 'Fahrianur', '', 1, 1, '', '', '2023-08-05', 0),
(121, 'Fahrianur', '110.01.0776', 1, 1, 'PC', 'G11_ME PARTS & POND MATERIALS', '2023-08-05', 1),
(122, 'Fahrianur', '110.01.0776', 1, 1, 'PC', 'G11_ME PARTS & POND MATERIALS', '2023-08-05', 1),
(123, 'Fahrianur', 'VL15810', 3, 1, 'VIAL', 'VACC_VACCINE', '2023-08-05', 1),
(124, 'Fahrianur', '25884666', 1, 1, 'PC', 'G11_ME PARTS & POND MATERIALS', '2023-08-06', 0),
(126, 'Fahrianur', '110.01.0776', 1, 1, 'PC', 'G11_ME PARTS & POND MATERIALS', '2023-08-08', 1),
(127, 'Fahrianur', 'VL15810', 3, 1, 'VIAL', 'VACC_VACCINE', '2023-08-08', 1),
(128, 'Fahrianur', '531R', 4, 2000, 'KG', 'FEED_FEED', '2023-08-09', 1),
(129, 'Fahrianur', '532R', 4, 2500, 'KG', 'FEED_FEED', '2023-08-09', 1),
(130, 'Fahrianur', '534-1R', 4, 4000, 'KG', 'FEED_FEED', '2023-08-09', 1),
(131, 'Fahrianur', '535R', 4, 2000, 'KG', 'FEED_FEED', '2023-08-09', 1),
(132, 'Fahrianur', '534-2R', 4, 1800, 'KG', 'FEED_FEED', '2023-08-09', 1),
(133, 'Fahrianur', '534PBR', 4, 1750, 'KG', 'FEED_FEED', '2023-08-09', 1),
(134, 'Fahrianur', '410.03.0110', 1, 12, 'PC', 'G02_OFFICE', '2023-08-09', 1),
(135, 'Fahrianur', '410.04.0412', 1, 2, 'PC', 'G02_OFFICE', '2023-08-09', 1),
(136, 'Fahrianur', '110.09.0117', 1, 20, 'PC', 'G09_GENERAL EQUIPMENT & TOOLS', '2023-08-09', 1),
(137, 'Fahrianur', '310.01.0366', 1, 700, 'PC', 'G10_CONSTRUCTION & BUILDING MATERIALS', '2023-08-09', 1),
(138, 'Fahrianur', '110.02.0565', 1, 2, 'PC', 'G11_ME PARTS & POND MATERIALS', '2023-08-09', 1),
(139, 'Fahrianur', '500.00.1561', 1, 8, 'PC', 'G07_LAB & CHEMICAL', '2023-08-09', 1),
(140, 'Fahrianur', '500.00.1949', 1, 8, 'PC', 'G07_LAB & CHEMICAL', '2023-08-09', 1),
(141, 'Fahrianur', '110.98.2254', 1, 4, 'ROL', 'G02_OFFICE', '2023-08-09', 1),
(142, 'Fahrianur', '110.20.0029', 1, 3, 'PC', 'G09_GENERAL EQUIPMENT & TOOLS', '2023-08-09', 1),
(143, 'Fahrianur', '600.00.7536', 2, 2, 'Unit', 'G01_TRANSPORTATION', '2023-08-09', 1),
(144, 'Fahrianur', '600.00.7594', 2, 1, 'Unit', 'G01_TRANSPORTATION', '2023-08-09', 1),
(145, 'Fahrianur', '600.00.9124', 2, 5, 'Unit', 'G06_IT EQUIPMENT', '2023-08-09', 1),
(146, 'Fahrianur', '600.00.9180', 2, 1, 'Unit', 'G06_IT EQUIPMENT', '2023-08-09', 1),
(147, 'Fahrianur', '600.00.9636', 2, 2, 'Unit', 'G06_IT EQUIPMENT', '2023-08-09', 1),
(148, 'Fahrianur', '410.14.0102', 2, 5, 'Unit', 'G14_FURNITURE', '2023-08-09', 1),
(149, 'Fahrianur', '410.14.0156', 2, 4, 'Unit', 'G14_FURNITURE', '2023-08-09', 1),
(150, 'Fahrianur', '600.00.8514', 2, 1, 'Unit', 'G14_FURNITURE', '2023-08-09', 1),
(151, 'Fahrianur', '600.01.0579', 2, 1, 'Unit', 'G06_IT EQUIPMENT', '2023-08-09', 1),
(152, 'Fahrianur', '048-01', 5, 8985, 'ekor', 'DOC PS_DOC PS', '2023-08-09', 1),
(153, 'Fahrianur', '048-001', 5, 1272, 'EKOR', 'DOC PS_DOC PS', '2023-08-09', 1),
(154, 'Fahrianur', '048-02', 5, 9006, 'EKOR', 'DOC PS_DOC PS', '2023-08-09', 1),
(155, 'Fahrianur', '048-002', 5, 1345, 'EKOR', 'DOC PS_DOC PS', '2023-08-09', 1),
(156, 'Fahrianur', '048-03', 5, 8945, 'EKOR', 'DOC PS_DOC PS', '2023-08-09', 1),
(157, 'Fahrianur', '048-003', 5, 1179, 'EKOR', 'DOC PS_DOC PS', '2023-08-09', 1),
(158, 'Fahrianur', '048-04', 5, 8907, 'EKOR', 'DOC PS_DOC PS', '2023-08-09', 1),
(159, 'Fahrianur', '048-004', 5, 13006, 'EKOR', 'DOC PS_DOC PS', '2023-08-09', 1),
(160, 'Fahrianur', '048-05', 5, 8882, 'EKOR', 'DOC PS_DOC PS', '2023-08-09', 1),
(161, 'Fahrianur', '048-005', 5, 1207, 'EKOR', 'DOC PS_DOC PS', '2023-08-09', 1),
(162, 'Fahrianur', '534-2R46', 4, 5250, 'KG', 'FEED_FEED', '2023-08-09', 1),
(163, 'Fahrianur', 'VL15812', 3, 88, 'VIAL', 'VACC_VACCINE', '2023-08-09', 1),
(164, 'Fahrianur', 'PPM031', 3, 25, 'CAN', 'DISF_DISINFECTANT', '2023-08-09', 1),
(165, 'Fahrianur', 'PDE081', 3, 70, 'JC', 'DISF_DISINFECTANT', '2023-08-09', 1),
(166, 'Fahrianur', 'DL01562', 3, 8, 'JC', 'DISF_DISINFECTANT', '2023-08-09', 1),
(167, 'Fahrianur', 'DL01638', 3, 8, 'JC', 'DISF_DISINFECTANT', '2023-08-09', 1),
(168, 'Fahrianur', 'DL02919', 3, 6, 'JC', 'DISF_DISINFECTANT', '2023-08-09', 1),
(169, 'Fahrianur', 'PPM021', 3, 120, 'SCH', 'DISF_DISINFECTANT', '2023-08-09', 1),
(170, 'Fahrianur', '421.254.256.362', 1, 8, 'PC', 'G11_ME PARTS & POND MATERIALS', '2023-08-09', 1),
(171, 'Fahrianur', '410.04.0436', 1, 5, 'Unit', 'G02_OFFICE', '2023-08-09', 1),
(173, 'Fahrianur', '600.00.7536', 2, 1, 'Unit', 'G01_TRANSPORTATION', '2023-08-13', 1),
(174, 'Fahrianur', '600.00.7536', 2, 1, 'Unit', 'G01_TRANSPORTATION', '2023-08-13', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan_sementara`
--

CREATE TABLE `pengajuan_sementara` (
  `id_pengajuan_sementara` int(11) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `kode_brg` varchar(20) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `category` varchar(50) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pengajuan_sementara`
--

INSERT INTO `pengajuan_sementara` (`id_pengajuan_sementara`, `unit`, `kode_brg`, `id_jenis`, `jumlah`, `satuan`, `category`, `tgl_pengajuan`, `status`) VALUES
(177, 'Fahrianur', '110.01.0776', 1, 1, 'PC', 'G11_ME PARTS & POND MATERIALS', '2023-08-15', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id` int(11) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `kode_brg` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pengeluaran`
--

INSERT INTO `pengeluaran` (`id`, `unit`, `kode_brg`, `jumlah`, `tgl_keluar`, `gambar`) VALUES
(65, 'melia', '110.01.0776', 1, '2023-08-03', ''),
(66, '', '', 0, '2023-08-05', ''),
(67, '', '', 0, '2023-08-05', ''),
(68, '', '', 0, '2023-08-05', ''),
(69, '', '', 0, '2023-08-05', ''),
(70, '', '', 0, '2023-08-05', ''),
(74, 'melia', '420.06.1062', 2023, '2023-08-06', ''),
(75, 'melia', '110.01.0776', 1, '2023-08-06', ''),
(76, 'melia', '110.01.0776', 1, '2023-08-06', ''),
(77, 'melia', '420.06.1062', 1, '2023-08-06', ''),
(78, 'melia', '110.01.0776', 1, '2023-08-08', ''),
(79, 'melia', '534PBR', 1210, '2023-08-09', ''),
(80, 'melia', '532R', 725, '2023-08-09', ''),
(81, 'melia', '534-2R', 450, '2023-08-09', ''),
(82, 'melia', '531R', 800, '2023-08-09', ''),
(83, 'melia', '535R', 125, '2023-08-09', ''),
(84, 'melia', 'DL01638', 1, '2023-08-09', ''),
(85, 'melia', 'PDE081', 12, '2023-08-09', ''),
(86, 'melia', 'PPM021', 30, '2023-08-09', ''),
(87, 'melia', 'PPM031', 4, '2023-08-09', ''),
(88, 'melia', '410.04.0436', 3, '2023-08-09', '');

--
-- Trigger `pengeluaran`
--
DELIMITER $$
CREATE TRIGGER `TG_STOK_UPDATE` AFTER INSERT ON `pengeluaran` FOR EACH ROW BEGIN
	update stokbarang SET keluar=keluar + NEW.jumlah, 
	sisa=stok-keluar WHERE 
	kode_brg = NEW.kode_brg;

	update permintaan SET status=1 WHERE kode_brg=NEW.kode_brg AND 
	unit=NEW.unit;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permintaan`
--

CREATE TABLE `permintaan` (
  `id_permintaan` int(100) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `kode_brg` varchar(20) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tgl_permintaan` date NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `permintaan`
--

INSERT INTO `permintaan` (`id_permintaan`, `unit`, `jabatan`, `kode_brg`, `id_jenis`, `jumlah`, `tgl_permintaan`, `tujuan`, `status`) VALUES
(132, 'melia', 'Staff Gudang', '534PBR', 4, 1210, '2023-08-09', 'kandang 4', 1),
(131, 'melia', 'Staff Gudang', '532R', 4, 725, '2023-08-09', 'kandang 3', 1),
(129, 'melia', 'Staff Gudang', '534-2R', 4, 450, '2023-08-09', 'kandang 01', 1),
(130, 'melia', 'Staff Gudang', '531R', 4, 800, '2023-08-09', 'kandang 2', 1),
(128, 'melia', 'Staff Gudang', '110.01.0776', 1, 1, '2023-08-07', 'Kandang 12', 1),
(133, 'melia', 'Staff Gudang', '535R', 4, 125, '2023-08-09', 'kandang 01', 1),
(137, 'melia', 'Staff Gudang', 'DL01638', 3, 1, '2023-08-09', 'kandang 04', 1),
(136, 'melia', 'Staff Gudang', 'PDE081', 3, 12, '2023-08-09', 'HENHOSUE 2', 1),
(135, 'melia', 'Staff Gudang', 'PPM021', 3, 30, '2023-08-09', 'HENHOSUE 2', 1),
(134, 'melia', 'Staff Gudang', 'PPM031', 3, 4, '2023-08-09', 'HENHOUSE 01', 1),
(138, 'melia', 'Staff Gudang', '410.04.0436', 1, 3, '2023-08-09', 'security', 1),
(139, 'melia', 'Staff Gudang', '310.01.0366', 1, 50, '2023-08-10', 'kandang 12', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produksi`
--

CREATE TABLE `produksi` (
  `kode` int(40) NOT NULL,
  `kandang` varchar(40) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `grade_a` int(20) NOT NULL,
  `grade_b` int(20) NOT NULL,
  `komersil` int(20) NOT NULL,
  `total` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produksi`
--

INSERT INTO `produksi` (`kode`, `kandang`, `jumlah`, `grade_a`, `grade_b`, `komersil`, `total`) VALUES
(48001, 'HEN HOUSE 01', 5960, 5781, 121, 58, 0),
(48002, 'HEN HOUSE 02', 6078, 5946, 72, 60, 0),
(48003, 'HEN HOUSE 03', 5767, 5589, 123, 55, 0),
(48004, 'HEN HOUSE 04', 6181, 6019, 101, 61, 0),
(48005, 'HEN HOUSE 05', 5926, 5782, 69, 75, 0),
(48006, 'HEN HOUSE 06', 5816, 5625, 131, 60, 0),
(48007, 'HEN HOUSE 07', 5964, 5796, 105, 63, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sementara`
--

CREATE TABLE `sementara` (
  `id_sementara` int(100) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `kode_brg` varchar(20) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tgl_permintaan` date NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stokbarang`
--

CREATE TABLE `stokbarang` (
  `id_kode_brg` int(2) NOT NULL,
  `kode_brg` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_jenis` int(2) NOT NULL,
  `nama_brg` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `category` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `satuan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `stok` int(11) NOT NULL,
  `keluar` int(11) NOT NULL,
  `sisa` int(11) NOT NULL,
  `gambar` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `stokbarang`
--

INSERT INTO `stokbarang` (`id_kode_brg`, `kode_brg`, `id_jenis`, `nama_brg`, `category`, `satuan`, `stok`, `keluar`, `sisa`, `gambar`) VALUES
(78, '110.01.0776', 1, 'BANDO VAN BELT A-89', 'G11_ME PARTS & POND MATERIALS', 'PC', 12, 4, 8, '64d237393aaf5.jpeg'),
(85, 'PLV071', 3, 'AE FOX + DILL @ 1000Ds', 'VACC_VACCINE', 'VIAL', 90, 0, 0, '64cb7fd6d28d9.jpg'),
(86, 'VL15810', 3, 'Nobilis MA5 + Clone 30 SPH@1.000 Ds ', 'VACC_VACCINE', 'VIAL', 7, 0, 7, '64cb80220ef28.png'),
(87, 'VL15812', 3, 'Nobilis MA5 + Clone 30 SPH@2.500 Ds ', 'VACC_VACCINE', 'VIAL', 88, 0, 88, '64cb80464b5bc.jpeg'),
(88, '534-2R', 4, 'FEED 534-2R', 'FEED_FEED', 'KG', 2400, 450, 1950, '64cb807e657dc.jpg'),
(99, '410.03.0110', 1, 'BALLPOINT PILOT', 'G02_OFFICE', 'PC', 12, 0, 12, '64d87743c4e0e.jpg'),
(100, '410.04.0412', 1, 'ENERGIZER CHARGER CHVCM4 2650MAH AC 110-127V 50/60', 'G02_OFFICE', 'PC', 2, 0, 2, '64d8774c92890.jpg'),
(101, '600.00.7536', 2, 'DAIHATSU GRAN MAX PICK UP 1500CC M/T', 'G01_TRANSPORTATION', 'Unit', 3, 0, 3, '64d092bd3493b.jpeg'),
(102, '600.00.7594', 2, 'TOYOTA GRAND NEW AVANZA G 1300CC M/T', 'G01_TRANSPORTATION', 'Unit', 1, 0, 1, '64d23cc806dd5.jpg'),
(103, 'ML02729', 3, 'OXALDIN @100 ML', 'MED_MEDICINE', 'BT', 20, 0, 0, '64d0d33cdcc8f.jpeg'),
(104, 'DL00642', 3, 'Tek-Trol @ 1 gl', 'DISF_DISINFECTANT', 'JC', 90, 0, 0, '64d2499017ae1.jpg'),
(107, '110.09.0117', 1, 'TIMBANGAN DIGITAL CAMRY EK5055 KAP.5KG +/- 1GR', 'G09_GENERAL EQUIPMENT & TOOLS', 'PC', 20, 0, 20, '64d2380741f0c.jpg'),
(108, '110.20.0029', 1, 'SIKAT BAJA GAGANG KAYU', 'G09_GENERAL EQUIPMENT & TOOLS', 'PC', 3, 0, 3, '64d238e63ef91.jpg'),
(109, '310.01.0366', 1, 'PAKU RIVET 4X16MM', 'G10_CONSTRUCTION & BUILDING MATERIALS', 'PC', 700, 0, 700, '64d2398d31605.jpg'),
(110, '110.02.0565', 1, 'RACOR FILTER SOLAR M1000-FG', 'G11_ME PARTS & POND MATERIALS', 'PC', 2, 0, 2, '64d23a102b552.jpg'),
(111, '500.00.1561', 1, 'GUNTING SMIC SS 17CM/G.OPERASI', 'G07_LAB & CHEMICAL', 'PC', 8, 0, 8, '64d23a8f8aae9.jpg'),
(112, '500.00.1949', 1, 'AXYGEN MICROTUBE FLAT CAP MCT-150-C 1.5ML CLEAR HO', 'G07_LAB & CHEMICAL', 'PC', 8, 0, 8, '64d23b06cbd8b.jpeg'),
(113, '110.98.2254', 1, 'SELANG HYDRANT MOSWELL 1 1/2IN @30M/ROL', 'G02_OFFICE', 'ROL', 4, 0, 4, '64d23c365ce11.jpg'),
(114, '600.00.9124', 2, 'LENOVO PC M720T-0PIF I7 8700U; 2X4GB DDR4; HDD 1TB', 'G06_IT EQUIPMENT', 'Unit', 5, 0, 5, '64d23d2b5b66c.jpg'),
(115, '600.00.9180', 2, 'LG MONITOR LED 20MK400H 20IN', 'G06_IT EQUIPMENT', 'Unit', 1, 0, 1, '64d23d6b8db96.jpg'),
(116, '600.00.9636', 2, 'HP NOTEBOOK PAVILION 15 CORE I7; 15.6 IN FHD; RAM ', 'G06_IT EQUIPMENT', 'Unit', 2, 0, 2, '64d244078795d.jpg'),
(117, '410.14.0102', 2, 'RAK BAJU PLASTIK COMET 4 SUSUN L', 'G14_FURNITURE', 'Unit', 5, 0, 5, '64d2449232b2f.jpg'),
(118, '410.14.0156', 2, 'KURSI SUSUN FUTURA FTR 405', 'G14_FURNITURE', 'Unit', 4, 0, 4, '64d244dcb74d9.jpg'),
(119, '600.00.8514', 2, 'LEMARI LOCKER 18PINTU KRISBOW KW10091461', 'G14_FURNITURE', 'Unit', 1, 0, 1, '64d2459e0f7f5.jpg'),
(120, '600.01.0579', 2, 'PC LENOVO WORKSTATION TS P340 W480 ES TW T CORE I7', 'G06_IT EQUIPMENT', 'Unit', 1, 0, 1, '64d245f021cdb.jpg'),
(121, 'PPM031', 3, 'Agita 10 WG 400 gr', 'DISF_DISINFECTANT', 'CAN', 25, 4, 21, '64d2477d56c51.jpg'),
(122, 'PDE081', 3, 'Forcent Fumigant 10 Kg', 'DISF_DISINFECTANT', 'JC', 70, 12, 58, '64d247c624d05.jpg'),
(123, 'PPM021', 3, 'Cyper Killer 30 g', 'DISF_DISINFECTANT', 'SCH', 120, 30, 90, '64d24812758eb.jpg'),
(124, 'DL01562', 3, 'CID 2000 @ 5 KG', 'DISF_DISINFECTANT', 'JC', 8, 0, 8, '64d248e7d0085.jpg'),
(125, 'DL02762', 3, 'FORTICOAT NL @ 5 KG', 'DISF_DISINFECTANT', 'JC', 0, 0, 0, '64d24946569b4.jpg'),
(126, 'DL01638', 3, 'VIROCID @ 20 LTR', 'DISF_DISINFECTANT', 'JC', 8, 1, 7, '64d249d722c79.jpg'),
(127, 'DL02919', 3, 'BESTAQUAM @25 LTR', 'DISF_DISINFECTANT', 'JC', 6, 0, 6, '64d24fb3835eb.jpg'),
(128, '531R', 4, 'FEED 531R', 'FEED_FEED', 'KG', 2000, 800, 1200, '64d253ab94e76.jpg'),
(129, '532R', 4, 'FEED 532R', 'FEED_FEED', 'KG', 2500, 725, 1775, '64d253caa5cdb.jpg'),
(130, '534-2R46', 4, 'FEED 534-2R46', 'FEED_FEED', 'KG', 5250, 0, 5250, '64d254245be68.jpg'),
(131, '534-1R46', 4, 'FEED 534-1R46', 'FEED_FEED', 'KG', 0, 0, 0, '64d25443c582e.jpg'),
(132, '534-1R', 4, 'FEED 534-1R', 'FEED_FEED', 'KG', 4000, 0, 4000, '64d254619073b.jpg'),
(133, '534PBR', 4, 'FEED 534PBR', 'FEED_FEED', 'KG', 1750, 1210, 540, '64d254ad98489.jpg'),
(134, '535R', 4, 'FEED 535R', 'FEED_FEED', 'KG', 2000, 125, 1875, '64d2551cdfa52.jpg'),
(135, '534-3R', 4, 'FEED 534-3R', 'FEED_FEED', 'KG', 0, 0, 0, '64d2556b73563.jpg'),
(137, '535R46', 4, 'FEED 535R46', 'FEED_FEED', 'KG', 0, 0, 0, '64d2561354a30.jpg'),
(138, '048-01', 5, 'DOC FEMALE PS ROSS-001', 'DOC PS_DOC PS', 'ekor', 8985, 0, 8985, '64d2cec51e51c.jpg'),
(141, '048-001', 5, 'DOC MALE PS ROSS-001', 'DOC PS_DOC PS', 'EKOR', 1272, 0, 1272, '64d2cf55790ee.jpeg'),
(142, '048-02', 5, 'DOC FEMALE PS ROSS-002', 'DOC PS_DOC PS', 'EKOR', 9006, 0, 9006, '64d2cf9cc41ef.jpeg'),
(143, '048-002', 5, 'DOC MALE PS ROSS-003', 'DOC PS_DOC PS', 'EKOR', 1345, 0, 1345, '64d2cfc6cfb35.jpeg'),
(144, '048-003', 5, 'DOC MALE PS ROSS-003', 'DOC PS_DOC PS', 'EKOR', 1179, 0, 1179, '64d2cfe8bb4e6.jpeg'),
(145, '048-04', 5, 'DOC FEMALE PS ROSS-004', 'DOC PS_DOC PS', 'EKOR', 8907, 0, 8907, '64d2d00eaf730.jpg'),
(146, '048-03', 5, 'DOC FEMALE PS ROSS-003', 'DOC PS_DOC PS', 'EKOR', 8945, 0, 8945, '64d2d0383f5a0.jpeg'),
(147, '048-004', 5, 'DOC MALE PS ROSS-004', 'DOC PS_DOC PS', 'EKOR', 13006, 0, 13006, '64d2d06c83252.jpeg'),
(148, '048-05', 5, 'DOC FEMALE PS ROSS-005', 'DOC PS_DOC PS', 'EKOR', 8882, 0, 8882, '64d2d0abaf74b.jpg'),
(149, '048-005', 5, 'DOC MALE PS ROSS-005', 'DOC PS_DOC PS', 'EKOR', 1207, 0, 1207, '64d2d0d612c19.jpeg'),
(150, '421.254.256.362', 1, 'TAS MEKANIK', 'G11_ME PARTS & POND MATERIALS', 'PC', 8, 0, 8, '64d3d340e58e0.jpg'),
(151, '410.04.0436', 1, 'TAFFWARE SENTER LED Y37 CREE XML T6', 'G02_OFFICE', 'Unit', 5, 3, 2, '64d3d6c3512d5.jpg'),
(155, '420.06.1062	', 2, 'baju', 'VIAL', 'PC', 0, 0, 0, '64daff9a897c0.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('Staff_Gudang','Admin','Manager') NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`, `jabatan`, `gambar`) VALUES
(19, 'Fahrianur', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'ADMIN', '64c9cc224b4b2.jpg'),
(20, 'jejen', '21232f297a57a5a743894a0e4a801fc3', 'Manager', 'Manager', '64d83812427e0.png'),
(21, 'melia', '21232f297a57a5a743894a0e4a801fc3', 'Staff_Gudang', 'Staff Gudang', '64d8cbf0d3efe.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis_barang`
--
ALTER TABLE `jenis_barang`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `masuk`
--
ALTER TABLE `masuk`
  ADD PRIMARY KEY (`id_masuk`);

--
-- Indeks untuk tabel `masuk_sementara`
--
ALTER TABLE `masuk_sementara`
  ADD PRIMARY KEY (`id_masuk_sementara`);

--
-- Indeks untuk tabel `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemeliharaan`
--
ALTER TABLE `pemeliharaan`
  ADD PRIMARY KEY (`no_service`);

--
-- Indeks untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indeks untuk tabel `pengajuan_sementara`
--
ALTER TABLE `pengajuan_sementara`
  ADD PRIMARY KEY (`id_pengajuan_sementara`);

--
-- Indeks untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `permintaan`
--
ALTER TABLE `permintaan`
  ADD PRIMARY KEY (`id_permintaan`);

--
-- Indeks untuk tabel `produksi`
--
ALTER TABLE `produksi`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `sementara`
--
ALTER TABLE `sementara`
  ADD PRIMARY KEY (`id_sementara`);

--
-- Indeks untuk tabel `stokbarang`
--
ALTER TABLE `stokbarang`
  ADD PRIMARY KEY (`id_kode_brg`),
  ADD UNIQUE KEY `kode_brg` (`kode_brg`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `masuk`
--
ALTER TABLE `masuk`
  MODIFY `id_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `masuk_sementara`
--
ALTER TABLE `masuk_sementara`
  MODIFY `id_masuk_sementara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pemasukan`
--
ALTER TABLE `pemasukan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT untuk tabel `pengajuan_sementara`
--
ALTER TABLE `pengajuan_sementara`
  MODIFY `id_pengajuan_sementara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- AUTO_INCREMENT untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT untuk tabel `permintaan`
--
ALTER TABLE `permintaan`
  MODIFY `id_permintaan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT untuk tabel `sementara`
--
ALTER TABLE `sementara`
  MODIFY `id_sementara` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT untuk tabel `stokbarang`
--
ALTER TABLE `stokbarang`
  MODIFY `id_kode_brg` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
