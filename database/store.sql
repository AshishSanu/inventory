-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2019 at 11:36 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_active` int(11) NOT NULL DEFAULT '0',
  `brand_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`, `brand_active`, `brand_status`) VALUES
(1, 'Axe', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categories_id` int(11) NOT NULL,
  `categories_name` varchar(255) NOT NULL,
  `categories_active` int(11) NOT NULL DEFAULT '0',
  `categories_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categories_id`, `categories_name`, `categories_active`, `categories_status`) VALUES
(1, 'Deodrant', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_contact` varchar(255) NOT NULL,
  `sub_total` varchar(255) NOT NULL,
  `vat` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `grand_total` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL,
  `due` varchar(255) NOT NULL,
  `payment_type` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `payment_place` int(11) NOT NULL,
  `gstn` varchar(255) NOT NULL,
  `order_status` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL DEFAULT '0',
  `product_id` int(11) NOT NULL DEFAULT '0',
  `quantity` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `order_item_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` text NOT NULL,
  `brand_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_image`, `brand_id`, `categories_id`, `quantity`, `rate`, `active`, `status`) VALUES
(1, 'abc', '../assests/images/stock/5762913615c63b721f0450.png', 1, 1, '12', '125', 2, 2),
(2, 'ICT', '../assests/images/stock/6521557655c63cbd75868c.png', 1, 1, '123', '8970', 1, 1),
(3, 'Android', '../assests/images/stock/6068545065c67fe64230cf.png', 1, 1, '2', '12000', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(500) NOT NULL,
  `project_team` varchar(300) NOT NULL,
  `project_duration` varchar(300) NOT NULL,
  `project_start_date` date NOT NULL,
  `project_end_date` date DEFAULT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_name`, `project_team`, `project_duration`, `project_start_date`, `project_end_date`, `status`) VALUES
