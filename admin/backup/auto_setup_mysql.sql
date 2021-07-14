/* CFREATING DATABASE AND USING IT */
CREATE DATABASE gcw_db;
 USE gcw_db;

-- MySQL dump 10.13  Distrib 5.7.20, for Linux (i686)
--
-- Host: localhost    Database: gcw_db
-- ------------------------------------------------------
-- Server version	5.7.20

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
-- Table structure for table `Htmldata`
--

DROP TABLE IF EXISTS `Htmldata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Htmldata` (
  `name` varchar(20) NOT NULL,
  `txt` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Htmldata`
--

LOCK TABLES `Htmldata` WRITE;
/*!40000 ALTER TABLE `Htmldata` DISABLE KEYS */;
INSERT INTO `Htmldata` VALUES ('abtUs','Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quis totam libero aliquam minus amet excepturi deleniti asperiores! Deserunt blanditiis repellendus, sit repudiandae vero quo et voluptatibus aperiam soluta explicabo'),('etc','Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quis totam libero aliquam minus amet excepturi deleniti asperiores! Deserunt blanditiis repellendus, sit repudiandae vero quo et voluptatibus aperiam soluta explicabo.'),('found','Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quis totam libero aliquam minus amet excepturi deleniti asperiores! Deserunt blanditiis repellendus, sit repudiandae vero quo et voluptatibus aperiam soluta explicabo.'),('hist','Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quis totam libero aliquam minus amet excepturi deleniti asperiores! Deserunt blanditiis repellendus, sit repudiandae vero quo et voluptatibus aperiam soluta explicabo.'),('invInfo','Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quis totam libero aliquam minus amet excepturi deleniti asperiores! Deserunt blanditiis repellendus, sit repudiandae vero quo et voluptatibus aperiam soluta explicabo.'),('product1','Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quis totam libero aliquam minus amet excepturi deleniti asperiores! Deserunt blanditiis repellendus, sit repudiandae vero quo et voluptatibus aperiam soluta explicabo.'),('product2','Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quis totam libero aliquam minus amet excepturi deleniti asperiores! Deserunt blanditiis repellendus, sit repudiandae vero quo et voluptatibus aperiam soluta explicabo.'),('product3','Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quis totam libero aliquam minus amet excepturi deleniti asperiores! Deserunt blanditiis repellendus, sit repudiandae vero quo et voluptatibus aperiam soluta explicabo.');
/*!40000 ALTER TABLE `Htmldata` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `activeUser`
--

DROP TABLE IF EXISTS `activeUser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activeUser` (
  `session` varchar(30) NOT NULL,
  `time` time DEFAULT NULL,
  `ipaddr` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`session`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activeUser`
--

LOCK TABLES `activeUser` WRITE;
/*!40000 ALTER TABLE `activeUser` DISABLE KEYS */;
INSERT INTO `activeUser` VALUES ('bggeqcpibcs68qn25uorj1bl25','12:05:43','192.168.1.6'),('l72o6tbec0v4igti710ncvnoi1','14:26:34','192.168.1.6'),('lh5hlgj1f5kkr5itvgdd9m6687','11:55:30','192.168.1.3'),('nj469gtsr2d7255u0qfmh40bi5','13:37:06','192.168.1.7'),('q0r5qnv429rqu2nfr71c2k9506','13:09:58','192.168.1.2');
/*!40000 ALTER TABLE `activeUser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contactUsInfo`
--

DROP TABLE IF EXISTS `contactUsInfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contactUsInfo` (
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `message` varchar(1000) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactUsInfo`
--

LOCK TABLES `contactUsInfo` WRITE;
/*!40000 ALTER TABLE `contactUsInfo` DISABLE KEYS */;
INSERT INTO `contactUsInfo` VALUES ('Muthu','muthu@muhtu.com','dfegruqo giturh gjtrehgw tugh kgjrestg reg');
/*!40000 ALTER TABLE `contactUsInfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobApplications`
--

DROP TABLE IF EXISTS `jobApplications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobApplications` (
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Email_Address` varchar(50) NOT NULL,
  `Portfolio` varchar(30) NOT NULL,
  `Position` varchar(30) NOT NULL,
  `Salary` int(10) NOT NULL,
  `StartDate` varchar(30) NOT NULL,
  `Phone` bigint(255) NOT NULL,
  `Fax` varchar(15) NOT NULL,
  `Relocate` varchar(30) NOT NULL,
  `Organization` varchar(40) NOT NULL,
  `Reference` varchar(100) NOT NULL,
  PRIMARY KEY (`Email_Address`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobApplications`
--

LOCK TABLES `jobApplications` WRITE;
/*!40000 ALTER TABLE `jobApplications` DISABLE KEYS */;
INSERT INTO `jobApplications` VALUES ('Muthu','Palaniyappan Ol','muthu@muhtu.com','google.com','CEO',32176,'chennai',37421837,'3294827','Yes','XYZ','Muthu Palaniyappan OL'),('Test1','Test','test1@test1.com','http://','General Manager',21312,'chennai',32414148,'2342987','Yes','Testy','test\r\n'),('Test1','Test','test2@test2.com','http://','General Manager',21312,'chennai',32414148,'2342987','Yes','Testy','test\r\n'),('Test1','Test','test4@test4.com','http://','General Manager',21312,'chennai',32414148,'2342987','Yes','Testy','test\r\n'),('Test1','Test','test5@test5.com','http://','General Manager',21312,'chennai',32414148,'2342987','Yes','Testy','test\r\n'),('Test1','Test','test7@test7.com','http://','General Manager',21312,'chennai',32414148,'2342987','Yes','Testy','test\r\n'),('Test','Test','test@test.com','http://','General Manager',21312,'chennai',32414148,'2342987','Yes','Testy','test\r\n');
/*!40000 ALTER TABLE `jobApplications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobs` (
  `title` varchar(50) NOT NULL,
  `discription` varchar(1000) NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
INSERT INTO `jobs` VALUES ('General Manager','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula commodo lorem, ut tempus orci blandit ut. Proin est turpis.',1),('CEO','in egestas erat imperdiet sed euismod nisi porta lorem mollis aliquam ut porttitor leo a diam sollicitudin tempor id eu',2),('CFO','in egestas erat imperdiet sed euismod nisi porta lorem mollis aliquam ut porttitor leo a diam sollicitudin tempor id eu',3);
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `meta` varchar(25) NOT NULL,
  `text` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media`
--

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
INSERT INTO `media` VALUES (1,'Title 1','2020 11 50','Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quis totam libero aliquam minus amet excepturi deleniti asperiores! Deserunt blanditiis repellendus, sit repudiandae vero quo et '),(2,'Title 2','2020 11 51','Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quis totam libero aliquam minus amet excepturi deleniti asperiores! Deserunt blanditiis repellendus, sit repudiandae vero quo et '),(3,'Title 3','2020 11 52','Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quis totam libero aliquam minus amet excepturi deleniti asperiores! Deserunt blanditiis repellendus, sit repudiandae vero quo et ');
/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newsletter_subscribers`
--

DROP TABLE IF EXISTS `newsletter_subscribers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `newsletter_subscribers` (
  `email` varchar(40) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newsletter_subscribers`
--

LOCK TABLES `newsletter_subscribers` WRITE;
/*!40000 ALTER TABLE `newsletter_subscribers` DISABLE KEYS */;
INSERT INTO `newsletter_subscribers` VALUES ('helloworld@helloworld.com'),('mouse@mouse.com'),('muthu@domain.com'),('muthu@gmail.com'),('muthu@muthu.com'),('pencil@pencil.com'),('peppermint@peppermint.com'),('test1@gmail.com'),('test2@gmail.com'),('test3@gmail.com'),('test@gmail.com');
/*!40000 ALTER TABLE `newsletter_subscribers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `visitor_count`
--

DROP TABLE IF EXISTS `visitor_count`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `visitor_count` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `page` varchar(15) NOT NULL,
  `visit_count` int(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visitor_count`
--

LOCK TABLES `visitor_count` WRITE;
/*!40000 ALTER TABLE `visitor_count` DISABLE KEYS */;
INSERT INTO `visitor_count` VALUES (1,'landingpage',6,'2021-07-13'),(2,'aboutUs',0,'2021-07-13'),(3,'careers',0,'2021-07-13'),(4,'contactUs',0,'2021-07-13'),(5,'investor',0,'2021-07-13'),(6,'media',0,'2021-07-13'),(7,'products',0,'2021-07-13'),(8,'landingpage',3,'2021-07-14'),(9,'aboutUs',0,'2021-07-14'),(10,'careers',0,'2021-07-14'),(11,'contactUs',0,'2021-07-14'),(12,'investor',0,'2021-07-14'),(13,'media',0,'2021-07-14'),(14,'products',0,'2021-07-14');
/*!40000 ALTER TABLE `visitor_count` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-07-14 20:03:37
