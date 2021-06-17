-- MySQL dump 10.13  Distrib 5.6.45, for Linux (x86_64)
--
-- Host: localhost    Database: technical_test
-- ------------------------------------------------------
-- Server version	5.6.45

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
-- Table structure for table `bank`
--

DROP TABLE IF EXISTS `bank`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bank` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` varchar(50) DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bank`
--

LOCK TABLES `bank` WRITE;
/*!40000 ALTER TABLE `bank` DISABLE KEYS */;
INSERT INTO `bank` VALUES (1,'Bank Central Asia',1,'2021-01-12 04:56:45','2021-02-08 09:15:29','Super Admin','Admin Unit Kerja'),(2,'Bank Mandiri',1,'2021-01-20 06:21:22','2021-01-20 06:21:33','Super Admin','Super Admin'),(10,'Bank Negara Indonesia',1,'2021-03-12 03:26:45','2021-03-12 03:26:45','YUSRON HAMIDI',NULL),(11,'Bank Republik Indonesia',1,'2021-03-12 04:22:18','2021-03-12 04:22:36','YUSRON HAMIDI','YUSRON HAMIDI'),(13,'Bank Jabar',1,'2021-03-23 03:34:57','2021-03-23 03:34:57','YON GURETNO',NULL),(14,'Permata',1,'2021-04-28 13:39:32','2021-04-28 13:39:32','Super Admin',NULL),(15,'BTPN',1,'2021-04-28 14:21:14','2021-04-28 14:21:14','Super Admin',NULL),(16,'CIMB Niaga Syariah',1,'2021-04-29 03:52:42','2021-04-29 03:52:42','Super Admin',NULL);
/*!40000 ALTER TABLE `bank` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `candidate`
--

DROP TABLE IF EXISTS `candidate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `candidate` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(300) DEFAULT NULL,
  `gender` char(3) DEFAULT NULL,
  `city_of_birth` varchar(150) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `religion_id` int(11) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `identity_number` varchar(150) DEFAULT NULL,
  `identity_file` varchar(150) DEFAULT NULL,
  `bank_id` int(11) DEFAULT NULL,
  `bank_account` varchar(150) DEFAULT NULL,
  `bank_name` varchar(300) DEFAULT NULL,
  `address` text,
  `education_id` int(11) DEFAULT NULL,
  `university_id` int(11) DEFAULT NULL,
  `university_other` varchar(300) DEFAULT NULL,
  `major` text,
  `graduation_year` varchar(12) DEFAULT NULL,
  `in_college` tinyint(4) DEFAULT NULL,
  `semester` varchar(30) DEFAULT NULL,
  `skill` text,
  `file_cv` varchar(150) DEFAULT NULL,
  `file_photo` varchar(150) DEFAULT NULL,
  `file_portfolio` varchar(150) DEFAULT NULL,
  `source_information_id` int(11) DEFAULT NULL,
  `source_information_other` text,
  `ranking` int(11) DEFAULT NULL,
  `assessment_score` int(11) DEFAULT NULL,
  `mail_sent` tinyint(4) DEFAULT NULL,
  `instagram` varchar(300) DEFAULT NULL,
  `twitter` varchar(300) DEFAULT NULL,
  `linkedin` varchar(300) DEFAULT NULL,
  `facebook` varchar(300) DEFAULT NULL,
  `candidate_status_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` varchar(150) DEFAULT NULL,
  `updated_by` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `candidate`
--

