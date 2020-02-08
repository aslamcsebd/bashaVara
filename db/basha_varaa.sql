-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2020 at 12:57 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basha_varaa`
--

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(50) NOT NULL,
  `roomInfo` varchar(191) NOT NULL,
  `date` date NOT NULL,
  `advance` varchar(50) NOT NULL,
  `rent` varchar(50) NOT NULL,
  `rentNago` varchar(50) NOT NULL,
  `division` varchar(20) NOT NULL,
  `addressDetails` varchar(191) NOT NULL,
  `bedroom` varchar(50) NOT NULL,
  `dining` varchar(50) NOT NULL,
  `drawing` varchar(50) NOT NULL,
  `kitchen` varchar(50) NOT NULL,
  `bathroom` varchar(50) NOT NULL,
  `balcony` varchar(50) NOT NULL,
  `prefer` varchar(50) NOT NULL,
  `floorNo` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `garage` varchar(50) NOT NULL,
  `emergencyEnergy` varchar(50) NOT NULL,
  `side` varchar(50) NOT NULL,
  `lift` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `image` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `roomInfo`, `date`, `advance`, `rent`, `rentNago`, `division`, `addressDetails`, `bedroom`, `dining`, `drawing`, `kitchen`, `bathroom`, `balcony`, `prefer`, `floorNo`, `size`, `garage`, `emergencyEnergy`, `side`, `lift`, `mobile`, `image`) VALUES
(0, 'beautiful self-contained, attic apartment, city views. large main room, bedroom,', '2020-02-26', '5000', '16000', 'No', 'Chittagong', 'agrabad commerce college road. 4000', '2', 'Yes', 'Yes', 'Yes', '2', '2', 'Family', '4', '1000 sqft', 'No', 'No', 'Front', 'No', '01680607293', 'room_Image/room (10).jpg'),
(24, 'beautiful self-contained, attic apartment, city views. large main room, bedroom,', '2020-02-26', '5000', '16000', 'No', 'Chittagong', 'agrabad commerce college road. 4000', '2', 'Yes', 'Yes', 'Yes', '2', '2', 'Family', '4', '1100 sqft', 'No', 'No', 'Front', 'No', '01680607293', 'room_Image/room (1).jpg'),
(25, 'beautiful self-contained, attic apartment, city views. large main room, bedroom,', '2020-02-26', '6000', '12000', 'No', 'Chittagong', 'agrabad commerce college road. 4000', '3', 'Yes', 'Yes', 'Yes', '1', '2', 'Family', '4', '1000 sqft', 'No', 'No', 'Front', 'No', '01680607293', 'room_Image/room (2).jpg'),
(26, 'beautiful self-contained, attic apartment, city views. large main room, bedroom,', '2020-02-26', '5000', '11000', 'No', 'Chittagong', 'agrabad commerce college road. 4000', '2', 'Yes', 'Yes', 'Yes', '2', '2', 'Bachelor', '4', '1000 sqft', 'No', 'No', 'Front', 'No', '01680607293', 'room_Image/room (3).jpg'),
(27, 'beautiful self-contained, attic apartment, city views. large main room, bedroom,', '2020-02-26', '4000', '14000', 'No', 'Chittagong', 'agrabad commerce college road. 4000', '3', 'Yes', 'Yes', 'Yes', '1', '2', 'Bachelor', '4', '1000 sqft', 'No', 'No', 'Front', 'No', '01680607293', 'room_Image/room (4).jpg'),
(28, 'beautiful self-contained, attic apartment, city views. large main room, bedroom,', '2020-02-26', '6000', '17000', 'No', 'Chittagong', 'agrabad commerce college road. 4000', '3', 'Yes', 'Yes', 'Yes', '1', '2', 'Family', '4', '1000 sqft', 'No', 'No', 'Front', 'No', '01680607293', 'room_Image/room (5).jpg'),
(29, 'beautiful self-contained, attic apartment, city views. large main room, bedroom,', '2020-02-26', '5000', '16000', 'No', 'Chittagong', 'agrabad commerce college road. 4000', '2', 'Yes', 'Yes', 'Yes', '2', '2', 'Family', '4', '1000 sqft', 'No', 'No', 'Front', 'No', '01680607293', 'room_Image/room (6).jpg'),
(30, 'beautiful self-contained, attic apartment, city views. large main room, bedroom,', '2020-02-26', '6000', '15000', 'No', 'Chittagong', 'agrabad commerce college road. 4000', '3', 'Yes', 'Yes', 'Yes', '1', '2', 'Family', '4', '1000 sqft', 'No', 'No', 'Front', 'No', '01680607293', 'room_Image/room (7).jpg'),
(31, 'beautiful self-contained, attic apartment, city views. large main room, bedroom,', '2020-02-26', '5000', '16000', 'No', 'Chittagong', 'agrabad commerce college road. 4000', '2', 'Yes', 'Yes', 'Yes', '2', '2', 'Family', '4', '1000 sqft', 'No', 'No', 'Front', 'No', '01680607293', 'room_Image/room (8).jpg'),
(32, 'beautiful self-contained, attic apartment, city views. large main room, bedroom,', '2020-02-26', '6000', '15000', 'No', 'Chittagong', 'agrabad commerce college road. 4000', '3', 'Yes', 'Yes', 'Yes', '1', '2', 'Family', '4', '1000 sqft', 'No', 'No', 'Front', 'No', '01680607293', 'room_Image/room (9).jpg'),
(33, 'beautiful self-contained, attic apartment, city views. large main room, bedroom,', '2020-02-26', '6000', '15000', 'No', 'Chittagong', 'agrabad commerce college road. 4000', '3', 'Yes', 'Yes', 'Yes', '1', '2', 'Family', '4', '1000 sqft', 'No', 'No', 'Front', 'No', '01680607293', 'room_Image/room (10).jpg'),
(35, 'beautiful self-contained, attic apartment, city views. large main room, bedroom,', '2020-02-26', '6000', '15000', 'No', 'Chittagong', 'agrabad commerce college road. 4000', '3', 'Yes', 'Yes', 'Yes', '1', '2', 'Family', '4', '1000 sqft', 'No', 'No', 'Front', 'No', '01680607293', 'room_Image/room (12).jpg'),
(36, 'beautiful self-contained, attic apartment, city views. large main room, bedroom,', '2020-02-26', '5000', '16000', 'No', 'Chittagong', 'agrabad commerce college road. 4000', '2', 'Yes', 'Yes', 'Yes', '2', '2', 'Family', '4', '1000 sqft', 'No', 'No', 'Front', 'No', '01680607293', 'room_Image/room (11).jpg'),
(37, 'beautiful self-contained, attic apartment, city views. large main room, bedroom,', '2020-02-26', '6000', '15000', 'No', 'Chittagong', 'agrabad commerce college road. 4000', '3', 'Yes', 'Yes', 'Yes', '1', '2', 'Family', '4', '1000 sqft', 'No', 'No', 'Front', 'No', '01680607293', 'room_Image/room (13).jpg'),
(38, 'beautiful self-contained, attic apartment, city views. large main room, bedroom,', '2020-02-26', '6000', '15000', 'No', 'Chittagong', 'agrabad commerce college road. 4000', '3', 'Yes', 'Yes', 'Yes', '1', '2', 'Family', '4', '1000 sqft', 'No', 'No', 'Front', 'No', '01680607293', 'room_Image/room (14).jpg'),
(39, 'beautiful self-contained, attic apartment, city views. large main room, bedroom,', '2020-02-26', '5000', '16000', 'No', 'Chittagong', 'agrabad commerce college road. 4000', '2', 'Yes', 'Yes', 'Yes', '2', '2', 'Family', '4', '1000 sqft', 'No', 'No', 'Front', 'No', '01680607293', 'room_Image/room (15).jpg'),
(40, 'beautiful self-contained, attic apartment, city views. large main room, bedroom,', '2020-02-26', '6000', '15000', 'No', 'Chittagong', 'agrabad commerce college road. 4000', '3', 'Yes', 'Yes', 'Yes', '1', '2', 'Family', '4', '1000 sqft', 'No', 'No', 'Front', 'No', '01680607293', 'room_Image/room (16).jpg'),
(41, 'beautiful self-contained, attic apartment, city views. large main room, bedroom,', '2020-02-26', '5000', '16000', 'No', 'Chittagong', 'agrabad commerce college road. 4000', '2', 'Yes', 'Yes', 'Yes', '2', '2', 'Family', '4', '1000 sqft', 'No', 'No', 'Front', 'No', '01680607293', 'room_Image/room (17).jpg'),
(42, 'beautiful self-contained, attic apartment, city views. large main room, bedroom,', '2020-02-26', '6000', '15000', 'No', 'Chittagong', 'agrabad commerce college road. 4000', '3', 'Yes', 'Yes', 'Yes', '1', '2', 'Family', '4', '1000 sqft', 'No', 'No', 'Front', 'No', '01680607293', 'room_Image/room (18).jpg'),
(43, 'beautiful self-contained, attic apartment, city views. large main room, bedroom,', '2020-02-26', '6000', '15000', 'No', 'Chittagong', 'agrabad commerce college road. 4000', '3', 'Yes', 'Yes', 'Yes', '1', '2', 'Family', '4', '1000 sqft', 'No', 'No', 'Front', 'No', '01680607293', 'room_Image/room (19).jpg'),
(44, 'beautiful self-contained, attic apartment, city views. large main room, bedroom,', '2020-02-26', '5000', '16000', 'No', 'Chittagong', 'agrabad commerce college road. 4000', '2', 'Yes', 'Yes', 'Yes', '2', '2', 'Family', '4', '1000 sqft', 'No', 'No', 'Front', 'No', '01680607293', 'room_Image/room (20).jpg'),
(45, 'beautiful self-contained, attic apartment, city views. large main room, bedroom,', '2020-02-26', '6000', '15000', 'No', 'Chittagong', 'agrabad commerce college road. 4000', '3', 'Yes', 'Yes', 'Yes', '1', '2', 'Family', '4', '1000 sqft', 'No', 'No', 'Front', 'No', '01680607293', 'room_Image/room (12).jpg'),
(46, 'beautiful self-contained, attic apartment, city views. large main room, bedroom,', '2020-02-26', '5000', '16000', 'No', 'Chittagong', 'agrabad commerce college road. 4000', '2', 'Yes', 'Yes', 'Yes', '2', '2', 'Family', '4', '1000 sqft', 'No', 'No', 'Front', 'No', '01680607293', 'room_Image/room (1).jpg'),
(47, 'beautiful self-contained, attic apartment, city views. large main room, bedroom,', '2020-02-26', '6000', '15000', 'No', 'Chittagong', 'agrabad commerce college road. 4000', '3', 'Yes', 'Yes', 'Yes', '1', '2', 'Family', '4', '1000 sqft', 'No', 'No', 'Front', 'No', '01680607293', 'room_Image/room (2).jpg'),
(48, 'beautiful self-contained, attic apartment, city views. large main room, bedroom,', '2020-02-26', '6000', '15000', 'No', 'Chittagong', 'agrabad commerce college road. 4000', '3', 'Yes', 'Yes', 'Yes', '1', '2', 'Family', '4', '1000 sqft', 'No', 'No', 'Front', 'No', '01680607293', 'room_Image/room (3).jpg'),
(49, 'beautiful self-contained, attic apartment, city views. large main room, bedroom,', '2020-02-26', '5000', '16000', 'No', 'Chittagong', 'agrabad commerce college road. 4000', '2', 'Yes', 'Yes', 'Yes', '2', '2', 'Family', '4', '1000 sqft', 'No', 'No', 'Front', 'No', '01680607293', 'room_Image/room (4).jpg'),
(50, 'beautiful self-contained, attic apartment, city views. large main room, bedroom,', '2020-02-26', '6000', '15000', 'No', 'Chittagong', 'agrabad commerce college road. 4000', '3', 'Yes', 'Yes', 'Yes', '1', '2', 'Family', '4', '1000 sqft', 'No', 'No', 'Front', 'No', '01680607293', 'room_Image/room (5).jpg'),
(51, 'beautiful self-contained, attic apartment, city views. large main room, bedroom,', '2020-02-26', '5000', '16000', 'No', 'Chittagong', 'agrabad commerce college road. 4000', '2', 'Yes', 'Yes', 'Yes', '2', '2', 'Family', '4', '1000 sqft', 'No', 'No', 'Front', 'No', '01680607293', 'room_Image/room (6).jpg'),
(52, 'beautiful self-contained, attic apartment, city views. large main room, bedroom,', '2020-02-26', '6000', '15000', 'No', 'Chittagong', 'agrabad commerce college road. 4000', '3', 'Yes', 'Yes', 'Yes', '1', '2', 'Family', '4', '1000 sqft', 'No', 'No', 'Front', 'No', '01680607293', 'room_Image/room (7).jpg'),
(53, 'beautiful self-contained, attic apartment, city views. large main room, bedroom,', '2020-02-26', '6000', '15000', 'No', 'Chittagong', 'agrabad commerce college road. 4000', '3', 'Yes', 'Yes', 'Yes', '1', '2', 'Family', '4', '1000 sqft', 'No', 'No', 'Front', 'No', '01680607293', 'room_Image/room (8).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile_no` varchar(100) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `mobile_no`, `userName`, `password`) VALUES
(42, 'aslam', 'hossain', 'admin@gmail.com', '344', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
