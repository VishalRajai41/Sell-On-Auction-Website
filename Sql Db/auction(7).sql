-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 19, 2018 at 06:32 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `auction`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(0, 'bhavesh', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `auction_amount`
--

CREATE TABLE IF NOT EXISTS `auction_amount` (
  `sid` int(5) NOT NULL,
  `uid` int(4) NOT NULL,
  `amount` int(6) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auction_amount`
--

INSERT INTO `auction_amount` (`sid`, `uid`, `amount`, `date`) VALUES
(77, 7, 900, '2018-12-17 04:52:57'),
(79, 7, 2500, '2018-12-16 14:35:07'),
(51, 7, 6000, '2018-12-17 03:56:07'),
(55, 7, 9000, '2018-12-17 05:25:04'),
(56, 7, 16000, '2018-12-17 05:42:50'),
(56, 7, 17000, '2018-12-17 05:46:54'),
(56, 7, 18000, '2018-12-15 05:59:39'),
(51, 9, 6500, '2018-12-17 10:47:58'),
(52, 10, 7500, '2018-12-17 15:59:12'),
(52, 10, 8000, '2018-12-17 16:01:25'),
(77, 7, 1000, '2018-12-17 16:08:50'),
(52, 7, 9000, '2018-12-17 17:08:54');

-- --------------------------------------------------------

--
-- Table structure for table `category_master`
--

CREATE TABLE IF NOT EXISTS `category_master` (
  `cat_id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `category_master`
--

INSERT INTO `category_master` (`cat_id`, `cat_name`) VALUES
(1, 'Electroniics'),
(2, 'Furniture'),
(3, 'Computer Accessories'),
(4, 'kitchen ');

-- --------------------------------------------------------

--
-- Table structure for table `selling`
--

CREATE TABLE IF NOT EXISTS `selling` (
  `sid` int(5) NOT NULL AUTO_INCREMENT,
  `uid` int(5) NOT NULL,
  `pro_cat` int(5) NOT NULL,
  `sub_cat` varchar(50) NOT NULL,
  `proname` varchar(25) NOT NULL,
  `details` varchar(200) NOT NULL,
  `propic` varchar(255) NOT NULL,
  `proprice` bigint(255) NOT NULL,
  `profrom` date NOT NULL,
  `proto` date NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=84 ;

--
-- Dumping data for table `selling`
--

INSERT INTO `selling` (`sid`, `uid`, `pro_cat`, `sub_cat`, `proname`, `details`, `propic`, `proprice`, `profrom`, `proto`, `status`) VALUES
(42, 0, 1, '1', 'Refrigerator', 'Refrigerator', 'Upload/refrigerator.jpeg', 15000, '2018-12-13', '2018-12-16', 'N'),
(43, 0, 2, '14', 'Sofa', 'Sofa', 'Upload/sofa.jpeg', 8000, '2018-12-12', '2018-12-15', 'N'),
(44, 0, 1, '1', 'Refrigerator', 'samsung refrigerator which is 6 monthes old', 'Upload/r1.jpeg', 25000, '2018-12-17', '2018-12-17', 'N'),
(45, 0, 1, '1', 'Refrigerator', 'lg refrigerator', 'Upload/r2.jpg', 17000, '2018-12-18', '2018-12-20', 'N'),
(46, 0, 1, '5', 'home fan', 'home fan which is 2months old', 'Upload/f1.png', 1000, '2018-12-19', '2018-12-20', 'N'),
(47, 0, 1, '5', 'table fan', 'table fan which is new ', 'Upload/f2.jpg', 700, '2018-12-20', '2018-12-21', 'N'),
(48, 0, 1, '15', 'cool', 'cool ac which is new in market', 'Upload/a1.jpeg', 30000, '2018-12-19', '2018-12-20', 'N'),
(49, 0, 2, '11', 'table ', 'home table for dinner', 'Upload/t3.jpg', 800, '2018-12-20', '2018-12-21', 'N'),
(50, 0, 2, '11', 'table home', 'table which is used to home works', 'Upload/t2.jpg', 850, '2018-12-21', '2018-12-22', 'N'),
(51, 7, 2, '12', 'chair', 'home cool chair which is 2 years old', 'Upload/c2.png', 5000, '2018-12-19', '2018-12-16', 'N'),
(52, 0, 2, '12', 'home chair', 'office chair which is used other works', 'Upload/c3.jpg', 5000, '2018-12-23', '2018-12-24', 'N'),
(53, 0, 2, '13', 'home bed', 'home beds which is  6monthes old', 'Upload/b1.jpg', 8000, '2018-12-12', '2018-12-15', 'N'),
(54, 0, 2, '14', 'smps', 'home sofa which is new no any usable', 'Upload/s1.jpg', 6000, '2018-12-21', '2018-12-16', 'N'),
(55, 0, 2, '14', 'home sofa', 'home sofa which is 1 year old', 'Upload/s3.jpg', 8000, '2018-12-18', '2018-12-25', 'N'),
(56, 0, 3, '3', 'cpu ', 'branded intex desktop cpu which is new ', 'Upload/c1.jpeg', 15000, '2018-12-11', '2018-12-16', 'N'),
(57, 0, 3, '3', 'desktop cpu', 'desktop assemble cpu which is 1 year old', 'Upload/c2.jpg', 20000, '2018-12-19', '2018-12-22', 'N'),
(58, 0, 3, '3', 'cpu', 'branded iball cpu which is 3years old ', 'Upload/c4.jpg', 2000, '2018-12-17', '2018-12-18', 'N'),
(59, 0, 3, '4', 'logitech mouse', 'logitech wireless mouse which is new ', 'Upload/6.jpg', 800, '2018-12-22', '2018-12-25', 'N'),
(60, 0, 3, '4', 'mouse lenovo', 'lenovo branded mouse which is 2 years old', 'Upload/4.jpg', 150, '2018-12-18', '2018-12-21', 'N'),
(61, 0, 3, '4', 'mouse apple', 'apple branded wireless mouse which is new', 'Upload/7.jpg', 1800, '2018-12-23', '2018-12-25', 'N'),
(62, 0, 3, '6', 'smps', 'intex smps of desktop which is 1 year old', 'Upload/s4.png', 250, '2018-12-17', '2018-12-25', 'N'),
(63, 0, 3, '6', 'smps', 'dell branded desktop smps which is new', 'Upload/s2.jpg', 1100, '2018-12-20', '2018-12-25', 'N'),
(64, 0, 3, '6', 'smps', 'hiteck smps which is 2year old', 'Upload/s1.jpg', 150, '2018-12-18', '2018-12-25', 'N'),
(65, 0, 3, '7', 'motherboard', 'Asus motherboard core i3 2nd gen. which is new ', 'Upload/m1.jpg', 4000, '2018-12-17', '2018-12-26', 'N'),
(66, 0, 3, '7', 'motherboard', 'gigabyte dual core processor motherboard\r\nwhich is 2 years old', 'Upload/m3.png', 1000, '2018-12-18', '2018-12-25', 'N'),
(67, 0, 3, '7', 'motherboard', 'lenoovo leptop motherboard core i3 4th gen. which is new', 'Upload/m6.jpg', 2000, '2018-12-16', '2018-12-25', 'N'),
(68, 0, 3, '7', 'motherboard', 'assemble  motherboard\r\nwhich is 3 year old', 'Upload/m5.JPG', 200, '2018-12-16', '2018-12-25', 'N'),
(69, 0, 3, '9', 'ram', 'crucial ram which is 1 year old', 'Upload/r1.jpg', 300, '2018-12-16', '2018-12-25', 'N'),
(70, 0, 3, '9', 'ram', 'branded transand ram of desktop which is new', 'Upload/r2.jpg', 500, '2018-12-16', '2018-12-25', 'N'),
(71, 0, 3, '9', 'ram', 'leptop branded ram which is 1 year old', 'Upload/r4.jpg', 600, '2018-12-16', '2018-12-25', 'N'),
(72, 0, 3, '10', 'monitor', 'desktop monitor which is 2 year old', 'Upload/m1.JPG', 1000, '2018-12-16', '2018-12-26', 'N'),
(73, 0, 3, '10', 'monitor ', 'lg monitor branded which is new', 'Upload/m2.jpg', 1500, '2018-12-16', '2018-12-26', 'N'),
(74, 0, 3, '10', 'monitor', 'asus gaming monitor which is new ', 'Upload/m5.jpg', 2000, '2018-12-16', '2018-12-26', 'N'),
(75, 0, 3, '10', 'monitor', 'dell monitor which is 3 year old', 'Upload/m3.jpg', 2500, '2018-12-16', '2018-12-26', 'N'),
(77, 9, 2, '12', 'chair', 'chair home base which is new', 'Upload/chair2.jpg', 1400, '2018-12-14', '2018-12-18', 'Y'),
(78, 9, 2, '12', 'Chair', 'seat chaiar', 'Upload/chair1.jpg', 600, '2018-12-11', '2018-12-17', 'N'),
(79, 10, 2, '14', 'Sofa', 'Sofa 1 Year Old', 'Upload/s6.jpg', 2000, '2018-12-13', '2018-12-16', 'N'),
(80, 9, 3, '4', 'mouse', 'logitech mouse ', 'Upload/6.jpg', 550, '2018-12-17', '2018-12-19', 'N'),
(81, 10, 2, '12', 'Chair', '6 month old', 'Upload/4.jpg', 700, '2018-12-18', '2018-12-20', ''),
(82, 10, 1, '1', 'Refrigerator', 'Refrigerator', 'Upload/refrigerator.jpeg', 20000, '2018-12-19', '2018-12-21', ''),
(83, 10, 2, '12', 'Old Chairs', 'Chairs', 'Upload/c2.png', 200, '2018-12-17', '2018-12-20', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category_m`
--

CREATE TABLE IF NOT EXISTS `sub_category_m` (
  `sub_id` int(5) NOT NULL AUTO_INCREMENT,
  `sub_cat_name` varchar(50) NOT NULL,
  `cat_id` int(10) NOT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `sub_category_m`
--

INSERT INTO `sub_category_m` (`sub_id`, `sub_cat_name`, `cat_id`) VALUES
(1, 'Refrigerator', 1),
(3, 'CPU', 3),
(4, 'Mouse', 3),
(5, 'fan', 1),
(6, 'SMPS', 3),
(7, 'Motherboard', 3),
(8, 'Cabinet', 3),
(9, 'Ram', 3),
(10, 'Monitor', 3),
(11, 'table', 2),
(12, 'Chairs', 2),
(13, 'Bed', 2),
(14, 'Sofa', 2),
(15, 'AC', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_m`
--

CREATE TABLE IF NOT EXISTS `user_m` (
  `uid` int(5) NOT NULL AUTO_INCREMENT,
  `uname` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(25) NOT NULL,
  `city` varchar(15) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `approval` varchar(20) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `user_m`
--

INSERT INTO `user_m` (`uid`, `uname`, `email`, `password`, `city`, `phone`, `approval`) VALUES
(5, 'vishal', 'rajivishalrajaivishal@yahoo.com', '1432', 'Bhavnagar', '8141912584', 'Disapprove'),
(7, 'mohit', 'rajaimohit1998@gmai.com', '1998', 'Bhavnagar', '8306152503', 'Approve'),
(9, 'vijay', 'vijaysahitya@gmail.com', 'vijay1998', 'Ahemdabad', '8460798746', 'Approve'),
(10, 'Rahul', 'rahul@gmail.vcom', '1998', 'Mumbai', '7383639361', 'Approve'),
(11, 'kevin', 'kevin12@gmail.com', '1998', 'Bhavnagar', '8460210437', 'Approve');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
