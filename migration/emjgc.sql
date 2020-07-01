-- MySQL dump 10.16  Distrib 10.1.26-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: emjgc
-- ------------------------------------------------------
-- Server version	10.1.26-MariaDB

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
-- Table structure for table `APA_collection`
--

DROP TABLE IF EXISTS `APA_collection`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `APA_collection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime(6) NOT NULL,
  `amount` float(11,4) NOT NULL,
  `ref_doc` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `APA_collection`
--

LOCK TABLES `APA_collection` WRITE;
/*!40000 ALTER TABLE `APA_collection` DISABLE KEYS */;
/*!40000 ALTER TABLE `APA_collection` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `APA_expences`
--

DROP TABLE IF EXISTS `APA_expences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `APA_expences` (
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
-- Dumping data for table `APA_expences`
--

LOCK TABLES `APA_expences` WRITE;
/*!40000 ALTER TABLE `APA_expences` DISABLE KEYS */;
/*!40000 ALTER TABLE `APA_expences` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `APA_man_power`
--

DROP TABLE IF EXISTS `APA_man_power`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `APA_man_power` (
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
-- Dumping data for table `APA_man_power`
--

LOCK TABLES `APA_man_power` WRITE;
/*!40000 ALTER TABLE `APA_man_power` DISABLE KEYS */;
/*!40000 ALTER TABLE `APA_man_power` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `APA_phase`
--

DROP TABLE IF EXISTS `APA_phase`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `APA_phase` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `APA_phase`
--

LOCK TABLES `APA_phase` WRITE;
/*!40000 ALTER TABLE `APA_phase` DISABLE KEYS */;
/*!40000 ALTER TABLE `APA_phase` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `BAYC_collection`
--

DROP TABLE IF EXISTS `BAYC_collection`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `BAYC_collection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime(6) NOT NULL,
  `amount` float(11,4) NOT NULL,
  `ref_doc` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `BAYC_collection`
--

LOCK TABLES `BAYC_collection` WRITE;
/*!40000 ALTER TABLE `BAYC_collection` DISABLE KEYS */;
/*!40000 ALTER TABLE `BAYC_collection` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `BAYC_expences`
--

DROP TABLE IF EXISTS `BAYC_expences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `BAYC_expences` (
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
-- Dumping data for table `BAYC_expences`
--

LOCK TABLES `BAYC_expences` WRITE;
/*!40000 ALTER TABLE `BAYC_expences` DISABLE KEYS */;
/*!40000 ALTER TABLE `BAYC_expences` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `BAYC_man_power`
--

DROP TABLE IF EXISTS `BAYC_man_power`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `BAYC_man_power` (
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
-- Dumping data for table `BAYC_man_power`
--

LOCK TABLES `BAYC_man_power` WRITE;
/*!40000 ALTER TABLE `BAYC_man_power` DISABLE KEYS */;
/*!40000 ALTER TABLE `BAYC_man_power` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `BAYC_phase`
--

DROP TABLE IF EXISTS `BAYC_phase`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `BAYC_phase` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `BAYC_phase`
--

LOCK TABLES `BAYC_phase` WRITE;
/*!40000 ALTER TABLE `BAYC_phase` DISABLE KEYS */;
/*!40000 ALTER TABLE `BAYC_phase` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `CAR_collection`
--

DROP TABLE IF EXISTS `CAR_collection`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CAR_collection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime(6) NOT NULL,
  `amount` float(11,4) NOT NULL,
  `ref_doc` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CAR_collection`
--

LOCK TABLES `CAR_collection` WRITE;
/*!40000 ALTER TABLE `CAR_collection` DISABLE KEYS */;
/*!40000 ALTER TABLE `CAR_collection` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `CAR_expences`
--

DROP TABLE IF EXISTS `CAR_expences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CAR_expences` (
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
-- Dumping data for table `CAR_expences`
--

LOCK TABLES `CAR_expences` WRITE;
/*!40000 ALTER TABLE `CAR_expences` DISABLE KEYS */;
/*!40000 ALTER TABLE `CAR_expences` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `CAR_man_power`
--

DROP TABLE IF EXISTS `CAR_man_power`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CAR_man_power` (
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
-- Dumping data for table `CAR_man_power`
--

LOCK TABLES `CAR_man_power` WRITE;
/*!40000 ALTER TABLE `CAR_man_power` DISABLE KEYS */;
/*!40000 ALTER TABLE `CAR_man_power` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `CAR_phase`
--

DROP TABLE IF EXISTS `CAR_phase`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CAR_phase` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CAR_phase`
--

LOCK TABLES `CAR_phase` WRITE;
/*!40000 ALTER TABLE `CAR_phase` DISABLE KEYS */;
/*!40000 ALTER TABLE `CAR_phase` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `DES_collection`
--

DROP TABLE IF EXISTS `DES_collection`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `DES_collection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime(6) NOT NULL,
  `amount` float(11,4) NOT NULL,
  `ref_doc` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `DES_collection`
--

LOCK TABLES `DES_collection` WRITE;
/*!40000 ALTER TABLE `DES_collection` DISABLE KEYS */;
/*!40000 ALTER TABLE `DES_collection` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `DES_expences`
--

DROP TABLE IF EXISTS `DES_expences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `DES_expences` (
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
-- Dumping data for table `DES_expences`
--

LOCK TABLES `DES_expences` WRITE;
/*!40000 ALTER TABLE `DES_expences` DISABLE KEYS */;
/*!40000 ALTER TABLE `DES_expences` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `DES_man_power`
--

DROP TABLE IF EXISTS `DES_man_power`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `DES_man_power` (
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
-- Dumping data for table `DES_man_power`
--

LOCK TABLES `DES_man_power` WRITE;
/*!40000 ALTER TABLE `DES_man_power` DISABLE KEYS */;
/*!40000 ALTER TABLE `DES_man_power` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `DES_phase`
--

DROP TABLE IF EXISTS `DES_phase`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `DES_phase` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `DES_phase`
--

LOCK TABLES `DES_phase` WRITE;
/*!40000 ALTER TABLE `DES_phase` DISABLE KEYS */;
/*!40000 ALTER TABLE `DES_phase` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `EMJ_collection`
--

DROP TABLE IF EXISTS `EMJ_collection`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `EMJ_collection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime(6) NOT NULL,
  `amount` float(11,4) NOT NULL,
  `ref_doc` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `EMJ_collection`
--

LOCK TABLES `EMJ_collection` WRITE;
/*!40000 ALTER TABLE `EMJ_collection` DISABLE KEYS */;
/*!40000 ALTER TABLE `EMJ_collection` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `EMJ_expences`
--

DROP TABLE IF EXISTS `EMJ_expences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `EMJ_expences` (
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
-- Dumping data for table `EMJ_expences`
--

LOCK TABLES `EMJ_expences` WRITE;
/*!40000 ALTER TABLE `EMJ_expences` DISABLE KEYS */;
/*!40000 ALTER TABLE `EMJ_expences` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `EMJ_man_power`
--

DROP TABLE IF EXISTS `EMJ_man_power`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `EMJ_man_power` (
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
-- Dumping data for table `EMJ_man_power`
--

LOCK TABLES `EMJ_man_power` WRITE;
/*!40000 ALTER TABLE `EMJ_man_power` DISABLE KEYS */;
/*!40000 ALTER TABLE `EMJ_man_power` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `EMJ_phase`
--

DROP TABLE IF EXISTS `EMJ_phase`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `EMJ_phase` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `EMJ_phase`
--

LOCK TABLES `EMJ_phase` WRITE;
/*!40000 ALTER TABLE `EMJ_phase` DISABLE KEYS */;
/*!40000 ALTER TABLE `EMJ_phase` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `GLB_collection`
--

DROP TABLE IF EXISTS `GLB_collection`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `GLB_collection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime(6) NOT NULL,
  `amount` float(11,4) NOT NULL,
  `ref_doc` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `GLB_collection`
--

LOCK TABLES `GLB_collection` WRITE;
/*!40000 ALTER TABLE `GLB_collection` DISABLE KEYS */;
/*!40000 ALTER TABLE `GLB_collection` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `GLB_expences`
--

DROP TABLE IF EXISTS `GLB_expences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `GLB_expences` (
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
-- Dumping data for table `GLB_expences`
--

LOCK TABLES `GLB_expences` WRITE;
/*!40000 ALTER TABLE `GLB_expences` DISABLE KEYS */;
/*!40000 ALTER TABLE `GLB_expences` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `GLB_man_power`
--

DROP TABLE IF EXISTS `GLB_man_power`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `GLB_man_power` (
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
-- Dumping data for table `GLB_man_power`
--

LOCK TABLES `GLB_man_power` WRITE;
/*!40000 ALTER TABLE `GLB_man_power` DISABLE KEYS */;
/*!40000 ALTER TABLE `GLB_man_power` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `GLB_phase`
--

DROP TABLE IF EXISTS `GLB_phase`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `GLB_phase` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `GLB_phase`
--

LOCK TABLES `GLB_phase` WRITE;
/*!40000 ALTER TABLE `GLB_phase` DISABLE KEYS */;
/*!40000 ALTER TABLE `GLB_phase` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `HRL_collection`
--

DROP TABLE IF EXISTS `HRL_collection`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `HRL_collection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime(6) NOT NULL,
  `amount` float(11,4) NOT NULL,
  `ref_doc` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `HRL_collection`
--

LOCK TABLES `HRL_collection` WRITE;
/*!40000 ALTER TABLE `HRL_collection` DISABLE KEYS */;
/*!40000 ALTER TABLE `HRL_collection` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `HRL_expences`
--

DROP TABLE IF EXISTS `HRL_expences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `HRL_expences` (
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
-- Dumping data for table `HRL_expences`
--

LOCK TABLES `HRL_expences` WRITE;
/*!40000 ALTER TABLE `HRL_expences` DISABLE KEYS */;
/*!40000 ALTER TABLE `HRL_expences` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `HRL_man_power`
--

DROP TABLE IF EXISTS `HRL_man_power`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `HRL_man_power` (
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
-- Dumping data for table `HRL_man_power`
--

LOCK TABLES `HRL_man_power` WRITE;
/*!40000 ALTER TABLE `HRL_man_power` DISABLE KEYS */;
/*!40000 ALTER TABLE `HRL_man_power` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `HRL_phase`
--

DROP TABLE IF EXISTS `HRL_phase`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `HRL_phase` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `HRL_phase`
--

LOCK TABLES `HRL_phase` WRITE;
/*!40000 ALTER TABLE `HRL_phase` DISABLE KEYS */;
/*!40000 ALTER TABLE `HRL_phase` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MAIN_collection`
--

DROP TABLE IF EXISTS `MAIN_collection`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MAIN_collection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime(6) NOT NULL,
  `amount` float(11,4) NOT NULL,
  `ref_doc` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MAIN_collection`
--

LOCK TABLES `MAIN_collection` WRITE;
/*!40000 ALTER TABLE `MAIN_collection` DISABLE KEYS */;
/*!40000 ALTER TABLE `MAIN_collection` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MAIN_expences`
--

DROP TABLE IF EXISTS `MAIN_expences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MAIN_expences` (
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
-- Dumping data for table `MAIN_expences`
--

LOCK TABLES `MAIN_expences` WRITE;
/*!40000 ALTER TABLE `MAIN_expences` DISABLE KEYS */;
/*!40000 ALTER TABLE `MAIN_expences` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MAIN_man_power`
--

DROP TABLE IF EXISTS `MAIN_man_power`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MAIN_man_power` (
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
-- Dumping data for table `MAIN_man_power`
--

LOCK TABLES `MAIN_man_power` WRITE;
/*!40000 ALTER TABLE `MAIN_man_power` DISABLE KEYS */;
/*!40000 ALTER TABLE `MAIN_man_power` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MAIN_phase`
--

DROP TABLE IF EXISTS `MAIN_phase`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MAIN_phase` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MAIN_phase`
--

LOCK TABLES `MAIN_phase` WRITE;
/*!40000 ALTER TABLE `MAIN_phase` DISABLE KEYS */;
/*!40000 ALTER TABLE `MAIN_phase` ENABLE KEYS */;
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
INSERT INTO `ci_sessions` VALUES ('ls70bahulqpv1r1c64enfb8idq0b1dsr','127.0.0.1',1537428081,'__ci_last_regenerate|i:1537428081;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('gpbisgud5iot5ag7in66blmnac3ufjf3','127.0.0.1',1537428387,'__ci_last_regenerate|i:1537428387;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('6b9ca93trgh4odpbkk0rdg9vm7u5h5nf','127.0.0.1',1537428712,'__ci_last_regenerate|i:1537428712;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('gcsetjv2t10f8d4n39kntegqou0tdv98','127.0.0.1',1537429014,'__ci_last_regenerate|i:1537429014;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('5feug63h1ahhr1f0vr0jqjghavnif9vi','127.0.0.1',1537429322,'__ci_last_regenerate|i:1537429322;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";'),('98634drla6vjhkhjau7pit8qp1v7kaeu','127.0.0.1',1537429424,'__ci_last_regenerate|i:1537429322;id|s:1:\"1\";username|s:4:\"root\";full_name|s:25:\"Cuntapay, Mark Joseph  G.\";site_id|s:1:\"1\";role_id|s:1:\"1\";');
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `retention`
--

LOCK TABLES `retention` WRITE;
/*!40000 ALTER TABLE `retention` DISABLE KEYS */;
INSERT INTO `retention` VALUES (1,'MAIN',0),(2,'BAYC',0),(3,'DES',0),(4,'CAR',0),(5,'APA',0),(6,'HRL',0),(7,'EMJ',0),(8,'GLB',0);
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
INSERT INTO `schema_version` VALUES (1,'1','load default configuration','SQL','V1__load_default_configuration.sql',-953353866,'root','2018-09-20 07:16:08',3382,1);
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sites`
--

LOCK TABLES `sites` WRITE;
/*!40000 ALTER TABLE `sites` DISABLE KEYS */;
INSERT INTO `sites` VALUES (1,'MAIN','Main Office',1,'2018-08-01 00:00:00.000000',NULL,NULL,'Finished'),(2,'BAYC','BAY C',0,NULL,NULL,NULL,'on-going'),(3,'DES','DESIREE',0,NULL,NULL,NULL,'on-going'),(4,'CAR','CARINA',0,NULL,NULL,NULL,'on-going'),(5,'APA','APARTMENT',0,NULL,NULL,NULL,'on-going'),(6,'HRL','HR LOUNGE',0,NULL,NULL,NULL,'on-going'),(7,'EMJ','EMJGC',0,NULL,NULL,NULL,'on-going'),(8,'GLB','GLASS BOARD',0,NULL,NULL,NULL,'on-going');
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'root','*0C23F19DB8283F44BBDD6C3DD88EAA0A7F3A3451','Cuntapay','Mark Joseph','G.',1,1,'active',1,'2018-08-01 00:00:00.000000','2018-08-07 00:00:00.000000',1);
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

-- Dump completed on 2018-09-20 15:47:43
