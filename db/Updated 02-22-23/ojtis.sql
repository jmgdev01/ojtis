-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 22, 2023 at 02:04 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ojtis`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts_tbl`
--

CREATE TABLE `accounts_tbl` (
  `acc_id` int(11) NOT NULL,
  `acc_email_address` varchar(150) NOT NULL,
  `acc_password` text NOT NULL,
  `acc_role` varchar(15) NOT NULL,
  `acc_date_reg` date NOT NULL,
  `i_id` int(11) DEFAULT NULL,
  `s_id` int(11) DEFAULT NULL,
  `a_id` int(11) DEFAULT NULL,
  `cf_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts_tbl`
--

INSERT INTO `accounts_tbl` (`acc_id`, `acc_email_address`, `acc_password`, `acc_role`, `acc_date_reg`, `i_id`, `s_id`, `a_id`, `cf_id`) VALUES
(1, 'jmg@gmail.com', '123456', 'intern', '2023-02-20', 1, 1, 0, 1),
(2, 'jg@gmail.com', '123456', 'admin', '2023-02-22', NULL, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `address_tbl`
--

CREATE TABLE `address_tbl` (
  `ad_id` int(11) NOT NULL,
  `ad_street` varchar(25) NOT NULL,
  `ad_barangay` varchar(25) NOT NULL,
  `ad_municipality` varchar(25) NOT NULL,
  `ad_zipcode` int(11) NOT NULL,
  `ad_province` varchar(50) NOT NULL,
  `i_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `address_tbl`
--

INSERT INTO `address_tbl` (`ad_id`, `ad_street`, `ad_barangay`, `ad_municipality`, `ad_zipcode`, `ad_province`, `i_id`, `s_id`) VALUES
(1, '1', '1', '1', 1, '1', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `a_id` int(11) NOT NULL,
  `a_fullname` varchar(255) NOT NULL,
  `a_img` text NOT NULL,
  `a_mobile` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`a_id`, `a_fullname`, `a_img`, `a_mobile`) VALUES
(1, 'John Michael N. Gadot', '', '09123456789');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_tbl`
--

CREATE TABLE `attendance_tbl` (
  `att_id` int(11) NOT NULL,
  `att_date` date NOT NULL,
  `att_time` time NOT NULL,
  `i_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `case_tbl`
--

CREATE TABLE `case_tbl` (
  `c_id` int(11) NOT NULL,
  `c_physical_disability` varchar(100) NOT NULL,
  `c_mental_disability` varchar(100) NOT NULL,
  `c_criminal_liability` varchar(100) NOT NULL,
  `i_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `case_tbl`
--

INSERT INTO `case_tbl` (`c_id`, `c_physical_disability`, `c_mental_disability`, `c_criminal_liability`, `i_id`) VALUES
(1, '1', '1', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `configuration_tbl`
--

CREATE TABLE `configuration_tbl` (
  `cf_id` int(11) NOT NULL,
  `cf_period` varchar(5) NOT NULL,
  `cf_hours` int(11) NOT NULL,
  `cf_week_equivalent` varchar(255) NOT NULL,
  `cf_start_date` date NOT NULL,
  `cf_program` text NOT NULL,
  `cf_campus` varchar(50) NOT NULL,
  `cf_school` varchar(255) NOT NULL,
  `cf_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `configuration_tbl`
--

INSERT INTO `configuration_tbl` (`cf_id`, `cf_period`, `cf_hours`, `cf_week_equivalent`, `cf_start_date`, `cf_program`, `cf_campus`, `cf_school`, `cf_address`) VALUES
(1, '22-2', 500, '3 months and 3 weeks', '2023-02-13', 'Bachelor of Science in Information Technology', 'Mosqueda Campus', 'Guimaras State University', 'Alaguisoc, Jordan, Guimaras');

-- --------------------------------------------------------

--
-- Table structure for table `contacts_tbl`
--

CREATE TABLE `contacts_tbl` (
  `ct_id` int(11) NOT NULL,
  `ct_email_address` varchar(150) NOT NULL,
  `ct_mobile_no` varchar(15) NOT NULL,
  `i_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts_tbl`
--

INSERT INTO `contacts_tbl` (`ct_id`, `ct_email_address`, `ct_mobile_no`, `i_id`) VALUES
(1, '1', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `educational_background_tbl`
--

CREATE TABLE `educational_background_tbl` (
  `eb_id` int(11) NOT NULL,
  `eb_elementary` varchar(150) NOT NULL,
  `eb_elem_year` int(11) NOT NULL,
  `eb_secondary` varchar(150) NOT NULL,
  `eb_sec_year` int(11) NOT NULL,
  `eb_tertiary` varchar(150) NOT NULL,
  `eb_ter_year` int(11) NOT NULL,
  `eb_course_code` varchar(10) NOT NULL,
  `eb_course_description` varchar(255) NOT NULL,
  `eb_year` int(11) NOT NULL,
  `eb_section` varchar(5) NOT NULL,
  `eb_curriculum` varchar(255) NOT NULL,
  `eb_id_number` varchar(20) NOT NULL,
  `i_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `educational_background_tbl`
--

INSERT INTO `educational_background_tbl` (`eb_id`, `eb_elementary`, `eb_elem_year`, `eb_secondary`, `eb_sec_year`, `eb_tertiary`, `eb_ter_year`, `eb_course_code`, `eb_course_description`, `eb_year`, `eb_section`, `eb_curriculum`, `eb_id_number`, `i_id`) VALUES
(1, '1', 1, '1', 1, '1', 1, '1', '1', 4, '1', '1', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `emergency_tbl`
--

CREATE TABLE `emergency_tbl` (
  `em_id` int(11) NOT NULL,
  `em_guardian` varchar(150) NOT NULL,
  `em_relationship` varchar(50) NOT NULL,
  `em_address` varchar(255) NOT NULL,
  `em_contact` varchar(15) NOT NULL,
  `i_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emergency_tbl`
--

INSERT INTO `emergency_tbl` (`em_id`, `em_guardian`, `em_relationship`, `em_address`, `em_contact`, `i_id`) VALUES
(1, '1', '1', '1', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `intern_tbl`
--

CREATE TABLE `intern_tbl` (
  `i_id` int(11) NOT NULL,
  `i_code` varchar(20) NOT NULL,
  `i_first_name` varchar(50) NOT NULL,
  `i_middle_name` varchar(25) DEFAULT NULL,
  `i_last_name` varchar(50) NOT NULL,
  `i_suffix_name` varchar(5) DEFAULT NULL,
  `i_img` text NOT NULL,
  `i_sex` varchar(10) NOT NULL,
  `i_civil_status` varchar(15) NOT NULL,
  `i_height` double NOT NULL,
  `i_weight` int(11) NOT NULL,
  `i_birth_date` date NOT NULL,
  `i_age` int(11) NOT NULL,
  `i_place_birth` text NOT NULL,
  `i_nationality` varchar(100) NOT NULL,
  `i_skills` text NOT NULL,
  `i_training_seminar` text NOT NULL,
  `s_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `intern_tbl`
--

INSERT INTO `intern_tbl` (`i_id`, `i_code`, `i_first_name`, `i_middle_name`, `i_last_name`, `i_suffix_name`, `i_img`, `i_sex`, `i_civil_status`, `i_height`, `i_weight`, `i_birth_date`, `i_age`, `i_place_birth`, `i_nationality`, `i_skills`, `i_training_seminar`, `s_id`) VALUES
(1, 'IN_230220_0001', '1', '1', '1', 'Jr.', '', 'Male', 'Single', 1, 1, '2023-02-20', 1, '1', '1', '1', '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `parent_tbl`
--

CREATE TABLE `parent_tbl` (
  `p_id` int(11) NOT NULL,
  `p_father` varchar(100) NOT NULL,
  `p_father_occupation` varchar(25) NOT NULL,
  `p_mother` varchar(100) NOT NULL,
  `p_mother_occupation` varchar(25) NOT NULL,
  `p_address` text NOT NULL,
  `i_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parent_tbl`
--

INSERT INTO `parent_tbl` (`p_id`, `p_father`, `p_father_occupation`, `p_mother`, `p_mother_occupation`, `p_address`, `i_id`) VALUES
(1, '1', '1', '1', '1', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reviews_tbl`
--

CREATE TABLE `reviews_tbl` (
  `r_id` int(11) NOT NULL,
  `r_activity` text NOT NULL,
  `r_rating` int(11) NOT NULL,
  `att_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `supervisor_tbl`
--

CREATE TABLE `supervisor_tbl` (
  `s_id` int(11) NOT NULL,
  `s_first_name` varchar(50) NOT NULL,
  `s_middle_name` varchar(25) NOT NULL,
  `s_last_name` varchar(50) NOT NULL,
  `s_suffix_name` varchar(5) NOT NULL,
  `s_mobile_no` varchar(15) NOT NULL,
  `s_agency` varchar(50) NOT NULL,
  `s_office` varchar(50) NOT NULL,
  `s_designation` varchar(20) NOT NULL,
  `s_salutation` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supervisor_tbl`
--

INSERT INTO `supervisor_tbl` (`s_id`, `s_first_name`, `s_middle_name`, `s_last_name`, `s_suffix_name`, `s_mobile_no`, `s_agency`, `s_office`, `s_designation`, `s_salutation`) VALUES
(1, 'Adrian', 'Jaleco', 'Forca', '', '09123456789', 'Guimaras State University', 'ICT Office', 'ICT Director', 'Director');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts_tbl`
--
ALTER TABLE `accounts_tbl`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `address_tbl`
--
ALTER TABLE `address_tbl`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `attendance_tbl`
--
ALTER TABLE `attendance_tbl`
  ADD PRIMARY KEY (`att_id`);

--
-- Indexes for table `case_tbl`
--
ALTER TABLE `case_tbl`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `configuration_tbl`
--
ALTER TABLE `configuration_tbl`
  ADD PRIMARY KEY (`cf_id`);

--
-- Indexes for table `contacts_tbl`
--
ALTER TABLE `contacts_tbl`
  ADD PRIMARY KEY (`ct_id`);

--
-- Indexes for table `educational_background_tbl`
--
ALTER TABLE `educational_background_tbl`
  ADD PRIMARY KEY (`eb_id`);

--
-- Indexes for table `emergency_tbl`
--
ALTER TABLE `emergency_tbl`
  ADD PRIMARY KEY (`em_id`);

--
-- Indexes for table `intern_tbl`
--
ALTER TABLE `intern_tbl`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `parent_tbl`
--
ALTER TABLE `parent_tbl`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `reviews_tbl`
--
ALTER TABLE `reviews_tbl`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `supervisor_tbl`
--
ALTER TABLE `supervisor_tbl`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts_tbl`
--
ALTER TABLE `accounts_tbl`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `address_tbl`
--
ALTER TABLE `address_tbl`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendance_tbl`
--
ALTER TABLE `attendance_tbl`
  MODIFY `att_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `case_tbl`
--
ALTER TABLE `case_tbl`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `configuration_tbl`
--
ALTER TABLE `configuration_tbl`
  MODIFY `cf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts_tbl`
--
ALTER TABLE `contacts_tbl`
  MODIFY `ct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `educational_background_tbl`
--
ALTER TABLE `educational_background_tbl`
  MODIFY `eb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `emergency_tbl`
--
ALTER TABLE `emergency_tbl`
  MODIFY `em_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `intern_tbl`
--
ALTER TABLE `intern_tbl`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `parent_tbl`
--
ALTER TABLE `parent_tbl`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reviews_tbl`
--
ALTER TABLE `reviews_tbl`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supervisor_tbl`
--
ALTER TABLE `supervisor_tbl`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
