-- MySQL dump 10.13  Distrib 8.0.15, for Win64 (x86_64)
--
-- Host: localhost    Database: customboxid
-- ------------------------------------------------------
-- Server version	8.0.15

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin@admin.com','21232f297a57a5a743894a0e4a801fc3','admin','avatar-33.jpg','1');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `deskripsi1`
--

DROP TABLE IF EXISTS `deskripsi1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `deskripsi1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `deskripsi1`
--

LOCK TABLES `deskripsi1` WRITE;
/*!40000 ALTER TABLE `deskripsi1` DISABLE KEYS */;
INSERT INTO `deskripsi1` VALUES (1,'3.jpg',' ','            <blockquote>\r\n<div class=\"text-medium text-white\">Tentang Kami</div><h5 class=\"section_header text-capitalize alt-font text-white margin-20px-bottom font-weight-500 sm-width-100 xs-width-100\">\r\n                    Introductory </h5><p class=\"text-white\">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam\r\n                    nonumy eirmod tempor\r\n                    invidunt ut laboret dolore magna aliquyam erat, sed diam voluptua laboret dolore magna aliquyam\r\n                    erat, sed.</p><h1>&nbsp;</h1>\r\n</blockquote>\r\n          ');
/*!40000 ALTER TABLE `deskripsi1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faq`
--

DROP TABLE IF EXISTS `faq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(1000) NOT NULL,
  `answer` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faq`
--

LOCK TABLES `faq` WRITE;
/*!40000 ALTER TABLE `faq` DISABLE KEYS */;
INSERT INTO `faq` VALUES (2,'Bisa untuk custom size box?','semua disini bisa di custom sesuai dengan batas minimal pemesanan');
/*!40000 ALTER TABLE `faq` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `heading`
--

DROP TABLE IF EXISTS `heading`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `heading` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `background` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `heading`
--

LOCK TABLES `heading` WRITE;
/*!40000 ALTER TABLE `heading` DISABLE KEYS */;
INSERT INTO `heading` VALUES (5,'backgorund1.jpg','BUILD YOUR CUSTOM BOX HERE','E - mailer box, Cake box, Shoe Box, Custom Box');
/*!40000 ALTER TABLE `heading` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `info`
--

DROP TABLE IF EXISTS `info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `hp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `copy_right` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `logo_browser` varchar(255) NOT NULL,
  `id_provinsi` int(11) DEFAULT NULL,
  `id_kota` int(11) DEFAULT NULL,
  `pesan_invoice` longtext,
  `pesan_vertifikasi` longtext,
  `no_rekening` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `info`
--

LOCK TABLES `info` WRITE;
/*!40000 ALTER TABLE `info` DISABLE KEYS */;
INSERT INTO `info` VALUES (1,'new_logo.png','#','#','#','PT TINACOKRO BOX Blok Semanan II No 39 Jl Semanan II RT 4 RW 10 Semanan Kalideres Kota Jakarta Barat Daerah Khusus Ibukota Jakarta 11850 0878-6900-0199 ','  0878 - 6900 - 0199','admin@tinacokrobox.com','Copyright © 2018 customboxid.com |   All Rights Reserved   | design by team design','Customboxid | PT Tina CokroBox','new_logo.png',6,151,'Silahkan melukan pembayaran melalui nomor rekening yang tertera di bawah ini','Terimakasih, pembayaran sudah di konfirmasi','Mandiri : 1031081863 A/N Handri');
/*!40000 ALTER TABLE `info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orderan`
--

DROP TABLE IF EXISTS `orderan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `orderan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_pemesanan` varchar(45) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hp` varchar(255) NOT NULL,
  `detail` longtext NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `provinsi` varchar(45) DEFAULT NULL,
  `kota` varchar(45) DEFAULT NULL,
  `product` varchar(45) DEFAULT NULL,
  `ukuran` varchar(45) DEFAULT NULL,
  `qty` varchar(45) DEFAULT NULL,
  `ongkir` varchar(45) DEFAULT NULL,
  `harga` varchar(45) DEFAULT NULL,
  `total_harga` varchar(45) DEFAULT NULL,
  `alamat_lengkap` longtext,
  `status` int(2) DEFAULT NULL,
  `bukti_transfer` varchar(255) DEFAULT NULL,
  `kurir` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `no_pemesanan_UNIQUE` (`no_pemesanan`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orderan`
--

LOCK TABLES `orderan` WRITE;
/*!40000 ALTER TABLE `orderan` DISABLE KEYS */;
INSERT INTO `orderan` VALUES (4,'5cf646726485a','Handri','handrisaeputra@gmail.com','081808784785','Begini Bgitu','04-Jun-19, 12:22 pm',NULL,NULL,'E- Mailer Box','10Cm X 20Cm X 30Cm','10','54000','50000','104000','Kedaung Baru',3,'rni.jpg','jne'),(7,'5cf866f5f1454','Bahrul Mubarok','bahrul.mubarok@gmail.com','0878821212121','Box nya yang itu','06-Jun-19, 3:05 am','3','pos','E- Mailer Box','10Cm X 20Cm X 30Cm','10','27000','50000','77000','Legok',1,'','pos');
/*!40000 ALTER TABLE `orderan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partners`
--

DROP TABLE IF EXISTS `partners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `partners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partners`
--

LOCK TABLES `partners` WRITE;
/*!40000 ALTER TABLE `partners` DISABLE KEYS */;
INSERT INTO `partners` VALUES (21,'ericsson.jpg','ericsson'),(22,'indosat.jpg','indosat'),(23,'rni.jpg','rni'),(24,'mandiri.jpg','mandiri');
/*!40000 ALTER TABLE `partners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pengunjung`
--

DROP TABLE IF EXISTS `pengunjung`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `pengunjung` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jumlah` varchar(255) NOT NULL,
  `ip` varchar(1000) NOT NULL,
  `month` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengunjung`
--

LOCK TABLES `pengunjung` WRITE;
/*!40000 ALTER TABLE `pengunjung` DISABLE KEYS */;
INSERT INTO `pengunjung` VALUES (1,'0','','May'),(2,'0','','June'),(3,'0','','July'),(4,'0','','August'),(5,'0','','September'),(6,'0','','October'),(7,'0','','November'),(8,'0','','December');
/*!40000 ALTER TABLE `pengunjung` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `price` varchar(255) NOT NULL,
  `gambar` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (7,'Slide Box','<p>            \r\n          Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam\r\n                    nonumy eirmod tempor\r\n                    invidunt ut laboret dolore magna aliquyam erat, sed diam voluptua laboret dolore magna aliquyam\r\n                    erat, sed.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam\r\n                    nonumy eirmod tempor\r\n                    invidunt ut laboret dolore magna aliquyam erat, sed diam voluptua laboret dolore magna aliquyam\r\n                    erat, sed.</p><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam\r\n                    nonumy eirmod tempor\r\n                    invidunt ut laboret dolore magna aliquyam erat, sed diam voluptua laboret dolore magna aliquyam\r\n                    erat, sed.<br></p>','','product1.jpeg'),(8,'E- Mailer Box','<p>            \r\n          Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam\r\n                    nonumy eirmod tempor\r\n                    invidunt ut laboret dolore magna aliquyam erat, sed diam voluptua laboret dolore magna aliquyam\r\n                    erat, sed.</p><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam\r\n                    nonumy eirmod tempor\r\n                    invidunt ut laboret dolore magna aliquyam erat, sed diam voluptua laboret dolore magna aliquyam\r\n                    erat, sed.</p><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam\r\n                    nonumy eirmod tempor\r\n                    invidunt ut laboret dolore magna aliquyam erat, sed diam voluptua laboret dolore magna aliquyam\r\n                    erat, sed.<br></p>','','product2.jpeg'),(9,'Shoe Box','<p>            \r\n          Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam\r\n                    nonumy eirmod tempor\r\n                    invidunt ut laboret dolore magna aliquyam erat, sed diam voluptua laboret dolore magna aliquyam\r\n                    erat, sed.</p><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam\r\n                    nonumy eirmod tempor\r\n                    invidunt ut laboret dolore magna aliquyam erat, sed diam voluptua laboret dolore magna aliquyam\r\n                    erat, sed.</p><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam\r\n                    nonumy eirmod tempor\r\n                    invidunt ut laboret dolore magna aliquyam erat, sed diam voluptua laboret dolore magna aliquyam\r\n                    erat, sed.<br></p>','','product3.jpeg'),(10,'Cake Box','<p>            \r\n          Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam\r\n                    nonumy eirmod tempor\r\n                    invidunt ut laboret dolore magna aliquyam erat, sed diam voluptua laboret dolore magna aliquyam\r\n                    erat, sed.<br>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam\r\n                    nonumy eirmod tempor\r\n                    invidunt ut laboret dolore magna aliquyam erat, sed diam voluptua laboret dolore magna aliquyam\r\n                    erat, sed.</p><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam\r\n                    nonumy eirmod tempor\r\n                    invidunt ut laboret dolore magna aliquyam erat, sed diam voluptua laboret dolore magna aliquyam\r\n                    erat, sed.<br></p>','','product4.jpeg'),(11,'Tuck Top Box','<p>            \r\n          Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam\r\n                    nonumy eirmod tempor\r\n                    invidunt ut laboret dolore magna aliquyam erat, sed diam voluptua laboret dolore magna aliquyam\r\n                    erat, sed.</p><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam\r\n                    nonumy eirmod tempor\r\n                    invidunt ut laboret dolore magna aliquyam erat, sed diam voluptua laboret dolore magna aliquyam\r\n                    erat, sed.</p><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam\r\n                    nonumy eirmod tempor\r\n                    invidunt ut laboret dolore magna aliquyam erat, sed diam voluptua laboret dolore magna aliquyam\r\n                    erat, sed.<br></p>','','product5.jpeg'),(12,'Top Bottom Box','<p>            \r\n          Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam\r\n                    nonumy eirmod tempor\r\n                    invidunt ut laboret dolore magna aliquyam erat, sed diam voluptua laboret dolore magna aliquyam\r\n                    erat, sed.</p><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam\r\n                    nonumy eirmod tempor\r\n                    invidunt ut laboret dolore magna aliquyam erat, sed diam voluptua laboret dolore magna aliquyam\r\n                    erat, sed.</p><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam\r\n                    nonumy eirmod tempor\r\n                    invidunt ut laboret dolore magna aliquyam erat, sed diam voluptua laboret dolore magna aliquyam\r\n                    erat, sed.<br></p>','','product7.jpeg'),(13,'Handle Box','<p>            \r\n          Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam\r\n                    nonumy eirmod tempor\r\n                    invidunt ut laboret dolore magna aliquyam erat, sed diam voluptua laboret dolore magna aliquyam\r\n                    erat, sed.</p><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam\r\n                    nonumy eirmod tempor\r\n                    invidunt ut laboret dolore magna aliquyam erat, sed diam voluptua laboret dolore magna aliquyam\r\n                    erat, sed.</p><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam\r\n                    nonumy eirmod tempor\r\n                    invidunt ut laboret dolore magna aliquyam erat, sed diam voluptua laboret dolore magna aliquyam\r\n                    erat, sed.<br></p>','','product8.jpeg');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_h`
--

DROP TABLE IF EXISTS `product_h`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `product_h` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_h`
--

LOCK TABLES `product_h` WRITE;
/*!40000 ALTER TABLE `product_h` DISABLE KEYS */;
INSERT INTO `product_h` VALUES (1,'Jenis - jenis Custom Box','                                                <p>Menyediakan berbagai mancam design box dan custom box indonesia<br></p>\r\n                                        ');
/*!40000 ALTER TABLE `product_h` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seo`
--

DROP TABLE IF EXISTS `seo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `seo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(1000) NOT NULL,
  `keywords` varchar(1000) NOT NULL,
  `author` varchar(1000) NOT NULL,
  `tag` varchar(1000) NOT NULL,
  `id_halaman` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seo`
--

LOCK TABLES `seo` WRITE;
/*!40000 ALTER TABLE `seo` DISABLE KEYS */;
INSERT INTO `seo` VALUES (1,'custom box indonesia','custom box indonesia','custom box indonesia','custom box indonesia','1');
/*!40000 ALTER TABLE `seo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `work`
--

DROP TABLE IF EXISTS `work`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `work` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `work`
--

LOCK TABLES `work` WRITE;
/*!40000 ALTER TABLE `work` DISABLE KEYS */;
INSERT INTO `work` VALUES (1,'fa-bar-chart','Kualitas Bagus','            <p>Lorem ipsum dolor sit amet, adipisicing elit. Impedit consequuntur expedita</p>\r\n          '),(2,'fa-diamond','Ready Stock','            <p>Lorem ipsum dolor sit amet, adipisicing elit. Impedit consequuntur expedita</p>\r\n          '),(3,'fa-pie-chart','Harga Bagus','            <p>Lorem ipsum dolor sit amet, adipisicing elit. Impedit consequuntur expedita</p>\r\n          ');
/*!40000 ALTER TABLE `work` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `work_h`
--

DROP TABLE IF EXISTS `work_h`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `work_h` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `work_h`
--

LOCK TABLES `work_h` WRITE;
/*!40000 ALTER TABLE `work_h` DISABLE KEYS */;
INSERT INTO `work_h` VALUES (1,'Kenapa Memilih Kami','            <p>.</p>\r\n          ');
/*!40000 ALTER TABLE `work_h` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'customboxid'
--

--
-- Dumping routines for database 'customboxid'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-14 11:29:18
