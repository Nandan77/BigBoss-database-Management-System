-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2019 at 06:47 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `big`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `total_salary` (OUT `total_salary` INT)  NO SQL
SELECT SUM(salary) INTO total_salary FROM employee$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `contestent`
--

CREATE TABLE `contestent` (
  `cont_id` int(11) NOT NULL,
  `cont_name` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contestent`
--

INSERT INTO `contestent` (`cont_id`, `cont_name`, `gender`, `dob`, `address`) VALUES
(100, 'Lokesh K', 'Male', '2000-06-05', 'Yeshwanthpur'),
(101, 'Mahesh', 'Male', '1999-08-05', 'fork'),
(102, 'Raju', 'Male', '1999-06-04', 'Gubbi');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `e_id` int(11) NOT NULL,
  `e_name` varchar(20) NOT NULL,
  `role` varchar(50) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`e_id`, `e_name`, `role`, `salary`) VALUES
(147, 'ranju', 'technician', 3500),
(712, 'jk', 'cameraman', 3000),
(1324, 'nandan', 'cameraman', 50000),
(4145, 'egegew', 'ewgwgeg', 3000),
(6464, 'kkjk', 'kkjk', 65),
(15120, 'wfw', 'fwqwf', 42),
(151200, 'wfw', 'fwqwf', 42);

-- --------------------------------------------------------

--
-- Stand-in structure for view `info`
-- (See below for the actual view)
--
CREATE TABLE `info` (
`cont_id` int(11)
,`reason` varchar(50)
,`task_name` varchar(20)
,`amount` int(11)
,`review` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `nomination`
--

CREATE TABLE `nomination` (
  `nomination_no` int(11) NOT NULL,
  `cont_id` int(11) NOT NULL,
  `reason` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nomination`
--

INSERT INTO `nomination` (`nomination_no`, `cont_id`, `reason`) VALUES
(200, 100, 'poor'),
(201, 101, 'bad');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `cont_id` int(11) NOT NULL,
  `no_of_days` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `gst` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`cont_id`, `no_of_days`, `amount`, `gst`) VALUES
(100, 25, 70000, 63000),
(101, 45, 6587, 5928),
(102, 40, 4000, 3192);

--
-- Triggers `payment`
--
DELIMITER $$
CREATE TRIGGER `gst` BEFORE INSERT ON `payment` FOR EACH ROW SET new.gst=(new.amount)-((new.amount)*.1)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `task_no` int(11) NOT NULL,
  `task_name` varchar(20) NOT NULL,
  `cont_id` int(11) NOT NULL,
  `performance` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`task_no`, `task_name`, `cont_id`, `performance`) VALUES
(500, 'pool', 100, 'low'),
(501, 'pool water', 101, 'low but week');

-- --------------------------------------------------------

--
-- Table structure for table `voting`
--

CREATE TABLE `voting` (
  `voting_id` int(11) NOT NULL,
  `cont_id` int(11) NOT NULL,
  `review` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voting`
--

INSERT INTO `voting` (`voting_id`, `cont_id`, `review`) VALUES
(701, 101, 'poor'),
(702, 102, 'not involving wiyh others');

-- --------------------------------------------------------

--
-- Structure for view `info`
--
DROP TABLE IF EXISTS `info`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `info`  AS  select `c`.`cont_id` AS `cont_id`,`n`.`reason` AS `reason`,`t`.`task_name` AS `task_name`,`p`.`amount` AS `amount`,`v`.`review` AS `review` from ((((`contestent` `c` join `nomination` `n`) join `tasks` `t`) join `payment` `p`) join `voting` `v`) where `c`.`cont_id` = `n`.`cont_id` and `c`.`cont_id` = `t`.`cont_id` and `c`.`cont_id` = `v`.`cont_id` and `c`.`cont_id` = `p`.`cont_id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contestent`
--
ALTER TABLE `contestent`
  ADD PRIMARY KEY (`cont_id`) USING BTREE;

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `nomination`
--
ALTER TABLE `nomination`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`task_no`),
  ADD KEY `lk9` (`cont_id`);

--
-- Indexes for table `voting`
--
ALTER TABLE `voting`
  ADD PRIMARY KEY (`voting_id`),
  ADD KEY `lk6` (`cont_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `voting`
--
ALTER TABLE `voting`
  MODIFY `voting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5465;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nomination`
--
ALTER TABLE `nomination`
  ADD CONSTRAINT `kl2` FOREIGN KEY (`cont_id`) REFERENCES `contestent` (`cont_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `lk7` FOREIGN KEY (`cont_id`) REFERENCES `contestent` (`cont_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `lk9` FOREIGN KEY (`cont_id`) REFERENCES `contestent` (`cont_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `voting`
--
ALTER TABLE `voting`
  ADD CONSTRAINT `lk6` FOREIGN KEY (`cont_id`) REFERENCES `contestent` (`cont_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
