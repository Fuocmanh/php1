-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2022 at 02:51 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php1_asm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `name`, `email`, `pass`, `active`) VALUES
(8, 'manh', 'manh7nui@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(11) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `sum` double NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `use_id` int(11) NOT NULL,
  `condition` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `phone`, `address`, `sum`, `time`, `use_id`, `condition`) VALUES
(38, '0796904939', 'Cần Thơ', 17.09, '2022-08-19 17:46:31', 2, 1),
(39, '0796904939', 'Cần Thơ', 64.09, '2022-08-19 18:05:36', 2, 1),
(42, '0796904939', 'Cần Thơ', 64.09, '2022-08-19 19:03:30', 4, 0),
(43, '0796904939', 'Cần Thơ', 64.09, '2022-08-19 19:03:59', 2, 1),
(44, '0796904939', 'Cần Thơ', 64.09, '2022-08-19 19:04:46', 2, 1),
(45, '0325438452', 'Cần Thơ', 64.09, '2022-08-19 19:05:17', 5, 0),
(46, '0325438452', 'Cần Thơ', 235.01, '2022-08-19 19:29:04', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `check`
--

CREATE TABLE `check` (
  `style_id` int(11) NOT NULL,
  `Style` varchar(255) NOT NULL,
  `action` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `check`
--

INSERT INTO `check` (`style_id`, `Style`, `action`) VALUES
(1, 'Shoe', 0),
(2, 'Bag', 0),
(3, 'Clothing', 0);

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `det_id` int(11) NOT NULL,
  `h2` varchar(100) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `pro_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `det_bill`
--

CREATE TABLE `det_bill` (
  `det_bill_id` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `price` double NOT NULL,
  `style_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `det_bill`
--

INSERT INTO `det_bill` (`det_bill_id`, `bill_id`, `pro_id`, `amount`, `price`, `style_id`) VALUES
(28, 38, 7, 1, 17.09, 2),
(29, 39, 1, 1, 64.09, 3),
(30, 40, 1, 1, 64.09, 3),
(31, 42, 1, 1, 64.09, 3),
(32, 43, 1, 1, 64.09, 3),
(33, 44, 1, 1, 64.09, 3),
(34, 45, 1, 1, 64.09, 3),
(35, 46, 5, 1, 235.01, 1);

-- --------------------------------------------------------

--
-- Table structure for table `img_pro`
--

CREATE TABLE `img_pro` (
  `img_id` int(11) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `img4` varchar(255) NOT NULL,
  `pro_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `img_pro`
--

INSERT INTO `img_pro` (`img_id`, `img1`, `img2`, `img3`, `img4`, `pro_id`) VALUES
(1, 'b1.jpg', 'b2.jpg', 'b3.jpg', 'b4.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `image` text DEFAULT NULL,
  `active` tinyint(1) NOT NULL,
  `style_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `name`, `price`, `image`, `active`, `style_id`) VALUES
(1, 'Manchester United 22/23 Home Jersey', 64.09, 'a1.jpg', 0, 3),
(3, 'ULTRABOOST 1.0 DNA RUNNING SPORTSWEAR LIFESTYLE SHOES', 213.65, 'a2.jpg', 0, 1),
(5, '4D RUN 1.0 SHOES', 235.01, 'a3.jpg', 0, 1),
(6, 'TRAINING COLOURBLOCK TEE', 38.46, 'a4.jpg', 0, 3),
(7, 'ACCESSORY POUCH', 17.09, 'a5.jpg', 0, 2),
(8, 'ADIDAS X LEGO® TECH PACK BACKPACK', 46.99, 'a6.jpg', 0, 2),
(9, 'ADIDAS SPORTSWEAR FUTURE ICONS 3-STRIPES SKINNY PANTS', 59.82, 'a7.jpg', 0, 3),
(10, 'STATEMENT WARP KNIT PANTS', 77.77, 'a8.jpg', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `use_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`use_id`, `name`, `email`, `pass`, `phone`, `address`, `active`) VALUES
(2, 'Phước Mạnh Nguyễn', 'manh7nui@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0796904939', 'Cần Thơ', 0),
(4, 'Nguyễn Phước Mạnh', 'nguyenphuocmanh2003@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0796904939', 'Cần Thơ', 0),
(5, 'manhaa', 'manhnppc04148@fpt.edu.vn', 'c4ca4238a0b923820dcc509a6f75849b', '0325438452', 'Cần Thơ', 0),
(6, 'manhaa', 'manhnppc04148@fpt.edu.vn', 'c4ca4238a0b923820dcc509a6f75849b', '0325438452', 'Cần Thơ', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `check`
--
ALTER TABLE `check`
  ADD PRIMARY KEY (`style_id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`det_id`),
  ADD UNIQUE KEY `pro_id` (`pro_id`);

--
-- Indexes for table `det_bill`
--
ALTER TABLE `det_bill`
  ADD PRIMARY KEY (`det_bill_id`);

--
-- Indexes for table `img_pro`
--
ALTER TABLE `img_pro`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`,`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`use_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `check`
--
ALTER TABLE `check`
  MODIFY `style_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `det_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `det_bill`
--
ALTER TABLE `det_bill`
  MODIFY `det_bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `img_pro`
--
ALTER TABLE `img_pro`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `use_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `details`
--
ALTER TABLE `details`
  ADD CONSTRAINT `details_ibfk_1` FOREIGN KEY (`pro_id`) REFERENCES `products` (`pro_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `img_pro`
--
ALTER TABLE `img_pro`
  ADD CONSTRAINT `img_pro_ibfk_1` FOREIGN KEY (`pro_id`) REFERENCES `products` (`pro_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`style_id`) REFERENCES `check` (`style_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
