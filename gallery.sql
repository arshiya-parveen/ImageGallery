-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2020 at 04:43 PM
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
-- Database: `gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `c_contact` bigint(15) NOT NULL,
  `c_message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `c_name`, `c_email`, `c_contact`, `c_message`) VALUES
(1, 'arshi', 'arshi@gmail.com', 46587675864, 'hi'),
(3, 'prajakta', 'prajakta@yahoo.in', 9876543212, 'hello'),
(4, 'fjh', 'dfsdf@yahoo.com', 3423645768, 'sdttruy');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `f_email` varchar(255) NOT NULL,
  `f_rating` varchar(255) NOT NULL,
  `f_sugg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `f_name`, `f_email`, `f_rating`, `f_sugg`) VALUES
(2, 'sonu', 'sonu@gmail.com', '', 'hello'),
(4, 'parajakta', 'prajakta@yahoo.in', '', 'assalamualaikum'),
(5, 'gg', 'gsgasg2@s.com', '', 'efwge');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `i_id` int(11) NOT NULL,
  `i_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`i_id`, `i_image`) VALUES
(2, 'b.jpg'),
(3, 'c.jpg'),
(4, 'd.jpg'),
(5, 'e.jpg'),
(6, 'f.jpg'),
(7, 'g.jpg'),
(8, 'h.jpg'),
(9, 'i.jpg'),
(10, 'j.jpg'),
(11, 'k.jpg'),
(12, 'l.jpg'),
(13, 'm.jpg'),
(14, 'n.jpg'),
(15, 'o.jpg'),
(16, 'p.jpg'),
(18, 'a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `s_contact` bigint(15) NOT NULL,
  `s_email` varchar(255) NOT NULL,
  `s_pass` varchar(255) NOT NULL,
  `c_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`s_id`, `s_name`, `s_contact`, `s_email`, `s_pass`, `c_pass`) VALUES
(1, 'arshi', 676767868, 'arshi@gmail.com', 'asti', 'asti'),
(2, 'arshi', 7666802231, 'arshi@gmail.com', 'asti', 'asti'),
(4, 'abc', 9999999, 'abc@yahoo.in', 'abc', 'abc'),
(5, 'Arshiya', 7666802231, 'arshi@gmail.com', 'arshi', 'arshi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
