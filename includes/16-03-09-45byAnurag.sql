-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2019 at 05:16 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trac`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `c_id` varchar(12) NOT NULL,
  `i_id` varchar(13) NOT NULL,
  `name` varchar(25) NOT NULL,
  `description` varchar(150) NOT NULL,
  `location` varchar(25) NOT NULL,
  `rating` varchar(25) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`c_id`, `i_id`, `name`, `description`, `location`, `rating`, `date_time`) VALUES
('c1', 'i1', 'Vinod Enterprises', 'Awesome product Manufacturer,pure and New product', 'Jabalpur', '5.0', '2019-03-15 19:36:14');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `f_id` varchar(12) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Number` varchar(13) DEFAULT NULL,
  `City` varchar(25) NOT NULL,
  `State` varchar(25) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Scale` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`f_id`, `Name`, `Number`, `City`, `State`, `date_time`, `Scale`) VALUES
('f1', 'Ramesh Kumar', '1111111111', 'ludhiyana', 'Punjab', '2019-03-13 02:04:09', 'm'),
('f2', 'suresh', '2222222222', 'amritsar', 'punjab', '2019-03-13 02:04:09', 'l'),
('f3', 'naresh', '3333333333', 'jabalpur', 'madhya pradesh', '2019-03-13 02:04:09', 'm'),
('f4', 'chavish', '2233322333', 'indore', 'madhya pradesh', '2019-03-13 02:42:42', 'm'),
('f5', 'ram', '5727', 'sagar', 'rajasthan', '2019-03-15 09:18:20', 'l'),
('f6', 'verm', '2472', 'damoh', 'chattigarh', '2019-03-15 09:18:21', 'l'),
('f7', 'suraj', '2570', 'bhopal', 'jk', '2019-03-15 09:18:21', 's'),
('f8', 'anurag', '22', 'ranjhi', 'maharashtra', '2019-03-15 09:18:21', 'l'),
('f9', 'nikhil', '24175', 'gokalpur', 'tamil nadu', '2019-03-15 09:18:21', 's');

-- --------------------------------------------------------

--
-- Table structure for table `industrialist`
--

CREATE TABLE `industrialist` (
  `i_id` varchar(12) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Number` varchar(13) NOT NULL,
  `City` varchar(25) NOT NULL,
  `State` varchar(25) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Scale` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `industrialist`
--

INSERT INTO `industrialist` (`i_id`, `Name`, `Number`, `City`, `State`, `date_time`, `Scale`) VALUES
('i1', 'vinod', '6666666666', 'sehore', 'madhya pradesh', '2019-03-13 02:33:52', 'm'),
('i2', 'RameshPrasad', '939393993', 'ludhiyana', 'panjab', '2019-03-16 16:50:03', 'm');

-- --------------------------------------------------------

--
-- Table structure for table `ingredient`
--

CREATE TABLE `ingredient` (
  `p_id` varchar(12) NOT NULL,
  `i_id` varchar(12) NOT NULL,
  `name` varchar(25) NOT NULL,
  `qty` varchar(15) NOT NULL,
  `category` varchar(25) DEFAULT NULL,
  `location` varchar(25) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mediocre`
--

