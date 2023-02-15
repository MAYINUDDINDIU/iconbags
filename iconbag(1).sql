-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2023 at 05:52 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iconbag`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat_product`
--

CREATE TABLE `cat_product` (
  `Cat_id` int(5) DEFAULT NULL,
  `Product_title` varchar(255) DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cat_product`
--

INSERT INTO `cat_product` (`Cat_id`, `Product_title`, `Image`) VALUES
(1, 'Casual Bags ', '9-1676215289.jpg'),
(2, 'Hand Bags ', '2-1676215347.jpg'),
(3, 'Bag Pack ', '12-1676215379.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat_product`
--
ALTER TABLE `cat_product`
  ADD UNIQUE KEY `Product_title` (`Product_title`),
  ADD UNIQUE KEY `Cat_id` (`Cat_id`),
  ADD UNIQUE KEY `Image` (`Image`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
