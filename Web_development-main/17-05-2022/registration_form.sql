-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2022 at 09:00 PM
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
-- Database: `registration_form_c193055`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration_form`
--

CREATE TABLE `registration_form` (
  `id` int(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `blood` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `region` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration_form`
--

INSERT INTO `registration_form` (`id`, `fname`, `lname`, `phone`, `gender`, `blood`, `email`, `state`, `region`, `country`) VALUES
(28, 'Mohammad Sakib', 'Chowdhury', '01760886380', 'Male', 'A+', 'mdsakibchy071@gmail.com', 'ctg', 'ctg', 'Bangladesh'),
(29, 'Mohammad Sakib', 'Chowdhury', '01760886380', 'Male', 'A+', 'mdsakibchy071@gmail.com', 'ctg', 'ctg', 'Bangladesh'),
(30, 'Mohammad Sakib', 'Chowdhury', '01760886380', 'Male', 'A+', 'mdsakibchy071@gmail.com', 'ctg', 'ctg', 'Bangladesh'),
(31, 'Mohammad Sakib', 'Chowdhury', '01760886380', 'Male', 'A+', 'mdsakibchy071@gmail.com', 'ctg', 'ctg', 'Bangladesh'),
(32, 'Mohammad Sakib', 'Chowdhury', '01760886380', 'Male', 'A+', 'mdsakibchy071@gmail.com', 'ctg', 'ctg', 'Bangladesh'),
(33, 'Mohammad Sakib', 'Chowdhury', '01760886380', 'Male', 'A+', 'mdsakibchy071@gmail.com', 'ctg', 'ctg', 'Bangladesh'),
(34, 'Mohammad Sakib', 'Chowdhury', '01760886380', 'Male', 'A+', 'mdsakibchy071@gmail.com', 'faf', 'faf', 'Bangladesh'),
(35, 'Mohammad Sakib', 'Chowdhury', '01760886380', 'Male', 'A+', 'mdsakibchy071@gmail.com', 'ctg', 'ctg', 'Bangladesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration_form`
--
ALTER TABLE `registration_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration_form`
--
ALTER TABLE `registration_form`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
