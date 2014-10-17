-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.0.18-nt


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema nir_data
--

CREATE DATABASE IF NOT EXISTS nir_data;
USE nir_data;

--
-- Definition of table `about_us`
--

DROP TABLE IF EXISTS `about_us`;
CREATE TABLE `about_us` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `about` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

/*!40000 ALTER TABLE `about_us` DISABLE KEYS */;
/*!40000 ALTER TABLE `about_us` ENABLE KEYS */;


--
-- Definition of table `gallary_info`
--

DROP TABLE IF EXISTS `gallary_info`;
CREATE TABLE `gallary_info` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `gallary_name` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallary_info`
--

/*!40000 ALTER TABLE `gallary_info` DISABLE KEYS */;
INSERT INTO `gallary_info` (`id`,`gallary_name`) VALUES 
 (1,'blood donation'),
 (2,'Anniversary');
/*!40000 ALTER TABLE `gallary_info` ENABLE KEYS */;


--
-- Definition of table `gallary_pic`
--

DROP TABLE IF EXISTS `gallary_pic`;
CREATE TABLE `gallary_pic` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `img_path` varchar(45) NOT NULL,
  `gallary_id` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallary_pic`
--

/*!40000 ALTER TABLE `gallary_pic` DISABLE KEYS */;
INSERT INTO `gallary_pic` (`id`,`img_path`,`gallary_id`) VALUES 
 (1,'images/22.jpg',1),
 (2,'images/36.jpg',1),
 (3,'images/23.jpg',2),
 (4,'images/24.jpg',2);
/*!40000 ALTER TABLE `gallary_pic` ENABLE KEYS */;


--
-- Definition of table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY  (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` (`username`,`password`) VALUES 
 ('admin','123');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;


--
-- Definition of table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(45) NOT NULL,
  `address` text NOT NULL,
  `ph` varchar(45) NOT NULL,
  `img_path` varchar(45) NOT NULL default 'images/none.jpg',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` (`id`,`name`,`address`,`ph`,`img_path`) VALUES 
 (1,'Ashok Prmanik','anandapur r.r.plot 9,kolkata-700107,near ruby hospital','9007609083','images/18-111x84.jpg'),
 (2,'surojit saha','anandapur r.r.plot-9 upore,kolkata-700107,near ruby hospital ','9007609083','images/17-111x84.jpg'),
 (5,'Debojyoti Mukherjee','Sontospure','8961271617','images/images.jpg');
/*!40000 ALTER TABLE `member` ENABLE KEYS */;


--
-- Definition of table `reselution_data`
--

DROP TABLE IF EXISTS `reselution_data`;
CREATE TABLE `reselution_data` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `data` text NOT NULL,
  `res_date` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reselution_data`
--

/*!40000 ALTER TABLE `reselution_data` DISABLE KEYS */;
INSERT INTO `reselution_data` (`id`,`data`,`res_date`) VALUES 
 (1,'After the scheduled meeting of\r\nthe day,we have come to the \r\nconclusion that our organization\r\nis going to open bank account in\r\nstate bank of india.\r\n  both savings and joint account \r\ncould be made.The joint account \r\nholders would be the president \r\nand the secretary,among them \r\nanyone can make transactions \r\nanytine.','21/11/2013'),
 (2,'The cultural event that we promised \r\nto commence on the last month was \r\nheld on 25th May, it was a sunday. \r\nIt was celebrated as the Rabindra \r\nJayanti i.e. 25-e Baishakh and Najrul \r\nJayanti. Little children participated \r\nto read out poem, do recitations, \r\nsinging and dancing. The senior \r\npeople presented choir and drama. \r\nWe, the members together have \r\norganised the whole event very \r\nbeautifully and in peace, we have \r\ndistributed tiffins in the end. \r\nAll of us were very happy by this.\r\n','26/05/2014'),
 (3,'In Today\'s meeting we decided to \r\nfulfill the promise that we made \r\nto our sister and brother members \r\nearlier, that is we are going to \r\nhelp them with umbrellas for them \r\nto work on the field in this massive \r\nand scortching summer heat. We have \r\nalso planned to set up an cultural \r\nevent by the little children. As we \r\ndeclared about the upcoming event, \r\nall the members look very happy and \r\nexcited.','10/04/2014'),
 (4,'Due to this unbearing summer in our \r\nweather we have decided to provide \r\nGlucose D along with water in every \r\ncrossroad junction setting a booth. \r\nSo that the general passer by people \r\nare helped. This decision in today\'s \r\nmeeting made our members very happy \r\nand excited.','05/03/2014\r\n');
/*!40000 ALTER TABLE `reselution_data` ENABLE KEYS */;


--
-- Definition of table `reselution_pic`
--

DROP TABLE IF EXISTS `reselution_pic`;
CREATE TABLE `reselution_pic` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `img_path` varchar(45) NOT NULL,
  `res_id` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reselution_pic`
--

/*!40000 ALTER TABLE `reselution_pic` DISABLE KEYS */;
INSERT INTO `reselution_pic` (`id`,`img_path`,`res_id`) VALUES 
 (1,'images/16-111x84.jpg',1),
 (2,'images/17-111x84.jpg',2),
 (3,'images/18-111x84.jpg',3),
 (4,'images/banner3.jpg',4),
 (5,'images/banner001.png',5),
 (6,'images/webtechlink.jpg',4);
/*!40000 ALTER TABLE `reselution_pic` ENABLE KEYS */;


--
-- Definition of table `up_event_head`
--

DROP TABLE IF EXISTS `up_event_head`;
CREATE TABLE `up_event_head` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `head` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `up_event_head`
--

/*!40000 ALTER TABLE `up_event_head` DISABLE KEYS */;
/*!40000 ALTER TABLE `up_event_head` ENABLE KEYS */;


--
-- Definition of table `up_event_pic`
--

DROP TABLE IF EXISTS `up_event_pic`;
CREATE TABLE `up_event_pic` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `img_path` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `up_event_pic`
--

/*!40000 ALTER TABLE `up_event_pic` DISABLE KEYS */;
INSERT INTO `up_event_pic` (`id`,`img_path`) VALUES 
 (1,'images\\28ngo4.jpg');
/*!40000 ALTER TABLE `up_event_pic` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
