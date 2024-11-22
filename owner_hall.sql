-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2024 at 05:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hall_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `owner_hall`
--

CREATE TABLE `owner_hall` (
  `id` int(11) NOT NULL,
  `vendor_name` varchar(56) NOT NULL,
  `banquet_hall_name` varchar(56) NOT NULL,
  `location` varchar(56) NOT NULL,
  `address_locality` varchar(256) NOT NULL,
  `address_district` varchar(56) NOT NULL,
  `address_state` varchar(56) NOT NULL,
  `address_pin` int(11) NOT NULL,
  `size` varchar(56) NOT NULL,
  `guest_capacity` int(11) NOT NULL,
  `no_of_halls` int(11) NOT NULL,
  `no_of_rooms` int(11) NOT NULL,
  `no_of_lawns` int(11) NOT NULL,
  `parking` int(11) NOT NULL,
  `catering` int(11) NOT NULL,
  `decorative` int(11) NOT NULL,
  `event_type` varchar(56) NOT NULL,
  `pricing_by_day_basis` int(11) NOT NULL,
  `pricing_by_event_basis` int(11) NOT NULL,
  `picture1` varchar(256) NOT NULL,
  `picture2` varchar(256) NOT NULL,
  `picture3` varchar(256) NOT NULL,
  `picture4` varchar(256) NOT NULL,
  `contact_person_name` int(11) NOT NULL,
  `contact_person_mobile` int(11) NOT NULL,
  `insert_dt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `owner_hall`
--

INSERT INTO `owner_hall` (`id`, `vendor_name`, `banquet_hall_name`, `location`, `address_locality`, `address_district`, `address_state`, `address_pin`, `size`, `guest_capacity`, `no_of_halls`, `no_of_rooms`, `no_of_lawns`, `parking`, `catering`, `decorative`, `event_type`, `pricing_by_day_basis`, `pricing_by_event_basis`, `picture1`, `picture2`, `picture3`, `picture4`, `contact_person_name`, `contact_person_mobile`, `insert_dt`) VALUES
(1, 'shakif', 'soni', 'kanke', 'rinpas', 'ranchi', 'jharkhand', 834001, '50', 400, 10, 12, 2, 1, 1, 1, '1', 1000, 15000, '1', '11', '111', '1111', 0, 2147483647, '2024-11-21 13:55:41'),
(2, '', '', '', '', '', '', 0, '2', 2, 3, 3, 4, 3, 2, 3, '', 0, 0, '', '', '', '', 0, 0, '2024-11-21 14:56:27'),
(3, '', '', '', '', '', '', 0, '2', 2, 3, 3, 4, 3, 2, 3, '12', 4, 122, '', '', '', '', 0, 0, '2024-11-21 14:56:45'),
(4, 'rahul', 'nice hall', 'kanke', 'chouk', 'ranchi', 'jharkhand', 834001, '50', 500, 5, 20, 2, 2, 5, 5, 'wedding', 10000, 20000, 'Dr_ Strange.jfif', 'Dr_ Strange.jfif', 'Dr_ Strange.jfif', 'Dr_ Strange.jfif', 0, 2147483647, '2024-11-21 15:56:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `owner_hall`
--
ALTER TABLE `owner_hall`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `owner_hall`
--
ALTER TABLE `owner_hall`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
