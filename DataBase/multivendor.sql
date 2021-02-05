-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2021 at 04:05 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multivendor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(3) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `full_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`, `full_name`) VALUES
(1, 'admin1@gmail.com', '12345', 'Mohmmed Olimat'),
(3, 'admin2@gmail.com', '12345', 'Ahmad');

-- --------------------------------------------------------

--
-- Table structure for table `admin_approval`
--

CREATE TABLE `admin_approval` (
  `approval_id` int(3) NOT NULL,
  `vendor_id` int(3) NOT NULL,
  `approval` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_approval`
--

INSERT INTO `admin_approval` (`approval_id`, `vendor_id`, `approval`) VALUES
(2, 12, 0),
(3, 1, 1),
(4, 2, 1),
(5, 13, 0),
(6, 3, 1),
(7, 14, 1),
(8, 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(3) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `cat_desc` text NOT NULL,
  `cat_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_desc`, `cat_image`) VALUES
(1, 'ELECTRONICS', 'Mobile Phones, Mobile Phones Accessories Computer, Computer Accessories', 'elec-banner.jpg.png'),
(2, ' Clothing', 'Clothing', 'clo-baner-1.jpg'),
(3, 'Computers And Accessories', 'laptops, desktops, monitors, tablets, PC gaming, hard drives and storage, accessories and more', 'baner-comp-accessories.png'),
(4, 'Furniture', 'Furniture includes objects such as tables, chairs, beds, desks, dressers, and cupboards.', 'Furniture-baner.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(3) NOT NULL,
  `cust_name` varchar(100) NOT NULL,
  `cust_email` varchar(50) NOT NULL,
  `cust_password` varchar(50) NOT NULL,
  `cust_mobile` varchar(14) NOT NULL,
  `cust_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `cust_email`, `cust_password`, `cust_mobile`, `cust_address`) VALUES
(1, 'Ali', 'ali@gmail.com', '12345', '+962777100100', 'Jordan'),
(2, 'Ali101', 'ali1@gmail.com', '12345678Cc@', '0777100100', 'Jordan');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(9) NOT NULL,
  `order_date` date NOT NULL,
  `cust_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_date`, `cust_id`) VALUES
(31, '2021-02-03', 1),
(32, '2021-02-03', 1),
(33, '2021-02-03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_details_id` int(3) NOT NULL,
  `order_id` int(3) NOT NULL,
  `product_id` int(3) NOT NULL,
  `product_qty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_details_id`, `order_id`, `product_id`, `product_qty`) VALUES
