-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2019 at 07:20 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school-management`
--

-- --------------------------------------------------------

--
-- Table structure for table `cruds`
--

CREATE TABLE `cruds` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `status` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cruds`
--

INSERT INTO `cruds` (`id`, `name`, `email`, `designation`, `phone_no`, `gender`, `status`, `created_at`, `updated_at`) VALUES
(3, 'sandeep gour', 'sandeep@gmail.com', 'developers and desinger', '9087654321', 'Female', '0', '2019-07-25 19:13:26', '2019-07-21 10:35:27'),
(4, 'abhishek koal', 'abhishek@gmail.com', 'fresher', '9087654321', 'Male', '1', '2019-07-22 05:30:44', '2019-07-22 05:30:44'),
(5, 'rahul pandey', 'rahul@gmail.com', 'student', '8907654321', 'Male', '1', '2019-07-22 05:31:31', '2019-07-22 05:31:31');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_classes`
--

CREATE TABLE `tbl_classes` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `class_section_id` int(11) NOT NULL,
  `seat_available` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_classes`
--

INSERT INTO `tbl_classes` (`id`, `name`, `class_section_id`, `seat_available`, `status`, `created_at`, `updated_at`) VALUES
(1, 'LKG', 1, '100', '1', '2019-07-20 01:32:04', '2019-07-20 07:02:04'),
(2, 'LKG', 2, '100', '1', '2019-07-20 01:32:41', '2019-07-20 07:02:41'),
(3, 'LKG', 3, '75', '1', '2019-07-20 01:32:59', '2019-07-20 07:02:59'),
(4, 'UKG', 1, '100', '1', '2019-07-20 01:34:35', '2019-07-20 07:04:35'),
(5, 'UKG', 2, '100', '1', '2019-07-20 01:34:52', '2019-07-20 07:04:52'),
(6, 'UKG', 3, '75', '1', '2019-07-20 01:35:03', '2019-07-20 07:05:03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_class_sections`
--

CREATE TABLE `tbl_class_sections` (
  `id` int(11) NOT NULL,
  `section` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_class_sections`
--

INSERT INTO `tbl_class_sections` (`id`, `section`, `status`, `created_at`, `updated_at`) VALUES
(1, 'A', '1', '2019-07-18 06:41:03', '2019-07-18 12:11:03'),
(2, 'B', '1', '2019-07-18 06:41:12', '2019-07-18 12:11:12'),
(3, 'C', '1', '2019-07-18 06:41:20', '2019-07-18 12:11:20'),
(4, 'D', '1', '2019-07-18 06:41:44', '2019-07-18 12:11:44'),
(5, 'E', '1', '2019-07-18 07:02:16', '2019-07-18 12:32:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faculties`
--

CREATE TABLE `tbl_faculties` (
  `id` int(11) NOT NULL,
  `faculty_type_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `phone_no` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `profile_photo` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faculty_types`
--

CREATE TABLE `tbl_faculty_types` (
  `id` int(11) NOT NULL,
  `type` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_genders`
--

CREATE TABLE `tbl_genders` (
  `id` int(11) NOT NULL,
  `type` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_students`
--

CREATE TABLE `tbl_students` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `reg_no` varchar(200) NOT NULL,
  `roll_no` varchar(200) NOT NULL,
  `gender_id` varchar(200) NOT NULL,
  `phone_no` int(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `profile_photo` varchar(200) NOT NULL,
  `father_name` varchar(200) NOT NULL,
  `mother_name` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `status` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_classes`
--

CREATE TABLE `tbl_student_classes` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cruds`
--
ALTER TABLE `cruds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_classes`
--
ALTER TABLE `tbl_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_class_sections`
--
ALTER TABLE `tbl_class_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_faculties`
--
ALTER TABLE `tbl_faculties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_faculty_types`
--
ALTER TABLE `tbl_faculty_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_genders`
--
ALTER TABLE `tbl_genders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_students`
--
ALTER TABLE `tbl_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_student_classes`
--
ALTER TABLE `tbl_student_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cruds`
--
ALTER TABLE `cruds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_classes`
--
ALTER TABLE `tbl_classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_class_sections`
--
ALTER TABLE `tbl_class_sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_faculties`
--
ALTER TABLE `tbl_faculties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_faculty_types`
--
ALTER TABLE `tbl_faculty_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_genders`
--
ALTER TABLE `tbl_genders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_students`
--
ALTER TABLE `tbl_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_student_classes`
--
ALTER TABLE `tbl_student_classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
