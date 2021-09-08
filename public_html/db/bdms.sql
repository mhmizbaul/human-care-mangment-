-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 27, 2020 at 12:06 PM
-- Server version: 10.3.24-MariaDB-log
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `u_id` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `role` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `blood` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `details` longtext NOT NULL,
  `bdate` varchar(100) NOT NULL,
  `pro_pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `email`, `u_id`, `phone`, `password`, `pic`, `role`, `address`, `blood`, `sex`, `details`, `bdate`, `pro_pic`) VALUES
(3, 'Mizbaul ', 'Hossain', 'mizbaul @gmail.com', '1234', 2147483647, '1234', '', 'admin', 'Dhanmondi,Dhaka ,Bangladesh', 'AB+', 'Male', 'I am always alone', '1994-11-17', '33e05faf3190cd5b1aa3d9e2b.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blood_donation`
--

CREATE TABLE `blood_donation` (
  `id` int(250) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `age` varchar(250) NOT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `blood` varchar(30) NOT NULL,
  `present_address` varchar(250) DEFAULT NULL,
  `permanet_address` varchar(250) DEFAULT NULL,
  `occupation` varchar(250) DEFAULT NULL,
  `times_blood_donation` varchar(250) DEFAULT NULL,
  `last_date_blood_donation` varchar(250) DEFAULT NULL,
  `area` varchar(250) DEFAULT NULL,
  `life_time` varchar(250) DEFAULT NULL,
  `mobile` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `date_of_insertion` timestamp NOT NULL DEFAULT current_timestamp(),
  `inserted_by` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_donation`
--

INSERT INTO `blood_donation` (`id`, `name`, `age`, `gender`, `blood`, `present_address`, `permanet_address`, `occupation`, `times_blood_donation`, `last_date_blood_donation`, `area`, `life_time`, `mobile`, `email`, `password`, `date_of_insertion`, `inserted_by`) VALUES
(45, 'Reazul islam', '30', 'Male', 'O+', 'Dhaka', 'Barisal', 'Student', '1', '2020-09-22', 'Uttara', 'yes', '01720920148', 'reazulislam651@gmail.com', '1234', '2020-09-27 13:09:16', ''),
(46, 'Tania Akter', '19', 'Female', 'AB+', 'Dhaka', 'Dhaka, Jurain', 'Student', '1', '2020-09-28', 'Dhanmondi', 'yes', '01918934651', 'reazulislam123@gmail.com', '1234', '2020-09-27 14:31:13', '');

-- --------------------------------------------------------

--
-- Table structure for table `evergreen_fund`
--

CREATE TABLE `evergreen_fund` (
  `id` int(250) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `disease_name` varchar(250) NOT NULL,
  `need_money` varchar(250) DEFAULT NULL,
  `age` varchar(30) NOT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `blood` varchar(250) DEFAULT NULL,
  `present_address` varchar(250) DEFAULT NULL,
  `permanet_address` varchar(250) DEFAULT NULL,
  `hospital_name` varchar(250) DEFAULT NULL,
  `patient_mobile_number` varchar(250) DEFAULT NULL,
  `care_of_name` varchar(250) DEFAULT NULL,
  `relative_mobile_number` varchar(250) DEFAULT NULL,
  `bikash_number` varchar(250) DEFAULT NULL,
  `account_number` varchar(250) DEFAULT NULL,
  `bank_name` varchar(250) DEFAULT NULL,
  `branch_name` varchar(250) DEFAULT NULL,
  `des` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `status` varchar(250) DEFAULT NULL,
  `date_of_insertion` timestamp NOT NULL DEFAULT current_timestamp(),
  `inserted_by` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evergreen_fund`
--

INSERT INTO `evergreen_fund` (`id`, `name`, `disease_name`, `need_money`, `age`, `gender`, `blood`, `present_address`, `permanet_address`, `hospital_name`, `patient_mobile_number`, `care_of_name`, `relative_mobile_number`, `bikash_number`, `account_number`, `bank_name`, `branch_name`, `des`, `image`, `email`, `password`, `status`, `date_of_insertion`, `inserted_by`) VALUES
(54, 'Md. Reazul Islam', 'Cancer', '40000', '30', 'Male', 'O+', 'Dhaka', '\r\n               Barisal', 'DMCH', '01784598652', 'mamun', '+8801720920148', '1247000', '9784009', 'Dutch bangla', 'Jurain', 'test\r\n             ', 'patient_file/IMG_20191101_170315.jpg', 'reazulislam651@gmail.com', '1234', '1', '2020-09-27 13:11:51', ''),
(55, 'Monowaor ', 'Cancer', '40000', '45', 'Female', 'B+', 'Dhaka, Dhaka, Jurain', 'Munsigonj', 'dmch', '178965412', 'Abdul Majid', '178965412', '1247000', '7899', 'Dutch bangla', 'Jurain', 'des             ', 'patient_file/IMG_20191101_170315.jpg', 'reazulislam12345@gmail.com', '1234', '1', '2020-09-27 14:35:18', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_donation`
--
ALTER TABLE `blood_donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evergreen_fund`
--
ALTER TABLE `evergreen_fund`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_donation`
--
ALTER TABLE `blood_donation`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `evergreen_fund`
--
ALTER TABLE `evergreen_fund`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
