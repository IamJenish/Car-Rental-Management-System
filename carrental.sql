-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 04:40 PM
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
-- Database: `carrental`
--

-- --------------------------------------------------------

--
-- Table structure for table `cardetails`
--

CREATE TABLE `cardetails` (
  `car_ID` int(11) NOT NULL,
  `car_name` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `no_of_seats` int(11) DEFAULT NULL,
  `cost` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cardetails`
--

INSERT INTO `cardetails` (`car_ID`, `car_name`, `no_of_seats`, `cost`) VALUES
(1, 'Tata Altroz', 4, 50),
(2, 'Maruti Suzuki Baleno', 4, 55),
(3, 'Tata Tiago', 4, 58),
(4, 'Hyundai Grand i10', 4, 60),
(5, 'Volvo S90', 4, 180),
(6, 'Rolls Royce Phantom', 4, 200),
(7, 'Maserati Quattroporte', 2, 200),
(8, 'BMW 6 Series', 4, 200),
(9, 'Jaguar F-Pace', 4, 100),
(10, 'Range Rover Sport SVR', 4, 80),
(11, 'Porsche Macan GTS', 4, 90),
(12, 'Alfa Romeo Stelvio Quadrifoglio', 4, 110),
(13, 'Toyota Innova Crysta', 8, 60),
(14, 'Kia Carnival', 8, 80),
(15, 'Maruti XL6', 4, 70),
(16, 'Renault Triber', 8, 75),
(27, 'tata', 4, 45);

-- --------------------------------------------------------

--
-- Table structure for table `customerdetails`
--

CREATE TABLE `customerdetails` (
  `customername` varchar(35) DEFAULT NULL,
  `car_ID` varchar(10) DEFAULT NULL,
  `car_name` varchar(30) DEFAULT NULL,
  `no_of_seats` varchar(10) DEFAULT NULL,
  `distance` varchar(20) DEFAULT NULL,
  `tcost` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerdetails`
--

INSERT INTO `customerdetails` (`customername`, `car_ID`, `car_name`, `no_of_seats`, `distance`, `tcost`) VALUES
('Jenish', '3', 'Tata Tiago', '4', '200', '2320'),
('Jenish', '3', 'Tata Tiago', '4', '80', '2880'),
('', '1', 'Tata Altroz', '4', '12', '120'),
('bharath', '16', 'Renault Triber', '8', '100', '1500'),
('Bala', '11', 'Porsche Macan GTS', '4', '232', '4176'),
('Bala', '6', 'Rolls Royce Phantom', '4', '232', '9280'),
('Jenish', '1', 'Tata Altroz', '4', '124', '1240');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cname` varchar(30) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `cno` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cname`, `email`, `cno`, `pass`) VALUES
('Jenish', 'jenish9488@gmail.com', '6374565520', 'jenish'),
('Bala', 'bala@gmail.com', '8465121541', 'bala123'),
('Bala', 'bala@gmail.com', '9943872523', 'udhaya'),
('bharath', 'suthersanbharath@gma', '9677389816', 'bharaTH2002'),
('jilla', 'jilla@gmail.com', '41121546845132', 'jilla');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cardetails`
--
ALTER TABLE `cardetails`
  ADD PRIMARY KEY (`car_ID`),
  ADD UNIQUE KEY `car_name` (`car_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
