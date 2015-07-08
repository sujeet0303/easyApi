/*
SQLyog Community v12.09 (64 bit)
MySQL - 5.5.43-0ubuntu0.14.04.1 : Database - ubz
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `web_area` */

DROP TABLE IF EXISTS `web_area`;

CREATE TABLE `web_area` (
  `address_id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `cityid` int(11) NOT NULL,
  `address` text NOT NULL,
  `zipcode` int(11) NOT NULL,
  PRIMARY KEY (`address_id`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=latin1;

/*Data for the table `web_area` */

insert  into `web_area`(`address_id`,`cid`,`sid`,`cityid`,`address`,`zipcode`) values (6,0,0,0,'ahmedabad',380001),(7,0,0,0,'satathar',380001),(8,0,0,0,'ahmedabad',11111),(9,0,0,0,'sadsad',380001),(10,0,0,0,'fdfd',380001),(11,0,0,0,'dsd',0),(12,0,0,0,'asa',21),(13,0,0,0,'ahmedabad',12345),(14,1,1,1,'lovegate,ahmedabad',380001),(15,1,1,2,'ahmedabad',3265),(16,2,3,3,'dd',380001),(17,1,1,1,'dd',380001),(18,1,1,2,'dfd',380001),(19,2,4,4,'ssss',380001),(20,2,3,3,'j',380001),(21,2,4,4,'fef',380001),(22,1,1,1,'dsd',21212),(23,1,1,1,'dsd',21212),(24,1,1,1,'s',1),(25,1,1,1,'vnm',1234),(26,1,1,1,'h',212),(27,1,1,1,'ahmedabad',12345),(28,1,1,1,'manekchowk',380001),(29,2,4,4,'bornz steet, near citycorner,alaska',380001),(30,1,1,2,'vijaynagar,utna',380001),(31,3,4,6,'df',4),(32,2,3,3,'satadhar char rasta,kalasagar mall',222),(33,0,0,0,'',0),(34,2,0,0,'lovegate,surat',380001),(35,1,1,1,'sadsd',380001),(36,0,0,0,'',0),(37,1,1,1,'bvfbf',380001),(38,0,0,0,'',0),(39,1,1,1,'ahmedabad',380001),(40,1,1,1,'vcvc',380001),(41,1,1,1,'sds',380001),(42,1,1,1,'dv',380001),(43,1,1,1,'cc',380001),(44,1,1,1,'sd',380001),(45,2,3,3,'kirtus streebo',380001),(46,1,1,1,'sdsdw',380001),(47,1,1,1,'shahs',5535),(48,1,1,1,'sdf',5535),(49,1,1,1,'hkj',5535),(50,1,1,1,'jlk',5535),(51,1,1,1,'jkgh',5535),(52,1,1,1,'sds',5535),(53,1,1,1,'sds',5535),(54,1,1,1,'DFH',5535),(55,1,1,1,'ds',5535),(56,1,1,1,'fdf',5535),(57,1,1,1,'f',5535),(58,1,1,1,'df',5535),(59,1,1,1,'fd',5535),(60,2,3,3,'sydney',5535),(61,1,1,1,'fgng',380061),(62,1,1,1,'fgng',380061),(63,1,1,1,'jyjf',380061),(64,1,1,1,'biggest hotel',465462),(65,1,1,1,'abc xyz ',384002),(66,1,1,1,'yfyufy',465462),(67,0,0,0,'',0),(68,456,0,1,'sdfghj',1),(69,0,0,1,'sdfghjk',1),(70,567,0,1,'sdfghj',1),(71,1,1,1,'ertyujkl',123456),(72,0,0,0,'dfghj',3456),(73,1,1,1,'sdfghjk',123456),(74,1,1,1,'dfg',123456),(75,1,1,1,'dfghjkl',123456),(76,1,1,1,'ahmedabad',123456),(77,2,4,4,'ertyufghj',123456),(78,1,1,1,'dxcfgvhbj',123456),(79,1,1,2,'fghjk',345678),(80,1,1,1,'fghj',978461),(81,1,1,1,'fdghjk',123456),(82,1,1,1,'ahmedabad',123456),(83,2,4,4,'ertyufghj',123456),(84,1,1,1,'yuio',123456),(85,1,1,1,'fghjk',567891),(86,1,1,1,'qqwert',123456),(87,1,1,1,'dfghj',123456);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
