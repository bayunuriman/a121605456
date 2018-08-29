/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 5.1.41 : Database - a121605456
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`a121605456` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `a121605456`;

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `kode_brg` varchar(5) NOT NULL,
  `nama_brg` varchar(40) DEFAULT NULL,
  `jenis_brg` varchar(30) DEFAULT NULL,
  `harga_beli` int(12) DEFAULT NULL,
  `harga_jual` int(12) DEFAULT NULL,
  `jumlah_brg` int(5) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`kode_brg`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `barang` */

insert  into `barang`(`kode_brg`,`nama_brg`,`jenis_brg`,`harga_beli`,`harga_jual`,`jumlah_brg`,`foto`) values ('B5','Hijab B','Wanita Dewasa',20000,50000,50,'hijab_2.jpg'),('B4','Hijab A','Wanita Dewasa',20000,50000,50,'hijab_1.jpg'),('B3','Koko Biru','Pria Dewasa',25000,50000,50,'koko_3.jpg'),('B1','Koko Hitam','Pria Dewasa',25000,50000,50,'koko_1.jpg'),('B2','Koko Merah','Pria Dewasa',25000,50000,50,'koko_2.jpg'),('B6','Hijab C','Wanita Dewasa',20000,50000,50,'hijab_3.jpg'),('B7','Koko Anak Merah','Anak Laki-laki',10000,20000,20,'koko_anak_1.jpg'),('B8','Koko Anak Hitam','Anak Laki-laki',10000,20000,20,'koko_anak_2.jpg'),('B9','Koko Anak Biru','Anak Laki-laki',10000,20000,20,'koko_anak_3.jpg'),('B10','Hijab Anak A','Anak Perempuan',25000,30000,30,'hijab_anak_1.jpg'),('B11','Hijab Anak B','Anak Perempuan',25000,30000,30,'hijab_anak_2.jpg'),('B12','Hijab Anak C','Anak Perempuan',15000,29000,29,'pakaian_3.jpg');

/*Table structure for table `barang5456` */

DROP TABLE IF EXISTS `barang5456`;

