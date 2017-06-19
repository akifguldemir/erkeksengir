# Host: localhost  (Version 5.5.5-10.1.21-MariaDB)
# Date: 2017-02-13 23:01:11
# Generator: MySQL-Front 6.0  (Build 1.8)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "admin_uye"
#

DROP TABLE IF EXISTS `admin_uye`;
CREATE TABLE `admin_uye` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `adsoy` varchar(50) COLLATE utf32_turkish_ci DEFAULT NULL,
  `email` varchar(75) COLLATE utf32_turkish_ci DEFAULT NULL,
  `telefon` varchar(255) COLLATE utf32_turkish_ci DEFAULT NULL,
  `sifre` varchar(255) COLLATE utf32_turkish_ci DEFAULT NULL,
  `yetki` int(11) DEFAULT NULL,
  `img` varchar(255) COLLATE utf32_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci ROW_FORMAT=COMPACT;

#
# Data for table "admin_uye"
#

INSERT INTO `admin_uye` VALUES (1,'Akif','akifguldemir@gmail.com','123','190500',1,'akif.jpg');

#
# Structure for table "anasayfayorumlar"
#

DROP TABLE IF EXISTS `anasayfayorumlar`;
CREATE TABLE `anasayfayorumlar` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `haberId` varchar(255) DEFAULT NULL,
  `yorum` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `uye_ID` varchar(255) DEFAULT NULL,
  `uye_adsoy` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `yapanimg` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "anasayfayorumlar"
#

INSERT INTO `anasayfayorumlar` VALUES (36,'2016-11-21 03:40:42','59','çok kötü','12','Akif',NULL),(37,'2016-11-21 03:41:33','59','çok kötüasas','12','Akif',NULL);

#
# Structure for table "arkadaslik"
#

DROP TABLE IF EXISTS `arkadaslik`;
CREATE TABLE `arkadaslik` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `kimId` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kimiId` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `kimad` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kimiad` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kimiimg` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kimimg` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

#
# Data for table "arkadaslik"
#

INSERT INTO `arkadaslik` VALUES (24,'3','4','2017-01-04 21:02:29','hilal','Akif Güldemir','ako1.jpg','hilal13.jpg'),(26,'7','4','2017-01-04 21:02:26','Adnan Güldemir','Akif Güldemir','ako1.jpg','babam.jpg'),(27,'4','7','2016-12-29 13:46:40','Akif Güldemir','Adnan Güldemir','babam.jpg','ako1.jpg'),(28,'4','3','2017-01-04 20:07:22','Akif Güldemir','hilal','hilal13.jpg','ako1.jpg');

#
# Structure for table "basketbol"
#

DROP TABLE IF EXISTS `basketbol`;
CREATE TABLE `basketbol` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `keywords` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `text` longtext CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT '',
  `aciklama` varchar(88) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "basketbol"
#

INSERT INTO `basketbol` VALUES (7,'spors','sporasd','','Pick-a-Pizza-Logo-of-your-Own.jpg',NULL),(8,'a','s','<p>efsry</p>\r\n','650x344-istanbulda-yagis-trafik-felc-14766848509141.jpg',NULL),(9,'a','s','<p>ds</p>\r\n','',NULL);

#
# Structure for table "bizeyazin"
#

DROP TABLE IF EXISTS `bizeyazin`;
CREATE TABLE `bizeyazin` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `uye_ID` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `uye_adsoy` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `mesaj` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

#
# Data for table "bizeyazin"
#

INSERT INTO `bizeyazin` VALUES (1,'3','hilal','hilal@gmail.com','asd'),(2,'3','hilal','hilal@gmail.com','asd');

#
# Structure for table "cekid"
#

