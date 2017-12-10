-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2017 at 10:27 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `accountno` varchar(10) NOT NULL,
  `accountname` varchar(60) NOT NULL,
  `bankname` varchar(60) NOT NULL,
  `shopid` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`accountno`, `accountname`, `bankname`, `shopid`) VALUES
('1231231238', 'Peat', '2', 8);

-- --------------------------------------------------------

--
-- Table structure for table `addproduct`
--

CREATE TABLE `addproduct` (
  `addid` int(8) NOT NULL,
  `productid` int(10) NOT NULL,
  `amount` int(4) NOT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `buyerid` int(8) NOT NULL,
  `buyerpw` varchar(15) NOT NULL,
  `buyername` varchar(20) NOT NULL,
  `buyersurname` varchar(20) NOT NULL,
  `buyeraddress` text NOT NULL,
  `buyeremail` varchar(50) NOT NULL,
  `buyertel` varchar(10) NOT NULL,
  `buyergender` varchar(1) NOT NULL,
  `buyerimg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `orderid` int(8) NOT NULL,
  `productid` int(10) NOT NULL,
  `orderamount` int(4) NOT NULL,
  `totalpriceorder` decimal(19,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(8) NOT NULL,
  `totalprice` decimal(19,4) NOT NULL,
  `vat` decimal(19,4) NOT NULL,
  `shopid` int(9) NOT NULL,
  `buyerid` int(8) NOT NULL,
  `shippingtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `shippingaddress` text NOT NULL,
  `shippingtype` varchar(20) NOT NULL,
  `reciepttime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `trackingid` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` int(10) NOT NULL,
  `productname` varchar(25) NOT NULL,
  `producttypeid` int(5) NOT NULL,
  `productdesc` text NOT NULL,
  `productprice` decimal(19,4) NOT NULL,
  `shopid` int(6) NOT NULL,
  `quantity` int(4) NOT NULL,
  `productview` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `productimage`
--

CREATE TABLE `productimage` (
  `productid` int(10) NOT NULL,
  `urlimage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `producttype`
--

CREATE TABLE `producttype` (
  `producttypeid` int(5) NOT NULL,
  `producttypename` varchar(20) NOT NULL,
  `producttypedesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `producttype`
--

INSERT INTO `producttype` (`producttypeid`, `producttypename`, `producttypedesc`) VALUES
(1, 'Beauty Items', 'Cosmetics, Supplementary products and Lotion&Cream'),
(2, 'Clothes', 'Fashion and Wearing'),
(3, 'Electronics', 'Electronics\r\nTV, Refrigerator, AIr conditioner'),
(4, 'Child&Baby', 'Things for small child and baby'),
(5, 'Furniture', 'Houseware and House Decoration'),
(6, 'E-voucher&Books', 'Electronic discount coupons and Electronic Books such as magazine'),
(7, 'Sport&Recreation', 'Sport wear and sport equipment'),
(8, 'Consumtion', 'Consumable goods'),
(9, 'Food', 'Food and Snacks'),
(10, 'Accessories', 'Jewelry and Accessories'),
(11, 'Gadgets', 'Toys and electronic portable'),
(12, 'Entertainments', 'CD, DVD, Blu-ray, Songs and Video Games'),
(13, 'Stationary', 'Pen, Pencil, Eraser, Notebooks and Ruler'),
(14, 'Office Equipment', 'Equipment used in office, printer ,staplers and folders');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `sellerid` int(8) NOT NULL,
  `sellerpw` varchar(15) NOT NULL,
  `sellername` varchar(20) NOT NULL,
  `sellersurname` varchar(20) NOT NULL,
  `selleraddress` text NOT NULL,
  `selleremail` varchar(50) NOT NULL,
  `sellertel` varchar(10) NOT NULL,
  `sellergender` varchar(1) NOT NULL,
  `sellerimg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`sellerid`, `sellerpw`, `sellername`, `sellersurname`, `selleraddress`, `selleremail`, `sellertel`, `sellergender`, `sellerimg`) VALUES
(1, '098366377', 'Pest', 'Peat', 'Bangmod', 'peatza93@hotmail.com', '0853757439', 'M', 'http://facebook.com');

-- --------------------------------------------------------

--
-- Table structure for table `shippingtype`
--

CREATE TABLE `shippingtype` (
  `shippingtype` varchar(20) NOT NULL,
  `shipprice` decimal(19,4) NOT NULL,
  `duration` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shippingtype`
--

INSERT INTO `shippingtype` (`shippingtype`, `shipprice`, `duration`) VALUES
('Alpha Delivery', '120.0000', '1-3 days'),
('EMS', '200.0000', '1-3 days'),
('Kerry Express', '180.0000', '1-3 days'),
('Registered Mail', '100.0000', '4-7 days');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `shopid` int(9) NOT NULL,
  `sellerid` int(8) NOT NULL,
  `shopname` varchar(20) NOT NULL,
  `shoptypeid` int(5) NOT NULL,
  `shopdesc` text NOT NULL,
  `shopimg` text NOT NULL,
  `shopview` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`shopid`, `sellerid`, `shopname`, `shoptypeid`, `shopdesc`, `shopimg`, `shopview`) VALUES
(8, 2, 'pasdasd', 3, 'qweqweqweqew', 'http://facebook.com', 0),
(9, 2, 'pasdasd', 3, 'qweqweqweqew', 'http://facebook.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `shoptype`
--

CREATE TABLE `shoptype` (
  `shoptypeid` int(5) NOT NULL,
  `shoptypename` varchar(20) NOT NULL,
  `shoptypedesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shoptype`
--

INSERT INTO `shoptype` (`shoptypeid`, `shoptypename`, `shoptypedesc`) VALUES
(1, 'Beauty Items', 'Cosmetics, Supplementary products and Lotion&Cream'),
(2, 'Clothes', 'Fashion and Wearing'),
(3, 'Electronics', 'Electronics\r\nTV, Refrigerator, AIr conditioner'),
(4, 'Child&Baby', 'Things for small child and baby'),
(5, 'Furniture', 'Houseware and House Decoration'),
(6, 'E-voucher&Books', 'Electronic discount coupons and Electronic Books such as magazine'),
(7, 'Sport&Recreation', 'Sport wear and sport equipment'),
(8, 'Consumtion', 'Consumable goods'),
(9, 'Food', 'Food and Snacks'),
(10, 'Accessories', 'Jewelry and Accessories'),
(11, 'Gadgets', 'Toys and electronic portable'),
(12, 'Entertainments', 'CD, DVD, Blu-ray, Songs and Video Games'),
(13, 'Stationary', 'Pen, Pencil, Eraser, Notebooks and Ruler'),
(14, 'Office Equipment', 'Equipment used in office, printer ,staplers and folders');

-- --------------------------------------------------------

--
-- Table structure for table `slip`
--

CREATE TABLE `slip` (
  `orderid` int(8) NOT NULL,
  `accountno` varchar(10) NOT NULL,
  `amountmoney` decimal(19,4) NOT NULL,
  `sliptime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `transfertype` varchar(20) NOT NULL,
  `transferto` varchar(40) NOT NULL,
  `transferfrom` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`accountno`,`shopid`),
  ADD KEY `shopid` (`shopid`);

--
-- Indexes for table `addproduct`
--
ALTER TABLE `addproduct`
  ADD PRIMARY KEY (`addid`),
  ADD KEY `productid` (`productid`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`buyerid`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`orderid`,`productid`),
  ADD KEY `productid` (`productid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`),
  ADD KEY `shopid` (`shopid`),
  ADD KEY `buyerid` (`buyerid`),
  ADD KEY `shippingtype` (`shippingtype`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`),
  ADD KEY `shopid` (`shopid`),
  ADD KEY `producttypeid` (`producttypeid`);

--
-- Indexes for table `productimage`
--
ALTER TABLE `productimage`
  ADD PRIMARY KEY (`productid`,`urlimage`);

--
-- Indexes for table `producttype`
--
ALTER TABLE `producttype`
  ADD PRIMARY KEY (`producttypeid`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`sellerid`);

--
-- Indexes for table `shippingtype`
--
ALTER TABLE `shippingtype`
  ADD PRIMARY KEY (`shippingtype`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`shopid`),
  ADD KEY `shoptypeid` (`shoptypeid`);

--
-- Indexes for table `shoptype`
--
ALTER TABLE `shoptype`
  ADD PRIMARY KEY (`shoptypeid`);

--
-- Indexes for table `slip`
--
ALTER TABLE `slip`
  ADD PRIMARY KEY (`orderid`,`sliptime`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addproduct`
--
ALTER TABLE `addproduct`
  MODIFY `addid` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `buyerid` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `sellerid` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `shopid` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `addproduct`
--
ALTER TABLE `addproduct`
  ADD CONSTRAINT `addproduct_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `product` (`productid`);

--
-- Constraints for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `orderdetail_ibfk_1` FOREIGN KEY (`orderid`) REFERENCES `orders` (`orderid`),
  ADD CONSTRAINT `orderdetail_ibfk_2` FOREIGN KEY (`productid`) REFERENCES `product` (`productid`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`shopid`) REFERENCES `shop` (`shopid`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`buyerid`) REFERENCES `buyer` (`buyerid`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`shippingtype`) REFERENCES `shippingtype` (`shippingtype`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`shopid`) REFERENCES `shop` (`shopid`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`producttypeid`) REFERENCES `producttype` (`producttypeid`);

--
-- Constraints for table `productimage`
--
ALTER TABLE `productimage`
  ADD CONSTRAINT `productimage_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `product` (`productid`);

--
-- Constraints for table `shop`
--
ALTER TABLE `shop`
  ADD CONSTRAINT `shop_ibfk_2` FOREIGN KEY (`shoptypeid`) REFERENCES `shoptype` (`shoptypeid`);

--
-- Constraints for table `slip`
--
ALTER TABLE `slip`
  ADD CONSTRAINT `slip_ibfk_1` FOREIGN KEY (`orderid`) REFERENCES `orders` (`orderid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
