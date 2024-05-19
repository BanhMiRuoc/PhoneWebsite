-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2024 at 06:43 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cuoiky`
--

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `makhachhang` varchar(30) NOT NULL,
  `hoten` text DEFAULT NULL,
  `diachi` text DEFAULT NULL,
  `sodienthoai` varchar(10) DEFAULT NULL,
  `tentk` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`makhachhang`, `hoten`, `diachi`, `sodienthoai`, `tentk`) VALUES
('KH000001', 'Đoàn Thống Lĩnh', 'TP Hồ Chí Minh', '0989353850', '0989353850');

--
-- Triggers `khachhang`
--
DELIMITER $$
CREATE TRIGGER `trigger_auto_generate_makhachhang` BEFORE INSERT ON `khachhang` FOR EACH ROW BEGIN
    UPDATE Sequence SET last_id = last_id + 1 WHERE table_name = 'Khachhang';
    SET NEW.makhachhang = CONCAT('KH', LPAD((SELECT last_id FROM Sequence WHERE table_name = 'Khachhang'), 6, '0'));
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makhachhang`),
  ADD KEY `tentk` (`tentk`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `khachhang_ibfk_1` FOREIGN KEY (`tentk`) REFERENCES `taikhoan` (`tentk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
