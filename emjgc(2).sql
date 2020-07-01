-- MySQL dump 10.16  Distrib 10.1.33-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: emjgc
-- ------------------------------------------------------
-- Server version	10.1.33-MariaDB

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
-- Table structure for table `ALJIMI_collection`
--

DROP TABLE IF EXISTS `ALJIMI_collection`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ALJIMI_collection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime(6) NOT NULL,
  `amount` float(11,4) NOT NULL,
  `ref_doc` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ALJIMI_collection`
--

LOCK TABLES `ALJIMI_collection` WRITE;
/*!40000 ALTER TABLE `ALJIMI_collection` DISABLE KEYS */;
/*!40000 ALTER TABLE `ALJIMI_collection` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ALJIMI_expences`
--

DROP TABLE IF EXISTS `ALJIMI_expences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ALJIMI_expences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pc_id` int(11) NOT NULL,
  `project_code` varchar(70) NOT NULL,
  `proj_id` int(11) NOT NULL,
  `details` varchar(255) NOT NULL,
  `unit_cost` float(11,4) NOT NULL,
  `total_amount` float(11,4) NOT NULL,
  `createdby_id` int(4) NOT NULL,
  `date_created` datetime(6) NOT NULL,
  `edited_by_id` int(4) NOT NULL,
  `date_edited` datetime(6) NOT NULL,
  `qty` float(11,4) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `tin` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ALJIMI_expences`
--

LOCK TABLES `ALJIMI_expences` WRITE;
/*!40000 ALTER TABLE `ALJIMI_expences` DISABLE KEYS */;
/*!40000 ALTER TABLE `ALJIMI_expences` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ALJIMI_man_power`
--

DROP TABLE IF EXISTS `ALJIMI_man_power`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ALJIMI_man_power` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `amount` float(11,4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ALJIMI_man_power`
--