CREATE TABLE `barang5456` (
  `kode` varchar(5) DEFAULT NULL,
  `namabrg` varchar(35) DEFAULT NULL,
  `hrgbeli` int(11) DEFAULT NULL,
  `hrgjual` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `kemasan` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `barang5456` */

insert  into `barang5456`(`kode`,`namabrg`,`hrgbeli`,`hrgjual`,`jumlah`,`kemasan`) values ('1','pen',100,500,57,'1'),('2','pin',59,199,0,'2');

/*Table structure for table `beli` */

DROP TABLE IF EXISTS `beli`;

CREATE TABLE `beli` (
  `id_beli` int(5) NOT NULL AUTO_INCREMENT,
  `nota_beli` varchar(10) DEFAULT NULL,
  `tgl_beli` date DEFAULT NULL,
  `kode_brg` varchar(5) DEFAULT NULL,
  `kode_sup` varchar(5) DEFAULT NULL,
  `jumlah_beli` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_beli`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `beli` */

insert  into `beli`(`id_beli`,`nota_beli`,`tgl_beli`,`kode_brg`,`kode_sup`,`jumlah_beli`) values (8,'PBL1','2018-06-18','B1','1',1),(9,'PBL2','2018-06-19','B6','2',2);

/*Table structure for table `buku_tamu` */

DROP TABLE IF EXISTS `buku_tamu`;

CREATE TABLE `buku_tamu` (
  `id_buku_tamu` int(10) NOT NULL AUTO_INCREMENT,
  `nama_buku_tamu` varchar(35) NOT NULL,
  `email_buku_tamu` varchar(35) NOT NULL,
  `isi_buku_tamu` text NOT NULL,
  PRIMARY KEY (`id_buku_tamu`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `buku_tamu` */

insert  into `buku_tamu`(`id_buku_tamu`,`nama_buku_tamu`,`email_buku_tamu`,`isi_buku_tamu`) values (1,'Ivan','ivan@gmail.com','isi ivan'),(2,'Ivon','ivon@gmail.com','isi');

/*Table structure for table `jual` */

DROP TABLE IF EXISTS `jual`;

CREATE TABLE `jual` (
  `id_jual` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `nota_jual` varchar(10) DEFAULT NULL,
  `tgl_jual` date DEFAULT NULL,
  `kode_kon` varchar(5) DEFAULT NULL,
  `kode_brg` varchar(5) DEFAULT NULL,
  `jumlah_jual` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_jual`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `jual` */

insert  into `jual`(`id_jual`,`nota_jual`,`tgl_jual`,`kode_kon`,`kode_brg`,`jumlah_jual`) values (10,'201801','2018-06-23','20180','B1',1);

/*Table structure for table `jual5456` */

DROP TABLE IF EXISTS `jual5456`;

CREATE TABLE `jual5456` (
  `notransaksi` int(5) DEFAULT NULL,
  `kode` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `jual5456` */

insert  into `jual5456`(`notransaksi`,`kode`,`harga`,`jumlah`) values (1,1,500,1);

/*Table structure for table `konsumen` */

DROP TABLE IF EXISTS `konsumen`;

CREATE TABLE `konsumen` (
  `kode_kon` varchar(5) DEFAULT NULL,
  `nama_kon` varchar(40) DEFAULT NULL,
  `alamat_kon` varchar(50) DEFAULT NULL,
  `kota_kon` varchar(30) DEFAULT NULL,
  `telp_kon` varchar(12) DEFAULT NULL,
  `id_kon` int(5) NOT NULL AUTO_INCREMENT,
  `login_id` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `hak_akses` enum('1','2') DEFAULT '2',
  UNIQUE KEY `id_kon` (`id_kon`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

/*Data for the table `konsumen` */

insert  into `konsumen`(`kode_kon`,`nama_kon`,`alamat_kon`,`kota_kon`,`telp_kon`,`id_kon`,`login_id`,`password`,`email`,`hak_akses`) values ('20180','Jeri','Jl. Aneka Raya 89','Bandung','081320121002',29,'Jeri','user','jer@gmail.com','2'),('K2.20','Jono','Jl. MH Thamrin 200','Bandung','081320121001',28,'a','b','ab@gmail.com','1'),('K1.20','Jeni','Jl. Mataram 1','Semarang','081320121000',27,'j','k','jk@gmail.com','1'),('11','eleven','11','Semarang','11',30,'11','11','11','1'),('22','22','22','Malang','22',31,'22','22','22','2');

/*Table structure for table `mahasiswa` */

DROP TABLE IF EXISTS `mahasiswa`;

CREATE TABLE `mahasiswa` (
  `nim` varchar(14) NOT NULL,
  `nama` varchar(35) DEFAULT NULL,
  `semester` varchar(1) DEFAULT NULL,
  `spp` int(12) DEFAULT NULL,
  `sks` int(12) DEFAULT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `mahasiswa` */

insert  into `mahasiswa`(`nim`,`nama`,`semester`,`spp`,`sks`) values ('A12.2016.05456','Jonathan','3',1750000,45000),('A12.2016.05555','Seee','3',1750000,45000),('A12.2020.00000','Meikarta Meichin','8',2400000,150000),('A12.2019.01234','Takata Honda','6',2300000,100000),('A12.2017.04343','Ikea Aeki','1',1250000,35000),('A11.2000.55555','Swede','4',2000000,50000);

/*Table structure for table `pegawai` */

DROP TABLE IF EXISTS `pegawai`;

CREATE TABLE `pegawai` (
  `nip` varchar(10) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `bagian` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `pegawai` */

insert  into `pegawai`(`nip`,`nama`,`bagian`) values ('7474','JAJAL','Keeper'),('1','Koala','Tidur');

/*Table structure for table `supplier` */

DROP TABLE IF EXISTS `supplier`;

CREATE TABLE `supplier` (
  `kode_sup` varchar(5) NOT NULL,
  `nama_sup` varchar(40) DEFAULT NULL,
  `alamat_sup` varchar(50) DEFAULT NULL,
  `kota_sup` varchar(30) DEFAULT NULL,
  `telp_sup` varchar(12) DEFAULT NULL,
  `id_sup` int(5) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_sup`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

/*Data for the table `supplier` */

insert  into `supplier`(`kode_sup`,`nama_sup`,`alamat_sup`,`kota_sup`,`telp_sup`,`id_sup`) values ('2','Arini','Jl. Mataram 908','Magelang','14022',22),('1','Eka','Jl. Despasiti 58','Semarang','14045',21);

/*Table structure for table `temporari` */

DROP TABLE IF EXISTS `temporari`;

CREATE TABLE `temporari` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `KdBrg` varchar(5) NOT NULL,
  `Jml` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `temporari` */

insert  into `temporari`(`id`,`KdBrg`,`Jml`) values (24,'B1',1);

/*Table structure for table `transaksi` */

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `id_transaksi` int(5) NOT NULL AUTO_INCREMENT,
  `nota_transaksi` varchar(10) DEFAULT NULL,
  `tgl_transaksi` date DEFAULT NULL,
  `kode_sup` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `transaksi` */

insert  into `transaksi`(`id_transaksi`,`nota_transaksi`,`tgl_transaksi`,`kode_sup`) values (11,'TR2','2018-06-02','2'),(10,'TR1','2018-06-01','1');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
