/*
SQLyog Community Edition- MySQL GUI v5.22a
Host - 5.5.5-10.4.24-MariaDB : Database - self-help
*********************************************************************
Server version : 5.5.5-10.4.24-MariaDB
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `self-help`;

USE `self-help`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `area` */

DROP TABLE IF EXISTS `area`;

CREATE TABLE `area` (
  `areno` int(5) NOT NULL AUTO_INCREMENT,
  `arename` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`areno`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `area` */

insert  into `area`(`areno`,`arename`) values (1,'3rd Party Repairs'),(2,'Processes'),(3,'Software'),(4,'Account'),(5,'Security'),(6,'General');

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `catno` int(5) NOT NULL AUTO_INCREMENT,
  `catname` varchar(1000) DEFAULT NULL,
  `catdesc` varchar(1000) DEFAULT NULL,
  `caticon` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`catno`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `category` */

insert  into `category`(`catno`,`catname`,`catdesc`,`caticon`) values (1,'Network','Password Reset, Connecting to network; Troubleshoot network; VPN; 3G;','assets/images/bill/network.png'),(2,'Office 365','Microsoft Teams; Email; Word; Excel; PowerPoint; OneNote, OneDrive','assets/images/bill/office.png'),(3,'Windows Settings','Personalization; Multiple Screens; Accessibility; Updates; Accounts; Storage; Security','assets/images/bill/windows.png'),(4,'Environment','Requesting Software; Hardware Troubleshooting; Printing; Backup\'s; Unified Communications; Performance;','assets/images/bill/free.png');

/*Table structure for table `faq` */

DROP TABLE IF EXISTS `faq`;

CREATE TABLE `faq` (
  `faqno` int(5) NOT NULL AUTO_INCREMENT,
  `faqtitle` varchar(1000) DEFAULT NULL,
  `faqcontent` varchar(1000) DEFAULT NULL,
  `areno` int(5) DEFAULT NULL,
  PRIMARY KEY (`faqno`),
  KEY `areno` (`areno`),
  CONSTRAINT `faq_ibfk_1` FOREIGN KEY (`areno`) REFERENCES `area` (`areno`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `faq` */

/*Table structure for table `feedback` */

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback` (
  `feeno` int(5) NOT NULL AUTO_INCREMENT,
  `solno` int(5) DEFAULT NULL,
  `feeresult` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`feeno`),
  KEY `solno` (`solno`),
  CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`solno`) REFERENCES `solution` (`solno`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `feedback` */

/*Table structure for table `solution` */

DROP TABLE IF EXISTS `solution`;

CREATE TABLE `solution` (
  `solno` int(5) NOT NULL AUTO_INCREMENT,
  `soltitle` varchar(1000) DEFAULT NULL,
  `soldesc` varchar(1000) DEFAULT NULL,
  `solcreated` date DEFAULT NULL,
  `sollocation` varchar(1000) DEFAULT NULL,
  `catno` int(11) DEFAULT NULL,
  PRIMARY KEY (`solno`),
  KEY `catno` (`catno`),
  CONSTRAINT `solution_ibfk_1` FOREIGN KEY (`catno`) REFERENCES `category` (`catno`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;

/*Data for the table `solution` */

insert  into `solution`(`solno`,`soltitle`,`soldesc`,`solcreated`,`sollocation`,`catno`) values (19,'User changing password to Self Help Portal','Steps to follow when changing your password','2022-10-17',NULL,NULL),(20,'Dual display settings','Clients need to follow the steps mentioned for them to display in extended mode meaning 2 separate displays.','2022-10-17',NULL,NULL),(21,'How to reset a-account','Steps to follow/instructions to change your a-account','2022-10-17',NULL,NULL),(22,'Knowledge Article – Cellular Icon Disappearing','User wants connect to he internet using cellular connection, however cellular icon does not appear','2022-10-17',NULL,NULL),(23,'Knowledge Articles-Eskom FCR 5 Service Desk','Eskom FCR 5 Service Desk: Outlook keeps asking for a password and will not accept it','2022-10-17',NULL,NULL),(24,'Network related troubleshooting','Network related trouble-shooting that the client can do','2022-10-17',NULL,NULL),(25,'Work from home IT telecommuting guide','Helpful information to assist you on your telecommuting journey!','2022-10-17',NULL,NULL),(26,'VC Trouble Shooting','VC Trouble Shooting','2022-10-17',NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
