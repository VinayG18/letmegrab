-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2020 at 12:44 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `letmegrab`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `aadhar_card_number` varchar(255) NOT NULL,
  `pan_card_number` varchar(255) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `website_url` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  `beneficiary_name` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `account_type` varchar(255) NOT NULL,
  `ifsc_code` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `photo`, `contact_number`, `aadhar_card_number`, `pan_card_number`, `gender`, `website_url`, `bank_name`, `branch_name`, `beneficiary_name`, `account_number`, `account_type`, `ifsc_code`, `created_at`, `modified_at`) VALUES
(1, 'Vinay Ghael', 'vinay@gmail.com', 'e541c8c2e9eb98febb9adf4209047180', '1587813292.jpg', '9987654321', '123456789000', 'VINAY1234V', 'Male', 'https://vinay.com', 'Bank of Baroda', 'Kim', 'Virat Kohli', '45785225266633', 'Saving Account', 'BARB0KIMSUR', '2020-07-19 12:32:50', '2020-07-19 12:32:50'),
(2, 'Virat Kohli', 'virat@gmail.com', '14f7aa5c89bd011a2f38afcdd2fa2beb', 'sound_2.jpg', '7894562134', '123456789012', 'VINAY1234V', 'Male', 'http://virat@gmail.com', 'Bank of Baroda', 'Navyug', 'Virat', '544544415455', 'Saving Account', 'BARB0RANSUR', '2020-07-19 12:35:23', '2020-07-19 12:35:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
