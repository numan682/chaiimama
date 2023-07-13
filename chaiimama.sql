-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2023 at 01:39 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chaiimama`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` text DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `categories` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `details`, `active`, `price`, `image`, `categories`) VALUES
(7, 'Deshi Breakfast meal', 'Deshi Breakfast meal', 1, 299.00, 'doi-fuchka-pani-puri-gol-gappay-with-sour-water-yogurt-served-dish-isolated-table-top-view-indian-bangladeshi-pakistani-street-food.jpg', 'all-day-breakfast'),
(8, 'English Breakfast meal', 'English Breakfast meal', 1, 299.00, 'doi-fuchka-pani-puri-gol-gappay-with-sour-water-yogurt-served-dish-isolated-table-top-view-indian-bangladeshi-pakistani-street-food.jpg', NULL),
(9, 'Vegan Breakfast meal', 'Vegan Breakfast meal', 1, 299.00, 'doi-fuchka-pani-puri-gol-gappay-with-sour-water-yogurt-served-dish-isolated-table-top-view-indian-bangladeshi-pakistani-street-food.jpg', NULL),
(10, ' Egg Burgers Meal', ' Egg Burgers Meal', 1, 299.00, 'doi-fuchka-pani-puri-gol-gappay-with-sour-water-yogurt-served-dish-isolated-table-top-view-indian-bangladeshi-pakistani-street-food.jpg', NULL),
(11, 'Club Sandwich Meal', 'Club Sandwich Meal\r\n', 1, 299.00, 'doi-fuchka-pani-puri-gol-gappay-with-sour-water-yogurt-served-dish-isolated-table-top-view-indian-bangladeshi-pakistani-street-food.jpg', NULL),
(12, '.Cazuan Chicken Panini Meal', '.Cazuan Chicken Panini Meal', 1, 299.00, 'doi-fuchka-pani-puri-gol-gappay-with-sour-water-yogurt-served-dish-isolated-table-top-view-indian-bangladeshi-pakistani-street-food.jpg', NULL),
(14, 'Veg kebab', 'Veg kebab', 1, 299.00, 'sattu-sharbat-is-cooling-sweet-drink-made-summer-with-roasted-black-chickpea-flour-barley-suger-salt-water-served-glass-selective-focus.jpg', 'street-food'),
(15, 'Fish kebab', 'Fish kebab\r\n', 1, 299.00, 'sattu-sharbat-is-cooling-sweet-drink-made-summer-with-roasted-black-chickpea-flour-barley-suger-salt-water-served-glass-selective-focus.jpg', 'street-food'),
(16, 'Fuchka/ Panipuri', 'Fuchka/ Panipuri\r\n', 1, 299.00, 'doi-fuchka-pani-puri-gol-gappay-with-sour-water-yogurt-served-dish-isolated-table-top-view-indian-bangladeshi-pakistani-street-food.jpg', 'street-food'),
(17, 'Somosa chart', 'Somosa chart', 1, 299.00, 'sattu-sharbat-is-cooling-sweet-drink-made-summer-with-roasted-black-chickpea-flour-barley-suger-salt-water-served-glass-selective-focus.jpg', 'street-food'),
(18, 'Chicken Tikka Roll', 'Chicken Tikka Roll', 1, 299.00, 'sattu-sharbat-is-cooling-sweet-drink-made-summer-with-roasted-black-chickpea-flour-barley-suger-salt-water-served-glass-selective-focus.jpg', 'street-food'),
(19, 'Veggie Roll', 'Veggie Roll', 1, 299.00, 'sattu-sharbat-is-cooling-sweet-drink-made-summer-with-roasted-black-chickpea-flour-barley-suger-salt-water-served-glass-selective-focus.jpg', 'street-food'),
(20, 'Bombay potato patties', 'Bombay potato patties', 1, 299.00, 'doi-fuchka-pani-puri-gol-gappay-with-sour-water-yogurt-served-dish-isolated-table-top-view-indian-bangladeshi-pakistani-street-food.jpg', 'patty'),
(21, 'Chicken tikka patties', 'Chicken tikka patties', 1, 299.00, 'doi-fuchka-pani-puri-gol-gappay-with-sour-water-yogurt-served-dish-isolated-table-top-view-indian-bangladeshi-pakistani-street-food.jpg', 'patty'),
(22, 'Rice box', 'Rice box', 1, 299.00, 'club-sandwich-with-fries-isolated-cutting-board-side-view-fastfood-wooden-background.jpg', 'lunch-box'),
(23, 'Noodles Box', 'Noodles Box', 1, 899.00, 'club-sandwich-with-fries-isolated-cutting-board-side-view-fastfood-wooden-background.jpg', 'lunch-box'),
(24, 'Deshi Karack chaii', 'Deshi Karack chaii', 1, 299.00, 'concept-hot-drink-with-tea-isolated-white-background.jpg', 'tea'),
(25, 'English Chaii', 'English Chaii', 1, 299.00, 'cup-tea-with-mint-leaves-dark-background.jpg', 'tea'),
(26, 'Mint chaii', 'Mint chaii', 1, 299.00, 'cup-tea.jpg', 'tea'),
(27, ' Ginger chaii ', ' Ginger chaii ', 1, 299.00, 'cup-tea.jpg', 'tea'),
(28, 'Honey and lemon chaii', 'Honey and lemon chaii\r\n', 1, 299.00, 'cup-tea.jpg', 'tea');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
