-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2021 at 08:46 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `createusers`
--

DROP TABLE IF EXISTS `createusers`;
CREATE TABLE `createusers` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `balance` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `createusers`
--

INSERT INTO `createusers` (`id`, `username`, `email`, `balance`) VALUES
(1, 'Aanchal Malviya', 'aanchal22@gmail.com', 52099),
(2, 'sarvesh malviya', 'malviyasarvesh26@gmail.com', 40800),
(3, 'Payal', 'pr234@gmail.com', 36351),
(4, 'Geet', 'geet123@gmail.com', 22200),
(5, 'Devil', 'devil897@gmail.com', 33200),
(6, 'Shinu', 'shinu768@gmail.com', 61500),
(7, 'nitish malviya', 'nitish@gmail.com', 9000),
(8, 'Harry', 'harry@gmail.com', 21550),
(9, 'Riya', 'riya123@gmail.com', 35000),
(10, 'Krish', 'krish567@gmail.com', 89000),
(11, 'Shiv', 'shiv123@gmail.com', 54500),
(12, 'Naksh', 'nk@gmail.com', 25800);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
CREATE TABLE `transaction` (
  `sno` int(250) NOT NULL,
  `sender` varchar(250) NOT NULL,
  `receiver` varchar(250) NOT NULL,
  `amount` int(250) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `amount`, `datetime`) VALUES
(1, 'sarvesh malviya', 'Aanchal Malviya', 1000, '2021-10-18 17:57:50'),
(2, 'Krish', 'Geet', 1000, '2021-10-19 05:43:24'),
(3, 'Shiv', 'Devil', 2000, '2021-10-19 05:44:56'),
(4, 'Naksh', 'Aanchal Malviya', 5000, '2021-10-19 05:47:36'),
(5, 'Shiv', 'sarvesh malviya', 3500, '2021-10-19 05:48:06'),
(6, 'Aanchal Malviya', 'Payal', 4500, '2021-10-19 05:48:35'),
(7, 'Payal', 'Geet', 1000, '2021-10-19 05:49:01'),
(8, 'Shinu', 'Aanchal Malviya', 1500, '2021-10-19 05:49:36'),
(9, 'Harry', 'Payal', 450, '2021-10-19 05:50:02'),
(10, 'Riya', 'sarvesh malviya', 100, '2021-10-19 05:50:41'),
(11, 'Harry', 'Shinu', 1000, '2021-10-19 05:54:54'),
(12, 'nitish malviya', 'Naksh', 800, '2021-10-19 05:58:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `createusers`
--
ALTER TABLE `createusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `createusers`
--
ALTER TABLE `createusers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
