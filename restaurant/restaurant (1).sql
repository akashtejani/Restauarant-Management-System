-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2022 at 05:21 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_name` varchar(30) NOT NULL,
  `category_no` int(11) NOT NULL,
  `available` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_no` int(5) NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `cat_no` int(5) NOT NULL,
  `price` int(5) NOT NULL,
  `available` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ordermethod`
--

CREATE TABLE `ordermethod` (
  `table_no` varchar(30) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordermethod`
--

INSERT INTO `ordermethod` (`table_no`, `name`) VALUES
('table01', 'akash'),
('table02', NULL),
('table03', NULL),
('table04', NULL),
('table05', NULL),
('table06', NULL),
('table07', NULL),
('table08', NULL),
('table09', NULL),
('table10', NULL),
('parsal02', NULL),
('parsal03', NULL),
('parsal04', NULL),
('parsal05', NULL),
('parsal06', NULL),
('parsal07', NULL),
('parsal08', NULL),
('parsal09', NULL),
('parsal10', NULL),
('parsal11', NULL),
('parsal12', NULL),
('parsal13', NULL),
('parsal14', NULL),
('parsal01', NULL),
('parsal15', NULL),
('table10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `parsal01`
--

CREATE TABLE `parsal01` (
  `item_no` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parsal02`
--

CREATE TABLE `parsal02` (
  `item_no` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parsal03`
--

CREATE TABLE `parsal03` (
  `item_no` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parsal04`
--

CREATE TABLE `parsal04` (
  `item_no` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parsal05`
--

CREATE TABLE `parsal05` (
  `item_no` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parsal06`
--

CREATE TABLE `parsal06` (
  `item_no` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parsal07`
--

CREATE TABLE `parsal07` (
  `item_no` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parsal08`
--

CREATE TABLE `parsal08` (
  `item_no` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parsal09`
--

CREATE TABLE `parsal09` (
  `item_no` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parsal10`
--

CREATE TABLE `parsal10` (
  `item_no` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parsal11`
--

CREATE TABLE `parsal11` (
  `item_no` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parsal12`
--

CREATE TABLE `parsal12` (
  `item_no` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parsal13`
--

CREATE TABLE `parsal13` (
  `item_no` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parsal14`
--

CREATE TABLE `parsal14` (
  `item_no` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parsal15`
--

CREATE TABLE `parsal15` (
  `item_no` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table01`
--

CREATE TABLE `table01` (
  `item_no` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table02`
--

CREATE TABLE `table02` (
  `item_no` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table03`
--

CREATE TABLE `table03` (
  `item_no` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table04`
--

CREATE TABLE `table04` (
  `item_no` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table05`
--

CREATE TABLE `table05` (
  `item_no` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table06`
--

CREATE TABLE `table06` (
  `item_no` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table07`
--

CREATE TABLE `table07` (
  `item_no` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table08`
--

CREATE TABLE `table08` (
  `item_no` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table09`
--

CREATE TABLE `table09` (
  `item_no` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table10`
--

CREATE TABLE `table10` (
  `item_no` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `waiting`
--

CREATE TABLE `waiting` (
  `no` int(11) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `name` varchar(50) NOT NULL,
  `person` int(3) NOT NULL,
  `type` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_no`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_no`),
  ADD KEY `cat_no` (`cat_no`);

--
-- Indexes for table `parsal01`
--
ALTER TABLE `parsal01`
  ADD KEY `item_no` (`item_no`);

--
-- Indexes for table `parsal02`
--
ALTER TABLE `parsal02`
  ADD KEY `item_no` (`item_no`);

--
-- Indexes for table `parsal03`
--
ALTER TABLE `parsal03`
  ADD KEY `item_no` (`item_no`);

--
-- Indexes for table `parsal04`
--
ALTER TABLE `parsal04`
  ADD KEY `item_no` (`item_no`);

--
-- Indexes for table `parsal05`
--
ALTER TABLE `parsal05`
  ADD KEY `item_no` (`item_no`);

--
-- Indexes for table `parsal06`
--
ALTER TABLE `parsal06`
  ADD KEY `item_no` (`item_no`);

--
-- Indexes for table `parsal07`
--
ALTER TABLE `parsal07`
  ADD KEY `item_no` (`item_no`);

--
-- Indexes for table `parsal08`
--
ALTER TABLE `parsal08`
  ADD KEY `item_no` (`item_no`);

--
-- Indexes for table `parsal09`
--
ALTER TABLE `parsal09`
  ADD KEY `item_no` (`item_no`);

--
-- Indexes for table `parsal10`
--
ALTER TABLE `parsal10`
  ADD KEY `item_no` (`item_no`);

--
-- Indexes for table `parsal11`
--
ALTER TABLE `parsal11`
  ADD KEY `item_no` (`item_no`);

--
-- Indexes for table `parsal12`
--
ALTER TABLE `parsal12`
  ADD KEY `item_no` (`item_no`);

--
-- Indexes for table `parsal13`
--
ALTER TABLE `parsal13`
  ADD KEY `item_no` (`item_no`);

--
-- Indexes for table `parsal14`
--
ALTER TABLE `parsal14`
  ADD KEY `item_no` (`item_no`);

--
-- Indexes for table `parsal15`
--
ALTER TABLE `parsal15`
  ADD KEY `item_no` (`item_no`);

--
-- Indexes for table `table01`
--
ALTER TABLE `table01`
  ADD KEY `item_no` (`item_no`);

--
-- Indexes for table `table02`
--
ALTER TABLE `table02`
  ADD KEY `item_no` (`item_no`);

--
-- Indexes for table `table03`
--
ALTER TABLE `table03`
  ADD KEY `item_no` (`item_no`);

--
-- Indexes for table `table04`
--
ALTER TABLE `table04`
  ADD KEY `item_no` (`item_no`);

--
-- Indexes for table `table05`
--
ALTER TABLE `table05`
  ADD KEY `item_no` (`item_no`);

--
-- Indexes for table `table06`
--
ALTER TABLE `table06`
  ADD KEY `item_no` (`item_no`);

--
-- Indexes for table `table07`
--
ALTER TABLE `table07`
  ADD KEY `item_no` (`item_no`);

--
-- Indexes for table `table08`
--
ALTER TABLE `table08`
  ADD KEY `item_no` (`item_no`);

--
-- Indexes for table `table09`
--
ALTER TABLE `table09`
  ADD KEY `item_no` (`item_no`);

--
-- Indexes for table `table10`
--
ALTER TABLE `table10`
  ADD KEY `item_no` (`item_no`);

--
-- Indexes for table `waiting`
--
ALTER TABLE `waiting`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_no` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `waiting`
--
ALTER TABLE `waiting`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`cat_no`) REFERENCES `category` (`category_no`);

--
-- Constraints for table `parsal01`
--
ALTER TABLE `parsal01`
  ADD CONSTRAINT `parsal01_ibfk_1` FOREIGN KEY (`item_no`) REFERENCES `item` (`item_no`);

--
-- Constraints for table `parsal02`
--
ALTER TABLE `parsal02`
  ADD CONSTRAINT `parsal02_ibfk_1` FOREIGN KEY (`item_no`) REFERENCES `item` (`item_no`);

--
-- Constraints for table `parsal03`
--
ALTER TABLE `parsal03`
  ADD CONSTRAINT `parsal03_ibfk_1` FOREIGN KEY (`item_no`) REFERENCES `item` (`item_no`);

--
-- Constraints for table `parsal04`
--
ALTER TABLE `parsal04`
  ADD CONSTRAINT `parsal04_ibfk_1` FOREIGN KEY (`item_no`) REFERENCES `item` (`item_no`);

--
-- Constraints for table `parsal05`
--
ALTER TABLE `parsal05`
  ADD CONSTRAINT `parsal05_ibfk_1` FOREIGN KEY (`item_no`) REFERENCES `item` (`item_no`);

--
-- Constraints for table `parsal06`
--
ALTER TABLE `parsal06`
  ADD CONSTRAINT `parsal06_ibfk_1` FOREIGN KEY (`item_no`) REFERENCES `item` (`item_no`);

--
-- Constraints for table `parsal07`
--
ALTER TABLE `parsal07`
  ADD CONSTRAINT `parsal07_ibfk_1` FOREIGN KEY (`item_no`) REFERENCES `item` (`item_no`);

--
-- Constraints for table `parsal08`
--
ALTER TABLE `parsal08`
  ADD CONSTRAINT `parsal08_ibfk_1` FOREIGN KEY (`item_no`) REFERENCES `item` (`item_no`);

--
-- Constraints for table `parsal09`
--
ALTER TABLE `parsal09`
  ADD CONSTRAINT `parsal09_ibfk_1` FOREIGN KEY (`item_no`) REFERENCES `item` (`item_no`);

--
-- Constraints for table `parsal10`
--
ALTER TABLE `parsal10`
  ADD CONSTRAINT `parsal10_ibfk_1` FOREIGN KEY (`item_no`) REFERENCES `item` (`item_no`);

--
-- Constraints for table `parsal11`
--
ALTER TABLE `parsal11`
  ADD CONSTRAINT `parsal11_ibfk_1` FOREIGN KEY (`item_no`) REFERENCES `item` (`item_no`);

--
-- Constraints for table `parsal12`
--
ALTER TABLE `parsal12`
  ADD CONSTRAINT `parsal12_ibfk_1` FOREIGN KEY (`item_no`) REFERENCES `item` (`item_no`);

--
-- Constraints for table `parsal13`
--
ALTER TABLE `parsal13`
  ADD CONSTRAINT `parsal13_ibfk_1` FOREIGN KEY (`item_no`) REFERENCES `item` (`item_no`);

--
-- Constraints for table `parsal14`
--
ALTER TABLE `parsal14`
  ADD CONSTRAINT `parsal14_ibfk_1` FOREIGN KEY (`item_no`) REFERENCES `item` (`item_no`);

--
-- Constraints for table `parsal15`
--
ALTER TABLE `parsal15`
  ADD CONSTRAINT `parsal15_ibfk_1` FOREIGN KEY (`item_no`) REFERENCES `item` (`item_no`);

--
-- Constraints for table `table01`
--
ALTER TABLE `table01`
  ADD CONSTRAINT `table01_ibfk_1` FOREIGN KEY (`item_no`) REFERENCES `item` (`item_no`);

--
-- Constraints for table `table02`
--
ALTER TABLE `table02`
  ADD CONSTRAINT `table02_ibfk_1` FOREIGN KEY (`item_no`) REFERENCES `item` (`item_no`);

--
-- Constraints for table `table03`
--
ALTER TABLE `table03`
  ADD CONSTRAINT `table03_ibfk_1` FOREIGN KEY (`item_no`) REFERENCES `item` (`item_no`);

--
-- Constraints for table `table04`
--
ALTER TABLE `table04`
  ADD CONSTRAINT `table04_ibfk_1` FOREIGN KEY (`item_no`) REFERENCES `item` (`item_no`);

--
-- Constraints for table `table05`
--
ALTER TABLE `table05`
  ADD CONSTRAINT `table05_ibfk_1` FOREIGN KEY (`item_no`) REFERENCES `item` (`item_no`);

--
-- Constraints for table `table06`
--
ALTER TABLE `table06`
  ADD CONSTRAINT `table06_ibfk_1` FOREIGN KEY (`item_no`) REFERENCES `item` (`item_no`);

--
-- Constraints for table `table07`
--
ALTER TABLE `table07`
  ADD CONSTRAINT `table07_ibfk_1` FOREIGN KEY (`item_no`) REFERENCES `item` (`item_no`);

--
-- Constraints for table `table08`
--
ALTER TABLE `table08`
  ADD CONSTRAINT `table08_ibfk_1` FOREIGN KEY (`item_no`) REFERENCES `item` (`item_no`);

--
-- Constraints for table `table09`
--
ALTER TABLE `table09`
  ADD CONSTRAINT `table09_ibfk_1` FOREIGN KEY (`item_no`) REFERENCES `item` (`item_no`);

--
-- Constraints for table `table10`
--
ALTER TABLE `table10`
  ADD CONSTRAINT `table10_ibfk_1` FOREIGN KEY (`item_no`) REFERENCES `item` (`item_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