CREATE TABLE `mediocre` (
  `m_id` varchar(12) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Number` varchar(13) NOT NULL,
  `City` varchar(25) NOT NULL,
  `State` varchar(25) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Scale` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mediocre`
--

INSERT INTO `mediocre` (`m_id`, `Name`, `Number`, `City`, `State`, `date_time`, `Scale`) VALUES
('m1', 'danish', '6382946258', 'shujalpur', 'maharastra', '2019-03-13 02:37:00', 'm'),
('m2', 'girish', '7764672737', 'habibganj', 'madhya pradesh', '2019-03-13 02:34:55', 'l'),
('m3', 'rabish', '7293959837', 'bhopal', 'madhya pradesh', '2019-03-13 02:35:44', 'l'),
('m4', 'rabish', '790302847', 'shehore', 'mp', '2019-03-16 16:45:36', 'm');

-- --------------------------------------------------------

--
-- Table structure for table `productreg`
--

CREATE TABLE `productreg` (
  `p_id` varchar(12) NOT NULL,
  `regBy` varchar(3) NOT NULL,
  `r_id` varchar(12) NOT NULL,
  `name` varchar(25) NOT NULL,
  `qty` varchar(15) NOT NULL,
  `category` varchar(25) DEFAULT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `location` varchar(25) DEFAULT NULL,
  `duration` varchar(10) DEFAULT NULL,
  `expiry date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productreg`
--

INSERT INTO `productreg` (`p_id`, `regBy`, `r_id`, `name`, `qty`, `category`, `date_time`, `location`, `duration`, `expiry date`) VALUES
('p1', 'f', 'f1', 'wheat', '50 kg', 'grain', '2019-03-13 01:58:41', 'ludhiyana', NULL, '2019-11-11'),
('p10', 'f', 'f9', 'maize', '20', 'grain', '2019-03-13 17:50:25', 'mumbai', '0', '2019-12-22'),
('p11', 'm', 'm2', 'rice flour', '30', 'grain', '2019-03-13 17:50:25', 'delhi', '0', '2019-12-22'),
('p12', 'i', 'i1', 'papad', '60', 'snacks', '2019-03-13 17:50:25', 'jabalpur', '0', '2019-12-22'),
('p13', 'm', 'm4', 'rice flour', '60 kg', 'grain', '2019-03-16 16:48:20', 'jabalpur', '5 month', '2019-03-05'),
('p2', 'f', 'f2', 'wheat', '20', 'grain', '2019-03-13 01:58:41', 'jalandhar', '60', NULL),
('p3', 'f', 'f3', 'wheat', '20', 'grain', '2019-03-13 01:58:41', 'shujalpur', '500', NULL),
('p4', 'm', 'm1', 'flour', '50', 'grain', '2019-03-13 01:58:41', 'shajapur', NULL, '2019-05-11'),
('p5', 'f', 'f4', 'rice', '20', 'grain', '2019-03-13 17:50:24', 'agar', '0', '2019-12-22'),
('p6', 'f', 'f5', 'rice', '20', 'grain', '2019-03-13 17:50:24', 'akola', '0', '2019-12-22'),
('p7', 'f', 'f6', 'rice', '30', 'grain', '2019-03-13 17:50:25', 'indore', '0', '2019-12-22'),
('p8', 'f', 'f7', 'paddy', '25', 'grain', '2019-03-13 17:50:25', 'pune', '0', '2019-12-22'),
('p9', 'f', 'f8', 'sugarcane', '20', 'xyz', '2019-03-13 17:50:25', 'sangli', '0', '2019-12-22');

-- --------------------------------------------------------

--
-- Table structure for table `refrences`
--

CREATE TABLE `refrences` (
  `p_id` varchar(12) NOT NULL,
  `refrenceId` varchar(200) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `t_id` varchar(12) NOT NULL,
  `p_id` varchar(12) NOT NULL,
  `from` varchar(12) NOT NULL,
  `to` varchar(12) NOT NULL,
  `qty` varchar(12) NOT NULL,
  `location` varchar(25) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`t_id`, `p_id`, `from`, `to`, `qty`, `location`, `date_time`) VALUES
('t1', 'p1', 'f1', 'm1', '50kg', 'jalandhar', '2019-03-13 02:30:23'),
('t2', 'p2', 'f2', 'm1', '20kg', 'amritsar', '2019-03-13 02:32:48'),
('t3', 'p3', 'f3', 'm1', '20kg', 'jabalpur', '2019-03-13 02:32:48'),
('t4', 'p5', 'f4', 'm2', '20kg', 'mumbai', '2019-03-15 09:08:55'),
('t5', 'p6', 'f5', 'm2', '30kg', 'pune', '2019-03-15 09:08:55'),
('t6', 'p7', 'f6', 'm2', '10kg', 'ludhiyana', '2019-03-15 09:08:55'),
('t7', 'p4', 'm1', 'i1', '50kg', 'mumbai', '2019-03-15 09:08:55'),
('t8', 'p11', 'm2', 'i1', '50kg', 'indore', '2019-03-15 09:08:55'),
('t9', 'p13', 'm4', 'i2', '60 kg', 'ludhiyana', '2019-03-16 16:49:20');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `t_id` varchar(12) NOT NULL,
  `p_id` varchar(12) NOT NULL,
  `from` varchar(12) NOT NULL,
  `to` varchar(12) NOT NULL,
  `qty` varchar(15) NOT NULL,
  `location` varchar(25) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE `warehouse` (
  `w_id` varchar(12) NOT NULL,
  `name` varchar(25) NOT NULL,
  `capacity` varchar(25) DEFAULT NULL,
  `location` varchar(25) NOT NULL,
  `rating` varchar(25) DEFAULT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warehouse`
--

INSERT INTO `warehouse` (`w_id`, `name`, `capacity`, `location`, `rating`, `date_time`) VALUES
('w1', 'ram warehouse', '5000kg', 'ludhiyana', '4', '2019-03-15 19:33:57'),
('w2', 'bhole warehouse', '5700kg', 'rampur', '5', '2019-03-15 19:33:57'),
('w3', 'rampurwale coldstorage', '6600kg', 'Indore', '4.5', '2019-03-15 19:33:58'),
('w4', 'Arav coldstorage', '700kg', 'bhopal', '1.4', '2019-03-15 19:33:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `industrialist`
--
ALTER TABLE `industrialist`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `ingredient`
--
ALTER TABLE `ingredient`
  ADD PRIMARY KEY (`p_id`,`i_id`);

--
-- Indexes for table `mediocre`
--
ALTER TABLE `mediocre`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `productreg`
--
ALTER TABLE `productreg`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `refrences`
--
ALTER TABLE `refrences`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`t_id`,`p_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`t_id`,`p_id`);

--
-- Indexes for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`w_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
