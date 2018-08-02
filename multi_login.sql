-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2018 at 04:48 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multi_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `id` int(12) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `address` varchar(300) NOT NULL,
  `city` varchar(300) NOT NULL,
  `postal_code` varchar(300) NOT NULL,
  `country` varchar(300) NOT NULL,
  `jobtitle` varchar(300) NOT NULL,
  `educationlevel` varchar(300) NOT NULL,
  `gcse` varchar(300) NOT NULL,
  `educationalqualification` varchar(300) NOT NULL,
  `professionalqualification` varchar(300) NOT NULL,
  `skill` varchar(300) NOT NULL,
  `experience` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`id`, `name`, `email`, `address`, `city`, `postal_code`, `country`, `jobtitle`, `educationlevel`, `gcse`, `educationalqualification`, `professionalqualification`, `skill`, `experience`) VALUES
(11, 'Mansour Zekria', 'mansourzekria20@gmail.com', '1 whitchurch avenue', 'london', 'ha86hu', 'United Kingdom', 'software engineering', 'Masters', 'Dutch, English, Maths, Sicience', 'Bachelor of Science ', 'MSC in Software Engineering', 'PHP, JAVA, .NET, C#, HTML5, CSS, JAVASCRIPT', '2 YEARS IN PHP, JAVA, C#'),
(12, 'Ali Bin Abdullah', 'Ali Bin Abdullah@gmail.com', '23 Ben Street', 'Kingston', 'KT2 7LB', 'United Kingdom', 'Police Officer', 'Collage', 'Arabic, English, Maths, Sicience', 'BTEC Sport', 'Anything', 'self defense and Boxing', '3 years in Police Academy ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`) VALUES
(0, 'admin1', 'admin1@admin.com', 'admin', 'e00cf25ad42683b3df678c61f42c6bda'),
(0, 'mansour', 'mansourzekria20@gmail.com', 'user', 'd42d4b104afa23e3083fc2a153191936'),
(0, 'mansouradmin', 'mansouradmin@gmail.com', 'admin', 'admin'),
(0, 'mansouradmin', 'mansouradmin@gmail.com', 'admin', 'admin'),
(0, 'admin2', 'admin2@gmail.com', 'admin', 'c84258e9c39059a89ab77d846ddab909'),
(0, 'user1', 'user1@gmail.com', 'user', '24c9e15e52afc47c225b757e7bee1f9d'),
(0, 'admin3', 'admin3@gmail.com', 'admin', '32cacb2f994f6b42183a1300d9a3e8d6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
