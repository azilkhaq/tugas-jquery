-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 19, 2023 at 08:26 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kampus_merdeka`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `first_name`, `last_name`, `email`, `phone`, `address`, `created_at`) VALUES
(1, 'Siswo', 'Handoko', 'handoko@eduwork.com', '089687476161', 'JL. RE Martadinata Kav III No 322A Desa Ancaran, Kecamatan Kuningan Kab Kuningan', '2023-03-31 11:58:55'),
(3, 'Christine', 'Hermelina', 'christine@eduwork.com', '089687476363', 'Wisma Gading Permai Menara A 3 Dki Jakarta,Jakarta,Dki Jakarta,14240,Indonesia', '2023-03-31 11:58:55'),
(4, 'Atika', 'Citra', 'atika@eduwork.com', '089687476464', 'JL Perak Barat No. 22560165,Surabaya,,22560,Indonesia', '2023-03-31 11:58:55'),
(9, 'Azil', 'Khaq', 'azilkhaq10@gmail.com', '081284277392', 'Jl. Mushola 1 JLN PLN raya Gandul Rt 11 Rw 05\r\nCINERE, KOTA DEPOK, JAWA BARAT, ID, 16512', '2023-05-19 06:21:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
