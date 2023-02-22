-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2023 at 12:57 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yogurt`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_letter`
--

CREATE TABLE `news_letter` (
  `id` int(11) NOT NULL,
  `email_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news_letter`
--

INSERT INTO `news_letter` (`id`, `email_address`) VALUES
(1, 'jeyson.abrogar@getmyinvoices.com'),
(2, 'jeyson.abrogar@getmyinvoices.com'),
(3, 'jeyson.abrogar@getmyinvoices.com'),
(4, 'jeyson.abrogar@getmyinvoices.com'),
(5, 'jeyson.abrogar@getmyinvoices.com'),
(6, 'jeyson.abrogar@getmyinvoices.com'),
(7, 'jeysonabrogar.info@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` int(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `orders` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `number`, `method`, `street`, `city`, `province`, `orders`, `amount`, `date_time`) VALUES
(2, 'Martina Hinton', 298, 'cash on delivery', 'Vel unde voluptatibu', 'Aute et dolore possi', 'Necessitatibus vero ', 'Tobias Mendez (1) , Nyssa Case (1) , Imelda Ellis (1) , Adrienne Forbes (1) ', 2559, '2023-02-08 09:30:32'),
(3, 'Tate Christensen', 42, 'gcash', 'Autem aut facilis do', 'Quisquam et elit ab', 'Sint numquam ut corp', 'Tobias Mendez (1) , Nyssa Case (1) , Imelda Ellis (1) , Adrienne Forbes (1) ', 2559, '2023-02-08 09:49:38'),
(5, 'Wyatt Everett', 416, 'gcash', 'Esse mollit et rerum', 'Et blanditiis cumque', 'Sapiente velit in ne', 'Tobias Mendez (1) , Nyssa Case (1) , Imelda Ellis (1) , Adrienne Forbes (1) ', 2559, '2023-02-08 09:58:52'),
(6, 'Sonya Matthews', 235, 'cash on delivery', 'Cupiditate reprehend', 'Esse adipisci verita', 'Aut fuga Minim natu', 'Tobias Mendez (1) , Nyssa Case (1) , Imelda Ellis (1) , Adrienne Forbes (1) ', 2559, '2023-02-08 09:59:20'),
(9, 'Jillian Crane', 618, 'cash on delivery', 'Quos hic est molliti', 'Ducimus id dolore n', 'Dignissimos minim mo', 'Tobias Mendez (1) , Nyssa Case (1) , Imelda Ellis (1) , Adrienne Forbes (1) ', 2559, '2023-02-08 10:05:46'),
(10, 'Miriam Justice', 486, 'gcash', 'Est similique nulla ', 'Unde amet quia ea v', 'Hic consequatur Ill', 'Tobias Mendez (1) , Nyssa Case (1) , Imelda Ellis (1) , Adrienne Forbes (1) , Rylee Mckinney (1) ', 2784, '2023-02-08 10:13:23'),
(12, 'Reese Delaney', 416, 'cash on delivery', 'Nisi ea deserunt in ', 'Quae eos cupidatat ', 'Totam sapiente volup', 'Tobias Mendez (1) , Nyssa Case (1) ', 1069, '2023-02-08 10:22:17'),
(13, 'Yen Travis', 839, 'gcash', 'Ut magnam excepturi ', 'Id quam aut mollitia', 'Fugiat dolorem itaqu', 'Tobias Mendez (1) , Nyssa Case (1) ', 1069, '2023-02-08 10:24:10'),
(14, 'Maisie Hendricks', 249, 'cash on delivery', 'Nostrud cupidatat su', 'Sunt impedit rerum ', 'Unde perspiciatis c', 'Tobias Mendez (1) , Nyssa Case (1) , Imelda Ellis (1) , Rylee Mckinney (1) , Adrienne Forbes (1) ', 2784, '2023-02-08 10:24:43'),
(16, 'Uma Bruce', 193, 'cash on delivery', 'Tempor recusandae V', 'Totam voluptas asper', 'Commodi incidunt vo', 'Rylee Mckinney (1) , Adrienne Forbes (1) ', 900, '2023-02-09 05:08:32'),
(17, 'Bernard Velazquez', 497, 'cash on delivery', 'Illo aut et ad molli', 'Fugit ea reprehende', 'Debitis dolores et a', 'Hiroko Gill (3) Adrienne Forbes (1) ', 677, '2023-02-13 03:06:20'),
(18, 'Jakeem Orr', 932, 'cash on delivery', 'Sunt qui aut conseq', '', '', 'Ayanna Leblanc (5) , Vanna Fletcher (1) ', 4609, '2023-02-13 03:25:52'),
(19, 'Colton Bartlett', 715, 'gcash', 'Proident nisi rem p', '', '', 'Ayanna Leblanc (5) , Vanna Fletcher (1) ', 4609, '2023-02-13 03:28:15'),
(20, 'Katelyn Valencia', 819, 'gcash', 'Ipsum quis aut perfe', '', '', 'Ayanna Leblanc (1) , Vanna Fletcher (1) , Idola Gates (1) ', 1500, '2023-02-13 03:30:05'),
(21, 'Signe Castillo', 41, 'gcash', 'Accusamus repellendu', '', '', 'Ayanna Leblanc (1) ', 857, '2023-02-13 03:57:43'),
(22, 'Kolobot', 2147483647, 'cash on delivery', '12115 best place on earth', '', '', 'Ube and Cream (1) , Strawberry Sorbet (1) , Chocolate Overload (1) , Mango Peach Sundae (1) , Peanut with Cheese (1) , Three Seasons (1) ', 2100, '2023-02-16 03:20:47'),
(23, 'Joshua Nunez', 2147483647, 'cash on delivery', '666666666666666', '', '', 'Ube and Cream (2) ,Strawberry Sorbet (1) ,Chocolate Overload (1) ,Mango Peach Sundae (1) ,Peanut with Cheese (1) ,Three Seasons (1) ', 2220, '2023-02-16 10:43:24');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_code` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `sold` int(255) NOT NULL,
  `on_hand` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `price`, `image`, `sold`, `on_hand`) VALUES
(80, 1, 'Ube and Cream', 100, 'recipe6.jpg', 0, 100),
(81, 2, 'Strawberry Sorbet', 200, 'recipe1.jpg', 0, 100),
(82, 3, 'Chocolate Overload', 300, 'recipe5.jpg', 0, 100),
(83, 4, 'Mango Peach Sundae', 400, 'recipe4.jpg', 0, 100),
(84, 5, 'Peanut with Cheese', 500, 'recipe2.jpg', 0, 100),
(85, 6, 'Three Seasons', 600, 'recipe3.png', 0, 100);

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` int(11) NOT NULL,
  `product_code` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `product_code`, `product_name`, `quantity`, `date_time`) VALUES
(2, 0, 'Burton Sutton', 958, '2023-02-16 12:05:16'),
(3, 1, 'Ube and Cream', 1000, '2023-02-16 03:23:03'),
(4, 2, 'Strawberry Sorbet', 1000, '2023-02-16 03:26:12'),
(5, 3, 'Chocolate Overload', 2000, '2023-02-16 03:26:23'),
(6, 4, 'Mango Peach Sundae', 5000, '2023-02-16 03:26:32'),
(7, 5, 'Peanut with Cheese', 5000, '2023-02-16 03:26:45'),
(8, 6, 'Three Seasons', 7000, '2023-02-16 03:26:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `role`, `created`) VALUES
(1, 'leo', 'charles', '202cb962ac59075b964b07152d234b70', 'super_admin', '2023-02-09 02:24:38'),
(4, 'Gretchen Barry', 'nanashi', '202cb962ac59075b964b07152d234b70', 'super_admin', '2023-02-09 02:39:51'),
(7, 'Galena Hancock', 'balong', '202cb962ac59075b964b07152d234b70', 'admin', '2023-02-09 02:53:37'),
(8, 'jey', '111', '698d51a19d8a121ce581499d7b701668', 'super_admin', '2023-02-10 19:23:09'),
(9, 'jey', '111', '698d51a19d8a121ce581499d7b701668', 'super_admin', '2023-02-10 20:38:39'),
(10, '222', '222', 'bcbe3365e6ac95ea2c0343a2395834dd', 'admin', '2023-02-13 06:08:54'),
(11, 'totoy_mola', '333', '310dcbbf4cce62f762a2aaa148d556bd', 'super_admin', '2023-02-13 07:58:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_letter`
--
ALTER TABLE `news_letter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_code` (`product_code`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_code` (`product_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `news_letter`
--
ALTER TABLE `news_letter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
