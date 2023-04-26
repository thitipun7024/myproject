-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 03:43 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_db_r`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL COMMENT 'รหัสผู้ดูแล',
  `admin_initail` varchar(50) NOT NULL COMMENT 'คำนำหน้า',
  `admin_name` varchar(50) NOT NULL COMMENT 'ชื่อ',
  `admin_lname` varchar(50) NOT NULL COMMENT 'นามสกุล',
  `admin_user` varchar(100) NOT NULL COMMENT 'ชื่อผู้ใช้งาน',
  `admin_pass` varchar(100) NOT NULL COMMENT 'รหัสผ่าน',
  `admin_tell` varchar(20) NOT NULL COMMENT 'เบอร์โทร',
  `admin_email` varchar(100) NOT NULL COMMENT 'อีเมลล์',
  `datesave` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'วันเวลาที่เพิ่มข้อมูล'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_initail`, `admin_name`, `admin_lname`, `admin_user`, `admin_pass`, `admin_tell`, `admin_email`, `datesave`) VALUES
(1, 'นาย', 'ช่าง', 'คนที่ 1', '1', '1', '099999999', 'ab@ab.com', '2018-08-17 11:26:10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_devices`
--

CREATE TABLE `tbl_devices` (
  `der_id` int(11) NOT NULL COMMENT 'รหัสเครื่อง',
  `der_name` varchar(100) NOT NULL COMMENT 'ชื่ออุปกรณ์',
  `datesave` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'วันเวลาที่เพิ่มข้อมูล'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_devices`
--

INSERT INTO `tbl_devices` (`der_id`, `der_name`, `datesave`) VALUES
(1, 'Computer Pc', '2018-08-17 11:28:36'),
(2, 'Notebook', '2018-08-17 11:28:44'),
(3, 'Printer', '2018-08-17 11:28:50'),
(4, 'Projector', '2018-08-17 15:42:35'),
(5, 'Mic', '2019-02-04 08:39:31'),
(6, 'Network', '2020-09-09 17:16:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_device_case`
--

CREATE TABLE `tbl_device_case` (
  `pd_number` int(4) UNSIGNED ZEROFILL NOT NULL COMMENT 'เลขที่แจ้งปัญหา',
  `der_id` int(11) NOT NULL COMMENT 'รหัสเครื่อง',
  `der_name` varchar(50) NOT NULL COMMENT 'ชื่ออุปกรณ์',
  `pd_detail` varchar(50) NOT NULL COMMENT 'รายละเอียดการแจ้ง',
  `pd_date` date NOT NULL COMMENT 'วันที่',
  `pd_intail` varchar(10) NOT NULL COMMENT 'คำนำหน้า',
  `pd_name` varchar(50) NOT NULL COMMENT 'ชื่อ',
  `pd_lname` varchar(50) NOT NULL COMMENT 'นามสกุล',
  `pd_position` varchar(50) NOT NULL COMMENT 'ตำแหน่ง',
  `pd_tell` varchar(10) NOT NULL COMMENT 'เบอร์โทร',
  `pd_email` varchar(100) NOT NULL COMMENT 'อีเมลล์',
  `st_id` int(11) NOT NULL,
  `datesave` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'วันเวลาที่เพิ่มข้อมูล'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_device_case`
--

INSERT INTO `tbl_device_case` (`pd_number`, `der_id`, `der_name`, `pd_detail`, `pd_date`, `pd_intail`, `pd_name`, `pd_lname`, `pd_position`, `pd_tell`, `pd_email`, `st_id`, `datesave`) VALUES
(0001, 2, 'Notebook', 'แรมเสีย', '2022-12-15', 'นาย', 'user', 'user', 'อาจารย์', '0123654987', 'user@gmail.com', 3, '2022-12-15 02:40:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_report`
--

CREATE TABLE `tbl_report` (
  `rr_id` int(11) NOT NULL COMMENT 'เลขที่รายละเอียดการซ่อม',
  `der_id` int(11) NOT NULL COMMENT 'รหัสครุภัณฑ์',
  `der_name` varchar(50) NOT NULL COMMENT 'ชื่อ',
  `pd_number` int(4) UNSIGNED ZEROFILL NOT NULL COMMENT 'เลขที่การแจ้งปัญหา',
  `pd_detail` varchar(50) NOT NULL COMMENT 'รายละเอียดการแจ้ง',
  `rr_date` date NOT NULL COMMENT 'วันที่',
  `rr_datel` date DEFAULT NULL COMMENT 'วันที่ซ่อม',
  `admin_id` int(11) DEFAULT NULL COMMENT 'รหัสเจ้าหน้าที่',
  `rr_repain_detial` text DEFAULT NULL,
  `datesave` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'วันเวลาที่เพิ่มข้อมูล'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_report`
--

INSERT INTO `tbl_report` (`rr_id`, `der_id`, `der_name`, `pd_number`, `pd_detail`, `rr_date`, `rr_datel`, `admin_id`, `rr_repain_detial`, `datesave`) VALUES
(6, 2, 'Notebook', 0001, 'แรมเสีย', '2022-12-15', '2022-12-15', 1, 'user', '2022-12-15 02:41:46');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `st_id` int(11) NOT NULL,
  `st_name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`st_id`, `st_name`) VALUES
(1, 'รอดำเนินการ'),
(2, 'กำลังซ่อม'),
(3, 'เสร็จสิ้น'),
(4, 'ยกเลิก');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_devices`
--
ALTER TABLE `tbl_devices`
  ADD PRIMARY KEY (`der_id`);

--
-- Indexes for table `tbl_device_case`
--
ALTER TABLE `tbl_device_case`
  ADD PRIMARY KEY (`pd_number`),
  ADD KEY `der_id` (`der_id`);

--
-- Indexes for table `tbl_report`
--
ALTER TABLE `tbl_report`
  ADD PRIMARY KEY (`rr_id`),
  ADD KEY `der_id` (`der_id`,`pd_number`,`admin_id`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`st_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสผู้ดูแล', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_devices`
--
ALTER TABLE `tbl_devices`
  MODIFY `der_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสเครื่อง', AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_device_case`
--
ALTER TABLE `tbl_device_case`
  MODIFY `pd_number` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'เลขที่แจ้งปัญหา', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_report`
--
ALTER TABLE `tbl_report`
  MODIFY `rr_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'เลขที่รายละเอียดการซ่อม', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
