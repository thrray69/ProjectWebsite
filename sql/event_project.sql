-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2021 at 04:25 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_std`
--

CREATE TABLE `class_std` (
  `class_id` int(255) NOT NULL,
  `class_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `class_std`
--

INSERT INTO `class_std` (`class_id`, `class_name`) VALUES
(1, 'ปวช.'),
(2, 'ปวส.');

-- --------------------------------------------------------

--
-- Table structure for table `event_db`
--

CREATE TABLE `event_db` (
  `event_id` int(100) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_location` varchar(255) NOT NULL,
  `event_date` varchar(255) NOT NULL,
  `event_time` varchar(255) NOT NULL,
  `event_event_timer` varchar(255) NOT NULL,
  `event_teacher` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `history_db`
--

CREATE TABLE `history_db` (
  `id` int(255) NOT NULL,
  `event_id` int(255) NOT NULL,
  `std_num` varchar(255) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `class` int(255) NOT NULL,
  `type` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `type_std`
--

CREATE TABLE `type_std` (
  `type_id` int(255) NOT NULL,
  `type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type_std`
--

INSERT INTO `type_std` (`type_id`, `type_name`) VALUES
(1, 'ยานยนต์'),
(2, 'เครื่องกลเรือ'),
(3, 'เครื่องมือกล'),
(4, 'โครงสร้าง'),
(5, 'ไฟฟ้ากำลัง'),
(6, 'อิเล็กทรอนิกส์'),
(7, 'ระบบโทรคมนาคม'),
(8, 'คอมพิวเตอร์ซอฟแวร์'),
(9, 'ก่อสร้าง'),
(10, 'การบัญชี'),
(11, 'การตลาด'),
(12, 'การจัดการสำนักงาน'),
(13, 'คอมพิวเตอร์ธุรกิจ'),
(14, 'อาหารและโภชนาการ'),
(15, 'การโรงแรม'),
(16, 'การท่องเที่ยว'),
(17, 'บริการบนเรือสำราญ'),
(18, 'ตัวแทนออกของ'),
(33, 'การโรงแรม'),
(34, 'การท่องเที่ยว'),
(35, 'บริการบนเรือสำราญ'),
(36, 'ตัวแทนออกของ');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(2) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_std`
--
ALTER TABLE `class_std`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `event_db`
--
ALTER TABLE `event_db`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `history_db`
--
ALTER TABLE `history_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_std`
--
ALTER TABLE `type_std`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class_std`
--
ALTER TABLE `class_std`
  MODIFY `class_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event_db`
--
ALTER TABLE `event_db`
  MODIFY `event_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `history_db`
--
ALTER TABLE `history_db`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `type_std`
--
ALTER TABLE `type_std`
  MODIFY `type_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
