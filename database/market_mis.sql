-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2020 at 06:05 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `market_mis`
--

-- --------------------------------------------------------

--
-- Table structure for table `bardasht_karmandan`
--

CREATE TABLE `bardasht_karmandan` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `stuff_name` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `father_name` varchar(300) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `amount` float NOT NULL,
  `description` text COLLATE utf8mb4_persian_ci NOT NULL,
  `date_sh` text COLLATE utf8mb4_persian_ci NOT NULL,
  `date_m` date NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `after_check` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bardasht_karmandan_edit`
--

CREATE TABLE `bardasht_karmandan_edit` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `stuff_name` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `father_name` varchar(300) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `amount` float NOT NULL,
  `description` text COLLATE utf8mb4_persian_ci NOT NULL,
  `date_sh` text COLLATE utf8mb4_persian_ci NOT NULL,
  `date_m` date NOT NULL,
  `edit_row_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bill_barq`
--

CREATE TABLE `bill_barq` (
  `id` int(11) NOT NULL,
  `dokan_number` int(10) NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `father_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `dawra` varchar(100) CHARACTER SET utf32 COLLATE utf32_persian_ci NOT NULL,
  `gozashta` float NOT NULL,
  `halia` float NOT NULL,
  `fi_kilowat` float NOT NULL,
  `pardakht_shoda` float NOT NULL,
  `description` text COLLATE utf8mb4_persian_ci NOT NULL,
  `user_id` int(10) NOT NULL,
  `date_sh` text COLLATE utf8mb4_persian_ci NOT NULL,
  `date_m` date NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `after_check` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bill_barq_edit`
--

CREATE TABLE `bill_barq_edit` (
  `id` int(11) NOT NULL,
  `dokan_number` int(10) NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `father_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `dawra` varchar(100) CHARACTER SET utf32 COLLATE utf32_persian_ci NOT NULL,
  `gozashta` float NOT NULL,
  `halia` float NOT NULL,
  `fi_kilowat` float NOT NULL,
  `pardakht_shoda` float NOT NULL,
  `description` text COLLATE utf8mb4_persian_ci NOT NULL,
  `user_id` int(10) NOT NULL,
  `date_sh` text COLLATE utf8mb4_persian_ci NOT NULL,
  `date_m` date NOT NULL,
  `edit_row_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bill_dawra`
--