(1, 'abcdef', '84NRV-6CJR6-DBDXH-FYTBF-4X49V', 'windows 8', '2019-02-15', '0000-00-00', 2),
(2, 'Abhishek kr', '1', '10 Months', '2019-02-15', '2019-02-20', 2),
(3, '', '', '', '0000-00-00', '0000-00-00', 2),
(4, '', '', '', '0000-00-00', '0000-00-00', 1),
(5, '', '', '', '0000-00-00', '0000-00-00', 1),
(6, '', '', '', '0000-00-00', '0000-00-00', 1),
(7, '1234', '12233', '211', '2019-01-12', '0000-00-00', 1),
(8, '', '', '', '0000-00-00', '0000-00-00', 1),
(9, '', '', '', '0000-00-00', '0000-00-00', 1),
(10, '', '', '', '0000-00-00', '0000-00-00', 1),
(11, '', '', '', '0000-00-00', '0000-00-00', 1),
(12, '', '', '', '0000-00-00', '0000-00-00', 1),
(13, '', '', '', '0000-00-00', '0000-00-00', 1),
(14, '', '', '', '0000-00-00', '0000-00-00', 1),
(15, '', '', '', '0000-00-00', '0000-00-00', 1),
(16, '', '', '', '0000-00-00', '0000-00-00', 1),
(17, '', '', '', '0000-00-00', '0000-00-00', 1),
(18, '', '', '', '0000-00-00', '0000-00-00', 1),
(19, '', '', '', '0000-00-00', '0000-00-00', 1),
(20, '', '', '', '0000-00-00', '0000-00-00', 1),
(21, '', '', '', '0000-00-00', '0000-00-00', 1),
(22, '', '', '', '0000-00-00', '0000-00-00', 1),
(23, 'rgwergw', 'rgwer', '2', '0000-00-00', '0000-00-00', 1),
(1282, 'fgbfgbfg', 'aasas', '2', '2019-02-15', '2019-03-01', 2),
(1283, 'abhishek', '4 months', '1', '2019-02-14', '2019-02-15', 2),
(1284, 'Ashish', 'ashish', '18', '2019-02-01', '2019-02-01', 1),
(1285, '', '', '', '0000-00-00', '0000-00-00', 1),
(1286, 'Ashish Sanu', 'Delta', '12 Months', '2019-02-13', '2019-02-27', 1),
(1287, 'abc', 'abc', 'abc', '2019-02-21', '2019-02-21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` int(11) NOT NULL,
  `session_id` varchar(300) NOT NULL,
  `user_name` varchar(300) NOT NULL,
  `user_status` varchar(300) NOT NULL DEFAULT 'offline',
  `project_name` varchar(300) NOT NULL,
  `last_update_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `session_start_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `total_up_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `session_id`, `user_name`, `user_status`, `project_name`, `last_update_time`, `session_start_time`, `total_up_time`) VALUES
(1, '', 'ashish', 'offline', 'abc', '2019-02-16 20:01:15', '2019-02-15 19:36:04', 124903),
(12345, '', 'test', 'offline', '', '2019-02-16 20:01:15', '2019-02-16 19:36:04', 0),
(12346, 'fccl9j0hlpn377u19bnq9gokot', 'admin', '', '', '2019-02-16 18:44:08', '2019-02-16 14:14:08', 0),
(12347, 'fccl9j0hlpn377u19bnq9gokot', 'admin', '', '', '2019-02-16 18:44:08', '2019-02-16 14:14:08', 0),
(12348, 'fccl9j0hlpn377u19bnq9gokot', 'admin', '', '', '2019-02-16 18:44:08', '2019-02-16 14:14:08', 0),
(12349, 'fccl9j0hlpn377u19bnq9gokot', 'admin', '', '', '2019-02-16 18:44:08', '2019-02-16 14:14:08', 0),
(12350, 'fccl9j0hlpn377u19bnq9gokot1550342820', 'admin', '', '', '2019-02-16 18:47:04', '2019-02-16 14:17:04', 0),
(12351, 'fccl9j0hlpn377u19bnq9gokot1550343429', 'admin', 'offline', '', '2019-02-16 18:57:48', '0000-00-00 00:00:00', 0),
(12352, 'fccl9j0hlpn377u19bnq9gokot1550343767', 'admin', 'offline', '', '2019-02-16 19:03:54', '0000-00-00 00:00:00', 0),
(12353, 'fccl9j0hlpn377u19bnq9gokot1550343836', 'admin', 'offline', '', '2019-02-16 19:07:58', '2019-02-16 19:07:58', 0),
(12354, 'fccl9j0hlpn377u19bnq9gokot1550344080', 'admin', 'offline', '', '2019-02-16 19:09:14', '2019-02-16 19:09:14', 0),
(12355, 'fccl9j0hlpn377u19bnq9gokot1550344220', 'admin', 'offline', '', '2019-02-16 19:10:45', '0000-00-00 00:00:00', 0),
(12356, 'fccl9j0hlpn377u19bnq9gokot1550344247', 'admin', 'offline', '', '2019-02-16 19:12:02', '0000-00-00 00:00:00', 0),
(12357, 'fccl9j0hlpn377u19bnq9gokot1550344324', 'admin', 'offline', '', '2019-02-16 19:18:24', '0000-00-00 00:00:00', 0),
(12358, 'fccl9j0hlpn377u19bnq9gokot1550344706', 'admin', 'offline', '', '2019-02-16 19:22:17', '0000-00-00 00:00:00', 0),
(12359, 'fccl9j0hlpn377u19bnq9gokot1550344939', 'admin', 'offline', '', '2019-02-16 19:23:28', '0000-00-00 00:00:00', 0),
(12360, 'fccl9j0hlpn377u19bnq9gokot1550345184', 'admin', 'offline', '', '2019-02-16 19:27:23', '0000-00-00 00:00:00', 0),
(12361, 'fccl9j0hlpn377u19bnq9gokot1550345246', 'admin', 'offline', '', '2019-02-16 19:28:05', '0000-00-00 00:00:00', 0),
(12362, 'fccl9j0hlpn377u19bnq9gokot1550345287', 'admin', 'offline', '', '2019-02-16 19:29:57', '0000-00-00 00:00:00', 0),
(12363, 'fccl9j0hlpn377u19bnq9gokot1550345399', 'admin', 'offline', '', '2019-02-16 19:35:34', '0000-00-00 00:00:00', 0),
(12364, 'fccl9j0hlpn377u19bnq9gokot1550345737', 'admin', 'offline', '', '2019-02-16 19:36:19', '2019-02-16 15:05:37', 0),
(12365, 'fccl9j0hlpn377u19bnq9gokot1550345802', 'admin', 'offline', '', '2019-02-16 19:42:48', '2019-02-16 15:06:42', 0),
(12366, 'fccl9j0hlpn377u19bnq9gokot1550346169', 'admin', 'offline', '', '2019-02-16 19:43:25', '2019-02-16 15:12:49', 0),
(12367, 'fccl9j0hlpn377u19bnq9gokot1550346207', 'admin', 'offline', '', '2019-02-16 19:44:49', '2019-02-16 15:13:27', 0),
(12368, 'fccl9j0hlpn377u19bnq9gokot1550346291', 'admin', 'offline', '', '2019-02-16 19:45:57', '2019-02-16 20:44:51', 0),
(12369, 'fccl9j0hlpn377u19bnq9gokot1550346359', 'admin', 'offline', '', '2019-02-16 19:46:25', '2019-02-16 19:45:59', 0),
(12370, 'fccl9j0hlpn377u19bnq9gokot1550346396', 'admin', 'offline', '', '2019-02-16 19:52:22', '2019-02-16 19:46:36', 0),
(12371, 'fccl9j0hlpn377u19bnq9gokot1550346744', 'admin', 'offline', '', '2019-02-16 19:52:27', '2019-02-16 19:52:24', 0),
(12372, 'fccl9j0hlpn377u19bnq9gokot1550346855', 'admin', 'offline', '', '2019-02-16 20:06:03', '2019-02-16 19:54:15', 0),
(12373, 'fccl9j0hlpn377u19bnq9gokot1550347565', 'admin', 'offline', '', '2019-02-16 20:06:09', '2019-02-16 20:06:05', 0),
(12374, 'fccl9j0hlpn377u19bnq9gokot1550347593', 'admin', 'offline', '', '2019-02-16 20:06:37', '2019-02-16 20:06:33', 0),
(12375, 'fccl9j0hlpn377u19bnq9gokot1550347680', 'admin', 'offline', '', '2019-02-16 20:08:02', '2019-02-16 20:08:00', 0),
(12376, 'fccl9j0hlpn377u19bnq9gokot1550347720', 'admin', 'offline', '', '2019-02-16 20:08:44', '2019-02-16 20:08:40', 0),
(12377, 'fccl9j0hlpn377u19bnq9gokot1550347751', 'admin', 'offline', '', '2019-02-16 20:09:14', '2019-02-16 20:09:11', 0),
(12378, 'fccl9j0hlpn377u19bnq9gokot1550347827', 'admin', 'offline', '', '2019-02-16 20:10:30', '2019-02-16 20:10:27', 0),
(12379, 'fccl9j0hlpn377u19bnq9gokot1550347853', 'admin', 'offline', '', '2019-02-16 20:10:56', '2019-02-16 20:10:53', 0),
(12380, 'fccl9j0hlpn377u19bnq9gokot1550347896', 'admin', 'offline', '', '2019-02-16 20:11:39', '2019-02-16 20:11:36', 0),
(12381, 'fccl9j0hlpn377u19bnq9gokot1550348033', 'admin', 'offline', '', '2019-02-16 20:13:56', '2019-02-16 20:13:53', 0),
(12382, 'fccl9j0hlpn377u19bnq9gokot1550348206', 'admin', 'offline', '', '2019-02-16 20:16:49', '2019-02-16 20:16:46', 0),
(12383, 'fccl9j0hlpn377u19bnq9gokot1550348255', 'admin', 'offline', '', '2019-02-16 20:17:39', '2019-02-16 20:17:35', 0),
(12384, 'fccl9j0hlpn377u19bnq9gokot1550348286', 'admin', 'offline', '', '2019-02-16 20:18:09', '2019-02-16 20:18:06', 0),
(12385, 'fccl9j0hlpn377u19bnq9gokot1550348392', 'admin', 'offline', '', '2019-02-16 20:19:55', '2019-02-16 20:19:52', 0),
(12386, 'fccl9j0hlpn377u19bnq9gokot1550348539', 'admin', 'offline', '', '2019-02-16 20:22:22', '2019-02-16 20:22:19', 0),
(12387, 'fccl9j0hlpn377u19bnq9gokot1550348611', 'admin', 'offline', '', '2019-02-16 20:23:34', '2019-02-16 20:23:31', 0),
(12388, 'fccl9j0hlpn377u19bnq9gokot1550348636', 'admin', 'offline', '', '2019-02-16 20:24:00', '2019-02-16 20:23:56', 0),
(12389, 'fccl9j0hlpn377u19bnq9gokot1550348657', 'admin', 'offline', '', '2019-02-16 20:24:47', '2019-02-16 20:24:17', 0),
(12390, 'fccl9j0hlpn377u19bnq9gokot1550348742', 'admin', 'offline', '', '2019-02-16 20:25:45', '2019-02-16 20:25:42', 0),
(12391, 'fccl9j0hlpn377u19bnq9gokot1550397232', 'admin', 'offline', '', '2019-02-17 10:25:50', '2019-02-17 09:53:52', 0),
(12392, 'f6bqgr98vhtqnitg8mtjcte2mu1550397670', 'ashish', 'offline', 'abc', '2019-02-17 10:33:45', '2019-02-17 10:01:10', 0),
(12393, 'fccl9j0hlpn377u19bnq9gokot1550399157', 'admin', 'offline', '', '2019-02-17 10:34:19', '2019-02-17 10:25:57', 0),
(12394, 'f6bqgr98vhtqnitg8mtjcte2mu1550399643', 'ashish', 'online', 'abc', '2019-02-17 10:34:03', '2019-02-17 10:34:03', 0),
(12395, 'fccl9j0hlpn377u19bnq9gokot1550399665', 'admin', 'online', '', '2019-02-17 10:34:25', '2019-02-17 10:34:25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `system`
--

CREATE TABLE `system` (
  `system_id` varchar(300) NOT NULL,
  `serial_number` varchar(300) NOT NULL,
  `product_key` varchar(300) NOT NULL,
  `oem` varchar(300) NOT NULL,
  `date_of_allocation` date NOT NULL,
  `system_user` varchar(300) NOT NULL,
  `project` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system`
--

INSERT INTO `system` (`system_id`, `serial_number`, `product_key`, `oem`, `date_of_allocation`, `system_user`, `project`) VALUES
('123', 'wedweadaf', 'gasdfgvsdfgv', 'gsfdgdsfgsdf', '2019-02-15', 'gfsdgdsf', 'sdgfdsg'),
('2', 'ahbdwh12334hiufv fu', 'asdfghjk123456sdfghjerty', 'windows', '2019-02-21', 'Ashish', 'Bada Wala'),
('3', 'vn n', 'mghm', 'jgmg', '2019-02-26', 'vkj', 'bmbhjm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `project` varchar(300) NOT NULL,
  `status` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_label` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `project`, `status`, `email`, `user_label`) VALUES
(0, 'ccxc', 'de59bd9061c93855e3fdd416e26f27a6', 'xxxxxxxxxxxx', 'cxcxc', 'a@b.c', 1),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 'online', '', 1),
(3, 'ashish', '202cb962ac59075b964b07152d234b70', 'abc', 'offline', 'ashish.kumar@tracodigital.com', 2),
(4, 'sanu', '7b69ad8a8999d4ca7c42b8a729fb0ffd', 'asdf', 'online', 'a@n.m', 1),
(5, 'sbh', '9071791b3ac926cffdb32147c75af7d6', 'bdb', 'sdcjs', 'jdbb@s.c', 1),
(6, 'admin2', '81dc9bdb52d04dc20036dbd8313ed055', 'asd', 'online', 's@b.n', 1),
(7, 'a', '202cb962ac59075b964b07152d234b70', 'asf', '', 'a@b.c', 2),
(123, '31323', '032dd17b77fab7d51a476c5ff2b5659c', 'ffffffrt', 'grthtyh@ffgd.hgb', 'grthtyh@ffgd.hgb', 1),
(145, 'sahdv', 'a9234d514c3fc1fbcab586a27a20f18f', 'hhgv', 'hgcc', 'a.c@b.v', 1),
(333, '2222', '12e086066892a311b752673a28583d3f', '4343', '45t5', 'userLabel@userLabel.userLabel', 2),
(1234, 'ed,s,felsf', 'c3d0f59d9b8db2494fbf4486d7e634c7', 'fsfd', 'dd', 'dd@gmail.com', 1),
(12364, 'ffes', 'c37260f99997f0f509e4aad460719b92', 'dds', 'dd', 'sdd@b.com', 1),
(12636, 'aggffff', '27f192f06dea5ef7fb165ef9c6300b80', 'ddddd', 'fffff', 'abc@xyz.com', 1),
(556565, '555', '15de21c670ae7c3f6f3f1f37029303c9', '555', '6666Q', 'SDSFG@ZDFG.GBGB', 1),
(1234568, 'Abhishek', '202cb962ac59075b964b07152d234b70', 'Bada Wala', 'online', 'a@b.c', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`order_item_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system`
--
ALTER TABLE `system`
  ADD PRIMARY KEY (`system_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12396;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
