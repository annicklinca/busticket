-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2023 at 09:29 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `busticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `agency`
--

CREATE TABLE `agency` (
  `agency_id` int(255) NOT NULL,
  `agency_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`agency_id`, `agency_name`, `email`, `phone`, `location`) VALUES
(1, 'Horizon', 'horizon@gmail.com', '07545535345', 'gitega'),
(2, 'Volcano', 'volcano@gmail.com', '07545535345', 'Remera');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `idnumber` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `agency_id` int(255) DEFAULT NULL,
  `amount` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `booking_date` date NOT NULL,
  `bus_station` varchar(255) NOT NULL,
  `Date_Now` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `status` varchar(255) NOT NULL DEFAULT '''NOT APPROVED'''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `fullname`, `phone`, `idnumber`, `email`, `agency_id`, `amount`, `location`, `destination`, `booking_date`, `bus_station`, `Date_Now`, `status`) VALUES
(5, 'sonia', '0783424232', '352352525235', 'elie@gmail.com', 0, '4000', 'kigali', 'rusizi', '2202-02-20', 'kigali', '2023-03-13 12:29:21.209944', ''),
(6, 'Kevin', '0783424232', '352352525235', 'elie@gmail.com', 0, '4000', 'kigali', 'rusizi', '2023-02-12', 'kigali', '2023-03-13 12:46:48.568990', ''),
(7, 'Dinee', '07545535345', '23213123131332', 'dinee@gmail.com', 2, '2', 'gitega', 'kigali', '2020-02-20', 'kinyoni', '2023-03-14 19:44:31.037697', '\'NOT APPROVED\'');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `bus_id` int(255) NOT NULL,
  `bus_plate` varchar(255) NOT NULL,
  `agency_id` int(255) DEFAULT NULL,
  `free_seats` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`bus_id`, `bus_plate`, `agency_id`, `free_seats`, `destination`) VALUES
(3, 'b345', 2, '34', 'kigali'),
(4, 'b345', 2, '34', 'kigali');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `agent_id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `agency_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`agent_id`, `firstname`, `lastname`, `email`, `phone`, `address`, `password`, `role`, `agency_name`) VALUES
(1, 'Sonia', 'Munyana', 'sonia@gmail.com', '0768678764', 'kigali', '1212', 'agent', 'volcano'),
(2, 'Olga', 'Isengwe', 'olga@gmail.com', '076876876', 'musanze', '3434', 'admin', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agency`
--
ALTER TABLE `agency`
  ADD PRIMARY KEY (`agency_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`bus_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`agent_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agency`
--
ALTER TABLE `agency`
  MODIFY `agency_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `bus_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `agent_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
