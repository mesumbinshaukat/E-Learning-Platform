-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2024 at 04:14 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_number` varchar(25) NOT NULL,
  `picture` varchar(300) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `pin_code` int(11) DEFAULT NULL,
  `representative_name` varchar(100) DEFAULT NULL,
  `representative_contact_number` int(11) DEFAULT NULL,
  `representative_email` varchar(100) DEFAULT NULL,
  `college_streams` varchar(300) DEFAULT NULL,
  `affiliated_university` varchar(100) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `college_code` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `stream_id` int(11) NOT NULL,
  `posting_category` varchar(50) NOT NULL,
  `provider_name_company_id` int(11) NOT NULL,
  `training_type` varchar(50) NOT NULL,
  `offline_address` int(100) NOT NULL,
  `duration_days` int(11) NOT NULL,
  `last_date_to_apply` date NOT NULL,
  `hours_per_day` int(11) NOT NULL,
  `certification` varchar(25) NOT NULL,
  `slots` int(11) NOT NULL,
  `course_description` tinytext NOT NULL,
  `topics_covered` varchar(160) NOT NULL,
  `benefits_of_course` varchar(150) NOT NULL,
  `pre_requirements` varchar(150) NOT NULL,
  `additional_info` varchar(150) NOT NULL,
  `course_type` varchar(50) NOT NULL,
  `original_cost` int(11) NOT NULL,
  `discount_percentage` int(11) NOT NULL,
  `final_cost` int(11) NOT NULL,
  `main_image` varchar(300) NOT NULL,
  `inner_image` varchar(300) NOT NULL,
  `image_two` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_registration`
--

CREATE TABLE `course_registration` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `internship`
--

CREATE TABLE `internship` (
  `id` int(11) NOT NULL,
  `internship` varchar(100) NOT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `industry` varchar(100) DEFAULT NULL,
  `duration_days` int(11) DEFAULT NULL,
  `eligibility` varchar(50) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `internship_category` varchar(100) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `vacancies` int(11) DEFAULT NULL,
  `last_date_to_apply` date DEFAULT NULL,
  `certification` varchar(100) DEFAULT NULL,
  `full-description` tinytext DEFAULT NULL,
  `pre-requirements` varchar(300) DEFAULT NULL,
  `additional_info` varchar(300) DEFAULT NULL,
  `internship_type` varchar(40) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `stifund` int(11) DEFAULT NULL,
  `food_allowances` varchar(20) DEFAULT NULL,
  `transport_allowances` varchar(20) DEFAULT NULL,
  `main_image` varchar(300) DEFAULT NULL,
  `inner_image` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `placement`
--

CREATE TABLE `placement` (
  `id` int(11) NOT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `job_role` varchar(40) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `industry` varchar(100) DEFAULT NULL,
  `experience` varchar(60) DEFAULT NULL,
  `work_mode` varchar(100) DEFAULT NULL,
  `years_open_experience` int(11) DEFAULT NULL,
  `eligibility` varchar(50) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `job_type` varchar(70) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `vacancies` int(11) DEFAULT NULL,
  `last_date_to_apply` date DEFAULT NULL,
  `full_description` tinytext DEFAULT NULL,
  `requirements` varchar(300) DEFAULT NULL,
  `additional_info` varchar(300) DEFAULT NULL,
  `food_allowances` varchar(20) DEFAULT NULL,
  `transport_allowances` varchar(15) DEFAULT NULL,
  `esi` varchar(15) DEFAULT NULL,
  `main_image` varchar(300) DEFAULT NULL,
  `inner_image` varchar(300) DEFAULT NULL,
  `image_two` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stream`
--

CREATE TABLE `stream` (
  `id` int(11) NOT NULL,
  `stream_name` varchar(100) NOT NULL,
  `stream_location` varchar(40) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `contact_number` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `internship` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `picture` varchar(300) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `alternate_contact_number` int(11) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `pin_code` int(11) DEFAULT NULL,
  `qualification` varchar(100) DEFAULT NULL,
  `branch` varchar(100) DEFAULT NULL,
  `semester` varchar(100) DEFAULT NULL,
  `account_type` varchar(100) DEFAULT NULL,
  `college_id` int(11) DEFAULT NULL,
  `cv` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `contact_number`, `email`, `username`, `internship`, `password`, `picture`, `gender`, `address`, `alternate_contact_number`, `state`, `district`, `dob`, `pin_code`, `qualification`, `branch`, `semester`, `account_type`, `college_id`, `cv`) VALUES
(1, 'Mesum Bin Shaukat', '3362100225', 'masumbinshaukat@gmail.com', 'Mesum.dev', 'short_term', '$2y$10$bLiyzyB59sEySZw/OI.uk.En78gFo346HYhMxXmL/1GsfT4ZIk0Hu', NULL, '', '', 0, '', '', '0000-00-00', 0, '', '', '', '', 0, ''),
(2, 'Abdul Rafay Khan', '3333342343', 'smokeark3@gmail.com', 'Rafay.dev', 'short_term', '$2y$10$8Hol5WSS9YNY3TT.D3OB1O4FXHbN4sMfGL//zvyMK8J7VhnQ655wy', NULL, '', '', 0, '', '', '0000-00-00', 0, '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `picture` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `superadmin` (`id`, `email`, `username`, `password`, `picture`) VALUES
(1, 'info@demo.com', 'Super.Admin', 'hello123', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact_number` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `dob` date DEFAULT NULL,
  `aadhar_card_number` int(11) DEFAULT NULL,
  `aadhar_card_picture` varchar(300) DEFAULT NULL,
  `pan_card_number` varchar(100) DEFAULT NULL,
  `pan_card_picture` varchar(300) DEFAULT NULL,
  `date_of_joining` date DEFAULT NULL,
  `qualification` varchar(100) DEFAULT NULL,
  `experience` varchar(30) DEFAULT NULL,
  `organization_name` varchar(100) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `trainer_document` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_registration`
--
ALTER TABLE `course_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internship`
--
ALTER TABLE `internship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `placement`
--
ALTER TABLE `placement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stream`
--
ALTER TABLE `stream`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `FOREIGN KEY` (`internship`);

--
-- Indexes for table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_registration`
--
ALTER TABLE `course_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `internship`
--
ALTER TABLE `internship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `placement`
--
ALTER TABLE `placement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stream`
--
ALTER TABLE `stream`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `superadmin`
--
ALTER TABLE `superadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
