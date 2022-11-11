-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2022 at 02:31 AM
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
-- Database: `mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name_bill` varchar(255) NOT NULL,
  `email_bill` int(11) NOT NULL,
  `address_bill` int(11) NOT NULL,
  `phone_bill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `img_product` varchar(255) NOT NULL,
  `name_product` varchar(255) NOT NULL,
  `price_product` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `id_bill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name_catagory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name_catagory`) VALUES
(1, 'Chó'),
(2, 'Mèo');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `comment` varchar(5000) NOT NULL,
  `ngay_binhluan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `id_catagory` int(11) NOT NULL,
  `name_catagory` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `mota` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `id_catagory`, `name_catagory`, `product_name`, `product_img`, `product_price`, `mota`) VALUES
(3, 1, 'Chó', 'Mèo mun', '2.png', '100$', ''),
(4, 1, 'Chó', 'Chó Nhật', '3.png', '1000$', ''),
(5, 1, 'Chó', 'Chó mực', '2.png', '150$', ''),
(13, 1, 'Chó', 'Chó Poodle', '3.png', '5000$', ''),
(14, 1, 'Chó', 'Chó Shiba Inu', 'shiba.jpg', '10000$', ''),
(15, 2, 'Mèo', 'Mèo Anh lông ngắn', 'meo-anh-long-ngan-xam-xanh-truong-thanh-scaled-400x400.jpg', '250$', ''),
(16, 2, 'Mèo', 'Mèo Anh lông dài', 'meo-anh-long-dai-de-thuong-400x400.jpg', '200$', ''),
(17, 2, 'Mèo', 'Mèo Ragdoll', 'ragdoll-dogily-2-400x400.jpg', '$500', ''),
(18, 2, 'Mèo', 'Mèo Scottish', 'meo-ald-trang-tai-cup-cai-8-400x400.png', '$300', ''),
(19, 2, 'Mèo', 'Mèo Ba Tư', 'meo-ba-tu-duc-dogily-3-thang-3-400x400.jpg', '800$', ''),
(20, 1, 'Chó', 'Chó Husky', 'husky-cai-3-thang-11-400x400.jpg', '500$', ''),
(21, 1, 'Chó', 'Chó Samoyed', 'samoyed-trang-cai-12-400x400.jpg', '400$', ''),
(22, 1, 'Chó', 'Chó bull', 'cho-bull-phap-duc-mau-den-3-400x400.png', '300$', ''),
(23, 1, 'Chó', 'Chó Beggie', 'cho-becgie-gsd-duc-2-thang-tuoi-thuan-chung-8-400x400.jpg', '200$', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `email`, `password`, `type`) VALUES
(24, 'Nguyễn Đăng Khải', 'admin', 'nguyendangkhai111@gmail.com', '123', 'ADM'),
(31, 'Nguyễn Đăng Khải', 'khải', 'khaindps21249@fpt.edu.com', '123', 'ADM'),
(33, 'Đăng Khải', 'nguyendangkhai', 'khai@gmail.com', '123', 'URS'),
(39, 'Khải Đăng', 'hehe', 'hehe@gmail.com', '123', 'URS'),
(40, 'dangkhai', 'dangkhai123', 'nguyendangkhai111@gmail.com', '123', 'URS'),
(41, 'dangkhai', 'dangkhai123', 'nguyendangkhai111@gmail.com', '123', 'URS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_bill` (`id_bill`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_catagory` (`id_catagory`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_bill`) REFERENCES `bill` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_catagory`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
