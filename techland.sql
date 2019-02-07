-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 07, 2019 at 04:49 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techland`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `Answer_id` int(11) NOT NULL,
  `Question_id` varchar(255) NOT NULL,
  `Answer_details` text NOT NULL,
  `User_uid` varchar(255) NOT NULL,
  `Time_answered` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`Answer_id`, `Question_id`, `Answer_details`, `User_uid`, `Time_answered`) VALUES
(1, '2', 'Thats awesome!', '4', '2019-02-07 16:00:00'),
(2, '2', ' dkndjn fsk, ndfjk skjdbjks fjnsjdf kjsr gj.sfis fglknslg nlfsnf ngsnjf ljfls fjvb jkdjkf jfbv fgj sdnj bgfj j jdslfjn lsfn l ndlfndlfnlf fjn lhfl jf ldf ldnfl', '2', '2019-02-01 03:26:00');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Technology'),
(2, 'Politics'),
(3, 'Career'),
(4, 'Entertainment'),
(5, 'Health'),
(6, 'Family'),
(7, 'Investment'),
(8, 'Food');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `Question_id` varchar(255) NOT NULL,
  `Answer_id` varchar(255) NOT NULL,
  `User_uid` varchar(255) NOT NULL,
  `Deleted` enum('false','true') NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `Question_id` int(11) NOT NULL,
  `Question_category` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `Question_details` text NOT NULL,
  `User_uid` varchar(255) NOT NULL,
  `Date_asked` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`Question_id`, `Question_category`, `title`, `Question_details`, `User_uid`, `Date_asked`) VALUES
(1, '1', 'Awabike Launches First bike sharing scheme in Nigeria ', '', '4', '2019-02-04 00:00:00'),
(2, '1', 'New brain technology', '\r\nA new technology that could help humans train their brain on what kind of information you want it to hold and for how long has been developed. According to wikileaks, the technology has been in development since early 2016 and is now ready to be launched with a sneak peek provided. See images below', '4', '2019-02-01 00:00:00'),
(3, '3', 'Revealed!!! How Buhari won the election', 'Buhari flawlessly defeated Atiku in the 2019 Presidential elections. According to sources, we were told that the international community played a major role in bringing back the incumbent President', '2', '2019-02-07 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first` varchar(255) NOT NULL,
  `user_last` varchar(255) NOT NULL,
  `user_uid` varchar(255) NOT NULL,
  `user_pwd` varchar(255) NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_uid`, `user_pwd`, `created_by`, `user_email`) VALUES
(1, 'Stephen', 'Abimbola', 'mcsteve7', '$2y$10$38twEOs7UdQigODTgz977ecJWRDiZnaRZtN.cQ.6mgQUend2vEt0m', NULL, 'nicky2steve@gmail.com'),
(2, 'Victor', 'Olure', 'Vic223', '$2y$10$t8oKxPMKCj/HaksV/Prtqe8hmMt/1FtaY1JNNdvoFc2TGXWiQQOJu', NULL, 'Vico@gmail.com'),
(3, 'Femi', 'Oluwaniran', 'phemi', '$2y$10$8CusBHT1efZ2uOUhoRdBVOHVpE7PhDDE./X0zI99l9poPccEfYMJK', NULL, 'femi@gmail.com'),
(4, 'Femi', 'Oluwaniran', 'phemi2', '$2y$10$844E1MOwQj.trxEzf6fYN.1epUfqUsJiUTr3yfm2h.HdROjcqBCla', NULL, 'methodmain@yahoo.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`Answer_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`Question_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `Answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `Question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
