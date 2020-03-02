-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2019 at 06:54 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsurat`
--

-- --------------------------------------------------------

--
-- Table structure for table `dbsurat_ktps`
--

CREATE TABLE `dbsurat_ktps` (
  `ktps_id` int(11) NOT NULL,
  `ktps_nomor` varchar(50) NOT NULL,
  `ktps_nama` varchar(50) NOT NULL,
  `ktps_tanggal_lahir` date NOT NULL,
  `ktps_tempat_lahir` varchar(50) NOT NULL,
  `ktps_wni` varchar(50) NOT NULL,
  `ktps_jk` enum('L','P','','') NOT NULL,
  `ktps_agama` enum('Islam','Kristen','Katolik','Hindu','Budha','Konghuchu','') NOT NULL,
  `ktps_kerja` varchar(50) NOT NULL,
  `ktps_status` enum('Nikah','Belum Menikah','','') NOT NULL,
  `ktps_nik` int(11) NOT NULL,
  `ktps_alamat` varchar(50) NOT NULL,
  `ktps_disposisi` enum('Setuju','Tunggu','','') DEFAULT NULL,
  `ktps_tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbsurat_ktps`
--

INSERT INTO `dbsurat_ktps` (`ktps_id`, `ktps_nomor`, `ktps_nama`, `ktps_tanggal_lahir`, `ktps_tempat_lahir`, `ktps_wni`, `ktps_jk`, `ktps_agama`, `ktps_kerja`, `ktps_status`, `ktps_nik`, `ktps_alamat`, `ktps_disposisi`, `ktps_tanggal`) VALUES
(1, 'oke', 'faea', '2019-08-07', 'adgrg', 'aefge', 'L', 'Islam', 'aefserg', 'Nikah', 1345, 'afesf', 'Setuju', '2019-08-23 01:00:33');

-- --------------------------------------------------------

--
-- Table structure for table `dbsurat_ppak`
--

CREATE TABLE `dbsurat_ppak` (
  `ppak_id` int(11) NOT NULL,
  `ppak_nomor` varchar(50) NOT NULL,
  `ppak_nokk` int(11) NOT NULL,
  `ppak_namakepala` varchar(50) NOT NULL,
  `ppak_alamat_sekarang` varchar(50) NOT NULL,
  `ppak_alamat_tujuan` varchar(50) NOT NULL,
  `ppak_alasanpindah` varchar(50) NOT NULL,
  `ppak_jenispindah` varchar(50) NOT NULL,
  `ppak_statuskkpindah` varchar(50) NOT NULL,
  `ppak_statuskktidakpindah` varchar(50) NOT NULL,
  `ppak_jumlah_pindah` int(11) NOT NULL,
  `ppak_disposisi` enum('Setuju','Tunggu','','') DEFAULT NULL,
  `ppak_tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbsurat_ppak`
--

INSERT INTO `dbsurat_ppak` (`ppak_id`, `ppak_nomor`, `ppak_nokk`, `ppak_namakepala`, `ppak_alamat_sekarang`, `ppak_alamat_tujuan`, `ppak_alasanpindah`, `ppak_jenispindah`, `ppak_statuskkpindah`, `ppak_statuskktidakpindah`, `ppak_jumlah_pindah`, `ppak_disposisi`, `ppak_tanggal`) VALUES
(2, 'aewdaasd1qwe112', 12323, 'asdasd', 'asdda', 'asdasd', 'asdads', 'asdd', ' sadd', 'asdas', 2, 'Setuju', '2019-08-23 06:48:46'),
(3, 'RCTVYBK', 234, '2134', '23345', 'hjbkn', 'vghjbjkn', 'hbjknkl', 'hjbknl', 'hbjkn', 1, 'Setuju', '2019-08-24 17:12:38'),
(4, 'B2', 678, 'gvyuhij', 'vbnjm', 'bhjnklm,', 'bnjklm;,', 'vbjhknlm', 'ybjnkk', 'vybhjknlm', 1, NULL, '2019-08-24 18:30:17'),
(5, '1', 1, '1', '1', '1', '1', '1', '1', '1', 1, NULL, '2019-09-09 13:30:50');

-- --------------------------------------------------------

--
-- Table structure for table `dbsurat_ppak_detail`
--

CREATE TABLE `dbsurat_ppak_detail` (
  `detail_id` int(11) NOT NULL,
  `detail_ppak_id` int(11) NOT NULL,
  `detail_nik` varchar(20) NOT NULL,
  `detail_nama` varchar(50) NOT NULL,
  `detail_tempat_lahir` varchar(50) NOT NULL,
  `detail_tanggal_lahir` date NOT NULL,
  `detail_shdk` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbsurat_ppak_detail`
