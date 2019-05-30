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
-- Table structure for table `app_screenshoot`
--

DROP TABLE IF EXISTS `app_screenshoot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `app_screenshoot` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `app_screenshoot`
--

LOCK TABLES `app_screenshoot` WRITE;
/*!40000 ALTER TABLE `app_screenshoot` DISABLE KEYS */;
INSERT INTO `app_screenshoot` VALUES (1,'Screenshot_2018-08-20_PT_Data_Binary_Sulution.jpg','active'),(2,'Screenshot_2018-08-20_Handri.png',''),(3,'Screenshot_2018-08-20_SimpleAdmin_-_Responsive_Admin_Dashboard_Template.png','');
/*!40000 ALTER TABLE `app_screenshoot` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `keywords` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `author` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `isi` varchar(10000) NOT NULL,
  `jumlah_komentar` varchar(255) NOT NULL,
  `catagori` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES (5,'02-May-18, 4:32 am','Avent 1','Avent 2','Avent 2','infranetsystem.com','cppppp.JPG','            <p><br></p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent \r\nsollicitudin, ex et posuere varius, purus lectus ultricies augue, nec \r\ndapibus felis tortor a turpis. Nulla turpis ex, tincidunt vel vehicula \r\neu, volutpat id dolor. Nulla in lorem eu quam maximus mattis at et \r\nlorem. Duis interdum nisl enim, vel scelerisque nisl molestie sed. \r\nPellentesque semper felis non justo cursus, ac laoreet ex mattis. Mauris\r\n nulla leo, pellentesque a semper non, blandit consequat lectus. Mauris \r\nnec scelerisque sapien. Donec tristique risus sapien, a dictum orci \r\naliquam et. Sed vitae arcu eget nibh mattis cursus at lobortis purus. \r\nVestibulum non rutrum neque, sit amet consequat purus. Quisque turpis \r\nnulla, tincidunt dictum massa a, feugiat interdum nisi.</p><p><br></p><p><br><img style=\"width: 640px;\" src=\"data:image/jpeg;base64,/9j/4AAQSkZJRgABAgAAZABkAAD/7AARRHVja3kAAQAEAAAAPAAA/+EDLWh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8APD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS41LWMwMTQgNzkuMTUxNDgxLCAyMDEzLzAzLzEzLTEyOjA5OjE1ICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDozRkNFMzU3RDg2QUYxMUU1OEM4OENCQkI2QTc0MTkwRSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDozRkNFMzU3Qzg2QUYxMUU1OEM4OENCQkI2QTc0MTkwRSIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChNYWNpbnRvc2gpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MDEwNzlDODNCQThDMTFFMjg5NTlFMDAzODgzMjZDMkIiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MDEwNzlDODRCQThDMTFFMjg5NTlFMDAzODgzMjZDMkIiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoL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mhNky5fTkBYwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA','0','Event Agustus'),(6,'20-Aug-18, 11:36 am','Event2','Event2','Event2','infranetsystem.com','aplikasi_disabilitas.JPG','<p>              \r\n            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent \r\nsollicitudin, ex et posuere varius, purus lectus ultricies augue, nec \r\ndapibus felis tortor a turpis. Nulla turpis ex, tincidunt vel vehicula \r\neu, volutpat id dolor. Nulla in lorem eu quam maximus mattis at et \r\nlorem. Duis interdum nisl enim, vel scelerisque nisl molestie sed. \r\nPellentesque semper felis non justo cursus, ac laoreet ex mattis. Mauris\r\n nulla leo, pellentesque a semper non, blandit consequat lectus. Mauris \r\nnec scelerisque sapien. Donec tristique risus sapien, a dictum orci \r\naliquam et. Sed vitae arcu </p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent \r\nsollicitudin, ex et posuere varius, purus lectus ultricies augue, nec \r\ndapibus felis tortor a turpis. Nulla turpis ex, tincidunt vel vehicula \r\neu, volutpat id dolor. Nulla in lorem eu quam maximus mattis at et \r\nlorem. Duis interdum nisl enim, vel scelerisque nisl molestie sed. \r\nPellentesque semper felis non justo cursus, ac laoreet ex mattis. Mauris\r\n nulla leo, pellentesque a semper non, blandit consequat lectus. Mauris \r\nnec scelerisque sapien. Donec tristique risus sapien, a dictum orci \r\naliquam et. Sed vitae arcu <br></p>','0','Event Agustus'),(7,'20-Aug-18, 11:40 am','Event 3','Event 3','Event 3','infranetsystem.com','home.PNG','<p>              \r\n            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent \r\nsollicitudin, ex et posuere varius, purus lectus ultricies augue, nec \r\ndapibus felis tortor a turpis. Nulla turpis ex, tincidunt vel vehicula \r\neu, volutpat id dolor. Nulla in lorem eu quam maximus mattis at et \r\nlorem. Duis interdum nisl enim, vel scelerisque nisl molestie sed. \r\nPellentesque semper felis non justo cursus, ac laoreet ex mattis. Mauris\r\n nulla leo, pellentesque a semper non, </p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent \r\nsollicitudin, ex et posuere varius, purus lectus ultricies augue, nec \r\ndapibus felis tortor a turpis. Nulla turpis ex, tincidunt vel vehicula \r\neu, volutpat id dolor. Nulla in lorem eu quam maximus mattis at et \r\nlorem. Duis interdum nisl enim, vel scelerisque nisl molestie sed. \r\nPellentesque semper felis non justo cursus, ac laoreet ex mattis. Mauris\r\n nulla leo, pellentesque a semper non, </p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent \r\nsollicitudin, ex et posuere varius, purus lectus ultricies augue, nec \r\ndapibus felis tortor a turpis. Nulla turpis ex, tincidunt vel vehicula \r\neu, volutpat id dolor. Nulla in lorem eu quam maximus mattis at et \r\nlorem. Duis interdum nisl enim, vel scelerisque nisl molestie sed. \r\nPellentesque semper felis non justo cursus, ac laoreet ex mattis. Mauris\r\n nulla leo, pellentesque a semper non, <br></p>','0','Event Agustus');
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_prod`
--

