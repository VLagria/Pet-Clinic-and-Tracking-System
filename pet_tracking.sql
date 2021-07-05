-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2021 at 01:17 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pet_tracking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_clinic`
--

CREATE TABLE `admin_clinic` (
  `admin_clinic_id` int(11) NOT NULL,
  `admin_dateAdded` date DEFAULT NULL,
  `clinic_id` int(11) DEFAULT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `clinic`
--

CREATE TABLE `clinic` (
  `clinic_id` int(11) NOT NULL,
  `clinic_name` varchar(225) NOT NULL,
  `owner_name` varchar(225) NOT NULL,
  `clinic_mobile` bigint(20) NOT NULL,
  `clinic_email` varchar(225) NOT NULL,
  `clinic_tel` bigint(20) DEFAULT NULL,
  `clinic_blk` varchar(100) NOT NULL,
  `clinic_street` varchar(100) NOT NULL,
  `clinic_barangay` varchar(100) NOT NULL,
  `clinic_city` varchar(100) NOT NULL,
  `clinic_zip` int(11) NOT NULL,
  `admin_clinic_id` int(11) NOT NULL,
  `clinic_isActive` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_fname` varchar(225) NOT NULL,
  `customer_lname` varchar(225) NOT NULL,
  `customer_mname` varchar(225) NOT NULL,
  `customer_mobile` bigint(20) NOT NULL,
  `customer_tel` bigint(20) DEFAULT NULL,
  `customer_gender` varchar(15) DEFAULT NULL,
  `customer_birthday` date DEFAULT NULL,
  `customer_DP` blob DEFAULT NULL,
  `customer_blk` varchar(100) NOT NULL,
  `customer_street` varchar(100) NOT NULL,
  `customer_subdivision` varchar(100) DEFAULT NULL,
  `customer_barangay` varchar(100) NOT NULL,
  `customer_city` varchar(100) NOT NULL,
  `customer_zip` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `customer_isActive` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE `pet` (
  `pet_id` int(11) NOT NULL,
  `pet_name` varchar(225) NOT NULL,
  `pet_gender` varchar(15) DEFAULT NULL,
  `pet_birthday` date DEFAULT NULL,
  `pet_notes` varchar(300) NOT NULL,
  `pet_bloodType` varchar(100) NOT NULL,
  `pet_DP` blob DEFAULT NULL,
  `pet_registeredDate` date DEFAULT NULL,
  `pet_type_id` int(11) NOT NULL,
  `pet_breed_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `clinic_id` int(11) NOT NULL,
  `pet_isActive` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pet_breed`
--

CREATE TABLE `pet_breed` (
  `breed_id` int(11) NOT NULL,
  `breed_name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pet_type`
--

CREATE TABLE `pet_type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `userType_id` int(11) NOT NULL,
  `userType_name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(225) NOT NULL,
  `user_password` varchar(225) NOT NULL,
  `user_mobile` bigint(20) NOT NULL,
  `user_email` varchar(225) NOT NULL,
  `userType_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `veterinary`
--

CREATE TABLE `veterinary` (
  `vet_id` int(11) NOT NULL,
  `vet_fname` varchar(225) NOT NULL,
  `vet_lname` varchar(225) NOT NULL,
  `vet_mname` varchar(225) NOT NULL,
  `vet_mobile` bigint(20) NOT NULL,
  `vet_tel` bigint(20) NOT NULL,
  `vet_birthday` date DEFAULT NULL,
  `vet_DP` blob DEFAULT NULL,
  `vet_blk` varchar(100) DEFAULT NULL,
  `vet_street` varchar(100) NOT NULL,
  `vet_subdivision` varchar(100) DEFAULT NULL,
  `vet_barangay` varchar(100) NOT NULL,
  `vet_city` varchar(100) NOT NULL,
  `vet_zip` int(11) NOT NULL,
  `vet_dateAdded` date DEFAULT NULL,
  `clinic_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vet_isActive` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_clinic`
--
ALTER TABLE `admin_clinic`
  ADD PRIMARY KEY (`admin_clinic_id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `clinic_id` (`clinic_id`);

--
-- Indexes for table `clinic`
--
ALTER TABLE `clinic`
  ADD PRIMARY KEY (`clinic_id`),
  ADD KEY `admin_clinic_id` (`admin_clinic_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`pet_id`),
  ADD KEY `pet_type_id` (`pet_type_id`),
  ADD KEY `pet_breed_id` (`pet_breed_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `clinic_id` (`clinic_id`);

--
-- Indexes for table `pet_breed`
--
ALTER TABLE `pet_breed`
  ADD PRIMARY KEY (`breed_id`);

--
-- Indexes for table `pet_type`
--
ALTER TABLE `pet_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`userType_id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `userType_id` (`userType_id`);

--
-- Indexes for table `veterinary`
--
ALTER TABLE `veterinary`
  ADD PRIMARY KEY (`vet_id`),
  ADD KEY `clinic_id` (`clinic_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_clinic`
--
ALTER TABLE `admin_clinic`
  MODIFY `admin_clinic_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clinic`
--
ALTER TABLE `clinic`
  MODIFY `clinic_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pet`
--
ALTER TABLE `pet`
  MODIFY `pet_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pet_breed`
--
ALTER TABLE `pet_breed`
  MODIFY `breed_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pet_type`
--
ALTER TABLE `pet_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `userType_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `veterinary`
--
ALTER TABLE `veterinary`
  MODIFY `vet_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_clinic`
--
ALTER TABLE `admin_clinic`
  ADD CONSTRAINT `admin_clinic_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `user_account` (`user_id`),
  ADD CONSTRAINT `clinic_id` FOREIGN KEY (`clinic_id`) REFERENCES `clinic` (`clinic_id`);

--
-- Constraints for table `clinic`
--
ALTER TABLE `clinic`
  ADD CONSTRAINT `clinic_ibfk_1` FOREIGN KEY (`admin_clinic_id`) REFERENCES `admin_clinic` (`admin_clinic_id`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_account` (`user_id`);

--
-- Constraints for table `pet`
--
ALTER TABLE `pet`
  ADD CONSTRAINT `pet_ibfk_1` FOREIGN KEY (`pet_type_id`) REFERENCES `pet_type` (`type_id`),
  ADD CONSTRAINT `pet_ibfk_2` FOREIGN KEY (`pet_breed_id`) REFERENCES `pet_breed` (`breed_id`),
  ADD CONSTRAINT `pet_ibfk_3` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `pet_ibfk_4` FOREIGN KEY (`clinic_id`) REFERENCES `clinic` (`clinic_id`);

--
-- Constraints for table `user_account`
--
ALTER TABLE `user_account`
  ADD CONSTRAINT `user_account_ibfk_1` FOREIGN KEY (`userType_id`) REFERENCES `usertype` (`userType_id`);

--
-- Constraints for table `veterinary`
--
ALTER TABLE `veterinary`
  ADD CONSTRAINT `veterinary_ibfk_1` FOREIGN KEY (`clinic_id`) REFERENCES `clinic` (`clinic_id`),
  ADD CONSTRAINT `veterinary_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user_account` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
