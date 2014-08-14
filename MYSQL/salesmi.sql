-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 14, 2014 at 12:11 PM
-- Server version: 5.5.32-0ubuntu0.12.04.1
-- PHP Version: 5.3.10-1ubuntu3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `salesmi`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_docs`
--

CREATE TABLE IF NOT EXISTS `client_docs` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `clientid` varchar(255) DEFAULT NULL,
  `documenttype` varchar(255) DEFAULT NULL,
  `documentname` varchar(255) DEFAULT NULL,
  `uploaded` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `uploadedby` varchar(255) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `clientid` (`clientid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `emailaddress` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `work` varchar(255) DEFAULT NULL,
  `addressl1` varchar(255) DEFAULT NULL,
  `addressl2` varchar(255) DEFAULT NULL,
  `town` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `postcode` varchar(255) DEFAULT NULL,
  `county` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `enquirysource` varchar(255) DEFAULT NULL,
  `enquirytype` varchar(255) DEFAULT NULL,
  `enquiryproduct` varchar(255) DEFAULT NULL,
  `progressstatus` varchar(255) DEFAULT NULL,
  `budget` varchar(255) DEFAULT NULL,
  `deposit` varchar(255) DEFAULT NULL,
  `paymentmethod` varchar(255) DEFAULT NULL,
  `assigneduser` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `postcode` (`postcode`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `customer_contact`
--

CREATE TABLE IF NOT EXISTS `customer_contact` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `customerid` varchar(255) DEFAULT NULL,
  `userid` varchar(255) DEFAULT NULL,
  `contactsubject` varchar(255) DEFAULT NULL,
  `contactmsg` varchar(255) DEFAULT NULL,
  `contactdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `contacttype` varchar(255) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `customerid` (`customerid`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `customer_status`
--

CREATE TABLE IF NOT EXISTS `customer_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `clientid` varchar(255) DEFAULT NULL,
  `userid` varchar(255) DEFAULT NULL,
  `orderheading` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `undiscountedprice` varchar(255) DEFAULT NULL,
  `duedate` varchar(255) DEFAULT NULL,
  `progress` varchar(255) DEFAULT NULL,
  `payment` varchar(255) DEFAULT NULL,
  `deposit` varchar(255) DEFAULT NULL,
  `paymenttype` varchar(255) DEFAULT NULL,
  `stockordered` varchar(255) DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `cost` varchar(255) DEFAULT NULL,
  `ordertype` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `clientid` (`clientid`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE IF NOT EXISTS `order_products` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `orderid` varchar(255) DEFAULT NULL,
  `productid` varchar(255) DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `addedby` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `orderid` (`orderid`),
  KEY `productid` (`productid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `height` varchar(255) DEFAULT NULL,
  `depth` varchar(255) DEFAULT NULL,
  `width` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `constructionprice` varchar(255) DEFAULT NULL,
  `deliveryprice` varchar(255) DEFAULT NULL,
  `assemblyprice` varchar(255) DEFAULT NULL,
  `stock` varchar(255) DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `createdby` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `requireplanning` varchar(255) DEFAULT NULL,
  `constructiontime` varchar(255) DEFAULT NULL,
  `requireservice` varchar(255) DEFAULT NULL,
  `serviceid` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `HWD` varchar(255) DEFAULT NULL,
  `fitmentarea` varchar(255) DEFAULT NULL,
  `constructiontype` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `serviceid` (`serviceid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `logo_address` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `phonenumber` varchar(255) DEFAULT NULL,
  `addressl1` varchar(255) DEFAULT NULL,
  `addressl2` varchar(255) DEFAULT NULL,
  `town` varchar(255) DEFAULT NULL,
  `postcode` varchar(255) DEFAULT NULL,
  `webaddress` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `postcode` (`postcode`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(255) NOT NULL,
  `createdby` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `name`, `email`, `phone`, `mobile`, `password`, `type`, `created`, `username`, `createdby`) VALUES
(9, '1Mw5ORyvyxfAmJZ07ymgYw3qZ96QKx3+CUMjIAk1Bs3vZsAcgZD2/KViiMC5nEEbU7202W/xMaijiB5z1/p6ng==', '38dKNCi0XFecPpMUt1S5ePqUO83qhphpNGbilJvOoNw0rGqyJanxGFKtVwRHAnS5eEMBEvjGPzDY6hyEdEcXRQ==', 'it3sGx3HquUc/jbIHPt2/1/QaEOu83vFHNgh1yWgY6GdVvYatHUgH2iLVuxiTs/CzAhuPwYvotKQ6Dfz2LFIaQ==', '9VrRoLA+teMalI5RMKn6Uoeq+0QUnTuk8bCj5rlrMogIJGD21jQtvUhe933rcSHBOVg8ZgtVb3430Pa+pmUaIw==', '85042cc34b66d874589e386c8ca0158a09118c90', 'hBAZybxxPglZCGUCJb8HkjcQf24U5DgsdUBJDWGgGuwxzCt7VplpSnplwkqwySnNHltafLxO1+chlgi+05QlNA==', '2014-08-12 13:59:25', 'DougC', '');

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE IF NOT EXISTS `usertype` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `createdby` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`ID`, `name`, `description`, `created`, `createdby`) VALUES
(1, 'Developer', 'System Developer', '2014-08-13 13:48:16', NULL),
(2, 'Sales', 'Member of Sales', '2014-08-13 13:59:07', '9'),
(3, 'Admin', 'Member of Admin Team', '2014-08-13 13:59:49', '9'),
(4, 'Construction', 'Construction Team', '2014-08-13 14:04:34', '9'),
(5, 'Owner', 'Business Owner', '2014-08-13 14:05:39', '9');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
