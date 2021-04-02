-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2021 at 11:10 PM
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
-- Table structure for table `dairy_food`
--

CREATE TABLE `dairy_food` (
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
-- Dumping data for table `dairy_food`
--

INSERT INTO `dairy_food` (`id`, `name`, `weight`, `price`, `description`, `inventory`, `codename`, `imagename`) VALUES
(1, 'Brie Cheese', 0.2, 3.99, 'A soft specialty cheese, perfect with the right kind of bread.', 111, 'brie', 'dairy/Optimized-BrieCheese.jpg'),
(2, 'Ice Cream', 1, 2.99, 'A soft serve cone, only comes in homemade vanilla.', 59, 'icecream', 'dairy/Optimized-IceCream.jpg'),
(3, 'Jug of Milk', 3, 4.99, 'A Large jug of Milk, fresh from our local farm, 2% lactose.', 104, 'milk', 'dairy/Optimized-Milk.jpg'),
(4, 'Parmesan Cheese', 0.2, 4.99, 'A 2 inch slice of parmesan cheese, needs to be cut or grated to be enjoyed best. DO NOT EAT THE CRUST.', 91, 'parmesan', 'dairy/Optimized-ParmesanCheese(1).jpg'),
(5, 'Swiss Cheese', 0.2, 4.99, 'A 2 inch slice of swiss cheese, size of the holes in the cheese may vary.', 46, 'swiss', 'dairy/Optimized-SwissCheese.jpg'),
(6, 'Yogurt Bowl', 0.4, 5.99, 'A small custom-made yogurt bowl, served with assorted fruits and nuts.', 37, 'yogurt', 'dairy/Optimized-Yogurt.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dairy_food`
--
ALTER TABLE `dairy_food`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dairy_food`
--
ALTER TABLE `dairy_food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
