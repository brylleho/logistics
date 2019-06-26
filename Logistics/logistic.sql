-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2018 at 07:29 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logistic`
--

-- --------------------------------------------------------

--
-- Table structure for table `purchase_details`
--

CREATE TABLE `purchase_details` (
  `po_number` varchar(11) NOT NULL,
  `item_code` text NOT NULL,
  `item_description` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_cost` int(11) NOT NULL,
  `unit_measure` text NOT NULL,
  `unit_retail` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_details`
--

INSERT INTO `purchase_details` (`po_number`, `item_code`, `item_description`, `quantity`, `unit_cost`, `unit_measure`, `unit_retail`) VALUES
('2018-1', '23', 'aef', 5, 10, 'Pcs', 50),
('2018-1', '23', 'paper', 1, 12, 'Pcs', 12),
('2018-1', '21', 'paper', 2, 21, 'Pcs', 42),
('2018-1', '26', 'sadf', 3, 32, 'Pcs', 96),
('2018-1', '54', 'sadf', 4, 45, 'Pcs', 180),
('2018-1', '78', 'wre', 5, 65, 'Pcs', 325),
('2018-1', '90', 'keyboard', 6, 45, 'Pcs', 270),
('2018-1', '12', 'wer', 7, 43, 'Pcs', 301);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_details_receiving`
--

CREATE TABLE `purchase_details_receiving` (
  `porr_id` int(11) NOT NULL,
  `po_number` varchar(11) NOT NULL,
  `quantity_received` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `po_number` varchar(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `company` text NOT NULL,
  `supplier` text NOT NULL,
  `deliver_to` text NOT NULL,
  `branch` text NOT NULL,
  `terms` text NOT NULL,
  `discount` text NOT NULL,
  `discount_type` text NOT NULL,
  `department` text NOT NULL,
  `special_instruction` text NOT NULL,
  `po_date` text NOT NULL,
  `delivery_date` date NOT NULL,
  `cancel_date` date NOT NULL,
  `po_notes` text NOT NULL,
  `total_cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_order`
--

INSERT INTO `purchase_order` (`po_number`, `user_id`, `company`, `supplier`, `deliver_to`, `branch`, `terms`, `discount`, `discount_type`, `department`, `special_instruction`, `po_date`, `delivery_date`, `cancel_date`, `po_notes`, `total_cost`) VALUES
('2018-1', 1, 'asdw', '', 'asdw', 'National-U Sampaloc', 'asdw', '23', 'Percent', 'asdwasd', 'asdwasasds', '10/25/2018', '1970-01-01', '1970-01-01', '', 39);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order_receiving`
--

CREATE TABLE `purchase_order_receiving` (
  `porr_id` int(11) NOT NULL,
  `po_number` varchar(11) NOT NULL,
  `sales_invoice` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `remarks`
--

CREATE TABLE `remarks` (
  `po_number` varchar(11) NOT NULL,
  `kind` text NOT NULL,
  `image` longblob NOT NULL,
  `ordered_by` text NOT NULL,
  `verified_by` text NOT NULL,
  `approved_by` text NOT NULL,
  `received_by` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remarks`
--

INSERT INTO `remarks` (`po_number`, `kind`, `image`, `ordered_by`, `verified_by`, `approved_by`, `received_by`) VALUES
('2018-1', 'APEX', '', 'richard brylle clemente ho', '', '', ''),
('2018-1', 'APEX', '', 'richard brylle clemente ho', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` text NOT NULL,
  `company_code` text NOT NULL,
  `address` text NOT NULL,
  `postal_code` int(11) NOT NULL,
  `contact_name` text NOT NULL,
  `phone_number` int(11) NOT NULL,
  `telephone_number` int(11) NOT NULL,
  `email_address` text NOT NULL,
  `fax` text NOT NULL,
  `extra` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier_name`, `company_code`, `address`, `postal_code`, `contact_name`, `phone_number`, `telephone_number`, `email_address`, `fax`, `extra`) VALUES
(2, 'jollibee', '123', 'sampaloc', 123, 'brylle', 12321, 123, 'jolli@bee.com', '1asd', 'asdw'),
(3, 'mcdo', 'love ko to', 'dapitan', 1008, 'mcdonalds', 86236, 86236, 'mcdo@delivery.com', 'mc', 'do');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `middle_name` text NOT NULL,
  `last_name` text NOT NULL,
  `postal_code` int(11) NOT NULL,
  `mobile_number` int(11) NOT NULL,
  `telephone_number` int(11) NOT NULL,
  `address` text NOT NULL,
  `email_address` text NOT NULL,
  `password` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `middle_name`, `last_name`, `postal_code`, `mobile_number`, `telephone_number`, `address`, `email_address`, `password`, `status`) VALUES
(1, 'richard brylle', 'clemente', 'ho', 1008, 2147483647, 4932702, 'VGC', 'horichardbrylle@gmail.com', 'f85a9e55bd43137d9f5172cbd61a2521', 'User'),
(2, 'locks', 'di', 'gol', 1232, 0, 0, 'VGC', 'goldi@locks.com', 'a1b8585122e1ad60623d6a74d3eb3b6a', 'Property Office User'),
(3, 'manette', 'cabrigas', 'de jesus', 123, 0, 0, 'maginoo', 'manettedejesus@gmail.com', '3ccc0e606e7cdf144ac95e8cf5fc87fa', 'Super Admin'),
(4, 'ar', 'bi', 'si', 2002, 95165, 65421, 'VGC', 'heinweiser09@gmail.com', '202cb962ac59075b964b07152d234b70', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `purchase_details_receiving`
--
ALTER TABLE `purchase_details_receiving`
  ADD PRIMARY KEY (`porr_id`);

--
-- Indexes for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`po_number`),
  ADD KEY `purchase_order_user_info_foreign` (`user_id`);

--
-- Indexes for table `remarks`
--
ALTER TABLE `remarks`
  ADD KEY `remarks_purchase_order_foreign` (`po_number`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `purchase_details_receiving`
--
ALTER TABLE `purchase_details_receiving`
  MODIFY `porr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD CONSTRAINT `purchase_order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`user_id`);

--
-- Constraints for table `remarks`
--
ALTER TABLE `remarks`
  ADD CONSTRAINT `remarks_ibfk_1` FOREIGN KEY (`po_number`) REFERENCES `purchase_order` (`po_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
