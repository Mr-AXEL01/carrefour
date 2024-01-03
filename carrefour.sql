-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2024 at 09:38 AM
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
-- Database: `carrefour`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `idBill` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `lineItems` varchar(255) DEFAULT NULL,
  `totalAmount` varchar(255) DEFAULT NULL,
  `refferences` varchar(255) DEFAULT NULL,
  `idClient` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cartofproduct`
--

CREATE TABLE `cartofproduct` (
  `idProduct` varchar(255) DEFAULT NULL,
  `idClient` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `idCategory` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `idClient` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `idOrder` varchar(255) NOT NULL,
  `idClient` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orderline`
--

CREATE TABLE `orderline` (
  `idOrderLine` varchar(255) NOT NULL,
  `qty` varchar(255) DEFAULT NULL,
  `idProduct` varchar(255) DEFAULT NULL,
  `idBill` varchar(255) DEFAULT NULL,
  `idOrder` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `idProduct` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `price` varchar(255) DEFAULT NULL,
  `idCategory` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` varchar(255) NOT NULL,
  `profil` varchar(255) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `adress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD KEY `idUser` (`idAdmin`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`idBill`),
  ADD KEY `idClient` (`idClient`);

--
-- Indexes for table `cartofproduct`
--
ALTER TABLE `cartofproduct`
  ADD KEY `idProduct` (`idProduct`),
  ADD KEY `idClient` (`idClient`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idCategory`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD KEY `idClient` (`idClient`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`idOrder`),
  ADD KEY `idClient` (`idClient`);

--
-- Indexes for table `orderline`
--
ALTER TABLE `orderline`
  ADD PRIMARY KEY (`idOrderLine`),
  ADD KEY `idProduct` (`idProduct`),
  ADD KEY `idBill` (`idBill`),
  ADD KEY `idOrder` (`idOrder`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idProduct`),
  ADD KEY `idCategory` (`idCategory`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
--  for dumped tables
--

--
--  for table `bill`
--
ALTER TABLE `bill`
  MODIFY `idBill` varchar(255) NOT NULL ;

--
--  for table `category`
--
ALTER TABLE `category`
  MODIFY `idCategory` varchar(255) NOT NULL ;

--
--  for table `order`
--
ALTER TABLE `order`
  MODIFY `idOrder` varchar(255) NOT NULL ;

--
--  for table `orderline`
--
ALTER TABLE `orderline`
  MODIFY `idOrderLine` varchar(255) NOT NULL ;

--
--  for table `product`
--
ALTER TABLE `product`
  MODIFY `idProduct` varchar(255) NOT NULL ;

--
--  for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` varchar(255) NOT NULL ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`idAdmin`) REFERENCES `user` (`idUser`);

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`idClient`) REFERENCES `client` (`idClient`);

--
-- Constraints for table `cartofproduct`
--
ALTER TABLE `cartofproduct`
  ADD CONSTRAINT `cartofproduct_ibfk_1` FOREIGN KEY (`idProduct`) REFERENCES `product` (`idProduct`),
  ADD CONSTRAINT `cartofproduct_ibfk_2` FOREIGN KEY (`idClient`) REFERENCES `client` (`idClient`);

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`idClient`) REFERENCES `user` (`idUser`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`idClient`) REFERENCES `client` (`idClient`);

--
-- Constraints for table `orderline`
--
ALTER TABLE `orderline`
  ADD CONSTRAINT `orderline_ibfk_1` FOREIGN KEY (`idProduct`) REFERENCES `product` (`idProduct`),
  ADD CONSTRAINT `orderline_ibfk_2` FOREIGN KEY (`idBill`) REFERENCES `bill` (`idBill`),
  ADD CONSTRAINT `orderline_ibfk_3` FOREIGN KEY (`idOrder`) REFERENCES `order` (`idOrder`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`idCategory`) REFERENCES `category` (`idCategory`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
