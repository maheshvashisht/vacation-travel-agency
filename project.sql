-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2022 at 07:16 PM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `centre`
--

CREATE TABLE `centre` (
  `sno` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `days` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `centre`
--

INSERT INTO `centre` (`sno`, `image`, `price`, `days`, `location`, `state`) VALUES
(1, 'p-1.png', 8500, '8 days', 'kashmir circuit', 'jammu kashmir'),
(1, 'p-1.png', 8500, '8 days', 'kashmir circuit', 'jammu kashmir'),
(4, 'p-3.jpg', 10000, '5 days', 'Cola Beach', 'Goa, India'),
(5, 'p-4.jpg', 9000, '8 days', 'Assi Ghat', 'Varanasi, India'),
(2, 'p-10.jpg', 9000, '8 days', 'Vivekananda Rock', 'Kanyakumari,India');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `sno` int(200) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contact` int(15) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`sno`, `name`, `email`, `contact`, `message`) VALUES
(1, 'Mahesh Vashisht', 'maheshvashisht2002@gmail.com', 2147483647, ''),
(2, 'deepak', 'deepak@gmail.com', 83726387, ''),
(3, 'deepak', 'deepak@gmail.com', 83726387, ''),
(4, 'nilesh', 'nilesh@gmail.com', 832798373, 'thank you'),
(5, 'Arjun', 'arjun@gmail.com', 2147483647, 'Really very Happy'),
(6, 'Arjun', 'arjun@gmail.com', 2147483647, 'Really very Happy'),
(7, 'Arjun', 'arjun@gmail.com', 2147483647, 'Really very Happy');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `sno` int(100) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`sno`, `name`, `email`, `password`, `contact`) VALUES
(3, 'Mahesh Vashisht', 'maheshvashisht@gmail.com', '98765', '2147483647'),
(5, 'balwinder', 'ballu@gmail.com', '1234', '2147483647'),
(6, 'deepak', 'deepak@gmail.com', '1234', '9877103845'),
(7, 'Rahul', 'rahul@gmail.com', '1276', '9878675432'),
(14, 'anu', 'anu@gmail.com', '837982', '7893774982'),
(15, 'Raj', 'raj@gmail.com', 'raj@1234', '83726387'),
(16, 'Arjun', 'arjun@gmail.com', '765765', '7876876876');

-- --------------------------------------------------------

--
-- Table structure for table `show_location`
--

CREATE TABLE `show_location` (
  `sno` int(200) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `price` int(100) DEFAULT NULL,
  `days` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `show_location`
--

INSERT INTO `show_location` (`sno`, `image`, `price`, `days`, `name`, `location`) VALUES
(1, 'p-1.png', 8500, '8 days', 'kashmir circuit', 'jammu kashmir'),
(2, 'p-10.jpg', 9000, '8 days', 'Vivekananda Rock', 'Kanyakumari,India'),
(3, 'p-2.jpg', 7500, '6 days', 'Hawa Mahal', 'Rajasthan, India'),
(4, 'p-3.jpg', 10000, '5 days', 'Cola Beach', 'Goa, India'),
(5, 'p-4.jpg', 9000, '8 days', 'Assi Ghat', 'Varanasi, India');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `show_location`
--
ALTER TABLE `show_location`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `show_location`
--
ALTER TABLE `show_location`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
