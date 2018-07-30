-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2018 at 05:28 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gadto`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad_confirmation`
--

CREATE TABLE `ad_confirmation` (
  `ad_conf_id` int(10) NOT NULL,
  `ad_id` int(10) NOT NULL,
  `ad_status` varchar(10) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `c_type_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ad_confirmation`
--

INSERT INTO `ad_confirmation` (`ad_conf_id`, `ad_id`, `ad_status`, `user_name`, `c_type_id`) VALUES
(1, 1, 'Active', 'imrashed', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ad_extra_info`
--

CREATE TABLE `ad_extra_info` (
  `link` varchar(100) NOT NULL,
  `file` blob NOT NULL,
  `ad_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ad_extra_info`
--

INSERT INTO `ad_extra_info` (`link`, `file`, `ad_id`) VALUES
('rashedrahat.github.io/imRAR', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ad_info`
--

CREATE TABLE `ad_info` (
  `ad_id` int(10) NOT NULL,
  `cost` float NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `duration` varchar(11) NOT NULL,
  `level` varchar(11) NOT NULL,
  `area` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ad_info`
--

INSERT INTO `ad_info` (`ad_id`, `cost`, `start_date`, `end_date`, `user_name`, `duration`, `level`, `area`) VALUES
(1, 1000, '2018-07-27', '2018-08-03', 'imrashed', '1 Week', 'High', 'More Visual');

-- --------------------------------------------------------

--
-- Table structure for table `brand_categorys`
--

CREATE TABLE `brand_categorys` (
  `brand_id` int(10) NOT NULL,
  `brand_name` varchar(20) NOT NULL,
  `category_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand_categorys`
--

INSERT INTO `brand_categorys` (`brand_id`, `brand_name`, `category_name`) VALUES
(1, 'Apple', 'Mobile'),
(2, 'Xiaomi', 'Mobile'),
(3, 'Asus', 'Computer'),
(4, 'Asus', 'Mobile');

-- --------------------------------------------------------

--
-- Table structure for table `card_info`
--

CREATE TABLE `card_info` (
  `card_no` varchar(20) NOT NULL,
  `holder_name` varchar(30) NOT NULL,
  `exp_date` date NOT NULL,
  `cvv` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card_info`
--

INSERT INTO `card_info` (`card_no`, `holder_name`, `exp_date`, `cvv`) VALUES
('4628-7033-1018-5692', 'RASHED AHMED RAHAT', '2020-06-29', 354);

-- --------------------------------------------------------

--
-- Table structure for table `company_info`
--

CREATE TABLE `company_info` (
  `price_id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_info`
--

INSERT INTO `company_info` (`price_id`, `name`) VALUES
(1, 'Daraz'),
(2, 'Daraz');

-- --------------------------------------------------------

--
-- Table structure for table `confirmation_type`
--

CREATE TABLE `confirmation_type` (
  `c_type_id` int(10) NOT NULL,
  `c_type_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirmation_type`
--

INSERT INTO `confirmation_type` (`c_type_id`, `c_type_name`) VALUES
(2, 'Ad'),
(1, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `database_file`
--

CREATE TABLE `database_file` (
  `file_id` int(10) NOT NULL,
  `file_name` varchar(20) NOT NULL,
  `act_type` varchar(10) NOT NULL,
  `act_date` date NOT NULL,
  `user_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `database_file`
--

INSERT INTO `database_file` (`file_id`, `file_name`, `act_type`, `act_date`, `user_name`) VALUES
(1, 'gadto.sql', 'BackUp', '2018-07-29', 'ayesha'),
(2, 'gadto(2).sql', 'Restore', '2018-07-30', 'irashed1994');

-- --------------------------------------------------------

--
-- Table structure for table `gadget_categorys`
--

CREATE TABLE `gadget_categorys` (
  `category_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gadget_categorys`
--

INSERT INTO `gadget_categorys` (`category_name`) VALUES
('Computer'),
('Mobile');

-- --------------------------------------------------------

--
-- Table structure for table `gadget_info`
--

CREATE TABLE `gadget_info` (
  `gadget_id` int(10) NOT NULL,
  `gadget_name` varchar(30) NOT NULL,
  `category_name` varchar(20) NOT NULL,
  `brand_id` int(10) NOT NULL,
  `specs_category_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gadget_info`
--

INSERT INTO `gadget_info` (`gadget_id`, `gadget_name`, `category_name`, `brand_id`, `specs_category_id`) VALUES
(5, 'iPhoneX', 'Mobile', 1, 2),
(7, 'Xiaomi Mi A2 (Mi 6X)', 'Mobile', 2, 2),
(8, 'Asus X540YA', 'Computer', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `leave_info`
--

CREATE TABLE `leave_info` (
  `leave_id` int(10) NOT NULL,
  `leave_type` varchar(9) NOT NULL,
  `leave_date` date NOT NULL,
  `user_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_info`
--

INSERT INTO `leave_info` (`leave_id`, `leave_type`, `leave_date`, `user_name`) VALUES
(1, 'Temporary', '2018-07-28', 'ayesha');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notification_id` int(10) NOT NULL,
  `description` varchar(100) NOT NULL,
  `notify_date` date NOT NULL,
  `from_whom` varchar(20) NOT NULL,
  `to_whom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notification_id`, `description`, `notify_date`, `from_whom`, `to_whom`) VALUES
(1, 'Your requested ad is now promoting', '2018-07-27', 'Tamanna', 'imrashed'),
(2, 'You have a leave request', '2018-07-28', 'ayesha', 'irashed1994');

-- --------------------------------------------------------

--
-- Table structure for table `payment_info`
--

CREATE TABLE `payment_info` (
  `pay_id` int(10) NOT NULL,
  `pay_method` varchar(20) NOT NULL,
  `ad_id` int(10) NOT NULL,
  `card_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_info`
--

INSERT INTO `payment_info` (`pay_id`, `pay_method`, `ad_id`, `card_no`) VALUES
(1, 'VISA', 1, '4628-7033-1018-5692');

-- --------------------------------------------------------

--
-- Table structure for table `price_info`
--

CREATE TABLE `price_info` (
  `price_id` int(10) NOT NULL,
  `price` float NOT NULL,
  `gadget_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price_info`
--

INSERT INTO `price_info` (`price_id`, `price`, `gadget_id`) VALUES
(1, 60500, 8),
(2, 130000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(10) NOT NULL,
  `post_date` date NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `rating` int(2) NOT NULL,
  `recommend` varchar(3) NOT NULL,
  `r_type_id` int(10) NOT NULL,
  `gadget_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `post_date`, `user_name`, `comment`, `rating`, `recommend`, `r_type_id`, `gadget_id`) VALUES
(6, '2018-07-29', 'imrashed', 'Awesome phone, i love & like it.', 5, 'Yes', 1, 5),
(7, '2018-07-28', 'imrashed', 'Customer service is bad & product faulty (unpacked). Daraz is really suck :(', 1, 'No', 2, 8);

-- --------------------------------------------------------

--
-- Table structure for table `review_type`
--

CREATE TABLE `review_type` (
  `r_type_id` int(10) NOT NULL,
  `r_type_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_type`
--

INSERT INTO `review_type` (`r_type_id`, `r_type_name`) VALUES
(1, 'Gadget'),
(2, 'E-Commerce Company');

-- --------------------------------------------------------

--
-- Table structure for table `specs_categorys`
--

CREATE TABLE `specs_categorys` (
  `specs_category_id` int(10) NOT NULL,
  `specs_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specs_categorys`
--

INSERT INTO `specs_categorys` (`specs_category_id`, `specs_name`) VALUES
(1, 'Computer'),
(2, 'Mobile');

-- --------------------------------------------------------

--
-- Table structure for table `specs_info_computer`
--

CREATE TABLE `specs_info_computer` (
  `specs_id` int(10) NOT NULL,
  `processor` varchar(100) NOT NULL,
  `processor_clock_speed` varchar(100) NOT NULL,
  `display` varchar(100) NOT NULL,
  `RAM` varchar(100) NOT NULL,
  `RAM_type` varchar(100) NOT NULL,
  `HDD` varchar(100) NOT NULL,
  `OS` varchar(100) DEFAULT NULL,
  `specs_category_id` int(10) NOT NULL,
  `gadget_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specs_info_computer`
--

INSERT INTO `specs_info_computer` (`specs_id`, `processor`, `processor_clock_speed`, `display`, `RAM`, `RAM_type`, `HDD`, `OS`, `specs_category_id`, `gadget_id`) VALUES
(5, 'AMD E1-6010', '1.35GHz', '15.6\"', '4GB', 'DDR3L 1333MHz', '500GB', NULL, 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `specs_info_mobile`
--

CREATE TABLE `specs_info_mobile` (
  `specs_id` int(10) NOT NULL,
  `display` varchar(100) NOT NULL,
  `camera` varchar(100) NOT NULL,
  `RAM` varchar(100) NOT NULL,
  `battery` varchar(100) NOT NULL,
  `specs_category_id` int(10) NOT NULL,
  `gadget_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specs_info_mobile`
--

INSERT INTO `specs_info_mobile` (`specs_id`, `display`, `camera`, `RAM`, `battery`, `specs_category_id`, `gadget_id`) VALUES
(3, '5.8\"', '12MP', '3GB', '2716mAh', 2, 5),
(4, '5.99\"', '20MP', '6GB', '3000mAh', 2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `phone` int(15) NOT NULL,
  `type` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uname`, `email`, `pass`, `fname`, `lname`, `phone`, `type`, `status`) VALUES
(8, 'rashed', 'rashed@gmail.com', '876543210', 'Rashed', 'Ahmed', 1633179767, 'sa', 'always active'),
(9, 'tama', 'tama@gmail.com', '12345678', 'Ayesha', 'Tamanna', 4984239, 'admin', 'active'),
(12, 'Rahat', 'rahat@gmail.com', '22222222', 'Rashed', 'Ahmed', 1712345678, 'user', 'active'),
(15, 'RahateFesf', 'rahat@gmail.com', '22222222', 'Rashed', 'Ahmed', 1712345678, 'user', 'pending'),
(17, 'arman0010fEf', 'tipu0010@gmail.com', '11111111', 'Arman', 'Hossen', 1676568244, 'user', 'blocked'),
(18, 'abcafdfa', 'abc@gmail.com', '555555555', 'abc', 'xyz', 4984239, 'user', 'pending'),
(19, 'abc', 'abc@gmail.com', '5555555555', 'abc', 'xyz', 4984239, 'user', 'active'),
(21, 'tipu', 'arman@gmail.com', '44444444444', 'tipu', 'Hossen', 1676568244, 'user', 'active'),
(22, 'itsme', 'itsme@gmail.com', '123456789', 'Its', 'Me', 1546498748, 'admin', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `user_confirmation`
--

CREATE TABLE `user_confirmation` (
  `u_conf_id` int(10) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `c_type_id` int(10) NOT NULL,
  `u_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_confirmation`
--

INSERT INTO `user_confirmation` (`u_conf_id`, `user_name`, `c_type_id`, `u_status`) VALUES
(1, 'itsme', 1, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `u_type_name` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_name`, `email`, `password`, `first_name`, `last_name`, `phone`, `gender`, `u_type_name`) VALUES
('ayesha', 'ayesha@gmail.com', '1234567890', 'Ayesha', 'Akhter', '+8801684313772', 'Female', 'na'),
('imrashed', 'imrashedrahat@gmail.com', 'imRAR1994', 'Rashed', 'Rahat', '+8801633179767', 'Male', 'nu'),
('irashed1994', 'rashedrahat@outlook.com', 'rashed1994', 'Rashed', 'Ahmed', '+8801512349876', 'Male', 'sa'),
('itsme', 'itsme@gmail.com', 'itsme2018', 'Its', 'Me', '+8801712345678', 'Other', 'nu'),
('rashed1994', 'rashedrahat@gmail.com', '0123456789', 'Rashed', 'Ahmed', '+8801633176797', 'Male', 'na'),
('rpm.shuvo', 'rpm.shuvo@gmail.com', 'rpm.shuvo', 'Shuvo', 'Hasan', '+8801612345678', 'Male', 'na'),
('Shuvo', 'shuvo@gmail.com', 'shuvo.rpm', 'Mehedi', 'Shuvo', '+8801633171423', 'Male', 'sa'),
('Tamanna', 'tamanna@gmail.com', '0123456789', 'Ayesha', 'Tamanna', '+8801684313277', 'Female', 'sa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ad_confirmation`
--
ALTER TABLE `ad_confirmation`
  ADD PRIMARY KEY (`ad_conf_id`),
  ADD KEY `ad_id` (`ad_id`),
  ADD KEY `user_name` (`user_name`),
  ADD KEY `c_type_id` (`c_type_id`);

--
-- Indexes for table `ad_extra_info`
--
ALTER TABLE `ad_extra_info`
  ADD PRIMARY KEY (`link`),
  ADD KEY `ad_id` (`ad_id`);

--
-- Indexes for table `ad_info`
--
ALTER TABLE `ad_info`
  ADD PRIMARY KEY (`ad_id`),
  ADD KEY `user_name` (`user_name`);

--
-- Indexes for table `brand_categorys`
--
ALTER TABLE `brand_categorys`
  ADD PRIMARY KEY (`brand_id`),
  ADD KEY `category_name` (`category_name`);

--
-- Indexes for table `card_info`
--
ALTER TABLE `card_info`
  ADD PRIMARY KEY (`card_no`);

--
-- Indexes for table `company_info`
--
ALTER TABLE `company_info`
  ADD KEY `price_id` (`price_id`);

--
-- Indexes for table `confirmation_type`
--
ALTER TABLE `confirmation_type`
  ADD PRIMARY KEY (`c_type_id`),
  ADD KEY `c_type_name` (`c_type_name`);

--
-- Indexes for table `database_file`
--
ALTER TABLE `database_file`
  ADD PRIMARY KEY (`file_id`),
  ADD KEY `user_name` (`user_name`);

--
-- Indexes for table `gadget_categorys`
--
ALTER TABLE `gadget_categorys`
  ADD PRIMARY KEY (`category_name`);

--
-- Indexes for table `gadget_info`
--
ALTER TABLE `gadget_info`
  ADD PRIMARY KEY (`gadget_id`),
  ADD KEY `category_name` (`category_name`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `specs_category_id` (`specs_category_id`);

--
-- Indexes for table `leave_info`
--
ALTER TABLE `leave_info`
  ADD PRIMARY KEY (`leave_id`),
  ADD KEY `user_name` (`user_name`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notification_id`),
  ADD KEY `user_name` (`from_whom`),
  ADD KEY `user_name_2` (`to_whom`);

--
-- Indexes for table `payment_info`
--
ALTER TABLE `payment_info`
  ADD PRIMARY KEY (`pay_id`),
  ADD KEY `card_no` (`card_no`),
  ADD KEY `ad_id` (`ad_id`);

--
-- Indexes for table `price_info`
--
ALTER TABLE `price_info`
  ADD PRIMARY KEY (`price_id`),
  ADD KEY `gadget_id` (`gadget_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `user_name` (`user_name`),
  ADD KEY `r_type_id` (`r_type_id`),
  ADD KEY `gadget_id` (`gadget_id`);

--
-- Indexes for table `review_type`
--
ALTER TABLE `review_type`
  ADD PRIMARY KEY (`r_type_id`);

--
-- Indexes for table `specs_categorys`
--
ALTER TABLE `specs_categorys`
  ADD PRIMARY KEY (`specs_category_id`);

--
-- Indexes for table `specs_info_computer`
--
ALTER TABLE `specs_info_computer`
  ADD PRIMARY KEY (`specs_id`),
  ADD KEY `specs_category_id` (`specs_category_id`),
  ADD KEY `gadget_id` (`gadget_id`);

--
-- Indexes for table `specs_info_mobile`
--
ALTER TABLE `specs_info_mobile`
  ADD PRIMARY KEY (`specs_id`),
  ADD KEY `specs_category_id` (`specs_category_id`),
  ADD KEY `gadget_id` (`gadget_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_confirmation`
--
ALTER TABLE `user_confirmation`
  ADD PRIMARY KEY (`u_conf_id`),
  ADD KEY `user_name` (`user_name`),
  ADD KEY `c_type_id` (`c_type_id`),
  ADD KEY `user_name_2` (`user_name`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad_confirmation`
--
ALTER TABLE `ad_confirmation`
  MODIFY `ad_conf_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ad_info`
--
ALTER TABLE `ad_info`
  MODIFY `ad_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brand_categorys`
--
ALTER TABLE `brand_categorys`
  MODIFY `brand_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `confirmation_type`
--
ALTER TABLE `confirmation_type`
  MODIFY `c_type_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `database_file`
--
ALTER TABLE `database_file`
  MODIFY `file_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gadget_info`
--
ALTER TABLE `gadget_info`
  MODIFY `gadget_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `leave_info`
--
ALTER TABLE `leave_info`
  MODIFY `leave_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notification_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment_info`
--
ALTER TABLE `payment_info`
  MODIFY `pay_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `price_info`
--
ALTER TABLE `price_info`
  MODIFY `price_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `review_type`
--
ALTER TABLE `review_type`
  MODIFY `r_type_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `specs_categorys`
--
ALTER TABLE `specs_categorys`
  MODIFY `specs_category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `specs_info_computer`
--
ALTER TABLE `specs_info_computer`
  MODIFY `specs_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `specs_info_mobile`
--
ALTER TABLE `specs_info_mobile`
  MODIFY `specs_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_confirmation`
--
ALTER TABLE `user_confirmation`
  MODIFY `u_conf_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ad_confirmation`
--
ALTER TABLE `ad_confirmation`
  ADD CONSTRAINT `ad_confirmation_ibfk_1` FOREIGN KEY (`ad_id`) REFERENCES `ad_info` (`ad_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ad_confirmation_ibfk_2` FOREIGN KEY (`c_type_id`) REFERENCES `confirmation_type` (`c_type_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ad_confirmation_ibfk_3` FOREIGN KEY (`user_name`) REFERENCES `user_info` (`user_name`);

--
-- Constraints for table `ad_extra_info`
--
ALTER TABLE `ad_extra_info`
  ADD CONSTRAINT `ad_extra_info_ibfk_1` FOREIGN KEY (`ad_id`) REFERENCES `ad_info` (`ad_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ad_info`
--
ALTER TABLE `ad_info`
  ADD CONSTRAINT `ad_info_ibfk_1` FOREIGN KEY (`user_name`) REFERENCES `user_info` (`user_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `brand_categorys`
--
ALTER TABLE `brand_categorys`
  ADD CONSTRAINT `brand_categorys_ibfk_1` FOREIGN KEY (`category_name`) REFERENCES `gadget_categorys` (`category_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `company_info`
--
ALTER TABLE `company_info`
  ADD CONSTRAINT `company_info_ibfk_1` FOREIGN KEY (`price_id`) REFERENCES `price_info` (`price_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `database_file`
--
ALTER TABLE `database_file`
  ADD CONSTRAINT `database_file_ibfk_1` FOREIGN KEY (`user_name`) REFERENCES `user_info` (`user_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gadget_info`
--
ALTER TABLE `gadget_info`
  ADD CONSTRAINT `gadget_info_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brand_categorys` (`brand_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gadget_info_ibfk_2` FOREIGN KEY (`category_name`) REFERENCES `gadget_categorys` (`category_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gadget_info_ibfk_3` FOREIGN KEY (`specs_category_id`) REFERENCES `specs_categorys` (`specs_category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `leave_info`
--
ALTER TABLE `leave_info`
  ADD CONSTRAINT `leave_info_ibfk_1` FOREIGN KEY (`user_name`) REFERENCES `user_info` (`user_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`from_whom`) REFERENCES `user_info` (`user_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notification_ibfk_2` FOREIGN KEY (`to_whom`) REFERENCES `user_info` (`user_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment_info`
--
ALTER TABLE `payment_info`
  ADD CONSTRAINT `payment_info_ibfk_1` FOREIGN KEY (`card_no`) REFERENCES `card_info` (`card_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_info_ibfk_2` FOREIGN KEY (`ad_id`) REFERENCES `ad_info` (`ad_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `price_info`
--
ALTER TABLE `price_info`
  ADD CONSTRAINT `price_info_ibfk_1` FOREIGN KEY (`gadget_id`) REFERENCES `gadget_info` (`gadget_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`user_name`) REFERENCES `user_info` (`user_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`r_type_id`) REFERENCES `review_type` (`r_type_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_ibfk_3` FOREIGN KEY (`gadget_id`) REFERENCES `gadget_info` (`gadget_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `specs_info_computer`
--
ALTER TABLE `specs_info_computer`
  ADD CONSTRAINT `specs_info_computer_ibfk_1` FOREIGN KEY (`specs_category_id`) REFERENCES `specs_categorys` (`specs_category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `specs_info_computer_ibfk_2` FOREIGN KEY (`gadget_id`) REFERENCES `gadget_info` (`gadget_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `specs_info_mobile`
--
ALTER TABLE `specs_info_mobile`
  ADD CONSTRAINT `specs_info_mobile_ibfk_1` FOREIGN KEY (`specs_category_id`) REFERENCES `specs_categorys` (`specs_category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `specs_info_mobile_ibfk_2` FOREIGN KEY (`gadget_id`) REFERENCES `gadget_info` (`gadget_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_confirmation`
--
ALTER TABLE `user_confirmation`
  ADD CONSTRAINT `user_confirmation_ibfk_1` FOREIGN KEY (`user_name`) REFERENCES `user_info` (`user_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_confirmation_ibfk_2` FOREIGN KEY (`user_name`) REFERENCES `user_info` (`user_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_confirmation_ibfk_3` FOREIGN KEY (`c_type_id`) REFERENCES `confirmation_type` (`c_type_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
