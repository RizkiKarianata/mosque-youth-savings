-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2020 at 01:49 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sunankalijogo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_aktivitas`
--

CREATE TABLE `tb_aktivitas` (
  `id_aktivitas` int(4) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `data_lama` text DEFAULT NULL,
  `data_baru` text DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_aktivitas`
--

INSERT INTO `tb_aktivitas` (`id_aktivitas`, `keterangan`, `data_lama`, `data_baru`, `created`, `modified`) VALUES
(12, 'Menghapus data yang ada di tabel kegiatan dengan nama kegaiatan adalah Membeli perlengkapan alah sholat', 'Membeli perlengkapan alah sholat', NULL, '2020-07-17 15:59:26', '2020-07-17 15:59:26'),
(13, 'Menghapus data yang ada di tabel remaja dengan nama remaja adalah Moehammad Rizki Karianata', 'Moehammad Rizki Karianata', NULL, '2020-07-17 15:59:37', '2020-07-17 15:59:37'),
(14, 'Menghapus data yang ada di tabel remaja dengan nama remaja adalah Intan Ayu Safitri', 'Intan Ayu Safitri', NULL, '2020-07-17 15:59:37', '2020-07-17 15:59:37'),
(15, 'Menghapus data yang ada di tabel remaja dengan nama remaja adalah Galuh Parwati', 'Galuh Parwati', NULL, '2020-07-17 15:59:37', '2020-07-17 15:59:37'),
(16, 'Menghapus data yang ada di tabel remaja dengan nama remaja adalah Rizal Arif Pradana', 'Rizal Arif Pradana', NULL, '2020-07-17 15:59:37', '2020-07-17 15:59:37'),
(17, 'Menghapus data yang ada di tabel remaja dengan nama remaja adalah Arsa', 'Arsa', NULL, '2020-07-17 15:59:37', '2020-07-17 15:59:37'),
(18, 'Menambah data ke tabel remaja dengan nama remaja adalah Moehammad Rizki Karianata', NULL, 'Moehammad Rizki Karianata', '2020-07-17 18:23:26', '2020-07-17 18:23:26'),
(19, 'Menambah data ke tabel remaja dengan nama remaja adalah Galuh Parwati', NULL, 'Galuh Parwati', '2020-07-17 18:23:37', '2020-07-17 18:23:37'),
(20, 'Menambah data ke tabel remaja dengan nama remaja adalah Rizal Arif Pradana', NULL, 'Rizal Arif Pradana', '2020-07-17 18:23:50', '2020-07-17 18:23:50'),
(21, 'Menambah data ke tabel remaja dengan nama remaja adalah Intan Ayu Safitri', NULL, 'Intan Ayu Safitri', '2020-07-17 18:24:05', '2020-07-17 18:24:05'),
(22, 'Menambah data ke tabel tabungan dengan nominal sebesar 100000', NULL, '100000', '2020-07-17 18:25:20', '2020-07-17 18:25:20'),
(23, 'Menambah data ke tabel tabungan dengan nominal sebesar 20000', NULL, '20000', '2020-07-17 18:25:31', '2020-07-17 18:25:31'),
(24, 'Menambah data ke tabel tabungan dengan nominal sebesar 50000', NULL, '50000', '2020-07-17 18:25:42', '2020-07-17 18:25:42'),
(25, 'Menambah data ke tabel tabungan dengan nominal sebesar 75000', NULL, '75000', '2020-07-17 18:25:54', '2020-07-17 18:25:54'),
(26, 'Menambah data ke tabel tabungan dengan nominal sebesar 50000', NULL, '50000', '2020-07-17 18:26:09', '2020-07-17 18:26:09'),
(27, 'Menambah data ke tabel tabungan dengan nominal sebesar 30000', NULL, '30000', '2020-07-17 18:26:21', '2020-07-17 18:26:21'),
(28, 'Menambah data ke tabel kegiatan dengan nama kegiatan adalah Membeli perlengkapan alat sholat', NULL, 'Membeli perlengkapan alat sholat', '2020-07-17 18:26:41', '2020-07-17 18:26:41'),
(29, 'Menambah data ke tabel kegiatan dengan nama kegiatan adalah Sedekah ke panti asuhan', NULL, 'Sedekah ke panti asuhan', '2020-07-17 18:27:10', '2020-07-17 18:27:10'),
(30, 'Menambah data ke tabel kegiatan dengan nama kegiatan adalah Membeli cat untuk keperluan masjid', NULL, 'Membeli cat untuk keperluan masjid', '2020-07-17 18:27:31', '2020-07-17 18:27:31'),
(31, 'Menambah data ke tabel remaja dengan nama remaja adalah Arsa', NULL, 'Arsa', '2020-07-17 18:29:40', '2020-07-17 18:29:40'),
(32, 'Mengubah data yang ada di tabel remaja dengan nama remaja baru adalah Zen Affan', 'Arsa', 'Zen Affan', '2020-07-17 18:29:53', '2020-07-17 18:29:53'),
(33, 'Menghapus data yang ada di tabel remaja dengan nama remaja adalah Zen Affan', 'Zen Affan', NULL, '2020-07-17 18:30:01', '2020-07-17 18:30:01'),
(34, 'Menambah data ke tabel tabungan dengan nominal sebesar 20000', NULL, '20000', '2020-07-17 18:30:14', '2020-07-17 18:30:14');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kegiatan`
--

CREATE TABLE `tb_kegiatan` (
  `id_kegiatan` int(4) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nominal` varchar(10) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kegiatan`
--

INSERT INTO `tb_kegiatan` (`id_kegiatan`, `nama`, `nominal`, `created`, `modified`) VALUES
(8, 'Membeli perlengkapan alat sholat', '50000', '2020-07-17 18:26:41', '2020-07-17 18:26:41'),
(9, 'Sedekah ke panti asuhan', '100000', '2020-07-17 18:27:10', '2020-07-17 18:27:10'),
(10, 'Membeli cat untuk keperluan masjid', '35000', '2020-07-17 18:27:31', '2020-07-17 18:27:31');

--
-- Triggers `tb_kegiatan`
--
DELIMITER $$
CREATE TRIGGER `Hapus Kegiatan` AFTER DELETE ON `tb_kegiatan` FOR EACH ROW INSERT INTO tb_aktivitas (keterangan, data_lama, created, modified) VALUES (CONCAT('Menghapus data yang ada di tabel kegiatan dengan nama kegaiatan adalah ', OLD.nama), OLD.nama, now(), now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Tambah Kegiatan` AFTER INSERT ON `tb_kegiatan` FOR EACH ROW INSERT INTO tb_aktivitas(keterangan, data_baru, created, modified) VALUES (CONCAT('Menambah data ke tabel kegiatan dengan nama kegiatan adalah ', NEW.nama), NEW.nama, now(), now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Ubah Kegiatan` AFTER UPDATE ON `tb_kegiatan` FOR EACH ROW INSERT INTO tb_aktivitas(keterangan, data_baru, data_lama, created, modified) VALUES (CONCAT('Mengubah data yang ada di tabel kegiatan dengan nama kegiatan baru adalah ', NEW.nama), NEW.nama, OLD.nama, now(), now())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(4) NOT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `gambar` varchar(250) DEFAULT 'coretancode.png',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_lengkap`, `username`, `password`, `no_hp`, `gambar`, `created`, `modified`) VALUES
(1, 'Galuh Parwati', 'Galuh', '$2y$10$7DVYaaRKXAfoxrSFYznslOxEDLZWLifA7Nq.t.v5a3RnRbij/cRZS', '082230595140', 'coretancode.png', '2020-07-16 15:10:41', '2020-07-16 15:10:41');