CREATE TABLE `bill_dawra` (
  `id` int(11) NOT NULL,
  `dawra_name` varchar(200) COLLATE utf8mb4_persian_ci NOT NULL,
  `amount` int(20) NOT NULL,
  `fi_kil` float NOT NULL,
  `total_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `details` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `file` varchar(200) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `date_sh` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `date_m` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `user_id`, `name`, `details`, `file`, `date_sh`, `date_m`, `status`) VALUES
(2, 10, 'lalallasad', 'qowoqifnwoeifnwoef', '', '19/08/1399', '2020-11-09', '');

-- --------------------------------------------------------

--
-- Table structure for table `kerah_dokan`
--

CREATE TABLE `kerah_dokan` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `par_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `father_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `dokan_number` varchar(11) COLLATE utf8mb4_persian_ci NOT NULL,
  `payer` varchar(100) CHARACTER SET utf32 COLLATE utf32_persian_ci NOT NULL,
  `majmo_meqdar` int(11) NOT NULL,
  `meqdar_perdakhty` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `file` mediumblob NOT NULL,
  `date_sh` text COLLATE utf8mb4_persian_ci NOT NULL,
  `date_m` date NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `after_check` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `kerah_dokan`
--

INSERT INTO `kerah_dokan` (`id`, `user_id`, `par_name`, `father_name`, `dokan_number`, `payer`, `majmo_meqdar`, `meqdar_perdakhty`, `total`, `file`, `date_sh`, `date_m`, `status`, `after_check`) VALUES
(1, 11, 'wefw', 'wefwf', '1', 'wfwe', 2000, 200, 1800, '', '27/08/1399', '2020-11-17', '', ''),
(2, 9, 'wefw', '--', '1', 'wfwe', 2000, 200, 1800, '', '02/09/1399', '2020-11-22', '', ''),
(3, 9, 'منیر', '----', '1', '----', 200, 200, 0, '', '02/09/1399', '2020-11-22', '', ''),
(4, 9, 'lsdp', 'qqwdqw', '1,2', 'wdwq', 100, 60, 40, '', '02/09/1399', '2020-11-22', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `kerah_dokan_edit`
--

CREATE TABLE `kerah_dokan_edit` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `par_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `father_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `dokan_number` varchar(11) COLLATE utf8mb4_persian_ci NOT NULL,
  `payer` varchar(100) CHARACTER SET utf32 COLLATE utf32_persian_ci NOT NULL,
  `majmo_meqdar` int(11) NOT NULL,
  `meqdar_perdakhty` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `file` mediumblob NOT NULL,
  `date_sh` text COLLATE utf8mb4_persian_ci NOT NULL,
  `date_m` date NOT NULL,
  `edit_row_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loan_qist`
--

CREATE TABLE `loan_qist` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `father_name` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `job` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `amount` float NOT NULL,
  `qist` int(10) NOT NULL,
  `pardakhty` float NOT NULL,
  `date_sh` text COLLATE utf8mb4_persian_ci NOT NULL,
  `date_m` date NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `after_check` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loan_qist_edit`
--

CREATE TABLE `loan_qist_edit` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `father_name` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `job` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `amount` float NOT NULL,
  `qist` int(10) NOT NULL,
  `pardakhty` float NOT NULL,
  `date_sh` text COLLATE utf8mb4_persian_ci NOT NULL,
  `date_m` date NOT NULL,
  `edit_row_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `market_info`
--

CREATE TABLE `market_info` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `phone_1` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `phone_2` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `about` text COLLATE utf8mb4_persian_ci NOT NULL,
  `address` text COLLATE utf8mb4_persian_ci NOT NULL,
  `page_header` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `date_j` text COLLATE utf8mb4_persian_ci NOT NULL,
  `date_m` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `masarf`
--

CREATE TABLE `masarf` (
  `m_id` int(11) NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `type` varchar(10000) COLLATE utf8mb4_persian_ci NOT NULL,
  `description` text COLLATE utf8mb4_persian_ci NOT NULL,
  `quantity` int(10) NOT NULL,
  `zarib` float(20,2) NOT NULL,
  `cost` int(10) NOT NULL,
  `harf` varchar(300) CHARACTER SET utf16 COLLATE utf16_persian_ci NOT NULL,
  `total` float(20,2) NOT NULL,
  `date_sh` text COLLATE utf8mb4_persian_ci NOT NULL,
  `date_m` date NOT NULL,
  `user_id` int(10) NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `after_check` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `masarf`
--

INSERT INTO `masarf` (`m_id`, `name`, `type`, `description`, `quantity`, `zarib`, `cost`, `harf`, `total`, `date_sh`, `date_m`, `user_id`, `status`, `after_check`) VALUES
(19, 'نان', 'غذا', '----', 1, 77.00, 200, 'دوصد', 200.00, '16/08/1399', '2020-11-06', 6, 'edited', '');

-- --------------------------------------------------------

--
-- Table structure for table `masarf_edit`
--

CREATE TABLE `masarf_edit` (
  `m_id` int(11) NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `type` varchar(10000) COLLATE utf8mb4_persian_ci NOT NULL,
  `description` text COLLATE utf8mb4_persian_ci NOT NULL,
  `quantity` int(10) NOT NULL,
  `zarib` float(20,2) NOT NULL,
  `cost` int(10) NOT NULL,
  `harf` varchar(300) CHARACTER SET utf16 COLLATE utf16_persian_ci NOT NULL,
  `total` float(20,2) NOT NULL,
  `date_sh` text COLLATE utf8mb4_persian_ci NOT NULL,
  `date_m` date NOT NULL,
  `user_id` int(10) NOT NULL,
  `edit_row_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `masarf_type`
--

CREATE TABLE `masarf_type` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `masarf_type`
--

INSERT INTO `masarf_type` (`id`, `name`) VALUES
(9, 'غذا');

-- --------------------------------------------------------

--
-- Table structure for table `pardakht_mash`
--

CREATE TABLE `pardakht_mash` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `father_name` varchar(300) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `salary` float NOT NULL,
  `bardasht` int(10) NOT NULL,
  `total` int(11) NOT NULL,
  `paid` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `description` text COLLATE utf8mb4_persian_ci NOT NULL,
  `date_sh` text COLLATE utf8mb4_persian_ci NOT NULL,
  `date_m` date NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `after_check` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pardakht_mash_edit`
--

CREATE TABLE `pardakht_mash_edit` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `father_name` varchar(300) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `salary` float NOT NULL,
  `bardasht` int(10) NOT NULL,
  `total` int(11) NOT NULL,
  `paid` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `description` text COLLATE utf8mb4_persian_ci NOT NULL,
  `date_sh` text COLLATE utf8mb4_persian_ci NOT NULL,
  `date_m` date NOT NULL,
  `edit_row_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qarza`
--

CREATE TABLE `qarza` (
  `q_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `description` text COLLATE utf8mb4_persian_ci NOT NULL,
  `job` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `amount` int(10) NOT NULL,
  `qist` int(3) NOT NULL,
  `org_name` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `qarza_type` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `monthly_payment` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `date_sh` text COLLATE utf8mb4_persian_ci NOT NULL,
  `date_m` date NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `after_check` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `qarza`
--

INSERT INTO `qarza` (`q_id`, `name`, `description`, `job`, `amount`, `qist`, `org_name`, `qarza_type`, `monthly_payment`, `user_id`, `date_sh`, `date_m`, `status`, `after_check`) VALUES
(1, '---', '---', '----', 2000, 3, '--', '---', 1000, 9, '19/08/1399', '2020-11-09', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `qarza_edit`
--

CREATE TABLE `qarza_edit` (
  `q_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `description` text COLLATE utf8mb4_persian_ci NOT NULL,
  `job` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `amount` int(10) NOT NULL,
  `qist` int(3) NOT NULL,
  `org_name` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `qarza_type` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `monthly_payment` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `date_sh` text COLLATE utf8mb4_persian_ci NOT NULL,
  `date_m` date NOT NULL,
  `edit_row_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reg_dokan`
--

CREATE TABLE `reg_dokan` (
  `id` int(11) NOT NULL,
  `user_id` int(20) NOT NULL,
  `dokan_number` varchar(30) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `marbot` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `father_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `grandfather` varchar(200) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `tazkira` varchar(500) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `phone` varchar(60) CHARACTER SET utf32 COLLATE utf32_persian_ci NOT NULL,
  `description` text COLLATE utf8mb4_persian_ci NOT NULL,
  `photo` mediumblob NOT NULL,
  `documents` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `date_sh` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `date_m` date NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `after_check` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `reg_dokan`
--

INSERT INTO `reg_dokan` (`id`, `user_id`, `dokan_number`, `marbot`, `father_name`, `grandfather`, `tazkira`, `phone`, `description`, `photo`, `documents`, `date_sh`, `date_m`, `status`, `after_check`) VALUES
(1, 9, '1', 'sohail', '--', '--', '--', '--', '--', '', '', '19/08/1399', '2020-11-09', '', ''),
(2, 9, '2', 'حاجی سحیل', '----', '---', '----', '---', '----', '', '', '02/09/1399', '2020-11-22', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reg_dokan_edit`
--

CREATE TABLE `reg_dokan_edit` (
  `id` int(11) NOT NULL,
  `user_id` int(20) NOT NULL,
  `dokan_number` varchar(30) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `marbot` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `father_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `grandfather` varchar(200) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `tazkira` varchar(500) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `phone` varchar(60) CHARACTER SET utf32 COLLATE utf32_persian_ci NOT NULL,
  `description` text COLLATE utf8mb4_persian_ci NOT NULL,
  `photo` mediumblob NOT NULL,
  `documents` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `date_sh` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `date_m` date NOT NULL,
  `edit_row_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sabt_karmandan`
--

CREATE TABLE `sabt_karmandan` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `father_name` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `work_area` text COLLATE utf8mb4_persian_ci NOT NULL,
  `nawyat` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `salary` int(10) NOT NULL,
  `email` varchar(120) COLLATE utf8mb4_persian_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `home` varchar(200) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `photo` mediumblob NOT NULL,
  `tazkira` mediumblob NOT NULL,
  `date_sh` text COLLATE utf8mb4_persian_ci NOT NULL,
  `date_m` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `sabt_karmandan`
--

INSERT INTO `sabt_karmandan` (`id`, `user_id`, `name`, `lastname`, `father_name`, `work_area`, `nawyat`, `salary`, `email`, `phone`, `home`, `photo`, `tazkira`, `date_sh`, `date_m`) VALUES
(1, 9, '---', '---', '---', '---', 'فول تایم', 10000, '', '---', '---', '', '', '19/08/1399', '2020-11-09');

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `secret_code` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `authority` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `photo` varchar(150) COLLATE utf8mb4_persian_ci NOT NULL,
  `date_sh` text COLLATE utf8mb4_persian_ci NOT NULL,
  `date_m` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`id`, `name`, `lastname`, `username`, `password`, `secret_code`, `authority`, `photo`, `date_sh`, `date_m`, `user_id`) VALUES
(9, 'Haji sohail', 'Noor', 'sohail', 'hajisohail2020', 'hajisohail2020', '100', '', '1399/8/16', '2020-11-06', 9),
(10, 'ahmad', 'karimi', 'ahmad', 'ahmad', 'ahmad', '40', '', '1399/8/19', '2020-11-09', 0),
(11, 'monir', 'ahmadyar', 'monir', 'monir', 'monir', '40', '', '1399/8/27', '2020-11-17', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bardasht_karmandan`
--
ALTER TABLE `bardasht_karmandan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Relation11` (`user_id`);

--
-- Indexes for table `bardasht_karmandan_edit`
--
ALTER TABLE `bardasht_karmandan_edit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Relation11` (`user_id`),
  ADD KEY `b_r` (`edit_row_id`);

--
-- Indexes for table `bill_barq`
--
ALTER TABLE `bill_barq`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relations4` (`user_id`);

--
-- Indexes for table `bill_barq_edit`
--
ALTER TABLE `bill_barq_edit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relations4` (`user_id`),
  ADD KEY `b_b_r` (`edit_row_id`);

--
-- Indexes for table `bill_dawra`
--
ALTER TABLE `bill_dawra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kerah_dokan`
--
ALTER TABLE `kerah_dokan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_to_account` (`user_id`);

--
-- Indexes for table `kerah_dokan_edit`
--
ALTER TABLE `kerah_dokan_edit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_to_account` (`user_id`),
  ADD KEY `k_d_r` (`edit_row_id`);

--
-- Indexes for table `loan_qist`
--
ALTER TABLE `loan_qist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_qist_edit`
--
ALTER TABLE `loan_qist_edit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `l_q_r` (`edit_row_id`);

--
-- Indexes for table `market_info`
--
ALTER TABLE `market_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test` (`user_id`);

--
-- Indexes for table `masarf`
--
ALTER TABLE `masarf`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `Relation12` (`user_id`);

--
-- Indexes for table `masarf_edit`
--
ALTER TABLE `masarf_edit`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `Relation12` (`user_id`),
  ADD KEY `m_r` (`edit_row_id`);

--
-- Indexes for table `masarf_type`
--
ALTER TABLE `masarf_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pardakht_mash`
--
ALTER TABLE `pardakht_mash`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relations3` (`user_id`);

--
-- Indexes for table `pardakht_mash_edit`
--
ALTER TABLE `pardakht_mash_edit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relations3` (`user_id`),
  ADD KEY `p_m_r` (`edit_row_id`);

--
-- Indexes for table `qarza`
--
ALTER TABLE `qarza`
  ADD PRIMARY KEY (`q_id`),
  ADD KEY `Relation5` (`user_id`);

--
-- Indexes for table `qarza_edit`
--
ALTER TABLE `qarza_edit`
  ADD PRIMARY KEY (`q_id`),
  ADD KEY `Relation5` (`user_id`),
  ADD KEY `q_r` (`edit_row_id`);

--
-- Indexes for table `reg_dokan`
--
ALTER TABLE `reg_dokan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test2` (`user_id`);

--
-- Indexes for table `reg_dokan_edit`
--
ALTER TABLE `reg_dokan_edit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test2` (`user_id`);

--
-- Indexes for table `sabt_karmandan`
--
ALTER TABLE `sabt_karmandan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Relation1` (`user_id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bardasht_karmandan`
--
ALTER TABLE `bardasht_karmandan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bardasht_karmandan_edit`
--
ALTER TABLE `bardasht_karmandan_edit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bill_barq`
--
ALTER TABLE `bill_barq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bill_barq_edit`
--
ALTER TABLE `bill_barq_edit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bill_dawra`
--
ALTER TABLE `bill_dawra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kerah_dokan`
--
ALTER TABLE `kerah_dokan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kerah_dokan_edit`
--
ALTER TABLE `kerah_dokan_edit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `loan_qist`
--
ALTER TABLE `loan_qist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `loan_qist_edit`
--
ALTER TABLE `loan_qist_edit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `market_info`
--
ALTER TABLE `market_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `masarf`
--
ALTER TABLE `masarf`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `masarf_edit`
--
ALTER TABLE `masarf_edit`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `masarf_type`
--
ALTER TABLE `masarf_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pardakht_mash`
--
ALTER TABLE `pardakht_mash`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pardakht_mash_edit`
--
ALTER TABLE `pardakht_mash_edit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `qarza`
--
ALTER TABLE `qarza`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `qarza_edit`
--
ALTER TABLE `qarza_edit`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reg_dokan`
--
ALTER TABLE `reg_dokan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `reg_dokan_edit`
--
ALTER TABLE `reg_dokan_edit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sabt_karmandan`
--
ALTER TABLE `sabt_karmandan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bardasht_karmandan_edit`
--
ALTER TABLE `bardasht_karmandan_edit`
  ADD CONSTRAINT `Relation11` FOREIGN KEY (`user_id`) REFERENCES `user_account` (`id`),
  ADD CONSTRAINT `b_r` FOREIGN KEY (`edit_row_id`) REFERENCES `bardasht_karmandan` (`id`);

--
-- Constraints for table `bill_barq_edit`
--
ALTER TABLE `bill_barq_edit`
  ADD CONSTRAINT `b_b_r` FOREIGN KEY (`edit_row_id`) REFERENCES `bill_barq` (`id`),
  ADD CONSTRAINT `relations4` FOREIGN KEY (`user_id`) REFERENCES `user_account` (`id`);

--
-- Constraints for table `kerah_dokan_edit`
--
ALTER TABLE `kerah_dokan_edit`
  ADD CONSTRAINT `k_d_r` FOREIGN KEY (`edit_row_id`) REFERENCES `kerah_dokan` (`id`);

--
-- Constraints for table `loan_qist_edit`
--
ALTER TABLE `loan_qist_edit`
  ADD CONSTRAINT `l_q_r` FOREIGN KEY (`edit_row_id`) REFERENCES `loan_qist` (`id`);

--
-- Constraints for table `market_info`
--
ALTER TABLE `market_info`
  ADD CONSTRAINT `test` FOREIGN KEY (`user_id`) REFERENCES `user_account` (`id`);

--
-- Constraints for table `masarf_edit`
--
ALTER TABLE `masarf_edit`
  ADD CONSTRAINT `Relation12` FOREIGN KEY (`user_id`) REFERENCES `user_account` (`id`),
  ADD CONSTRAINT `m_r` FOREIGN KEY (`edit_row_id`) REFERENCES `masarf` (`m_id`);

--
-- Constraints for table `pardakht_mash_edit`
--
ALTER TABLE `pardakht_mash_edit`
  ADD CONSTRAINT `p_m_r` FOREIGN KEY (`edit_row_id`) REFERENCES `pardakht_mash` (`id`);

--
-- Constraints for table `qarza_edit`
--
ALTER TABLE `qarza_edit`
  ADD CONSTRAINT `Relation5` FOREIGN KEY (`user_id`) REFERENCES `user_account` (`id`),
  ADD CONSTRAINT `q_r` FOREIGN KEY (`edit_row_id`) REFERENCES `qarza` (`q_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
