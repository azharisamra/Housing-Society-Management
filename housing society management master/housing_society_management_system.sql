-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2022 at 08:58 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `housing society management system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_signin`
--

CREATE TABLE `admin_signin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_signin`
--

INSERT INTO `admin_signin` (`username`, `password`) VALUES
('hammad', '*88418C45B40D225C0BB'),
('hammad', '*88418C45B40D225C0BB'),
('hammad', 'hammad*12'),
('hammad', 'hammad*12');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `name` varchar(50) NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `plot_details` varchar(50) NOT NULL,
  `title` text NOT NULL,
  `description` varchar(100) NOT NULL,
  `document_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`name`, `contact`, `email`, `plot_details`, `title`, `description`, `document_name`) VALUES
('Sharique', 956321478, 'shariquehameed@gmail.com', 'D3 203', '', 'corridors are not clean of our building', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact_queries`
--

CREATE TABLE `contact_queries` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` int(10) NOT NULL,
  `query` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_queries`
--

INSERT INTO `contact_queries` (`name`, `email`, `contact`, `query`) VALUES
('Hammad', 'Hammad@gmail.com', 2147483647, 'want joined in'),
('Faisal', 'faaisal@gmail.com', 2147483647, 'want to know about society');

-- --------------------------------------------------------

--
-- Table structure for table `member_request`
--

CREATE TABLE `member_request` (
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` int(10) NOT NULL,
  `department` text NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member_request`
--

INSERT INTO `member_request` (`name`, `email`, `contact`, `department`, `message`) VALUES
('', '', 0, '', ''),
('', '', 0, '', ''),
('imad', 'imad@ymail.com', 985642567, 'building security', 'want to maintain it more accurately');

-- --------------------------------------------------------

--
-- Table structure for table `member_signin`
--

CREATE TABLE `member_signin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member_signin`
--

INSERT INTO `member_signin` (`username`, `password`) VALUES
('hammad', 'hammad*12'),
('samra', 'sam@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
