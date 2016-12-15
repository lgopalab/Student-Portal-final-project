-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2015 at 01:18 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `11211a0501_details`
--

CREATE TABLE IF NOT EXISTS `11211a0501_details` (
  `semester` varchar(10) DEFAULT NULL,
  `subject` varchar(25) DEFAULT NULL,
  `internal` int(5) DEFAULT NULL,
  `external` int(5) DEFAULT NULL,
  `marks` int(5) DEFAULT NULL,
  UNIQUE KEY `subject` (`subject`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `11211a0501_details`
--

INSERT INTO `11211a0501_details` (`semester`, `subject`, `internal`, `external`, `marks`) VALUES
('one_one', 'English I', 13, 50, 72),
('one_one', 'M1', 22, 26, 48),
('one_one', 'MMS', 22, 45, 67),
('one_one', 'EP1', 23, 60, 83),
('one_two', 'EC', 21, 50, 71),
('one_one', 'CP1', 25, 26, 51),
('one_one', 'EDP', 24, 99, 123),
('one_one', 'CP1_Lab', 20, 50, 70),
('one_one', 'EW', 21, 48, 69),
('one_one', 'EP_Lab', 24, 45, 69),
('one_two', 'English II', 22, 45, 67),
('two_one', 'PS', 22, 65, 87),
('two_one', 'MFCS', 15, 54, 69),
('two_one', 'DLD', 21, 54, 75),
('two_one', 'EDC', 23, 45, 68),
('two_one', 'ADS', 22, 44, 66),
('two_one', 'BEE', 22, 44, 66),
('two_one', 'ADS_Lab', 22, 45, 67),
('two_one', 'EDC/BEE_Lab', 22, 45, 67),
('one_two', 'M2', 20, 60, 80),
('one_two', 'EP II', 22, 60, 82),
('one_two', 'CP II', 21, 50, 71),
('one_two', 'EM', 22, 60, 82),
('one_two', 'English Lab', 25, 48, 73),
('one_two', 'EC Lab', 22, 48, 70),
('one_two', 'CP II_Lab', 24, 50, 74);

-- --------------------------------------------------------

--
-- Table structure for table `11211a0502_details`
--

CREATE TABLE IF NOT EXISTS `11211a0502_details` (
  `semester` varchar(10) DEFAULT NULL,
  `subject` varchar(25) DEFAULT NULL,
  `internal` int(5) DEFAULT NULL,
  `external` int(5) DEFAULT NULL,
  `marks` int(5) DEFAULT NULL,
  UNIQUE KEY `subject` (`subject`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `11211a0502_details`
--

INSERT INTO `11211a0502_details` (`semester`, `subject`, `internal`, `external`, `marks`) VALUES
('one_one', 'English I', 20, 55, 75),
('one_one', 'M1', 23, 65, 88),
('one_one', 'MMS', 22, 70, 92),
('one_one', 'EP I', 22, 65, 87),
('one_one', 'CP I', 25, 30, 55),
('one_one', 'EDP', 21, 66, 87),
('one_one', 'CP I_Lab', 25, 50, 75),
('one_one', 'EP_Lab', 23, 45, 68),
('one_one', 'EW', 23, 40, 63);

-- --------------------------------------------------------

--
-- Table structure for table `11211a0503_details`
--

CREATE TABLE IF NOT EXISTS `11211a0503_details` (
  `semester` varchar(10) DEFAULT NULL,
  `subject` varchar(25) DEFAULT NULL,
  `internal` int(5) DEFAULT NULL,
  `external` int(5) DEFAULT NULL,
  `marks` int(5) DEFAULT NULL,
  UNIQUE KEY `subject` (`subject`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `11211a0503_details`
--

INSERT INTO `11211a0503_details` (`semester`, `subject`, `internal`, `external`, `marks`) VALUES
('one_one', 'English I', 20, 60, 80),
('one_one', 'M1', 20, 60, 80),
('one_one', 'MMS', 20, 60, 80),
('one_one', 'EP I', 20, 60, 80),
('one_two', 'EC', 20, 60, 80),
('one_one', 'CP I', 20, 60, 80),
('one_one', 'EDP', 20, 60, 80),
('one_one', 'CP_Lab', 20, 45, 65),
('one_two', 'English_Lab', 20, 45, 65),
('one_one', 'EP_Lab', 20, 45, 65),
('one_one', 'EW', 20, 45, 65),
('one_two', 'M II', 21, 50, 71),
('one_two', 'EP II', 24, 60, 84),
('one_two', 'CP II', 24, 48, 72),
('one_two', 'EM', 23, 60, 83),
('one_two', 'EC_Lab', 23, 48, 71),
('one_two', 'CP2_Lab', 25, 50, 75);

-- --------------------------------------------------------

--
-- Table structure for table `11211a0504_details`
--

CREATE TABLE IF NOT EXISTS `11211a0504_details` (
  `semester` varchar(10) DEFAULT NULL,
  `subject` varchar(25) DEFAULT NULL,
  `internal` int(5) DEFAULT NULL,
  `external` int(5) DEFAULT NULL,
  `marks` int(5) DEFAULT NULL,
  UNIQUE KEY `subject` (`subject`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `11211a0504_details`
--

INSERT INTO `11211a0504_details` (`semester`, `subject`, `internal`, `external`, `marks`) VALUES
('one_one', 'English I', 15, 45, 60),
('one_one', 'M1', 15, 45, 60),
('one_one', 'MMS', 15, 45, 60),
('one_one', 'EP I', 15, 45, 60),
('one_two', 'EC', 15, 45, 60),
('one_one', 'CP I', 15, 45, 60),
('one_one', 'EDP', 15, 45, 60),
('one_one', 'CP_Lab', 15, 45, 60),
('one_two', 'English_Lab', 15, 45, 60),
('one_one', 'EP_Lab', 15, 45, 60),
('one_one', 'EW', 15, 45, 60),
('two_one', 'PS', 15, 45, 60),
('two_one', 'MFCS', 14, 45, 59),
('two_one', 'DLD', 15, 45, 60),
('two_one', 'EDC', 15, 45, 60),
('two_one', 'ADS', 15, 45, 60),
('two_one', 'BEE', 15, 45, 60),
('two_one', 'ADS_Lab', 15, 45, 60),
('two_one', 'EDC/BEE_Lab', 14, 45, 59),
('one_two', 'M II', 22, 50, 72),
('one_two', 'EP II', 22, 50, 72),
('one_two', 'CP II', 23, 69, 83),
('one_two', 'EM', 23, 60, 83),
('one_two', 'EC_Lab', 25, 48, 73),
('one_two', 'CP2_Lab', 23, 50, 73);

-- --------------------------------------------------------

--
-- Table structure for table `11211a0505_details`
--

CREATE TABLE IF NOT EXISTS `11211a0505_details` (
  `semester` varchar(10) DEFAULT NULL,
  `subject` varchar(25) DEFAULT NULL,
  `internal` int(5) DEFAULT NULL,
  `external` int(5) DEFAULT NULL,
  `marks` int(5) DEFAULT NULL,
  UNIQUE KEY `subject` (`subject`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `11211a0505_details`
--

INSERT INTO `11211a0505_details` (`semester`, `subject`, `internal`, `external`, `marks`) VALUES
('one_one', 'English I', 20, 40, 60),
('one_one', 'M1', 20, 40, 60),
('one_one', 'MMS', 20, 40, 60),
('one_one', 'EP I', 20, 40, 60),
('one_two', 'EC', 20, 40, 60),
('one_one', 'CP I', 20, 40, 60),
('one_one', 'EDP', 20, 40, 60),
('one_one', 'CP_Lab', 20, 40, 60),
('one_two', 'English_Lab', 20, 40, 60),
('one_one', 'EP_Lab', 20, 40, 60),
('one_one', 'EW', 20, 40, 60),
('two_one', 'PS', 20, 40, 60),
('two_one', 'MFCS', 20, 40, 60),
('two_one', 'DLD', 20, 40, 60),
('two_one', 'EDC', 20, 40, 60),
('two_one', 'ADS', 20, 40, 60),
('two_one', 'BEE', 20, 40, 60),
('two_one', 'ADS_Lab', 20, 40, 60),
('two_one', 'EDC/BEE_Lab', 20, 40, 60),
('two_two', 'CO', 20, 40, 60),
('two_two', 'OOP', 20, 40, 60),
('two_two', 'FLAT', 20, 40, 60),
('two_two', 'DBMS', 20, 40, 60),
('two_two', 'DAA', 20, 40, 60),
('two_two', 'ES', 20, 40, 60),
('two_two', 'OOP_Lab', 20, 40, 60),
('two_two', 'DBMS_Lab', 20, 40, 60),
('three_one', 'PPL', 20, 40, 60),
('three_one', 'SE', 20, 40, 60),
('three_one', 'MPI', 20, 40, 60),
('three_one', 'OS', 20, 40, 60),
('three_one', 'DC&CN', 20, 40, 60),
('three_one', 'OR', 20, 40, 60),
('three_one', 'OS&CN_Lab', 20, 40, 60),
('three_one', 'MPI_Lab', 20, 40, 60),
('one_two ', 'English II', 23, 50, 73),
('one_two', ' M II', 25, 70, 95),
('one_two', 'EP II', 23, 60, 83),
('one_two', 'CP II', 25, 70, 95),
('one_two', 'EM', 24, 60, 84),
('one_two', 'EC_Lab', 25, 50, 75),
('one_two', 'CP2_LAB', 22, 50, 72);

-- --------------------------------------------------------

--
-- Table structure for table `11211a0506_details`
--

CREATE TABLE IF NOT EXISTS `11211a0506_details` (
  `semester` varchar(10) DEFAULT NULL,
  `subject` varchar(25) DEFAULT NULL,
  `internal` int(5) DEFAULT NULL,
  `external` int(5) DEFAULT NULL,
  `marks` int(5) DEFAULT NULL,
  UNIQUE KEY `subject` (`subject`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `11211a0506_details`
--

INSERT INTO `11211a0506_details` (`semester`, `subject`, `internal`, `external`, `marks`) VALUES
('one_one', 'English', 18, 48, 66),
('one_one', 'M1', 18, 48, 66),
('one_one', 'MMS', 18, 48, 66),
('one_one', 'Physics', 18, 48, 66),
('one_one', 'Chemistry', 18, 48, 66),
('one_one', 'C&DS', 18, 48, 66),
('one_one', 'EDP', 18, 48, 66),
('one_one', 'C_Lab', 18, 48, 66),
('one_one', 'English_Lab', 18, 48, 66),
('one_one', 'Phy/Chem_Lab', 18, 48, 66),
('one_one', 'IT_Workshop', 18, 48, 66),
('two_one', 'PS', 18, 48, 66),
('two_one', 'MFCS', 18, 48, 66),
('two_one', 'DLD', 18, 48, 66),
('two_one', 'EDC', 18, 48, 66),
('two_one', 'ADS', 18, 48, 66),
('two_one', 'BEE', 18, 48, 66),
('two_one', 'ADS_Lab', 18, 48, 66),
('two_one', 'EDC/BEE_Lab', 18, 48, 66);

-- --------------------------------------------------------

--
-- Table structure for table `11211a0507_details`
--

CREATE TABLE IF NOT EXISTS `11211a0507_details` (
  `semester` varchar(10) DEFAULT NULL,
  `subject` varchar(25) DEFAULT NULL,
  `internal` int(5) DEFAULT NULL,
  `external` int(5) DEFAULT NULL,
  `marks` int(5) DEFAULT NULL,
  UNIQUE KEY `subject` (`subject`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `11211a0507_details`
--

INSERT INTO `11211a0507_details` (`semester`, `subject`, `internal`, `external`, `marks`) VALUES
('one_one', 'English', 16, 39, 55),
('one_one', 'M1', 16, 39, 55),
('one_one', 'MMS', 16, 39, 55),
('one_one', 'Physics', 16, 39, 55),
('one_one', 'Chemistry', 16, 39, 55),
('one_one', 'C&DS', 16, 39, 55),
('one_one', 'EDP', 16, 39, 55),
('one_one', 'C_Lab', 16, 39, 55),
('one_one', 'English_Lab', 16, 39, 55),
('one_one', 'Phy/Chem_Lab', 16, 39, 55),
('one_one', 'IT_Workshop', 16, 39, 55),
('two_one', 'PS', 16, 39, 55),
('two_one', 'MFCS', 16, 39, 55),
('two_one', 'DLD', 16, 39, 55),
('two_one', 'EDC', 16, 39, 55),
('two_one', 'ADS', 16, 39, 55),
('two_one', 'BEE', 16, 39, 55),
('two_one', 'ADS_Lab', 16, 39, 55),
('two_one', 'EDC/BEE_Lab', 16, 39, 55),
('two_two', 'CO', 16, 39, 55),
('two_two', 'OOP', 16, 39, 55),
('two_two', 'FLAT', 16, 39, 55),
('two_two', 'DBMS', 16, 39, 55),
('two_two', 'DAA', 16, 39, 55),
('two_two', 'ES', 16, 39, 55),
('two_two', 'OOP_Lab', 16, 39, 55),
('two_two', 'DBMS_Lab', 16, 39, 55),
('three_one', 'PPL', 16, 39, 55),
('three_one', 'SE', 15, 39, 54),
('three_one', 'MPI', 15, 39, 54),
('three_one', 'OS', 15, 39, 54),
('three_one', 'DC&CN', 15, 39, 54),
('three_one', 'OR', 15, 39, 54),
('three_one', 'OS&CN_Lab', 15, 39, 54),
('three_one', 'MPI_Lab', 15, 39, 54),
('three_two', 'OOAD', 23, 50, 73),
('three_two', 'VLSI', 21, 60, 81),
('three_two', 'NS', 22, 60, 82),
('three_two', 'CD', 25, 60, 85),
('three_two', 'MEFA', 23, 50, 73),
('three_two', 'WT', 25, 70, 95),
('three_two', 'AECS_Lab', 25, 50, 75),
('three_two', 'WT&CD_Lab', 23, 50, 73);

-- --------------------------------------------------------

--
-- Table structure for table `11211a0508_details`
--

CREATE TABLE IF NOT EXISTS `11211a0508_details` (
  `semester` varchar(10) DEFAULT NULL,
  `subject` varchar(25) DEFAULT NULL,
  `internal` int(5) DEFAULT NULL,
  `external` int(5) DEFAULT NULL,
  `marks` int(5) DEFAULT NULL,
  UNIQUE KEY `subject` (`subject`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `11211a0508_details`
--

INSERT INTO `11211a0508_details` (`semester`, `subject`, `internal`, `external`, `marks`) VALUES
('one_one', 'English I', 20, 40, 60),
('one_one', 'M1', 20, 40, 60),
('one_one', 'MMS', 20, 40, 60),
('one_one', 'EP I', 20, 40, 60),
('one_two', 'EC', 20, 40, 60),
('one_one', 'CP I', 20, 40, 60),
('one_one', 'EDP', 20, 40, 60),
('one_one', 'CP_Lab', 20, 40, 60),
('one_two', 'English_Lab', 20, 40, 60),
('one_one', 'EP_Lab', 20, 40, 60),
('one_one', 'EW', 20, 40, 60),
('two_one', 'PS', 20, 40, 60),
('two_one', 'MFCS', 20, 40, 60),
('two_one', 'DLD', 20, 40, 60),
('two_one', 'EDC', 20, 40, 60),
('two_one', 'ADS', 20, 40, 60),
('two_one', 'BEE', 20, 40, 60),
('two_one', 'ADS_Lab', 20, 40, 60),
('two_one', 'EDC/BEE_Lab', 20, 40, 60),
('two_two', 'CO', 20, 40, 60),
('two_two', 'OOP', 20, 40, 60),
('two_two', 'FLAT', 20, 40, 60),
('two_two', 'DBMS', 20, 40, 60),
('two_two', 'DAA', 20, 40, 60),
('two_two', 'ES', 20, 40, 60),
('two_two', 'OOP_Lab', 20, 40, 60),
('two_two', 'DBMS_Lab', 20, 40, 60),
('three_one', 'PPL', 20, 40, 60),
('three_one', 'SE', 20, 40, 60),
('three_one', 'MPI', 20, 40, 60),
('three_one', 'OS', 20, 40, 60),
('three_one', 'DC&CN', 20, 40, 60),
('three_one', 'OR', 20, 40, 60),
('three_one', 'OS&CN_Lab', 20, 40, 60),
('three_one', 'MPI_Lab', 20, 40, 60),
('three_two', 'OOAD', 20, 40, 60),
('three_two', 'NS', 20, 40, 60),
('three_two', 'WT', 20, 40, 60),
('three_two', 'CD', 20, 40, 60),
('three_two', 'VLSI', 20, 40, 60),
('three_two', 'MEFA', 20, 40, 60),
('three_two', 'WT&CD_Lab', 20, 40, 60),
('three_two', 'AECS_Lab', 20, 40, 60),
('four_one', 'DP', 20, 41, 61),
('four_one', 'CG', 20, 40, 60),
('four_one', 'CC', 20, 40, 60),
('four_one', 'DMDW', 20, 40, 60),
('four_one', 'STM', 20, 40, 60),
('four_one', 'LP', 20, 40, 60),
('four_one', 'STM_Lab', 20, 40, 60),
('four_one', 'LP_Lab', 20, 40, 60),
('one_two', 'English II', 22, 60, 82),
('one_two', 'M II', 22, 50, 72),
('one_two', 'EP II', 22, 70, 92),
('one_two', 'CP II', 22, 70, 92),
('one_two', 'EM', 22, 50, 72),
('one_two', 'EC_Lab', 23, 50, 73),
('one_two', 'CP2_Lab', 25, 50, 75);

-- --------------------------------------------------------

--
-- Table structure for table `11211a0509_details`
--

CREATE TABLE IF NOT EXISTS `11211a0509_details` (
  `semester` varchar(10) DEFAULT NULL,
  `subject` varchar(25) DEFAULT NULL,
  `internal` int(5) DEFAULT NULL,
  `external` int(5) DEFAULT NULL,
  `marks` int(5) DEFAULT NULL,
  UNIQUE KEY `subject` (`subject`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `11211a0509_details`
--

INSERT INTO `11211a0509_details` (`semester`, `subject`, `internal`, `external`, `marks`) VALUES
('one_one', 'English', 18, 49, 67),
('one_one', 'M1', 18, 49, 67),
('one_one', 'MMS', 18, 49, 67),
('one_one', 'Physics', 18, 49, 67),
('one_one', 'Chemistry', 18, 49, 67),
('one_one', 'C&DS', 18, 49, 67),
('one_one', 'EDP', 18, 49, 67),
('one_one', 'C_Lab', 18, 49, 67),
('one_one', 'English_Lab', 18, 49, 67),
('one_one', 'Phy/Chem_Lab', 18, 49, 67),
('one_one', 'IT_Workshop', 18, 49, 67),
('two_one', 'PS', 18, 49, 67),
('two_one', 'MFCS', 18, 49, 67),
('two_one', 'DLD', 18, 49, 67),
('two_one', 'EDC', 18, 49, 67),
('two_one', 'ADS', 18, 49, 67),
('two_one', 'BEE', 18, 49, 67),
('two_one', 'ADS_Lab', 18, 49, 67),
('two_one', 'EDC/BEE_Lab', 18, 49, 67),
('two_two', 'CO', 18, 49, 67),
('two_two', 'OOP', 18, 49, 67),
('two_two', 'FLAT', 18, 49, 67),
('two_two', 'DBMS', 18, 49, 67),
('two_two', 'DAA', 18, 49, 67),
('two_two', 'ES', 18, 49, 67),
('two_two', 'OOP_Lab', 18, 49, 67),
('two_two', 'DBMS_Lab', 18, 49, 67),
('three_one', 'PPL', 18, 49, 67),
('three_one', 'SE', 18, 49, 67),
('three_one', 'MPI', 18, 49, 67),
('three_one', 'OS', 18, 49, 67),
('three_one', 'DC&CN', 18, 49, 67),
('three_one', 'OR', 18, 49, 67),
('three_one', 'OS&CN_Lab', 18, 49, 67),
('three_one', 'MPI_Lab', 18, 49, 67);

-- --------------------------------------------------------

--
-- Table structure for table `11211a0510_details`
--

CREATE TABLE IF NOT EXISTS `11211a0510_details` (
  `semester` varchar(10) DEFAULT NULL,
  `subject` varchar(25) DEFAULT NULL,
  `internal` int(5) DEFAULT NULL,
  `external` int(5) DEFAULT NULL,
  `marks` int(5) DEFAULT NULL,
  UNIQUE KEY `subject` (`subject`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `11211a0510_details`
--

INSERT INTO `11211a0510_details` (`semester`, `subject`, `internal`, `external`, `marks`) VALUES
('one_one', 'English', 20, 60, 80),
('one_one', 'M1', 20, 60, 80),
('one_one', 'MMS', 20, 60, 80),
('one_one', 'Physics', 20, 60, 80),
('one_one', 'Chemistry', 20, 60, 80),
('one_one', 'C&DS', 20, 60, 80),
('one_one', 'EDP', 20, 60, 80),
('one_one', 'C_Lab', 20, 45, 65),
('one_one', 'English_Lab', 20, 45, 65),
('one_one', 'Phy/Chem_Lab', 20, 45, 65),
('one_one', 'IT_Workshop', 20, 45, 65),
('two_one', 'PS', 20, 60, 80),
('two_one', 'MFCS', 20, 60, 80),
('two_one', 'DLD', 20, 60, 80),
('two_one', 'EDC', 20, 60, 80),
('two_one', 'ADS', 20, 60, 80),
('two_one', 'BEE', 20, 60, 80),
('two_one', 'ADS_Lab', 20, 45, 65),
('two_one', 'EDC/BEE_Lab', 20, 45, 65);

-- --------------------------------------------------------

--
-- Table structure for table `11211a0511_details`
--

CREATE TABLE IF NOT EXISTS `11211a0511_details` (
  `semester` varchar(10) DEFAULT NULL,
  `subject` varchar(25) DEFAULT NULL,
  `internal` int(5) DEFAULT NULL,
  `external` int(5) DEFAULT NULL,
  `marks` int(5) DEFAULT NULL,
  UNIQUE KEY `subject` (`subject`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `11211a0511_details`
--

INSERT INTO `11211a0511_details` (`semester`, `subject`, `internal`, `external`, `marks`) VALUES
('one_one', 'English', 20, 50, 70),
('one_one', 'M1', 21, 45, 66),
('one_one', 'MMS', 19, 45, 64),
('one_one', 'Physics', 21, 55, 76),
('one_one', 'Chemistry', 23, 54, 77),
('one_one', 'C&DS', 21, 70, 91),
('one_one', 'EDP', 25, 75, 100),
('one_one', 'C_Lab', 24, 49, 73),
('one_one', 'English_Lab', 21, 48, 69),
('one_one', 'Phy/Chem_Lab', 22, 45, 67),
('one_one', 'IT_Workshop', 24, 46, 70),
('two_one', 'PS', 24, 45, 69),
('two_one', 'MFCS', 23, 46, 69),
('two_one', 'DLD', 24, 47, 71),
('two_one', 'EDC', 20, 45, 65),
('two_one', 'ADS', 23, 50, 73),
('two_one', 'BEE', 25, 60, 85),
('two_one', 'ADS_Lab', 23, 40, 63),
('two_one', 'EDC/BEE_Lab', 25, 50, 75);

-- --------------------------------------------------------

--
-- Table structure for table `11211a0512_details`
--

CREATE TABLE IF NOT EXISTS `11211a0512_details` (
  `semester` varchar(10) DEFAULT NULL,
  `subject` varchar(25) DEFAULT NULL,
  `internal` int(5) DEFAULT NULL,
  `external` int(5) DEFAULT NULL,
  `marks` int(5) DEFAULT NULL,
  UNIQUE KEY `subject` (`subject`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `11211a0512_details`
--

INSERT INTO `11211a0512_details` (`semester`, `subject`, `internal`, `external`, `marks`) VALUES
('one_one', 'English', 25, 75, 100),
('one_one', 'M1', 23, 72, 95),
('one_one', 'MMS', 25, 75, 100),
('one_one', 'Physics', 24, 65, 89),
('one_one', 'Chemistry', 23, 58, 81),
('one_one', 'C&DS', 25, 75, 100),
('one_one', 'EDP', 25, 72, 97),
('one_one', 'C_Lab', 25, 50, 75),
('one_one', 'English_Lab', 23, 50, 73),
('one_one', 'Phy/Chem_Lab', 24, 46, 70),
('one_one', 'IT_Workshop', 25, 50, 75);

-- --------------------------------------------------------

--
-- Table structure for table `11211a0513_details`
--

CREATE TABLE IF NOT EXISTS `11211a0513_details` (
  `semester` varchar(10) DEFAULT NULL,
  `subject` varchar(25) DEFAULT NULL,
  `internal` int(5) DEFAULT NULL,
  `external` int(5) DEFAULT NULL,
  `marks` int(5) DEFAULT NULL,
  UNIQUE KEY `subject` (`subject`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `11211a0513_details`
--

INSERT INTO `11211a0513_details` (`semester`, `subject`, `internal`, `external`, `marks`) VALUES
('one_one', 'English', 25, 70, 95),
('one_one', 'M1', 25, 73, 98),
('one_one', 'MMS', 21, 53, 74),
('one_one', 'Physics', 26, 32, 58),
('one_one', 'Chemistry', 25, 70, 95),
('one_one', 'C&DS', 21, 70, 91),
('one_one', 'EDP', 25, 75, 100),
('one_one', 'C_Lab', 21, 24, 45),
('one_one', 'English_Lab', 21, 43, 64),
('one_one', 'Phy/Chem_Lab', 21, 43, 64),
('one_one', 'IT_Workshop', 25, 31, 56),
('two_one', 'PS', 21, 53, 74),
('two_one', 'MFCS', 25, 65, 90),
('two_one', 'DLD', 23, 56, 79),
('two_one', 'EDC', 21, 35, 56),
('two_one', 'ADS', 24, 54, 78),
('two_one', 'BEE', 23, 58, 81),
('two_one', 'ADS_Lab', 21, 50, 71),
('two_one', 'EDC/BEE_Lab', 21, 45, 66),
('two_two', 'CO', 21, 53, 74),
('two_two', 'OOP', 25, 53, 78),
('two_two', 'FLAT', 25, 54, 79),
('two_two', 'DBMS', 21, 53, 74),
('two_two', 'DAA', 21, 58, 79),
('two_two', 'ES', 24, 56, 80),
('two_two', 'OOP_Lab', 20, 45, 65),
('two_two', 'DBMS_Lab', 24, 40, 64);

-- --------------------------------------------------------

--
-- Table structure for table `11211a0514_details`
--

CREATE TABLE IF NOT EXISTS `11211a0514_details` (
  `semester` varchar(10) DEFAULT NULL,
  `subject` varchar(25) DEFAULT NULL,
  `internal` int(5) DEFAULT NULL,
  `external` int(5) DEFAULT NULL,
  `marks` int(5) DEFAULT NULL,
  UNIQUE KEY `subject` (`subject`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `11211a0514_details`
--

INSERT INTO `11211a0514_details` (`semester`, `subject`, `internal`, `external`, `marks`) VALUES
('one_one', 'English I', 21, 25, 46),
('one_one', 'M1', 25, 74, 99),
('one_one', 'MMS', 25, 75, 100),
('one_one', 'EP', 25, 75, 100),
('one_one', 'CP I', 21, 52, 73),
('one_one', 'EDP', 25, 70, 95),
('one_one', 'CP_Lab', 25, 45, 70),
('one_one', 'EP_Lab', 25, 42, 67),
('one_one', 'EW', 25, 50, 75);

-- --------------------------------------------------------

--
-- Table structure for table `11211a0515_details`
--

CREATE TABLE IF NOT EXISTS `11211a0515_details` (
  `semester` varchar(10) DEFAULT NULL,
  `subject` varchar(25) DEFAULT NULL,
  `internal` int(5) DEFAULT NULL,
  `external` int(5) DEFAULT NULL,
  `marks` int(5) DEFAULT NULL,
  UNIQUE KEY `subject` (`subject`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `11211a0515_details`
--

INSERT INTO `11211a0515_details` (`semester`, `subject`, `internal`, `external`, `marks`) VALUES
('one_one', 'English', 25, 54, 79),
('one_one', 'M1', 24, 23, 47),
('one_one', 'MMS', 19, 75, 94),
('one_one', 'Physics', 24, 32, 56),
('one_one', 'Chemistry', 24, 52, 76),
('one_one', 'C&DS', 21, 70, 91),
('one_one', 'EDP', 25, 75, 100),
('one_one', 'C_Lab', 21, 24, 45),
('one_one', 'English_Lab', 21, 43, 64),
('one_one', 'Phy/Chem_Lab', 25, 50, 75),
('one_one', 'IT_Workshop', 21, 31, 52),
('two_one', 'PS', 21, 45, 66),
('two_one', 'MFCS', 23, 65, 88),
('two_one', 'DLD', 24, 47, 71),
('two_one', 'EDC', 20, 45, 65),
('two_one', 'ADS', 24, 50, 74),
('two_one', 'BEE', 23, 58, 81),
('two_one', 'ADS_Lab', 21, 40, 61),
('two_one', 'EDC/BEE_Lab', 21, 45, 66);

-- --------------------------------------------------------

--
-- Table structure for table `11211a0516_details`
--

CREATE TABLE IF NOT EXISTS `11211a0516_details` (
  `semester` varchar(10) DEFAULT NULL,
  `subject` varchar(25) DEFAULT NULL,
  `internal` int(5) DEFAULT NULL,
  `external` int(5) DEFAULT NULL,
  `marks` int(5) DEFAULT NULL,
  UNIQUE KEY `subject` (`subject`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `11211a0516_details`
--

INSERT INTO `11211a0516_details` (`semester`, `subject`, `internal`, `external`, `marks`) VALUES
('one_one', 'English I', 25, 25, 50),
('one_one', 'M1', 24, 45, 69),
('one_one', 'MMS', 19, 45, 64),
('one_one', 'EP', 25, 32, 57),
('one_two', 'EC', 23, 54, 77),
('one_one', 'CP I', 24, 70, 94),
('one_one', 'EDP', 25, 70, 95),
('one_one', 'CP_Lab', 25, 24, 49),
('one_two', 'English_Lab', 21, 48, 69),
('one_one', 'EP_Lab', 21, 42, 63),
('one_one', 'EW', 25, 46, 71),
('two_one', 'PS', 21, 45, 66),
('two_one', 'MFCS', 23, 65, 88),
('two_one', 'DLD', 23, 47, 70),
('two_one', 'EDC', 20, 45, 65),
('two_one', 'ADS', 24, 50, 74),
('two_one', 'BEE', 23, 58, 81),
('two_one', 'ADS_Lab', 21, 40, 61),
('two_one', 'EDC/BEE_Lab', 21, 45, 66),
('one_two', 'English II', 22, 60, 82),
('one_two', 'M II', 23, 70, 93),
('one_two', 'EP II', 22, 50, 72),
('one_two', 'CP II', 23, 50, 73),
('one_two', 'EM', 21, 70, 91),
('one_two', 'EC_Lab', 24, 50, 74),
('one_two', 'CP2_Lab', 22, 50, 72),
('two_two', 'CO', 23, 50, 73),
('two_two', 'DBMS', 23, 50, 73),
('two_two', 'OOP', 23, 50, 73),
('two_two', 'ES', 21, 50, 72),
('two_two', 'FLAT', 22, 60, 82),
('two_two', 'DAA', 21, 50, 71),
('two_two', 'OOP_Lab', 23, 50, 73),
('two_two', 'DBMS_Lab', 21, 46, 67);

-- --------------------------------------------------------

--
-- Table structure for table `11211a0517_details`
--

CREATE TABLE IF NOT EXISTS `11211a0517_details` (
  `semester` varchar(10) DEFAULT NULL,
  `subject` varchar(25) DEFAULT NULL,
  `internal` int(5) DEFAULT NULL,
  `external` int(5) DEFAULT NULL,
  `marks` int(5) DEFAULT NULL,
  UNIQUE KEY `subject` (`subject`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `11211a0517_details`
--

INSERT INTO `11211a0517_details` (`semester`, `subject`, `internal`, `external`, `marks`) VALUES
('one_one', 'English I', 25, 25, 50),
('one_one', 'M1', 24, 45, 69),
('one_one', 'MMS', 19, 75, 94),
('one_one', 'EP', 24, 23, 47),
('one_two', 'EC', 24, 52, 76),
('one_one', 'CP I', 24, 25, 49),
('one_one', 'EDP', 25, 70, 95),
('one_one', 'CP_Lab', 21, 24, 45),
('one_two', 'English_Lab', 21, 48, 69),
('one_one', 'EP_Lab', 25, 42, 67),
('one_one', 'EW', 21, 45, 66),
('two_one', 'PS', 21, 45, 66),
('two_one', 'MFCS', 23, 65, 88),
('two_one', 'DLD', 24, 47, 71),
('two_one', 'EDC', 20, 45, 65),
('two_one', 'ADS', 24, 50, 74),
('two_one', 'BEE', 23, 58, 81),
('two_one', 'ADS_Lab', 21, 40, 61),
('two_one', 'EDC/BEE_Lab', 21, 45, 66),
('one_two', 'English II', 22, 40, 62),
('one_two', 'M II', 23, 60, 83),
('one_two', 'EP II', 22, 60, 82),
('one_two', 'CP II', 21, 50, 71),
('one_two', 'EM', 21, 40, 61),
('one_two', 'EC_Lab', 23, 50, 73),
('one_two', 'CP2_Lab', 24, 49, 73);

-- --------------------------------------------------------

--
-- Table structure for table `cse_subjects`
--

CREATE TABLE IF NOT EXISTS `cse_subjects` (
  `year` int(2) NOT NULL,
  `semester` int(2) NOT NULL,
  `subjects` varchar(25) DEFAULT NULL,
  UNIQUE KEY `subjects` (`subjects`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cse_subjects`
--

INSERT INTO `cse_subjects` (`year`, `semester`, `subjects`) VALUES
(1, 1, 'English'),
(1, 1, 'M1'),
(1, 1, 'MMS'),
(1, 1, 'Physics'),
(1, 1, 'Chemistry'),
(1, 1, 'C&DS'),
(1, 1, 'EDP'),
(1, 1, 'C_Lab'),
(1, 1, 'English_Lab'),
(1, 1, 'Phy/Chem_Lab'),
(1, 1, 'IT_Workshop'),
(2, 1, 'PS'),
(2, 1, 'MFCS'),
(2, 1, 'DLD'),
(2, 1, 'EDC'),
(2, 1, 'ADS'),
(2, 1, 'BEE'),
(2, 1, 'ADS_Lab'),
(2, 1, 'EDC/BEE_Lab'),
(2, 2, 'CO'),
(2, 2, 'OOP'),
(2, 2, 'FLAT'),
(2, 2, 'DBMS'),
(2, 2, 'DAA'),
(2, 2, 'ES'),
(2, 2, 'OOP_Lab'),
(2, 2, 'DBMS_Lab'),
(3, 1, 'PPL'),
(3, 1, 'SE'),
(3, 1, 'MPI'),
(3, 1, 'OS'),
(3, 1, 'DC&CN'),
(3, 1, 'OR'),
(3, 1, 'OS&CN_Lab'),
(3, 1, 'MPI_Lab'),
(3, 2, 'OOAD'),
(3, 2, 'NS'),
(3, 2, 'WT'),
(3, 2, 'CD'),
(3, 2, 'VLSI'),
(3, 2, 'MEFA'),
(3, 2, 'WT&CD_Lab'),
(3, 2, 'AECS_Lab'),
(4, 1, 'DP'),
(4, 1, 'CG'),
(4, 1, 'CC'),
(4, 1, 'DMDW'),
(4, 1, 'STM'),
(4, 1, 'LP'),
(4, 1, 'STM_Lab'),
(4, 1, 'LP_Lab'),
(4, 2, 'SL'),
(4, 2, 'MS'),
(4, 2, 'SAN'),
(4, 2, 'MajorProject'),
(4, 2, 'MiniProject'),
(4, 2, 'TechnicalSeminar'),
(4, 2, 'VivaVoce');

-- --------------------------------------------------------

--
-- Table structure for table `cse_timetable`
--

CREATE TABLE IF NOT EXISTS `cse_timetable` (
  `day` varchar(10) NOT NULL,
  `from` varchar(10) NOT NULL,
  `to` varchar(10) NOT NULL,
  `subject` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cse_timetable`
--

INSERT INTO `cse_timetable` (`day`, `from`, `to`, `subject`) VALUES
('Monday', '09:20', '10:10', 'SAN'),
('Monday', '10:10', '11:00', 'SL'),
('Monday', '11:00', '11:10', 'BREAK'),
('Monday', '11:10', '12:50', 'MS'),
('Monday', '12:50', '13:30', 'LUNCH'),
('Monday', '13:30', '14:20', 'SL'),
('Monday', '14:20', '15:10', 'LIBRARY'),
('Monday', '15:10', '16:00', 'LEISURE'),
('Tuesday', '09:20', '10:10', 'SL'),
('Tuesday', '10:10', '11:00', 'SAN'),
('Tuesday', '11:00', '11:10', 'BREAK'),
('Tuesday', '11:10', '12:00', 'MS'),
('Tuesday', '12:00', '12:50', 'SPORTS'),
('Tuesday', '12:50', '13:30', 'LUNCH'),
('Tuesday', '13:30', '15:10', 'SL'),
('Tuesday', '15:10', '16:00', 'LIBRARY'),
('Wednesday', '09:20', '10:10', 'MS'),
('Wednesday', '10:10', '11:00', 'SL'),
('Wednesday', '11:00', '11:10', 'BREAK'),
('Wednesday', '11:10', '12:50', 'SAN'),
('Wednesday', '12:50', '13:30', 'LUNCH'),
('Wednesday', '13:30', '14:20', 'MS'),
('Wednesday', '14:20', '15:10', 'SEMINAR'),
('Wednesday', '15:10', '16:00', 'LIBRARY'),
('Thursday', '09:20', '12:50', 'PROJECT WORK'),
('Thursday', '12:50', '13:30', 'LUNCH'),
('Thursday', '13:30', '15:10', 'PROJECT WORK'),
('Thursday', '15:10', '16:00', 'LEISURE'),
('Friday', '09:20', '12:50', 'PROJECT WORK'),
('Friday', '12:50', '13:30', 'LUNCH'),
('Friday', '13:30', '15:10', 'PROJECT WORK'),
('Friday', '15:10', '16:00', 'LIBRARY'),
('Saturday', '09:20', '12:50', 'PROJECT WORK'),
('Saturday', '12:50', '13:30', 'LUNCH'),
('Saturday', '13:30', '15:10', 'REMEDIAL CLASSES'),
('Saturday', '15:10', '16:00', 'SPORTS');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE IF NOT EXISTS `login_details` (
  `roll_number` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`roll_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`roll_number`, `password`) VALUES
('', ''),
('10211a0501', 'Malik'),
('10211a0503', 'ankit'),
('10211a0504', 'shumama'),
('10211a0505', 'anusha'),
('10211a0506', 'anvesh'),
('10211a0507', 'aparna'),
('10211a0508', 'arun'),
('10211a0509', 'ashok'),
('10211a0510', 'aswini'),
('10211a0511', 'badri'),
('10211a0512', 'bharath'),
('10211a0513', 'bhargavi'),
('10211a0514', 'bhavya'),
('10211a0515', 'chaitanya'),
('10211a0516', 'chenya'),
('10211a0517', 'debora');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE IF NOT EXISTS `student_info` (
  `name` varchar(100) NOT NULL,
  `rollno` varchar(15) DEFAULT NULL,
  `branch` varchar(10) NOT NULL,
  `year` int(2) NOT NULL,
  `semester` int(2) NOT NULL,
  `one_one` float NOT NULL,
  `two_one` float NOT NULL,
  `two_two` float NOT NULL,
  `three_one` float NOT NULL,
  `three_two` float NOT NULL,
  `four_one` float NOT NULL,
  `four_two` float NOT NULL,
  `aggregate` float NOT NULL,
  `DOB` varchar(12) NOT NULL,
  `one_two` float NOT NULL,
  UNIQUE KEY `rollno` (`rollno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`name`, `rollno`, `branch`, `year`, `semester`, `one_one`, `two_one`, `two_two`, `three_one`, `three_two`, `four_one`, `four_two`, `aggregate`, `DOB`, `one_two`) VALUES
('Abhilash', '11211a0501', 'cse', 2, 1, 65.2, 75.3333, 0, 0, 0, 0, 0, 54.1917, '03-09-1993', 67),
('Abhinandan', '11211a0502', 'cse', 1, 1, 69, 0, 0, 0, 0, 0, 0, 61.5958, '21-01-1993', 0),
('Abhinay', '11211a0503', 'cse', 1, 2, 67.5, 0, 0, 0, 0, 0, 0, 62.6979, '08-10-1993', 60.1),
('Geetha', '11211a0504', 'cse', 2, 1, 54, 63.7333, 0, 0, 0, 0, 0, 61.4911, '14-08-1993', 57.6),
('Bhavana', '11211a0505', 'cse', 3, 1, 54, 64, 64, 64, 0, 0, 0, 63.4176, '31-07-1993', 69.7),
('Chitra', '11211a0506', 'cse', 2, 1, 72.6, 70.4, 0, 0, 0, 0, 0, 69.2044, '29-01-1993', 0),
('Mounica', '11211a0507', 'cse', 3, 1, 60.5, 58.6667, 58.6667, 57.7333, 84.9333, 0, 0, 66.5464, '13-09-1993', 0),
('Apoorva', '11211a0508', 'cse', 4, 1, 54, 64, 64, 64, 64, 64.1333, 0, 64.0321, '19-09-1993', 67.8),
('Amrutha', '11211a0509', 'cse', 3, 1, 73.7, 71.4667, 71.4667, 71.4667, 0, 0, 0, 70.8165, '19-05-1993', 0),
('Anil', '11211a0510', 'cse', 2, 1, 82, 81.3333, 0, 0, 0, 0, 0, 78.8708, '16-04-1993', 0),
('Lasya', '11211A0511', 'cse', 4, 1, 82.3, 76, 0, 0, 0, 0, 0, 78.2927, '04-06-1993', 0),
('Amar', '11211A0512', 'cse', 3, 2, 95.5, 0, 0, 0, 0, 0, 0, 86.8963, '13-09-1993', 0),
('Anusha', '11211A0513', 'cse', 2, 2, 84, 79.3333, 79.0667, 0, 0, 0, 0, 82.3241, '09-07-1993', 0),
('Apurva', '11211A0514', 'cse', 1, 1, 72.5, 0, 0, 0, 0, 0, 0, 77.412, '03-10-1993', 0),
('Anvesh', '11211A0515', 'cse', 2, 2, 77.9, 76.2667, 0, 0, 0, 0, 0, 76.9614, '11-10-1993', 0),
('Chaitanya', '11211A0516', 'cse', 2, 2, 61.2, 76.1333, 77.8667, 0, 0, 0, 0, 74.1778, '29-01-1993', 70.3),
('Akhil', '11211A0517', 'cse', 2, 1, 58.2, 76.2667, 0, 0, 0, 0, 0, 72.0778, '06-04-1993', 65);

-- --------------------------------------------------------

--
-- Table structure for table `subject_table`
--

CREATE TABLE IF NOT EXISTS `subject_table` (
  `sub_name` varchar(20) NOT NULL,
  `sub_code` int(11) NOT NULL,
  UNIQUE KEY `sub_name` (`sub_name`,`sub_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_details`
--

CREATE TABLE IF NOT EXISTS `_details` (
  `semester` varchar(10) DEFAULT NULL,
  `subject` varchar(25) DEFAULT NULL,
  `internal` int(5) DEFAULT NULL,
  `external` int(5) DEFAULT NULL,
  `marks` int(5) DEFAULT NULL,
  UNIQUE KEY `subject` (`subject`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
