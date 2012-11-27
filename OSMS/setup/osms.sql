# ************************************************************
## © 2001-2012 WesDeGroot Projects (WDG.P), All Rights Reserved
## © 2012-2013 WDG.P, All Rights Reserved
## 
## OPENSOURCE
## => CC BY-SA 
## => => That means you may use, edit, improve the code, as long you share it also; you MUST leave the names of 'WDG.P'
##
## => Rules: 
## => http://wdgp.nl/#conditions
# Pro SQL dump
#
# Host: xxxxxxxx (MySQL 5.1.49)
# Database: xxxxx
# Generation Time: 2012-09-18 19:30:50 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table OSMS_agenda
# ------------------------------------------------------------

DROP TABLE IF EXISTS `OSMS_agenda`;

CREATE TABLE `OSMS_agenda` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table OSMS_config
# ------------------------------------------------------------

DROP TABLE IF EXISTS `OSMS_config`;

CREATE TABLE `OSMS_config` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table OSMS_other
# ------------------------------------------------------------

DROP TABLE IF EXISTS `OSMS_other`;

CREATE TABLE `OSMS_other` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table OSMS_photos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `OSMS_photos`;

CREATE TABLE `OSMS_photos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table OSMS_system
# ------------------------------------------------------------

DROP TABLE IF EXISTS `OSMS_system`;

CREATE TABLE `OSMS_system` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table OSMS_upcoming
# ------------------------------------------------------------

DROP TABLE IF EXISTS `OSMS_upcoming`;

CREATE TABLE `OSMS_upcoming` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table OSMS_users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `OSMS_users`;

CREATE TABLE `OSMS_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
