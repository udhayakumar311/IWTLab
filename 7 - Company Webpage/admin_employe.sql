-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2023 at 06:48 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin&employe`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(100) NOT NULL,
  `name` varchar(11) DEFAULT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(80) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `dob` date DEFAULT NULL,
  `course` varchar(50) DEFAULT NULL,
  `roll` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `name`, `email`, `password`, `gender`, `dob`, `course`, `roll`) VALUES
(10, 'Udhaya', 'udhayakumar0311@gmail.com', '12345', 'M', '2023-11-03', 'MCA', 'employe'),
(11, 'Admin1', 'admin1@gmail.com', '12345', '', NULL, NULL, 'admin'),
(12, 'Admin 2', 'admin2@gmail.com', '12345', '', NULL, NULL, 'admin'),
(13, 'Admin 3', 'admin3@gmail.com', '12345', '', NULL, NULL, 'admin'),
(14, 'Pavan', 'pavan@gmail.com', '12345', 'M', '2023-11-01', 'MSC', 'employe'),
(15, 'Trivikram', 'tri@gmail.com', '12345', 'M', '2023-10-11', 'M.Tech', 'employe'),
(16, 'Yogeshwar', 'yogesh@gmail.com', '12345', 'M', '2023-11-06', 'MSC', 'employe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
