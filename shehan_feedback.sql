-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Mar 06, 2023 at 09:25 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `team13`
--

-- --------------------------------------------------------

--
-- Table structure for table `shehan_feedback`
--

CREATE TABLE `shehan_feedback` (
  `fname` varchar(60) NOT NULL,
  `lname` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` varchar(60) NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `shehan_feedback`
--

INSERT INTO `shehan_feedback` (`fname`, `lname`, `email`, `feedback`, `date`, `id`) VALUES
('Shehan', 'Senanayake', 'shehanms2@gmail.com', 'aaaaaaaaaaaaaaaaaaa', '2023-03-02', 1),
('Shehan', 'Senanayake', 'shehanms2@gmail.com', 'aaaaaaaaaaaaaaaaaaa', '2023-03-02', 2),
('Shehan', 'Senanayake', 'shehanms2@gmail.com', 'hgkjhhgkhgjhhggh', '2023-03-02', 3),
('Shehan', 'rthhrt', 'shehanms2@gmail.com', '', '2023-03-04', 8),
('Shehan', 'Senanayake', 'shehanms2@gmailcom', 'ghrhjtety rthrtg rt t', '2023-03-04', 36),
('Shehan', 'Senanayake', 'shehanms2@gmailom', 'ghn rthrtth rtr', '2023-03-04', 37),
('                ', 'Senanayake', 'shehanms2@gmail.com', 'fghtr hrttyrttyr ty', '2023-03-04', 38),
('Shehan', 'Senanayake', 'shehanms2@gmail.com', 'errbt4 ertt ', '2023-03-04', 39),
('Kushani', 'ljksdflkjfd', 'shehanms2@gmail.com', 'lkdoifeoijefwipfepijeipj', '2023-03-06', 40);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shehan_feedback`
--
ALTER TABLE `shehan_feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shehan_feedback`
--
ALTER TABLE `shehan_feedback`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
