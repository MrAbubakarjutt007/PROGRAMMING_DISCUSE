-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2022 at 09:52 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foram`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `admin_pass` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `admin_dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_username`, `admin_email`, `address`, `admin_pass`, `status`, `admin_dt`) VALUES
(68, 'Usman', 'a', 'a@a.a', '98 Jb', 'a', 1, '2022-06-09 17:45:34'),
(69, 'b ', 'b', 'b@b.com', '98 Jb', 'b', 1, '2022-06-13 11:09:49');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categories_id` int(11) NOT NULL,
  `categories_name` text NOT NULL,
  `categories_details` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categories_id`, `categories_name`, `categories_details`, `status`, `date_time`) VALUES
(1, 'Java', 'Java is a high-level, class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible.', 1, '2021-10-09 19:53:05'),
(2, 'PHP', 'PHP is a general-purpose scripting language geared towards web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994. The PHP reference implementation is now produced by The PHP Group.', 1, '2021-10-09 19:55:12'),
(3, 'Javascripts', 'it is scripting language', 1, '2022-06-10 13:48:19');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_details` text NOT NULL,
  `comment_by` text NOT NULL,
  `thread_id` int(11) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_details`, `comment_by`, `thread_id`, `user_name`, `datetime`) VALUES
(8, 'ewfef3r', '', 45, '', '2021-10-16 16:41:40'),
(9, 'fbetwrbernj5n', '', 45, '', '2021-10-16 16:41:51'),
(10, 'dvf\r\n', '', 45, '', '2021-10-16 18:00:40'),
(11, 'ok ', '', 46, '', '2021-12-27 22:57:25'),
(12, 'ok', '', 46, '', '2021-12-27 22:57:32'),
(13, 'ok', '', 55, '', '2022-06-07 17:53:29'),
(14, 'ok', '', 55, '', '2022-06-07 19:33:09'),
(15, 'java is \r\n', '', 56, '', '2022-06-12 16:33:46'),
(16, 'Java is a general-purpose programming language that is class-based and object-oriented. The programming language is structured in such a way that developers can write code anywhere and run it anywhere without worrying about the underlying computer architecture. It is also referred to as write once, run anywhere (WORA)', '', 75, '', '2022-07-05 10:48:39'),
(17, 'According to the Java platform official website, the main difference between Java and JavaScript is that Java is an OOP programming language while JavaScript is an OOP programming script. JavaScript code is written completely in text and need only be interpreted. Java, on the other hand, must be compiled.', '', 76, '', '2022-07-05 10:51:03');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Contact-id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT 0,
  `dt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Contact-id`, `name`, `email`, `subject`, `message`, `Status`, `dt`) VALUES
(1, 'Usman', 'usmanseo61@gmail.com', 'Zero To Hero', 'Zero To Hero', 0, '2022-06-07 04:40:40'),
(2, 'Usman', 'usmanseo61@gmail.com', 'Zero To Hero', 'Zero To Hero', 0, '2022-06-08 04:40:46'),
(3, 'Usman', 'usmanseo61@gmail.com', 'Zero To Hero', 'Zero To Hero', 1, '0000-00-00 00:00:00'),
(4, 'Usman', 'usmanseo61@gmail.com', 'Zero To Hero', 'Zero To Hero', 1, '0000-00-00 00:00:00'),
(5, 'Usman', 'usmanseo61@gmail.com', 'Zero To Hero', 'Zero To Hero', 1, '0000-00-00 00:00:00'),
(6, 'Usman', 'usmanseo61@gmail.com', 'Zero To Hero', 'Zero To Hero', 1, '0000-00-00 00:00:00'),
(7, 'Usman', 'usmanseo61@gmail.com', 'Zero To Hero', 'Zero To Hero', 1, '0000-00-00 00:00:00'),
(8, 'Usman', 'usmanseo61@gmail.com', 'Zero To Hero', 'Zero To Hero', 1, '0000-00-00 00:00:00'),
(9, 'Usman', 'usmanseo61@gmail.com', 'Zero To Hero', 'Zero To Hero', 1, '0000-00-00 00:00:00'),
(10, 'Usman', 'usmanseo61@gmail.com', 'Professional guest post service', 'Professional guest post service', 1, '0000-00-00 00:00:00'),
(11, 'Usman', 'usmanseo61@gmail.com', 'Professional guest post service', 'Professional guest post service', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `thread_id` int(11) NOT NULL,
  `thread_tittle` text NOT NULL,
  `thread_details` text NOT NULL,
  `thread_cat_id` int(11) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`thread_id`, `thread_tittle`, `thread_details`, `thread_cat_id`, `user_name`, `datetime`) VALUES
(75, 'what is javascript', 'Java is a high-level, class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible.\r\nExplain it plzzzz\r\n', 1, 'a', '2022-07-05 10:46:46'),
(76, 'JAVA vs  javascript', 'explain it plzzz\r\n', 1, 'Usman', '2022-07-05 10:50:14');

-- --------------------------------------------------------

--
-- Table structure for table `users_data`
--

CREATE TABLE `users_data` (
  `User_id` int(11) NOT NULL,
  `User_email` varchar(40) NOT NULL,
  `User_name` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `User_pass` varchar(24) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `Register_Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_data`
--

INSERT INTO `users_data` (`User_id`, `User_email`, `User_name`, `address`, `User_pass`, `status`, `Register_Time`) VALUES
(18, 'a@a.a', 'a', '', 'a', 0, '2022-06-15 21:27:56'),
(19, 'usmanseo61@gmail.com', 'Usman', '', 'usman', 0, '2022-07-05 10:56:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_username` (`admin_username`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Contact-id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`thread_id`),
  ADD KEY `thread_cat_id` (`thread_cat_id`);

--
-- Indexes for table `users_data`
--
ALTER TABLE `users_data`
  ADD PRIMARY KEY (`User_id`),
  ADD UNIQUE KEY `User_email` (`User_email`),
  ADD UNIQUE KEY `User_email_2` (`User_email`),
  ADD UNIQUE KEY `User_name` (`User_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Contact-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `thread_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `users_data`
--
ALTER TABLE `users_data`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
