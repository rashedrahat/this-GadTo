-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2018 at 02:02 PM
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
-- Table structure for table `ad_info`
--

CREATE TABLE `ad_info` (
  `ad_id` int(10) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `cost` float NOT NULL,
  `duration` varchar(20) NOT NULL,
  `file` blob NOT NULL,
  `link` varchar(100) DEFAULT NULL,
  `level` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ad_info`
--

INSERT INTO `ad_info` (`ad_id`, `user_name`, `cost`, `duration`, `file`, `link`, `level`, `status`) VALUES
(9, 'eva0010', 100, '1 week', '', '', 'high', 'pending'),
(10, 'eva0010', 100, '1 week', '', '', 'high', 'pending'),
(11, 'eva0010', 100, '1 week', 0x32303138303333305f3131353632322e706e67, 'eva.com', 'high', 'pending');

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
(4, 'Asus', 'Mobile'),
(5, 'Acer', 'Computer'),
(6, 'HP', 'Computer'),
(7, 'Rolex', 'Watch');

-- --------------------------------------------------------

--
-- Stand-in structure for view `brand_gad_cat`
-- (See below for the actual view)
--
CREATE TABLE `brand_gad_cat` (
`brand_name` varchar(20)
,`gadget_name` varchar(50)
);

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
  `name` varchar(20) NOT NULL,
  `company_gadget_link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_info`
--

INSERT INTO `company_info` (`price_id`, `name`, `company_gadget_link`) VALUES
(1, 'Daraz', 'https://www.daraz.com.bd/asus-x540ya-e1-7010-notebook-dual-core-silver-246631.html'),
(3, 'Ryans', 'https://ryanscomputers.com/asus-x540ya-amd-e1-6010-1-35ghz-4gb-1333mhz-500gb-15-6-inch-hd-1366x768-display-silver-gradient-notebook-with-free-dos-xo649d.html'),
(5, 'Ryans', 'https://ryanscomputers.com/hp-14-bw077au-amd-dual-core-e2-9000e-1-5-2-0ghz-4gb-ddr4-500gb-dvd-rw-14-1-inch-black-notebook-with-win-10-home-1-yr-warranty-3gm14pa.html'),
(6, 'Daraz', 'https://www.daraz.com.bd/hp-3gm14pa-14-bw077au-dual-core-e2-9000e-4-gb-ram-500gb-hdd-amd-radeon-r2-graphics-14.1-notebook-black-630522.html'),
(2, 'Pickaboo', 'https://www.pickaboo.com/iphone-x-64gb.html?gclid=CjwKCAjwwJrbBRAoEiwAGA1B_dv1SgiOl9VPdF0GBZmYQ_CyjNCT75-AHDzbEQUYgDYb4mdNosXMJhoCgksQAvD_BwE'),
(7, 'Daraz', 'https://www.daraz.com.bd/apple-iphone-x-smartphone-5.8-3gb-ram-64gb-rom-dual-12mp-camera-space-gray-448301.html'),
(8, 'Ryans', 'https://ryanscomputers.com/acer-aspire-a315-21-28f1-amd-e2-9000-1-80-2-20ghz-4gb-ddr4-1600mhz-1tb-15-6-inch-obsidian-black-notebook-freedos-2-yr-warranty-nx-gnvsi-007.html'),
(10, 'Daraz', 'https://www.daraz.com.bd/apple-iphone-6-smartphone-4.7-1gb-ram-32gb-rom-8mp-camera-gold-776489.html'),
(11, 'Pickaboo', 'https://www.pickaboo.com/iphone-6-32gb-mobile.html');

-- --------------------------------------------------------

--
-- Stand-in structure for view `computer_specs`
-- (See below for the actual view)
--
CREATE TABLE `computer_specs` (
`processor` varchar(100)
,`processor_clock_speed` varchar(100)
,`display` varchar(100)
,`RAM` varchar(100)
,`RAM_type` varchar(100)
,`HDD` varchar(100)
,`OS` varchar(100)
,`gadget_id` int(10)
);

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
-- Stand-in structure for view `e_commerce_company_review`
-- (See below for the actual view)
--
CREATE TABLE `e_commerce_company_review` (
`user_name` varchar(20)
,`rating` int(2)
,`comment` varchar(100)
,`recommend` varchar(3)
,`post_date` date
,`gadget_name` varchar(50)
,`gadget_id` int(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `gadgets`
-- (See below for the actual view)
--
CREATE TABLE `gadgets` (
`gadget_id` int(10)
,`gadget_name` varchar(50)
,`category_name` varchar(20)
);

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
('Mobile'),
('Watch');

-- --------------------------------------------------------

--
-- Table structure for table `gadget_info`
--

CREATE TABLE `gadget_info` (
  `gadget_id` int(10) NOT NULL,
  `gadget_name` varchar(50) NOT NULL,
  `category_name` varchar(20) NOT NULL,
  `brand_id` int(10) NOT NULL,
  `specs_category_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gadget_info`
--

INSERT INTO `gadget_info` (`gadget_id`, `gadget_name`, `category_name`, `brand_id`, `specs_category_id`) VALUES
(5, 'iPhone X', 'Mobile', 1, 2),
(7, 'Xiaomi Mi A2 (Mi 6X)', 'Mobile', 2, 2),
(8, 'Asus X540YA', 'Computer', 3, 1),
(9, 'Acer Aspire A315-21 28F1', 'Computer', 5, 1),
(10, 'HP 14-BW077AU', 'Computer', 6, 1),
(11, 'Rolex WRM13', 'Watch', 7, 3),
(12, 'iPhone 6', 'Mobile', 1, 2),
(14, 'Asus Zenfone Max Pro (M1) ZB601KL', 'Mobile', 4, 2),
(15, 'Asus X556UQ-7200U', 'Computer', 3, 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `gadget_review`
-- (See below for the actual view)
--
CREATE TABLE `gadget_review` (
`user_name` varchar(20)
,`rating` int(2)
,`comment` varchar(100)
,`recommend` varchar(3)
,`post_date` date
,`gadget_name` varchar(50)
,`gadget_id` int(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `gad_spcs_cat`
-- (See below for the actual view)
--
CREATE TABLE `gad_spcs_cat` (
`specs_name` varchar(20)
,`gadget_name` varchar(50)
);

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
-- Stand-in structure for view `mobile_specs`
-- (See below for the actual view)
--
CREATE TABLE `mobile_specs` (
`display` varchar(100)
,`camera` varchar(100)
,`RAM` varchar(100)
,`battery` varchar(100)
,`gadget_id` int(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `normaladminlist`
-- (See below for the actual view)
--
CREATE TABLE `normaladminlist` (
`user_name` varchar(20)
);

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

-- --------------------------------------------------------

--
-- Stand-in structure for view `price_comparison`
-- (See below for the actual view)
--
CREATE TABLE `price_comparison` (
`price_id` int(10)
,`price` float
,`gadget_id` int(10)
,`name` varchar(20)
,`company_gadget_link` varchar(1000)
);

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
(1, 19909, 8),
(2, 104990, 5),
(3, 22600, 8),
(5, 23300, 10),
(6, 26790, 10),
(7, 100240, 5),
(8, 22300, 9),
(9, 2692, 11),
(10, 34999, 12),
(11, 34999, 12),
(12, 22800, 8);

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
(8, '2018-08-02', 'itsme', 'Hmm, good for home use and nice look.', 4, 'Yes', 1, 10),
(9, '2018-08-01', 'itsme', 'Kaymu, their delivery is fast.', 5, 'Yes', 2, 9),
(10, '2018-08-12', 'itsme', 'Hmm, superb', 4, 'Yes', 1, 5);

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
(2, 'Mobile'),
(3, 'Watch');

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
(5, 'AMD E1-6010', '1.35GHz', '15.6\"', '4GB', 'DDR3L 1333MHz', '500GB', NULL, 1, 8),
(6, 'Intel Celeron Processor-N3350', '1.10-2.4GHz', '15.6\"', '4GB', 'DDR3L SDRAM 1600MHz', '500GB', 'Free DOS', 1, 9),
(7, 'AMD DUAL CORE E2-9000E', '1.5-2.0GHz', '14.1\"', '4GB', 'DDR4 1866MHz', '500GB', NULL, 1, 10),
(8, 'Intel® Core™ i5-7200U', '2.50 GHz up to 3.10 GHz', '15.6\" (16:9) LED backlit FHD (1920 X 1080)', '8GB', 'DDR4', '1TB', 'Free DOS', 1, 15);

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
(4, '5.99\"', '20MP', '6GB', '3000mAh', 2, 7),
(5, '4.7\"', '8 MP', '1 GB', '1810mAh', 2, 12),
(6, '5.99\"', '16MP', '6GB', '5000mAh', 2, 14);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `u_type_name` varchar(2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_name`, `email`, `pass`, `first_name`, `last_name`, `phone`, `gender`, `u_type_name`, `status`) VALUES
('arman0010', 'tipu@gmail.com', '00000000', 'Arman', 'Hossen', '01676568244', 'Male', 'sa', 'active'),
('ayesha', 'ayesha@gmail.com', '1234567890', 'Ayesha', 'Akhter', '01684313772', 'Female', 'na', 'active'),
('eva0010', 'eva@gmail.com', '00000000', 'Eva', 'Mony', '01676568244', 'Female', 'nu', 'active'),
('imrashed', 'imrashedrahat@gmail.com', 'imRAR1994', 'Rashed', 'Rahat', '01633179767', 'Male', 'nu', 'active'),
('irashed1994', 'rashedrahat@outlook.com', 'rashed1994', 'Rashed', 'Ahmed', '01512349876', 'Male', 'sa', 'active'),
('itsme', 'itsme@gmail.com', 'itsme2018', 'Its', 'Me', '01712345678', 'Other', 'nu', 'active'),
('rashed', 'rashed@yahoo.com', '12345678', 'Rashed', 'Ahmed', '01778620485', 'Male', 'sa', 'active'),
('rashed1994', 'rashedrahat@gmail.com', '0123456789', 'Rashed', 'Ahmed', '01633176797', 'Male', 'na', 'active'),
('rpm.shuvo', 'rpm.shuvo@gmail.com', 'rpm.shuvo', 'Shuvo', 'Hasan', '01612345678', 'Male', 'nu', 'active'),
('Shuvo', 'shuvo@gmail.com', 'shuvo.rpm', 'Mehedi', 'Shuvo', '01633171423', 'Male', 'na', 'pending'),
('test', 'test@gmail.com', '123456789', 'Test', 'Test', '01633179767', 'Other', 'nu', 'blocked');

