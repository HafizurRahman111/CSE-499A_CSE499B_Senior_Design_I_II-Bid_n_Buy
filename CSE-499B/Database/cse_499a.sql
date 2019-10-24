-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2019 at 08:21 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cse_499a`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyer_profile`
--

CREATE TABLE `buyer_profile` (
  `bp_id` int(10) NOT NULL,
  `b_id` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `works` varchar(20) NOT NULL,
  `current_address` varchar(40) NOT NULL,
  `parmanent_address` varchar(40) NOT NULL,
  `birthday` datetime(6) NOT NULL,
  `language` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer_profile`
--

INSERT INTO `buyer_profile` (`bp_id`, `b_id`, `username`, `works`, `current_address`, `parmanent_address`, `birthday`, `language`, `email`) VALUES
(4, 0, 'himel', '', '', '', '0000-00-00 00:00:00.000000', '', ''),
(5, 0, 'barua', 'CSE', 'MIRPUR2', 'TANGAIL1', '2019-10-01 00:00:00.000000', 'Bengali', 'himel@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `buyer_signup`
--

CREATE TABLE `buyer_signup` (
  `b_id` int(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `reg_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer_signup`
--

INSERT INTO `buyer_signup` (`b_id`, `firstname`, `lastname`, `username`, `phone`, `password`, `reg_time`) VALUES
(75, 'Hafizur', 'Rahman', 'himel', '01680735420', 'null', '2019-10-23 05:59:44'),
(77, 'Himel', 'Himel', 'barua', '01965165175', 'sala', '2019-10-23 06:00:24');

-- --------------------------------------------------------

--
-- Table structure for table `seller_profile`
--

CREATE TABLE `seller_profile` (
  `sp_id` int(10) NOT NULL,
  `works` varchar(20) NOT NULL,
  `current_address` varchar(40) NOT NULL,
  `parmanent_address` varchar(40) NOT NULL,
  `birthday` datetime(6) NOT NULL,
  `language` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seller_signup`
--

CREATE TABLE `seller_signup` (
  `s_id` int(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `reg_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller_signup`
--

INSERT INTO `seller_signup` (`s_id`, `firstname`, `lastname`, `username`, `phone`, `password`, `reg_time`) VALUES
(39, 'afrin', 'afrin', 'afrin', '12345', 'sam', '2019-10-22 23:34:09'),
(42, 'Ashikur', 'Rahman', 'ashik', '988898989892', 'ashik', '2019-10-22 23:34:39'),
(46, 'Saddat', 'Hasan', 'badhan', '2563773993', 'badhan', '2019-10-22 23:36:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyer_profile`
--
ALTER TABLE `buyer_profile`
  ADD PRIMARY KEY (`bp_id`);

--
-- Indexes for table `buyer_signup`
--
ALTER TABLE `buyer_signup`
  ADD PRIMARY KEY (`b_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`phone`),
  ADD UNIQUE KEY `b_id` (`b_id`);

--
-- Indexes for table `seller_profile`
--
ALTER TABLE `seller_profile`
  ADD PRIMARY KEY (`sp_id`);

--
-- Indexes for table `seller_signup`
--
ALTER TABLE `seller_signup`
  ADD PRIMARY KEY (`s_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyer_profile`
--
ALTER TABLE `buyer_profile`
  MODIFY `bp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `buyer_signup`
--
ALTER TABLE `buyer_signup`
  MODIFY `b_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `seller_profile`
--
ALTER TABLE `seller_profile`
  MODIFY `sp_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seller_signup`
--
ALTER TABLE `seller_signup`
  MODIFY `s_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
