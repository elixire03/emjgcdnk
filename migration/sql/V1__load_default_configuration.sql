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
-- Table structure for table `4770_main_inv`
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sites`
--

LOCK TABLES `sites` WRITE;
/*!40000 ALTER TABLE `sites` DISABLE KEYS */;
INSERT INTO `sites` VALUES (1,'EMJGC','EMJGC Office',1,'2018-08-01 00:00:00.000000',NULL,NULL,'on-going');
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
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suppliers`
--



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

create table EMJGC_phase (id int(11) not null primary key auto_increment,phase_code varchar(20) not null,
                                                                phase_description varchar(20) not null,
                                                                budget_cost float(11,3) not null,
                                                                remaining_budget float(11,3) not null,
                                                                created_by_id int(4) not null,
                                                                date_created datetime(6) not null,
                                                                date_edited datetime(6) not null,
                                                                edited_by_id int(4) not null);
create table EMJGC_expences (id int(11) not null primary key auto_increment, 
                                                                pc_id int(11) not null, 
                                                                project_code varchar(70) not null, 
                                                                proj_id int(11) not null, 
                                                                details varchar(255) not null, 
                                                                unit_cost float(11,4) not null, 
                                                                total_amount float(11,4) not null, 
                                                                createdby_id int(4) not null, 
                                                                date_created datetime(6) not null, 
                                                                edited_by_id int(4) not null, 
                                                                date_edited datetime(6) not null,
                                                                qty float(11,4) not null,
                                                                supplier_name varchar(255) not null, 
                                                                tin varchar(255) not null, 
                                                                address varchar(255) not null
                                                                );

create table employees (id int(11) not null primary key auto_increment, 
                                                                employee_id varchar(10) not null, 
                                                                first_name varchar(70) not null, 
                                                                middle_name varchar(70) not null, 
                                                                nic_name varchar(70) not null, 
                                                                last_name varchar(70) not null, 
                                                                designation varchar(70) not null, 
                                                                status varchar(10) not null, 
                                                                created_by_id int(4) not null, 
                                                                date_created datetime(6) not null, 
                                                                edited_by_id int(4) not null, 
                                                                date_edited datetime(6) not null
                                                                );
create table retention (id int(1) not null primary key auto_increment, 
                                                                project_code varchar(255)not null,
                                                                retention_percentage float(3) not null
                                                                );
insert into retention(project_code,retention_percentage)values('EMJGC',0);

create table EMJGC_collection (id int(11) not null primary key auto_increment, 
                                                                date_created datetime(6) not null,
                                                                amount float(11,4) not null,
                                                                ref_doc varchar(255) not null
                                                                );

create table EMJGC_man_power (id int(11) not null primary key auto_increment, 
                                                                date_created datetime(6) not null,
                                                                name varchar(255) not null,
                                                                designation varchar(255) not null,
                                                                alias varchar(255) not null,
                                                                amount float(11,4) not null
                                                                
                                                                );

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-08-28 17:22:19
