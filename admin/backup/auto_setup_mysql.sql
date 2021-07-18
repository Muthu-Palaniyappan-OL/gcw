/* CREATING DATABASE AND USING IT */
CREATE DATABASE gcw_db;

/* Using gcw_db */
USE gcw_db;

--
-- Table structure for table `Htmldata`
--

DROP TABLE IF EXISTS `Htmldata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Htmldata` (
  `name` varchar(20) NOT NULL,
  `txt` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ;


--
-- Dumping data for table `Htmldata`
--


LOCK TABLES `Htmldata` WRITE;
/*!40000 ALTER TABLE `Htmldata` DISABLE KEYS */;
INSERT INTO `Htmldata` VALUES ('abtUs','Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quis totam libero aliquam minus amet excepturi deleniti asperiores! Deserunt blanditiis repellendus, sit repudiandae vero quo et voluptatibus aperiam soluta explicabo.&nbsp;'),('hist','Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quis totam libero aliquam minus amet excepturi deleniti asperiores! Deserunt blanditiis repellendus, sit repudiandae vero quo et voluptatibus aperiam soluta explicabo.&nbsp;'),('invInfo','Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quis totam libero aliquam minus amet excepturi deleniti asperiores! Deserunt blanditiis repellendus, sit repudiandae vero quo et voluptatibus aperiam soluta explicabo.&nbsp;'),('product1','Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quis totam libero aliquam minus amet excepturi deleniti asperiores! Deserunt blanditiis repellendus, sit repudiandae vero quo et voluptatibus aperiam soluta explicabo.&nbsp;'),('product2','Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quis totam libero aliquam minus amet excepturi deleniti asperiores! Deserunt blanditiis repellendus, sit repudiandae vero quo et voluptatibus aperiam soluta explicabo.&nbsp;'),('product3','Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quis totam libero aliquam minus amet excepturi deleniti asperiores! Deserunt blanditiis repellendus, sit repudiandae vero quo et voluptatibus aperiam soluta explicabo.&nbsp;');
/*!40000 ALTER TABLE `Htmldata` ENABLE KEYS */;
UNLOCK TABLES;


--
-- Table structure for table `activeUser`
--


DROP TABLE IF EXISTS `activeUser`;
CREATE TABLE `activeUser` (
  `session` varchar(30) NOT NULL,
  `time` time DEFAULT NULL,
  `ipaddr` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`session`)
) ;


--
-- Dumping data for table `activeUser`
--


LOCK TABLES `activeUser` WRITE;
UNLOCK TABLES;

--
-- Table structure for table `contactUsInfo`
--

DROP TABLE IF EXISTS `contactUsInfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contactUsInfo` (
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `message` varchar(1000) NOT NULL,
  PRIMARY KEY (`email`)
) ;


--
-- Dumping data for table `contactUsInfo`
--

LOCK TABLES `contactUsInfo` WRITE;
INSERT INTO `contactUsInfo` VALUES ('Muthu','MUTHU@MUTHU.COM','Test Message');
UNLOCK TABLES;

--
-- Table structure for table `jobApplications`
--