LOCK TABLES `ALJIMI_man_power` WRITE;
/*!40000 ALTER TABLE `ALJIMI_man_power` DISABLE KEYS */;
/*!40000 ALTER TABLE `ALJIMI_man_power` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ALJIMI_phase`
--

DROP TABLE IF EXISTS `ALJIMI_phase`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ALJIMI_phase` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phase_code` varchar(20) NOT NULL,
  `phase_description` varchar(20) NOT NULL,
  `budget_cost` float(11,3) NOT NULL,
  `remaining_budget` float(11,3) NOT NULL,
  `created_by_id` int(4) NOT NULL,
  `date_created` datetime(6) NOT NULL,
  `date_edited` datetime(6) NOT NULL,
  `edited_by_id` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ALJIMI_phase`
--

LOCK TABLES `ALJIMI_phase` WRITE;
/*!40000 ALTER TABLE `ALJIMI_phase` DISABLE KEYS */;
INSERT INTO `ALJIMI_phase` VALUES (1,'0100','LABOR',560000.000,560000.000,1,'2019-05-30 00:00:00.000000','0000-00-00 00:00:00.000000',0),(2,'0200','MATERIALS',1500000.000,1500000.000,1,'2019-05-30 00:00:00.000000','0000-00-00 00:00:00.000000',0);
/*!40000 ALTER TABLE `ALJIMI_phase` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `DOOSAN_collection`
--

DROP TABLE IF EXISTS `DOOSAN_collection`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `DOOSAN_collection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime(6) NOT NULL,
  `amount` float(11,4) NOT NULL,
  `ref_doc` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `DOOSAN_collection`
--

LOCK TABLES `DOOSAN_collection` WRITE;
/*!40000 ALTER TABLE `DOOSAN_collection` DISABLE KEYS */;
INSERT INTO `DOOSAN_collection` VALUES (1,'2019-03-15 00:00:00.000000',300000.0000,'32196632516');
/*!40000 ALTER TABLE `DOOSAN_collection` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `DOOSAN_expences`
--

DROP TABLE IF EXISTS `DOOSAN_expences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `DOOSAN_expences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pc_id` int(11) NOT NULL,
  `project_code` varchar(70) NOT NULL,
  `proj_id` int(11) NOT NULL,
  `details` varchar(255) NOT NULL,
  `unit_cost` float(11,4) NOT NULL,
  `total_amount` float(11,4) NOT NULL,
  `createdby_id` int(4) NOT NULL,
  `date_created` datetime(6) NOT NULL,
  `edited_by_id` int(4) NOT NULL,
  `date_edited` datetime(6) NOT NULL,
  `qty` float(11,4) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `tin` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `DOOSAN_expences`
--

LOCK TABLES `DOOSAN_expences` WRITE;
/*!40000 ALTER TABLE `DOOSAN_expences` DISABLE KEYS */;
INSERT INTO `DOOSAN_expences` VALUES (2,1,'DOOSAN',0,'ASD',25621.0000,3177004.0000,1,'2019-03-15 00:00:00.000000',1,'2019-03-15 00:00:00.000000',124.0000,'ASDASD','ASDASD','ASDASD'),(3,1,'DOOSAN',0,'ASDAS',252.0000,252.0000,1,'2019-03-15 00:00:00.000000',1,'2019-03-15 00:00:00.000000',1.0000,'ASDASDASD','ASDASDASDASD','ASDASDASD'),(4,1,'DOOSAN',0,'test',3000.0000,300000.0000,1,'2019-05-13 00:00:00.000000',0,'0000-00-00 00:00:00.000000',100.0000,'test','test','test');
/*!40000 ALTER TABLE `DOOSAN_expences` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `DOOSAN_man_power`
--

DROP TABLE IF EXISTS `DOOSAN_man_power`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `DOOSAN_man_power` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `amount` float(11,4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `DOOSAN_man_power`
--

LOCK TABLES `DOOSAN_man_power` WRITE;
/*!40000 ALTER TABLE `DOOSAN_man_power` DISABLE KEYS */;
/*!40000 ALTER TABLE `DOOSAN_man_power` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `DOOSAN_phase`
--

DROP TABLE IF EXISTS `DOOSAN_phase`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `DOOSAN_phase` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phase_code` varchar(20) NOT NULL,
  `phase_description` varchar(20) NOT NULL,
  `budget_cost` float(11,3) NOT NULL,
  `remaining_budget` float(11,3) NOT NULL,
  `created_by_id` int(4) NOT NULL,
  `date_created` datetime(6) NOT NULL,
  `date_edited` datetime(6) NOT NULL,
  `edited_by_id` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `DOOSAN_phase`
--

LOCK TABLES `DOOSAN_phase` WRITE;
/*!40000 ALTER TABLE `DOOSAN_phase` DISABLE KEYS */;
INSERT INTO `DOOSAN_phase` VALUES (1,'109317','MAIN PROJECT',30000000.000,-2002256.000,1,'2019-03-15 00:00:00.000000','0000-00-00 00:00:00.000000',0);
/*!40000 ALTER TABLE `DOOSAN_phase` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `EMJGC_collection`
--

DROP TABLE IF EXISTS `EMJGC_collection`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `EMJGC_collection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime(6) NOT NULL,
  `amount` float(11,4) NOT NULL,
  `ref_doc` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `EMJGC_collection`
--

LOCK TABLES `EMJGC_collection` WRITE;
/*!40000 ALTER TABLE `EMJGC_collection` DISABLE KEYS */;
INSERT INTO `EMJGC_collection` VALUES (1,'2018-10-06 00:00:00.000000',340000.0000,'DOC. NO: 1276816582');
/*!40000 ALTER TABLE `EMJGC_collection` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `EMJGC_expences`
--

DROP TABLE IF EXISTS `EMJGC_expences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `EMJGC_expences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pc_id` int(11) NOT NULL,
  `project_code` varchar(70) NOT NULL,
  `proj_id` int(11) NOT NULL,
  `details` varchar(255) NOT NULL,
  `unit_cost` float(11,4) NOT NULL,
  `total_amount` float(11,4) NOT NULL,
  `createdby_id` int(4) NOT NULL,
  `date_created` datetime(6) NOT NULL,
  `edited_by_id` int(4) NOT NULL,
  `date_edited` datetime(6) NOT NULL,
  `qty` float(11,4) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `tin` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `EMJGC_expences`
--

LOCK TABLES `EMJGC_expences` WRITE;
/*!40000 ALTER TABLE `EMJGC_expences` DISABLE KEYS */;
INSERT INTO `EMJGC_expences` VALUES (22,4,'EMJGC',0,'XLS 1',3.0000,300.0000,1,'2018-08-09 00:00:00.000000',0,'0000-00-00 00:00:00.000000',100.0000,'MOLDEX','987-654-321','XLS TEST 2'),(23,4,'EMJGC',0,'XLS 1',4.0000,400.0000,1,'2018-08-08 00:00:00.000000',0,'0000-00-00 00:00:00.000000',100.0000,'MOLDEX','987-654-321','XLS TEST 2'),(24,4,'EMJGC',0,'XLS 1',5.0000,500.0000,1,'2018-08-07 00:00:00.000000',0,'0000-00-00 00:00:00.000000',100.0000,'MOLDEX','987-654-321','XLS TEST 2'),(25,4,'EMJGC',0,'XLS 1',6.0000,600.0000,1,'2018-08-06 00:00:00.000000',0,'0000-00-00 00:00:00.000000',100.0000,'MOLDEX','987-654-321','XLS TEST 2'),(26,4,'EMJGC',0,'XLS 1',7.0000,700.0000,1,'2018-08-05 00:00:00.000000',0,'0000-00-00 00:00:00.000000',100.0000,'MOLDEX','987-654-321','XLS TEST 2'),(27,4,'EMJGC',0,'XLS 1',8.0000,800.0000,1,'2018-08-04 00:00:00.000000',0,'0000-00-00 00:00:00.000000',100.0000,'MOLDEX','987-654-321','XLS TEST 2'),(28,4,'EMJGC',0,'XLS 1',9.0000,900.0000,1,'2018-08-03 00:00:00.000000',0,'0000-00-00 00:00:00.000000',100.0000,'MOLDEX','987-654-321','XLS TEST 2'),(29,4,'EMJGC',0,'XLS 1',10.0000,1000.0000,1,'2018-08-02 00:00:00.000000',0,'0000-00-00 00:00:00.000000',100.0000,'MOLDEX','987-654-321','XLS TEST 2'),(30,4,'EMJGC',0,'XLS 1',11.0000,1100.0000,1,'2018-08-01 00:00:00.000000',0,'0000-00-00 00:00:00.000000',100.0000,'MOLDEX','987-654-321','XLS TEST 2'),(31,4,'EMJGC',0,'XLS 1',12.0000,1200.0000,1,'2018-08-01 00:00:00.000000',0,'0000-00-00 00:00:00.000000',100.0000,'MOLDEX','987-654-321','XLS TEST 2'),(32,4,'EMJGC',0,'XLS 1',13.0000,1300.0000,1,'2018-08-01 00:00:00.000000',0,'0000-00-00 00:00:00.000000',100.0000,'MOLDEX','987-654-321','XLS TEST 2'),(33,4,'EMJGC',0,'XLS 1',14.0000,1400.0000,1,'2018-08-01 00:00:00.000000',0,'0000-00-00 00:00:00.000000',100.0000,'MOLDEX','987-654-321','XLS TEST 2'),(34,4,'EMJGC',0,'XLS 1',15.0000,1500.0000,1,'2018-08-01 00:00:00.000000',0,'0000-00-00 00:00:00.000000',100.0000,'MOLDEX','987-654-321','XLS TEST 2'),(35,4,'EMJGC',0,'XLS 1',16.0000,1600.0000,1,'2018-08-01 00:00:00.000000',0,'0000-00-00 00:00:00.000000',100.0000,'MOLDEX','987-654-321','XLS TEST 2'),(36,4,'EMJGC',0,'XLS 1',17.0000,1700.0000,1,'2018-08-01 00:00:00.000000',0,'0000-00-00 00:00:00.000000',100.0000,'MOLDEX','987-654-321','XLS TEST 2'),(37,4,'EMJGC',0,'XLS 1',18.0000,1800.0000,1,'2018-08-01 00:00:00.000000',0,'0000-00-00 00:00:00.000000',100.0000,'MOLDEX','987-654-321','XLS TEST 2'),(38,4,'EMJGC',0,'XLS 1',19.0000,1900.0000,1,'2018-08-01 00:00:00.000000',0,'0000-00-00 00:00:00.000000',100.0000,'MOLDEX','987-654-321','XLS TEST 2'),(39,4,'EMJGC',0,'XLS 1',20.0000,2000.0000,1,'2018-08-01 00:00:00.000000',0,'0000-00-00 00:00:00.000000',100.0000,'MOLDEX','987-654-321','XLS TEST 2'),(40,4,'EMJGC',0,'XLS 1',21.0000,2100.0000,1,'2018-08-01 00:00:00.000000',0,'0000-00-00 00:00:00.000000',100.0000,'MOLDEX','987-654-321','XLS TEST 2'),(41,4,'EMJGC',0,'XLS 1',22.0000,2200.0000,1,'2018-08-01 00:00:00.000000',0,'0000-00-00 00:00:00.000000',100.0000,'MOLDEX','987-654-321','XLS TEST 2');
/*!40000 ALTER TABLE `EMJGC_expences` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `EMJGC_man_power`
--

DROP TABLE IF EXISTS `EMJGC_man_power`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `EMJGC_man_power` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `amount` float(11,4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `EMJGC_man_power`
--

LOCK TABLES `EMJGC_man_power` WRITE;
/*!40000 ALTER TABLE `EMJGC_man_power` DISABLE KEYS */;
INSERT INTO `EMJGC_man_power` VALUES (1,'2018-10-06 00:00:00.000000','Geron, Bernard Castillo','Software Developer','BATOY',10000.0000),(2,'2018-10-06 00:00:00.000000','Cuntapay, Mark Joseph G.','CEO','MJ',230000.0000),(3,'2018-11-17 00:00:00.000000','Geron, Bernard Castillo','Software Developer','BATOY',20000.0000),(5,'2018-08-09 00:00:00.000000','Geron, Bernard C.','Software Developer','BATOY',50000.0000),(6,'2018-09-15 00:00:00.000000','Geron, Bernard C.','Software Developer','BATOY',50000.0000),(7,'2019-03-05 00:00:00.000000','Cuntapay, Mark Joseph G.','CEO','MJ',500000.0000);
/*!40000 ALTER TABLE `EMJGC_man_power` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `EMJGC_phase`
--

DROP TABLE IF EXISTS `EMJGC_phase`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `EMJGC_phase` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phase_code` varchar(20) NOT NULL,
  `phase_description` varchar(20) NOT NULL,
  `budget_cost` float(11,3) NOT NULL,
  `remaining_budget` float(11,3) NOT NULL,
  `created_by_id` int(4) NOT NULL,
  `date_created` datetime(6) NOT NULL,
  `date_edited` datetime(6) NOT NULL,
  `edited_by_id` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `EMJGC_phase`
--

LOCK TABLES `EMJGC_phase` WRITE;
/*!40000 ALTER TABLE `EMJGC_phase` DISABLE KEYS */;
INSERT INTO `EMJGC_phase` VALUES (1,'0100','MATERIALS',2000000.000,2000000.000,1,'2018-10-06 00:00:00.000000','0000-00-00 00:00:00.000000',0),(2,'0200','MISCELLANEOUS',58000.000,58000.000,1,'2018-10-06 00:00:00.000000','0000-00-00 00:00:00.000000',0),(3,'0300','LABOR',3250000.000,3250000.000,1,'2018-10-06 00:00:00.000000','0000-00-00 00:00:00.000000',0),(4,'0400','SUBCON',1250000.000,1250000.000,1,'2018-10-06 00:00:00.000000','0000-00-00 00:00:00.000000',0),(5,'0500','PERSONAL',65000.000,61962.500,1,'2018-10-06 00:00:00.000000','0000-00-00 00:00:00.000000',0);
/*!40000 ALTER TABLE `EMJGC_phase` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MAV_collection`
--

DROP TABLE IF EXISTS `MAV_collection`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MAV_collection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime(6) NOT NULL,
  `amount` float(11,4) NOT NULL,
  `ref_doc` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MAV_collection`
--

LOCK TABLES `MAV_collection` WRITE;
/*!40000 ALTER TABLE `MAV_collection` DISABLE KEYS */;
INSERT INTO `MAV_collection` VALUES (1,'2018-11-17 00:00:00.000000',500000.0000,'REF. DOC: 6549806-5A895SA');
/*!40000 ALTER TABLE `MAV_collection` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MAV_expences`
--

DROP TABLE IF EXISTS `MAV_expences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MAV_expences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pc_id` int(11) NOT NULL,
  `project_code` varchar(70) NOT NULL,
  `proj_id` int(11) NOT NULL,
  `details` varchar(255) NOT NULL,
  `unit_cost` float(11,4) NOT NULL,
  `total_amount` float(11,4) NOT NULL,
  `createdby_id` int(4) NOT NULL,
  `date_created` datetime(6) NOT NULL,
  `edited_by_id` int(4) NOT NULL,
  `date_edited` datetime(6) NOT NULL,
  `qty` float(11,4) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `tin` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MAV_expences`
--

LOCK TABLES `MAV_expences` WRITE;
/*!40000 ALTER TABLE `MAV_expences` DISABLE KEYS */;
/*!40000 ALTER TABLE `MAV_expences` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MAV_man_power`
--

DROP TABLE IF EXISTS `MAV_man_power`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MAV_man_power` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `amount` float(11,4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MAV_man_power`
--

LOCK TABLES `MAV_man_power` WRITE;
/*!40000 ALTER TABLE `MAV_man_power` DISABLE KEYS */;
/*!40000 ALTER TABLE `MAV_man_power` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MAV_phase`
--

DROP TABLE IF EXISTS `MAV_phase`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MAV_phase` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phase_code` varchar(20) NOT NULL,
  `phase_description` varchar(20) NOT NULL,
  `budget_cost` float(11,3) NOT NULL,
  `remaining_budget` float(11,3) NOT NULL,
  `created_by_id` int(4) NOT NULL,
  `date_created` datetime(6) NOT NULL,
  `date_edited` datetime(6) NOT NULL,
  `edited_by_id` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MAV_phase`
--

LOCK TABLES `MAV_phase` WRITE;
/*!40000 ALTER TABLE `MAV_phase` DISABLE KEYS */;
INSERT INTO `MAV_phase` VALUES (1,'0100','MISCELLANEOUS',1500000.000,1500000.000,1,'2018-11-17 00:00:00.000000','0000-00-00 00:00:00.000000',0);
/*!40000 ALTER TABLE `MAV_phase` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ci_sessions`
--

LOCK TABLES `ci_sessions` WRITE;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT INTO `ci_sessions` VALUES ('rhel9hvi8ke9uqli8k5m4u0a07jpkfdk','127.0.0.1',1538796628,'__ci_last_regenerate|i:1538796628;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('o4qsrf2ua2lcsu6ocjemepbr0u74oras','127.0.0.1',1538797131,'__ci_last_regenerate|i:1538797131;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('kthelb141o2opd89sgg2ff4irjargvrg','127.0.0.1',1538797444,'__ci_last_regenerate|i:1538797444;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('5b0hboc1deaqpp9fd7fliolc85r2adsm','127.0.0.1',1538798488,'__ci_last_regenerate|i:1538798488;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('ikbi1ghcpjat3i5s589r6n2dlo8tdc3g','127.0.0.1',1538797757,'__ci_last_regenerate|i:1538797757;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('urjqvap9jomg3vjkeduslgmle3dtguqp','127.0.0.1',1538798131,'__ci_last_regenerate|i:1538798131;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('qb73a3ltd278619oio2foo7smp0fluem','127.0.0.1',1538798827,'__ci_last_regenerate|i:1538798827;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('49u1lv6uhmlkgob3kmi7t9gnb8ub0f8n','127.0.0.1',1538799503,'__ci_last_regenerate|i:1538799503;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('gjm4vo8b4hkp7r630k53n0t4m2o8l0vd','127.0.0.1',1538799848,'__ci_last_regenerate|i:1538799848;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('ohvp7dvl5a7ur166ndt4gcle0t221tlj','127.0.0.1',1538800175,'__ci_last_regenerate|i:1538800175;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('outp4998jv1fvr62gkp67cd4jun6gpvg','127.0.0.1',1538800658,'__ci_last_regenerate|i:1538800658;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('qmq04g6qd10gg1kunv82ikphd4cofiak','127.0.0.1',1538803120,'__ci_last_regenerate|i:1538803120;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('5ceat75gi6gambu7hl9udgkiv3bqpdji','127.0.0.1',1538803120,'__ci_last_regenerate|i:1538803120;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('9spft58jciugsrcek7dr0oskcvrg2me9','127.0.0.1',1539273435,'__ci_last_regenerate|i:1539273435;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('sabdfid6e377j595k1ngfrge3f1n1a1c','127.0.0.1',1539273891,'__ci_last_regenerate|i:1539273891;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('ol9kjpq6jes6f9g27ng9q83jiuvfg1dd','127.0.0.1',1539273896,'__ci_last_regenerate|i:1539273891;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('68cdua1ouob43jev8a9qrhpbf74s9r6t','127.0.0.1',1539325140,'__ci_last_regenerate|i:1539325140;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('118ffknac81qko69g58ad7o5k4ab2nr6','127.0.0.1',1539325934,'__ci_last_regenerate|i:1539325934;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('l17h5r2ar140l5mtlgk1dk117pkh2pri','127.0.0.1',1539325442,'__ci_last_regenerate|i:1539325442;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('k4takq0atdv1um5ph6ehns48uim877lp','127.0.0.1',1539328646,'__ci_last_regenerate|i:1539328646;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('kqt1ik38qoqoseks25e9ql1je4pfmu5v','127.0.0.1',1539331454,'__ci_last_regenerate|i:1539331454;'),('kld7a70ct29b0jrhojkh6g0tdf5upa12','127.0.0.1',1539336358,'__ci_last_regenerate|i:1539336358;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('kp1cemfopvg8c6jonsg84utgfp4anhbp','127.0.0.1',1539336358,'__ci_last_regenerate|i:1539336358;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('r439731ebf1tla27o545rut93fo6oel1','127.0.0.1',1539785380,'__ci_last_regenerate|i:1539785380;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('d8809ki10k9drbv60h5k9r851lmu7ec9','127.0.0.1',1539786414,'__ci_last_regenerate|i:1539786414;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('qcigj4aerlpnq71vn1rksemf9rqs7g40','127.0.0.1',1539786518,'__ci_last_regenerate|i:1539786414;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('4f5h0e12aa5ofdnh3brnetrr2nak9ip3','127.0.0.1',1542443747,'__ci_last_regenerate|i:1542443747;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('spckqt4011mijhaagrjt4dbdq9kgj960','127.0.0.1',1542444053,'__ci_last_regenerate|i:1542444053;'),('qj6sn9bvqr5p4ot9rcbp81lo9s01u7g0','127.0.0.1',1542444356,'__ci_last_regenerate|i:1542444356;'),('43jk4r07ndbram5dcghfn2ok620ecstf','127.0.0.1',1542444815,'__ci_last_regenerate|i:1542444815;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('ulv3spatljklbim5mnhn7tced49dmvfv','127.0.0.1',1542445231,'__ci_last_regenerate|i:1542445231;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('9gihj40s82972eucbvsd9lsgos8j6j9q','127.0.0.1',1542445536,'__ci_last_regenerate|i:1542445536;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('4hkgad66mtsl90eac6j2qffseb9t60g5','127.0.0.1',1542445841,'__ci_last_regenerate|i:1542445841;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('i1a9bdlih1q9jafcuvjjo7h39t6o1uju','127.0.0.1',1542446146,'__ci_last_regenerate|i:1542446146;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('fp09pk052j6r8i0jktf0p7hm79cb10l0','127.0.0.1',1542446512,'__ci_last_regenerate|i:1542446512;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('prsqeg6po8r867vcesr0nefbc1i8l4io','127.0.0.1',1542446623,'__ci_last_regenerate|i:1542446512;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('cu5t9cohfed372bkro31l8a191dn90sb','127.0.0.1',1542469477,'__ci_last_regenerate|i:1542469429;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('nmqu6g17a6osuepj6bojn5l9bucaidtf','127.0.0.1',1542810924,'__ci_last_regenerate|i:1542810924;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('6q01424n9a223mbbl94jbqrl9vr7mpsd','127.0.0.1',1542810924,'__ci_last_regenerate|i:1542810924;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('uv69c4b19e8ueu4oot27567ffkfbkbth','127.0.0.1',1543483308,'__ci_last_regenerate|i:1543483308;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('7s7r7r9vj6mng93tilmmlhe69sk5sl2c','127.0.0.1',1543483529,'__ci_last_regenerate|i:1543483308;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('n7one901nhvtdf1kfp3s7hvm4a1gaq3f','127.0.0.1',1543493031,'__ci_last_regenerate|i:1543493031;'),('o9egufrh46a2caua3lehne2h9lrff2ou','127.0.0.1',1543495145,'__ci_last_regenerate|i:1543495145;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('s8hhu87ko6p31rilmckhpdscsu0e2vea','127.0.0.1',1543495805,'__ci_last_regenerate|i:1543495805;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('i6c2555c521a18k3m7lrsp49kfsjs5bq','127.0.0.1',1543497412,'__ci_last_regenerate|i:1543495805;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('7ns6f8h3ml3vbq5o4bsc0jnqt5oem044','127.0.0.1',1552596349,'__ci_last_regenerate|i:1552596349;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('1bbdpep29rlams32e58797hav9ia1j2q','127.0.0.1',1552596666,'__ci_last_regenerate|i:1552596666;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('3m2k67id4fintuehocrmbpu3nli85ujp','127.0.0.1',1552597001,'__ci_last_regenerate|i:1552597001;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('fl4mu7nhe2b33o3kgthv5f9th0n7bkqr','127.0.0.1',1552597001,'__ci_last_regenerate|i:1552597001;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('bavhi25qff1469m921apq3pjv3fncj21','127.0.0.1',1557749121,'__ci_last_regenerate|i:1557749121;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('vomm6oq40vc2calf7lg27roctcbn3m1r','127.0.0.1',1557749429,'__ci_last_regenerate|i:1557749429;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('o1ailps8soe5m5e4406p32vhn6atmerm','127.0.0.1',1557749730,'__ci_last_regenerate|i:1557749730;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('eug6b66v3n43n0ndnstai927t25ov4np','127.0.0.1',1557750097,'__ci_last_regenerate|i:1557750097;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('udkacrsflb1tbvqnirpqumea1r2oq110','127.0.0.1',1557750402,'__ci_last_regenerate|i:1557750402;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('kvtmph5ujl7pimmcpfqmfdrirb08qjjk','127.0.0.1',1557750418,'__ci_last_regenerate|i:1557750402;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('6cqq7ittqkvj64i4i511spbollvdb2or','127.0.0.1',1559219124,'__ci_last_regenerate|i:1559219124;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('i477l4q3mkkcrd85kdgpcrdsgr990nim','127.0.0.1',1559219308,'__ci_last_regenerate|i:1559219124;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('3epm4a8s8rlccsml353qbciqq40vrhnp','127.0.0.1',1560014543,'__ci_last_regenerate|i:1560014410;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('gjolembpkg3op3eobbm4qok0te9pj0fg','127.0.0.1',1567949351,'__ci_last_regenerate|i:1567949351;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('5r02fd7g9qekaom5uth71d75rqf74o1p','127.0.0.1',1567949392,'__ci_last_regenerate|i:1567949351;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";');
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(10) NOT NULL,
  `first_name` varchar(70) NOT NULL,
  `middle_name` varchar(70) NOT NULL,
  `nic_name` varchar(70) NOT NULL,
  `last_name` varchar(70) NOT NULL,
  `designation` varchar(70) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_by_id` int(4) NOT NULL,
  `date_created` datetime(6) NOT NULL,
  `edited_by_id` int(4) NOT NULL,
  `date_edited` datetime(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES (1,'EMJGC00001','Bernard','Castillo','BATOY','Geron','Software Developer','Active',1,'2018-09-27 00:00:00.000000',1,'2018-09-27 00:00:00.000000'),(2,'EMJGC00002','Mark Joseph','G.','MJ','Cuntapay','CEO','Active',1,'2018-09-27 00:00:00.000000',1,'2018-09-27 00:00:00.000000');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `retention`
--

DROP TABLE IF EXISTS `retention`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `retention` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `project_code` varchar(255) NOT NULL,
  `retention_percentage` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `retention`
--

LOCK TABLES `retention` WRITE;
/*!40000 ALTER TABLE `retention` DISABLE KEYS */;
INSERT INTO `retention` VALUES (1,'EMJGC',16),(2,'MAV',0),(3,'DOOSAN',20),(4,'ALJIMI',15);
/*!40000 ALTER TABLE `retention` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_description` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'ADMINISTRATOR'),(2,'MANAGER'),(3,'OFFICER');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schema_version`
--

DROP TABLE IF EXISTS `schema_version`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `schema_version` (
  `installed_rank` int(11) NOT NULL,
  `version` varchar(50) DEFAULT NULL,
  `description` varchar(200) NOT NULL,
  `type` varchar(20) NOT NULL,
  `script` varchar(1000) NOT NULL,
  `checksum` int(11) DEFAULT NULL,
  `installed_by` varchar(100) NOT NULL,
  `installed_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `execution_time` int(11) NOT NULL,
  `success` tinyint(1) NOT NULL,
  PRIMARY KEY (`installed_rank`),
  KEY `schema_version_s_idx` (`success`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schema_version`
--

LOCK TABLES `schema_version` WRITE;
/*!40000 ALTER TABLE `schema_version` DISABLE KEYS */;
INSERT INTO `schema_version` VALUES (1,'1','load default configuration','SQL','V1__load_default_configuration.sql',602779778,'root','2018-09-27 14:17:53',3806,1);
/*!40000 ALTER TABLE `schema_version` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sites`
--

DROP TABLE IF EXISTS `sites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_code` varchar(255) NOT NULL,
  `site_name` varchar(255) NOT NULL,
  `created_by_id` int(4) NOT NULL,
  `date_created` datetime(6) DEFAULT NULL,
  `edited_by_id` int(4) DEFAULT NULL,
  `date_edited` datetime(6) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sites`
--

LOCK TABLES `sites` WRITE;
/*!40000 ALTER TABLE `sites` DISABLE KEYS */;
INSERT INTO `sites` VALUES (1,'EMJGC','EMJGC Office',1,'2018-08-01 00:00:00.000000',NULL,NULL,'on-going'),(2,'MAV','Maricielo Villas',0,NULL,NULL,NULL,'on-going'),(3,'DOOSAN','DOOSAN',0,NULL,NULL,NULL,'on-going'),(4,'ALJIMI','ALJIMI',0,NULL,NULL,NULL,'on-going');
/*!40000 ALTER TABLE `sites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `suppliers`
--

DROP TABLE IF EXISTS `suppliers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier_code` varchar(255) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `product_type_id` int(4) NOT NULL,
  `supplier_emai` varchar(255) NOT NULL,
  `supplier_address` varchar(255) NOT NULL,
  `supplier_contact_number` varchar(60) NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `created_by_id` int(4) NOT NULL,
  `date_created` datetime(6) DEFAULT NULL,
  `edited_by_id` int(4) NOT NULL,
  `date_edited` datetime(6) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `supplier_email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suppliers`
--

LOCK TABLES `suppliers` WRITE;
/*!40000 ALTER TABLE `suppliers` DISABLE KEYS */;
/*!40000 ALTER TABLE `suppliers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `site_id` int(4) NOT NULL,
  `role_id` int(4) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_by_id` int(4) NOT NULL,
  `date_created` datetime(6) DEFAULT NULL,
  `date_edited` datetime(6) DEFAULT NULL,
  `edited_by_id` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'root','*A117163FA7278CA5288B6AEFFA44D3D1D223BE8F','Cuntapay','Mark Joseph','G.',1,1,'active',1,'2018-08-01 00:00:00.000000','2018-11-29 00:00:00.000000',1);
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

-- Dump completed on 2019-09-08 17:31:34
