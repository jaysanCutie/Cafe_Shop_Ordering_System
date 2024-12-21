-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:4306
-- Generation Time: Dec 21, 2024 at 08:17 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deja_brew`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `customer_id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` mediumtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`customer_id`, `product_id`, `name`, `price`, `image`, `quantity`) VALUES
(0, 18, 'classic coffee', '55', 'classic coffee.png', 3),
(0, 25, 'Mocha Latte', '75', 'Mocha Latte.png', 2),
(0, 26, 'croissant', '30', 'croissant.png', 1),
(0, 27, 'cupcakes', '35', 'cupcake.png', 1),
(1, 29, 'chuk coffe cake', '69', 'chuk coffe cake.png', 1),
(2, 18, 'classic coffee', '55', 'classic coffee.png', 3),
(3, 18, 'classic coffee', '55', 'classic coffee.png', 1),
(4, 18, 'classic coffee', '55', 'classic coffee.png', 1),
(4, 19, 'espresso', '65', 'espresso.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `transaction_id` int(255) NOT NULL,
  `customer_id` int(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `total_products` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `user_id` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`transaction_id`, `customer_id`, `method`, `date`, `total_products`, `total_price`, `user_id`) VALUES
(146, 0, 'GCash', '2024-12-17', 'classic coffee (1) , Mocha Latte (1) , cupcakes (1) ', '165', 74385625),
(147, 1, 'cash', '2024-12-17', 'chuk coffe cake (1) ', '69', 74385625),
(148, 0, 'cash', '2024-12-18', 'classic coffee (1) , Mocha Latte (1) , cupcakes (1) ', '165', 74385625),
(149, 2, 'cash', '2024-12-18', 'classic coffee (3) ', '165', 74385625),
(152, 0, 'cash', '2024-12-18', 'classic coffee (3) , Mocha Latte (1) , cupcakes (1) ', '275', 39373713),
(153, 3, 'cash', '2024-12-18', 'classic coffee (1) ', '55', 39373713),
(154, 0, 'cash', '2024-12-19', 'classic coffee (3) , Mocha Latte (1) , cupcakes (1) ', '275', 39373713),
(155, 0, 'cash', '2024-12-21', 'classic coffee (3) , Mocha Latte (2) , croissant (1) , cupcakes (1) ', '380', 39373713);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(17, 'cappuccino', '99', 'Cappuccino.png'),
(18, 'classic coffee', '55', 'classic coffee.png'),
(19, 'espresso', '65', 'espresso.png'),
(23, 'matcha latte', '99', 'matcha latte.png'),
(25, 'Mocha Latte', '75', 'Mocha Latte.png'),
(26, 'croissant', '30', 'croissant.png'),
(27, 'cupcakes', '35', 'cupcake.png'),
(28, 'fig cupcake', '45', 'fig cupcake.png'),
(29, 'chuk coffe cake', '69', 'chuk coffe cake.png'),
(30, 'Mud Cake ', '55', 'Mud Cake Photography.png'),
(31, 'special leche flan', '65', 'special leche flan.png'),
(32, 'mocha caramel cake', '65', 'mocha caramel cake.png'),
(33, 'tripled layer choco cake', '69', 'tripled layer choco cake.png'),
(34, 'strawberry cream cake', '75', 'strawberry cream cake.png'),
(35, 'Cake vegan', '75', 'Cake vegan.png'),
(36, 'Keto Caramel Macchiato', '99', 'Keto Caramel Macchiato.png'),
(37, 'Caramel Coffee Banana Cake', '700', 'Caramel Coffee Banana Cake.png'),
(43, 'Burger', '155', 'b_png-removebg-preview.png'),
(44, 'Burger', '155', 'b_png-removebg-preview.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `password`, `Role`) VALUES
(20, 74385625, 'jaysan', 'david123', 'User'),
(35, 85265574, 'jayrald', '$2y$10$uL5rjb6jva2Vtb8Pp/PgSuaIgjy33BqXuW.nQTy8hKqYI7Gq4Yzm2', 'User'),
(36, 74263728, 'admin', '$2y$10$bj9wLQuYAbKBdLWmOyoR3eKtMSN8rXHwGfL44jPXpjZnYoO4OiM2.', 'Admin'),
(38, 39373713, 'jaysan.edu.ph', '$2y$10$upXza6q5H7ppfjHixJOTSOgxG4pGNGZ/QjCvOzIf4QFJtCg8x0KES', 'User'),
(39, 30961847, 'mia.edu.ph', '$2y$10$5wcPcEbkjy9yNXjxCwZebuGW7fQP.XKLAsuLl2ALqveQWhz1DANrm', 'User'),
(40, 50893321, 'Charisse.edu.ph', '$2y$10$/wkXa05zr/RteYxCFM4f3ecPoZLxveNkJnYmulSnX/W/OrvWg53zG', 'User'),
(41, 45392696, 'marjhon.edu.ph', '$2y$10$83txaBz3VnE.0Q89pLD49Od4z8/XjqZFMF0fEdZS2I6SIgKo3m92e', 'User'),
(42, 24490942, 'reynier.edu.ph', '$2y$10$oYIHOPbzSgQ5lYULL.GKqeBaro3C2KWp/ZN40tky2ehXTCX3gLo/2', 'User'),
(43, 48478766, 'luffykun', '$2y$10$JNFe0BMCGbQfo8aKmMDC7OP4DSKq9wnrPPYOeHHeuNxED1BIrCalu', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`customer_id`,`product_id`),
  ADD KEY `product_id_fk` (`product_id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`transaction_id`,`customer_id`),
  ADD KEY `customer_id_fk` (`customer_id`),
  ADD KEY `user_id_fk` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `transaction_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `product_id_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `checkout`
--
ALTER TABLE `checkout`
  ADD CONSTRAINT `customer_id_fk` FOREIGN KEY (`customer_id`) REFERENCES `carts` (`customer_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
