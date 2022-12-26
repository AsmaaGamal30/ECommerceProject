-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220907.bc4fa31a06
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2022 at 12:47 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'men'),
(2, 'women'),
(3, 'labtop'),
(4, 'mobile');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `subject`, `message`) VALUES
(5, 'Asmaa', 'asmagamal311@gmail.com', '01014981664', 'test', '123546568'),
(6, 'Asmaa Gamal', 'A.AbdElhamed01084@dmu.edu.eg', '01014981664', 'job', 'great job والله');

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favourites`
--

INSERT INTO `favourites` (`id`, `user_id`, `product_id`) VALUES
(50, 11, 9);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product_id`, `payment_id`) VALUES
(28, 11, 7, 11);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `number_of_card` varchar(255) NOT NULL,
  `expiry_date` varchar(255) NOT NULL,
  `security_code` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `first_name`, `last_name`, `email`, `phone`, `address`, `number_of_card`, `expiry_date`, `security_code`, `postal_code`, `user_id`) VALUES
(11, 'Asmaa', 'Gamal', 'asmagamal311@gmail.com', '01014981664', 'Damanhour - Elbhaira - Egypt', '11111111111111111', '111', '668787', '22511', 11);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `size` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `color` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `size`, `price`, `color`, `img`, `category_id`) VALUES
(3, 'KNIT T-SHIRT', 'T-shirt made of spun cotton fabric. Round neck and short sleeves.', 'S,M,L,XL', 600, 'Green , Red', 'https://static.zara.net/photos///2022/I/0/1/p/4231/410/505/82/w/1366/4231410505_1_1_1.jpg?ts=1661945255988', 1),
(4, 'RELAXED FIT DENIM TROUSERS', 'Relaxed fit trousers featuring front pockets, rear patch pockets and zip fly and top button fastening', '36,38,40', 700, 'Black', 'https://static.zara.net/photos///2022/I/0/3/p/2553/321/800/2/w/1366/2553321800_1_1_1.jpg?ts=1657729037380', 1),
(5, 'LEATHER CLOGS', 'Black leather clogs. Plain upper. Matching sole.', '40,41,42', 2150, 'Black', 'https://static.zara.net/photos///2022/I/1/2/p/2725/020/800/2/w/1366/2725020800_6_2_1.jpg?ts=1660205282894', 1),
(6, 'BASIC SLIM FIT T-SHIRT', 'Stretch cotton T-shirt featuring a round neck and short sleeves.', 'M,L', 630, 'Olive Green', 'https://static.zara.net/photos///2022/I/0/2/p/5584/461/515/2/w/1366/5584461515_2_5_1.jpg?ts=1662985654453', 1),
(7, 'DRAPED NECK TOP', 'Sleeveless top with a cowl neckline. Invisible back zip fastening.', 'XS,S,M', 999, 'Black', 'https://static.zara.net/photos///2022/I/0/1/p/9878/198/800/12/w/1366/9878198800_1_1_1.jpg?ts=1668683359311', 2),
(8, 'SEQUINNED FLARED LEGGINGS', 'High-waist leggings with an elasticated waistband. Flared hem.', 'S,M,L', 1699, 'Dark silver', 'https://static.zara.net/photos///2022/I/0/1/p/3028/223/836/2/w/1366/3028223836_6_1_1.jpg?ts=1667907083180', 2),
(9, 'HEELED SANDALS WITH RHINESTONE STRAPS', 'High-heel sandals. Thin straps with rhinestones. Square toe. Buckled ankle strap fastening. ', '36,37,38', 2199, 'Black', 'https://static.zara.net/photos///2022/I/1/1/p/2300/110/800/2/w/563/2300110800_6_2_1.jpg?ts=1666861619854', 2),
(10, 'FLORAL JACQUARD HALTER TOP', 'Halter neck top with a flower appliqué and buttoned opening at the back.', 'M,L', 1099, 'Black , white', 'https://static.zara.net/photos///2022/I/0/1/p/9244/893/800/2/w/1366/9244893800_6_1_1.jpg?ts=1668095864411', 2),
(11, 'ASUS TUF Dash 15 (2022) Gaming Laptop', 'ASUS TUF Dash 15 (2022) Gaming Laptop, 15.6” 144Hz FHD Display, Intel Core i7-12650H, GeForce RTX 3060, 16GB DDR5, 512GB SSD, Thunderbolt 4, Thunderbolt 4, Windows 11 Home, Off Black, FX517ZM-AS73 ', '17 inches', 36500, 'Black', 'https://m.media-amazon.com/images/I/71AGOX9MORL._AC_SL1500_.jpg', 3),
(12, 'HP Victus 16-d1013ne Gaming Laptop', 'HP Victus 16-d1013ne Gaming Laptop - 12th Intel Core i7-12700H 14-Cores, 16GB RAM DDR5 4800 MHz, 1TB PCIe NVMe SSD, NVIDIA RTX3060 6GB GDDR6 Graphics, 16,1\" FHD 144Hz, Backlit KB, Dos - Ceramic White ', '16 inches', 39450, 'Ceramic White', 'https://m.media-amazon.com/images/I/71kdODtriVL._AC_SL1500_.jpg', 3),
(13, 'HP Victus 16-d1002nia Gaming Laptop', ' HP Victus 16-d1002nia Gaming Laptop - 12th Intel Core i7-12700H 14-Cores, 16GB RAM DDR5 4800 MHz, 1TB PCIe NVMe SSD, NVIDIA RTX3050 4GB GDDR6 Graphics, 16,1\" FHD 144Hz, Backlit KB, Dos - Mica silver ', '15 inches', 34968, 'silver ', 'https://m.media-amazon.com/images/I/51woVYOWPPL._AC_.jpg', 3),
(14, 'HP Victus 16-e0000ne', ' HP Victus 16-e0000ne - AMD Ryzen 7-5800H - 16GB - 1TB SSD - NVIDIA GeForce RTX 3050 4GB - 16\"FHD - Win10 - Blue ', '14 inches', 29663, 'Silver , Blue', 'https://m.media-amazon.com/images/I/514NdctyRdL._AC_SL1500_.jpg', 3),
(15, 'Apple iPhone 11', ' Apple iPhone 11 with FaceTime - 128GB, 4GB RAM, 4G LTE, Black, Single SIM & E-SIM ', '6.3 inches', 14000, 'Gray', 'https://m.media-amazon.com/images/I/71i2XhHU3pL._AC_SL1500_.jpg', 4),
(16, 'Samsung Galaxy Z Fold4 Mobile Phone', ' Samsung Galaxy Z Fold4 Mobile Phone Android Folding Smartphone 256GB, Graygreen ', '6.3 inches', 42999, 'Dark Blue', 'https://m.media-amazon.com/images/I/71i5osdmajL._AC_SL1500_.jpg', 4),
(17, 'Nokia 5310', ' Nokia 5310 TA-1212 Dual SIM Mobile - 2.4 Inch, 16 MB, 8 MB RAM, 4G LTE - Black and Red ', '2 inches', 975, 'Black', 'https://m.media-amazon.com/images/I/61ObKjm7c1L._AC_SL1500_.jpg', 4),
(18, 'Samsung Galaxy A23', 'Samsung Galaxy A23 LTE Android Smartphone, 128GB, 6GB RAM, Dual Sim Mobile Phone - Peach ', '6.3 inches', 6599, 'Pink , Blue', 'https://m.media-amazon.com/images/I/81Afp6tG-QL._AC_SL1500_.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `phone`, `email`, `password`) VALUES
(11, 'Asmaa', 'Gamal', '01014981664', 'asmagamal311@gmail.com', '$2y$10$9cwzXbpZ9Hqj/PaDMt/ILO2qAZeWqDhEdAulSrHNaK4EbWgUOKfxG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carts_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
