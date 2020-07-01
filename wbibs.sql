-- MySQL dump 10.16  Distrib 10.1.26-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: wbibs
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

--
-- Dumping data for table `ci_sessions`
--

LOCK TABLES `ci_sessions` WRITE;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT INTO `ci_sessions` VALUES ('arrts3mr8c4hpv9k52o7lfe7rvqdfsje','127.0.0.1',1533705726,'__ci_last_regenerate|i:1533705726;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('i0i969k0v8bark2luek8l3um81q441jq','127.0.0.1',1533711376,'__ci_last_regenerate|i:1533711376;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('hu0uf61brm8pnj73kms3foleftv48orp','127.0.0.1',1533711571,'__ci_last_regenerate|i:1533711376;'),('1iee6mgmkboc3bpgr6qj0di79ls8fldr','127.0.0.1',1533720038,'__ci_last_regenerate|i:1533720038;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('01smtdqpu8n9lorgrjah54jipijga18l','127.0.0.1',1533720681,'__ci_last_regenerate|i:1533720681;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('nqdvukr807m6m3hu49b75p8k2gona721','127.0.0.1',1533720995,'__ci_last_regenerate|i:1533720995;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('58b90pl4n14f988sv382d9s040uhcakp','127.0.0.1',1533722212,'__ci_last_regenerate|i:1533722212;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('u03esup6mpggdjnpsb95g0j2eb2180r0','127.0.0.1',1533722544,'__ci_last_regenerate|i:1533722544;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('jlfeuslmmoieh7maqcp7u8qmp2mrhhou','127.0.0.1',1533722853,'__ci_last_regenerate|i:1533722853;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('e2fb6gvg5bsdh3qu9d3c0qgl46cc00ng','127.0.0.1',1533723156,'__ci_last_regenerate|i:1533723156;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('b7tb2vrmr6bbabsk1hfn42l9lkbunaj0','127.0.0.1',1533723462,'__ci_last_regenerate|i:1533723462;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('74335fddg92p3k6s5scjp74svqhf33lq','127.0.0.1',1533723924,'__ci_last_regenerate|i:1533723924;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('srn8c3508oo6l2qdku7dr41417hvoeva','127.0.0.1',1533724240,'__ci_last_regenerate|i:1533724240;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('q47apg9n6l6e78uv8uvou82e4mcqc16u','127.0.0.1',1533724587,'__ci_last_regenerate|i:1533724587;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('84v129rrm1vi748j1ohdg2rvi8tk46bi','127.0.0.1',1533726235,'__ci_last_regenerate|i:1533726235;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('rnjlatoa21oi6jfsfuduqpqo0kabspdj','127.0.0.1',1533726538,'__ci_last_regenerate|i:1533726538;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('2i6tskqisctvmsgaat6cefkeoc69dsk3','127.0.0.1',1533726567,'__ci_last_regenerate|i:1533726538;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('k7lbgvevsi0001uads6s7vgek497lop7','127.0.0.1',1533744444,'__ci_last_regenerate|i:1533744415;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('dfpnl5upv26cqql92bp76gg30qoti0eh','127.0.0.1',1533778855,'__ci_last_regenerate|i:1533778855;'),('1ip3qg5fbu9qqce36g8rj32mtq9a3m5i','127.0.0.1',1533779332,'__ci_last_regenerate|i:1533779332;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('6dr458j00lp580bubcas22bam5iu57th','127.0.0.1',1533781242,'__ci_last_regenerate|i:1533781242;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('ir470imkc7eu7cnmbk9kotmd16cmfb3c','127.0.0.1',1533779660,'__ci_last_regenerate|i:1533779660;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('vcfmu4d3i7fg6f5orind7dc9gmipt3jb','127.0.0.1',1533781242,'__ci_last_regenerate|i:1533781242;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('fj0s8tavf4gg2iguc4a4s2lov6nqufc8','127.0.0.1',1533866389,'__ci_last_regenerate|i:1533866389;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('4ut44gt0n1ujiubr2s2jcr8mrm1nlv8m','127.0.0.1',1533866792,'__ci_last_regenerate|i:1533866792;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('0pf36pucroqsd7toj4lnjk0n6n53d1fb','127.0.0.1',1533867195,'__ci_last_regenerate|i:1533867195;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('6hjgp5uhkmf9fn0j4l03piuj4tq3hoj3','127.0.0.1',1533868898,'__ci_last_regenerate|i:1533868898;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('rp6lhnu5pr7m9qfjk3h0uok56s5g4g71','127.0.0.1',1533869205,'__ci_last_regenerate|i:1533869205;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('rvg5i9jgcmp52kssktr4p36u4fe6qv6n','127.0.0.1',1533869573,'__ci_last_regenerate|i:1533869573;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('8m8vn728f64ikm3v8o7mrnuog1o98q7e','127.0.0.1',1533869935,'__ci_last_regenerate|i:1533869935;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('5tc8gf484qvporesltf7hdorsf341q8l','127.0.0.1',1533870322,'__ci_last_regenerate|i:1533870322;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('m7d08h8vij2j8tuskduknhhgkr6bvbk1','127.0.0.1',1533870641,'__ci_last_regenerate|i:1533870641;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('5h5mibm6bvop90qedouuvnp3fgdac7mu','127.0.0.1',1533870951,'__ci_last_regenerate|i:1533870951;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('8q3pm82psc2f28uibjvof8kc6r93getb','127.0.0.1',1533871048,'__ci_last_regenerate|i:1533870951;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('marfe7a2ttiv40lgo1t5rc91cgcs8osg','127.0.0.1',1534042820,'__ci_last_regenerate|i:1534042820;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('dm0ecbl4ait78otje46cpdl4fodhlj1f','127.0.0.1',1534043608,'__ci_last_regenerate|i:1534043608;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('6o2fhassr2ntc3421if9mst8nvfh742k','127.0.0.1',1534043966,'__ci_last_regenerate|i:1534043966;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('7lv888gpvfhnlenql5i9d82ldg13uqev','127.0.0.1',1534044330,'__ci_last_regenerate|i:1534044330;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('30kj50vjikssi1rp1iol4rldlinb7qg6','127.0.0.1',1534044737,'__ci_last_regenerate|i:1534044737;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('njo2enti1o2c43ivi0lampr838jtbkaq','127.0.0.1',1534045110,'__ci_last_regenerate|i:1534045110;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('4h2gheush8fhguov7r0p24tgddqanflr','127.0.0.1',1534045249,'__ci_last_regenerate|i:1534045110;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('ssjhr9lksmdhbg5locip0rngr2m58ifi','127.0.0.1',1534135268,'__ci_last_regenerate|i:1534135268;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('qo5tc6jiq69mjem94oqm1bsoosgtvmrl','127.0.0.1',1534135569,'__ci_last_regenerate|i:1534135569;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('h03e5do52c71q52s4t15p4vup1flb1t1','127.0.0.1',1534135946,'__ci_last_regenerate|i:1534135946;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('mijldh9v50juhkpdf6uahaoi0ist0rbp','127.0.0.1',1534136427,'__ci_last_regenerate|i:1534136427;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('9rp4i2pfvue604sct76ocqlun87i4uvh','127.0.0.1',1534137040,'__ci_last_regenerate|i:1534137040;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('6m5ld4dun7r41guqg7h3dffvuggpgi9m','127.0.0.1',1534139563,'__ci_last_regenerate|i:1534139563;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('1lurq8gnpqj0sfdtrbrkrmioh07f83pm','127.0.0.1',1534142342,'__ci_last_regenerate|i:1534142342;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('cn1tu73em6fc66fe3pvamtoq4m9qs5vd','127.0.0.1',1534142342,'__ci_last_regenerate|i:1534142342;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('np7o2fi508n8rbaccnb8dodt3ec6auss','127.0.0.1',1534761889,'__ci_last_regenerate|i:1534761889;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('plhqe6jb84k7sr6el6h67oi6ctvvag2q','127.0.0.1',1534762072,'__ci_last_regenerate|i:1534761889;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('iogpbacqu3s9skc35e0fflffcks26ve5','127.0.0.1',1535429985,'__ci_last_regenerate|i:1535429985;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('op2ht9h58ns5mco0kcv9kh2kg68m5u4h','127.0.0.1',1535430729,'__ci_last_regenerate|i:1535430729;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('in0i8l0pt9bckpa73p0b0bdfa7996c25','127.0.0.1',1535431032,'__ci_last_regenerate|i:1535431032;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('h329o8m8f6a1unch0caq2vo76io1duhf','127.0.0.1',1535431791,'__ci_last_regenerate|i:1535431791;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('d216bf8lffpnhaebhos4to9fiel6tlfh','127.0.0.1',1535432316,'__ci_last_regenerate|i:1535432316;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('9ltv9hl1sk4i3v9knnj3dj5b14694k86','127.0.0.1',1535433175,'__ci_last_regenerate|i:1535433175;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('fch625lb77kkkg0sjiu9rvj7g6ssdqql','127.0.0.1',1535433512,'__ci_last_regenerate|i:1535433512;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('01l8oqkjqag0kudepc0a2goiirfguci3','127.0.0.1',1535433913,'__ci_last_regenerate|i:1535433913;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('lujuomqb357d0ar9nnmgaj6skjj3sgh0','127.0.0.1',1535434261,'__ci_last_regenerate|i:1535434261;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('vnc74e26ogsoeokc85d073oq9jit09tb','127.0.0.1',1535435411,'__ci_last_regenerate|i:1535435411;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('153hmismn2fi3ffsmuatb3qno8qnvvke','127.0.0.1',1535435718,'__ci_last_regenerate|i:1535435718;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('vb98cr5lurmeo4c9mekjshfl541lfuc3','127.0.0.1',1535436028,'__ci_last_regenerate|i:1535436028;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('9cjvnpsm203a46clve045fcm4u7lgn5k','127.0.0.1',1535436359,'__ci_last_regenerate|i:1535436359;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('akjqd1q7s4rr32rp5711a1t65nt0vvrg','127.0.0.1',1535436702,'__ci_last_regenerate|i:1535436702;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('6hfg9sb4r80meg3mbb4e2e1dk1b49q6s','127.0.0.1',1535437003,'__ci_last_regenerate|i:1535437003;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('97m76cp1r87cgu81li9tttqpg6vbnekl','127.0.0.1',1535438135,'__ci_last_regenerate|i:1535438135;id|s:1:\"2\";username|s:7:\"manager\";full_name|s:14:\"tes, est  test\";site_id|s:1:\"6\";role_id|s:1:\"2\";'),('v419vs2134a29fh97j9f9a9udvuphrbv','127.0.0.1',1535438663,'__ci_last_regenerate|i:1535438663;id|s:1:\"3\";username|s:7:\"officer\";full_name|s:24:\"Geron, Bernard  Castillo\";site_id|s:1:\"6\";role_id|s:1:\"3\";'),('39n6mvcm5t4b2jpe0hb098f5uoh9irnp','127.0.0.1',1535438969,'__ci_last_regenerate|i:1535438969;id|s:1:\"3\";username|s:7:\"officer\";full_name|s:24:\"Geron, Bernard  Castillo\";site_id|s:1:\"6\";role_id|s:1:\"3\";'),('3l6durerirmi9a9f8jjk5ln9po1p2t6a','127.0.0.1',1535439350,'__ci_last_regenerate|i:1535439350;id|s:1:\"3\";username|s:7:\"officer\";full_name|s:24:\"Geron, Bernard  Castillo\";site_id|s:1:\"6\";role_id|s:1:\"3\";'),('1ccipucf0ii1vp8c9t9s6ahd0hqpofgk','127.0.0.1',1535442569,'__ci_last_regenerate|i:1535442569;id|s:1:\"3\";username|s:7:\"officer\";full_name|s:24:\"Geron, Bernard  Castillo\";site_id|s:1:\"6\";role_id|s:1:\"3\";'),('cf2gmq2pkhiau3ifg36102rgql4773p2','127.0.0.1',1535444061,'__ci_last_regenerate|i:1535444061;id|s:1:\"3\";username|s:7:\"officer\";full_name|s:24:\"Geron, Bernard  Castillo\";site_id|s:1:\"6\";role_id|s:1:\"3\";'),('ne111n0b9mf6qlef65rham2kcjb6qboh','127.0.0.1',1535446123,'__ci_last_regenerate|i:1535446123;id|s:1:\"3\";username|s:7:\"officer\";full_name|s:24:\"Geron, Bernard  Castillo\";site_id|s:1:\"6\";role_id|s:1:\"3\";'),('e25pbp07npkgt2ra0nq10ln79km3gfn8','127.0.0.1',1535446582,'__ci_last_regenerate|i:1535446582;id|s:1:\"3\";username|s:7:\"officer\";full_name|s:24:\"Geron, Bernard  Castillo\";site_id|s:1:\"6\";role_id|s:1:\"3\";'),('mi8fk0sg1mvfqrelpa1v8il36q6e5f86','127.0.0.1',1535446958,'__ci_last_regenerate|i:1535446958;id|s:1:\"3\";username|s:7:\"officer\";full_name|s:24:\"Geron, Bernard  Castillo\";site_id|s:1:\"6\";role_id|s:1:\"3\";'),('tn0hnb86jdk2r45c542q0n95sg0bem5d','127.0.0.1',1535447284,'__ci_last_regenerate|i:1535447284;id|s:1:\"3\";username|s:7:\"officer\";full_name|s:24:\"Geron, Bernard  Castillo\";site_id|s:1:\"6\";role_id|s:1:\"3\";'),('vtd374n7ncue9a6vvr2k3ku15i6pbgkc','127.0.0.1',1535447285,'__ci_last_regenerate|i:1535447284;id|s:1:\"3\";username|s:7:\"officer\";full_name|s:24:\"Geron, Bernard  Castillo\";site_id|s:1:\"6\";role_id|s:1:\"3\";');
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
  `id_number` varchar(20) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
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
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_code` varchar(255) NOT NULL,
  `item_description` varchar(255) NOT NULL,
  `item_specification` varchar(255) NOT NULL,
  `item_specification2` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `umes` varchar(20) NOT NULL,
  `created_by_id` int(4) NOT NULL,
  `date_created` datetime(6) NOT NULL,
  `edited_by_id` int(4) NOT NULL,
  `date_edited` datetime(6) DEFAULT NULL,
  `product_type_id` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `items`
--

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` VALUES (4,'CM.00001','NAIL, COMMON WIRE','2 INC LONG','3.0MM DIA.','CWN','KG',1,'2018-08-07 00:00:00.000000',1,'2018-08-07 00:00:00.000000',1),(5,'CM.00002','NAIL, COMMON WIRE','3 INC LONG','3.5MM DIA.','CWN','KG',1,'2018-08-07 00:00:00.000000',2,'2018-08-20 00:00:00.000000',1),(6,'CM.00003','AGGREGATES; FINE WASHED','S-1','ORDINARY SAND','N/A','M3',2,'2018-08-28 00:00:00.000000',2,'2018-08-28 00:00:00.000000',1);
/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_type`
--

DROP TABLE IF EXISTS `product_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_type_code` varchar(255) NOT NULL,
  `product_type_description` varchar(255) NOT NULL,
  `created_by_id` int(4) NOT NULL,
  `date_created` datetime(6) DEFAULT NULL,
  `edite_by_id` int(4) DEFAULT NULL,
  `date_edited` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_type`
--

LOCK TABLES `product_type` WRITE;
/*!40000 ALTER TABLE `product_type` DISABLE KEYS */;
INSERT INTO `product_type` VALUES (1,'CONSMAT','Construction Materials',0,NULL,NULL,NULL),(2,'EQUIPT','Equipments',0,NULL,NULL,NULL),(3,'ACCESS','Parts and Accessories',0,NULL,NULL,NULL),(4,'WO','Work Order',0,NULL,NULL,NULL);
/*!40000 ALTER TABLE `product_type` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'ADMINISTRATOR'),(2,'MANAGER'),(3,'OFFICER'),(4,'EMPLOYEE'),(5,'PURCHASER');
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
INSERT INTO `sites` VALUES (1,'MAIN','Main Office',1,'2018-08-01 00:00:00.000000',NULL,NULL,'on-going');
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'root','*0C23F19DB8283F44BBDD6C3DD88EAA0A7F3A3451','Geron','Bernard','Castillo',1,1,'active',1,'2018-08-01 00:00:00.000000','2018-08-07 00:00:00.000000',1);
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

-- Dump completed on 2018-08-28 17:22:19
