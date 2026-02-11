-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2026 at 09:34 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sql_functions_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `hire_date` date DEFAULT NULL,
  `salary` decimal(10,2) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `last_name`, `email`, `phone`, `hire_date`, `salary`, `department`, `birth_date`, `city`, `country`) VALUES
(1, 'Froyd', 'Carbajosa', 'froyd.carbajosa@company.com', '555-0101', '2020-01-15', 55000.00, 'Sales', '1990-05-20', 'New York', 'USA'),
(2, 'Ethan', 'Demeterio', 'ethan.demeterio@company.com', '555-0102', '2019-03-22', 65000.50, 'Marketing', '1988-08-15', 'Los Angeles', 'USA'),
(3, 'Ruzzel', 'Padrones', 'ruzzel.padrones@company.com', '555-0103', '2021-06-10', 72000.75, 'IT', '1992-12-03', 'Chicago', 'USA'),
(4, 'Liza', 'Gella', 'liza.gella@company.com', '555-0104', '2018-11-05', 58000.00, 'HR', '1991-03-28', 'Houston', 'USA'),
(5, 'Shane', 'Carbajosa', 'shane.carbajosa@company.com', '555-0105', '2022-02-14', 48000.25, 'Sales', '1995-07-11', 'Phoenix', 'USA'),
(6, 'Shaira', 'Carbajosa', 'shaira.carbajosa@company.com', '555-0106', '2020-09-30', 61000.00, 'IT', '1989-11-22', 'Philadelphia', 'USA'),
(7, 'JohnLloyd', 'Carbajosa', 'johnlloyd.carbajosa@company.com', '555-0107', '2017-04-18', 78000.50, 'Management', '1985-02-14', 'San Antonio', 'USA'),
(8, 'Alfredo', 'Carbajosa', 'alfredo.carbajosa@company.com', '555-0108', '2021-08-25', 52000.00, 'Marketing', '1993-09-08', 'San Diego', 'USA'),
(9, 'Lina ', 'Carbajosa', 'lina.carbajosa@company.com', '555-0109', '2019-12-01', 69000.75, 'IT', '1987-06-17', 'Dallas', 'USA'),
(10, 'Enji', 'Orio', 'enji.orio@company.com', '', '2023-01-10', 45000.00, 'HR', '1996-04-30', 'San Jose', 'USA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
