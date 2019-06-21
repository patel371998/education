-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2019 at 04:49 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `education`
--

-- --------------------------------------------------------

--
-- Table structure for table `noticemsg`
--

CREATE TABLE `noticemsg` (
  `id` int(11) NOT NULL,
  `position` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `email` varchar(30) COLLATE latin1_bin NOT NULL,
  `password` varchar(10) COLLATE latin1_bin NOT NULL,
  `first_name` varchar(10) COLLATE latin1_bin NOT NULL,
  `last_name` varchar(10) COLLATE latin1_bin NOT NULL,
  `mobile` int(12) NOT NULL,
  `address` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `first_name`, `last_name`, `mobile`, `address`) VALUES
(1, 'patel371998m@gmail.com', '371998', 'rahul', 'patel', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_gallery`
--

CREATE TABLE `user_gallery` (
  `user_id` varchar(10) COLLATE latin1_bin NOT NULL,
  `image_title` varchar(30) COLLATE latin1_bin NOT NULL,
  `image_description` varchar(30) COLLATE latin1_bin NOT NULL,
  `image_name` varchar(30) COLLATE latin1_bin NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `user_gallery`
--

INSERT INTO `user_gallery` (`user_id`, `image_title`, `image_description`, `image_name`, `id`) VALUES
('1', '', '', '', 0),
('1', '', '', '', 0),
('1', '', '', '', 0),
('1', '', '', '', 0),
('1', '', '', '', 0),
('1', '', '', '', 0),
('1', '', '', 'notice1.jpg', 0),
('1', 'notice 1', '', 'notice1.jpg', 0),
('1', '', '', 'notice2.jpg', 0),
('1', '', '', 'notice2.jpg', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
