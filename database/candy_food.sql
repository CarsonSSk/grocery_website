-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2021 at 11:11 PM
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
-- Table structure for table `candy_food`
--

CREATE TABLE `candy_food` (
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
-- Dumping data for table `candy_food`
--

INSERT INTO `candy_food` (`id`, `name`, `weight`, `price`, `description`, `inventory`, `codename`, `imagename`) VALUES
(1, 'Skittles', 1, 9.99, 'A hard and chewy fruit-flavored candy that will leave you wanting more!', 44, 'skittles', 'candy/Skittles.jpg'),
(2, 'Assorted Hard Candy', 1, 8.99, 'A multitude of hard candy that offers a sweet, sour and fruity taste.', 60, 'hardcandy', 'candy/assortedHardCandy.jpeg'),
(3, 'Gummy Bears', 1, 9.99, 'Fruit flavored candy that will leave you wanting more!', 51, 'gummybears', 'candy/Gummybears.jpeg'),
(4, 'Starbursts', 1, 11.99, 'A bright fruit-flavored taffy candy that are sour, juicy sweet and chewy!', 50, 'starbursts', 'candy/Starbursts.jpg'),
(5, 'Jelly Beans', 1, 8.99, 'Extremely chewy Jellybeans that come in an endless list of different flavors.', 32, 'jellybeans', 'candy/Jellybeans.jpeg'),
(6, 'Sour Snakes', 1, 15.99, 'Sweet and sour snake shaped candy.', 45, 'snakes', 'candy/candySnakes.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candy_food`
--
ALTER TABLE `candy_food`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candy_food`
--
ALTER TABLE `candy_food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