LOCK TABLES `candidate` WRITE;
/*!40000 ALTER TABLE `candidate` DISABLE KEYS */;
/*!40000 ALTER TABLE `candidate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `candidate_organization`
--

DROP TABLE IF EXISTS `candidate_organization`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `candidate_organization` (
  `id` int(11) DEFAULT NULL,
  `candidate_id` int(11) DEFAULT NULL,
  `org_name` varchar(300) DEFAULT NULL,
  `year` varchar(12) DEFAULT NULL,
  `position` varchar(300) DEFAULT NULL,
  `description` text,
  `file` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` varchar(150) DEFAULT NULL,
  `updated_by` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `candidate_organization`
--

LOCK TABLES `candidate_organization` WRITE;
/*!40000 ALTER TABLE `candidate_organization` DISABLE KEYS */;
/*!40000 ALTER TABLE `candidate_organization` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `candidate_status`
--

DROP TABLE IF EXISTS `candidate_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `candidate_status` (
  `id` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `code` text,
  `active` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` varchar(50) DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `candidate_status`
--

LOCK TABLES `candidate_status` WRITE;
/*!40000 ALTER TABLE `candidate_status` DISABLE KEYS */;
INSERT INTO `candidate_status` VALUES (1,'Review JLI','<label class=\"badge badge-gradient-warning\">Review JLI</label>',1,'2021-01-20 03:25:48','2021-01-20 03:25:48',NULL,NULL),(2,'Tidak Lolos (Oleh JLI)','<label class=\"badge badge-gradient-danger\">Tidak Lolos (JLI)</label>',1,'2021-01-20 03:25:59','2021-01-20 03:25:59',NULL,NULL),(3,'Review Unit Kerja','<label class=\"badge badge-gradient-info\">Review Unit Kerja</label>',1,'2021-01-20 03:26:29','2021-01-20 03:26:29',NULL,NULL),(4,'Lolos (Oleh Unit Kerja)','<label class=\"badge badge-gradient-success\"> Lolos (Unit)</label>',1,'2021-01-20 03:26:44','2021-01-20 03:26:44',NULL,NULL),(5,'Tidak Lolos (Oleh Unit Kerja)','<label class=\"badge badge-gradient-danger\"> Tidak Lolos (Unit)</label>',1,'2021-01-20 03:26:51','2021-01-20 03:26:51',NULL,NULL);
/*!40000 ALTER TABLE `candidate_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `education`
--

DROP TABLE IF EXISTS `education`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `education` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` varchar(50) DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `education`
--

LOCK TABLES `education` WRITE;
/*!40000 ALTER TABLE `education` DISABLE KEYS */;
INSERT INTO `education` VALUES (1,'SMA',1,'2021-01-12 04:35:34','2021-01-12 04:40:51','Super Admin','Super Admin'),(2,'S1',1,'2021-01-20 06:28:18','2021-02-08 07:33:38','Super Admin','Super Admin'),(6,'S2',1,'2021-02-08 07:33:56','2021-02-08 07:33:56','Super Admin',NULL),(12,'S3',1,'2021-03-12 04:19:00','2021-03-12 08:55:04','YUSRON HAMIDI','YON GURETNO'),(14,'D3',1,'2021-03-23 03:32:18','2021-03-23 03:32:18','YON GURETNO',NULL),(15,'D4',0,'2021-03-23 03:32:38','2021-04-09 09:52:05','YON GURETNO','YON GURETNO');
/*!40000 ALTER TABLE `education` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `religion`
--

DROP TABLE IF EXISTS `religion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `religion` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` varchar(50) DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `religion`
--

LOCK TABLES `religion` WRITE;
/*!40000 ALTER TABLE `religion` DISABLE KEYS */;
INSERT INTO `religion` VALUES (1,'Islam',1,'2021-01-11 06:42:08','2021-01-11 06:42:08','db',NULL),(2,'Budha',1,'2021-01-11 07:11:37','2021-01-11 07:16:31','Super Admin','Super Admin'),(3,'Protestan',1,'2021-03-02 07:09:22','2021-03-02 07:09:22','dira',NULL),(4,'Katolik',1,'2021-03-02 07:09:27','2021-03-02 07:09:27','dira',NULL),(5,'Hindu',1,'2021-03-02 07:09:44','2021-03-02 07:09:44','dira',NULL);
/*!40000 ALTER TABLE `religion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `source_information`
--

DROP TABLE IF EXISTS `source_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `source_information` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` varchar(50) DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `source_information`
--

LOCK TABLES `source_information` WRITE;
/*!40000 ALTER TABLE `source_information` DISABLE KEYS */;
INSERT INTO `source_information` VALUES (1,'Internet',1,'2021-02-24 01:58:35','2021-02-24 01:58:35',NULL,NULL),(2,'Instagram',1,'2021-02-24 01:58:38','2021-02-24 01:58:38',NULL,NULL),(3,'Twitter',1,'2021-02-24 01:58:41','2021-02-24 01:58:41',NULL,NULL),(4,'Kampus',1,'2021-02-24 01:58:44','2021-02-24 01:58:44',NULL,NULL),(5,'Facebook',1,'2021-02-24 01:59:02','2021-02-24 01:59:02',NULL,NULL),(6,'Lain-lain',1,'2021-02-24 01:59:05','2021-02-24 01:59:05',NULL,NULL);
/*!40000 ALTER TABLE `source_information` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `university`
--

DROP TABLE IF EXISTS `university`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `university` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `recommendation_university_id` int(11) DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` varchar(50) DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `university`
--

LOCK TABLES `university` WRITE;
/*!40000 ALTER TABLE `university` DISABLE KEYS */;
INSERT INTO `university` VALUES (1,'Universitas Singaperbangsa Karawang',NULL,1,1,'2021-01-12 04:46:56','2021-01-20 06:33:56','Super Admin','Super Admin'),(2,'Institut Teknologi Bandung',NULL,1,1,'2021-01-20 06:35:05','2021-01-20 06:35:16','Super Admin','Super Admin'),(3,'Universitas Trisakti',NULL,NULL,1,'2021-02-08 07:37:01','2021-02-08 07:37:14','Super Admin','Super Admin'),(5,'Universitas Jakarta',NULL,NULL,1,'2021-02-15 02:10:19','2021-03-12 04:21:09','YUSRON HAMIDI','YUSRON HAMIDI'),(10,'Universitas Telkom',NULL,NULL,1,'2021-03-12 04:19:54','2021-03-12 04:19:54','YUSRON HAMIDI',NULL),(11,'Universitas Malang',NULL,NULL,0,'2021-03-12 08:55:18','2021-03-12 08:55:23','YON GURETNO','YON GURETNO'),(12,'Universitas Negeri Jakarta',NULL,NULL,0,'2021-03-23 03:32:54','2021-03-23 03:33:20','YUSRON HAMIDI','YUSRON HAMIDI'),(13,'Universitas Padjajaran',NULL,NULL,1,'2021-03-23 03:33:06','2021-03-23 03:33:06','YON GURETNO',NULL),(15,'Institut Kesehatan Deli Husada Deli Tua',NULL,NULL,1,'2021-04-12 04:18:15','2021-04-12 04:18:15',NULL,NULL),(16,'Institut Pertanian Bogor',NULL,NULL,1,'2021-04-12 04:18:42','2021-04-12 04:18:42',NULL,NULL),(17,'Institut Teknologi Nasional Bandung',NULL,NULL,1,'2021-04-12 04:19:04','2021-04-12 04:19:04',NULL,NULL),(18,'Institut Teknologi Sepuluh Nopember',NULL,NULL,1,'2021-04-12 04:19:41','2021-04-12 04:19:41',NULL,NULL),(19,'Politeknik Negeri Jakarta',NULL,NULL,1,'2021-04-12 04:20:00','2021-04-12 04:20:00',NULL,NULL),(20,'Politeknik Negeri Media Kreatif',NULL,NULL,1,'2021-04-12 04:20:13','2021-04-12 04:20:13',NULL,NULL),(21,'Sekolah Tinggi Ilmu Ekonomi Indonesia',NULL,NULL,1,'2021-04-12 04:20:32','2021-04-12 04:20:32',NULL,NULL),(22,'Sekolah Tinggi Teknik PLN',NULL,NULL,1,'2021-04-12 04:20:47','2021-04-12 04:20:47',NULL,NULL),(23,'Sekolah Tinggi Teknologi Bandung',NULL,NULL,1,'2021-04-12 04:21:03','2021-04-12 04:21:03',NULL,NULL),(24,'STMIK Nusa Mandiri',NULL,NULL,1,'2021-04-12 04:21:14','2021-04-12 04:21:14',NULL,NULL),(25,'Universitas Bakrie',NULL,NULL,1,'2021-04-12 04:21:34','2021-04-12 04:21:34',NULL,NULL),(26,'Universitas Bina Nusantara',NULL,NULL,1,'2021-04-12 04:22:02','2021-04-12 04:22:02',NULL,NULL),(27,'Universitas Brawijaya',NULL,NULL,1,'2021-04-12 04:22:15','2021-04-12 04:22:15',NULL,NULL),(28,'Universitas Esa Unggul',NULL,NULL,1,'2021-04-12 04:23:41','2021-04-12 04:23:41',NULL,NULL),(29,'Universitas Fajar',NULL,NULL,1,'2021-04-12 04:23:52','2021-04-12 04:23:52',NULL,NULL),(30,'Universitas Islam Indonesia',NULL,NULL,1,'2021-04-12 04:24:05','2021-04-12 04:24:05',NULL,NULL),(31,'Universitas Islam Negeri Sunan Gunung Jati Bandung',NULL,NULL,1,'2021-04-12 04:24:29','2021-04-12 04:24:29',NULL,NULL),(32,'Universitas Mercu Buana',NULL,NULL,1,'2021-04-12 04:24:54','2021-04-12 04:24:54',NULL,NULL),(33,'Universitas Muhammadiyah Jakarta',NULL,NULL,1,'2021-04-12 04:25:14','2021-04-12 04:25:14',NULL,NULL),(34,'Universitas Nasional Jakarta',NULL,NULL,1,'2021-04-12 04:25:28','2021-04-12 04:25:28',NULL,NULL),(35,'Universitas Pancasila',NULL,NULL,1,'2021-04-12 04:25:49','2021-04-12 04:25:49',NULL,NULL),(36,'Universitas Pembangunan Jaya',NULL,NULL,1,'2021-04-12 04:26:03','2021-04-12 04:26:03',NULL,NULL),(37,'Universitas Presiden',NULL,NULL,1,'2021-04-12 04:26:14','2021-04-12 04:26:14',NULL,NULL),(38,'Universitas Sultan Ageng Tirtayasa',NULL,NULL,1,'2021-04-12 04:27:23','2021-04-12 04:27:23',NULL,NULL),(39,'Universitas Widyagama Malang',NULL,NULL,1,'2021-04-12 04:27:47','2021-04-12 04:27:47',NULL,NULL),(40,'UPN Veteran Jakarta',NULL,NULL,1,'2021-04-12 04:28:00','2021-04-12 04:28:00',NULL,NULL);
/*!40000 ALTER TABLE `university` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-11 14:55:53
