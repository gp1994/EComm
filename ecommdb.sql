-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2023 at 09:12 PM
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
-- Database: `ecommdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transaction_id` int(11) NOT NULL,
  `transaction_date` date NOT NULL DEFAULT current_timestamp(),
  `product_name` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `payment_name` char(50) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `transaction_address` varchar(255) NOT NULL,
  `transaction_address_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`transaction_id`, `transaction_date`, `product_name`, `product_id`, `payment_name`, `payment_id`, `transaction_address`, `transaction_address_id`) VALUES
(1, '2023-03-12', 'Rokok', 1, 'Transfer Bank', 1, 'Kebon Baru', 1),
(2, '2023-04-03', 'Rokok', 1, 'Transfer Bank', 1, 'Kampung Melayu', 2),
(1, '2023-03-12', 'Kerupuk', 2, 'Transfer Bank', 1, 'Kebon Baru', 1),
(1, '2023-03-12', 'Telor', 3, 'Gopay', 2, 'Kebon Baru', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`product_id`,`payment_id`,`transaction_id`) USING BTREE,
  ADD KEY `transactions_ibfk_1` (`transaction_address_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`transaction_address_id`) REFERENCES `customer_address` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