-- --------------------------------------------------------

--
-- Structure for view `brand_gad_cat`
--
DROP TABLE IF EXISTS `brand_gad_cat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `brand_gad_cat`  AS  select `brand_categorys`.`brand_name` AS `brand_name`,`gadget_info`.`gadget_name` AS `gadget_name` from (`brand_categorys` join `gadget_info` on((`brand_categorys`.`brand_id` = `gadget_info`.`brand_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `computer_specs`
--
DROP TABLE IF EXISTS `computer_specs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `computer_specs`  AS  select `specs_info_computer`.`processor` AS `processor`,`specs_info_computer`.`processor_clock_speed` AS `processor_clock_speed`,`specs_info_computer`.`display` AS `display`,`specs_info_computer`.`RAM` AS `RAM`,`specs_info_computer`.`RAM_type` AS `RAM_type`,`specs_info_computer`.`HDD` AS `HDD`,`specs_info_computer`.`OS` AS `OS`,`specs_info_computer`.`gadget_id` AS `gadget_id` from `specs_info_computer` ;

-- --------------------------------------------------------

--
-- Structure for view `e_commerce_company_review`
--
DROP TABLE IF EXISTS `e_commerce_company_review`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `e_commerce_company_review`  AS  select `review`.`user_name` AS `user_name`,`review`.`rating` AS `rating`,`review`.`comment` AS `comment`,`review`.`recommend` AS `recommend`,`review`.`post_date` AS `post_date`,`gadget_info`.`gadget_name` AS `gadget_name`,`gadget_info`.`gadget_id` AS `gadget_id` from (`review` join `gadget_info` on((`review`.`gadget_id` = `gadget_info`.`gadget_id`))) where (`review`.`r_type_id` = 2) ;

-- --------------------------------------------------------

--
-- Structure for view `gadgets`
--
DROP TABLE IF EXISTS `gadgets`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `gadgets`  AS  select `gadget_info`.`gadget_id` AS `gadget_id`,`gadget_info`.`gadget_name` AS `gadget_name`,`gadget_info`.`category_name` AS `category_name` from `gadget_info` ;

-- --------------------------------------------------------

--
-- Structure for view `gadget_review`
--
DROP TABLE IF EXISTS `gadget_review`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `gadget_review`  AS  select `review`.`user_name` AS `user_name`,`review`.`rating` AS `rating`,`review`.`comment` AS `comment`,`review`.`recommend` AS `recommend`,`review`.`post_date` AS `post_date`,`gadget_info`.`gadget_name` AS `gadget_name`,`gadget_info`.`gadget_id` AS `gadget_id` from (`review` join `gadget_info` on((`review`.`gadget_id` = `gadget_info`.`gadget_id`))) where (`review`.`r_type_id` = 1) ;

-- --------------------------------------------------------

--
-- Structure for view `gad_spcs_cat`
--
DROP TABLE IF EXISTS `gad_spcs_cat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `gad_spcs_cat`  AS  select `specs_categorys`.`specs_name` AS `specs_name`,`gadget_info`.`gadget_name` AS `gadget_name` from (`specs_categorys` join `gadget_info` on((`specs_categorys`.`specs_category_id` = `gadget_info`.`specs_category_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `mobile_specs`
--
DROP TABLE IF EXISTS `mobile_specs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mobile_specs`  AS  select `specs_info_mobile`.`display` AS `display`,`specs_info_mobile`.`camera` AS `camera`,`specs_info_mobile`.`RAM` AS `RAM`,`specs_info_mobile`.`battery` AS `battery`,`specs_info_mobile`.`gadget_id` AS `gadget_id` from `specs_info_mobile` ;

-- --------------------------------------------------------

--
-- Structure for view `normaladminlist`
--
DROP TABLE IF EXISTS `normaladminlist`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `normaladminlist`  AS  select `user_info`.`user_name` AS `user_name` from `user_info` where ((`user_info`.`u_type_name` = 'na') and (`user_info`.`status` = 'active')) ;

-- --------------------------------------------------------

--
-- Structure for view `price_comparison`
--
DROP TABLE IF EXISTS `price_comparison`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `price_comparison`  AS  select `price_info`.`price_id` AS `price_id`,`price_info`.`price` AS `price`,`price_info`.`gadget_id` AS `gadget_id`,`company_info`.`name` AS `name`,`company_info`.`company_gadget_link` AS `company_gadget_link` from (`price_info` join `company_info` on((`price_info`.`price_id` = `company_info`.`price_id`))) ;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad_info`
--
ALTER TABLE `ad_info`
  MODIFY `ad_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `brand_categorys`
--
ALTER TABLE `brand_categorys`
  MODIFY `brand_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `database_file`
--
ALTER TABLE `database_file`
  MODIFY `file_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gadget_info`
--
ALTER TABLE `gadget_info`
  MODIFY `gadget_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `price_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `review_type`
--
ALTER TABLE `review_type`
  MODIFY `r_type_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `specs_categorys`
--
ALTER TABLE `specs_categorys`
  MODIFY `specs_category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `specs_info_computer`
--
ALTER TABLE `specs_info_computer`
  MODIFY `specs_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `specs_info_mobile`
--
ALTER TABLE `specs_info_mobile`
  MODIFY `specs_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