DROP TABLE IF EXISTS `cat_prod`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `cat_prod` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_prod`
--

LOCK TABLES `cat_prod` WRITE;
/*!40000 ALTER TABLE `cat_prod` DISABLE KEYS */;
INSERT INTO `cat_prod` VALUES (1,'Compro Basic'),(2,'Compro Advance'),(3,'Website');
/*!40000 ALTER TABLE `cat_prod` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `catagori`
--

DROP TABLE IF EXISTS `catagori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `catagori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catagori` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catagori`
--

LOCK TABLES `catagori` WRITE;
/*!40000 ALTER TABLE `catagori` DISABLE KEYS */;
INSERT INTO `catagori` VALUES (5,'Event Agustus');
/*!40000 ALTER TABLE `catagori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `deksripsi2`
--

DROP TABLE IF EXISTS `deksripsi2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `deksripsi2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `deksripsi2`
--

LOCK TABLES `deksripsi2` WRITE;
/*!40000 ALTER TABLE `deksripsi2` DISABLE KEYS */;
INSERT INTO `deksripsi2` VALUES (1,'weblistdekstop.png','Kami Ahli dan Berpengalaman Pembuatan Dalam Website','<p>Dalam pembuatan aplikasi website profesional, percayakanlah kepada kami.</p>\r\n\r\n<p>kami mempunyai beberapa refrensi design untuk menarik perhatian pengunjung untu betah dan pengunjung ingin kembali melihat website anda</p>\r\n');
/*!40000 ALTER TABLE `deksripsi2` ENABLE KEYS */;
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
-- Table structure for table `download`
--

DROP TABLE IF EXISTS `download`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `download` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `download`
--

LOCK TABLES `download` WRITE;
/*!40000 ALTER TABLE `download` DISABLE KEYS */;
INSERT INTO `download` VALUES (1,'Android','https://google.com'),(2,'IOS','tps://google.com');
/*!40000 ALTER TABLE `download` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `heading`
--

LOCK TABLES `heading` WRITE;
/*!40000 ALTER TABLE `heading` DISABLE KEYS */;
INSERT INTO `heading` VALUES (1,'backgorund.jpg','START YOUR MOBILE APPS NOW ','<p>Company, Restourant, Hotel, Online Shop, Travel agent , Etc.....</p>\r\n');
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `info`
--

