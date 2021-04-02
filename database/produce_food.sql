-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2021 at 08:29 PM
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
-- Table structure for table `produce_food`
--

CREATE TABLE `produce_food` (
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
-- Dumping data for table `produce_food`
--

INSERT INTO `produce_food` (`id`, `name`, `weight`, `price`, `description`, `inventory`, `codename`, `imagename`) VALUES
(1, 'Sliced Apples', 1, 4.99, 'Freshly picked apples from the local orchard.', 60, 'apples', 'produce/apple.jpg'),
(2, 'Ripe Banana', 1, 2.99, 'Ripe Bananas imported from Florida. Excellent source of potassium and vitamin B6.', 46, 'bananas', 'produce/banana.jpg'),
(3, 'Hot Peppers', 1, 6.99, 'Perfect for spicy cuisine. Caution: Very hot.', 70, 'peppers', 'produce/pepper.jpg'),
(4, 'Fresh Tomatoes', 1, 10.99, 'Freshly picked tomatoes from the local orchard.', 66, 'tomatoes', 'produce/tomato.jpg'),
(5, 'Large Avocados', 1, 9.99, 'Large Avocados, great for making guacamole.', 54, 'avocados', 'produce/avocado.jpg'),
(6, 'Large Broccolis	', 1, 11.99, 'Don\'t forget to eat your broccoli!', 60, 'broccolis', 'produce/broccoli.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produce_food`
--
ALTER TABLE `produce_food`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produce_food`
--
ALTER TABLE `produce_food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
