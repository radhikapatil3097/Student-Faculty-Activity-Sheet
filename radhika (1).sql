-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2017 at 04:54 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `radhika`
--

-- --------------------------------------------------------

--
-- Table structure for table `dbit1`
--

CREATE TABLE `dbit1` (
  `dept` varchar(25) NOT NULL,
  `faculty` varchar(25) NOT NULL,
  `proj_title` varchar(25) NOT NULL,
  `proj_desc` varchar(1000) NOT NULL,
  `adate` date NOT NULL,
  `sdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbit1`
--

INSERT INTO `dbit1` (`dept`, `faculty`, `proj_title`, `proj_desc`, `adate`, `sdate`) VALUES
('it', 'Nilesh Sir', 'coun', 'coun', '2017-07-07', '2017-07-08'),
('extc', 'Vaishali Maam', 'a', 'a', '0003-01-02', '0005-01-03'),
('comp', 'Vaishali Maam', '1', '1', '0001-01-01', '0001-01-01'),
('comp', 'Vaishali Maam', '1', '1', '0001-01-01', '0001-01-01'),
('comp', 'Vaishali Maam', '1', '1', '0001-01-01', '0001-01-01'),
('it', 'Nilesh Sir', 'a', 'a', '0001-01-01', '0001-01-01'),
('it', 'Nilesh Sir', 'a', 'a', '0001-01-01', '0001-01-01'),
('it', 'Nilesh Sir', 'a', 'a', '0001-01-01', '0001-01-01'),
('it', 'Nilesh Sir', 'a', 'a', '0001-01-01', '0001-01-01'),
('it', 'Nilesh Sir', '', '', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `dbit2`
--

CREATE TABLE `dbit2` (
  `sname` varchar(50) NOT NULL,
  `sdept` varchar(50) NOT NULL,
  `syear` varchar(50) NOT NULL,
  `roll_no` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbit2`
--

INSERT INTO `dbit2` (`sname`, `sdept`, `syear`, `roll_no`) VALUES
('1', 'it', 'fe', 1),
('a', 'it', 'fe', 12),
('a', 'it', 'fe', 12),
('a', 'it', 'fe', 12);

-- --------------------------------------------------------

--
-- Table structure for table `dbit3`
--

CREATE TABLE `dbit3` (
  `proj_title` varchar(25) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `sdept` varchar(50) NOT NULL,
  `syear` varchar(50) NOT NULL,
  `roll_no` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbit3`
--

INSERT INTO `dbit3` (`proj_title`, `sname`, `sdept`, `syear`, `roll_no`) VALUES
('sfa', 'radhika', 'IT', 'TE', 53),
('radhika', 'radhika', 'IT', 'TE', 53),
('', '', 'it', 'fe', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
