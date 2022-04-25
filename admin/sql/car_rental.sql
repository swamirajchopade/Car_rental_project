-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2022 at 08:15 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `date`) VALUES
(1, 'tejasgund@gmail.com', 'tejasgund', '2022-04-23 11:15:35');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bid` int(11) NOT NULL,
  `vid` int(11) DEFAULT NULL,
  `vname` varchar(100) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `uemail` varchar(100) DEFAULT NULL,
  `uname` varchar(100) DEFAULT NULL,
  `fromdate` varchar(50) DEFAULT NULL,
  `todate` varchar(50) DEFAULT NULL,
  `destination` int(200) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `bregdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `vid` int(11) NOT NULL,
  `vtitle` varchar(100) DEFAULT NULL,
  `vbrand` varchar(100) DEFAULT NULL,
  `voverview` longtext DEFAULT NULL,
  `pdprice` int(10) DEFAULT NULL,
  `ftype` varchar(100) DEFAULT NULL,
  `myear` int(6) DEFAULT NULL,
  `scapacity` int(11) DEFAULT NULL,
  `vimg1` varchar(100) DEFAULT NULL,
  `vimg2` varchar(100) DEFAULT NULL,
  `vimg3` varchar(100) DEFAULT NULL,
  `vimg4` varchar(100) DEFAULT NULL,
  `vimg5` varchar(100) DEFAULT NULL,
  `vimg6` varchar(100) DEFAULT NULL,
  `ac` int(11) DEFAULT NULL,
  `airbag` int(11) DEFAULT NULL,
  `regdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`vid`, `vtitle`, `vbrand`, `voverview`, `pdprice`, `ftype`, `myear`, `scapacity`, `vimg1`, `vimg2`, `vimg3`, `vimg4`, `vimg5`, `vimg6`, `ac`, `airbag`, `regdate`) VALUES
(1, 'Grand vitara brezza', 'Maruti Suzuki', 'vehicle condition was super good. superb sound quality. New tire  ', 2500, 'petrol', 2014, 6, 'asdfad', 'asdasdff', 'asdfasdf', 'asdasd', 'asdasdf', 'asdfasdf', 1, 1, '2022-04-23 15:11:32');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `fuser` varchar(70) DEFAULT NULL,
  `freason` varchar(355) DEFAULT NULL,
  `fdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `uid`, `fuser`, `freason`, `fdate`) VALUES
(1, 11, 'tejas gund', 'a;lsdfjkasdl;fjkal;dsf;SDFJADl;ajkd;lfj\r\nasdjfla\r\na;sdlf', '2022-04-25 17:31:58');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pid` int(11) NOT NULL,
  `bid` int(11) DEFAULT NULL,
  `transactionid` varchar(50) DEFAULT NULL,
  `pemail` varchar(50) DEFAULT NULL,
  `pphone` int(11) DEFAULT NULL,
  `pdetails` varchar(200) DEFAULT NULL,
  `pdatetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbldriver`
--

CREATE TABLE `tbldriver` (
  `did` int(11) NOT NULL,
  `dname` varchar(100) DEFAULT NULL,
  `dcontactno` char(11) DEFAULT NULL,
  `daltno` char(11) DEFAULT NULL,
  `dgender` int(5) DEFAULT NULL,
  `ddob` varchar(70) DEFAULT NULL,
  `daddress` varchar(255) DEFAULT NULL,
  `dstate` varchar(80) DEFAULT NULL,
  `ddist` varchar(70) DEFAULT NULL,
  `dpin` int(7) DEFAULT NULL,
  `dbloodgroup` varchar(10) DEFAULT NULL,
  `ddlno` varchar(100) DEFAULT NULL,
  `dvehicleno` varchar(200) DEFAULT NULL,
  `dimg1` varchar(200) DEFAULT NULL,
  `dimg2` varchar(200) DEFAULT NULL,
  `dimg3` varchar(200) DEFAULT NULL,
  `dimg4` varchar(200) DEFAULT NULL,
  `dregdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `uid` int(10) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `contactno` char(10) DEFAULT NULL,
  `dob` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(70) DEFAULT NULL,
  `country` varchar(70) DEFAULT NULL,
  `regdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationdate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`uid`, `fullname`, `email`, `password`, `contactno`, `dob`, `address`, `city`, `country`, `regdate`, `updationdate`) VALUES
(2, 'swami chopra', 'swamichopra@gmail.com', 'swamichopra', '7412589630', '41/58/52', 'a;lsdfk', 'a;lsdkf', 'a;lsdkk', '2022-04-25 17:30:50', NULL),
(11, 'tejas sambhaji gund', 'tejasgund02@gmail.com', 'tejasgund', '9561409792', '20/07/2001', 'AP Nangaon tel Daund Dist Pune Pin 412203', 'amonimal', 'India', '2022-04-25 17:29:31', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `vid` (`vid`),
  ADD KEY `pid` (`pid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`vid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `bid` (`bid`);

--
-- Indexes for table `tbldriver`
--
ALTER TABLE `tbldriver`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbldriver`
--
ALTER TABLE `tbldriver`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`vid`) REFERENCES `car` (`vid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `payment` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`uid`) REFERENCES `tbluser` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `tbluser` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`bid`) REFERENCES `booking` (`bid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
