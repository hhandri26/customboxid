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
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-05-30 22:28:36
