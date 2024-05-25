-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2024 at 01:42 PM
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
-- Database: `monisfarooq`
--

-- --------------------------------------------------------

--
-- Table structure for table `formsubmission`
--

CREATE TABLE `formsubmission` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `services` int(11) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formsubmission`
--

INSERT INTO `formsubmission` (`id`, `name`, `email`, `phone`, `services`, `message`) VALUES
(1, 'Monis Farooq', 'rehmatullah@gmail.com', '3142574793', 2, 'Lorem Ipsum Dummy'),
(2, 'Ahmed', 'noman@gmail.com', '3142574793', 2, 'Lorem Ipsum'),
(3, 'Ahmed', 'farooq.ayubie26@gmail.com', '3142574793', 4, 'test email'),
(4, 'Ahmed', 'farooq.ayubie26@gmail.com', '3142574793', 4, 'test email');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `serviceid` int(11) NOT NULL,
  `servicename` varchar(70) NOT NULL,
  `servicedesc` text NOT NULL,
  `serviceprice` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`serviceid`, `servicename`, `servicedesc`, `serviceprice`) VALUES
(1, 'WordPress Website Development', 'Crafting captivating WordPress websites tailored to your brand. From sleek designs to seamless functionality, elevate your online presence with expert development tailored to your unique needs.', 200),
(2, 'WooCommerce Store Development', 'Empower your business with a custom WooCommerce store. Seamless integration, user-friendly interface, and robust features tailored to amplify your online sales and customer experience. Let\'s turn your e-commerce vision into reality.', 250),
(3, 'Shopify Store Development', 'Elevate your online retail presence with a bespoke Shopify store. From stunning designs to streamlined checkout processes, we create tailored solutions to maximize sales and customer engagement. Let\'s build your online store that stands out.', 300),
(4, 'Custom PHP Based Development', 'Unlock limitless possibilities with custom PHP-based development. Tailored solutions crafted to your exact specifications, ensuring scalability, security, and performance. Let\'s bring your unique ideas to life with precision and expertise.', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formsubmission`
--
ALTER TABLE `formsubmission`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services` (`services`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`serviceid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formsubmission`
--
ALTER TABLE `formsubmission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `serviceid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `formsubmission`
--
ALTER TABLE `formsubmission`
  ADD CONSTRAINT `formsubmission_ibfk_1` FOREIGN KEY (`services`) REFERENCES `services` (`serviceid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
