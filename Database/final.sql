-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2021 at 03:16 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comment_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` tinyint(4) NOT NULL,
  `username` varchar(100) NOT NULL,
  `chat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `username`, `chat`) VALUES
(1, 'bulamagk', 'Hello'),
(2, 'shaphat', 'How are you'),
(3, 'bulamagk', 'fine'),
(4, 'shaphat', 'Any light'),
(5, 'Fleckingemy', 'How far'),
(6, 'bulamagk', 'Fine'),
(7, 'bulamagk', ''),
(8, 'Hemjae', ''),
(9, 'bulamagk', 'Hello bucky  roberts'),
(10, 'mrnice', 'How far bro how life na'),
(11, 'bulamagk', 'Lifes good with you around'),
(12, 'mrnice', 'Wow  so you miss me like this'),
(13, 'mrnice', 'Talk na'),
(14, 'mrnice', 'Bromie '),
(15, 'bulamagk', 'hi'),
(16, 'mrnice', 'Hey'),
(17, 'bulamagk', 'hi\r\n'),
(18, 'emmy', 'You are welcome here sir'),
(19, 'bulamagk', 'How are you'),
(20, 'emmy', ' Am good sir'),
(21, 'Dammieblaze', 'Holla! '),
(22, 'bulamagk', 'hello'),
(23, 'Musty', 'Hi everyone ðŸ‘‹'),
(24, 'bulamagk', 'Welcome'),
(25, 'bulamagk', 'Hello'),
(26, 'Okechukwu', 'Hello'),
(27, 'Jeemoh', 'hi'),
(28, 'bulamagk', 'Hello how are you');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` tinyint(4) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `photo`) VALUES
(1, 'bulamagk', '1234abcd', 'photos/bulamagk.jpg'),
(2, 'shaphat', '12345', 'photos/shaphat.jpg'),
(3, 'Fleckingemy', 'Emmanuel321', 'photos/Fleckingemy.jpg'),
(4, 'Hemjae', 'morenikeji', 'photos/Hemjae.jpg'),
(5, 'mrnice', '1234', 'photos/mrnice.jpg'),
(6, 'emmy', '1234abcd', 'photos/emmy.jpg'),
(7, 'Dammieblaze', 'Dabico96', 'photos/Dammieblaze.jpg'),
(8, 'Musty', 'Mkb000000', 'photos/Musty.jpg'),
(9, 'Nnenna', '123456', 'photos/Nnenna.jpg'),
(10, 'Megamind ', 'opha24', 'photos/Megamind .jpg'),
(11, 'Okechukwu', 'hullCITY', 'photos/Okechukwu.jpg'),
(12, 'Nderyo112', 'greatmanD1', 'photos/Nderyo112.jpg'),
(13, 'Jeemoh', 'Jeemoh#1', 'photos/Jeemoh.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