LOCK TABLES `info` WRITE;
/*!40000 ALTER TABLE `info` DISABLE KEYS */;
INSERT INTO `info` VALUES (1,'new_logo.png','#','#','#','PT TINACOKRO BOX Blok Semanan II No 39 Jl Semanan II RT 4 RW 10 Semanan Kalideres Kota Jakarta Barat Daerah Khusus Ibukota Jakarta 11850 0878-6900-0199 ','  0878 - 6900 - 0199','admin@tinacokrobox.com','Copyright © 2018 customboxid.com |   All Rights Reserved   | design by team design','Customboxid | PT. Tina CokroBox','new_logo.png');
/*!40000 ALTER TABLE `info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mockup`
--

DROP TABLE IF EXISTS `mockup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `mockup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(1000) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mockup`
--

LOCK TABLES `mockup` WRITE;
/*!40000 ALTER TABLE `mockup` DISABLE KEYS */;
INSERT INTO `mockup` VALUES (1,'iphone.png','RAGAM FITUR UNTUK MENGEMBANGKAN BISNIS ANDA','<p>Fitur kami&nbsp;menjadi salah satu solusi bisnis terbaik Anda untuk memperluas pasar Anda dan meningkatkan penjualan Anda.</p>\r\n');
/*!40000 ALTER TABLE `mockup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mockup_des`
--

DROP TABLE IF EXISTS `mockup_des`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `mockup_des` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `icon` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mockup_des`
--

LOCK TABLES `mockup_des` WRITE;
/*!40000 ALTER TABLE `mockup_des` DISABLE KEYS */;
INSERT INTO `mockup_des` VALUES (1,'date_range','EVENTS','<p>Let your customers know your events so they can join and make your events merrier and brighter.</p>\r\n'),(2,'notifications','PUSH NOTIFICATION','<p>You can inform your marketing programs, events, and activities direct to your customers. It&#39;s faster and easier, yet more effective and efficient. It&#39;s a powerful tool to retain your customers.</p>\r\n'),(3,'collections','GALLERIES','Let your customers know more about your company by seeing your real activities through photos.'),(4,'art_track','NEWS & ARTICLES','You can write news about your events and activities or just share some good articles to keep in touch with your customers.'),(5,'shopping_cart','SHOPPING CART','Your customer can shop anywhere, anytime. They just need to click the products or services they want, pay it, and it will be delivered to them. It is very convenient and saves a lot of time.'),(6,'payment','PAYMENT GATEWAY','It makes your business go faster, without any limitation. Your customers can buy your products or services right away. 24 hours a day, 7 days a week.');
/*!40000 ALTER TABLE `mockup_des` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orderan`
--

DROP TABLE IF EXISTS `orderan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `orderan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hp` varchar(255) NOT NULL,
  `orderan` varchar(255) NOT NULL,
  `detail` longtext NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `member` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orderan`
--

LOCK TABLES `orderan` WRITE;
/*!40000 ALTER TABLE `orderan` DISABLE KEYS */;
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
-- Table structure for table `pesan`
--

DROP TABLE IF EXISTS `pesan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `pesan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hp` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `pesan` varchar(10000) NOT NULL,
  `waktu` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pesan`
--

LOCK TABLES `pesan` WRITE;
/*!40000 ALTER TABLE `pesan` DISABLE KEYS */;
INSERT INTO `pesan` VALUES (1,'','','','','','21-Jul-18, 8:48 pm'),(2,'Randy','Randy@TalkWithLead.com','416-385-3200','TalkWithLead.com','Hi,\r\n\r\nMy name is Randy and I was looking at a few different sites online and came across your site starcompro.com.  I must say - your website is very impressive.  I found your website on the first page of the Search Engine. \r\n\r\nHave you noticed that 70 percent of visitors who leave your website will never return?  In most cases, this means that 95 percent to 98 percent of your marketing efforts are going to waste, not to mention that you are losing more money in customer acquisition costs than you need to.\r\n \r\nAs a business person, the time and money you put into your marketing efforts is extremely valuable.  So why let it go to waste?  Our users have seen staggering improvements in conversions with insane growths of 150 percent going upwards of 785 percent. Are you ready to unlock the highest conversion revenue from each of your website visitors?  \r\n\r\nTalkWithLead is a widget which captures a website visitor’s Name, Email address and Phone Number and then calls you immediately, so that you can talk to the Lead exactly when they are live on your website — while they\'re hot!\r\n  \r\nTry the TalkWithLead Live Demo now to see exactly how it works.  Visit: https://www.talkwithlead.com/Contents/LiveDemo.aspx\r\n\r\nWhen targeting leads, speed is essential - there is a 100x decrease in Leads when a Lead is contacted within 30 minutes vs being contacted within 5 minutes.\r\n\r\nIf you would like to talk to me about this service, please give me a call.  We do offer a 14 days free trial.  \r\n\r\nThanks and Best Regards,\r\nRandy','21-Jul-18, 8:50 pm'),(3,'GrantEpity','mariio_81@op.pl','https://0daymusic.org ','google','Hello, \r\nDownload Mp3 Scene Music Private FTP \r\nDance/House/Techno/Trance/Electro \r\n \r\nhttps://0daymusic.org \r\n \r\nPrivate FTP MP3/FLAC 1990-2018: \r\n \r\nPlan A: 20€ – 200GB – 30 Days \r\nPlan B: 45€ – 600GB – 90 Days \r\nPlan C: 80€ – 1500GB – 180 Days \r\n \r\nUpdated: 2018-07-03 FTP list txt \r\n \r\nBest regards, \r\nMark','09-Aug-18, 7:14 pm');
/*!40000 ALTER TABLE `pesan` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
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
INSERT INTO `product_h` VALUES (1,'Jenis - jenis Custom Box','            <p>Menyediakan berbagai mancam design box dan custom box indonesia<br></p>\r\n          ');
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

-- Dump completed on 2019-05-30 22:33:31