DROP TABLE IF EXISTS `jobApplications`;
CREATE TABLE `jobApplications` (
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Email_Address` varchar(50) NOT NULL,
  `Portfolio` varchar(30) NOT NULL,
  `Position` varchar(30) NOT NULL,
  `Salary` int NOT NULL,
  `StartDate` varchar(30) NOT NULL,
  `Phone` bigint NOT NULL,
  `Fax` varchar(15) NOT NULL,
  `Relocate` varchar(30) NOT NULL,
  `Organization` varchar(40) NOT NULL,
  `Reference` varchar(100) NOT NULL,
  PRIMARY KEY (`Email_Address`)
) ;


--
-- Dumping data for table `jobApplications`
--

LOCK TABLES `jobApplications` WRITE;
INSERT INTO `jobApplications` VALUES ('Muhtujfn','jhkjhk','jundfj@jchbs.com','http://','Test Job',732468927,'87987',897987,'87987','Yes','87sjrifghsjkh','hjkhgfbvjkhg');
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs` (
  `title` varchar(50) NOT NULL,
  `discription` varchar(1000) NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ;


--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
INSERT INTO `jobs` VALUES ('CEO','congue mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas maecenas pharetra convallis posuere morbi leo urna',7),('CFO','congue mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas maecenas pharetra convallis posuere morbi leo urna',8),('Manager','congue mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas maecenas pharetra convallis posuere morbi leo urna',9);
UNLOCK TABLES;

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
CREATE TABLE `media` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `meta` varchar(25) NOT NULL,
  `text` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ;


--
-- Dumping data for table `media`
--

LOCK TABLES `media` WRITE;
INSERT INTO `media` VALUES (15,'Announcement 1','07.14.21 10:32 pm','congue mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas maecenas pharetra convallis posuere morbi leo urna'),(16,'Announcement 2','07.14.21 10:32 pm','congue mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas maecenas pharetra convallis posuere morbi leo urna'),(17,'Announcement 3','07.14.21 10:33 pm','congue mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas maecenas pharetra convallis posuere morbi leo urna');
UNLOCK TABLES;

--
-- Table structure for table `newsletter_subscribers`
--

DROP TABLE IF EXISTS `newsletter_subscribers`;
CREATE TABLE `newsletter_subscribers` (
  `email` varchar(20) NOT NULL,
  PRIMARY KEY (`email`)
) ;


--
-- Dumping data for table `newsletter_subscribers`
--

LOCK TABLES `newsletter_subscribers` WRITE;
INSERT INTO `newsletter_subscribers` VALUES ('ABC@gmail.com'),('ggg@ggg.com'),('google@gmail.com'),('he34lo@gmail.com'),('hello@gmail.com'),('hey@hey.com'),('hi@gmail.com'),('hjdf@gmail.com'),('jhdsavj@hgdjsj.com'),('mut892542@gamil.com'),('muthu@muthu.com'),('muthu@muthu1.com'),('muthu@muthuhello.com'),('pencil@pencil.com'),('pendrive@pencil.com'),('test@example.com'),('test@muthu.com'),('test1@muthu.com'),('testtest@test.com'),('xyz@xyz.com');
UNLOCK TABLES;

--
-- Table structure for table `visitor_count`
--

DROP TABLE IF EXISTS `visitor_count`;
CREATE TABLE `visitor_count` (
  `id` int NOT NULL AUTO_INCREMENT,
  `page` varchar(15) NOT NULL,
  `visit_count` int NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ;


--
-- Dumping data for table `visitor_count`
--

LOCK TABLES `visitor_count` WRITE;
INSERT INTO `visitor_count` VALUES (9,'landingpage',4,'2021-04-27'),(10,'aboutUs',0,'2021-04-27'),(11,'careers',0,'2021-04-27'),(12,'contactUs',0,'2021-04-27'),(13,'investor',0,'2021-04-27'),(14,'media',0,'2021-04-27'),(15,'products',0,'2021-04-27'),(16,'landingpage',2,'2021-05-28'),(17,'aboutUs',0,'2021-05-28'),(18,'careers',0,'2021-05-28'),(19,'contactUs',0,'2021-05-28'),(20,'investor',0,'2021-05-28'),(21,'media',0,'2021-05-28'),(22,'products',0,'2021-05-28'),(23,'landingpage',7,'2021-06-29'),(24,'aboutUs',0,'2021-06-29'),(25,'careers',0,'2021-06-29'),(26,'contactUs',0,'2021-06-29'),(27,'investor',0,'2021-06-29'),(28,'media',0,'2021-06-29'),(29,'products',0,'2021-06-29'),(30,'landingpage',77,'2021-06-30'),(31,'aboutUs',0,'2021-06-30'),(32,'careers',0,'2021-06-30'),(33,'contactUs',0,'2021-06-30'),(34,'investor',0,'2021-06-30'),(35,'media',0,'2021-06-30'),(36,'products',0,'2021-06-30'),(37,'landingpage',61,'2021-07-01'),(38,'aboutUs',0,'2021-07-01'),(39,'careers',0,'2021-07-01'),(40,'contactUs',0,'2021-07-01'),(41,'investor',0,'2021-07-01'),(42,'media',0,'2021-07-01'),(43,'products',0,'2021-07-01'),(44,'landingpage',7,'2021-07-02'),(45,'aboutUs',0,'2021-07-02'),(46,'careers',0,'2021-07-02'),(47,'contactUs',0,'2021-07-02'),(48,'investor',0,'2021-07-02'),(49,'media',0,'2021-07-02'),(50,'products',0,'2021-07-02'),(51,'landingpage',33,'2021-07-03'),(52,'aboutUs',0,'2021-07-03'),(53,'careers',0,'2021-07-03'),(54,'contactUs',0,'2021-07-03'),(55,'investor',0,'2021-07-03'),(56,'media',0,'2021-07-03'),(57,'products',0,'2021-07-03'),(58,'landingpage',144,'2021-07-04'),(59,'aboutUs',12,'2021-07-04'),(60,'careers',0,'2021-07-04'),(61,'contactUs',0,'2021-07-04'),(62,'investor',27,'2021-07-04'),(63,'media',0,'2021-07-04'),(64,'products',0,'2021-07-04'),(65,'landingpage',0,'2021-07-05'),(66,'aboutUs',0,'2021-07-05'),(67,'careers',0,'2021-07-05'),(68,'contactUs',0,'2021-07-05'),(69,'investor',0,'2021-07-05'),(70,'media',0,'2021-07-05'),(71,'products',0,'2021-07-05'),(72,'landingpage',2,'2021-07-06'),(73,'aboutUs',0,'2021-07-06'),(74,'careers',0,'2021-07-06'),(75,'contactUs',0,'2021-07-06'),(76,'investor',0,'2021-07-06'),(77,'media',0,'2021-07-06'),(78,'products',0,'2021-07-06'),(79,'landingpage',1,'2021-07-07'),(80,'aboutUs',0,'2021-07-07'),(81,'careers',0,'2021-07-07'),(82,'contactUs',0,'2021-07-07'),(83,'investor',0,'2021-07-07'),(84,'media',0,'2021-07-07'),(85,'products',0,'2021-07-07'),(86,'landingpage',1,'2021-07-08'),(87,'aboutUs',0,'2021-07-08'),(88,'careers',0,'2021-07-08'),(89,'contactUs',0,'2021-07-08'),(90,'investor',0,'2021-07-08'),(91,'media',0,'2021-07-08'),(92,'products',0,'2021-07-08'),(93,'landingpage',4,'2021-07-11'),(94,'aboutUs',1,'2021-07-11'),(95,'careers',0,'2021-07-11'),(96,'contactUs',0,'2021-07-11'),(97,'investor',0,'2021-07-11'),(98,'media',1,'2021-07-11'),(99,'products',0,'2021-07-11'),(100,'landingpage',2,'2021-07-14'),(101,'aboutUs',0,'2021-07-14'),(102,'careers',0,'2021-07-14'),(103,'contactUs',0,'2021-07-14'),(104,'investor',0,'2021-07-14'),(105,'media',0,'2021-07-14'),(106,'products',0,'2021-07-14');
UNLOCK TABLES;