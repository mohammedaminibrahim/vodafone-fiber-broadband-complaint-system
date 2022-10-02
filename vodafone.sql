-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220616.7a6bd9eb57
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2022 at 08:03 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vodafone`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `dob`, `email`, `password`, `dp`) VALUES
(12, 'Ibrahim Bilkiss', '0000-00-00', 'ibrahimbilkiss@gmail.com', '$2y$10$S0uKY7vqNsIcAJl0.0tjzePwTaFvdHRWdyc/rFtC2tU', ''),
(13, 'Manager', '0000-00-00', 'manger@vodafone.com', '$2y$10$xHOsIdMZpDqnwDtQRvXpf.F1GNqvfHQWgHyooWUjqGp', ''),
(14, 'Manager', '0000-00-00', 'manger1@vodafone.com', '$2y$10$PpBOyHcVpIc8jWHtrEs.KO1WPQ7BpSCTo0.4pcnGCW3', '');

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` int(11) NOT NULL,
  `agentid` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `regDate` datetime NOT NULL DEFAULT current_timestamp(),
  `lastLogin` timestamp NOT NULL DEFAULT current_timestamp(),
  `dob` varchar(255) NOT NULL,
  `contactnumber` varchar(255) NOT NULL,
  `closelandmark` varchar(255) NOT NULL,
  `tellphone` varchar(255) NOT NULL,
  `ghanacard` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `agentid`, `fullname`, `email`, `password`, `regDate`, `lastLogin`, `dob`, `contactnumber`, `closelandmark`, `tellphone`, `ghanacard`) VALUES
(6, '63388c6f2b89e', 'Jackie Wahala', 'as@cktutas.edu.gh', '$2y$10$.85omAAlQpHUg5IZ0yBUjeyjtpEYdGeurikkR9g5slqEwrRehlc.q', '2022-10-01 18:52:31', '2022-10-01 18:52:31', '1998-09-09', '+233542095569', 'Hospital', '+233542095569', 'GHA-098-782'),
(7, '63388ccb10aea', 'Jackie Wahala', 'as@cktutas.edu.gh', '$2y$10$HyEikzWWjvfoVUC6F/gAGu.mxBXKdxKHiXQcSfninXZkezMRcZrYK', '2022-10-01 18:54:03', '2022-10-01 18:54:03', '1990-03-08', '+233542095569', 'Hospital', '+233542095569', 'GHA-098-782'),
(8, '63388cee116d4', 'Jackie Wahala', 'as@cktutas.edu.gh', '$2y$10$HAiKdY2fL3dJkau4I8Jis.Ly27wVblDKxrMOt06d7p5.bjWJrIeIy', '2022-10-01 18:54:38', '2022-10-01 18:54:38', '1990-03-08', '+233542095569', 'Hospital', '+233542095569', 'GHA-098-782');

-- --------------------------------------------------------

--
-- Table structure for table `complains`
--

CREATE TABLE `complains` (
  `id` int(11) NOT NULL,
  `customerNumber` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `priority` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complains`
--

INSERT INTO `complains` (`id`, `customerNumber`, `telephone`, `priority`, `description`, `status`, `createdAt`) VALUES
(1, '6332be03055e9', '0205894240', 'Medium', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit laboriosam magni laudantium iusto temporibus! Omnis debitis saepe excepturi aspernatur? Sunt voluptatem consectetur laborum, consequuntur ipsam eligendi non veniam quod ut!', 1, '2022-09-27 09:10:27'),
(2, '6332be03055e9', '0205894240', 'Medium', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit laboriosam magni laudantium iusto temporibus! Omnis debitis saepe excepturi aspernatur? Sunt voluptatem consectetur laborum, consequuntur ipsam eligendi non veniam quod ut!', 1, '2022-09-27 09:10:27'),
(3, '6332be03055e9', '0205894240', 'Medium', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit laboriosam magni laudantium iusto temporibus! Omnis debitis saepe excepturi aspernatur? Sunt voluptatem consectetur laborum, consequuntur ipsam eligendi non veniam quod ut!', 1, '2022-09-27 09:10:27');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `customerNumber` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ghanaCard` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `landmark` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `addedby` varchar(255) NOT NULL,
  `timestampVar` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customerNumber`, `fullname`, `dob`, `email`, `password`, `ghanaCard`, `location`, `landmark`, `phone`, `addedby`, `timestampVar`) VALUES
(1, '63399bb2657ea', 'New', '1998-09-09', 'mohammedaminibrahim10@gmail.com', '$2y$10$6KKdJwC/ZsyFnu/b9vw.nOA3CwfDij0XmD.5dUMFTskvrbSr8zPpO', 'GHA-1234-093', 'Buokrom Kumasi', 'Divine International ', '+233542095569', 'as@cktutas.edu.gh', '2022-10-02 14:09:54');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `timestampVar` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `date`, `item`, `price`, `email`, `timestampVar`) VALUES
(122, '2021-06-27', 'Iphone', '133', '07@gmail.com', '2022-09-19 23:48:57'),
(124, '2021-06-21', 'Gold', '525', '07@gmail.com', '2022-09-19 23:48:57'),
(125, '2021-06-19', 'Gold', '34', '07@gmail.com', '2022-09-19 23:48:57'),
(126, '2022-09-17', 'Milk', '100', 'amin@jiditrust.com', '2022-09-19 23:48:57'),
(127, '2022-09-17', 'Rice', '56', 'amin@jiditrust.com', '2022-09-19 23:48:57'),
(128, '2022-09-17', 'Book', '3', 'amin@jiditrust.com', '2022-09-19 23:48:57'),
(129, '2022-09-18', 'Book', '2', 'mohammedaminibrahim10@gmail.com', '2022-09-19 23:48:57'),
(130, '2022-09-19', 'Book', '80', 'mohammedaminibrahim110@gmail.com', '2022-09-19 23:48:57'),
(131, '2022-09-19', 'Rice', '60', 'mohammedaminibrahim110@gmail.com', '2022-09-19 23:48:57');

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `firstName`, `lastName`, `email`, `password`, `createdAt`) VALUES
(1, 'Mohammed ', 'Amin', 'mohammedamini@gmail.com', '$2y$10$S0uKY7vqNsIcAJl0.0tjzePwTaFvdHRWdyc/rFtC2tUSNdLUMtuzi', '2022-09-26 19:35:39');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `id` int(11) NOT NULL,
  `customerNumber` varchar(255) NOT NULL,
  `repliedtext` varchar(255) NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`id`, `customerNumber`, `repliedtext`, `dateCreated`) VALUES
(3, '6332be03055e9', 'qdwafgsdhgfjkl', '2022-09-28 16:22:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complains`
--
ALTER TABLE `complains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `complains`
--
ALTER TABLE `complains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