-- --------------------------------------------------------

--
-- Table structure for table `tb_remaja`
--

CREATE TABLE `tb_remaja` (
  `id_remaja` int(4) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `jenis_kelamin` enum('Laki - Laki','Perempuan') DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_remaja`
--

INSERT INTO `tb_remaja` (`id_remaja`, `nama_lengkap`, `jenis_kelamin`, `created`, `modified`) VALUES
(8, 'Moehammad Rizki Karianata', 'Laki - Laki', '2020-07-17 18:23:26', '2020-07-17 18:23:26'),
(9, 'Galuh Parwati', 'Perempuan', '2020-07-17 18:23:37', '2020-07-17 18:23:37'),
(10, 'Rizal Arif Pradana', 'Laki - Laki', '2020-07-17 18:23:50', '2020-07-17 18:23:50'),
(11, 'Intan Ayu Safitri', 'Perempuan', '2020-07-17 18:24:05', '2020-07-17 18:24:05');

--
-- Triggers `tb_remaja`
--
DELIMITER $$
CREATE TRIGGER `Hapus Remaja` AFTER DELETE ON `tb_remaja` FOR EACH ROW INSERT INTO tb_aktivitas (keterangan, data_lama, created, modified) VALUES (CONCAT('Menghapus data yang ada di tabel remaja dengan nama remaja adalah ', OLD.nama_lengkap), OLD.nama_lengkap, now(), now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Tambah Remaja` AFTER INSERT ON `tb_remaja` FOR EACH ROW INSERT INTO tb_aktivitas(keterangan, data_baru, created, modified) VALUES (CONCAT('Menambah data ke tabel remaja dengan nama remaja adalah ', NEW.nama_lengkap), NEW.nama_lengkap, now(), now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Ubah Remaja` AFTER UPDATE ON `tb_remaja` FOR EACH ROW INSERT INTO tb_aktivitas(keterangan, data_baru, data_lama, created, modified) VALUES (CONCAT('Mengubah data yang ada di tabel remaja dengan nama remaja baru adalah ', NEW.nama_lengkap), NEW.nama_lengkap, OLD.nama_lengkap, now(), now())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tabungan`
--

CREATE TABLE `tb_tabungan` (
  `id_tabungan` int(4) NOT NULL,
  `id_remaja` int(4) DEFAULT NULL,
  `nominal` varchar(10) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tabungan`
--

INSERT INTO `tb_tabungan` (`id_tabungan`, `id_remaja`, `nominal`, `created`, `modified`) VALUES
(9, 9, '100000', '2020-07-17 18:25:20', '2020-07-17 18:25:20'),
(10, 9, '20000', '2020-07-17 18:25:31', '2020-07-17 18:25:31'),
(11, 11, '50000', '2020-07-17 18:25:42', '2020-07-17 18:25:42'),
(12, 8, '75000', '2020-07-17 18:25:54', '2020-07-17 18:25:54'),
(13, 8, '50000', '2020-07-17 18:26:09', '2020-07-17 18:26:09'),
(14, 10, '30000', '2020-07-17 18:26:21', '2020-07-17 18:26:21'),
(15, 11, '20000', '2020-07-17 18:30:14', '2020-07-17 18:30:14');

--
-- Triggers `tb_tabungan`
--
DELIMITER $$
CREATE TRIGGER `Hapus Tabungan` AFTER DELETE ON `tb_tabungan` FOR EACH ROW INSERT INTO tb_aktivitas (keterangan, data_lama, created, modified) VALUES (CONCAT('Menghapus data yang ada di tabel tabungan dengan nominal sebesar ', OLD.nominal), OLD.nominal, now(), now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Tambah Tabungan` AFTER INSERT ON `tb_tabungan` FOR EACH ROW INSERT INTO tb_aktivitas(keterangan, data_baru, created, modified) VALUES (CONCAT('Menambah data ke tabel tabungan dengan nominal sebesar ', NEW.nominal), NEW.nominal, now(), now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Ubah Tabungan` AFTER UPDATE ON `tb_tabungan` FOR EACH ROW INSERT INTO tb_aktivitas(keterangan, data_baru, data_lama, created, modified) VALUES (CONCAT('Mengubah data yang ada di tabel tabungan dengan nominal baru sebesar ', NEW.nominal), NEW.nominal, OLD.nominal, now(), now())
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_aktivitas`
--
ALTER TABLE `tb_aktivitas`
  ADD PRIMARY KEY (`id_aktivitas`);

--
-- Indexes for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tb_remaja`
--
ALTER TABLE `tb_remaja`
  ADD PRIMARY KEY (`id_remaja`);

--
-- Indexes for table `tb_tabungan`
--
ALTER TABLE `tb_tabungan`
  ADD PRIMARY KEY (`id_tabungan`),
  ADD KEY `FK__tb_remaja` (`id_remaja`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_aktivitas`
--
ALTER TABLE `tb_aktivitas`
  MODIFY `id_aktivitas` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  MODIFY `id_kegiatan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_remaja`
--
ALTER TABLE `tb_remaja`
  MODIFY `id_remaja` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_tabungan`
--
ALTER TABLE `tb_tabungan`
  MODIFY `id_tabungan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_tabungan`
--
ALTER TABLE `tb_tabungan`
  ADD CONSTRAINT `FK__tb_remaja` FOREIGN KEY (`id_remaja`) REFERENCES `tb_remaja` (`id_remaja`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
