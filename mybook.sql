-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2017 at 12:11 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mybook`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_fname` varchar(200) NOT NULL,
  `admin_lname` varchar(200) NOT NULL,
  `admin_tel` varchar(50) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_fname`, `admin_lname`, `admin_tel`, `admin_username`, `admin_password`) VALUES
(1, 'admin', 'admin', '0000000000', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(200) NOT NULL,
  `book_code` varchar(10) NOT NULL,
  `shelf_id` int(11) NOT NULL,
  `book_publisher` varchar(200) NOT NULL,
  `category_id` int(11) NOT NULL,
  `book_author` varchar(200) NOT NULL,
  `book_detail` text NOT NULL,
  `book_show` tinyint(1) NOT NULL DEFAULT '0',
  `book_date` datetime NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_name`, `book_code`, `shelf_id`, `book_publisher`, `category_id`, `book_author`, `book_detail`, `book_show`, `book_date`, `member_id`) VALUES
(1, 'A', 'A01', 2, 'Publish100000', 2, 'aaasd Auyhor000000FFFFF', '<p>AAA55555555555555</p>\r\n', 0, '2017-11-06 20:39:28', 5),
(2, 'D', 'D', 1, 'D', 2, 'D', '<p>D</p>\r\n', 0, '2017-11-06 20:39:28', 5),
(3, 'TRIANGLE', 'A002', 1, 'APu', 3, 'Wiliam', '<p>Triangle is scary</p>\r\n', 0, '2017-11-06 20:39:28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `book_like`
--

CREATE TABLE `book_like` (
  `book_like_id` int(11) NOT NULL,
  `book_like_score` int(2) NOT NULL DEFAULT '0',
  `book_like_comment` varchar(5000) NOT NULL,
  `member_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `book_page`
--

CREATE TABLE `book_page` (
  `book_page_id` int(11) NOT NULL,
  `book_page_order` int(11) NOT NULL DEFAULT '0',
  `book_page_detail` text NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book_page`
--

INSERT INTO `book_page` (`book_page_id`, `book_page_order`, `book_page_detail`, `book_id`) VALUES
(2, 1, '<p>22222222222222</p>\r\n', 2),
(3, 2, '<p>asdasdasdasd</p>\r\n', 2);

-- --------------------------------------------------------

--
-- Table structure for table `book_read`
--

CREATE TABLE `book_read` (
  `book_read_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book_read`
--

INSERT INTO `book_read` (`book_read_id`, `book_id`, `member_id`) VALUES
(1, 5, 5),
(2, 0, 5),
(3, 1, 5),
(4, 1, 5),
(5, 1, 5),
(6, 1, 5),
(7, 1, 5),
(8, 1, 5),
(9, 1, 5),
(10, 2, 5),
(11, 2, 5),
(12, 2, 5),
(13, 1, 0),
(14, 0, 0),
(15, 1, 0),
(16, 2, 4),
(17, 2, 4),
(18, 2, 4),
(19, 2, 4),
(20, 2, 4),
(21, 2, 4),
(22, 2, 4),
(23, 2, 4),
(24, 2, 4),
(25, 2, 4),
(26, 1, 4),
(27, 1, 4),
(28, 2, 4),
(29, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `book_read_later`
--

CREATE TABLE `book_read_later` (
  `book_read_later_id` int(11) NOT NULL,
  `book_read_later_status` int(11) NOT NULL DEFAULT '0',
  `book_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book_read_later`
--

INSERT INTO `book_read_later` (`book_read_later_id`, `book_read_later_status`, `book_id`, `member_id`) VALUES
(5, 1, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(2, 'Computer'),
(3, 'Discovery');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `likes_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `likes_score` int(11) NOT NULL,
  `likes_comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `member_fname` varchar(200) NOT NULL,
  `member_lname` varchar(200) NOT NULL,
  `member_address` varchar(500) NOT NULL,
  `member_regdate` datetime NOT NULL,
  `member_tel` varchar(50) NOT NULL,
  `member_username` varchar(200) NOT NULL,
  `member_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `member_fname`, `member_lname`, `member_address`, `member_regdate`, `member_tel`, `member_username`, `member_password`) VALUES
(1, 'TNAME', 'TNAME', '000', '0000-00-00 00:00:00', '08000', '1', '1'),
(3, 'HH', 'HH', 'HH', '2017-10-09 09:35:14', 'HH', 'HH', 'HH'),
(4, 'AAAAAAAA', 'AA', 'AAaaaa', '2017-10-09 14:36:26', 'AA0', 'AA', 'AA'),
(5, 'aDDD', 'aDD', 'aDD', '2017-11-05 22:59:11', 'aDD', 'aDD', 'aaaa');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `setting_id` int(11) NOT NULL,
  `setting_home` mediumtext NOT NULL,
  `setting_contact` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`setting_id`, `setting_home`, `setting_contact`) VALUES
(1, '<p>01111111111111</p>\r\n', '<p>0222222222222</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `shelf`
--

CREATE TABLE `shelf` (
  `shelf_id` int(11) NOT NULL,
  `shelf_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shelf`
--

INSERT INTO `shelf` (`shelf_id`, `shelf_name`) VALUES
(1, 'A'),
(2, 'B');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `book_like`
--
ALTER TABLE `book_like`
  ADD PRIMARY KEY (`book_like_id`);

--
-- Indexes for table `book_page`
--
ALTER TABLE `book_page`
  ADD PRIMARY KEY (`book_page_id`);

--
-- Indexes for table `book_read`
--
ALTER TABLE `book_read`
  ADD PRIMARY KEY (`book_read_id`);

--
-- Indexes for table `book_read_later`
--
ALTER TABLE `book_read_later`
  ADD PRIMARY KEY (`book_read_later_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`likes_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`setting_id`);

--
-- Indexes for table `shelf`
--
ALTER TABLE `shelf`
  ADD PRIMARY KEY (`shelf_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `book_like`
--
ALTER TABLE `book_like`
  MODIFY `book_like_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `book_page`
--
ALTER TABLE `book_page`
  MODIFY `book_page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `book_read`
--
ALTER TABLE `book_read`
  MODIFY `book_read_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `book_read_later`
--
ALTER TABLE `book_read_later`
  MODIFY `book_read_later_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `likes_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `shelf`
--
ALTER TABLE `shelf`
  MODIFY `shelf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
