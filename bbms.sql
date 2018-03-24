-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2012 at 02:10 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `bbhlogin`
--

CREATE TABLE IF NOT EXISTS `bbhlogin` (
  `userid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `district` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `contactno` bigint(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bbhlogin`
--

INSERT INTO `bbhlogin` (`userid`, `password`, `type`, `name`, `address`, `district`, `state`, `contactno`, `status`) VALUES
('bloodbank1', 'bloodbank1', 'bloodbank', 'ABC Blood Bank', 'Jayant, M.G. Road', 'Singrauli', 'Madhya Pradesh', 9987543877, 'approved'),
('bloodbank2', 'bloodbank2', 'bloodbank', 'Life Blood Bank', 'Jhalwa, Deoghat', 'Allahabad', 'Uttar Pradesh', 9204563289, 'approved'),
('bloodbank3', 'bloodbank3', 'bloodbank', 'Donate Blood Bank', 'Stanley Road, Allhabad', 'Allahabad', 'Uttar Pradesh', 7865439872, 'approved'),
('hospital1', 'hospital1', 'hospital', 'XYZ Hospital', 'Jhalwa, Allahabad', 'Allahabad', 'Uttar Pradesh', 9987654321, 'pending'),
('hospital2', 'hospital2', 'hospital', 'Nehru Hospital', 'Nigahi, CWS Jayant', 'Singrauli', 'Madhya Pradesh', 8897546345, 'approved'),
('hospital3', 'hospital3', 'hospital', 'Jivan Hospital', 'Civil Lines, Allahabad', 'Allahabad', 'Uttar Pradesh', 7826459087, 'approved'),
('hospital4', 'hospital4', 'hospital', 'Jyoti Hospital', 'Vijaynagar, Jabalpur', 'Jabalpur', 'Madhya Pradesh', 9907534567, 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `bbhquantity`
--

CREATE TABLE IF NOT EXISTS `bbhquantity` (
  `userid` varchar(20) NOT NULL,
  `apositive` int(11) NOT NULL,
  `anegative` int(11) NOT NULL,
  `bpositive` int(11) NOT NULL,
  `bnegative` int(11) NOT NULL,
  `abpositive` int(11) NOT NULL,
  `abnegative` int(11) NOT NULL,
  `opositive` int(11) NOT NULL,
  `onegative` int(11) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bbhquantity`
--

INSERT INTO `bbhquantity` (`userid`, `apositive`, `anegative`, `bpositive`, `bnegative`, `abpositive`, `abnegative`, `opositive`, `onegative`) VALUES
('bloodbank1', 65, 57, 47, 50, 20, 40, 50, 20),
('bloodbank2', 10, 50, 60, 2, 10, 20, 5, 0),
('bloodbank3', 11, 5, 0, 30, 20, 30, 40, 5),
('hospital1', 0, 0, 0, 0, 0, 0, 0, 0),
('hospital2', 18, 20, 14, 9, 10, 16, 9, 1),
('hospital3', 0, 0, 0, 0, 0, 0, 0, 0),
('hospital4', 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE IF NOT EXISTS `donation` (
  `userid` varchar(20) NOT NULL,
  `bbhname` varchar(50) NOT NULL,
  `donationdate` date NOT NULL,
  `noofunits` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`userid`, `bbhname`, `donationdate`, `noofunits`, `status`) VALUES
('nitish54', 'Nehru Hospital', '2012-06-23', 2, 'increased'),
('nitish54', 'Nehru Hospital', '2012-10-22', 1, 'decreased');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE IF NOT EXISTS `donor` (
  `userid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `bloodgroup` varchar(10) NOT NULL,
  `sex` varchar(7) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contactno` bigint(20) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`userid`, `password`, `name`, `bloodgroup`, `sex`, `address`, `city`, `district`, `state`, `email`, `contactno`) VALUES
('donor', 'donor', 'Vijay Singh', 'onegative', 'male', 'M-234/A Civil Lines', 'Allahabad', 'Allahabad', 'Uttar Pradesh', 'vijay.singh@gmail.com', 9826764534),
('nitish54', '000000', 'Nitish Sinha', 'abpositive', 'male', 'B-138, Sector B', 'Jayant', 'Singrauli', 'Madhya Pradesh', '54nitish@gmail.com', 8896176738);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `dateofpost` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news`, `date`, `dateofpost`) VALUES
('Blood donation Camp in Singrauli, Nehru Hospital', '2012-10-24', '2012-10-08'),
('Blood Donation Camp in IIIT Allahabad', '2012-10-20', '2012-10-17'),
('Blood Donation Camp in Allahabad Jhalwa', '2012-10-15', '2012-10-10'),
('Blood donation camp in singrauli', '2012-10-31', '2012-10-24');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