--

INSERT INTO `dbsurat_ppak_detail` (`detail_id`, `detail_ppak_id`, `detail_nik`, `detail_nama`, `detail_tempat_lahir`, `detail_tanggal_lahir`, `detail_shdk`) VALUES
(1, 2, '12312312', 'xjihad', 'pekanbaru', '2019-08-07', '12'),
(2, 2, '132123', 'jihada', 'pekanbaru', '2019-08-02', '12'),
(3, 3, '12312312', 'kjihad', 'pekanbaru', '2019-08-01', '12'),
(4, 3, '12324', 'jnkl', ' hjj', '2019-08-01', '12'),
(5, 4, 'vhjbkn', 'gvjhbkn', 'vhbjk', '2019-08-06', '12'),
(6, 5, '1', '1', '1', '2019-09-01', '1');

-- --------------------------------------------------------

--
-- Table structure for table `dbsurat_skb`
--

CREATE TABLE `dbsurat_skb` (
  `skb_id` int(11) NOT NULL,
  `skb_nomor` varchar(50) NOT NULL,
  `skb_nama` varchar(50) NOT NULL,
  `skb_tanggal_lahir` date NOT NULL,
  `skb_tempat_lahir` varchar(50) NOT NULL,
  `skb_wni` varchar(50) NOT NULL,
  `skb_agama` enum('Islam','Kristen','Katolik','Hindu','Budha','Konghuchu') NOT NULL,
  `skb_jk` enum('L','P','','') NOT NULL,
  `skb_kerja` varchar(50) NOT NULL,
  `skb_alamat` varchar(50) NOT NULL,
  `skb_jumlahkeluarga` int(11) NOT NULL,
  `skb_disposisi` enum('Setuju','Tunggu','','') DEFAULT NULL,
  `skb_tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbsurat_skb`
--

INSERT INTO `dbsurat_skb` (`skb_id`, `skb_nomor`, `skb_nama`, `skb_tanggal_lahir`, `skb_tempat_lahir`, `skb_wni`, `skb_agama`, `skb_jk`, `skb_kerja`, `skb_alamat`, `skb_jumlahkeluarga`, `skb_disposisi`, `skb_tanggal`) VALUES
(2, 'zsadad', 'ads', '2019-08-15', 'asdasd', 'asd', 'Islam', 'L', 'asdsad', 'asdasd', 2, 'Setuju', '2019-08-23 06:05:24'),
(4, 'gjhbk', 'vjbkjl', '2019-08-01', 'hjbkn', 'hjbknl', 'Islam', 'L', 'jhbkn', 'hjbkn', 1, 'Setuju', '2019-08-24 18:47:15');

-- --------------------------------------------------------

--
-- Table structure for table `dbsurat_skb_detail`
--

CREATE TABLE `dbsurat_skb_detail` (
  `detail_id` int(11) NOT NULL,
  `detail_skb_id` int(11) NOT NULL,
  `detail_nama` varchar(50) NOT NULL,
  `detail_tempat` varchar(50) NOT NULL,
  `detail_tanggal_lahir` date NOT NULL,
  `detail_shdk` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbsurat_skb_detail`
--

INSERT INTO `dbsurat_skb_detail` (`detail_id`, `detail_skb_id`, `detail_nama`, `detail_tempat`, `detail_tanggal_lahir`, `detail_shdk`) VALUES
(1, 2, 'kjihad', 'pekanbaru', '2019-08-15', '13'),
(2, 2, 'jihad', 'disana', '2019-08-01', '21'),
(3, 3, 'adsasd', 'asdasd', '2019-08-21', '12'),
(4, 3, 'ads', 'pekanbaru', '2019-07-31', '12'),
(5, 3, ' kjhbkjn', 'hjbknl', '2019-08-22', 'hk');

-- --------------------------------------------------------

--
-- Table structure for table `dbsurat_skck`
--

CREATE TABLE `dbsurat_skck` (
  `skck_id` int(11) NOT NULL,
  `skck_nomor` varchar(50) NOT NULL,
  `skck_nama` varchar(50) NOT NULL,
  `skck_tanggal_lahir` date NOT NULL,
  `skck_tempat_lahir` varchar(50) NOT NULL,
  `skck_wni` varchar(50) NOT NULL,
  `skck_jk` enum('L','P','','') NOT NULL,
  `skck_agama` enum('Islam','Kristen','Katolik','Budha','Hindu','Katolik') NOT NULL,
  `skck_kerja` varchar(50) NOT NULL,
  `skck_status` enum('Nikah','Belum Menikah','','') NOT NULL,
  `skck_nik` int(11) NOT NULL,
  `skck_keperluan` varchar(50) NOT NULL,
  `skck_alamat` varchar(50) NOT NULL,
  `skck_disposisi` enum('Setuju','Tunggu','','') DEFAULT NULL,
  `skck_tujuan` varchar(50) NOT NULL,
  `skck_tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbsurat_skck`
--

INSERT INTO `dbsurat_skck` (`skck_id`, `skck_nomor`, `skck_nama`, `skck_tanggal_lahir`, `skck_tempat_lahir`, `skck_wni`, `skck_jk`, `skck_agama`, `skck_kerja`, `skck_status`, `skck_nik`, `skck_keperluan`, `skck_alamat`, `skck_disposisi`, `skck_tujuan`, `skck_tanggal`) VALUES
(3, '67890', 'bnm,', '2019-08-15', 'bmn', 'vbnmj,k,l;', 'L', 'Islam', '1', 'Nikah', 1, 'bnm', ' ,m.l', 'Setuju', '', '2019-08-23 21:11:12'),
(4, 'vhbj', 'ghvjbkn', '2019-08-01', 'hjkbnl', 'hjbkn', 'L', 'Islam', ' jhjbknkk', 'Nikah', 678, 'hjbknl', 'gjbhknk', 'Setuju', '', '2019-08-24 19:01:09'),
(5, '1111111111', 'Assia', '2019-08-01', 'Tn', 'dt', 'L', 'Islam', 'uyhilk', 'Nikah', 34567, 'frhgbjknml', 'tfygjhbkn', 'Setuju', '', '2019-08-27 00:00:00'),
(6, 'B2', 'jbnlk', '2019-09-02', 'adgadf', 'asd', 'L', 'Islam', 'qds', 'Nikah', 1, '1', 'sd', NULL, '', '2019-09-09 00:00:00'),
(7, '1', '1', '2019-09-12', '1', '1', 'L', 'Islam', 'Banyak', 'Nikah', 1, '1', '1', NULL, '', '2019-09-12 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `dbsurat_skh`
--

CREATE TABLE `dbsurat_skh` (
  `skh_id` int(11) NOT NULL,
  `skh_nomor` varchar(50) NOT NULL,
  `skh_nama` varchar(50) NOT NULL,
  `skh_tanggal_lahir` date NOT NULL,
  `skh_tempat_lahir` varchar(50) NOT NULL,
  `skh_agama` enum('Islam','Kristen','Katolik','Hindu','Budha','Konghuchu') NOT NULL,
  `skh_jk` enum('L','P','','') NOT NULL,
  `skh_kerja` varchar(50) NOT NULL,
  `skh_nik` int(11) NOT NULL,
  `skh_alamat` varchar(50) NOT NULL,
  `skh_baranghilang` varchar(50) NOT NULL,
  `skh_keterangan` text NOT NULL,
  `skh_disposisi` enum('Setuju','Tunggu','','') DEFAULT NULL,
  `skh_tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbsurat_skh`
--

INSERT INTO `dbsurat_skh` (`skh_id`, `skh_nomor`, `skh_nama`, `skh_tanggal_lahir`, `skh_tempat_lahir`, `skh_agama`, `skh_jk`, `skh_kerja`, `skh_nik`, `skh_alamat`, `skh_baranghilang`, `skh_keterangan`, `skh_disposisi`, `skh_tanggal`) VALUES
(1, '1ghjkl', 'jbnlk', '2019-08-08', 'adgadf', 'Islam', 'L', 'Banyak', 123, 'jauh', 'satu', 'ga ada', 'Setuju', '2019-08-23 00:59:14'),
(2, 'hbjnk', 'hbkjnlm;', '2000-06-05', 'hbjknklBKJNL', 'Islam', 'L', 'yguhij', 6789, 'guyhij', 'jhukl', 'uhiij', 'Setuju', '2019-08-24 19:05:33');

-- --------------------------------------------------------

--
-- Table structure for table `dbsurat_skkn`
--

CREATE TABLE `dbsurat_skkn` (
  `skkn_id` int(11) NOT NULL,
  `skkn_nomor` varchar(50) NOT NULL,
  `skkn_nama` varchar(50) NOT NULL,
  `skkn_tanggal_lahir` date NOT NULL,
  `skkn_tempat_lahir` varchar(50) NOT NULL,
  `skkn_wni` varchar(50) NOT NULL,
  `skkn_agama` enum('Islam','Kristen','Katolik','Hindu','Budha','Konghuchu') NOT NULL,
  `skkn_jk` enum('L','P','','') NOT NULL,
  `skkn_kerja` varchar(50) NOT NULL,
  `skkn_status` enum('Nikah','Belum Menikah','','') NOT NULL,
  `skkn_nik` int(11) NOT NULL,
  `skkn_alamat` varchar(50) NOT NULL,
  `skkn_disposisi` enum('Setuju','Tunggu','','') DEFAULT NULL,
  `skkn_tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbsurat_skkn`
--

INSERT INTO `dbsurat_skkn` (`skkn_id`, `skkn_nomor`, `skkn_nama`, `skkn_tanggal_lahir`, `skkn_tempat_lahir`, `skkn_wni`, `skkn_agama`, `skkn_jk`, `skkn_kerja`, `skkn_status`, `skkn_nik`, `skkn_alamat`, `skkn_disposisi`, `skkn_tanggal`) VALUES
(1, 'qwerty', 'asd', '2019-08-01', 'sadasd', 'sadas', 'Islam', 'L', 'qds', 'Nikah', 132123, 'sadasd', 'Setuju', '2019-08-23 05:00:38'),
(2, 'gvhhjb', 'bkjn', '2019-08-01', ' bnm', 'vghjbkn', 'Islam', 'L', 'gvhjbk', 'Nikah', 5678, 'ghvjbkn', 'Setuju', '2019-08-24 19:09:51'),
(3, '123/ABC', 'Siti A', '2019-08-01', 'Pekanbaru', 'Indonesia', 'Islam', 'L', 'Mahasiswa', 'Nikah', 12345663, 'jl.Garuda Sakti', 'Setuju', '2019-08-26 11:01:30');

-- --------------------------------------------------------

--
-- Table structure for table `dbsurat_skpn`
--

CREATE TABLE `dbsurat_skpn` (
  `skpn_id` int(11) NOT NULL,
  `skpn_nomor` varchar(50) NOT NULL,
  `skpn_nama` varchar(50) NOT NULL,
  `skpn_tanggal_lahir` date NOT NULL,
  `skpn_tempat_lahir` varchar(50) NOT NULL,
  `skpn_wni` varchar(50) NOT NULL,
  `skpn_agama` enum('Islam','Kristen','Katolik','Hindu','Budha','Konghuchu') NOT NULL,
  `skpn_jk` enum('L','P','','') NOT NULL,
  `skpn_kerja` varchar(50) NOT NULL,
  `skpn_status` enum('Nikah','Belum Menikah','','') NOT NULL,
  `skpn_nik` int(11) NOT NULL,
  `skpn_alamat` varchar(50) NOT NULL,
  `skpn_disposisi` enum('Setuju','Tunggu','','') DEFAULT NULL,
  `skpn_tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbsurat_skpn`
--

INSERT INTO `dbsurat_skpn` (`skpn_id`, `skpn_nomor`, `skpn_nama`, `skpn_tanggal_lahir`, `skpn_tempat_lahir`, `skpn_wni`, `skpn_agama`, `skpn_jk`, `skpn_kerja`, `skpn_status`, `skpn_nik`, `skpn_alamat`, `skpn_disposisi`, `skpn_tanggal`) VALUES
(1, 'qwerty', 'adasd', '2019-08-16', 'adasd', 'asdads', 'Islam', 'L', 'asdassd', 'Nikah', 1312312, 'sadasdasd', 'Setuju', '2019-08-23 05:02:52'),
(2, 'hbjkn', 'ghjbknl', '2008-07-06', 'ghjbkn', 'hbjkn', 'Islam', 'L', 'bhinjkl', 'Nikah', 4567, 'ytgbhn', 'Setuju', '2019-08-24 19:14:43');

-- --------------------------------------------------------

--
-- Table structure for table `dbsurat_sktk`
--

CREATE TABLE `dbsurat_sktk` (
  `sktk_id` int(11) NOT NULL,
  `sktk_nomor` varchar(50) NOT NULL,
  `sktk_nama` varchar(50) NOT NULL,
  `sktk_tanggal_lahir` date NOT NULL,
  `sktk_tempat_lahir` varchar(50) NOT NULL,
  `sktk_wni` varchar(50) NOT NULL,
  `sktk_jk` enum('L','P','','') NOT NULL,
  `sktk_agama` enum('Islam','Kristen','Katolik','Hindu','Budha','Konghuchu') NOT NULL,
  `sktk_kerja` varchar(50) NOT NULL,
  `sktk_status` enum('Nikah','Belum Menikah','','') NOT NULL,
  `sktk_nik` int(11) NOT NULL,
  `sktk_alamat` varchar(50) NOT NULL,
  `sktk_namabapak` varchar(50) NOT NULL,
  `sktk_namaibu` varchar(50) NOT NULL,
  `sktk_disposisi` enum('Setuju','Tunggu','','') DEFAULT NULL,
  `sktk_tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbsurat_sktk`
--

INSERT INTO `dbsurat_sktk` (`sktk_id`, `sktk_nomor`, `sktk_nama`, `sktk_tanggal_lahir`, `sktk_tempat_lahir`, `sktk_wni`, `sktk_jk`, `sktk_agama`, `sktk_kerja`, `sktk_status`, `sktk_nik`, `sktk_alamat`, `sktk_namabapak`, `sktk_namaibu`, `sktk_disposisi`, `sktk_tanggal`) VALUES
(1, 'qwerty', 'asdasd', '2019-08-10', 'ad', 'asd', 'L', 'Islam', 'adasd', 'Nikah', 12313, 'saddas', 'jihad', 'asdads', 'Setuju', '2019-08-23 05:03:29'),
(2, 'hbjknl', 'vhjbknl', '2019-08-02', 'jvvhbknl', 'bhkjnlkm', 'L', 'Islam', 'hbjkn', 'Nikah', 678, 'gjhbkn', 'vghjbk', 'vhjbkn', 'Setuju', '2019-08-24 19:17:53');

-- --------------------------------------------------------

--
-- Table structure for table `dbsurat_sku`
--

CREATE TABLE `dbsurat_sku` (
  `sku_id` int(11) NOT NULL,
  `sku_nomor` varchar(50) NOT NULL,
  `sku_nama` varchar(50) NOT NULL,
  `sku_tanggal_lahir` date NOT NULL,
  `sku_tempat_lahir` varchar(50) NOT NULL,
  `sku_wni` varchar(11) NOT NULL,
  `sku_agama` enum('Islam','Kristen','Katolik','Hindu','Budha','Konghuchu') NOT NULL,
  `sku_jk` enum('L','P','','') NOT NULL,
  `sku_kerja` varchar(50) NOT NULL,
  `sku_status` enum('Menikah','Belum Menikah','','') NOT NULL,
  `sku_nik` int(11) NOT NULL,
  `sku_alamat` varchar(50) NOT NULL,
  `sku_nama_usaha` varchar(50) NOT NULL,
  `sku_no_register` varchar(50) NOT NULL,
  `sku_disposisi` enum('Setuju','Tunggu','','') DEFAULT NULL,
  `sku_tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbsurat_sku`
--

INSERT INTO `dbsurat_sku` (`sku_id`, `sku_nomor`, `sku_nama`, `sku_tanggal_lahir`, `sku_tempat_lahir`, `sku_wni`, `sku_agama`, `sku_jk`, `sku_kerja`, `sku_status`, `sku_nik`, `sku_alamat`, `sku_nama_usaha`, `sku_no_register`, `sku_disposisi`, `sku_tanggal`) VALUES
(1, 'qwerty', 'asda', '2019-08-09', 'asdasd', 'asdasd', 'Islam', 'L', 'Banyak', '', 1212, 'wsdasd', 'sadasd', 'adsasd', 'Setuju', '2019-08-23 05:05:21'),
(2, 'ffcgvhjb', 'tyuu', '2019-08-03', 'hvgjbj', 'vghjb', 'Islam', 'L', 'gvhjbk', '', 5678, 'vghjb m', 'vgbhjk', 'fhgv b', 'Setuju', '2019-08-24 19:25:56');

-- --------------------------------------------------------

--
-- Table structure for table `dbsurat_spbpn`
--

CREATE TABLE `dbsurat_spbpn` (
  `spbpn_id` int(11) NOT NULL,
  `spbpn_nama` varchar(50) NOT NULL,
  `spbpn_tanggal_lahir` date NOT NULL,
  `spbpn_tempat_lahir` varchar(50) NOT NULL,
  `spbpn_wni` varchar(50) NOT NULL,
  `spbpn_kerja` varchar(50) NOT NULL,
  `spbpn_nokk` int(11) NOT NULL,
  `spbpn_nik` int(11) NOT NULL,
  `spbpn_alamat` varchar(50) NOT NULL,
  `spbpn_disposisi` enum('Setuju','Tunggu','','') DEFAULT NULL,
  `spbpn_tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbsurat_spbpn`
--

INSERT INTO `dbsurat_spbpn` (`spbpn_id`, `spbpn_nama`, `spbpn_tanggal_lahir`, `spbpn_tempat_lahir`, `spbpn_wni`, `spbpn_kerja`, `spbpn_nokk`, `spbpn_nik`, `spbpn_alamat`, `spbpn_disposisi`, `spbpn_tanggal`) VALUES
(3, 'qwerty', '2019-08-01', 'yui', 'yihuij', 'giuhj', 567, 5678, 'vghjbn', NULL, '2019-08-24 19:37:33');

-- --------------------------------------------------------

--
-- Table structure for table `dbsurat_surat_masuk`
--

CREATE TABLE `dbsurat_surat_masuk` (
  `masuk_id` int(11) NOT NULL,
  `masuk_perihal` varchar(50) NOT NULL,
  `masuk_tanggal` date NOT NULL,
  `masuk_asal` varchar(50) NOT NULL,
  `masuk_nomor` varchar(50) NOT NULL,
  `masuk_isi_singkat` text NOT NULL,
  `masuk_keterangan` text NOT NULL,
  `surat_foto` text NOT NULL,
  `masuk_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbsurat_surat_masuk`
--

INSERT INTO `dbsurat_surat_masuk` (`masuk_id`, `masuk_perihal`, `masuk_tanggal`, `masuk_asal`, `masuk_nomor`, `masuk_isi_singkat`, `masuk_keterangan`, `surat_foto`, `masuk_date_created`) VALUES
(8, 'Barang', '2019-09-02', '1', 'B2', 'bkjnlm', 'uhiij', '16_04_2372_jurnal_eproc.pdf', '2019-09-09 13:45:46');

-- --------------------------------------------------------

--
-- Table structure for table `dbsurat_user`
--

CREATE TABLE `dbsurat_user` (
  `user_id` int(11) NOT NULL,
  `user_level` enum('Penghulu','Inspektorat','Pegawai','Administrator') NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Pria','Wanita','','') NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `user_tanggal` date NOT NULL,
  `user_tempat` varchar(50) NOT NULL,
  `user_jabatan` varchar(50) NOT NULL,
  `user_nope` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbsurat_user`
--

INSERT INTO `dbsurat_user` (`user_id`, `user_level`, `username`, `password`, `nama_lengkap`, `jenis_kelamin`, `alamat`, `user_tanggal`, `user_tempat`, `user_jabatan`, `user_nope`) VALUES
(1, 'Penghulu', 'Penghulu', 'b57c0b7399df20182f6245322d2a669b', 'Penghulu', 'Pria', 'Bangko Bakti', '0000-00-00', '', '', ''),
(2, 'Inspektorat', 'Inspektorat', '3f614675c79258606d22446afedd2e64', 'Inspektorat', 'Pria', 'Bangko Bakti', '0000-00-00', '', '', ''),
(4, 'Administrator', 'Administrator', '7b7bc2512ee1fedcd76bdc68926d4f7b', 'Administrator', 'Pria', 'Bangko Bakti', '0000-00-00', '', '', ''),
(6, 'Pegawai', 'Pegawai', 'f757ee54f5b9216e0401384e537790a1', '', 'Pria', 'Dimanamana', '0000-00-00', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dbsurat_ktps`
--
ALTER TABLE `dbsurat_ktps`
  ADD PRIMARY KEY (`ktps_id`);

--
-- Indexes for table `dbsurat_ppak`
--
ALTER TABLE `dbsurat_ppak`
  ADD PRIMARY KEY (`ppak_id`);

--
-- Indexes for table `dbsurat_ppak_detail`
--
ALTER TABLE `dbsurat_ppak_detail`
  ADD PRIMARY KEY (`detail_id`);

--
-- Indexes for table `dbsurat_skb`
--
ALTER TABLE `dbsurat_skb`
  ADD PRIMARY KEY (`skb_id`);

--
-- Indexes for table `dbsurat_skb_detail`
--
ALTER TABLE `dbsurat_skb_detail`
  ADD PRIMARY KEY (`detail_id`);

--
-- Indexes for table `dbsurat_skck`
--
ALTER TABLE `dbsurat_skck`
  ADD PRIMARY KEY (`skck_id`);

--
-- Indexes for table `dbsurat_skh`
--
ALTER TABLE `dbsurat_skh`
  ADD PRIMARY KEY (`skh_id`);

--
-- Indexes for table `dbsurat_skkn`
--
ALTER TABLE `dbsurat_skkn`
  ADD PRIMARY KEY (`skkn_id`);

--
-- Indexes for table `dbsurat_skpn`
--
ALTER TABLE `dbsurat_skpn`
  ADD PRIMARY KEY (`skpn_id`);

--
-- Indexes for table `dbsurat_sktk`
--
ALTER TABLE `dbsurat_sktk`
  ADD PRIMARY KEY (`sktk_id`);

--
-- Indexes for table `dbsurat_sku`
--
ALTER TABLE `dbsurat_sku`
  ADD PRIMARY KEY (`sku_id`);

--
-- Indexes for table `dbsurat_spbpn`
--
ALTER TABLE `dbsurat_spbpn`
  ADD PRIMARY KEY (`spbpn_id`);

--
-- Indexes for table `dbsurat_surat_masuk`
--
ALTER TABLE `dbsurat_surat_masuk`
  ADD PRIMARY KEY (`masuk_id`);

--
-- Indexes for table `dbsurat_user`
--
ALTER TABLE `dbsurat_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dbsurat_ktps`
--
ALTER TABLE `dbsurat_ktps`
  MODIFY `ktps_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dbsurat_ppak`
--
ALTER TABLE `dbsurat_ppak`
  MODIFY `ppak_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `dbsurat_ppak_detail`
--
ALTER TABLE `dbsurat_ppak_detail`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `dbsurat_skb`
--
ALTER TABLE `dbsurat_skb`
  MODIFY `skb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dbsurat_skb_detail`
--
ALTER TABLE `dbsurat_skb_detail`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `dbsurat_skck`
--
ALTER TABLE `dbsurat_skck`
  MODIFY `skck_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `dbsurat_skh`
--
ALTER TABLE `dbsurat_skh`
  MODIFY `skh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dbsurat_skkn`
--
ALTER TABLE `dbsurat_skkn`
  MODIFY `skkn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dbsurat_skpn`
--
ALTER TABLE `dbsurat_skpn`
  MODIFY `skpn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dbsurat_sktk`
--
ALTER TABLE `dbsurat_sktk`
  MODIFY `sktk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dbsurat_sku`
--
ALTER TABLE `dbsurat_sku`
  MODIFY `sku_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dbsurat_spbpn`
--
ALTER TABLE `dbsurat_spbpn`
  MODIFY `spbpn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dbsurat_surat_masuk`
--
ALTER TABLE `dbsurat_surat_masuk`
  MODIFY `masuk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `dbsurat_user`
--
ALTER TABLE `dbsurat_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
