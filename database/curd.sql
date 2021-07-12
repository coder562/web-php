-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2021 at 08:40 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `curd`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `email`, `number`, `password`) VALUES
(2, 'vaishaliiii', 'vaishali@gmail.com', '5678643322', '666'),
(8, 'trisha jain', 'tri@gmail.com', '987675656', '679');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`, `college`, `gender`, `education`) VALUES
(1, 'trisha', 'mpct', 'female', 'ca'),
(2, 'trishaaa', 'mpct', 'male', 'mca'),
(3, 'trishaaksh', 'select', '', ''),
(4, 'trishaaaksh', 'mpct', 'female', ''),
(5, 'trishaaaksh', 'mpct', 'female', 'mca'),
(6, 'trishan', 'jaincollege', 'other', 'bba'),
(7, 'trishannn', 'rjit', 'male', 'ca'),
(8, 'trishaaa', 'select', '', ''),
(9, 'trishaaa', 'mpct', 'female', 'Array'),
(10, 'trishan', 'mpct', 'female', 'Array'),
(11, 'trishan', 'jaincollege', 'female', 'Array'),
(12, 'trishan', 'mpct', 'female', 'mca,ca,ma,bba');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `name`, `image`) VALUES
(1, 'vaishali', 'upload/Screenshot (12).png'),
(2, 'vaishali', 'upload/Screenshot (13).png'),
(3, 'ritik', 'upload/me.png'),
(4, 'trisha', 'upload/me2.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `pnform`
--

CREATE TABLE `pnform` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `college` varchar(50) NOT NULL,
  `qualifications` varchar(200) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `internship` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pnform`
--

INSERT INTO `pnform` (`id`, `name`, `email`, `number`, `address`, `gender`, `college`, `qualifications`, `branch`, `semester`, `internship`) VALUES
(9, '$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j'),
(10, '$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j'),
(13, 'vai', 'vai@gmail.com', '76857644545', 'morar', 'female', 'ITM', 'B.Tech', 'C.S.E', 'VIth Semester', 'PHP'),
(15, '', '', '', '', '', 'Select', 'Select', 'Select', 'Select', '');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `roll` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `DOB` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `subjects` varchar(255) NOT NULL,
  `semester` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `phone`, `roll`, `gender`, `DOB`, `password`, `subjects`, `semester`) VALUES
(2, 'vaishaliiii', 'vaishali@gmail.com', '08319575656', '99', '', '', '89', 'PYTHON', '6TH'),
(3, 'trisha', 'trisha@gmail.com', '7898765456', '89', 'female', '', '8643', 'PYTHON', '3RD');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `username`, `password`) VALUES
(1, 'vai', '12'),
(2, 'rh', '34'),
(3, 'rohit', '123456'),
(4, 'ritika', '23459808');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `name`, `email`, `city`) VALUES
(1, 'vaishali', 'vaishalijain@gmail.com', 'indore'),
(2, 'trisha', 'trisha@gmail.com', 'gwalior'),
(3, '$a', '$b', '$c');

-- --------------------------------------------------------

--
-- Table structure for table `task2`
--

CREATE TABLE `task2` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `phone` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task2`
--

INSERT INTO `task2` (`id`, `name`, `city`, `phone`, `email`, `address`, `college`) VALUES
(1, 'vaishali', 'gwalior', '567788', 'vai.in', 'hgjjjg', 'MPCT');

-- --------------------------------------------------------

--
-- Table structure for table `task3`
--

CREATE TABLE `task3` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `sales` varchar(200) NOT NULL,
  `price` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `bathroom` varchar(255) NOT NULL,
  `bedroom` varchar(255) NOT NULL,
  `reception` varchar(255) NOT NULL,
  `garage` varchar(255) NOT NULL,
  `features` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `property` varchar(255) NOT NULL,
  `home` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task3`
--

INSERT INTO `task3` (`id`, `name`, `gender`, `address`, `latitude`, `longitude`, `zip`, `sales`, `price`, `area`, `size`, `bathroom`, `bedroom`, `reception`, `garage`, `features`, `city`, `property`, `home`) VALUES
(7, 'vaishali', 'female', 'padao', '34', '12', '3456788', '344', '455', '30', '78', 'd1', 'd2', 'hii', 'well', 'Air Conditioner', 'angel', '1', 'mpct'),
(8, 'trisha', 'female', 'Bundela colony,datia', '21', '21', '475661', '56', '78', '45', '34', 'd1', 'w1', 'dyy', 'go', 'cctvr', 'north london', '2', 'itm');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `username`, `password`, `email`, `phone`, `address`, `pincode`) VALUES
(1, 'vaishali', '1234', 'vai@gmail.com', '676858746465', 'padao', '56677'),
(2, 'trisha', '23456', 'trisha@gmail.com', '67885555', 'gwalior', '6775');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pnform`
--
ALTER TABLE `pnform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task2`
--
ALTER TABLE `task2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task3`
--
ALTER TABLE `task3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pnform`
--
ALTER TABLE `pnform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `task2`
--
ALTER TABLE `task2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `task3`
--
ALTER TABLE `task3`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
