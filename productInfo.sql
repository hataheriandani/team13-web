-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Mar 07, 2023 at 09:04 AM
-- Server version: 8.0.32
-- PHP Version: 8.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `team13`
--

-- --------------------------------------------------------

--
-- Table structure for table `productInfo`
--

CREATE TABLE `productInfo` (
  `productID` int NOT NULL,
  `product_Name` varchar(60) NOT NULL,
  `availality` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` varchar(300) NOT NULL,
  `image` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` decimal(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `productInfo`
--

INSERT INTO `productInfo` (`productID`, `product_Name`, `availality`, `description`, `image`, `price`) VALUES
(2, 'SIX PIECE Of SWEDISH BEEF', 'BREAKFAST', 'Sounds good, tastes even better.\r\n\r\nBeef Taco is filled with tasty taco-seasoned ground beef and crunchy corn chips.', '', 5.50),
(3, 'A SWIST ON THE CLASSIC RICOTTA ', '', 'Lovely, rich and rich Italian BMT® is a pleasure just by thinking about it. Salami, pepperoni, ham and vegetables and side dishes of your choice. Guaranteed hunger quencher!', '', 8.00),
(5, 'PANCAKE WITH CHOCOLATE ', '', 'Combine the roasted pancake with your choice of bread and fresh honey. You can add a kick to the  bread by ordering it with strawberries and sauce.', '', 7.66),
(6, 'CHICKEN SHEWER', 'LUNCH', 'Delicious bread, a juicy chicken breast fillet and your choice of vegetables and side dishes. It has the ingredients for a masterpiece!', '', 8.50),
(7, 'CHICKEN Tah-chin', '', 'This Subi® is a wonderful, meaty treat! Delicious fillings, salami, pepperoni and your favorite vegetables are guaranteed to make your tongue water.', '', 9.50),
(8, 'VEGAN VEGGIE STEAK', '', 'A spicy vegan steak suitable for those following a vegan diet, with 44% vegetables: red onion, red pepper, green pepper, carrot, spinach, corn, white cabbage, pea, green chili, garlic.', '', 7.50),
(9, 'ROASTED CHICKEN WITH COOKED RICE', 'DINNER', 'This Subi® contains a delicious blend of teriyaki-seasoned chicken and fresh vegetables. Chicken Teriyaki is one of our customers\' long-term favorites for a reason!', '', 9.95),
(10, 'VEGGIE DELITE®', '', 'Veggie Delite® contains all your favorite vegetables and, if you wish, also tasty cheese. Top off the beauty with some tasty sauces and the feasting can begin!', '', 6.00),
(11, 'BROAD BEAN COOKED RICE WITH MEAT', '', 'Simple is beautiful – and delicious. Plenty of ham combined with vegetables and side dishes of your choice.', '', 8.99);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productInfo`
--
ALTER TABLE `productInfo`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productInfo`
--
ALTER TABLE `productInfo`
  MODIFY `productID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