(28, 31, 2, 1),
(29, 32, 15, 2),
(30, 33, 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int(3) NOT NULL,
  `pro_name` varchar(50) NOT NULL,
  `pro_desc` text NOT NULL,
  `pro_price` double NOT NULL,
  `pro_image` text NOT NULL,
  `cat_id` int(3) NOT NULL,
  `pro_qty` int(5) NOT NULL,
  `vendor_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `pro_name`, `pro_desc`, `pro_price`, `pro_image`, `cat_id`, `pro_qty`, `vendor_id`) VALUES
(1, 'Samsung Jet 70 Vacuum', 'Cordless Lightweight Vacuum Cleaner with Removable Long Lasting Battery and 150 Air Watt Suction Power, Complete with Mini Motorized Tool, Violet.', 400, 'Samsung_J70.jpg', 1, 10, 1),
(2, 'Samsung MS14K6000AS Microwave', 'Microwave Oven with Sensor and Ceramic Enamel Interior, Stainless Steel.', 130, 'Samsung_Microwave.jpg', 1, 10, 1),
(3, 'ASUS VivoBook 15', 'Thin & Light Laptop, 15.6â€ FHD Display, AMD Quad Core R7-3700U CPU, 8GB DDR4 RAM, 512GB PCIe SSD, AMD Radeon Vega 10 Graphics, Fingerprint, Windows 10 Home, Slate Gray, F512DA-NH77', 630, 'asuslaptop.jpg', 3, 20, 2),
(4, 'ASUS ZenBook Duo', '14inc FHD NanoEdge Bezel Touch Display, Intel Core i7-10510U CPU, 8GB RAM, 512GB PCIe SSD, Innovative ScreenPad Plus, Windows 10 Home, Celestial Blue, UX481FA-DB71T', 1000, 'ZenBookDuo.jpg', 3, 10, 2),
(5, 'ASUS Liquid Cooler', 'ROG Strix LC240 RGB 240mm', 200, 'LiquidCooler.jpg', 3, 20, 2),
(6, 'Samsung washing machine', '4.5 cu. ft. Smart Front Load Washer with AddWashâ„¢ in Black Stainless Steel', 800, 'Wash.jpg', 1, 5, 1),
(7, 'Apple iPhone 12 Pro Max', 'New Apple iPhone 12 Pro Max 512GB, Pacific Blue Locked Carrier Subscription', 999, 'iphone-12-pro-max.jpg', 1, 10, 3),
(8, 'Three seat sofa', 'Three-seat sofa-bed, Skiftebo dark grey Price incl VAT', 500, 'three-seat-sofa.jpg', 4, 20, 14),
(9, 'Coffee table', 'Coffee table, white stained oak effect 90x55 cm ', 50, 'coffee-table.jpg', 4, 30, 14),
(11, 'Top coat', 'The classic topcoat gets a Ralph Lauren refresh with our Polo Soft fit', 300, 'wool-cout.jpg', 2, 10, 15),
(12, 'Jacket', 'This fuss free jacket is crafted from lightweight cotton twill and finished with our signature Pony.', 400, 'Jacket.jpg', 2, 20, 15),
(13, 'Slim Fit Mesh Polo', 'Short sleeves with ribbed armbands.', 150, 'Slim Fit Mesh Polo.jpg', 2, 20, 15),
(15, 'Arm chair', 'Armchair, Vissle dark grey/Kabusa dark grey', 200, 'armcahr.jpg', 4, 10, 14);

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vendor_id` int(3) NOT NULL,
  `vendor_name` varchar(100) NOT NULL,
  `vendor_email` varchar(50) NOT NULL,
  `vendor_password` varchar(50) NOT NULL,
  `vendor_mobile` varchar(14) NOT NULL,
  `brand_name` varchar(100) NOT NULL,
  `brand_img` text NOT NULL,
  `brand_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendor_id`, `vendor_name`, `vendor_email`, `vendor_password`, `vendor_mobile`, `brand_name`, `brand_img`, `brand_desc`) VALUES
(1, 'Samsung', 'Samsung@sam.com', '12345', '+962777100120', 'Samsung', 'SamsungLogo.png', 'Samsung Electronics is relentless in our efforts to deliver innovative products and experiences that maximize user convenience and make the lives of consumers better. '),
(2, 'AsusTek Computer Inc', 'asus@asus.com', '123456', '00962777100100', 'AsusTek', 'asuslogo.png', 'Multinational computer and phone hardware and electronics company'),
(3, 'apple', 'apple@apple.com', 'apple123A@', '00962777100100', 'Apple', 'applelogo.png', 'apple usa'),
(12, 'v1', 'v1@v.com', '12345678Vv@', '00962777100100', 'v1', 'applelogo.png', 'vvv'),
(13, 'v2', 'v2@v.com', '12345678Vv@', '00962777100100', 'v2', 'applelogo.png', 'vvv'),
(14, 'IKEA', 'IKEA@IKEA.com', '12345678Ii@', '00962777100100', 'IKEA', 'ikea-logo.png', 'Swedish multinational conglomerate that designs and sells ready-to-assemble furniture, kitchen appliances and home accessories, among other useful goods and occasionally home services.'),
(15, 'Ralph Lauren', 'polo@polo.com', '12345678Pp@', '00962777100100', 'POLO', 'Polo-logo.jpg', 'American fashion company producing products ranging from the mid-range to the luxury segments.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_approval`
--
ALTER TABLE `admin_approval`
  ADD PRIMARY KEY (`approval_id`),
  ADD KEY `vendor_id` (`vendor_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_details_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `vendor_id` (`vendor_id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin_approval`
--
ALTER TABLE `admin_approval`
  MODIFY `approval_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_details_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vendor_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_approval`
--
ALTER TABLE `admin_approval`
  ADD CONSTRAINT `admin_approval_ibfk_1` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`vendor_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`vendor_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
