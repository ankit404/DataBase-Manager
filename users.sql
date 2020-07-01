-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2020 at 07:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mywebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `firstname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `date`) VALUES
(2, 'ankit', 'rai', 'ankit@rai.com', '2020-06-28 15:07:01'),
(3, 'ankita', 'rai', 'ankita@com', '2020-06-28 15:20:09'),
(4, 'anki', 'kumar', 'an@k.com', '2020-06-28 15:58:07'),
(5, 'rahul', 'singh', 'rahul@cmom', '2020-06-29 06:52:13'),
(7, 'hello', 'you', 'helloyou@gmail.com', '2020-06-30 02:40:46'),
(8, 'quinta', 'cool', 'quintacool@ty.com', '2020-06-30 10:04:08'),
(9, 'qwerty', 'qwerty', 'qwer@ty.com', '2020-06-30 10:05:44'),
(10, 'qwerty', 'qwerty', 'qwer@ty.com', '2020-06-30 10:06:04'),
(11, 'qwerty', 'qwerty', 'qwer@ty.com', '2020-06-30 10:06:04'),
(12, 'qwerty43', 'qwerty', 'qwer@ty.com', '2020-06-30 10:09:51'),
(13, 'qwerty43', 'qwerty', 'qwer@ty.com', '2020-06-30 10:09:51'),
(14, 'ankit', 'rai', 'ankitraiiv@gmail.com', '2020-06-30 10:19:33'),
(15, 'kiki', 'jit1123', 'nicj@jit.com', '2020-06-30 10:55:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
