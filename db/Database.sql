-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_toko
CREATE DATABASE IF NOT EXISTS `db_toko` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_toko`;

-- Dumping structure for table db_toko.album
CREATE TABLE IF NOT EXISTS `album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artis` varchar(50) DEFAULT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `versi` varchar(50) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table db_toko.album: ~7 rows (approximately)
/*!40000 ALTER TABLE `album` DISABLE KEYS */;
INSERT INTO `album` (`id`, `artis`, `nama_barang`, `versi`, `stok`, `harga`) VALUES
	(2, 'seventeen', 'face the sun - seventeen', 'path', 20, 315000),
	(3, 'nct dream', 'Beatbox - NCT Dream', 'New School', 10, 245000),
	(4, 'nct dream', 'Trading Card A Glimo', 'random', 23, 90000),
	(5, 'nct dream', 'Trading Card A Glimo', 'random', 23, 90000),
	(6, 'nct dream', 'Trading Card A Glimo', 'New School', 90000, 27),
	(7, 'seventeen', 'attacca - seventeen', 'op.1', 25, 275000),
	(8, 'nct dream', 'nuril', 'afni', 8, 23000);
/*!40000 ALTER TABLE `album` ENABLE KEYS */;

-- Dumping structure for table db_toko.beli_barang
CREATE TABLE IF NOT EXISTS `beli_barang` (
  `id_beli` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `tanggal_beli` datetime DEFAULT NULL,
  `nama_barang` int(11) NOT NULL,
  `jumlah_beli` int(11) DEFAULT NULL,
  `total_beli` int(11) DEFAULT NULL,
  `metode_bayar` int(11) NOT NULL,
  PRIMARY KEY (`id_beli`),
  KEY `FK_usn` (`username`),
  KEY `FK_bayar1` (`metode_bayar`),
  KEY `FK_md` (`nama_barang`),
  CONSTRAINT `FK_bayar1` FOREIGN KEY (`metode_bayar`) REFERENCES `metode_pembayaran` (`id_metode`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_brg` FOREIGN KEY (`nama_barang`) REFERENCES `album` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_md` FOREIGN KEY (`nama_barang`) REFERENCES `md` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_usn` FOREIGN KEY (`username`) REFERENCES `register` (`username`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_toko.beli_barang: ~0 rows (approximately)
/*!40000 ALTER TABLE `beli_barang` DISABLE KEYS */;
/*!40000 ALTER TABLE `beli_barang` ENABLE KEYS */;

-- Dumping structure for table db_toko.beli_tiket
CREATE TABLE IF NOT EXISTS `beli_tiket` (
  `ID` varchar(50) NOT NULL DEFAULT 'AUTO_INCREMENT',
  `NIK` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `artis` varchar(50) NOT NULL DEFAULT '',
  `nama_tiket` varchar(50) NOT NULL DEFAULT '',
  `section` varchar(50) DEFAULT NULL,
  `jumlah_pesan` int(11) DEFAULT NULL,
  `metode_bayar` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`ID`) USING BTREE,
  KEY `FK_usn_tiket` (`username`),
  KEY `FK_artis` (`artis`),
  KEY `FK_fm` (`nama_tiket`),
  KEY `FK_bayar` (`metode_bayar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_toko.beli_tiket: ~0 rows (approximately)
/*!40000 ALTER TABLE `beli_tiket` DISABLE KEYS */;
/*!40000 ALTER TABLE `beli_tiket` ENABLE KEYS */;

-- Dumping structure for table db_toko.data_jual_barang
CREATE TABLE IF NOT EXISTS `data_jual_barang` (
  `id_jual` int(11) NOT NULL,
  `tanggal_jual` datetime DEFAULT NULL,
  `jenis_barang` int(11) NOT NULL,
  `jumlah_jual` int(11) DEFAULT NULL,
  `total_jual` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_jual`),
  KEY `FK_jual_md` (`jenis_barang`),
  CONSTRAINT `FK_jual_album` FOREIGN KEY (`jenis_barang`) REFERENCES `album` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_jual_md` FOREIGN KEY (`jenis_barang`) REFERENCES `md` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_toko.data_jual_barang: ~0 rows (approximately)
/*!40000 ALTER TABLE `data_jual_barang` DISABLE KEYS */;
/*!40000 ALTER TABLE `data_jual_barang` ENABLE KEYS */;

-- Dumping structure for table db_toko.data_jual_tiket
CREATE TABLE IF NOT EXISTS `data_jual_tiket` (
  `id_jual` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_jual` int(11) DEFAULT NULL,
  `artis` int(11) NOT NULL,
  `nama_tiket` int(11) NOT NULL,
  `stok_seat` int(11) DEFAULT NULL,
  `total_jual` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_jual`),
  KEY `FK_jual_artis` (`artis`),
  KEY `FK_jual_konser` (`nama_tiket`),
  CONSTRAINT `FK_jual_artis` FOREIGN KEY (`artis`) REFERENCES `artis` (`id_artis`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_jual_fm` FOREIGN KEY (`nama_tiket`) REFERENCES `fanmeet` (`no_tiket`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_jual_konser` FOREIGN KEY (`nama_tiket`) REFERENCES `konser` (`no_tiket`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_toko.data_jual_tiket: ~0 rows (approximately)
/*!40000 ALTER TABLE `data_jual_tiket` DISABLE KEYS */;
/*!40000 ALTER TABLE `data_jual_tiket` ENABLE KEYS */;

-- Dumping structure for table db_toko.fanmeet
CREATE TABLE IF NOT EXISTS `fanmeet` (
  `no_tiket` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `jenis_seat` varchar(50) DEFAULT NULL,
  `harga_tiket` int(11) DEFAULT NULL,
  `stok_seat` int(11) DEFAULT NULL,
  PRIMARY KEY (`no_tiket`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_toko.fanmeet: ~0 rows (approximately)
/*!40000 ALTER TABLE `fanmeet` DISABLE KEYS */;
/*!40000 ALTER TABLE `fanmeet` ENABLE KEYS */;

-- Dumping structure for table db_toko.konser
CREATE TABLE IF NOT EXISTS `konser` (
  `no_tiket` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jenis_seat` varchar(50) DEFAULT NULL,
  `harga_tiket` int(11) DEFAULT NULL,
  `stok_seat` int(11) DEFAULT NULL,
  PRIMARY KEY (`no_tiket`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_toko.konser: ~0 rows (approximately)
/*!40000 ALTER TABLE `konser` DISABLE KEYS */;
/*!40000 ALTER TABLE `konser` ENABLE KEYS */;

-- Dumping structure for table db_toko.md
CREATE TABLE IF NOT EXISTS `md` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artis` varchar(50) DEFAULT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `versi` varchar(50) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `stok` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_toko.md: ~0 rows (approximately)
/*!40000 ALTER TABLE `md` DISABLE KEYS */;
INSERT INTO `md` (`id`, `artis`, `nama_barang`, `versi`, `harga`, `stok`) VALUES
	(1, 'nct dream', 'Trading Card A Glimo', 'random', 90000, '14');
/*!40000 ALTER TABLE `md` ENABLE KEYS */;

-- Dumping structure for table db_toko.metode_pembayaran
CREATE TABLE IF NOT EXISTS `metode_pembayaran` (
  `id_metode` int(11) NOT NULL AUTO_INCREMENT,
  `nama_metode` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_metode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_toko.metode_pembayaran: ~0 rows (approximately)
/*!40000 ALTER TABLE `metode_pembayaran` DISABLE KEYS */;
/*!40000 ALTER TABLE `metode_pembayaran` ENABLE KEYS */;

-- Dumping structure for table db_toko.pembelian_barang
CREATE TABLE IF NOT EXISTS `pembelian_barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `nomor` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `jumlah` varchar(50) DEFAULT NULL,
  `pembayaran` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_toko.pembelian_barang: ~0 rows (approximately)
/*!40000 ALTER TABLE `pembelian_barang` DISABLE KEYS */;
INSERT INTO `pembelian_barang` (`id`, `nama`, `nomor`, `alamat`, `jumlah`, `pembayaran`) VALUES
	(1, 'viola', '086429363927', 'LUMAJANG', '2', 'MANDIRI');
/*!40000 ALTER TABLE `pembelian_barang` ENABLE KEYS */;

-- Dumping structure for table db_toko.register
CREATE TABLE IF NOT EXISTS `register` (
  `username` varchar(50) NOT NULL DEFAULT '',
  `pass` varchar(50) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_toko.register: ~5 rows (approximately)
/*!40000 ALTER TABLE `register` DISABLE KEYS */;
INSERT INTO `register` (`username`, `pass`, `nama`, `email`) VALUES
	('LALAVI', '275', 'viviolala', 'jeonwonu489@gmail.com'),
	('lavila', '123', 'lalala', 'vla@gmail.com'),
	('viola17', '123', '123', 'jeonwonu489@gmail.com'),
	('Viviola', '879', 'Viola', 'nurilafnia@gmail.com'),
	('vla', '123', 'vlavla', 'vla@gmail.com');
/*!40000 ALTER TABLE `register` ENABLE KEYS */;

-- Dumping structure for table db_toko.tiket
CREATE TABLE IF NOT EXISTS `tiket` (
  `NIK` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `artis` varchar(50) DEFAULT NULL,
  `nama_tiket` varchar(50) DEFAULT NULL,
  `section` varchar(50) DEFAULT NULL,
  `jumlah_pesan` varchar(50) DEFAULT NULL,
  `metode_bayar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_toko.tiket: ~0 rows (approximately)
/*!40000 ALTER TABLE `tiket` DISABLE KEYS */;
INSERT INTO `tiket` (`NIK`, `username`, `artis`, `nama_tiket`, `section`, `jumlah_pesan`, `metode_bayar`) VALUES
	('37570241235301', 'viola', 'bts', 'bts', 'CAT4D', '1', 'BCA');
/*!40000 ALTER TABLE `tiket` ENABLE KEYS */;

-- Dumping structure for trigger db_toko.beli_barang_album
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `beli_barang_album` BEFORE INSERT ON `beli_barang` FOR EACH ROW BEGIN
	UPDATE album SET stok = stok - NEW.jumlah_beli
	WHERE id = NEW.id_beli;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger db_toko.beli_barang_md
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `beli_barang_md` BEFORE INSERT ON `beli_barang` FOR EACH ROW BEGIN
	UPDATE md SET stok = stok - NEW.jumlah_beli
	WHERE id = NEW.id_beli;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger db_toko.beli_tiket_fm
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `beli_tiket_fm` BEFORE INSERT ON `beli_tiket` FOR EACH ROW BEGIN
	UPDATE fanmeet SET stok_seat = stok_seat - NEW.jumlah_pesan
	WHERE id = NEW.no_tiket;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger db_toko.beli_tiket_konser
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `beli_tiket_konser` BEFORE INSERT ON `beli_tiket` FOR EACH ROW BEGIN
	UPDATE konser SET stok_seat = stok_seat - NEW.jumlah_pesan
	WHERE id = NEW.no_tiket;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
