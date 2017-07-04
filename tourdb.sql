-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 06, 2014 at 12:20 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tourdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_master`
--

CREATE TABLE IF NOT EXISTS `admin_master` (
  `Email_ID` varchar(20) DEFAULT NULL,
  `Password` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_master`
--

INSERT INTO `admin_master` (`Email_ID`, `Password`) VALUES
('jen', '123');

-- --------------------------------------------------------

--
-- Table structure for table `booking_master`
--

CREATE TABLE IF NOT EXISTS `booking_master` (
  `Email_ID` varchar(50) NOT NULL DEFAULT '',
  `package_code` varchar(11) NOT NULL,
  `Name of Group` varchar(25) NOT NULL,
  `Child` int(2) NOT NULL,
  `Adult` int(2) NOT NULL,
  `No. of people` int(3) NOT NULL,
  `Date of start tour` date NOT NULL,
  `Total days` int(2) NOT NULL,
  `Address` varchar(70) NOT NULL,
  `Post code` int(6) NOT NULL,
  `number` varchar(10) NOT NULL,
  `Remark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_master`
--

INSERT INTO `booking_master` (`Email_ID`, `package_code`, `Name of Group`, `Child`, `Adult`, `No. of people`, `Date of start tour`, `Total days`, `Address`, `Post code`, `number`, `Remark`) VALUES
('hitakshi10@gmail.com', 'KL888', 'Hitakshi', 2, 3, 5, '2014-06-15', 7, 'Aendhal', 396430, '7894561236', ''),
('dipalimistry30@gmail.com', 'SK789', 'DJ Group', 2, 2, 4, '2014-06-09', 8, 'Degam', 396530, '4568564561', ''),
('twinklemistry123@gmail.com', 'KL888', 'Dhyey', 1, 2, 3, '2014-06-15', 7, 'Vapi', 396430, '7896542583', ''),
('jignalad123@live.com', 'MH555', 'Skumar', 1, 2, 3, '2014-06-07', 6, 'Chikhli, kumbharvad', 396521, '8979456123', 'pick me up from suprim hotel, chikhli'),
('amarvaidya123@gmail.com', 'MH555', 'pagal chhokro', 1, 2, 3, '2014-03-30', 9, 'brahmin falia,opp;gujrati school At & post Mandir', 396854, '8523694562', ''),
('rups123@yahoo.com', 'RJ222', 'rupal', 1, 2, 3, '2014-03-30', 5, 'brahmin falia,opp;gujrati school At & post Mandir', 369852, '8965321478', ''),
('unnati123@hotmail.com', 'PJ999', 'unnati', 1, 2, 3, '2014-05-01', 6, 'brahmin falia,opp;gujrati school At & post Mandir', 369852, '1236547893', ''),
('axila123@gmail.com', 'WB123', 'axila', 2, 2, 4, '2014-06-12', 7, 'At & post degam\r\nnavafalia, Dist-navsari', 396530, '8956231472', ''),
('knb106@hotmail.com', 'SI123', 'Kajal', 1, 2, 3, '2014-06-15', 9, 'degam', 396530, '781783678', ''),
('jenishlad40@gmail.com', 'GJ111', 'jenish', 1, 2, 2, '2014-06-30', 5, 'degam', 396530, '781783678', ''),
('hita123@yahoo.com', 'GJ111', 'hita group', 1, 2, 3, '2014-06-30', 5, 'at post degam', 369530, '9898112361', 'pick me from navsari');

-- --------------------------------------------------------

--
-- Table structure for table `callback_master`
--

CREATE TABLE IF NOT EXISTS `callback_master` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `package_code` varchar(8) NOT NULL,
  `Email_ID` varchar(30) NOT NULL,
  `mobile` int(10) NOT NULL,
  `adult` int(2) NOT NULL,
  `child` int(2) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `callback_master`
--

INSERT INTO `callback_master` (`fname`, `lname`, `package_code`, `Email_ID`, `mobile`, `adult`, `child`, `time`) VALUES
('lad', 'jey', 'DJ147', 'jenishlad40@live.com', 2147483647, 2, 2, '00:00:00'),
('kajal', 'Bhatt', 'SI123', 'knb106@hotmail.com', 2147483647, 1, 2, '10:00:00'),
('Dhyey', 'Mistry', 'GO666', 'dhyeymistry123@gmail.com', 2147483647, 2, 1, '10:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `cancle_master`
--

CREATE TABLE IF NOT EXISTS `cancle_master` (
  `Email_ID` varchar(50) NOT NULL,
  `package_code` varchar(8) NOT NULL,
  `package_cost` float NOT NULL,
  `method` varchar(20) NOT NULL,
  `ctype` varchar(15) NOT NULL,
  `cno` int(20) NOT NULL,
  `cvc` int(3) NOT NULL,
  `xmonth` varchar(15) NOT NULL,
  `xyear` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cancle_master`
--

INSERT INTO `cancle_master` (`Email_ID`, `package_code`, `package_cost`, `method`, `ctype`, `cno`, `cvc`, `xmonth`, `xyear`) VALUES
('jenishlad40@gmail.com', 'GJ111', 2999.9, 'Debit card', 'Visa card', 2147483647, 564, '12', 15),
('jenishlad40@gmail.com', 'DJ147', 2999.9, 'Debit card', 'Master card', 2147483647, 852, '12', 15),
('knb106@hotmail.com', 'SK789', 4099.9, 'Debit card', 'Master card', 2147483647, 546, '12', 15),
('jenishlad40@gmail.com', 'EI123', 2999.9, 'Debit card', 'Master card', 2147483647, 856, '12', 24),
('jenishlad40@gmail.com', 'DJ147', 2999.9, 'Debit card', 'Master card', 2147483647, 864, '12', 24),
('knb106@hotmail.com', 'SI123', 4099.9, 'Debit card', 'Master card', 2147483647, 569, '09', 22),
('knb106@hotmail.com', 'SI123', 4099.9, 'Debit card', 'Master card', 2147483647, 569, '09', 22),
('hitakshi10@gmail.com', 'KL888', 2999.9, 'Debit card', 'Master card', 2147483647, 589, '12', 15),
('hitakshi10@gmail.com', 'KL888', 2999.9, 'Debit card', 'Master card', 2147483647, 589, '12', 15),
('hitakshi10@gmail.com', 'GJ111', 2999.9, 'Creditcard', '', 0, 0, '', 0),
('hitakshi10@gmail.com', 'KL888', 2999.9, 'Debit card', 'Master card', 2147483647, 589, '12', 15),
('hitakshi10@gmail.com', 'GJ111', 2999.9, 'Creditcard', '', 0, 0, '', 0),
('jenishlad40@gmail.com', 'GJ111', 2999.9, 'Debit card', '', 2147483647, 568, '11', 25);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `F_name` varchar(20) NOT NULL,
  `L_name` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `url` varchar(40) NOT NULL,
  `message` varchar(365) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`F_name`, `L_name`, `Email`, `url`, `message`) VALUES
('Jenish', 'Lad', 'jenishlad40@gmail.com', 'www.gmail.com', 'hi'),
('bhatt', 'kajal', 'knb106@hotmail.com', 'www.kajalbhatt.com', 'hello'),
('jey', 'lad', 'jenishlad40@live.com', 'www.kajalbhatt.com', 'hi'),
('jenish', 'lad', 'jenishlad40@gmail.com', '', 'khij'),
('jenish', 'lad', 'jenishlad40@gmail.com', '', 'khij');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_master`
--

CREATE TABLE IF NOT EXISTS `feedback_master` (
  `Email_ID` varchar(30) DEFAULT NULL,
  `name` varchar(15) DEFAULT NULL,
  `msg` varchar(365) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_master`
--

INSERT INTO `feedback_master` (`Email_ID`, `name`, `msg`) VALUES
('knb106@hotmail.com', 'Kajal bhatt', 'Hello.............'),
('jenish40@gmail.com', 'Jenish Lad', 'hello..................\r\n'),
('abkhalifa@gmail.com', 'Azaz', 'hello.........'),
('dipalimistry30@gmail.com', 'Dipali', 'hjsgvfhjgavhjgvj\r\n'),
('jenishlad@gmail.com', 'jenish', 'kkbvkjbk\r\njhdf\r\ngjfd\r\n'),
('jenishlad@gmail.com', 'jey', 'iahiuchkaxhvkcs'),
('jenishlad@gmail.com', 'jey', 'jkvKSNVKSN'),
('dipalimistry30@gmail.com', 'dipali', 'hello'),
('dipalimistry30@gmail.com', 'dipali', 'hello'),
('jenishlad40@gmail.com', 'jey', 'OHIJH'),
('jenishlad40@gmail.com', 'jey', 'OHIJH'),
('jenishlad40@gmail.com', 'jey', 'OHIJH'),
('jenishlad40@gmail.com', 'jey', 'KHKSAFH');

-- --------------------------------------------------------

--
-- Table structure for table `flight_master`
--

CREATE TABLE IF NOT EXISTS `flight_master` (
  `package_code` varchar(6) NOT NULL,
  `fno` varchar(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `from` varchar(30) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `ftime` time NOT NULL,
  `dtime` time NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`package_code`),
  UNIQUE KEY `package_code` (`package_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight_master`
--

INSERT INTO `flight_master` (`package_code`, `fno`, `fname`, `from`, `destination`, `ftime`, `dtime`, `date`) VALUES
('DL333', 'AE2225', 'King fisher', 'Mumbai', 'Delhi', '12:00:00', '10:00:00', '2014-07-24'),
('EI123', 'EC0901', 'Air India', 'Mumbai', 'Guwahati', '02:00:00', '12:00:00', '2014-10-11'),
('GJ111', 'GJ0085', 'Jet Airways', 'Surat', 'Ahmedabad', '12:00:00', '11:15:00', '2014-06-30'),
('GO666', 'AD145', 'Kingfisher', 'Mumbai', 'GOA', '10:05:00', '08:00:00', '2014-04-18'),
('KL888', 'WK09450', 'Kingfisher', 'Surat', 'Kerala', '05:30:00', '03:00:00', '2014-06-15'),
('MH555', 'TR0309', 'Air India', 'Surat', 'Mumbai', '02:15:00', '01:30:00', '2014-06-07'),
('MP444', 'H09o71', 'Spice Jet', 'Surat', 'Bhopal', '03:03:00', '04:45:03', '2014-03-30'),
('NI456', 'AW8754', 'Sky Jet Air', 'Mumbai', 'Punjab', '06:15:05', '04:05:00', '2014-07-15'),
('PJ999', 'AS0900', 'Indigo ', 'Mumbai', 'Punjab', '12:00:00', '10:30:00', '2014-05-01'),
('RJ222', 'KO0091', 'Air Asia  India', 'Ahmedabad', 'Jaipur', '09:15:00', '07:00:00', '2014-03-30'),
('SI123', 'CVO9861', 'Blue Dart', 'Mumbai', 'Kerala', '02:20:00', '12:00:00', '2014-06-15'),
('SK789', 'BN09O8', 'Spice Jet', 'Ahmedabad', 'Sikkim', '01:00:00', '03:00:05', '2014-06-09'),
('UP456', 'OO1209', 'Sky Jet Air', 'Mumbai', 'Agra', '05:05:15', '03:00:00', '2014-01-10'),
('WB123', 'OO1209', 'Air India', 'Surat', 'Kolkata', '02:15:00', '11:45:00', '2014-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `hits`
--

CREATE TABLE IF NOT EXISTS `hits` (
  `page` char(100) NOT NULL DEFAULT '',
  `count` int(15) DEFAULT NULL,
  PRIMARY KEY (`page`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hits`
--

INSERT INTO `hits` (`page`, `count`) VALUES
('Home page', 61);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(30) DEFAULT NULL,
  `user_agent` varchar(50) DEFAULT NULL,
  `datetime` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `ip_address`, `user_agent`, `datetime`) VALUES
(1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/53', '2014/05/05 05:20:41');

-- --------------------------------------------------------

--
-- Table structure for table `like_master`
--

CREATE TABLE IF NOT EXISTS `like_master` (
  `package_code` varchar(8) NOT NULL,
  `Likes` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `like_master`
--

INSERT INTO `like_master` (`package_code`, `Likes`) VALUES
('GJ111', 10),
('DL333', 4),
('NI456', 2),
('GO666', 4),
('KL888', 3),
('MH555', 1),
('SK789', 3),
('PJ999', 2),
('UP456', 4),
('MP444', 3),
('RJ222', 9),
('WB123', 4),
('EI123', 5),
('SI123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `Email_ID` varchar(50) DEFAULT NULL,
  `Password` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Email_ID`, `Password`) VALUES
('jenishlad40@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `package_master`
--

CREATE TABLE IF NOT EXISTS `package_master` (
  `package_code` varchar(8) NOT NULL,
  `package_name` varchar(35) NOT NULL,
  `package_cost` float NOT NULL,
  `package_tour_day` int(2) NOT NULL,
  `package_tour_night` int(2) NOT NULL,
  `tour_date` date NOT NULL,
  `package_tour_distance` float NOT NULL,
  `package_city` varchar(20) NOT NULL,
  `package_tour_route` varchar(100) NOT NULL,
  `image` text,
  PRIMARY KEY (`package_code`),
  UNIQUE KEY `package_code` (`package_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_master`
--

INSERT INTO `package_master` (`package_code`, `package_name`, `package_cost`, `package_tour_day`, `package_tour_night`, `tour_date`, `package_tour_distance`, `package_city`, `package_tour_route`, `image`) VALUES
('DL333', 'Delhi', 25999, 7, 6, '2014-07-24', 6500, 'Delhi', 'Akshardham-LUtambminr', 'gate.jpg'),
('EI123', 'East India', 29999, 10, 9, '2014-10-11', 10985, 'Meghalay.Assam', 'Assam-Arunachal Pradesh-Manipur', 'umiam-lake-itraveldeals.JPG'),
('GJ111', 'Gujarat', 29999, 5, 4, '2014-06-30', 2300, 'Gujarat', 'Ahmdabad-Ambaji-patan', 'gujarat-top-img.jpg'),
('GO666', 'Goa', 20000, 5, 4, '2014-04-18', 2600, 'Goa', '', 'Houseboats.jpg'),
('KL888', 'Kerala', 35999, 7, 6, '2014-06-15', 7850, 'Kerala', 'kerala-national park', 'Kerala.jpg'),
('MH555', 'Maharashtra', 19999, 6, 5, '2014-06-07', 1000, 'Mumbai,Pune', 'Mumbai-pune', 'mh.jpg'),
('MP444', 'MP', 19999, 9, 8, '2014-03-30', 5460, 'MP', '', 'king fort.jpg'),
('NI456', 'North india', 45000, 8, 7, '2014-07-15', 6700, 'Punjab', 'Punjab', 'Akshardham temple.jpg'),
('PJ999', 'Punjab', 32999, 6, 5, '2014-05-01', 6700, 'Amritsar,jalandhar', 'Amritsar,', 'lotus-temple.jpg'),
('RJ222', 'Rajashthan', 19999, 5, 4, '2014-03-30', 4500, 'Rajashthan', '', 'Hawa-Mahal-Jaipur.jpg'),
('SI123', 'South India', 40999, 9, 8, '2014-06-15', 7655, 'Chennai- Rameshvarm', 'Chennai-Rameshvarm', 'South-India-Tour.jpg'),
('SK789', 'Sikkim', 25999, 8, 7, '2014-06-09', 8430, 'Gangtok-kalimpong-Ra', 'westbengal-Gangtok-kalimpong-Ravangla', '1263327.jpg'),
('UP456', 'Uttar Pradesh', 19999, 6, 5, '2014-07-10', 7600, 'Agra,Haridrar', 'Delhi-Agra-varansi', 'Taj mahal.jpg'),
('WB123', 'West Bengal', 28999, 7, 8, '2014-06-12', 4500, 'Kolakata,sidigudi', 'Hydrbad-kolkata-sidigudi', 'WB.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pass_master`
--

CREATE TABLE IF NOT EXISTS `pass_master` (
  `Email_ID` varchar(50) NOT NULL,
  `package_code` varchar(8) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `page` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pass_master`
--

INSERT INTO `pass_master` (`Email_ID`, `package_code`, `pname`, `page`) VALUES
('jenishlad40@gmail.com', 'GJ111', 'kajal nayan bahtt', 20),
('jenishlad40@gmail.com', 'GJ111', 'dipali dharmendrabhai mistry', 20),
('knb106@hotmail.com', 'SI123', 'jenish Pravinbhai lad', 20),
('hitakshi10@gmail.com', 'KL888', 'Krunali Bhagat', 20),
('hitakshi10@gmail.com', 'KL888', 'Patel minal', 20),
('hitakshi10@gmail.com', 'KL888', 'Lad Axila Arvindbhai', 20),
('knb106@hotmail.com', 'SI123', ' Kajal Nayanbhai bhatt', 20),
('knb106@hotmail.com', 'SI123', 'Dipali Dharmendrabhai mistry', 20),
('axila123@gmail.com', 'WB123', ' Kajal Nayanbhai bhatt', 20),
('axila123@gmail.com', 'WB123', 'Axila Arvindbhai Lad', 21),
('axila123@gmail.com', 'WB123', 'Bhumika Ahir', 21),
('axila123@gmail.com', 'WB123', 'Parajapti kirti N', 20),
('unnati123@hotmail.com', 'PJ999', 'Unnati Amar Vaidya', 26),
('unnati123@hotmail.com', 'PJ999', ' Amar P Vaidya', 28),
('unnati123@hotmail.com', 'WB123', ' Kajal Nayanbhai bhatt', 20),
('rups123@yahoo.com', 'RJ222', 'Rupal Vaidya', 24),
('rups123@yahoo.com', 'RJ222', 'kajal nayanbhai bahtt', 20),
('rups123@yahoo.com', 'RJ222', 'Unnati Amar Vaidya', 26),
('hitakshi10@gmail.com', 'GJ111', 'Hitakshi ', 21),
('hitakshi10@gmail.com', 'GJ111', 'Mayuri', 22),
('amarvaidya123@gmail.com', 'MH555', 'Amar Vaidya', 26),
('amarvaidya123@gmail.com', 'MH555', 'Unnati vaidya', 26),
('amarvaidya123@gmail.com', 'MH555', 'Kajal Bhatt', 20),
('amarvaidya123@gmail.com', 'MH555', 'Kajal Bhatt', 20),
('jignalad123@live.com', 'MH555', 'JIgna Lad', 21),
('Jignalad123@live.com', 'MH555', 'Jenish Lad', 20),
('jignalad123@live.com', 'MH555', 'Twinkle Mistry', 24),
('twinklemistry123@gmail.com', 'KL888', 'Twinkle Mistry', 23),
('twinklemistry123@gmail.com', 'KL888', 'Ankur Mistry', 24),
('twinklemistry123@gmail.com', 'KL888', 'Dhyey', 1),
('dipalimistry30@gmail.com', 'SK789', 'Dipali Mistry', 20),
('dipalimistry30@gmail.com', 'SK789', 'Swati Mistry', 22),
('dipalimistry30@gmail.com', 'SK789', 'Satish Lad', 21),
('dipalimistry30@gmail.com', 'SK789', 'Binal lad', 25);

-- --------------------------------------------------------

--
-- Table structure for table `payment_master`
--

CREATE TABLE IF NOT EXISTS `payment_master` (
  `Email_ID` varchar(50) NOT NULL,
  `package_code` varchar(8) NOT NULL,
  `package_cost` float NOT NULL,
  `method` varchar(20) NOT NULL,
  `ctype` varchar(15) NOT NULL,
  `cno` int(20) NOT NULL,
  `cvc` int(3) NOT NULL,
  `xmonth` varchar(15) NOT NULL,
  `xyear` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_master`
--

INSERT INTO `payment_master` (`Email_ID`, `package_code`, `package_cost`, `method`, `ctype`, `cno`, `cvc`, `xmonth`, `xyear`) VALUES
('hitakshi10@gmail.com', 'KL888', 26999.1, 'Debit card', 'Master card', 2147483647, 589, '12', 15),
('dipalimistry30@gmail.com', 'SK789', 103996, 'Debit card', 'Master card', 2147483647, 123, '12', 15),
('twinklemistry123@gmail.com', 'KL888', 107997, 'Debit card', 'Master card', 2147483647, 123, '12', 15),
('jignalad123@live.com', 'MH555', 59997, 'Debit card', 'Master card', 2147483647, 985, '11', 14),
('amarvaidya123@gmail.com', 'MP444', 59997, 'Debit card', 'Visa card', 2147483647, 741, '12', 15),
('rups123@yahoo.com', 'RJ222', 59997, 'Debit card', 'Visa card', 2147483647, 123, '12', 17),
('unnati123@hotmail.com', 'PJ999', 98997, 'Debit card', 'Visa card', 2147483647, 563, '12', 16),
('axila123@gmail.com', 'WB123', 115996, 'Debit card', 'Master card', 2147483647, 258, '11', 17),
('knb106@hotmail.com', 'SI123', 122997, 'Debit card', 'Master card', 2147483647, 569, '09', 22),
('jenishlad40@gmail.com', 'GJ111', 26999.1, 'Debit card', '', 2147483647, 568, '11', 25),
('hitakshi10@gmail.com', 'GJ111', 26999.1, 'Creditcard', '', 0, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `Fname` varchar(50) NOT NULL,
  `Mname` varchar(15) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `bdate` date NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Address` varchar(60) NOT NULL,
  `City` varchar(15) NOT NULL,
  `State` varchar(15) NOT NULL,
  `Pincode` int(11) NOT NULL,
  `Mo.no` int(11) NOT NULL,
  `Email_ID` varchar(50) NOT NULL DEFAULT '',
  `Password` varchar(16) NOT NULL,
  `Cpassword` varchar(16) NOT NULL,
  PRIMARY KEY (`Email_ID`),
  UNIQUE KEY `Email_ID` (`Email_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Fname`, `Mname`, `Lname`, `bdate`, `Gender`, `Address`, `City`, `State`, `Pincode`, `Mo.no`, `Email_ID`, `Password`, `Cpassword`) VALUES
('Amar', 'P', 'vaidya', '1986-07-17', 'Male', 'brahmin falia,opp;gujrati school At & post Mandir', 'navsari', 'gujarat', 396458, 2147483647, 'amarvaidya123@gmail.com', '123654', '123654'),
('Axila', 'a', 'lad', '1993-09-21', 'Female', 'navafalia', 'chikhli', 'gujarat', 396541, 2147483647, 'axila123@gmail.com', '456321', '456321'),
('bhumi', 'A', 'Ahir', '1993-10-20', 'Female', 'Degam', 'navsari', 'gujarat', 856475, 2147483647, 'bhumi123@yahoo.com', '1236547', '1236547'),
('Dipali', 'D', 'Mistry', '1994-06-30', 'Female', 'Degam', 'Chikhli', 'gujarat', 456321, 2147483647, 'dipalimistry30@gmail.com', '123456', '123456'),
('Dipali', 'p', 'Lad', '1994-06-30', 'Female', 'Degam', 'chikhli', 'gujarat', 396530, 2147483647, 'dipalimistry@gmail.com', '123456', '123456'),
('hita', 'a', 'patel', '1994-10-10', 'Female', 'Degam', 'navsari', 'gujarat', 396530, 2147483647, 'hita123@yahoo.com', '123654', '123654'),
('hitakshi', 's', 'patel', '1993-01-01', 'Female', 'Endhal', 'navsari', 'gujarat', 396521, 2147483647, 'hitakshi10@gmail.com', 'hit0101', 'hit0101'),
('Jenish', 'Pravinbhai', 'lad', '1994-03-09', 'male', 'Degam', 'Chikhli', 'Gujarat', 396530, 2147483647, 'jenishlad40@gmail.com', '123456', '123456'),
('jey', 'p', 'Lad', '1994-03-09', 'male', 'Degam', 'navsari', 'gujarat', 396521, 2147483647, 'jenishlad@live.com', '123456', '123456'),
('Jigna', 'Shailesh', 'Lad', '1992-05-22', 'Female', 'chikhli', 'chikhli', 'gujarat', 396521, 2147483647, 'jignalad123@live.com', '123456', '123456'),
('kajal', 'Nayanbhai', 'bhatt', '1994-06-10', 'Female', 'Degam', 'Chikhli', 'Gujarat', 396530, 2147483647, 'knb106@hotmail.com', '123456', '123456'),
('darshan', 'lad', 'lad', '2014-05-15', '', 'degan', 'cegan', 'gujarat', 396530, 2147483647, 'lad@yahoo.com', '123', '123'),
('rupal', 'p', 'vaidya', '1988-08-31', 'Female', 'At & post degam', 'navsari', 'gujarat', 396582, 2147483647, 'rups123@yahoo.com', '123654', '123654'),
('Twinkle', 'Ankur', 'Mistry', '1991-02-28', 'Female', 'Vapi', 'Vapi', 'gujarat', 396453, 2147483647, 'twinklemistry123@gmail.com', '9825512163', '9825512163'),
('unnati', 'a', 'vaidya', '1986-11-17', 'Female', 'At & post mandir', 'navsari', 'gujarat', 369845, 2147483647, 'unnati123@hotmail.com', '147258', '147258');
