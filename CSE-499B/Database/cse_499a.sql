-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2019 at 02:53 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

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

-- --------------------------------------------------------

--
-- Table structure for table `buyer_signup`
--

CREATE TABLE `buyer_signup` (
  `b_id` int(20) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `password` varchar(30) NOT NULL,
  `reg_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `buy_products_demand`
--

CREATE TABLE `buy_products_demand` (
  `b_product_id` int(20) NOT NULL,
  `buyer_username` varchar(25) NOT NULL,
  `buyer_name` varchar(25) NOT NULL,
  `buyer_email` varchar(25) NOT NULL,
  `buyer_phone` varchar(25) NOT NULL,
  `buyer_category` varchar(15) NOT NULL,
  `buyer_type` varchar(15) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `estimated_price` double(10,2) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `product_details` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `b_products_images`
--

CREATE TABLE `b_products_images` (
  `b_pro_image_id` int(20) NOT NULL,
  `product_id` int(20) NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` varchar(110) NOT NULL,
  `m_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `buy_products_demand`
--
ALTER TABLE `buy_products_demand`
  ADD PRIMARY KEY (`b_product_id`),
  ADD UNIQUE KEY `buyer_username` (`buyer_username`);

--
-- Indexes for table `b_products_images`
--
ALTER TABLE `b_products_images`
  ADD PRIMARY KEY (`b_pro_image_id`),
  ADD UNIQUE KEY `b_pro_image_id` (`b_pro_image_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

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
  MODIFY `bp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `buyer_signup`
--
ALTER TABLE `buyer_signup`
  MODIFY `b_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `buy_products_demand`
--
ALTER TABLE `buy_products_demand`
  MODIFY `b_product_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
