/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.24 : Database - dropsize
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dropsize` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `dropsize`;

/*Table structure for table `tabla` */

DROP TABLE IF EXISTS `tabla`;

CREATE TABLE `tabla` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `paterno` varchar(25) DEFAULT NULL,
  `materno` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `tabla` */

insert  into `tabla`(`id_cliente`,`nombre`,`paterno`,`materno`) values (1,'Super','Chinazo','Poderoso'),(2,'Will','Smith','Ricardo'),(3,'Maicol','Torres','Fuertes');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
