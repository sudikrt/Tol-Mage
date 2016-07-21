-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 18, 2016 at 07:19 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `u_id` varchar(30) NOT NULL,
  `branch_code` varchar(30) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `v_no` varchar(30) NOT NULL,
  `v_type` varchar(20) NOT NULL,
  `v_price` varchar(10) NOT NULL,
  `v_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `u_id`, `branch_code`, `c_name`, `v_no`, `v_type`, `v_price`, `v_date`) VALUES
(1, 'raju', 'KR101', 'Raj', 'ka-20 a-23111', '2_Wheelers', '20', '2016-04-08'),
(2, 'raju', 'KR102', 'Rock', 'Ka-20 w-2344', '2_Wheelers', '20', '2016-04-11');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_code` varchar(20) NOT NULL,
  `branch_name` varchar(100) NOT NULL,
  `branch_details` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_code`, `branch_name`, `branch_details`) VALUES
('KR101', 'KUNDAPURA', 'Bla bla'),
('KR102', 'Kat', 'Make Happier'),
('KARB10', 'Mangalore', 'Then The father was said');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`name`, `email`, `user_id`, `password`) VALUES
('Raju', '', 'admin', '12553255'),
('Raju M', 'bsnkaranth@gmail.com', 'raju', '1234'),
('Raju', 'usnkaranth@gmail.com', 'rajj', '12553255');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `type` varchar(20) NOT NULL,
  `price` float DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`type`, `price`, `description`) VALUES
('2_Wheelers', 20, 'Bladlksadsa\r\n'),
('3_Wheelser', 30, 'dfhskjdflksdflk'),
('Type 1', 20, 'fsdkfksd\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
