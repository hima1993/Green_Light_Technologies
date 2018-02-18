-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2018 at 02:03 PM
-- Server version: 5.7.18-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greenlight`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `system_users_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `system_users_user_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `customer_customer_id` int(11) NOT NULL,
  `customer_system_users_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `enrole_date` date DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address_line1` varchar(45) DEFAULT NULL,
  `addressline_2` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `postal_code` varchar(45) DEFAULT NULL,
  `additional_info` varchar(100) DEFAULT NULL,
  `system_users_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` int(11) NOT NULL,
  `customer_customer_id` int(11) NOT NULL,
  `customer_system_users_user_id` int(11) NOT NULL,
  `invoice_value` double DEFAULT NULL,
  `invoice_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `other_services`
--

CREATE TABLE `other_services` (
  `other_service_id` int(11) NOT NULL,
  `services_service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchasing_items`
--

CREATE TABLE `purchasing_items` (
  `item_id` int(11) NOT NULL,
  `services_service_id` int(11) NOT NULL,
  `image` varchar(250) DEFAULT NULL,
  `supplier_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchasing_items`
--

INSERT INTO `purchasing_items` (`item_id`, `services_service_id`, `image`, `supplier_name`) VALUES
(1, 4, 'IMG_82307.JPG', 'Camera.lk');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `price` varchar(45) DEFAULT NULL,
  `service_name` varchar(45) DEFAULT NULL,
  `details` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `price`, `service_name`, `details`) VALUES
(1, '4560', 'camera', '    This is a camera                                    '),
(2, '4560', 'camera', '    This is a camera                                    '),
(3, '4560', 'camera', '    This is a camera                                    '),
(4, '4560', 'camera', '    This is a camera                                    ');

-- --------------------------------------------------------

--
-- Table structure for table `services_has_cart`
--

CREATE TABLE `services_has_cart` (
  `services_service_id` int(11) NOT NULL,
  `cart_cart_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services_has_invoice`
--

CREATE TABLE `services_has_invoice` (
  `services_service_id` int(11) NOT NULL,
  `invoice_invoice_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `system_users`
--

CREATE TABLE `system_users` (
  `user_id` int(11) NOT NULL,
  `title` varchar(5) DEFAULT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `valid_bit` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_users`
--

INSERT INTO `system_users` (`user_id`, `title`, `first_name`, `last_name`, `email`, `password`, `valid_bit`) VALUES
(1, 'Mr.', 'Vimal', 'Silva', 'vim@gmail.com', 'vim123', b'0'),
(2, 'Mrs.', 'Kumari', 'Ranasignhe', 'kum@gmail.com', 'kum123', b'1');

--
-- Triggers `system_users`
--
DELIMITER $$
CREATE TRIGGER `addAdmin` AFTER INSERT ON `system_users` FOR EACH ROW BEGIN 
IF (new.user_id != '' AND new.valid_bit = 0) THEN 
INSERT INTO admin
VALUES (null,new.user_id); 
END IF; 
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`,`system_users_user_id`),
  ADD KEY `fk_admin_system_users_idx` (`system_users_user_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`,`customer_customer_id`,`customer_system_users_user_id`),
  ADD KEY `fk_cart_customer1_idx` (`customer_customer_id`,`customer_system_users_user_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`,`system_users_user_id`),
  ADD KEY `fk_customer_system_users1_idx` (`system_users_user_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`,`customer_customer_id`,`customer_system_users_user_id`),
  ADD KEY `fk_invoice_customer1_idx` (`customer_customer_id`,`customer_system_users_user_id`);

--
-- Indexes for table `other_services`
--
ALTER TABLE `other_services`
  ADD PRIMARY KEY (`other_service_id`,`services_service_id`),
  ADD KEY `fk_other_services_services1_idx` (`services_service_id`);

--
-- Indexes for table `purchasing_items`
--
ALTER TABLE `purchasing_items`
  ADD PRIMARY KEY (`item_id`,`services_service_id`),
  ADD KEY `fk_purchasing_items_services1_idx` (`services_service_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `services_has_cart`
--
ALTER TABLE `services_has_cart`
  ADD PRIMARY KEY (`services_service_id`,`cart_cart_id`),
  ADD KEY `fk_services_has_cart_cart1_idx` (`cart_cart_id`),
  ADD KEY `fk_services_has_cart_services1_idx` (`services_service_id`);

--
-- Indexes for table `services_has_invoice`
--
ALTER TABLE `services_has_invoice`
  ADD PRIMARY KEY (`services_service_id`,`invoice_invoice_id`),
  ADD KEY `fk_services_has_invoice_invoice1_idx` (`invoice_invoice_id`),
  ADD KEY `fk_services_has_invoice_services1_idx` (`services_service_id`);

--
-- Indexes for table `system_users`
--
ALTER TABLE `system_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `other_services`
--
ALTER TABLE `other_services`
  MODIFY `other_service_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `purchasing_items`
--
ALTER TABLE `purchasing_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `system_users`
--
ALTER TABLE `system_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `fk_admin_system_users` FOREIGN KEY (`system_users_user_id`) REFERENCES `system_users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_cart_customer1` FOREIGN KEY (`customer_customer_id`,`customer_system_users_user_id`) REFERENCES `customer` (`customer_id`, `system_users_user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `fk_customer_system_users1` FOREIGN KEY (`system_users_user_id`) REFERENCES `system_users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `fk_invoice_customer1` FOREIGN KEY (`customer_customer_id`,`customer_system_users_user_id`) REFERENCES `customer` (`customer_id`, `system_users_user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `other_services`
--
ALTER TABLE `other_services`
  ADD CONSTRAINT `fk_other_services_services1` FOREIGN KEY (`services_service_id`) REFERENCES `services` (`service_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `purchasing_items`
--
ALTER TABLE `purchasing_items`
  ADD CONSTRAINT `fk_purchasing_items_services1` FOREIGN KEY (`services_service_id`) REFERENCES `services` (`service_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `services_has_cart`
--
ALTER TABLE `services_has_cart`
  ADD CONSTRAINT `fk_services_has_cart_cart1` FOREIGN KEY (`cart_cart_id`) REFERENCES `cart` (`cart_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_services_has_cart_services1` FOREIGN KEY (`services_service_id`) REFERENCES `services` (`service_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `services_has_invoice`
--
ALTER TABLE `services_has_invoice`
  ADD CONSTRAINT `fk_services_has_invoice_invoice1` FOREIGN KEY (`invoice_invoice_id`) REFERENCES `invoice` (`invoice_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_services_has_invoice_services1` FOREIGN KEY (`services_service_id`) REFERENCES `services` (`service_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
