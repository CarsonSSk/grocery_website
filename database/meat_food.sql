-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2021 at 11:05 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery`
--

-- --------------------------------------------------------

--
-- Table structure for table `meat_food`
--

CREATE TABLE `meat_food` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `weight` float NOT NULL,
  `price` float NOT NULL,
  `description` varchar(512) NOT NULL,
  `inventory` int(20) NOT NULL,
  `codename` varchar(256) NOT NULL,
  `imagename` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meat_food`
--

INSERT INTO `meat_food` (`id`, `name`, `weight`, `price`, `description`, `inventory`, `codename`, `imagename`) VALUES
(1, 'Sliced Chicken', 1.75, 7.99, 'Unseasoned slices of fresh chicken.', 147, 'chicken', 'meat/chicken.jpg'),
(2, 'Sliced Beef', 1.2, 10.99, 'Thinly sliced seasoned beef.', 134, 'beef', 'meat/beef.jpg'),
(3, 'Fish Fillet', 0.8, 8.99, 'Slices of fish.', 70, 'fish', 'meat/fish.jpg'),
(4, 'Medium Ground Beef', 0.8, 14.99, 'Medium Ground Beef', 150, 'groundbeef', 'meat/groundbeef.jpg'),
(5, 'Sliced Salami', 0.2, 4.99, 'Slices of heavly sesoned italian sausage. Seasoned with bold spices.', 112, 'salami', 'meat/salami.jpg'),
(6, 'Top Sirloin Steaks', 0.3, 8.99, 'A juicy, tender and boneless cut of beef. Full of protein.', 90, 'steak', 'meat/sirloin.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meat_food`
--
ALTER TABLE `meat_food`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meat_food`
--
ALTER TABLE `meat_food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
