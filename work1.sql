-- MySQL dump 10.13  Distrib 5.5.34, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: work
-- ------------------------------------------------------
-- Server version	5.5.34-0ubuntu0.12.04.1-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `work`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `work` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `work`;

--
-- Table structure for table `remind`
--

DROP TABLE IF EXISTS `remind`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `remind` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) DEFAULT NULL,
  `hash` varchar(255) DEFAULT NULL,
  `date` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `remind`
--

LOCK TABLES `remind` WRITE;
/*!40000 ALTER TABLE `remind` DISABLE KEYS */;
INSERT INTO `remind` VALUES (11,'e55qwd','r1eewfwe324e421rg32fd',1385980450);
/*!40000 ALTER TABLE `remind` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `rights` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (11,'dimkamonster','dimkamonster@mail.ru','dfe594c6a05e98ae218ff6ea8aa5d593','2013-11-09 14:42:10',1),(12,'mamba','mabb@mmm.ru','53cfda5b68ef126fdf67135869f2e864','2013-11-14 05:25:42',0),(13,'azy','qwe@mail.ru','30bf48b3fa40e471bfb1c1e90401e2be','2013-11-14 07:04:45',0),(14,'quaz','quaz@quaz.ee','6a786c6c4a5de00abb6d5ff7543d9e84','2013-11-19 02:10:51',0),(15,'zzz','zzz@zzz.ww','e67a605231a1ddba12b0f54c94b04c18','2013-11-19 02:11:12',0),(16,'qqq','qqq@qwe.ru','16863d0afa57a0ebf5b3bd7279fa1d96','2013-11-19 11:14:54',0),(17,'qqqq','ewqwe@qweqwe.ru','54cd8112ab67dadee4b26dc55fd18ce3','2013-11-19 11:15:30',0),(18,'qqqq333','ewqwe@qwe3qwe.ru','74c7cee9f14b6133d16f970beb15e61a','2013-11-19 11:15:55',0),(19,'321231','123@ru','4a77a5c6367b1177d8cdbb91af026cdb','2013-11-19 11:16:06',0),(20,'qweqwe','1223@ru','0a17afbc9846d9c965b0f36088a6473b','2013-11-19 11:25:41',0),(21,'qweqwe1','12231@ru','e4ed679c164c93d8eac8bbf4f5678c86','2013-11-19 11:25:49',0),(22,'qqqqqqq','qqq12231@ru','ed32a0a58760734d05a3d6eab491369c','2013-11-19 11:26:17',0),(23,'qqqqqqq1','1qqq12231@ru','19bdfae5fb0cc486130c1a5a3b134225','2013-11-19 11:26:24',0),(24,'aaaaqqqqqqq1','qa1qqq12231@ru','ecb34aa0ac4117aed500daa8a5a9671a','2013-11-19 11:26:33',0),(25,'aacccqqqqqq1','ddqa1qqq12231@ru','b5f3dbde185044b47b0c3efcaa3033bf','2013-11-19 11:26:44',0),(26,'vcaacccqqqqqq1','ddwdqa1qqq12231@ru','fdcc7421e27797e49c406bd90b342ab3','2013-11-19 11:27:06',0),(27,'xxxxx','xxx231@ru','6de330a56b11ffe5beeba3852c1f3433','2013-11-19 11:27:18',0),(28,'xxx22xx','x32xx231@ru','c7d3956e2e00b6699ef61bb6cbf6554e','2013-11-19 11:27:25',0),(29,'xdddxx22xx','dxâ32xx231@ru','62e892aa8497d0bb301b71b8e81e4577','2013-11-19 11:27:32',0),(30,'xddd44xx22xx','dxâ4432xx231@ru','49f898aa888dc5cb78b881319bf9cc11','2013-11-19 11:30:29',0),(31,'fvgt','erge1@ru','a6bbb30a5e505fc4ceb32569b3a09fac','2013-11-19 11:30:55',0),(32,'fvgteee','ewqrge1@ru','f53e90839aef04572c59d17b3c4687a2','2013-11-19 11:31:10',0),(33,'dasd','asd@aaew.dd','e147e2c3372c550e05be5e73af96291c','2013-11-26 07:20:37',0),(34,'qqwewqqw','_dmm@mail.ru','c33171e1e1d6767848ed7a131d1d5b73','2013-11-26 07:21:38',0),(35,'qweqweqweqwe','_qwe@mail.ru','f6bd12f7eac47671f9220cee47d24047','2013-12-05 02:42:02',0),(36,'aaaazz','azz@qzz.ru','44287a580060232d00bc09d0cd5ab788','2013-12-05 02:45:02',0),(37,'eeeee','ee@de.rr','b17cf2e0f1f40df3498b6641e6a2a19e','2013-12-05 02:48:02',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-12-05  7:42:55
