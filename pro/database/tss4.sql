-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 16, 2018 at 05:40 PM
-- Server version: 5.7.22-0ubuntu18.04.1
-- PHP Version: 7.2.7-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tss4`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `id` int(11) NOT NULL,
  `cover_msg` text NOT NULL,
  `resume` varchar(255) NOT NULL,
  `eid` int(11) NOT NULL,
  `job_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id`, `cover_msg`, `resume`, `eid`, `job_id`) VALUES
(1, 'hello i am interested for your job.', '153139759317707.docx', 1, 0),
(2, 'somthing', '153139765033686.docx', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `company_name`, `username`, `password`, `contact_person`, `address`, `city`, `contact`, `logo`) VALUES
(1, 'TCS Pvt. Ltd.', 'tcs', '11', 'Nilesh', 'new address', 'Bhopal', '777888', '1531221583.jpeg'),
(2, 'Airtel', 'airtel', '123', 'Aarti', 'testing', 'Mumbai', '225566633', '153122277455271.png'),
(3, 'Zee', 'zee', '11', 'Nidhi', 'testing', 'Bhopal', '334455', '153122281379688.png'),
(4, 'Infosys', 'infosys', '11', 'Parul', 'testing', 'Indore', '887744', '153122284651485.png');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `full_name`, `username`, `password`, `address`, `city`, `contact`) VALUES
(1, 'Mahima', 'mahima@gmail.com', '11', 'palaysia', 'Indore', '124578'),
(2, 'Gaurav', 'gaurav@gmail.com', '11', 'new road', 'Ujjain', '223355'),
(3, 'Gaurav', 'admin', '12345', 'fdssf', 'Indore', '1111111'),
(4, '', '', '', '', '', ''),
(5, '', '', '', '', '', ''),
(6, '', '', '', '', '', ''),
(7, '', '', '', '', '', ''),
(8, '', '', '', '', '', ''),
(9, '', '', '', '', '', ''),
(10, '', '', '', '', '', ''),
(11, '', '', '', '', '', ''),
(12, '', '', '', '', '', ''),
(13, '', '', '', '', '', ''),
(14, '', '', '', '', '', ''),
(15, '', '', '', '', '', ''),
(16, '', '', '', '', '', ''),
(17, '', '', '', '', '', ''),
(18, '', '', '', '', '', ''),
(19, '', '', '', '', '', ''),
(20, '', '', '', '', '', ''),
(21, 'gdf', 'gfdgdgdg', 'gdgdgdgd', 'gggggggggggggggggd', 'Ujjain', '');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `vacancy` int(11) NOT NULL,
  `salary` decimal(9,2) NOT NULL,
  `min_que` varchar(255) NOT NULL,
  `skills` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `cid`, `job_title`, `category`, `vacancy`, `salary`, `min_que`, `skills`, `status`) VALUES
(1, 2, 'Marketing Exe.', 'Marketing', 12, '8500.00', 'Under Graduate', 'Communication....', 1),
(2, 3, 'Finance Manager', 'Finanace', 2, '38000.00', 'Post Graduate', 'Finance Manager', 1),
(3, 1, 'PHP Developer', 'IT', 25, '11000.00', 'Graduate', 'PHP, HTML, CSS', 0),
(5, 1, 'X', 'IT', 5, '10000.00', 'Graduate', 'somthing', 0),
(6, 1, 'Y', 'Government', 5, '40000.00', 'Post Graduate', 'stomhinh', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
