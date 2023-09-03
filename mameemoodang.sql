-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 03, 2023 at 07:44 AM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mameemoodang`
--
CREATE DATABASE IF NOT EXISTS `mameemoodang` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mameemoodang`;

-- --------------------------------------------------------

--
-- Table structure for table `log_student`
--

DROP TABLE IF EXISTS `log_student`;
CREATE TABLE `log_student` (
  `id` int(11) NOT NULL,
  `id_student` varchar(5) NOT NULL,
  `title_name` varchar(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `class` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `sara` varchar(50) NOT NULL,
  `id_subject` varchar(10) NOT NULL,
  `name_subject` varchar(50) NOT NULL,
  `credit` float NOT NULL,
  `score_before` float NOT NULL,
  `score_after` float NOT NULL,
  `grade_before` varchar(10) NOT NULL,
  `grade_after` varchar(10) NOT NULL,
  `id_teacher` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `log_student`
--

INSERT INTO `log_student` (`id`, `id_student`, `title_name`, `first_name`, `last_name`, `class`, `year`, `sara`, `id_subject`, `name_subject`, `credit`, `score_before`, `score_after`, `grade_before`, `grade_after`, `id_teacher`, `status`, `time`) VALUES
(2, '14506', 'เด็กหญิง', 'มาลัย', 'พวงหทัย', '1/4', '1/2566', 'ภาษาต่างประเทศ', 'อ11201', 'อังกฤษ 1', 1.5, 34.5, 54, '0', '1', 1, 'แก้ไขแล้ว', '2023-09-03 05:44:47'),
(3, '11342', 'นางสาว', 'พิมพิลาไลย', 'มณีบุตรสาราคราม', '2/5', '1/2565', 'วิทยาศาสตร์และเทคโนโลยี', 'ว21201', 'วิทยาศาสตร์ 3', 1, 56, 56, 'ร', '0', 1, 'กำลังแก้ไข', '2023-09-03 04:27:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `title_name` varchar(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `title_name`, `first_name`, `last_name`, `username`, `password`, `role`) VALUES
(1, 'นางสาว', 'ณัฐรวิภา', 'วิลิมพชพรกุล', 'inttharmy', '123456', 'teacher'),
(2, 'นาย', 'กิตติพงษ์', 'สรรญานุสิริ', 'kitti', '123456', 'teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_student`
--
ALTER TABLE `log_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_student`
--
ALTER TABLE `log_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
