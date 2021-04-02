-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2021 at 11:09 PM
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
-- Table structure for table `grain_food`
--

CREATE TABLE `grain_food` (
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
-- Dumping data for table `grain_food`
--

INSERT INTO `grain_food` (`id`, `name`, `weight`, `price`, `description`, `inventory`, `codename`, `imagename`) VALUES
(1, 'Wheat Bread', 0.5, 4.99, 'This is tasty wheat bread, the wheat freshly grown from our rooftop garden. Does it get any better than this?', 44, 'wheatbread', 'grain/bread.jpg'),
(2, 'Baked Baguette', 0.4, 3.99, 'The baguette has been baked to perfection, with a hard exterior and a soft interior. Great with cheese.', 36, 'baguette', 'grain/baguette.jpg'),
(3, 'Fluffy Croissant', 0.6, 4.99, 'The croissants are so fluffy it\'s like you\'re biting into air. Absolutely heavenly. Imported directly from Paris.', 79, 'croissant', 'grain/croissant.jpg'),
(4, 'White Bread', 0.7, 4.99, 'Bread so white it\'s blinding. Packed with sugar for an ultra sweet taste.', 25, 'whitebread', 'grain/whitebread.jpg'),
(5, 'Cinnamon Buns', 0.4, 4.99, 'Sweet cinnamon buns glazed over with our signature white cream. Tasty as heaven.', 60, 'cinnamonbun', 'grain/cinnamonbun.jpg'),
(6, 'Raisin Bread', 0.6, 4.99, 'Stuffed with so many raisins you\'ll wonder why we bothered with the bread.', 20, 'raisinbread', 'grain/raisinbread.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grain_food`
--
ALTER TABLE `grain_food`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grain_food`
--
ALTER TABLE `grain_food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
