CREATE DATABASE  IF NOT EXISTS `fraldas` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `fraldas`;
-- MySQL dump 10.13  Distrib 5.5.37, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: fraldas
-- ------------------------------------------------------
-- Server version	5.5.37-0ubuntu0.12.04.1

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
-- Table structure for table `gift`
--

DROP TABLE IF EXISTS `gift`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gift` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gift`
--

LOCK TABLES `gift` WRITE;
/*!40000 ALTER TABLE `gift` DISABLE KEYS */;
INSERT INTO `gift` VALUES (1,'1 pct. fraldas Pampers ou Turma da Mônica M'),(2,'1 pct. fraldas Pampers ou Turma da Mônica G'),(3,'1 pct. fraldas Pampers ou Turma da Mônica P'),(4,'1 pct. fraldas Pampers ou Turma da Mônica P'),(5,'1 pct. fraldas Pampers ou Turma da Mônica P'),(6,'1 pct. fraldas Pampers ou Turma da Mônica P'),(7,'1 pct. fraldas Pampers ou Turma da Mônica P'),(8,'1 pct. fraldas Pampers ou Turma da Mônica P'),(9,'1 pct. fraldas Pampers ou Turma da Mônica P'),(10,'1 pct. fraldas Pampers ou Turma da Mônica P'),(11,'1 pct. fraldas Pampers ou Turma da Mônica P'),(12,'1 pct. fraldas Pampers ou Turma da Mônica P'),(13,'1 pct. fraldas Pampers ou Turma da Mônica M'),(14,'1 pct. fraldas Pampers ou Turma da Mônica M'),(15,'1 pct. fraldas Pampers ou Turma da Mônica M'),(16,'1 pct. fraldas Pampers ou Turma da Mônica M'),(17,'1 pct. fraldas Pampers ou Turma da Mônica M'),(18,'1 pct. fraldas Pampers ou Turma da Mônica M'),(19,'1 pct. fraldas Pampers ou Turma da Mônica M'),(20,'1 pct. fraldas Pampers ou Turma da Mônica M'),(21,'1 pct. fraldas Pampers ou Turma da Mônica M'),(22,'1 pct. fraldas Pampers ou Turma da Mônica M'),(23,'1 pct. fraldas Pampers ou Turma da Mônica M'),(24,'1 pct. fraldas Pampers ou Turma da Mônica M'),(25,'1 pct. fraldas Pampers ou Turma da Mônica M'),(26,'1 pct. fraldas Pampers ou Turma da Mônica M'),(27,'1 pct. fraldas Pampers ou Turma da Mônica M'),(28,'1 pct. fraldas Pampers ou Turma da Mônica M'),(29,'1 pct. fraldas Pampers ou Turma da Mônica M'),(30,'1 pct. fraldas Pampers ou Turma da Mônica M'),(31,'1 pct. fraldas Pampers ou Turma da Mônica M'),(32,'1 pct. fraldas Pampers ou Turma da Mônica M'),(33,'1 pct. fraldas Pampers ou Turma da Mônica M'),(34,'1 pct. fraldas Pampers ou Turma da Mônica M'),(35,'1 pct. fraldas Pampers ou Turma da Mônica M'),(36,'1 pct. fraldas Pampers ou Turma da Mônica M'),(37,'1 pct. fraldas Pampers ou Turma da Mônica M'),(38,'1 pct. fraldas Pampers ou Turma da Mônica G'),(39,'1 pct. fraldas Pampers ou Turma da Mônica G'),(40,'1 pct. fraldas Pampers ou Turma da Mônica G'),(41,'1 pct. fraldas Pampers ou Turma da Mônica G'),(42,'1 pct. fraldas Pampers ou Turma da Mônica G'),(43,'1 pct. fraldas Pampers ou Turma da Mônica G'),(44,'1 pct. fraldas Pampers ou Turma da Mônica G'),(45,'1 pct. fraldas Pampers ou Turma da Mônica G'),(46,'1 pct. fraldas Pampers ou Turma da Mônica G'),(47,'1 pct. fraldas Pampers ou Turma da Mônica G'),(48,'1 pct. fraldas Pampers ou Turma da Mônica G'),(49,'1 pct. fraldas Pampers ou Turma da Mônica G'),(50,'1 pct. fraldas Pampers ou Turma da Mônica G'),(51,'1 pct. fraldas Pampers ou Turma da Mônica G'),(52,'1 pct. fraldas Pampers ou Turma da Mônica G');
/*!40000 ALTER TABLE `gift` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `giver`
--

DROP TABLE IF EXISTS `giver`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `giver` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `gift_id` int(11) DEFAULT '0',
  `gift_other` varchar(50) DEFAULT NULL,
  `comment` varchar(20) DEFAULT NULL,
  `paid` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `phone` (`phone`,`gift_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `giver`
--

LOCK TABLES `giver` WRITE;
/*!40000 ALTER TABLE `giver` DISABLE KEYS */;
INSERT INTO `giver` VALUES (4,'anderson pereira','6282185252','anderson.agrotec@hotmail.com',13,'','',0),(5,'Daiane Nogueira','7196114947','daiane.an@gmail.com',14,'','UNIJORGE',0),(6,'Daniel Luis','87781012','dan.luis.vf@gmail.com',3,'','UCSAL',0),(7,'Danilo Vieira','7491237721','danilo.vieiranjos@outlook.com',25,'','UNIJORGE',0),(8,'Gabriela Oliveira Cardoso','91071908','gabriela.cardoso516@gmail.com',5,'','UCSAL',0),(9,'Igor Bomfim de Souza','7591230956','igorbomfimdesouza@hotmail.com',6,'','UCSAL',0),(10,'Jamile','7191836244','estrela22jamile@hotmail.com',15,'','UCSAL',0),(11,'Karolyne','7192595845','kah_vasconcelos_@hotmail.com',16,'','UCSAL',0),(12,'lais guerra Cerqueira','7391314938','laiguerrac@gmail.com',17,'','UCSAL',0),(13,'Lucas Aragao de Morais','99577204','lucas.aragaodemorais@gmail.com',18,'','UCSAL',0),(14,'Mariana dos Anjos','81724587','marig_anjos@hotmail.com',19,'','UCSAL',0),(15,'mauricio','91624544','martins.mauricio@gmail.com',20,'','IMTECH',0),(16,'Mirela Bohana','7196252090','mirela.bohana@gmail.com',21,'','UCSAL',0),(17,'Oskar','91905294','oskar.oliveira@bol.com.br',7,'','UCSAL',0),(18,'Priscila Cardoso','7193368548','pri-cardozo@hotmail.com',22,'','UCSAL',0),(19,'Raiana Karla Sento Se Mendonca','07791021103','raiana-love@hotmail.com',38,'','UCSAL',0),(20,'Ramon sampaio','07193000767','ramon_10ba@hotmail.com',23,'','UCSAL',0),(21,'Rodrigo Costa','07192063883','',8,'','UNIJORGE',0),(22,'tie kawabe maia','91468599','tiekmaia@gmail.com',24,'','IMTECH',0),(23,'vera lins','7191857010','veramslins@hotmail.com',39,'','UCSAL',0),(24,'Welber','91279746','welbermsilveira@hotmail.com',9,'','IMTECH',0),(25,'kelly duarte','07581777104','kellyduarte91@hotmail.com',0,'Roupa','UCSAL',0),(26,'yuri barros barbo','92563020','yuh114@hotmail.com',10,'','UCSAL',0);
/*!40000 ALTER TABLE `giver` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-05-30 15:02:04
