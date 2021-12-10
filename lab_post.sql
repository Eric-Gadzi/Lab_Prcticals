-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 03:15 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab_post`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` longtext NOT NULL,
  `created_at` datetime 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created_at`) VALUES
(15, 'First blog Post', ' But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? ', '2021-10-29 08:36:19'),
(23, 'trial title', 'this is to test if my code is running', '2021-11-05 18:29:08'),
(31, 'title', 'hello world', '2021-10-29 11:08:53'),
(32, 'title', 'hello world', '2021-10-29 11:10:33');

-- --------------------------------------------------------

--
-- Table structure for table `practical_lab_table`
--

CREATE TABLE `practical_lab_table` (
  `Lab_id` int(11) NOT NULL COMMENT 'AUTO_INCREMENT',
  `Search_item` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `practical_lab_table`
--

INSERT INTO `practical_lab_table` (`Lab_id`, `Search_item`) VALUES
(26, 'I HAVE UPDATED 26 NOW'),
(46, 'erer'),
(47, 'erer'),
(48, 'KNGG'),
(49, 'KNGG'),
(50, 'KNGG'),
(51, 'fun'),
(52, 'nblkn'),
(53, 'll'),
(54, 'mnbvcxz'),
(55, 'k'),
(56, 'j'),
(57, '12345678'),
(58, 'this is going to be awesome'),
(59, '123'),
(60, '12345'),
(61, '1234567a'),
(62, '12345678'),
(63, '1234567q'),
(64, '1234567r'),
(65, '12345678'),
(66, '123456789'),
(67, '123456789a');

-- --------------------------------------------------------

--
-- Table structure for table `practical_upload_lab`
--

CREATE TABLE `practical_upload_lab` (
  `Lab_id` int(11) NOT NULL COMMENT 'AUTO_INCREMENT',
  `User_image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `practical_upload_lab`
--

INSERT INTO `practical_upload_lab` (`Lab_id`, `User_image`) VALUES
(10, 'images/WhatsApp Image 2021-09-26 at 15.18.21 (5).j'),
(11, 'images/WhatsApp Image 2021-09-26 at 15.18.20.jpeg'),
(12, 'images/WhatsApp Image 2021-09-26 at 15.18.21 (2).j'),
(13, 'images/WhatsApp Image 2021-09-26 at 15.18.21 (4).j'),
(14, 'images/WhatsApp Image 2021-09-26 at 15.18.21 (3).j'),
(15, 'images/Screenshot (77).png'),
(16, 'images/Screenshot (6).png'),
(17, 'images/Screenshot (18).png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `practical_lab_table`
--
ALTER TABLE `practical_lab_table`
  ADD PRIMARY KEY (`Lab_id`);

--
-- Indexes for table `practical_upload_lab`
--
ALTER TABLE `practical_upload_lab`
  ADD PRIMARY KEY (`Lab_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `practical_lab_table`
--
ALTER TABLE `practical_lab_table`
  MODIFY `Lab_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'AUTO_INCREMENT', AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `practical_upload_lab`
--
ALTER TABLE `practical_upload_lab`
  MODIFY `Lab_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'AUTO_INCREMENT', AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
