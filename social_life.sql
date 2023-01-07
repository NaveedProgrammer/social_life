-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2023 at 01:48 PM
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
-- Database: `social_life`
--

-- --------------------------------------------------------

--
-- Table structure for table `city_table`
--

CREATE TABLE `city_table` (
  `city_id` double NOT NULL,
  `city_name` varchar(50) NOT NULL,
  `city_state` double NOT NULL,
  `city_country` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment_table`
--

CREATE TABLE `comment_table` (
  `comment_id` double NOT NULL,
  `comment_user_id` double NOT NULL,
  `comment_post_id` double NOT NULL,
  `comment_text` longtext NOT NULL,
  `comment_current_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `country_table`
--

CREATE TABLE `country_table` (
  `country_id` double NOT NULL,
  `country_name` varchar(50) NOT NULL DEFAULT 'NOT NULL'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `friend_table`
--

CREATE TABLE `friend_table` (
  `friend_id` double NOT NULL,
  `friend_user_id_from` double DEFAULT NULL,
  `friend_user_id_to` double DEFAULT NULL,
  `friend_status` tinyint(4) DEFAULT NULL,
  `friend_created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `like_table`
--

CREATE TABLE `like_table` (
  `like_id` double NOT NULL,
  `like_user_id` double NOT NULL,
  `like_post_id` double NOT NULL,
  `like_type` varchar(50) NOT NULL,
  `like_current_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_table`
--

CREATE TABLE `post_table` (
  `post_id` double NOT NULL,
  `post_user_id` double NOT NULL,
  `post_datetime` datetime NOT NULL DEFAULT current_timestamp(),
  `post_type` varchar(50) NOT NULL,
  `post_privacy` varchar(50) NOT NULL DEFAULT 'Public',
  `post_text` longtext DEFAULT 'NULL',
  `post_video` longblob DEFAULT 'NULL',
  `post_image` blob DEFAULT 'NULL'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `states_table`
--

CREATE TABLE `states_table` (
  `state_id` double NOT NULL,
  `state_name` varchar(50) NOT NULL,
  `state_country_id` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` double NOT NULL,
  `user_firstname` varchar(50) NOT NULL,
  `user_lastname` varchar(50) NOT NULL,
  `user_username` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_gender` varchar(50) NOT NULL,
  `user_phone` varchar(50) NOT NULL,
  `user_profile_image` blob DEFAULT NULL,
  `user_cover_image` longblob DEFAULT NULL,
  `user_date_of_birth` date DEFAULT NULL,
  `user_city` double NOT NULL,
  `user_marital_status` varchar(50) DEFAULT NULL,
  `user_is_login` tinyint(4) NOT NULL DEFAULT 0,
  `user_created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city_table`
--
ALTER TABLE `city_table`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `state_id` (`city_state`),
  ADD KEY `country_id` (`city_country`);

--
-- Indexes for table `comment_table`
--
ALTER TABLE `comment_table`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `user_id_comment_fk` (`comment_user_id`),
  ADD KEY `post_id_comment_fk` (`comment_post_id`);

--
-- Indexes for table `country_table`
--
ALTER TABLE `country_table`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `friend_table`
--
ALTER TABLE `friend_table`
  ADD PRIMARY KEY (`friend_id`),
  ADD KEY `user_id_from_fk` (`friend_user_id_from`),
  ADD KEY `user_id_to_fk` (`friend_user_id_to`);

--
-- Indexes for table `like_table`
--
ALTER TABLE `like_table`
  ADD PRIMARY KEY (`like_id`),
  ADD KEY `user_id_like_fk` (`like_user_id`),
  ADD KEY `post_id_like_fk` (`like_post_id`);

--
-- Indexes for table `post_table`
--
ALTER TABLE `post_table`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user_id_post_fk` (`post_user_id`);

--
-- Indexes for table `states_table`
--
ALTER TABLE `states_table`
  ADD PRIMARY KEY (`state_id`),
  ADD KEY `country_id_fk` (`state_country_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD KEY `city_user_city` (`user_city`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city_table`
--
ALTER TABLE `city_table`
  MODIFY `city_id` double NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `country_table`
--
ALTER TABLE `country_table`
  MODIFY `country_id` double NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `friend_table`
--
ALTER TABLE `friend_table`
  MODIFY `friend_id` double NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `states_table`
--
ALTER TABLE `states_table`
  MODIFY `state_id` double NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` double NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city_table`
--
ALTER TABLE `city_table`
  ADD CONSTRAINT `country_id` FOREIGN KEY (`city_country`) REFERENCES `country_table` (`country_id`),
  ADD CONSTRAINT `state_id` FOREIGN KEY (`city_state`) REFERENCES `states_table` (`state_id`);

--
-- Constraints for table `comment_table`
--
ALTER TABLE `comment_table`
  ADD CONSTRAINT `post_id_comment_fk` FOREIGN KEY (`comment_post_id`) REFERENCES `post_table` (`post_id`),
  ADD CONSTRAINT `user_id_comment_fk` FOREIGN KEY (`comment_user_id`) REFERENCES `user_table` (`user_id`);

--
-- Constraints for table `friend_table`
--
ALTER TABLE `friend_table`
  ADD CONSTRAINT `user_id_from_fk` FOREIGN KEY (`friend_user_id_from`) REFERENCES `user_table` (`user_id`),
  ADD CONSTRAINT `user_id_to_fk` FOREIGN KEY (`friend_user_id_to`) REFERENCES `user_table` (`user_id`);

--
-- Constraints for table `like_table`
--
ALTER TABLE `like_table`
  ADD CONSTRAINT `post_id_like_fk` FOREIGN KEY (`like_post_id`) REFERENCES `post_table` (`post_id`),
  ADD CONSTRAINT `user_id_like_fk` FOREIGN KEY (`like_user_id`) REFERENCES `user_table` (`user_id`);

--
-- Constraints for table `post_table`
--
ALTER TABLE `post_table`
  ADD CONSTRAINT `user_id_post_fk` FOREIGN KEY (`post_user_id`) REFERENCES `user_table` (`user_id`);

--
-- Constraints for table `states_table`
--
ALTER TABLE `states_table`
  ADD CONSTRAINT `country_id_fk` FOREIGN KEY (`state_country_id`) REFERENCES `country_table` (`country_id`);

--
-- Constraints for table `user_table`
--
ALTER TABLE `user_table`
  ADD CONSTRAINT `city_user_city` FOREIGN KEY (`user_city`) REFERENCES `city_table` (`city_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
