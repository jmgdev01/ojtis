-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2023 at 04:14 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
  `cf_id` int(11) DEFAULT NULL,
  `tr_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts_tbl`
--

INSERT INTO `accounts_tbl` (`acc_id`, `acc_email_address`, `acc_password`, `acc_role`, `acc_date_reg`, `i_id`, `s_id`, `a_id`, `cf_id`, `tr_id`) VALUES
(1, 'intern@gmail.com', '123456', 'intern', '2023-02-20', 1, 1, NULL, 1, 2),
(2, 'admin@gmail.com', '123456', 'admin', '2023-02-22', NULL, NULL, 1, NULL, NULL),
(3, 'trainer@gmail.com', '123456', 'trainer', '2023-02-01', NULL, 1, NULL, NULL, 1),
(4, 'supervisor@gmail.com', '123456', 'supervisor', '2023-02-23', NULL, 1, NULL, NULL, NULL),
(5, 'jmg@gmail.com', '123456', 'intern', '2023-02-24', 2, NULL, NULL, NULL, NULL),
(7, 'admin12@gmail.com', '123456', 'intern', '2023-02-24', 4, NULL, NULL, NULL, NULL),
(8, 'qw@gmail.com', '123456', 'intern', '2023-02-24', 5, NULL, NULL, NULL, NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address_tbl`
--

INSERT INTO `address_tbl` (`ad_id`, `ad_street`, `ad_barangay`, `ad_municipality`, `ad_zipcode`, `ad_province`, `i_id`, `s_id`) VALUES
(1, '', 'San Isidro', 'Buenavista', 5044, 'Guimaras', 1, 0),
(2, '1', '1', '1', 1, '1', 2, 0),
(3, '2', '2', '2', 2, '2', 3, 0),
(4, '3', '3', '3', 3, '3', 4, 0),
(5, '1', '1', '1', 1, '1', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `a_id` int(11) NOT NULL,
  `a_fullname` varchar(255) NOT NULL,
  `a_img` text NOT NULL,
  `a_mobile` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`a_id`, `a_fullname`, `a_img`, `a_mobile`) VALUES
(1, 'Kem Gallo', '../../assets/profile/calendar--v1.png', '09123456789');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_tbl`
--

CREATE TABLE `attendance_tbl` (
  `att_id` int(11) NOT NULL,
  `att_date` date NOT NULL,
  `att_time` time NOT NULL,
  `i_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `case_tbl`
--

INSERT INTO `case_tbl` (`c_id`, `c_physical_disability`, `c_mental_disability`, `c_criminal_liability`, `i_id`) VALUES
(1, '', '', '', 1),
(2, '', '', '', 2),
(3, '2', '2', '2', 3),
(4, '3', '3', '3', 4),
(5, '11212', '1', '1', 5);

-- --------------------------------------------------------

--
-- Table structure for table `configuration_tbl`
--

CREATE TABLE `configuration_tbl` (
  `cf_id` int(11) NOT NULL,
  `cf_subject_code` varchar(20) NOT NULL,
  `cf_subject` varchar(255) NOT NULL,
  `cf_hours` int(11) NOT NULL,
  `cf_hours_inwords` varchar(255) NOT NULL,
  `cf_week_equivalent` varchar(255) NOT NULL,
  `cf_start_date` date NOT NULL,
  `cf_address` varchar(255) NOT NULL,
  `cf_school` varchar(255) NOT NULL,
  `cf_campus` varchar(50) NOT NULL,
  `cf_department` varchar(150) NOT NULL,
  `cf_program` text NOT NULL,
  `cf_speriod` date NOT NULL,
  `cf_eperiod` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `configuration_tbl`
--

INSERT INTO `configuration_tbl` (`cf_id`, `cf_subject_code`, `cf_subject`, `cf_hours`, `cf_hours_inwords`, `cf_week_equivalent`, `cf_start_date`, `cf_address`, `cf_school`, `cf_campus`, `cf_department`, `cf_program`, `cf_speriod`, `cf_eperiod`) VALUES
(1, 'Practicum 000', 'Practicum/Internship', 500, 'Five Hundred', '3 months and 3 weeks', '2023-02-13', 'Alaguisoc, Jordan, Guimaras', 'Guimaras State University', 'Mosqueda Campus', 'College of Science and Technology', 'Bachelor of Science in Information Technology', '2023-02-01', '2023-05-31'),
(2, 'Practicum 000', 'Practicum/Internship', 500, 'Five Hundred', '3 months and 3 weeks', '2023-02-13', 'Alaguisoc, Jordan, Guimaras', 'Guimaras State University', 'Mosqueda Campus', 'College of Science and Technology', 'Bachelor of Science in Information Systems', '2022-02-01', '2022-05-31'),
(3, 'Practicum 000', 'Practicum/Internship', 500, 'Five Hundred', '3 months and 3 weeks', '2023-02-13', 'Alaguisoc, Jordan, Guimaras', 'Guimaras State University', 'Mosqueda Campus', 'College of Business Management', 'Bachelor of Science in Business Administration', '2023-02-01', '2023-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `contacts_tbl`
--

CREATE TABLE `contacts_tbl` (
  `ct_id` int(11) NOT NULL,
  `ct_email_address` varchar(150) NOT NULL,
  `ct_mobile_no` varchar(15) NOT NULL,
  `i_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts_tbl`
--

INSERT INTO `contacts_tbl` (`ct_id`, `ct_email_address`, `ct_mobile_no`, `i_id`) VALUES
(1, 'jmgadot.official@gmail.com', '09650647123', 1),
(2, '1', '1', 2),
(3, '2', '2', 3),
(4, '3@gmail.com', '3', 4),
(5, 'jmg25@gmail.com', '1', 5);

-- --------------------------------------------------------

--
-- Table structure for table `educational_background_tbl`
--

CREATE TABLE `educational_background_tbl` (
  `eb_id` int(11) NOT NULL,
  `eb_elementary` varchar(150) NOT NULL,
  `eb_elem_year` varchar(15) NOT NULL,
  `eb_secondary` varchar(150) NOT NULL,
  `eb_sec_year` varchar(15) NOT NULL,
  `eb_shs` varchar(150) NOT NULL,
  `eb_shs_year` varchar(15) NOT NULL,
  `eb_tertiary` varchar(150) NOT NULL,
  `eb_ter_year` varchar(15) NOT NULL,
  `eb_course_code` varchar(10) NOT NULL,
  `eb_course_description` varchar(255) NOT NULL,
  `eb_year` int(11) NOT NULL,
  `eb_section` varchar(5) NOT NULL,
  `eb_curriculum` varchar(255) NOT NULL,
  `eb_id_number` varchar(20) NOT NULL,
  `i_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `educational_background_tbl`
--

INSERT INTO `educational_background_tbl` (`eb_id`, `eb_elementary`, `eb_elem_year`, `eb_secondary`, `eb_sec_year`, `eb_shs`, `eb_shs_year`, `eb_tertiary`, `eb_ter_year`, `eb_course_code`, `eb_course_description`, `eb_year`, `eb_section`, `eb_curriculum`, `eb_id_number`, `i_id`) VALUES
(1, 'San Isidro Elementary School', '2005-2011', 'Agsanayan National High School', '2011-2015', 'Agsanayan National High School', '2015-2017', 'Guimaras State College', '2017-2021', 'BSIT', 'Bachelor of Science in Information Technology', 4, 'C', 'Information Technology', 'GSC-15-0437', 1),
(2, '1', '1', '1', '1', '', '', '1', '1', '1', '1', 4, '1', '1', '1', 2),
(3, '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', 4, '2', '2', '2', 3),
(4, '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', 4, '3', '3', '3', 4),
(5, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 4, '1', '1', '1', 5);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emergency_tbl`
--

INSERT INTO `emergency_tbl` (`em_id`, `em_guardian`, `em_relationship`, `em_address`, `em_contact`, `i_id`) VALUES
(1, 'Emcy N. Gadot', 'Mother', 'San Isidro, Buenavista, Guimaras', '09123456789', 1),
(2, '1', '1', '1', '1', 2),
(3, '2', '2', '2', '2', 3),
(4, '3', '3', '3', '3', 4),
(5, '1', '1', '1', '1', 5);

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
  `i_religion` varchar(100) NOT NULL,
  `i_nationality` varchar(100) NOT NULL,
  `i_comp_knowledge_skills` text NOT NULL,
  `i_training_seminar` text NOT NULL,
  `i_work_experience` text NOT NULL,
  `i_membership` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intern_tbl`
--

INSERT INTO `intern_tbl` (`i_id`, `i_code`, `i_first_name`, `i_middle_name`, `i_last_name`, `i_suffix_name`, `i_img`, `i_sex`, `i_civil_status`, `i_height`, `i_weight`, `i_birth_date`, `i_age`, `i_place_birth`, `i_religion`, `i_nationality`, `i_comp_knowledge_skills`, `i_training_seminar`, `i_work_experience`, `i_membership`) VALUES
(1, 'IN_230220_0001', 'John Michael', 'Navanes', 'Gadot', 'Jr.', '../../assets/profile/calendar--v1.png', 'Male', 'Single', 172, 52, '1999-02-01', 24, 'Iloilo City, Iloilo', 'Roman Catholic', 'Filipino', 'Graphic Design; Web Development; Database Management;', 'Python Programming (DICT Region IV); User Experience Design (STI Manila);', 'Web Developer1', 'Buenavista Municipal Scholarship Program1'),
(2, 'IN_230224_0002', '1', '', '1', 'Jr.', '', 'Male', 'Single', 1, 1, '2023-02-24', 1, '1', '', '1', '', '', '', ''),
(3, 'IN_230224_0003', '2', '2', '2', 'Jr.', '', 'Male', 'Single', 2, 2, '2023-02-24', 2, '2', '', '2', '2', '2', '2', '2'),
(4, 'IN_230224_0004', 'John Michael', '3', '3', 'Jr.', '../../assets/profile/gsu-logo.png', 'Male', 'Single', 3, 3, '2023-02-24', 3, '3', '', '3', '3', '3', '3', '3'),
(5, 'IN_230224_0005', '1', '1', '1', 'Jr.', '../../assets/profile/gsu-logo.png', 'Male', 'Single', 1, 1, '2023-02-24', 1, '1', '', '1', '1', '1', '1', '1');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent_tbl`
--

INSERT INTO `parent_tbl` (`p_id`, `p_father`, `p_father_occupation`, `p_mother`, `p_mother_occupation`, `p_address`, `i_id`) VALUES
(1, 'Teodolfo J. Gadot', 'Laborer', 'Emcy N. Gadot', 'Housewife', 'San Isidro, Buenavista, Guimaras', 1),
(2, '1', '1', '1', '1', '1', 2),
(3, '2', '2', '2', '2', '2', 3),
(4, '3', '3', '3', '3', '3', 4),
(5, '1qwqw', '1', '1', '1', '1', 5);

-- --------------------------------------------------------

--
-- Table structure for table `ratings_tbl`
--

CREATE TABLE `ratings_tbl` (
  `rt_id` int(11) NOT NULL,
  `rt_1` int(11) NOT NULL,
  `rt_2` int(11) NOT NULL,
  `rt_3` int(11) NOT NULL,
  `rt_4` int(11) NOT NULL,
  `rt_5` int(11) NOT NULL,
  `rt_6` int(11) NOT NULL,
  `rt_7` int(11) NOT NULL,
  `rt_8` int(11) NOT NULL,
  `rt_9` int(11) NOT NULL,
  `rt_10` int(11) NOT NULL,
  `rt_11` int(11) NOT NULL,
  `rt_12` int(11) NOT NULL,
  `rt_13` int(11) NOT NULL,
  `rt_14` int(11) NOT NULL,
  `rt_15` int(11) NOT NULL,
  `rt_16` int(11) NOT NULL,
  `rt_17` int(11) NOT NULL,
  `rt_18` int(11) NOT NULL,
  `rt_19` int(11) NOT NULL,
  `rt_20` int(11) NOT NULL,
  `rt_21` int(11) NOT NULL,
  `rt_22` int(11) NOT NULL,
  `rt_23` int(11) NOT NULL,
  `i_id` int(11) NOT NULL,
  `tr_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reviews_tbl`
--

CREATE TABLE `reviews_tbl` (
  `r_id` int(11) NOT NULL,
  `r_activity` text NOT NULL,
  `r_rating` int(11) NOT NULL,
  `att_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `signatories_tbl`
--

CREATE TABLE `signatories_tbl` (
  `sg_id` int(11) NOT NULL,
  `sg_name1` varchar(150) NOT NULL,
  `sg_designation1` varchar(100) NOT NULL,
  `sg_office1` varchar(150) NOT NULL,
  `sg_name2` varchar(150) NOT NULL,
  `sg_designation2` varchar(100) NOT NULL,
  `sg_office2` varchar(150) NOT NULL,
  `sg_name3` varchar(150) NOT NULL,
  `sg_designation3` varchar(100) NOT NULL,
  `sg_office3` varchar(150) NOT NULL,
  `sg_name4` varchar(150) NOT NULL,
  `sg_designation4` varchar(100) NOT NULL,
  `sg_office4` varchar(150) NOT NULL,
  `cf_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signatories_tbl`
--

INSERT INTO `signatories_tbl` (`sg_id`, `sg_name1`, `sg_designation1`, `sg_office1`, `sg_name2`, `sg_designation2`, `sg_office2`, `sg_name3`, `sg_designation3`, `sg_office3`, `sg_name4`, `sg_designation4`, `sg_office4`, `cf_id`) VALUES
(1, 'JAMES RYAN B. GA, MIT', 'OJT Instructor', 'Guimaras State University', 'SIMEON J. CAINDAY III, Ph.D.', 'Dean, College of Science and Technology', 'Guimaras State University', 'RUBY D. CATALAN, Ph.D.', 'Vice President for Academic Affairs', 'Guimaras State University', 'LILIAN DIANA B. PARRE??O, Ph.D.', 'University President', 'Guimaras State University', 1);

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
  `s_extension` varchar(20) NOT NULL,
  `s_img` text NOT NULL,
  `s_sex` varchar(10) NOT NULL,
  `s_mobile` varchar(15) NOT NULL,
  `s_agency` varchar(50) NOT NULL,
  `s_office` varchar(50) NOT NULL,
  `s_designation` varchar(20) NOT NULL,
  `s_salutation` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supervisor_tbl`
--

INSERT INTO `supervisor_tbl` (`s_id`, `s_first_name`, `s_middle_name`, `s_last_name`, `s_suffix_name`, `s_extension`, `s_img`, `s_sex`, `s_mobile`, `s_agency`, `s_office`, `s_designation`, `s_salutation`) VALUES
(1, 'Adrian', 'Jaleco', 'Forca', 'Jr.', 'MIT', '../../assets/profile/gsu-logo.png', 'Male', '09123456789', 'Guimaras State University - Salvador Campus', 'ICT Office', 'ICT Director', 'Director'),
(2, 'Annalyn', 'Santos', 'Tumapang', '', '', '../../assets/profile/gsu-logo.png', 'Female', '09123456789', 'Guimaras State University - Mosqueda Campus', 'Accounting Office', 'Budget Director', 'Director');

-- --------------------------------------------------------

--
-- Table structure for table `trainer_tbl`
--

CREATE TABLE `trainer_tbl` (
  `tr_id` int(11) NOT NULL,
  `tr_first_name` varchar(150) NOT NULL,
  `tr_middle_name` varchar(100) NOT NULL,
  `tr_last_name` varchar(150) NOT NULL,
  `tr_suffix_name` varchar(5) NOT NULL,
  `tr_sex` varchar(10) NOT NULL,
  `tr_img` text NOT NULL,
  `tr_mobile` varchar(15) NOT NULL,
  `s_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainer_tbl`
--

INSERT INTO `trainer_tbl` (`tr_id`, `tr_first_name`, `tr_middle_name`, `tr_last_name`, `tr_suffix_name`, `tr_sex`, `tr_img`, `tr_mobile`, `s_id`) VALUES
(1, 'Jun Hendrex', '', 'Escarilla', '', 'Male', '../../assets/profile/socotec-pab.png', '09650647123', 1),
(2, 'Kem', '', 'Gallo', '', 'Male', '../../assets/profile/socotec-pab.png', '09650647123', 1);

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
-- Indexes for table `ratings_tbl`
--
ALTER TABLE `ratings_tbl`
  ADD PRIMARY KEY (`rt_id`);

--
-- Indexes for table `reviews_tbl`
--
ALTER TABLE `reviews_tbl`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `signatories_tbl`
--
ALTER TABLE `signatories_tbl`
  ADD PRIMARY KEY (`sg_id`);

--
-- Indexes for table `supervisor_tbl`
--
ALTER TABLE `supervisor_tbl`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `trainer_tbl`
--
ALTER TABLE `trainer_tbl`
  ADD PRIMARY KEY (`tr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts_tbl`
--
ALTER TABLE `accounts_tbl`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `address_tbl`
--
ALTER TABLE `address_tbl`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `configuration_tbl`
--
ALTER TABLE `configuration_tbl`
  MODIFY `cf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts_tbl`
--
ALTER TABLE `contacts_tbl`
  MODIFY `ct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `educational_background_tbl`
--
ALTER TABLE `educational_background_tbl`
  MODIFY `eb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `emergency_tbl`
--
ALTER TABLE `emergency_tbl`
  MODIFY `em_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `intern_tbl`
--
ALTER TABLE `intern_tbl`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `parent_tbl`
--
ALTER TABLE `parent_tbl`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ratings_tbl`
--
ALTER TABLE `ratings_tbl`
  MODIFY `rt_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews_tbl`
--
ALTER TABLE `reviews_tbl`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `signatories_tbl`
--
ALTER TABLE `signatories_tbl`
  MODIFY `sg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `supervisor_tbl`
--
ALTER TABLE `supervisor_tbl`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trainer_tbl`
--
ALTER TABLE `trainer_tbl`
  MODIFY `tr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
