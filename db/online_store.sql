-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 29, 2016 at 07:27 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_info`
--

CREATE TABLE `product_info` (
  `product_id` varchar(10) NOT NULL,
  `pro_name` varchar(30) NOT NULL,
  `pro_price` float NOT NULL,
  `pro_count` varchar(10) NOT NULL,
  `image_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_info`
--

INSERT INTO `product_info` (`product_id`, `pro_name`, `pro_price`, `pro_count`, `image_path`) VALUES
('001', 'Gitanjali', 200, '10', 'images/51ZV9E6VFTL.jpg'),
('002', 'An Anthology', 300, '10', 'images/51vyJmmazbL._SX322_BO1,204,203,200_.jpg'),
('003', 'Selected Stories', 150, '10', 'images/81jUj2upfsL.jpg'),
('004', 'Gora', 400, '10', 'images/9788171677559.jpg'),
('005', 'Chitra', 325, '10', 'images/9788171677795.jpg'),
('006', 'Last Poem', 300, '10', 'images/Lr_Tagore_jpg_1_1038228e.jpg'),
('007', 'One Hundred Songs', 150, '10', 'images/rabindranath_tagore_one_hundred_songs_in_staff_idk232 - Copy.jpg'),
('008', 'Riddle Plays', 250, '10', 'images/riddle_plays_rabindranath_tagores_originally_written_ihf044 - Copy.jpg'),
('009', 'Selected Writing For Children', 180, '10', 'images/selected_writings_for_children__rabindranath_tagore_idc620.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reg_data`
--

CREATE TABLE `reg_data` (
  `FirstName` varchar(50) DEFAULT NULL,
  `SurName` varchar(50) DEFAULT NULL,
  `UserNameORMob` varchar(20) NOT NULL,
  `EmailID` varchar(20) DEFAULT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `DateOfBirth` varchar(20) DEFAULT NULL,
  `PasswordRecovery` varchar(30) NOT NULL,
  `Password` varchar(30) DEFAULT NULL,
  `AC_info` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_data`
--

INSERT INTO `reg_data` (`FirstName`, `SurName`, `UserNameORMob`, `EmailID`, `Gender`, `DateOfBirth`, `PasswordRecovery`, `Password`, `AC_info`) VALUES
('Mani', 'Bera', '@mani', '@mani', 'female', '2/4/2009', 'Dancing', 'mani', -1125),
('Partha', 'Bera', '@partha', '@partha', 'male', '24/1/1992', 'Video Game', 'partha', 2500),
('sayan', 'samanta', '@sayan', '@sayan', 'male', '8/27/1994', 'Cricket', 's', -800),
('Sayan', 'Samanta', 'bubai', 'sayansamanta1994@gma', 'male', '8/27/1994', 'Cricket', 'bubai', 50000),
('Shobha', 'Bera', 'mamon', 'shobha@ishani.com', 'female', '12/25/1989', 'kho-kho', 'moni', 21390);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_info`
--
ALTER TABLE `product_info`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `reg_data`
--
ALTER TABLE `reg_data`
  ADD PRIMARY KEY (`UserNameORMob`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
