-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2019 at 11:28 AM
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
-- Database: `bug`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(255) NOT NULL,
  `filepath` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `filepath`, `filename`, `description`, `project_name`, `date`) VALUES
(1, 'project/MINI PROJECT.pdf', 'MINI PROJECT.pdf', 'hello world', 'data base', '2019-11-16 09:38:15');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(255) NOT NULL,
  `filepath` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `bug_name` varchar(255) NOT NULL,
  `bug_type` varchar(255) DEFAULT NULL,
  `author_name` varchar(255) NOT NULL,
  `register` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `filepath`, `filename`, `description`, `bug_name`, `bug_type`, `author_name`, `register`) VALUES
(1, 'doc/asp.pdf', 'asp.pdf', 'ghfhfgh', 'gjhgjh', NULL, '', '2019-11-03 07:08:47'),
(2, 'doc/asp.pdf', 'asp.pdf', 'gjhghfgfh', 'fgdgd', NULL, '', '2019-11-03 07:09:37'),
(3, 'doc/asp.pdf', 'asp.pdf', 'lofuyfhdnchyd', 'hathdh', NULL, 'admin22@gmail.com', '2019-11-03 07:17:02'),
(4, 'doc/compiler_design_tutorial.pdf', 'compiler_design_tutorial.pdf', 'nbmnbmn', 'nmn', 'nnmmn', 'siddharth@gmil.com', '2019-11-03 10:51:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `register` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `register`) VALUES
(1, 'admin@gmail.com', '', '123', 'admin', '2019-11-03 10:18:09'),
(2, 'admin2@gmail.com', '', '567', 'admin', '2019-11-03 10:33:49'),
(3, 'admin22@gmail.com', '', '123', 'users', '2019-11-03 10:42:50'),
(4, 'admin22@gmail.com', '', '56', 'users', '2019-11-03 10:42:53'),
(6, 'siddharth@gmil.com', '', '1234', 'users', '2019-11-03 10:42:57'),
(7, 'qwer@gmail.com', '', 'admin123', 'Devloper', '2019-11-16 09:12:27'),
(8, 'w4', 'abc@gmail.com', 'admin123', 'Tester', '2019-11-16 09:19:22'),
(9, 'as@gmail.com', '', '123', 'users', '2019-11-16 10:05:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
