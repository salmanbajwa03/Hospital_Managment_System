-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2020 at 07:00 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmsd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `password` varchar(40) NOT NULL,
  `admin_fname` varchar(40) NOT NULL,
  `admin_lname` varchar(40) NOT NULL,
  `admin_contact` varchar(40) NOT NULL,
  `admin_email` varchar(40) NOT NULL,
  `admin_salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `password`, `admin_fname`, `admin_lname`, `admin_contact`, `admin_email`, `admin_salary`) VALUES
(1, '112212', 'Zeeshan', 'Gujjar', '03075454819', 'zeeshan@gmail.com', 89000);

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `patient_id` varchar(40) DEFAULT NULL,
  `appointment_id` int(11) NOT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` varchar(40) NOT NULL,
  `appointment_status` varchar(40) DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`patient_id`, `appointment_id`, `doctor_id`, `appointment_date`, `appointment_time`, `appointment_status`) VALUES
('l1f17bscs0303', 3, 1, '2018-11-12', '12:00PM', 'confirm');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`) VALUES
(3, 'Chest'),
(1, 'heart'),
(8, 'neurologist'),
(2, 'Skin');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` int(11) NOT NULL,
  `password` varchar(40) NOT NULL,
  `doctor_fname` varchar(40) NOT NULL,
  `doctor_lname` varchar(40) NOT NULL,
  `doctor_contact` varchar(40) NOT NULL,
  `doctor_email` varchar(40) NOT NULL,
  `doctor_fee` int(11) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `password`, `doctor_fname`, `doctor_lname`, `doctor_contact`, `doctor_email`, `doctor_fee`, `department_id`) VALUES
(1, '112212', 'Dr Hamza', 'Gujjar', '03224968831', 'hamza@gmail.com', 12000, 1),
(2, '12345', 'Zeeshan', 'Gujjar', '03075454819', 'zeeshan@gmail.com', 34000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `medicine_name` varchar(40) NOT NULL,
  `medicine_id` int(11) NOT NULL,
  `sales_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`medicine_name`, `medicine_id`, `sales_price`) VALUES
('monotica', 3, 26),
('panadol', 4, 3),
('acyfyl', 9, 170),
('loprin', 17, 120),
('disprin', 18, 3);

-- --------------------------------------------------------

--
-- Table structure for table `medicine_sales`
--

CREATE TABLE `medicine_sales` (
  `sales_time` varchar(40) NOT NULL,
  `sales_date` date NOT NULL,
  `sales_qty` int(11) NOT NULL,
  `medicine_id` int(11) NOT NULL,
  `sale_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine_sales`
--

INSERT INTO `medicine_sales` (`sales_time`, `sales_date`, `sales_qty`, `medicine_id`, `sale_price`) VALUES
('12:00AM', '2019-06-28', 65, 9, 170);

-- --------------------------------------------------------

--
-- Table structure for table `medicine_stocks`
--

CREATE TABLE `medicine_stocks` (
  `Purchasing_quantity` int(11) NOT NULL,
  `Store_quantity` int(11) NOT NULL,
  `purchasing_price` int(11) NOT NULL,
  `purchasing_date` date NOT NULL,
  `medicine_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine_stocks`
--

INSERT INTO `medicine_stocks` (`Purchasing_quantity`, `Store_quantity`, `purchasing_price`, `purchasing_date`, `medicine_id`) VALUES
(123, 123, 152, '2019-06-14', 9),
(65, 65, 170, '2019-06-05', 17);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `username` varchar(40) NOT NULL,
  `patient_fname` varchar(40) NOT NULL,
  `patient_lname` varchar(40) NOT NULL,
  `patient_age` int(11) NOT NULL,
  `patient_contact` varchar(40) NOT NULL,
  `patient_address` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`username`, `patient_fname`, `patient_lname`, `patient_age`, `patient_contact`, `patient_address`) VALUES
('l1f17bscs0303', 'Nauman', 'gujjar', 17, '03404556692', 'Sun city Lahore');

-- --------------------------------------------------------

--
-- Table structure for table `patient_login`
--

CREATE TABLE `patient_login` (
  `username` varchar(40) NOT NULL,
  `patient_password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_login`
--

INSERT INTO `patient_login` (`username`, `patient_password`) VALUES
('l1f17bscs0303', 'sik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_email` (`admin_email`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`),
  ADD UNIQUE KEY `department_name` (`department_name`),
  ADD UNIQUE KEY `department_name_2` (`department_name`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`),
  ADD UNIQUE KEY `doctor_email` (`doctor_email`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medicine_id`),
  ADD UNIQUE KEY `medicine_name` (`medicine_name`);

--
-- Indexes for table `medicine_sales`
--
ALTER TABLE `medicine_sales`
  ADD KEY `medicine_id` (`medicine_id`);

--
-- Indexes for table `medicine_stocks`
--
ALTER TABLE `medicine_stocks`
  ADD KEY `medicine_id` (`medicine_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `patient_login`
--
ALTER TABLE `patient_login`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `medicine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`username`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`doctor_id`);

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`);

--
-- Constraints for table `medicine_sales`
--
ALTER TABLE `medicine_sales`
  ADD CONSTRAINT `medicine_sales_ibfk_1` FOREIGN KEY (`medicine_id`) REFERENCES `medicine` (`medicine_id`);

--
-- Constraints for table `medicine_stocks`
--
ALTER TABLE `medicine_stocks`
  ADD CONSTRAINT `medicine_stocks_ibfk_1` FOREIGN KEY (`medicine_id`) REFERENCES `medicine` (`medicine_id`);

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`username`) REFERENCES `patient_login` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
