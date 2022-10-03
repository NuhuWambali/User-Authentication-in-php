-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2022 at 10:04 PM
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
-- Database: `appno1`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `role` enum('admin','student') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `password`, `phone`, `gender`, `role`) VALUES
('aisha ramadhani', 'aisha@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 765143288, 'female', 'student'),
('alice', 'alice@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 2147483647, 'female', 'student'),
('anna bakari', 'annaBakari@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 715349876, 'female', 'admin'),
('james bond', 'jamesb@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 2147483647, 'male', 'admin'),
('juma abdallah', 'jumaabdallah@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 2147483647, 'male', 'admin'),
('nuhu wambali', 'wambalinuhu@gamil.com', '81dc9bdb52d04dc20036dbd8313ed055', 2147483647, 'male', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