DROP TABLE IF EXISTS `cekid`;
CREATE TABLE `cekid` (
  `Id` int(11) NOT NULL DEFAULT '0',
  `cekId` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `uyeId` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

#
# Data for table "cekid"
#

INSERT INTO `cekid` VALUES (4,'7','4');

#
# Structure for table "diger"
#

DROP TABLE IF EXISTS `diger`;
CREATE TABLE `diger` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `keywords` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `text` longtext CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT '',
  `aciklama` varchar(88) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "diger"
#

INSERT INTO `diger` VALUES (7,'spors','sporasd','','Pick-a-Pizza-Logo-of-your-Own.jpg',NULL),(8,'a','s','<p>efsry</p>\r\n','650x344-istanbulda-yagis-trafik-felc-14766848509141.jpg',NULL),(9,'asd','asd','<p>asd</p>\r\n','',NULL);

#
# Structure for table "fbahis"
#

DROP TABLE IF EXISTS `fbahis`;
CREATE TABLE `fbahis` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `acanuyeadsoy` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `acanuyeId` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=COMPACT;

#
# Data for table "fbahis"
#

INSERT INTO `fbahis` VALUES (1,'bahis','Akif Güldemir','4','2016-12-16 17:12:10');

#
# Structure for table "fbahisyorum"
#

DROP TABLE IF EXISTS `fbahisyorum`;
CREATE TABLE `fbahisyorum` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `konuId` varchar(255) DEFAULT NULL,
  `yorum` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `uye_ID` varchar(255) DEFAULT NULL,
  `uye_adsoy` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `yapanimg` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "fbahisyorum"
#

INSERT INTO `fbahisyorum` VALUES (1,'2016-12-17 04:07:45','1','bah','4','Akif Güldemir','ako1.jpg',NULL),(2,'2016-12-17 04:07:51','1','','4','Akif Güldemir','ako1.jpg','goz1.jpg');

#
# Structure for table "fdunya"
#

DROP TABLE IF EXISTS `fdunya`;
CREATE TABLE `fdunya` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `acanuyeadsoy` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `acanuyeId` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=COMPACT;

#
# Data for table "fdunya"
#

INSERT INTO `fdunya` VALUES (1,'dünya','Akif Güldemir','4','2016-12-16 17:13:50');

#
# Structure for table "fdunyayorum"
#

DROP TABLE IF EXISTS `fdunyayorum`;
CREATE TABLE `fdunyayorum` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `konuId` varchar(255) DEFAULT NULL,
  `yorum` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `uye_ID` varchar(255) DEFAULT NULL,
  `uye_adsoy` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `yapanimg` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "fdunyayorum"
#

INSERT INTO `fdunyayorum` VALUES (1,'2016-12-17 04:17:47','1','1','4','Akif Güldemir','ako1.jpg',NULL),(2,'2016-12-17 04:17:55','1','f','4','Akif Güldemir','ako1.jpg','jean1.jpg');

#
# Structure for table "fekonomi"
#

DROP TABLE IF EXISTS `fekonomi`;
CREATE TABLE `fekonomi` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `acanuyeadsoy` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `acanuyeId` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=COMPACT;

#
# Data for table "fekonomi"
#

INSERT INTO `fekonomi` VALUES (1,'eko','Akif Güldemir','4','2016-12-16 17:12:59');

#
# Structure for table "fekonomiyorum"
#

DROP TABLE IF EXISTS `fekonomiyorum`;
CREATE TABLE `fekonomiyorum` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `konuId` varchar(255) DEFAULT NULL,
  `yorum` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `uye_ID` varchar(255) DEFAULT NULL,
  `uye_adsoy` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `yapanimg` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "fekonomiyorum"
#

INSERT INTO `fekonomiyorum` VALUES (1,'2016-12-17 04:14:51','1','123','4','Akif Güldemir','ako1.jpg',NULL),(2,'2016-12-17 04:14:59','1','f','4','Akif Güldemir','ako1.jpg','fun1.jpg');

#
# Structure for table "fgezi"
#

DROP TABLE IF EXISTS `fgezi`;
CREATE TABLE `fgezi` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `acanuyeadsoy` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `acanuyeId` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

#
# Data for table "fgezi"
#

INSERT INTO `fgezi` VALUES (13,'asd','Akif Güldemir','4','2016-12-16 16:41:06'),(14,'sss','Akif Güldemir','4','2016-12-16 16:42:25'),(15,'deneme123333','Akif Güldemir','4','2016-12-21 11:50:21'),(16,'fgeziyorum','Akif Güldemir','4','2017-01-12 22:52:19');

#
# Structure for table "fgeziyorum"
#

DROP TABLE IF EXISTS `fgeziyorum`;
CREATE TABLE `fgeziyorum` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `konuId` varchar(255) DEFAULT NULL,
  `yorum` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `uye_ID` varchar(255) DEFAULT NULL,
  `uye_adsoy` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `yapanimg` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "fgeziyorum"
#

INSERT INTO `fgeziyorum` VALUES (11,'2016-12-17 03:46:16','13','fed','4','Akif Güldemir','ako1.jpg','fed3.jpg'),(12,'2016-12-17 03:52:32','13','Mor ve ötesi','4','Akif Güldemir','ako1.jpg','mor1.jpg'),(15,'2017-01-12 22:43:54','13','deneme','4','Akif Güldemir','ako1.jpg',NULL),(19,'2017-01-12 22:50:50','13','asd','4','Akif Güldemir','ako1.jpg','1173853_10200991258796747_945580081_n13.jpg'),(28,'2017-01-12 23:02:47','13','adsda','4','Akif Güldemir','ako1.jpg',NULL),(29,'2017-01-12 23:03:55','13','123','4','Akif Güldemir','ako1.jpg','1173853_10200991258796747_945580081_n14.jpg'),(31,'2017-01-12 23:31:09','13','konuId','4','Akif Güldemir','ako1.jpg',NULL),(41,'2017-01-13 00:15:35','16','123','4','Akif Güldemir','ako1.jpg',NULL),(42,'2017-01-13 01:01:17',NULL,'asd','4','Akif Güldemir','ako1.jpg','1173853_10200991258796747_945580081_n15.jpg');

#
# Structure for table "fgundem"
#

DROP TABLE IF EXISTS `fgundem`;
CREATE TABLE `fgundem` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `acanuyeadsoy` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `acanuyeId` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=COMPACT;

#
# Data for table "fgundem"
#

INSERT INTO `fgundem` VALUES (1,'gudem','Akif Güldemir','4','2016-12-16 17:11:13'),(2,'123','Akif Güldemir','4','2017-01-13 01:09:04'),(3,'hilal actı','hilal','3','2017-01-13 02:02:28');

#
# Structure for table "fgundemyorum"
#

DROP TABLE IF EXISTS `fgundemyorum`;
CREATE TABLE `fgundemyorum` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `konuId` varchar(255) DEFAULT NULL,
  `yorum` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `uye_ID` varchar(255) DEFAULT NULL,
  `uye_adsoy` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `yapanimg` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "fgundemyorum"
#

INSERT INTO `fgundemyorum` VALUES (1,'2016-12-17 04:20:52','1','gg','4','Akif Güldemir','ako1.jpg',NULL),(2,'2016-12-17 04:21:31','1','e','4','Akif Güldemir','ako1.jpg','gok1.jpg'),(3,'2016-12-17 04:26:33','1','','4','Akif Güldemir','ako1.jpg','fet2.jpg'),(4,'2016-12-17 04:26:38','1','qwe','4','Akif Güldemir','ako1.jpg',NULL),(5,'2017-01-13 01:09:08','2','123','4','Akif Güldemir','ako1.jpg',NULL),(6,'2017-01-13 01:09:14','2','123','4','Akif Güldemir','ako1.jpg','1173853_10200991258796747_945580081_n19.jpg');

#
# Structure for table "fitness"
#

DROP TABLE IF EXISTS `fitness`;
CREATE TABLE `fitness` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `keywords` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `text` longtext CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT '',
  `aciklama` varchar(88) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "fitness"
#


#
# Structure for table "fkitap"
#

DROP TABLE IF EXISTS `fkitap`;
CREATE TABLE `fkitap` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `acanuyeadsoy` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `acanuyeId` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=COMPACT;

#
# Data for table "fkitap"
#

INSERT INTO `fkitap` VALUES (1,'kitap','Akif Güldemir','4','2016-12-16 17:15:46');

#
# Structure for table "fkitapyorum"
#

DROP TABLE IF EXISTS `fkitapyorum`;
CREATE TABLE `fkitapyorum` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `konuId` varchar(255) DEFAULT NULL,
  `yorum` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `uye_ID` varchar(255) DEFAULT NULL,
  `uye_adsoy` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `yapanimg` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "fkitapyorum"
#

INSERT INTO `fkitapyorum` VALUES (1,'2016-12-17 04:30:49','1','w','4','Akif Güldemir','ako1.jpg',NULL),(2,'2016-12-17 04:30:56','1','a','4','Akif Güldemir','ako1.jpg','camaro7.jpg'),(3,'2017-01-13 01:32:22','1','123','4','Akif Güldemir','ako1.jpg',NULL),(4,'2017-01-13 01:32:26','1','321','4','Akif Güldemir','ako1.jpg','1173853_10200991258796747_945580081_n21.jpg');

#
# Structure for table "fotomobil"
#

DROP TABLE IF EXISTS `fotomobil`;
CREATE TABLE `fotomobil` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `acanuyeadsoy` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `acanuyeId` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=COMPACT;

#
# Data for table "fotomobil"
#

INSERT INTO `fotomobil` VALUES (1,'otomobil','Akif Güldemir','4','2016-12-16 17:16:21');

#
# Structure for table "fotomobilyorum"
#

DROP TABLE IF EXISTS `fotomobilyorum`;
CREATE TABLE `fotomobilyorum` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `konuId` varchar(255) DEFAULT NULL,
  `yorum` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `uye_ID` varchar(255) DEFAULT NULL,
  `uye_adsoy` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `yapanimg` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "fotomobilyorum"
#

INSERT INTO `fotomobilyorum` VALUES (1,'2016-12-17 04:03:46','1','de','4','Akif Güldemir','ako1.jpg',NULL),(2,'2016-12-17 04:03:53','1','fet','4','Akif Güldemir','ako1.jpg','fet1.jpg');

#
# Structure for table "foyun"
#

DROP TABLE IF EXISTS `foyun`;
CREATE TABLE `foyun` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `acanuyeadsoy` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `acanuyeId` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=COMPACT;

#
# Data for table "foyun"
#

INSERT INTO `foyun` VALUES (1,'oyun','Akif Güldemir','4','2016-12-16 17:16:53'),(2,'GTA 6 cıktı','Akif Güldemir','4','2017-01-08 00:13:16');

#
# Structure for table "foyunyorum"
#

DROP TABLE IF EXISTS `foyunyorum`;
CREATE TABLE `foyunyorum` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `konuId` varchar(255) DEFAULT NULL,
  `yorum` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `uye_ID` varchar(255) DEFAULT NULL,
  `uye_adsoy` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `yapanimg` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "foyunyorum"
#

INSERT INTO `foyunyorum` VALUES (1,'2016-12-17 04:36:33','1','a','4','Akif Güldemir','ako1.jpg',NULL),(2,'2016-12-17 04:36:39','1','','4','Akif Güldemir','ako1.jpg','fun2.jpg'),(3,'2017-01-08 00:13:30','2','negtası','4','Akif Güldemir','ako1.jpg',NULL);

#
# Structure for table "fsaglik"
#

DROP TABLE IF EXISTS `fsaglik`;
CREATE TABLE `fsaglik` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `acanuyeadsoy` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `acanuyeId` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=COMPACT;

#
# Data for table "fsaglik"
#

INSERT INTO `fsaglik` VALUES (1,'saglik','Akif Güldemir','4','2016-12-16 17:15:01'),(2,'hilal actı','hilal','3','2016-12-24 00:30:17');

#
# Structure for table "fsaglikyorum"
#

DROP TABLE IF EXISTS `fsaglikyorum`;
CREATE TABLE `fsaglikyorum` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `konuId` varchar(255) DEFAULT NULL,
  `yorum` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `uye_ID` varchar(255) DEFAULT NULL,
  `uye_adsoy` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `yapanimg` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "fsaglikyorum"
#

INSERT INTO `fsaglikyorum` VALUES (1,'2016-12-24 00:40:29','1','akif yorumladı','4','Akif Güldemir','ako1.jpg',NULL),(2,'2016-12-24 00:40:46','1','hilal yorumladı','3','hilal','hilal13.jpg',NULL);

#
# Structure for table "fsinema"
#

DROP TABLE IF EXISTS `fsinema`;
CREATE TABLE `fsinema` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `acanuyeadsoy` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `acanuyeId` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=COMPACT;

#
# Data for table "fsinema"
#

INSERT INTO `fsinema` VALUES (1,'sinema','Akif Güldemir','4','2016-12-16 17:18:54');

#
# Structure for table "fsinemayorum"
#

DROP TABLE IF EXISTS `fsinemayorum`;
CREATE TABLE `fsinemayorum` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `konuId` varchar(255) DEFAULT NULL,
  `yorum` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `uye_ID` varchar(255) DEFAULT NULL,
  `uye_adsoy` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `yapanimg` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "fsinemayorum"
#

INSERT INTO `fsinemayorum` VALUES (1,'2016-12-17 04:41:25','1','a','4','Akif Güldemir','ako1.jpg',NULL),(2,'2016-12-17 04:41:30','1','','4','Akif Güldemir','ako1.jpg','fun3.jpg');

#
# Structure for table "fsiyaset"
#

DROP TABLE IF EXISTS `fsiyaset`;
CREATE TABLE `fsiyaset` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `acanuyeadsoy` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `acanuyeId` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=COMPACT;

#
# Data for table "fsiyaset"
#

INSERT INTO `fsiyaset` VALUES (1,'siyaset','Akif Güldemir','4','2016-12-16 17:18:19');

#
# Structure for table "fsiyasetyorum"
#

DROP TABLE IF EXISTS `fsiyasetyorum`;
CREATE TABLE `fsiyasetyorum` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `konuId` varchar(255) DEFAULT NULL,
  `yorum` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `uye_ID` varchar(255) DEFAULT NULL,
  `uye_adsoy` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `yapanimg` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "fsiyasetyorum"
#

INSERT INTO `fsiyasetyorum` VALUES (1,'2016-12-17 04:44:05','1','','4','Akif Güldemir','ako1.jpg','gok2.jpg'),(2,'2016-12-17 04:44:09','1','s','4','Akif Güldemir','ako1.jpg',NULL),(3,'2017-01-13 01:11:17','1','123','4','Akif Güldemir','ako1.jpg',NULL),(4,'2017-01-13 01:11:22','1','123','4','Akif Güldemir','ako1.jpg','1173853_10200991258796747_945580081_n20.jpg');

#
# Structure for table "fspor"
#

DROP TABLE IF EXISTS `fspor`;
CREATE TABLE `fspor` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `acanuyeadsoy` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `acanuyeId` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=COMPACT;

#
# Data for table "fspor"
#

INSERT INTO `fspor` VALUES (13,'sss','Akif Güldemir','4','2016-12-16 16:43:23'),(14,'spor','Akif Güldemir','4','2016-12-16 17:19:28'),(15,'spor baslıgı','Akif Güldemir','4','2016-12-17 03:53:16');

#
# Structure for table "fsporyorum"
#

DROP TABLE IF EXISTS `fsporyorum`;
CREATE TABLE `fsporyorum` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `konuId` varchar(255) DEFAULT NULL,
  `yorum` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `uye_ID` varchar(255) DEFAULT NULL,
  `uye_adsoy` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `yapanimg` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "fsporyorum"
#

INSERT INTO `fsporyorum` VALUES (1,'2016-12-17 04:46:09','13','qeq','4','Akif Güldemir','ako1.jpg',NULL),(2,'2016-12-17 04:46:16','13','','4','Akif Güldemir','ako1.jpg','gok3.jpg'),(3,'2017-01-13 01:03:32','13','asd','4','Akif Güldemir','ako1.jpg',NULL),(4,'2017-01-13 01:03:40','13','qwe','4','Akif Güldemir','ako1.jpg','1173853_10200991258796747_945580081_n17.jpg');

#
# Structure for table "fteknoloji"
#

DROP TABLE IF EXISTS `fteknoloji`;
CREATE TABLE `fteknoloji` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `acanuyeadsoy` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `acanuyeId` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=COMPACT;

#
# Data for table "fteknoloji"
#

INSERT INTO `fteknoloji` VALUES (13,'sss','Akif Güldemir','4','2016-12-16 16:43:23'),(14,'tt','Akif Güldemir','4','2016-12-16 16:47:06'),(15,'teknoloji','Akif Güldemir','4','2016-12-16 17:17:44'),(16,'tek','Akif Güldemir','4','2016-12-16 17:19:52'),(17,'yen telefon samsung','Akif Güldemir','4','2017-01-04 18:14:08');

#
# Structure for table "fteknolojiyorum"
#

DROP TABLE IF EXISTS `fteknolojiyorum`;
CREATE TABLE `fteknolojiyorum` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `konuId` varchar(255) DEFAULT NULL,
  `yorum` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `uye_ID` varchar(255) DEFAULT NULL,
  `uye_adsoy` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `yapanimg` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "fteknolojiyorum"
#

INSERT INTO `fteknolojiyorum` VALUES (1,'2016-12-17 04:48:59','13','tt','4','Akif Güldemir','ako1.jpg','altin1.jpg'),(2,'2016-12-17 04:49:03','13','ee','4','Akif Güldemir','ako1.jpg',NULL),(3,'2016-12-17 04:49:16','13','twet','4','Akif Güldemir','ako1.jpg',NULL),(4,'2016-12-17 04:49:23','14','wte','4','Akif Güldemir','ako1.jpg','gok4.jpg'),(5,'2017-01-04 18:14:27','17','cok guzel','4','Akif Güldemir','ako1.jpg','1173853_10200991258796747_945580081_n.jpg'),(6,'2017-01-04 18:14:41','17','bu nası ltelefon','4','Akif Güldemir','ako1.jpg',NULL),(7,'2017-01-04 18:16:11','17','iyi telefon','7','Adnan Güldemir','babam.jpg',NULL),(8,'2017-01-12 22:40:58','14','sdasd','4','Akif Güldemir','ako1.jpg',NULL),(9,'2017-01-13 01:05:16','17','qwe','4','Akif Güldemir','ako1.jpg',NULL),(10,'2017-01-13 01:06:11','17','ewq','4','Akif Güldemir','ako1.jpg',NULL),(11,'2017-01-13 01:06:18','17','eq','4','Akif Güldemir','ako1.jpg','1173853_10200991258796747_945580081_n18.jpg');

#
# Structure for table "ftv"
#

DROP TABLE IF EXISTS `ftv`;
CREATE TABLE `ftv` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `acanuyeadsoy` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `acanuyeId` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=COMPACT;

#
# Data for table "ftv"
#

INSERT INTO `ftv` VALUES (1,'tv','Akif Güldemir','4','2016-12-16 17:20:58'),(2,'hilal ekledi','hilal','3','2017-01-10 11:24:28');

#
# Structure for table "ftvyorum"
#

DROP TABLE IF EXISTS `ftvyorum`;
CREATE TABLE `ftvyorum` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `konuId` varchar(255) DEFAULT NULL,
  `yorum` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `uye_ID` varchar(255) DEFAULT NULL,
  `uye_adsoy` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `yapanimg` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "ftvyorum"
#

INSERT INTO `ftvyorum` VALUES (1,'2016-12-17 04:51:20','1','asd','4','Akif Güldemir','ako1.jpg','goz2.jpg'),(2,'2016-12-17 04:51:26','1','asda','4','Akif Güldemir','ako1.jpg',NULL),(3,'2017-01-10 11:24:40','2','hilal','3','hilal','hilal13.jpg',NULL),(4,'2017-01-10 11:24:48','2','as','3','hilal','hilal13.jpg','1173853_10200991258796747_945580081_n12.jpg');

#
# Structure for table "futbol"
#

DROP TABLE IF EXISTS `futbol`;
CREATE TABLE `futbol` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `keywords` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `text` longtext CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT '',
  `aciklama` varchar(88) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "futbol"
#

INSERT INTO `futbol` VALUES (7,'spors','sporasd','','Pick-a-Pizza-Logo-of-your-Own.jpg',NULL),(8,'aaaaaaaa','','','',NULL);

#
# Structure for table "fyatirim"
#

DROP TABLE IF EXISTS `fyatirim`;
CREATE TABLE `fyatirim` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `acanuyeadsoy` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `acanuyeId` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=COMPACT;

#
# Data for table "fyatirim"
#

INSERT INTO `fyatirim` VALUES (1,'yatirim','Akif Güldemir','4','2016-12-16 17:20:23');

#
# Structure for table "fyatirimyorum"
#

DROP TABLE IF EXISTS `fyatirimyorum`;
CREATE TABLE `fyatirimyorum` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `konuId` varchar(255) DEFAULT NULL,
  `yorum` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `uye_ID` varchar(255) DEFAULT NULL,
  `uye_adsoy` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `yapanimg` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "fyatirimyorum"
#

INSERT INTO `fyatirimyorum` VALUES (1,'2016-12-17 04:34:09','1','a','4','Akif Güldemir','ako1.jpg',NULL),(2,'2016-12-17 04:34:14','1','','4','Akif Güldemir','ako1.jpg','fet3.jpg');

#
# Structure for table "galeri"
#

DROP TABLE IF EXISTS `galeri`;
CREATE TABLE `galeri` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `uye_ID` varchar(255) DEFAULT NULL,
  `adsoy` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `yorum` varchar(20) DEFAULT NULL,
  `sahipimg` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "galeri"
#

INSERT INTO `galeri` VALUES (12,'2016-12-06 02:40:25','3','hilal','27532.jpg','evet',NULL),(14,'2016-12-24 01:11:55','4','Akif Güldemir','1958242_836355563136221_3488218557056667401_n1.jpg',NULL,'ako1.jpg'),(15,'2017-01-08 21:59:53','4','Akif Güldemir','mont3.jpg',NULL,'ako1.jpg'),(16,'2017-01-18 00:43:30','3','hilal','mont3.jpg',NULL,NULL),(17,'2017-01-18 00:43:42','3','hilal','akif37.jpg',NULL,NULL),(18,'2017-01-18 00:44:21','3','hilal','akif37.jpg',NULL,NULL),(19,'2017-01-18 00:44:27','3','hilal','akif37.jpg',NULL,NULL),(20,'2017-01-18 03:10:47','3','hilal','1173853_10200991258796747_945580081_n10.jpg',NULL,NULL);

#
# Structure for table "galeriyorumlar"
#

DROP TABLE IF EXISTS `galeriyorumlar`;
CREATE TABLE `galeriyorumlar` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `fotoId` varchar(255) DEFAULT NULL,
  `yorum` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `uye_ID` varchar(255) DEFAULT NULL,
  `uye_adsoy` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `yapanimg` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "galeriyorumlar"
#

INSERT INTO `galeriyorumlar` VALUES (48,'2016-12-07 04:05:29','12','sdf','3','hilal','hilal13.jpg'),(50,'2016-12-07 04:14:10','13','yorumdeneme','4','Akif Güldemir','akif38.jpg'),(51,'2016-12-07 12:49:11','13','qwe','4','Akif Güldemir','akif38.jpg'),(52,'2016-12-13 20:20:13','13','asd','4','Akif Güldemir','ako1.jpg');

#
# Structure for table "giris"
#

DROP TABLE IF EXISTS `giris`;
CREATE TABLE `giris` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yonetici` smallint(6) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `tarayici` varchar(50) NOT NULL,
  `os` varchar(50) NOT NULL,
  `tarih` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

#
# Data for table "giris"
#


#
# Structure for table "haberler"
#

DROP TABLE IF EXISTS `haberler`;
CREATE TABLE `haberler` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `keywords` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `text` longtext CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT '',
  `aciklama` longtext CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "haberler"
#

INSERT INTO `haberler` VALUES (52,'Komutanların bulunduğu araç yoldan çıktı: 3 yaralı','Antalya\'nın Manavgat ilçesinde meydana gelen trafik kazasında komutanların aracı kaza geçirdi.','<p>Edinilen bilgiye g&ouml;re, Side istikametinden Sorgun istikametine gitmekte olan Manavgat İl&ccedil;e Jandarma Komutanı Binbaşı Ufuk Aruk, İl&ccedil;e Jandarma Asayiş İşlem Astsubayı Kıdemli Baş&ccedil;avuş Osman Tarık Karag&uuml;l, Selimiye Karakol Komutanı Kıdemli Baş&ccedil;avuş Nedim Uncu&rsquo;nun i&ccedil;erisinde bulunduğu &ouml;zel otomobil, Acısu mevkiinde kontrolden &ccedil;ıkarak yol kenarındaki aydınlatma direğine &ccedil;arptı.</p>\r\n\r\n<p>Hurdaya d&ouml;nen otomobilden ağır yaralı olarak &ccedil;ıkarılan komutanlar, Manavgat Devlet Hastanesinde yapılan m&uuml;dahalenin ardından Akdeniz &Uuml;niversitesi Tıp Fak&uuml;ltesi Hastanesine kaldırılırken, Asayiş İşlem Astsubayı Kıdemli Baş&ccedil;avuş Osman Tarık Karag&uuml;l hayati tehlikesinin devam ettiği bildirildi.</p>\r\n','komutan.jpg',NULL,'2016-10-29 14:38:14'),(56,'İdam teklifini Meclis\'e getireceğiz','AK Parti Genel Başkanı ve Başbakan Binali Yıldırım, idam tartışmalarıyla ilgili..','<p>AK Parti Genel Başkanı ve Başbakan&nbsp;<a href=\"http://www.milliyet.com.tr/binali-yildirim/\" target=\"_blank\" title=\"\">Binali Yıldırım</a>, idam tartışmalarıyla ilgili, siyasi partilerle mutabakat olması halinde sınırlandırılmış bir d&uuml;zenleme yapılabileceğini belirterek, &quot;Diğer siyasi partilerle bu konuda bir mutabakat sağlanırsa milletin umumi arzusu olan, sınırlandırılmış bir d&uuml;zenleme yapılabilir. Bu yapılan d&uuml;zenlemenin de geriye doğru işlemeyeceğinin bilinmesini isteriz. Anayasada gerekli teklifimizi bu doğrultuda yapacağız&quot; dedi.</p>\r\n\r\n<p><strong>&quot;FET&Ouml;&#39;N&Uuml;N ALGI PROPAGANDASININ AKSİNE İRADELERİNİ ORTAYA KOYDULAR&quot;</strong></p>\r\n\r\n<p>Başbakan Binali Yıldırım, TBMM&#39;deki&nbsp;<a href=\"http://www.milliyet.com.tr/ak-parti/\" target=\"_blank\" title=\"\">Ak Parti</a>&nbsp;grup toplantısında hitap etti. FET&Ouml;&#39;n&uuml;n &#39;T&uuml;rkiye&#39;de ekonomi bozuluyor&#39;, &#39;T&uuml;rkiye, istikrarsız bir d&ouml;neme doğru gidiyor&#39; gibi algı propagandası yaptığını belirten Yıldırım, &quot;T&uuml;rkiye Yatırım Danışma Konseyi Toplantısı&#39;nda g&ouml;rd&uuml;ğ&uuml;m&uuml;z en &ouml;nemli hususlardan bir tanesi, FET&Ouml; ter&ouml;r &ouml;rg&uuml;t&uuml;n&uuml;n ve onun uzantılarının ısrarla yaymaya &ccedil;alıştığı &#39;T&uuml;rkiye&#39;de ekonomi bozuluyor, istikrarsız bir d&ouml;neme doğru gidiyor&#39; algı propagandasının aksine, k&uuml;resel yatırımcıların T&uuml;rkiye&#39;ye olan g&uuml;veninin artarak devam ettiğini ve yeni projeler yapma y&ouml;n&uuml;nde iradelerini ortaya koydular. T&uuml;rkiye&#39;de sadece k&uuml;resel yatırımlar yapılmıyor. T&uuml;rkiye &uuml;zerinden b&ouml;lgedeki b&uuml;t&uuml;n yatırımlar izleniyor. Takip ediliyor, kararlar alınıyor&quot; ifadelerini kullandı.</p>\r\n\r\n<p><strong>&quot;CUMHURİYETİN 100&#39;&Uuml;NC&Uuml; YILINDA YERLİ JETİMİZ SEMALARDA U&Ccedil;ACAK&quot;</strong></p>\r\n\r\n<p>T&uuml;rkiye&#39;nin, cumhuriyetin 100&#39;&uuml;nc&uuml; yılında yerli jetini u&ccedil;uracağını bildiren Yıldırım, &quot;Savunma kabiliyetimizi g&uuml;&ccedil;lendirmek, caydırıcılık alt yapımızı geliştirmek i&ccedil;in 4 milyar 100 milyon dolar maliyetli 26 projeye onay verdik. F-35 gibi modern u&ccedil;akların yapımının %50 maliyetini oluşturan par&ccedil;alar T&uuml;rkiye&#39;de &uuml;retilecek. T&uuml;rkiye artık her t&uuml;rl&uuml; konvansiyonel savunma ara&ccedil;larını yapacak duruma geldi. Cumhuriyetin 100&#39;&uuml;nc&uuml; yılında yerli jetimiz semalarda u&ccedil;acak. Savunma Sanayi M&uuml;steşarlığı gelecek 4 yıl i&ccedil;in ARGE faaliyetlerine 650 milyon Dolar kaynak ayıracak&quot; diye konuştu.</p>\r\n\r\n<p><strong>&quot;VESAYETİ T&Uuml;RKİYE&#39;Yİ DEMOKRASİSİNİN G&Uuml;NDEMİNDEN &Ccedil;IKARACAĞIZ&quot;</strong></p>\r\n\r\n<p>Yeni Anayasa ile vesayet odaklarına son darbenin vurulacağının altını &ccedil;izen Yıldırım, &quot;Ge&ccedil;mişte vesayet odakları her 10 yılda bir darbe yaparak, bu &uuml;lkenin yolunu, gelişmesini kesmeye &ccedil;alıştılar. T&uuml;rkiye&#39;yi birilerinin istediği gibi adeta ekonomik, siyasi, sosyal istikrarsızlığa mahkum etmek istediler. Siyasetin g&uuml;&ccedil;lenmesini, demokrasinin gelişmesini, istikrarlı ve g&uuml;&ccedil;l&uuml; h&uuml;k&uuml;metlerin kurulmasını hi&ccedil;bir zaman istemediler. Yapacağımız Anayasa değişikliğiyle vesayet odaklarına son darbeyi vurmuş olacağız ve vesayeti T&uuml;rkiye&#39;yi demokrasisinin g&uuml;ndeminden &ccedil;ıkaracağız&quot; a&ccedil;ıklamasında bulundu.</p>\r\n\r\n<p><strong>&quot;MHP&#39;YE, BAH&Ccedil;ELİ&#39;YE TEŞEKK&Uuml;R EDİYORUM&quot;</strong></p>\r\n\r\n<p>FET&Ouml; ve PKK ile m&uuml;cadelede gereken desteği g&ouml;remediklerini dile getiren Başbakan Yıldırım, konuşmasını ş&ouml;yle s&uuml;rd&uuml;rd&uuml;: &quot;Makas değiştirdiler. Vesayet&ccedil;iler değişti. Zihniyet değişmedi, taşeronlar değişti. Bu sefer FET&Ouml;&#39;c&uuml;ler piyasaya &ccedil;ıktı. Onlar da Gezi ile 17 Aralık&#39;la &uuml;lkede vesayet yoluyla iktidarı ele ge&ccedil;irmeye &ccedil;alıştılar. Bir kez daha p&uuml;sk&uuml;rt&uuml;ld&uuml;ler. Ama durmadılar. G&uuml;&ccedil;lerini topladılar. 15 Temmuz&#39;da finale &ccedil;ıktılar. 15 Temmuz&#39;da da millet de meydana indi. Onlara dersini verdi. Şimdi hem FET&Ouml; ile hem BT&Ouml; ile amansız bir m&uuml;cadelemiz var. Bu m&uuml;cadelede maalesef gereken desteği g&ouml;remiyoruz. İlk g&uuml;nlerde milli, birlik ve kardeşlik ruhuyla darbeye karşı bir araya geldik. Fakat sonra ne oldu ne bitti, ana muhalefet partisi lideri bu Yenikapı ruhundan ayrılmak i&ccedil;in bin bir bahanenin peşine takıldı. G&uuml;n ge&ccedil;miyor ki yeni bir mazeret, yeni bir bu birlik ruhundan ayrılmak i&ccedil;in b&uuml;y&uuml;k bir gayret i&ccedil;erisinde. Bu Yenikapı ruhunu AK Parti olarak yaşatmak i&ccedil;in elimizden geleni yapmaya devam edeceğiz. Bu konuda o g&uuml;nk&uuml; duruşunu bug&uuml;n de aynen devam ettiren MHP&#39;ye teşekk&uuml;r ediyorum. Millet, memleket menfaatini &ouml;n plana alan ve bu y&ouml;nde sorumlu davranış g&ouml;steren Sayın Bah&ccedil;eli&#39;ye teşekk&uuml;r ediyorum&quot;</p>\r\n','basbakan.jpg',NULL,'2016-11-01 16:56:23'),(57,'Altın 10 ayda yüzde 28 kazandırdı!','Azalan risk iştahının neden olduğu taleple fiyatı 132,7 liraya kadar çıkarak ..','<p>Altının gram fiyatı, yılbaşından bu yana yatırımcısına y&uuml;zde 28 kazandırdı.<br />\r\n<br />\r\nAA muhabirinin derlediği bilgilere g&ouml;re, 2015&#39;i 99,54 liradan kapatan&nbsp;altının gramı, bu yılın ekim ayını 127,06 liradan tamamladı. &quot;G&uuml;venli liman&quot;&nbsp; &ouml;zelliğini s&uuml;rd&uuml;ren gram altın, bu yıl rekor &uuml;st&uuml;ne rekor kırarken, yılın 10&nbsp; ayında yatırımcısına da y&uuml;zde 28 kazan&ccedil; sağladı.<br />\r\n<br />\r\nABD Merkez Bankası&#39;nın (Fed)&nbsp;<a href=\"http://uzmanpara.milliyet.com.tr/haber-ara/?h=faiz\" target=\"_blank\">faiz</a>&nbsp;politikası, İngiltere&rsquo;nin AB&nbsp; &uuml;yeliğine &quot;hayır&quot; demesi ve haziran ayında Brexit s&uuml;recinin başlaması, merkez&nbsp; bankalarının genişlemeci&nbsp;<a href=\"http://uzmanpara.milliyet.com.tr/doviz/\" target=\"_blank\">para</a>&nbsp;politikalarını s&uuml;rd&uuml;rmesi, k&uuml;resel b&uuml;y&uuml;me&nbsp; endişeleri ve b&uuml;y&uuml;k ekonomilerin b&uuml;y&uuml;me beklentilerini aşağı y&ouml;nl&uuml; revize&nbsp; etmelerinin yanı sıra Suriye başta olmak &uuml;zere Orta Doğu&#39;da artan jeopolitik&nbsp; riskler, &Ccedil;in&#39;den gelen olumsuz veriler, &uuml;lkelerin uyguladığı negatif faiz&nbsp; politikasının&nbsp;<a href=\"http://uzmanpara.milliyet.com.tr/haber-ara/?h=bankac%fdl%fdk\" target=\"_blank\">bankacılık</a>&nbsp;sekt&ouml;r&uuml;n&uuml; olumsuz etkilemesi, Deutsche Bank,&nbsp;<a href=\"http://uzmanpara.milliyet.com.tr/haber-ara/?h=ing+bank\" target=\"_blank\">ING Bank</a>&nbsp;ve&nbsp; Commerzbank gibi b&uuml;y&uuml;k bankaların finansallarında sorunların g&uuml;ndeme gelmesi s&ouml;z&nbsp; konusu d&ouml;nemde yatırımcıların altına y&ouml;nelmesine neden oldu.<br />\r\n<br />\r\nGram altın, azalan&nbsp;<a href=\"http://uzmanpara.milliyet.com.tr/haber-ara/?h=risk\" target=\"_blank\">risk</a>&nbsp;iştahının neden olduğu talep ve yurt i&ccedil;inde&nbsp; a&ccedil;ıklanan temmuz ayı&nbsp;<a href=\"http://uzmanpara.milliyet.com.tr/haber-ara/?h=enflasyon\" target=\"_blank\">enflasyon</a>&nbsp;verisinin beklentileri aşmasının ardından TL&nbsp; &uuml;zerindeki baskının artmasıyla 4 Ağustos&#39;ta 132,7 liraya ulaşarak tarihi&nbsp; zirvesini g&ouml;rd&uuml;. Gram altındaki y&uuml;kseliş, Cumhuriyet altınını 880 liraya, yarım&nbsp; altını 431 liraya ve &ccedil;eyrek altını da 215 liraya &ccedil;ıkardı.<br />\r\n<br />\r\nAnalistler, gram altında kısa vadede 126,20 ve 130 liranın &ouml;nemli&nbsp; diren&ccedil; seviyeleri, 121-124,30&nbsp;<a href=\"http://uzmanpara.milliyet.com.tr/doviz/\" target=\"_blank\">lira</a>seviyelerinin de destek olarak takip&nbsp;edileceğini belirtti.<br />\r\n<br />\r\n<strong>&#39;FED&#39;İN 2016 YILINDAKİ FAİZ POLİTİKASI EN &Ccedil;OK ONS ALTINA YARADI&#39;</strong><br />\r\n<br />\r\nDestek&nbsp;<a href=\"http://uzmanpara.milliyet.com.tr/haber-ara/?h=yat%fdr%fdm\" target=\"_blank\">Yatırım</a>&nbsp;Menkul Değerler Araştırma M&uuml;d&uuml;r&uuml; Murat Tufan, Fed&#39;in&nbsp; 2016 yılındaki&nbsp;<a href=\"http://uzmanpara.milliyet.com.tr/haber-ara/?h=faiz\" target=\"_blank\">faiz</a>politikasının en &ccedil;ok ons altına yaradığını ifade ederek,&nbsp; &quot;Fed&rsquo;in&nbsp;<a href=\"http://uzmanpara.milliyet.com.tr/haber-ara/?h=faiz\" target=\"_blank\">faiz</a>&nbsp;artırımlarını &ouml;telemesi ve kademeli&nbsp;<a href=\"http://uzmanpara.milliyet.com.tr/haber-ara/?h=faiz\" target=\"_blank\">faiz</a>&nbsp;politikası vurgusunu her&nbsp; toplantıda koruması, doların k&uuml;resel piyasalarda y&uuml;kselişlerini sınırlandırırken,&nbsp; g&uuml;venli varlık talebinden dolayı&nbsp;<a href=\"http://uzmanpara.milliyet.com.tr/altin/\" target=\"_blank\">altın</a>&nbsp;değer kazanımını s&uuml;rd&uuml;rd&uuml;.&quot; dedi.<br />\r\n<br />\r\nFed&#39;in adımlarının altını yukarı taşıyan ana etken olarak&nbsp; g&ouml;r&uuml;lebileceğini belirten Tufan, &quot;Elbette sadece&nbsp;<a href=\"http://uzmanpara.milliyet.com.tr/haber-ara/?h=fed\" target=\"_blank\">Fed</a>&nbsp;kaynaklı gelişmeler bu yıl&nbsp; &ouml;n plana &ccedil;ıkmadı. K&uuml;resel piyasalar 2016 yılında dalga boyunun y&uuml;ksek olduğu&nbsp; gelişmelere tanık oldu. Artan endişeler&nbsp;<a href=\"http://uzmanpara.milliyet.com.tr/altin/\" target=\"_blank\">altın</a>&nbsp;tarafını desteklemeye devam etti.&quot;&nbsp; diye konuştu.<br />\r\n<br />\r\nTufan, doların gevşemesinin gram altında y&uuml;kselişleri&nbsp; sınırlandırabileceğini, yıl sonu ilk senaryoda 130,00-131,50 direncinin &ouml;n plana&nbsp; &ccedil;ıkabileceğini, 125,00-123,50&#39;nin destek b&ouml;lgesi olarak izlenebileceğini&nbsp; kaydetti.</p>\r\n','altin.jpg',NULL,'2016-11-01 17:04:49'),(58,'25 bin kişi kaçırıldı! Uçaklar havalandı !','Son dakika haberinin geldiği Musul\'da IŞİD\'in direnci kırıldı, haftalardır kuşatma altında..','<p>İki haftayı aşkın bir s&uuml;redir Musul&#39;a ulaşmaya &ccedil;alışan Irak ordusu, IŞİD hatlarını yardı ve doğu yakasından kente girmeye başladı.&nbsp;Iraklı general, birilklerin Musul&#39;un doğu kesiminden i&ccedil;eri girdiğini s&ouml;yledi.</p>\r\n\r\n<p>Amerikan Associated Press (AP) ajansına konuşan Irak &Ouml;zel Kuvvetler komutanlarından General Sami Aridi, askerlerin Kokceli Mahallesi&#39;ne girdiğini ve yoğun &ccedil;atışmaların devam ettiğini s&ouml;yledi. S&ouml;z konusu mahalle, d&uuml;n girilen Karama b&ouml;lgesine yalnızca 800 metre mesafede.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"http://www.milliyet.tv/video-izle/ISID-binlerce-sivili-kacirmayi-denedi-zX7CRpLSElmW.html\" target=\"_blank\"><img id=\"videoImg\" src=\"http://icdncube.milliyetvideo.com/video_snapshot/2016/11/01/fft1_mf1187307.jpeg\" style=\"height:225px; width:400px\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>General Aridi, IŞİD militanlarının birliklerin ilerleyişini tuzakladıkları bombaları patlatarak durdurmaya &ccedil;alıştığı bilgisini verdi.</p>\r\n\r\n<p>BBC&#39;den Joan Soley, sosyal medya hesabından paylaştığı mesajda, yoğun saldırı altındaki IŞİD militanlarının Musul merkezine doğru ka&ccedil;tığını bildirdi Soley, bilgiyi sıcak noktadaki g&ouml;rg&uuml; tanıklarına dayandırdı.</p>\r\n\r\n<p>Irak K&uuml;rt y&ouml;netimi lideri Mesut Barzani&#39;nin yayın kuruluşu Rudaw, askerlerin mahalledeki eski televizyon binasını almaya &ccedil;alıştığını aktardı.</p>\r\n\r\n<p>Koalisyona ait savaş u&ccedil;akları da b&ouml;lge &uuml;zerinde aralıksız u&ccedil;uş yapıyor.</p>\r\n\r\n<p><strong>25 BİN SİVİLİ KA&Ccedil;IRMAYA &Ccedil;ALIŞIRKEN U&Ccedil;AKLAR VURDU</strong></p>\r\n\r\n<p>&Ouml;te yandan, Birleşmiş Milletler (BM) İnsan Hakları Y&uuml;ksek Komiserliği S&ouml;zc&uuml;s&uuml; Ravina Shamdasani, IŞİD&#39;in Pazartesi g&uuml;n&uuml; g&uuml;n ağarırken Musul&#39;un g&uuml;neyindeki Hammam Alil kasabasından kamyonet ve minib&uuml;slere bindirdiği yaklaşık 25 bin kişiyi ka&ccedil;ırmaya &ccedil;alıştığını, koalisyon u&ccedil;aklarının devreye girmesiyle bir&ccedil;ok kamyonetin geri d&ouml;nd&uuml;r&uuml;ld&uuml;ğ&uuml;n&uuml; duyurdu. Ter&ouml;r &ouml;rg&uuml;t&uuml; IŞİD, Pazartesi sabahı erken saatlerde taşımaya &ccedil;alıştığı sivilleri canlı kalkan olarak kullanmayı hedefliyordu.</p>\r\n\r\n<p>Shamdasani&#39;nin verdiği bilgiye g&ouml;re, sahadaki baskıya rağmen ter&ouml;r &ouml;rg&uuml;t&uuml; bazı minib&uuml;sleri ka&ccedil;ırmayı başardı ve siviller şu an Hammam Alil&#39;in 15 kilometre kuzeyindeki Ebu Saif&#39;te.&nbsp;</p>\r\n\r\n<p>Cenevre&#39;de a&ccedil;ıklamalar yapan BM s&ouml;zc&uuml;s&uuml;, IŞİD&#39;in ayrıca ele ge&ccedil;irdiği 40 Irak eski g&uuml;venlik g&uuml;c&uuml; mensubunu Cumartesi g&uuml;n&uuml; katlettiğini ve cesetleri Dicle Nehri&#39;ne attığını s&ouml;yledi.</p>\r\n\r\n<p><strong>BEYAZ BAYRAKLARLA KA&Ccedil;IYORLAR</strong></p>\r\n\r\n<p>Reuters haber ajansı ise, cephe hattına &ccedil;ok yakın konumdaki Bazvaya k&ouml;y&uuml;nden ka&ccedil;an sivillerin fotoğraflarını d&uuml;nyaya ge&ccedil;ti. Yanlarına hayvanlarını alan k&ouml;yl&uuml;ler, ellerindeki beyaz bayraklarla akın akın askeri kontrol noktasına geliyor.</p>\r\n\r\n<p>Irak ordusunda g&ouml;revli T&uuml;mgeneral Talib Kenani, s&ouml;z konusu mahallenin tamamen kuşatma altına alındığını d&uuml;n duyurmuştu. D&uuml;n &ouml;ğle saatlerinde Retuers&#39;a a&ccedil;ıklama yapan Ter&ouml;rle M&uuml;cadele Birimi de, Karama b&ouml;lgesine girildiğini ilan etmişti.</p>\r\n\r\n<p>17 Ekim&#39;de başlayan operasyon sonrasında Irak ordusu, peşmere, Şii milisler Haşdi Şabi ve aşiret g&uuml;&ccedil;lerinden oluşan unsurlar, onlarca k&ouml;y&uuml; IŞİD&#39;den kurtardı. ABD&#39;nin başını &ccedil;ektiği koalisyon g&uuml;&ccedil;leri Musul operasyonuna hava saldırılarıyla destek veriyor.</p>\r\n','musul.jpg',NULL,'2016-11-01 17:07:28'),(59,'Eski eşinin imam nikahlı kocasını öldürdü','Olay, Fethiye\'nin Tuzla Mahallesi\'nde kurulan Salı pazarında meydana geldi. ','<h2>Muğla&#39;nın Fethiye il&ccedil;esinde, 3 yıl &ouml;nce ayrıldığı karısının saat sattığı pazar tezgahına gelen eski koca av t&uuml;feğiyle dehşet sa&ccedil;tı. Kadın, bir aylık imam nikahlı eşinin hayatını kaybettiği saldırıdan kıl payı kurtuldu.</h2>\r\n\r\n<p>Olay,&nbsp;<a href=\"http://www.milliyet.com.tr/fethiye/\" target=\"_blank\" title=\"\">Fethiye</a>&#39;nin&nbsp;<a href=\"http://www.milliyet.com.tr/tuzla/\" target=\"_blank\" title=\"\">Tuzla</a>&nbsp;Mahallesi&#39;nde kurulan Salı pazarında meydana geldi. Edinilen bilgiye g&ouml;re, 50 yaşındaki H&uuml;lya H., bir aydır imam nikahlı olarak yaşadığı 81 yaşındaki Muammer &Ouml;ztop ile her hafta geldiği Salı pazarında tezgah a&ccedil;arak saat satmaya başladı. &Ouml;ğle saatlerinde H&uuml;lya H.&#39;nin 3 yıl &ouml;nce ayrıldığı eski eşi Mehmet E. (46), tek kırma av t&uuml;feği ile tezgaha yaklaşarak &Ouml;ztop&#39;a iki el ateş etti. Muammer &Ouml;ztop, bir anda kanlar i&ccedil;inde yere yığıldı. Mehmet E., t&uuml;feği &uuml;&ccedil;&uuml;nc&uuml; kez doldurmaya &ccedil;alıştığı sırada eski eşi H&uuml;lya H. ka&ccedil;arak kurşunun hedefi olmaktan kurtuldu. Ağır yaralanan Muammer &Ouml;ztop, 112 Acil Servis ekipleri tarafından sevk edildiği &Ouml;zel Lokman Hekim Esnaf Hastanesi&#39;nde yapılan t&uuml;m m&uuml;dahalelere rağmen kurtarılamadı. &Ouml;ztop&#39;un cenazesi otopsi i&ccedil;in morga kaldırıldı.</p>\r\n\r\n<p>Motorize yunus ekipleri, elindeki av t&uuml;feğiyle pazar yerindeki kalabalık arasında izini kaybettirmeye &ccedil;alışan Mehmet E.&#39;yi kovalamaya başladı. Zanlının &uuml;zerine atlayan sivil polis ve vatandaşlar, zanlıyı olay yerinin 25 metre uzağında yere yatırarak etkisiz hale getirdi. Polis ekipleri, zanlı ve saldırıdan yara almadan kurtulan eski eşini ifadeleri alınmak &uuml;zere karakola g&ouml;t&uuml;rd&uuml;.</p>\r\n\r\n<p><strong>&quot;3 YIL &Ouml;NCE AYRILDIK&quot;</strong></p>\r\n\r\n<p>Karakola g&ouml;t&uuml;r&uuml;l&uuml;rken gazetecilerin sorularını cevaplayan H&uuml;lya H., &quot;Ateş eden eski eşim. 3 yıl &ouml;nce boşandık, bizi s&uuml;rekli tehdit ediyordu. Polisten koruma istedik. Ancak hen&uuml;z olmadı. Eşim ile tezgahta saat satıyorduk. İki el sıktı, beni de vuracaktı, geriye &ccedil;ekildim. Bu eşimle evleneli bir ay oldu&quot; dedi.</p>\r\n','fet.jpg',NULL,'2016-11-01 17:14:36'),(60,'Bolu Dağı\'nda TIR\'lara izin verilmiyor','Bolu Dağı\'nda öğleden sonra etkisini artıran kar yağışı ulaşımı olumsuz etkiledi. ','<h2>Bolu Dağı&#39;nda &ouml;ğleden sonra etkisini artıran kar yağışı ulaşımı olumsuz etkiledi. Lapa lapa yağan kar, D-100 Karayolu ve TEM ge&ccedil;işlerinde s&uuml;r&uuml;c&uuml;lere zor anlar yaşattı.</h2>\r\n\r\n<p>Karayolları ekiplerinin kar temizleme &ccedil;alışması yapmasına rağmen ara&ccedil;lar g&uuml;&ccedil;l&uuml;kle ilerledi. D-100 Karayolu&#39;nda&nbsp;<a href=\"http://www.milliyet.com.tr/istanbul/\" target=\"_blank\" title=\"\">İstanbul</a>&nbsp;y&ouml;n&uuml;nde TIR&#39;ların ge&ccedil;ine izin verilmedi. TIR&#39;lar, trafik ekipleri tarafından Elmalık mevkiinde durduruldu. TIR&#39;lar, yol kenarlarında bekletiliyor. Trafik ekipleri g&uuml;zergahta &ouml;nlemlerini artırırken Karayolları ekipleri hem D-100, hem de TEM&#39;de kar temizleme ve tuzlama &ccedil;alışması yaparak yolları a&ccedil;ık tutmaya &ccedil;alışıyor.</p>\r\n','bolu.jpg',NULL,'2016-11-01 17:39:06');

#
# Structure for table "haberleryorumlar"
#

DROP TABLE IF EXISTS `haberleryorumlar`;
CREATE TABLE `haberleryorumlar` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `haberId` varchar(255) DEFAULT NULL,
  `yorum` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `uye_ID` varchar(255) DEFAULT NULL,
  `uye_adsoy` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `yapanimg` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "haberleryorumlar"
#

INSERT INTO `haberleryorumlar` VALUES (45,'2016-12-15 19:05:51','6','hilal yorum attı','3','hilal','hilal13.jpg'),(46,'2016-12-15 19:07:38','6','qweqwe','3','hilal','hilal13.jpg'),(47,'2016-12-15 19:11:11','8','asd','3','hilal','hilal13.jpg'),(48,'2016-12-15 19:12:08','6','asdasd','3','hilal','hilal13.jpg'),(49,'2016-12-15 19:12:46','8','asdasd','3','hilal','hilal13.jpg'),(50,'2016-12-20 16:51:01','57','ş','4','Akif Güldemir','ako1.jpg'),(51,'2016-12-23 01:22:15','57','w','3','hilal','hilal13.jpg'),(52,'2016-12-23 02:11:39','57','akooooooorrr','4','Akif Güldemir','ako1.jpg'),(53,'2017-01-12 17:11:13','52','akif yeni yorum deneme','4','Akif Güldemir','ako1.jpg'),(54,'2017-01-12 17:11:35','52','akif 123321','4','Akif Güldemir','ako1.jpg');

#
# Structure for table "mesajlar"
#

DROP TABLE IF EXISTS `mesajlar`;
CREATE TABLE `mesajlar` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `kimId` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kimad` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kimeId` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kimead` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `kimimg` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kimeimg` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `mesaj` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `cekId` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

#
# Data for table "mesajlar"
#

INSERT INTO `mesajlar` VALUES (31,'4','Akif Güldemir','7',NULL,NULL,'2017-01-10 11:21:25','ako1.jpg',NULL,'baba',NULL),(36,'4','Akif Güldemir','7',NULL,NULL,'2017-02-06 22:53:12','ako1.jpg',NULL,'deniyorum',NULL),(41,'4','Akif Güldemir\t','3',NULL,NULL,'2017-02-07 00:33:51','ako1.jpg',NULL,'aa',NULL),(42,'3','hilal','4',NULL,NULL,'2017-02-07 00:34:30','hilal13.jpg',NULL,'hh',NULL),(43,'4','Akif Güldemir','3',NULL,NULL,'2017-02-07 00:34:54','ako1.jpg',NULL,'aaa2',NULL),(44,'3','hilal','4',NULL,NULL,'2017-02-08 17:15:50','hilal13.jpg',NULL,'hilal dedi',NULL),(45,'4','Akif Güldemir','3',NULL,NULL,'2017-02-08 17:16:57','ako1.jpg',NULL,'akif dedi',NULL),(46,'3','hilal','4',NULL,NULL,'2017-02-08 17:19:23','hilal13.jpg',NULL,'hhhh',NULL),(47,'7','Adnan Güldemir','4',NULL,NULL,'2017-02-08 21:11:52','babam.jpg',NULL,'ddd',NULL),(48,'4','Akif Güldemir','7',NULL,NULL,'2017-02-09 20:13:07','ako1.jpg',NULL,'5',NULL),(49,'4','Akif Güldemir','3',NULL,NULL,'2017-02-09 20:15:50','ako1.jpg',NULL,'123',NULL),(50,'4','Akif Güldemir','7',NULL,NULL,'2017-02-09 20:15:58','ako1.jpg',NULL,'321',NULL),(51,'4','Akif Güldemir','7',NULL,NULL,'2017-02-09 20:17:05','ako1.jpg',NULL,'hilalll',NULL),(52,'4','Akif Güldemir','3',NULL,NULL,'2017-02-09 20:18:01','ako1.jpg',NULL,'hilalll',NULL),(53,'4','Akif Güldemir','3',NULL,NULL,'2017-02-09 20:18:11','ako1.jpg',NULL,'aaaaa',NULL),(54,'3','Hilal Çil','4',NULL,NULL,'2017-02-09 20:18:20','hilal13.jpg',NULL,'akifff',NULL),(55,'4','Akif Güldemir','3',NULL,NULL,'2017-02-11 02:49:42','ako1.jpg',NULL,'asd',NULL),(56,'3','Hilal Çil','4',NULL,NULL,'2017-02-11 03:33:12','hilal13.jpg',NULL,'akifff napıyorsun',NULL),(57,'4','Akif Güldemir','3',NULL,NULL,'2017-02-13 02:47:14','ako1.jpg',NULL,'qwe',NULL);

#
# Structure for table "moda"
#

DROP TABLE IF EXISTS `moda`;
CREATE TABLE `moda` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `keywords` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `text` longtext CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT '',
  `aciklama` varchar(88) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "moda"
#

INSERT INTO `moda` VALUES (9,'2015-2016 Moda Trendleri','Günümüz trendine yakışan modeller için nelere dikkat etmeliyiz.Devamı haberimizde..','<p>Merhaba uzun bir aradan sonra bu yazımı, 2015-2016 kış sezonu moda trendlerini sizinle paylaşmak istedim. &Ccedil;ok gezen yoğun tempoda alışverişe fazlasıyla zaman ayıran bir erkek olarak, size bu yazımda en kış sezonunun trend par&ccedil;alarını anlatmak istiyorum.</p>\r\n\r\n<p>In-ler ve out-larımız var &uuml;stelik&hellip; Baştan ayağa doğru sırayla gidelim.</p>\r\n\r\n<p><img alt=\"Fedora Şapka\" src=\"http://www.erkekmagazin.com/resim/2014/11/fedora-sapka.jpg\" style=\"height:168px; width:250px\" />Bu kış her yerde g&ouml;rd&uuml;ğ&uuml;m&uuml;z b&uuml;y&uuml;k fedora namı diğer<a href=\"http://www.erkekmagazin.com/fedora-fotr-sapka/\">&nbsp;f&ouml;tr şapkalar</a>,&nbsp;her ne kadar her mağazada da olsa artık sıkıcı bir hal durumuna girmeye başladı. Ge&ccedil;en sene &ccedil;ok trenddi evet hala da kullanılabilir aslında ama, sizce de bay bayan herkesin kullanması artık sizi de rahatsız etmedi mi?&nbsp;Şapkalar out olmaz bunu belirteyim yanlış anlaşılmasın doğru bir kombinle her zaman konuşturabilirsiniz.</p>\r\n\r\n<p><img alt=\"Kat kat giyinmek\" src=\"http://www.erkekmagazin.com/resim/2015/10/layer.jpg\" style=\"height:322px; width:250px\" />Ama asıl dikkat &ccedil;ekmek istediğim, bu sezon layer layer giyinmek yani kat kat giyinmek &ccedil;ok moda. &Ouml;rnek vermek gerekirse uzun tiş&ouml;rt&uuml;n &uuml;st&uuml;ne daha kısa bir tiş&ouml;rt giymek gibi , balık&ccedil;ıların &uuml;st&uuml;ne kazak giymek gibi ayrıca tek bir kalın par&ccedil;a giymektense iki tane ince par&ccedil;ayı &uuml;st &uuml;ste giymek hava boşluklarını en aza indirgeyeceği i&ccedil;in sizi daha sıcak tutacaktır. Artık tek kat giymek out.</p>\r\n\r\n<p>Skinny jeanler yine bu sezonda moda ama asıl damgasını vuran artık loose pantslerimiz var. Kısa bol klasik kesimler&hellip;</p>\r\n\r\n<p>Kot olarak ise artık bayanların boyfriend diye tanımladığı kotlar erkeklerde de moda olmaya başladı. Kotlarımızın pa&ccedil;alarını artık kıvırmak yerine kesilmiş ve yıpranmış olarak kullanmak da size yeni bir g&ouml;r&uuml;n&uuml;m katacaktır.</p>\r\n\r\n<p>Kabanlar bu sene her yerde kalın kaşe kabanlar bej ve siyah renkleri &ouml;zellikle zengin bir g&ouml;r&uuml;n&uuml;mde size &ccedil;ok yardımcı olacaktır. Ayrıca montlarda bu sene kolej montları kısa değil dize kadar uzatılmış. Sizce de harika değil mi? Hem rahat hem g&ouml;sterişli.</p>\r\n\r\n<p>Ve son olarak ayakkabılardan bahsetmem gerekirse yani bana g&ouml;re kıyafetinizin nasıl g&ouml;r&uuml;nd&uuml;ğ&uuml;n&uuml; asıl belirleyen par&ccedil;aya&hellip;</p>\r\n\r\n<p><img alt=\"huarache nike\" src=\"http://www.erkekmagazin.com/resim/2015/10/huarache-nike.jpg\" style=\"height:260px; width:580px\" /></p>\r\n\r\n<p>Bu sene artık airmaxler out. Bunun yerine nike yeni model olarak &rdquo;Huarache&rdquo; adlı bir model &ccedil;ıkardı ve olduk&ccedil;a değişik hoş bir g&ouml;r&uuml;n&uuml;m&uuml; var tabi ki de mağazalarımız bunu taklit etmekten ka&ccedil;ınmadı ve bershka, zara gibi mağazalarda daha uygun fiyata versiyonlarını bulabilirsiniz.</p>\r\n','bmw21.jpg','asd'),(10,'Oversize T-shirt','Bir aralar çok revaçta olan oversize yani bol kesim dediğimiz bedeninizden..','<p>Bir aralar &ccedil;ok reva&ccedil;ta olan oversize yani bol kesim dediğimiz bedeninizden &ccedil;ok daha b&uuml;y&uuml;k, d&uuml;z renk basic tiş&ouml;rtlerimiz reva&ccedil;ta. Bu tiş&ouml;rtler ilk olarak Amerikalı rap şarkıcıları tarafından giyilmesiyle tanınmıştı. Yavaş yavaş biz de giymeye başladık son bir yıldır.</p>\r\n\r\n<p>Ger&ccedil;ekten de bahar ayında ferah bol, bir o kadar da uyumlu kolay giy &ccedil;ık par&ccedil;anız olabilecek nitelikte par&ccedil;alar. B&uuml;t&uuml;n bir kış değişik versiyonlarını kombinlerini g&ouml;rd&uuml;k. Bu kombinler dar pa&ccedil;a eşofmanlarla, daha &ccedil;ok &uuml;st&uuml;ne okul montu ya da deri mont ve kafanıza cap takınca bilindik bir g&ouml;r&uuml;nt&uuml; yani sanat&ccedil;ılardan kopyalama yaptık.</p>\r\n\r\n<p>Ama ben bu sezon size daha g&uuml;zel bir fikir vereceğim, dar pa&ccedil;a eşofmanlar yerine chino pantolonla deneyin. &Ccedil;ok klasik kesim olmayacak şekilde pantolonlar &nbsp;bol tiş&ouml;rt&uuml;m&uuml;z&uuml; sokak modası g&ouml;r&uuml;n&uuml;mden biraz &ccedil;ıkartıp, sizi şık bir g&ouml;r&uuml;n&uuml;me kavuşturacak. &nbsp;Ama k&uuml;&ccedil;&uuml;k bir ayrıntı bu pantolonlarla giyerken tiş&ouml;rt&uuml; dışarı &ccedil;ıkarmamalıyız.</p>\r\n\r\n<p>Kolaya ka&ccedil;ıp&nbsp;&ccedil;ıkalım dersek, oversize tiş&ouml;rt&uuml;m&uuml;z&uuml;n altına slim fit kot ve spor ayakkabı tercihi yapabiliriz.</p>\r\n\r\n<p>Acuners</p>\r\n\r\n<p><img alt=\"oversized tshirt\" src=\"http://www.erkekmagazin.com/resim/2015/03/oversized-tshirt.jpg\" style=\"height:1547px; width:580px\" /></p>\r\n','ov.jpg',NULL),(11,'Fedora- Fötr Şapka','Yirminci yüzyılın başlarında fötr, şıklığı, takanın başını rüzgardan ve hava şartlarından..','<p>Fedora nedir?</p>\r\n\r\n<p>Yirminci y&uuml;zyılın başlarında f&ouml;tr, şıklığı, takanın başını r&uuml;zgardan ve hava şartlarından koruması ve kullanılmadığı zaman katlanabilmesi ger&ccedil;eğiyle şehirlerde pop&uuml;ler hale gelmişti. &nbsp;Şapka, genelde yasak b&ouml;lge gangasterleri ve onları adalete teslim etmeye &ccedil;alışan dedektiflerle &ouml;zdeşleştirilmişti.</p>\r\n\r\n<p><img alt=\"Fedora Şapka Modası\" src=\"http://www.erkekmagazin.com/resim/2014/11/fedora-sapka-modasi.jpg\" style=\"height:389px; width:280px\" />Amerika?da f&ouml;tr şapkalar takım elbisenin ve resmi giyimin vazge&ccedil;ilmezi kabul edimişti &Ccedil;oğu erkek şapkası olmadan dışarı &ccedil;ıkmıyordu. Melon şapka gibi f&ouml;tr de 1950 sonları-1960 başlarında g&ouml;zden d&uuml;şt&uuml; ve pop&uuml;leritesi azaldı; daha rahat giyimiyle bilinen batı yakasında şapkanın beğeni kaybetmesi bu tarihten de &ouml;nce oldu. 1950 başlarında klapa yakaların ve kravatların incelmesi, k&uuml;&ccedil;&uuml;k siperli şapkalara ge&ccedil;işle sonlandı ve bu f&ouml;tr şapkanın er ge&ccedil; gerekli olmayan bir par&ccedil;a olarak g&ouml;r&uuml;lmesine yol a&ccedil;tı. 1980&rsquo;li yıllarda Michael Jackson tarafından sık&ccedil;a kullanılmıştır.</p>\r\n\r\n<p>Fedora: Kovboy şapkasının daha yuvarlar hatlı olup daha resmi g&ouml;r&uuml;nen ya da bir diğer değişle derli toplu g&ouml;r&uuml;nen elit bir g&ouml;r&uuml;n&uuml;me sahip olmanızı sağlayacak şapka. Genellikle koyu renklerde olur. Kahverengi , gri , koyu yeşil , lacivert , bordo. Ama benim tercihim tabi ki de siyah. Neden?</p>\r\n\r\n<p><img alt=\"Fedora Şapka\" src=\"http://www.erkekmagazin.com/resim/2014/11/fedora-sapka.jpg\" style=\"height:168px; width:250px\" />Siyah şapka daha ihtişamlı g&ouml;sterir. Sizi fotoğraf olarak ele alırsak siyah fedora size m&uuml;kemmel bi fon olacaktır. Peki fedora bu kadar ciddi kullanılmalı mı ? Bana sorarsanız simsiyah bir g&uuml;nl&uuml;k kıyafetin &uuml;st&uuml;ne m&uuml;kemmel duruyor. Siz de bu sade g&uuml;nl&uuml;k kıyafetlerinizi fedorayla ta&ccedil;landırın b&ouml;ylece etrafınızdakilere ne kadar cesur olduğunuzu g&ouml;sterin.</p>\r\n\r\n<p>Kış i&ccedil;in iddialı aynı zamanda şık olmak istiyorsanız takipte kalın.</p>\r\n','fed.jpg',NULL),(12,'Hayat Kurtaran Jean’ler','Kot, İngilizce’deki Denim kelimesinin Türkçe’deki karşılığı olarak kullanılır..','<p>Amerika&rsquo;nın şalvarı olarak &ouml;ğrendiğimiz, aslında &ccedil;ift&ccedil;i kesimin giydiği&nbsp;<strong>blue jean</strong>&nbsp;ya da T&uuml;rk&ccedil;e&rsquo;de kullandığımız karşılığıyla kot.</p>\r\n\r\n<p>Kot, İngilizce&rsquo;deki&nbsp;<strong>Denim</strong>&nbsp;kelimesinin T&uuml;rk&ccedil;e&rsquo;deki karşılığı olarak kullanılır. S&ouml;zl&uuml;k anlamı: &ldquo;Giysi yapılan bir t&uuml;r mavi, kaba pamuklu kumaş, &ldquo;blucin&rdquo;dir.</p>\r\n\r\n<p>Asıl ismi yaratan yani kotu bulan amcamızın soy isminden geliyor. T&uuml;rkiye&rsquo;de ki ilk kot markası yaratıcısı Muhteşem Kot, Fransa&rsquo;ya yaptığı bir seyahat sırasında blucinle karşılaşır ve bunu T&uuml;rkiye&rsquo;de &uuml;retmeye karar verir. B&ouml;ylece biz T&uuml;rk insanının kot pantolon ya da bir diğer isimle blucinle karşılaşma s&uuml;reci b&ouml;yle başlar.</p>\r\n\r\n<p>1960 ta &uuml;retilmeye başlayan blucin şuan g&uuml;n&uuml;m&uuml;zde değişik versiyonlarda kullanılmaktadır. Bay, bayan herkesin kurtarıcısı olan bu Amerikan Şalvarı en aceleci, rahat bir o kadar da &ouml;nemli g&uuml;nlerde kullanabiliyoruz.</p>\r\n\r\n<h2><strong>Skinny Jeans</strong></h2>\r\n\r\n<p>Ge&ccedil;miş zamana g&ouml;re daha dar kesimlerde kullandığımız kot pantolonlarımız artık &ldquo;<strong>skinny&rdquo;</strong>&nbsp;diye &ccedil;ağırdığımız tayt formunda pantolonlara d&ouml;nd&uuml;. Her ne kadar bayan pantolonu g&ouml;z&uuml;yle bakılsa da erkekler olarak doğru kullandığımızda olumlu g&ouml;r&uuml;nt&uuml;ler elde edebiliyoruz. Toplumumuzun neye nasıl baktığı değil sizin kendinizi nasıl g&ouml;rd&uuml;ğ&uuml;n&uuml;z &ouml;nemli.</p>\r\n\r\n<p>Skinny pantolonlarla g&uuml;zel bir g&ouml;r&uuml;nt&uuml; elde etmek isteyenlere sesleniyorum, asla ama asla dar bir g&ouml;mlek ya da dar bir &uuml;st se&ccedil;meyin, bu sizin daha ince zarif g&ouml;r&uuml;nmenize neden olur. Oysa biz erkekler daha kaba daha hacimli durmamız gerekir. Skinny giyiyoruz ama kalıpsız durmuyoruz asla.</p>\r\n\r\n<p><img alt=\"Skinny Modelleri\" src=\"http://www.erkekmagazin.com/resim/2014/11/skinny-modelleri.jpg\" style=\"height:446px; width:580px\" /></p>\r\n\r\n<p>Herkesin dolabında mutlaka basic diye &ccedil;ağırdığımız tiş&ouml;rtlerimiz vardır. Genelde beyaz ve siyah bol basic&rsquo;ler dar pantolonlarla daha hoş bir tarz elde etmemizi sağlar. Şuan g&uuml;ndemimizde ise grunge ve hipster stilleri hakim, bu y&uuml;zden bu sade g&ouml;r&uuml;nt&uuml;y&uuml; bol kareli ya da ekoseli g&ouml;mlekler ve ceketlerle hareketlendirebilirsiniz. Kafanıza takacağınız siyah bir bere ve ayağınıza giyeceğiniz bir spor ayakkabı sizi bulunacağınız ortamın en rahat ama tarz sahibi insanı yapacaktır.</p>\r\n\r\n<p><img alt=\"Kot Blue Jean\" src=\"http://www.erkekmagazin.com/resim/2014/11/blue-jean-kot.jpg\" style=\"height:200px; width:205px\" /></p>\r\n','jean.jpg',NULL);

#
# Structure for table "modayorumlar"
#

DROP TABLE IF EXISTS `modayorumlar`;
CREATE TABLE `modayorumlar` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `haberId` varchar(255) DEFAULT NULL,
  `yorum` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `uye_ID` varchar(255) DEFAULT NULL,
  `uye_adsoy` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `yapanimg` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

#
# Data for table "modayorumlar"
#

INSERT INTO `modayorumlar` VALUES (36,'2016-11-21 03:34:12','9','denem akif','12','Akif',NULL),(37,'2016-11-21 03:34:36','9','deneme hilal','3','Hilal Çil',NULL),(38,'2016-11-24 03:35:43','12','a','13','Adnan Güldemir',NULL),(39,'2016-12-17 02:51:59','9','wwwe','4','Akif Güldemir','ako1.jpg'),(40,'2017-01-12 17:15:53','9','123','4','Akif Güldemir','ako1.jpg');

#
# Structure for table "motor"
#

DROP TABLE IF EXISTS `motor`;
CREATE TABLE `motor` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `keywords` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `text` longtext CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT '',
  `aciklama` varchar(88) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "motor"
#

INSERT INTO `motor` VALUES (7,'spors','sporasd','','Pick-a-Pizza-Logo-of-your-Own.jpg',NULL),(8,'a','s','<p>efsry</p>\r\n','650x344-istanbulda-yagis-trafik-felc-14766848509141.jpg',NULL);

#
# Structure for table "muzik"
#

DROP TABLE IF EXISTS `muzik`;
CREATE TABLE `muzik` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `keywords` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `text` longtext CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT '',
  `aciklama` varchar(88) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "muzik"
#

INSERT INTO `muzik` VALUES (6,'Mor ve Ötesi\'den 20.yıla Özel Sürpriz!','İlk albümünü 1996 yılında çıkaran mor ve ötesi, 20. yılını sürprizlerle kutlamaya devam ediyor.','<p>İlk alb&uuml;m&uuml;n&uuml; 1996 yılında &ccedil;ıkaran mor ve &ouml;tesi, 20. yılını s&uuml;rprizlerle kutlamaya devam ediyor. Grubun 20. yılı i&ccedil;in &ouml;zel olarak hazırlanan box setlerin ilki bug&uuml;n m&uuml;zikseverlerle buluşuyor.</p>\r\n\r\n<p>Mayıs ayında &ccedil;ıkardıkları &#39;Anlatamıyorum&#39; single&#39;ının ardından bu kez de &#39;Kayıtlar 1996-2004&#39; adını taşıyan ilk box set raflardaki yerini aldı. Grubun 20 yıllık m&uuml;zikal ge&ccedil;mişinin ilk yarısını &nbsp;yansıtan bu box setin devamı da &ouml;n&uuml;m&uuml;zdeki aylarda gelecek.</p>\r\n\r\n<p>Bug&uuml;n &ccedil;ıkan 5 CD&#39;lik ilk kutuda grubun ilk 4 alb&uuml;m&uuml; ve son teklisi &#39;Anlatamıyorum&#39; yer alırken, &#39;Şehir&#39;, &#39;Bırak Zaman Aksın&#39; ve &#39;G&uuml;l Kendine&#39; alb&uuml;mleri ise ilk defa remastered olarak dinleyiciyle buluşuyor.&nbsp;<br />\r\n&nbsp;<br />\r\nBu derlemenin ikincisi olan ve yeni bir tekli de i&ccedil;eren &#39;Kayıtlar 2005-2016&#39; Kasım ayında m&uuml;zikseverlerle buluşacak.&nbsp;<br />\r\n&nbsp;<br />\r\nGrubun 20 yıllık k&uuml;lliyatıyla birlikte t&uuml;m şarkı s&ouml;zlerinin, hi&ccedil; yayımlanmamış g&ouml;rsellerin ve bazı &ouml;zel s&uuml;rprizlerin yer alacağı 8 CD&#39;lik &uuml;&ccedil;&uuml;nc&uuml; kutu ise Aralık ayında sınırlı sayıda basılacak.</p>\r\n\r\n<p>Her &uuml;&ccedil; kutunun g&ouml;rsel tasarımını da yenilik&ccedil;i yaklaşımıyla her ge&ccedil;en g&uuml;n adını daha &ccedil;ok duyuran gen&ccedil; sanat&ccedil;ı H&uuml;seyin Sandık &uuml;stlendi.</p>\r\n','mor.jpg',NULL),(7,'Gökhan Türkmen\'in Yeni Albümü Yolda!','Gökhan Türkmen, \'Sessiz\' adını verdiği yeni albümünü sevenleriyle buluşturmak için gün sayıyor.','<p>G&ouml;khan T&uuml;rkmen, &#39;Sessiz&#39; adını verdiği yeni alb&uuml;m&uuml;n&uuml; sevenleriyle buluşturmak i&ccedil;in g&uuml;n sayıyor.</p>\r\n\r\n<p>&#39;&Ouml;yle G&uuml;zel Ki&#39; isimli şarkıyla &ccedil;ıkış yapacak olan sanat&ccedil;ı, ge&ccedil;tiğimiz g&uuml;nlerde Murat Joker y&ouml;netmenliğinde kamera karşısına ge&ccedil;ti.</p>\r\n\r\n<p>Kilyos sahili ve &Uuml;mraniye Platoları&#39;nda iki g&uuml;nde kalabalık bir ekip ile &ccedil;ekimleri tamamlanan video klipte, G&ouml;khan T&uuml;rkmen&#39;e G&uuml;neş Arık eşlik etti.</p>\r\n\r\n<p>Video klibin s&uuml;rprizi ise &uuml;nl&uuml; oyuncu Emre Kınay oldu. Emre Kınay video klipte, duygusal bir aşk şarkısı olan &#39;&Ouml;yle G&uuml;zel Ki&#39;nin oluşum hikayesini kaleme alan bir yazarı canlandırdı.</p>\r\n\r\n<p>S&ouml;z ve m&uuml;ziği G&ouml;khan T&uuml;rkmen&#39;e, d&uuml;zenlemesi Atıl Aksoy&#39;a ait &#39;&Ouml;yle G&uuml;zel Ki&#39; Ekim ayında t&uuml;m dijital platformlarda m&uuml;zikseverlerin beğenisine sunulacak.</p>\r\n','gok.jpg',NULL),(8,'Başarıcı sanatçı Funda Arar\'dan Yeni Klip!','Funda Arar, \'Hoşgeldin\' isimli albümünün dördüncü video klibini, sözleri Zeki Güner\'e..','<p>Funda Arar, &#39;Hoşgeldin&#39; isimli alb&uuml;m&uuml;n&uuml;n d&ouml;rd&uuml;nc&uuml; video klibini, s&ouml;zleri Zeki G&uuml;ner&#39;e, bestesi ve aranjesi Febyo Taşel&#39;e ait &#39;&Ouml;mr&uuml;me Yetiş&#39; şarkısına &ccedil;ekti.</p>\r\n\r\n<p>Y&ouml;netmenliğini Nihat Odabaşı&#39;nın &uuml;stlendiği video klip 15 kişilik bir ekiple 2 g&uuml;nde &ccedil;ekildi.</p>\r\n\r\n<p>Şehirli bir kadının yalnızlık hikayesinin anlatıldığı video klipte, Funda Arar&#39;a oyuncu Mustafa Vuran eşlik etti.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><iframe frameborder=\"0\" height=\"315\" scrolling=\"no\" src=\"https://www.youtube.com/embed/OmFXsKxS1ZM?controls=0&amp;amp;showinfo=0\" width=\"560\"></iframe></p>\r\n','fun.jpg',NULL),(12,'Mustafa Sandal\'ın Yeni Şarkısı \'Dön Dünya\' Müzikseverlerle Buluştu!','Türk pop müziğinin başarılı isimlerinden Mustafa Sandal, geçtiğimiz yaz dinleyicileri..','<p>T&uuml;rk pop m&uuml;ziğinin başarılı isimlerinden Mustafa Sandal, ge&ccedil;tiğimiz yaz dinleyicileri ile buluşturduğu &#39;Ben Olsaydım&#39; isimli şarkısının ardından yine yazı hareketlendirecek yepyeni bir şarkı ile sevenlerinin karşısına &ccedil;ıktı.</p>\r\n\r\n<p>&#39;D&ouml;n D&uuml;nya&#39; adlı şarkı ile hayranlarıyla buluşan sanat&ccedil;ı, s&ouml;z ve m&uuml;ziği Burak &Ouml;ks&uuml;zoğlu, d&uuml;zenlemesi Se&ccedil;kin &Ouml;zer imzalı &ccedil;alışması i&ccedil;in Nihat Odabaşı y&ouml;netmenliğinde kamera karşısına ge&ccedil;ti.</p>\r\n\r\n<p>Mustafa Sandal&#39;ın yeni maxi single &ccedil;alışmasının da habercisi olan &#39;D&ouml;n D&uuml;nya&#39; renkli g&ouml;r&uuml;nt&uuml;lerden oluşan video klibi ile ekranlardaki yerini aldı.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><iframe frameborder=\"0\" height=\"315\" scrolling=\"no\" src=\"https://www.youtube.com/embed/u2GJQO4twao?controls=0&amp;amp;showinfo=0\" width=\"560\"></iframe></p>\r\n','mus.jpg',NULL);

#
# Structure for table "muzikyorumlar"
#

DROP TABLE IF EXISTS `muzikyorumlar`;
CREATE TABLE `muzikyorumlar` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `haberId` varchar(255) DEFAULT NULL,
  `yorum` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `uye_ID` varchar(255) DEFAULT NULL,
  `uye_adsoy` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `yapanimg` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "muzikyorumlar"
#

INSERT INTO `muzikyorumlar` VALUES (1,'0000-00-00 00:00:00','8','gg','3','hilal','hilal13.jpg'),(37,'2016-12-15 19:13:39','8','asd','3','hilal','hilal13.jpg'),(38,'2016-12-15 19:18:04','8','akif muzik yorum','4','Akif Güldemir','ako1.jpg'),(39,'2016-12-15 19:37:55','8','qweqwe','4','Akif Güldemir','ako1.jpg'),(40,'2016-12-16 02:18:45','8','qwq','4','Akif Güldemir','ako1.jpg'),(41,'2016-12-16 02:29:24','6','asd','4','Akif Güldemir','ako1.jpg'),(42,'2016-12-16 02:29:30','6','qweqw','4','Akif Güldemir','ako1.jpg'),(43,'2016-12-16 02:29:40','6','qweqweqwe','4','Akif Güldemir','ako1.jpg'),(44,'2016-12-17 02:47:53','9','122','4','Akif Güldemir','ako1.jpg'),(45,'2016-12-17 02:48:32','9','qweqwe','4','Akif Güldemir','ako1.jpg'),(46,'2016-12-17 02:49:20','52','tra','4','Akif Güldemir','ako1.jpg'),(47,'2016-12-20 16:49:02','57','a','4','Akif Güldemir','ako1.jpg'),(48,'2017-01-12 17:21:00','6','123','4','Akif Güldemir','ako1.jpg');

#
# Structure for table "otomobil"
#

DROP TABLE IF EXISTS `otomobil`;
CREATE TABLE `otomobil` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `keywords` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `text` longtext CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT '',
  `aciklama` varchar(88) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "otomobil"
#

INSERT INTO `otomobil` VALUES (4,'Otomotiv ihracatı 9 ay yüzde 11 arttı.','Otomotiv endüstrisi ihracatı 2016\'nın 9 ayında yüzde 11 artış gösterirken ..','<p>Otomotiv end&uuml;strisi ihracatı, yılın 9 ayında y&uuml;zde 11 arttı. Otomotiv Sanayii Derneği (OSD) tarafından hazırlanan &quot;2016 yılı 3. &ccedil;eyrek otomotiv sanayii dış ticaret raporu&quot; yayımlandı.</p>\r\n\r\n<p>Buna g&ouml;re 2016&#39;nın 9 ayında T&uuml;rkiye&#39;nin toplam ihracatı y&uuml;zde 3 azalırken, otomotiv end&uuml;strisinin ihracatı y&uuml;zde 11 artış g&ouml;sterdi. B&ouml;ylece otomotiv, toplam ihracat i&ccedil;erisinde y&uuml;zde 16,5&#39;lik pay ile ilk sıradaki yerini korudu.</p>\r\n\r\n<p>Aynı d&ouml;nemde T&uuml;rkiye&#39;nin toplam ihracatı y&uuml;zde 3, ithalatı ise y&uuml;zde 6 azaldı. Bu d&ouml;nemde dış ticaret a&ccedil;ığı 49 milyar dolardan 42 milyar dolara geriledi.</p>\r\n\r\n<p>GTİP 87 kapsamında belirlenen otomotiv dış ticaret verilerine g&ouml;re ise ihracat ge&ccedil;en seneye g&ouml;re y&uuml;zde 12 artarken, ithalat y&uuml;zde 2 azaldı. Bu d&ouml;nemde dış ticaret a&ccedil;ığı y&uuml;zde 533 oranında azalarak, 1,4 milyar dolar fazla verdi.</p>\r\n\r\n<p>Otomobil ihracatı 2016&#39;da, 2015 yılı ocak-eyl&uuml;l d&ouml;nemine g&ouml;re y&uuml;zde 8, ithalat ise y&uuml;zde 3 arttı. Bu d&ouml;nemde otomobil dış ticaret a&ccedil;ığı y&uuml;zde 12 azalarak 1,4 milyar dolara indi. .</p>\r\n\r\n<h2>İHRACATIN İTHALATI KARŞILAMA ORANI 1,18&#39;E Y&Uuml;KSELDİ</h2>\r\n\r\n<p>Raporda yer alan bilgilere g&ouml;re 2016 yılı ocak-eyl&uuml;l d&ouml;neminde GTİP bazında dış ticaret dengesi verileri i&ccedil;erisinde; dış ticaret fazlası yaratan ilk 10 sekt&ouml;r&uuml;n analizine bakıldığında, 87 GTİP&#39;li &quot;motorlu kara taşıtları, trakt&ouml;rler, bisikletler, motosikletler ve diğer kara taşıtları, bunların aksam, par&ccedil;a, aksesuarı&quot; dış ticareti, dış ticaret fazlası yaratan altıncı sekt&ouml;r konumunda bulunuyor..</p>\r\n\r\n<p>T&uuml;rkiye toplam dış ticaretinde dış ticaret fazlası yaratan ilk 10 sekt&ouml;r, dış ticaret fazlası yaratan t&uuml;m sekt&ouml;rler i&ccedil;erisinde y&uuml;zde 75 paya sahip..</p>\r\n\r\n<p>Son 10 yıllık dış ticaret verilerine g&ouml;re; otomotiv sekt&ouml;r&uuml; 2011 ve 2015 yılları haricinde dış ticaret fazlası verdi. Otomotiv sekt&ouml;r&uuml;n&uuml;n son 10 yıllık dış ticaret dengesi ortalaması 1,5 milyar dolar değerinde ger&ccedil;ekleşti..</p>\r\n\r\n<p>Dış ticaret dengesinin 2016 yılı aylık gelişimine g&ouml;re otomotiv sekt&ouml;r&uuml; eyl&uuml;l ayında 1,4 milyar dolar dış ticaret fazlası verdi. İhracatın ithalatı karşılama oranı ise 1,18&#39;e y&uuml;kseldi. .</p>\r\n\r\n<p>Uludağ İhracat&ccedil;ı Birlikleri (UİB) tarafından OSD i&ccedil;in &ouml;zel olarak analiz edilen otomotiv ihracatı kapsamında; UİB T&uuml;rkiye Geneli Otomotiv End&uuml;strisi sınıflandırmasına kıyasla &quot;r&ouml;mork ve yarı r&ouml;mork&quot;, &quot;tarım trakt&ouml;r&uuml;&quot; verileri dahil edilirken, &quot;kullanılmış ara&ccedil;lar&quot;, &quot;iki tekerlekli taşıtlar&quot; ve &quot;demir yolu taşıtları&quot; hari&ccedil; tutuluyor..</p>\r\n\r\n<p>Otomotiv ana sanayi ihracatı bu yılın 9 ayında ge&ccedil;en senenin aynı d&ouml;nemine kıyasla y&uuml;zde 15, yan sanayi ihracatı ise y&uuml;zde 5 artış g&ouml;sterdi..</p>\r\n\r\n<p><a href=\"http://www.otohaber.com.tr/haberler/piyasa/2016/11/01/otomotiv-ihracati-9-ay-yuzde-11-artti-1478008962\">.</a></p>\r\n','oto.jpg',NULL),(5,'Chevrolet Camaro 50 yaşında..','Muscle Car sınıfının kilit otomobillerden biri olan Chevrolet Camaro, güçlü motorları..','<p>Amerikan otomobil end&uuml;strisinin hızlı y&uuml;kselişini s&uuml;rd&uuml;rd&uuml;ğ&uuml; 60&#39;lı yıllarda model sayısı hızla artıyordu. Bir yanda Cadillac Eldorado ya da Lincoln Mark II veya Mark III gibi ulaşılması g&uuml;&ccedil;, devasa coupeler yer alırken diğer yanda Chevrolet Bel Air ya da Ford Crown Victoria gibi sedanların 2 kapısı eksik coupe versiyonları vardı. Bu noktada Lee Iacocca devrim niteliğinde bir yenilik yaptı ve Ford Mustang projesine start verdi.</p>\r\n\r\n<p>Ortaya &ccedil;ıkan ilk Mustang konseptleri ise diğer Amerikalı &uuml;reticileri harekete ge&ccedil;irdi. Mustang&#39;ın Nisan 1964&#39;te &uuml;retilmesinin ardından Chevrolet Camaro, Eyl&uuml;l 1966&#39;da &uuml;retilmeye başladı. Ardından katılacak olan Plymouth Barracuda ve Dodge Charger ile birlikte ciddi bir rekabet başlayacaktı. Ancak bu sınıftaki asıl rekabet Mustang ile Camaro arasında ge&ccedil;iyordu. Sınıf olarak ise Mustang ve Camaro başlangı&ccedil;ta Pony Car yani kompakt sınıfta yer alıyordu. Sonraki nesillerde yer alan performanslı modeller ise Muscle Car (Kaslı Otomobil) olarak adlandırıldı. Aslında Pony Car ile Muscle Car arasında da net standartlar yoktu. Bu yıl 50 yaşını kutlayan ve Chevrolet tarihinin &ouml;nemli modellerinden biri olan Camaro&#39;nun ilk nesli, 4,6 metre uzunluğunda ve 1,8 metre genişliğindeydi. Geniş i&ccedil; hacmi, 4 kişilik olması ve b&uuml;y&uuml;k bagajıyla d&ouml;nemi i&ccedil;in konforlu bir coupe olan Camaro, kendine has tasarımıyla da &ouml;ne &ccedil;ıkarken sağlam Şasesisayesinde b&uuml;y&uuml;k hacimli V8&#39;lerin montajına yani modifiyeye de uygun bir model olduğu i&ccedil;in &ccedil;ok tercih edilmeye başladı. Standart olarak ise bu ara&ccedil;ta 6 silindirli 3,8 lt&#39;lik motor vardı ve 140 HP g&uuml;c&uuml;ndeydi. Diğer se&ccedil;enek ise 5,4 lt&#39;lik 325 HP g&uuml;c&uuml;ndeki V8 idi.</p>\r\n\r\n<p>Ayrıca birinci nesil Camaro&#39;da kumaş tavanlı cabrio se&ccedil;eneği de vardı. 1969&#39;da makyajlanan Camaro&#39;ya kapaklı farlar, sis farları, bagaj spoyleri eklendi. Camaro&#39;nun hır&ccedil;ınlaşmasındaki en b&uuml;y&uuml;k pay ise 425 HP g&uuml;kadar uzanan se&ccedil;enekler vardı. Camaro SS, 360 HP&#39;lik motoruyla 5,5 saniyede 0&#39;dan 100 km/s&#39;ye ulaşıyordu. Ancak burun yapısı Camaro i&ccedil;in sorun olacaktı. &Ccedil;&uuml;nk&uuml; Amerika&#39;da otomobil sayısıyla birlikte trafik kazaları da b&uuml;y&uuml;k oranda artmaya başladı. Amerikan otomobillerinde ise hala b&uuml;y&uuml;k g&uuml;venlik zaafları vardı ve cabriolar i&ccedil;in de ge&ccedil;erliydi. İkinci nesil Camaro&#39;da cabrio yoktu ama aracın tasarımında b&uuml;y&uuml;k değişiklikler yapıldı. Arka b&ouml;l&uuml;m&uuml; tamamen değiştirildi ve burun kısmı c&uuml;ndeki 7,0 lt&#39;lik V8 motora aitti. Birinci nesil Camaro&#39;nun satışları Mustang&#39;in gerisindeydi ama aradaki fark giderek kapanıyordu.</p>\r\n\r\n<p>Chevrolet, daha dinamik g&ouml;r&uuml;n&uuml;ml&uuml; bir Camaro geliştirmeye başladı ve tamamen yenilenen ikinci nesil Camaro, 1970&#39;de &uuml;retilmeye başlandı.</p>\r\n\r\n<p>İkinci nesil Camaro&#39;nun sıkıntılı y&uuml;z&uuml; nedeniyle balta burun olarak da adlandırılıyordu. Camaro&#39;da 155 HP&#39;lik 4,1 lt hacmindeki motorla Camaro SS&#39;teki 5,7 lt&#39;lik V8 motorakadar uzanan se&ccedil;enekler vardı. Camaro SS, 360 HP&#39;lik motoruyla 5,5 saniyede 0&#39;dan 100 km/s&#39;ye ulaşıyordu. Ancak burun yapısı Camaro i&ccedil;in sorun olacaktı. &Ccedil;&uuml;nk&uuml; Amerika&#39;da otomobil sayısıyla birlikte trafik kazaları da b&uuml;y&uuml;k oranda artmaya başladı. Amerikan otomobillerinde ise hala b&uuml;y&uuml;k g&uuml;venlik zaafları vardı ve cabriolar i&ccedil;in de ge&ccedil;erliydi. İkinci nesil Camaro&#39;da cabrio yoktu ama aracın tasarımında b&uuml;y&uuml;k değişiklikler yapıldı. Arka b&ouml;l&uuml;m&uuml; tamamen değiştirildi ve burun kısmıda artık &ccedil;ıkıntılı değildi. Emisyon kuralları nedeniyle Camaro&#39;da katalizat&ouml;r vardı ve yeni ateşleme sistemi de g&ouml;rev yapıyordu. Diğer tarafta Camaro&#39;nun motor g&uuml;c&uuml;, petrol krizinin de etkisiyle 245 HP&#39;ye d&uuml;şt&uuml;. 1975&#39;ten itibaren Camaro satışları da artmaya başladı. Camaro satışları beklenenden daha iyiydi ve adeta Chevrolet&#39;nin kurtarıcı modeliydi.</p>\r\n\r\n<p>&Ouml;zellikle &uuml;&ccedil;&uuml;nc&uuml; neslin 1982&#39;de &uuml;retilmeye başlaması ve Mustang&#39;ın duraklama d&ouml;nemine girmesi, diğer Amerikalı &uuml;reticilerin zararlarının b&uuml;y&uuml;k olması Camaro satışlarını daha da artırdı.</p>\r\n\r\n<p>&Ouml;zellikle &uuml;&ccedil;&uuml;&Uuml;&ccedil;&uuml;nc&uuml; nesil Camaro, 0,37 Cd aerodinamik katsayısına sahipti ve &ccedil;ift kare farları, McPherson tipi &ouml;n s&uuml;spansiyonlarıyla da olduk&ccedil;a iddialıydı. Camaro&#39;nun tek par&ccedil;alı bagaj kapağıyla da hatchback otomobilin avantajlarını sunuyordu. &Ouml;nceki nesline g&ouml;re 230 kg hafifleyen Camaro&#39;nun yatabilen &ouml;n koltukları ve katlanabilir arka koltukları da ergonomisini arttırıyordu. Camaro&#39;nun elektronik kontroll&uuml; yakıt sistemine sahip 2,5 lt&#39;lik 4 silindirli motoru 151 HP g&uuml;c&uuml;ndeydi.</p>\r\n\r\n<p>&Ouml;zellikle Avrupa pazarı i&ccedil;in geliştirilen Camaro&#39;larda ise 173 HP g&uuml;c&uuml;nde 2,8 lt&#39;lik V6 vardı. Camaro&#39;da g&ouml;rev yapan V8 ise 5,0 lt hacmindeydi ve 305 HP &uuml;retiyordu. V8 Camaro&#39;da yeni 4 ileri otomatik şanzıman da g&ouml;rev yapıyordu.</p>\r\n\r\n<p>1985&#39;te makyajlanan Camaro&#39;ya eklenen IROC-Z se&ccedil;eneğinde 5,0 lt&#39;lik 215 HP g&uuml;c&uuml;nde enjekt&ouml;rl&uuml; V8 motor vardı. Bu Camaro da &ouml;ncesinde olduğu gibi &ccedil;ok sevilmişti ama coupe pazarı Japon ve Alman markaları tarafından istila edilmeye başlamıştı.</p>\r\n\r\n<p>Chevrolet, geride kalmamak i&ccedil;in d&ouml;rd&uuml;nc&uuml; nesil Camaro&#39;yu 1993&#39;te pazara &ccedil;ıkarttı. Yuvarlak &ccedil;izgilere sahip olan Camaro&#39;da 2 farklı motor se&ccedil;eneği vardı. Camaro&#39;nun kardeşi olan ve Avrupa&#39;da da satılan Pontiac Firebird&#39;te de g&ouml;rev yapan 3,4 lt&#39;lik V6 motor 162 HP &uuml;retiyordu. 5,7 lt&#39;lik V8&#39;in motor g&uuml;c&uuml; ise 270 HP idi. Bu 4 kişilik coupenin motorları, performans ve yakıt t&uuml;ketimleri değerlendirildiğinde Japon ve Avrupalı rakipleri karşısında geride kalıyordu. Camaro&#39;da 1996&#39;da 3,4 lt&#39;lik motor yerini 200 HP g&uuml;c&uuml;ndeki 3,8 lt&#39;lik motora bıraktı. Camaro&#39;nun V8&#39;i de yine 285 HP&#39;lik Corvette motoruydu.</p>\r\n\r\n<p>1997&#39;de makyajlanan Camaro&#39;nun i&ccedil; mekanı elden ge&ccedil;irildi ve stop lambaları yenilendi. Ertesi yıl yenilenen farlarıyla biraz daha şık hale geldi. Bu yeniliklere rağmen Camaro satışları giderek azaldı ve 2001&#39;de 29.000 adetle, Camaro tarihinin en d&uuml;ş&uuml;k satış rakamı ortaya &ccedil;ıktı. Ağustos 2002&#39;de ise Camaro&#39;nun &uuml;retimi sona erdi.</p>\r\n\r\n<p>Ancak GM, Camaro&#39;dan vazge&ccedil;emedi. &Ccedil;&uuml;nk&uuml; Camaro, markanın en istikrarlı ve &uuml;nl&uuml; modellerinden biriydi. Bu nedenle yeniden hayata d&ouml;nd&uuml;r&uuml;len Camaro, 2006&#39;da Detroit Otomobil Fuarı&#39;nda konsept olarak tanıtıldı. Ed Welburn tarafından tasarlanan ve 2007&#39;de &uuml;retimine başlanılan beşinci neİkinci nesil Camaro, tasarımı, motor se&ccedil;enekleri, donanım ve şasi &ouml;zellikleriyle &ouml;nceki neslinin başarısını s&uuml;rd&uuml;r&uuml;yordu. Chevrolet, 1975&#39;te s&uuml;r&uuml;ş g&uuml;venliğini dikkate alarak Camaro&#39;nun &ccedil;ıkıntılı burnundan vazge&ccedil;ti. Bu tasarım da satış rakamlarını arttırdı. 1974&#39;deki ekonomik krize rağmen boyutlarından ve V8&#39;inden vazge&ccedil;emeyen Camaro&#39;nun Z 28 seneneği 245 HP idi. Makyajın ardından 1978&#39;de yollara &ccedil;ıkan Camaro Rally Sport, &ccedil;ift rengiyle &ouml;ne &ccedil;ıkıyordu ve artık RS logosunun yerini yazı aldı. Chevrolet 1993&#39;te d&ouml;rd&uuml;nc&uuml; nesil Camaro&#39;nun &uuml;retimine başladı. Chevrolet, Camaro &uuml;retimine 2002&#39;de ara verdi. D&ouml;nemin retro modasına uyarak 2010&#39;da yeniden &uuml;retim bantlarına giren Camaro, genlerini koruyordu. 2016&#39;da yollara &ccedil;ıkan Camaro&#39;nun Coupe ve Cabrio karoserlerinde farklı motor ve donanım se&ccedil;enekleri yer alıyor. sil Camaro, o d&ouml;nemin retro otomobil modasına uydu. İlham kaynağı ise ilk nesildi. Beşinci nesil Camaro, birinci neslindeki gibi uzun motor kaputuna ve şişkin &ccedil;amurluklara sahipti. Kare g&ouml;stergeleri ve diğer &ouml;zellikleriyle i&ccedil; mekanda da retro tasarım &ccedil;izgilerini taşıyan Camaro&#39;da 300 HP g&uuml;c&uuml;nde 3,6 lt&#39;lik V6 ya da 6,2 lt&#39;lik V8 motor se&ccedil;enekleri vardı. Camaro, eski başarısını yeniden yakaladı ve 2010-2015 yılları arasında, yıllık ortalama 84.000 adetlik satış rakamlarına ulaştı.</p>\r\n\r\n<p>Beşinci neslin başarısının ardından yollara &ccedil;ıkan altıncı nesil Camaro, bu kez 8 in&ccedil;lik dokunmatik multimedya sistemi, LED&#39;li aydınlatması, s&uuml;r&uuml;ş modlarıyla iddialıydı ama Camaro &ccedil;izgilerini korumayı s&uuml;rd&uuml;r&uuml;yordu. &Ouml;nceki nesline g&ouml;re 90 kg hafifleyen ve daha aerodinamik bir karosere sahip olan g&uuml;ncel Camaro&#39;da 279 HP&#39;lik 4 silindirli 2,0 lt&#39;lik turbo ve 340 HP&#39;lik 3,6 lt&#39;lik V6 benzinliler yer alırken V8&#39;den de vazge&ccedil;ilmedi. Yeni Camaro&#39;nun SS se&ccedil;eneğinde g&ouml;rev yapan 6,2 lt&#39;lik V8 motor, 461 HP g&uuml;&ccedil; &uuml;retiyor ve g&uuml;c&uuml;n aktarılması i&ccedil;in 8 ileri otomatik şanzıman g&ouml;rev yapıyor.</p>\r\n\r\n<p><a href=\"http://www.otohaber.com.tr/testmerkezi/2016/10/31/yildonumu-chevrolet-camaro-50-yasinda\">.</a></p>\r\n','camaro.jpg',NULL),(7,'Binek otomobil ÖTV sine hükümet ayarı..','Hükümet, binek otomobillerin ÖTV\'sinde fiyata göre ayarlama yapabilecek..','<p>H&uuml;k&uuml;met, binek otomobillerin&nbsp;<strong>&Ouml;TV</strong>&#39;sinde fiyata g&ouml;re ayarlama yapabilecek. Aynı motor hacmine sahip l&uuml;ks ara&ccedil;larla normallerin vergisi farklılaşacak. D&uuml;zenlemenin ithalatı frenlemesi bekleniyor.</p>\r\n\r\n<p>H&uuml;k&uuml;met &quot;Kamu Mali Y&ouml;netim ve Kontrol Kanunu ile Bazı Kanunlarda Değişiklik Yapılması Hakkında Kanun Tasarısı&quot;nı Meclis&#39;e g&ouml;nderdi. Tasarı, otomotiv ve altyapı projelerini yakından ilgilendiriyor. Tasarı yasalaşırsa, Bakanlar Kurulu binek otomobillerin &Ouml;TV&#39;sinde fiyata g&ouml;re ayarlama yapabilecek. Motorlu taşıtların &Ouml;TV oranlarını bir katına kadar artırıp, sıfıra indirme yetkisi de devam edecek. Halen motor hacmine g&ouml;re (1600 cc altı, 1601- 2000 cc, 2001 cc) alınan vergi oranlarında değişiklik g&uuml;ndeme gelebileceği belirtiliyor.</p>\r\n\r\n<p><strong>GRUP OLUŞTURULACAK</strong><br />\r\nBinek otomobillerle 3.5 tonun altında y&uuml;k taşıyan panelvanlar ve 9 kişiye kadar yolcu taşıyan minib&uuml;sler i&ccedil;in, &Ouml;TV matrahını esas alarak fiyat grupları oluşturabilecek. Bu fiyat grupları ve malların cinsi, sınıfı, &uuml;st yapı g&ouml;vde tanımı, istiap haddi ile yolcu ve y&uuml;k taşıma kapasitesi itibarıyla farklı oranlar belirlemeye yetkili olacak. Daha basit anlatımla ara&ccedil;ların &Ouml;TV oranları, sadece motor hacmine g&ouml;re değil, fiyatına, kasa tipine, taşıma kapasitesine ve cinsine g&ouml;re de belirlenebilecek. Bu d&uuml;zenlemeyle vergi gelirlerinin artırılması &ouml;ng&ouml;r&uuml;l&uuml;yor. Meclise sunulan tasarıyla &ouml;zellikle 1.6 litrelik k&uuml;&ccedil;&uuml;k motorlarla vergi avantajından yararlanan l&uuml;ks otomobillerin hedeflendiği g&ouml;r&uuml;l&uuml;yor.</p>\r\n\r\n<p><strong>FİYATA G&Ouml;RE VERGİ</strong><br />\r\nB&ouml;ylece son yıllarda rekor satışlara imza atan l&uuml;ks otomobiller, artık fiyatına g&ouml;re vergilendirilecek. Satış fiyatı 50 bin TL olan 1.6 lt motorlu normal bir otomobille, fiyatı 100 bin TL&#39;nin &uuml;st&uuml;nde 1.6 lt motorlu l&uuml;ks otomobilin vergisi aynı olmayacak. L&uuml;ks otomobile daha y&uuml;ksek vergi uygulanacak.</p>\r\n\r\n<p><strong>DEV PROJELERDE Y&Uuml;ZDE 10 &Ouml;DENEK ŞARTI KALKIYOR</strong><br />\r\nGebze-Haydarpaşa, Sirkeci- Halkalı Banliy&ouml; Hattının İyileştirilmesi, Demiryolu Boğaz T&uuml;p Ge&ccedil;işi İnşaatı Projesi, şehir i&ccedil;i raylı ulaşım sistemleri ve metro yapım projeleri ile diğer demiryolu yapımı yatırımları ve bu projelerin ihalesinde ilk yıl i&ccedil;in gerekli olan y&uuml;zde 10 &ouml;denek şartı aranmayacak. H&uuml;k&uuml;met, Meclis&#39;e sunulan tasarıyla Anayasa Mahkemesi&#39;nin ge&ccedil;en kamu idarelerinin b&uuml;t&ccedil;elerinde &ouml;denek aktarımını d&uuml;zenleyen maddesindeki iptal gerek&ccedil;esini dikkate alarak d&uuml;zenleme yapıyor. Buna g&ouml;re, merkezi y&ouml;netim kapsamındaki kamu idarelerinin b&uuml;t&ccedil;eleri arasındaki &ouml;denek aktarmalarına ilişkin işlemler B&uuml;t&ccedil;e Yasası&#39;nda belirlenecek. Merkezi y&ouml;netim kapsamındaki kamu idareleri, aktarma yapılacak tertipteki &ouml;deneğin y&uuml;zde 20&#39;sine kadar kendi b&uuml;t&ccedil;eleri i&ccedil;inde &ouml;denek aktarması yapabilecek. Ayrıca Sosyal Sigortalar ve Genel Sağlık Sigortası Kanunu&#39;nda yapılan değişiklikle, g&uuml;nl&uuml;k br&uuml;t asgari &uuml;cretin 6.5 katı olan g&uuml;nl&uuml;k kazan&ccedil; &uuml;st sınırı 7.5 katına y&uuml;kseltiliyor.</p>\r\n\r\n<p><strong>L&Uuml;KSE FREN</strong><br />\r\nL&uuml;ks otomobil satışları son 6 yılda adeta katlandı. 2009&#39;da 27 bin adet olan l&uuml;ks otomobil satışları 2015&#39;te 96 bin adede &ccedil;ıktı. L&uuml;ks otomobillerin her yıl rekor kırmasının nedeni ise vergi avantajına sahip 1.6 lt&#39;lik motorlu ara&ccedil;lar. &Ouml;TV&#39;nin 1.6 &uuml;zerinde y&uuml;zde 90 olması 1.6 litre hacimli modelleri cazip hale getirdi.</p>\r\n\r\n<p><a href=\"http://www.otohaber.com.tr/haberler/piyasa/2016/10/31/otomobilde-otv-tedirginligi\">.</a></p>\r\n','vergi.jpg',NULL),(8,'Farklı sınıfta aynı surat..','Otomobil tasarımlarında marka yüzü oluşturma hevesi artık alışmak zorunda kaldığımız.','<p>Otomobil tasarımlarında marka y&uuml;z&uuml; oluşturma hevesi artık alışmak zorunda kaldığımız bir ger&ccedil;ek haline geldi. Mercedes S Serisi, E Serisi ve C Serisi&#39;ni yan yana dizilmiş halde g&ouml;ren birisi arkadan baktığında &uuml;&ccedil; otomobili ayırt etmek i&ccedil;in boyut algısına g&uuml;venmek zorunda. &Ouml;zellikle E ve C Serisi&#39;nde bu algı olduk&ccedil;a zayıf. Benzer yakınlığı Audi A3 Sedan, A4, A6 ve A8&#39;de de g&ouml;r&uuml;yoruz. BMW de yeni tanıttığı 5 Serisi ile şaşırtıcı bir tasarım yerine 7 Serisi&#39;nin &ccedil;izgilerini yeniden oranlayarak karşımıza &ccedil;ıkarttı.</p>\r\n\r\n<p>Sadece farklı sınıflar arasında benzerlikler değil, nesiller arasında da &ccedil;ok yakın tasarımlar kullanılıyor. Bir &ouml;nceki nesil otomobil ile yeni nesli ayırt etmek artık daha g&uuml;&ccedil; olmaya başladı. &Ouml;zellikle m&uuml;şterilerini fazla sarsmadan yeni nesliyle yollara &ccedil;ıkmak isteyen &quot;Premium&quot; markalar kafa karışıklarını arttırıyor. &Ouml;rneğin Audi A4. &Uuml;&ccedil;&uuml;nc&uuml; nesil ve d&ouml;rd&uuml;nc&uuml; nesil arasında farların ve &ouml;n panjurun daha keskin &ccedil;izilmesi haricinde tasarım farkı bulmak zor. Bu sayede bir &ouml;nceki A4 ile yakalanılan sevgi, yeni nesille riske atılmıyor. &Ouml;ncesini beğenenler yenisini de beğeniyor. Bu sayede yıllar sonra da yollarda A4 g&ouml;ren birisi markanın orta sınıfta temsil edilen modelini tanıyor. &Ccedil;&uuml;nk&uuml; marka y&uuml;z&uuml; ve A4 tasarımı artık akıllara işlenmiş oluyor.</p>\r\n\r\n<p>Premium haricinde, tasarımında gelişmeye devam eden markalarda ise nesiller arasındaki farklar &ccedil;ok daha keskin bir şekilde ayırt edilebiliyor. &Ouml;rneğin Civic Sedan. Onucu nesliyle karşımıza &ccedil;ıkan Civic Sedan&#39;ın &uuml;zerinde model logosu olmasa tanınması m&uuml;mk&uuml;n olmazdı. Bir &ouml;nce tasarımı tamamen silip yepyeni bir tasarım diliyle şekillendi. Bu cesaret yeni m&uuml;şteri kitlesi oluşturma konusunda markaya bir fırsat tanıyor.</p>\r\n\r\n<p>G&uuml;n ge&ccedil;tik&ccedil;e daha &ccedil;ok otomobil &uuml;reticisi, marka y&uuml;z&uuml; felsefesi adı altında benzer otomobilleri &ouml;n&uuml;m&uuml;ze &ccedil;ıkartmaya devam ediyor. Markaların fazla riske girmek istememesi bizleri benzer y&uuml;zl&uuml; otomobillere maruz bırakmaya devam edecek gibi. &Ouml;zg&uuml;n tasarımlı, marka y&uuml;z&uuml; adı atında birbirine benzer değil, birbirine bağlı olduğunu hissettiren otomobillerin &ccedil;ıkması ise daha fazla heyecan uyandırıyor.</p>\r\n\r\n<p><a href=\"http://www.otohaber.com.tr/haberler/2016/11/01/farkli-sinifta-ayni-surat-1478011898\">.</a></p>\r\n','mercedes.jpg',NULL),(9,'Fransız pilot yine şampiyon.','Volkswagen takımının Fransız pilotu Sebastien Ogier , geçtiğimiz haftasonu Dünya Ralli..','<p><strong>Volkswagen</strong>&nbsp;takımının Fransız pilotu&nbsp;<strong>Sebastien Ogier</strong>&nbsp;, ge&ccedil;tiğimiz haftasonu&nbsp;<strong>D&uuml;nya Ralli Şampiyonası</strong>&#39;nın İspanya&#39;da d&uuml;zenlenen ayağını (Rally de Espana) kazanarak şampiyonluğunu ilan etti. İspanya&#39;da adeta yerel bir kahraman olan&nbsp;<strong>Hyundai</strong>&nbsp;pilotu, İspanyol&nbsp;<strong>Dani Sordo</strong>&#39;yu 15,6 saniye geride bırakan&nbsp;<strong>Ogier</strong>,&nbsp;<strong>Polo R WRC</strong>&nbsp;aracıyla d&ouml;rd&uuml;nc&uuml; kez &uuml;st &uuml;ste D&uuml;nya Ralli Şampiyonu olarak b&uuml;y&uuml;k bir başarı elde etti.</p>\r\n\r\n<p>Galibiyeti sonrası a&ccedil;ıklama yapan&nbsp;<strong>Ogier</strong>&nbsp;: &quot;Sezonun bitimine iki yarış kala şampiyonluğu ilan etmek harika, daha fazlasını yapamazdım. Bu haftasonu &ccedil;ok eğlendim. Artık d&ouml;rt kez d&uuml;nya ralli şampiyonu olan b&uuml;y&uuml;k pilotlar ile beraber anılmak muhteşem olacak.</p>\r\n\r\n<p>Fransız pilot, sezonda şu ana kadar koşulan 11 yarıştan, 5&#39;ini kazandı. Takım arkadaşları Jari-Matti Latvala ve Andreas Mikkelsen&#39;in de kazandığı yarışlar sayesinde Volkswagen, takımlar şampiyonluğunu &ccedil;ok rahat elde etti.</p>\r\n\r\n<p><a href=\"http://www.otohaber.com.tr/haberler/motorsporlari/2016/10/17/fransiz-pilot-yine-sampiyon\">.</a></p>\r\n','yaris.jpg',NULL),(10,'Kodiaq Coupe geliyor !','Skoda, SUV modeli Kodiaq‘ın daha sportif modeli Kodiaq Coupe için şartları sonuna ','<p>Skoda tarihi i&ccedil;in en &ouml;nemli modellerden biri olan&nbsp;Kodiaq, markanın SUV ligindeki tek temsilcisi olarak ge&ccedil;tiğimiz&nbsp;Eyl&uuml;l&nbsp;ayında resmi olarak karşımıza &ccedil;ıkmıştı. Rekor bir talep ile tam gaz y&uuml;kselmeye devam eden SUV ve Crossover liginde ilerlemekte kararlı olan Skoda cephesinden resmi bir onaylama daha geldi. Skoda, Kodiaq modelinin&nbsp;Coupe&nbsp;modeli i&ccedil;in kolları sıvıyor. Lakin Skoda&rsquo;nın &ouml;n&uuml;nde aşması gereken bir sorun var.</p>\r\n\r\n<p><img alt=\"\" src=\"http://www.otomobilgazetesi.com/uploads/files/20161101094502_2017-skoda-kodiaq-teaser-yeni-02.jpg\" style=\"height:270px; width:480px\" /></p>\r\n\r\n<p>Kodiaq&rsquo;ın daha sportif bir g&ouml;r&uuml;n&uuml;me b&uuml;r&uuml;nm&uuml;ş haliyle karşımıza &ccedil;ıkacak olan&nbsp;Kodiaq Coupe&nbsp;i&ccedil;in Skoda, &uuml;retim bandında yer a&ccedil;maya &ccedil;alışmalarına başladı bile. Skoda başkanı&nbsp;Bernhard MaierKodiaq&rsquo;ın Coupe modelinin marka i&ccedil;in m&uuml;kemmel bir şans olduğu g&ouml;r&uuml;ş&uuml;nde. Skoda Ar-Ge b&ouml;l&uuml;m&uuml;nden&nbsp;Christian Strube; &ldquo;Kodiaq Coupe bizim i&ccedil;in b&uuml;y&uuml;k bir potansiyel. Potansiyel konusu &uuml;zerinde herhangi bir sorunumuz yok. Bence buradaki &ouml;nemli nokta tamamen fabrikamızın &uuml;retim kapasitesiyle alakalı. &Ccedil;ok fazla otomobil satan bir &uuml;retici değiliz, b&ouml;yle bir potansiyeli olan modeli &uuml;retmek i&ccedil;in nasıl bir kaynak yaratabileceğimizi tartışıyoruz.&rdquo; diyerek marka i&ccedil;erisinde de bu modelin ne derece istenildiğini g&ouml;steriyor. Bu a&ccedil;ıklama doğrultusunda aklımızda şu soru şekillenebiliyor; &ldquo;Skoda, Kodiaq Coupe&rsquo;nin &uuml;retimine yer a&ccedil;mak i&ccedil;in satış rakamlarında başarılı olmayan bir modelinin &uuml;retimine son verebilir mi?&rdquo; Skoda&rsquo;nın Kodiaq Coupe ile ilgili ciddi adımlarını &ouml;n&uuml;m&uuml;zdeki g&uuml;nler g&ouml;rmemiz muhtemel gibi g&ouml;z&uuml;k&uuml;yor.</p>\r\n','skoda.jpg',NULL);

#
# Structure for table "otomobilyorumlar"
#

DROP TABLE IF EXISTS `otomobilyorumlar`;
CREATE TABLE `otomobilyorumlar` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `haberId` varchar(255) DEFAULT NULL,
  `yorum` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `uye_ID` varchar(255) DEFAULT NULL,
  `uye_adsoy` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `yapanimg` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "otomobilyorumlar"
#

INSERT INTO `otomobilyorumlar` VALUES (17,'2016-11-17 00:36:06','12','aweqwas','3',NULL,NULL),(19,'2016-11-17 15:30:38','11','debeme merhaba','3',NULL,NULL),(21,'2016-11-17 15:52:07','10','qweqwer','3',NULL,NULL),(22,'2016-11-17 17:52:14','9','çok güzel ayakkab?','3',NULL,NULL),(23,'2016-11-17 18:59:54','10','merhabalar ...çok güzel site','3',NULL,NULL),(24,'2016-11-17 19:11:01','10','memolnapy?on','3',NULL,NULL),(25,'2016-11-17 19:14:03','12','deniyorumm','3',NULL,NULL),(26,'2016-11-21 02:12:08','9','deneme12345','3',NULL,NULL),(27,'2016-11-21 02:12:44','9','ididid','3',NULL,NULL),(28,'2016-11-21 02:13:32','9','qwe','3',NULL,NULL),(29,'2016-11-21 02:16:53','9','haberid','3',NULL,NULL),(30,'2016-11-21 02:17:03','9','123','3',NULL,NULL),(31,'2016-11-21 02:17:16','9','123','3',NULL,NULL),(32,'2016-11-21 02:18:13','9','321','3',NULL,NULL),(33,'2016-11-21 02:18:36','9','4323','3',NULL,NULL),(34,'2016-11-21 03:38:29','4','deneme otonobil','12','Akif',NULL),(35,'2016-12-17 02:50:51','4','www','4','Akif Güldemir','ako1.jpg'),(36,'2017-01-13 01:41:56','5','trt','4','Akif Güldemir','ako1.jpg'),(37,'2017-02-02 17:33:01','7','123','4','Akif Güldemir','ako1.jpg');

#
# Structure for table "paylasimlar"
#

DROP TABLE IF EXISTS `paylasimlar`;
CREATE TABLE `paylasimlar` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `paylasim` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `uye_ID` varchar(255) DEFAULT NULL,
  `uye_adsoy` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `paylasimimg` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `kime_Id` varchar(255) DEFAULT NULL,
  `uye_img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=127 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "paylasimlar"
#

INSERT INTO `paylasimlar` VALUES (120,'2017-01-04 19:56:26','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque at arcu sapien. Donec laoreet, nisl quis tempor hendrerit, libero augue blandit turpis, in dignissim odio mauris eu tortor. Ut hendrerit ipsum elit, a elementum nulla ultrices eu. In po','4','Akif Güldemir',NULL,'3','ako1.jpg'),(121,'2017-01-04 20:04:13','deneme','7','Adnan Güldemir',NULL,'7','babam.jpg'),(123,'2017-01-04 20:21:14','resim','4','Akif Güldemir','1173853_10200991258796747_945580081_n3.jpg','4','ako1.jpg'),(124,'2017-01-04 22:59:55','bunu hilal paylaştı','3','Hilal Çil',NULL,'3','hilal13.jpg'),(125,'2017-01-07 23:27:08','','4','Akif Güldemir','1173853_10200991258796747_945580081_n4.jpg',NULL,'ako1.jpg'),(126,'2017-01-07 23:27:21','akif','4','Akif Güldemir','1173853_10200991258796747_945580081_n5.jpg',NULL,'ako1.jpg');

#
# Structure for table "saglik"
#

DROP TABLE IF EXISTS `saglik`;
CREATE TABLE `saglik` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `keywords` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `text` longtext CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT '',
  `aciklama` varchar(88) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "saglik"
#

INSERT INTO `saglik` VALUES (7,'Prostat kanserinin belirtileri !','Erkeklerde görülen en yaygın kanserlerden biri olan prostat kanseri, kansere bağlı ölümler..','<p>Prostat kanserinin nedeni tam olarak bilinmemektedir. H&uuml;cre d&uuml;zeyinde ger&ccedil;ekleşen genetik kusurlara bağlı bazı prostat h&uuml;crelerinin kontrol dışı b&uuml;y&uuml;mesi ve normal h&uuml;crelerin yerini alması ile &ouml;ncelikle &ccedil;evre dokulara ileri evrede ise uzak organlara yayılması s&ouml;z konusu olmaktadır. Kemiklere yayılım olduğu durumlarda ise&nbsp;<a href=\"http://www.milliyet.com.tr/agri/\" target=\"_blank\" title=\"\">Ağrı</a>&nbsp;ve kırıklar ortaya &ccedil;ıkabilir. Hem kanserin &ouml;zellikleri hem de yanlış tedavisi idrar ka&ccedil;ırmaya neden olabilmektedir. Prostat kanserini erken evrede tespit etmenin en etkili yolu tarama yapılmasıdır. Prostat kanserinin belirtileri ortaya &ccedil;ıkmadan erken tanısı i&ccedil;in bazı tarama y&ouml;ntemleri kullanılmaktadır. Bu tarama y&ouml;ntemlerinin 50 yaşından sonra t&uuml;m erkeklere yılda bir uygulanması &ouml;nerilmektedir.</p>\r\n','dok.jpg',NULL),(8,'Erkeklerin Yaptırması Gereken Sağlık Testleri','Memorial Suadiye Tıp Merkezi Dahiliye Bölümü’nden Uz. Dr. İsmail Yağız, erkeklerin efor..','<p>Memorial Suadiye Tıp Merkezi Dahiliye B&ouml;l&uuml;m&uuml;&rsquo;nden Uz. Dr. İsmail Yağız, erkeklerin efor kapasite &ouml;l&ccedil;&uuml;m&uuml;nden işitme ve g&ouml;rme testine, prostat muayenesinden boy-kilo ve tansiyon değerlendirmesine kadar mutlaka yaptırması gereken bir dizi testin sağlık i&ccedil;in b&uuml;y&uuml;k &ouml;nem taşıdığını s&ouml;yl&uuml;yor.</p>\r\n\r\n<p>Dr. İsmail Yağız erkeklerin periyodik olarak mutlaka yaptırması gereken testler hakkında ayrıntılı bilgi verdi.</p>\r\n\r\n<p><strong>1. BOY-KİLO VE TANSİYON DEĞERLENDİRİLMESİ:</strong>&nbsp;Her erkeğin 18 yaşından sonra boy, kilo ve tansiyon &ouml;l&ccedil;&uuml;m&uuml; yaptırması gereklidir. &Ouml;zellikle obezite, diyabet ve hipertansiyon gibi genetik eğilimi bulunan bireyler risk altındadır. Tansiyon takibi de &ouml;nemlidir ve her yaş i&ccedil;in normal değer 120/80 mm /Hg olarak belirtilmektedir.</p>\r\n\r\n<p><strong>2. EFOR KAPASİTESİ &Ouml;L&Ccedil;&Uuml;M&Uuml;:</strong>&nbsp;Ailesinde kalp hastalıkları riski bulunanların daha erken yaşlarda yaptırması gereken bir &ouml;l&ccedil;&uuml;md&uuml;r. &Ouml;zellikle 50 yaş ve &uuml;zerinde mutlaka yapılması &ouml;nerilmektedir. Birka&ccedil; g&uuml;n &ouml;ncesinden hazırlığı bulunan bu testte, koşu bandı &uuml;zerinde efor miktarınıza g&ouml;re kalp ve tansiyon ritminiz değerlendirilmektedir.</p>\r\n\r\n<p><strong>3. PROSTAT MUAYENESİ:</strong>&nbsp;Erkeişitme testi g&ouml;rme testi, klerde kanser nedeni sıralamasında ilk 3&rsquo;te yer alan prostat kanseri, basit muayene ve testlerle ortaya &ccedil;ıkarılabilmektedir. Prostat Spesifik Antijen (PSA) &ouml;l&ccedil;&uuml;m&uuml; ve makattan prostat muayenesi dışında ultrason ile prostat b&uuml;y&uuml;kl&uuml;ğ&uuml; &ouml;l&ccedil;&uuml;lmektedir.</p>\r\n\r\n<p><strong>4. İŞİTME VE G&Ouml;RME TESTİ:</strong>&nbsp;&Ccedil;ok basit muayenelerle işitme y&uuml;zdesinizi &ouml;ğrenebildiğiniz gibi, g&ouml;z muayenesiyle de g&ouml;z i&ccedil;i tansiyonu (glokom), g&ouml;z zarı yırtıkları (retina dekolmanı) ve g&ouml;rme keskinliğinizi &ouml;ğrenebilirsiniz. &Ouml;zellikle 40 yaş ve yukarısında mutlaka g&ouml;rme kusurları oluşabileceğinden erken &ouml;nlem alarak hayat kalitesi artırılabilir.</p>\r\n\r\n<p><strong>5. DEPRESYON TARAMASI:</strong>&nbsp;G&uuml;ndelik yaşamın karmaşası &ldquo;maskeli depresyon&rdquo;a neden olmaktadır. &Ouml;zellikle 50 yaş ve &uuml;zerinde depresyon eğilimi daha da artığından rutin tarama &ouml;nerilmektedir</p>\r\n\r\n<p><strong>6. DİYABET VE KOLESTEROL TESTLERİ:</strong>&nbsp;Ailede diyabetli, kolesterol sorunu olan, tansiyon hastası obez bireyler varsa &ouml;zellikle 30 yaşından sonra kan tetkiklerinizi mutlaka yaptırın. Sağlıklı bir genetik mirasınız var ama sizin hayat şartlarınız k&ouml;t&uuml;yse, 45 yaşından sonra 3 senede bir mutlaka tarama testlerinizi yaptırmanızda fayda vardır. Hipertansiyonu ve kolesterol&uuml; bulunan bireylerde takipler daha sık yapılmaktadır.</p>\r\n\r\n<p><strong>7. MİDE VE KALIN BAĞIRSAK TARAMASI:</strong>&nbsp;&Ouml;zellikle 50 yaş ve &uuml;zerinde yılda bir kez dışkıda gizli kan bakılması, 3 senede bir kolonoskopi mutlaka &ouml;nerilmektedir. Kişide uzun s&uuml;reli mide bağırsak şikayetleri ve ailesinde de bu y&ouml;nde bir &ouml;yk&uuml; varsa daha erken tetkik yaptırmakta fayda vardır.</p>\r\n\r\n<p><strong>8. ALERJİ TESTLERİ:</strong>&nbsp;Sık enfeksiyon ge&ccedil;irmeniz, mide bağırsak rahatsızlığı yaşamanız, kullandığınız ila&ccedil;lardan fayda g&ouml;rmemeniz, cilt sorunları yaşamanız altta yatan bir madde alerjisine bağlı olabilir. Hayat kalitesini olduk&ccedil;a bozan allerji i&ccedil;in &ouml;nerilen testlerin yaptırılması gerekir.</p>\r\n\r\n<p><strong>9. CİLT MUAYENESİ:</strong>&nbsp;&Ccedil;ok g&uuml;neşli bir b&ouml;lgede yaşayan, g&uuml;neşi seven ve yeterince koruyucu kullanmayan bir toplum olarak mutlaka yılda bir kez yaptırmamız gerekir. Cilt kanserleri, k&ouml;t&uuml; huylu benler ve bazı hastalıkların cilt bulguları bu kontrollerde ortaya &ccedil;ıkabilmektedir.</p>\r\n\r\n<p><strong>10. BULAŞICI HASTALIK TARAMASI:</strong>&nbsp;Hepatit B, C, HIV gibi cinsel yolla ge&ccedil;en hastalıklar a&ccedil;ısından gen&ccedil; yaşlı her erkeğin d&uuml;zenli aralıklarla kontrolden ge&ccedil;mesinde fayda vardır.</p>\r\n\r\n<p><strong>11. AŞILANMA:</strong>&nbsp;Grip ve zat&uuml;rre aşıları 65 yaş sonrasında mutlaka &ouml;nerilir. Ek hastalıklar varsa veya hasta &ccedil;ok sık enfeksiyon ge&ccedil;iriyorsan yaş sınıra bakılmaz. Her sene grip, 5 senede bir zat&uuml;rre aşısı yapılmalıdır. Bunlar dışında Hepatit aşısı belli s&uuml;relerde tekrarlanmalı, 10 senede bir tetanoz aşısı yapılmalıdır.</p>\r\n\r\n<p><strong>12. ULTRASON İLE AORT ANEVRİZMASI BAKISI:</strong>&nbsp;&Ouml;zellikle &ccedil;ok uzun s&uuml;re sigara i&ccedil;miş yaşı 60 &uuml;zerinde olan erkeklerde ana atardamar olan &ldquo;Aorta&rdquo;nın genişlemesine karın ultrasonu ile bakılmasında fayda vardır.</p>\r\n\r\n<p><strong>13. AĞIZ VE DİŞ SAĞLIĞI BAKISI:</strong>&nbsp;Diş ve dişeti sağlığı &ouml;zellikle ilerleyen yaşlarda &ccedil;ok &ouml;nemlidir. Mutlaka senede en az bir kez diş muayenesi yapılmalıdır.</p>\r\n','er.jpg',NULL),(9,'Baba Olmanın İdeal Yaşı Nedir?','Günümüzde baba olmak hiç kolay değil. Kimi kariyer basamaklarını hızla tırmanmayı..','<p>G&uuml;n&uuml;m&uuml;zde baba olmak hi&ccedil; kolay değil. Kimi kariyer basamaklarını hızla tırmanmayı hedeflerken, kimi de ekonomik g&uuml;c&uuml;n&uuml; pekiştirmeye &ccedil;alışıyor. Modern &ccedil;ağın olumsuz getirisi olan yoğun koşuşturma da cabası.</p>\r\n\r\n<p>Hal b&ouml;yle olunca, bebeklerin en &ccedil;ok ihtiya&ccedil; duydukları &lsquo;zaman&rsquo; ve &lsquo;ilgiye&rsquo; yeterince zaman kalmayabiliyor. İşte t&uuml;m bu nedenlerden dolayı hemen her erkek kendisine şu soruyu soruyor: Baba olmanın en ideal yaşı nedir?<br />\r\nAcıbadem Maslak Hastanesi&rsquo;nden Psikiyatri Uzmanı Do&ccedil;. Dr. K&uuml;ltegin &Ouml;gel, baba olmanın en ideal yaşıyla ilgili soruları yanıtladı.</p>\r\n\r\n<p><strong>. Erkekler baba olmaya ne zaman hazır oluyor?</strong><br />\r\nAslında bunun belirgin bir zamanı yok. Toplumsal olarak değişebildiği gibi, kişiden kişiye de değişebiliyor. G&uuml;n&uuml;m&uuml;zde aslolan kişinin ruhsal yaşı&hellip; Kimin ruhen hangi yaşta olduğunu kim bilebiliyor ki? Diyelim ki erkeğin bulunduğu yaş &ouml;yle bir relatif noktadır ki nereye yakın olduğunu bilmek m&uuml;mk&uuml;n değildir.</p>\r\n\r\n<p>Kimi zaman bir gen&ccedil;, bir yaşlıdan &ouml;l&uuml;me daha yakındır. Bazen bir gen&ccedil; i&ccedil;in yaşanmışlar, bir yaşlı i&ccedil;in yaşanacaklar kadar &ouml;nem arz eder. Bu durum g&ouml;z &ouml;n&uuml;ne alındığında erkeklerin &ccedil;ocuğa kimi zaman yirmisinde, kimi zaman ellisinde hazır olduğunu s&ouml;ylemek m&uuml;mk&uuml;n<br />\r\n<br />\r\n<strong>. Peki kadınlar &ccedil;ocuk sahibi olma konusunda aynı duyguları mı hissederler?</strong><br />\r\nKadınlarda durum biraz daha farklı&hellip; Kadınlardan sık duyulan bir c&uuml;mledir: &ldquo;canım &ccedil;ok &ccedil;ocuk istiyor!&rdquo;. Nereden icap eder de canı &ccedil;ok &ccedil;ocuk &ccedil;eker? Kadına bir yerlerden bir ses geliyor ama tam a&ccedil;ıklanamayan bir sestir bu, mantığı da olmuyor. Ama kadın anne olmak istiyor işte! İşte bu ses duygularımızdır!</p>\r\n\r\n<p><strong>. Duygularımız mı bizi y&ouml;nlendiriyor bu konuda?</strong><br />\r\nBir a&ccedil;ıdan evet. Anlamlandıramadığımız, tam olarak a&ccedil;ıklayamadığımız bir bi&ccedil;imde bir şeyleri isteriz. Eğer az bir mantık s&uuml;zgecinden başarıyla ge&ccedil;miş bir kararı, duygularımız destekliyorsa, bu karar genelde doğru &ccedil;ıkar. O g&uuml;n nedenlerini a&ccedil;ıklayamayız ama zihnimiz arka k&ouml;şelerinde bizim haberimiz olmadan hesabını kitabını yapmış ve kararını vermiştir.</p>\r\n\r\n<p>Mantıken &ldquo;olabilir&rdquo;i yakaladığımızda, d&ouml;n&uuml;p duygularımıza sormak gerek. &ldquo;Sen ne istiyorsun?&rdquo;. İ&ccedil;eriden gelen mantıktan izole edilmiş ses eğer &ldquo;istiyorum&hellip;&rdquo; diyorsa, mantığın s&ouml;z&uuml; artık orada ge&ccedil;mez. Doğruları, iyileri, ger&ccedil;ekleri topladığımızda &ccedil;ocuk yapma zamanının kabul edilebilir en alt &ccedil;izgisini yakalarsak, kararı duygulara bırakmak en doğrusudur&hellip; Yaşın ka&ccedil; olmasının &ouml;nemi yoktur.</p>\r\n\r\n<p><strong>. Baba olmak i&ccedil;in en ideal bir zaman var mıdır?</strong><br />\r\nAslında idealleri biz yaratırız. İdeali biz koyarız, sonra da peşinden koşarız. İdealler, yakın hedefler değildir. Kolay ulaşılabilir hedefler de ideal olamaz. İdealler uzak bir yerde, belki de hi&ccedil; ulaşılamayacak olanlardır. &ldquo;En iyi yaş&rdquo;ı tanımlamak kadar, &ldquo;en iyi baba&rdquo;yı tanımlamak da zordur.</p>\r\n\r\n<p>İmkansız m&uuml;kemmellerdir ideallerimiz. Hep bir &ldquo;daha iyisi&rdquo; vardır. &ldquo;Daha iyi&rdquo; neyse ona ulaşmaya &ccedil;abalarız. O zaman bekleriz, bekleriz. En iyisi olacak diye bekleriz. Halbuki, en iyisi bizzat &ldquo;iyisi&rdquo;dir. &ldquo;Araba da alayım o zaman &ccedil;ocuk yaparım&rdquo;, &ldquo;biraz daha ağırlaşayım &ouml;yle &ccedil;ocuk yaparım&rdquo; gibi ideal zaman arayışı en iyiye değil, genelde en k&ouml;t&uuml;ye g&ouml;t&uuml;r&uuml;r bizi. &ldquo;Kararsızlık&rdquo; durağında oyalanırız. Mantık duyguları kirletir. Mantıksız duygu olmaz ama duygusuz mantık da olmaz. Mantığın karar veremediği yerde, i&ccedil;inizden gelen sese bakmalısınız.<br />\r\n<br />\r\n<strong>. Hangi yaş grubu ideal?</strong><br />\r\n20 &ndash; 35 yaş grubunda: Erkekler bu yaşlarda genellikle hedeflerin peşinde koşarlar. Kariyerde &uuml;st noktalara, arabaya sahip olmaya, g&uuml;c&uuml; elde etmeye uğraşırlar. Bu hedeflerden arasında &ccedil;ocuk sahibi olmak da varsa, o zaman bu yaşlar &ccedil;ocuk sahibi olmak i&ccedil;in iyi yaş olara kabul edilebilir.</p>\r\n\r\n<p>35-40 yaş grubunda: Hayat stabilite kazanır. Hedeflerin &ouml;nemli bir kısmına ulaşılmış olur. Şimdi sıra eksikliklerin giderilmesindedir. 35-40 yaş arası &ouml;zellikle duygusal alandaki eksikliklerin giderilmeye &ccedil;alışıldığı d&ouml;nemdir. Para, g&uuml;&ccedil; ve başka şeyler olsa da, sevgi eksik kalmış olabilir. B&ouml;yle bir eksiklik varsa ve &ccedil;ocuk bu yoksunluğu giderecekse, bu yaş &ccedil;ocuk sahibi olmak i&ccedil;in ideal olabilir.</p>\r\n\r\n<p>40-45 yaş grubunda: Bu d&ouml;nemde ise &ldquo;Aman Allah&rsquo;ım ben ne yaptım&rdquo; veya &ldquo;Eyvah gen&ccedil;lik treni ka&ccedil;tı!&rdquo; kaygılarının yaşandığı yaşları oluşturur. Bu yaş grubundaki erkekler Koşturmaktan yaşayamadıklarını d&uuml;ş&uuml;nmeye başlar. Eğer eksik kalan ve yaşanmamış şey &ccedil;ocuk ise, o zaman bu yaş &ccedil;ocuk yapmak i&ccedil;in ideal olabilir. &Ccedil;ocuk yapmanın yaşı değil, hazır olma duygusu vardır.<br />\r\n<br />\r\n<strong>. İdeal baba var mıdır?</strong><br />\r\n&bull; İyi baba vardır. İdeal baba yoktur.<br />\r\n&bull; Babalık yapabilen kişidir &ldquo;iyi baba&rdquo;.<br />\r\n&bull; Babasından g&ouml;rd&uuml;ğ&uuml;nden daha fazlasını yapandır, &ldquo;iyi baba&rdquo;.<br />\r\n&bull; &ldquo;Ben yaptım, sen yapma&rdquo; demeyen babadır, &ldquo;iyi baba&rdquo;.<br />\r\n&bull; Acil durumda her zaman var olandır, &ldquo;iyi baba&rdquo;.<br />\r\n&bull; Y&ouml;neten değil, y&ouml;nlendirendir, &ldquo;iyi baba&rdquo;.<br />\r\n&bull; T&uuml;m bunları yaparken doğal olandır, &ldquo;iyi baba&rdquo;.<br />\r\n<br />\r\n<strong>. Hazır olmadığınız zamanda baba olursanız?</strong><br />\r\nGer&ccedil;ekten hazır olmadığınız zaman &ccedil;ocuğunuz olursa? O zaman doğru zaman değilse? Aslında zamansız olan şeyler de bazen zamanlıdır. Belki zamansız olmuştur ama hi&ccedil;bir sorun yaratmaz ve her şey yolunda gider. Belki bize g&ouml;re zamanı değildir ama aslında &ldquo;tam zamanıdır&rdquo;. Bu nedenle &ldquo;zamansız&rdquo; dediğimiz şeylerin ger&ccedil;ekten &ldquo;zamansız&rdquo; olup olmadığını zaman g&ouml;sterir. &Ouml;n yargılı yaklaşmak ise sorunu yaratır.</p>\r\n\r\n<p>Ger&ccedil;ekten zamanı değil, yani kişi baba olmaya hazır değilse, o kişiyi bekleyen eksiklik duygusudur. Hem hayatını ve planladıklarını tam olarak ger&ccedil;ekleştirememek, hem de babalığı tam yapamamak! Eksiklik duygusu da zaman i&ccedil;inde su&ccedil;luluk duygusuna veya &ouml;fkeye d&ouml;n&uuml;şebilir.</p>\r\n\r\n<p>&Ccedil;ocuk i&ccedil;in bu durum iki ayrı sonu&ccedil; doğurabilir: Bazen &ccedil;ocuklar, bunu normal olarak kabul ederler ve yaşarlar. Başka t&uuml;r&uuml;n&uuml; bilmedikleri i&ccedil;in bu onların normalidir ve eksik de olsa, &ccedil;oğu zaman yeterlidir. Bir diğer grup &ccedil;ocuksa bunu &ldquo;sevilmiyorum&rdquo; duygusuyla eşleştirir.</p>\r\n','bab.jpg',NULL),(10,'Erkekler Diyette Neden Daha Başarılı?','Diyet yaparken her insanın farklı davranışlar benimsediğini belirten Diyetisyen Seren Aksüs..','<p>Diyet yaparken her insanın farklı davranışlar benimsediğini belirten Diyetisyen Seren Aks&uuml;s, farklılığı yaratan temel unsurlardan birinin cinsiyet olduğunu savunuyor. Aks&uuml;s, kadınlar diyet konusunda daha tecr&uuml;beli olduklarını ancak erkeklerin diyet yaparken kadınlara oranla daha başarılı olduklarını s&ouml;yl&uuml;yor. Dyt. Seren Aks&uuml;s, erkeklerin diyette kadınlardan daha başarılı olmalarının nedenlerini anlattı.</p>\r\n\r\n<p><strong>1- Bir diyetisyenle karşılaşana kadar kadınlara oranla daha az, belki de hi&ccedil; diyet yapmamış oldukları i&ccedil;in:&nbsp;</strong>İlk kez diyet yapanların başarı oranı daha y&uuml;ksektir. hem motivasyon hem de v&uuml;cudun diren&ccedil; g&ouml;stermesi a&ccedil;ısından tecr&uuml;besiz bir v&uuml;cuda bir şeyler &ouml;ğretmek daha kolaydır.</p>\r\n\r\n<p><strong>2- &Ouml;ncelikle diyetisyenin ne anlatmak istediğini iyice dinledikleri i&ccedil;in:&nbsp;</strong>Erkekler kadınlara g&ouml;re daha sakin, daha mantıklıdırlar. Bu nedenle &ouml;nce neden orada bulunduğunu, karşısındakinin uzmanlık alanının ne olduğunu bilir, tam olarak ne istediğini anlamak ister. Kadınlar daha sabırsız, daha aceleci ve paniktirler.</p>\r\n\r\n<p><strong>3- Dinlerken not aldıkları i&ccedil;in:&nbsp;</strong>Diyetisyeniniz size bir beslenme programı verebilir. Fakat arada sizin sorduğunuz sorular ve ondan gelen p&uuml;f noktaları i&ccedil;eren cevaplarda &ccedil;ok &ouml;nemlidir. Erkekler bu s&ouml;ylenenleri unutmamak i&ccedil;in not alıyorlar. Kadınlar zaten biliyorum diyebiliyor. Oysa ki uygulama i&ccedil;in unutmamak gerekili.</p>\r\n\r\n<p><strong>4- Hen&uuml;z ilk programı bile uygulamadan pazarlığa başlamadıkları i&ccedil;in:&nbsp;</strong>Erkeklerde diyet deneme sıklığı kadınlara g&ouml;re daha az olduğu i&ccedil;in yani kadınlar o kadar &ccedil;ok diyet yapmıştır ki.. Kendi eksilerini ve artılarını bilirler. Ne istediklerini neye dayanamadıklarını (dayanmak istemediklerini bilirler, bu iyi bir &ouml;zellik olsa da ilk haftadan yapılan pazarlıklar zayıflama hızını artırmıyor.</p>\r\n\r\n<p><strong>5- Diyetisyeni tarafından s&ouml;ylenenleri % 80 uyguladıkları i&ccedil;in:&nbsp;</strong>Yine kadınlarda diyet yapma sıklığından dolayı, yapılanları değiştirme, olması gerekenleri diğer programlarla karıştırarak kullanma gibi bir durum ortaya &ccedil;ıkabilir. erkeklere g&ouml;re daha fazla değişim kullanırlar . ekmek yerine makarna, ekmek yerine pilav.. herg&uuml;n bir değişiklik! Bu da kendi i&ccedil;inde belli sistematikleri olan programları işlevsiz hale getirir, hatta tam ters v.ağ arttırıcı etki bile g&ouml;sterebilir.</p>\r\n\r\n<p><strong>6- Mutlaka egzersize fırsat yarattıkları i&ccedil;in:&nbsp;</strong>&Ccedil;alışan erkeklerin daha az spora vakit varmış gibi g&ouml;z&uuml;kse de erkekler daha uzun s&uuml;reli spor yapıyorlar. Tatilde veya iş seyahatinde bile eşofmanları &ccedil;antaya koyuyorlar. Buldukları her fırsatta y&uuml;zebiliyorlar, iş yerinde spor salonundan faydalanabiliyorlar. Sa&ccedil;larının uzunluğu, &ouml;zel g&uuml;nleri vb. nedenler ile kadınlarda egzersiz yapabilme oranı bir hayli d&uuml;ş&uuml;k.</p>\r\n\r\n<p><strong>7- Meyve t&uuml;ketebildikleri i&ccedil;in:&nbsp;</strong>Kadınlar &ccedil;ikolataya dayanamıyor ve &ldquo;&ccedil;ikolata varken ne meyvesi?&rdquo; tepkisini veriyorlar.<br />\r\n<strong>8- T&uuml;ketim kayıtlarını devamlı olarak tuttukları i&ccedil;in:&nbsp;</strong>G&uuml;nl&uuml;k istememizin nedeni diyeti bozup bozmadığınızı kontrol etmek değil, bir g&uuml;n&uuml;n&uuml;z&uuml;n nasıl ge&ccedil;tiğini &ouml;ğrenmek. Biz zaten sizi g&ouml;rd&uuml;ğ&uuml;m&uuml;zde, hele bir iki &ccedil;ift s&ouml;z ettikten sonra nasıl ge&ccedil;tiğini anlarız ve tartıda %90 benzer değerler g&ouml;r&uuml;r&uuml;z.<br />\r\nb. Bu notlar bizim g&ouml;rmemiz i&ccedil;in değil, sizin ne yaptığınızı g&ouml;rerek, neyi yapmadığınızın farkında olmanız i&ccedil;in &ccedil;ok &ouml;nemli bir g&ouml;rsel uyaran. Erkekler not tutma konusunda daha başarılı ve disiplinli.</p>\r\n\r\n<p><strong>9- Ve bu kayıtlarda d&uuml;r&uuml;st oldukları i&ccedil;in&nbsp;<img alt=\"????\" src=\"https://s.w.org/images/core/emoji/2/svg/1f642.svg\" style=\"height:10px; width:10px\" />&nbsp;</strong>Ka&ccedil;amakları yazmasam mı diye d&uuml;ş&uuml;nm&uuml;ş olabilirler ama mutlaka yazıyorlar. Hem de nedenleri ile birlikte (şehir dışı, toplantı, iş yemeği vb). Bir sorunun nedenini bulup ortadan kaldırmadık&ccedil;a &ccedil;&ouml;zmek imkansız. Her işte b&ouml;yle.</p>\r\n\r\n<p><strong>10- Sevmeseler de yeşil &ccedil;ay t&uuml;kettikleri i&ccedil;in:&nbsp;</strong>Nedenini ve yararını bilmek, yapmalarını sağlıyor; yeter ki nedenini a&ccedil;ıklayın.</p>\r\n\r\n<p><strong>11- Randevularına d&uuml;zenli geldikleri i&ccedil;in:&nbsp;</strong>Daha sıkı ve d&uuml;zenli takip ediyorlar. Acil bir durum &ccedil;ıkmadık&ccedil;a randevu iptal edilmiyor. Oto kontrollerinin dışında bir dış kontrol&uuml;nde gerekliliğini bilerek, yaptıkları egzersiz ve beslenme d&uuml;zenini teyit ettiriyorlar.</p>\r\n\r\n<p><strong>12- Ev işi, &ccedil;ocuk bakımı, market alışverişi vb işleri eşlerine havale ettikleri i&ccedil;in:)&nbsp;</strong>Spora daha &ccedil;ok vakit var demiş miydik:)</p>\r\n\r\n<p><strong>13- G&uuml;nleri veya 5 &ccedil;ayları olmadığı i&ccedil;in:&nbsp;</strong>&ldquo;5 &ccedil;ayı yok ama akşamları arkadaşlarla veya iş i&ccedil;in gidilen yemekler, alkoll&uuml; ortamlar var&rdquo; diyebilirsiniz ama akşam yemeğine gidildiğinde 1 tek rakı veya 1 kadeh şarap ile balık dediğimizde bu uygulanabilir. 5 &ccedil;ayında onlarca &ccedil;eşit hamur işi ve tatlılar varken sadece bir &ccedil;eşit al sadece dediğimizde bu nerdeyse imkansız hale geliyor !!! Hele ki yeme ısrarcısı ev sahibesi ve arkadaşlarınızın yanında.</p>\r\n\r\n<p><strong>14- Adet g&ouml;rmedikleri i&ccedil;in:</strong><br />\r\n<strong>A-)&nbsp;</strong>Kadınların adet d&ouml;nemi &ouml;ncesinde başlayan sıkıntıları, &ouml;dem şikayetleri ve iştah değişiklikleri bazılarında neredeyse ayın yarısını kaplıyor. 1 ayda 2-3 hafta d&uuml;zenli diyet yapıyorlarmış gibi oluyor. Erkeklerde b&ouml;yle bir molanın olmaması şans tabi.<br />\r\n<strong>B-)</strong>&nbsp;Adet d&ouml;nemi &ouml;ncesi ve sırasında yaşadıkları duygusal dalgalanmaların, gerginliklerin, gelgitlerin sebebi ve bahanesi ile pek &ccedil;ok ilave yemek ka&ccedil;ınılmaz oluyor.</p>\r\n\r\n<p><strong>15- Duygusal dalgalanmaları az olduğu i&ccedil;in:&nbsp;</strong>Kadınların daha duygusal olduklarını herhalde yazmaya gerek yok. Psikoloji ve stres bizim işimizde &ccedil;ok &ccedil;ok &ouml;nemli. Strese bağlı hormonal değişimler metabolizmanızın verdiği yanıtı olduk&ccedil;a etkiliyor. Duygusal değişimler, diyet yapanlar i&ccedil;in bir engel bile olabilir. &Ccedil;abuk demotive olmak, sıkıntıdan yemek, s&uuml;rekli atıştırmak, yeme hızının artması kadınlarda daha sık g&ouml;r&uuml;len yeme davranışıdır.</p>\r\n\r\n<p><strong>16- G&uuml;n i&ccedil;i iş yoğunluğundan atıştırmadıkları i&ccedil;in:&nbsp;</strong>Erkekler genelde ara &ouml;ğ&uuml;nleri t&uuml;ketmeyi unuttuklarından şikayet&ccedil;i. Bu nedenle atıştırmalar kadınlardaki gibi sık olmuyor.</p>\r\n\r\n<p><strong>17- &Ccedil;ekmecelerinde &ccedil;ikolata, yumuşak şekerleme saklamadıkları i&ccedil;in:&nbsp;</strong>İsterseniz &ccedil;antanıza bir g&ouml;z atın ya da iş yerindeki &ccedil;ekmecenizin k&ouml;şesine.</p>\r\n\r\n<p><strong>18- Ne yapıp neyi yapamadıklarının farkında oldukları i&ccedil;in:</strong><br />\r\n<strong>A-)&nbsp;</strong>Mantık diyet yaparken yanınıza alacağınız en g&uuml;zel &ouml;zellik! Ne yapıyorum, neden yapıyorum, amacım ne, ne yaparsam v&uuml;cudum nasıl cevap veriyor? Her şeyin mantıklı bir a&ccedil;ıklaması var.<br />\r\n<strong>B-)</strong>&nbsp;Elbette neyi yapmıyor veya yapamıyorum, ne gibi olumsuzluklar getirir, neyi nasıl değiştire, geliştirebilirim?</p>\r\n\r\n<p><strong>19- Kahve i&ccedil;tikleri i&ccedil;in:&nbsp;</strong>Eerkekler daha fazla kahve i&ccedil;iyorlar. Dozunda i&ccedil;ilen kahvenin etken maddesi olan kafein hem v&uuml;cudu hem zihni uyarıyor.</p>\r\n\r\n<p><strong>20- Kek veya pasta yapan-ısmarlayan arkadaşları olmadığı i&ccedil;in:&nbsp;</strong>Evet iki erkeğin bir pastanede buluşup pasta yiyerek sohbet ettikleri az g&ouml;r&uuml;l&uuml;r. Ya da bir erkek arkadaşınız sizi eve &ccedil;aya &ccedil;ağırıp, &ldquo;bak sana neler yaptım&rdquo; deyip; b&ouml;rekler &ccedil;&ouml;rekler sunmaz.</p>\r\n\r\n<p><strong>21- İş yerinde asistanları her istediklerini hazırlayıp &ouml;nlerine getirdiği i&ccedil;in:&nbsp;</strong>Ne yiyeceğimi bilemedim ve bozdum diyemezler &ccedil;&uuml;nk&uuml; yemek hazırdır ve s&ouml;ylenen i&ccedil;erikte, miktarda onu bekliyordur.</p>\r\n\r\n<p><strong>22- Evde eşleri &ccedil;ok sağlıklı sebze yemekleri ve salatalar yaptıkları i&ccedil;in:&nbsp;</strong>En b&uuml;y&uuml;k şanslardan biri de bu işte; pişirmeye gerek yok, d&uuml;ş&uuml;nmeye gerek yok! Yemekler hazır hem de en sağlıklı sebzelerden.</p>\r\n\r\n<p><strong>23- Devamlı &ccedil;alıştıkları i&ccedil;in:&nbsp;</strong>Tabi&icirc; ki kadınlar da &ccedil;alışıyor!.. Ama kadınlar sadece işte değil evde, dışarıda her yerde &ccedil;alışıyor ve diyet takibi zorlaşıyor&hellip;</p>\r\n\r\n<p><strong>24- Uzun s&uuml;re oturup televizyon izlemedikleri i&ccedil;in:&nbsp;</strong>Ma&ccedil; yok ise:)</p>\r\n\r\n<p><strong>25- Kas kitleleri fazla olduğu i&ccedil;in:&nbsp;</strong>Bu doğuştan olan, genetik şans. Hızlı zayıflamaların nedeni bu denebilir.</p>\r\n\r\n<p><strong>26 &ndash; En &ouml;nemlisi, arkalarında hayatlarını kolaylaştıran bir kadın olduğu i&ccedil;in:&nbsp;</strong>Bir eş, bir sevgili veya bir anne!!!</p>\r\n','diy.jpg',NULL);

#
# Structure for table "saglikyorumlar"
#

DROP TABLE IF EXISTS `saglikyorumlar`;
CREATE TABLE `saglikyorumlar` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `haberId` varchar(255) DEFAULT NULL,
  `yorum` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `uye_ID` varchar(255) DEFAULT NULL,
  `uye_adsoy` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `yapanimg` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "saglikyorumlar"
#

INSERT INTO `saglikyorumlar` VALUES (17,'2016-11-17 00:36:06','12','aweqwas','3',NULL,NULL),(19,'2016-11-17 15:30:38','11','debeme merhaba','3',NULL,NULL),(21,'2016-11-17 15:52:07','10','qweqwer','3',NULL,NULL),(22,'2016-11-17 17:52:14','9','çok güzel ayakkab?','3',NULL,NULL),(23,'2016-11-17 18:59:54','10','merhabalar ...çok güzel site','3',NULL,NULL),(24,'2016-11-17 19:11:01','10','memolnapy?on','3',NULL,NULL),(25,'2016-11-17 19:14:03','12','deniyorumm','3',NULL,NULL),(26,'2016-11-21 02:12:08','9','deneme12345','3',NULL,NULL),(27,'2016-11-21 02:12:44','9','ididid','3',NULL,NULL),(28,'2016-11-21 02:13:32','9','qwe','3',NULL,NULL),(29,'2016-11-21 02:16:53','9','haberid','3',NULL,NULL),(30,'2016-11-21 02:17:03','9','123','3',NULL,NULL),(31,'2016-11-21 02:17:16','9','123','3',NULL,NULL),(32,'2016-11-21 02:18:13','9','321','3',NULL,NULL),(33,'2016-11-21 02:18:36','9','4323','3',NULL,NULL),(34,'2016-11-21 03:38:14','7','denemesaglik','12','Akif','akif.jpg'),(35,'2016-11-23 05:02:33','9','yorum','13','Adnan Güldemir',NULL),(36,'2017-01-10 11:24:00','7','akif final deneme','3','hilal','hilal13.jpg'),(37,'2017-01-13 01:39:25','7','trt','4','Akif Güldemir','ako1.jpg');

#
# Structure for table "sondakika"
#

DROP TABLE IF EXISTS `sondakika`;
CREATE TABLE `sondakika` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `keywords` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `text` longtext CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT '',
  `aciklama` longtext CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "sondakika"
#

INSERT INTO `sondakika` VALUES (4,'Kardak\'ta gerginlik tırmandı! Güvenlik uçağı havalandı','Muğla\'nın Bodrum ilçesine bağlı Gümüşlük mahallesine 3 buçuk mil uzaklıktaki ','','','','2016-12-20 20:33:09');

#
# Structure for table "sondakikayorumlar"
#

DROP TABLE IF EXISTS `sondakikayorumlar`;
CREATE TABLE `sondakikayorumlar` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `haberId` varchar(255) DEFAULT NULL,
  `yorum` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `uye_ID` varchar(255) DEFAULT NULL,
  `uye_adsoy` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `yapanimg` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "sondakikayorumlar"
#

INSERT INTO `sondakikayorumlar` VALUES (1,'2016-12-20 18:09:45','2','ş','4','Akif Güldemir','ako1.jpg');

#
# Structure for table "teknoloji"
#

DROP TABLE IF EXISTS `teknoloji`;
CREATE TABLE `teknoloji` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `keywords` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `text` longtext CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT '',
  `aciklama` varchar(88) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "teknoloji"
#

INSERT INTO `teknoloji` VALUES (10,'Google Chrome çok daha hızlı olacak!','Google, Chrome tarayıcısını hızlandırmak için kolları sıvadı. Peki, Chrome 54..','<p><strong>Hız</strong>&nbsp;ve&nbsp;<strong>g&uuml;venlik</strong>&nbsp;konusunda en &ccedil;ok tercih edilen internet tarayıcısı olan Google Chrome, tahtını korumak i&ccedil;in &ccedil;alışmalara ara vermeden devam ediyor. Google, şimdi de Chroem 54 s&uuml;r&uuml;m&uuml; ile internet deneyimini daha da hızlandırmak istiyor. Peki, g&uuml;celleme ile Chrome ne kadar hızlanacak?</p>\r\n\r\n<p><strong>Chrome 54</strong>&nbsp;s&uuml;r&uuml;m&uuml; ile ortalama&nbsp;<strong>%12,5</strong>&#39;lik bir hız artışı sağlanacak. Chrome&#39;da yeni sekme a&ccedil;tığınızda&nbsp;<strong>%14,8 daha hızlı</strong>&nbsp;ve internet sayfasını yeniledğinizde<strong>&nbsp;%5,9 daha hızlı y&uuml;klenecek</strong>. Ayrıca Chrome&#39;u ilk a&ccedil;tığınızda ise tarayıcı&nbsp;<strong>%16,8 daha</strong>&nbsp;hızlı a&ccedil;ılacak.</p>\r\n\r\n<p>Bu testlerin Chrome&#39;da eklenti olmadan yapıldığını, kullanmış olduğunuz&nbsp;<strong>Chrome</strong>&nbsp;<strong>eklentilerinin</strong>&nbsp;tarayıcı hızında olumsuz etkisi olabileceğini belirtelim.</p>\r\n\r\n<p><strong>Chrome</strong>&nbsp;<strong>54</strong>&nbsp;g&uuml;ncellemesinin ilerleyen g&uuml;nlerde yayınlanması bekleniyor. Bakalım Chrome,&nbsp;<strong>RAM</strong>&nbsp;<strong>t&uuml;ketimi</strong>konusunda yakın bir zamanda hamle yapacak mı?</p>\r\n','google.jpg',NULL),(11,'Galaxy S8 özellikleri ve fiyatı hakkında her şey!','Galaxy S8 özellikleri hakkında sızıntılar gelmeye başladı. Galaxy S8 özellikleri..','<p><strong>Galaxy S8&#39;in &ouml;zellikleri</strong>&nbsp;ile &ouml;n plana &ccedil;ıkacak bir telefon olacağı Note7&#39;nin &uuml;retiminin durması ve satıştan &ccedil;ekilmesinden sonra kesinleşmişti. Ancak yine de&nbsp;<strong>Galaxy S8 &ouml;zellikleri</strong>&nbsp;ile nasıl &ouml;n plana &ccedil;ıkacağı merak konusu olmuştu. Gelen sızıntılara g&ouml;re&nbsp;<strong>Galaxy S8 &ouml;zellikleri</strong>&nbsp;ile Note7 modelini aratmayacağı gibi daha &uuml;st&uuml;n &ouml;zelliklere sahip olacak.</p>\r\n\r\n<h2><strong>Galaxy S8 &ouml;zellikleri hakkında sızıntılar</strong></h2>\r\n\r\n<h2><strong>Galaxy S8 kamera &ouml;zellikleri nasıl olacak?</strong></h2>\r\n\r\n<p><strong>Galaxy S8 &ouml;zellikleri&nbsp;</strong>i&ccedil;in şimdiye kadar bir&ccedil;ok iddia ortaya atıldı.&nbsp;<strong>Galaxy</strong>&nbsp;<strong>S8</strong>&nbsp;<strong>&ouml;zellikleri</strong>&nbsp;sızıntıları arasında en dikkat &ccedil;ekeni ise &ccedil;ift kamera oldu. Bildiğiniz gibi Samsung&#39;un rakibi Apple,&nbsp;<strong>iPhone</strong>&nbsp;<strong>7</strong>&nbsp;<strong>Plus</strong>&nbsp;ile &ccedil;ift kameraya ge&ccedil;iş yapmış ve kullanıcılardan olumlu geri d&ouml;n&uuml;şler almıştı. Samsung da&nbsp;<strong>Galaxy</strong>&nbsp;<strong>S8</strong>&nbsp;modelinde&nbsp;<strong>&ccedil;ift</strong>&nbsp;<strong>kameraya</strong>&nbsp;yer verebilir.</p>\r\n\r\n<p>Galaxy S8&#39;in kamerasının nasıl &ccedil;alışacağı hakkında hen&uuml;z bir bilgi bulunmuyor. Firmalar ikinci arka kamerayı ya geniş a&ccedil;ı i&ccedil;in ya da alan derinliği i&ccedil;in kullanabiliyor. Burada karar Samsung&#39;un olacağı i&ccedil;in ikinci ana kameranın nasıl &ccedil;alışacağını kestirmek g&uuml;&ccedil;. Ancak tahminlerimize g&ouml;re; birinci ana kamera geniş bir a&ccedil;ıya sahip olduğu i&ccedil;in&nbsp;<strong>ikinci</strong>&nbsp;<strong>kamera</strong>&nbsp;muhtemelen&nbsp;<strong>alan</strong>&nbsp;<strong>derinliği</strong>&nbsp;i&ccedil;in kullanılacaktır.</p>\r\n\r\n<p><img alt=\"1476862148_galaxy-s8-ozellikleri.jpg\" src=\"http://cdn.teknolojioku.com/data/news/1/1476862148_galaxy-s8-ozellikleri.jpg\" title=\"1476862148_galaxy-s8-ozellikleri.jpg\" /></p>\r\n\r\n<h2><strong>Galaxy S8 işlemci tarafında Snapdragon kullanabilir</strong></h2>\r\n\r\n<p>Tepe model<strong>&nbsp;Galaxy&nbsp;</strong>serilerinde kendi &uuml;rettiği Exynos yonga setlerine yer veren Samsung, bu politikasından Galaxy S8 ile vazge&ccedil;ebilir. S&ouml;ylentilere g&ouml;re; Galaxy S8 modelinde Snapdragon 830 yonga setine yer verilecek. Ancak ge&ccedil;tiğimiz g&uuml;n yapılan a&ccedil;ıklamalarda&nbsp;<strong>10nm</strong>&nbsp;<strong>FinFET</strong>&nbsp;teknolojisi ile yeni&nbsp;<strong>Exynos</strong>&nbsp;yonga setlerinin &uuml;retimine başlandığı dile getirilmişti.</p>\r\n\r\n<p>Bu a&ccedil;ıklamayı g&ouml;z &ouml;n&uuml;nde bulundurursak&nbsp;<strong>Galaxy</strong>&nbsp;<strong>S8</strong>, Amerika&#39;da&nbsp;<strong>Snapdragon</strong>&nbsp;<strong>830</strong>, Avrupa&#39;da ise 10nm FinFET ile &uuml;retilen Exynos yonga seti ile gelebileceğini s&ouml;yleyebiliriz.&nbsp;</p>\r\n\r\n<p>RAM b&ouml;l&uuml;m&uuml;nde ise&nbsp;<strong>6 GB</strong>&nbsp;ya da<strong>&nbsp;8 GB</strong>&nbsp;tercih edilecek.</p>\r\n\r\n<p><a href=\"http://www.teknolojioku.com/haber/galaxy-s8-ozellikleri-nasil-olacak-38051.html?p=2\"><img alt=\"1476862488_galaxy-s8-ozellikleri.jpg\" src=\"http://cdn.teknolojioku.com/data/news/1/1476862488_galaxy-s8-ozellikleri.jpg\" style=\"height:304px; width:540px\" title=\"1476862488_galaxy-s8-ozellikleri.jpg\" /></a></p>\r\n','s8.jpg',NULL),(12,'Mars\'ta uzaylıya benzeyen bir yapı bulundu.','NASA\'nın aracı Curiosity, Kızıl Gezegen\'in yüzeyinde oldukça ilginç bir meteor buldu.','<p>NASA&#39;nın Mars&#39;taki ara&ccedil;larından Curiosity, Kızıl Gezegen&#39;in y&uuml;zeyinde olduk&ccedil;a ilgin&ccedil; bir meteor buldu.</p>\r\n\r\n<p>NASA&#39;nın Kızıl Gezegen&#39;deki kaşifi&nbsp;<strong>Curiosity</strong>, Mount Sharp b&ouml;lgesinde ilerlediği sırada son derece ilgin&ccedil; bir meteor keşfetti. Ortalama bir meteordan &ccedil;ok daha k&uuml;&ccedil;&uuml;k olan bu meteor, tamamen&nbsp;<strong>nikel</strong>ve&nbsp;<strong>demirden&nbsp;</strong>oluşuyor.</p>\r\n\r\n<p>Yukarıdan &ccedil;ekilen fotoğraflarda fark edilen meteor, Curiosity&#39;nin daha yakına giderek ChemCam Remote Micro-Imager ile &ccedil;ektiği fotoğraf sayesinde detaylı olarak incelendi. Arizona State University&#39;de g&ouml;revli olan araştırmacıların tanımladığı meteor, bir uzaylı yapısını andıran şekline rağmen sadece demirin ve nikelin karışımıyla oluşmuş, ilgi &ccedil;ekici bir meteor.</p>\r\n\r\n<p>Meteorun, Mars&#39;a yakın olan Asteroid Kuşağı&#39;ndan geldiği tahmin ediliyor. Dış kısmının sıradan meteorlardan &ccedil;ok daha d&uuml;z ve p&uuml;r&uuml;zs&uuml;z olmasının nedeni ise, atmosfere giriş yaptığı sırada s&uuml;rt&uuml;nmeden kaynaklanan ısı artışıyla erimiş olması.</p>\r\n','uzay.jpg',NULL),(13,'Görme engellilerin görebilmesi için \'Biyonik Göz\' geliştirildi','Araştırmacılar tarafından geliştirilen biyonik gözle ilgili araştırmalar sonuca ulaşarak..','<p>Araştırmacılar tarafından geliştirilen biyonik g&ouml;zle ilgili araştırmalar sonuca ulaşarak, &uuml;lkemiz dahil milyonlarca insanın veya bu işlevi doğduğundan itibaren yapamayanların tekrar g&ouml;rmesi sağlanacak.</p>\r\n\r\n<p>İnsanın<strong>&nbsp;5 duyu</strong>&nbsp;organından bir tanesi ve en &ouml;nemlisi olan<strong>&nbsp;g&ouml;z</strong>ler, maalesef ya doğuştan ya da bir kaza sonucu kaybedilebiliyor.&nbsp;Araştırmacılar,&nbsp;insanların tekrardan g&ouml;rebilmesini sağlamak amacıyla bu konu &uuml;zerinde yıllardır&nbsp;&ccedil;alışıyorlar ve hala da bu &ccedil;alışmalarına devam etmekteler.&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://www.webtekno.com/images/editor/default/0001/04/0c5736a30dcc1f55dc8c262725da80a84e75aefa.jpeg\" style=\"height:304px; width:720px\" /></p>\r\n\r\n<p>30 yaşında bir kadının beyni i&ccedil;erisine yerleştirilen<strong>&nbsp;alıcı &ccedil;ip,</strong>&nbsp;kadının tekrardan g&ouml;rebilmesi sağladığı&nbsp;gibi&nbsp;milyonlarca doğuştan g&ouml;remeyen veya bu duyu organını kaybeden insanlara da &uuml;mit olmaya başladı. Temel &ccedil;alışma prensibi olarak&nbsp;g&ouml;zl&uuml;k &uuml;zerindeki&nbsp;<strong>video kamera&nbsp;</strong>&ccedil;ektiği g&ouml;r&uuml;nt&uuml;leri ufak cep bilgisayarına&nbsp;g&ouml;nderip, i&ccedil;erisinde d&uuml;zenlenen&nbsp;g&ouml;r&uuml;nt&uuml;leri verici &uuml;zerinden beyne g&ouml;nderiyor. Kadının tekrar g&ouml;rebilmesiyle elde edilen bu&nbsp;başarılı sonucun sevincini yaşayan araştırmacılar, bu teknolojinin&nbsp;&ouml;n&uuml;m&uuml;zdeki yıllarda&nbsp;<strong>T&uuml;rkiye</strong>&#39;deki hastalar &uuml;zerinde de kullanılmasını sağlayacak.</p>\r\n','goz.jpg',NULL);

#
# Structure for table "teknolojiyorumlar"
#

DROP TABLE IF EXISTS `teknolojiyorumlar`;
CREATE TABLE `teknolojiyorumlar` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `haberId` varchar(255) DEFAULT NULL,
  `yorum` varchar(255) DEFAULT NULL,
  `uye_ID` varchar(255) DEFAULT NULL,
  `uye_adsoy` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `yapanimg` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "teknolojiyorumlar"
#

INSERT INTO `teknolojiyorumlar` VALUES (34,'2016-11-21 03:37:22','10','akif','3','Hilal Çil','hilal13.jpg'),(35,'2016-11-21 03:37:43','10','hilal','12','Akif','ako1.jpg'),(36,'2017-01-10 03:03:17','10','akif teknoloji','4','Akif Güldemir','ako1.jpg');

#
# Structure for table "uyeler"
#

DROP TABLE IF EXISTS `uyeler`;
CREATE TABLE `uyeler` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `adsoy` varchar(50) COLLATE utf32_turkish_ci DEFAULT NULL,
  `email` varchar(75) COLLATE utf32_turkish_ci DEFAULT NULL,
  `telefon` varchar(255) COLLATE utf32_turkish_ci DEFAULT NULL,
  `sifre` varchar(255) COLLATE utf32_turkish_ci DEFAULT NULL,
  `kullaniciadi` varchar(255) COLLATE utf32_turkish_ci DEFAULT NULL,
  `meslek` varchar(255) COLLATE utf32_turkish_ci DEFAULT NULL,
  `dogumtarihi` varchar(255) COLLATE utf32_turkish_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf32_turkish_ci DEFAULT NULL,
  `biyografi` longtext COLLATE utf32_turkish_ci,
  `konum` varchar(255) COLLATE utf32_turkish_ci DEFAULT NULL,
  `cekId` varchar(255) COLLATE utf32_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci ROW_FORMAT=COMPACT;

#
# Data for table "uyeler"
#

INSERT INTO `uyeler` VALUES (3,'Hilal Çil','hilal@gmail.com','12','123','hilal','fizyo','11.03.1994','hilal13.jpg','Karabük üniversitesi mezunu..Fizyoterapist..Çukurovalı rehabilitasyon merkezinde çalışıyor\r\n','Adana','4'),(4,'Akif Güldemir','akifguldemir@gmail.com','5438808820','190500','akifguldemir','Bilgisayar Mühendisi','20.07.1992','ako1.jpg','Karabük üniversitesi mezunu..Bilgisayar Mühendisi','Muğla','7'),(7,'Adnan Güldemir','vethek42@hotmail.com','123','123','adnanguldemir','Veteriner hekim','24.02.1957','babam.jpg',NULL,NULL,NULL);

#
# Structure for table "voleybol"
#

DROP TABLE IF EXISTS `voleybol`;
CREATE TABLE `voleybol` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `keywords` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `text` longtext CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT '',
  `aciklama` varchar(88) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "voleybol"
#

INSERT INTO `voleybol` VALUES (7,'spors','sporasd','','Pick-a-Pizza-Logo-of-your-Own.jpg',NULL),(8,'a','s','<p>efsry</p>\r\n','650x344-istanbulda-yagis-trafik-felc-14766848509141.jpg',NULL),(9,'akifffff','akifffff','<p>akifffff</p>\r\n','3801.jpg',NULL);

#
# Structure for table "yonetici"
#

DROP TABLE IF EXISTS `yonetici`;
CREATE TABLE `yonetici` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(30) NOT NULL,
  `soyad` varchar(30) NOT NULL,
  `kAd` varchar(32) NOT NULL,
  `kSifre` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sifreUnut` varchar(32) NOT NULL,
  `yetki` text NOT NULL,
  `resim` int(11) NOT NULL,
  `resimAktif` tinyint(1) NOT NULL,
  `kisayol` varchar(50) NOT NULL,
  `ekleY` int(11) NOT NULL,
  `ekleT` datetime NOT NULL,
  `duzenY` int(11) NOT NULL,
  `duzenT` datetime NOT NULL,
  `aktif` tinyint(1) NOT NULL,
  `silindi` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Data for table "yonetici"
#

/*!40000 ALTER TABLE `yonetici` DISABLE KEYS */;
INSERT INTO `yonetici` VALUES (1,'Deneme','Deneme','deneme','81dc9bdb52d04dc20036dbd8313ed055','deneme@deneme.com','8f10d078b2799206cfe914b32cc6a5e9','0',0,0,'1|2|4|5|6|7|8|9|10|11|12',1,'2012-01-14 11:05:59',0,'0000-00-00 00:00:00',1,0);
/*!40000 ALTER TABLE `yonetici` ENABLE KEYS */;
