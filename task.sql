-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net  
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2021 at 09:31 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `tsk_mst`
--

CREATE TABLE `tsk_mst` (
  `tskm_id` int(15) NOT NULL,
  `tskm_title` varchar(250) NOT NULL,
  `tskm_desc` text NOT NULL,
  `tskm_prty` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tsk_mst`
--

INSERT INTO `tsk_mst` (`tskm_id`, `tskm_title`, `tskm_desc`, `tskm_prty`) VALUES
(9, 'test', 'workind', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tsk_mst`
--
ALTER TABLE `tsk_mst`
  ADD PRIMARY KEY (`tskm_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tsk_mst`
--
ALTER TABLE `tsk_mst`
  MODIFY `tskm_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
