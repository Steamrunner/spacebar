-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Host: 10.3.0.66
-- Generation Time: Apr 07, 2017 at 09:24 PM
-- Server version: 5.6.29
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gfwysknm_sb`
--
CREATE DATABASE IF NOT EXISTS `gfwysknm_sb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gfwysknm_sb`;

-- --------------------------------------------------------

--
-- Table structure for table `sb_accounts`
--

CREATE TABLE `sb_accounts` (
  `account_id` int(8) NOT NULL,
  `account_sort` int(8) NOT NULL DEFAULT '999',
  `account_name` text NOT NULL,
  `account_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `account_amount` int(20) NOT NULL DEFAULT '0',
  `account_amount_money` decimal(10,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sb_console`
--

CREATE TABLE `sb_console` (
  `console_id` int(8) NOT NULL,
  `console_product` int(8) NOT NULL,
  `console_amount` int(8) NOT NULL DEFAULT '1',
  `console_session` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sb_logs`
--

CREATE TABLE `sb_logs` (
  `log_id` int(8) NOT NULL,
  `log_time` int(16) NOT NULL,
  `log_type` varchar(16) NOT NULL,
  `log_message` text NOT NULL,
  `log_json` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sb_products`
--

CREATE TABLE `sb_products` (
  `product_id` int(8) NOT NULL,
  `product_added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `product_price` decimal(10,2) NOT NULL DEFAULT '4.99',
  `product_type` int(8) NOT NULL COMMENT '1:drinks,2:alcohol,3:food',
  `product_sort` int(8) NOT NULL DEFAULT '999',
  `product_name` text NOT NULL,
  `product_amount` int(10) NOT NULL,
  `product_amount_money` decimal(10,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sb_products_barcodes`
--

CREATE TABLE `sb_products_barcodes` (
  `barcode_id` int(8) NOT NULL,
  `barcode_product` int(8) NOT NULL,
  `barcode_code` bigint(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sb_products_targets`
--

CREATE TABLE `sb_products_targets` (
  `target_id` int(8) NOT NULL,
  `target_product` int(8) NOT NULL,
  `target_account` int(8) NOT NULL,
  `target_amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sb_stats`
--

CREATE TABLE `sb_stats` (
  `stat_id` int(8) NOT NULL,
  `stat_account` int(8) NOT NULL,
  `stat_product` int(8) NOT NULL,
  `stat_amount` int(8) NOT NULL,
  `stat_money` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sb_accounts`
--
ALTER TABLE `sb_accounts`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `sb_console`
--
ALTER TABLE `sb_console`
  ADD PRIMARY KEY (`console_id`);

--
-- Indexes for table `sb_logs`
--
ALTER TABLE `sb_logs`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `sb_products`
--
ALTER TABLE `sb_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `sb_products_barcodes`
--
ALTER TABLE `sb_products_barcodes`
  ADD PRIMARY KEY (`barcode_id`);

--
-- Indexes for table `sb_products_targets`
--
ALTER TABLE `sb_products_targets`
  ADD PRIMARY KEY (`target_id`);

--
-- Indexes for table `sb_stats`
--
ALTER TABLE `sb_stats`
  ADD PRIMARY KEY (`stat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sb_accounts`
--
ALTER TABLE `sb_accounts`
  MODIFY `account_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `sb_console`
--
ALTER TABLE `sb_console`
  MODIFY `console_id` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sb_logs`
--
ALTER TABLE `sb_logs`
  MODIFY `log_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=504;
--
-- AUTO_INCREMENT for table `sb_products`
--
ALTER TABLE `sb_products`
  MODIFY `product_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `sb_products_barcodes`
--
ALTER TABLE `sb_products_barcodes`
  MODIFY `barcode_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sb_products_targets`
--
ALTER TABLE `sb_products_targets`
  MODIFY `target_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sb_stats`
--
ALTER TABLE `sb_stats`
  MODIFY `stat_id` int(8) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
